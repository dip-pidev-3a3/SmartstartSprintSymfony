<?php

/* AdminBundle:AdminBlogViews:ListBlogPayment.html.twig */
class __TwigTemplate_309a68991f9915112458d9d289ef70f46a00501638f27bfff2ae3c0d1fc29e2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseAdmin.html.twig", "AdminBundle:AdminBlogViews:ListBlogPayment.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "BaseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:AdminBlogViews:ListBlogPayment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:AdminBlogViews:ListBlogPayment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <body>
    <div class=\"container\">
        <div class=\"table-wrapper\">
            <div class=\"table-title\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <h2>Manage <b>Payments</b></h2>
                        <input type=\"text\" id=\"myInput\" class=\"search form-control\" placeholder=\"What you looking for?\">                    </div>
                    <div class=\"col-sm-6\">

                    </div>
                </div>
            </div>
            <table class=\"table table-striped table-hover\" id=\"myTable\">
                <thead>
                <tr>

                    <th>Author Name</th>
                    <th>Start Date</th>
                    <th>End Date Type</th>
                    <th>Likes Number</th>
                    <th>Comments Number</th>
                    <th>Estimated Payment</th>
                    <th>Status</th>

                </tr>
                </thead>
                <tbody>
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["v"] ?? $this->getContext($context, "v")));
        foreach ($context['_seq'] as $context["_key"] => $context["blogposts"]) {
            // line 33
            echo "                <tr>


                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["blogposts"], "author", []), "username", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blogposts"], "StartDate", []), "m/d/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blogposts"], "EndDate", []), "m/d/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postLikesCount", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postCommentCount", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "payment", []), "html", null, true);
            echo "</td>
                    ";
            // line 42
            if (($this->getAttribute($context["blogposts"], "Status", []) == 1)) {
                // line 43
                echo "                    <td style=\"color: darkred\">Submitted</td>
                    ";
            }
            // line 45
            echo "                    ";
            if (($this->getAttribute($context["blogposts"], "Status", []) == 2)) {
                // line 46
                echo "                    <td style=\"color: midnightblue\">Payment Ongoing</td>
                    ";
            }
            // line 48
            echo "                    ";
            if (($this->getAttribute($context["blogposts"], "Status", []) == 3)) {
                // line 49
                echo "                        <td style=\"color: green\">Paid</td>
                    ";
            }
            // line 51
            echo "

                    <td>
                        ";
            // line 54
            if (($this->getAttribute($context["blogposts"], "Status", []) == 0)) {
                // line 55
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Admin_PaymentsBlogListAccept", ["id" => $this->getAttribute($this->getAttribute($context["blogposts"], "author", []), "id", []), "idpayment" => $this->getAttribute($context["blogposts"], "Id", [])]), "html", null, true);
                echo "\" class=\"view\" title=\"Accept\" data-toggle=\"tooltip\"><i class=\"tim-icons icon-check-2\"></i></a>
                        ";
            }
            // line 57
            echo "                    </td>
                </tr>
                    <div id=\"deleteEmployeeModal\" class=\"modal fade\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <form>
                                    <div class=\"modal-header\">
                                        <h4 class=\"modal-title\">Delete Employee</h4>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                    </div>
                                    <div class=\"modal-body\">
                                        <p>Are you sure you want to delete these Records?</p>
                                        <p class=\"text-warning\"><small>This action cannot be undone.</small></p>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                                        <a href=\"\" type=\"button\" class=\"btn btn-danger\"><label style=\"color:white;\">Delete</label></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogposts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
                </tbody>
            </table>


        </div>
        <div class=\"pagination flex-l-m flex-w m-l--6 p-t-25\">
            ";
        // line 87
        echo $this->env->getExtension('Tiloweb\PaginationBundle\Twig\Extension\PaginationExtension')->paginationFunction(($context["v"] ?? $this->getContext($context, "v")), "page");
        echo "

        </div>
    </div>
    </body>
    <script src=\"//cdn.ckeditor.com/4.11.3/full/ckeditor.js\"></script><script>
    CKEDITOR.replace('editor1');
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:AdminBlogViews:ListBlogPayment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 87,  173 => 80,  145 => 57,  139 => 55,  137 => 54,  132 => 51,  128 => 49,  125 => 48,  121 => 46,  118 => 45,  114 => 43,  112 => 42,  108 => 41,  104 => 40,  100 => 39,  96 => 38,  92 => 37,  88 => 36,  83 => 33,  79 => 32,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BaseAdmin.html.twig\" %}

