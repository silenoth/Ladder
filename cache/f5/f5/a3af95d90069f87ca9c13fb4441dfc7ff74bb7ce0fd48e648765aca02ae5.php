<?php

/* news.tpl */
class __TwigTemplate_f5f5a3af95d90069f87ca9c13fb4441dfc7ff74bb7ce0fd48e648765aca02ae5 extends Twig_Template
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
        $this->env->loadTemplate("news.tpl", "52127113")->display($context);
        // line 13
        echo "<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"//connect.facebook.net/es_LA/all.js#xfbml=1&appId=";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "app"), "id"), "html", null, true);
        echo "\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
";
        // line 23
        echo "<div class=\"row\">
    <ol class=\"breadcrumb\">
      <li><a href=\"home.php\">Inicio</a></li>
      <li class=\"active\">Noticias</li>
    </ol>
</div>
<div class=\"row\">
    <div class=\"col-lg-8\">
        <h2>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "news"), "titulo"), "html", null, true);
        echo "</h2>
        <div style=\"padding-bottom:30px;\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "news"), "fecha"), "html", null, true);
        echo "</div>
        <div style=\"padding-bottom:40px;\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/images/news/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "news"), "imagen"), "html", null, true);
        echo "\" class=\"center-block\"/></div>
        <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "news"), "contenido"), "html", null, true);
        echo "</p>
        ";
        // line 36
        echo "        <div class=\"fb-like\" data-href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/news.php?id=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "news"), "id"), "html", null, true);
        echo "\" data-layout=\"button_count\" data-action=\"like\" data-show-faces=\"true\" data-share=\"true\"></div>
        ";
        // line 38
        echo "        <div class=\"fb-comments col-lg-4\" data-href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/news.php?id=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "news"), "id"), "html", null, true);
        echo "\" data-numposts=\"20\" data-colorscheme=\"light\"></div>
        ";
        // line 40
        echo "    </div>
    <div class=\"col-lg-4\" style=\"padding-top:20px;\">
    <h4>Articulos recientes</h4>
        <div class=\"list-group\">
        ";
        // line 44
        $context["x"] = 1;
        // line 45
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "list"));
        foreach ($context['_seq'] as $context["_key"] => $context["lista"]) {
            // line 46
            echo "        <a href=\"news.php?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lista"]) ? $context["lista"] : null), "id"), "html", null, true);
            echo "\" class=\"list-group-item ";
            if (($this->getAttribute($this->getAttribute((isset($context["ls"]) ? $context["ls"] : null), "news"), "id") == $this->getAttribute((isset($context["lista"]) ? $context["lista"] : null), "id"))) {
                echo "active";
            }
            echo "\" style=\"overflow:hidden;\">
        <div style=\"background: url(";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/images/news/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lista"]) ? $context["lista"] : null), "imagen"), "html", null, true);
            echo ");-webkit-background-size: contain; -moz-background-size: contain; -o-background-size: contain;background-size:contain; float:left; width:80px;height:50px;margin-right:10px;\"></div>
        <h5 class=\"list-group-item-heading\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lista"]) ? $context["lista"] : null), "titulo"), "html", null, true);
            echo "</h5>
        </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </div>
    <button type=\"button\" id=\"vermas\" class=\"btn btn-default btn-lg btn-block\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver más\" style=\"margin-top:30px;\"><span class=\"glyphicon glyphicon-chevron-down\"></span></button>
    <script>\$('#vermas').tooltip('hide')</script>
    </div>
</div>
";
        // line 56
        $this->env->loadTemplate("footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "news.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 56,  116 => 51,  107 => 48,  101 => 47,  92 => 46,  87 => 45,  85 => 44,  79 => 40,  72 => 38,  65 => 36,  61 => 34,  55 => 33,  51 => 32,  47 => 31,  37 => 23,  30 => 18,  23 => 13,  21 => 2,  19 => 1,);
    }
}


/* news.tpl */
class __TwigTemplate_f5f5a3af95d90069f87ca9c13fb4441dfc7ff74bb7ce0fd48e648765aca02ae5_52127113 extends Twig_Template
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
.fb-like, .fb-comments, .fb-comments span, .fb-comments iframe {
    width: 100% !important;
}
</style>
";
    }

    public function getTemplateName()
    {
        return "news.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 4,  168 => 3,  123 => 56,  116 => 51,  107 => 48,  101 => 47,  92 => 46,  87 => 45,  85 => 44,  79 => 40,  72 => 38,  65 => 36,  61 => 34,  55 => 33,  51 => 32,  47 => 31,  37 => 23,  30 => 18,  23 => 13,  21 => 2,  19 => 1,);
    }
}
