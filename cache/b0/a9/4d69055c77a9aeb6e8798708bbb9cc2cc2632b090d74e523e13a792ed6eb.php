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
        $this->env->loadTemplate("brackets.twig", "1431628846")->display($context);
        // line 93
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "titulo"), "html", null, true);
        echo "</h1>
";
        // line 95
        echo "<ul class=\"nav nav-tabs\">
  <li class=\"active\"><a href=\"#descripcion\" data-toggle=\"tab\">Descripcion</a></li>
  <li><a href=\"#bracket\" data-toggle=\"tab\">Bracket</a></li>
</ul>
";
        // line 100
        echo "<div class=\"tab-content\">
\t<div class=\"tab-pane fade in active\" id=\"descripcion\">
\t\t<div style=\"margin-top:30px;\"></div>
    ";
        // line 104
        echo "    ";
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket") == false)) {
            // line 105
            echo "        ";
            $this->env->loadTemplate("404.twig")->display($context);
            // line 106
            echo "    ";
        } else {
            // line 107
            echo "\t\t<div class=\"well\">
\t\t\t<div class=\"row\">
\t\t\t  <div class=\"col-sm-8 col-md-4\">
\t\t\t    <div class=\"thumbnail\">
\t\t\t      <img src=\"";
            // line 111
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/images/news/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "logo"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "titulo"), "html", null, true);
            echo "\">
\t\t\t      <div class=\"caption\">
\t\t\t        <h3>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "titulo"), "html", null, true);
            echo "</h3>
\t\t\t        <p>Creado el ";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "fecha"), "html", null, true);
            echo "</p>
\t\t\t        <p>Encargado: ";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "autor"), "html", null, true);
            echo "</p>
\t\t\t        <p>Juego: ";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "juego"), "html", null, true);
            echo "</p>
\t\t\t        <p>Modo: ";
            // line 117
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "modo") == 0)) {
                echo "1v1";
            }
            echo "</p>
\t\t\t        <a href=\"#\" class=\"btn btn-primary\" role=\"button\">Inscripción</a>
\t\t\t      </div>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"col-sm-4 col-md-8\">
\t\t\t  \t<div class=\"panel panel-default\">
\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t    ";
            // line 125
            echo $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "descripcion");
            echo "
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            // line 133
            echo "\t<div class=\"tab-pane fade\" id=\"bracket\" style=\"min-width:970px;width:1820px\">
\t\t<div class=\"row\" style=\"margin-top:30px;\">
\t\t<div class=\"col-md-9 col-md-push-3\">
\t\t\t<p>Requisitos:</p>
\t\t</div>
\t  \t\t<div class=\"col-md-3 col-md-pull-9\">
\t  \t\t\t<form method=\"post\" action=\"\">
\t\t\t\t\t<button class=\"btn btn-primary\">Enviar reporte</button>
\t\t\t\t</form>
\t  \t\t</div>
\t\t</div>
        ";
            // line 145
            echo "        ";
            // line 146
            echo "        ";
            $context["rondas1"] = $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "equipos");
            // line 147
            echo "    \t";
            $context["rondas2"] = ((isset($context["rondas1"]) ? $context["rondas1"] : null) / 2);
            // line 148
            echo "    \t";
            $context["rondas3"] = ((isset($context["rondas2"]) ? $context["rondas2"] : null) / 2);
            // line 149
            echo "    \t";
            $context["rondas4"] = ((isset($context["rondas3"]) ? $context["rondas3"] : null) / 2);
            // line 150
            echo "    \t";
            $context["rondas5"] = ((isset($context["rondas4"]) ? $context["rondas4"] : null) / 2);
            // line 151
            echo "    \t";
            $context["rondas6"] = ((isset($context["rondas5"]) ? $context["rondas5"] : null) / 2);
            // line 152
            echo "    \t";
            $context["rondas7"] = ((isset($context["rondas6"]) ? $context["rondas6"] : null) / 2);
            // line 153
            echo "    \t";
            $context["rondas8"] = ((isset($context["rondas7"]) ? $context["rondas7"] : null) / 2);
            // line 154
            echo "\t\t<div style=\"margin-top:30px;\"></div>
        ";
            // line 156
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "equipos") == 128)) {
                // line 157
                echo "            ";
                // line 158
                echo "            <div class=\"columna p128\">
                <h4>1ra Ronda</h4>
                ";
                // line 160
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
                    // line 161
                    echo "                    <div class=\"cell\" id=\"player";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "\">
                        ";
                    // line 162
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 164
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 165
                        echo "\t\t              <div class=\"line-right right-down\" style=\"margin-top:12px;height:33px;border-bottom: 1px solid #000;\"></div>
                    ";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 167
                        echo "\t\t              <div class=\"line-right right-down\" style=\"margin-top:12px;height:33px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t";
                    } else {
                        // line 169
                        echo "\t\t\t\t\t   <div class=\"cell-sep\"></div>
                    ";
                    }
                    // line 171
                    echo "                ";
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
                // line 172
                echo "            </div>
            ";
                // line 174
                echo "            <div class=\"columna\" style=\"width:180px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">2da Ronda</h4>
