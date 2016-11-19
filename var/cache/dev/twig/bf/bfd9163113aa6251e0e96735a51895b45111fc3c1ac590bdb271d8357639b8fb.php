<?php

/* :reclamation:new.html.twig */
class __TwigTemplate_0932480174e18b46d45739852efde2f27f74fd4c991230aeabf6316fdf6a916a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reclamation:new.html.twig", 1);
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
        $__internal_a6e70bf9985f835fc3e6687afe3669ee3ce1ed2bb086dc8c6ea5bc858cb655fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e70bf9985f835fc3e6687afe3669ee3ce1ed2bb086dc8c6ea5bc858cb655fd->enter($__internal_a6e70bf9985f835fc3e6687afe3669ee3ce1ed2bb086dc8c6ea5bc858cb655fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reclamation:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6e70bf9985f835fc3e6687afe3669ee3ce1ed2bb086dc8c6ea5bc858cb655fd->leave($__internal_a6e70bf9985f835fc3e6687afe3669ee3ce1ed2bb086dc8c6ea5bc858cb655fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c256908701a8e6184df750da718eab2a474a272329ecbf5701eb530b2234621a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c256908701a8e6184df750da718eab2a474a272329ecbf5701eb530b2234621a->enter($__internal_c256908701a8e6184df750da718eab2a474a272329ecbf5701eb530b2234621a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":reclamation:new.html.twig"));

        // line 4
        echo "    <h1>Reclamation creation</h1>

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
        
        $__internal_c256908701a8e6184df750da718eab2a474a272329ecbf5701eb530b2234621a->leave($__internal_c256908701a8e6184df750da718eab2a474a272329ecbf5701eb530b2234621a_prof);

    }

    public function getTemplateName()
    {
        return ":reclamation:new.html.twig";
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
    <h1>Reclamation creation</h1>

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
", ":reclamation:new.html.twig", "/var/www/html/sfdproject/app/Resources/views/reclamation/new.html.twig");
    }
}
