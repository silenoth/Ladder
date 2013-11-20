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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "news"));
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 3
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "titulo"), "html", null, true);
            echo "<br />
    ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "preview"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
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
        return array (  39 => 6,  31 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
