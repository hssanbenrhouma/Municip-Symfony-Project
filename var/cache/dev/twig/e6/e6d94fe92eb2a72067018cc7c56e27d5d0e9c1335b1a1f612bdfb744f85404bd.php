<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_67220f523dfacf6a675f18c64fe09e7e904653366104b9412dcdaf9c918c5522 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c8500b152decb24b3b3c12de55bf038cbe95c5f53c3f0da2f45c62ca60ba08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8500b152decb24b3b3c12de55bf038cbe95c5f53c3f0da2f45c62ca60ba08d->enter($__internal_9c8500b152decb24b3b3c12de55bf038cbe95c5f53c3f0da2f45c62ca60ba08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c8500b152decb24b3b3c12de55bf038cbe95c5f53c3f0da2f45c62ca60ba08d->leave($__internal_9c8500b152decb24b3b3c12de55bf038cbe95c5f53c3f0da2f45c62ca60ba08d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c8fe61a6744880575250472a0b10c737b60690092bd9cefe715adb9629fa7c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8fe61a6744880575250472a0b10c737b60690092bd9cefe715adb9629fa7c0->enter($__internal_8c8fe61a6744880575250472a0b10c737b60690092bd9cefe715adb9629fa7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8c8fe61a6744880575250472a0b10c737b60690092bd9cefe715adb9629fa7c0->leave($__internal_8c8fe61a6744880575250472a0b10c737b60690092bd9cefe715adb9629fa7c0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_79d13dc81161f28226bfafe4948967e004fa011661321539ca76b27e06fd12a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d13dc81161f28226bfafe4948967e004fa011661321539ca76b27e06fd12a4->enter($__internal_79d13dc81161f28226bfafe4948967e004fa011661321539ca76b27e06fd12a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_79d13dc81161f28226bfafe4948967e004fa011661321539ca76b27e06fd12a4->leave($__internal_79d13dc81161f28226bfafe4948967e004fa011661321539ca76b27e06fd12a4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b868b0234458c6cac80f58a3f5df904d344ee06b072b54b708901699e69acb3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b868b0234458c6cac80f58a3f5df904d344ee06b072b54b708901699e69acb3f->enter($__internal_b868b0234458c6cac80f58a3f5df904d344ee06b072b54b708901699e69acb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b868b0234458c6cac80f58a3f5df904d344ee06b072b54b708901699e69acb3f->leave($__internal_b868b0234458c6cac80f58a3f5df904d344ee06b072b54b708901699e69acb3f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/sfdproject/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
