<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_3a0384cbc952600c7e739abaab5beadfb89c22b4d5da90ddafc561ad8eec8a84 extends Twig_Template
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
        $__internal_00568183ec972299fa2ee0872737bd8404251d596d69ac0e669cdd075cc4bf86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00568183ec972299fa2ee0872737bd8404251d596d69ac0e669cdd075cc4bf86->enter($__internal_00568183ec972299fa2ee0872737bd8404251d596d69ac0e669cdd075cc4bf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_00568183ec972299fa2ee0872737bd8404251d596d69ac0e669cdd075cc4bf86->leave($__internal_00568183ec972299fa2ee0872737bd8404251d596d69ac0e669cdd075cc4bf86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/sfdproject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
