<?php

/* brackets.twig */
class __TwigTemplate_b0a94d69055c77a9aeb6e8798708bbb9cc2cc2632b090d74e523e13a792ed6eb extends Twig_Template
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
        $this->env->loadTemplate("brackets.twig", "2132826059")->display($context);
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "id"), "html", null, true);
        echo "
";
        // line 7
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "brackets.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 7,  21 => 6,  19 => 1,);
    }
}


/* brackets.twig */
class __TwigTemplate_b0a94d69055c77a9aeb6e8798708bbb9cc2cc2632b090d74e523e13a792ed6eb_2132826059 extends Twig_Template
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

    // line 2
    public function block_titulo($context, array $blocks = array())
    {
        echo "<title>Bracket</title>";
    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        echo " ";
    }

    // line 4
    public function block_js($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "brackets.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 4,  78 => 3,  72 => 2,  25 => 7,  21 => 6,  19 => 1,);
    }
}
