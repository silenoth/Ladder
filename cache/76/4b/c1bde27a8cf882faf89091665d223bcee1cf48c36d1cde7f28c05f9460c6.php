<?php

/* register.twig */
class __TwigTemplate_764bc1bde27a8cf882faf89091665d223bcee1cf48c36d1cde7f28c05f9460c6 extends Twig_Template
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
        $context["active"] = "news";
        // line 2
        $this->env->loadTemplate("register.twig", "818747863")->display($context);
        // line 26
        echo "<div class=\"row\">
    <div class=\"col-lg-8\">
    ";
        // line 28
        if ($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error")) {
            // line 29
            echo "    <div class=\"alert alert-danger\">
        ";
            // line 30
            if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == 1)) {
                // line 31
                echo "        <p>Debes ingresar un nombre.</p>
        ";
            }
            // line 33
            echo "        ";
            if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == 2)) {
                // line 34
                echo "        <p>Debes ingresar un nick.</p>
        ";
            }
            // line 36
            echo "        ";
            if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == 3)) {
                // line 37
                echo "        <p>Debes ingresar un email.</p>
        ";
            }
            // line 39
            echo "        ";
            if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == 4)) {
                // line 40
                echo "        <p>Debes ingresar una contraseña.</p>
        ";
            }
            // line 42
            echo "        ";
            if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == 5)) {
                // line 43
                echo "        <p>Captcha incorrecto.</p>
        ";
            }
            // line 45
            echo "    </div>
    ";
        }
        // line 47
        echo "    <form class=\"form-horizontal\" role=\"form\" method=\"post\" id=\"formulario\">
        <div class=\"form-group ";
        // line 48
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == 1)) {
            echo "has-error";
        }
        echo "\">
            <input type=\"text\" id=\"name\" class=\"form-control\" placeholder=\"Nombre\" name=\"name\" />                               
        </div>
        <div class=\"form-group ";
        // line 51
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == 2)) {
            echo "has-error";
        }
        echo "\">
            <input type=\"text\" id=\"email\" class=\"form-control\" placeholder=\"Email\" name=\"email\" />                               
        </div>
        <div class=\"form-group\">
            <input type=\"text\" id=\"nick\" class=\"form-control\" placeholder=\"Nick\" name=\"nick\" />                               
        </div>
        <div class=\"form-group\">
            <input type=\"password\" id=\"pass\" class=\"form-control\" placeholder=\"Password\" name=\"pass\" />                               
        </div>
        <div class=\"form-group\">
            <select name=\"type\" class=\"form-control\">
              <option value=\"1\">Hombre</option>
              <option value=\"0\">Mujer</option>
            </select>
        </div>
         <div class=\"form-group\">
            <div style=\"float:left;padding-left: 15px;padding-bottom: 15px;\">
                <img id=\"captcha\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "captcha"), "html", null, true);
        echo "\" class=\"img-thumbnail\" />
            </div>
            <div style=\"float:left;padding-left: 10px;padding-bottom: 15px;\">
                <div id=\"captcha-r\" class=\"loader\">
                    <img src=\"images/loading.gif\" style=\"margin-left:30px;\"/>
                    <p style=\"margin-right:15px;margin-top:15px;\">Refrescando...</p>
                </div>
            </div>
             <button type=\"button\" id=\"refresh\" class=\"btn btn-default btn-small\" style=\"margin-top:20px;\"><span class=\"glyphicon glyphicon-refresh\"></span></button>
             <script type=\"text/javascript\">
                \$('#refresh').click(function () {
                    d = new Date();
                    \$(\"#captcha\").attr(\"src\", \"captcha.php?\"+d.getTime());
                    \$('#captcha-r').show();
                    \$('#captcha').hide();
                    setTimeout(\"\$('#captcha-r').hide();\", 1500);
                    setTimeout(\"\$('#captcha').show();\", 1500);
                }); 
            </script>
            <input type=\"text\" id=\"captcha\" class=\"form-control\" placeholder=\"Captcha\" name=\"captcha\" />
        </div>
        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg\">Registrar</button>
        </div>
    </form>        
    </div>
</div>
";
        // line 95
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 95,  103 => 68,  81 => 51,  73 => 48,  70 => 47,  66 => 45,  62 => 43,  59 => 42,  55 => 40,  52 => 39,  48 => 37,  45 => 36,  41 => 34,  38 => 33,  34 => 31,  32 => 30,  29 => 29,  27 => 28,  23 => 26,  21 => 2,  19 => 1,);
    }
}


/* register.twig */
class __TwigTemplate_764bc1bde27a8cf882faf89091665d223bcee1cf48c36d1cde7f28c05f9460c6_818747863 extends Twig_Template
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
        echo "<title>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "news"), "titulo"), "html", null, true);
        echo "</title>
<style type=\"text/css\">
#fb-root {
  display: none;
}
/* To fill the container and nothing else */
.fb_iframe_widget, .fb_iframe_widget span, .fb_iframe_widget span iframe[style] {
  width: 100% !important;
}
.loader {
    display:none;
}
</style>
<script type=\"text/javascript\">
  <script>
    \$(function(){
        \$('#formulario').validate();
    });
</script>
    
";
    }

    public function getTemplateName()
    {
        return "register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 4,  178 => 3,  133 => 95,  103 => 68,  81 => 51,  73 => 48,  70 => 47,  66 => 45,  62 => 43,  59 => 42,  55 => 40,  52 => 39,  48 => 37,  45 => 36,  41 => 34,  38 => 33,  34 => 31,  32 => 30,  29 => 29,  27 => 28,  23 => 26,  21 => 2,  19 => 1,);
    }
}
