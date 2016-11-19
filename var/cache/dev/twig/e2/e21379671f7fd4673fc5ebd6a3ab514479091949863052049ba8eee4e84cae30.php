<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_cb186e7f7267bbfabe30a127cdbeead0e562e17a11ca8960bdabf1196cabedf1 extends Twig_Template
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
        $__internal_ecf02c89de2ff1b4bf57eaeea96a721105c4bdc19d0bbe292ce54d5ffbf1494f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf02c89de2ff1b4bf57eaeea96a721105c4bdc19d0bbe292ce54d5ffbf1494f->enter($__internal_ecf02c89de2ff1b4bf57eaeea96a721105c4bdc19d0bbe292ce54d5ffbf1494f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ecf02c89de2ff1b4bf57eaeea96a721105c4bdc19d0bbe292ce54d5ffbf1494f->leave($__internal_ecf02c89de2ff1b4bf57eaeea96a721105c4bdc19d0bbe292ce54d5ffbf1494f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/sfdproject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
