<?php

/* :sondage:show.html.twig */
class __TwigTemplate_760eb747ce7d1723d625502e97b6682e1ffb67c7cf07612b403433b0aa6022b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":sondage:show.html.twig", 1);
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
        $__internal_7081017c55118ab0aba827a9e0698987b00bef82009dcbe6007f2b065236c2da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7081017c55118ab0aba827a9e0698987b00bef82009dcbe6007f2b065236c2da->enter($__internal_7081017c55118ab0aba827a9e0698987b00bef82009dcbe6007f2b065236c2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sondage:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7081017c55118ab0aba827a9e0698987b00bef82009dcbe6007f2b065236c2da->leave($__internal_7081017c55118ab0aba827a9e0698987b00bef82009dcbe6007f2b065236c2da_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbe3f5bba2e7108d0e6fb9cc1ade337933b521fa09b7f1a20ad53906265e777d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe3f5bba2e7108d0e6fb9cc1ade337933b521fa09b7f1a20ad53906265e777d->enter($__internal_cbe3f5bba2e7108d0e6fb9cc1ade337933b521fa09b7f1a20ad53906265e777d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":sondage:show.html.twig"));

        // line 4
        echo "    <h1>Sondage</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sondage"]) ? $context["sondage"] : $this->getContext($context, "sondage")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sondage"]) ? $context["sondage"] : $this->getContext($context, "sondage")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Oui</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sondage"]) ? $context["sondage"] : $this->getContext($context, "sondage")), "oui", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Non</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sondage"]) ? $context["sondage"] : $this->getContext($context, "sondage")), "non", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Any</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sondage"]) ? $context["sondage"] : $this->getContext($context, "sondage")), "any", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["sondage"]) ? $context["sondage"] : $this->getContext($context, "sondage")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_cbe3f5bba2e7108d0e6fb9cc1ade337933b521fa09b7f1a20ad53906265e777d->leave($__internal_cbe3f5bba2e7108d0e6fb9cc1ade337933b521fa09b7f1a20ad53906265e777d_prof);

    }

    public function getTemplateName()
    {
        return ":sondage:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 41,  98 => 39,  92 => 36,  86 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Sondage</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ sondage.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ sondage.title }}</td>
            </tr>
            <tr>
                <th>Oui</th>
                <td>{{ sondage.oui }}</td>
            </tr>
            <tr>
                <th>Non</th>
                <td>{{ sondage.non }}</td>
            </tr>
            <tr>
                <th>Any</th>
                <td>{{ sondage.any }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_edit', { 'id': sondage.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":sondage:show.html.twig", "/var/www/html/sfdproject/app/Resources/views/sondage/show.html.twig");
    }
}
