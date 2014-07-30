<?php

/* admin.twig */
class __TwigTemplate_35cadfeb0873264bfb0ef1e5b7983179484a2fada4ee02eb1bb96324124ef353 extends Twig_Template
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
        $this->env->loadTemplate("admin.twig", "1322407018")->display($context);
        // line 85
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "addnewsok") == true)) {
            // line 86
            echo "<script type=\"text/javascript\">
\$( document ).ready(function() {
    \$('#addnewsok').modal('show');
});

</script>
<!-- Modal error login -->
<div class=\"modal fade\" id=\"addnewsok\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addnewsokLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\" style=\"border:0;\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\" id=\"errorloginLabel\">Datos ingresados correctamente</h4>
      </div>
      <div class=\"modal-body\">
        Se ha agregado una nueva entrada exitosamente.
      </div>
      <div class=\"modal-footer\" style=\"border:0;\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Okay</button>
      </div>
    </div>
  </div>
</div>
";
        }
        // line 112
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "deletetourney") == true)) {
            // line 113
            echo "    <script type=\"text/javascript\">
        \$( document ).ready(function() {
            \$('#deletetourney').modal('show');
        });
    </script>
<!-- Modal delete tourney -->
<div class=\"modal fade\" id=\"deletetourney\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deletetourneyLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\" style=\"border:0;\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\" id=\"errorloginLabel\">Datos ingresados correctamente</h4>
      </div>
      <div class=\"modal-body\">
        Se han eliminado los datos correctamente.
      </div>
      <div class=\"modal-footer\" style=\"border:0;\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Okay</button>
      </div>
    </div>
  </div>
</div>
";
        }
        // line 138
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "addtourneyok") == true)) {
            // line 139
            echo "<script type=\"text/javascript\">
    \$( document ).ready(function() {
        \$('#addtourneyok').modal('show');
    });
</script>
<!-- Modal error login -->
<div class=\"modal fade\" id=\"addtourneyok\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addtourneyokLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\" style=\"border:0;\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\" id=\"errorloginLabel\">Datos ingresados correctamente</h4>
      </div>
      <div class=\"modal-body\">
        Se ha agregado un nuevo torneo exitosamente.
      </div>
      <div class=\"modal-footer\" style=\"border:0;\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Okay</button>
      </div>
    </div>
  </div>
</div>
";
        }
        // line 164
        echo "<ul class=\"nav nav-tabs\">
  <li class=\"active\"><a href=\"#home\" data-toggle=\"tab\">Home</a></li>
  <li><a href=\"#perfil\" data-toggle=\"tab\">Profile</a></li>
  <li><a href=\"#torneos\" data-toggle=\"tab\">Torneos</a></li>
  <li><a href=\"#settings\" data-toggle=\"tab\">Configuración</a></li>
