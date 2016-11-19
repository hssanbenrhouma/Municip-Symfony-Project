<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_83c0abefd0396cc2ea766a545b0eb0cfd257f3d45002f0faa5e410fc41ef7f0b extends Twig_Template
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
        $__internal_7ff9714bd76554fcf6b61674e68c6f33375e77f2609ebcecbb4a96022764c6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff9714bd76554fcf6b61674e68c6f33375e77f2609ebcecbb4a96022764c6c8->enter($__internal_7ff9714bd76554fcf6b61674e68c6f33375e77f2609ebcecbb4a96022764c6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_7ff9714bd76554fcf6b61674e68c6f33375e77f2609ebcecbb4a96022764c6c8->leave($__internal_7ff9714bd76554fcf6b61674e68c6f33375e77f2609ebcecbb4a96022764c6c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/sfdproject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
