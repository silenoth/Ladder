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
        echo "    <div class=\"bs-footer\" role=\"contentinfo\" style=\"border-top:1px solid #e5e5e5;\">
    footer :o
    </div>
</div>
";
        // line 6
        echo "<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootstrapValidator.js\" type=\"text/javascript\"></script>
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
        return array (  25 => 6,  19 => 1,);
    }
}