</ul>
";
        // line 171
        echo "<div class=\"tab-content\">
  <div class=\"tab-pane fade in active\" id=\"home\">
        <div class=\"row\" style=\"padding-left:20px;\">
          <div class=\"col-xs-12 col-md-8\">
            <h2>Agregar noticia</h2>
            <form name=\"noticia\" id=\"noticia\" method=\"post\" role=\"form\" class=\"form-horizontal\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                    <input type=\"text\" name=\"titulo\" id=\"titulo\" class=\"form-control\" placeholder=\"Ingresa un titulo\" required=\"required\" />
                </div>
                <div class=\"form-group\">
                    <input type=\"file\" name=\"file\" id=\"file\" class=\"btn-primary\" title=\"Subir imagen preliminar\" /><br /><span>La imagen debe ser de 260x130 px</span>
                </div>
                <div class=\"form-group\">
                    <textarea name=\"preview\" id=\"preview\" style=\"width:100%; height:200px;\"></textarea>

                </div>
                <div class=\"form-group\">
                    <textarea name=\"contenido\" id=\"contenido\" style=\"width:100%; height:200px;\"></textarea>

                </div>
                <div class=\"form-group\">
                    <select class=\"form-control\" name=\"categoria\">
                        <option value=\"0\" disabled=\"disabled\" selected=\"selected\">Selecciona una categoría</option>
                        ";
        // line 194
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "cat"));
        foreach ($context['_seq'] as $context["_key"] => $context["categorias"]) {
            // line 195
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorias"]) ? $context["categorias"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorias"]) ? $context["categorias"] : null), "nombre"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorias'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "                    </select>
                </div>
                <div class=\"form-group\">
                    <input type=\"checkbox\" id=\"activa\" name=\"activa\" checked=\"checked\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hacer pública\" /> Mostrar noticia en el indice
                </div>
                <input type=\"hidden\" name=\"addnews\" value=\"1\" />
                <button class=\"btn btn-primary\" name=\"enviar\" id=\"enviar\" type=\"submit\">Agregar noticia</button>
            </form>
          </div>
          <div class=\"col-xs-6 col-md-4\">
          <p>Agrega contenido nuevo cada día, manten actualizada la página con noticias frescas tu usuarios lo agradecerán.</p>
              <ul>
                <li>Titulo: Tiene que ser un titulo que atraiga al publico cuando lo vea. No puede exeder los 50 caracteres.</li>
                <li>Imagen: Agregua una imagen que identifique la noticia. Formatos permitidos *.jpg, *.png, *.gif</li>
                <li>Preview: Crea un resumen atractivo para que los usuarios les den ganas de leer la noticia completa. No puede exeder de los 500 caracteres.</li>
                <li>Contenido: Agrega imagenes, videos o solo texto, se libre usa tu imaginación.</li>
              </ul>
          </div>
        </div>
  </div>
  ";
        // line 218
        echo "  <div class=\"tab-pane fade\" id=\"perfil\">

  </div>
  ";
        // line 222
        echo "  ";
        // line 223
        echo "  <div class=\"tab-pane fade\" id=\"torneos\">
    <div class=\"row\">
        <ol class=\"breadcrumb\">
          <li><a href=\"#\">Crear torneo</a></li>
          <li><a href=\"#tablatorneos\">Lista de torneos</a></li>
        </ol>
        <div class=\"col-xs-12 col-md-8\">
            <h2>Crear torneo</h2>
            <form method=\"post\" id=\"torneos\" role=\"form\" name=\"torneos\" action=\"\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" name=\"t_titulo\" id=\"t_titulo\" placeholder=\"Nombre del torneo\" />
                </div>
                <div class=\"form-group\">
                    <input type=\"file\" name=\"tfile\" id=\"tfile\" class=\"btn-primary\" title=\"Logo del torneo\" /><br /><span>La imagen debe ser de 260x130 px</span>
                </div>
                <div class=\"form-group\">
                    <label for=\"t_descripcion\">Descripcion</label>
                    <textarea id=\"t_descripcion\" name=\"t_descripcion\" style=\"width:649px; height:200px;\" required=\"required\"></textarea>
                </div>
                <div class=\"form-group\">
                    <label for=\"t_juego\">Juego</label>
                    <select class=\"form-control\" name=\"t_juego\" id=\"t_juego\">
                        <option value=\"Hs\" disabled=\"disabled\">Hearthstone</option>
                    </select>
                </div>
                <div class=\"form-group\">
                    <label for=\"t_subida\">Subir replays</label>
                    <select class=\"form-control\" name=\"t_subida\" id=\"t_subida\">
                        <option value=\"0\">Imposibilitado</option>
                        <option value=\"1\">Opcional</option>
                        <option value=\"2\">Obligatorio</option>
                    </select>
                </div>
                <div class=\"form-group\">
                    <label for=\"t_bajada\">Bajar replays</label>
                    <select class=\"form-control\" name=\"t_bajada\" id=\"t_bajada\">
                        <option value=\"0\">Imposibilitado</option>
                        <option value=\"1\">Posibilitado</option>
                        <option value=\"2\">Cuando finalice</option>
                    </select>
                </div>
                <div class=\"form-group\">
                    <label for=\"t_equipos\">Max. de equipos</label>
                    <select class=\"form-control\" name=\"t_equipos\" id=\"t_equipos\">
                        ";
        // line 267
        $context["equipos"] = 2;
        // line 268
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 269
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["equipos"]) ? $context["equipos"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["equipos"]) ? $context["equipos"] : null), "html", null, true);
            echo "</option>
                        ";
            // line 270
            $context["equipos"] = ((isset($context["equipos"]) ? $context["equipos"] : null) * 2);
            // line 271
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "                    </select>
                </div>
                <div class=\"form-group\">
                    <label for=\"t_modo\">Modo</label>
                    <select class=\"form-control\" name=\"t_modo\" id=\"t_modo\">
                        <option value=\"0\">1v1</option>
                    </select>
                </div>
                <div class=\"form-group\">
                    <input type=\"checkbox\" id=\"t_activo\" name=\"t_activo\" checked=\"checked\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\" />Habilitar
                </div>
                <input type=\"hidden\" value=\"1\" name=\"addtorneo\" />
                <button type=\"submit\" class=\"btn btn-primary\">Crear torneo</button>
            </form>
        </div>
        <div class=\"col-xs-6 col-md-4\">
        </div>
    </div>
        ";
        // line 291
        echo "        <h2 style=\"margin-top:100px;\" id=\"tablatorneos\">Lista de torneos</h2>
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Torneo</th>
                    <th>Informacion</th>
                    <th>Creado</th>
                    <th>Por</th>
                    <th>Cupos</th>
                    <th>Ubicacion</th>
                    <th>Subida replays</th>
                    <th>Bajada replays</th>
                    <th>Modo</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 310
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "torneos"));
        foreach ($context['_seq'] as $context["_key"] => $context["torneo"]) {
            // line 311
            echo "                <tr>
                    <td>";
            // line 312
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "id"), "html", null, true);
            echo "</td>
                    <td>";
            // line 313
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "titulo"), "html", null, true);
            echo "</td>
                    <td>";
            // line 314
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "descripcion"), 0, 50), "html", null, true);
            echo "...</td>
                    <td>";
            // line 315
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "fecha"), "d \\d\\e M \\d\\e\\l Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 316
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "autor"), "html", null, true);
            echo "</td>
                    <td>";
            // line 317
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "equipos"), "html", null, true);
            echo "</td>
                    <td>";
            // line 318
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "ubicacion"), "html", null, true);
            echo "</td>
                    <td>
                        <span class=\"label label-warning\">";
            // line 320
            if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "subida") == 0)) {
                echo "No se puede";
            } elseif (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "subida") == 1)) {
                echo "Opcional";
            } elseif (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "subida") == 2)) {
                echo "Obligatorio";
            }
            // line 321
            echo "                        </span>
                    </td>
                    <td>
                        <span class=\"label label-warning\">";
            // line 324
            if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "bajada") == 0)) {
                echo "No se puede";
            } elseif (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "bajada") == 1)) {
                echo "Se puede";
            } elseif (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "bajada") == 2)) {
                echo "Al final";
            }
            // line 325
            echo "                        </span>
                    </td>
                    <td>
                        <span class=\"label label-primary\">
                        ";
            // line 329
            if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "modo") == 0)) {
                // line 330
                echo "                        1v1
                        ";
            } elseif (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "modo") == 1)) {
                // line 332
                echo "                        2v2
                        ";
            } elseif (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "modo") == 2)) {
                // line 334
                echo "                        3v3
                        ";
            }
            // line 336
            echo "                        </span>
                    </td>
                    <td>
                        ";
            // line 339
            if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "activo") == 1)) {
                // line 340
                echo "                        <span class=\"label label-success\">Activo</span>
                        ";
            } else {
                // line 342
                echo "                        <span class=\"label label-danger\">Inactivo</span>
                        ";
            }
            // line 344
            echo "                    </td>
                    <td><form method=\"post\" action=\"\" name=\"del_t";
            // line 345
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "id"), "html", null, true);
            echo "\" id=\"del_t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "id"), "html", null, true);
            echo "\">
                            <button class=\"confirm\" name=\"delete_t\" id=\"delete_t";
            // line 346
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "id"), "html", null, true);
            echo "\" type=\"submit\" style=\"color:#FF282E;float:right;border:0;width:20px;background:#fff;\"><span class=\"glyphicon glyphicon-remove\"></span></button>
                            <script type=\"text/javascript\">
                                \$(\"#delete_t";
            // line 348
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "id"), "html", null, true);
            echo "\").confirm({
                                    text: \"Estas a punto de eliminar completamente el torneo <br /><b>ID:</b> ";
            // line 349
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "id"), "html", null, true);
            echo "<br /><b>Titulo:</b> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "titulo"), "html", null, true);
            echo "<br />Esta accion no se podrá deshacer, ¿estas completamente seguro de continuar?\",
                                    confirm: function(button) {
                                        \$( \"#del_t";
            // line 351
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "id"), "html", null, true);
            echo "\" ).submit();
                                    },
                                    confirmButton: \"Si, lo estoy ;)\",
                                    cancelButton: \"No :c\",
                                    post: true
                                });
                            </script>
                        </form>
                        <form method=\"post\" action=\"\" name=\"ed_t\" id=\"ed_t\">
                        <button name=\"edit_t\" id=\"edit_t\" type=\"submit\" style=\"color:#4F91F2;margin-left:5px;border:0;width:20px;background:#fff;margin-top:10px;\"><span class=\"glyphicon glyphicon-pencil\"></span></button>
                        </form>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['torneo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        echo "            </tbody>
        </table>
        <ul class=\"pager\">
            <li><a href=\"#\">Previous</a></li>
            <li><a href=\"#\">Next</a></li>
        </ul>
        ";
        // line 372
        echo "  </div>
  ";
        // line 374
        echo "  <div class=\"tab-pane fade\" id=\"settings\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-8\">
            <h2>Editar email/mensaje</h2>
            <form method=\"post\" name=\"editmailform\" id=\"editmailform\">
                <label for=\"editmail\">Editar mensaje de confirmacion</label>
                <textarea name=\"editmail\" id=\"editmail\" style=\"width:649px; height:200px;\">";
        // line 380
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "conf"), "email"), "emailmsg"), "html", null, true);
        echo "</textarea>
                <input type=\"hidden\" value=\"1\" name=\"editmailok\" id=\"editmailok\">
                <button class=\"btn btn-primary\" style=\"float:right;margin-top:20px;\" type=\"submit\" name=\"btneditmail\" id=\"btneditmail\">Guardar</button>
            </form>
        </div>
        <div class=\"col-xs-6 col-md-4\">
            <div style=\"height:200px;\">
            <h3>Variables posibles</h3>
                <ul>
                    <li>{usuario}: Nick del detinatario</li>
                    <li>{email}: Email del destinatario</li>
                    <li>{url}: Enlace del sitio</li>
                    <li>{titulo}: Titulo del sitio</li>
                    <li>{slogan}: Slogan del sitio</li>
                    <li>{enlace}: Enlace de confirmacion</li>
                </ul>
            </div>
        </div>
    </div>
  </div>
