<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_c117a69cf6e0aaacafb21d88d9d484e0af7f24de7e462be8b63957263c32b55a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d6857d94cb5099f32bf5a9e161528250830a5287bb2518e2a0620b8e87b354b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6857d94cb5099f32bf5a9e161528250830a5287bb2518e2a0620b8e87b354b->enter($__internal_4d6857d94cb5099f32bf5a9e161528250830a5287bb2518e2a0620b8e87b354b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4d6857d94cb5099f32bf5a9e161528250830a5287bb2518e2a0620b8e87b354b->leave($__internal_4d6857d94cb5099f32bf5a9e161528250830a5287bb2518e2a0620b8e87b354b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_951fd0f10427d9d2c093944e79f48b83a5efedc0b1660464dec3309f494af28e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_951fd0f10427d9d2c093944e79f48b83a5efedc0b1660464dec3309f494af28e->enter($__internal_951fd0f10427d9d2c093944e79f48b83a5efedc0b1660464dec3309f494af28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_951fd0f10427d9d2c093944e79f48b83a5efedc0b1660464dec3309f494af28e->leave($__internal_951fd0f10427d9d2c093944e79f48b83a5efedc0b1660464dec3309f494af28e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2c80fa7d4f20409049e0bf4c9c7dbb88ea14b89a4fa7d46afeb7045933e2be81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c80fa7d4f20409049e0bf4c9c7dbb88ea14b89a4fa7d46afeb7045933e2be81->enter($__internal_2c80fa7d4f20409049e0bf4c9c7dbb88ea14b89a4fa7d46afeb7045933e2be81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2c80fa7d4f20409049e0bf4c9c7dbb88ea14b89a4fa7d46afeb7045933e2be81->leave($__internal_2c80fa7d4f20409049e0bf4c9c7dbb88ea14b89a4fa7d46afeb7045933e2be81_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_71c7debed1175bcacd25b1379c36687657ccaa7a93dec34ac06fcee6389fce0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c7debed1175bcacd25b1379c36687657ccaa7a93dec34ac06fcee6389fce0d->enter($__internal_71c7debed1175bcacd25b1379c36687657ccaa7a93dec34ac06fcee6389fce0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_71c7debed1175bcacd25b1379c36687657ccaa7a93dec34ac06fcee6389fce0d->leave($__internal_71c7debed1175bcacd25b1379c36687657ccaa7a93dec34ac06fcee6389fce0d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/sfdproject/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
