<?php

/* :sondage:new.html.twig */
class __TwigTemplate_8e006af5d2b0d1db57d89a155e9c3f8c073c3a4afec7535ce0fba26c218895b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":sondage:new.html.twig", 1);
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
        $__internal_1fc88fc9627995cfe0323751f0bb6ecf40f70fa06afde9c71622ee3d26564a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc88fc9627995cfe0323751f0bb6ecf40f70fa06afde9c71622ee3d26564a7c->enter($__internal_1fc88fc9627995cfe0323751f0bb6ecf40f70fa06afde9c71622ee3d26564a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sondage:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fc88fc9627995cfe0323751f0bb6ecf40f70fa06afde9c71622ee3d26564a7c->leave($__internal_1fc88fc9627995cfe0323751f0bb6ecf40f70fa06afde9c71622ee3d26564a7c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc114ed1ad78023b2f704b097bf1ffaa551c482c95cb91bdb6f61b0be9ee0998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc114ed1ad78023b2f704b097bf1ffaa551c482c95cb91bdb6f61b0be9ee0998->enter($__internal_dc114ed1ad78023b2f704b097bf1ffaa551c482c95cb91bdb6f61b0be9ee0998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":sondage:new.html.twig"));

        // line 4
        echo "    <h1>Sondage creation</h1>

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
        
        $__internal_dc114ed1ad78023b2f704b097bf1ffaa551c482c95cb91bdb6f61b0be9ee0998->leave($__internal_dc114ed1ad78023b2f704b097bf1ffaa551c482c95cb91bdb6f61b0be9ee0998_prof);

    }

    public function getTemplateName()
    {
        return ":sondage:new.html.twig";
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
    <h1>Sondage creation</h1>

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
", ":sondage:new.html.twig", "/var/www/html/sfdproject/app/Resources/views/sondage/new.html.twig");
    }
}
