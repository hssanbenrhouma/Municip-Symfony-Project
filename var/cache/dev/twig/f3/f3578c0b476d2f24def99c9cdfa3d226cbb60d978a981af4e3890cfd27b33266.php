<?php

/* :sondage:index.html.twig */
class __TwigTemplate_49fddb8a274c4dd832e13b5af813222acc0db02c681f763490aa2841ab2b122d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":sondage:index.html.twig", 1);
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
        $__internal_f387e750a5b1bcfd4929f27d51dab2887370b8ddd64ba302c4a1661d10ecafd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f387e750a5b1bcfd4929f27d51dab2887370b8ddd64ba302c4a1661d10ecafd7->enter($__internal_f387e750a5b1bcfd4929f27d51dab2887370b8ddd64ba302c4a1661d10ecafd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sondage:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f387e750a5b1bcfd4929f27d51dab2887370b8ddd64ba302c4a1661d10ecafd7->leave($__internal_f387e750a5b1bcfd4929f27d51dab2887370b8ddd64ba302c4a1661d10ecafd7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cf1073a1f5b2d0a742cb095c63851a9202405f44a695c7683f20ee4db05d0a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf1073a1f5b2d0a742cb095c63851a9202405f44a695c7683f20ee4db05d0a8->enter($__internal_5cf1073a1f5b2d0a742cb095c63851a9202405f44a695c7683f20ee4db05d0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":sondage:index.html.twig"));

        // line 4
        echo "    <h1>Sondages list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Oui</th>
                <th>Non</th>
                <th>Any</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sondages"]) ? $context["sondages"] : $this->getContext($context, "sondages")));
        foreach ($context['_seq'] as $context["_key"] => $context["sondage"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["sondage"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sondage"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["sondage"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["sondage"], "oui", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["sondage"], "non", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["sondage"], "any", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["sondage"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["sondage"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sondage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new sondage</a>
        </li>
    </ul>
";
        
        $__internal_5cf1073a1f5b2d0a742cb095c63851a9202405f44a695c7683f20ee4db05d0a8->leave($__internal_5cf1073a1f5b2d0a742cb095c63851a9202405f44a695c7683f20ee4db05d0a8_prof);

    }

    public function getTemplateName()
    {
        return ":sondage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 42,  106 => 37,  94 => 31,  88 => 28,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Sondages list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Oui</th>
                <th>Non</th>
                <th>Any</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for sondage in sondages %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'id': sondage.id }) }}\">{{ sondage.id }}</a></td>
                <td>{{ sondage.title }}</td>
                <td>{{ sondage.oui }}</td>
                <td>{{ sondage.non }}</td>
                <td>{{ sondage.any }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_show', { 'id': sondage.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_edit', { 'id': sondage.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new sondage</a>
        </li>
    </ul>
{% endblock %}
", ":sondage:index.html.twig", "/var/www/html/sfdproject/app/Resources/views/sondage/index.html.twig");
    }
}
