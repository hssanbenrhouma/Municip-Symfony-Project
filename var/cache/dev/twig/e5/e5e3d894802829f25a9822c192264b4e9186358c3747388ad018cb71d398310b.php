<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_2017a25383e74b636ddae994b47a4452d0fb395f9d60d61ccef0d018825732a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_0d07c81e180d4cc797973d065fda3969742ac96f405ca04d2ff5a5e4af864596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d07c81e180d4cc797973d065fda3969742ac96f405ca04d2ff5a5e4af864596->enter($__internal_0d07c81e180d4cc797973d065fda3969742ac96f405ca04d2ff5a5e4af864596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d07c81e180d4cc797973d065fda3969742ac96f405ca04d2ff5a5e4af864596->leave($__internal_0d07c81e180d4cc797973d065fda3969742ac96f405ca04d2ff5a5e4af864596_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_746d13cd52ccad440d4faca5a88aceae06357228c2c2768c026adac40804359f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746d13cd52ccad440d4faca5a88aceae06357228c2c2768c026adac40804359f->enter($__internal_746d13cd52ccad440d4faca5a88aceae06357228c2c2768c026adac40804359f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_746d13cd52ccad440d4faca5a88aceae06357228c2c2768c026adac40804359f->leave($__internal_746d13cd52ccad440d4faca5a88aceae06357228c2c2768c026adac40804359f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/sfdproject/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