\t\t\t\t  \t";
                // line 176
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
                    // line 177
                    echo "                        ";
                    $context["rnd2"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 178
                    echo "\t\t\t\t  \t\t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "78";
                    } else {
                        echo "30";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 179
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "67";
                    } else {
                        echo "20";
                    }
                    echo "px;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                            ";
                    // line 180
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 181
                        echo "                                ";
                        if (((isset($context["rnd2"]) ? $context["rnd2"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f8"))) {
                            // line 182
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                    <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 183
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r8"), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 185
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 186
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 187
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 188
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:30px;height:99px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 190
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:77px;height:99px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    }
                    // line 192
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
                // line 193
                echo "            </div>
            ";
                // line 195
                echo "            <div class=\"columna\" style=\"width:180px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">3ra Ronda</h4>
\t\t\t\t  \t";
                // line 197
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
                    // line 198
                    echo "                    ";
                    $context["rnd3"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 199
                    echo "\t\t\t\t\t\t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "174";
                    } else {
                        echo "85";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 200
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "164";
                    } else {
                        echo "75";
                    }
                    echo "px;\">
                            ";
                    // line 201
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                            ";
                    // line 202
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 203
                        echo "                                ";
                        if (((isset($context["rnd3"]) ? $context["rnd3"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f4"))) {
                            // line 204
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                    <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 205
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r4"), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 207
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 208
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 209
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 210
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:88px;height:193px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 212
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:175px;height:194px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    }
                    // line 214
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
                // line 215
                echo "\t\t\t\t</div>
                ";
                // line 217
                echo "\t\t\t\t<div class=\"columna\" style=\"width:180px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">8vos de Final</h4>
\t\t\t\t  \t";
                // line 219
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
                    // line 220
                    echo "                    ";
                    $context["rnd4"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 221
                    echo "\t\t\t\t  \t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "367";
                    } else {
                        echo "177";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 222
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "358";
                    } else {
                        echo "167";
                    }
                    echo "px;\">
                            ";
                    // line 223
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                            ";
                    // line 224
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 225
                        echo "                                ";
                        if (((isset($context["rnd4"]) ? $context["rnd4"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f2"))) {
                            // line 226
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                    <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 227
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r2"), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 229
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 230
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 231
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 232
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:177px;height:389px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 234
                        echo "                            <div class=\"line-right right-down\" style=\"margin-top:367px;height:389px;border-bottom: 1px solid #000;\"></div>
                        ";
                    }
                    // line 236
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
                // line 237
                echo "\t\t\t\t</div>
                ";
                // line 239
                echo "\t\t\t\t<div class=\"columna\" style=\"width:180px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">4tos de Final</h4>
\t\t\t\t  \t";
                // line 241
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
                    // line 242
                    echo "                    ";
                    $context["rnd5"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 243
                    echo "\t\t\t\t  \t\t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "757";
                    } else {
                        echo "376";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 244
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "747";
                    } else {
                        echo "366";
                    }
                    echo "px;\">
                        ";
                    // line 245
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                        ";
                    // line 246
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 247
                        echo "                            ";
                        if (((isset($context["rnd5"]) ? $context["rnd5"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f1"))) {
                            // line 248
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 249
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r1"), "html", null, true);
                            echo "</span>
                            ";
                        }
                        // line 251
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 252
                    echo "                        </div>
                        ";
                    // line 253
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 254
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:376px;height:778px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 256
                        echo "                            <div class=\"line-right right-down\" style=\"margin-top:758px;height:778px;border-bottom: 1px solid #000;\"></div>
                        ";
                    }
                    // line 258
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ronda5'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 259
                echo "\t\t\t\t</div>
                ";
                // line 261
                echo "                <div class=\"columna\" style=\"width:180px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">Semi Final</h4>
\t\t\t\t  \t";
                // line 263
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["rondas6"]) ? $context["rondas6"] : null)));
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
                foreach ($context['_seq'] as $context["_key"] => $context["ronda6"]) {
                    // line 264
                    echo "                    ";
                    $context["rnd6"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 265
                    echo "\t\t\t\t  \t\t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "1530";
                    } else {
                        echo "770";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 266
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "1520";
                    } else {
                        echo "760";
                    }
                    echo "px;\">
                        ";
                    // line 267
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                        ";
                    // line 268
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 269
                        echo "                            ";
                        if (((isset($context["rnd6"]) ? $context["rnd6"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f1"))) {
                            // line 270
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 271
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r1"), "html", null, true);
                            echo "</span>
                            ";
                        }
                        // line 273
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 274
                    echo "                        </div>
                        ";
                    // line 275
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 276
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:770px;height:1551px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 278
                        echo "                            <div class=\"line-right right-down\" style=\"margin-top:1530px;height:1551px;border-bottom: 1px solid #000;\"></div>
                        ";
                    }
                    // line 280
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ronda6'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 281
                echo "\t\t\t\t</div>
\t\t\t";
                // line 283
                echo "        ";
            }
            // line 284
            echo "        ";
            // line 285
            echo "
\t\t";
            // line 287
            echo "\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "equipos") == 16)) {
                // line 288
                echo "            ";
                // line 289
                echo "\t\t\t  \t<div style=\"float:left;overflow:hidden;width:180px;\">
\t\t\t  \t\t<h4>1ra Ronda</h4>
\t\t\t  \t\t";
                // line 291
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
                    // line 292
                    echo "                        ";
                    $context["rnd1"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 293
                    echo "\t\t\t\t\t\t<div class=\"cell\">
                        ";
                    // line 294
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                        ";
                    // line 295
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 296
                        echo "                            ";
                        if (((isset($context["rnd1"]) ? $context["rnd1"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f16"))) {
                            // line 297
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 298
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r16"), "html", null, true);
                            echo "</span>
                            ";
                        }
                        // line 300
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 301
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 302
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 303
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:12px;height:37px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 305
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:12px;height:37px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } else {
                        // line 307
                        echo "\t\t\t\t\t\t<div class=\"cell-sep\"></div>
\t\t\t\t\t\t";
                    }
                    // line 309
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
                // line 310
                echo "\t\t\t\t</div>
                ";
                // line 312
                echo "\t\t\t\t<div style=\"float:left;overflow:hidden;width:210px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">4tos de Final</h4>
\t\t\t\t  \t";
                // line 314
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
                    // line 315
                    echo "                        ";
                    $context["rnd2"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 316
                    echo "\t\t\t\t  \t\t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "81";
                    } else {
                        echo "33";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 317
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "68";
                    } else {
                        echo "20";
                    }
                    echo "px;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                            ";
                    // line 318
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 319
                        echo "                                ";
                        if (((isset($context["rnd2"]) ? $context["rnd2"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f8"))) {
                            // line 320
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                    <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 321
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r8"), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 323
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 324
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 325
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 326
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:34px;height:107px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 328
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:81px;height:107px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    }
                    // line 330
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
                // line 331
                echo "\t\t\t\t</div>
                ";
                // line 333
                echo "\t\t\t\t<div style=\"float:left;overflow:hidden;width:210px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">Semi-final</h4>
\t\t\t\t  \t";
                // line 335
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
                    // line 336
                    echo "                    ";
                    $context["rnd3"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 337
                    echo "\t\t\t\t\t\t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "186";
                    } else {
                        echo "88";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 338
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "173";
                    } else {
                        echo "75";
                    }
                    echo "px;\">
                            ";
                    // line 339
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                            ";
                    // line 340
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 341
                        echo "                                ";
                        if (((isset($context["rnd3"]) ? $context["rnd3"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f4"))) {
                            // line 342
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                    <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 343
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r4"), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 345
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 346
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 347
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 348
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:88px;height:212px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 350
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:186px;height:212px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    }
                    // line 352
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
                // line 353
                echo "\t\t\t\t</div>
                ";
                // line 355
                echo "\t\t\t\t<div style=\"float:left;overflow:hidden;width:210px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">Final</h4>
\t\t\t\t  \t";
                // line 357
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
                    // line 358
                    echo "                    ";
                    $context["rnd4"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 359
                    echo "\t\t\t\t  \t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "414";
                    } else {
                        echo "188";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 360
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "400";
                    } else {
                        echo "175";
                    }
                    echo "px;\">
                            ";
                    // line 361
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                            ";
                    // line 362
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 363
                        echo "                                ";
                        if (((isset($context["rnd4"]) ? $context["rnd4"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f2"))) {
                            // line 364
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                    <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 365
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r2"), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 367
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 368
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 369
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 370
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:188px;height:440px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    }
                    // line 372
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
                // line 373
                echo "\t\t\t\t</div>
                ";
                // line 375
                echo "\t\t\t\t<div style=\"float:left;overflow:hidden;width:210px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">Campeon</h4>
\t\t\t\t  \t";
                // line 377
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
                    // line 378
                    echo "                    ";
                    $context["rnd5"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 379
                    echo "\t\t\t\t  \t\t<div class=\"left-line\" style=\"margin-top:400px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:386px;\">
                        ";
                    // line 381
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                        ";
                    // line 382
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 383
                        echo "                            ";
                        if (((isset($context["rnd5"]) ? $context["rnd5"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f1"))) {
                            // line 384
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 385
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r1"), "html", null, true);
                            echo "</span>
                            ";
                        }
                        // line 387
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 388
                    echo "                        </div>
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
                // line 390
                echo "\t\t\t\t</div>
\t\t\t";
                // line 392
                echo "\t\t";
            }
            // line 393
            echo "\t\t";
            // line 394
            echo "\t</div>
\t";
            // line 396
            echo "\t";
            // line 397
            echo "    ";
        }
        // line 398
        echo "</div>
";
        // line 400
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
        return array (  1217 => 400,  1214 => 398,  1211 => 397,  1209 => 396,  1206 => 394,  1204 => 393,  1201 => 392,  1198 => 390,  1183 => 388,  1177 => 387,  1172 => 385,  1163 => 384,  1160 => 383,  1156 => 382,  1152 => 381,  1148 => 379,  1145 => 378,  1128 => 377,  1124 => 375,  1121 => 373,  1107 => 372,  1103 => 370,  1101 => 369,  1098 => 368,  1092 => 367,  1087 => 365,  1078 => 364,  1075 => 363,  1071 => 362,  1067 => 361,  1059 => 360,  1050 => 359,  1047 => 358,  1030 => 357,  1026 => 355,  1023 => 353,  1009 => 352,  1005 => 350,  1001 => 348,  999 => 347,  996 => 346,  990 => 345,  985 => 343,  976 => 342,  973 => 341,  969 => 340,  965 => 339,  957 => 338,  948 => 337,  945 => 336,  928 => 335,  924 => 333,  921 => 331,  907 => 330,  903 => 328,  899 => 326,  897 => 325,  894 => 324,  888 => 323,  883 => 321,  874 => 320,  871 => 319,  867 => 318,  857 => 317,  848 => 316,  845 => 315,  828 => 314,  824 => 312,  821 => 310,  807 => 309,  803 => 307,  799 => 305,  795 => 303,  793 => 302,  790 => 301,  784 => 300,  779 => 298,  770 => 297,  767 => 296,  763 => 295,  759 => 294,  756 => 293,  753 => 292,  736 => 291,  732 => 289,  730 => 288,  727 => 287,  724 => 285,  722 => 284,  719 => 283,  716 => 281,  702 => 280,  698 => 278,  694 => 276,  692 => 275,  689 => 274,  683 => 273,  678 => 271,  669 => 270,  666 => 269,  662 => 268,  658 => 267,  650 => 266,  641 => 265,  638 => 264,  621 => 263,  617 => 261,  614 => 259,  600 => 258,  596 => 256,  592 => 254,  590 => 253,  587 => 252,  581 => 251,  576 => 249,  567 => 248,  564 => 247,  560 => 246,  556 => 245,  548 => 244,  539 => 243,  536 => 242,  519 => 241,  515 => 239,  512 => 237,  498 => 236,  494 => 234,  490 => 232,  488 => 231,  485 => 230,  479 => 229,  474 => 227,  465 => 226,  462 => 225,  458 => 224,  454 => 223,  446 => 222,  437 => 221,  434 => 220,  417 => 219,  413 => 217,  410 => 215,  396 => 214,  392 => 212,  388 => 210,  386 => 209,  383 => 208,  377 => 207,  372 => 205,  363 => 204,  360 => 203,  356 => 202,  352 => 201,  344 => 200,  335 => 199,  332 => 198,  315 => 197,  311 => 195,  308 => 193,  294 => 192,  290 => 190,  286 => 188,  284 => 187,  281 => 186,  275 => 185,  270 => 183,  261 => 182,  258 => 181,  254 => 180,  244 => 179,  235 => 178,  232 => 177,  215 => 176,  211 => 174,  208 => 172,  194 => 171,  190 => 169,  186 => 167,  182 => 165,  180 => 164,  175 => 162,  170 => 161,  153 => 160,  149 => 158,  147 => 157,  144 => 156,  141 => 154,  138 => 153,  135 => 152,  132 => 151,  129 => 150,  126 => 149,  123 => 148,  120 => 147,  117 => 146,  115 => 145,  102 => 133,  92 => 125,  79 => 117,  75 => 116,  71 => 115,  67 => 114,  63 => 113,  54 => 111,  48 => 107,  45 => 106,  42 => 105,  39 => 104,  34 => 100,  28 => 95,  23 => 93,  21 => 2,  19 => 1,);
    }
}


/* brackets.twig */
class __TwigTemplate_b0a94d69055c77a9aeb6e8798708bbb9cc2cc2632b090d74e523e13a792ed6eb_1431628846 extends Twig_Template
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
    ";
        // line 7
        if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "equipos") == 128)) {
            // line 8
            echo "\twidth:120px;
    font-size: 9px;
    height:20px;
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "equipos") == 64)) {
            // line 12
            echo "    
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "equipos") == 32)) {
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "    width:150px;
    font-size: 12px;
    height:25px;
    ";
        }
        // line 19
        echo "    padding: 3px 6px;
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
\tmargin-bottom: 10px;
\tmargin-right:0;
\t
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

.columna {
    float:left;
    overflow:hidden;
}
.p128 {
    width:150px;
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

    // line 91
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
        return array (  1376 => 91,  1301 => 19,  1295 => 15,  1292 => 14,  1288 => 12,  1282 => 8,  1280 => 7,  1276 => 5,  1273 => 4,  1265 => 3,  1217 => 400,  1214 => 398,  1211 => 397,  1209 => 396,  1206 => 394,  1204 => 393,  1201 => 392,  1198 => 390,  1183 => 388,  1177 => 387,  1172 => 385,  1163 => 384,  1160 => 383,  1156 => 382,  1152 => 381,  1148 => 379,  1145 => 378,  1128 => 377,  1124 => 375,  1121 => 373,  1107 => 372,  1103 => 370,  1101 => 369,  1098 => 368,  1092 => 367,  1087 => 365,  1078 => 364,  1075 => 363,  1071 => 362,  1067 => 361,  1059 => 360,  1050 => 359,  1047 => 358,  1030 => 357,  1026 => 355,  1023 => 353,  1009 => 352,  1005 => 350,  1001 => 348,  999 => 347,  996 => 346,  990 => 345,  985 => 343,  976 => 342,  973 => 341,  969 => 340,  965 => 339,  957 => 338,  948 => 337,  945 => 336,  928 => 335,  924 => 333,  921 => 331,  907 => 330,  903 => 328,  899 => 326,  897 => 325,  894 => 324,  888 => 323,  883 => 321,  874 => 320,  871 => 319,  867 => 318,  857 => 317,  848 => 316,  845 => 315,  828 => 314,  824 => 312,  821 => 310,  807 => 309,  803 => 307,  799 => 305,  795 => 303,  793 => 302,  790 => 301,  784 => 300,  779 => 298,  770 => 297,  767 => 296,  763 => 295,  759 => 294,  756 => 293,  753 => 292,  736 => 291,  732 => 289,  730 => 288,  727 => 287,  724 => 285,  722 => 284,  719 => 283,  716 => 281,  702 => 280,  698 => 278,  694 => 276,  692 => 275,  689 => 274,  683 => 273,  678 => 271,  669 => 270,  666 => 269,  662 => 268,  658 => 267,  650 => 266,  641 => 265,  638 => 264,  621 => 263,  617 => 261,  614 => 259,  600 => 258,  596 => 256,  592 => 254,  590 => 253,  587 => 252,  581 => 251,  576 => 249,  567 => 248,  564 => 247,  560 => 246,  556 => 245,  548 => 244,  539 => 243,  536 => 242,  519 => 241,  515 => 239,  512 => 237,  498 => 236,  494 => 234,  490 => 232,  488 => 231,  485 => 230,  479 => 229,  474 => 227,  465 => 226,  462 => 225,  458 => 224,  454 => 223,  446 => 222,  437 => 221,  434 => 220,  417 => 219,  413 => 217,  410 => 215,  396 => 214,  392 => 212,  388 => 210,  386 => 209,  383 => 208,  377 => 207,  372 => 205,  363 => 204,  360 => 203,  356 => 202,  352 => 201,  344 => 200,  335 => 199,  332 => 198,  315 => 197,  311 => 195,  308 => 193,  294 => 192,  290 => 190,  286 => 188,  284 => 187,  281 => 186,  275 => 185,  270 => 183,  261 => 182,  258 => 181,  254 => 180,  244 => 179,  235 => 178,  232 => 177,  215 => 176,  211 => 174,  208 => 172,  194 => 171,  190 => 169,  186 => 167,  182 => 165,  180 => 164,  175 => 162,  170 => 161,  153 => 160,  149 => 158,  147 => 157,  144 => 156,  141 => 154,  138 => 153,  135 => 152,  132 => 151,  129 => 150,  126 => 149,  123 => 148,  120 => 147,  117 => 146,  115 => 145,  102 => 133,  92 => 125,  79 => 117,  75 => 116,  71 => 115,  67 => 114,  63 => 113,  54 => 111,  48 => 107,  45 => 106,  42 => 105,  39 => 104,  34 => 100,  28 => 95,  23 => 93,  21 => 2,  19 => 1,);
    }
}
