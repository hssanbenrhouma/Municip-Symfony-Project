<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_504e30a5d56c026c3c1dea79d9ac853ed4824478a2d8450b7cd5e47389ff71ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_e1333406969af9323ec93e18f053a01bbd7aee6e1f727b8aaa2d8a2a81db0637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1333406969af9323ec93e18f053a01bbd7aee6e1f727b8aaa2d8a2a81db0637->enter($__internal_e1333406969af9323ec93e18f053a01bbd7aee6e1f727b8aaa2d8a2a81db0637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1333406969af9323ec93e18f053a01bbd7aee6e1f727b8aaa2d8a2a81db0637->leave($__internal_e1333406969af9323ec93e18f053a01bbd7aee6e1f727b8aaa2d8a2a81db0637_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e8963f80cc7a75a9af67eaca55a24b1001ea4f3f15b7d2f1aa626c218fe67cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8963f80cc7a75a9af67eaca55a24b1001ea4f3f15b7d2f1aa626c218fe67cb->enter($__internal_5e8963f80cc7a75a9af67eaca55a24b1001ea4f3f15b7d2f1aa626c218fe67cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:check_email.html.twig"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5e8963f80cc7a75a9af67eaca55a24b1001ea4f3f15b7d2f1aa626c218fe67cb->leave($__internal_5e8963f80cc7a75a9af67eaca55a24b1001ea4f3f15b7d2f1aa626c218fe67cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/sfdproject/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
