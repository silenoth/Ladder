<?php

/* home.tpl */
class __TwigTemplate_541c4ca8194b8b5858059f90e0dd590592a037d47ca7778324be6d9c72983c21 extends Twig_Template
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
        $this->env->loadTemplate("home.tpl", "880036363")->display($context);
        // line 7
        echo "<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
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
        </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 23
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
        // line 39
        echo "                <li><a href=\"register.php\">Registrarse</a></li>
            </ul>
        </div>
    </div>
</nav>
";
        // line 46
        echo "<div class=\"container\" style=\"max-width:800px;\">
    ";
        // line 48
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
        // line 58
        echo "            <div class=\"item active\">
                <img src=\"http://g3ar.co.za/wp-content/uploads/2013/09/Hearthstone-feature.jpg\" />
                <div class=\"carousel-caption\">
                    <h3>Hola</h3>
                    <p>Este es un saludillo test</p>
              </div>
            </div>
            ";
        // line 65
        echo " 
        </div>
        <script>\$('.carousel').carousel({
          interval: ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "interval"), "html", null, true);
        echo "
        })</script>
        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\"></span>
        </a>
    </div>
    ";
        // line 79
        echo "    ";
        // line 80
        echo "    <div class=\"row\" style=\"margin-top: 30px; margin-bottom:30px;\">
    ";
        // line 81
        $context["i"] = 1;
        // line 82
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "preview"));
        foreach ($context['_seq'] as $context["_key"] => $context["prev"]) {
            // line 83
            echo "    <a href=\"news.php?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "id"), "html", null, true);
            echo "\" style=\"text-decoration:none;\">
        <div class=\"col-sm-6 col-md-4\" id=\"preview";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Continuar leyendo ";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "titulo"), 0, 25), "html", null, true);
            echo "...\" style=\"word-break: break-word;\">
            <div class=\"thumbnail\">
                <img src=\"http://bnetcmsus-a.akamaihd.net/cms/connect_thumbnail/H7IHFYV5NZZ31370886281987.jpg\" alt=\"...\" />
                <div class=\"caption\">
                    <div style=\"overflow:hidden;max-height:50px;min-height:50px\">
                        <h4>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "titulo"), "html", null, true);
            echo "</h4>
                    </div>
                    <div style=\"overflow:hidden;max-height:40px;\">
                        <p>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "preview"), "html", null, true);
            echo "</p>
                    </div>
                    <script>\$('#preview";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "').tooltip('hide')</script>
                    <div class=\"row\">
                        <div class=\"col-lg-9\">
                            ";
            // line 97
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "fecha"), "m/d/Y", false), "html", null, true);
            echo "
                        </div>
                    </div>
              </div>
            </div>
        </div>
        </a>
        ";
            // line 104
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 105
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "    </div>
    ";
        // line 108
        echo "    <div class=\"row\">
        <div class=\"col-md-8\"><h3 style=\"margin-bottom:0;\">Artículos recientes</h3></div>
    </div>
    <div class=\"row\">
        ";
        // line 113
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "news"));
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 114
            echo "        <div class=\"panel-body thumbnail\" style=\"word-break: break-word;padding-top:0;\">
            <a href=\"news.php?id=";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "id"), "html", null, true);
            echo "\" style=\"color:inherit; text-decoration:none;\">
                <div class=\"col-lg-4\" style=\"padding-left:0;\">
                    <img src=\"";
            // line 117
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/images/news/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "imagen"), "html", null, true);
            echo "\" alt=\"...\" class=\"img-thumbnail\" style=\"margin-top:20px\" />  
                </div>
            </a>  
            <div class=\"col-lg-8\">
                <a href=\"news.php?id=";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "id"), "html", null, true);
            echo "\" style=\"color:inherit; text-decoration:none;\">
                    <h3 style=\"padding-top:0;\">";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "titulo"), "html", null, true);
            echo "</h3>
                    <p style=\"padding-top:0;\">";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "preview"), "html", null, true);
            echo "
                       </p>
                </a>
                <div class=\"row\">
                    <div class=\"col-lg-8\">";
            // line 127
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
        // line 132
        echo "        ";
        // line 133
        echo "    </div>
    ";
        // line 134
        $template = $this->env->resolveTemplate((isset($context["footer"]) ? $context["footer"] : null));
        $template->display($context);
        // line 135
        echo "</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "home.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 135,  227 => 134,  224 => 133,  222 => 132,  211 => 127,  204 => 123,  200 => 122,  196 => 121,  187 => 117,  182 => 115,  179 => 114,  174 => 113,  168 => 108,  165 => 106,  159 => 105,  157 => 104,  147 => 97,  141 => 94,  136 => 92,  130 => 89,  120 => 84,  115 => 83,  110 => 82,  108 => 81,  105 => 80,  103 => 79,  90 => 68,  85 => 65,  76 => 58,  65 => 48,  62 => 46,  55 => 39,  38 => 23,  21 => 7,  19 => 1,);
    }
}


/* home.tpl */
class __TwigTemplate_541c4ca8194b8b5858059f90e0dd590592a037d47ca7778324be6d9c72983c21_880036363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["header"]) ? $context["header"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
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
        return "home.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 3,  275 => 2,  230 => 135,  227 => 134,  224 => 133,  222 => 132,  211 => 127,  204 => 123,  200 => 122,  196 => 121,  187 => 117,  182 => 115,  179 => 114,  174 => 113,  168 => 108,  165 => 106,  159 => 105,  157 => 104,  147 => 97,  141 => 94,  136 => 92,  130 => 89,  120 => 84,  115 => 83,  110 => 82,  108 => 81,  105 => 80,  103 => 79,  90 => 68,  85 => 65,  76 => 58,  65 => 48,  62 => 46,  55 => 39,  38 => 23,  21 => 7,  19 => 1,);
    }
}
