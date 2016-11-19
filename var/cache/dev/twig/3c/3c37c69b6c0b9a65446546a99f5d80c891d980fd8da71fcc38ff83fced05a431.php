<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_027f26bd50d22f14923d3d45daf4450a4e544c19952aa4b09609924045b42b64 extends Twig_Template
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
        $__internal_78fa2e3f87edb805a6996c951bd313288e03953ad8cbc2fffcb172a5d45e6eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78fa2e3f87edb805a6996c951bd313288e03953ad8cbc2fffcb172a5d45e6eb4->enter($__internal_78fa2e3f87edb805a6996c951bd313288e03953ad8cbc2fffcb172a5d45e6eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_78fa2e3f87edb805a6996c951bd313288e03953ad8cbc2fffcb172a5d45e6eb4->leave($__internal_78fa2e3f87edb805a6996c951bd313288e03953ad8cbc2fffcb172a5d45e6eb4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/sfdproject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
