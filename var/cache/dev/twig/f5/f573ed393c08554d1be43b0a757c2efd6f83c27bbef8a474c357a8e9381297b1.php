<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_684359056dd9d0f689fd59f2ed2378817f8c646b927fa9bec7df1655081702ef extends Twig_Template
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
        $__internal_50c5bac9e39e08994e705ea300cfb1caabbe1b92a9497848687e6e3d01b55f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c5bac9e39e08994e705ea300cfb1caabbe1b92a9497848687e6e3d01b55f35->enter($__internal_50c5bac9e39e08994e705ea300cfb1caabbe1b92a9497848687e6e3d01b55f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_50c5bac9e39e08994e705ea300cfb1caabbe1b92a9497848687e6e3d01b55f35->leave($__internal_50c5bac9e39e08994e705ea300cfb1caabbe1b92a9497848687e6e3d01b55f35_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b40e382094e421bd72958c6a3b8b18223c18dc4cc4eff73ea41f8e296ddff7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b40e382094e421bd72958c6a3b8b18223c18dc4cc4eff73ea41f8e296ddff7a->enter($__internal_7b40e382094e421bd72958c6a3b8b18223c18dc4cc4eff73ea41f8e296ddff7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 3
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 3)->display($context);
        
        $__internal_7b40e382094e421bd72958c6a3b8b18223c18dc4cc4eff73ea41f8e296ddff7a->leave($__internal_7b40e382094e421bd72958c6a3b8b18223c18dc4cc4eff73ea41f8e296ddff7a_prof);

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
