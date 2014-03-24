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
        $this->env->loadTemplate("profile.twig", "1869054299")->display($context);
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
  <li><a href=\"#stream\" data-toggle=\"tab\">Twich TV</a></li>
  <li><a href=\"#misc\" data-toggle=\"tab\">Otras opciones</a></li>
  ";
        }
        // line 23
        echo "</ul>

<!-- Tab panels -->
<div class=\"tab-content\">
";
        // line 28
        echo "  <div class=\"tab-pane fade in active\" id=\"perfil\">
    <div class=\"row\">
            <div class=\"col-md-9 col-md-push-3\">
                <p style=\"padding-top:20px;\"><span style=\"font-size:25px;\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick"), "html", null, true);
        echo "</span> - <span class=\"label\" style=\"background:#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "color"), "html", null, true);
        echo ";\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "grupo"), "html", null, true);
        echo "</span></p>
                <p>Ingresó el ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "ingreso"), "d \\d\\e M \\d\\e Y \\a\\ \\l\\a\\s g:ia"), "html", null, true);
        echo "</p>
                <p>";
        // line 33
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
        // line 35
        echo "                <p style=\"margin-bottom:5px;\">Reputación</p>
                <div class=\"progress\" id=\"reputacion\" style=\"margin-bottom:10px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Reputación obtenida ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
        echo "%\">
                  <div class=\"";
        // line 37
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
        // line 38
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 100)) {
            // line 39
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Excelente ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 70)) {
            // line 41
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Muy Buena ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 30)) {
            // line 43
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Buena ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 10)) {
            // line 45
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Normal ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") > 0)) {
            // line 47
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Regular ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") <= 0)) {
            // line 49
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Mala ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                    ";
        }
        // line 51
        echo "                  </div>
                </div>
                ";
        // line 54
        echo "                ";
        // line 55
        echo "                <p style=\"margin-bottom:5px;\">Nivel</p>
                <div class=\"progress\" id=\"nivel\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nivel de usuario ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel"), "html", null, true);
        echo "%\">
                  <div class=\"";
        // line 57
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
        // line 58
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 100)) {
            // line 59
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Excelente</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 70)) {
            // line 61
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Muy Buena</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 30)) {
            // line 63
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Buena</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 10)) {
            // line 65
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Normal</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 1)) {
            // line 67
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Regular</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") <= 0)) {
            // line 69
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Mala</span>
                    ";
        }
        // line 71
        echo "                  </div>
                </div>
                ";
        // line 74
        echo "                ";
        // line 75
        echo "                ";
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            // line 76
            echo "                <p style=\"margin-bottom:5px;\">Polvo arcano <i><a href=\"\"><span style=\"font-size:12px;\">Mas info</span></a></i></p>
                <div class=\"progress\" id=\"dinero\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Total polvo arcano ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "dinero"), "html", null, true);
            echo " / 20000\">
                  <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "dinero"), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "dinero") / 100) / 2), "html", null, true);
            echo "%;\">
                    <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "dinero"), "html", null, true);
            echo "</span>
                  </div>
                </div>
                ";
        }
        // line 83
        echo "                ";
        // line 84
        echo "            </div>
            <div class=\"col-md-3 col-md-pull-9\">
                <a href=\"#\" class=\"thumbnail\" style=\"margin-top: 25px;\">
                    <img  src=\"";
        // line 87
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
        // line 91
        echo "            <div class=\"col-xs-12 col-md-8\">
                <h5>Firma ";
        // line 92
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            echo "- Vista previa";
        }
        echo "</h5>
                <div id=\"sig\">";
        // line 93
        echo $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "firma");
        echo "</div>
                <br />
                ";
        // line 95
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            // line 96
            echo "                <form method=\"post\" id=\"firmaform\" name=\"firmaform\">
                <textarea id=\"firma\" name=\"firma\" style=\"width:100%; height:200px;\">";
            // line 97
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
        // line 111
        echo "            </div>
            ";
        // line 113
        echo "            ";
        // line 114
        echo "            <div class=\"col-xs-6 col-md-4\">
                <h5>Contacto</h5>
                ";
        // line 116
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkgametag") == "1")) {
            // line 117
            echo "                <h5><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
            echo "/img/icons/gamer_square.png\" />Gametag: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "gametag"), "html", null, true);
            echo "</h5>
                ";
        }
        // line 119
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkskype") == "1")) {
            // line 120
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
        // line 122
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkfacebook") == "1")) {
            // line 123
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
        // line 125
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chktwitter") == "1")) {
            // line 126
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
        // line 128
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkweb") == "1")) {
            // line 129
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
        // line 131
        echo "            </div>
            ";
        // line 133
        echo "    </div>
  </div>
";
        // line 137
        echo "  <div class=\"tab-pane fade in\" id=\"mensajes\">
      <div class=\"row\">
      </div>
  </div>
";
        // line 143
        echo "  <div class=\"tab-pane fade in\" id=\"actividad\">Actividad</div>
";
        // line 145
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            // line 147
            echo "  <div class=\"tab-pane fade in\" id=\"pagina\">
    
  </div>
