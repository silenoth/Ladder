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
        $this->env->loadTemplate("brackets.twig", "315247248")->display($context);
        // line 6
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "titulo"), "html", null, true);
        echo "</h1>
";
        // line 8
        echo "<ul class=\"nav nav-tabs\">
  <li class=\"active\"><a href=\"#descripcion\" data-toggle=\"tab\">Descripcion</a></li>
  <li><a href=\"#bracket\" data-toggle=\"tab\">Bracket</a></li>
</ul>
";
        // line 13
        echo "<div class=\"tab-content\">
\t<div class=\"tab-pane fade in active\" id=\"descripcion\">
\t\t<div style=\"margin-top:30px;\"></div>
\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/images/news/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "logo"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-thumbnail\">
\t\t<div>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "logo"), "html", null, true);
        echo "</div>
\t\t<div class=\"well\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "descripcion"), "html", null, true);
        echo "</div>
\t</div>
\t<div class=\"tab-pane fade\" id=\"bracket\">
\t\t";
        // line 22
        echo "\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "equipos") == 16)) {
            // line 23
            echo "\t\t\t";
            $context["rondas1"] = $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "equipos");
            // line 24
            echo "\t\t\t";
            $context["rondas2"] = ((isset($context["rondas1"]) ? $context["rondas1"] : null) / 2);
            // line 25
            echo "\t\t\t";
            $context["rondas3"] = ((isset($context["rondas2"]) ? $context["rondas2"] : null) / 2);
            // line 26
            echo "\t\t\t";
            $context["rondas4"] = ((isset($context["rondas3"]) ? $context["rondas3"] : null) / 2);
            // line 27
            echo "\t\t\t";
            $context["rondas5"] = ((isset($context["rondas4"]) ? $context["rondas4"] : null) / 2);
            // line 28
            echo "\t\t\t";
            // line 29
            echo "\t\t\t<div style=\"margin-top:30px;\"></div>
\t\t\t<div class=\"row\">
\t\t\t  \t<div style=\"float:left;\">
\t\t\t  \t\t<h6>Ronda 1</h6>
\t\t\t  \t\t";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["rondas1"]) ? $context["rondas1"] : null)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["ronda1"]) {
                // line 34
                echo "\t\t\t\t\t<div class=\"btn btn-primary btn-xs\" style=\"width:150px;margin-bottom:20px;border:1px solid #000;\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "</div>
\t\t\t\t\t<div style=\"border:1px solid;float:right;width:20px;margin-top:10px;\"></div>
\t\t\t\t\t<br>
\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ronda1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t</div>
\t\t\t\t<div style=\"float:left;margin-top:22px;max-height:500px;\">
\t\t\t\t\t<h6>Ronda 2</h6>
\t\t\t\t  \t";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["rondas2"]) ? $context["rondas2"] : null)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["ronda2"]) {
                // line 42
                echo "\t\t\t\t  \t<div style=\"border:1px solid;float:left;width:20px;margin-top:10px;\"></div>
\t\t\t\t\t<div class=\"btn btn-primary btn-xs\" style=\"width:150px;margin-bottom:62px;border:1px solid #000;\">";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "</div><br />
\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ronda2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t\t\t</div>
\t\t\t\t<div style=\"float:left;margin-top:66px;max-height:500px;\">
\t\t\t\t\t<h6>Ronda 4</h6>
\t\t\t\t  \t";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["rondas3"]) ? $context["rondas3"] : null)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["ronda3"]) {
                // line 49
                echo "\t\t\t\t  \t<div style=\"border:1px solid;float:left;width:50px;margin-top:10px;\"></div>
\t\t\t\t\t<div class=\"btn btn-primary btn-xs\" style=\"width:150px;margin-bottom:145px;border:1px solid #000;\">";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "</div><br />
\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ronda3'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t\t\t</div>
\t\t\t\t<div style=\"float:left;margin-top:150px;max-height:500px;\">
\t\t\t\t\t<h6>Ronda 5</h6>
\t\t\t\t  \t";
            // line 55
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["rondas4"]) ? $context["rondas4"] : null)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["ronda4"]) {
                // line 56
                echo "\t\t\t\t  \t<div style=\"border:1px solid;float:left;width:50px;margin-top:10px;\"></div>
\t\t\t\t\t<div class=\"btn btn-primary btn-xs\" style=\"width:150px;margin-bottom:310px;\">";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "</div><br />
\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ronda4'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "\t\t\t\t</div>
\t\t\t\t<div style=\"float:left;margin-top:322px;\">
\t\t\t\t\t<h6>Campeon</h6>
\t\t\t\t  \t";
            // line 62
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["rondas5"]) ? $context["rondas5"] : null)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["ronda5"]) {
                // line 63
                echo "\t\t\t\t  \t<div style=\"border:1px solid;float:left;width:50px;margin-top:10px;\"></div>
\t\t\t\t\t<div class=\"btn btn-primary btn-xs\" style=\"width:150px;margin-bottom:20px;border:1px solid #000;\">";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "</div><br />
\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ronda5'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 69
            echo "\t\t";
        }
        // line 70
        echo "\t\t";
        // line 71
        echo "\t</div>
</div>
";
        // line 73
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
        return array (  292 => 73,  288 => 71,  286 => 70,  283 => 69,  279 => 66,  263 => 64,  260 => 63,  243 => 62,  238 => 59,  222 => 57,  219 => 56,  202 => 55,  197 => 52,  181 => 50,  178 => 49,  161 => 48,  156 => 45,  140 => 43,  137 => 42,  120 => 41,  115 => 38,  96 => 34,  79 => 33,  73 => 29,  71 => 28,  68 => 27,  65 => 26,  62 => 25,  59 => 24,  56 => 23,  53 => 22,  47 => 18,  43 => 17,  37 => 16,  32 => 13,  26 => 8,  21 => 6,  19 => 1,);
    }
}


/* brackets.twig */
class __TwigTemplate_b0a94d69055c77a9aeb6e8798708bbb9cc2cc2632b090d74e523e13a792ed6eb_315247248 extends Twig_Template
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
        echo "<title>Bracket Torneo ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "titulo"), "html", null, true);
        echo "</title>";
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
        return array (  353 => 4,  347 => 3,  339 => 2,  292 => 73,  288 => 71,  286 => 70,  283 => 69,  279 => 66,  263 => 64,  260 => 63,  243 => 62,  238 => 59,  222 => 57,  219 => 56,  202 => 55,  197 => 52,  181 => 50,  178 => 49,  161 => 48,  156 => 45,  140 => 43,  137 => 42,  120 => 41,  115 => 38,  96 => 34,  79 => 33,  73 => 29,  71 => 28,  68 => 27,  65 => 26,  62 => 25,  59 => 24,  56 => 23,  53 => 22,  47 => 18,  43 => 17,  37 => 16,  32 => 13,  26 => 8,  21 => 6,  19 => 1,);
    }
}
