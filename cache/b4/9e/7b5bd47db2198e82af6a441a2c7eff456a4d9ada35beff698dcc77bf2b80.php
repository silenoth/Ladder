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
        $this->env->loadTemplate("profile.twig", "1178258667")->display($context);
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
    ";
        // line 71
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            // line 72
            echo "    <li><a href=\"#mensajes\" data-toggle=\"tab\">Mensajes</a></li>
    ";
        }
        // line 74
        echo "    <li><a href=\"#actividad\" data-toggle=\"tab\">Actividad</a></li>
    ";
        // line 75
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            // line 76
            echo "    <li><a href=\"#torneos\" data-toggle=\"tab\">Mis torneos</a></li>
    <li><a href=\"#apps\" data-toggle=\"tab\">Aplicaciones</a></li>
    <li><a href=\"#misc\" data-toggle=\"tab\">Otras opciones</a></li>
";
        }
        // line 80
        echo "</ul>
<!-- Tab panels -->
<div class=\"tab-content\">
    ";
        // line 84
        echo "    <div class=\"tab-pane fade in active\" id=\"perfil\">
        <div class=\"row\">
            <div class=\"col-md-9 col-md-push-3\">
                <p style=\"padding-top:20px;\"><span style=\"font-size:25px;\">";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick"), "html", null, true);
        echo "</span> - <span class=\"label\" style=\"background:#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "color"), "html", null, true);
        echo ";\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "grupo"), "html", null, true);
        echo "</span></p>
                <p>Ingresó el ";
        // line 88
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "ingreso"), "d \\d\\e M \\d\\e Y \\a\\ \\l\\a\\s g:ia"), "html", null, true);
        echo "</p>
                <p>";
        // line 89
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
        // line 91
        echo "                <p style=\"margin-bottom:5px;\">Reputación</p>
                <div class=\"progress\" id=\"reputacion\" style=\"margin-bottom:10px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Reputación obtenida ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
        echo "%\">
                    <div class=\"";
        // line 93
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
        // line 94
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 100)) {
            // line 95
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Excelente ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                        ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 70)) {
            // line 97
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Muy Buena ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                        ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 30)) {
            // line 99
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Buena ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                        ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 10)) {
            // line 101
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Normal ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                        ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") > 0)) {
            // line 103
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Regular ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                        ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") <= 0)) {
            // line 105
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Mala ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                        ";
        }
        // line 107
        echo "                    </div>
                </div>
                ";
        // line 110
        echo "                ";
        // line 111
        echo "                <p style=\"margin-bottom:5px;\">Nivel</p>
                <div class=\"progress\" id=\"nivel\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nivel de usuario ";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel"), "html", null, true);
        echo "%\">
                    <div class=\"";
        // line 113
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
        // line 114
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 100)) {
            // line 115
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Excelente</span>
                        ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 70)) {
            // line 117
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Muy Buena</span>
                        ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 30)) {
            // line 119
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Buena</span>
                        ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 10)) {
            // line 121
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Normal</span>
                        ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 1)) {
            // line 123
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Regular</span>
                        ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") <= 0)) {
            // line 125
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Mala</span>
                        ";
        }
        // line 127
        echo "                    </div>
                </div>
                ";
        // line 130
        echo "                ";
        // line 131
        echo "                ";
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            // line 132
            echo "                <p style=\"margin-bottom:5px;\">Polvo arcano <i><a href=\"\"><span style=\"font-size:12px;\">Mas info</span></a></i></p>
                <div class=\"progress\" id=\"dinero\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Total polvo arcano ";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "dinero"), "html", null, true);
            echo " / 20000\">
                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "dinero"), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "dinero") / 100) / 2), "html", null, true);
            echo "%;\">
                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "dinero"), "html", null, true);
            echo "</span>
                    </div>
                </div>
                ";
        }
        // line 139
        echo "                ";
        // line 140
        echo "            </div>
            <div class=\"col-md-3 col-md-pull-9\">
                <a href=\"#\" class=\"thumbnail\" style=\"margin-top: 25px;\">
                    <img  src=\"";
        // line 143
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
        // line 147
        echo "            <div class=\"col-xs-12 col-md-8\">
                <h5>Firma ";
        // line 148
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            echo "- Vista previa";
        }
        echo "</h5>
                <div id=\"sig\">";
        // line 149
        echo $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "firma");
        echo "</div>
                <br />
                ";
        // line 151
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            // line 152
            echo "                <form method=\"post\" id=\"firmaform\" name=\"firmaform\">
                    <textarea id=\"firma\" name=\"firma\" style=\"width:100%; height:200px;\">";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "firmaclean"), "html", null, true);
            echo "</textarea>

                    <div id=\"contador\">500 carácteres maximo.</div>
                    <br />
                    <input type=\"hidden\" name=\"signature\" value=\"1\" />
                    <button class=\"btn btn-primary\" style=\"float:right;\" type=\"submit\" name=\"modificar\">Modificar firma</button>
                </form>
                ";
        }
        // line 161
        echo "            </div>
            ";
        // line 163
        echo "            ";
        // line 164
        echo "            <div class=\"col-xs-6 col-md-4\">
                <h5>Contacto</h5>
                ";
        // line 166
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkgametag") == "1")) {
            // line 167
            echo "                <h5><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
            echo "/img/icons/gamer_square.png\" />Gametag: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "gametag"), "html", null, true);
            echo "</h5>
                ";
        }
        // line 169
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkskype") == "1")) {
            // line 170
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
        // line 172
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkfacebook") == "1")) {
            // line 173
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
        // line 175
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chktwitter") == "1")) {
            // line 176
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
        // line 178
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkweb") == "1")) {
            // line 179
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
        // line 181
        echo "            </div>
        ";
        // line 183
        echo "        </div>
    </div>
    ";
        // line 186
        echo "
    ";
        // line 188
        echo "    ";
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            // line 189
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
            // line 203
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "pm"));
            foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
                // line 204
                echo "            <tr ";
                if (($this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : null), "estado") == 0)) {
                    echo "class=\"danger\"";
                }
                echo ">
                <td><img src=\"";
                // line 205
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
                echo "/img/icons/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : null), "icono"), "html", null, true);
                echo ".png\" /></td>
                <td>";
                // line 206
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : null), "titulo"), 0, 20), "html", null, true);
                echo "</td>
                <td>";
                // line 207
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
                // line 208
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : null), "mensaje"), 0, 40), "html", null, true);
                echo "</td>
                <td>";
                // line 209
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : null), "fecha"), "html", null, true);
                echo "</td>
                <td>";
                // line 210
                if (($this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : null), "estado") == 0)) {
                    echo "<span class=\"label label-danger\">No leído</span>";
                } else {
                    echo "<span class=\"label label-success\">Leído</span>";
                }
                echo "</td>
            </tr>
            ";
                // line 212
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : null), "prioridad"), "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "        </tbody>
        </table>
        </div>
    </div>
    ";
        }
        // line 219
        echo "    ";
        // line 220
        echo "
    ";
        // line 222
        echo "    <div class=\"tab-pane fade in\" id=\"actividad\">Actividad</div>
    ";
        // line 224
        echo "
    ";
        // line 225
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            // line 226
            echo "    ";
            // line 227
            echo "    <div class=\"tab-pane fade in\" id=\"torneos\">
        <h4>Gamertag: <span class=\"label label-danger\">";
            // line 228
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
            // line 241
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "torneos"));
            foreach ($context['_seq'] as $context["_key"] => $context["torneo"]) {
                // line 242
                echo "                <tr ";
                if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "id") == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "utorneo"))) {
                    echo "class=\"success\"";
                }
                echo ">
                    <td>";
                // line 243
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "titulo"), "html", null, true);
                echo "</td>
                    <td>";
                // line 244
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "descripcion"), 0, 50), "html", null, true);
                echo "...</td>
                    <td>";
                // line 245
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "fecha"), "d \\d\\e M \\d\\e\\l Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 246
                if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "activo") == 1)) {
                    echo "Activo";
                } else {
                    echo "Cerrado";
                }
                echo "</td>
                    <td>
                        ";
                // line 248
                if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "activo") == 1)) {
                    // line 249
                    echo "                        <div class=\"progress\" style=\"margin-bottom:0px;\">
                            <div class=\"progress-bar progress-bar-success\" id=\"cupos";
                    // line 250
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\" style=\"width: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "equipos"), "html", null, true);
                    echo "%\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"El ";
                    echo twig_escape_filter($this->env, (isset($context["confirmados"]) ? $context["confirmados"] : null), "html", null, true);
                    echo "% de los jugadores ha confirmado\"></div>
                        </div>
                        ";
                } else {
                    // line 253
                    echo "                        <div class=\"progress\" style=\"margin-bottom:0px;\">
                            <div class=\"progress-bar progress-bar-success\" style=\"width: 100%\"></div>
                        </div>
                        ";
                }
                // line 257
                echo "                    </td>
                    <td>
                        <span class=\"label label-success\">Inscrito</span><a href=\"";
                // line 259
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
            // line 263
            echo "            </tbody>
        </table>
    </div>
    ";
            // line 267
            echo "
    ";
            // line 269
            echo "    <div class=\"tab-pane fade in\" id=\"apps\">
        <div class=\"panel panel-default\" style=\"margin-top:10px;\">
            <div class=\"panel-heading\" style=\"height: 40px;\">
                <h3 class=\"panel-title\" style=\"float: left;\">Aplicaciones</h3>
            </div>
            <div class=\"panel-body\">
                ";
            // line 276
            echo "                ";
            if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "twitch_islogin") == false)) {
                // line 277
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "twitch_login"), "html", null, true);
                echo "\">
                    <button class=\"btn btn-default\" style=\"background: -webkit-gradient(linear,left top,left bottom,from(#8266b6),to(#533787));background: -moz-linear-gradient(top,#8266b6,#533787);background: -o-linear-gradient(top,#8266b6,#533787);background: linear-gradient(top,#8266b6,#533787);background-color: #6a4e9e;border-top: 1px solid #5b3f8f;border-left: 1px solid #412771;border-right: 1px solid #412771;border-bottom: 1px solid #2a1453;box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);text-shadow: 0 1px 0 rgba(0,0,0,0.75);-moz-text-shadow: 0 1px 0 rgba(0,0,0,0.75);-webkit-text-shadow: 0 1px 0 rgba(0,0,0,0.75);color: #fff;\">Inicia sesion con twichtv</button>
                </a>
                ";
            } else {
                // line 281
                echo "
                ";
            }
            // line 283
            echo "                ";
            // line 284
            echo "            </div>
        </div>
    </div>
    ";
            // line 288
            echo "    ";
            // line 289
            echo "    <div class=\"tab-pane fade in\" id=\"misc\">
        <div class=\"col-md-6\" style=\"padding-right:20px;\">
            <h5>Datos personales</h5>
            <form class=\"form-horizontal\" method=\"post\" name=\"contacto\" id=\"contacto\">
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">Hash:</label>
                    <div>
                        <p class=\"form-control-static\">";
            // line 296
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "token"), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"name\">Nombre</label>
                    <input type=\"text\" id=\"name\" class=\"form-control\" disabled=\"disabled\" placeholder=\"Nombre\" name=\"name\" required=\"required\" value=\"";
            // line 301
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nombre"), "html", null, true);
            echo "\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"lastname\">Apellido</label>
                    <input type=\"text\" id=\"lastname\" class=\"form-control\" placeholder=\"Apellido\" name=\"lastname\" value=\"";
            // line 305
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "apellido"), "html", null, true);
            echo "\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"lastname\">Ciudad</label>
                    <input type=\"text\" id=\"city\" class=\"form-control\" placeholder=\"Ciudad\" name=\"city\" disabled=\"disabled\" required=\"required\" value=\"";
            // line 309
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
            // line 320
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chkgametag"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkgametag") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                    </span>
                    <input type=\"text\" id=\"gametag\" class=\"form-control\" placeholder=\"Gametag\" name=\"gametag\" value=\"";
            // line 322
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "gametag"), "html", null, true);
            echo "\" />
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"skype\">Skype</label>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\">
                        <input type=\"checkbox\" id=\"chkskype\" name=\"chkskype\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\" value=\"";
            // line 329
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chkskype"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkskype") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                    </span>
                    <input type=\"text\" id=\"skype\" class=\"form-control\" placeholder=\"Skype\" name=\"skype\" value=\"";
            // line 331
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "skype"), "html", null, true);
            echo "\" />
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"facebook\">Facebook</label>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\">
                        <input type=\"checkbox\" id=\"chkfacebook\" name=\"chkfacebook\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\" value=\"";
            // line 338
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chkfacebook"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkfacebook") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                    </span>
                    <input type=\"text\" id=\"facebook\" class=\"form-control\" placeholder=\"Facebook\" name=\"facebook\" value=\"";
            // line 340
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "facebook"), "html", null, true);
            echo "\" />
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"twitter\">Twitter</label>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\">
                        <input type=\"checkbox\" id=\"chktwitter\" name=\"chktwitter\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\" value=\"";
            // line 347
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chktwitter"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chktwitter") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                    </span>
                    <input type=\"text\" id=\"twitter\" class=\"form-control\" placeholder=\"Twitter\" name=\"twitter\" value=\"";
            // line 349
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "twitter"), "html", null, true);
            echo "\" />
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"web\">Web</label>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\">
                        <input type=\"checkbox\" id=\"chkweb\" name=\"chkweb\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\" value=\"";
            // line 356
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chkweb"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkweb") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                    </span>
                    <input type=\"text\" id=\"web\" class=\"form-control\" placeholder=\"Web\" name=\"web\" value=\"";
            // line 358
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "web"), "html", null, true);
            echo "\" />
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"twitch\">Twitch Channel</label>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\">
                        <input type=\"checkbox\" id=\"chktwitch\" name=\"chktwitch\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\" value=\"";
            // line 365
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "valores"), "chkweb"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "opciones"), "chkweb") == "1")) {
                echo "checked";
            }
            echo " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" />
                    </span>
                    <input type=\"text\" id=\"twitch\" disabled=\"disabled\" class=\"form-control\" placeholder=\"Twitch\" name=\"twitch\" value=\"";
            // line 367
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
            // line 376
            echo "    ";
        }
        // line 377
        echo "</div>
