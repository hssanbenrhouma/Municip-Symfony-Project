<?php

/* :reclamation:index.html.twig */
class __TwigTemplate_91ee320757e8b7a4dea4826c50942c40ce3d294d30d1831efd404a636d7d274b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reclamation:index.html.twig", 1);
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
        $__internal_f537bd9a12e2cfe3efacacd719dd73b65125099983c6a45a5c4d208e4664ed34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f537bd9a12e2cfe3efacacd719dd73b65125099983c6a45a5c4d208e4664ed34->enter($__internal_f537bd9a12e2cfe3efacacd719dd73b65125099983c6a45a5c4d208e4664ed34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reclamation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f537bd9a12e2cfe3efacacd719dd73b65125099983c6a45a5c4d208e4664ed34->leave($__internal_f537bd9a12e2cfe3efacacd719dd73b65125099983c6a45a5c4d208e4664ed34_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_933f05b2c4643d3414bfc5d3ac9d23b6bb8525935a13dc49bbc8be94be64e983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933f05b2c4643d3414bfc5d3ac9d23b6bb8525935a13dc49bbc8be94be64e983->enter($__internal_933f05b2c4643d3414bfc5d3ac9d23b6bb8525935a13dc49bbc8be94be64e983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":reclamation:index.html.twig"));

        // line 4
        echo "    <h1>Reclamations list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) ? $context["reclamations"] : $this->getContext($context, "reclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["reclamation"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["reclamation"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["reclamation"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new reclamation</a>
        </li>
    </ul>
";
        
        $__internal_933f05b2c4643d3414bfc5d3ac9d23b6bb8525935a13dc49bbc8be94be64e983->leave($__internal_933f05b2c4643d3414bfc5d3ac9d23b6bb8525935a13dc49bbc8be94be64e983_prof);

    }

    public function getTemplateName()
    {
        return ":reclamation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Reclamations list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reclamation in reclamations %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'id': reclamation.id }) }}\">{{ reclamation.id }}</a></td>
                <td>{{ reclamation.title }}</td>
                <td>{{ reclamation.description }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_show', { 'id': reclamation.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_edit', { 'id': reclamation.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new reclamation</a>
        </li>
    </ul>
{% endblock %}
", ":reclamation:index.html.twig", "/var/www/html/sfdproject/app/Resources/views/reclamation/index.html.twig");
    }
}
