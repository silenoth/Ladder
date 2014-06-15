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
        ob_start();
        // line 2
        $this->env->loadTemplate("brackets.twig", "2032763236")->display($context);
        // line 74
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "titulo"), "html", null, true);
        echo "</h1>
";
        // line 76
        echo "<ul class=\"nav nav-tabs\">
  <li class=\"active\"><a href=\"#descripcion\" data-toggle=\"tab\">Descripcion</a></li>
  <li><a href=\"#bracket\" data-toggle=\"tab\">Bracket</a></li>
</ul>
";
        // line 81
        echo "<div class=\"tab-content\">
\t<div class=\"tab-pane fade in active\" id=\"descripcion\">
\t\t<div style=\"margin-top:30px;\"></div>
\t\t<img src=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/images/news/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "logo"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-thumbnail\">
\t\t<div>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "logo"), "html", null, true);
        echo "</div>
\t\t<div class=\"well\">";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "descripcion"), "html", null, true);
        echo "</div>
\t</div>
\t";
        // line 89
        echo "\t<div class=\"tab-pane fade\" id=\"bracket\" style=\"min-width:970px;width:1020px\">
\t\t<div class=\"row\" style=\"margin-top:30px;\">
\t\t<div class=\"col-md-9 col-md-push-3\">
\t\t\t<p>Requisitos:</p>
\t\t</div>
\t  \t\t<div class=\"col-md-3 col-md-pull-9\">
\t  \t\t\t<form method=\"post\" action=\"\">
\t\t\t\t\t<button class=\"btn btn-primary\">Ingresar al torneo</button>
\t\t\t\t</form>
\t  \t\t</div>
\t\t</div>
\t\t";
        // line 101
        echo "\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "equipos") == 16)) {
            // line 102
            echo "\t\t\t";
            $context["rondas1"] = $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "equipos");
            // line 103
            echo "\t\t\t";
            $context["rondas2"] = ((isset($context["rondas1"]) ? $context["rondas1"] : null) / 2);
            // line 104
            echo "\t\t\t";
            $context["rondas3"] = ((isset($context["rondas2"]) ? $context["rondas2"] : null) / 2);
            // line 105
            echo "\t\t\t";
            $context["rondas4"] = ((isset($context["rondas3"]) ? $context["rondas3"] : null) / 2);
            // line 106
            echo "\t\t\t";
            $context["rondas5"] = ((isset($context["rondas4"]) ? $context["rondas4"] : null) / 2);
            // line 107
            echo "\t\t\t";
            // line 108
            echo "\t\t\t<div style=\"margin-top:30px;\"></div>
\t\t\t  \t<div style=\"float:left;overflow:hidden;width:180px;\">
\t\t\t  \t\t<h4>1ra Ronda</h4>
\t\t\t  \t\t";
            // line 111
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
                // line 112
                echo "\t\t\t\t\t\t<div class=\"cell\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "<span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">0</span></div>
\t\t\t\t\t\t";
                // line 113
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                    // line 114
                    echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:12px;height:37px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                    // line 116
                    echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:12px;height:37px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                } else {
                    // line 118
                    echo "\t\t\t\t\t\t<div class=\"cell-sep\"></div>
\t\t\t\t\t\t";
                }
                // line 120
                echo "\t\t\t\t\t";
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
            // line 121
            echo "\t\t\t\t</div>
\t\t\t\t<div style=\"float:left;overflow:hidden;width:210px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">4tos de Final</h4>
\t\t\t\t  \t";
            // line 124
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
                // line 125
                echo "\t\t\t\t  \t\t<div class=\"left-line\" style=\"margin-top:";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                    echo "81";
                } else {
                    echo "33";
                }
                echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                // line 126
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                    echo "68";
                } else {
                    echo "20";
                }
                echo "px;\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "<span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">0</span></div>
\t\t\t\t\t\t";
                // line 127
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                    // line 128
                    echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:34px;height:107px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                    // line 130
                    echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:81px;height:107px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                }
                // line 132
                echo "\t\t\t\t\t";
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
            // line 133
            echo "\t\t\t\t</div>
\t\t\t\t<div style=\"float:left;overflow:hidden;width:210px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">Semi-final</h4>
\t\t\t\t  \t";
            // line 136
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
                // line 137
                echo "\t\t\t\t\t\t<div class=\"left-line\" style=\"margin-top:";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                    echo "186";
                } else {
                    echo "88";
                }
                echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                // line 138
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                    echo "173";
                } else {
                    echo "75";
                }
                echo "px;\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "<span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">0</span></div>
\t\t\t\t\t\t";
                // line 139
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                    // line 140
                    echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:88px;height:212px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                    // line 142
                    echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:186px;height:212px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                }
                // line 144
                echo "\t\t\t\t\t";
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
            // line 145
            echo "\t\t\t\t</div>
\t\t\t\t<div style=\"float:left;overflow:hidden;width:210px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">Final</h4>
\t\t\t\t  \t";
            // line 148
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
                // line 149
                echo "\t\t\t\t  \t<div class=\"left-line\" style=\"margin-top:";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                    echo "414";
                } else {
                    echo "188";
                }
                echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                // line 150
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                    echo "400";
                } else {
                    echo "175";
                }
                echo "px;\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "<span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">0</span></div>
