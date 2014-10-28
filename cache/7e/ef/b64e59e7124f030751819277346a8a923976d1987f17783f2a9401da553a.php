<?php

/* navbar.twig */
class __TwigTemplate_7eefb64e59e7124f030751819277346a8a923976d1987f17783f2a9401da553a extends Twig_Template
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
        echo "<style type=\"text/css\">
  @keyframes blink {
    0% { color: red; }
    100% { color: white; }
}
@-webkit-keyframes blink {
    0% { color: red; }
    100% { color: white; }
}
.blink {
    -webkit-animation: blink 0.5s linear infinite;
    -moz-animation: blink 0.5s linear infinite;
    -ms-animation: blink 0.5s linear infinite;
    -o-animation: blink 0.5s linear infinite;
    animation: blink 0.5s linear infinite;
}
</style>
";
        // line 20
        if (((isset($context["errorlogin"]) ? $context["errorlogin"] : null) == true)) {
            // line 21
            echo "<script type=\"text/javascript\">
\$( document ).ready(function() {
    \$('#errorlogin').modal('show');
});

</script>
<!-- Modal error login -->
<div class=\"modal fade\" id=\"errorlogin\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"errorloginLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\" style=\"background:url(";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
            echo "/img/errors/login_form_error_bg.png) right no-repeat #fff\">
      <div class=\"modal-header\" style=\"border:0;\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\" id=\"errorloginLabel\">Eso fue un error!</h4>
      </div>
      <div class=\"modal-body\">
        Veo que haz cometido un error, talvez sea el usuario... <br />
        tal vez la contraseña... solo intenta nuevamente.
      </div>
      <div class=\"modal-footer\" style=\"border:0;\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Okay</button>
      </div>
    </div>
  </div>
</div>
";
        }
        // line 47
        echo "<nav class=\"navbar navbar-inverse navbar-static-top\" role=\"navigation\">
    <div class=\"container\" style=\"max-width:1000px;\">
        <a class=\"navbar-brand\" href=\"";
        // line 49
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
        // line 58
        if (((isset($context["active"]) ? $context["active"] : null) == "home")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/inicio\">Inicio</a></li>
            <li ";
        // line 59
        if (((isset($context["active"]) ? $context["active"] : null) == "forum")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/foros\">Foros</a></li>
            <li ";
        // line 60
        if (((isset($context["active"]) ? $context["active"] : null) == "bracket")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/competencia\">Competencias</a></li>
        </ul>

            <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 64
        if (twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) {
            // line 65
            echo "                ";
            // line 66
            echo "                <li>
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#mlogin\">
                        Iniciar sesión
                    </a>
               </li>
               ";
            // line 72
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/registro\">Registrarse</a></li>
            ";
        } else {
            // line 74
            echo "            <li><a href=\"#\">Bienvenid@ </a></li>
                <li class=\"dropdown\" ";
            // line 75
            if (((isset($context["mp"]) ? $context["mp"] : null) > 0)) {
                echo " id=\"asd\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"bottom\" data-content=\"Tienes ";
                echo twig_escape_filter($this->env, (isset($context["mp"]) ? $context["mp"] : null), "html", null, true);
                echo " mensaje(s) sin leer.\"";
            }
            echo ">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 76
            if (((isset($context["mp"]) ? $context["mp"] : null) > 0)) {
                echo "<span id=\"popmp\" class=\"glyphicon glyphicon-bell blink\"></span> ";
            }
            echo twig_escape_filter($this->env, (isset($context["sesion"]) ? $context["sesion"] : null), "html", null, true);
            echo "<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/perfil/";
            echo twig_escape_filter($this->env, (isset($context["nickclean"]) ? $context["nickclean"] : null), "html", null, true);
            echo "\">Perfil</a></li>
                      <li><a href=\"";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/perfil/";
            echo twig_escape_filter($this->env, (isset($context["nickclean"]) ? $context["nickclean"] : null), "html", null, true);
            echo "#mensajes\">Mensajes <span class=\"badge\" ";
            if (((isset($context["mp"]) ? $context["mp"] : null) > 0)) {
                echo "style=\"background: red;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["mp"]) ? $context["mp"] : null), "html", null, true);
            echo "</span></a></li>
                      <li><a href=\"#\">Mi página</a></li>
                      ";
            // line 81
            if (((isset($context["acceso"]) ? $context["acceso"] : null) == true)) {
                echo "<li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "/modulos/adm\">Administracion</a></li>";
            }
            // line 82
            echo "                      <li class=\"divider\"></li>
                      <li><a href=\"";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/destruir\">Cerrar sesión</a></li>
                    </ul>
                </li>
<script type=\"text/javascript\">\$('#asd').popover('show')</script>
            ";
        }
        // line 88
        echo "            </ul>

        </div>
    </div>
</nav>
";
        // line 95
        if (twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) {
            // line 96
            echo "<div class=\"modal fade\" id=\"mlogin\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" style=\"width:400px;\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Iniciar sesión</h4>
      </div>
      <form style=\"margin: 0px\" accept-charset=\"UTF-8\" action=\"";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/conectar\" method=\"post\">
      <div class=\"modal-body\">
          <div style=\"margin:0;padding:0;display:inline\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input name=\"authenticity_token\" type=\"hidden\" value=\"4L/A2ZMYkhTD3IiNDMTuB/fhPRvyCNGEsaZocUUpw40=\" /></div>
              <fieldset class='textbox' style=\"padding:10px\">
                  <input class=\"form-control input-sm\" style=\"margin-bottom:10px\" type=\"text\" placeholder=\"Nick\" name=\"nick\" />
                  <input class=\"form-control input-sm\" style=\"margin-bottom:10px\" type=\"password\" placeholder=\"Contraseña\" name=\"pass\" />
              </fieldset>
              <p style=\"padding:10px;\"><a href=\"";
            // line 110
            echo twig_escape_filter($this->env, (isset($context["twitch_auth"]) ? $context["twitch_auth"] : null), "html", null, true);
            echo "\">
                    <button class=\"btn btn-default\" style=\"background: -webkit-gradient(linear,left top,left bottom,from(#8266b6),to(#533787));background: -moz-linear-gradient(top,#8266b6,#533787);background: -o-linear-gradient(top,#8266b6,#533787);background: linear-gradient(top,#8266b6,#533787);background-color: #6a4e9e;border-top: 1px solid #5b3f8f;border-left: 1px solid #412771;border-right: 1px solid #412771;border-bottom: 1px solid #2a1453;box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);text-shadow: 0 1px 0 rgba(0,0,0,0.75);-moz-text-shadow: 0 1px 0 rgba(0,0,0,0.75);-webkit-text-shadow: 0 1px 0 rgba(0,0,0,0.75);color: #fff;\">
                    <img src=\"";
            // line 112
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
            echo "/img/icons/twitch_square_16.png\" style=\"margin-right:5px;\"/>Iniciar sesión con Twich TV</button>
                    </a>
              </p>
              <p style=\"padding:10px;\"><a href=\"";
            // line 115
            echo twig_escape_filter($this->env, (isset($context["facebook_auth"]) ? $context["facebook_auth"] : null), "html", null, true);
            echo "\">
                    <button class=\"btn btn-default\" style=\"background: -webkit-gradient(linear,left top,left bottom,from(#4c66a4),to(#3c5996));background: -moz-linear-gradient(top,#4c66a4,#3c5996);background: -o-linear-gradient(top,#4c66a4,#3c5996);background: linear-gradient(top,#4c66a4,#3c5996);background-color: #3a4b7a;border-top: 1px solid #3a4b7a;border-left: 1px solid #3a4b7a;border-right: 1px solid #3a4b7a;border-bottom: 1px solid #3a4b7a;box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);text-shadow: 0 1px 0 rgba(0,0,0,0.75);-moz-text-shadow: 0 1px 0 rgba(0,0,0,0.75);-webkit-text-shadow: 0 1px 0 rgba(0,0,0,0.75);color: #fff;\">
                    <img src=\"";
            // line 117
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
            echo "/img/icons/facebook_square_16.png\" style=\"margin-right:5px;\"/>Inicia sesión con Facebook</button>
                    </a>
              </p>

              <p><a href=\"\">Olvidé mi contraseña</a> - <a href=\"";
            // line 121
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
</div>
";
        }
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
        return array (  242 => 121,  233 => 117,  228 => 115,  220 => 112,  215 => 110,  205 => 103,  196 => 96,  194 => 95,  187 => 88,  179 => 83,  176 => 82,  170 => 81,  157 => 79,  151 => 78,  143 => 76,  135 => 75,  132 => 74,  126 => 72,  119 => 66,  117 => 65,  115 => 64,  104 => 60,  96 => 59,  88 => 58,  76 => 49,  72 => 47,  51 => 30,  40 => 21,  38 => 20,  19 => 1,);
    }
}
