<?php

/* test2.tpl */
class __TwigTemplate_8747d680e97770387347ca1c86aa26f4881635aa125ea671578fe3c3912a94a0 extends Twig_Template
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
        $this->env->loadTemplate("test2.tpl", "1378622755")->display($context);
        // line 8
        echo "
<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">Ladder Script</a>
        <p class=\"navbar-text\">Bienvenido invitad@</p>
        <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"dropdown\" id=\"menu1\">
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
            
            <li><a href=\"register.php\">Registrarse</a></li>
        </ul>
    </div>
</nav>

<div class=\"container\">

        <!-- corrousel -->
        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
          <!-- Indicators -->
          <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
          </ol>
        
          <!-- Wrapper for slides -->
          <div class=\"carousel-inner\">
            <div class=\"item active\">
                <img src=\"http://g3ar.co.za/wp-content/uploads/2013/09/Hearthstone-feature.jpg\" />
              <div class=\"carousel-caption\">
                <h3>Hola</h3>
                <p>Este es un saludillo test</p>
              </div>
            </div>
            
             <div class=\"item\">
             <img src=\"http://www.e4shasko.com/wp-content/uploads/2013/10/Hearthstoneantaurus-600x300.jpg\" />
              <div class=\"carousel-caption\">
                <h3>Hola 2</h3>
                <p>Este es un saludillo test 2</p>
              </div>
            </div>
            
             <div class=\"item\">
             <img src=\"http://www.e4shasko.com/wp-content/uploads/2013/10/hsp-600x300.png\" />
              <div class=\"carousel-caption\">
                <h3>Hola 3</h3>
                <p>Este es un saludillo test 3</p>
              </div>
            </div>
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
        <!------------------------------>
    <div class=\"row\">
        <div class=\"col-md-9 col-md-push-3\">
        ";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "news"));
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 87
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "titulo"), "html", null, true);
            echo "</h1><br />
            ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "preview"), "html", null, true);
            echo "<br />
            ";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "imagen"), "html", null, true);
            echo "<br />
            ";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "contenido"), "html", null, true);
            echo "<br />
            ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "autor"), "html", null, true);
            echo "<br />
            ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "fecha"), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        </div>
        <div class=\"col-md-3 col-md-pull-9\">
        
        </div>
    </div>
</div>

";
        // line 101
        $template = $this->env->resolveTemplate((isset($context["footer"]) ? $context["footer"] : null));
        $template->display($context);
    }

    public function getTemplateName()
    {
        return "test2.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 101,  134 => 94,  126 => 92,  122 => 91,  118 => 90,  114 => 89,  110 => 88,  105 => 87,  101 => 86,  21 => 8,  19 => 1,);
    }
}


/* test2.tpl */
class __TwigTemplate_8747d680e97770387347ca1c86aa26f4881635aa125ea671578fe3c3912a94a0_1378622755 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "news"));
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 4
            echo "<title>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "titulo"), "html", null, true);
            echo "</title>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "test2.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 4,  190 => 3,  187 => 2,  143 => 101,  134 => 94,  126 => 92,  122 => 91,  118 => 90,  114 => 89,  110 => 88,  105 => 87,  101 => 86,  21 => 8,  19 => 1,);
    }
}
