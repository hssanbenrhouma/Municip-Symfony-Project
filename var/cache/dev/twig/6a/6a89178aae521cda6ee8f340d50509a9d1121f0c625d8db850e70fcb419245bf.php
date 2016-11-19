<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_546b3ab70edf238f785c963670e2cfb193fab6e0eed804e9c8ad262255a6db30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc4f42bccb46e876f394bf4219b0c58d9bd61390a3a00f8616f81c3bff8a2e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4f42bccb46e876f394bf4219b0c58d9bd61390a3a00f8616f81c3bff8a2e55->enter($__internal_bc4f42bccb46e876f394bf4219b0c58d9bd61390a3a00f8616f81c3bff8a2e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc4f42bccb46e876f394bf4219b0c58d9bd61390a3a00f8616f81c3bff8a2e55->leave($__internal_bc4f42bccb46e876f394bf4219b0c58d9bd61390a3a00f8616f81c3bff8a2e55_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_98ad03b82a3dbaddeab2cb20d6fe465fb720adf238e98db334f522f0a4399bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ad03b82a3dbaddeab2cb20d6fe465fb720adf238e98db334f522f0a4399bc9->enter($__internal_98ad03b82a3dbaddeab2cb20d6fe465fb720adf238e98db334f522f0a4399bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_98ad03b82a3dbaddeab2cb20d6fe465fb720adf238e98db334f522f0a4399bc9->leave($__internal_98ad03b82a3dbaddeab2cb20d6fe465fb720adf238e98db334f522f0a4399bc9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8640328e51d19088981a53312f0a1c0ff8990abd6c447e28c441578d717cb5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8640328e51d19088981a53312f0a1c0ff8990abd6c447e28c441578d717cb5ad->enter($__internal_8640328e51d19088981a53312f0a1c0ff8990abd6c447e28c441578d717cb5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8640328e51d19088981a53312f0a1c0ff8990abd6c447e28c441578d717cb5ad->leave($__internal_8640328e51d19088981a53312f0a1c0ff8990abd6c447e28c441578d717cb5ad_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_af943086d50465b093c8160c25edea890850799591f4c08a9f34ed43514a0374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af943086d50465b093c8160c25edea890850799591f4c08a9f34ed43514a0374->enter($__internal_af943086d50465b093c8160c25edea890850799591f4c08a9f34ed43514a0374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_af943086d50465b093c8160c25edea890850799591f4c08a9f34ed43514a0374->leave($__internal_af943086d50465b093c8160c25edea890850799591f4c08a9f34ed43514a0374_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/sfdproject/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
