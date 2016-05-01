<?php

/* _online.twig */
class __TwigTemplate_316094753c8413eba85eff1f3ac26cd2225c86d55aebcb0434ccabf91f2b4449 extends Twig_Template
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
        echo "<hr />
<div style=\"float:left;\">
<h5><b>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["total"]) ? $context["total"] : null), "total"), "html", null, true);
        echo " Usuario(s) conectado(s) los ultimos 20 min.</b></h5>
<h6>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["total"]) ? $context["total"] : null), "registrado"), "html", null, true);
        echo " miembro(s), ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["total"]) ? $context["total"] : null), "invitado"), "html", null, true);
        echo " invitado(s)</h6>
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["uonline"]) ? $context["uonline"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 6
            echo "<span class=\"label small\" style=\"font-size: 70%;background:#";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "color"), "html", null, true);
            echo ";\">";
            if (($this->getAttribute((isset($context["u"]) ? $context["u"] : null), "nickclean") == "Invitado")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "nick"), "html", null, true);
            } else {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "/perfil/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "nickclean"), "html", null, true);
                echo "\" id=\"onlineuser\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver perfil de ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "nick"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "nick"), "html", null, true);
                echo "</a>";
            }
            echo "</span> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "<div id=\"online\"><h6><span class=\"label label-danger\">Admin</span> | <span class=\"label label-primary\">Moderadores</span> | <span class=\"label label-default\">Miembros</span> | <span class=\"label label-default\" style=\"background-color: #99A8BB;\">Invitados</span></h6></div>
</div>
<style type=\"text/css\">
#online a:link, a:visited, a:active, a:hover{
    text-decoration: inherit;
    color:inherit;
}
</style>";
    }

    public function getTemplateName()
    {
        return "_online.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  37 => 6,  33 => 5,  27 => 4,  242 => 121,  233 => 117,  228 => 115,  220 => 112,  215 => 110,  205 => 103,  196 => 96,  194 => 95,  187 => 88,  179 => 83,  176 => 82,  170 => 81,  157 => 79,  143 => 76,  135 => 75,  132 => 74,  126 => 72,  117 => 65,  104 => 60,  96 => 59,  72 => 47,  51 => 30,  118 => 45,  115 => 64,  110 => 32,  107 => 31,  101 => 11,  98 => 10,  94 => 51,  88 => 58,  86 => 44,  82 => 43,  78 => 42,  73 => 40,  65 => 34,  63 => 31,  43 => 14,  40 => 21,  38 => 20,  32 => 9,  22 => 1,  339 => 4,  336 => 3,  290 => 118,  288 => 117,  284 => 115,  281 => 114,  278 => 113,  275 => 112,  272 => 110,  261 => 109,  251 => 108,  248 => 107,  246 => 106,  244 => 105,  238 => 104,  236 => 103,  231 => 101,  227 => 100,  223 => 98,  217 => 97,  208 => 93,  201 => 89,  197 => 88,  188 => 87,  182 => 86,  171 => 82,  162 => 80,  159 => 79,  154 => 78,  151 => 78,  146 => 73,  144 => 72,  140 => 70,  137 => 68,  131 => 67,  129 => 66,  119 => 66,  113 => 56,  108 => 54,  102 => 51,  92 => 49,  85 => 46,  76 => 49,  71 => 44,  69 => 43,  66 => 42,  64 => 41,  50 => 29,  45 => 26,  36 => 18,  25 => 8,  23 => 3,  21 => 2,  19 => 1,);
    }
}
