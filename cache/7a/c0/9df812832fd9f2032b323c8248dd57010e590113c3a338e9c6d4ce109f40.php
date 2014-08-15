<?php

/* topics.twig */
class __TwigTemplate_7ac09df812832fd9f2032b323c8248dd57010e590113c3a338e9c6d4ce109f40 extends Twig_Template
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
        $this->env->loadTemplate("topics.twig", "1618755446")->display($context);
        // line 54
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "votook") == true)) {
            // line 55
            echo "<script type=\"text/javascript\">
\$( document ).ready(function() {
    \$('#addnewsok').modal('show');
});

</script>
<!-- Modal error login -->
<div class=\"modal fade\" id=\"addnewsok\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addnewsokLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\" style=\"border:0;\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\" id=\"errorloginLabel\">Datos ingresados correctamente</h4>
      </div>
      <div class=\"modal-body\">
        Se ha agregado una nueva entrada exitosamente.
      </div>
      <div class=\"modal-footer\" style=\"border:0;\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Okay</button>
      </div>
    </div>
  </div>
</div>
";
        }
        // line 79
        echo "<div class=\"row\">
  \t<div class=\"col-md-8\">
\t\t<div class=\"panel panel-default panel_bg\">
\t\t\t<div class=\"panel-body\" style=\"padding-top:5px;\">
\t\t\t\t<div class=\"panel panel-default font_12\" style=\"padding:2px;background: #e8e8e8;border:0;\">
\t\t\t\t\t<span class=\"badge margen_right10\">#1</span>Publicado el ";
        // line 84
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "fecha"), "d \\d\\e M \\d\\e\\l Y \\@ H:i "), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<h3>
\t\t\t\t";
        // line 87
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "cerrado") == 1)) {
            // line 88
            echo "\t\t\t\t\t<span class=\"label label-danger margin_right10\"><span class=\"glyphicon glyphicon-lock\"></span> Cerrado</span>
\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "fijo") == 1)) {
            // line 91
            echo "\t\t\t\t\t<span class=\"label label-success margin_right10\">Fijo</span>
\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t</h3>
\t\t\t\t<h3>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "titulo"), "html", null, true);
        echo "</h3>
\t\t\t\t<p>";
        // line 95
        echo $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "contenido");
        echo "</p>
\t\t\t\t";
        // line 97
        echo "\t\t\t\t<div class=\"margen_top30\" style=\"width:100%;\">
\t\t\t\t\t<div class=\"float_right label label-default font_18\">";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "rank"), "html", null, true);
        echo "</div>
\t\t\t\t\t";
        // line 99
        if ((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null)))) {
            // line 100
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "votos") == false)) {
                // line 101
                echo "\t\t\t\t\t\t<form method=\"post\" name=\"formvotosmas\" id=\"formvotosmas\" action=\"\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"hvotomas\" id=\"hvotomas\" value=\"1\" />
\t\t\t\t\t\t\t<button class=\"btn btn-success btn-xs float_right margen_right10\" id=\"btnmas\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"+1\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-thumbs-up\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<form method=\"post\" name=\"formvotosmenos\" id=\"formvotosmenos\" action=\"\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"hvotomenos\" id=\"hvotomenos\" value=\"1\" />
\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-xs float_right\" id=\"btnmenos\" style=\"margin-right:5px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"-1\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-thumbs-down\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t";
            } else {
                // line 114
                echo "\t\t\t\t\t\t<span class=\"float_right margen_right5\">Ya votaste</span>
\t\t\t\t\t\t";
            }
            // line 116
            echo "\t\t\t\t\t";
        }
        // line 117
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 119
        echo "\t\t\t\t<div class=\"sep margen_top80\"></div>
\t\t\t\t";
        // line 120
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "firma");
        echo "
