<?php

/* success.twig */
class __TwigTemplate_8ee72ff4364c387bf0bf5eccacaac6fd990eea001ecc65b1b0027a28a27853ed extends Twig_Template
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
        $this->env->loadTemplate("success.twig", "729171974")->display($context);
        // line 6
        echo "<script language=\"javascript\"> 
 var segundos = 15; //Segundos de la cuenta atrás 
    function tiempo(){  
  var t = setTimeout(\"tiempo()\",1000);  
  document.getElementById('contenedor').innerHTML = 'o esperar '+segundos--+\" segundos.\";  
  if (segundos==0){
        window.location.href='home.php';  //Págiana a la que redireccionará a X segundos
  
   clearTimeout(t);  
  }  
 }  
 tiempo()
    </script>
<h1>Registro completo</h1>
<div class=\"alert alert-success\">
    <div style=\"margin:0 auto;\">
      <p><span class=\"glyphicon glyphicon-ok-circle\" style=\"padding-right:20px;\"></span>Tu registro se ha realizado satisfactoriamente, el siguiente paso es verificar tu email para activar tu cuenta.</p>
      <p><a href=\"home.php\"><button type=\"button\" class=\"btn btn-primary btn-xs\">Quieres salir de aqui ahora?</button></a> <span id=\"contenedor\"></span></p>
    </div>
</div>
";
        // line 26
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 26,  21 => 6,  19 => 1,);
    }
}


/* success.twig */
class __TwigTemplate_8ee72ff4364c387bf0bf5eccacaac6fd990eea001ecc65b1b0027a28a27853ed_729171974 extends Twig_Template
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

    // line 2
    public function block_titulo($context, array $blocks = array())
    {
        // line 3
        echo "<title>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "titulo"), "html", null, true);
        echo "</title>
";
    }

    public function getTemplateName()
    {
        return "success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 3,  88 => 2,  43 => 26,  21 => 6,  19 => 1,);
    }
}
