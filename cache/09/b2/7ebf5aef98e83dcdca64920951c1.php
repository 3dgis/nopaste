<?php

/* index.html */
class __TwigTemplate_09b27ebf5aef98e83dcdca64920951c1 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
<title>";
        // line 5
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "NoPaste | 3DGIS</title>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "/css/nopaste.css\" />
<script type=\"text/javascript\" src=\"";
        // line 7
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "/lib/jquery-1.7.1.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 8
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "/lib/syntax/scripts/shCore.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 9
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "/lib/syntax/scripts/shAutoloader.js\"></script>
<link href=\"";
        // line 10
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "/lib/syntax/styles/shCore.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 11
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "/lib/syntax/styles/shThemeDefault.css\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body>
<div id=\"bodycontent\">
";
        // line 15
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $_content_;
        echo "
</div>
<div id=\"footer\">
<a href=\"";
        // line 18
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "/browse/\">Last 50 snippets</a>
<a href=\"";
        // line 19
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "\">New paste</a>
</div>
<script type=\"text/javascript\">
\tfunction path()
\t{
\t  var args = arguments,
\t      result = []
\t      ;
\t       
\t  for(var i = 0; i < args.length; i++)
\t      result.push(args[i].replace('@', '";
        // line 29
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "/lib/syntax/scripts/'));
\t       
\t  return result
\t};
\t 
\tSyntaxHighlighter.autoloader.apply(null, path(
\t  'applescript            @shBrushAppleScript.js',
\t  'actionscript3 as3      @shBrushAS3.js',
\t  'bash shell             @shBrushBash.js',
\t  'coldfusion cf          @shBrushColdFusion.js',
\t  'cpp c                  @shBrushCpp.js',
\t  'c# c-sharp csharp      @shBrushCSharp.js',
\t  'css                    @shBrushCss.js',
\t  'delphi pascal          @shBrushDelphi.js',
\t  'diff patch pas         @shBrushDiff.js',
\t  'erl erlang             @shBrushErlang.js',
\t  'groovy                 @shBrushGroovy.js',
\t  'java                   @shBrushJava.js',
\t  'jfx javafx             @shBrushJavaFX.js',
\t  'js jscript javascript  @shBrushJScript.js',
\t  'perl pl                @shBrushPerl.js',
\t  'php                    @shBrushPhp.js',
\t  'text plain             @shBrushPlain.js',
\t  'py python              @shBrushPython.js',
\t  'ruby rails ror rb      @shBrushRuby.js',
\t  'sass scss              @shBrushSass.js',
\t  'scala                  @shBrushScala.js',
\t  'sql                    @shBrushSql.js',
\t  'vb vbnet               @shBrushVb.js',
\t  'xml xhtml xslt html    @shBrushXml.js'
\t));
     SyntaxHighlighter.all();
</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
