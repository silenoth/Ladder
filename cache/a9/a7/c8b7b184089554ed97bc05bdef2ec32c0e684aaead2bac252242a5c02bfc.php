<?php

/* brackets.twig */
class __TwigTemplate_a9a7c8b7b184089554ed97bc05bdef2ec32c0e684aaead2bac252242a5c02bfc extends Twig_Template
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
        $this->env->loadTemplate("brackets.twig", "230131165")->display($context);
        // line 113
        $context["success"] = $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "mensajes"), "success");
        // line 114
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "titulo"), "html", null, true);
        echo "</h1>
";
        // line 115
        if (((isset($context["success"]) ? $context["success"] : null) == true)) {
            // line 116
            echo "<div class=\"alert alert-warning alert-dismissible fade in\" role=\"alert\" id=\"success\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
  <strong>Felicidades!</strong> Tu inscripcion a sido recibida correctamente, recuerda que para participar deberás confirmar participación, esta sera enviada automaticamente una vez se completen las llaves, recuerda estar atento a tu correo o a tu <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/perfil/";
            echo twig_escape_filter($this->env, (isset($context["sesion"]) ? $context["sesion"] : null), "html", null, true);
            echo "#mensajes\">buzón de mensajes</a> de tu perfil.
</div>
";
        }
        // line 122
        echo "<ul class=\"nav nav-tabs\">
  <li class=\"active\"><a href=\"#descripcion\" data-toggle=\"tab\">Descripcion</a></li>
  <li><a href=\"#bracket\" data-toggle=\"tab\">Bracket</a></li>
</ul>
";
        // line 127
        echo "<div class=\"tab-content\">
\t<div class=\"tab-pane fade in active\" id=\"descripcion\">
\t\t<div style=\"margin-top:30px;\"></div>
        
    ";
        // line 132
        echo "    ";
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket") == false)) {
            // line 133
            echo "        ";
            $this->env->loadTemplate("404.twig")->display($context);
            // line 134
            echo "    ";
        } else {
            // line 135
            echo "\t\t<div class=\"well\">
\t\t\t<div class=\"row\">
\t\t\t  <div class=\"col-sm-8 col-md-4\">
\t\t\t    <div class=\"thumbnail\">
\t\t\t      <img src=\"";
            // line 139
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/images/news/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "logo"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "titulo"), "html", null, true);
            echo "\" />
\t\t\t      <div class=\"caption\">
\t\t\t        <h3>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "titulo"), "html", null, true);
            echo "</h3>
\t\t\t        <p>Creado el ";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "fecha"), "html", null, true);
            echo "</p>
\t\t\t        <p>Encargado: ";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "autor"), "html", null, true);
            echo "</p>
\t\t\t        <p>Juego: ";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "juego"), "html", null, true);
            echo "</p>
\t\t\t        <p>Modo: ";
            // line 145
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "modo") == 0)) {
                echo "1v1";
            }
            echo "</p>
                    ";
            // line 146
            if ((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null)))) {
                // line 147
                echo "                        ";
                if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "estado") == false)) {
                    // line 148
                    echo "        \t\t\t        <form method=\"post\" action=\"\" name=\"inscripcion\" id=\"inscripcion\">
                                <input type=\"hidden\" name=\"ins_ok\" value=\"1\" />
                                <button class=\"btn btn-primary\" type=\"submit\" name=\"enviar_inscripcion\" id=\"enviar_inscripcion\">Inscripción</button>
                                <p style=\"margin-top:20px;\">Acepto <a href=\"\">terminos y condiciones</a>.<input type=\"checkbox\" name=\"chkaceptar\" id=\"chkaceptar\"/></p>
                            </form>
                        ";
                }
                // line 154
                echo "                    ";
            } else {
                // line 155
                echo "                    <div class=\"alert alert-info alert-dismissable\">
                    Para participar de este torneo debes <a href=\"#\" data-toggle=\"modal\" data-target=\"#mlogin\">iniciar sesion</a>
                    </div>
                    ";
            }
            // line 159
            echo "\t\t\t      </div>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <div class=\"col-sm-4 col-md-8\">
