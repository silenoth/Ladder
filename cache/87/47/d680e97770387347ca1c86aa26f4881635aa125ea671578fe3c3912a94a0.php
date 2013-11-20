<?php

/* test2.tpl */
class __TwigTemplate_8747d680e97770387347ca1c86aa26f4881635aa125ea671578fe3c3912a94a0 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-inverse navbar-static-top\" role=\"navigation\">
  ...
</nav>
";
        // line 4
        $this->env->loadTemplate("test2.tpl", "1836385662")->display($context);
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "url"), "html", null, true);
        echo "
";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "news"));
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "titulo"), "html", null, true);
            echo "<br />
    ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "preview"), "html", null, true);
            echo "<br />
    ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "imagen"), "html", null, true);
            echo "<br />
    ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "contenido"), "html", null, true);
            echo "<br />
    ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "autor"), "html", null, true);
            echo "<br />
    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "fecha"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
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
        return array (  63 => 20,  55 => 18,  51 => 17,  47 => 16,  43 => 15,  39 => 14,  34 => 13,  30 => 12,  26 => 11,  24 => 4,  19 => 1,);
    }
}


/* test2.tpl */
class __TwigTemplate_8747d680e97770387347ca1c86aa26f4881635aa125ea671578fe3c3912a94a0_1836385662 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["header"]) ? $context["header"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "news"));
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 7
            echo "<title>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "titulo"), "html", null, true);
            echo "</title>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  114 => 7,  110 => 6,  107 => 5,  63 => 20,  55 => 18,  51 => 17,  47 => 16,  43 => 15,  39 => 14,  34 => 13,  30 => 12,  26 => 11,  24 => 4,  19 => 1,);
    }
}