\t\t\t</div>
\t\t</div>
  \t</div>
  \t<div class=\"col-md-4\">
  \t\t<div class=\"main_author\">
  \t\t\t<div class=\"f\" style=\"background: url('";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
        echo "/img/forums/f.png');\"></div>
  \t\t\t<div class=\"row\">
  \t\t\t\t<div class=\"col-md-6\">
  \t\t\t\t\t<div><a href=\"";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/perfil/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "perfil"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nick"), "html", null, true);
        echo "</a></div>
  \t\t\t\t\t<img src=\"";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/images/user/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "avatar"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "avatar"), "html", null, true);
        echo "\" style=\"width:100%;\">
  \t\t\t\t\t<div><label class=\"label\" style=\"background:#";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "color"), "html", null, true);
        echo ";\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "grupo"), "html", null, true);
        echo "</label></div>
  \t\t\t\t</div>
  \t\t\t\t<div class=\"col-md-6\">
  \t\t\t\t";
        // line 134
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "online") == true)) {
            // line 135
            echo "  \t\t\t\t\t<span class=\"label label-success\">Conectado</span>
  \t\t\t\t    ";
        } else {
            // line 137
            echo "  \t\t\t\t    <span class=\"label label-default\">Desconectado</span>
  \t\t\t\t";
        }
        // line 139
        echo "  \t\t\t\t<div>Nivel: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nivel"), "html", null, true);
        echo "%</div>
\t  \t\t\t\t<div class=\"progress\" style=\"height:5px;\">
\t  \t\t\t\t\t<div class=\"";
        // line 141
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nivel") >= 100)) {
            echo "progress-bar progress-bar-success";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nivel") >= 70)) {
            echo "progress-bar progress-bar-success";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nivel") >= 20)) {
            echo "progress-bar";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nivel") >= 10)) {
            echo "progress-bar progress-bar-info";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nivel") >= 1)) {
            echo "progress-bar progress-bar-warning";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nivel") <= 0)) {
            echo "progress-bar progress-bar-default";
        }
        echo "\" role=\"progressbar\" aria-valuenow=\"";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nivel") <= 0)) {
            echo "100";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nivel"), "html", null, true);
        }
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nivel") <= 0)) {
            echo "100";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nivel"), "html", null, true);
        }
        echo "%;\">
                        ";
        // line 142
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nivel") >= 100)) {
            // line 143
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Excelente</span>
                        ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nivel") >= 70)) {
            // line 145
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Muy Buena</span>
                        ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nivel") >= 30)) {
            // line 147
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Buena</span>
                        ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nivel") >= 10)) {
            // line 149
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Normal</span>
                        ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nivel") >= 1)) {
            // line 151
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Regular</span>
                        ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nivel") <= 0)) {
            // line 153
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Mala</span>
                        ";
        }
        // line 155
        echo "                    \t</div>
\t  \t\t\t\t</div>
\t  \t\t\t\t";
        // line 158
        echo "\t  \t\t\t\t<div>Reputacion: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion"), "html", null, true);
        echo "%</div>
\t  \t\t\t\t<div class=\"progress\" style=\"height:5px;\">
\t                    <div class=\"";
        // line 160
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion") >= 100)) {
            echo "progress-bar progress-bar-success";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion") >= 70)) {
            echo "progress-bar progress-bar-success";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion") >= 20)) {
            echo "progress-bar";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion") >= 10)) {
            echo "progress-bar progress-bar-info";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion") >= 1)) {
            echo "progress-bar progress-bar-warning";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion") <= 0)) {
            echo "progress-bar progress-bar-danger";
        }
        echo "\" role=\"progressbar\" aria-valuenow=\"";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion") <= 0)) {
            echo "100";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion"), "html", null, true);
        }
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion") <= 0)) {
            echo "100";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion"), "html", null, true);
        }
        echo "%;\">
\t                        ";
        // line 161
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion") >= 100)) {
            // line 162
            echo "\t                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Excelente ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion"), "html", null, true);
            echo "%</span>
\t                        ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion") >= 70)) {
            // line 164
            echo "\t                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Muy Buena ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion"), "html", null, true);
            echo "%</span>
\t                        ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion") >= 30)) {
            // line 166
            echo "\t                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Buena ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion"), "html", null, true);
            echo "%</span>
\t                        ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion") >= 10)) {
            // line 168
            echo "\t                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Normal ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion"), "html", null, true);
            echo "%</span>
\t                        ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion") > 0)) {
            // line 170
            echo "\t                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Regular ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion"), "html", null, true);
            echo "%</span>
\t                        ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion") <= 0)) {
            // line 172
            echo "\t                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Mala ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "reputacion"), "html", null, true);
            echo "%</span>
