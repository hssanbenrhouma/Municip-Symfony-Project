<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_52bd5b89f636593f64a0e3513f38dd08edca1755b777d5337cf317ea1595d279 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_90f4756cdea85cf0f8dc3c6b7b05a7e93117e888f16fd84c445f11718247fde7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f4756cdea85cf0f8dc3c6b7b05a7e93117e888f16fd84c445f11718247fde7->enter($__internal_90f4756cdea85cf0f8dc3c6b7b05a7e93117e888f16fd84c445f11718247fde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90f4756cdea85cf0f8dc3c6b7b05a7e93117e888f16fd84c445f11718247fde7->leave($__internal_90f4756cdea85cf0f8dc3c6b7b05a7e93117e888f16fd84c445f11718247fde7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2cbfc541d1f19c314e9967aea5e9d479b3617e28eb357aef5cedebfc617acd89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbfc541d1f19c314e9967aea5e9d479b3617e28eb357aef5cedebfc617acd89->enter($__internal_2cbfc541d1f19c314e9967aea5e9d479b3617e28eb357aef5cedebfc617acd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_2cbfc541d1f19c314e9967aea5e9d479b3617e28eb357aef5cedebfc617acd89->leave($__internal_2cbfc541d1f19c314e9967aea5e9d479b3617e28eb357aef5cedebfc617acd89_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/sfdproject/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
