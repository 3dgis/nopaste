<?php

/* paste.html */
class __TwigTemplate_d1fc785bdb64d29d3afe9457c8d8b2d5 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>";
        if (isset($context["paste"])) { $_paste_ = $context["paste"]; } else { $_paste_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paste_, "name"), "html", null, true);
        echo "</h1>
<pre class=\"brush: ";
        // line 2
        if (isset($context["paste"])) { $_paste_ = $context["paste"]; } else { $_paste_ = null; }
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($_paste_, "language")), "html", null, true);
        echo "\">
";
        // line 3
        if (isset($context["paste"])) { $_paste_ = $context["paste"]; } else { $_paste_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paste_, "body"), "html", null, true);
        echo "
</pre>
<hr/>
When: ";
        // line 6
        if (isset($context["paste"])) { $_paste_ = $context["paste"]; } else { $_paste_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paste_, "timestamp"), "html", null, true);
        echo "<br/>
Who: ";
        // line 7
        if (isset($context["paste"])) { $_paste_ = $context["paste"]; } else { $_paste_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paste_, "author"), "html", null, true);
        echo "<br/>
Language: ";
        // line 8
        if (isset($context["paste"])) { $_paste_ = $context["paste"]; } else { $_paste_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paste_, "language"), "html", null, true);
        echo "<br/>
Where: <a href=\"";
        // line 9
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "/id/";
        if (isset($context["paste"])) { $_paste_ = $context["paste"]; } else { $_paste_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paste_, "id"), "html", null, true);
        echo "/\">";
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "/id/";
        if (isset($context["paste"])) { $_paste_ = $context["paste"]; } else { $_paste_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paste_, "id"), "html", null, true);
        echo "/</a>";
    }

    public function getTemplateName()
    {
        return "paste.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
