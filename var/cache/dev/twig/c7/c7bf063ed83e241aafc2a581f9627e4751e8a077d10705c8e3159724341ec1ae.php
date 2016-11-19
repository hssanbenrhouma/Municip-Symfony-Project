<?php

/* sfdBundle:Default:login.html.twig */
class __TwigTemplate_274556e208f359dc430389abb0a85069e03bb11d84e50b2a92f83e7e6e347c34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("sfdBundle::layout.html.twig", "sfdBundle:Default:login.html.twig", 1);
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
        $__internal_7691765cfccb364b915130533c29aff3ba4e952c9e5c9760b0d4b8f58bc22cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7691765cfccb364b915130533c29aff3ba4e952c9e5c9760b0d4b8f58bc22cd9->enter($__internal_7691765cfccb364b915130533c29aff3ba4e952c9e5c9760b0d4b8f58bc22cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sfdBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7691765cfccb364b915130533c29aff3ba4e952c9e5c9760b0d4b8f58bc22cd9->leave($__internal_7691765cfccb364b915130533c29aff3ba4e952c9e5c9760b0d4b8f58bc22cd9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_663f69efb3b0b40aa2b58b2b9d0e98bdcb78b402bfc2c109c809c6ca713f050d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663f69efb3b0b40aa2b58b2b9d0e98bdcb78b402bfc2c109c809c6ca713f050d->enter($__internal_663f69efb3b0b40aa2b58b2b9d0e98bdcb78b402bfc2c109c809c6ca713f050d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sfdBundle:Default:login.html.twig"));

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
        <!-- login-page -->
        <div class=\"login\">
            <div class=\"login-grids\">
                <div class=\"col-md-6 log\">
                    <h3 class=\"tittle\">Login <i class=\"glyphicon glyphicon-lock\"></i></h3>
                    <p>Welcome, please enter the following to continue.</p>
                    <form action=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"POST\">
                        <h5>User Name:</h5>
                        <input type=\"TEXT\" placeholder=\"Email Adress\" name=\"_username\" id=\"name\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required data-validation-required-message=\"Please enter your Email.\">
                        <h5>Password:</h5>
                        <input type=\"password\" name=\"_password\" placeholder=\"password\" id=\"password\" required data-validation-required-message=\"Please enter your password.\">
                        <input type=\"submit\" name=\"_submit\" id=\"_submit\" value=\"Login\">

                    </form>
                    <a href=\"#\">Forgot Password ?</a>
                </div>
                <div class=\"col-md-6 login-right\">
                    <h3 class=\"tittle\">New Registration <i class=\"glyphicon glyphicon-file\"></i></h3>
                    <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"hvr-bounce-to-bottom button\">Create An Account</a>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
        <!-- //login-page -->
        <div class=\"clearfix\"> </div>
        <!--/footer-->

    </div>
    <div class=\"clearfix\"> </div>
</div>
";
        
        $__internal_663f69efb3b0b40aa2b58b2b9d0e98bdcb78b402bfc2c109c809c6ca713f050d->leave($__internal_663f69efb3b0b40aa2b58b2b9d0e98bdcb78b402bfc2c109c809c6ca713f050d_prof);

    }

    public function getTemplateName()
    {
        return "sfdBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 46,  96 => 36,  91 => 34,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
        <!-- login-page -->
        <div class=\"login\">
            <div class=\"login-grids\">
                <div class=\"col-md-6 log\">
                    <h3 class=\"tittle\">Login <i class=\"glyphicon glyphicon-lock\"></i></h3>
                    <p>Welcome, please enter the following to continue.</p>
                    <form action=\"{{ path('fos_user_security_check') }}\" method=\"POST\">
                        <h5>User Name:</h5>
                        <input type=\"TEXT\" placeholder=\"Email Adress\" name=\"_username\" id=\"name\" value=\"{{ last_username }}\" required data-validation-required-message=\"Please enter your Email.\">
                        <h5>Password:</h5>
                        <input type=\"password\" name=\"_password\" placeholder=\"password\" id=\"password\" required data-validation-required-message=\"Please enter your password.\">
                        <input type=\"submit\" name=\"_submit\" id=\"_submit\" value=\"Login\">

                    </form>
                    <a href=\"#\">Forgot Password ?</a>
                </div>
                <div class=\"col-md-6 login-right\">
                    <h3 class=\"tittle\">New Registration <i class=\"glyphicon glyphicon-file\"></i></h3>
                    <a href=\"{{ path('fos_user_registration_register') }}\" class=\"hvr-bounce-to-bottom button\">Create An Account</a>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
        <!-- //login-page -->
        <div class=\"clearfix\"> </div>
        <!--/footer-->

    </div>
    <div class=\"clearfix\"> </div>
</div>
{% endblock %}", "sfdBundle:Default:login.html.twig", "/var/www/html/sfdproject/src/sfdBundle/Resources/views/Default/login.html.twig");
    }
}
