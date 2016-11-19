<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_87e178f8909e031f8021b2f281f2477a5a3d11cdc4ce8f31a9001277094ab7f6 extends Twig_Template
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
        $__internal_2f77af6a53cbd338ff1e6103d7228f96e555406f1d64c9b0e2e1ce4dde67cda8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f77af6a53cbd338ff1e6103d7228f96e555406f1d64c9b0e2e1ce4dde67cda8->enter($__internal_2f77af6a53cbd338ff1e6103d7228f96e555406f1d64c9b0e2e1ce4dde67cda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_2f77af6a53cbd338ff1e6103d7228f96e555406f1d64c9b0e2e1ce4dde67cda8->leave($__internal_2f77af6a53cbd338ff1e6103d7228f96e555406f1d64c9b0e2e1ce4dde67cda8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/sfdproject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
