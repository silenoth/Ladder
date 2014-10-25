<?php

/* threads.twig */
class __TwigTemplate_2172418e6220407c7ece79fb42eed46302e92cf61a5099fcaa157ecc5b1b6210 extends Twig_Template
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
        $this->env->loadTemplate("threads.twig", "1145549501")->display($context);
        // line 48
        echo "<div class=\"row\">
<ol class=\"breadcrumb\">
  <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/foros\">Foros</a></li>
  <li class=\"active\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "categoria"), "nombre"), "html", null, true);
        echo "</li>
</ol>
<h2>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "categoria"), "nombre"), "html", null, true);
        echo "</h2>
    <div class=\"sep\"></div>
    <div class=\"panel panel-default panel_bg\">
        <table class=\"table table-hover table-striped\">
            <thead>
                <tr><th></th>
                    <th>Asunto</th>
                    <th>Autor</th>
                    <th>Respuestas</th>
                    <th>Visitas</th>
                    <th>Ultima publicacion</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "temas"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["tema"]) {
            // line 68
            echo "            ";
            $context["k"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
            // line 69
            echo "                <tr";
            if ((!((isset($context["k"]) ? $context["k"] : null) % 2 == 1))) {
                echo " class=\"active\"";
            }
            echo ">
                <td style=\"width:30px;\">
                    <span class=\"glyphicon glyphicon-";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tema"]) ? $context["tema"] : null), "icono"), "html", null, true);
            echo "\"></span>
                </td>
                    <td>
                        ";
            // line 74
            if (($this->getAttribute((isset($context["tema"]) ? $context["tema"] : null), "cerrado") == 1)) {
                // line 75
                echo "                        <span class=\"label label-danger margen_right10\"><span class=\"glyphicon glyphicon-lock\"></span></span>
                        ";
            }
            // line 77
            echo "                        ";
            if (($this->getAttribute((isset($context["tema"]) ? $context["tema"] : null), "fijo") == 1)) {
                // line 78
                echo "                        <span class=\"label label-success margen_right10\">Fijo</span>
                        ";
            }
            // line 80
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/tema/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tema"]) ? $context["tema"] : null), "id"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tema"]) ? $context["tema"] : null), "tituloclean"), "html", null, true);
            echo "\" id=\"tematitulo";
            echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
            echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver tema ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tema"]) ? $context["tema"] : null), "titulo"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tema"]) ? $context["tema"] : null), "titulo"), "html", null, true);
            echo "</a>
                    </td>
                    <td>
                        <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/perfil/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tema"]) ? $context["tema"] : null), "autor"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tema"]) ? $context["tema"] : null), "nick"), "html", null, true);
            echo "</a>
                    </td>
                </tr>
                <script type=\"text/javascript\">
                    \$('#tematitulo";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
            echo "').tooltip('hide');
                </script>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tema'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "            </tbody>
        </table>
    </div>
    ";
        // line 93
        if ((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null)))) {
            // line 94
            echo "    <button class=\"btn btn-primary\" id=\"btncomenzarnuevotema\" type=\"submit\">Comenzar Nuevo Tema</button>
    <script type=\"text/javascript\">
        \$(\"#btncomenzarnuevotema\").click(function(){
            \$(\"#txtnuevotema\").fadeIn();
            \$(\"#btncomenzarnuevotema\").fadeOut();
        });

    </script>
    <div id=\"txtnuevotema\" style=\"display:none;width:600px;\">
    <h3>Crear una nueva discución</h3>
        <form name=\"formnuevotema\" id=\"formnuevotema\" method=\"post\" role=\"form\">
            <input type=\"text\" name=\"txttitulo\" placeholder=\"Titulo\" required=\"required\" class=\"form-control margen_bot30\" />
            <textarea name=\"txtnuevotema\" style=\"width:600px;height:300px;\" required=\"required\"></textarea>
            <label for=\"rdiconos\" class=\"margen_top30\">Iconos</label>
            <div id=\"rdiconos\" class=\"margen_bot30\">
                <input type=\"radio\" name=\"rdicono\" value=\"none\" checked=\"checked\" /><span class=\"ds\">Ninguno</span>
                <input type=\"radio\" name=\"rdicono\" value=\"music\" /><span class=\"glyphicon glyphicon-music ds\"></span>
                <input type=\"radio\" name=\"rdicono\" value=\"fire\"><span class=\"glyphicon glyphicon-fire ds\"></span>
                <input type=\"radio\" name=\"rdicono\" value=\"heart\"><span class=\"glyphicon glyphicon-heart ds\"></span>
                <input type=\"radio\" name=\"rdicono\" value=\"star\"><span class=\"glyphicon glyphicon-star ds\"></span>
                <input type=\"radio\" name=\"rdicono\" value=\"search\"><span class=\"glyphicon glyphicon-search ds\"></span>
                <input type=\"radio\" name=\"rdicono\" value=\"gift\"><span class=\"glyphicon glyphicon-gift ds\"></span>
                <input type=\"radio\" name=\"rdicono\" value=\"question-sign\"><span class=\"glyphicon glyphicon-question-sign ds\"></span>
                <input type=\"radio\" name=\"rdicono\" value=\"film\"><span class=\"glyphicon glyphicon-film ds\"></span>
                <input type=\"radio\" name=\"rdicono\" value=\"comment\"><span class=\"glyphicon glyphicon-comment ds\"></span>
                <input type=\"radio\" name=\"rdicono\" value=\"leaf\"><span class=\"glyphicon glyphicon-leaf ds\"></span>
            </div>
            ";
            // line 121
            if (((isset($context["acceso"]) ? $context["acceso"] : null) == 1)) {
                // line 122
                echo "            <label for=\"chkfijar\">Fijar Tema</label>
            <div class=\"margen_bot30\">
                <input type=\"checkbox\" id=\"chkfijar\" name=\"chkfijar\" value=\"0\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\">
            </div>
            <label for=\"chkcerrar\">Cerrar Tema</label>
            <div class=\"margen_bot30\">
                <input type=\"checkbox\" id=\"chkcerrar\" name=\"chkcerrar\" value=\"0\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\">
            </div>
            <label for=\"chkactivo\">Mostrar/Ocultar Tema</label>
            <div class=\"margen_bot30\">
                <input type=\"checkbox\" id=\"chkmostrar\" name=\"chkmostrar\" checked=\"checked\" value=\"1\" onclick=\"if(this.checked==true){this.value=1;}else {this.value=0;}\">
            </div>
            <div class=\"margen_bot30\">
                <a href=\"javascript:void(0)\" onclick=\"if (\$(this).parent().find('div:first').is(':hidden')){\$(this).parent().find('div:first').slideDown(300);\$('#ce').removeClass('glyphicon glyphicon-plus').addClass('glyphicon glyphicon-minus red');}else{\$(this).parent().find('div:first').slideUp(300);\$('#ce').removeClass('glyphicon glyphicon-minus red').addClass('glyphicon glyphicon-plus');}\">
                    <span class=\"margen_bot30\"><span id=\"ce\" class=\"glyphicon glyphicon-plus\"></span> Agregar encuesta</span>
                </a>
                <div name=\"spoiler\" style=\"display:none;\">
                    <label for=\"txtpregunta\">Pregunta</label>
                    <input type=\"text\" id=\"txtpregunta\" name=\"txtpregunta\" class=\"form-control\">
                </div>
            </div>
            ";
            }
            // line 144
            echo "            <input type=\"hidden\" name=\"ok\" value=\"1\">
            <button class=\"btn btn-primary\" type=\"submit\" name=\"btn\">Crear nuevo tema</button>
        </form>
    </div>
    ";
        } else {
            // line 149
            echo "    <div class=\"alert alert-warning\" role=\"alert\">Debes loguearte para comenzar un nuevo tema</div>
    ";
        }
        // line 151
        echo "</div>

";
        // line 153
        $this->env->loadTemplate("_footer.twig")->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "threads.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 153,  218 => 151,  214 => 149,  207 => 144,  183 => 122,  181 => 121,  152 => 94,  150 => 93,  145 => 90,  128 => 87,  117 => 83,  100 => 80,  96 => 78,  93 => 77,  89 => 75,  87 => 74,  81 => 71,  73 => 69,  70 => 68,  53 => 67,  36 => 53,  31 => 51,  27 => 50,  23 => 48,  21 => 2,  19 => 1,);
    }
}


