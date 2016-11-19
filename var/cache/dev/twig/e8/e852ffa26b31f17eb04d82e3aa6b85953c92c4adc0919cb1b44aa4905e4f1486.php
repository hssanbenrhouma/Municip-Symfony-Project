<?php

/* sfdBundle:Default:event.html.twig */
class __TwigTemplate_2137c306888678399e13b9a97022b351eb5490c4c0a0e29ff5d8ff71efa6aaca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("sfdBundle::layout.html.twig", "sfdBundle:Default:event.html.twig", 1);
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
        $__internal_fdfe054279d7cf8fd447bf7432c716d755e7862122ba3d7c1f4055729ee7fcfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdfe054279d7cf8fd447bf7432c716d755e7862122ba3d7c1f4055729ee7fcfc->enter($__internal_fdfe054279d7cf8fd447bf7432c716d755e7862122ba3d7c1f4055729ee7fcfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sfdBundle:Default:event.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdfe054279d7cf8fd447bf7432c716d755e7862122ba3d7c1f4055729ee7fcfc->leave($__internal_fdfe054279d7cf8fd447bf7432c716d755e7862122ba3d7c1f4055729ee7fcfc_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_042ca0e65897586a2ada83beffe1265e2a410044705b482a61b6c0d3940185d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042ca0e65897586a2ada83beffe1265e2a410044705b482a61b6c0d3940185d7->enter($__internal_042ca0e65897586a2ada83beffe1265e2a410044705b482a61b6c0d3940185d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sfdBundle:Default:event.html.twig"));

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
        echo " data-hover=\"About\">Events</a></li>
            <li><a href=";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_news");
        echo " data-hover=\"SERVICES\">News</a></li>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_jobs ");
        echo "\" data-hover=\"SERVICES\">jobs</a></li>
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
<div class=\"full\">

    <div class=\"col-md-9 main\">
        <!--banner-section-->
        <div class=\"banner-section\">
<br>            <div class=\"single\">
                <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" />
                <div class=\"b-bottom\">
                    <h5 class=\"top\"><a href=\"#\">What turn out consetetur sadipscing elit</a></h5>
                    <p class=\"sub\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since,Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum has been the industry's standard dummy text ever since Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <p>On Aug 25 <a class=\"span_link\" href=\"#\"><span class=\"glyphicon glyphicon-comment\"></span>0 </a><a class=\"span_link\" href=\"#\"><span class=\"glyphicon glyphicon-eye-open\"></span>56 </a></p>

                </div>
            </div>
           <br>
            <br>
            <br>

            <div class=\"response\">
                <h4>Responses</h4>
                <div class=\"media response-info\">
                    <div class=\"media-left response-text-left\">
                        <h5><a href=\"#\">Username</a></h5>
                    </div>
                    <div class=\"media-body response-text-right\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <ul>
                            <li>Sep 21, 2015</li>
                        </ul>


                    </div>
                    <div class=\"clearfix\"> </div>
                </div>

            </div>
            <div class=\"coment-form\">
                <h4>Leave your comment</h4>
                <form>
                    <input type=\"text\" value=\"Name \" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Name';}\" required=\"\">
                    <input type=\"email\" value=\"Email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email (will not be published)*';}\" required=\"\">
                    <input type=\"text\" value=\"Website\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Website';}\" required=\"\">
                    <textarea onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Your Comment...';}\" required=\"\">Your Comment...</textarea>
                    <input type=\"submit\" value=\"Submit Comment\" >
                </form>
            </div>
            <div class=\"clearfix\"></div>
        </div>
        <!--//banner-->
        <!--//banner-section-->

    </div>
    <div class=\"clearfix\"> </div>
</div>
";
        
        $__internal_042ca0e65897586a2ada83beffe1265e2a410044705b482a61b6c0d3940185d7->leave($__internal_042ca0e65897586a2ada83beffe1265e2a410044705b482a61b6c0d3940185d7_prof);

    }

    public function getTemplateName()
    {
        return "sfdBundle:Default:event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 36,  79 => 16,  74 => 14,  69 => 13,  63 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
            <li><a href={{ path('sfd_events') }} data-hover=\"About\">Events</a></li>
            <li><a href={{ path('sfd_news') }} data-hover=\"SERVICES\">News</a></li>
            <li><a href=\"{{ path('sfd_jobs ') }}\" data-hover=\"SERVICES\">jobs</a></li>
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
<br>            <div class=\"single\">
                <img src=\"{{ asset('images/2.jpg') }}\" class=\"img-responsive\" alt=\"\" />
                <div class=\"b-bottom\">
                    <h5 class=\"top\"><a href=\"#\">What turn out consetetur sadipscing elit</a></h5>
                    <p class=\"sub\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since,Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum has been the industry's standard dummy text ever since Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <p>On Aug 25 <a class=\"span_link\" href=\"#\"><span class=\"glyphicon glyphicon-comment\"></span>0 </a><a class=\"span_link\" href=\"#\"><span class=\"glyphicon glyphicon-eye-open\"></span>56 </a></p>

                </div>
            </div>
           <br>
            <br>
            <br>

            <div class=\"response\">
                <h4>Responses</h4>
                <div class=\"media response-info\">
                    <div class=\"media-left response-text-left\">
                        <h5><a href=\"#\">Username</a></h5>
                    </div>
                    <div class=\"media-body response-text-right\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <ul>
                            <li>Sep 21, 2015</li>
                        </ul>


                    </div>
                    <div class=\"clearfix\"> </div>
                </div>

            </div>
            <div class=\"coment-form\">
                <h4>Leave your comment</h4>
                <form>
                    <input type=\"text\" value=\"Name \" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Name';}\" required=\"\">
                    <input type=\"email\" value=\"Email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email (will not be published)*';}\" required=\"\">
                    <input type=\"text\" value=\"Website\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Website';}\" required=\"\">
                    <textarea onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Your Comment...';}\" required=\"\">Your Comment...</textarea>
                    <input type=\"submit\" value=\"Submit Comment\" >
                </form>
            </div>
            <div class=\"clearfix\"></div>
        </div>
        <!--//banner-->
        <!--//banner-section-->

    </div>
    <div class=\"clearfix\"> </div>
</div>
{% endblock %}
", "sfdBundle:Default:event.html.twig", "/var/www/html/sfdproject/src/sfdBundle/Resources/views/Default/event.html.twig");
    }
}
