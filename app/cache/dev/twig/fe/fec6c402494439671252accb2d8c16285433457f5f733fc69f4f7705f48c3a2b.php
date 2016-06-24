<?php

/* FrontEndGamesBundle::base.html.twig */
class __TwigTemplate_c7c1a9bf790cb7e19dc2cea071eda09ad0ae7d5c1f61f9109f7d87c68b7a5933 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if IE 8 ]>    <html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang=\"en\" class=\"no-js\"> <!--<![endif]-->

<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\" />
  <link rel=\"canonical\" href=\"http://demo.designshopify.com\" />
  
  <meta name=\"description\" content=\"\" />
  
  <title>GameOver</title>
  
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/cs.animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/application.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/bootstrap.min.3x.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/cs.bootstrap.3x.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/responsive-slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/cs.global.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/cs.style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/cs.media.3x.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
  <!--[if IE 8 ]> 
<link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./assets/stylesheets/ie8.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
<![endif]-->
  
  <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"   type=\"text/javascript\"></script>
  <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/bootstrap.min.3x.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
  <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/modernizr.js"), "html", null, true);
        echo "\"   type=\"text/javascript\"></script>
  <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/cs.global.js"), "html", null, true);
        echo "\"   type=\"text/javascript\"></script>
  <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/owl.carousel.js"), "html", null, true);
        echo "\"   type=\"text/javascript\"></script>
  <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/jquery.responsive-slider.min.js"), "html", null, true);
        echo "\"   type=\"text/javascript\"></script>
  <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/jquery.imagesloaded.min.js"), "html", null, true);
        echo "\"   type=\"text/javascript\"></script>
  <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/application.js"), "html", null, true);
        echo "\"   type=\"text/javascript\"></script>
  <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/cs.script.js"), "html", null, true);
        echo "\"   type=\"text/javascript\"></script>
  <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/jquery.isotope.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>



</head>

<body class=\"templateIndex\">

   ";
        // line 49
        $this->loadTemplate("FrontEndGamesBundle:Includes:Header.html.twig", "FrontEndGamesBundle::base.html.twig", 49)->display($context);
        // line 50
        echo "  <div id=\"content-wrapper-parent\">
      ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo " </div>          

        ";
        // line 54
        $this->loadTemplate("FrontEndGamesBundle:Includes:Footer.html.twig", "FrontEndGamesBundle::base.html.twig", 54)->display($context);
        // line 55
        echo "  <script type=\"text/javascript\">
