<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_86b24d1ff3b51b71e9b40f1697e4cfc59ba7ccf07600c2cefdef49213f75ad1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_9dc371523842aa0f565fcbb07b385a624c7f76c572df57ce28b834cc1470a7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc371523842aa0f565fcbb07b385a624c7f76c572df57ce28b834cc1470a7d1->enter($__internal_9dc371523842aa0f565fcbb07b385a624c7f76c572df57ce28b834cc1470a7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dc371523842aa0f565fcbb07b385a624c7f76c572df57ce28b834cc1470a7d1->leave($__internal_9dc371523842aa0f565fcbb07b385a624c7f76c572df57ce28b834cc1470a7d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c9f8f64546aec66a668c8d501ca80654215637c511e7ea8755f3f7b7aeedd03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c9f8f64546aec66a668c8d501ca80654215637c511e7ea8755f3f7b7aeedd03->enter($__internal_2c9f8f64546aec66a668c8d501ca80654215637c511e7ea8755f3f7b7aeedd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_2c9f8f64546aec66a668c8d501ca80654215637c511e7ea8755f3f7b7aeedd03->leave($__internal_2c9f8f64546aec66a668c8d501ca80654215637c511e7ea8755f3f7b7aeedd03_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/sfdproject/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