\t                        ";
        }
        // line 174
        echo "\t                    </div>
                \t</div>
                \t";
        // line 177
        echo "                \t<div id=\"contacto\">
                \t\t";
        // line 178
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "optgametag") == 1)) {
            // line 179
            echo "                \t\t    \t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
            echo "/img/icons/gamer_square.png\" class=\"margen_right5\" id=\"gametag";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nick"), "html", null, true);
            echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Gametag: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "gametag"), "html", null, true);
            echo "\" />
                \t\t";
        }
        // line 181
        echo "                \t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "optskype") == 1)) {
            // line 182
            echo "                \t\t    <a href=\"skype:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "skype"), "html", null, true);
            echo "?call\" class=\"margen_right5\">
                \t\t    \t<img src=\"";
            // line 183
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
            echo "/img/icons/skype_square_16.png\" id=\"skype";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nick"), "html", null, true);
            echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Llamara a ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nick"), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "skype"), "html", null, true);
            echo " en skype]\" />
                \t\t    </a>
                \t\t";
        }
        // line 186
        echo "                \t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "optfacebook") == 1)) {
            // line 187
            echo "                \t\t    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "facebook"), "html", null, true);
            echo "\" class=\"margen_right5\">
                \t\t    \t<img src=\"";
            // line 188
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
            echo "/img/icons/facebook_square_16.png\" id=\"facebook";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nick"), "html", null, true);
            echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver facebook de ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nick"), "html", null, true);
            echo "\" />
                \t\t    </a>
                \t\t";
        }
        // line 191
        echo "                \t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "opttwitter") == 1)) {
            // line 192
            echo "                \t\t    <a href=\"http://twitter.com/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "twitter"), "html", null, true);
            echo "?call\" class=\"margen_right5\">
                \t\t    \t<img src=\"";
            // line 193
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
            echo "/img/icons/twitter_square_16.png\" id=\"twitter";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nick"), "html", null, true);
            echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"@";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "twitter"), "html", null, true);
            echo "\" />
                \t\t    </a>
                \t\t";
        }
        // line 196
        echo "                \t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "optweb") == 1)) {
            // line 197
            echo "                \t\t    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "web"), "html", null, true);
            echo "\" class=\"margen_right5\">
                \t\t    \t<img src=\"";
            // line 198
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
            echo "/img/icons/chrome_square_16.png\" id=\"web";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nick"), "html", null, true);
            echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver web de ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nick"), "html", null, true);
            echo "\" />
                \t\t    </a>
                \t\t";
        }
        // line 201
        echo "                \t\t<script type=\"text/javascript\">
                \t\t\$(\"#btnmas\").tooltip('hide');
                \t\t\$(\"#btnmenos\").tooltip('hide');
                \t\t\$(\"#gametag";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nick"), "html", null, true);
        echo "\").tooltip('hide');
                \t\t\$(\"#skype";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nick"), "html", null, true);
        echo "\").tooltip('hide');
                \t\t\$(\"#facebook";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nick"), "html", null, true);
        echo "\").tooltip('hide');
                \t\t\$(\"#twitter";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nick"), "html", null, true);
        echo "\").tooltip('hide');
                \t\t\$(\"#web";
        // line 208
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "autor"), "nick"), "html", null, true);
        echo "\").tooltip('hide');
                \t\t</script>
                \t</div>
  \t\t\t\t</div>
  \t\t\t</div>
  \t\t</div>
  \t</div>
</div>
";
        // line 216
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "topics.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 216,  437 => 208,  433 => 207,  429 => 206,  425 => 205,  421 => 204,  416 => 201,  404 => 198,  399 => 197,  396 => 196,  384 => 193,  379 => 192,  376 => 191,  364 => 188,  359 => 187,  356 => 186,  342 => 183,  337 => 182,  334 => 181,  322 => 179,  320 => 178,  317 => 177,  313 => 174,  307 => 172,  301 => 170,  295 => 168,  289 => 166,  283 => 164,  277 => 162,  275 => 161,  247 => 160,  241 => 158,  237 => 155,  233 => 153,  229 => 151,  225 => 149,  221 => 147,  217 => 145,  213 => 143,  211 => 142,  183 => 141,  177 => 139,  173 => 137,  169 => 135,  167 => 134,  159 => 131,  151 => 130,  143 => 129,  135 => 126,  126 => 120,  123 => 119,  120 => 117,  117 => 116,  113 => 114,  98 => 101,  95 => 100,  93 => 99,  89 => 98,  86 => 97,  82 => 95,  78 => 94,  75 => 93,  71 => 91,  68 => 90,  64 => 88,  62 => 87,  56 => 84,  49 => 79,  23 => 55,  21 => 54,  19 => 1,);
    }
}


/* topics.twig */
class __TwigTemplate_7ac09df812832fd9f2032b323c8248dd57010e590113c3a338e9c6d4ce109f40_1618755446 extends Twig_Template
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

    // line 2
    public function block_titulo($context, array $blocks = array())
    {
        // line 3
        echo "    <title>
    ";
        // line 4
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "cerrado") == 1)) {
            // line 5
            echo "    [Cerrado]
    ";
        }
        // line 7
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "fijo") == 1)) {
            // line 8
            echo "\t[Fijo]
\t";
        }
        // line 10
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "tema"), "titulo"), "html", null, true);
        echo "
