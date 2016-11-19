<?php

/* sfdBundle:Default:index.html.twig */
class __TwigTemplate_907339948fa8aa1375da991762795d3828de93b75d9fad851f37e5dc662ca1f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("sfdBundle::layout.html.twig", "sfdBundle:Default:index.html.twig", 1);
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
        $__internal_148396f1900558886c474ecc5d63943207504741cd0514084e553d9da00eb25c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148396f1900558886c474ecc5d63943207504741cd0514084e553d9da00eb25c->enter($__internal_148396f1900558886c474ecc5d63943207504741cd0514084e553d9da00eb25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sfdBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_148396f1900558886c474ecc5d63943207504741cd0514084e553d9da00eb25c->leave($__internal_148396f1900558886c474ecc5d63943207504741cd0514084e553d9da00eb25c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_576a71be1547edd6670c7d7986ab220c2c4d0cbd232859816b23330e049e7259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576a71be1547edd6670c7d7986ab220c2c4d0cbd232859816b23330e049e7259->enter($__internal_576a71be1547edd6670c7d7986ab220c2c4d0cbd232859816b23330e049e7259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sfdBundle:Default:index.html.twig"));

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


    <!-- carousel Section -->
    <div id=\"carousel\">
        <div id=\"osahan-slider\" class=\"owl-carousel owl-theme\">
            <div class=\"item\">
                <img class=\"slider-img\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/slider/first.jpg"), "html", null, true);
        echo "\" title=\"im1\" alt=\"\">

            </div>

        </div>
    </div>




    <!-- Welcome Panel Section -->
    <div class=\"section testimonials \" >
        <div class=\"container text-center\">
            <div class=\"title text-center\">
                <h1>Sondage</h1>
                <p><h2>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "title", array()), "html", null, true);
        echo "</h2></p>
            </div> <!-- /.title -->
            <div id=\"testimonials\" class=\"form-horizontal\">
               <br>
                <br>
                ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                  <div class=\"text-center blog-btns\">
                            <a class=\"btn btn-primary btn-lg\">Submit</a>
                        </div>

            </div>
        </div>
    </div>




