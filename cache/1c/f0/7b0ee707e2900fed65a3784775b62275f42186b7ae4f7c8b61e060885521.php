<?php

/* home.twig */
class __TwigTemplate_1cf07b0ee707e2900fed65a3784775b62275f42186b7ae4f7c8b61e060885521 extends Twig_Template
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
        $context["active"] = "home";
        // line 2
        $this->env->loadTemplate("home.twig", "652891060")->display($context);
        // line 7
        echo "    ";
        // line 8
        echo "    <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
            ";
        // line 18
        echo "            <div class=\"item active\">
                <img src=\"http://g3ar.co.za/wp-content/uploads/2013/09/Hearthstone-feature.jpg\" />
                <div class=\"carousel-caption\">
                    <h3>Hola</h3>
                    <p>Este es un saludillo test</p>
              </div>
            </div>
            ";
        // line 25
        echo " 
        </div>
        <script>
        \$('.carousel').carousel({
          interval: ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "interval"), "html", null, true);
        echo "
        });
        </script>
        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\"></span>
        </a>
    </div>
    ";
        // line 41
        echo "    ";
        // line 42
        echo "    <div class=\"row\" style=\"margin-top: 30px; margin-bottom:30px;\">
    ";
        // line 43
        $context["i"] = 1;
        // line 44
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "preview"));
        foreach ($context['_seq'] as $context["_key"] => $context["prev"]) {
            // line 45
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/articulo/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "id"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "url"), "html", null, true);
            echo "\" style=\"text-decoration:none;\">
        <div class=\"col-sm-6 col-md-4\" id=\"preview";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Continuar leyendo ";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "titulo"), 0, 25), "html", null, true);
            echo "...\" style=\"word-break: break-word;\">
            <div class=\"thumbnail\">
                <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/images/news/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "imagen"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "titulo"), "html", null, true);
            echo "\" style=\"width:260px;height:130px;\" />
                <div class=\"caption\">
                    <div style=\"overflow:hidden;max-height:50px;min-height:50px\">
                        <h4>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "titulo"), "html", null, true);
            echo "</h4>
                    </div>
                    <div style=\"overflow:hidden;max-height:40px;\">
                        <p>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "preview"), "html", null, true);
            echo "</p>
                    </div>
                    <script>\$('#preview";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "').tooltip('hide')</script>
                    <div class=\"row\">
                        <div class=\"col-lg-9\">
                            ";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "fecha"), "d \\d\\e M \\d\\e Y"), "html", null, true);
            echo "
                        </div>
                    </div>
              </div>
            </div>
        </div>
        </a>
        ";
            // line 66
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 67
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    </div>
    ";
        // line 70
        echo "      
    <div class=\"row\">
    ";
        // line 72
        if ((($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "actual") <= twig_last($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "ultima"))) && ($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "inicial") >= 1))) {
            echo "  
        <div class=\"col-md-8\"><h3 style=\"margin-bottom:0;\">Artículos recientes</h3></div>
    </div>
    <div class=\"row\">
        ";
            // line 77
            echo "        ";
            $context["n"] = 1;
            // line 78
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "paginada"));
            foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
                // line 79
                echo "        <div class=\"panel-body thumbnail\" style=\"word-break: break-word;padding-top:0;\">
            <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "/articulo/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "url"), "html", null, true);
                echo "\" style=\"color:inherit; text-decoration:none;\">
                <div class=\"col-lg-4\" style=\"padding-left:0;\">
                    <img src=\"";
                // line 82
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "/images/news/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "imagen"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "titulo"), "html", null, true);
                echo "\" class=\"img-thumbnail\" style=\"margin-top:20px;width:260px;height:130px;\" />  
                </div>
            </a>  
            <div class=\"col-lg-8\">
            ";
                // line 86
                if (((isset($context["acceso"]) ? $context["acceso"] : null) == true)) {
                    echo "<span id=\"eliminar";
                    echo twig_escape_filter($this->env, (isset($context["n"]) ? $context["n"] : null), "html", null, true);
                    echo "\" class=\"glyphicon glyphicon-remove\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Eliminar noticia\" style=\"bottom:0;float:right;padding-top:10px;padding-left:20px;cursor:pointer;\"></span>";
                }
                // line 87
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "/articulo/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "url"), "html", null, true);
                echo "\" style=\"color:inherit; text-decoration:none;\">
                    <h3 style=\"padding-top:0;\">";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "titulo"), "html", null, true);
                echo "</h3>
                    <p style=\"padding-top:0;\">";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "preview"), "html", null, true);
                echo "
                       </p>
                </a>
                <div class=\"row\">
                    <div class=\"col-lg-8\">Escrito por ";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "autor"), "html", null, true);
                echo " el ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "fecha"), "d \\d\\e M \\d\\e Y"), "html", null, true);
                echo "</div>
                </div>
                
            </div> 
            ";
                // line 97
                if (((isset($context["acceso"]) ? $context["acceso"] : null) == true)) {
                    echo "<span id=\"editar";
                    echo twig_escape_filter($this->env, (isset($context["n"]) ? $context["n"] : null), "html", null, true);
                    echo "\" class=\"glyphicon glyphicon-pencil\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Editar noticia\" style=\"bottom:0;float:right;padding-top:10px;cursor:pointer;\"></span>";
                }
                echo "  
        </div>
        <script>
        \$('#eliminar";
                // line 100
                echo twig_escape_filter($this->env, (isset($context["n"]) ? $context["n"] : null), "html", null, true);
                echo "').tooltip('hide')
        \$('#editar";
                // line 101
                echo twig_escape_filter($this->env, (isset($context["n"]) ? $context["n"] : null), "html", null, true);
                echo "').tooltip('hide');
        </script>
        ";
                // line 103
                $context["n"] = ((isset($context["n"]) ? $context["n"] : null) + 1);
                // line 104
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "        ";
            // line 106
            echo "        ";
            // line 107
            echo "            <ul class=\"pager\">
              ";
            // line 108
            if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "inicial") > 1)) {
                echo "<li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "/inicio/p-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "anterior"), "html", null, true);
                echo "\">&larr; Anterior</a></li>";
            } else {
                echo "<li class=\"disabled\"><a href=\"#\">&larr; Anterior</a></li>";
            }
            // line 109
            echo "              ";
            if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "actual") < twig_last($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "ultima")))) {
                echo "<li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "/inicio/p-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "siguiente"), "html", null, true);
                echo "\">Siguiente &rarr;</a></li>";
            } else {
                echo "<li class=\"disabled\"><a href=\"#\">Siguiente &rarr;</a></li>";
            }
            // line 110
            echo "            </ul>
        ";
            // line 112
            echo "        ";
        } else {
            // line 113
            echo "            ";
            $this->env->loadTemplate("404.twig")->display($context);
            // line 114
            echo "        ";
        }
        // line 115
        echo "                
    </div>
    ";
        // line 117
        $this->env->loadTemplate("_online.twig")->display($context);
        // line 118
        echo "    ";
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 118,  289 => 117,  285 => 115,  282 => 114,  279 => 113,  276 => 112,  273 => 110,  262 => 109,  252 => 108,  249 => 107,  247 => 106,  245 => 105,  239 => 104,  237 => 103,  232 => 101,  228 => 100,  218 => 97,  209 => 93,  202 => 89,  198 => 88,  189 => 87,  183 => 86,  172 => 82,  163 => 80,  160 => 79,  155 => 78,  152 => 77,  145 => 72,  141 => 70,  138 => 68,  132 => 67,  130 => 66,  120 => 59,  114 => 56,  109 => 54,  103 => 51,  93 => 48,  86 => 46,  77 => 45,  72 => 44,  70 => 43,  67 => 42,  65 => 41,  51 => 29,  45 => 25,  36 => 18,  25 => 8,  23 => 7,  21 => 2,  19 => 1,);
    }
}


/* home.twig */
class __TwigTemplate_1cf07b0ee707e2900fed65a3784775b62275f42186b7ae4f7c8b61e060885521_652891060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_header.twig");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
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
        echo "<title>Inicio - Noticias</title>
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 4,  337 => 3,  291 => 118,  289 => 117,  285 => 115,  282 => 114,  279 => 113,  276 => 112,  273 => 110,  262 => 109,  252 => 108,  249 => 107,  247 => 106,  245 => 105,  239 => 104,  237 => 103,  232 => 101,  228 => 100,  218 => 97,  209 => 93,  202 => 89,  198 => 88,  189 => 87,  183 => 86,  172 => 82,  163 => 80,  160 => 79,  155 => 78,  152 => 77,  145 => 72,  141 => 70,  138 => 68,  132 => 67,  130 => 66,  120 => 59,  114 => 56,  109 => 54,  103 => 51,  93 => 48,  86 => 46,  77 => 45,  72 => 44,  70 => 43,  67 => 42,  65 => 41,  51 => 29,  45 => 25,  36 => 18,  25 => 8,  23 => 7,  21 => 2,  19 => 1,);
    }
}
