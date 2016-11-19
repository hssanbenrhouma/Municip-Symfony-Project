<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_fcce5fe1cba6eda64342da42c3f78db98a2e3e81ace53ab691750aaa6ccfac7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_673a3e6cdf31bfb3d1e9ed6f2283f2590a37240dc90ec191d0ed2f1dd677f2e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673a3e6cdf31bfb3d1e9ed6f2283f2590a37240dc90ec191d0ed2f1dd677f2e7->enter($__internal_673a3e6cdf31bfb3d1e9ed6f2283f2590a37240dc90ec191d0ed2f1dd677f2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_673a3e6cdf31bfb3d1e9ed6f2283f2590a37240dc90ec191d0ed2f1dd677f2e7->leave($__internal_673a3e6cdf31bfb3d1e9ed6f2283f2590a37240dc90ec191d0ed2f1dd677f2e7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f484130764046860244e8da628c15eada19db976dbeb3ad5ca01415e8b3aa68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f484130764046860244e8da628c15eada19db976dbeb3ad5ca01415e8b3aa68->enter($__internal_1f484130764046860244e8da628c15eada19db976dbeb3ad5ca01415e8b3aa68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_1f484130764046860244e8da628c15eada19db976dbeb3ad5ca01415e8b3aa68->leave($__internal_1f484130764046860244e8da628c15eada19db976dbeb3ad5ca01415e8b3aa68_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/sfdproject/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
