<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_da6001889948e5854baad51c11accca3a3384a09ae56dab8008b926a69392a42 extends Twig_Template
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
        $__internal_6ee1e750b44f3796f7155f74686c9bf8ab417bafe22aa0b00304edae21eca91b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee1e750b44f3796f7155f74686c9bf8ab417bafe22aa0b00304edae21eca91b->enter($__internal_6ee1e750b44f3796f7155f74686c9bf8ab417bafe22aa0b00304edae21eca91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_6ee1e750b44f3796f7155f74686c9bf8ab417bafe22aa0b00304edae21eca91b->leave($__internal_6ee1e750b44f3796f7155f74686c9bf8ab417bafe22aa0b00304edae21eca91b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/sfdproject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
