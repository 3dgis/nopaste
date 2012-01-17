<?php

/* browse.html */
class __TwigTemplate_76a4902529780215a23509b997457e38 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Last 50 snippets</h1>
<ul>
";
        // line 3
        if (isset($context["snippets"])) { $_snippets_ = $context["snippets"]; } else { $_snippets_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_snippets_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "    <li><a href=\"";
            if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
            echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
            echo "/id/";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id"), "html", null, true);
            echo "/\">";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name"), "html", null, true);
            echo "</a> (";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "timestamp"), "html", null, true);
            echo " | ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "author"), "html", null, true);
            echo " | ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "language"), "html", null, true);
            echo ")</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 6
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "browse.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
