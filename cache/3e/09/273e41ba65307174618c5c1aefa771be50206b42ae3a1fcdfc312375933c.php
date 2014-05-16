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
        $this->env->loadTemplate("admin.twig", "959530949")->display($context);
        // line 16
        echo "<ul class=\"nav nav-tabs\">
  <li class=\"active\"><a href=\"#home\" data-toggle=\"tab\">Home</a></li>
  <li><a href=\"#profile\" data-toggle=\"tab\">Profile</a></li>
  <li><a href=\"#messages\" data-toggle=\"tab\">Messages</a></li>
  <li><a href=\"#settings\" data-toggle=\"tab\">Settings</a></li>
</ul>
";
        // line 23
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
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "cat"));
        foreach ($context['_seq'] as $context["_key"] => $context["categorias"]) {
            // line 59
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
        // line 61
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
  <div class=\"tab-pane fade\" id=\"profile\">
  
  </div>
  <div class=\"tab-pane fade\" id=\"messages\">
  
  </div>
  <div class=\"tab-pane fade\" id=\"settings\">
  
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
});
</script>
";
        // line 139
        $this->env->loadTemplate("_footer.twig")->display($context);
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
        return array (  161 => 139,  81 => 61,  70 => 59,  66 => 58,  29 => 23,  21 => 16,  19 => 1,);
    }
}


/* admin.twig */
class __TwigTemplate_3e09273e41ba65307174618c5c1aefa771be50206b42ae3a1fcdfc312375933c_959530949 extends Twig_Template
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
    ";
    }

    // line 9
    public function block_js($context, array $blocks = array())
    {
        // line 10
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootstrapValidator.js\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootstrap.file-input.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 12
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
        return array (  242 => 12,  238 => 11,  233 => 10,  230 => 9,  224 => 7,  219 => 6,  216 => 5,  211 => 3,  208 => 2,  161 => 139,  81 => 61,  70 => 59,  66 => 58,  29 => 23,  21 => 16,  19 => 1,);
    }
}
