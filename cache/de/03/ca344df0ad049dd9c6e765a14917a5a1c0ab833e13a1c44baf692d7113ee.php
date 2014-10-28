<?php

/* tournaments.twig */
class __TwigTemplate_de03ca344df0ad049dd9c6e765a14917a5a1c0ab833e13a1c44baf692d7113ee extends Twig_Template
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
        ob_start();
        // line 2
        $context["active"] = "bracket";
        // line 3
        $this->env->loadTemplate("tournaments.twig", "1910280378")->display($context);
        // line 8
        $context["id"] = 1;
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "torneos"));
        foreach ($context['_seq'] as $context["_key"] => $context["torneo"]) {
            // line 10
            $context["registrados"] = (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "registrados") * 100) / $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "equipos"));
            // line 11
            $context["confirmados"] = (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "confirmados") * 100) / $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "equipos"));
            // line 12
            echo "<div class=\"jumbotron\" style=\"background:url('";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
            echo "/img/bgt.jpg');color:white;box-shadow: 1px 1px 10px #000;\">
  <h1>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "titulo"), "html", null, true);
            echo "</h1>
  <p>";
            // line 14
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "descripcion"), 0, 80), "html", null, true);
            echo "...</p>
  <span class=\"label label-danger\">";
            // line 15
            if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "terminado") == 1)) {
                echo "Finalizado";
            } else {
                echo "Inscripciones abiertas";
            }
            echo "</span>
  <span class=\"label label-info\">Cupos: ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "equipos"), "html", null, true);
            echo "</span>
  <span class=\"label label-warning\">Registrados: ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "registrados"), "html", null, true);
            echo "</span>
  <span class=\"label label-success\">Confirmados: ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "confirmados"), "html", null, true);
            echo "</span>
  <span class=\"label label-danger\">Estado: ";
            // line 19
            if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "activo") == 0)) {
                echo "Inactivo";
            } else {
                echo "Activo";
            }
            echo "</span>
  <span class=\"label label-default\"></span>
  <p>
      <div class=\"progress\">
        <div class=\"progress-bar progress-bar-success\" id=\"confirmados";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" style=\"width: ";
            echo twig_escape_filter($this->env, (isset($context["confirmados"]) ? $context["confirmados"] : null), "html", null, true);
            echo "%\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"El ";
            echo twig_escape_filter($this->env, (isset($context["confirmados"]) ? $context["confirmados"] : null), "html", null, true);
            echo "% de los jugadores ha confirmado\">
            <span class=\"sr-only\">";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["confirmados"]) ? $context["confirmados"] : null), "html", null, true);
            echo "%</span>
        </div>
        <div class=\"progress-bar progress-bar-warning\" id=\"registrados";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" style=\"width: ";
            if (((isset($context["registrados"]) ? $context["registrados"] : null) >= (isset($context["confirmados"]) ? $context["confirmados"] : null))) {
                echo twig_escape_filter($this->env, ((isset($context["registrados"]) ? $context["registrados"] : null) - (isset($context["confirmados"]) ? $context["confirmados"] : null)), "html", null, true);
                echo "%";
            } else {
                echo twig_escape_filter($this->env, (isset($context["registrados"]) ? $context["registrados"] : null), "html", null, true);
                echo "%";
            }
            echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Jugadores registrados ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "registrados"), "html", null, true);
            echo "\">
            <span class=\"sr-only\">";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["registrados"]) ? $context["registrados"] : null), "html", null, true);
            echo "%</span>
        </div>
      </div>
  </p>
  <p><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/brackets/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "id"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "link"), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg\" role=\"button\">Ver bracket</a></p>
</div>
<script>
\$('#confirmados";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "').tooltip('hide');
\$('#registrados";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "').tooltip('hide');
</script>
";
            // line 37
            $context["id"] = ((isset($context["id"]) ? $context["id"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['torneo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        $this->env->loadTemplate("_footer.twig")->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "tournaments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 39,  134 => 37,  129 => 35,  125 => 34,  115 => 31,  108 => 27,  94 => 26,  89 => 24,  81 => 23,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  50 => 15,  46 => 14,  42 => 13,  35 => 12,  33 => 11,  31 => 10,  27 => 9,  25 => 8,  23 => 3,  21 => 2,  19 => 1,);
    }
}


/* tournaments.twig */
class __TwigTemplate_de03ca344df0ad049dd9c6e765a14917a5a1c0ab833e13a1c44baf692d7113ee_1910280378 extends Twig_Template
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
        echo "<title>Bracket</title>";
    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        echo " ";
    }

    // line 6
    public function block_js($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "tournaments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 6,  194 => 5,  188 => 4,  140 => 39,  134 => 37,  129 => 35,  125 => 34,  115 => 31,  108 => 27,  94 => 26,  89 => 24,  81 => 23,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  50 => 15,  46 => 14,  42 => 13,  35 => 12,  33 => 11,  31 => 10,  27 => 9,  25 => 8,  23 => 3,  21 => 2,  19 => 1,);
    }
}
