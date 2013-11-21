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
        $this->env->loadTemplate("home.tpl", "228829066")->display($context);
        // line 7
        echo "<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
    <div class=\"container\" style=\"max-width:800px;\">
        <a class=\"navbar-brand\" href=\"#\">Ladder Script</a>
        <p class=\"navbar-text\">Bienvenido invitad@</p>
        <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 13
        echo "            <li class=\"dropdown\" id=\"menu1\">
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
        // line 29
        echo "            <li><a href=\"register.php\">Registrarse</a></li>
        </ul>
    </div>
</nav>
";
        // line 35
        echo "<div class=\"container\" style=\"max-width:800px;\">
    ";
        // line 37
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
        // line 47
        echo "            <div class=\"item active\">
                <img src=\"http://g3ar.co.za/wp-content/uploads/2013/09/Hearthstone-feature.jpg\" />
                <div class=\"carousel-caption\">
                    <h3>Hola</h3>
                    <p>Este es un saludillo test</p>
              </div>
            </div>
            ";
        // line 54
        echo " 
        </div>
        <script>\$('.carousel').carousel({
          interval: 5000
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
        // line 68
        echo "    ";
        // line 69
        echo "    <div class=\"row\">
    ";
        // line 70
        $context["i"] = 1;
        // line 71
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "preview"));
        foreach ($context['_seq'] as $context["_key"] => $context["prev"]) {
            // line 72
            echo "        <div id=\"preview";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Continuar leyendo ";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "titulo"), 0, 25), "html", null, true);
            echo "\" class=\"col-lg-4\" style=\"word-break: break-word;\">
            <img src=\"http://bnetcmsus-a.akamaihd.net/cms/connect_thumbnail/H7IHFYV5NZZ31370886281987.jpg\" alt=\"...\" class=\"img-thumbnail\" style=\"margin-top:20px\" />  
            <div style=\"overflow:hidden;max-height:50px;min-height:50px\">
                <h4>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "titulo"), "html", null, true);
            echo "</h4>
            </div>
            <div style=\"overflow:hidden;max-height:40px;\">
                <p>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "preview"), "html", null, true);
            echo "</p>
            </div>
            <script>\$('#preview";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "').tooltip('hide')</script>
            <div class=\"row\">
                <div class=\"col-lg-9\">
                ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "fecha"), "html", null, true);
            echo "
                </div>
            </div>
        </div>
        ";
            // line 87
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 88
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "    </div>
    ";
        // line 91
        echo "    <div class=\"row\">
        <div class=\"col-md-8\"><h3>Artículos recientes</h3></div>
    </div>
    <div class=\"row\">
        ";
        // line 96
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "news"));
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 97
            echo "        <div class=\"panel-body\" style=\"word-break: break-word;\">
            <a href=\"news.php?id=";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "id"), "html", null, true);
            echo "\" style=\"color:inherit; text-decoration:none;\">
                <div class=\"col-lg-4\" style=\"padding-left:0;\">
                    <img src=\"http://bnetcmsus-a.akamaihd.net/cms/connect_thumbnail/H7IHFYV5NZZ31370886281987.jpg\" alt=\"...\" class=\"img-thumbnail\" style=\"margin-top:20px\" />  
                </div>
            </a>  
            <div class=\"col-lg-8\">
                <a href=\"news.php?id=";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "id"), "html", null, true);
            echo "\" style=\"color:inherit; text-decoration:none;\">
                    <h3 style=\"padding-top:0;\">";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "titulo"), "html", null, true);
            echo "</h3>
                    <p style=\"padding-top:0;\">";
            // line 106
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "preview"), 0, 300), "html", null, true);
            echo "<br />
                       ";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "imagen"), "html", null, true);
            echo "<br />
                       </p>
                </a>
                <div class=\"row\">
                    <div class=\"col-lg-8\">";
            // line 111
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
        // line 116
        echo "        ";
        // line 117
        echo "    </div>
    ";
        // line 118
        $template = $this->env->resolveTemplate((isset($context["footer"]) ? $context["footer"] : null));
        $template->display($context);
        // line 119
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
        return array (  206 => 119,  203 => 118,  200 => 117,  198 => 116,  187 => 111,  180 => 107,  176 => 106,  172 => 105,  168 => 104,  159 => 98,  156 => 97,  151 => 96,  145 => 91,  142 => 89,  136 => 88,  134 => 87,  127 => 83,  121 => 80,  116 => 78,  110 => 75,  101 => 72,  96 => 71,  94 => 70,  91 => 69,  89 => 68,  74 => 54,  65 => 47,  54 => 37,  51 => 35,  45 => 29,  28 => 13,  21 => 7,  19 => 1,);
    }
}


/* home.tpl */
class __TwigTemplate_541c4ca8194b8b5858059f90e0dd590592a037d47ca7778324be6d9c72983c21_228829066 extends Twig_Template
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
        return array (  254 => 3,  251 => 2,  206 => 119,  203 => 118,  200 => 117,  198 => 116,  187 => 111,  180 => 107,  176 => 106,  172 => 105,  168 => 104,  159 => 98,  156 => 97,  151 => 96,  145 => 91,  142 => 89,  136 => 88,  134 => 87,  127 => 83,  121 => 80,  116 => 78,  110 => 75,  101 => 72,  96 => 71,  94 => 70,  91 => 69,  89 => 68,  74 => 54,  65 => 47,  54 => 37,  51 => 35,  45 => 29,  28 => 13,  21 => 7,  19 => 1,);
    }
}
