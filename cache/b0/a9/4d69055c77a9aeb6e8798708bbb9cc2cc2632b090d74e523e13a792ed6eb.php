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
        $this->env->loadTemplate("brackets.twig", "1996402151")->display($context);
        // line 75
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "titulo"), "html", null, true);
        echo "</h1>
";
        // line 77
        echo "<ul class=\"nav nav-tabs\">
  <li class=\"active\"><a href=\"#descripcion\" data-toggle=\"tab\">Descripcion</a></li>
  <li><a href=\"#bracket\" data-toggle=\"tab\">Bracket</a></li>
</ul>
";
        // line 82
        echo "<div class=\"tab-content\">
\t<div class=\"tab-pane fade in active\" id=\"descripcion\">
\t\t<div style=\"margin-top:30px;\"></div>
    ";
        // line 86
        echo "    ";
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket") == false)) {
            // line 87
            echo "        ";
            $this->env->loadTemplate("404.twig")->display($context);
            // line 88
            echo "    ";
        } else {
            // line 89
            echo "    ";
            $context["rondas1"] = $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "equipos");
            // line 90
            echo "\t\t\t";
            $context["rondas2"] = ((isset($context["rondas1"]) ? $context["rondas1"] : null) / 2);
            // line 91
            echo "\t\t\t";
            $context["rondas3"] = ((isset($context["rondas2"]) ? $context["rondas2"] : null) / 2);
            // line 92
            echo "\t\t\t";
            $context["rondas4"] = ((isset($context["rondas3"]) ? $context["rondas3"] : null) / 2);
            // line 93
            echo "\t\t\t";
            $context["rondas5"] = ((isset($context["rondas4"]) ? $context["rondas4"] : null) / 2);
            // line 94
            echo "\t\t\t";
            $context["rondas6"] = ((isset($context["rondas5"]) ? $context["rondas5"] : null) / 2);
            // line 95
            echo "\t\t\t";
            $context["rondas7"] = ((isset($context["rondas6"]) ? $context["rondas6"] : null) / 2);
            // line 96
            echo "\t\t\t";
            $context["rondas8"] = ((isset($context["rondas7"]) ? $context["rondas7"] : null) / 2);
            // line 97
            echo "\t\t<div class=\"well\">
\t\t\t<div class=\"row\">
\t\t\t  <div class=\"col-sm-8 col-md-4\">
\t\t\t    <div class=\"thumbnail\">
\t\t\t      <img src=\"";
            // line 101
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/images/news/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "logo"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "titulo"), "html", null, true);
            echo "\">
\t\t\t      <div class=\"caption\">
\t\t\t        <h3>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "titulo"), "html", null, true);
            echo "</h3>
\t\t\t        <p>Creado el ";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "fecha"), "html", null, true);
            echo "</p>
\t\t\t        <p>Encargado: ";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "autor"), "html", null, true);
            echo "</p>
\t\t\t        <p>Juego: ";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "juego"), "html", null, true);
            echo "</p>
\t\t\t        <p>Modo: ";
            // line 107
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
            // line 115
            echo $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "descripcion");
            echo "
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            // line 123
            echo "\t<div class=\"tab-pane fade\" id=\"bracket\" style=\"min-width:970px;width:1020px\">
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
            // line 135
            echo "\t\t<div style=\"margin-top:30px;\"></div>
        ";
            // line 137
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "equipos") == 128)) {
                // line 138
                echo "            128
        ";
            }
            // line 140
            echo "        ";
            // line 141
            echo "
\t\t";
            // line 143
            echo "\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "equipos") == 16)) {
                // line 144
                echo "\t\t
            ";
                // line 146
                echo "\t\t\t  \t<div style=\"float:left;overflow:hidden;width:180px;\">
