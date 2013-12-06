<?php

/* header.tpl */
class __TwigTemplate_e3ccb2a694d8954738b6f7ec211796d62cb26ecd991985d673d98c46ed6e6aa6 extends Twig_Template
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
        // line 25
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootbox.min.js\"></script>
  </head>
  <body>
";
        // line 30
        echo "<nav class=\"navbar navbar-inverse navbar-static-top\" role=\"navigation\">
    <div class=\"container\" style=\"max-width:1000px;\">
        <a class=\"navbar-brand\" href=\"home.php\">Ladder Script</a>
        <button type=\"btn btn-navbar\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navHeaderCollapse\"> <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
        </button>
        <div class=\"collapse navbar-collapse navHeaderCollapse\">
        <ul class=\"nav navbar-nav\">
            <li ";
        // line 40
        if (((isset($context["active"]) ? $context["active"] : null) == "home")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"home.php\">Inicio</a></li>
            <li ";
        // line 41
        if (((isset($context["active"]) ? $context["active"] : null) == "forum")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"#\">Foros</a></li>
            <li ";
        // line 42
        if (((isset($context["active"]) ? $context["active"] : null) == "ladder")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"#\">Ladder</a></li>
        </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 46
        echo "                <li class=\"dropdown\" id=\"menu1\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#menu1\">
                        Iniciar sesión
                        <b class=\"caret\"></b>
                    </a>
                 <div class=\"dropdown-menu\">
                    <form style=\"margin: 0px\" accept-charset=\"UTF-8\" action=\"/sessions\" method=\"post\"><div style=\"margin:0;padding:0;display:inline\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input name=\"authenticity_token\" type=\"hidden\" value=\"4L/A2ZMYkhTD3IiNDMTuB/fhPRvyCNGEsaZocUUpw40=\" /></div>
                        <fieldset class='textbox' style=\"padding:10px\">
                            <input class=\"form-control input-sm\" style=\"margin-bottom:10px\" type=\"text\" placeholder=\"Username\" />
                            <input class=\"form-control input-sm\" style=\"margin-bottom:10px\" type=\"password\" placeholder=\"Passsword\" />
                            <input class=\"btn btn-primary btn-small btn-block\" name=\"commit\" type=\"submit\" value=\"Conectar\" />
                        </fieldset>
                    </form>
                 </div>
               </li>
               ";
        // line 62
        echo "                <li><a href=\"register.php\">Registrarse</a></li>
            </ul>
        </div>
    </div>
</nav>
";
        // line 69
        echo "<div class=\"container\" style=\"max-width:1000px;\">";
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
        return "header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 11,  125 => 10,  121 => 69,  83 => 41,  59 => 26,  55 => 25,  41 => 14,  38 => 13,  30 => 9,  20 => 1,  242 => 4,  239 => 3,  194 => 96,  191 => 95,  189 => 94,  178 => 89,  171 => 85,  167 => 84,  163 => 83,  154 => 79,  149 => 77,  146 => 76,  141 => 75,  135 => 70,  132 => 68,  126 => 67,  124 => 66,  114 => 62,  108 => 56,  103 => 54,  97 => 46,  89 => 42,  82 => 46,  77 => 40,  72 => 44,  70 => 43,  67 => 42,  65 => 30,  51 => 29,  45 => 25,  36 => 10,  25 => 8,  23 => 7,  21 => 2,  19 => 1,);
    }
}
