<?php

/* _online.twig */
class __TwigTemplate_fd438aa92500ebeaff544fdfddb7489676c5292bf7d162c81b95f7535bfa61af extends Twig_Template
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
        return array (  60 => 8,  37 => 6,  33 => 5,  27 => 4,  166 => 75,  157 => 71,  144 => 66,  139 => 64,  129 => 57,  119 => 49,  112 => 42,  102 => 37,  88 => 33,  83 => 31,  79 => 29,  73 => 27,  66 => 21,  64 => 20,  62 => 19,  35 => 13,  116 => 43,  113 => 42,  108 => 30,  105 => 38,  99 => 11,  96 => 36,  92 => 49,  90 => 47,  84 => 42,  80 => 41,  76 => 40,  71 => 38,  63 => 32,  61 => 29,  43 => 14,  40 => 13,  38 => 10,  32 => 9,  22 => 1,  340 => 4,  337 => 3,  291 => 118,  289 => 117,  285 => 115,  282 => 114,  279 => 113,  276 => 112,  273 => 110,  262 => 109,  252 => 108,  249 => 107,  247 => 106,  245 => 105,  239 => 104,  237 => 103,  232 => 101,  228 => 100,  218 => 97,  209 => 93,  202 => 89,  198 => 88,  189 => 87,  183 => 86,  172 => 82,  163 => 80,  160 => 79,  155 => 78,  152 => 69,  145 => 72,  141 => 70,  138 => 68,  132 => 67,  130 => 66,  120 => 59,  114 => 56,  109 => 54,  103 => 51,  93 => 48,  86 => 45,  77 => 45,  72 => 44,  70 => 43,  67 => 42,  65 => 41,  51 => 15,  45 => 25,  36 => 18,  25 => 8,  23 => 3,  21 => 2,  19 => 1,);
    }
}
