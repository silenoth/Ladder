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
        $this->env->loadTemplate("brackets.twig", "1371009589")->display($context);
        // line 103
        $context["success"] = $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "mensajes"), "success");
        // line 104
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "titulo"), "html", null, true);
        echo "</h1>
";
        // line 105
        if (((isset($context["success"]) ? $context["success"] : null) == true)) {
            // line 106
            echo "<div class=\"alert alert-warning alert-dismissible fade in\" role=\"alert\" id=\"success\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>
";
        }
        // line 112
        echo "<ul class=\"nav nav-tabs\">
  <li class=\"active\"><a href=\"#descripcion\" data-toggle=\"tab\">Descripcion</a></li>
  <li><a href=\"#bracket\" data-toggle=\"tab\">Bracket</a></li>
</ul>
";
        // line 117
        echo "<div class=\"tab-content\">
\t<div class=\"tab-pane fade in active\" id=\"descripcion\">
\t\t<div style=\"margin-top:30px;\"></div>
        
    ";
        // line 122
        echo "    ";
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket") == false)) {
            // line 123
            echo "        ";
            $this->env->loadTemplate("404.twig")->display($context);
            // line 124
            echo "    ";
        } else {
            // line 125
            echo "\t\t<div class=\"well\">
\t\t\t<div class=\"row\">
\t\t\t  <div class=\"col-sm-8 col-md-4\">
\t\t\t    <div class=\"thumbnail\">
\t\t\t      <img src=\"";
            // line 129
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/images/news/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "logo"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "titulo"), "html", null, true);
            echo "\" />
\t\t\t      <div class=\"caption\">
\t\t\t        <h3>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "titulo"), "html", null, true);
            echo "</h3>
\t\t\t        <p>Creado el ";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "fecha"), "html", null, true);
            echo "</p>
\t\t\t        <p>Encargado: ";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "autor"), "html", null, true);
            echo "</p>
\t\t\t        <p>Juego: ";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "juego"), "html", null, true);
            echo "</p>
\t\t\t        <p>Modo: ";
            // line 135
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "modo") == 0)) {
                echo "1v1";
            }
            echo "</p>
                    ";
            // line 136
            if ((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null)))) {
                // line 137
                echo "                        ";
                if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "estado") == false)) {
                    // line 138
                    echo "        \t\t\t        <form method=\"post\" action=\"\" name=\"inscripcion\" id=\"inscripcion\">
                                <input type=\"hidden\" name=\"ins_ok\" value=\"1\" />
                                <button class=\"btn btn-primary\" type=\"submit\" name=\"enviar_inscripcion\" id=\"enviar_inscripcion\">Inscripción</button>
                                <p>Acepto terminos y condiciones.<input type=\"checkbox\" value=\"0\" name=\"chkaceptar\"/></p>
                            </form>
                        ";
                }
                // line 144
                echo "                    ";
            } else {
                // line 145
                echo "                    <div class=\"alert alert-info alert-dismissable\">
                    Para participar de este torneo debes <a href=\"#\" data-toggle=\"modal\" data-target=\"#mlogin\">iniciar sesion</a>
                    </div>
                    ";
            }
            // line 149
            echo "\t\t\t      </div>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"col-sm-4 col-md-8\">
\t\t\t  \t<div class=\"panel panel-default\">
\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t    ";
            // line 155
            echo $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "descripcion");
            echo "
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            // line 163
            echo "\t<div class=\"tab-pane fade\" id=\"bracket\" style=\"min-width:970px;width:1820px\">
\t\t<div class=\"row\" style=\"margin-top:30px;\">
\t\t<div class=\"col-md-9 col-md-push-3\">
\t\t\t<p>Requisitos:</p>
\t\t</div>
\t  \t\t<div class=\"col-md-3 col-md-pull-9\">
            ";
            // line 169
            if ((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null)))) {
                // line 170
                echo "\t  \t\t\t<form method=\"post\" action=\"\">
\t\t\t\t\t<button class=\"btn btn-primary\">Enviar reporte</button>
\t\t\t\t</form>
            ";
            }
            // line 174
            echo "\t  \t\t</div>
