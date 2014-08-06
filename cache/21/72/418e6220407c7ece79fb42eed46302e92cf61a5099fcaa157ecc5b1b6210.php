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
        $this->env->loadTemplate("threads.twig", "1994301227")->display($context);
        // line 47
        echo "<div class=\"row\">
<ol class=\"breadcrumb\">
  <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/foros\">Foros</a></li>
  <li class=\"active\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "categoria"), "nombre"), "html", null, true);
        echo "</li>
</ol>
<h2>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "categoria"), "nombre"), "html", null, true);
        echo "</h2>
    <div class=\"sep\"></div>
    <div class=\"panel panel-default panel_bg\">
        <table class=\"table table-hover\">
            <tbody>
            ";
        // line 57
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
            // line 58
            echo "            ";
            $context["k"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
            // line 59
            echo "                <tr>
                    <td>
                        ";
            // line 61
            if (($this->getAttribute((isset($context["tema"]) ? $context["tema"] : null), "fijo") == 1)) {
                // line 62
                echo "                        <span class=\"label label-success\">Fijo</span>
                        ";
            }
            // line 64
            echo "                        <span class=\"glyphicon glyphicon-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tema"]) ? $context["tema"] : null), "icono"), "html", null, true);
            echo "\"></span>
                        <a href=\"";
            // line 65
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
                        Hace 1 dia por <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/perfil/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tema"]) ? $context["tema"] : null), "creador"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tema"]) ? $context["tema"] : null), "nick"), "html", null, true);
            echo "</a>
                    </td>
                </tr>
                <script type=\"text/javascript\">
                    \$('#tematitulo";
            // line 72
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
        // line 75
        echo "            </tbody>
        </table>
    </div>
    ";
        // line 78
        if ((!twig_test_empty((isset($context["sesion"]) ? $context["sesion"] : null)))) {
            // line 79
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
                <input type=\"radio\" name=\"rdicono\" value=\"music\"><span class=\"glyphicon glyphicon-music ds\"></span>
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
            // line 105
            if (((isset($context["acceso"]) ? $context["acceso"] : null) == 1)) {
                // line 106
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
            ";
            }
            // line 119
            echo "            <input type=\"hidden\" name=\"ok\" value=\"1\">
            <button class=\"btn btn-primary\" type=\"submit\" name=\"btn\">Crear nuevo tema</button>
        </form>
    </div>
    ";
        } else {
            // line 124
            echo "    <div class=\"alert alert-warning\" role=\"alert\">Debes loguearte para comenzar un nuevo tema</div>
    ";
        }
        // line 126
        echo "</div>

";
        // line 128
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
        return array (  190 => 128,  186 => 126,  182 => 124,  175 => 119,  160 => 106,  158 => 105,  130 => 79,  128 => 78,  123 => 75,  106 => 72,  95 => 68,  79 => 65,  74 => 64,  70 => 62,  68 => 61,  64 => 59,  61 => 58,  44 => 57,  36 => 52,  31 => 50,  27 => 49,  23 => 47,  21 => 2,  19 => 1,);
    }
}


/* threads.twig */
class __TwigTemplate_2172418e6220407c7ece79fb42eed46302e92cf61a5099fcaa157ecc5b1b6210_1994301227 extends Twig_Template
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
        echo "/plugins/editor/minified/jquery.sceditor.default.min.css\"
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
        return array (  308 => 38,  282 => 15,  278 => 14,  274 => 13,  269 => 12,  266 => 11,  258 => 9,  254 => 8,  249 => 7,  246 => 6,  241 => 4,  238 => 3,  190 => 128,  186 => 126,  182 => 124,  175 => 119,  160 => 106,  158 => 105,  130 => 79,  128 => 78,  123 => 75,  106 => 72,  95 => 68,  79 => 65,  74 => 64,  70 => 62,  68 => 61,  64 => 59,  61 => 58,  44 => 57,  36 => 52,  31 => 50,  27 => 49,  23 => 47,  21 => 2,  19 => 1,);
    }
}
