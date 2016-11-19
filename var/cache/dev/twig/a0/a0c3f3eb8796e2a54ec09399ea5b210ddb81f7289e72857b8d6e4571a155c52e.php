<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6bf8acee36b64411360e0feca2a9591f6378ebca71d1a65dd98355d84ac08f3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d633ea7b2fb070b6d9bd674c49ebd09ca90d9a677ab5c1d5e5ab414e5eea48fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d633ea7b2fb070b6d9bd674c49ebd09ca90d9a677ab5c1d5e5ab414e5eea48fa->enter($__internal_d633ea7b2fb070b6d9bd674c49ebd09ca90d9a677ab5c1d5e5ab414e5eea48fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d633ea7b2fb070b6d9bd674c49ebd09ca90d9a677ab5c1d5e5ab414e5eea48fa->leave($__internal_d633ea7b2fb070b6d9bd674c49ebd09ca90d9a677ab5c1d5e5ab414e5eea48fa_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9fb12e83d6c252e5c11a55837353fd24284925cc484f47050a87e6089accfdd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb12e83d6c252e5c11a55837353fd24284925cc484f47050a87e6089accfdd7->enter($__internal_9fb12e83d6c252e5c11a55837353fd24284925cc484f47050a87e6089accfdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_9fb12e83d6c252e5c11a55837353fd24284925cc484f47050a87e6089accfdd7->leave($__internal_9fb12e83d6c252e5c11a55837353fd24284925cc484f47050a87e6089accfdd7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/sfdproject/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
