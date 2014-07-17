<?php

/* profile.twig */
class __TwigTemplate_b49e7b5bd47db2198e82af6a441a2c7eff456a4d9ada35beff698dcc77bf2b80 extends Twig_Template
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
        ob_start();
        // line 3
        $this->env->loadTemplate("profile.twig", "815373662")->display($context);
        // line 62
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "alerta") == 1)) {
            // line 63
            echo "    <div class=\"alert alert-info alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        <strong>Hola!</strong> Esta es tu primera visita al tu perfil, puedes hechar un vistazo a las opciones que tenemos para ti, bienvenid@!.
    </div>
";
        }
        // line 68
        echo "<!-- Nav tabs -->
<ul class=\"nav nav-tabs\">
    <li class=\"active\"><a href=\"#perfil\" data-toggle=\"tab\">Perfil</a></li>
    <li><a href=\"#mensajes\" data-toggle=\"tab\">Mensajes</a></li>
    <li><a href=\"#actividad\" data-toggle=\"tab\">Actividad</a></li>
    ";
        // line 73
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            // line 74
            echo "    <li><a href=\"#torneos\" data-toggle=\"tab\">Mis torneos</a></li>
    <li><a href=\"#apps\" data-toggle=\"tab\">Aplicaciones</a></li>
    <li><a href=\"#misc\" data-toggle=\"tab\">Otras opciones</a></li>
";
        }
        // line 78
        echo "</ul>
