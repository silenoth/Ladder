<?php

/* 404.twig */
class __TwigTemplate_715ac7b48a920065dc7a25fbd78b86b04846e0ef741f8f3c521df78789105511 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["error404"]) ? $context["error404"] : null), "html", null, true);
        echo " <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
        echo "/img/errors/error404.png\" alt=\"error404\"></h1>";
    }

    public function getTemplateName()
    {
        return "404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 121,  233 => 117,  228 => 115,  220 => 112,  215 => 110,  205 => 103,  196 => 96,  194 => 95,  187 => 88,  179 => 83,  176 => 82,  170 => 81,  157 => 79,  143 => 76,  135 => 75,  132 => 74,  126 => 72,  117 => 65,  104 => 60,  96 => 59,  72 => 47,  51 => 30,  118 => 45,  115 => 64,  110 => 32,  107 => 31,  101 => 11,  98 => 10,  94 => 51,  88 => 58,  86 => 44,  82 => 43,  78 => 42,  73 => 40,  65 => 34,  63 => 31,  43 => 14,  40 => 21,  38 => 20,  32 => 9,  22 => 1,  339 => 4,  336 => 3,  290 => 118,  288 => 117,  284 => 115,  281 => 114,  278 => 113,  275 => 112,  272 => 110,  261 => 109,  251 => 108,  248 => 107,  246 => 106,  244 => 105,  238 => 104,  236 => 103,  231 => 101,  227 => 100,  223 => 98,  217 => 97,  208 => 93,  201 => 89,  197 => 88,  188 => 87,  182 => 86,  171 => 82,  162 => 80,  159 => 79,  154 => 78,  151 => 78,  146 => 73,  144 => 72,  140 => 70,  137 => 68,  131 => 67,  129 => 66,  119 => 66,  113 => 56,  108 => 54,  102 => 51,  92 => 49,  85 => 46,  76 => 49,  71 => 44,  69 => 43,  66 => 42,  64 => 41,  50 => 29,  45 => 26,  36 => 18,  25 => 8,  23 => 7,  21 => 2,  19 => 1,);
    }
}
