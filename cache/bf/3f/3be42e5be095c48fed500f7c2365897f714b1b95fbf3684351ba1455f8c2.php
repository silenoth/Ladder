<?php

/* profile.twig */
class __TwigTemplate_bf3f3be42e5be095c48fed500f7c2365897f714b1b95fbf3684351ba1455f8c2 extends Twig_Template
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
        $context["active"] = "profile";
        // line 2
        $this->env->loadTemplate("profile.twig", "1675018853")->display($context);
        // line 7
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "alerta") == 1)) {
            // line 8
            echo "    <div class=\"alert alert-info alert-dismissable\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
      <strong>Hola!</strong> Esta es tu primera visita al tu perfil, puedes hechar un vistazo a las opciones que tenemos para ti, bienvenid@!.
    </div>
    ";
        }
        // line 13
        echo "<!-- Nav tabs -->
<ul class=\"nav nav-tabs\">
  <li class=\"active\"><a href=\"#perfil\" data-toggle=\"tab\">Perfil</a></li>
  <li><a href=\"#mensajes\" data-toggle=\"tab\">Mensajes</a></li>
  <li><a href=\"#actividad\" data-toggle=\"tab\">Actividad</a></li>
  ";
        // line 18
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            // line 19
            echo "  <li><a href=\"#pagina\" data-toggle=\"tab\">Mi página</a></li>
  <li><a href=\"#misc\" data-toggle=\"tab\">Otras opciones</a></li>
  ";
        }
        // line 22
        echo "</ul>

