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
        $this->env->loadTemplate("register.twig", "1157317471")->display($context);
        // line 25
        echo "<div class=\"row\">
    <div class=\"col-lg-8\">
    <h2>Crear una nueva cuenta</h2>
    <div class=\"alert alert-info\">Al crear una cuenta te permitirá tener acceso a contenido exclusivo para usuarios registrados, modificar tu perfil, participar en los foros y mucho mas.</div>
        <noscript class=\"alert-danger\"><h3>Se recomienda tener activado javascript</h3></noscript>
            ";
        // line 31
        echo "            ";
        if ((!twig_test_empty($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error")))) {
            // line 32
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 33
            if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == "name")) {
                // line 34
                echo "                <p>Debes ingresar un nombre.</p>
                ";
            }
            // line 36
            echo "                ";
            if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == "email")) {
                // line 37
                echo "                <p>Debes ingresar un email.</p>
                ";
            }
            // line 39
            echo "                ";
            if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == "nick")) {
                // line 40
                echo "                <p>Debes ingresar un nick.</p>
                ";
            }
            // line 42
            echo "                ";
            if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == "pass")) {
                // line 43
                echo "                <p>Debes ingresar una contraseña.</p>
                ";
            }
            // line 45
            echo "                ";
            if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == "captcha")) {
                // line 46
                echo "                <p>Captcha incorrecto.</p>
                ";
            }
            // line 48
            echo "                ";
            if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == "existemail")) {
                // line 49
                echo "                <p>El email que ingresaste ya está en uso, intenta con otro email.</p>
                ";
            }
            // line 51
            echo "                ";
            if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == "emailsyntax")) {
                // line 52
                echo "                <p>El email que ingresaste no es válido, intenta escribirlo correctamente.</p>
                ";
            }
            // line 54
            echo "                ";
            if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == "existuser")) {
                // line 55
                echo "                <p>El nick que ingresaste ya está en uso, intenta con otro nick.</p>
                ";
            }
            // line 57
            echo "            </div>
            ";
        }
        // line 59
        echo "            ";
        // line 60
        echo "        
    <form class=\"form-horizontal\" role=\"form\" method=\"post\" id=\"formulario\" name=\"formulario\">
        <div class=\"form-group ";
        // line 62
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == "name")) {
            echo "has-error";
        }
        echo "\">
            <input type=\"text\" id=\"name\" class=\"form-control\" placeholder=\"Nombre\" name=\"name\" required=\"required\" />                               
        </div>
        <div class=\"form-group ";
        // line 65
        if ((($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == "email") || ($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == "emailsyntax"))) {
            echo "has-error";
        }
        echo "\">
            <input type=\"text\" id=\"email\" class=\"form-control\" placeholder=\"Email\" name=\"email\" required=\"required\" />                               
        </div>
        <div class=\"form-group ";
        // line 68
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == "nick")) {
            echo "has-error";
        }
        echo "\">
            <input type=\"text\" id=\"nick\" class=\"form-control\" placeholder=\"Nick\" name=\"nick\" required=\"required\" />                               
        </div>
        <div class=\"form-group ";
        // line 71
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == "pass")) {
            echo "has-error";
        }
        echo "\">
            <input type=\"password\" id=\"pass1\" class=\"form-control\" placeholder=\"Contraseña\" name=\"pass1\" required=\"required\" />                               
        </div>
        <div class=\"form-group ";
        // line 74
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == "pass")) {
            echo "has-error";
        }
        echo "\">
            <input type=\"password\" id=\"pass\" class=\"form-control\" placeholder=\"Confirmar contraseña\" name=\"pass\" required=\"required\" />                               
        </div>
        <div class=\"form-group\">
            <select name=\"type\" class=\"form-control\">
              <option value=\"1\">Hombre</option>
              <option value=\"0\">Mujer</option>
            </select>
        </div>
         <div class=\"form-group";
        // line 83
        if (($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "error") == "captcha")) {
            echo "has-error";
        }
        echo "\">
            <div style=\"float:left;padding-left: 15px;padding-bottom: 15px;\">
                <img id=\"captcha\" src=\"";
        // line 85
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
            <input type=\"text\" id=\"captcha\" class=\"form-control\" placeholder=\"Captcha\" name=\"captcha\" required />
        </div>
        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg\" id=\"enviar\">Registrar</button>
        </div>
    </form>        
    </div>
