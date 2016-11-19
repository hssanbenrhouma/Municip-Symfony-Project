<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_5fcb9d37967e41f2e799817b9c52cac03a420916de3b566463cb80269c24dacb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_728b68810e6d089770e526f2bdcbb9c030d069f6316fd99016a59dbe847cd9af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728b68810e6d089770e526f2bdcbb9c030d069f6316fd99016a59dbe847cd9af->enter($__internal_728b68810e6d089770e526f2bdcbb9c030d069f6316fd99016a59dbe847cd9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_728b68810e6d089770e526f2bdcbb9c030d069f6316fd99016a59dbe847cd9af->leave($__internal_728b68810e6d089770e526f2bdcbb9c030d069f6316fd99016a59dbe847cd9af_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c10ddf1b04e27538dc8bf8f17d53da090a6e831f5dca758e25fe6899dabed0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10ddf1b04e27538dc8bf8f17d53da090a6e831f5dca758e25fe6899dabed0f7->enter($__internal_c10ddf1b04e27538dc8bf8f17d53da090a6e831f5dca758e25fe6899dabed0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:check_email.html.twig"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_c10ddf1b04e27538dc8bf8f17d53da090a6e831f5dca758e25fe6899dabed0f7->leave($__internal_c10ddf1b04e27538dc8bf8f17d53da090a6e831f5dca758e25fe6899dabed0f7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/sfdproject/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
