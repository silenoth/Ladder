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
        echo "</div>
";
        // line 3
        echo "<div class=\"bs-footer\">
    <div class=\"container\"  style=\"max-width:1060px;\">
        <p class=\"navbar-text\">Ladder Script versión 1.0 &copy; 2014.</p>
    </div>
</div>


<script type=\"text/javascript\">
\$('#onlineuser').tooltip('hide');
</script>
<script src=\"";
        // line 13
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
        return array (  34 => 13,  116 => 43,  113 => 42,  108 => 30,  99 => 11,  96 => 10,  92 => 49,  90 => 47,  86 => 45,  84 => 42,  80 => 41,  76 => 40,  71 => 38,  63 => 32,  61 => 29,  43 => 14,  40 => 13,  38 => 10,  32 => 9,  22 => 3,  473 => 14,  469 => 13,  465 => 12,  460 => 11,  457 => 10,  451 => 8,  446 => 7,  443 => 6,  438 => 4,  435 => 3,  387 => 284,  316 => 215,  313 => 213,  309 => 210,  299 => 206,  295 => 205,  291 => 203,  287 => 201,  283 => 199,  281 => 198,  276 => 195,  272 => 193,  268 => 191,  264 => 189,  262 => 188,  255 => 184,  251 => 183,  247 => 182,  243 => 181,  239 => 180,  235 => 179,  231 => 178,  227 => 177,  224 => 176,  220 => 175,  200 => 157,  180 => 138,  174 => 137,  172 => 136,  165 => 135,  160 => 134,  158 => 133,  112 => 89,  110 => 88,  105 => 29,  83 => 63,  72 => 61,  68 => 60,  31 => 25,  23 => 18,  21 => 2,  19 => 1,);
    }
}