<!-- Tab panels -->
<div class=\"tab-content\">
";
        // line 27
        echo "  <div class=\"tab-pane fade in active\" id=\"perfil\">
    <div class=\"row\">
            <div class=\"col-md-9 col-md-push-3\">
                <p style=\"padding-top:20px;\"><span style=\"font-size:25px;\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick"), "html", null, true);
        echo "</span> - <span class=\"label\" style=\"background:#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "color"), "html", null, true);
        echo ";\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "grupo"), "html", null, true);
        echo "</span></p>
                <p>Ingresó el ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "ingreso"), "d \\d\\e M \\d\\e Y \\a\\ \\l\\a\\s g:ia"), "html", null, true);
        echo "</p>
                <p>";
        // line 32
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "online") == true)) {
            echo "<span class=\"label label-success\">Conectado</span>";
        } else {
            echo "<span class=\"label label-default\">Desconectado</span>";
        }
        echo " <span style=\"font-size:12px;color:#999;\">Última actividad ";
        if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "ultimavisita"), "m/d/Y") == twig_date_format_filter($this->env, "now", "m/d/Y"))) {
            echo "Hoy, ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "ultimavisita"), "\\a\\ \\l\\a\\s g:ia"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "ultimavisita"), "d \\d\\e M \\d\\e Y \\a\\ \\l\\a\\s g:ia"), "html", null, true);
        }
        echo "</span></p>
                ";
        // line 34
        echo "                <p style=\"margin-bottom:5px;\">Reputación</p>
                <div class=\"progress\" id=\"reputacion\" style=\"margin-bottom:10px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Reputación obtenida ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
        echo "%\">
                  <div class=\"";
        // line 36
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 100)) {
            echo "progress-bar progress-bar-success";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 70)) {
            echo "progress-bar progress-bar-success";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 20)) {
            echo "progress-bar";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 10)) {
            echo "progress-bar progress-bar-info";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 1)) {
            echo "progress-bar progress-bar-warning";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") <= 0)) {
            echo "progress-bar progress-bar-danger";
        }
        echo "\" role=\"progressbar\" aria-valuenow=\"";
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") <= 0)) {
            echo "100";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
        }
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") <= 0)) {
            echo "100";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
        }
        echo "%;\">
                    ";
        // line 37
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 100)) {
            // line 38
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Excelente ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 70)) {
            // line 40
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Muy Buena ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 30)) {
            // line 42
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Buena ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 10)) {
            // line 44
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Normal ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") > 0)) {
            // line 46
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Regular ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") <= 0)) {
            // line 48
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Mala ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                    ";
        }
        // line 50
        echo "                  </div>
                </div>
                ";
        // line 53
        echo "                ";
        // line 54
        echo "                <p style=\"margin-bottom:5px;\">Nivel</p>
                <div class=\"progress\" id=\"nivel\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nivel de usuario ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel"), "html", null, true);
        echo "%\">
                  <div class=\"";
        // line 56
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 100)) {
            echo "progress-bar progress-bar-success";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 70)) {
            echo "progress-bar progress-bar-success";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 20)) {
            echo "progress-bar";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 10)) {
            echo "progress-bar progress-bar-info";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 1)) {
            echo "progress-bar progress-bar-warning";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") <= 0)) {
            echo "progress-bar progress-bar-default";
        }
        echo "\" role=\"progressbar\" aria-valuenow=\"";
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") <= 0)) {
            echo "100";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel"), "html", null, true);
        }
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") <= 0)) {
            echo "100";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel"), "html", null, true);
        }
        echo "%;\">
                    ";
        // line 57
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 100)) {
            // line 58
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Excelente</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 70)) {
            // line 60
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Muy Buena</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 30)) {
            // line 62
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Buena</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 10)) {
            // line 64
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Normal</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 1)) {
            // line 66
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Regular</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") <= 0)) {
            // line 68
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Mala</span>
                    ";
        }
        // line 70
        echo "                  </div>
                </div>
                ";
        // line 73
        echo "                ";
        // line 74
        echo "                ";
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            // line 75
            echo "                <p style=\"margin-bottom:5px;\">Polvo arcano <i><a href=\"\"><span style=\"font-size:12px;\">Mas info</span></a></i></p>
                <div class=\"progress\" id=\"dinero\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Total polvo arcano ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "dinero"), "html", null, true);
            echo " / 20000\">
                  <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "dinero"), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "dinero") / 100) / 2), "html", null, true);
            echo "%;\">
                    <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "dinero"), "html", null, true);
            echo "</span>
                  </div>
                </div>
                ";
        }
        // line 82
        echo "                ";
        // line 83
        echo "            </div>
            <div class=\"col-md-3 col-md-pull-9\">
                <a href=\"#\" class=\"thumbnail\" style=\"margin-top: 25px;\">
                    <img  src=\"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/images/user/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "avatar"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick"), "html", null, true);
        echo "\" style=\"height: 180px; width: 180px; display: block;\" />
                </a>
            </div>
            ";
        // line 90
        echo "            <div class=\"col-xs-12 col-md-8\">
                <h5>Firma ";
        // line 91
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            echo "- Vista previa";
        }
        echo "</h5>
                <div id=\"sig\">";
        // line 92
        echo $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "firma");
        echo "</div>
                <br />
                ";
        // line 94
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            // line 95
            echo "                <form method=\"post\" id=\"firmaform\" name=\"firmaform\">
                <textarea id=\"firma\" name=\"firma\" style=\"width:100%; height:200px;\">";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "firmaclean"), "html", null, true);
            echo "</textarea>
                <script>
                \$(function() {
                    \$(\"#firma\").sceditor({
                        plugins: \"bbcode\"
                    });
                });
                </script>
                <div id=\"contador\">500 carácteres maximo.</div>
                <br />
                <input type=\"hidden\" name=\"signature\" value=\"1\" />
                <button class=\"btn btn-primary\" style=\"float:right;\" type=\"submit\" name=\"modificar\">Modificar firma</button>
                </form>
                ";
        }
        // line 110
        echo "            </div>
            ";
        // line 112
        echo "            <div class=\"col-xs-6 col-md-4\">
                <h5>Contacto</h5>
                ";
        // line 114
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkgametag") == "1")) {
            // line 115
            echo "                <h5><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
            echo "/img/icons/gamer_square.png\" />Gametag: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "gametag"), "html", null, true);
            echo "</h5>
                ";
        }
        // line 117
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkskype") == "1")) {
            // line 118
            echo "                <h5><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
            echo "/img/icons/skype_square_16.png\" />Skype: <a href=\"skype:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "skype"), "html", null, true);
            echo "?call\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "skype"), "html", null, true);
            echo "</a></h5>
                ";
        }
        // line 120
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkfacebook") == "1")) {
            // line 121
            echo "                <h5><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
            echo "/img/icons/facebook_square_16.png\" />Facebook: <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "facebook"), "html", null, true);
            echo "\" target=\"_blank\" id=\"linkfacebook\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ir al facebook de ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "facebook"), "html", null, true);
            echo "</a></h5>
                ";
        }
        // line 123
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chktwitter") == "1")) {
            // line 124
            echo "                <h5><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
            echo "/img/icons/twitter_square_16.png\" />Twitter: <a href=\"http://twitter.com/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "twitter"), "html", null, true);
            echo "\" target=\"_blank\" id=\"linktwitter\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ir a @";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "twitter"), "html", null, true);
            echo "\">@";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "twitter"), "html", null, true);
            echo "</a></h5>
                ";
        }
        // line 126
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkweb") == "1")) {
            // line 127
            echo "                <h5><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
            echo "/img/icons/chrome_16.png\" />Web: <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "web"), "html", null, true);
            echo "\" target=\"_blank\" id=\"linkweb\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Visitar página de ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "web"), "html", null, true);
            echo "</a></h5>
                ";
        }
        // line 129
        echo "            </div>
    </div>
  </div>
