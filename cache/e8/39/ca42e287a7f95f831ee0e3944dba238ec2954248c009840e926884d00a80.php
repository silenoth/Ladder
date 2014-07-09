<?php

/* _footer.twig */
class __TwigTemplate_e839ca42e287a7f95f831ee0e3944dba238ec2954248c009840e926884d00a80 extends Twig_Template
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
        return array (  34 => 13,  37 => 6,  33 => 5,  27 => 4,  203 => 102,  194 => 98,  181 => 93,  176 => 91,  166 => 84,  156 => 76,  149 => 69,  142 => 65,  139 => 64,  133 => 63,  125 => 60,  110 => 54,  101 => 47,  88 => 42,  60 => 8,  56 => 29,  35 => 13,  24 => 4,  116 => 56,  113 => 42,  108 => 30,  105 => 29,  99 => 46,  96 => 10,  92 => 49,  90 => 47,  84 => 42,  80 => 41,  76 => 40,  71 => 38,  63 => 32,  61 => 29,  43 => 14,  40 => 13,  38 => 10,  32 => 9,  22 => 3,  340 => 4,  337 => 3,  291 => 118,  289 => 117,  285 => 115,  282 => 114,  279 => 113,  276 => 112,  273 => 110,  262 => 109,  252 => 108,  249 => 107,  247 => 106,  245 => 105,  239 => 104,  237 => 103,  232 => 101,  228 => 100,  218 => 97,  209 => 93,  202 => 89,  198 => 88,  189 => 96,  183 => 86,  172 => 82,  163 => 80,  160 => 79,  155 => 78,  152 => 77,  145 => 72,  141 => 70,  138 => 68,  132 => 67,  130 => 66,  120 => 58,  114 => 56,  109 => 54,  103 => 48,  93 => 48,  86 => 45,  77 => 45,  72 => 40,  70 => 43,  67 => 42,  65 => 41,  51 => 29,  45 => 25,  36 => 18,  25 => 8,  23 => 3,  21 => 2,  19 => 1,);
    }
}