/* threads.twig */
class __TwigTemplate_2172418e6220407c7ece79fb42eed46302e92cf61a5099fcaa157ecc5b1b6210_1145549501 extends Twig_Template
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
        echo "        <title>Temas ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "categoria"), "nombre"), "html", null, true);
        echo "</title>
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
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
        echo "/css/forums.css\" type=\"text/css\" />
    ";
    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        // line 12
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/jquery.confirm.min.js\"/></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootstrapValidator.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/plugins/editor/minified/jquery.sceditor.bbcode.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootstrap-multiselect.js\"></script>
        <script type=\"text/javascript\">
        // Source: http://www.backalleycoder.com/2011/03/20/link-tag-css-stylesheet-load-event/
            var loadCSS = function(url, callback){
                var link = document.createElement('link');
                link.type = 'text/css';
                link.rel = 'stylesheet';
                link.href = url;
                link.id = 'theme-style';

                document.getElementsByTagName('head')[0].appendChild(link);

                var img = document.createElement('img');
                img.onerror = function(){
                    if(callback) callback(link);
                }
                img.src = url;
            }

            \$(document).ready(function() {
                var initEditor = function() {
                    \$(\"textarea\").sceditor({
                        plugins: 'bbcode',
                        style: \"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/plugins/editor/minified/jquery.sceditor.default.min.css\",
                        emoticonsRoot: \"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/\"
                    });
                };

                initEditor();
            });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "threads.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 39,  342 => 38,  316 => 15,  312 => 14,  308 => 13,  303 => 12,  300 => 11,  292 => 9,  288 => 8,  283 => 7,  280 => 6,  273 => 4,  270 => 3,  222 => 153,  218 => 151,  214 => 149,  207 => 144,  183 => 122,  181 => 121,  152 => 94,  150 => 93,  145 => 90,  128 => 87,  117 => 83,  100 => 80,  96 => 78,  93 => 77,  89 => 75,  87 => 74,  81 => 71,  73 => 69,  70 => 68,  53 => 67,  36 => 53,  31 => 51,  27 => 50,  23 => 48,  21 => 2,  19 => 1,);
    }
}
