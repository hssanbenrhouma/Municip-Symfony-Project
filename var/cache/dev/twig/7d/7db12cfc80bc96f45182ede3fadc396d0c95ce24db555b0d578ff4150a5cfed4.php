<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_4ac1146564d79314c926ff430dd417e7e253fb8f60c0a317695f136f10945686 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_323a96048906f2a25786ebdcf294791f2d2996fb0cab97520b57fe69eed9f16e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323a96048906f2a25786ebdcf294791f2d2996fb0cab97520b57fe69eed9f16e->enter($__internal_323a96048906f2a25786ebdcf294791f2d2996fb0cab97520b57fe69eed9f16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_323a96048906f2a25786ebdcf294791f2d2996fb0cab97520b57fe69eed9f16e->leave($__internal_323a96048906f2a25786ebdcf294791f2d2996fb0cab97520b57fe69eed9f16e_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bbffe0b55552d47bdab049dec8b6e079ebe43406d4fe7f1783e0587e3f801a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbffe0b55552d47bdab049dec8b6e079ebe43406d4fe7f1783e0587e3f801a99->enter($__internal_bbffe0b55552d47bdab049dec8b6e079ebe43406d4fe7f1783e0587e3f801a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 3
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 3)->display($context);
        
        $__internal_bbffe0b55552d47bdab049dec8b6e079ebe43406d4fe7f1783e0587e3f801a99->leave($__internal_bbffe0b55552d47bdab049dec8b6e079ebe43406d4fe7f1783e0587e3f801a99_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/sfdproject/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
