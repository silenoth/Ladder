<?php

/* _footer.twig */
class __TwigTemplate_5b4d9c465e63cc9ef6d5001196afb13bce1632883e3f710807f0b81e5d27ee3b extends Twig_Template
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
<h5><b>125 Usuario(s) conectado(s) los ultimos 20 min.</b></h5>
<h6>4 miembro(s), 134 invitado(s)</h6>
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["uonline"]) ? $context["uonline"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 5
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
        // line 7
        echo "<div id=\"online\"><h6><span class=\"label label-danger\">Admin</span> | <span class=\"label label-primary\">Moderadores</span> | <span class=\"label label-default\">Miembros</span> | <span class=\"label label-default\" style=\"background-color: #99A8BB;\">Invitados</span></h6></div>
</div>
";
        // line 10
        echo "<div class=\"bs-footer\">
    <div class=\"container\"  style=\"max-width:1060px;\">
        <p class=\"navbar-text\">Ladder Script versión 1.0 &copy; 2014.</p>
    </div>
</div>
<style type=\"text/css\">
#online a:link, a:visited, a:active, a:hover{
    text-decoration: inherit;
    color:inherit;
}
</style>
<script type=\"text/javascript\">
\$('#onlineuser').tooltip('hide');
</script>
<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/holder.js\" type=\"text/javascript\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  55 => 10,  51 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
