<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_06fa035cdfad18a990ce1a41d236abf9c606cffd0ddad626877d7240a562a235 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d6711ddb673617ac33fc699c670211567224d8e9f00160f8423a29e2d202c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6711ddb673617ac33fc699c670211567224d8e9f00160f8423a29e2d202c27->enter($__internal_8d6711ddb673617ac33fc699c670211567224d8e9f00160f8423a29e2d202c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8d6711ddb673617ac33fc699c670211567224d8e9f00160f8423a29e2d202c27->leave($__internal_8d6711ddb673617ac33fc699c670211567224d8e9f00160f8423a29e2d202c27_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/sfdproject/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
