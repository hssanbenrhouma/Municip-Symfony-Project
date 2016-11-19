<?php

/* base.html.twig */
class __TwigTemplate_2dc604cc788500333169c28d282102e37094040cc9a0d8a9becf49b5be16295d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfee9501f1479fb3801370f97d0eca3f3345cd46b492accef70056ea1beaeba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfee9501f1479fb3801370f97d0eca3f3345cd46b492accef70056ea1beaeba2->enter($__internal_cfee9501f1479fb3801370f97d0eca3f3345cd46b492accef70056ea1beaeba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cfee9501f1479fb3801370f97d0eca3f3345cd46b492accef70056ea1beaeba2->leave($__internal_cfee9501f1479fb3801370f97d0eca3f3345cd46b492accef70056ea1beaeba2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe85101a9b428d31ca72f2e5d64257d426d7e181def375e4499b0483fb8e3627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe85101a9b428d31ca72f2e5d64257d426d7e181def375e4499b0483fb8e3627->enter($__internal_fe85101a9b428d31ca72f2e5d64257d426d7e181def375e4499b0483fb8e3627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_fe85101a9b428d31ca72f2e5d64257d426d7e181def375e4499b0483fb8e3627->leave($__internal_fe85101a9b428d31ca72f2e5d64257d426d7e181def375e4499b0483fb8e3627_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c70e9e22aa47ffafb3caa076b396a50332fa85a7c9037e9a7d37dd16060bec07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70e9e22aa47ffafb3caa076b396a50332fa85a7c9037e9a7d37dd16060bec07->enter($__internal_c70e9e22aa47ffafb3caa076b396a50332fa85a7c9037e9a7d37dd16060bec07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_c70e9e22aa47ffafb3caa076b396a50332fa85a7c9037e9a7d37dd16060bec07->leave($__internal_c70e9e22aa47ffafb3caa076b396a50332fa85a7c9037e9a7d37dd16060bec07_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1309beb8006e3800e8d7444f595cf747c39eb76e289bf2a72c6a59a6c5944771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1309beb8006e3800e8d7444f595cf747c39eb76e289bf2a72c6a59a6c5944771->enter($__internal_1309beb8006e3800e8d7444f595cf747c39eb76e289bf2a72c6a59a6c5944771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_1309beb8006e3800e8d7444f595cf747c39eb76e289bf2a72c6a59a6c5944771->leave($__internal_1309beb8006e3800e8d7444f595cf747c39eb76e289bf2a72c6a59a6c5944771_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3bb0c45070536f5f6d3f3ccc9eabefb7a7ab293cb5f64e734d8d82709867fcdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb0c45070536f5f6d3f3ccc9eabefb7a7ab293cb5f64e734d8d82709867fcdf->enter($__internal_3bb0c45070536f5f6d3f3ccc9eabefb7a7ab293cb5f64e734d8d82709867fcdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_3bb0c45070536f5f6d3f3ccc9eabefb7a7ab293cb5f64e734d8d82709867fcdf->leave($__internal_3bb0c45070536f5f6d3f3ccc9eabefb7a7ab293cb5f64e734d8d82709867fcdf_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/sfdproject/app/Resources/views/base.html.twig");
    }
}
