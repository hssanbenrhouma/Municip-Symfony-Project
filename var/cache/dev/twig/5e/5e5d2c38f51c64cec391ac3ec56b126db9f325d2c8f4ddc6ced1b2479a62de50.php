<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_3d3f652c20712c43911d8e989642d0d12af47c5ed7cef6c8f4414a1c82dd031e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_11a194c3376f2d8b5261848fa7053f0404e281ec27e61615ab5f91dce0e3d2c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a194c3376f2d8b5261848fa7053f0404e281ec27e61615ab5f91dce0e3d2c6->enter($__internal_11a194c3376f2d8b5261848fa7053f0404e281ec27e61615ab5f91dce0e3d2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11a194c3376f2d8b5261848fa7053f0404e281ec27e61615ab5f91dce0e3d2c6->leave($__internal_11a194c3376f2d8b5261848fa7053f0404e281ec27e61615ab5f91dce0e3d2c6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1d74212ca76a386b0faa3952b2146808db2785b34236e9a0a53e2a6a80929ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d74212ca76a386b0faa3952b2146808db2785b34236e9a0a53e2a6a80929ea->enter($__internal_b1d74212ca76a386b0faa3952b2146808db2785b34236e9a0a53e2a6a80929ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_b1d74212ca76a386b0faa3952b2146808db2785b34236e9a0a53e2a6a80929ea->leave($__internal_b1d74212ca76a386b0faa3952b2146808db2785b34236e9a0a53e2a6a80929ea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/sfdproject/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