<div class=\"section gallery\">
    <div class=\"title text-center\">
        <span>Lorem ipsum</span>
        <h1>Responsive gallery</h1>
        <p>Phasellus eleifend ex enim, non viverra justo pretium vel.</p>
    </div>
    <div class=\"container gal-container\">
        <div class=\"col-md-6 col-sm-12 co-xs-12 gal-item\">
            <div class=\"box\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#1\">
                    <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/gallery-09.jpg"), "html", null, true);
        echo "\">
                </a>
                <div class=\"modal fade\" id=\"1\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            <div class=\"modal-body\">
                                <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/gallery-09.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-md-12 description\">
                                <h4>This is the first one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6 co-xs-12 gal-item\">
            <div class=\"box\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#2\">
                    <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/gallery-09.jpg"), "html", null, true);
        echo "\">
                </a>
                <div class=\"modal fade\" id=\"2\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            <div class=\"modal-body\">
                                <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/gallery-09.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-md-12 description\">
                                <h4>This is the second one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6 co-xs-12 gal-item\">
            <div class=\"box\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#3\">
                    <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/gallery-09.jpg"), "html", null, true);
        echo "\">
                </a>
                <div class=\"modal fade\" id=\"3\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            <div class=\"modal-body\">
                                <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/gallery-09.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-md-12 description\">
                                <h4>This is the third one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6 co-xs-12 gal-item\">
            <div class=\"box\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#7\">
                    <img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/gallery-09.jpg"), "html", null, true);
        echo "\">
                </a>
                <div class=\"modal fade\" id=\"7\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            <div class=\"modal-body\">
                                <img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/gallery-09.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-md-12 description\">
                                <h4>This is the seventh one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6 co-xs-12 gal-item\">
            <div class=\"box\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#8\">
                    <img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/gallery-09.jpg"), "html", null, true);
        echo "\">
                </a>
                <div class=\"modal fade\" id=\"8\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            <div class=\"modal-body\">
                                <img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/gallery-09.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-md-12 description\">
                                <h4>This is the eighth one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6 co-xs-12 gal-item\">
            <div class=\"box\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#9\">
                    <img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/gallery-09.jpg"), "html", null, true);
        echo "\">
                </a>
                <div class=\"modal fade\" id=\"9\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            <div class=\"modal-body\">
                                <img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/gallery-09.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/gallery-09.jpg"), "html", null, true);
        echo "\">
                                <h4>This is the ninth one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6 co-xs-12 gal-item\">
            <div class=\"box\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#5\">
                    <img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/gallery-09.jpg"), "html", null, true);
        echo "\">
                </a>
                <div class=\"modal fade\" id=\"5\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            <div class=\"modal-body\">
                                <img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/gallery-09.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-md-12 description\">
                                <h4>This is the fifth one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-2 col-sm-6 co-xs-12 gal-item\">
            <div class=\"box\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#6\">
                    <img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/gallery-09.jpg"), "html", null, true);
        echo "\">
                </a>
                <div class=\"modal fade\" id=\"6\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            <div class=\"modal-body\">
                                <img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/gallery-09.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-md-12 description\">
                                <h4>This is the sixth one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-sm-6 co-xs-12 gal-item\">
            <div class=\"box\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#4\">
                    <img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/gallery-09.jpg"), "html", null, true);
        echo "\">
                </a>
                <div class=\"modal fade\" id=\"4\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            <div class=\"modal-body\">
                                <img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/gallery-09.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-md-12 description\">
                                <h4>This is the fourth one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Blog Panel Section -->
    <div class=\"section section-blog\">
        <div class=\"spacer\">
            <div class=\"container\">
                <div class=\"title text-center\">
                    <h1>Derniers actulités</h1>
                </div> <!-- /.title -->

                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <div class=\"blog-post post-image\">
                            <a class=\"blog-title\" href=\"#\">
                                <img class=\"img-responsive\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/blog-01.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                Lorem ipsum dolor sit amet
                            </a>
                            <span class=\"small-text blog-time\">25 December, 2015</span>
                            <p>Nunc sed dui quis orci imperdiet auctor. Nam eleifend libero
                                non diam gravida tincidunt. Mauris porttitor ante augue, ac blandit
                                magna lobortis.</p>
                        </div> <!-- /.blog-post -->
                    </div> <!-- /.col-sm-4 -->

                    <div class=\"col-sm-4\">
                        <div class=\"blog-post post-image\">
                            <!-- /.blog-slider -->
                            <a class=\"blog-title\" href=\"#\">
                                <img class=\"img-responsive\" src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/blog-02.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                Lorem ipsum dolor sit amet</a>
                            <span class=\"small-text blog-time\">28 December, 2015</span>
                            <p>Fusce scelerisque interdum felis, eget pellentesque quam
                                finibus et. Donec condimentum consectetur condimentum. Fusce volutpat...</p>
                        </div> <!-- /.blog-post -->
                    </div> <!-- /.col-sm-4 -->
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <div class=\"blog-post post-image\">
                                <a class=\"blog-title\" href=\"#\">
                                    <img class=\"img-responsive\" src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/images/blog-01.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    Lorem ipsum dolor sit amet
                                </a>
                                <span class=\"small-text blog-time\">25 December, 2015</span>
                                <p>Nunc sed dui quis orci imperdiet auctor. Nam eleifend libero
                                    non diam gravida tincidunt. Mauris porttitor ante augue, ac blandit
                                    magna lobortis.</p>
                            </div> <!-- /.blog-post -->
                        </div> <!-- /.col-sm-4 -->


                </div> <!-- /.row -->

            </div> <!-- /.container-fluid -->
        </div> <!-- /.spacer -->
    </div>
    <!-- End Blog Panel Section -->

</div>



    <!-- Footer -->

    <!-- /.container -->

    <!-- jQuery -->
    <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Owl Carousel -->
    <script type=\"text/javascript\" src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("osahan/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            if (\$(\"#customers\").length > 0) {
                \$(\"#customers\").owlCarousel({
                    items: 6,
                    lazyLoad: true,
                    pagination: true,
                    autoPlay: 2000,
                    stopOnHover: true
                });
            }
            \$(\"#osahan-slider\").owlCarousel({
                slideSpeed : 300,
                autoPlay : true,
                navigation : true,
                pagination : true,
                singleItem:true
            });
            \$(\"#testimonials\").owlCarousel({
                slideSpeed : 300,
                autoPlay : true,
                navigation : false,
                pagination : true,
                singleItem:true
            });
        });
    </script>




