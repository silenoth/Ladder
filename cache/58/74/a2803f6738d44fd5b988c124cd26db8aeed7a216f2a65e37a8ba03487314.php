<?php

/* _header.twig */
class __TwigTemplate_5874a2803f6738d44fd5b988c124cd26db8aeed7a216f2a65e37a8ba03487314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
        echo "/img/ico/favicon.png\" />
    ";
        // line 10
        $this->displayBlock('titulo', $context, $blocks);
        // line 13
        echo "    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/css/bootstrap.css\" rel=\"stylesheet\" />
    <style id=\"holderjs-style\" type=\"text/css\"></style>
    <style type=\"text/css\">
    .bs-footer {
        text-align: left;
        }
        .bs-footer {
        padding-top: 40px;
        padding-bottom: 30px;
        margin-top: 100px;
        color: #777;
        text-align: center;
        border-top: 1px solid #e5e5e5;
        }
    </style>
    ";
        // line 29
        $this->displayBlock('css', $context, $blocks);
        // line 32
        echo "    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/jquery-2.1.0.min.js\" type=\"text/javascript\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/js/bootbox.min.js\"></script>
    ";
        // line 42
        $this->displayBlock('js', $context, $blocks);
        // line 45
        echo "  </head>
  <body>
";
        // line 47
        $this->env->loadTemplate("navbar.twig")->display($context);
        // line 49
        echo "<div class=\"container\" style=\"width:1000px;\">";
    }

    // line 10
    public function block_titulo($context, array $blocks = array())
    {
        // line 11
        echo "    <title>";
        echo "</title>
    ";
    }

    // line 29
    public function block_css($context, array $blocks = array())
    {
        // line 30
        echo "    <!-- Extras css files -->
    ";
    }

    // line 42
    public function block_js($context, array $blocks = array())
    {
        // line 43
        echo "    <!-- Extras js files -->
    ";
    }

    public function getTemplateName()
    {
        return "_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 43,  113 => 42,  108 => 30,  105 => 29,  99 => 11,  96 => 10,  90 => 47,  86 => 45,  84 => 42,  80 => 41,  76 => 40,  61 => 29,  43 => 14,  40 => 13,  38 => 10,  32 => 9,  22 => 1,  1375 => 90,  1299 => 17,  1294 => 14,  1291 => 13,  1287 => 11,  1282 => 8,  1280 => 7,  1276 => 5,  1273 => 4,  1265 => 3,  1217 => 399,  1214 => 397,  1211 => 396,  1209 => 395,  1206 => 393,  1204 => 392,  1201 => 391,  1198 => 389,  1183 => 387,  1177 => 386,  1172 => 384,  1163 => 383,  1160 => 382,  1156 => 381,  1152 => 380,  1148 => 378,  1145 => 377,  1128 => 376,  1124 => 374,  1121 => 372,  1107 => 371,  1103 => 369,  1101 => 368,  1098 => 367,  1092 => 366,  1087 => 364,  1078 => 363,  1075 => 362,  1071 => 361,  1067 => 360,  1059 => 359,  1050 => 358,  1047 => 357,  1030 => 356,  1026 => 354,  1023 => 352,  1009 => 351,  1005 => 349,  1001 => 347,  999 => 346,  996 => 345,  990 => 344,  985 => 342,  976 => 341,  973 => 340,  969 => 339,  965 => 338,  957 => 337,  948 => 336,  945 => 335,  928 => 334,  924 => 332,  921 => 330,  907 => 329,  903 => 327,  899 => 325,  897 => 324,  894 => 323,  888 => 322,  883 => 320,  874 => 319,  871 => 318,  867 => 317,  857 => 316,  848 => 315,  845 => 314,  828 => 313,  824 => 311,  821 => 309,  807 => 308,  803 => 306,  799 => 304,  795 => 302,  793 => 301,  790 => 300,  784 => 299,  779 => 297,  770 => 296,  767 => 295,  763 => 294,  759 => 293,  756 => 292,  753 => 291,  736 => 290,  732 => 288,  730 => 287,  727 => 286,  724 => 284,  722 => 283,  719 => 282,  716 => 280,  702 => 279,  698 => 277,  694 => 275,  692 => 274,  689 => 273,  683 => 272,  678 => 270,  669 => 269,  666 => 268,  662 => 267,  658 => 266,  650 => 265,  641 => 264,  638 => 263,  621 => 262,  617 => 260,  614 => 258,  600 => 257,  596 => 255,  592 => 253,  590 => 252,  587 => 251,  581 => 250,  576 => 248,  567 => 247,  564 => 246,  560 => 245,  556 => 244,  548 => 243,  539 => 242,  536 => 241,  519 => 240,  515 => 238,  512 => 236,  498 => 235,  494 => 233,  490 => 231,  488 => 230,  485 => 229,  479 => 228,  474 => 226,  465 => 225,  462 => 224,  458 => 223,  454 => 222,  446 => 221,  437 => 220,  434 => 219,  417 => 218,  413 => 216,  410 => 214,  396 => 213,  392 => 211,  388 => 209,  386 => 208,  383 => 207,  377 => 206,  372 => 204,  363 => 203,  360 => 202,  356 => 201,  352 => 200,  344 => 199,  335 => 198,  332 => 197,  315 => 196,  311 => 194,  308 => 192,  294 => 191,  290 => 189,  286 => 187,  284 => 186,  281 => 185,  275 => 184,  270 => 182,  261 => 181,  258 => 180,  254 => 179,  244 => 178,  235 => 177,  232 => 176,  215 => 175,  211 => 173,  208 => 171,  194 => 170,  190 => 168,  186 => 166,  182 => 164,  180 => 163,  175 => 161,  170 => 160,  153 => 159,  149 => 157,  147 => 156,  144 => 155,  141 => 153,  138 => 152,  135 => 151,  132 => 150,  129 => 149,  126 => 148,  123 => 147,  120 => 146,  117 => 145,  115 => 144,  102 => 132,  92 => 49,  79 => 116,  75 => 115,  71 => 38,  67 => 113,  63 => 32,  54 => 110,  48 => 106,  45 => 105,  42 => 104,  39 => 103,  34 => 99,  28 => 94,  23 => 92,  21 => 2,  19 => 1,);
    }
}
