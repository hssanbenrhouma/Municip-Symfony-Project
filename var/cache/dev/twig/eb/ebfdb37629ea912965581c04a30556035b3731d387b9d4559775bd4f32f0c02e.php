<?php

/* sfdBundle:Default:login.html.twig */
class __TwigTemplate_7f51e47b32c90552fd1b505887e8ac65b68012f325b3193477be19fd4b277873 extends Twig_Template
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
        $__internal_9761cf993932f1bee43995af147595c66c3a0dfa9daae3f4136ff9de7077741a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9761cf993932f1bee43995af147595c66c3a0dfa9daae3f4136ff9de7077741a->enter($__internal_9761cf993932f1bee43995af147595c66c3a0dfa9daae3f4136ff9de7077741a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sfdBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9761cf993932f1bee43995af147595c66c3a0dfa9daae3f4136ff9de7077741a->leave($__internal_9761cf993932f1bee43995af147595c66c3a0dfa9daae3f4136ff9de7077741a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a17b8426ee57b6e1f8d414877f8dca8fe8ee521c2f08a120df96d0a9993597d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a17b8426ee57b6e1f8d414877f8dca8fe8ee521c2f08a120df96d0a9993597d->enter($__internal_0a17b8426ee57b6e1f8d414877f8dca8fe8ee521c2f08a120df96d0a9993597d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sfdBundle:Default:login.html.twig"));

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
        
        $__internal_0a17b8426ee57b6e1f8d414877f8dca8fe8ee521c2f08a120df96d0a9993597d->leave($__internal_0a17b8426ee57b6e1f8d414877f8dca8fe8ee521c2f08a120df96d0a9993597d_prof);

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
