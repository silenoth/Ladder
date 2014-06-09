<?php

/* admin.twig */
class __TwigTemplate_3e09273e41ba65307174618c5c1aefa771be50206b42ae3a1fcdfc312375933c extends Twig_Template
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
        $this->env->loadTemplate("admin.twig", "461681548")->display($context);
        // line 18
        echo "<ul class=\"nav nav-tabs\">
  <li class=\"active\"><a href=\"#home\" data-toggle=\"tab\">Home</a></li>
  <li><a href=\"#perfil\" data-toggle=\"tab\">Profile</a></li>
  <li><a href=\"#torneos\" data-toggle=\"tab\">Torneos</a></li>
  <li><a href=\"#settings\" data-toggle=\"tab\">Settings</a></li>
</ul>
";
        // line 25
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
                    <script>
                        \$(function() {
                            \$(\"#preview\").sceditor({
                                plugins: \"bbcode\"
                            });
                        });
                    </script>
                </div>
                <div class=\"form-group\">
                    <textarea name=\"contenido\" id=\"contenido\" style=\"width:100%; height:200px;\"></textarea>
                    <script>
                        \$(function() {
                            \$(\"#contenido\").sceditor({
                                plugins: \"bbcode\"
                            });
                        });
                    </script>
                </div>
                <div class=\"form-group\">
                    <select class=\"form-control\" name=\"categoria\">
                        <option value=\"0\" disabled=\"disabled\" selected=\"selected\">Selecciona una categoría</option>
                        ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "cat"));
        foreach ($context['_seq'] as $context["_key"] => $context["categorias"]) {
            // line 61
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
        // line 63
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
        // line 84
        echo "  <div class=\"tab-pane fade\" id=\"perfil\">

  </div>
  ";
        // line 88
        echo "  ";
        // line 89
        echo "  <div class=\"tab-pane fade\" id=\"torneos\">
    <div class=\"row\">
        <ol class=\"breadcrumb\">
          <li><a href=\"#\">Crear torneo</a></li>
          <li><a href=\"#tablatorneos\">Lista de torneos</a></li>
        </ol>
        <div class=\"col-xs-12 col-md-8\">
            <h2>Crear torneo</h2>
            <form method=\"post\" id=\"torneos\" name=\"torneos\" action=\"\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" name=\"t_titulo\" id=\"t_titulo\" placeholder=\"Nombre del torneo\" />
                </div>
                <div class=\"form-group\">
                    <input type=\"file\" name=\"tfile\" id=\"tfile\" class=\"btn-primary\" title=\"Logo del torneo\" /><br /><span>La imagen debe ser de 260x130 px</span>
                </div>
                <div class=\"form-group\">
                    <label for=\"t_descripcion\">Descripcion</label>
                    <textarea id=\"t_descripcion\" name=\"t_descripcion\" style=\"width:100%; height:200px;\"></textarea>
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
        // line 133
        $context["equipos"] = 2;
        // line 134
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 135
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["equipos"]) ? $context["equipos"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["equipos"]) ? $context["equipos"] : null), "html", null, true);
            echo "</option>
                        ";
            // line 136
            $context["equipos"] = ((isset($context["equipos"]) ? $context["equipos"] : null) * 2);
            // line 137
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
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
        // line 157
        echo "        <table class=\"table table-hover\" style=\"margin-top:100px;\" id=\"tablatorneos\">
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
        // line 175
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "torneos"));
        foreach ($context['_seq'] as $context["_key"] => $context["torneo"]) {
            // line 176
            echo "                <tr>
                    <td>";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "id"), "html", null, true);
            echo "</td>
                    <td>";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "titulo"), "html", null, true);
            echo "</td>
                    <td>";
            // line 179
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "descripcion"), 0, 50), "html", null, true);
            echo "...</td>
                    <td>";
            // line 180
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "fecha"), "d \\d\\e M \\d\\e\\l Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "autor"), "html", null, true);
            echo "</td>
                    <td>";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "equipos"), "html", null, true);
            echo "</td>
                    <td>";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "ubicacion"), "html", null, true);
            echo "</td>
                    <td>
                        <span class=\"label label-warning\">";
            // line 185
            if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "subida") == 0)) {
                echo "No se puede";
            } elseif (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "subida") == 1)) {
                echo "Opcional";
            } elseif (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "subida") == 2)) {
                echo "Obligatorio";
            }
            // line 186
            echo "                        </span>
                    </td>
                    <td>
                        <span class=\"label label-warning\">";
            // line 189
            if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "bajada") == 0)) {
                echo "No se puede";
            } elseif (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "bajada") == 1)) {
                echo "Se puede";
            } elseif (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "bajada") == 2)) {
                echo "Al final";
            }
            // line 190
            echo "                        </span>
                    </td>
                    <td>
                        <span class=\"label label-primary\">
                        ";
            // line 194
            if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "modo") == 0)) {
                // line 195
                echo "                        1v1
                        ";
            } elseif (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "modo") == 1)) {
                // line 197
                echo "                        2v2
                        ";
            } elseif (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "modo") == 2)) {
                // line 199
                echo "                        3v3
                        ";
            }
            // line 201
            echo "                        </span>
                    </td>
                    <td>
                        ";
            // line 204
            if (($this->getAttribute((isset($context["torneo"]) ? $context["torneo"] : null), "activo") == 1)) {
                // line 205
                echo "                        <span class=\"label label-success\">Activo</span>
                        ";
            } else {
                // line 207
                echo "                        <span class=\"label label-danger\">Inactivo</span>
                        ";
            }
            // line 209
            echo "                    </td>
                    <td>
                        <a href=\"";
            // line 211
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"color:#f33;float:right;\"></span></a>
                        <a href=\"";
            // line 212
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" style=\"margin-left:5px;\"></span></a>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['torneo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "            </tbody>
        </table>
        <ul class=\"pager\">
            <li><a href=\"#\">Previous</a></li>
            <li><a href=\"#\">Next</a></li>
        </ul>
        ";
        // line 223
        echo "  </div>
  ";
        // line 225
        echo "  <div class=\"tab-pane fade\" id=\"settings\">

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
        // line 294
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
        return array (  412 => 294,  341 => 225,  338 => 223,  330 => 216,  320 => 212,  316 => 211,  312 => 209,  308 => 207,  304 => 205,  302 => 204,  297 => 201,  293 => 199,  289 => 197,  285 => 195,  283 => 194,  277 => 190,  269 => 189,  264 => 186,  256 => 185,  251 => 183,  247 => 182,  243 => 181,  239 => 180,  235 => 179,  231 => 178,  227 => 177,  224 => 176,  220 => 175,  200 => 157,  180 => 138,  174 => 137,  172 => 136,  165 => 135,  160 => 134,  158 => 133,  112 => 89,  110 => 88,  105 => 84,  83 => 63,  72 => 61,  68 => 60,  31 => 25,  23 => 18,  21 => 2,  19 => 1,);
    }
}


/* admin.twig */
class __TwigTemplate_3e09273e41ba65307174618c5c1aefa771be50206b42ae3a1fcdfc312375933c_461681548 extends Twig_Template
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
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootstrap.file-input.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootstrap-multiselect.js\"></script>
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
        return array (  498 => 14,  494 => 13,  490 => 12,  485 => 11,  482 => 10,  476 => 8,  471 => 7,  468 => 6,  463 => 4,  460 => 3,  412 => 294,  341 => 225,  338 => 223,  330 => 216,  320 => 212,  316 => 211,  312 => 209,  308 => 207,  304 => 205,  302 => 204,  297 => 201,  293 => 199,  289 => 197,  285 => 195,  283 => 194,  277 => 190,  269 => 189,  264 => 186,  256 => 185,  251 => 183,  247 => 182,  243 => 181,  239 => 180,  235 => 179,  231 => 178,  227 => 177,  224 => 176,  220 => 175,  200 => 157,  180 => 138,  174 => 137,  172 => 136,  165 => 135,  160 => 134,  158 => 133,  112 => 89,  110 => 88,  105 => 84,  83 => 63,  72 => 61,  68 => 60,  31 => 25,  23 => 18,  21 => 2,  19 => 1,);
    }
}
