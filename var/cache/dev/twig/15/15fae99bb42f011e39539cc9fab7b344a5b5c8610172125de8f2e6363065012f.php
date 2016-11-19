<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_749f485af8cac9118d690e7e0eaa847f1371da0300ec4611a48cd43fee46451b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6db34d250bd77b6451e512427442863b057252cb4fd924a42adb25da0c97ffeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db34d250bd77b6451e512427442863b057252cb4fd924a42adb25da0c97ffeb->enter($__internal_6db34d250bd77b6451e512427442863b057252cb4fd924a42adb25da0c97ffeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6db34d250bd77b6451e512427442863b057252cb4fd924a42adb25da0c97ffeb->leave($__internal_6db34d250bd77b6451e512427442863b057252cb4fd924a42adb25da0c97ffeb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f52032cbbfc179930445447ccb460166e776a68c060e465d9d37318d871560f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52032cbbfc179930445447ccb460166e776a68c060e465d9d37318d871560f6->enter($__internal_f52032cbbfc179930445447ccb460166e776a68c060e465d9d37318d871560f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f52032cbbfc179930445447ccb460166e776a68c060e465d9d37318d871560f6->leave($__internal_f52032cbbfc179930445447ccb460166e776a68c060e465d9d37318d871560f6_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8dbf56f59ab2833ff10db2cd46142e68e39ccbdb3d723eb9a6b337e3e7af58ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dbf56f59ab2833ff10db2cd46142e68e39ccbdb3d723eb9a6b337e3e7af58ea->enter($__internal_8dbf56f59ab2833ff10db2cd46142e68e39ccbdb3d723eb9a6b337e3e7af58ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8dbf56f59ab2833ff10db2cd46142e68e39ccbdb3d723eb9a6b337e3e7af58ea->leave($__internal_8dbf56f59ab2833ff10db2cd46142e68e39ccbdb3d723eb9a6b337e3e7af58ea_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_892441b2b424b88a2115538026ac56dccc63f9c5d3c143c24ad9c524288b7482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892441b2b424b88a2115538026ac56dccc63f9c5d3c143c24ad9c524288b7482->enter($__internal_892441b2b424b88a2115538026ac56dccc63f9c5d3c143c24ad9c524288b7482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_892441b2b424b88a2115538026ac56dccc63f9c5d3c143c24ad9c524288b7482->leave($__internal_892441b2b424b88a2115538026ac56dccc63f9c5d3c143c24ad9c524288b7482_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/sfdproject/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
