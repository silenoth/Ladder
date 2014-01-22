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
        $context["active"] = "home";
        // line 2
        $this->env->loadTemplate("profile.twig", "549974127")->display($context);
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
  <li><a href=\"#pagina\" data-toggle=\"tab\">Mi página</a></li>
  <li><a href=\"#misc\" data-toggle=\"tab\">Otras opciones</a></li>
</ul>

<!-- Tab panels -->
<div class=\"tab-content\">
";
        // line 25
        echo "  <div class=\"tab-pane fade in active\" id=\"perfil\">
    <div class=\"row\">
            <div class=\"col-md-9 col-md-push-3\">
                <p style=\"padding-top:20px;\"><span style=\"font-size:25px;\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick"), "html", null, true);
        echo "</span> - <span class=\"label\" style=\"background:#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "color"), "html", null, true);
        echo ";\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "grupo"), "html", null, true);
        echo "</span></p>
                <p>Ingresó el ";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "ingreso"), "d \\d\\e M \\d\\e Y \\a\\ \\l\\a\\s g:ia"), "html", null, true);
        echo "</p>
                <p>";
        // line 30
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
        // line 32
        echo "                <p style=\"margin-bottom:5px;\">Reputación</p>
                <div class=\"progress\" id=\"reputacion\" style=\"margin-bottom:10px;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Reputación obtenida ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
        echo "%\">
                  <div class=\"";
        // line 34
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
        // line 35
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 100)) {
            // line 36
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Excelente ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 70)) {
            // line 38
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Muy Buena ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 30)) {
            // line 40
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Buena ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") >= 10)) {
            // line 42
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Normal ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") > 0)) {
            // line 44
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Regular ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion") <= 0)) {
            // line 46
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Mala ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "reputacion"), "html", null, true);
            echo "%</span>
                    ";
        }
        // line 48
        echo "                  </div>
                </div>
                ";
        // line 51
        echo "                ";
        // line 52
        echo "                <p style=\"margin-bottom:5px;\">Nivel</p>
                <div class=\"progress\" id=\"nivel\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nivel de usuario ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel"), "html", null, true);
        echo "%\">
                  <div class=\"";
        // line 54
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
        // line 55
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 100)) {
            // line 56
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Excelente</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 70)) {
            // line 58
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Muy Buena</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 30)) {
            // line 60
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Buena</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 10)) {
            // line 62
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Normal</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") >= 1)) {
            // line 64
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Regular</span>
                    ";
        } elseif (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nivel") <= 0)) {
            // line 66
            echo "                        <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">Mala</span>
                    ";
        }
        // line 68
        echo "                  </div>
                </div>
                ";
        // line 71
        echo "                ";
        // line 72
        echo "                ";
        if (((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null))) && ((isset($context["sesion"]) ? $context["sesion"] : null) == $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "nick")))) {
            // line 73
            echo "                <p style=\"margin-bottom:5px;\">Polvo arcano <i><a href=\"\"><span style=\"font-size:12px;\">Mas info</span></a></i></p>
                <div class=\"progress\" id=\"dinero\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Total polvo arcano ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "dinero"), "html", null, true);
            echo " / 20000\">
                  <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "dinero"), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "dinero") / 100) / 2), "html", null, true);
            echo "%;\">
                    <span class=\"sr-only\" style=\"position:static;text-shadow: 1px 1px 1px #686868;\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "dinero"), "html", null, true);
            echo "</span>
                  </div>
                </div>
                ";
        }
        // line 80
        echo "                ";
        // line 81
        echo "            </div>
            <div class=\"col-md-3 col-md-pull-9\">
                <a href=\"#\" class=\"thumbnail\" style=\"margin-top: 25px;\">
                    <img  src=\"";
        // line 84
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
            <div class=\"col-xs-12 col-md-8\">
                Firma
                <p>";
        // line 89
        echo $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "firma");
        echo "</p>
            </div>
            <div class=\"col-xs-6 col-md-4\">
                Contacto
                <p></p>
            </div>
    </div>
  </div>
";
        // line 98
        echo "  <div class=\"tab-pane fade in\" id=\"mensajes\">que</div>
  <div class=\"tab-pane fade in\" id=\"actividad\">que</div>
  <div class=\"tab-pane fade in\" id=\"pagina\">tal</div>
  <div class=\"tab-pane fade in\" id=\"misc\">...</div>
</div>
<script type=\"text/javascript\">
\$('#reputacion').tooltip('hide');
\$('#nivel').tooltip('hide');
\$('#dinero').tooltip('hide');
\$('#perfil a').click(function (e) {
  e.preventDefault()
  \$(this).tab('show')
});
</script>
";
        // line 112
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
        return array (  294 => 112,  278 => 98,  267 => 89,  253 => 84,  248 => 81,  246 => 80,  239 => 76,  233 => 75,  229 => 74,  226 => 73,  223 => 72,  221 => 71,  217 => 68,  213 => 66,  209 => 64,  205 => 62,  201 => 60,  197 => 58,  193 => 56,  191 => 55,  163 => 54,  159 => 53,  156 => 52,  154 => 51,  150 => 48,  144 => 46,  138 => 44,  132 => 42,  126 => 40,  120 => 38,  114 => 36,  112 => 35,  84 => 34,  80 => 33,  77 => 32,  62 => 30,  58 => 29,  50 => 28,  45 => 25,  32 => 13,  25 => 8,  23 => 7,  21 => 2,  19 => 1,);
    }
}


/* profile.twig */
class __TwigTemplate_bf3f3be42e5be095c48fed500f7c2365897f714b1b95fbf3684351ba1455f8c2_549974127 extends Twig_Template
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
        echo "<title>Bienvenido ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "usuario"), "html", null, true);
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
        return array (  342 => 4,  339 => 3,  294 => 112,  278 => 98,  267 => 89,  253 => 84,  248 => 81,  246 => 80,  239 => 76,  233 => 75,  229 => 74,  226 => 73,  223 => 72,  221 => 71,  217 => 68,  213 => 66,  209 => 64,  205 => 62,  201 => 60,  197 => 58,  193 => 56,  191 => 55,  163 => 54,  159 => 53,  156 => 52,  154 => 51,  150 => 48,  144 => 46,  138 => 44,  132 => 42,  126 => 40,  120 => 38,  114 => 36,  112 => 35,  84 => 34,  80 => 33,  77 => 32,  62 => 30,  58 => 29,  50 => 28,  45 => 25,  32 => 13,  25 => 8,  23 => 7,  21 => 2,  19 => 1,);
    }
}
