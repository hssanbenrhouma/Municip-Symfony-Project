<?php

/* sfdBundle:Default:newsondage.html.twig */
class __TwigTemplate_726732ef50eb127f510904f345ac4b5b562cb1a08cffc89fecb83fe9b8c2e327 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("sfdBundle::layout.html.twig", "sfdBundle:Default:newsondage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "sfdBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2adb6a094a83010524658da52dc73ae1d5ec55e571f10585f369194a732cf0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2adb6a094a83010524658da52dc73ae1d5ec55e571f10585f369194a732cf0a3->enter($__internal_2adb6a094a83010524658da52dc73ae1d5ec55e571f10585f369194a732cf0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sfdBundle:Default:newsondage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2adb6a094a83010524658da52dc73ae1d5ec55e571f10585f369194a732cf0a3->leave($__internal_2adb6a094a83010524658da52dc73ae1d5ec55e571f10585f369194a732cf0a3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a35667bec01f41bf6805f3fd824fef7b4bd589adfe5a4aa1ab3c45f2bb103015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35667bec01f41bf6805f3fd824fef7b4bd589adfe5a4aa1ab3c45f2bb103015->enter($__internal_a35667bec01f41bf6805f3fd824fef7b4bd589adfe5a4aa1ab3c45f2bb103015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sfdBundle:Default:newsondage.html.twig"));

        // line 3
        echo "    <div class=\"h-top\" id=\"home\">
        <div class=\"top-header\">
            <ul class=\"cl-effect-16 top-nag\">
                <li><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_adminpage");
        echo "\" data-hover=\"USERS\">Users</a></li>
                <li><a  href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_events");
        echo "\" data-hover=\"EVENTS\">Events</a></li>
                <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_news");
        echo "\" data-hover=\"NEWS\">News</a></li>
                <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_jobs");
        echo "\" data-hover=\"JOBS\">jobs</a></li>
                <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_sondage");
        echo "\" data-hover=\"SONDAGE\">SONDAGE</a></li>
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_requests");
        echo "\" data-hover=\"REQUESTS\">Requests</a></li>
                <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_reclamations");
        echo "\" data-hover=\"RECLAMATIONS\">Reclamations</a></li>
                <li><a href=";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo " data-hover=\"LOGOUT\">Logout</a></li>

            </ul>
            <div class=\"search-box\">
                <div class=\"b-search\">
                    <form>
                        <input type=\"text\" value=\"Search\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Search';}\">
                        <input type=\"submit\" value=\"\">
                    </form>
                </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>
    </div>
    <div class=\"full\">
        <div class=\"col-md-9 main\">
            <!--grids-->
            <div class=\"grid-section\">
                <h3 class=\"tittle\">Ajouter sondage <i class=\"glyphicon glyphicon-stop\"></i></h3>
                ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => ".col-md-4")));
        echo "
                <br>
                <br>
                <div class=\"panel-heading\"><input type=\"submit\" value=\"Ajouter\" class=\"btn-info\" /></div>
                ";
        // line 38
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>


";
        
        $__internal_a35667bec01f41bf6805f3fd824fef7b4bd589adfe5a4aa1ab3c45f2bb103015->leave($__internal_a35667bec01f41bf6805f3fd824fef7b4bd589adfe5a4aa1ab3c45f2bb103015_prof);

    }

    public function getTemplateName()
    {
        return "sfdBundle:Default:newsondage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 38,  100 => 34,  96 => 33,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"sfdBundle::layout.html.twig\" %}
{% block body %}
    <div class=\"h-top\" id=\"home\">
        <div class=\"top-header\">
            <ul class=\"cl-effect-16 top-nag\">
                <li><a href=\"{{ path('sfd_adminpage') }}\" data-hover=\"USERS\">Users</a></li>
                <li><a  href=\"{{ path('sfd_events') }}\" data-hover=\"EVENTS\">Events</a></li>
                <li><a href=\"{{ path('sfd_news') }}\" data-hover=\"NEWS\">News</a></li>
                <li><a href=\"{{ path('sfd_jobs') }}\" data-hover=\"JOBS\">jobs</a></li>
                <li><a href=\"{{ path('sfd_sondage') }}\" data-hover=\"SONDAGE\">SONDAGE</a></li>
                <li><a href=\"{{ path('sfd_requests') }}\" data-hover=\"REQUESTS\">Requests</a></li>
                <li><a href=\"{{ path('sfd_reclamations') }}\" data-hover=\"RECLAMATIONS\">Reclamations</a></li>
                <li><a href={{ path('fos_user_security_logout') }} data-hover=\"LOGOUT\">Logout</a></li>

            </ul>
            <div class=\"search-box\">
                <div class=\"b-search\">
                    <form>
                        <input type=\"text\" value=\"Search\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Search';}\">
                        <input type=\"submit\" value=\"\">
                    </form>
                </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>
    </div>
    <div class=\"full\">
        <div class=\"col-md-9 main\">
            <!--grids-->
            <div class=\"grid-section\">
                <h3 class=\"tittle\">Ajouter sondage <i class=\"glyphicon glyphicon-stop\"></i></h3>
                {{ form_start(form) }}
                {{ form_widget(form , { 'attr': {'class': '.col-md-4'} })}}
                <br>
                <br>
                <div class=\"panel-heading\"><input type=\"submit\" value=\"Ajouter\" class=\"btn-info\" /></div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>


{% endblock %}
", "sfdBundle:Default:newsondage.html.twig", "/var/www/html/sfdproject/src/sfdBundle/Resources/views/Default/newsondage.html.twig");
    }
}
