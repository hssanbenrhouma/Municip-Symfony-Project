<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ffbb98d7a2c4c7bb82878ca8d0861c381c7fe299b2a79f96c366700b53795b29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_e7b14dab82ae52a4fc1e28e3c397b357c1145cd1f1cedabc329a4f13f47dabea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b14dab82ae52a4fc1e28e3c397b357c1145cd1f1cedabc329a4f13f47dabea->enter($__internal_e7b14dab82ae52a4fc1e28e3c397b357c1145cd1f1cedabc329a4f13f47dabea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7b14dab82ae52a4fc1e28e3c397b357c1145cd1f1cedabc329a4f13f47dabea->leave($__internal_e7b14dab82ae52a4fc1e28e3c397b357c1145cd1f1cedabc329a4f13f47dabea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca1a6ed2183975b5af5017e4fc0ad1d59d599b5e5b27da775b4b549aa77ca6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1a6ed2183975b5af5017e4fc0ad1d59d599b5e5b27da775b4b549aa77ca6a4->enter($__internal_ca1a6ed2183975b5af5017e4fc0ad1d59d599b5e5b27da775b4b549aa77ca6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_ca1a6ed2183975b5af5017e4fc0ad1d59d599b5e5b27da775b4b549aa77ca6a4->leave($__internal_ca1a6ed2183975b5af5017e4fc0ad1d59d599b5e5b27da775b4b549aa77ca6a4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/sfdproject/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
