<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_736798947cd6fe43216b3043654ce6b130dc4bc50770044551169af540a61cd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_b8d9c2a52511e3e032bbef5fe5952b6135e23ccf14cbd9824bd047c982ebfd10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d9c2a52511e3e032bbef5fe5952b6135e23ccf14cbd9824bd047c982ebfd10->enter($__internal_b8d9c2a52511e3e032bbef5fe5952b6135e23ccf14cbd9824bd047c982ebfd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8d9c2a52511e3e032bbef5fe5952b6135e23ccf14cbd9824bd047c982ebfd10->leave($__internal_b8d9c2a52511e3e032bbef5fe5952b6135e23ccf14cbd9824bd047c982ebfd10_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47e09324a523a2a1c57f10c94a92bba1313b74192cc0b643c90be600be4c0d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e09324a523a2a1c57f10c94a92bba1313b74192cc0b643c90be600be4c0d98->enter($__internal_47e09324a523a2a1c57f10c94a92bba1313b74192cc0b643c90be600be4c0d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_47e09324a523a2a1c57f10c94a92bba1313b74192cc0b643c90be600be4c0d98->leave($__internal_47e09324a523a2a1c57f10c94a92bba1313b74192cc0b643c90be600be4c0d98_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/sfdproject/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
