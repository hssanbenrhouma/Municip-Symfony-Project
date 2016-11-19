<?php

/* :sondage:edit.html.twig */
class __TwigTemplate_89896f8d52ae2264af6cab5fb499fab8ed7d208dd98884c95fcc6ae004224079 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":sondage:edit.html.twig", 1);
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
        $__internal_99380aea65af22152d07df3e0847e9b878104e1824f09b082208f73bc6917d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99380aea65af22152d07df3e0847e9b878104e1824f09b082208f73bc6917d9b->enter($__internal_99380aea65af22152d07df3e0847e9b878104e1824f09b082208f73bc6917d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sondage:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99380aea65af22152d07df3e0847e9b878104e1824f09b082208f73bc6917d9b->leave($__internal_99380aea65af22152d07df3e0847e9b878104e1824f09b082208f73bc6917d9b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_115caa2b65c975ed09922a2d73ea371d961e0880db227709ebcb5381234f3108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115caa2b65c975ed09922a2d73ea371d961e0880db227709ebcb5381234f3108->enter($__internal_115caa2b65c975ed09922a2d73ea371d961e0880db227709ebcb5381234f3108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":sondage:edit.html.twig"));

        // line 4
        echo "    <h1>Sondage edit</h1>

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
        
        $__internal_115caa2b65c975ed09922a2d73ea371d961e0880db227709ebcb5381234f3108->leave($__internal_115caa2b65c975ed09922a2d73ea371d961e0880db227709ebcb5381234f3108_prof);

    }

    public function getTemplateName()
    {
        return ":sondage:edit.html.twig";
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
    <h1>Sondage edit</h1>

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
", ":sondage:edit.html.twig", "/var/www/html/sfdproject/app/Resources/views/sondage/edit.html.twig");
    }
}
