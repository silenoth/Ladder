<?php

/* forums.twig */
class __TwigTemplate_246ab3da1245c88adfa4596bfc674835c522339a04cfab2e3edb49a5848b87f9 extends Twig_Template
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
        $this->env->loadTemplate("forums.twig", "1736009946")->display($context);
        // line 14
        echo "<div class=\"row\">
\t<div class=\"col-md-8\">
\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "foros"));
        foreach ($context['_seq'] as $context["_key"] => $context["foro"]) {
            // line 17
            echo "\t \t";
            if (($this->getAttribute((isset($context["foro"]) ? $context["foro"] : null), "activo") == 1)) {
                // line 18
                echo "\t\t<h3>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["foro"]) ? $context["foro"] : null), "nombre"), "html", null, true);
                echo "</h3>
\t  \t<div class=\"sep\"></div>
\t  \t\t";
                // line 20
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "categorias"));
                foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                    // line 21
                    echo "\t  \t\t";
                    if (($this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "foro") == $this->getAttribute((isset($context["foro"]) ? $context["foro"] : null), "id"))) {
                        // line 22
                        echo "\t\t\t<div class=\"panel panel-default panel_bg\">
\t\t\t  <div class=\"panel-body\">
\t\t\t\t  \t<div class=\"col-xs-12 col-md-8\">
\t\t\t\t\t  \t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-";
                        // line 27
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "icono"), "html", null, true);
                        echo " red\"></span>
\t\t\t\t\t\t\t  \t<a href=\"";
                        // line 28
                        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                        echo "/foro/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "nombreclean"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "nombre"), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t  \t<p class=\"small_text\">";
                        // line 29
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "descripcion"), "html", null, true);
                        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<p class=\"small_text\">(5 temas y 154 respuestas)</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t  \t</div>
\t\t\t\t  \t<div class=\"col-xs-6 col-md-4\">
\t\t\t\t\t  \t<div class=\"row\">
\t\t\t\t\t\t  \t<div class=\"col-xs-6\">
\t\t\t\t\t\t  \t\t<a href=\"#\">
\t\t\t\t\t\t    \t\t<img class=\"img_forum_index\" alt=\"\">
\t\t\t\t\t\t    \t</a>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t  \t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t<p>Silenoth</p>
\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t  </div>
\t\t\t</div>
\t  \t\t";
                    }
                    // line 51
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "\t\t";
            }
            // line 53
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t</div>
\t<div class=\"col-md-4\">
\t";
        // line 57
        echo "\t</div>
</div>
";
        // line 59
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "forums.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 59,  110 => 57,  106 => 54,  100 => 53,  97 => 52,  91 => 51,  66 => 29,  56 => 28,  52 => 27,  45 => 22,  42 => 21,  38 => 20,  32 => 18,  29 => 17,  25 => 16,  21 => 14,  19 => 1,);
    }
}


/* forums.twig */
class __TwigTemplate_246ab3da1245c88adfa4596bfc674835c522339a04cfab2e3edb49a5848b87f9_1736009946 extends Twig_Template
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
        // line 3
        echo "        <title>Administracion</title>
    ";
    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/plugins/editor/minified/themes/default.css\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/css/bootstrap-multiselect.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
        echo "/css/forums.css\" type=\"text/css\" />
    ";
    }

    // line 10
    public function block_js($context, array $blocks = array())
    {
        // line 11
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/jquery.confirm.min.js\"/></script>
    ";
    }

    public function getTemplateName()
    {
        return "forums.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 11,  189 => 10,  181 => 8,  177 => 7,  172 => 6,  169 => 5,  164 => 3,  161 => 2,  114 => 59,  110 => 57,  106 => 54,  100 => 53,  97 => 52,  91 => 51,  66 => 29,  56 => 28,  52 => 27,  45 => 22,  42 => 21,  38 => 20,  32 => 18,  29 => 17,  25 => 16,  21 => 14,  19 => 1,);
    }
}