{% block body %}
    <body>
    <div class=\"container\">
        <div class=\"table-wrapper\">
            <div class=\"table-title\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <h2>Manage <b>Payments</b></h2>
                        <input type=\"text\" id=\"myInput\" class=\"search form-control\" placeholder=\"What you looking for?\">                    </div>
                    <div class=\"col-sm-6\">

                    </div>
                </div>
            </div>
            <table class=\"table table-striped table-hover\" id=\"myTable\">
                <thead>
                <tr>

                    <th>Author Name</th>
                    <th>Start Date</th>
                    <th>End Date Type</th>
                    <th>Likes Number</th>
                    <th>Comments Number</th>
                    <th>Estimated Payment</th>
                    <th>Status</th>

                </tr>
                </thead>
                <tbody>
                {% for blogposts in v %}
                <tr>


                    <td>{{ blogposts.author.username }}</td>
                    <td>{{ blogposts.StartDate|date(\"m/d/Y\")}}</td>
                    <td>{{ blogposts.EndDate|date(\"m/d/Y\")}}</td>
                    <td>{{ blogposts.postLikesCount }}</td>
                    <td>{{ blogposts.postCommentCount}}</td>
                    <td>{{ blogposts.payment}}</td>
                    {% if blogposts.Status==1 %}
                    <td style=\"color: darkred\">Submitted</td>
                    {% endif %}
                    {% if blogposts.Status==2 %}
                    <td style=\"color: midnightblue\">Payment Ongoing</td>
                    {% endif %}
                    {% if blogposts.Status==3 %}
                        <td style=\"color: green\">Paid</td>
                    {% endif %}


                    <td>
                        {% if blogposts.Status==0 %}
                        <a href=\"{{ path('Admin_PaymentsBlogListAccept',{('id'):blogposts.author.id,('idpayment'):blogposts.Id}) }}\" class=\"view\" title=\"Accept\" data-toggle=\"tooltip\"><i class=\"tim-icons icon-check-2\"></i></a>
                        {% endif %}
                    </td>
                </tr>
                    <div id=\"deleteEmployeeModal\" class=\"modal fade\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <form>
                                    <div class=\"modal-header\">
                                        <h4 class=\"modal-title\">Delete Employee</h4>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                    </div>
                                    <div class=\"modal-body\">
                                        <p>Are you sure you want to delete these Records?</p>
                                        <p class=\"text-warning\"><small>This action cannot be undone.</small></p>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                                        <a href=\"\" type=\"button\" class=\"btn btn-danger\"><label style=\"color:white;\">Delete</label></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                {% endfor %}

                </tbody>
            </table>


        </div>
        <div class=\"pagination flex-l-m flex-w m-l--6 p-t-25\">
            {{ pagination(v, 'page') }}

        </div>
    </div>
    </body>
    <script src=\"//cdn.ckeditor.com/4.11.3/full/ckeditor.js\"></script><script>
    CKEDITOR.replace('editor1');
</script>
{% endblock %}", "AdminBundle:AdminBlogViews:ListBlogPayment.html.twig", "C:\\xampp\\htdocs\\SmartStart\\src\\AdminBundle/Resources/views/AdminBlogViews/ListBlogPayment.html.twig");
    }
}