\t\t</div>
        ";
            // line 177
            echo "        ";
            // line 178
            echo "        ";
            $context["rondas1"] = $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "equipos");
            // line 179
            echo "    \t";
            $context["rondas2"] = ((isset($context["rondas1"]) ? $context["rondas1"] : null) / 2);
            // line 180
            echo "    \t";
            $context["rondas3"] = ((isset($context["rondas2"]) ? $context["rondas2"] : null) / 2);
            // line 181
            echo "    \t";
            $context["rondas4"] = ((isset($context["rondas3"]) ? $context["rondas3"] : null) / 2);
            // line 182
            echo "    \t";
            $context["rondas5"] = ((isset($context["rondas4"]) ? $context["rondas4"] : null) / 2);
            // line 183
            echo "    \t";
            $context["rondas6"] = ((isset($context["rondas5"]) ? $context["rondas5"] : null) / 2);
            // line 184
            echo "    \t";
            $context["rondas7"] = ((isset($context["rondas6"]) ? $context["rondas6"] : null) / 2);
            // line 185
            echo "    \t";
            $context["rondas8"] = ((isset($context["rondas7"]) ? $context["rondas7"] : null) / 2);
            // line 186
            echo "\t\t<div style=\"margin-top:30px;\"></div>
        ";
            // line 188
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "equipos") == 128)) {
                // line 189
                echo "            ";
                // line 190
                echo "            <div class=\"columna p128\">
                <h4>1ra Ronda</h4>
                ";
                // line 192
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
                    // line 193
                    echo "                ";
                    $context["rnd1"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 194
                    echo "                    <div class=\"cell\" id=\"player";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "\">
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
                        echo "                            ";
                        if (((isset($context["rnd1"]) ? $context["rnd1"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f128"))) {
                            // line 198
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 199
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r16"), "html", null, true);
                            echo "</span>
                            ";
                        }
                        // line 201
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 202
                    echo "                    </div>
                    ";
                    // line 203
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 204
                        echo "\t\t              <div class=\"line-right right-down\" style=\"margin-top:12px;height:33px;border-bottom: 1px solid #000;\"></div>
                    ";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 206
                        echo "\t\t              <div class=\"line-right right-down\" style=\"margin-top:12px;height:33px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t";
                    } else {
                        // line 208
                        echo "\t\t\t\t\t   <div class=\"cell-sep\"></div>
                    ";
                    }
                    // line 210
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
                // line 211
                echo "            </div>
            ";
                // line 213
                echo "            <div class=\"columna\" style=\"width:180px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">2da Ronda</h4>
\t\t\t\t  \t";
                // line 215
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
                    // line 216
                    echo "                        ";
                    $context["rnd2"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 217
                    echo "\t\t\t\t  \t\t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "78";
                    } else {
                        echo "30";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 218
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "67";
                    } else {
                        echo "20";
                    }
                    echo "px;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                            ";
                    // line 219
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 220
                        echo "                                ";
                        if (((isset($context["rnd2"]) ? $context["rnd2"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f8"))) {
                            // line 221
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                    <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 222
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r8"), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 224
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 225
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 226
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 227
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:30px;height:99px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 229
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:77px;height:99px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    }
                    // line 231
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
                // line 232
                echo "            </div>
            ";
                // line 234
                echo "            <div class=\"columna\" style=\"width:180px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">3ra Ronda</h4>
\t\t\t\t  \t";
                // line 236
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
                    // line 237
                    echo "                    ";
                    $context["rnd3"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 238
                    echo "\t\t\t\t\t\t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "174";
                    } else {
                        echo "85";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 239
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "164";
                    } else {
                        echo "75";
                    }
                    echo "px;\">
                            ";
                    // line 240
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                            ";
                    // line 241
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 242
                        echo "                                ";
                        if (((isset($context["rnd3"]) ? $context["rnd3"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f4"))) {
                            // line 243
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                    <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 244
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r4"), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 246
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 247
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 248
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 249
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:88px;height:193px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 251
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:175px;height:194px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    }
                    // line 253
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
                // line 254
                echo "\t\t\t\t</div>
                ";
                // line 256
                echo "\t\t\t\t<div class=\"columna\" style=\"width:180px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">8vos de Final</h4>
\t\t\t\t  \t";
                // line 258
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
                    // line 259
                    echo "                    ";
                    $context["rnd4"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 260
                    echo "\t\t\t\t  \t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "367";
                    } else {
                        echo "177";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 261
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "358";
                    } else {
                        echo "167";
                    }
                    echo "px;\">
                            ";
                    // line 262
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                            ";
                    // line 263
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 264
                        echo "                                ";
                        if (((isset($context["rnd4"]) ? $context["rnd4"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f2"))) {
                            // line 265
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                    <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 266
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r2"), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 268
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 269
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 270
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 271
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:177px;height:389px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 273
                        echo "                            <div class=\"line-right right-down\" style=\"margin-top:367px;height:389px;border-bottom: 1px solid #000;\"></div>
                        ";
                    }
                    // line 275
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
                // line 276
                echo "\t\t\t\t</div>
                ";
                // line 278
                echo "\t\t\t\t<div class=\"columna\" style=\"width:180px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">4tos de Final</h4>
\t\t\t\t  \t";
                // line 280
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
                    // line 281
                    echo "                    ";
                    $context["rnd5"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 282
                    echo "\t\t\t\t  \t\t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "757";
                    } else {
                        echo "376";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 283
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "747";
                    } else {
                        echo "366";
                    }
                    echo "px;\">
                        ";
                    // line 284
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                        ";
                    // line 285
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 286
                        echo "                            ";
                        if (((isset($context["rnd5"]) ? $context["rnd5"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f1"))) {
                            // line 287
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 288
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r1"), "html", null, true);
                            echo "</span>
                            ";
                        }
                        // line 290
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 291
                    echo "                        </div>
                        ";
                    // line 292
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 293
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:376px;height:778px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 295
                        echo "                            <div class=\"line-right right-down\" style=\"margin-top:758px;height:778px;border-bottom: 1px solid #000;\"></div>
                        ";
                    }
                    // line 297
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
                // line 298
                echo "\t\t\t\t</div>
                ";
                // line 300
                echo "                <div class=\"columna\" style=\"width:180px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">Semi Final</h4>
\t\t\t\t  \t";
                // line 302
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
                    // line 303
                    echo "                    ";
                    $context["rnd6"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 304
                    echo "\t\t\t\t  \t\t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "1530";
                    } else {
                        echo "770";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 305
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "1520";
                    } else {
                        echo "760";
                    }
                    echo "px;\">
                        ";
                    // line 306
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                        ";
                    // line 307
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 308
                        echo "                            ";
                        if (((isset($context["rnd6"]) ? $context["rnd6"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f1"))) {
                            // line 309
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 310
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r1"), "html", null, true);
                            echo "</span>
                            ";
                        }
                        // line 312
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 313
                    echo "                        </div>
                        ";
                    // line 314
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 315
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:770px;height:1551px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 317
                        echo "                            <div class=\"line-right right-down\" style=\"margin-top:1530px;height:1551px;border-bottom: 1px solid #000;\"></div>
                        ";
                    }
                    // line 319
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
                // line 320
                echo "\t\t\t\t</div>
\t\t\t";
                // line 322
                echo "        ";
            }
            // line 323
            echo "        ";
            // line 324
            echo "
\t\t";
            // line 326
            echo "\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "equipos") == 16)) {
                // line 327
                echo "            ";
                // line 328
                echo "\t\t\t  \t<div style=\"float:left;overflow:hidden;width:180px;\">
\t\t\t  \t\t<h4>1ra Ronda</h4>
\t\t\t  \t\t";
                // line 330
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
                    // line 331
                    echo "                        ";
                    $context["rnd1"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 332
                    echo "\t\t\t\t\t\t<div class=\"cell\">
                        ";
                    // line 333
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                        ";
                    // line 334
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 335
                        echo "                            ";
                        if (((isset($context["rnd1"]) ? $context["rnd1"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f16"))) {
                            // line 336
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 337
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r16"), "html", null, true);
                            echo "</span>
                            ";
                        }
                        // line 339
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 340
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 341
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 342
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:12px;height:37px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 344
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:12px;height:37px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } else {
                        // line 346
                        echo "\t\t\t\t\t\t<div class=\"cell-sep\"></div>
\t\t\t\t\t\t";
                    }
                    // line 348
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
                // line 349
                echo "\t\t\t\t</div>
                ";
                // line 351
                echo "\t\t\t\t<div style=\"float:left;overflow:hidden;width:210px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">4tos de Final</h4>
\t\t\t\t  \t";
                // line 353
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
                    // line 354
                    echo "                        ";
                    $context["rnd2"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 355
                    echo "\t\t\t\t  \t\t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "81";
                    } else {
                        echo "33";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 356
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "68";
                    } else {
                        echo "20";
                    }
                    echo "px;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                            ";
                    // line 357
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 358
                        echo "                                ";
                        if (((isset($context["rnd2"]) ? $context["rnd2"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f8"))) {
                            // line 359
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                    <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 360
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r8"), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 362
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 363
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 364
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 365
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:34px;height:107px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 367
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:81px;height:107px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    }
                    // line 369
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
                // line 370
                echo "\t\t\t\t</div>
                ";
                // line 372
                echo "\t\t\t\t<div style=\"float:left;overflow:hidden;width:210px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">Semi-final</h4>
\t\t\t\t  \t";
                // line 374
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
                    // line 375
                    echo "                    ";
                    $context["rnd3"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 376
                    echo "\t\t\t\t\t\t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "186";
                    } else {
                        echo "88";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 377
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "173";
                    } else {
                        echo "75";
                    }
                    echo "px;\">
                            ";
                    // line 378
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                            ";
                    // line 379
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 380
                        echo "                                ";
                        if (((isset($context["rnd3"]) ? $context["rnd3"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f4"))) {
                            // line 381
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                    <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 382
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r4"), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 384
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 385
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 386
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 387
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:88px;height:212px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 389
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:186px;height:212px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    }
                    // line 391
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
                // line 392
                echo "\t\t\t\t</div>
                ";
                // line 394
                echo "\t\t\t\t<div style=\"float:left;overflow:hidden;width:210px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">Final</h4>
\t\t\t\t  \t";
                // line 396
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
                    // line 397
                    echo "                    ";
                    $context["rnd4"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 398
                    echo "\t\t\t\t  \t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "414";
                    } else {
                        echo "188";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 399
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "400";
                    } else {
                        echo "175";
                    }
                    echo "px;\">
                            ";
                    // line 400
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                            ";
                    // line 401
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 402
                        echo "                                ";
                        if (((isset($context["rnd4"]) ? $context["rnd4"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f2"))) {
                            // line 403
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                    <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 404
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r2"), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 406
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 407
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 408
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 409
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:188px;height:440px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    }
                    // line 411
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
                // line 412
                echo "\t\t\t\t</div>
                ";
                // line 414
                echo "\t\t\t\t<div style=\"float:left;overflow:hidden;width:210px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">Campeon</h4>
\t\t\t\t  \t";
                // line 416
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
                    // line 417
                    echo "                    ";
                    $context["rnd5"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 418
                    echo "\t\t\t\t  \t\t<div class=\"left-line\" style=\"margin-top:400px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:386px;\">
                        ";
                    // line 420
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                        ";
                    // line 421
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 422
                        echo "                            ";
                        if (((isset($context["rnd5"]) ? $context["rnd5"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f1"))) {
                            // line 423
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 424
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r1"), "html", null, true);
                            echo "</span>
                            ";
                        }
                        // line 426
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 427
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
                // line 429
                echo "\t\t\t\t</div>
\t\t\t";
                // line 431
                echo "\t\t";
            }
            // line 432
            echo "\t\t";
            // line 433
            echo "\t</div>
\t";
            // line 435
            echo "\t";
            // line 436
            echo "    ";
        }
        // line 437
        echo "</div>
";
        // line 439
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
        return array (  1291 => 439,  1288 => 437,  1285 => 436,  1283 => 435,  1280 => 433,  1278 => 432,  1275 => 431,  1272 => 429,  1257 => 427,  1251 => 426,  1246 => 424,  1237 => 423,  1234 => 422,  1230 => 421,  1226 => 420,  1222 => 418,  1219 => 417,  1202 => 416,  1198 => 414,  1195 => 412,  1181 => 411,  1177 => 409,  1175 => 408,  1172 => 407,  1166 => 406,  1161 => 404,  1152 => 403,  1149 => 402,  1145 => 401,  1141 => 400,  1133 => 399,  1124 => 398,  1121 => 397,  1104 => 396,  1100 => 394,  1097 => 392,  1083 => 391,  1079 => 389,  1075 => 387,  1073 => 386,  1070 => 385,  1064 => 384,  1059 => 382,  1050 => 381,  1047 => 380,  1043 => 379,  1039 => 378,  1031 => 377,  1022 => 376,  1019 => 375,  1002 => 374,  998 => 372,  995 => 370,  981 => 369,  977 => 367,  973 => 365,  971 => 364,  968 => 363,  962 => 362,  957 => 360,  948 => 359,  945 => 358,  941 => 357,  931 => 356,  922 => 355,  919 => 354,  902 => 353,  898 => 351,  895 => 349,  881 => 348,  877 => 346,  873 => 344,  869 => 342,  867 => 341,  864 => 340,  858 => 339,  853 => 337,  844 => 336,  841 => 335,  837 => 334,  833 => 333,  830 => 332,  827 => 331,  810 => 330,  806 => 328,  804 => 327,  801 => 326,  798 => 324,  796 => 323,  793 => 322,  790 => 320,  776 => 319,  772 => 317,  768 => 315,  766 => 314,  763 => 313,  757 => 312,  752 => 310,  743 => 309,  740 => 308,  736 => 307,  732 => 306,  724 => 305,  715 => 304,  712 => 303,  695 => 302,  691 => 300,  688 => 298,  674 => 297,  670 => 295,  666 => 293,  664 => 292,  661 => 291,  655 => 290,  650 => 288,  641 => 287,  638 => 286,  634 => 285,  630 => 284,  622 => 283,  613 => 282,  610 => 281,  593 => 280,  589 => 278,  586 => 276,  572 => 275,  568 => 273,  564 => 271,  562 => 270,  559 => 269,  553 => 268,  548 => 266,  539 => 265,  536 => 264,  532 => 263,  528 => 262,  520 => 261,  511 => 260,  508 => 259,  491 => 258,  487 => 256,  484 => 254,  470 => 253,  466 => 251,  462 => 249,  460 => 248,  457 => 247,  451 => 246,  446 => 244,  437 => 243,  434 => 242,  430 => 241,  426 => 240,  418 => 239,  409 => 238,  406 => 237,  389 => 236,  385 => 234,  382 => 232,  368 => 231,  364 => 229,  360 => 227,  358 => 226,  355 => 225,  349 => 224,  344 => 222,  335 => 221,  332 => 220,  328 => 219,  318 => 218,  309 => 217,  306 => 216,  289 => 215,  285 => 213,  282 => 211,  268 => 210,  264 => 208,  260 => 206,  256 => 204,  254 => 203,  251 => 202,  245 => 201,  240 => 199,  231 => 198,  228 => 197,  224 => 196,  220 => 195,  215 => 194,  212 => 193,  195 => 192,  191 => 190,  189 => 189,  186 => 188,  183 => 186,  180 => 185,  177 => 184,  174 => 183,  171 => 182,  168 => 181,  165 => 180,  162 => 179,  159 => 178,  157 => 177,  153 => 174,  147 => 170,  145 => 169,  137 => 163,  127 => 155,  119 => 149,  113 => 145,  110 => 144,  102 => 138,  99 => 137,  97 => 136,  91 => 135,  87 => 134,  83 => 133,  79 => 132,  75 => 131,  66 => 129,  60 => 125,  57 => 124,  54 => 123,  51 => 122,  45 => 117,  39 => 112,  32 => 106,  30 => 105,  25 => 104,  23 => 103,  21 => 2,  19 => 1,);
    }
}


/* brackets.twig */
class __TwigTemplate_b0a94d69055c77a9aeb6e8798708bbb9cc2cc2632b090d74e523e13a792ed6eb_1371009589 extends Twig_Template
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
        // line 92
        echo "<script type=\"text/javascript\">
    \$(function() {
    var hash = window.location.hash;

    // do some validation on the hash here

    hash && \$('ul.nav a[href=\"' + hash + '\"]').tab('show');
});
</script>
";
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
        return array (  1453 => 92,  1450 => 91,  1375 => 19,  1369 => 15,  1366 => 14,  1362 => 12,  1356 => 8,  1354 => 7,  1350 => 5,  1347 => 4,  1339 => 3,  1291 => 439,  1288 => 437,  1285 => 436,  1283 => 435,  1280 => 433,  1278 => 432,  1275 => 431,  1272 => 429,  1257 => 427,  1251 => 426,  1246 => 424,  1237 => 423,  1234 => 422,  1230 => 421,  1226 => 420,  1222 => 418,  1219 => 417,  1202 => 416,  1198 => 414,  1195 => 412,  1181 => 411,  1177 => 409,  1175 => 408,  1172 => 407,  1166 => 406,  1161 => 404,  1152 => 403,  1149 => 402,  1145 => 401,  1141 => 400,  1133 => 399,  1124 => 398,  1121 => 397,  1104 => 396,  1100 => 394,  1097 => 392,  1083 => 391,  1079 => 389,  1075 => 387,  1073 => 386,  1070 => 385,  1064 => 384,  1059 => 382,  1050 => 381,  1047 => 380,  1043 => 379,  1039 => 378,  1031 => 377,  1022 => 376,  1019 => 375,  1002 => 374,  998 => 372,  995 => 370,  981 => 369,  977 => 367,  973 => 365,  971 => 364,  968 => 363,  962 => 362,  957 => 360,  948 => 359,  945 => 358,  941 => 357,  931 => 356,  922 => 355,  919 => 354,  902 => 353,  898 => 351,  895 => 349,  881 => 348,  877 => 346,  873 => 344,  869 => 342,  867 => 341,  864 => 340,  858 => 339,  853 => 337,  844 => 336,  841 => 335,  837 => 334,  833 => 333,  830 => 332,  827 => 331,  810 => 330,  806 => 328,  804 => 327,  801 => 326,  798 => 324,  796 => 323,  793 => 322,  790 => 320,  776 => 319,  772 => 317,  768 => 315,  766 => 314,  763 => 313,  757 => 312,  752 => 310,  743 => 309,  740 => 308,  736 => 307,  732 => 306,  724 => 305,  715 => 304,  712 => 303,  695 => 302,  691 => 300,  688 => 298,  674 => 297,  670 => 295,  666 => 293,  664 => 292,  661 => 291,  655 => 290,  650 => 288,  641 => 287,  638 => 286,  634 => 285,  630 => 284,  622 => 283,  613 => 282,  610 => 281,  593 => 280,  589 => 278,  586 => 276,  572 => 275,  568 => 273,  564 => 271,  562 => 270,  559 => 269,  553 => 268,  548 => 266,  539 => 265,  536 => 264,  532 => 263,  528 => 262,  520 => 261,  511 => 260,  508 => 259,  491 => 258,  487 => 256,  484 => 254,  470 => 253,  466 => 251,  462 => 249,  460 => 248,  457 => 247,  451 => 246,  446 => 244,  437 => 243,  434 => 242,  430 => 241,  426 => 240,  418 => 239,  409 => 238,  406 => 237,  389 => 236,  385 => 234,  382 => 232,  368 => 231,  364 => 229,  360 => 227,  358 => 226,  355 => 225,  349 => 224,  344 => 222,  335 => 221,  332 => 220,  328 => 219,  318 => 218,  309 => 217,  306 => 216,  289 => 215,  285 => 213,  282 => 211,  268 => 210,  264 => 208,  260 => 206,  256 => 204,  254 => 203,  251 => 202,  245 => 201,  240 => 199,  231 => 198,  228 => 197,  224 => 196,  220 => 195,  215 => 194,  212 => 193,  195 => 192,  191 => 190,  189 => 189,  186 => 188,  183 => 186,  180 => 185,  177 => 184,  174 => 183,  171 => 182,  168 => 181,  165 => 180,  162 => 179,  159 => 178,  157 => 177,  153 => 174,  147 => 170,  145 => 169,  137 => 163,  127 => 155,  119 => 149,  113 => 145,  110 => 144,  102 => 138,  99 => 137,  97 => 136,  91 => 135,  87 => 134,  83 => 133,  79 => 132,  75 => 131,  66 => 129,  60 => 125,  57 => 124,  54 => 123,  51 => 122,  45 => 117,  39 => 112,  32 => 106,  30 => 105,  25 => 104,  23 => 103,  21 => 2,  19 => 1,);
    }
}