\t\t\t\t\t\t";
                // line 151
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                    // line 152
                    echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:188px;height:440px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                }
                // line 154
                echo "\t\t\t\t\t";
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
            // line 155
            echo "\t\t\t\t</div>
\t\t\t\t<div style=\"float:right;overflow:hidden;width:210px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">Campeon</h4>
\t\t\t\t  \t";
            // line 158
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
                // line 159
                echo "\t\t\t\t  \t\t<div class=\"left-line\" style=\"margin-top:400px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:386px;\">";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "<span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">0</span></div>
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
            // line 162
            echo "\t\t\t\t</div>
\t\t\t";
            // line 164
            echo "\t\t";
        }
        // line 165
        echo "\t\t";
        // line 166
        echo "\t</div>
\t";
        // line 168
        echo "</div>
";
        // line 170
        $this->env->loadTemplate("_footer.twig")->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
        return array (  388 => 170,  385 => 168,  382 => 166,  380 => 165,  377 => 164,  374 => 162,  358 => 160,  355 => 159,  338 => 158,  333 => 155,  319 => 154,  315 => 152,  313 => 151,  303 => 150,  294 => 149,  277 => 148,  272 => 145,  258 => 144,  254 => 142,  250 => 140,  248 => 139,  238 => 138,  229 => 137,  212 => 136,  207 => 133,  193 => 132,  189 => 130,  185 => 128,  183 => 127,  173 => 126,  164 => 125,  147 => 124,  142 => 121,  128 => 120,  124 => 118,  120 => 116,  116 => 114,  114 => 113,  109 => 112,  92 => 111,  87 => 108,  85 => 107,  82 => 106,  79 => 105,  76 => 104,  73 => 103,  70 => 102,  67 => 101,  54 => 89,  49 => 86,  45 => 85,  39 => 84,  34 => 81,  28 => 76,  23 => 74,  21 => 2,  19 => 1,);
    }
}


/* brackets.twig */
class __TwigTemplate_b0a94d69055c77a9aeb6e8798708bbb9cc2cc2632b090d74e523e13a792ed6eb_2032763236 extends Twig_Template
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

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo "<title>Bracket Torneo ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "titulo"), "html", null, true);
        echo "</title>";
    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        // line 5
        echo "<style type=\"text/css\">
.cell {
\twidth:150px;
\tbackground: -webkit-gradient(linear,left top,left bottom,from(#8266b6),to(#533787));
\tbackground: -moz-linear-gradient(top,#8266b6,#533787);
\tbackground: -o-linear-gradient(top,#8266b6,#533787);
\tbackground: linear-gradient(top,#8266b6,#533787);
\tbackground-color: #6a4e9e;
\tborder-top: 1px solid #5b3f8f;
\tborder-left: 1px solid #412771;
\tborder-right: 1px solid #412771;
\tborder-bottom: 1px solid #2a1453;
\tbox-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);
\t-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);
\t-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.15);
\ttext-shadow: 0 1px 0 rgba(0,0,0,0.75);
\t-moz-text-shadow: 0 1px 0 rgba(0,0,0,0.75);
\t-webkit-text-shadow: 0 1px 0 rgba(0,0,0,0.75);
\tcolor: #fff;
\tdisplay: inline-block;
\tpadding: 3px 6px;
\tmargin-bottom: 10px;
\tmargin-right:0;
\tfont-size: 12px;
\tfont-weight: normal;
\t/*line-height: 1.428571429;*/
\twhite-space: nowrap;
\t/*vertical-align: middle;*/
\t/*cursor: pointer;*/
\t/*background-image: none;*/
\t/*text-align: center;*/
\t/*border: 1px solid transparent;*/
\tborder-radius: 4px;
\t-webkit-user-select: none;
\t-moz-user-select: none;
\t-ms-user-select: none;
\t-o-user-select: none;
\tuser-select: none;
}

.cell-sep {
\tpadding-bottom:33px;
}
.right-down {
\tborder-top:1px solid #000;
\tborder-right:1px solid #000;
\tfloat:right;
\twidth:30px;
\theight:15px;
\tmargin-top:15px;
\tpadding-bottom:22px;
}

.line-right {
\tborder-top:1px solid #000;
\twidth:30px;
\tfloat:right;
}

.left-line {
\tborder-top:1px solid #000;
\twidth:30px;
\tfloat:left;
}

</style>
";
    }

    // line 72
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
        return array (  517 => 72,  447 => 5,  444 => 4,  436 => 3,  388 => 170,  385 => 168,  382 => 166,  380 => 165,  377 => 164,  374 => 162,  358 => 160,  355 => 159,  338 => 158,  333 => 155,  319 => 154,  315 => 152,  313 => 151,  303 => 150,  294 => 149,  277 => 148,  272 => 145,  258 => 144,  254 => 142,  250 => 140,  248 => 139,  238 => 138,  229 => 137,  212 => 136,  207 => 133,  193 => 132,  189 => 130,  185 => 128,  183 => 127,  173 => 126,  164 => 125,  147 => 124,  142 => 121,  128 => 120,  124 => 118,  120 => 116,  116 => 114,  114 => 113,  109 => 112,  92 => 111,  87 => 108,  85 => 107,  82 => 106,  79 => 105,  76 => 104,  73 => 103,  70 => 102,  67 => 101,  54 => 89,  49 => 86,  45 => 85,  39 => 84,  34 => 81,  28 => 76,  23 => 74,  21 => 2,  19 => 1,);
    }
}