<script type=\"text/javascript\">\$('#reputacion').tooltip('hide');\$('#nivel').tooltip('hide');\$('#dinero').tooltip('hide');\$('#linkfacebook').tooltip('hide');\$('#linktwitter').tooltip('hide');\$('#linkweb').tooltip('hide');\$('#chkgametag').tooltip('hide');\$('#chkskype').tooltip('hide');\$('#chkfacebook').tooltip('hide');\$('#chktwitter').tooltip('hide');\$('#chkweb').tooltip('hide');</script>
";
        // line 379
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
        return array (  808 => 379,  804 => 377,  801 => 376,  790 => 367,  781 => 365,  771 => 358,  762 => 356,  752 => 349,  743 => 347,  733 => 340,  724 => 338,  714 => 331,  705 => 329,  695 => 322,  686 => 320,  672 => 309,  665 => 305,  658 => 301,  650 => 296,  641 => 289,  639 => 288,  634 => 284,  632 => 283,  628 => 281,  620 => 277,  617 => 276,  609 => 269,  606 => 267,  601 => 263,  587 => 259,  583 => 257,  577 => 253,  567 => 250,  564 => 249,  562 => 248,  553 => 246,  549 => 245,  545 => 244,  541 => 243,  534 => 242,  530 => 241,  514 => 228,  511 => 227,  509 => 226,  507 => 225,  504 => 224,  501 => 222,  498 => 220,  496 => 219,  489 => 214,  481 => 212,  472 => 210,  468 => 209,  464 => 208,  450 => 207,  446 => 206,  438 => 205,  431 => 204,  427 => 203,  411 => 189,  408 => 188,  405 => 186,  401 => 183,  398 => 181,  384 => 179,  381 => 178,  367 => 176,  364 => 175,  350 => 173,  347 => 172,  335 => 170,  332 => 169,  322 => 167,  320 => 166,  316 => 164,  314 => 163,  311 => 161,  300 => 153,  297 => 152,  295 => 151,  290 => 149,  284 => 148,  281 => 147,  269 => 143,  264 => 140,  262 => 139,  255 => 135,  249 => 134,  245 => 133,  242 => 132,  239 => 131,  237 => 130,  233 => 127,  229 => 125,  225 => 123,  221 => 121,  217 => 119,  213 => 117,  209 => 115,  207 => 114,  179 => 113,  175 => 112,  172 => 111,  170 => 110,  166 => 107,  160 => 105,  154 => 103,  148 => 101,  142 => 99,  136 => 97,  130 => 95,  128 => 94,  100 => 93,  96 => 92,  93 => 91,  78 => 89,  74 => 88,  66 => 87,  61 => 84,  56 => 80,  50 => 76,  48 => 75,  45 => 74,  41 => 72,  39 => 71,  34 => 68,  27 => 63,  25 => 62,  23 => 3,  21 => 2,  19 => 1,);
    }
}