</div>
<script>
\$('input[type=file]').bootstrapFileInput();
\$(document).ready(function() {
    \$('#noticia').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
          titulo: {
                validators: {
                    notEmpty: {
                        message: 'Este campo no puede quedar vacío'
                    }
                }
            },
          preview: {
                message: 'Preview no es valida',
                validators: {
                    notEmpty: {
                        message: 'Este campo no puede quedar vacío'
                    },
                    stringLength: {
                        min: 100,
                        max: 500,
                        message: 'Debe tener al menos 100 caractares y maximo 500 caracteres'
                    }
                }
            },
          categoria: {
                validators: {
                    notEmpty: {
                        message: 'Elije una categoria'
                    }
                }
          }
        /********/
        }
    });

    \$('#noticia')
    .find('[name=\"categoria\"]')
    .multiselect()
    .end()
    /*********/
    \$('#torneos')
    .find('[name=\"t_subida\"]')
    .multiselect()
    .end()
    .find('[name=\"t_juego\"]')
    .multiselect()
    .end()
    .find('[name=\"t_bajada\"]')
    .multiselect()
    .end()
    .find('[name=\"t_equipos\"]')
    .multiselect()
    .end()
    .find('[name=\"t_modo\"]')
    .multiselect()
    .end()
});
</script>
";
        // line 466
        $this->env->loadTemplate("_footer.twig")->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  536 => 466,  447 => 380,  439 => 374,  436 => 372,  428 => 365,  408 => 351,  401 => 349,  397 => 348,  392 => 346,  386 => 345,  383 => 344,  379 => 342,  375 => 340,  373 => 339,  368 => 336,  364 => 334,  360 => 332,  356 => 330,  354 => 329,  348 => 325,  340 => 324,  335 => 321,  327 => 320,  322 => 318,  318 => 317,  314 => 316,  310 => 315,  306 => 314,  302 => 313,  298 => 312,  295 => 311,  291 => 310,  270 => 291,  250 => 272,  244 => 271,  242 => 270,  235 => 269,  230 => 268,  228 => 267,  182 => 223,  180 => 222,  175 => 218,  153 => 197,  142 => 195,  138 => 194,  113 => 171,  105 => 164,  80 => 139,  78 => 138,  53 => 113,  51 => 112,  25 => 86,  23 => 85,  21 => 2,  19 => 1,);
    }
}


