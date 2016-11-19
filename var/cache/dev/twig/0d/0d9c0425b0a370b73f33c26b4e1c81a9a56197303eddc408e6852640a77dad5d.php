<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_95024df3b670a70b059c009ee83d6a0a0a0428e418280838a8bcebd4fda8b1b8 extends Twig_Template
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
        $__internal_c8e3964f91eb14cd27beb1a92c80b83f4579eb7c81cb54e35cefe2fc5023e067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e3964f91eb14cd27beb1a92c80b83f4579eb7c81cb54e35cefe2fc5023e067->enter($__internal_c8e3964f91eb14cd27beb1a92c80b83f4579eb7c81cb54e35cefe2fc5023e067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c8e3964f91eb14cd27beb1a92c80b83f4579eb7c81cb54e35cefe2fc5023e067->leave($__internal_c8e3964f91eb14cd27beb1a92c80b83f4579eb7c81cb54e35cefe2fc5023e067_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/sfdproject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
