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
        echo "
";
        // line 3
        if (((isset($context["errorlogin"]) ? $context["errorlogin"] : null) == true)) {
            // line 4
            echo "<script type=\"text/javascript\">
\$( document ).ready(function() {
    \$('#errorlogin').modal('show');
});

</script>
<!-- Modal error login -->
<div class=\"modal fade\" id=\"errorlogin\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"errorloginLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\" style=\"background:url(";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
            echo "/img/errors/login_form_error_bg.png)\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\" id=\"errorloginLabel\">Error de ingreso</h4>
      </div>
      <div class=\"modal-body\">
        Veo que haz cometido un error, talvez sea el usuario... <br />
        tal vez la contraseña... solo intenta nuevamente -.-
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Okay</button>
      </div>
    </div>
  </div>
</div>
";
        }
        // line 29
        echo "<nav class=\"navbar navbar-inverse navbar-static-top\" role=\"navigation\">
    <div class=\"container\" style=\"max-width:1000px;\">
        <a class=\"navbar-brand\" href=\"";
        // line 31
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
        // line 40
        if (((isset($context["active"]) ? $context["active"] : null) == "home")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/inicio\">Inicio</a></li>
            <li ";
        // line 41
        if (((isset($context["active"]) ? $context["active"] : null) == "forum")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/foros\">Foros</a></li>
            <li ";
        // line 42
        if (((isset($context["active"]) ? $context["active"] : null) == "bracket")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/competencia\">Competencias</a></li>
        </ul>
        
            <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 46
        if (twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) {
            // line 47
            echo "                ";
            // line 48
            echo "                <li>
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#mlogin\">
                        Iniciar sesión
                    </a>
               </li>
               ";
            // line 54
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/registro\">Registrarse</a></li>
            ";
        } else {
            // line 56
            echo "            <li><a href=\"#\">Bienvenid@ </a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["sesion"]) ? $context["sesion"] : null), "html", null, true);
            echo "<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/perfil/";
            echo twig_escape_filter($this->env, (isset($context["nickclean"]) ? $context["nickclean"] : null), "html", null, true);
            echo "\">Perfil</a></li>
                      <li><a href=\"#\">Mensajes <span class=\"badge\">0</span></a></li>
                      <li><a href=\"#\">Mi página</a></li>
                      ";
            // line 63
            if (((isset($context["acceso"]) ? $context["acceso"] : null) == true)) {
                echo "<li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "/modulos/adm\">Administracion</a></li>";
            }
            // line 64
            echo "                      <li class=\"divider\"></li>
                      <li><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/destruir\">Cerrar sesión</a></li>
                    </ul>
                </li>
            ";
        }
        // line 69
        echo "            </ul>
        
        </div>
    </div>
</nav>
";
        // line 76
        echo "<!-- Modal -->
<div class=\"modal fade\" id=\"mlogin\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Iniciar sesión</h4>
      </div>
      <form style=\"margin: 0px\" accept-charset=\"UTF-8\" action=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/conectar\" method=\"post\">
      <div class=\"modal-body\">
          <div style=\"margin:0;padding:0;display:inline\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input name=\"authenticity_token\" type=\"hidden\" value=\"4L/A2ZMYkhTD3IiNDMTuB/fhPRvyCNGEsaZocUUpw40=\" /></div>
              <fieldset class='textbox' style=\"padding:10px\">
                  <input class=\"form-control input-sm\" style=\"margin-bottom:10px\" type=\"text\" placeholder=\"Nick\" name=\"nick\" />
                  <input class=\"form-control input-sm\" style=\"margin-bottom:10px\" type=\"password\" placeholder=\"Contraseña\" name=\"pass\" />
              </fieldset>
              <p style=\"padding:10px;\"><a href=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["twitch_auth"]) ? $context["twitch_auth"] : null), "html", null, true);
        echo "\">
                    <button class=\"btn btn-default\" style=\"background: -webkit-gradient(linear,left top,left bottom,from(#8266b6),to(#533787));background: -moz-linear-gradient(top,#8266b6,#533787);background: -o-linear-gradient(top,#8266b6,#533787);background: linear-gradient(top,#8266b6,#533787);background-color: #6a4e9e;border-top: 1px solid #5b3f8f;border-left: 1px solid #412771;border-right: 1px solid #412771;border-bottom: 1px solid #2a1453;box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);text-shadow: 0 1px 0 rgba(0,0,0,0.75);-moz-text-shadow: 0 1px 0 rgba(0,0,0,0.75);-webkit-text-shadow: 0 1px 0 rgba(0,0,0,0.75);color: #fff;\">
                    <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
        echo "/img/icons/twitch_square_16.png\" style=\"margin-right:5px;\"/>Iniciar sesión con Twich TV</button>
                    </a>
              </p>
              <p style=\"padding:10px;\"><a href=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["facebook_auth"]) ? $context["facebook_auth"] : null), "html", null, true);
        echo "\">
                    <button class=\"btn btn-default\" style=\"background: -webkit-gradient(linear,left top,left bottom,from(#4c66a4),to(#3c5996));background: -moz-linear-gradient(top,#4c66a4,#3c5996);background: -o-linear-gradient(top,#4c66a4,#3c5996);background: linear-gradient(top,#4c66a4,#3c5996);background-color: #3a4b7a;border-top: 1px solid #3a4b7a;border-left: 1px solid #3a4b7a;border-right: 1px solid #3a4b7a;border-bottom: 1px solid #3a4b7a;box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);text-shadow: 0 1px 0 rgba(0,0,0,0.75);-moz-text-shadow: 0 1px 0 rgba(0,0,0,0.75);-webkit-text-shadow: 0 1px 0 rgba(0,0,0,0.75);color: #fff;\">
                    <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
        echo "/img/icons/facebook_square_16.png\" style=\"margin-right:5px;\"/>Inicia sesión con Facebook</button>
                    </a>
              </p>
              
              <p><a href=\"\">Olvidé mi contraseña</a> - <a href=\"";
        // line 102
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
        return array (  203 => 102,  194 => 98,  189 => 96,  181 => 93,  176 => 91,  166 => 84,  156 => 76,  149 => 69,  142 => 65,  139 => 64,  133 => 63,  125 => 60,  120 => 58,  116 => 56,  110 => 54,  103 => 48,  101 => 47,  99 => 46,  88 => 42,  80 => 41,  72 => 40,  60 => 31,  56 => 29,  35 => 13,  24 => 4,  22 => 3,  19 => 2,);
    }
}
