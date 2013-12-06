<?php

/* register.tpl */
class __TwigTemplate_4d6dd7ceee3763e8fa8ca57e4851f633e3d5668b61e71e6d176509539cd2740e extends Twig_Template
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
        $this->env->loadTemplate("register.tpl", "1699605156")->display($context);
        // line 16
        echo "<div id=\"fb-root\"></div>
<script>
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '240362496094800',   // App ID from the app dashboard
      status     : true,                // Check Facebook Login status
      xfbml      : true                 // Look for social plugins on the page
    });

    // Additional initialization code such as adding Event Listeners goes here
  };

  // Load the SDK asynchronously
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = \"//connect.facebook.net/es_ES/all.js\";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<div class=\"row\">
    <div class=\"col-lg-8\">
        <fb:registration
        redirect_uri=http://localhost/ladder 
        fields=\"[
        {'name':'name'},
        {'name':'email'},
        {'name':'nick', 'description':'Ingresa tu nick', 'type':'text'},
        {'name':'password'},
        {'name':'gender'},
        {'name':'captcha'}
        ]\" />
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "register.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 16,  21 => 2,  19 => 1,);
    }
}


/* register.tpl */
class __TwigTemplate_4d6dd7ceee3763e8fa8ca57e4851f633e3d5668b61e71e6d176509539cd2740e_1699605156 extends Twig_Template
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
</style>
";
    }

    public function getTemplateName()
    {
        return "register.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 4,  103 => 3,  23 => 16,  21 => 2,  19 => 1,);
    }
}