\t\t\t  \t\t<h4>1ra Ronda</h4>
\t\t\t  \t\t";
                // line 148
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
                    // line 149
                    echo "                        ";
                    $context["rnd1"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 150
                    echo "\t\t\t\t\t\t<div class=\"cell\">
                        ";
                    // line 151
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                        ";
                    // line 152
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 153
                        echo "                            ";
                        if (((isset($context["rnd1"]) ? $context["rnd1"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f16"))) {
                            // line 154
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                        <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 155
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r16"), "html", null, true);
                            echo "</span>
                            ";
                        }
                        // line 157
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 158
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 159
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 160
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:12px;height:37px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 162
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:12px;height:37px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } else {
                        // line 164
                        echo "\t\t\t\t\t\t<div class=\"cell-sep\"></div>
\t\t\t\t\t\t";
                    }
                    // line 166
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
                // line 167
                echo "\t\t\t\t</div>
                ";
                // line 169
                echo "\t\t\t\t<div style=\"float:left;overflow:hidden;width:210px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">4tos de Final</h4>
\t\t\t\t  \t";
                // line 171
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
                    // line 172
                    echo "                        ";
                    $context["rnd2"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 173
                    echo "\t\t\t\t  \t\t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "81";
                    } else {
                        echo "33";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 174
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "68";
                    } else {
                        echo "20";
                    }
                    echo "px;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                            ";
                    // line 175
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 176
                        echo "                                ";
                        if (((isset($context["rnd2"]) ? $context["rnd2"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f8"))) {
                            // line 177
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                    <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 178
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r8"), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 180
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 181
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 182
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 183
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:34px;height:107px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 185
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:81px;height:107px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    }
                    // line 187
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
                // line 188
                echo "\t\t\t\t</div>
\t\t\t\t<div style=\"float:left;overflow:hidden;width:210px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">Semi-final</h4>
\t\t\t\t  \t";
                // line 191
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
                    // line 192
                    echo "                    ";
                    $context["rnd3"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 193
                    echo "\t\t\t\t\t\t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "186";
                    } else {
                        echo "88";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 194
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "173";
                    } else {
                        echo "75";
                    }
                    echo "px;\">
                            ";
                    // line 195
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                            ";
                    // line 196
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 197
                        echo "                                ";
                        if (((isset($context["rnd3"]) ? $context["rnd3"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f4"))) {
                            // line 198
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                    <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 199
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r4"), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 201
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 202
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 203
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 204
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:88px;height:212px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 206
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:186px;height:212px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    }
                    // line 208
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
                // line 209
                echo "\t\t\t\t</div>
\t\t\t\t<div style=\"float:left;overflow:hidden;width:210px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">Final</h4>
\t\t\t\t  \t";
                // line 212
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
                    // line 213
                    echo "                    ";
                    $context["rnd4"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 214
                    echo "\t\t\t\t  \t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "414";
                    } else {
                        echo "188";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 215
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "400";
                    } else {
                        echo "175";
                    }
                    echo "px;\">
                            ";
                    // line 216
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                            ";
                    // line 217
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 218
                        echo "                                ";
                        if (((isset($context["rnd4"]) ? $context["rnd4"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f2"))) {
                            // line 219
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                    <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 220
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r2"), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 222
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 223
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 224
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 225
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:188px;height:440px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    }
                    // line 227
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
                // line 228
                echo "\t\t\t\t</div>
\t\t\t\t<div style=\"float:right;overflow:hidden;width:210px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">Campeon</h4>
\t\t\t\t  \t";
                // line 231
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
                    // line 232
                    echo "                    ";
                    $context["rnd5"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 233
                    echo "\t\t\t\t  \t\t<div class=\"left-line\" style=\"margin-top:400px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:386px;\">
                        ";
                    // line 235
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                        ";
                    // line 236
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 237
                        echo "                            ";
                        if (((isset($context["rnd5"]) ? $context["rnd5"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f1"))) {
                            // line 238
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 239
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r1"), "html", null, true);
                            echo "</span>
                            ";
                        }
                        // line 241
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 242
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
                // line 244
                echo "\t\t\t\t</div>
\t\t\t";
                // line 246
                echo "\t\t";
            }
            // line 247
            echo "\t\t";
            // line 248
            echo "\t</div>
\t";
            // line 250
            echo "\t";
            // line 251
            echo "    ";
        }
        // line 252
        echo "</div>
";
        // line 254
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
        return array (  639 => 254,  636 => 252,  633 => 251,  631 => 250,  628 => 248,  626 => 247,  623 => 246,  620 => 244,  605 => 242,  599 => 241,  594 => 239,  585 => 238,  582 => 237,  578 => 236,  574 => 235,  570 => 233,  567 => 232,  550 => 231,  545 => 228,  531 => 227,  527 => 225,  525 => 224,  522 => 223,  516 => 222,  511 => 220,  502 => 219,  499 => 218,  495 => 217,  491 => 216,  483 => 215,  474 => 214,  471 => 213,  454 => 212,  449 => 209,  435 => 208,  431 => 206,  427 => 204,  425 => 203,  422 => 202,  416 => 201,  411 => 199,  402 => 198,  399 => 197,  395 => 196,  391 => 195,  383 => 194,  374 => 193,  371 => 192,  354 => 191,  349 => 188,  335 => 187,  331 => 185,  327 => 183,  325 => 182,  322 => 181,  316 => 180,  311 => 178,  302 => 177,  299 => 176,  295 => 175,  285 => 174,  276 => 173,  273 => 172,  256 => 171,  252 => 169,  249 => 167,  235 => 166,  231 => 164,  227 => 162,  223 => 160,  221 => 159,  218 => 158,  212 => 157,  207 => 155,  198 => 154,  195 => 153,  191 => 152,  187 => 151,  184 => 150,  181 => 149,  164 => 148,  160 => 146,  157 => 144,  154 => 143,  151 => 141,  149 => 140,  145 => 138,  142 => 137,  139 => 135,  126 => 123,  116 => 115,  103 => 107,  99 => 106,  95 => 105,  91 => 104,  87 => 103,  78 => 101,  72 => 97,  69 => 96,  66 => 95,  63 => 94,  60 => 93,  57 => 92,  54 => 91,  51 => 90,  48 => 89,  45 => 88,  42 => 87,  39 => 86,  34 => 82,  28 => 77,  23 => 75,  21 => 2,  19 => 1,);
    }
}


/* brackets.twig */
class __TwigTemplate_b0a94d69055c77a9aeb6e8798708bbb9cc2cc2632b090d74e523e13a792ed6eb_1996402151 extends Twig_Template
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

    // line 73
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
        return array (  769 => 73,  698 => 5,  695 => 4,  687 => 3,  639 => 254,  636 => 252,  633 => 251,  631 => 250,  628 => 248,  626 => 247,  623 => 246,  620 => 244,  605 => 242,  599 => 241,  594 => 239,  585 => 238,  582 => 237,  578 => 236,  574 => 235,  570 => 233,  567 => 232,  550 => 231,  545 => 228,  531 => 227,  527 => 225,  525 => 224,  522 => 223,  516 => 222,  511 => 220,  502 => 219,  499 => 218,  495 => 217,  491 => 216,  483 => 215,  474 => 214,  471 => 213,  454 => 212,  449 => 209,  435 => 208,  431 => 206,  427 => 204,  425 => 203,  422 => 202,  416 => 201,  411 => 199,  402 => 198,  399 => 197,  395 => 196,  391 => 195,  383 => 194,  374 => 193,  371 => 192,  354 => 191,  349 => 188,  335 => 187,  331 => 185,  327 => 183,  325 => 182,  322 => 181,  316 => 180,  311 => 178,  302 => 177,  299 => 176,  295 => 175,  285 => 174,  276 => 173,  273 => 172,  256 => 171,  252 => 169,  249 => 167,  235 => 166,  231 => 164,  227 => 162,  223 => 160,  221 => 159,  218 => 158,  212 => 157,  207 => 155,  198 => 154,  195 => 153,  191 => 152,  187 => 151,  184 => 150,  181 => 149,  164 => 148,  160 => 146,  157 => 144,  154 => 143,  151 => 141,  149 => 140,  145 => 138,  142 => 137,  139 => 135,  126 => 123,  116 => 115,  103 => 107,  99 => 106,  95 => 105,  91 => 104,  87 => 103,  78 => 101,  72 => 97,  69 => 96,  66 => 95,  63 => 94,  60 => 93,  57 => 92,  54 => 91,  51 => 90,  48 => 89,  45 => 88,  42 => 87,  39 => 86,  34 => 82,  28 => 77,  23 => 75,  21 => 2,  19 => 1,);
    }
}
