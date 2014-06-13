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
        return array (  116 => 43,  113 => 42,  108 => 30,  99 => 11,  92 => 49,  90 => 47,  86 => 45,  84 => 42,  80 => 41,  76 => 40,  63 => 32,  61 => 29,  40 => 13,  38 => 10,  22 => 1,  382 => 25,  358 => 4,  355 => 3,  347 => 2,  300 => 97,  296 => 95,  294 => 94,  291 => 93,  287 => 90,  271 => 88,  268 => 87,  251 => 86,  246 => 83,  230 => 81,  227 => 80,  210 => 79,  205 => 76,  189 => 74,  186 => 73,  169 => 72,  164 => 69,  148 => 67,  145 => 66,  128 => 65,  123 => 62,  109 => 61,  105 => 29,  103 => 58,  96 => 10,  79 => 54,  73 => 50,  71 => 38,  68 => 48,  65 => 47,  62 => 46,  59 => 45,  56 => 44,  53 => 43,  47 => 39,  43 => 14,  37 => 37,  32 => 9,  26 => 29,  21 => 27,  19 => 1,);
    }
}
