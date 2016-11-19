<?php

/* :reclamation:show.html.twig */
class __TwigTemplate_183aec3d254ed1de0ae6f0a67cba9777b0369f8a84a11979f6789c19389ee599 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reclamation:show.html.twig", 1);
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
        $__internal_952e26c18e688f49408dd3ebfeabc0f54a13540d002ad28dc4e70c4146cb0876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952e26c18e688f49408dd3ebfeabc0f54a13540d002ad28dc4e70c4146cb0876->enter($__internal_952e26c18e688f49408dd3ebfeabc0f54a13540d002ad28dc4e70c4146cb0876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reclamation:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_952e26c18e688f49408dd3ebfeabc0f54a13540d002ad28dc4e70c4146cb0876->leave($__internal_952e26c18e688f49408dd3ebfeabc0f54a13540d002ad28dc4e70c4146cb0876_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_daa1c5c137a425160517f4404fa4dddab0fdeeacb13fd995e4433be148903e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa1c5c137a425160517f4404fa4dddab0fdeeacb13fd995e4433be148903e09->enter($__internal_daa1c5c137a425160517f4404fa4dddab0fdeeacb13fd995e4433be148903e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":reclamation:show.html.twig"));

        // line 4
        echo "    <h1>Reclamation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_daa1c5c137a425160517f4404fa4dddab0fdeeacb13fd995e4433be148903e09->leave($__internal_daa1c5c137a425160517f4404fa4dddab0fdeeacb13fd995e4433be148903e09_prof);

    }

    public function getTemplateName()
    {
        return ":reclamation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Reclamation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ reclamation.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ reclamation.title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ reclamation.description }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_edit', { 'id': reclamation.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":reclamation:show.html.twig", "/var/www/html/sfdproject/app/Resources/views/reclamation/show.html.twig");
    }
}