adroll_adv_id = \"HTF7KIWJRBHHXL46WLUDBC\";
adroll_pix_id = \"IE5CHDRTR5ABXH2P6QXAVM\";
(function () {
var oldonload = window.onload;
window.onload = function(){
__adroll_loaded=true;
var scr = document.createElement(\"script\");
var host = ((\"https:\" == document.location.protocol) ? \"https://s.adroll.com\" : \"http://a.adroll.com\");
scr.setAttribute('async', 'true');
scr.type = \"text/javascript\";
scr.src = host + \"/j/roundtrip.js\";
((document.getElementsByTagName('head') || [null])[0] ||
document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
if(oldonload){oldonload()}};
}());
</script>

</body>



</html>";
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FrontEndGamesBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 51,  143 => 55,  141 => 54,  137 => 52,  135 => 51,  132 => 50,  130 => 49,  119 => 41,  115 => 40,  111 => 39,  107 => 38,  103 => 37,  99 => 36,  95 => 35,  91 => 34,  87 => 33,  83 => 32,  77 => 29,  72 => 27,  68 => 26,  64 => 25,  60 => 24,  55 => 22,  51 => 21,  47 => 20,  43 => 19,  39 => 18,  20 => 1,);
    }
}
/* <!doctype html>*/
/* <!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->*/
/* */
/* <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->*/
/* <head>*/
/*   <meta charset="UTF-8">*/
/*   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />*/
/*   <link rel="canonical" href="http://demo.designshopify.com" />*/
/*   */
/*   <meta name="description" content="" />*/
/*   */
/*   <title>GameOver</title>*/
/*   */
/*     <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">*/
/*   <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" type="text/css">*/
/*   <link href="{{ asset('assets/stylesheets/cs.animate.css') }}" rel="stylesheet" type="text/css" media="all">*/
/*   <link href="{{ asset('assets/stylesheets/application.css') }}" rel="stylesheet" type="text/css" media="all">*/
/*   <link href="{{ asset('assets/stylesheets/bootstrap.min.3x.css') }}" rel="stylesheet" type="text/css" media="all">*/
/*   <link href="{{ asset('assets/stylesheets/cs.bootstrap.3x.css') }}" rel="stylesheet" type="text/css" media="all">*/
/*   <link href="{{ asset('assets/stylesheets/owl.carousel.css') }}" rel="stylesheet" type="text/css" media="all">*/
/*   <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">*/
/*   <link href="{{ asset('assets/stylesheets/responsive-slider.css') }}" rel="stylesheet" type="text/css" media="all">*/
/*   <link href="{{ asset('assets/stylesheets/cs.global.css') }}" rel="stylesheet" type="text/css" media="all">*/
/*   <link href="{{ asset('assets/stylesheets/cs.style.css') }}" rel="stylesheet" type="text/css" media="all">*/
/*   <link href="{{ asset('assets/stylesheets/cs.media.3x.css') }}" rel="stylesheet" type="text/css" media="all">*/
/*   <!--[if IE 8 ]> */
/* <link href="{{ asset('./assets/stylesheets/ie8.css') }}" rel="stylesheet" type="text/css" media="all">*/
/* <![endif]-->*/
/*   */
/*   <script src="{{ asset('assets/javascripts/jquery-1.8.2.min.js') }}"   type="text/javascript"></script>*/
/*   <script src="{{ asset('assets/javascripts/bootstrap.min.3x.js') }}"  type="text/javascript"></script>*/
/*   <script src="{{ asset('assets/javascripts/modernizr.js') }}"   type="text/javascript"></script>*/
/*   <script src="{{ asset('assets/javascripts/cs.global.js') }}"   type="text/javascript"></script>*/
/*   <script src="{{ asset('assets/javascripts/owl.carousel.js') }}"   type="text/javascript"></script>*/
/*   <script src="{{ asset('assets/javascripts/jquery.responsive-slider.min.js') }}"   type="text/javascript"></script>*/
/*   <script src="{{ asset('assets/javascripts/jquery.imagesloaded.min.js') }}"   type="text/javascript"></script>*/
/*   <script src="{{ asset('assets/javascripts/application.js') }}"   type="text/javascript"></script>*/
/*   <script src="{{ asset('assets/javascripts/cs.script.js') }}"   type="text/javascript"></script>*/
/*   <script src="{{ asset('assets/javascripts/jquery.isotope.min.js') }}" type="text/javascript"></script>*/
/* */
/* */
/* */
/* </head>*/
/* */
/* <body class="templateIndex">*/
/* */
/*    {% include "FrontEndGamesBundle:Includes:Header.html.twig" %}*/
/*   <div id="content-wrapper-parent">*/
/*       {% block body %}{% endblock %}*/
/*  </div>          */
/* */
/*         {% include "FrontEndGamesBundle:Includes:Footer.html.twig" %}*/
/*   <script type="text/javascript">*/
/* adroll_adv_id = "HTF7KIWJRBHHXL46WLUDBC";*/
/* adroll_pix_id = "IE5CHDRTR5ABXH2P6QXAVM";*/
/* (function () {*/
/* var oldonload = window.onload;*/
/* window.onload = function(){*/
/* __adroll_loaded=true;*/
/* var scr = document.createElement("script");*/
/* var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");*/
/* scr.setAttribute('async', 'true');*/
/* scr.type = "text/javascript";*/
/* scr.src = host + "/j/roundtrip.js";*/
/* ((document.getElementsByTagName('head') || [null])[0] ||*/
/* document.getElementsByTagName('script')[0].parentNode).appendChild(scr);*/
/* if(oldonload){oldonload()}};*/
/* }());*/
/* </script>*/
/* */
/* </body>*/
/* */
/* */
/* */
/* </html>*/
