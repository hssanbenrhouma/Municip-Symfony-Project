<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_b18373febc5985dda25292626efbe562d2a75fd41776b192e72eb1a48ad7103a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_491fef1c9d0be98797eb31c08196536f96ec5696e540e3af043c2da7651c5971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491fef1c9d0be98797eb31c08196536f96ec5696e540e3af043c2da7651c5971->enter($__internal_491fef1c9d0be98797eb31c08196536f96ec5696e540e3af043c2da7651c5971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_491fef1c9d0be98797eb31c08196536f96ec5696e540e3af043c2da7651c5971->leave($__internal_491fef1c9d0be98797eb31c08196536f96ec5696e540e3af043c2da7651c5971_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8de142319f73c835779f07559fcec131989d451fabfa2a94540c3d3a2237b1b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de142319f73c835779f07559fcec131989d451fabfa2a94540c3d3a2237b1b7->enter($__internal_8de142319f73c835779f07559fcec131989d451fabfa2a94540c3d3a2237b1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_8de142319f73c835779f07559fcec131989d451fabfa2a94540c3d3a2237b1b7->leave($__internal_8de142319f73c835779f07559fcec131989d451fabfa2a94540c3d3a2237b1b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/sfdproject/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
