<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_c34df20499cf58137b050608c85de1cbcc988b445cc3f7b76ac068b8f966744f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("sfdBundle::layout.html.twig", "FOSUserBundle:Registration:register_content.html.twig", 1);
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
        $__internal_dfa0fd5ab6d1fdffa839c5bc162d036dc361dbd7aa8033bb8ea18c18c308360e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa0fd5ab6d1fdffa839c5bc162d036dc361dbd7aa8033bb8ea18c18c308360e->enter($__internal_dfa0fd5ab6d1fdffa839c5bc162d036dc361dbd7aa8033bb8ea18c18c308360e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfa0fd5ab6d1fdffa839c5bc162d036dc361dbd7aa8033bb8ea18c18c308360e->leave($__internal_dfa0fd5ab6d1fdffa839c5bc162d036dc361dbd7aa8033bb8ea18c18c308360e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0254c71da1295b5d85349195368a17f8922da289cb5e0e2a38aefc829e96c0c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0254c71da1295b5d85349195368a17f8922da289cb5e0e2a38aefc829e96c0c6->enter($__internal_0254c71da1295b5d85349195368a17f8922da289cb5e0e2a38aefc829e96c0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 3
        echo "    <div class=\"h-top\" id=\"home\">
        <div class=\"top-header\">
            <ul class=\"cl-effect-16 top-nag\">
                <li><a href=";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_services");
        echo " data-hover=\"SERVICES\">Services</a></li>
                <li><a href=";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_events");
        echo " data-hover=\"EVENTS\">Events</a></li>
                <li><a href=";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_news");
        echo " data-hover=\"NEWS\">News</a></li>
                <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_jobs");
        echo "\" data-hover=\"JOBS\">jobs</a></li>
                <li><a href=";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_login");
        echo " data-hover=\"Login\">Login</a></li>
                <li><a href=";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo " data-hover=\"Registration\">Registration</a></li>
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
            <!-- register -->
            <div class=\"sign-up-form\">
                <h3 class=\"tittle\">Registration <i class=\"glyphicon glyphicon-file\"></i></h3>

                <div class=\"sign-up\">
                    <h3 class=\"tittle reg\">Personal Information <i class=\"glyphicon glyphicon-user\"></i></h3>
                    ";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
                    <div class=\"sign-u\">
                        <div class=\"sign-up1\">
                            <h4 class=\"b\">Name* :</h4>
                        </div>
                        <div class=\"sign-up2\">
                        ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("placeholder" => "username")));
        echo "
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <div class=\"sign-u\">
                        <div class=\"sign-up1\">
                            <h4 class=\"c\">Email Address* :</h4>
                        </div>
                        <div class=\"sign-up2\">
                        ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => "Email")));
        echo "
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <br>
                    <h3 class=\"tittle reg\">Login Information <i class=\"glyphicon glyphicon-off\"></i></h3>
                    <div class=\"sign-u\">
                        <div class=\"sign-up1\">
                            <h4 class=\"d\">Password* :</h4>
                        </div>
                        <div class=\"sign-up2\">
                        ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("placeholder" => "password")));
        echo "
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <div class=\"sign-u\">
                        <div class=\"sign-up1\">
                            <h4>Confirm Password* :</h4>
                        </div>
                        <div class=\"sign-up2\">
                        ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("placeholder" => "confirm password")));
        echo "
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                        <input type=\"submit\" value=\"Registration\" />
                    ";
        // line 74
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>

            <!-- //register -->
            <!-- //login-page -->
            <div class=\"clearfix\"> </div>
            <!--/footer-->

        </div>
        <div class=\"clearfix\"> </div>
    </div>
";
        
        $__internal_0254c71da1295b5d85349195368a17f8922da289cb5e0e2a38aefc829e96c0c6->leave($__internal_0254c71da1295b5d85349195368a17f8922da289cb5e0e2a38aefc829e96c0c6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 74,  138 => 69,  126 => 60,  112 => 49,  100 => 40,  91 => 34,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
                <li><a href={{ path('sfd_services') }} data-hover=\"SERVICES\">Services</a></li>
                <li><a href={{ path('sfd_events') }} data-hover=\"EVENTS\">Events</a></li>
                <li><a href={{ path('sfd_news') }} data-hover=\"NEWS\">News</a></li>
                <li><a href=\"{{ path('sfd_jobs') }}\" data-hover=\"JOBS\">jobs</a></li>
                <li><a href={{ path('sfd_login') }} data-hover=\"Login\">Login</a></li>
                <li><a href={{ path('fos_user_registration_register') }} data-hover=\"Registration\">Registration</a></li>
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
            <!-- register -->
            <div class=\"sign-up-form\">
                <h3 class=\"tittle\">Registration <i class=\"glyphicon glyphicon-file\"></i></h3>

                <div class=\"sign-up\">
                    <h3 class=\"tittle reg\">Personal Information <i class=\"glyphicon glyphicon-user\"></i></h3>
                    {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
                    <div class=\"sign-u\">
                        <div class=\"sign-up1\">
                            <h4 class=\"b\">Name* :</h4>
                        </div>
                        <div class=\"sign-up2\">
                        {{ form_widget(form.username, { 'attr': {'placeholder': 'username'} }) }}
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <div class=\"sign-u\">
                        <div class=\"sign-up1\">
                            <h4 class=\"c\">Email Address* :</h4>
                        </div>
                        <div class=\"sign-up2\">
                        {{ form_widget(form.email, { 'attr': {'placeholder': 'Email'} }) }}
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <br>
                    <h3 class=\"tittle reg\">Login Information <i class=\"glyphicon glyphicon-off\"></i></h3>
                    <div class=\"sign-u\">
                        <div class=\"sign-up1\">
                            <h4 class=\"d\">Password* :</h4>
                        </div>
                        <div class=\"sign-up2\">
                        {{ form_widget(form.plainPassword.first, { 'attr': {'placeholder': 'password'} }) }}
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <div class=\"sign-u\">
                        <div class=\"sign-up1\">
                            <h4>Confirm Password* :</h4>
                        </div>
                        <div class=\"sign-up2\">
                        {{ form_widget(form.plainPassword.second , { 'attr': {'placeholder': 'confirm password'} }) }}
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                        <input type=\"submit\" value=\"Registration\" />
                    {{ form_end(form) }}
                </div>
            </div>

            <!-- //register -->
            <!-- //login-page -->
            <div class=\"clearfix\"> </div>
            <!--/footer-->

        </div>
        <div class=\"clearfix\"> </div>
    </div>
{% endblock %}

", "FOSUserBundle:Registration:register_content.html.twig", "/var/www/html/sfdproject/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}
