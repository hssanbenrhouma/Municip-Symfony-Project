<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_da0cad9931fb02116e98af05033f426e6cdea88a646d7861cf162b2aaa009bd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_d5fa1aff3b67dd4bc6f8c2b2bda1f7ed9fd6284f9602c18a8d6546082e76a9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5fa1aff3b67dd4bc6f8c2b2bda1f7ed9fd6284f9602c18a8d6546082e76a9ed->enter($__internal_d5fa1aff3b67dd4bc6f8c2b2bda1f7ed9fd6284f9602c18a8d6546082e76a9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5fa1aff3b67dd4bc6f8c2b2bda1f7ed9fd6284f9602c18a8d6546082e76a9ed->leave($__internal_d5fa1aff3b67dd4bc6f8c2b2bda1f7ed9fd6284f9602c18a8d6546082e76a9ed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26bc730dde825fc4adeefdeb4c97a567e239d171701f27dd558d3c2e0c2b9d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26bc730dde825fc4adeefdeb4c97a567e239d171701f27dd558d3c2e0c2b9d17->enter($__internal_26bc730dde825fc4adeefdeb4c97a567e239d171701f27dd558d3c2e0c2b9d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_26bc730dde825fc4adeefdeb4c97a567e239d171701f27dd558d3c2e0c2b9d17->leave($__internal_26bc730dde825fc4adeefdeb4c97a567e239d171701f27dd558d3c2e0c2b9d17_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/sfdproject/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