/* profile.twig */
class __TwigTemplate_b49e7b5bd47db2198e82af6a441a2c7eff456a4d9ada35beff698dcc77bf2b80_1178258667 extends Twig_Template
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
        return array (  916 => 35,  890 => 12,  885 => 11,  882 => 10,  875 => 8,  872 => 7,  859 => 5,  856 => 4,  808 => 379,  804 => 377,  801 => 376,  790 => 367,  781 => 365,  771 => 358,  762 => 356,  752 => 349,  743 => 347,  733 => 340,  724 => 338,  714 => 331,  705 => 329,  695 => 322,  686 => 320,  672 => 309,  665 => 305,  658 => 301,  650 => 296,  641 => 289,  639 => 288,  634 => 284,  632 => 283,  628 => 281,  620 => 277,  617 => 276,  609 => 269,  606 => 267,  601 => 263,  587 => 259,  583 => 257,  577 => 253,  567 => 250,  564 => 249,  562 => 248,  553 => 246,  549 => 245,  545 => 244,  541 => 243,  534 => 242,  530 => 241,  514 => 228,  511 => 227,  509 => 226,  507 => 225,  504 => 224,  501 => 222,  498 => 220,  496 => 219,  489 => 214,  481 => 212,  472 => 210,  468 => 209,  464 => 208,  450 => 207,  446 => 206,  438 => 205,  431 => 204,  427 => 203,  411 => 189,  408 => 188,  405 => 186,  401 => 183,  398 => 181,  384 => 179,  381 => 178,  367 => 176,  364 => 175,  350 => 173,  347 => 172,  335 => 170,  332 => 169,  322 => 167,  320 => 166,  316 => 164,  314 => 163,  311 => 161,  300 => 153,  297 => 152,  295 => 151,  290 => 149,  284 => 148,  281 => 147,  269 => 143,  264 => 140,  262 => 139,  255 => 135,  249 => 134,  245 => 133,  242 => 132,  239 => 131,  237 => 130,  233 => 127,  229 => 125,  225 => 123,  221 => 121,  217 => 119,  213 => 117,  209 => 115,  207 => 114,  179 => 113,  175 => 112,  172 => 111,  170 => 110,  166 => 107,  160 => 105,  154 => 103,  148 => 101,  142 => 99,  136 => 97,  130 => 95,  128 => 94,  100 => 93,  96 => 92,  93 => 91,  78 => 89,  74 => 88,  66 => 87,  61 => 84,  56 => 80,  50 => 76,  48 => 75,  45 => 74,  41 => 72,  39 => 71,  34 => 68,  27 => 63,  25 => 62,  23 => 3,  21 => 2,  19 => 1,);
    }
}
