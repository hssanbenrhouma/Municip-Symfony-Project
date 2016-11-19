<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_f4c518d94e870396977c66f0609adb6d25a3ce44d51f253b402df28184381d27 extends Twig_Template
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
        $__internal_f72ab9a045de4fb9d7ee7cd64662e430d4483ae86788d9b55634b1575211d9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72ab9a045de4fb9d7ee7cd64662e430d4483ae86788d9b55634b1575211d9d4->enter($__internal_f72ab9a045de4fb9d7ee7cd64662e430d4483ae86788d9b55634b1575211d9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f72ab9a045de4fb9d7ee7cd64662e430d4483ae86788d9b55634b1575211d9d4->leave($__internal_f72ab9a045de4fb9d7ee7cd64662e430d4483ae86788d9b55634b1575211d9d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/sfdproject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