/* admin.twig */
class __TwigTemplate_35cadfeb0873264bfb0ef1e5b7983179484a2fada4ee02eb1bb96324124ef353_1322407018 extends Twig_Template
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
        // line 4
        echo "        <title>Administracion</title>
    ";
    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/plugins/editor/minified/themes/default.css\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/css/bootstrap-multiselect.css\" type=\"text/css\" />
    ";
    }

    // line 10
    public function block_js($context, array $blocks = array())
    {
        // line 11
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootstrapValidator.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/plugins/editor/minified/jquery.sceditor.bbcode.js\"></script>
        <script type=\"text/javascript\">
        // Source: http://www.backalleycoder.com/2011/03/20/link-tag-css-stylesheet-load-event/
\t\t\tvar loadCSS = function(url, callback){
\t\t\t\tvar link = document.createElement('link');
\t\t\t\tlink.type = 'text/css';
\t\t\t\tlink.rel = 'stylesheet';
\t\t\t\tlink.href = url;
\t\t\t\tlink.id = 'theme-style';

\t\t\t\tdocument.getElementsByTagName('head')[0].appendChild(link);

\t\t\t\tvar img = document.createElement('img');
\t\t\t\timg.onerror = function(){
\t\t\t\t\tif(callback) callback(link);
\t\t\t\t}
\t\t\t\timg.src = url;
\t\t\t}

\t\t\t\$(document).ready(function() {
\t\t\t\tvar initEditor = function() {
\t\t\t\t\t\$(\"textarea\").sceditor({
\t\t\t\t\t\tplugins: 'bbcode',
\t\t\t\t\t\tstyle: \"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/plugins/editor/minified/jquery.sceditor.default.min.css\"
\t\t\t\t\t});
\t\t\t\t};

\t\t\t\t\$(\"#preview\").change(function() {
\t\t\t\t\tvar theme = \"../minified/themes/\" + \$(this).val() + \".min.css\";

\t\t\t\t\t\$(\"textarea\").sceditor(\"instance\").destroy();
\t\t\t\t\t\$(\"link:first\").remove();
\t\t\t\t\t\$(\"#theme-style\").remove();

\t\t\t\t\tloadCSS(theme, initEditor);
\t\t\t\t});

                \$(\"#contenido\").change(function() {
\t\t\t\t\tvar theme = \"../minified/themes/\" + \$(this).val() + \".min.css\";

\t\t\t\t\t\$(\"textarea\").sceditor(\"instance\").destroy();
\t\t\t\t\t\$(\"link:first\").remove();
\t\t\t\t\t\$(\"#theme-style\").remove();

\t\t\t\t\tloadCSS(theme, initEditor);
\t\t\t\t});
                \$(\"#t_descripcion\").change(function() {
\t\t\t\t\tvar theme = \"../minified/themes/\" + \$(this).val() + \".min.css\";

\t\t\t\t\t\$(\"textarea\").sceditor(\"instance\").destroy();
\t\t\t\t\t\$(\"link:first\").remove();
\t\t\t\t\t\$(\"#theme-style\").remove();

\t\t\t\t\tloadCSS(theme, initEditor);
\t\t\t\t});
                \$(\"#editmail\").change(function() {
\t\t\t\t\tvar theme = \"../minified/themes/\" + \$(this).val() + \".min.css\";

\t\t\t\t\t\$(\"textarea\").sceditor(\"instance\").destroy();
\t\t\t\t\t\$(\"link:first\").remove();
\t\t\t\t\t\$(\"#theme-style\").remove();

\t\t\t\t\tloadCSS(theme, initEditor);
\t\t\t\t});
\t\t\t\tinitEditor();
\t\t\t});
        </script>
        <script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootstrap.file-input.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootstrap-multiselect.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/jquery.confirm.min.js\"/></script>
    ";
    }

    public function getTemplateName()
    {
        return "admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  695 => 81,  691 => 80,  687 => 79,  640 => 35,  614 => 12,  609 => 11,  606 => 10,  600 => 8,  595 => 7,  592 => 6,  587 => 4,  584 => 3,  536 => 466,  447 => 380,  439 => 374,  436 => 372,  428 => 365,  408 => 351,  401 => 349,  397 => 348,  392 => 346,  386 => 345,  383 => 344,  379 => 342,  375 => 340,  373 => 339,  368 => 336,  364 => 334,  360 => 332,  356 => 330,  354 => 329,  348 => 325,  340 => 324,  335 => 321,  327 => 320,  322 => 318,  318 => 317,  314 => 316,  310 => 315,  306 => 314,  302 => 313,  298 => 312,  295 => 311,  291 => 310,  270 => 291,  250 => 272,  244 => 271,  242 => 270,  235 => 269,  230 => 268,  228 => 267,  182 => 223,  180 => 222,  175 => 218,  153 => 197,  142 => 195,  138 => 194,  113 => 171,  105 => 164,  80 => 139,  78 => 138,  53 => 113,  51 => 112,  25 => 86,  23 => 85,  21 => 2,  19 => 1,);
    }
}