<!-- Tab panels -->
<div class=\"tab-content\">
    ";
        // line 82
        echo "    <div class=\"tab-pane fade in active\" id=\"perfil\">
        <div class=\"row\">
            <div class=\"col-md-9 col-md-push-3\">
                <p style=\"padding-top:20px;\"><span style=\"font-size:25px;\">";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick"), "html", null, true);
        echo "</span> - <span class=\"label\" style=\"background:#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "color"), "html", null, true);
        echo ";\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "grupo"), "html", null, true);
        echo "</span></p>
                <p>Ingresó el ";
        // line 86
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "ingreso"), "d \\d\\e M \\d\\e Y \\a\\ \\l\\a\\s g:ia"), "html", null, true);
        echo "</p>
                <p>";
        // line 87
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "online") == true)) {
            echo "<span class=\"label label-success\">Conectado</span>";
        } else {
            echo "<span class=\"label label-default\">Desconectado</span>";
        }
        echo "<span style=\"font-size:12px;color:#999;\">Última actividad ";
        if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "ultimavisita"), "m/d/Y") == twig_date_format_filter($this->env, "now", "m/d/Y"))) {
            echo "Hoy, ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "ultimavisita"), "\\a\\ \\l\\a\\s g:ia"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "ultimavisita"), "d \\d\\e M \\d\\e Y \\a\\ \\l\\a\\s g:ia"), "html", null, true);
        }
        echo "</span></p>
                ";
        // line 89
        echo "                <p style=\"margin-bottom:5px;\">Reputación</p>
                <div class=\"progress\" id=\"reputacion\" style=\"margin-bottom:10px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Reputación obtenida ";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
        echo "%\">
                    <div class=\"";
        // line 91
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
        // line 92
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 100)) {
            // line 93
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Excelente ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                        ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 70)) {
            // line 95
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Muy Buena ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                        ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 30)) {
            // line 97
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Buena ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                        ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 10)) {
            // line 99
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Normal ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                        ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") > 0)) {
            // line 101
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Regular ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                        ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") <= 0)) {
            // line 103
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Mala ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                        ";
        }
        // line 105
        echo "                    </div>
                </div>
                ";
        // line 108
        echo "                ";
        // line 109
        echo "                <p style=\"margin-bottom:5px;\">Nivel</p>
                <div class=\"progress\" id=\"nivel\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nivel de usuario ";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel"), "html", null, true);
        echo "%\">
                    <div class=\"";
        // line 111
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
        // line 112
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 100)) {
            // line 113
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Excelente</span>
                        ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 70)) {
            // line 115
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Muy Buena</span>
                        ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 30)) {
            // line 117
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Buena</span>
                        ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 10)) {
            // line 119
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Normal</span>
                        ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 1)) {
            // line 121
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Regular</span>
                        ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") <= 0)) {
            // line 123
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Mala</span>
                        ";
        }
        // line 125
        echo "                    </div>
                </div>
                ";
        // line 128
        echo "                ";
        // line 129
        echo "                ";
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            // line 130
            echo "                <p style=\"margin-bottom:5px;\">Polvo arcano <i><a href=\"\"><span style=\"font-size:12px;\">Mas info</span></a></i></p>
                <div class=\"progress\" id=\"dinero\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Total polvo arcano ";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "dinero"), "html", null, true);
            echo " / 20000\">
                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "dinero"), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "dinero") / 100) / 2), "html", null, true);
            echo "%;\">
                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "dinero"), "html", null, true);
            echo "</span>
                    </div>
                </div>
                ";
        }
        // line 137
        echo "                ";
        // line 138
        echo "            </div>
            <div class=\"col-md-3 col-md-pull-9\">
                <a href=\"#\" class=\"thumbnail\" style=\"margin-top: 25px;\">
                    <img  src=\"";
        // line 141
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
        // line 145
        echo "            <div class=\"col-xs-12 col-md-8\">
                <h5>Firma ";
        // line 146
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            echo "- Vista previa";
        }
        echo "</h5>
                <div id=\"sig\">";
        // line 147
        echo $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "firma");
        echo "</div>
                <br />
                ";
        // line 149
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            // line 150
            echo "                <form method=\"post\" id=\"firmaform\" name=\"firmaform\">
                    <textarea id=\"firma\" name=\"firma\" style=\"width:100%; height:200px;\">";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "firmaclean"), "html", null, true);
            echo "</textarea>
                        
                    <div id=\"contador\">500 carácteres maximo.</div>
                    <br />
                    <input type=\"hidden\" name=\"signature\" value=\"1\" />
                    <button class=\"btn btn-primary\" style=\"float:right;\" type=\"submit\" name=\"modificar\">Modificar firma</button>
                </form>
                ";
        }
        // line 159
        echo "            </div>
            ";
        // line 161
        echo "            ";
        // line 162
        echo "            <div class=\"col-xs-6 col-md-4\">
                <h5>Contacto</h5>
                ";
        // line 164
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkgametag") == "1")) {
            // line 165
            echo "                <h5><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
            echo "/img/icons/gamer_square.png\" />Gametag: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "gametag"), "html", null, true);
            echo "</h5>
                ";
        }
        // line 167
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkskype") == "1")) {
            // line 168
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
        // line 170
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkfacebook") == "1")) {
            // line 171
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
        // line 173
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chktwitter") == "1")) {
            // line 174
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
        // line 176
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkweb") == "1")) {
            // line 177
            echo "                <h5><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
            echo "/img/icons/chrome_square_16.png\" />Web: <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "web"), "html", null, true);
            echo "\" target=\"_blank\" id=\"linkweb\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Visitar página de ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "web"), "html", null, true);
            echo "</a></h5>
                ";
        }
        // line 179
        echo "            </div>
        ";
        // line 181
        echo "        </div>
    </div>
    ";
        // line 184
        echo "
    ";
        // line 186
        echo "    <div class=\"tab-pane fade in\" id=\"mensajes\">
        <div class=\"row\">
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th></th>
                    <th>Titulo</th>
                    <th>De</th>
                    <th>Mensaje</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
        ";
        // line 200
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "pm"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 201
            echo "            <tr ";
            if (($this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : null), "estado") == 0)) {
                echo "class=\"danger\"";
            }
            echo ">
                <td><img src=\"";
            // line 202
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
            echo "/img/icons/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : null), "icono"), "html", null, true);
            echo ".png\" /></td>
                <td>";
            // line 203
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : null), "titulo"), 0, 20), "html", null, true);
            echo "</td>
                <td>";
            // line 204
            if (($this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : null), "envia") == 0)) {
                echo "System";
            } else {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "/perfil/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : null), "nickclean"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : null), "nick"), "html", null, true);
                echo "</a>";
            }
            echo "</td>
                <td>";
            // line 205
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : null), "mensaje"), 0, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : null), "fecha"), "html", null, true);
            echo "</td>
                <td>";
            // line 207
            if (($this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : null), "estado") == 0)) {
                echo "<span class=\"label label-danger\">No leído</span>";
            } else {
                echo "<span class=\"label label-success\">Leído</span>";
            }
            echo "</td>
            </tr>
            ";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : null), "prioridad"), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "        </tbody>
        </table>
        </div>
    </div>
    ";
        // line 216
        echo "
    ";
        // line 218
        echo "    <div class=\"tab-pane fade in\" id=\"actividad\">Actividad</div>
    ";
        // line 220
        echo "
    ";
        // line 221
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            // line 222
            echo "    ";
            // line 223
            echo "    <div class=\"tab-pane fade in\" id=\"torneos\">
        <h4>Gamertag: <span class=\"label label-danger\">";
            // line 224
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "gametag"), "html", null, true);
            echo "</span></h4>
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>Torneo</th>
                    <th>Informacion</th>
                    <th>Creado</th>
                    <th>Estado</th>
                    <th>Cupos</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 237
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "torneos"));
            foreach ($context['_seq'] as $context["_key"] => $context["torneo"]) {
                // line 238
                echo "                <tr ";
                if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "id") == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "utorneo"))) {
                    echo "class=\"success\"";
                }
                echo ">
                    <td>";
                // line 239
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "titulo"), "html", null, true);
                echo "</td>
                    <td>";
                // line 240
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "descripcion"), 0, 50), "html", null, true);
                echo "...</td>
                    <td>";
                // line 241
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "fecha"), "d \\d\\e M \\d\\e\\l Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 242
                if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "activo") == 1)) {
                    echo "Activo";
                } else {
                    echo "Cerrado";
                }
                echo "</td>
                    <td>
                        ";
                // line 244
                if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "activo") == 1)) {
                    // line 245
                    echo "                        <div class=\"progress\" style=\"margin-bottom:0px;\">
                            <div class=\"progress-bar progress-bar-success\" id=\"cupos";
                    // line 246
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\" style=\"width: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "equipos"), "html", null, true);
                    echo "%\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"El ";
                    echo twig_escape_filter($this->env, (isset($context["confirmados"]) ? $context["confirmados"] : null), "html", null, true);
                    echo "% de los jugadores ha confirmado\"></div>
                        </div>
                        ";
                } else {
                    // line 249
                    echo "                        <div class=\"progress\" style=\"margin-bottom:0px;\">
                            <div class=\"progress-bar progress-bar-success\" style=\"width: 100%\"></div>
                        </div>
                        ";
                }
                // line 253
                echo "                    </td>
                    <td>
                        <span class=\"label label-success\">Inscrito</span><a href=\"";
                // line 255
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "/brackets/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "link"), "html", null, true);
                echo "#bracket\"><button type=\"submit\" class=\"btn btn-primary btn-xs\" name=\"participar\" style=\"float:right;\">Ver brackets</button></a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['torneo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            echo "            </tbody>
        </table>
    </div>
    ";
            // line 263
            echo "
    ";
            // line 265
            echo "    <div class=\"tab-pane fade in\" id=\"apps\">
        <div class=\"panel panel-default\" style=\"margin-top:10px;\">
            <div class=\"panel-heading\" style=\"height: 40px;\">
                <h3 class=\"panel-title\" style=\"float: left;\">Aplicaciones</h3>
            </div>
            <div class=\"panel-body\">
                ";
            // line 272
            echo "                ";
            if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "twitch_islogin") == false)) {
                // line 273
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "twitch_login"), "html", null, true);
                echo "\">
                    <button class=\"btn btn-default\" style=\"background: -webkit-gradient(linear,left top,left bottom,from(#8266b6),to(#533787));background: -moz-linear-gradient(top,#8266b6,#533787);background: -o-linear-gradient(top,#8266b6,#533787);background: linear-gradient(top,#8266b6,#533787);background-color: #6a4e9e;border-top: 1px solid #5b3f8f;border-left: 1px solid #412771;border-right: 1px solid #412771;border-bottom: 1px solid #2a1453;box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);text-shadow: 0 1px 0 rgba(0,0,0,0.75);-moz-text-shadow: 0 1px 0 rgba(0,0,0,0.75);-webkit-text-shadow: 0 1px 0 rgba(0,0,0,0.75);color: #fff;\">Inicia sesion con twichtv</button>
                </a>
                ";
            } else {
                // line 277
                echo "
                ";
            }
            // line 279
            echo "                ";
            // line 280
            echo "            </div>
        </div>
    </div>
    ";
            // line 284
            echo "    ";
            // line 285
            echo "    <div class=\"tab-pane fade in\" id=\"misc\">
        <div class=\"col-md-6\" style=\"padding-right:20px;\">
            <h5>Datos personales</h5>
            <form class=\"form-horizontal\" method=\"post\" name=\"contacto\" id=\"contacto\">
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">Hash:</label>
                    <div>
                        <p class=\"form-control-static\">";
            // line 292
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "token"), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"name\">Nombre</label>
                    <input type=\"text\" id=\"name\" class=\"form-control\" disabled=\"disabled\" placeholder=\"Nombre\" name=\"name\" required=\"required\" value=\"";
            // line 297
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nombre"), "html", null, true);
            echo "\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"lastname\">Apellido</label>
                    <input type=\"text\" id=\"lastname\" class=\"form-control\" placeholder=\"Apellido\" name=\"lastname\" value=\"";
            // line 301
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "apellido"), "html", null, true);
            echo "\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"lastname\">Ciudad</label>
                    <input type=\"text\" id=\"city\" class=\"form-control\" placeholder=\"Ciudad\" name=\"city\" disabled=\"disabled\" required=\"required\" value=\"";
            // line 305
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
            // line 316
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chkgametag"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkgametag") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                    </span>
                    <input type=\"text\" id=\"gametag\" class=\"form-control\" placeholder=\"Gametag\" name=\"gametag\" value=\"";
            // line 318
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "gametag"), "html", null, true);
            echo "\" />
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"skype\">Skype</label>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\">
                        <input type=\"checkbox\" id=\"chkskype\" name=\"chkskype\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\" value=\"";
            // line 325
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chkskype"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkskype") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                    </span>
                    <input type=\"text\" id=\"skype\" class=\"form-control\" placeholder=\"Skype\" name=\"skype\" value=\"";
            // line 327
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "skype"), "html", null, true);
            echo "\" />
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"facebook\">Facebook</label>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\">
                        <input type=\"checkbox\" id=\"chkfacebook\" name=\"chkfacebook\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\" value=\"";
            // line 334
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chkfacebook"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkfacebook") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                    </span>
                    <input type=\"text\" id=\"facebook\" class=\"form-control\" placeholder=\"Facebook\" name=\"facebook\" value=\"";
            // line 336
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "facebook"), "html", null, true);
            echo "\" />
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"twitter\">Twitter</label>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\">
                        <input type=\"checkbox\" id=\"chktwitter\" name=\"chktwitter\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\" value=\"";
            // line 343
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chktwitter"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chktwitter") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                    </span>
                    <input type=\"text\" id=\"twitter\" class=\"form-control\" placeholder=\"Twitter\" name=\"twitter\" value=\"";
            // line 345
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "twitter"), "html", null, true);
            echo "\" />
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"web\">Web</label>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\">
                        <input type=\"checkbox\" id=\"chkweb\" name=\"chkweb\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\" value=\"";
            // line 352
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chkweb"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkweb") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                    </span>
                    <input type=\"text\" id=\"web\" class=\"form-control\" placeholder=\"Web\" name=\"web\" value=\"";
            // line 354
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "web"), "html", null, true);
            echo "\" />
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"twitch\">Twitch Channel</label>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\">
                        <input type=\"checkbox\" id=\"chktwitch\" name=\"chktwitch\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\" value=\"";
            // line 361
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chkweb"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkweb") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                    </span>
                    <input type=\"text\" id=\"twitch\" disabled=\"disabled\" class=\"form-control\" placeholder=\"Twitch\" name=\"twitch\" value=\"";
            // line 363
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "twitch_name"), "html", null, true);
            echo "\" />
                </div>
            </div>
            <input type=\"hidden\" name=\"contact\" value=\"1\" />
            <button class=\"btn btn-primary\" style=\"float:right;\" type=\"submit\" name=\"guardar\">Guardar</button>
        </form>
        </div>
    </div>
    ";
            // line 372
            echo "    ";
        }
        // line 373
        echo "</div>
