<?php

/* news.twig */
class __TwigTemplate_bbc697e600857ef400c119ba7c6aa646a9a65364d78960fb99976fba872c9279 extends Twig_Template
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
        $this->env->loadTemplate("news.twig", "365185141")->display($context);
        // line 5
        echo "k";
    }

    public function getTemplateName()
    {
        return "news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 5,  19 => 1,);
    }
}


/* news.twig */
class __TwigTemplate_bbc697e600857ef400c119ba7c6aa646a9a65364d78960fb99976fba872c9279_365185141 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("header.twig");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "header.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_titulo($context, array $blocks = array())
    {
        // line 3
        echo "<title>Inicio - Noticias</title>
";
    }

    public function getTemplateName()
    {
        return "news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 3,  66 => 2,  21 => 5,  19 => 1,);
    }
}
