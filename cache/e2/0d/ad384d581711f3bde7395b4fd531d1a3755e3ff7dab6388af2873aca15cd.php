<?php

/* navbar.twig */
class __TwigTemplate_e20dad384d581711f3bde7395b4fd531d1a3755e3ff7dab6388af2873aca15cd extends Twig_Template
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
        // line 2
        echo "<nav class=\"navbar navbar-inverse navbar-static-top\" role=\"navigation\">
    <div class=\"container\" style=\"max-width:1000px;\">
        <a class=\"navbar-brand\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/inicio\">Hearthstone Chile</a>
        <button type=\"btn btn-navbar\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navHeaderCollapse\">
        <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
        </button>
        <div class=\"collapse navbar-collapse navHeaderCollapse\">
        <ul class=\"nav navbar-nav\">
            <li ";
        // line 13
        if (((isset($context["active"]) ? $context["active"] : null) == "home")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/inicio\">Inicio</a></li>
            <li ";
        // line 14
        if (((isset($context["active"]) ? $context["active"] : null) == "forum")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/foros\">Foros</a></li>
            <li ";
        // line 15
        if (((isset($context["active"]) ? $context["active"] : null) == "ladder")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/competencia\">Competencias</a></li>
        </ul>
        
            <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 19
        if (twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) {
            // line 20
            echo "                ";
            // line 21
            echo "                <li>
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#mlogin\">
                        Iniciar sesión
                    </a>
               </li>
               ";
            // line 27
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/registro\">Registrarse</a></li>
            ";
        } else {
            // line 29
            echo "            <li><a href=\"#\">Bienvenid@ </a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["sesion"]) ? $context["sesion"] : null), "html", null, true);
            echo "<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/perfil/";
            echo twig_escape_filter($this->env, (isset($context["nickclean"]) ? $context["nickclean"] : null), "html", null, true);
            echo "\">Perfil</a></li>
                      <li><a href=\"#\">Mensajes <span class=\"badge\">0</span></a></li>
                      <li><a href=\"#\">Mi página</a></li>
                      <li class=\"divider\"></li>
                      <li><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/destruir\">Cerrar sesión</a></li>
                    </ul>
                </li>
            ";
        }
        // line 41
        echo "            </ul>
        
        </div>
    </div>
</nav>
";
        // line 48
        echo "<!-- Modal -->
<div class=\"modal fade\" id=\"mlogin\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Iniciar sesión</h4>
      </div>
      <form style=\"margin: 0px\" accept-charset=\"UTF-8\" action=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/conectar\" method=\"post\">
      <div class=\"modal-body\">
          <div style=\"margin:0;padding:0;display:inline\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input name=\"authenticity_token\" type=\"hidden\" value=\"4L/A2ZMYkhTD3IiNDMTuB/fhPRvyCNGEsaZocUUpw40=\" /></div>
              <fieldset class='textbox' style=\"padding:10px\">
                  <input class=\"form-control input-sm\" style=\"margin-bottom:10px\" type=\"text\" placeholder=\"Nick\" name=\"nick\" />
                  <input class=\"form-control input-sm\" style=\"margin-bottom:10px\" type=\"password\" placeholder=\"Contraseña\" name=\"pass\" />
              </fieldset>
              <p><a href=\"\">Olvidé mi contraseña</a> - <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/registro\">Crear una cuenta</a></p>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
        <button class=\"btn btn-primary\" name=\"iniciar\" type=\"submit\">Conectar</button>
      </div>
      </form>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 63,  121 => 56,  111 => 48,  104 => 41,  97 => 37,  88 => 33,  83 => 31,  79 => 29,  73 => 27,  66 => 21,  64 => 20,  62 => 19,  51 => 15,  43 => 14,  35 => 13,  23 => 4,  19 => 2,);
    }
}