";
        
        $__internal_576a71be1547edd6670c7d7986ab220c2c4d0cbd232859816b23330e049e7259->leave($__internal_576a71be1547edd6670c7d7986ab220c2c4d0cbd232859816b23330e049e7259_prof);

    }

    public function getTemplateName()
    {
        return "sfdBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 329,  469 => 326,  463 => 323,  433 => 296,  419 => 285,  402 => 271,  373 => 245,  363 => 238,  347 => 225,  337 => 218,  321 => 205,  311 => 198,  297 => 187,  292 => 185,  282 => 178,  266 => 165,  256 => 158,  240 => 145,  230 => 138,  214 => 125,  204 => 118,  188 => 105,  178 => 98,  162 => 85,  152 => 78,  127 => 56,  119 => 51,  101 => 36,  79 => 16,  74 => 14,  69 => 13,  63 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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


    <!-- carousel Section -->
    <div id=\"carousel\">
        <div id=\"osahan-slider\" class=\"owl-carousel owl-theme\">
            <div class=\"item\">
                <img class=\"slider-img\" src=\"{{asset('osahan/images/slider/first.jpg')}}\" title=\"im1\" alt=\"\">

            </div>

        </div>
    </div>




    <!-- Welcome Panel Section -->
    <div class=\"section testimonials \" >
        <div class=\"container text-center\">
            <div class=\"title text-center\">
                <h1>Sondage</h1>
                <p><h2>{{ s.title }}</h2></p>
            </div> <!-- /.title -->
            <div id=\"testimonials\" class=\"form-horizontal\">
               <br>
                <br>
                {{ form_widget(form) }}
                  <div class=\"text-center blog-btns\">
                            <a class=\"btn btn-primary btn-lg\">Submit</a>
                        </div>

            </div>
        </div>
    </div>




<div class=\"section gallery\">
    <div class=\"title text-center\">
        <span>Lorem ipsum</span>
        <h1>Responsive gallery</h1>
        <p>Phasellus eleifend ex enim, non viverra justo pretium vel.</p>
    </div>
    <div class=\"container gal-container\">
        <div class=\"col-md-6 col-sm-12 co-xs-12 gal-item\">
            <div class=\"box\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#1\">
                    <img src=\"{{ asset('osahan/images/gallery-09.jpg') }}\">
                </a>
                <div class=\"modal fade\" id=\"1\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            <div class=\"modal-body\">
                                <img src=\"{{ asset('osahan/images/gallery-09.jpg') }}\">
                            </div>
                            <div class=\"col-md-12 description\">
                                <h4>This is the first one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6 co-xs-12 gal-item\">
            <div class=\"box\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#2\">
                    <img src=\"{{ asset('osahan/images/gallery-09.jpg') }}\">
                </a>
                <div class=\"modal fade\" id=\"2\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            <div class=\"modal-body\">
                                <img src=\"{{ asset('osahan/images/gallery-09.jpg') }}\">
                            </div>
                            <div class=\"col-md-12 description\">
                                <h4>This is the second one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6 co-xs-12 gal-item\">
            <div class=\"box\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#3\">
                    <img src=\"{{ asset('osahan/images/gallery-09.jpg') }}\">
                </a>
                <div class=\"modal fade\" id=\"3\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            <div class=\"modal-body\">
                                <img src=\"{{ asset('osahan/images/gallery-09.jpg') }}\">
                            </div>
                            <div class=\"col-md-12 description\">
                                <h4>This is the third one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6 co-xs-12 gal-item\">
            <div class=\"box\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#7\">
                    <img src=\"{{ asset('osahan/images/gallery-09.jpg') }}\">
                </a>
                <div class=\"modal fade\" id=\"7\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            <div class=\"modal-body\">
                                <img src=\"{{ asset('osahan/images/gallery-09.jpg') }}\">
                            </div>
                            <div class=\"col-md-12 description\">
                                <h4>This is the seventh one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6 co-xs-12 gal-item\">
            <div class=\"box\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#8\">
                    <img src=\"{{ asset('osahan/images/gallery-09.jpg') }}\">
                </a>
                <div class=\"modal fade\" id=\"8\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            <div class=\"modal-body\">
                                <img src=\"{{ asset('osahan/images/gallery-09.jpg') }}\">
                            </div>
                            <div class=\"col-md-12 description\">
                                <h4>This is the eighth one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6 co-xs-12 gal-item\">
            <div class=\"box\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#9\">
                    <img src=\"{{ asset('osahan/images/gallery-09.jpg') }}\">
                </a>
                <div class=\"modal fade\" id=\"9\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            <div class=\"modal-body\">
                                <img src=\"{{ asset('osahan/images/gallery-09.jpg') }}\">
                            </div>
                            <div class=\"{{ asset('osahan/images/gallery-09.jpg') }}\">
                                <h4>This is the ninth one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6 co-xs-12 gal-item\">
            <div class=\"box\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#5\">
                    <img src=\"{{ asset('osahan/images/gallery-09.jpg') }}\">
                </a>
                <div class=\"modal fade\" id=\"5\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            <div class=\"modal-body\">
                                <img src=\"{{ asset('osahan/images/gallery-09.jpg') }}\">
                            </div>
                            <div class=\"col-md-12 description\">
                                <h4>This is the fifth one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-2 col-sm-6 co-xs-12 gal-item\">
            <div class=\"box\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#6\">
                    <img src=\"{{ asset('osahan/images/gallery-09.jpg') }}\">
                </a>
                <div class=\"modal fade\" id=\"6\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            <div class=\"modal-body\">
                                <img src=\"{{ asset('osahan/images/gallery-09.jpg') }}\">
                            </div>
                            <div class=\"col-md-12 description\">
                                <h4>This is the sixth one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-sm-6 co-xs-12 gal-item\">
            <div class=\"box\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#4\">
                    <img src=\"{{ asset('osahan/images/gallery-09.jpg') }}\">
                </a>
                <div class=\"modal fade\" id=\"4\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            <div class=\"modal-body\">
                                <img src=\"{{ asset('osahan/images/gallery-09.jpg') }}\">
                            </div>
                            <div class=\"col-md-12 description\">
                                <h4>This is the fourth one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Blog Panel Section -->
    <div class=\"section section-blog\">
        <div class=\"spacer\">
            <div class=\"container\">
                <div class=\"title text-center\">
                    <h1>Derniers actulités</h1>
                </div> <!-- /.title -->

                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <div class=\"blog-post post-image\">
                            <a class=\"blog-title\" href=\"#\">
                                <img class=\"img-responsive\" src=\"{{ asset('osahan/images/blog-01.jpg')}}\" alt=\"\">
                                Lorem ipsum dolor sit amet
                            </a>
                            <span class=\"small-text blog-time\">25 December, 2015</span>
                            <p>Nunc sed dui quis orci imperdiet auctor. Nam eleifend libero
                                non diam gravida tincidunt. Mauris porttitor ante augue, ac blandit
                                magna lobortis.</p>
                        </div> <!-- /.blog-post -->
                    </div> <!-- /.col-sm-4 -->

                    <div class=\"col-sm-4\">
                        <div class=\"blog-post post-image\">
                            <!-- /.blog-slider -->
                            <a class=\"blog-title\" href=\"#\">
                                <img class=\"img-responsive\" src=\"{{ asset('osahan/images/blog-02.jpg')}}\" alt=\"\">
                                Lorem ipsum dolor sit amet</a>
                            <span class=\"small-text blog-time\">28 December, 2015</span>
                            <p>Fusce scelerisque interdum felis, eget pellentesque quam
                                finibus et. Donec condimentum consectetur condimentum. Fusce volutpat...</p>
                        </div> <!-- /.blog-post -->
                    </div> <!-- /.col-sm-4 -->
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <div class=\"blog-post post-image\">
                                <a class=\"blog-title\" href=\"#\">
                                    <img class=\"img-responsive\" src=\"{{ asset('osahan/images/blog-01.jpg')}}\" alt=\"\">
                                    Lorem ipsum dolor sit amet
                                </a>
                                <span class=\"small-text blog-time\">25 December, 2015</span>
                                <p>Nunc sed dui quis orci imperdiet auctor. Nam eleifend libero
                                    non diam gravida tincidunt. Mauris porttitor ante augue, ac blandit
                                    magna lobortis.</p>
                            </div> <!-- /.blog-post -->
                        </div> <!-- /.col-sm-4 -->


                </div> <!-- /.row -->

            </div> <!-- /.container-fluid -->
        </div> <!-- /.spacer -->
    </div>
    <!-- End Blog Panel Section -->

</div>



    <!-- Footer -->

    <!-- /.container -->

    <!-- jQuery -->
    <script src=\"{{ asset('osahan/js/jquery.js')}}\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"{{ asset('osahan/js/bootstrap.min.js')}}\"></script>

    <!-- Owl Carousel -->
    <script type=\"text/javascript\" src=\"{{ asset('osahan/owl-carousel/owl.carousel.js')}}\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            if (\$(\"#customers\").length > 0) {
                \$(\"#customers\").owlCarousel({
                    items: 6,
                    lazyLoad: true,
                    pagination: true,
                    autoPlay: 2000,
                    stopOnHover: true
                });
            }
            \$(\"#osahan-slider\").owlCarousel({
                slideSpeed : 300,
                autoPlay : true,
                navigation : true,
                pagination : true,
                singleItem:true
            });
            \$(\"#testimonials\").owlCarousel({
                slideSpeed : 300,
                autoPlay : true,
                navigation : false,
                pagination : true,
                singleItem:true
            });
        });
    </script>




{% endblock %}
", "sfdBundle:Default:index.html.twig", "/var/www/html/sfdproject/src/sfdBundle/Resources/views/Default/index.html.twig");
    }
}
