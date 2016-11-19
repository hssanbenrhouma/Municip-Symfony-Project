<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_680cc31e14485e26a78f5332d5f86e449d7449d04cf8d4756eec1ae61117ce14 extends Twig_Template
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
        $__internal_7eb55369db88458ad6c459be9a6c3465eda7336b5ca64d78d08fb76802206616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb55369db88458ad6c459be9a6c3465eda7336b5ca64d78d08fb76802206616->enter($__internal_7eb55369db88458ad6c459be9a6c3465eda7336b5ca64d78d08fb76802206616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7eb55369db88458ad6c459be9a6c3465eda7336b5ca64d78d08fb76802206616->leave($__internal_7eb55369db88458ad6c459be9a6c3465eda7336b5ca64d78d08fb76802206616_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/sfdproject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
