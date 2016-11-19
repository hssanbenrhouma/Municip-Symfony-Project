<?php

/* :reclamation:edit.html.twig */
class __TwigTemplate_5e2b5419f40f3b849c1c3653c854d861b027a3904056a6e3273527e7f6be44d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reclamation:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7921edfafc5679b7f9e974b9cee54d4e24f6b564598667cf4d52cfb242e6638f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7921edfafc5679b7f9e974b9cee54d4e24f6b564598667cf4d52cfb242e6638f->enter($__internal_7921edfafc5679b7f9e974b9cee54d4e24f6b564598667cf4d52cfb242e6638f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reclamation:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7921edfafc5679b7f9e974b9cee54d4e24f6b564598667cf4d52cfb242e6638f->leave($__internal_7921edfafc5679b7f9e974b9cee54d4e24f6b564598667cf4d52cfb242e6638f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_695721dfd26ac6e4e017b339b052a6cb93610768bb3abe64b8076407118e2944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695721dfd26ac6e4e017b339b052a6cb93610768bb3abe64b8076407118e2944->enter($__internal_695721dfd26ac6e4e017b339b052a6cb93610768bb3abe64b8076407118e2944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":reclamation:edit.html.twig"));

        // line 4
        echo "    <h1>Reclamation edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_695721dfd26ac6e4e017b339b052a6cb93610768bb3abe64b8076407118e2944->leave($__internal_695721dfd26ac6e4e017b339b052a6cb93610768bb3abe64b8076407118e2944_prof);

    }

    public function getTemplateName()
    {
        return ":reclamation:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Reclamation edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":reclamation:edit.html.twig", "/var/www/html/sfdproject/app/Resources/views/reclamation/edit.html.twig");
    }
}
