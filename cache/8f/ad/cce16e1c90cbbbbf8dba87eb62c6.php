<?php

/* form.html */
class __TwigTemplate_8fadcce16e1c90cbbbbf8dba87eb62c6 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>New snippet</h1>
<form method=\"POST\" action=\"index.php\">
\t<input type=\"hidden\" value=\"1\" name=\"submitpaste\" />
<div id=\"pasteform\">
\t<label for=\"name\">Name:</label>
\t<input id=\"name\" type=\"text\" name=\"name\" value=\"\" required />
\t<label for=\"language\">Language:</label>
\t<select name=\"language\" id=\"language\">
\t\t<option>AS3</option>
\t\t<option>AppleScript</option>
\t\t<option>Bash</option>
\t\t<option>CSharp</option>
\t\t<option>ColdFusion</option>
\t\t<option>Cpp</option>
\t\t<option>Css</option>
\t\t<option>Delphi</option>
\t\t<option>Diff</option>
\t\t<option>Erlang</option>
\t\t<option>Groovy</option>
\t\t<option selected=\"selected\">JScript</option>
\t\t<option>Java</option>
\t\t<option>JavaFX</option>
\t\t<option>Perl</option>
\t\t<option>Php</option>
\t\t<option>Plain</option>
\t\t<option>PowerShell</option>
\t\t<option>Python</option>
\t\t<option>Ruby</option>
\t\t<option>Sass</option>
\t\t<option>Scala</option>
\t\t<option>Sql</option>
\t\t<option>Vb</option>
\t\t<option>Xml</option>
\t</select>
\t<label for=\"author\">Author:</label>
\t<input id=\"author\" type=\"text\" name=\"author\" value=\"\" />
\t<label for=\"content\">Content:</label>
\t<textarea id=\"content\" name=\"content\" cols=\"100\" rows=\"20\" required></textarea>
\t<input type=\"submit\" name=\"submit\" value=\"Submit\" />
\t<input type=\"reset\" name=\"reset\" value=\"Reset\" />
</div>
</form>";
    }

    public function getTemplateName()
    {
        return "form.html";
    }

    public function isTraitable()
    {
        return true;
    }
}