";
        // line 133
        echo "  <div class=\"tab-pane fade in\" id=\"mensajes\">Mensajes</div>
  <div class=\"tab-pane fade in\" id=\"actividad\">Actividad</div>
";
        // line 135
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            // line 137
            echo "  <div class=\"tab-pane fade in\" id=\"pagina\">
  mi pagina
  </div>
";
            // line 142
            echo "  <div class=\"tab-pane fade in\" id=\"misc\">
  <div class=\"col-md-6\" style=\"padding-right:20px;\">
  <h5>Datos personales</h5>
      <form class=\"form-horizontal\" method=\"post\" name=\"contacto\" id=\"contacto\">
          <div class=\"form-group\">
              <label for=\"name\">Nombre</label>
              <input type=\"text\" id=\"name\" class=\"form-control\" disabled=\"disabled\" placeholder=\"Nombre\" name=\"name\" required=\"required\" value=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nombre"), "html", null, true);
            echo "\" />                               
          </div>
          <div class=\"form-group\">
              <label for=\"lastname\">Apellido</label>
              <input type=\"text\" id=\"lastname\" class=\"form-control\" placeholder=\"Apellido\" name=\"lastname\" value=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "apellido"), "html", null, true);
            echo "\" />                               
          </div>
          <div class=\"form-group\">
              <label for=\"lastname\">Ciudad</label>
              <input type=\"text\" id=\"city\" class=\"form-control\" placeholder=\"Ciudad\" name=\"city\" disabled=\"disabled\" required=\"required\" value=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "ciudad"), "html", null, true);
            echo "\" />                               
          </div>
      </form>
      </div>
      <div class=\"col-md-6\" style=\"padding-left:20px;\">
      <h5>Contacto</h5>
      <form class=\"form-horizontal\" method=\"post\" name=\"contacto\" id=\"contacto\">
          <div class=\"form-group\">
              <label for=\"gametag\">Gametag</label>
              <div class=\"input-group\">
                <span class=\"input-group-addon\">
                    <input type=\"checkbox\" id=\"chkgametag\" name=\"chkgametag\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\" value=\"";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chkgametag"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkgametag") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                </span>
                    <input type=\"text\" id=\"gametag\" class=\"form-control\" placeholder=\"Gametag\" name=\"gametag\" value=\"";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "gametag"), "html", null, true);
            echo "\" />                               
              </div>
          </div>
          <div class=\"form-group\">
              <label for=\"skype\">Skype</label>
              <div class=\"input-group\">
                <span class=\"input-group-addon\">
                    <input type=\"checkbox\" id=\"chkskype\" name=\"chkskype\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\" value=\"";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chkskype"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkskype") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                </span>
              <input type=\"text\" id=\"skype\" class=\"form-control\" placeholder=\"Skype\" name=\"skype\" value=\"";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "skype"), "html", null, true);
            echo "\" />                               
              </div>
          </div>
          <div class=\"form-group\">
              <label for=\"facebook\">Facebook</label>
              <div class=\"input-group\">
                <span class=\"input-group-addon\">
                    <input type=\"checkbox\" id=\"chkfacebook\" name=\"chkfacebook\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\" value=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chkfacebook"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkfacebook") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                </span>
              <input type=\"text\" id=\"facebook\" class=\"form-control\" placeholder=\"Facebook\" name=\"facebook\" value=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "facebook"), "html", null, true);
            echo "\" />                               
            </div>
          </div>
          <div class=\"form-group\">
              <label for=\"twitter\">Twitter</label>
              <div class=\"input-group\">
                <span class=\"input-group-addon\">
                    <input type=\"checkbox\" id=\"chktwitter\" name=\"chktwitter\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\" value=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chktwitter"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chktwitter") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                </span>
              <input type=\"text\" id=\"twitter\" class=\"form-control\" placeholder=\"Twitter\" name=\"twitter\" value=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "twitter"), "html", null, true);
            echo "\" />                               
            </div>
          </div>
          <div class=\"form-group\">
              <label for=\"web\">Web</label>
              <div class=\"input-group\">
                <span class=\"input-group-addon\">
                    <input type=\"checkbox\" id=\"chkweb\" name=\"chkweb\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\" value=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chkweb"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkweb") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                </span>
              <input type=\"text\" id=\"web\" class=\"form-control\" placeholder=\"Web\" name=\"web\" value=\"";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "web"), "html", null, true);
            echo "\" />
              </div>                              
          </div>
          <input type=\"hidden\" name=\"contact\" value=\"1\" />
          <button class=\"btn btn-primary\" style=\"float:right;\" type=\"submit\" name=\"guardar\">Guardar</button>
      </form>
            </div>
  </div>
