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
        echo "/img/ico/favicon.ico\" />
    ";
        // line 10
        $this->displayBlock('titulo', $context, $blocks);
        // line 13
        echo "    <!-- Bootstrap core CSS -->
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/css/bootstrap.css\" rel=\"stylesheet\" />

<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">
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
        // line 31
        $this->displayBlock('css', $context, $blocks);
        // line 34
        echo "    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/jquery-2.1.0.min.js\" type=\"text/javascript\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootbox.min.js\"></script>
    ";
        // line 44
        $this->displayBlock('js', $context, $blocks);
        // line 47
        echo "  </head>
  <body>
";
        // line 49
        $this->env->loadTemplate("navbar.twig")->display($context);
        // line 51
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

    // line 31
    public function block_css($context, array $blocks = array())
    {
        // line 32
        echo "    <!-- Extras css files -->
    ";
    }

    // line 44
    public function block_js($context, array $blocks = array())
    {
        // line 45
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
        return array (  118 => 45,  115 => 44,  110 => 32,  107 => 31,  101 => 11,  98 => 10,  94 => 51,  92 => 49,  88 => 47,  86 => 44,  82 => 43,  78 => 42,  73 => 40,  65 => 34,  63 => 31,  43 => 14,  40 => 13,  38 => 10,  32 => 9,  22 => 1,);
    }
}
