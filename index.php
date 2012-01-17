<?php
define ('APPLICATION_PATH', dirname(__FILE__));
require_once(APPLICATION_PATH.'/lib/Twig/Autoloader.php');
Twig_Autoloader::register();
require_once(APPLICATION_PATH.'/conf/config.php');

$loader = new Twig_Loader_Filesystem(APPLICATION_PATH.'/templates');
$twig = new Twig_Environment($loader, array(
  'cache' => APPLICATION_PATH.'/cache',
  'debug' => $config['debug']
));
$escaper = new Twig_Extension_Escaper(true);
$twig->addExtension($escaper);

// prepare template
$templateContent = array(
	'title' => '',
	'content' => '',
	'baseurl' => 'http://'.$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['PHP_SELF']), '/\\'),
);
if (!empty($_REQUEST['id']) && is_numeric($_REQUEST['id']) && $_REQUEST['id'] > 0) {
	// show requested paste
	$db = getDbh();
	if ($db) {
		$id = (int)$_REQUEST['id'];
		$sqlQuery = "SELECT * FROM snippet WHERE id = :id LIMIT 1";
		$statement = $db->prepare($sqlQuery);
		$statement->bindParam(':id', $id, PDO::PARAM_INT);
		$statement->execute();
		$paste = $statement->fetch(PDO::FETCH_ASSOC);
		$templateContent['title'] = "Paste ".$id." - ";
		$templateContent['content'] = $twig->render('paste.html', array(
			'paste' => $paste,
			'baseurl' => $templateContent['baseurl']
		));
	}
} else if (!empty($_REQUEST['browse']) && $_REQUEST['browse'] == 1) {
	// show browsing
	$db = getDbh();
	if ($db) {
		$sqlQuery = "SELECT id, name, author, timestamp, language FROM snippet ORDER BY timestamp DESC LIMIT 50";
		$statement = $db->prepare($sqlQuery);
		$statement->execute();
		$snippets = $statement->fetchAll(PDO::FETCH_ASSOC);
		$templateContent['title'] = "Browse last 50 - ";
		$templateContent['content'] = $twig->render('browse.html', array(
				'snippets' => $snippets,
				'baseurl' => $templateContent['baseurl']
		));
	}	
} else {
	// handle data input
	if (!empty($_POST['submitpaste']) && $_POST['submitpaste'] == 1) {
		$name = !empty($_POST['name']) ? $_POST['name'] : '';
		$body = !empty($_POST['content']) ? $_POST['content'] : '';
		$lang = !empty($_POST['language']) ? $_POST['language'] : 'Plain';
		$auth = !empty($_POST['author']) ? $_POST['author'] : '';
		// receive paste
		$db = getDbh();
		if ($db) {
			$sqlQuery = "INSERT INTO snippet (name, body, language, author) VALUES (:name, :body, :language, :author)";
			$statement = $db->prepare($sqlQuery);
			$statement->bindParam(':name', $name, PDO::PARAM_STR);
			$statement->bindParam(':body', $body, PDO::PARAM_STR);
			$statement->bindParam(':language', $lang, PDO::PARAM_STR);
			$statement->bindParam(':author', $auth, PDO::PARAM_STR);
			$statement->execute();
			$id = $db->lastInsertId();
			// redirect to paste page
			$host  = $_SERVER['HTTP_HOST'];
			$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			$extra = 'id/'.$id.'/';
			header("Location: http://$host$uri/$extra");
		}
	} else {
		// show form
		$templateContent['title'] = "New paste - ";
		$templateContent['content'] = $twig->render('form.html');
	}
}
// render template
echo $twig->render('index.html', $templateContent);
