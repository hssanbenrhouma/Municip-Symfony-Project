<?php

/* :user:new.html.twig */
class __TwigTemplate_06e4cbb1c8585aa499640b52d8b35cc83a5ccdb4d41574da789fc8d79d41cb1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
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
        $__internal_40a33d5810ccf4b4195e4e2efb4e9511d2dda82888a1747718e288671e722bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a33d5810ccf4b4195e4e2efb4e9511d2dda82888a1747718e288671e722bf9->enter($__internal_40a33d5810ccf4b4195e4e2efb4e9511d2dda82888a1747718e288671e722bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40a33d5810ccf4b4195e4e2efb4e9511d2dda82888a1747718e288671e722bf9->leave($__internal_40a33d5810ccf4b4195e4e2efb4e9511d2dda82888a1747718e288671e722bf9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b9b9696559809a2f876e49d50e370b2d0bdef8ac24c9d2f6236353c4659f6f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9b9696559809a2f876e49d50e370b2d0bdef8ac24c9d2f6236353c4659f6f3->enter($__internal_4b9b9696559809a2f876e49d50e370b2d0bdef8ac24c9d2f6236353c4659f6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":user:new.html.twig"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_4b9b9696559809a2f876e49d50e370b2d0bdef8ac24c9d2f6236353c4659f6f3->leave($__internal_4b9b9696559809a2f876e49d50e370b2d0bdef8ac24c9d2f6236353c4659f6f3_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":user:new.html.twig", "/var/www/html/sfdproject/app/Resources/views/user/new.html.twig");
    }
}
