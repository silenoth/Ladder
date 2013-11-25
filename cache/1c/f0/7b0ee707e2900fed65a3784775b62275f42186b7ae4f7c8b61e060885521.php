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
        $this->env->loadTemplate("home.twig", "274252691")->display($context);
        // line 7
        echo "<nav class=\"navbar navbar-inverse navbar-static-top\" role=\"navigation\">
    <div class=\"container\" style=\"max-width:800px;\">
        <a class=\"navbar-brand\" href=\"#\">Ladder Script</a>
        
        <button type=\"btn btn-navbar\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navHeaderCollapse\"> <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
        </button>
        <div class=\"collapse navbar-collapse navHeaderCollapse\">
        <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">Inicio</a></li>
            <li><a href=\"#\">Foros</a></li>
            <li><a href=\"#\">Ladder</a></li>
        </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 24
        echo "                <li class=\"dropdown\" id=\"menu1\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#menu1\">
                        Iniciar sesión
                        <b class=\"caret\"></b>
                    </a>
                 <div class=\"dropdown-menu\">
                    <form style=\"margin: 0px\" accept-charset=\"UTF-8\" action=\"/sessions\" method=\"post\"><div style=\"margin:0;padding:0;display:inline\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input name=\"authenticity_token\" type=\"hidden\" value=\"4L/A2ZMYkhTD3IiNDMTuB/fhPRvyCNGEsaZocUUpw40=\" /></div>
                        <fieldset class='textbox' style=\"padding:10px\">
                            <input class=\"form-control input-sm\" style=\"margin-bottom:10px\" type=\"text\" placeholder=\"Username\" />
                            <input class=\"form-control input-sm\" style=\"margin-bottom:10px\" type=\"password\" placeholder=\"Passsword\" />
                            <input class=\"btn btn-primary btn-small btn-block\" name=\"commit\" type=\"submit\" value=\"Conectar\" />
                        </fieldset>
                    </form>
                 </div>
               </li>
               ";
        // line 40
        echo "                <li><a href=\"register.php\">Registrarse</a></li>
            </ul>
        </div>
    </div>
</nav>
";
        // line 47
        echo "<div class=\"container\" style=\"max-width:800px;\">
    ";
        // line 49
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
        // line 59
        echo "            <div class=\"item active\">
                <img src=\"http://g3ar.co.za/wp-content/uploads/2013/09/Hearthstone-feature.jpg\" />
                <div class=\"carousel-caption\">
                    <h3>Hola</h3>
                    <p>Este es un saludillo test</p>
              </div>
            </div>
            ";
        // line 66
        echo " 
        </div>
        <script>
        \$('.carousel').carousel({
          interval: ";
        // line 70
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
        // line 82
        echo "    ";
        // line 83
        echo "    <div class=\"row\" style=\"margin-top: 30px; margin-bottom:30px;\">
    ";
        // line 84
        $context["i"] = 1;
        // line 85
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "preview"));
        foreach ($context['_seq'] as $context["_key"] => $context["prev"]) {
            // line 86
            echo "    <a href=\"news.php?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "id"), "html", null, true);
            echo "\" style=\"text-decoration:none;\">
        <div class=\"col-sm-6 col-md-4\" id=\"preview";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Continuar leyendo ";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "titulo"), 0, 25), "html", null, true);
            echo "...\" style=\"word-break: break-word;\">
            <div class=\"thumbnail\">
                <img src=\"";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/images/news/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "imagen"), "html", null, true);
            echo "\" alt=\"...\" />
                <div class=\"caption\">
                    <div style=\"overflow:hidden;max-height:50px;min-height:50px\">
                        <h4>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "titulo"), "html", null, true);
            echo "</h4>
                    </div>
                    <div style=\"overflow:hidden;max-height:40px;\">
                        <p>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "preview"), "html", null, true);
            echo "</p>
                    </div>
                    <script>\$('#preview";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "').tooltip('hide')</script>
                    <div class=\"row\">
                        <div class=\"col-lg-9\">
                            ";
            // line 100
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "fecha"), "d/m/Y"), "html", null, true);
            echo "
                        </div>
                    </div>
              </div>
            </div>
        </div>
        </a>
        ";
            // line 107
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 108
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "    </div>
    ";
        // line 111
        echo "    <div class=\"row\">
        <div class=\"col-md-8\"><h3 style=\"margin-bottom:0;\">Artículos recientes</h3></div>
    </div>
    <div class=\"row\">
        ";
        // line 116
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "news"));
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 117
            echo "        <div class=\"panel-body thumbnail\" style=\"word-break: break-word;padding-top:0;\">
            <a href=\"news.php?id=";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "id"), "html", null, true);
            echo "\" style=\"color:inherit; text-decoration:none;\">
                <div class=\"col-lg-4\" style=\"padding-left:0;\">
                    <img src=\"";
            // line 120
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/images/news/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "imagen"), "html", null, true);
            echo "\" alt=\"...\" class=\"img-thumbnail\" style=\"margin-top:20px\" />  
                </div>
            </a>  
            <div class=\"col-lg-8\">
                <a href=\"news.php?id=";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "id"), "html", null, true);
            echo "\" style=\"color:inherit; text-decoration:none;\">
                    <h3 style=\"padding-top:0;\">";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "titulo"), "html", null, true);
            echo "</h3>
                    <p style=\"padding-top:0;\">";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "preview"), "html", null, true);
            echo "
                       </p>
                </a>
                <div class=\"row\">
                    <div class=\"col-lg-8\">";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "fecha"), "html", null, true);
            echo "</div>
                </div>
            </div>   
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "        ";
        // line 136
        echo "    </div>
    ";
        // line 137
        $this->env->loadTemplate("footer.twig")->display($context);
        // line 138
        echo "</div>
</body>
</html>";
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
        return array (  237 => 138,  235 => 137,  232 => 136,  230 => 135,  219 => 130,  212 => 126,  208 => 125,  204 => 124,  195 => 120,  190 => 118,  187 => 117,  182 => 116,  176 => 111,  173 => 109,  167 => 108,  165 => 107,  155 => 100,  149 => 97,  144 => 95,  138 => 92,  130 => 89,  123 => 87,  118 => 86,  113 => 85,  111 => 84,  108 => 83,  106 => 82,  92 => 70,  86 => 66,  77 => 59,  66 => 49,  63 => 47,  56 => 40,  39 => 24,  21 => 7,  19 => 1,);
    }
}


/* home.twig */
class __TwigTemplate_1cf07b0ee707e2900fed65a3784775b62275f42186b7ae4f7c8b61e060885521_274252691 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("header.twig");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "header.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_titulo($context, array $blocks = array())
    {
        // line 3
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
        return array (  287 => 3,  284 => 2,  237 => 138,  235 => 137,  232 => 136,  230 => 135,  219 => 130,  212 => 126,  208 => 125,  204 => 124,  195 => 120,  190 => 118,  187 => 117,  182 => 116,  176 => 111,  173 => 109,  167 => 108,  165 => 107,  155 => 100,  149 => 97,  144 => 95,  138 => 92,  130 => 89,  123 => 87,  118 => 86,  113 => 85,  111 => 84,  108 => 83,  106 => 82,  92 => 70,  86 => 66,  77 => 59,  66 => 49,  63 => 47,  56 => 40,  39 => 24,  21 => 7,  19 => 1,);
    }
}
