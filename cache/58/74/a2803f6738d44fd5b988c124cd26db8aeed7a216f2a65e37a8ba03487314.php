<?php

/* _header.twig */
class __TwigTemplate_5874a2803f6738d44fd5b988c124cd26db8aeed7a216f2a65e37a8ba03487314 extends Twig_Template
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
        echo "<div class=\"container\" style=\"max-width:1000px;\">";
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
        return array (  116 => 43,  113 => 42,  108 => 30,  99 => 11,  96 => 10,  92 => 49,  90 => 47,  86 => 45,  84 => 42,  80 => 41,  76 => 40,  71 => 38,  63 => 32,  61 => 29,  43 => 14,  40 => 13,  38 => 10,  32 => 9,  22 => 1,  473 => 14,  469 => 13,  465 => 12,  460 => 11,  457 => 10,  451 => 8,  446 => 7,  443 => 6,  438 => 4,  435 => 3,  387 => 284,  316 => 215,  313 => 213,  309 => 210,  299 => 206,  295 => 205,  291 => 203,  287 => 201,  283 => 199,  281 => 198,  276 => 195,  272 => 193,  268 => 191,  264 => 189,  262 => 188,  255 => 184,  251 => 183,  247 => 182,  243 => 181,  239 => 180,  235 => 179,  231 => 178,  227 => 177,  224 => 176,  220 => 175,  200 => 157,  180 => 138,  174 => 137,  172 => 136,  165 => 135,  160 => 134,  158 => 133,  112 => 89,  110 => 88,  105 => 29,  83 => 63,  72 => 61,  68 => 60,  31 => 25,  23 => 18,  21 => 2,  19 => 1,);
    }
}
