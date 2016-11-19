<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e3e18bcf6915cd70166f2bd1854eb9760788a391145fb4a8165274c46f5bb502 extends Twig_Template
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
        $__internal_9dd3e573ce6a0c416ff87dfa74c04e4d1190b3af158212385c9d792f1a874eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd3e573ce6a0c416ff87dfa74c04e4d1190b3af158212385c9d792f1a874eae->enter($__internal_9dd3e573ce6a0c416ff87dfa74c04e4d1190b3af158212385c9d792f1a874eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9dd3e573ce6a0c416ff87dfa74c04e4d1190b3af158212385c9d792f1a874eae->leave($__internal_9dd3e573ce6a0c416ff87dfa74c04e4d1190b3af158212385c9d792f1a874eae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/sfdproject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