<script type=\"text/javascript\">\$('#reputacion').tooltip('hide');\$('#nivel').tooltip('hide');\$('#dinero').tooltip('hide');\$('#linkfacebook').tooltip('hide');\$('#linktwitter').tooltip('hide');\$('#linkweb').tooltip('hide');\$('#chkgametag').tooltip('hide');\$('#chkskype').tooltip('hide');\$('#chkfacebook').tooltip('hide');\$('#chktwitter').tooltip('hide');\$('#chkweb').tooltip('hide');</script>
";
        // line 375
        $this->env->loadTemplate("_footer.twig")->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
        return array (  795 => 375,  791 => 373,  788 => 372,  777 => 363,  768 => 361,  758 => 354,  749 => 352,  739 => 345,  730 => 343,  720 => 336,  711 => 334,  701 => 327,  692 => 325,  682 => 318,  673 => 316,  659 => 305,  652 => 301,  645 => 297,  637 => 292,  628 => 285,  626 => 284,  621 => 280,  619 => 279,  615 => 277,  607 => 273,  604 => 272,  596 => 265,  593 => 263,  588 => 259,  574 => 255,  570 => 253,  564 => 249,  554 => 246,  551 => 245,  549 => 244,  540 => 242,  536 => 241,  532 => 240,  528 => 239,  521 => 238,  517 => 237,  501 => 224,  498 => 223,  496 => 222,  494 => 221,  491 => 220,  488 => 218,  485 => 216,  479 => 211,  471 => 209,  462 => 207,  458 => 206,  454 => 205,  440 => 204,  436 => 203,  428 => 202,  421 => 201,  417 => 200,  401 => 186,  398 => 184,  394 => 181,  391 => 179,  377 => 177,  374 => 176,  360 => 174,  357 => 173,  343 => 171,  340 => 170,  328 => 168,  325 => 167,  315 => 165,  313 => 164,  309 => 162,  307 => 161,  304 => 159,  293 => 151,  290 => 150,  288 => 149,  283 => 147,  277 => 146,  274 => 145,  262 => 141,  257 => 138,  255 => 137,  248 => 133,  242 => 132,  238 => 131,  235 => 130,  232 => 129,  230 => 128,  226 => 125,  222 => 123,  218 => 121,  214 => 119,  210 => 117,  206 => 115,  202 => 113,  200 => 112,  172 => 111,  168 => 110,  165 => 109,  163 => 108,  159 => 105,  153 => 103,  147 => 101,  141 => 99,  135 => 97,  129 => 95,  123 => 93,  121 => 92,  93 => 91,  89 => 90,  86 => 89,  71 => 87,  67 => 86,  59 => 85,  54 => 82,  49 => 78,  43 => 74,  41 => 73,  34 => 68,  27 => 63,  25 => 62,  23 => 3,  21 => 2,  19 => 1,);
    }
}