</div>
<script type=\"text/javascript\">
\$(document).ready(function() {
    \$('#formulario').bootstrapValidator({
        message: 'El valor no es valido',
        //campos
        fields: {
            name: {
                message: 'El nombre no es válido.',
                validators: {
                    notEmpty: {
                        message: 'El nombre no debe estar vacío.'
                    },
                stringLength: {
                        min: 3,
                        max: 40,
                        message: 'El nombre no debe tener menos de 3 o mas de 40 carácteres.'
                    },
                regexp: {
                        regexp: /^[a-zA-Z]+\$/,
                        message: 'El nombre no puede contener caracteres en blanco ni especiales.'
                    }
                }
            },
            email :{
                validators: {
                    notEmpty: {
                        message: 'El email no debe estar en blanco.'
                    },
                    emailAddress: {
                        message: 'El email ingresado no es valido'
                    }
                }  
            },
            nick: {
                message: 'El nick no es válido.',
                validators: {
                    notEmpty: {
                        message: 'El nick no debe estar vacío.'
                    },
                stringLength: {
                        min: 3,
                        max: 40,
                        message: 'El nick no debe tener menos de 3 o mas de 40 carácteres.'
                    }
                }
            },
            pass1: {
                validators: {
                    notEmpty: {
                        message: 'Contraseña no puede quedar en blanco.'
                    },
                    identical: {
                        field: 'pass',
                        message: 'La contraseña y confirmar contraseña no coinciden.'
                    },
                    different: {
                        field: 'nick',
                        message: 'La contraseña no puede ser igual al nick.'
                    }
                }
            },
            pass: {
                validators: {
                    notEmpty: {
                        message: 'Contraseña no puede quedar en blanco.'
                    },
                    identical: {
                        field: 'pass1',
                        message: 'La contraseña y confirmar contraseña no coinciden.'
                    },
                    different: {
                        field: 'nick',
                        message: 'La contraseña no puede ser igual al nick.'
                    }
                }
            }
        }
    });
});
    
</script>
";
        // line 193
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
        return array (  265 => 193,  154 => 85,  147 => 83,  133 => 74,  125 => 71,  117 => 68,  109 => 65,  101 => 62,  97 => 60,  95 => 59,  91 => 57,  87 => 55,  84 => 54,  80 => 52,  77 => 51,  73 => 49,  70 => 48,  66 => 46,  63 => 45,  59 => 43,  56 => 42,  52 => 40,  49 => 39,  45 => 37,  42 => 36,  38 => 34,  36 => 33,  33 => 32,  30 => 31,  23 => 25,  21 => 2,  19 => 1,);
    }
}


/* register.twig */
class __TwigTemplate_764bc1bde27a8cf882faf89091665d223bcee1cf48c36d1cde7f28c05f9460c6_1157317471 extends Twig_Template
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
        echo "<title>Crear nueva cuenta</title>
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
";
    }

    // line 18
    public function block_css($context, array $blocks = array())
    {
        // line 19
        echo "<link type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/css/bootstrapValidator.css\" rel=\"stylesheet\" />
";
    }

    // line 21
    public function block_js($context, array $blocks = array())
    {
        // line 22
        echo "<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootstrapValidator.js\" type=\"text/javascript\"></script>
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
        return array (  345 => 22,  342 => 21,  335 => 19,  332 => 18,  315 => 4,  312 => 3,  265 => 193,  154 => 85,  147 => 83,  133 => 74,  125 => 71,  117 => 68,  109 => 65,  101 => 62,  97 => 60,  95 => 59,  91 => 57,  87 => 55,  84 => 54,  80 => 52,  77 => 51,  73 => 49,  70 => 48,  66 => 46,  63 => 45,  59 => 43,  56 => 42,  52 => 40,  49 => 39,  45 => 37,  42 => 36,  38 => 34,  36 => 33,  33 => 32,  30 => 31,  23 => 25,  21 => 2,  19 => 1,);
    }
}
