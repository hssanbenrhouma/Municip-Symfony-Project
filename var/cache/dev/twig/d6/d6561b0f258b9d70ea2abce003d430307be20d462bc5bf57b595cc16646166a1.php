<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_0a5a5bed475a9cf200cd026d6af679433f7f2266739f20ca6e70e04fe9e02a84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_84f75aa74d4ddf60e71224df7b2594145536e961512fb6f27f2a35aba3abc70b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f75aa74d4ddf60e71224df7b2594145536e961512fb6f27f2a35aba3abc70b->enter($__internal_84f75aa74d4ddf60e71224df7b2594145536e961512fb6f27f2a35aba3abc70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84f75aa74d4ddf60e71224df7b2594145536e961512fb6f27f2a35aba3abc70b->leave($__internal_84f75aa74d4ddf60e71224df7b2594145536e961512fb6f27f2a35aba3abc70b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_baf653bbc7bd9462db9efca2a88326a5531a0a060023623c1b8bd3e76a4be6dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf653bbc7bd9462db9efca2a88326a5531a0a060023623c1b8bd3e76a4be6dd->enter($__internal_baf653bbc7bd9462db9efca2a88326a5531a0a060023623c1b8bd3e76a4be6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_baf653bbc7bd9462db9efca2a88326a5531a0a060023623c1b8bd3e76a4be6dd->leave($__internal_baf653bbc7bd9462db9efca2a88326a5531a0a060023623c1b8bd3e76a4be6dd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/sfdproject/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
