<?php

/* sfdBundle:Default:services.html.twig */
class __TwigTemplate_90e1671bb9733799e56e3ae33b79e28d466aaaadc59732e52f70e0bba2b9c79a extends Twig_Template
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
        $__internal_6524eab0b9b2445f50547f4583ba839e75d1314c50d8b8fe507c2008ba3893bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6524eab0b9b2445f50547f4583ba839e75d1314c50d8b8fe507c2008ba3893bb->enter($__internal_6524eab0b9b2445f50547f4583ba839e75d1314c50d8b8fe507c2008ba3893bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sfdBundle:Default:services.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6524eab0b9b2445f50547f4583ba839e75d1314c50d8b8fe507c2008ba3893bb->leave($__internal_6524eab0b9b2445f50547f4583ba839e75d1314c50d8b8fe507c2008ba3893bb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_297b3c3790a478b03eb0ff9882b632b2b028d20077245189661a2526a5b537ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297b3c3790a478b03eb0ff9882b632b2b028d20077245189661a2526a5b537ae->enter($__internal_297b3c3790a478b03eb0ff9882b632b2b028d20077245189661a2526a5b537ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sfdBundle:Default:services.html.twig"));

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
    <div class=\"container\">

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class=\"row\">
            <div class=\"col-md-8\">
                <h2 class=\"page-header\">demander une feuille</h2>
                <form name=\"sentMessage\" id=\"contactForm\" novalidate action=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_dem");
        echo "\" method=\"post\">
                    <div class=\"control-group form-group\">
                        <div class=\"controls\">
                            <label>Type de feuille :</label>
                            <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" required data-validation-required-message=\"Please enter your name.\">
                            <p class=\"help-block\"></p>
                        </div>
                    </div>
                    <div class=\"control-group form-group\">
                        <div class=\"controls\">
                            <label>Cin Number:</label>
                            <input type=\"tel\" class=\"form-control\" id=\"cin\" name=\"cin\" required data-validation-required-message=\"Please enter your phone number.\">
                        </div>
                    </div>


                    <div id=\"success\"></div>
                    <!-- For success/fail messages -->
                    <button type=\"submit\" class=\"btn btn-info\">Envoyer</button>
                </form>
            </div>
            <!-- Contact Details Column -->

                <div class=\"col-md-8\">
                    <h2 class=\"page-header\">Send us a reclamation</h2>
                    <form name=\"sentMessage\" id=\"contactForm\" novalidate action=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_rec");
        echo "\" method=\"post\">
                        <div class=\"control-group form-group\">
                            <div class=\"controls\">
                                <label>Titre de reclamation:</label>
                                <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" required data-validation-required-message=\"Please enter your name.\">
                                <p class=\"help-block\"></p>
                            </div>
                        </div>


                        <div class=\"control-group form-group\">
                            <div class=\"controls\">
                                <label>Description:</label>
                                <textarea class=\"form-control\" id=\"desc\" name=\"desc\" required data-validation-required-message=\"Please enter your message\" maxlength=\"999\" style=\"resize:none\"></textarea>
                            </div>
                        </div>
                        <div id=\"success\"></div>
                        <!-- For success/fail messages -->
                        <button type=\"submit\" class=\"btn btn-info\">Send Reclamation</button>
                    </form>
                </div>

        </div>
        <!-- /.row -->
    </div>
<br>
    <br>
    <br>
    <br>
    <br>
    <br>
";
        
        $__internal_297b3c3790a478b03eb0ff9882b632b2b028d20077245189661a2526a5b537ae->leave($__internal_297b3c3790a478b03eb0ff9882b632b2b028d20077245189661a2526a5b537ae_prof);

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
        return array (  130 => 62,  102 => 37,  79 => 16,  74 => 14,  69 => 13,  63 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
    <div class=\"container\">

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class=\"row\">
            <div class=\"col-md-8\">
                <h2 class=\"page-header\">demander une feuille</h2>
                <form name=\"sentMessage\" id=\"contactForm\" novalidate action=\"{{ path('sfd_dem') }}\" method=\"post\">
                    <div class=\"control-group form-group\">
                        <div class=\"controls\">
                            <label>Type de feuille :</label>
                            <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" required data-validation-required-message=\"Please enter your name.\">
                            <p class=\"help-block\"></p>
                        </div>
                    </div>
                    <div class=\"control-group form-group\">
                        <div class=\"controls\">
                            <label>Cin Number:</label>
                            <input type=\"tel\" class=\"form-control\" id=\"cin\" name=\"cin\" required data-validation-required-message=\"Please enter your phone number.\">
                        </div>
                    </div>


                    <div id=\"success\"></div>
                    <!-- For success/fail messages -->
                    <button type=\"submit\" class=\"btn btn-info\">Envoyer</button>
                </form>
            </div>
            <!-- Contact Details Column -->

                <div class=\"col-md-8\">
                    <h2 class=\"page-header\">Send us a reclamation</h2>
                    <form name=\"sentMessage\" id=\"contactForm\" novalidate action=\"{{ path('sfd_rec') }}\" method=\"post\">
                        <div class=\"control-group form-group\">
                            <div class=\"controls\">
                                <label>Titre de reclamation:</label>
                                <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" required data-validation-required-message=\"Please enter your name.\">
                                <p class=\"help-block\"></p>
                            </div>
                        </div>


                        <div class=\"control-group form-group\">
                            <div class=\"controls\">
                                <label>Description:</label>
                                <textarea class=\"form-control\" id=\"desc\" name=\"desc\" required data-validation-required-message=\"Please enter your message\" maxlength=\"999\" style=\"resize:none\"></textarea>
                            </div>
                        </div>
                        <div id=\"success\"></div>
                        <!-- For success/fail messages -->
                        <button type=\"submit\" class=\"btn btn-info\">Send Reclamation</button>
                    </form>
                </div>

        </div>
        <!-- /.row -->
    </div>
<br>
    <br>
    <br>
    <br>
    <br>
    <br>
{% endblock %}", "sfdBundle:Default:services.html.twig", "/var/www/html/sfdproject/src/sfdBundle/Resources/views/Default/services.html.twig");
    }
}