/* profile.twig */
class __TwigTemplate_b49e7b5bd47db2198e82af6a441a2c7eff456a4d9ada35beff698dcc77bf2b80_815373662 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_header.twig");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
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

    // line 4
    public function block_titulo($context, array $blocks = array())
    {
        // line 5
        echo "        <title>";
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

    // line 7
    public function block_css($context, array $blocks = array())
    {
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/plugins/editor/minified/themes/default.css\" type=\"text/css\" media=\"all\" />
    ";
    }

    // line 10
    public function block_js($context, array $blocks = array())
    {
        // line 11
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootstrapValidator.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/plugins/editor/minified/jquery.sceditor.bbcode.js\"></script>
        <script>
\t\t\t// Source: http://www.backalleycoder.com/2011/03/20/link-tag-css-stylesheet-load-event/
\t\t\tvar loadCSS = function(url, callback){
\t\t\t\tvar link = document.createElement('link');
\t\t\t\tlink.type = 'text/css';
\t\t\t\tlink.rel = 'stylesheet';
\t\t\t\tlink.href = url;
\t\t\t\tlink.id = 'theme-style';

\t\t\t\tdocument.getElementsByTagName('head')[0].appendChild(link);

\t\t\t\tvar img = document.createElement('img');
\t\t\t\timg.onerror = function(){
\t\t\t\t\tif(callback) callback(link);
\t\t\t\t}
\t\t\t\timg.src = url;
\t\t\t}

\t\t\t\$(document).ready(function() {
\t\t\t\tvar initEditor = function() {
\t\t\t\t\t\$(\"textarea\").sceditor({
\t\t\t\t\t\tplugins: 'bbcode',
\t\t\t\t\t\tstyle: \"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/plugins/editor/minified/jquery.sceditor.default.min.css\"
\t\t\t\t\t});
\t\t\t\t};

\t\t\t\t\$(\"#firma\").change(function() {
\t\t\t\t\tvar theme = \"../minified/themes/\" + \$(this).val() + \".min.css\";

\t\t\t\t\t\$(\"textarea\").sceditor(\"instance\").destroy();
\t\t\t\t\t\$(\"link:first\").remove();
\t\t\t\t\t\$(\"#theme-style\").remove();

\t\t\t\t\tloadCSS(theme, initEditor);
\t\t\t\t});

\t\t\t\tinitEditor();
\t\t\t});
            
            \$(function() {
                var hash = window.location.hash;
            
                // do some validation on the hash here
            
                hash && \$('ul.nav a[href=\"' + hash + '\"]').tab('show');
            });
\t\t</script>
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
        return array (  903 => 35,  877 => 12,  872 => 11,  869 => 10,  862 => 8,  859 => 7,  846 => 5,  843 => 4,  795 => 375,  791 => 373,  788 => 372,  777 => 363,  768 => 361,  758 => 354,  749 => 352,  739 => 345,  730 => 343,  720 => 336,  711 => 334,  701 => 327,  692 => 325,  682 => 318,  673 => 316,  659 => 305,  652 => 301,  645 => 297,  637 => 292,  628 => 285,  626 => 284,  621 => 280,  619 => 279,  615 => 277,  607 => 273,  604 => 272,  596 => 265,  593 => 263,  588 => 259,  574 => 255,  570 => 253,  564 => 249,  554 => 246,  551 => 245,  549 => 244,  540 => 242,  536 => 241,  532 => 240,  528 => 239,  521 => 238,  517 => 237,  501 => 224,  498 => 223,  496 => 222,  494 => 221,  491 => 220,  488 => 218,  485 => 216,  479 => 211,  471 => 209,  462 => 207,  458 => 206,  454 => 205,  440 => 204,  436 => 203,  428 => 202,  421 => 201,  417 => 200,  401 => 186,  398 => 184,  394 => 181,  391 => 179,  377 => 177,  374 => 176,  360 => 174,  357 => 173,  343 => 171,  340 => 170,  328 => 168,  325 => 167,  315 => 165,  313 => 164,  309 => 162,  307 => 161,  304 => 159,  293 => 151,  290 => 150,  288 => 149,  283 => 147,  277 => 146,  274 => 145,  262 => 141,  257 => 138,  255 => 137,  248 => 133,  242 => 132,  238 => 131,  235 => 130,  232 => 129,  230 => 128,  226 => 125,  222 => 123,  218 => 121,  214 => 119,  210 => 117,  206 => 115,  202 => 113,  200 => 112,  172 => 111,  168 => 110,  165 => 109,  163 => 108,  159 => 105,  153 => 103,  147 => 101,  141 => 99,  135 => 97,  129 => 95,  123 => 93,  121 => 92,  93 => 91,  89 => 90,  86 => 89,  71 => 87,  67 => 86,  59 => 85,  54 => 82,  49 => 78,  43 => 74,  41 => 73,  34 => 68,  27 => 63,  25 => 62,  23 => 3,  21 => 2,  19 => 1,);
    }
}
