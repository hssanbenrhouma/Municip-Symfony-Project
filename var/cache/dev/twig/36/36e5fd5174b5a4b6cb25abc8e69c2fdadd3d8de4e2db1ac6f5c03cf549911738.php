<?php

/* sfdBundle:Default:services.html.twig */
class __TwigTemplate_bc33552be45fd6a1af28bcaa73a867fcb3c11417c2b6c47ef34efd7951239903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("sfdBundle::layout.html.twig", "sfdBundle:Default:services.html.twig", 1);
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
        $__internal_643e52c4b14ba613c9afa9ef2d4e718be598d58c25f0466b5263e48bbaca07d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643e52c4b14ba613c9afa9ef2d4e718be598d58c25f0466b5263e48bbaca07d6->enter($__internal_643e52c4b14ba613c9afa9ef2d4e718be598d58c25f0466b5263e48bbaca07d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sfdBundle:Default:services.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_643e52c4b14ba613c9afa9ef2d4e718be598d58c25f0466b5263e48bbaca07d6->leave($__internal_643e52c4b14ba613c9afa9ef2d4e718be598d58c25f0466b5263e48bbaca07d6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_08949d569b681c8ad96d04e29912bbfdec4c721a597f817b642d6ece9a0a7d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08949d569b681c8ad96d04e29912bbfdec4c721a597f817b642d6ece9a0a7d60->enter($__internal_08949d569b681c8ad96d04e29912bbfdec4c721a597f817b642d6ece9a0a7d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sfdBundle:Default:services.html.twig"));

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
                ";
        // line 10
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "                    <li><a href=";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo " data-hover=\"LOGOUT\">Logout</a></li>
                ";
        } else {
            // line 13
            echo "                    <li><a href=";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_login");
            echo " data-hover=\"Login\">Login</a></li>
                    <li><a href=";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo " data-hover=\"Registration\">Registration</a></li>
                ";
        }
        // line 16
        echo "
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
            <!--banner-section-->
            <div class=\"banner-section\">

                <!--//banner-->
                <!--/top-news-->
                <div class=\"top-news\">
                    <h3 class=\"tittle\">Services <i class=\"glyphicon glyphicon-alert\"></i></h3>
                    <div class=\"top-inner\">
                        <div class=\"col-md-6 top-text\">
                            <a href=\"single.html\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/pic2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                            <div class=\"ser\">
                                <h5 class=\"top\"><a href=\"single.html\">Consetetur sadipscing elit</a></h5>
                                <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                            </div>
                        </div>
                        <div class=\"col-md-6 top-text two\">
                            <a href=\"single.html\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/pic3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                            <div class=\"ser\">
                                <h5 class=\"top\"><a href=\"single.html\">Consetetur sadipscing elit</a></h5>
                                <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                            </div>
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>

                </div>
                <!--//top-news-->
            </div>

            <div class=\"clearfix\"> </div>
            <!--/footer-->

        </div>
        <div class=\"clearfix\"> </div>
    </div>
";
        
        $__internal_08949d569b681c8ad96d04e29912bbfdec4c721a597f817b642d6ece9a0a7d60->leave($__internal_08949d569b681c8ad96d04e29912bbfdec4c721a597f817b642d6ece9a0a7d60_prof);

    }

    public function getTemplateName()
    {
        return "sfdBundle:Default:services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 49,  107 => 42,  79 => 16,  74 => 14,  69 => 13,  63 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <li><a href={{ path('fos_user_security_logout') }} data-hover=\"LOGOUT\">Logout</a></li>
                {% else %}
                    <li><a href={{ path('sfd_login') }} data-hover=\"Login\">Login</a></li>
                    <li><a href={{ path('fos_user_registration_register') }} data-hover=\"Registration\">Registration</a></li>
                {% endif %}

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
            <!--banner-section-->
            <div class=\"banner-section\">

                <!--//banner-->
                <!--/top-news-->
                <div class=\"top-news\">
                    <h3 class=\"tittle\">Services <i class=\"glyphicon glyphicon-alert\"></i></h3>
                    <div class=\"top-inner\">
                        <div class=\"col-md-6 top-text\">
                            <a href=\"single.html\"><img src=\"{{ asset('images/pic2.jpg') }}\" class=\"img-responsive\" alt=\"\"></a>
                            <div class=\"ser\">
                                <h5 class=\"top\"><a href=\"single.html\">Consetetur sadipscing elit</a></h5>
                                <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                            </div>
                        </div>
                        <div class=\"col-md-6 top-text two\">
                            <a href=\"single.html\"><img src=\"{{ asset('images/pic3.jpg') }}\" class=\"img-responsive\" alt=\"\"></a>
                            <div class=\"ser\">
                                <h5 class=\"top\"><a href=\"single.html\">Consetetur sadipscing elit</a></h5>
                                <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                            </div>
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>

                </div>
                <!--//top-news-->
            </div>

            <div class=\"clearfix\"> </div>
            <!--/footer-->

        </div>
        <div class=\"clearfix\"> </div>
    </div>
{% endblock %}", "sfdBundle:Default:services.html.twig", "/var/www/html/sfdproject/src/sfdBundle/Resources/views/Default/services.html.twig");
    }
}
