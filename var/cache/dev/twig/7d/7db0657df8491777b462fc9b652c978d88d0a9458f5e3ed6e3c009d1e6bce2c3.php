<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_9debb71a3b6289c5c755ab094fcdcfcc979cfc6804375c1e0d974810eae9c027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_3adab2be8f88b45ef0f49206cdb81c987849f37f4069a85e95676cdb7c4ad0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3adab2be8f88b45ef0f49206cdb81c987849f37f4069a85e95676cdb7c4ad0e4->enter($__internal_3adab2be8f88b45ef0f49206cdb81c987849f37f4069a85e95676cdb7c4ad0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3adab2be8f88b45ef0f49206cdb81c987849f37f4069a85e95676cdb7c4ad0e4->leave($__internal_3adab2be8f88b45ef0f49206cdb81c987849f37f4069a85e95676cdb7c4ad0e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_010e54bdae28e3ef7d93c672feac872352dbcf53161c9683e011edabae2d31cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010e54bdae28e3ef7d93c672feac872352dbcf53161c9683e011edabae2d31cf->enter($__internal_010e54bdae28e3ef7d93c672feac872352dbcf53161c9683e011edabae2d31cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_010e54bdae28e3ef7d93c672feac872352dbcf53161c9683e011edabae2d31cf->leave($__internal_010e54bdae28e3ef7d93c672feac872352dbcf53161c9683e011edabae2d31cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/sfdproject/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
