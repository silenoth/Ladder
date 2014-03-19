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
        return array (  34 => 13,  22 => 3,  19 => 1,);
    }
}
