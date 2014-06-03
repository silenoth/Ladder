<?php

/* bracket.twig */
class __TwigTemplate_7ea15824e45f3fa1cc7e5010525defb126acaab7f76744f14445fd504ef93b00 extends Twig_Template
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
        $context["active"] = "bracket";
        // line 2
        $this->env->loadTemplate("bracket.twig", "1465180577")->display($context);
        // line 7
        $context["id"] = 1;
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "torneo"));
        foreach ($context['_seq'] as $context["_key"] => $context["ts"]) {
            // line 9
            $context["registrados"] = (($this->getAttribute($this->getAttribute((isset($context["ts"]) ? $context["ts"] : null), "data"), "teams_joined_count") * 100) / $this->getAttribute($this->getAttribute((isset($context["ts"]) ? $context["ts"] : null), "data"), "max_teams"));
            // line 10
            $context["confirmados"] = (($this->getAttribute($this->getAttribute((isset($context["ts"]) ? $context["ts"] : null), "data"), "teams_confirmed_count") * 100) / $this->getAttribute($this->getAttribute((isset($context["ts"]) ? $context["ts"] : null), "data"), "max_teams"));
            // line 11
            echo "<div class=\"jumbotron\" style=\"background:url('";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/plugins/binarybeast/img/bgt.jpg');color:white;box-shadow: 1px 1px 10px #000;\">
  <h1>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ts"]) ? $context["ts"] : null), "data"), "title"), "html", null, true);
            echo "</h1>
  <p>";
            // line 13
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["ts"]) ? $context["ts"] : null), "data"), "description"), 0, 80), "html", null, true);
            echo "...</p>
  <span class=\"label label-info\">Cupos: ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ts"]) ? $context["ts"] : null), "data"), "max_teams"), "html", null, true);
            echo "</span>
  <span class=\"label label-warning\">Registrados: ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ts"]) ? $context["ts"] : null), "data"), "teams_joined_count"), "html", null, true);
            echo "</span>
  <span class=\"label label-success\">Confirmados: ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ts"]) ? $context["ts"] : null), "data"), "teams_confirmed_count"), "html", null, true);
            echo "</span>
  <span class=\"label label-danger\">Estado: ";
            // line 17
            if (($this->getAttribute($this->getAttribute((isset($context["ts"]) ? $context["ts"] : null), "data"), "status") == "Building")) {
                echo "En construccion ";
            } elseif (($this->getAttribute($this->getAttribute((isset($context["ts"]) ? $context["ts"] : null), "data"), "status") == "Active-Groups")) {
                echo "Grupos activos";
            } elseif (($this->getAttribute($this->getAttribute((isset($context["ts"]) ? $context["ts"] : null), "data"), "status") == "Active")) {
                echo "Activo";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ts"]) ? $context["ts"] : null), "data"), "status"), "html", null, true);
            }
            echo "</span>
  <span class=\"label label-default\">";
            // line 18
            if (($this->getAttribute($this->getAttribute((isset($context["ts"]) ? $context["ts"] : null), "data"), "type") == "Single Elim")) {
                echo "Eliminacion simple";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ts"]) ? $context["ts"] : null), "data"), "type"), "html", null, true);
            }
            echo "</span>
  <p>
      <div class=\"progress\">
        <div class=\"progress-bar progress-bar-success\" id=\"confirmados";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" style=\"width: ";
            echo twig_escape_filter($this->env, (isset($context["confirmados"]) ? $context["confirmados"] : null), "html", null, true);
            echo "%\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"El ";
            echo twig_escape_filter($this->env, (isset($context["confirmados"]) ? $context["confirmados"] : null), "html", null, true);
            echo "% de los jugadores ha confirmado\">
            <span class=\"sr-only\">35% Complete (success)</span>
        </div>
        <div class=\"progress-bar progress-bar-warning\" id=\"registrados";
            // line 24
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ts"]) ? $context["ts"] : null), "data"), "teams_joined_count"), "html", null, true);
            echo "\">
            <span class=\"sr-only\">40% Complete (success)</span>
          </div>
      </div>
  </p>
  <p><a class=\"btn btn-primary btn-lg\" role=\"button\">Ver bracket</a></p>
</div>
<script>
\$('#confirmados";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "').tooltip('hide');
\$('#registrados";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "').tooltip('hide');
</script>
";
            // line 35
            $context["id"] = ((isset($context["id"]) ? $context["id"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "bracket.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 37,  120 => 35,  115 => 33,  111 => 32,  90 => 24,  80 => 21,  70 => 18,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  33 => 11,  31 => 10,  29 => 9,  25 => 8,  23 => 7,  21 => 2,  19 => 1,);
    }
}


/* bracket.twig */
class __TwigTemplate_7ea15824e45f3fa1cc7e5010525defb126acaab7f76744f14445fd504ef93b00_1465180577 extends Twig_Template
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

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo "<title>Bracket</title>";
    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        echo " ";
    }

    // line 5
    public function block_js($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "bracket.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 5,  179 => 4,  173 => 3,  126 => 37,  120 => 35,  115 => 33,  111 => 32,  90 => 24,  80 => 21,  70 => 18,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  33 => 11,  31 => 10,  29 => 9,  25 => 8,  23 => 7,  21 => 2,  19 => 1,);
    }
}