";
        }
        // line 215
        echo "</div>
<script type=\"text/javascript\">
\$('#reputacion').tooltip('hide');
\$('#nivel').tooltip('hide');
\$('#dinero').tooltip('hide');
\$('#linkfacebook').tooltip('hide');
\$('#linktwitter').tooltip('hide');
\$('#linkweb').tooltip('hide');
\$('#chkgametag').tooltip('hide');
\$('#chkskype').tooltip('hide');
\$('#chkfacebook').tooltip('hide');
\$('#chktwitter').tooltip('hide');
\$('#chkweb').tooltip('hide');
</script>
";
        // line 229
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  558 => 229,  542 => 215,  530 => 205,  521 => 203,  511 => 196,  502 => 194,  492 => 187,  483 => 185,  473 => 178,  464 => 176,  454 => 169,  445 => 167,  431 => 156,  424 => 152,  417 => 148,  409 => 142,  404 => 137,  402 => 135,  398 => 133,  393 => 129,  379 => 127,  376 => 126,  362 => 124,  359 => 123,  345 => 121,  342 => 120,  330 => 118,  327 => 117,  317 => 115,  315 => 114,  311 => 112,  308 => 110,  291 => 96,  288 => 95,  286 => 94,  281 => 92,  275 => 91,  272 => 90,  260 => 86,  255 => 83,  253 => 82,  246 => 78,  240 => 77,  236 => 76,  233 => 75,  230 => 74,  228 => 73,  224 => 70,  220 => 68,  216 => 66,  212 => 64,  208 => 62,  204 => 60,  200 => 58,  198 => 57,  170 => 56,  166 => 55,  163 => 54,  161 => 53,  157 => 50,  151 => 48,  145 => 46,  139 => 44,  133 => 42,  127 => 40,  121 => 38,  119 => 37,  91 => 36,  87 => 35,  84 => 34,  69 => 32,  65 => 31,  57 => 30,  52 => 27,  46 => 22,  41 => 19,  39 => 18,  32 => 13,  25 => 8,  23 => 7,  21 => 2,  19 => 1,);
    }
}


/* profile.twig */
class __TwigTemplate_bf3f3be42e5be095c48fed500f7c2365897f714b1b95fbf3684351ba1455f8c2_1675018853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_header.twig");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_header.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        // line 4
        echo "<title>";
        if (((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick"))) {
            echo "Bienvenido ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick"), "html", null, true);
        } else {
            echo "Perfil de ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick"), "html", null, true);
        }
        echo "</title>
";
    }

    public function getTemplateName()
    {
        return "profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  606 => 4,  603 => 3,  558 => 229,  542 => 215,  530 => 205,  521 => 203,  511 => 196,  502 => 194,  492 => 187,  483 => 185,  473 => 178,  464 => 176,  454 => 169,  445 => 167,  431 => 156,  424 => 152,  417 => 148,  409 => 142,  404 => 137,  402 => 135,  398 => 133,  393 => 129,  379 => 127,  376 => 126,  362 => 124,  359 => 123,  345 => 121,  342 => 120,  330 => 118,  327 => 117,  317 => 115,  315 => 114,  311 => 112,  308 => 110,  291 => 96,  288 => 95,  286 => 94,  281 => 92,  275 => 91,  272 => 90,  260 => 86,  255 => 83,  253 => 82,  246 => 78,  240 => 77,  236 => 76,  233 => 75,  230 => 74,  228 => 73,  224 => 70,  220 => 68,  216 => 66,  212 => 64,  208 => 62,  204 => 60,  200 => 58,  198 => 57,  170 => 56,  166 => 55,  163 => 54,  161 => 53,  157 => 50,  151 => 48,  145 => 46,  139 => 44,  133 => 42,  127 => 40,  121 => 38,  119 => 37,  91 => 36,  87 => 35,  84 => 34,  69 => 32,  65 => 31,  57 => 30,  52 => 27,  46 => 22,  41 => 19,  39 => 18,  32 => 13,  25 => 8,  23 => 7,  21 => 2,  19 => 1,);
    }
}
