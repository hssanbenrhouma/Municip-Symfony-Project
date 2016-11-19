<?php

/* sfdBundle:Default:adminpage.html.twig */
class __TwigTemplate_0ead0397f85efcf2e8513516b1a42676469cc200497ab0d54570af307b71a9f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("sfdBundle::layout.html.twig", "sfdBundle:Default:adminpage.html.twig", 1);
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
        $__internal_74f3a574c3593925ea851794397e4afa8eeadb52c4968da88fef2611b698152b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f3a574c3593925ea851794397e4afa8eeadb52c4968da88fef2611b698152b->enter($__internal_74f3a574c3593925ea851794397e4afa8eeadb52c4968da88fef2611b698152b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sfdBundle:Default:adminpage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74f3a574c3593925ea851794397e4afa8eeadb52c4968da88fef2611b698152b->leave($__internal_74f3a574c3593925ea851794397e4afa8eeadb52c4968da88fef2611b698152b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffdb52297151381494dbf4b479f4e9d74b7cbddc7d622df85d0bf84afa86f707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffdb52297151381494dbf4b479f4e9d74b7cbddc7d622df85d0bf84afa86f707->enter($__internal_ffdb52297151381494dbf4b479f4e9d74b7cbddc7d622df85d0bf84afa86f707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sfdBundle:Default:adminpage.html.twig"));

        // line 3
        echo "    <div class=\"h-top\" id=\"home\">
        <div class=\"top-header\">
            <ul class=\"cl-effect-16 top-nag\">
                <li><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_adminpage");
        echo "\" data-hover=\"USERS\">Users</a></li>
                <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_sondage");
        echo "\" data-hover=\"SONDAGE\">SONDAGE</a></li>
                <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_requests");
        echo "\" data-hover=\"REQUESTS\">Requests</a></li>
                <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sfd_reclamations");
        echo "\" data-hover=\"RECLAMATIONS\">Reclamations</a></li>
                <li><a href=";
        // line 10
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
                <h3 class=\"tittle\">USERS <i class=\"glyphicon glyphicon-stop\"></i></h3>
                <div class=\"form-group\">
                    <div class=\"container\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>username</th>
                                <th>email</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 43
            echo "    <tr>
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                                    <td><a href=\"#\" ><button type=\"button\" class=\"btn btn-info\" >Modify</button></a>&nbsp;&nbsp;<a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" ><button type=\"button\" class=\"btn btn-danger\">Delete</button></a></td>


                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
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
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users_deleteall");
        echo "\" > <button type=\"button\" class=\"btn btn-danger\">Yes Delete all</button></a> &nbsp;&nbsp;  <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                              </div>
                          </div>

                      </div>
                  </div>
        </div>


";
        
        $__internal_ffdb52297151381494dbf4b479f4e9d74b7cbddc7d622df85d0bf84afa86f707->leave($__internal_ffdb52297151381494dbf4b479f4e9d74b7cbddc7d622df85d0bf84afa86f707_prof);

    }

    public function getTemplateName()
    {
        return "sfdBundle:Default:adminpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 72,  126 => 52,  115 => 47,  111 => 46,  107 => 45,  103 => 44,  100 => 43,  96 => 42,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
                <li><a href=\"{{ path('sfd_sondage') }}\" data-hover=\"SONDAGE\">SONDAGE</a></li>
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
                <h3 class=\"tittle\">USERS <i class=\"glyphicon glyphicon-stop\"></i></h3>
                <div class=\"form-group\">
                    <div class=\"container\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>username</th>
                                <th>email</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
{% for user in users %}
    <tr>
                                    <td>{{ user.id }}</td>
                                    <td>{{ user.username }}</td>
                                    <td>{{ user.email }}</td>
                                    <td><a href=\"#\" ><button type=\"button\" class=\"btn btn-info\" >Modify</button></a>&nbsp;&nbsp;<a href=\"{{ path('user_delete', { 'id': user.id }) }}\" ><button type=\"button\" class=\"btn btn-danger\">Delete</button></a></td>


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
", "sfdBundle:Default:adminpage.html.twig", "/var/www/html/sfdproject/src/sfdBundle/Resources/views/Default/adminpage.html.twig");
    }
}
