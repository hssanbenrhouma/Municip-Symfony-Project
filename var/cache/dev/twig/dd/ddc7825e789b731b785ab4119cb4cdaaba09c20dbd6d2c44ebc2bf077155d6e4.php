<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_281905436e8443432f16a477d7886e4444d89bcfbc7a1e62653b26ed3d777f89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_6074642995b11f987bb5b8c9e1cfb7ffb67b0daeda2e746c0ef6ff551108a38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6074642995b11f987bb5b8c9e1cfb7ffb67b0daeda2e746c0ef6ff551108a38f->enter($__internal_6074642995b11f987bb5b8c9e1cfb7ffb67b0daeda2e746c0ef6ff551108a38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6074642995b11f987bb5b8c9e1cfb7ffb67b0daeda2e746c0ef6ff551108a38f->leave($__internal_6074642995b11f987bb5b8c9e1cfb7ffb67b0daeda2e746c0ef6ff551108a38f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4b4276a373687a9eaab43ccc2563d9a281c57009dd41acd5df85240f119a6ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4276a373687a9eaab43ccc2563d9a281c57009dd41acd5df85240f119a6ca1->enter($__internal_4b4276a373687a9eaab43ccc2563d9a281c57009dd41acd5df85240f119a6ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_4b4276a373687a9eaab43ccc2563d9a281c57009dd41acd5df85240f119a6ca1->leave($__internal_4b4276a373687a9eaab43ccc2563d9a281c57009dd41acd5df85240f119a6ca1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_02fb6f43e664f95c7b3d224fb7a476acbd6ec88c0c6c8e61c8ae193a6f8ba7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02fb6f43e664f95c7b3d224fb7a476acbd6ec88c0c6c8e61c8ae193a6f8ba7be->enter($__internal_02fb6f43e664f95c7b3d224fb7a476acbd6ec88c0c6c8e61c8ae193a6f8ba7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_02fb6f43e664f95c7b3d224fb7a476acbd6ec88c0c6c8e61c8ae193a6f8ba7be->leave($__internal_02fb6f43e664f95c7b3d224fb7a476acbd6ec88c0c6c8e61c8ae193a6f8ba7be_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8fd6311892e71a053b22106fb4525caf4d387bab74ac3fab7ee9653daf2c9ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd6311892e71a053b22106fb4525caf4d387bab74ac3fab7ee9653daf2c9ea2->enter($__internal_8fd6311892e71a053b22106fb4525caf4d387bab74ac3fab7ee9653daf2c9ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8fd6311892e71a053b22106fb4525caf4d387bab74ac3fab7ee9653daf2c9ea2->leave($__internal_8fd6311892e71a053b22106fb4525caf4d387bab74ac3fab7ee9653daf2c9ea2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/sfdproject/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
