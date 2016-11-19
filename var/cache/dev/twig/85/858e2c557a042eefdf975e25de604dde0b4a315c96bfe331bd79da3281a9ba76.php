<?php

/* sfdBundle:Default:events.html.twig */
class __TwigTemplate_36ec576e5a8167ef87ed456a1055336415fc32e0017401261c56a466fc433b01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("sfdBundle::layout.html.twig", "sfdBundle:Default:events.html.twig", 1);
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
        $__internal_bc32a682eb029c80f84acd90e0dba3126afbb710aadf8c2f144a17dadfe28615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc32a682eb029c80f84acd90e0dba3126afbb710aadf8c2f144a17dadfe28615->enter($__internal_bc32a682eb029c80f84acd90e0dba3126afbb710aadf8c2f144a17dadfe28615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sfdBundle:Default:events.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc32a682eb029c80f84acd90e0dba3126afbb710aadf8c2f144a17dadfe28615->leave($__internal_bc32a682eb029c80f84acd90e0dba3126afbb710aadf8c2f144a17dadfe28615_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_325ad505c7cdb5196420c886a7eb34aeb63436240476d48027a41b534a0740c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_325ad505c7cdb5196420c886a7eb34aeb63436240476d48027a41b534a0740c7->enter($__internal_325ad505c7cdb5196420c886a7eb34aeb63436240476d48027a41b534a0740c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sfdBundle:Default:events.html.twig"));

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
            ";
        // line 10
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "                <li><a href=";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo " data-hover=\"LOGOUT\">Logout</a></li>
            ";
        } else {
            // line 13
            echo "                <li><a href=";
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

<br>
    <br>
    <br>

    <div class=\"container\">

        <!-- Blog Post Row -->
        <div class=\"row\">

            <div class=\"col-md-5\">
                <a href=\"blog-post.html\">
                    <img class=\"img-responsive img-hover\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/blog1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-6\">
                <h3>
                    <a href=\"blog-post.html\">Blog Post Title</a>
                </h3>
                <ul class=\"post-meta\">
                    <li><i class=\"fa fa-user\"></i> By <a href=\"#\">Osahan</a></li>
                    <li><i class=\"fa fa-clock-o\"></i> Posted on August 28, 2016 at 10:00 PM</li>
                    <li><i class=\"fa fa-tag\"></i> <a href=\"#\">WordPress</a>, <a href=\"#\">Graphic</a></li>
                    <li><i class=\"fa fa-comment-o\"></i> <a href=\"#\">4 Comments</a></li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <a class=\"btn btn-primary\" href=\"blog-post.html\">Read More <i class=\"fa fa-angle-right\"></i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Blog Post Row -->
        <div class=\"row\">

            <div class=\"col-md-5\">
                <a href=\"blog-post.html\">
                    <img class=\"img-responsive img-hover\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/blog1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-6\">
                <h3><a href=\"blog-post.html\">Blog Post Title</a>
                </h3>
                <ul class=\"post-meta\">
                    <li><i class=\"fa fa-user\"></i> By <a href=\"#\">Osahan</a></li>
                    <li><i class=\"fa fa-clock-o\"></i> Posted on August 28, 2016 at 10:00 PM</li>
                    <li><i class=\"fa fa-tag\"></i> <a href=\"#\">WordPress</a>, <a href=\"#\">Graphic</a></li>
                    <li><i class=\"fa fa-comment-o\"></i> <a href=\"#\">4 Comments</a></li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <a class=\"btn btn-primary\" href=\"blog-post.html\">Read More <i class=\"fa fa-angle-right\"></i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Blog Post Row -->
        <div class=\"row\">

            <div class=\"col-md-5\">
                <a href=\"blog-post.html\">
                    <img class=\"img-responsive img-hover\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/blog1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-6\">
                <h3><a href=\"blog-post.html\">Blog Post Title</a>
                </h3>
                <ul class=\"post-meta\">
                    <li><i class=\"fa fa-user\"></i> By <a href=\"#\">Osahan</a></li>
                    <li><i class=\"fa fa-clock-o\"></i> Posted on August 28, 2016 at 10:00 PM</li>
                    <li><i class=\"fa fa-tag\"></i> <a href=\"#\">WordPress</a>, <a href=\"#\">Graphic</a></li>
                    <li><i class=\"fa fa-comment-o\"></i> <a href=\"#\">4 Comments</a></li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <a class=\"btn btn-primary\" href=\"blog-post.html\">Read More <i class=\"fa fa-angle-right\"></i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pager -->
        <div class=\"row\">
            <ul class=\"pager\">
                <li class=\"previous\"><a href=\"#\">&larr; Older</a>
                </li>
                <li class=\"next\"><a href=\"#\">Newer &rarr;</a>
                </li>
            </ul>
        </div>
        <!-- /.row -->
    </div>
";
        
        $__internal_325ad505c7cdb5196420c886a7eb34aeb63436240476d48027a41b534a0740c7->leave($__internal_325ad505c7cdb5196420c886a7eb34aeb63436240476d48027a41b534a0740c7_prof);

    }

    public function getTemplateName()
    {
        return "sfdBundle:Default:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 93,  136 => 68,  107 => 42,  79 => 16,  74 => 14,  69 => 13,  63 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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

<br>
    <br>
    <br>

    <div class=\"container\">

        <!-- Blog Post Row -->
        <div class=\"row\">

            <div class=\"col-md-5\">
                <a href=\"blog-post.html\">
                    <img class=\"img-responsive img-hover\" src=\"{{ asset('osahan/images/blog1.jpg') }}\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-6\">
                <h3>
                    <a href=\"blog-post.html\">Blog Post Title</a>
                </h3>
                <ul class=\"post-meta\">
                    <li><i class=\"fa fa-user\"></i> By <a href=\"#\">Osahan</a></li>
                    <li><i class=\"fa fa-clock-o\"></i> Posted on August 28, 2016 at 10:00 PM</li>
                    <li><i class=\"fa fa-tag\"></i> <a href=\"#\">WordPress</a>, <a href=\"#\">Graphic</a></li>
                    <li><i class=\"fa fa-comment-o\"></i> <a href=\"#\">4 Comments</a></li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <a class=\"btn btn-primary\" href=\"blog-post.html\">Read More <i class=\"fa fa-angle-right\"></i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Blog Post Row -->
        <div class=\"row\">

            <div class=\"col-md-5\">
                <a href=\"blog-post.html\">
                    <img class=\"img-responsive img-hover\" src=\"{{ asset('osahan/images/blog1.jpg') }}\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-6\">
                <h3><a href=\"blog-post.html\">Blog Post Title</a>
                </h3>
                <ul class=\"post-meta\">
                    <li><i class=\"fa fa-user\"></i> By <a href=\"#\">Osahan</a></li>
                    <li><i class=\"fa fa-clock-o\"></i> Posted on August 28, 2016 at 10:00 PM</li>
                    <li><i class=\"fa fa-tag\"></i> <a href=\"#\">WordPress</a>, <a href=\"#\">Graphic</a></li>
                    <li><i class=\"fa fa-comment-o\"></i> <a href=\"#\">4 Comments</a></li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <a class=\"btn btn-primary\" href=\"blog-post.html\">Read More <i class=\"fa fa-angle-right\"></i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Blog Post Row -->
        <div class=\"row\">

            <div class=\"col-md-5\">
                <a href=\"blog-post.html\">
                    <img class=\"img-responsive img-hover\" src=\"{{ asset('osahan/images/blog1.jpg') }}\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-6\">
                <h3><a href=\"blog-post.html\">Blog Post Title</a>
                </h3>
                <ul class=\"post-meta\">
                    <li><i class=\"fa fa-user\"></i> By <a href=\"#\">Osahan</a></li>
                    <li><i class=\"fa fa-clock-o\"></i> Posted on August 28, 2016 at 10:00 PM</li>
                    <li><i class=\"fa fa-tag\"></i> <a href=\"#\">WordPress</a>, <a href=\"#\">Graphic</a></li>
                    <li><i class=\"fa fa-comment-o\"></i> <a href=\"#\">4 Comments</a></li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <a class=\"btn btn-primary\" href=\"blog-post.html\">Read More <i class=\"fa fa-angle-right\"></i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pager -->
        <div class=\"row\">
            <ul class=\"pager\">
                <li class=\"previous\"><a href=\"#\">&larr; Older</a>
                </li>
                <li class=\"next\"><a href=\"#\">Newer &rarr;</a>
                </li>
            </ul>
        </div>
        <!-- /.row -->
    </div>
{% endblock %}", "sfdBundle:Default:events.html.twig", "/var/www/html/sfdproject/src/sfdBundle/Resources/views/Default/events.html.twig");
    }
}