\t</title>
";
    }

    // line 13
    public function block_css($context, array $blocks = array())
    {
        // line 14
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/plugins/editor/minified/themes/default.css\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/css/bootstrap-multiselect.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
        echo "/css/forums.css\" type=\"text/css\" />
";
    }

    // line 18
    public function block_js($context, array $blocks = array())
    {
        // line 19
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/jquery.confirm.min.js\"/></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootstrapValidator.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/plugins/editor/minified/jquery.sceditor.bbcode.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootstrap-multiselect.js\"></script>
    <script type=\"text/javascript\">
        // Source: http://www.backalleycoder.com/2011/03/20/link-tag-css-stylesheet-load-event/
            var loadCSS = function(url, callback){
                var link = document.createElement('link');
                link.type = 'text/css';
                link.rel = 'stylesheet';
                link.href = url;
                link.id = 'theme-style';

                document.getElementsByTagName('head')[0].appendChild(link);

                var img = document.createElement('img');
                img.onerror = function(){
                    if(callback) callback(link);
                }
                img.src = url;
            }

            \$(document).ready(function() {
                var initEditor = function() {
                    \$(\"textarea\").sceditor({
                        plugins: 'bbcode',
                        style: \"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/plugins/editor/minified/jquery.sceditor.default.min.css\"
                    });
                };

                initEditor();
            });
    </script>
";
    }

    public function getTemplateName()
    {
        return "topics.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  584 => 45,  558 => 22,  554 => 21,  550 => 20,  545 => 19,  542 => 18,  534 => 16,  530 => 15,  525 => 14,  522 => 13,  514 => 10,  510 => 8,  507 => 7,  503 => 5,  501 => 4,  498 => 3,  495 => 2,  448 => 216,  437 => 208,  433 => 207,  429 => 206,  425 => 205,  421 => 204,  416 => 201,  404 => 198,  399 => 197,  396 => 196,  384 => 193,  379 => 192,  376 => 191,  364 => 188,  359 => 187,  356 => 186,  342 => 183,  337 => 182,  334 => 181,  322 => 179,  320 => 178,  317 => 177,  313 => 174,  307 => 172,  301 => 170,  295 => 168,  289 => 166,  283 => 164,  277 => 162,  275 => 161,  247 => 160,  241 => 158,  237 => 155,  233 => 153,  229 => 151,  225 => 149,  221 => 147,  217 => 145,  213 => 143,  211 => 142,  183 => 141,  177 => 139,  173 => 137,  169 => 135,  167 => 134,  159 => 131,  151 => 130,  143 => 129,  135 => 126,  126 => 120,  123 => 119,  120 => 117,  117 => 116,  113 => 114,  98 => 101,  95 => 100,  93 => 99,  89 => 98,  86 => 97,  82 => 95,  78 => 94,  75 => 93,  71 => 91,  68 => 90,  64 => 88,  62 => 87,  56 => 84,  49 => 79,  23 => 55,  21 => 54,  19 => 1,);
    }
}
