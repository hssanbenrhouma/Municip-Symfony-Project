<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_3a6d619391ac1e8264012072fb706706cf4ac556ad2ebd5b01d87a1a843626ad extends Twig_Template
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
        $__internal_2785f62197ba79a9d1975b1416dbadec315fb454e82918d922803c0aa0c6ca73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2785f62197ba79a9d1975b1416dbadec315fb454e82918d922803c0aa0c6ca73->enter($__internal_2785f62197ba79a9d1975b1416dbadec315fb454e82918d922803c0aa0c6ca73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_2785f62197ba79a9d1975b1416dbadec315fb454e82918d922803c0aa0c6ca73->leave($__internal_2785f62197ba79a9d1975b1416dbadec315fb454e82918d922803c0aa0c6ca73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/sfdproject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
