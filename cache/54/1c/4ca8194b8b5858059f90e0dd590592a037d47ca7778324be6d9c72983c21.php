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
        $context["active"] = "home";
        // line 2
        $this->env->loadTemplate("home.tpl", "1096978260")->display($context);
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
            echo "    <a href=\"news.php?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "id"), "html", null, true);
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
            echo "\" alt=\"...\" />
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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["prev"]) ? $context["prev"] : null), "fecha"), "d/m/Y"), "html", null, true);
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
        echo "    <div class=\"row\">
        <div class=\"col-md-8\"><h3 style=\"margin-bottom:0;\">Artículos recientes</h3></div>
    </div>
    <div class=\"row\">
        ";
        // line 75
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "news"));
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 76
            echo "        <div class=\"panel-body thumbnail\" style=\"word-break: break-word;padding-top:0;\">
            <a href=\"news.php?id=";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "id"), "html", null, true);
            echo "\" style=\"color:inherit; text-decoration:none;\">
                <div class=\"col-lg-4\" style=\"padding-left:0;\">
                    <img src=\"";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/images/news/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "imagen"), "html", null, true);
            echo "\" alt=\"...\" class=\"img-thumbnail\" style=\"margin-top:20px\" />  
                </div>
            </a>  
            <div class=\"col-lg-8\">
                <a href=\"news.php?id=";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "id"), "html", null, true);
            echo "\" style=\"color:inherit; text-decoration:none;\">
                    <h3 style=\"padding-top:0;\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "titulo"), "html", null, true);
            echo "</h3>
                    <p style=\"padding-top:0;\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "preview"), "html", null, true);
            echo "
                       </p>
                </a>
                <div class=\"row\">
                    <div class=\"col-lg-8\">";
            // line 89
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
        // line 94
        echo "        ";
        // line 95
        echo "    </div>
    ";
        // line 96
        $this->env->loadTemplate("footer.tpl")->display($context);
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
        return array (  194 => 96,  191 => 95,  189 => 94,  178 => 89,  171 => 85,  167 => 84,  163 => 83,  154 => 79,  149 => 77,  146 => 76,  141 => 75,  135 => 70,  132 => 68,  126 => 67,  124 => 66,  114 => 59,  108 => 56,  103 => 54,  97 => 51,  89 => 48,  82 => 46,  77 => 45,  72 => 44,  70 => 43,  67 => 42,  65 => 41,  51 => 29,  45 => 25,  36 => 18,  25 => 8,  23 => 7,  21 => 2,  19 => 1,);
    }
}


/* home.tpl */
class __TwigTemplate_541c4ca8194b8b5858059f90e0dd590592a037d47ca7778324be6d9c72983c21_1096978260 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("header.tpl");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "header.tpl";
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
        return "home.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 4,  239 => 3,  194 => 96,  191 => 95,  189 => 94,  178 => 89,  171 => 85,  167 => 84,  163 => 83,  154 => 79,  149 => 77,  146 => 76,  141 => 75,  135 => 70,  132 => 68,  126 => 67,  124 => 66,  114 => 59,  108 => 56,  103 => 54,  97 => 51,  89 => 48,  82 => 46,  77 => 45,  72 => 44,  70 => 43,  67 => 42,  65 => 41,  51 => 29,  45 => 25,  36 => 18,  25 => 8,  23 => 7,  21 => 2,  19 => 1,);
    }
}
