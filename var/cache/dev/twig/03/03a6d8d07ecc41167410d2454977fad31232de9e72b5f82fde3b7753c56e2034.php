<?php

/* sfdBundle:Default:sondage.html.twig */
class __TwigTemplate_ac2c938258aee576458063e865ef3efa328191750cc59745287ce6724198a7ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("sfdBundle::layout.html.twig", "sfdBundle:Default:sondage.html.twig", 1);
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
        $__internal_42989d59156b4988c7ff9025e811dfb33a80077225c2a8832905367b439f9711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42989d59156b4988c7ff9025e811dfb33a80077225c2a8832905367b439f9711->enter($__internal_42989d59156b4988c7ff9025e811dfb33a80077225c2a8832905367b439f9711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sfdBundle:Default:sondage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42989d59156b4988c7ff9025e811dfb33a80077225c2a8832905367b439f9711->leave($__internal_42989d59156b4988c7ff9025e811dfb33a80077225c2a8832905367b439f9711_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9eae23d3f4f61754ca9cfb6da76d383a5a23be3a48520fb77dce9a628680bef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eae23d3f4f61754ca9cfb6da76d383a5a23be3a48520fb77dce9a628680bef2->enter($__internal_9eae23d3f4f61754ca9cfb6da76d383a5a23be3a48520fb77dce9a628680bef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sfdBundle:Default:sondage.html.twig"));

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

                <h3 class=\"tittle\">SONDAGE <i class=\"glyphicon glyphicon-stop\"></i></h3>
                <div class=\"form-group\">
                 <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_newsondage");
        echo "\"  > <div class=\"panel-heading\"><button type=\"button\" class=\"btn btn-info\" >Ajouter Sondage</button></div></a>

                    <div class=\"container\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>titre</th>
                                <th>oui</th>
                                <th>non</th>
                                <th>rien</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sonds"]) ? $context["sonds"] : $this->getContext($context, "sonds")));
        foreach ($context['_seq'] as $context["_key"] => $context["sond"]) {
            // line 52
            echo "                                <tr>
                                    <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["sond"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["sond"], "title", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["sond"], "oui", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["sond"], "non", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["sond"], "any", array()), "html", null, true);
            echo "</td>

                                    <td><a href=\"#\" ><button type=\"button\" class=\"btn btn-info\" >Modify</button></a>&nbsp;&nbsp;<a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_sondagedelete", array("id" => $this->getAttribute($context["sond"], "id", array()))), "html", null, true);
            echo "\" ><button type=\"button\" class=\"btn btn-danger\">Delete</button></a></td>


                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sond'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"panel-heading\"><button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModaldeleteall\">Delete all</button></div>
                </div>
            </div>
        </div>
        <div class=\"modal fade\" id=\"myModaldeleteall\" role=\"dialog\">
            <div class=\"modal-dialog\">

                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Delete all</h4>
                    </div>
                    <div class=\"modal-body\">
                        <p>Do you want to Delete all users !</p>
                    </div>
                    <div class=\"modal-footer\">
                        <a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users_deleteall");
        echo "\" > <button type=\"button\" class=\"btn btn-danger\">Yes Delete all</button></a> &nbsp;&nbsp;  <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>


";
        
        $__internal_9eae23d3f4f61754ca9cfb6da76d383a5a23be3a48520fb77dce9a628680bef2->leave($__internal_9eae23d3f4f61754ca9cfb6da76d383a5a23be3a48520fb77dce9a628680bef2_prof);

    }

    public function getTemplateName()
    {
        return "sfdBundle:Default:sondage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 84,  153 => 64,  142 => 59,  137 => 57,  133 => 56,  129 => 55,  125 => 54,  121 => 53,  118 => 52,  114 => 51,  96 => 36,  70 => 13,  66 => 12,  62 => 11,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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

                <h3 class=\"tittle\">SONDAGE <i class=\"glyphicon glyphicon-stop\"></i></h3>
                <div class=\"form-group\">
                 <a href=\"{{ path('sfd_newsondage') }}\"  > <div class=\"panel-heading\"><button type=\"button\" class=\"btn btn-info\" >Ajouter Sondage</button></div></a>

                    <div class=\"container\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>titre</th>
                                <th>oui</th>
                                <th>non</th>
                                <th>rien</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for sond in sonds %}
                                <tr>
                                    <td>{{ sond.id }}</td>
                                    <td>{{ sond.title }}</td>
                                    <td>{{ sond.oui }}</td>
                                    <td>{{ sond.non }}</td>
                                    <td>{{ sond.any }}</td>

                                    <td><a href=\"#\" ><button type=\"button\" class=\"btn btn-info\" >Modify</button></a>&nbsp;&nbsp;<a href=\"{{ path('sfd_sondagedelete', { 'id': sond.id }) }}\" ><button type=\"button\" class=\"btn btn-danger\">Delete</button></a></td>


                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                    <div class=\"panel-heading\"><button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModaldeleteall\">Delete all</button></div>
                </div>
            </div>
        </div>
        <div class=\"modal fade\" id=\"myModaldeleteall\" role=\"dialog\">
            <div class=\"modal-dialog\">

                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Delete all</h4>
                    </div>
                    <div class=\"modal-body\">
                        <p>Do you want to Delete all users !</p>
                    </div>
                    <div class=\"modal-footer\">
                        <a href=\"{{ path('users_deleteall')}}\" > <button type=\"button\" class=\"btn btn-danger\">Yes Delete all</button></a> &nbsp;&nbsp;  <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>


{% endblock %}
", "sfdBundle:Default:sondage.html.twig", "/var/www/html/sfdproject/src/sfdBundle/Resources/views/Default/sondage.html.twig");
    }
}
