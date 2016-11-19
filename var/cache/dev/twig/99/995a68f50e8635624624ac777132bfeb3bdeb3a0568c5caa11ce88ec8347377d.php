<?php

/* sfdBundle:Default:registration.html.twig */
class __TwigTemplate_daa1ba251e7bc4efdcfb4b91d2e9616d4bdafbf31621007adb6b5b42f882c180 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("sfdBundle::layout.html.twig", "sfdBundle:Default:registration.html.twig", 1);
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
        $__internal_627f8b107bd2276516da9e6b210855d4bb3864d85fbbd55c1ab3e3f50c2b5714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627f8b107bd2276516da9e6b210855d4bb3864d85fbbd55c1ab3e3f50c2b5714->enter($__internal_627f8b107bd2276516da9e6b210855d4bb3864d85fbbd55c1ab3e3f50c2b5714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sfdBundle:Default:registration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_627f8b107bd2276516da9e6b210855d4bb3864d85fbbd55c1ab3e3f50c2b5714->leave($__internal_627f8b107bd2276516da9e6b210855d4bb3864d85fbbd55c1ab3e3f50c2b5714_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d64501b7603293826f3850f920730e78ad2802afdd97542e55b268eb0a06f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d64501b7603293826f3850f920730e78ad2802afdd97542e55b268eb0a06f5c->enter($__internal_9d64501b7603293826f3850f920730e78ad2802afdd97542e55b268eb0a06f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sfdBundle:Default:registration.html.twig"));

        // line 3
        echo "<div class=\"h-top\" id=\"home\">
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_register");
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
            <p>Having hands on experience in creating innovative designs,I do offer design
                solutions which harness</p>
            <div class=\"sign-up\">
                <h3 class=\"tittle reg\">Personal Information <i class=\"glyphicon glyphicon-user\"></i></h3>
                <form action=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" method=\"POST\">

                <div class=\"sign-u\">
                    <div class=\"sign-up1\">
                        <h4 class=\"b\">Name* :</h4>
                    </div>
                    <div class=\"sign-up2\">
                            <input type=\"text\" class=\"text\" name=\"fos_user_registration_form[username]\" placeholder=\"Name\">

                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"sign-u\">
                    <div class=\"sign-up1\">
                        <h4 class=\"c\">Email Address* :</h4>
                    </div>
                    <div class=\"sign-up2\">
                            <input type=\"text\" class=\"text\" name=\"fos_user_registration_form[email]\" placeholder=\"Email Address\">

                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <h3 class=\"tittle reg\">Login Information <i class=\"glyphicon glyphicon-off\"></i></h3>
                <div class=\"sign-u\">
                    <div class=\"sign-up1\">
                        <h4 class=\"d\">Password* :</h4>
                    </div>
                    <div class=\"sign-up2\">
                            <input type=\"password\" name=\"fos_user_registration_form[plainPassword][first]\" class=\"Password\" placeholder=\"Password\" >

                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"sign-u\">
                    <div class=\"sign-up1\">
                        <h4>Confirm Password* :</h4>
                    </div>
                    <div class=\"sign-up2\">

                            <input type=\"password\" name=\"fos_user_registration_form[plainPassword][second]\" class=\"Password\" placeholder=\"Confirm Password\" >


                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                    <input type=\"submit\" name=\"_submit\" id=\"_submit\" value=\"Submit\">
                </form>
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
        
        $__internal_9d64501b7603293826f3850f920730e78ad2802afdd97542e55b268eb0a06f5c->leave($__internal_9d64501b7603293826f3850f920730e78ad2802afdd97542e55b268eb0a06f5c_prof);

    }

    public function getTemplateName()
    {
        return "sfdBundle:Default:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 35,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
            <li><a href={{ path('sfd_register') }} data-hover=\"Registration\">Registration</a></li>
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
            <p>Having hands on experience in creating innovative designs,I do offer design
                solutions which harness</p>
            <div class=\"sign-up\">
                <h3 class=\"tittle reg\">Personal Information <i class=\"glyphicon glyphicon-user\"></i></h3>
                <form action=\"{{ path('fos_user_registration_register') }}\" method=\"POST\">

                <div class=\"sign-u\">
                    <div class=\"sign-up1\">
                        <h4 class=\"b\">Name* :</h4>
                    </div>
                    <div class=\"sign-up2\">
                            <input type=\"text\" class=\"text\" name=\"fos_user_registration_form[username]\" placeholder=\"Name\">

                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"sign-u\">
                    <div class=\"sign-up1\">
                        <h4 class=\"c\">Email Address* :</h4>
                    </div>
                    <div class=\"sign-up2\">
                            <input type=\"text\" class=\"text\" name=\"fos_user_registration_form[email]\" placeholder=\"Email Address\">

                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <h3 class=\"tittle reg\">Login Information <i class=\"glyphicon glyphicon-off\"></i></h3>
                <div class=\"sign-u\">
                    <div class=\"sign-up1\">
                        <h4 class=\"d\">Password* :</h4>
                    </div>
                    <div class=\"sign-up2\">
                            <input type=\"password\" name=\"fos_user_registration_form[plainPassword][first]\" class=\"Password\" placeholder=\"Password\" >

                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"sign-u\">
                    <div class=\"sign-up1\">
                        <h4>Confirm Password* :</h4>
                    </div>
                    <div class=\"sign-up2\">

                            <input type=\"password\" name=\"fos_user_registration_form[plainPassword][second]\" class=\"Password\" placeholder=\"Confirm Password\" >


                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                    <input type=\"submit\" name=\"_submit\" id=\"_submit\" value=\"Submit\">
                </form>
            </div>
        </div>
        <!-- //register -->
        <!-- //login-page -->
            <div class=\"clearfix\"> </div>
            <!--/footer-->

        </div>
    <div class=\"clearfix\"> </div>
</div>
{% endblock %}", "sfdBundle:Default:registration.html.twig", "/var/www/html/sfdproject/src/sfdBundle/Resources/views/Default/registration.html.twig");
    }
}