";
            // line 152
            echo "  <div class=\"tab-pane fade in\" id=\"stream\">
    <div class=\"panel panel-default\" style=\"margin-top:10px;\">
    <div class=\"panel-heading\" style=\"height: 40px;\">
    <h3 class=\"panel-title\" style=\"float: left;\">Twich TV </h3>
        <div class=\"checkbox\" style=\"float:right;margin-top:0;\">
          <label>
            <input type=\"checkbox\"/>Mostrar stream
          </label>
        </div>
    </div>
      <div class=\"panel-body\">
      
      ";
            // line 164
            if ((!(null === $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "twitch_id")))) {
                // line 165
                echo "        <form class=\"form-horizontal\" role=\"form\" method=\"post\" name=\"formtwich\" id=\"formtwich\">
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">Twich ID:</label>
            <div class=\"col-sm-10\">
              <p class=\"form-control-static\">";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "twitch_id"), "html", null, true);
                echo "</p>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">Type:</label>
            <div class=\"col-sm-10\">
              <p class=\"form-control-static\">";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "twitch_type"), "html", null, true);
                echo "</p>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">Display Name:</label>
            <div class=\"col-sm-10\">
              <p class=\"form-control-static\">";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "twitch_display_name"), "html", null, true);
                echo "</p>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">Bio:</label>
            <div class=\"col-sm-10\">
              <p class=\"form-control-static\">";
                // line 187
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "twitch_bio"), "html", null, true);
                echo "</p>
            </div>
        </div>
          <input type=\"hidden\" name=\"twichtv\" value=\"1\" />
          <button type=\"submit\" class=\"btn btn-primary\" style=\"float:right;\" name=\"savetwich\">Guardar</button>
        </form>
        ";
            }
            // line 193
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "twitch_login"), "html", null, true);
            echo "\">
        <button class=\"btn btn-default\" style=\"background: -webkit-gradient(linear,left top,left bottom,from(#8266b6),to(#533787));background: -moz-linear-gradient(top,#8266b6,#533787);background: -o-linear-gradient(top,#8266b6,#533787);background: linear-gradient(top,#8266b6,#533787);background-color: #6a4e9e;border-top: 1px solid #5b3f8f;border-left: 1px solid #412771;border-right: 1px solid #412771;border-bottom: 1px solid #2a1453;box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);text-shadow: 0 1px 0 rgba(0,0,0,0.75);-moz-text-shadow: 0 1px 0 rgba(0,0,0,0.75);-webkit-text-shadow: 0 1px 0 rgba(0,0,0,0.75);color: #fff;\">
        Inicia sesion con twichtv</button></a>
      </div>
    </div>
  </div>
