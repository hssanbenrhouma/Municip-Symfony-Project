<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d95c6881f5a74aa4cd082cf8c2322f45b71f47feb6c0227b909344fc01277641 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9c5826cb19b02088fded53889d418a8343ab44d3224a8ff4ba17c68dba76818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c5826cb19b02088fded53889d418a8343ab44d3224a8ff4ba17c68dba76818->enter($__internal_a9c5826cb19b02088fded53889d418a8343ab44d3224a8ff4ba17c68dba76818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9c5826cb19b02088fded53889d418a8343ab44d3224a8ff4ba17c68dba76818->leave($__internal_a9c5826cb19b02088fded53889d418a8343ab44d3224a8ff4ba17c68dba76818_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fb41b183f0101be3560809e8e2eaee06415614ad25b01f493b9e81a3359c3f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb41b183f0101be3560809e8e2eaee06415614ad25b01f493b9e81a3359c3f2b->enter($__internal_fb41b183f0101be3560809e8e2eaee06415614ad25b01f493b9e81a3359c3f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_fb41b183f0101be3560809e8e2eaee06415614ad25b01f493b9e81a3359c3f2b->leave($__internal_fb41b183f0101be3560809e8e2eaee06415614ad25b01f493b9e81a3359c3f2b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6a62de2640e35b7fa0a808e566c404e5017e08ee4cafdfd8d7f29c4230bbe28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a62de2640e35b7fa0a808e566c404e5017e08ee4cafdfd8d7f29c4230bbe28a->enter($__internal_6a62de2640e35b7fa0a808e566c404e5017e08ee4cafdfd8d7f29c4230bbe28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6a62de2640e35b7fa0a808e566c404e5017e08ee4cafdfd8d7f29c4230bbe28a->leave($__internal_6a62de2640e35b7fa0a808e566c404e5017e08ee4cafdfd8d7f29c4230bbe28a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3821980aaa1e30a4e598a77cd0475e13f7e56de7d47ccff02f8414dfba67df6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3821980aaa1e30a4e598a77cd0475e13f7e56de7d47ccff02f8414dfba67df6f->enter($__internal_3821980aaa1e30a4e598a77cd0475e13f7e56de7d47ccff02f8414dfba67df6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3821980aaa1e30a4e598a77cd0475e13f7e56de7d47ccff02f8414dfba67df6f->leave($__internal_3821980aaa1e30a4e598a77cd0475e13f7e56de7d47ccff02f8414dfba67df6f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/sfdproject/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
