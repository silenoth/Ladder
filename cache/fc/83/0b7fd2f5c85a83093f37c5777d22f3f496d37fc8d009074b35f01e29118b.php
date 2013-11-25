<?php

/* header.twig */
class __TwigTemplate_fc830b7fd2f5c85a83093f37c5777d22f3f496d37fc8d009074b35f01e29118b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
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

    <!-- Custom styles for this template -->
    <link href=\"navbar-static-top.css\" rel=\"stylesheet\" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://code.jquery.com/jquery.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootbox.min.js\"></script>
  </head>
  <body>";
    }

    // line 10
    public function block_titulo($context, array $blocks = array())
    {
        // line 11
        echo "    <title>Static Top Navbar Example for Bootstrap</title>
    ";
    }

    public function getTemplateName()
    {
        return "header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  69 => 10,  58 => 28,  41 => 14,  36 => 10,  30 => 9,  20 => 1,  279 => 3,  276 => 2,  229 => 135,  227 => 134,  224 => 133,  222 => 132,  211 => 127,  204 => 123,  200 => 122,  196 => 121,  187 => 117,  182 => 115,  179 => 114,  174 => 113,  168 => 108,  165 => 106,  159 => 105,  157 => 104,  147 => 97,  141 => 94,  136 => 92,  130 => 89,  120 => 84,  115 => 83,  110 => 82,  108 => 81,  105 => 80,  103 => 79,  90 => 68,  85 => 65,  76 => 58,  65 => 48,  62 => 29,  55 => 39,  38 => 13,  21 => 7,  19 => 1,);
    }
}