";
            // line 201
            echo "  <div class=\"tab-pane fade in\" id=\"misc\">
  <div class=\"col-md-6\" style=\"padding-right:20px;\">
  <h5>Datos personales</h5>
      <form class=\"form-horizontal\" method=\"post\" name=\"contacto\" id=\"contacto\">
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">Hash:</label>
            <div>
              <p class=\"form-control-static\">";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "token"), "html", null, true);
            echo "</p>
            </div>
        </div>
          <div class=\"form-group\">
              <label for=\"name\">Nombre</label>
              <input type=\"text\" id=\"name\" class=\"form-control\" disabled=\"disabled\" placeholder=\"Nombre\" name=\"name\" required=\"required\" value=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nombre"), "html", null, true);
            echo "\" />                               
          </div>
          <div class=\"form-group\">
              <label for=\"lastname\">Apellido</label>
              <input type=\"text\" id=\"lastname\" class=\"form-control\" placeholder=\"Apellido\" name=\"lastname\" value=\"";
            // line 217
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "apellido"), "html", null, true);
            echo "\" />                               
          </div>
          <div class=\"form-group\">
              <label for=\"lastname\">Ciudad</label>
              <input type=\"text\" id=\"city\" class=\"form-control\" placeholder=\"Ciudad\" name=\"city\" disabled=\"disabled\" required=\"required\" value=\"";
            // line 221
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
            // line 232
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chkgametag"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkgametag") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                </span>
                    <input type=\"text\" id=\"gametag\" class=\"form-control\" placeholder=\"Gametag\" name=\"gametag\" value=\"";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "gametag"), "html", null, true);
            echo "\" />                               
              </div>
          </div>
          <div class=\"form-group\">
              <label for=\"skype\">Skype</label>
              <div class=\"input-group\">
                <span class=\"input-group-addon\">
                    <input type=\"checkbox\" id=\"chkskype\" name=\"chkskype\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\" value=\"";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chkskype"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkskype") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                </span>
              <input type=\"text\" id=\"skype\" class=\"form-control\" placeholder=\"Skype\" name=\"skype\" value=\"";
            // line 243
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "skype"), "html", null, true);
            echo "\" />                               
              </div>
          </div>
          <div class=\"form-group\">
              <label for=\"facebook\">Facebook</label>
              <div class=\"input-group\">
                <span class=\"input-group-addon\">
                    <input type=\"checkbox\" id=\"chkfacebook\" name=\"chkfacebook\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\" value=\"";
            // line 250
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chkfacebook"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkfacebook") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                </span>
              <input type=\"text\" id=\"facebook\" class=\"form-control\" placeholder=\"Facebook\" name=\"facebook\" value=\"";
            // line 252
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "facebook"), "html", null, true);
            echo "\" />                               
            </div>
          </div>
          <div class=\"form-group\">
              <label for=\"twitter\">Twitter</label>
              <div class=\"input-group\">
                <span class=\"input-group-addon\">
                    <input type=\"checkbox\" id=\"chktwitter\" name=\"chktwitter\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\" value=\"";
            // line 259
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chktwitter"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chktwitter") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                </span>
              <input type=\"text\" id=\"twitter\" class=\"form-control\" placeholder=\"Twitter\" name=\"twitter\" value=\"";
            // line 261
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "twitter"), "html", null, true);
            echo "\" />                               
            </div>
          </div>
          <div class=\"form-group\">
              <label for=\"web\">Web</label>
              <div class=\"input-group\">
                <span class=\"input-group-addon\">
                    <input type=\"checkbox\" id=\"chkweb\" name=\"chkweb\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\" value=\"";
            // line 268
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chkweb"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkweb") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                </span>
              <input type=\"text\" id=\"web\" class=\"form-control\" placeholder=\"Web\" name=\"web\" value=\"";
            // line 270
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
        // line 280
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
        // line 294
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
        return array (  646 => 294,  630 => 280,  618 => 270,  609 => 268,  599 => 261,  590 => 259,  580 => 252,  571 => 250,  561 => 243,  552 => 241,  542 => 234,  533 => 232,  519 => 221,  512 => 217,  505 => 213,  497 => 208,  488 => 201,  478 => 193,  468 => 187,  459 => 181,  450 => 175,  441 => 169,  435 => 165,  433 => 164,  419 => 152,  414 => 147,  412 => 145,  409 => 143,  403 => 137,  399 => 133,  396 => 131,  382 => 129,  379 => 128,  365 => 126,  362 => 125,  348 => 123,  345 => 122,  333 => 120,  330 => 119,  320 => 117,  318 => 116,  314 => 114,  312 => 113,  309 => 111,  292 => 97,  289 => 96,  287 => 95,  282 => 93,  276 => 92,  273 => 91,  261 => 87,  256 => 84,  254 => 83,  247 => 79,  241 => 78,  237 => 77,  234 => 76,  231 => 75,  229 => 74,  225 => 71,  221 => 69,  217 => 67,  213 => 65,  209 => 63,  205 => 61,  201 => 59,  199 => 58,  171 => 57,  167 => 56,  164 => 55,  162 => 54,  158 => 51,  152 => 49,  146 => 47,  140 => 45,  134 => 43,  128 => 41,  122 => 39,  120 => 38,  92 => 37,  88 => 36,  85 => 35,  70 => 33,  66 => 32,  58 => 31,  53 => 28,  47 => 23,  41 => 19,  39 => 18,  32 => 13,  25 => 8,  23 => 7,  21 => 2,  19 => 1,);
    }
}


/* profile.twig */
class __TwigTemplate_bf3f3be42e5be095c48fed500f7c2365897f714b1b95fbf3684351ba1455f8c2_1869054299 extends Twig_Template
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
        return array (  694 => 4,  691 => 3,  646 => 294,  630 => 280,  618 => 270,  609 => 268,  599 => 261,  590 => 259,  580 => 252,  571 => 250,  561 => 243,  552 => 241,  542 => 234,  533 => 232,  519 => 221,  512 => 217,  505 => 213,  497 => 208,  488 => 201,  478 => 193,  468 => 187,  459 => 181,  450 => 175,  441 => 169,  435 => 165,  433 => 164,  419 => 152,  414 => 147,  412 => 145,  409 => 143,  403 => 137,  399 => 133,  396 => 131,  382 => 129,  379 => 128,  365 => 126,  362 => 125,  348 => 123,  345 => 122,  333 => 120,  330 => 119,  320 => 117,  318 => 116,  314 => 114,  312 => 113,  309 => 111,  292 => 97,  289 => 96,  287 => 95,  282 => 93,  276 => 92,  273 => 91,  261 => 87,  256 => 84,  254 => 83,  247 => 79,  241 => 78,  237 => 77,  234 => 76,  231 => 75,  229 => 74,  225 => 71,  221 => 69,  217 => 67,  213 => 65,  209 => 63,  205 => 61,  201 => 59,  199 => 58,  171 => 57,  167 => 56,  164 => 55,  162 => 54,  158 => 51,  152 => 49,  146 => 47,  140 => 45,  134 => 43,  128 => 41,  122 => 39,  120 => 38,  92 => 37,  88 => 36,  85 => 35,  70 => 33,  66 => 32,  58 => 31,  53 => 28,  47 => 23,  41 => 19,  39 => 18,  32 => 13,  25 => 8,  23 => 7,  21 => 2,  19 => 1,);
    }
}
