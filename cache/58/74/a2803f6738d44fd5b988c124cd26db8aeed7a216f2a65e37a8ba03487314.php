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
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/jquery-1.9.0.min.js\" type=\"text/javascript\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootbox.min.js\"></script>
    <link type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/css/bootstrapValidator.css\" rel=\"stylesheet\" />
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
        echo "><a href=\"#\">Competencias</a></li>
        </ul>
        
            <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 46
        if (twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) {
            // line 47
            echo "                ";
            // line 48
            echo "                <li class=\"dropdown\" id=\"menu1\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#menu1\">
                        Iniciar sesión
                        <b class=\"caret\"></b>
                    </a>
                 <div class=\"dropdown-menu\">
                    <form style=\"margin: 0px\" accept-charset=\"UTF-8\" action=\"session.php\" method=\"post\"><div style=\"margin:0;padding:0;display:inline\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input name=\"authenticity_token\" type=\"hidden\" value=\"4L/A2ZMYkhTD3IiNDMTuB/fhPRvyCNGEsaZocUUpw40=\" /></div>
                        <fieldset class='textbox' style=\"padding:10px\">
                            <input class=\"form-control input-sm\" style=\"margin-bottom:10px\" type=\"text\" placeholder=\"Nick\" name=\"nick\" />
                            <input class=\"form-control input-sm\" style=\"margin-bottom:10px\" type=\"password\" placeholder=\"Contraseña\" name=\"pass\" />
                            <input class=\"btn btn-primary btn-small btn-block\" name=\"iniciar\" type=\"submit\" value=\"Conectar\" />
                        </fieldset>
                    </form>
                 </div>
               </li>
               ";
            // line 64
            echo "                <li><a href=\"register.php\">Registrarse</a></li>
            ";
        } else {
            // line 66
            echo "            <li><a href=\"#\">Bienvenido ";
            echo twig_escape_filter($this->env, (isset($context["sesion"]) ? $context["sesion"] : null), "html", null, true);
            echo "</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Opciones<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"#\">Action</a></li>
                      <li><a href=\"#\">Another action</a></li>
                      <li><a href=\"#\">Something else here</a></li>
                      <li class=\"divider\"></li>
                      <li><a href=\"session.php?session=destroy\">Cerrar sesión</a></li>
                    </ul>
                </li>
            ";
        }
        // line 78
        echo "            </ul>
        
        </div>
    </div>
</nav>
";
        // line 85
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
        return array (  159 => 11,  156 => 10,  152 => 85,  145 => 78,  129 => 66,  125 => 64,  108 => 48,  106 => 47,  104 => 46,  95 => 42,  89 => 41,  83 => 40,  71 => 30,  65 => 26,  61 => 25,  57 => 24,  52 => 22,  41 => 14,  38 => 13,  36 => 10,  30 => 9,  20 => 1,);
    }
}
