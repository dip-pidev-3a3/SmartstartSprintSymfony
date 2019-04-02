<?php

/* AdminBundle:AdminBlogViews:ListComments.html.twig */
class __TwigTemplate_d410de1ab9cbab39a965d36f979b5f299528b2ae5ea5b0e38ad9ed6131847e91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseAdmin.html.twig", "AdminBundle:AdminBlogViews:ListComments.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:AdminBlogViews:ListComments.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:AdminBlogViews:ListComments.html.twig"));

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
                        <h2>Manage <b>Comments</b></h2>
                    </div>

                </div>
            </div>
            <table class=\"table table-striped table-hover\">
                <thead>
                <tr>

                    <th>#</th>
                    <th>Author Name</th>
                    <th>Date</th>
                    <th>Comment</th>

                    <th>Article Title</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["Comments"]) {
            // line 31
            echo "                    <tr>

                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["Comments"], "commentId", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["Comments"], "commentAuthor", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Comments"], "commentDate", []), "l jS  F Y h:i:s A"), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo $this->getAttribute($context["Comments"], "commentContent", []);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["Comments"], "commentPost", []), "articleTitle", []), "html", null, true);
            echo " m</td>


                        <td>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Admin_deleteComment", ["commentId" => $this->getAttribute($context["Comments"], "commentId", [])]), "html", null, true);
            echo "\" class=\"delete\" data-toggle=\"modal\"><i class=\"tim-icons icon-trash-simple\" data-toggle=\"tooltip\" title=\"Delete\"></i></a>
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
                                        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Admin_deleteComment", ["commentId" => $this->getAttribute($context["Comments"], "commentId", [])]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-danger\"><label style=\"color:white;\">Delete</label></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Comments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
                </tbody>
            </table>


        </div>
        <div class=\"pagination flex-l-m flex-w m-l--6 p-t-25\">
            ";
        // line 72
        echo $this->env->getExtension('Tiloweb\PaginationBundle\Twig\Extension\PaginationExtension')->paginationFunction(($context["comments"] ?? $this->getContext($context, "comments")), "page");
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
        return "AdminBundle:AdminBlogViews:ListComments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 72,  141 => 65,  128 => 58,  108 => 41,  101 => 37,  97 => 36,  93 => 35,  89 => 34,  85 => 33,  81 => 31,  77 => 30,  49 => 4,  40 => 3,  11 => 1,);
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
                        <h2>Manage <b>Comments</b></h2>
                    </div>

                </div>
            </div>
            <table class=\"table table-striped table-hover\">
                <thead>
                <tr>

                    <th>#</th>
                    <th>Author Name</th>
                    <th>Date</th>
                    <th>Comment</th>

                    <th>Article Title</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                {% for Comments in comments %}
                    <tr>

                        <td>{{ Comments.commentId }}</td>
                        <td>{{ Comments.commentAuthor }}</td>
                        <td>{{ Comments.commentDate|date('l jS \\f F Y h:i:s A') }}</td>
                        <td>{{ Comments.commentContent|raw }}</td>
                        <td>{{ Comments.commentPost.articleTitle }} m</td>


                        <td>
                            <a href=\"{{ path('Admin_deleteComment',{('commentId'):Comments.commentId}) }}\" class=\"delete\" data-toggle=\"modal\"><i class=\"tim-icons icon-trash-simple\" data-toggle=\"tooltip\" title=\"Delete\"></i></a>
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
                                        <a href=\"{{ path('Admin_deleteComment',{('commentId'):Comments.commentId}) }}\" type=\"button\" class=\"btn btn-danger\"><label style=\"color:white;\">Delete</label></a>
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
            {{ pagination(comments, 'page') }}

        </div>
    </div>


    </body>
    <script src=\"//cdn.ckeditor.com/4.11.3/full/ckeditor.js\"></script><script>
    CKEDITOR.replace('editor1');
</script>
{% endblock %}", "AdminBundle:AdminBlogViews:ListComments.html.twig", "C:\\xampp\\htdocs\\SmartStart\\src\\AdminBundle/Resources/views/AdminBlogViews/ListComments.html.twig");
    }
}
