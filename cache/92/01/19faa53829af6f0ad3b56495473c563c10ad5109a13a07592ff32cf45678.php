<?php

/* test2.tpl */
class __TwigTemplate_920119faa53829af6f0ad3b56495473c563c10ad5109a13a07592ff32cf45678 extends Twig_Template
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
        $template = $this->env->resolveTemplate((isset($context["header"]) ? $context["header"] : null));
        $template->display($context);
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "hola"), "mundo"), "html", null, true);
        echo "<br />
";
        // line 3
        $template = $this->env->resolveTemplate((isset($context["footer"]) ? $context["footer"] : null));
        $template->display($context);
    }

    public function getTemplateName()
    {
        return "test2.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
