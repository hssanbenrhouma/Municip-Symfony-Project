<?php

/* sfdBundle::layout.html.twig */
class __TwigTemplate_9d2934637f6663c4ee45f4e370b95e7d2fa031ca7a746368f3f4d1145aea3bcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4b7dc1c762cc1cf269519921f22c564eb3271682f47e0bc4799d9e2fa059a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b7dc1c762cc1cf269519921f22c564eb3271682f47e0bc4799d9e2fa059a5c->enter($__internal_a4b7dc1c762cc1cf269519921f22c564eb3271682f47e0bc4799d9e2fa059a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sfdBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>

";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 47
        echo "

<body>


<!-- header-section-starts -->


";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "

<script type=\"text/javascript\">
    \$(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        \$().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href=\"#home\" id=\"toTop\" class=\"scroll\" style=\"display: block;\"> <span id=\"toTopHover\" style=\"opacity: 1;\"> </span></a>




</body>

</html>";
        
        $__internal_a4b7dc1c762cc1cf269519921f22c564eb3271682f47e0bc4799d9e2fa059a5c->leave($__internal_a4b7dc1c762cc1cf269519921f22c564eb3271682f47e0bc4799d9e2fa059a5c_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_e8952a8deae7cf6000e15dd8200416ffe40369cfcb195cb7a17d23de058c546e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8952a8deae7cf6000e15dd8200416ffe40369cfcb195cb7a17d23de058c546e->enter($__internal_e8952a8deae7cf6000e15dd8200416ffe40369cfcb195cb7a17d23de058c546e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sfdBundle::layout.html.twig"));

        // line 6
        echo "
    <title>SFD project</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design\" />
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
    <!--Custom-Theme-files-->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Owl Carousel -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/css/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/css/owl-carousel/owl.theme.css"), "html", null, true);
        echo "\">

    <!-- Animate CSS -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
    <script src=";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"> </script>
        <script src=";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"> </script>
    <!--/script-->
    <script type=text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$(\".scroll\").click(function(event){
                event.preventDefault();
                \$('html,body').animate({scrollTop:\$(this.hash).offset().top},900);
            });
        });
    </script>
    </head>

";
        
        $__internal_e8952a8deae7cf6000e15dd8200416ffe40369cfcb195cb7a17d23de058c546e->leave($__internal_e8952a8deae7cf6000e15dd8200416ffe40369cfcb195cb7a17d23de058c546e_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_cac5fad071b4db41d5278754e01df4e5bd801e9d3469cf506b2d71fac93175d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac5fad071b4db41d5278754e01df4e5bd801e9d3469cf506b2d71fac93175d7->enter($__internal_cac5fad071b4db41d5278754e01df4e5bd801e9d3469cf506b2d71fac93175d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sfdBundle::layout.html.twig"));

        // line 56
        echo "
";
        
        $__internal_cac5fad071b4db41d5278754e01df4e5bd801e9d3469cf506b2d71fac93175d7->leave($__internal_cac5fad071b4db41d5278754e01df4e5bd801e9d3469cf506b2d71fac93175d7_prof);

    }

    public function getTemplateName()
    {
        return "sfdBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  170 => 56,  164 => 55,  145 => 35,  141 => 34,  136 => 32,  132 => 31,  128 => 30,  124 => 29,  118 => 26,  112 => 23,  108 => 22,  102 => 19,  96 => 16,  90 => 13,  81 => 6,  75 => 5,  44 => 58,  42 => 55,  32 => 47,  30 => 5,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>

{% block head %}

    <title>SFD project</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design\" />
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href=\"{{ asset('css/bootstrap.css')}}\" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
    <!--Custom-Theme-files-->
    <link href=\"{{ asset('osahan/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"{{ asset('osahan/css/style.css')}}\" rel=\"stylesheet\">

    <!-- Owl Carousel -->
    <link rel=\"stylesheet\" href=\"{{ asset('osahan/css/owl-carousel/owl.carousel.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('osahan/css/owl-carousel/owl.theme.css')}}\">

    <!-- Animate CSS -->
    <link href=\"{{ asset('osahan/css/animate.css')}}\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"{{ asset('osahan/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('css/style.css')}}\" rel='stylesheet' type='text/css' />
    <script src={{ asset('js/jquery.min.js') }}\"> </script>
        <script src={{ asset('js/bootstrap.min.js') }}\"> </script>
    <!--/script-->
    <script type=text/javascript\" src=\"{{ asset('js/move-top.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/easing.js')}}\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$(\".scroll\").click(function(event){
                event.preventDefault();
                \$('html,body').animate({scrollTop:\$(this.hash).offset().top},900);
            });
        });
    </script>
    </head>

{% endblock %}


<body>


<!-- header-section-starts -->


{% block body %}

{% endblock %}


<script type=\"text/javascript\">
    \$(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        \$().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href=\"#home\" id=\"toTop\" class=\"scroll\" style=\"display: block;\"> <span id=\"toTopHover\" style=\"opacity: 1;\"> </span></a>




</body>

</html>", "sfdBundle::layout.html.twig", "/var/www/html/sfdproject/src/sfdBundle/Resources/views/layout.html.twig");
    }
}
