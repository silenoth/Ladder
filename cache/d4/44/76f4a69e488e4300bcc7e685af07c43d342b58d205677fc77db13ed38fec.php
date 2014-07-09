<?php

/* _header.twig */
class __TwigTemplate_d44476f4a69e488e4300bcc7e685af07c43d342b58d205677fc77db13ed38fec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
        echo "/img/ico/favicon.png\" />
    ";
        // line 10
        $this->displayBlock('titulo', $context, $blocks);
        // line 13
        echo "    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/css/bootstrap.css\" rel=\"stylesheet\" />
    <style id=\"holderjs-style\" type=\"text/css\"></style>
    <style type=\"text/css\">
    .bs-footer {
        text-align: left;
        }
        .bs-footer {
        padding-top: 40px;
        padding-bottom: 30px;
        margin-top: 100px;
        color: #777;
        text-align: center;
        border-top: 1px solid #e5e5e5;
        }
    </style>
    ";
        // line 29
        $this->displayBlock('css', $context, $blocks);
        // line 32
        echo "    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/jquery-2.1.0.min.js\" type=\"text/javascript\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootbox.min.js\"></script>
    ";
        // line 42
        $this->displayBlock('js', $context, $blocks);
        // line 45
        echo "  </head>
  <body>
";
        // line 47
        $this->env->loadTemplate("navbar.twig")->display($context);
        // line 49
        echo "<div class=\"container\" style=\"width:1000px;\">";
    }

    // line 10
    public function block_titulo($context, array $blocks = array())
    {
        // line 11
        echo "    <title>";
        echo "</title>
    ";
    }

    // line 29
    public function block_css($context, array $blocks = array())
    {
        // line 30
        echo "    <!-- Extras css files -->
    ";
    }

    // line 42
    public function block_js($context, array $blocks = array())
    {
        // line 43
        echo "    <!-- Extras js files -->
    ";
    }

    public function getTemplateName()
    {
        return "_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 43,  113 => 42,  108 => 30,  105 => 29,  99 => 11,  96 => 10,  92 => 49,  90 => 47,  84 => 42,  80 => 41,  76 => 40,  71 => 38,  63 => 32,  61 => 29,  43 => 14,  40 => 13,  38 => 10,  32 => 9,  22 => 1,  340 => 4,  337 => 3,  291 => 118,  289 => 117,  285 => 115,  282 => 114,  279 => 113,  276 => 112,  273 => 110,  262 => 109,  252 => 108,  249 => 107,  247 => 106,  245 => 105,  239 => 104,  237 => 103,  232 => 101,  228 => 100,  218 => 97,  209 => 93,  202 => 89,  198 => 88,  189 => 87,  183 => 86,  172 => 82,  163 => 80,  160 => 79,  155 => 78,  152 => 77,  145 => 72,  141 => 70,  138 => 68,  132 => 67,  130 => 66,  120 => 59,  114 => 56,  109 => 54,  103 => 51,  93 => 48,  86 => 45,  77 => 45,  72 => 44,  70 => 43,  67 => 42,  65 => 41,  51 => 29,  45 => 25,  36 => 18,  25 => 8,  23 => 7,  21 => 2,  19 => 1,);
    }
}
