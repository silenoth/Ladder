<?php

/* forums.twig */
class __TwigTemplate_4397962309e71eb573a3f0a870c87ae21244ddcad0fdf28d65e0920a69bb55c9 extends Twig_Template
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
        $this->env->loadTemplate("forums.twig", "2090729360")->display($context);
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
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                    // line 21
                    echo "\t  \t\t";
                    $context["id"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 22
                    echo "\t  \t\t";
                    if (($this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "foro") == $this->getAttribute((isset($context["foro"]) ? $context["foro"] : null), "id"))) {
                        // line 23
                        echo "\t\t\t<div class=\"panel panel-default panel_bg\">
\t\t\t  \t<div class=\"panel-body\" style=\"padding-bottom:0;\">
\t\t\t  \t\t<div>
\t\t\t  \t\t\t<h4>
\t\t\t  \t\t\t\t<span class=\"glyphicon glyphicon-";
                        // line 27
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "icono"), "html", null, true);
                        echo " red\"></span>
\t\t\t\t\t\t\t<a href=\"";
                        // line 28
                        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                        echo "/foro/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "id"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "nombreclean"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "nombre"), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t</h4>
\t\t\t\t\t</div>

\t\t\t\t  \t<table class=\"table font_12\">
\t\t\t\t  \t\t<tr>
\t\t\t\t  \t\t\t<td class=\"width_370\">
\t\t\t\t  \t\t\t\t<p>";
                        // line 35
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "descripcion"), "html", null, true);
                        echo "</p>
\t\t\t\t  \t\t\t</td>
\t\t\t\t  \t\t\t<td>
\t\t\t\t  \t\t\t\t<p>";
                        // line 38
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "totaltemas"), "html", null, true);
                        echo " temas y ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "totalrespuestas"), "html", null, true);
                        echo " respuestas</p>
\t\t\t\t  \t\t\t</td>
\t\t\t\t  \t\t\t<td>
\t\t\t\t  \t\t\t";
                        // line 41
                        if ((!twig_test_empty($this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "nick")))) {
                            // line 42
                            echo "\t\t\t\t  \t\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "nickclean"), "html", null, true);
                            echo "\">
\t\t\t\t\t\t    \t\t<img class=\"img_forum_index float_right\" src=\"";
                            // line 43
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/images/user/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "avatar"), "html", null, true);
                            echo "\" alt=\"Avatar de ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "nick"), "html", null, true);
                            echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver perfil de ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "nick"), "html", null, true);
                            echo "\" id=\"avatar";
                            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                            echo "\" />
\t\t\t\t\t\t    \t</a>

\t\t\t\t  \t\t\t</td>
\t\t\t\t  \t\t\t<td style=\"width:176px;\">
\t\t\t\t  \t\t\t\t<div>";
                            // line 48
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "ultimopost"), "html", null, true);
                            echo "</div>
\t\t\t\t\t\t\t\t<div>Por: <a href=\"";
                            // line 49
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "nickclean"), "html", null, true);
                            echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver perfil de ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "nick"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "nick"), "html", null, true);
                            echo "</a></div>
\t\t\t\t\t\t\t\t<div>El ";
                            // line 50
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : null), "ultimopostfecha"), "d/m/Y"), "html", null, true);
                            echo "</div>
\t\t\t\t\t\t\t";
                        } else {
                            // line 52
                            echo "\t\t\t\t\t\t    \t\t<img class=\"img_forum_index float_right\" src=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/images/user/no-avatar.png\" alt=\"Sin post para ver\" />
\t\t\t\t  \t\t\t</td>
\t\t\t\t  \t\t\t<td style=\"width:176px;\">
\t\t\t\t\t\t\t\t<p>Sin post para ver</p>
\t\t\t\t\t\t\t";
                        }
                        // line 57
                        echo "\t\t\t\t  \t\t\t</td>
\t\t\t\t  \t\t</tr>
\t\t\t\t  \t</table>
\t\t\t\t  \t<script type=\"text/javascript\">
\t\t\t\t\t\t  \t\t\$(\"#avatar";
                        // line 61
                        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                        echo "\").tooltip('hide');
\t\t\t\t\t</script>
\t\t\t  \t</div>
\t\t\t</div>
\t  \t\t";
                    }
                    // line 66
                    echo "\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "\t\t";
            }
            // line 68
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t</div>
\t<div class=\"col-md-4\">
\t";
        // line 72
        echo "\t</div>
</div>
";
        // line 74
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
        return array (  199 => 74,  195 => 72,  191 => 69,  185 => 68,  182 => 67,  168 => 66,  160 => 61,  154 => 57,  145 => 52,  140 => 50,  130 => 49,  126 => 48,  110 => 43,  103 => 42,  101 => 41,  93 => 38,  87 => 35,  71 => 28,  67 => 27,  61 => 23,  58 => 22,  55 => 21,  38 => 20,  32 => 18,  29 => 17,  25 => 16,  21 => 14,  19 => 1,);
    }
}


/* forums.twig */
class __TwigTemplate_4397962309e71eb573a3f0a870c87ae21244ddcad0fdf28d65e0920a69bb55c9_2090729360 extends Twig_Template
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
        echo "        <title>Foros</title>
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
        return array (  277 => 11,  274 => 10,  266 => 8,  262 => 7,  257 => 6,  254 => 5,  249 => 3,  246 => 2,  199 => 74,  195 => 72,  191 => 69,  185 => 68,  182 => 67,  168 => 66,  160 => 61,  154 => 57,  145 => 52,  140 => 50,  130 => 49,  126 => 48,  110 => 43,  103 => 42,  101 => 41,  93 => 38,  87 => 35,  71 => 28,  67 => 27,  61 => 23,  58 => 22,  55 => 21,  38 => 20,  32 => 18,  29 => 17,  25 => 16,  21 => 14,  19 => 1,);
    }
}