\t\t\t  \t<div class=\"panel panel-default\">
\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t    ";
            // line 165
            echo $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "descripcion");
            echo "
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            // line 173
            echo "\t<div class=\"tab-pane fade\" id=\"bracket\" style=\"min-width:970px;width:1820px\">
\t\t<div class=\"row\" style=\"margin-top:30px;\">
\t\t<div class=\"col-md-9 col-md-push-3\">
\t\t\t<p>Requisitos:</p>
\t\t</div>
\t  \t\t<div class=\"col-md-3 col-md-pull-9\">
            ";
            // line 179
            if ((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null)))) {
                // line 180
                echo "\t  \t\t\t<form method=\"post\" action=\"\">
\t\t\t\t\t<button class=\"btn btn-primary\">Enviar reporte</button>
\t\t\t\t</form>
            ";
            }
            // line 184
            echo "\t  \t\t</div>
\t\t</div>
        ";
            // line 187
            echo "        ";
            // line 188
            echo "        ";
            $context["rondas1"] = $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "equipos");
            // line 189
            echo "    \t";
            $context["rondas2"] = ((isset($context["rondas1"]) ? $context["rondas1"] : null) / 2);
            // line 190
            echo "    \t";
            $context["rondas3"] = ((isset($context["rondas2"]) ? $context["rondas2"] : null) / 2);
            // line 191
            echo "    \t";
            $context["rondas4"] = ((isset($context["rondas3"]) ? $context["rondas3"] : null) / 2);
            // line 192
            echo "    \t";
            $context["rondas5"] = ((isset($context["rondas4"]) ? $context["rondas4"] : null) / 2);
            // line 193
            echo "    \t";
            $context["rondas6"] = ((isset($context["rondas5"]) ? $context["rondas5"] : null) / 2);
            // line 194
            echo "    \t";
            $context["rondas7"] = ((isset($context["rondas6"]) ? $context["rondas6"] : null) / 2);
            // line 195
            echo "    \t";
            $context["rondas8"] = ((isset($context["rondas7"]) ? $context["rondas7"] : null) / 2);
            // line 196
            echo "\t\t<div style=\"margin-top:30px;\"></div>
        ";
            // line 198
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "equipos") == 128)) {
                // line 199
                echo "            ";
                // line 200
                echo "            <div class=\"columna p128\">
                <h4>1ra Ronda</h4>
                ";
                // line 202
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
                    // line 203
                    echo "                ";
                    $context["rnd1"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 204
                    echo "                    <div class=\"cell\" id=\"player";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "\">
                        ";
                    // line 205
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                        ";
                    // line 206
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 207
                        echo "                            ";
                        if (((isset($context["rnd1"]) ? $context["rnd1"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f128"))) {
                            // line 208
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 209
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r16"), "html", null, true);
                            echo "</span>
                            ";
                        }
                        // line 211
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 212
                    echo "                    </div>
                    ";
                    // line 213
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 214
                        echo "\t\t              <div class=\"line-right right-down\" style=\"margin-top:12px;height:33px;border-bottom: 1px solid #000;\"></div>
                    ";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 216
                        echo "\t\t              <div class=\"line-right right-down\" style=\"margin-top:12px;height:33px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t";
                    } else {
                        // line 218
                        echo "\t\t\t\t\t   <div class=\"cell-sep\"></div>
                    ";
                    }
                    // line 220
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
                // line 221
                echo "            </div>
            ";
                // line 223
                echo "            <div class=\"columna\" style=\"width:180px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">2da Ronda</h4>
\t\t\t\t  \t";
                // line 225
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
                    // line 226
                    echo "                        ";
                    $context["rnd2"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 227
                    echo "\t\t\t\t  \t\t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "78";
                    } else {
                        echo "30";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 228
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "67";
                    } else {
                        echo "20";
                    }
                    echo "px;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                            ";
                    // line 229
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 230
                        echo "                                ";
                        if (((isset($context["rnd2"]) ? $context["rnd2"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f8"))) {
                            // line 231
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                    <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 232
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r8"), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 234
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 235
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 236
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 237
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:30px;height:99px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 239
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:77px;height:99px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    }
                    // line 241
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
                // line 242
                echo "            </div>
            ";
                // line 244
                echo "            <div class=\"columna\" style=\"width:180px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">3ra Ronda</h4>
\t\t\t\t  \t";
                // line 246
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
                    // line 247
                    echo "                    ";
                    $context["rnd3"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 248
                    echo "\t\t\t\t\t\t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "174";
                    } else {
                        echo "85";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 249
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "164";
                    } else {
                        echo "75";
                    }
                    echo "px;\">
                            ";
                    // line 250
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                            ";
                    // line 251
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 252
                        echo "                                ";
                        if (((isset($context["rnd3"]) ? $context["rnd3"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f4"))) {
                            // line 253
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                    <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 254
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r4"), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 256
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 257
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 258
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 259
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:88px;height:193px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 261
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:175px;height:194px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    }
                    // line 263
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
                // line 264
                echo "\t\t\t\t</div>
                ";
                // line 266
                echo "\t\t\t\t<div class=\"columna\" style=\"width:180px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">8vos de Final</h4>
\t\t\t\t  \t";
                // line 268
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
                    // line 269
                    echo "                    ";
                    $context["rnd4"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 270
                    echo "\t\t\t\t  \t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "367";
                    } else {
                        echo "177";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 271
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "358";
                    } else {
                        echo "167";
                    }
                    echo "px;\">
                            ";
                    // line 272
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                            ";
                    // line 273
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 274
                        echo "                                ";
                        if (((isset($context["rnd4"]) ? $context["rnd4"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f2"))) {
                            // line 275
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                    <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 276
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r2"), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 278
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 279
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 280
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 281
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:177px;height:389px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 283
                        echo "                            <div class=\"line-right right-down\" style=\"margin-top:367px;height:389px;border-bottom: 1px solid #000;\"></div>
                        ";
                    }
                    // line 285
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
                // line 286
                echo "\t\t\t\t</div>
                ";
                // line 288
                echo "\t\t\t\t<div class=\"columna\" style=\"width:180px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">4tos de Final</h4>
\t\t\t\t  \t";
                // line 290
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
                    // line 291
                    echo "                    ";
                    $context["rnd5"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 292
                    echo "\t\t\t\t  \t\t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "757";
                    } else {
                        echo "376";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 293
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "747";
                    } else {
                        echo "366";
                    }
                    echo "px;\">
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
                        if (((isset($context["rnd5"]) ? $context["rnd5"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f1"))) {
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
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r1"), "html", null, true);
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
                        ";
                    // line 302
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 303
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:376px;height:778px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 305
                        echo "                            <div class=\"line-right right-down\" style=\"margin-top:758px;height:778px;border-bottom: 1px solid #000;\"></div>
                        ";
                    }
                    // line 307
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
                // line 308
                echo "\t\t\t\t</div>
                ";
                // line 310
                echo "                <div class=\"columna\" style=\"width:180px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">Semi Final</h4>
\t\t\t\t  \t";
                // line 312
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
                    // line 313
                    echo "                    ";
                    $context["rnd6"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 314
                    echo "\t\t\t\t  \t\t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "1530";
                    } else {
                        echo "770";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 315
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "1520";
                    } else {
                        echo "760";
                    }
                    echo "px;\">
                        ";
                    // line 316
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                        ";
                    // line 317
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 318
                        echo "                            ";
                        if (((isset($context["rnd6"]) ? $context["rnd6"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f1"))) {
                            // line 319
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 320
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r1"), "html", null, true);
                            echo "</span>
                            ";
                        }
                        // line 322
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 323
                    echo "                        </div>
                        ";
                    // line 324
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 325
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:770px;height:1551px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 327
                        echo "                            <div class=\"line-right right-down\" style=\"margin-top:1530px;height:1551px;border-bottom: 1px solid #000;\"></div>
                        ";
                    }
                    // line 329
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
                // line 330
                echo "\t\t\t\t</div>
\t\t\t";
                // line 332
                echo "        ";
            }
            // line 333
            echo "        ";
            // line 334
            echo "
\t\t";
            // line 336
            echo "\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "bracket"), "equipos") == 16)) {
                // line 337
                echo "            ";
                // line 338
                echo "\t\t\t  \t<div style=\"float:left;overflow:hidden;width:180px;\">
\t\t\t  \t\t<h4>1ra Ronda</h4>
\t\t\t  \t\t";
                // line 340
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
                    // line 341
                    echo "                        ";
                    $context["rnd1"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 342
                    echo "\t\t\t\t\t\t<div class=\"cell\">
                        ";
                    // line 343
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                        ";
                    // line 344
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 345
                        echo "                            ";
                        if (((isset($context["rnd1"]) ? $context["rnd1"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f16"))) {
                            // line 346
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 347
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r16"), "html", null, true);
                            echo "</span>
                            ";
                        }
                        // line 349
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 350
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 351
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 352
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:12px;height:37px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 354
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:12px;height:37px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } else {
                        // line 356
                        echo "\t\t\t\t\t\t<div class=\"cell-sep\"></div>
\t\t\t\t\t\t";
                    }
                    // line 358
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
                // line 359
                echo "\t\t\t\t</div>
                ";
                // line 361
                echo "\t\t\t\t<div style=\"float:left;overflow:hidden;width:210px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">4tos de Final</h4>
\t\t\t\t  \t";
                // line 363
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
                    // line 364
                    echo "                        ";
                    $context["rnd2"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 365
                    echo "\t\t\t\t  \t\t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "81";
                    } else {
                        echo "33";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 366
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "68";
                    } else {
                        echo "20";
                    }
                    echo "px;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                            ";
                    // line 367
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 368
                        echo "                                ";
                        if (((isset($context["rnd2"]) ? $context["rnd2"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f8"))) {
                            // line 369
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                    <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 370
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r8"), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 372
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 373
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 374
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 375
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:34px;height:107px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 377
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:81px;height:107px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    }
                    // line 379
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
                // line 380
                echo "\t\t\t\t</div>
                ";
                // line 382
                echo "\t\t\t\t<div style=\"float:left;overflow:hidden;width:210px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">Semi-final</h4>
\t\t\t\t  \t";
                // line 384
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
                    // line 385
                    echo "                    ";
                    $context["rnd3"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 386
                    echo "\t\t\t\t\t\t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "186";
                    } else {
                        echo "88";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 387
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "173";
                    } else {
                        echo "75";
                    }
                    echo "px;\">
                            ";
                    // line 388
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                            ";
                    // line 389
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 390
                        echo "                                ";
                        if (((isset($context["rnd3"]) ? $context["rnd3"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f4"))) {
                            // line 391
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                    <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 392
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r4"), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 394
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 395
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 396
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 397
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:88px;height:212px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 2 == 1)) {
                        // line 399
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:186px;height:212px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    }
                    // line 401
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
                // line 402
                echo "\t\t\t\t</div>
                ";
                // line 404
                echo "\t\t\t\t<div style=\"float:left;overflow:hidden;width:210px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">Final</h4>
\t\t\t\t  \t";
                // line 406
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
                    // line 407
                    echo "                    ";
                    $context["rnd4"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 408
                    echo "\t\t\t\t  \t<div class=\"left-line\" style=\"margin-top:";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "414";
                    } else {
                        echo "188";
                    }
                    echo "px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:";
                    // line 409
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 1)) {
                        echo "400";
                    } else {
                        echo "175";
                    }
                    echo "px;\">
                            ";
                    // line 410
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                            ";
                    // line 411
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 412
                        echo "                                ";
                        if (((isset($context["rnd4"]) ? $context["rnd4"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f2"))) {
                            // line 413
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                    <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 414
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r2"), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 416
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 417
                    echo "                        </div>
\t\t\t\t\t\t";
                    // line 418
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        // line 419
                        echo "\t\t\t\t\t\t\t<div class=\"line-right right-down\" style=\"margin-top:188px;height:440px;border-bottom: 1px solid #000;\"></div>
\t\t\t\t\t\t";
                    }
                    // line 421
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
                // line 422
                echo "\t\t\t\t</div>
                ";
                // line 424
                echo "\t\t\t\t<div style=\"float:left;overflow:hidden;width:210px;\">
\t\t\t\t\t<h4 style=\"padding-left:30px;\">Campeon</h4>
\t\t\t\t  \t";
                // line 426
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
                    // line 427
                    echo "                    ";
                    $context["rnd5"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                    // line 428
                    echo "\t\t\t\t  \t\t<div class=\"left-line\" style=\"margin-top:400px;\"></div>
\t\t\t\t\t\t<div class=\"cell\" style=\"margin-top:386px;\">
                        ";
                    // line 430
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "
                        ";
                    // line 431
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "datos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                        // line 432
                        echo "                            ";
                        if (((isset($context["rnd5"]) ? $context["rnd5"] : null) == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "f1"))) {
                            // line 433
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                            echo "/perfil/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nick"), "html", null, true);
                            echo "\" style=\"color:#fff;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "gametag"), "html", null, true);
                            echo "</a>
                                <span class=\"label label-success pull-right\" style=\"margin-top: 2px;\">";
                            // line 434
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "r1"), "html", null, true);
                            echo "</span>
                            ";
                        }
                        // line 436
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 437
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
                // line 439
                echo "\t\t\t\t</div>
\t\t\t";
                // line 441
                echo "\t\t";
            }
            // line 442
            echo "\t\t";
            // line 443
            echo "\t</div>
\t";
            // line 445
            echo "\t";
            // line 446
            echo "    ";
        }
        // line 447
        echo "</div>
";
        // line 449
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
        return array (  1296 => 449,  1293 => 447,  1290 => 446,  1288 => 445,  1285 => 443,  1283 => 442,  1280 => 441,  1277 => 439,  1262 => 437,  1256 => 436,  1251 => 434,  1242 => 433,  1239 => 432,  1235 => 431,  1231 => 430,  1227 => 428,  1224 => 427,  1207 => 426,  1203 => 424,  1200 => 422,  1186 => 421,  1182 => 419,  1180 => 418,  1177 => 417,  1171 => 416,  1166 => 414,  1157 => 413,  1154 => 412,  1150 => 411,  1146 => 410,  1138 => 409,  1129 => 408,  1126 => 407,  1109 => 406,  1105 => 404,  1102 => 402,  1088 => 401,  1084 => 399,  1080 => 397,  1078 => 396,  1075 => 395,  1069 => 394,  1064 => 392,  1055 => 391,  1052 => 390,  1048 => 389,  1044 => 388,  1036 => 387,  1027 => 386,  1024 => 385,  1007 => 384,  1003 => 382,  1000 => 380,  986 => 379,  982 => 377,  978 => 375,  976 => 374,  973 => 373,  967 => 372,  962 => 370,  953 => 369,  950 => 368,  946 => 367,  936 => 366,  927 => 365,  924 => 364,  907 => 363,  903 => 361,  900 => 359,  886 => 358,  882 => 356,  878 => 354,  874 => 352,  872 => 351,  869 => 350,  863 => 349,  858 => 347,  849 => 346,  846 => 345,  842 => 344,  838 => 343,  835 => 342,  832 => 341,  815 => 340,  811 => 338,  809 => 337,  806 => 336,  803 => 334,  801 => 333,  798 => 332,  795 => 330,  781 => 329,  777 => 327,  773 => 325,  771 => 324,  768 => 323,  762 => 322,  757 => 320,  748 => 319,  745 => 318,  741 => 317,  737 => 316,  729 => 315,  720 => 314,  717 => 313,  700 => 312,  696 => 310,  693 => 308,  679 => 307,  675 => 305,  671 => 303,  669 => 302,  666 => 301,  660 => 300,  655 => 298,  646 => 297,  643 => 296,  639 => 295,  635 => 294,  627 => 293,  618 => 292,  615 => 291,  598 => 290,  594 => 288,  591 => 286,  577 => 285,  573 => 283,  569 => 281,  567 => 280,  564 => 279,  558 => 278,  553 => 276,  544 => 275,  541 => 274,  537 => 273,  533 => 272,  525 => 271,  516 => 270,  513 => 269,  496 => 268,  492 => 266,  489 => 264,  475 => 263,  471 => 261,  467 => 259,  465 => 258,  462 => 257,  456 => 256,  451 => 254,  442 => 253,  439 => 252,  435 => 251,  431 => 250,  423 => 249,  414 => 248,  411 => 247,  394 => 246,  390 => 244,  387 => 242,  373 => 241,  369 => 239,  365 => 237,  363 => 236,  360 => 235,  354 => 234,  349 => 232,  340 => 231,  337 => 230,  333 => 229,  323 => 228,  314 => 227,  311 => 226,  294 => 225,  290 => 223,  287 => 221,  273 => 220,  269 => 218,  265 => 216,  261 => 214,  259 => 213,  256 => 212,  250 => 211,  245 => 209,  236 => 208,  233 => 207,  229 => 206,  225 => 205,  220 => 204,  217 => 203,  200 => 202,  196 => 200,  194 => 199,  191 => 198,  188 => 196,  185 => 195,  182 => 194,  179 => 193,  176 => 192,  173 => 191,  170 => 190,  167 => 189,  164 => 188,  162 => 187,  158 => 184,  152 => 180,  150 => 179,  142 => 173,  132 => 165,  124 => 159,  118 => 155,  115 => 154,  107 => 148,  104 => 147,  102 => 146,  96 => 145,  92 => 144,  88 => 143,  84 => 142,  80 => 141,  71 => 139,  65 => 135,  62 => 134,  59 => 133,  56 => 132,  50 => 127,  44 => 122,  36 => 118,  32 => 116,  30 => 115,  25 => 114,  23 => 113,  21 => 2,  19 => 1,);
    }
}


/* brackets.twig */
class __TwigTemplate_a9a7c8b7b184089554ed97bc05bdef2ec32c0e684aaead2bac252242a5c02bfc_230131165 extends Twig_Template
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
\$(document).ready(function(){
    \$('#enviar_inscripcion').click(function(){    
        if(\$('input[name=chkaceptar]').is(':checked')){
            return true;
        } else {
            alert('Debes aceptar los terminos y condiciones primero.');
            return false;
        }
    });
});
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
        return array (  1458 => 92,  1455 => 91,  1380 => 19,  1374 => 15,  1371 => 14,  1367 => 12,  1361 => 8,  1359 => 7,  1355 => 5,  1352 => 4,  1344 => 3,  1296 => 449,  1293 => 447,  1290 => 446,  1288 => 445,  1285 => 443,  1283 => 442,  1280 => 441,  1277 => 439,  1262 => 437,  1256 => 436,  1251 => 434,  1242 => 433,  1239 => 432,  1235 => 431,  1231 => 430,  1227 => 428,  1224 => 427,  1207 => 426,  1203 => 424,  1200 => 422,  1186 => 421,  1182 => 419,  1180 => 418,  1177 => 417,  1171 => 416,  1166 => 414,  1157 => 413,  1154 => 412,  1150 => 411,  1146 => 410,  1138 => 409,  1129 => 408,  1126 => 407,  1109 => 406,  1105 => 404,  1102 => 402,  1088 => 401,  1084 => 399,  1080 => 397,  1078 => 396,  1075 => 395,  1069 => 394,  1064 => 392,  1055 => 391,  1052 => 390,  1048 => 389,  1044 => 388,  1036 => 387,  1027 => 386,  1024 => 385,  1007 => 384,  1003 => 382,  1000 => 380,  986 => 379,  982 => 377,  978 => 375,  976 => 374,  973 => 373,  967 => 372,  962 => 370,  953 => 369,  950 => 368,  946 => 367,  936 => 366,  927 => 365,  924 => 364,  907 => 363,  903 => 361,  900 => 359,  886 => 358,  882 => 356,  878 => 354,  874 => 352,  872 => 351,  869 => 350,  863 => 349,  858 => 347,  849 => 346,  846 => 345,  842 => 344,  838 => 343,  835 => 342,  832 => 341,  815 => 340,  811 => 338,  809 => 337,  806 => 336,  803 => 334,  801 => 333,  798 => 332,  795 => 330,  781 => 329,  777 => 327,  773 => 325,  771 => 324,  768 => 323,  762 => 322,  757 => 320,  748 => 319,  745 => 318,  741 => 317,  737 => 316,  729 => 315,  720 => 314,  717 => 313,  700 => 312,  696 => 310,  693 => 308,  679 => 307,  675 => 305,  671 => 303,  669 => 302,  666 => 301,  660 => 300,  655 => 298,  646 => 297,  643 => 296,  639 => 295,  635 => 294,  627 => 293,  618 => 292,  615 => 291,  598 => 290,  594 => 288,  591 => 286,  577 => 285,  573 => 283,  569 => 281,  567 => 280,  564 => 279,  558 => 278,  553 => 276,  544 => 275,  541 => 274,  537 => 273,  533 => 272,  525 => 271,  516 => 270,  513 => 269,  496 => 268,  492 => 266,  489 => 264,  475 => 263,  471 => 261,  467 => 259,  465 => 258,  462 => 257,  456 => 256,  451 => 254,  442 => 253,  439 => 252,  435 => 251,  431 => 250,  423 => 249,  414 => 248,  411 => 247,  394 => 246,  390 => 244,  387 => 242,  373 => 241,  369 => 239,  365 => 237,  363 => 236,  360 => 235,  354 => 234,  349 => 232,  340 => 231,  337 => 230,  333 => 229,  323 => 228,  314 => 227,  311 => 226,  294 => 225,  290 => 223,  287 => 221,  273 => 220,  269 => 218,  265 => 216,  261 => 214,  259 => 213,  256 => 212,  250 => 211,  245 => 209,  236 => 208,  233 => 207,  229 => 206,  225 => 205,  220 => 204,  217 => 203,  200 => 202,  196 => 200,  194 => 199,  191 => 198,  188 => 196,  185 => 195,  182 => 194,  179 => 193,  176 => 192,  173 => 191,  170 => 190,  167 => 189,  164 => 188,  162 => 187,  158 => 184,  152 => 180,  150 => 179,  142 => 173,  132 => 165,  124 => 159,  118 => 155,  115 => 154,  107 => 148,  104 => 147,  102 => 146,  96 => 145,  92 => 144,  88 => 143,  84 => 142,  80 => 141,  71 => 139,  65 => 135,  62 => 134,  59 => 133,  56 => 132,  50 => 127,  44 => 122,  36 => 118,  32 => 116,  30 => 115,  25 => 114,  23 => 113,  21 => 2,  19 => 1,);
    }
}
