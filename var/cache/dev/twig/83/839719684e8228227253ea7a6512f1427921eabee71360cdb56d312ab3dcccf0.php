<?php

/* AdminBundle:AdminBlogViews:ListPosts.html.twig */
class __TwigTemplate_111312088f3d319300cdf5c926b5dd043727c7aa4ee6e9cc4b1373fcbedf7c85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseAdmin.html.twig", "AdminBundle:AdminBlogViews:ListPosts.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:AdminBlogViews:ListPosts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:AdminBlogViews:ListPosts.html.twig"));

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
                        <h2>Manage <b>Posts</b></h2>
                        <input type=\"text\" id=\"myInput\" class=\"search form-control\" placeholder=\"What you looking for?\">                    </div>
                    <div class=\"col-sm-6\">

                        <a href=\"#addEmployeeModal\" class=\"btn btn-success\" data-toggle=\"modal\"><i class=\"tim-icons icon-simple-add\"></i>     Add Admin Post</a>
                    </div>
                </div>
            </div>
            <table class=\"table table-striped table-hover\" id=\"myTable\">
                <thead>
                <tr>

                    <th>#</th>
                    <th>Author Name</th>
                    <th>Post Date</th>
                    <th>Post Type</th>
                    <th>Post Content</th>
                    <th>Article Title</th>

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
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postId", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["blogposts"], "author", []), "username", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blogposts"], "postDate", []), "m/d/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postType", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postContent", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "articleTitle", []), "html", null, true);
            echo "</td>

                    <td>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Admin_DetailPost", ["postId" => $this->getAttribute($context["blogposts"], "postId", [])]), "html", null, true);
            echo "\" class=\"view\" title=\"View\" data-toggle=\"tooltip\"><i class=\"tim-icons icon-notes\"></i></a>
                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Admin_UpdatePost", ["postId" => $this->getAttribute($context["blogposts"], "postId", [])]), "html", null, true);
            echo "\" class=\"edit\"><i class=\"tim-icons icon-pencil\" data-toggle=\"tooltip\" title=\"Edit\"></i></a>
                        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Admin_deletePost", ["postId" => $this->getAttribute($context["blogposts"], "postId", [])]), "html", null, true);
            echo "\" class=\"delete\"><i class=\"tim-icons icon-trash-simple\" data-toggle=\"tooltip\" title=\"Delete\"></i></a>
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
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Admin_deletePost", ["postId" => $this->getAttribute($context["blogposts"], "postId", [])]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-danger\"><label style=\"color:white;\">Delete</label></a>
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
        // line 69
        echo "
                </tbody>
            </table>


        </div>
        <div class=\"pagination flex-l-m flex-w m-l--6 p-t-25\">
            ";
        // line 76
        echo $this->env->getExtension('Tiloweb\PaginationBundle\Twig\Extension\PaginationExtension')->paginationFunction(($context["v"] ?? $this->getContext($context, "v")), "page");
        echo "

        </div>
    </div>

    <!-- Edit Modal HTML -->
    <div id=\"addEmployeeModal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "






                <div class=\"modal-header\">
                    <h4 class=\"modal-title\">Add A Post</h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        <label>Post Content</label>
                        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "postContent", []), 'widget', ["attr" => ["class" => "form-control", "type" => "textarea"]]);
        echo "

                    </div>
                    <div class=\"form-group\">
                        <label>Post Type</label>
                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "postType", []), 'widget', ["attr" => ["class" => "form-control", "style" => "font-size: 12px"]]);
        echo "

                    </div>
                    <div class=\"form-group\">
                        <label>Article Title</label>
                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "articleTitle", []), 'widget', ["attr" => ["class" => "form-control", "type" => "textarea"]]);
        echo "

                    </div>
                    <div class=\"form-group\">
                        <label>Article Content</label>
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "articleContent", []), 'widget');
        echo "

                    </div>
                    <div class=\"form-group\">
                        <label>Your Image</label>
                        <i class=\"tim-icons icon-cloud-upload-94\"></i>
                        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", []), 'widget', ["attr" => ["class" => "form-control", "style" => "font-size: 12px"]]);
        echo "

                    </div>
                </div>
                <div class=\"modal-footer\">
                    <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                    <input type=\"submit\" onclick=\"myFunction()\" id=\"form\" name=\"form\" class=\"btn btn-success\" id=\"addb\" value=\"Add\">
                </div>
                ";
        // line 128
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id=\"editEmployeeModal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form>
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">Edit Employee</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>Name</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Email</label>
                            <input type=\"email\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Address</label>
                            <textarea class=\"form-control\" required></textarea>
                        </div>
                        <div class=\"form-group\">
                            <label>Phone</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                        <input type=\"submit\" class=\"btn btn-info\" value=\"Save\">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->

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
        return "AdminBundle:AdminBlogViews:ListPosts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 128,  225 => 120,  216 => 114,  208 => 109,  200 => 104,  192 => 99,  175 => 85,  163 => 76,  154 => 69,  141 => 62,  121 => 45,  117 => 44,  113 => 43,  107 => 40,  103 => 39,  99 => 38,  95 => 37,  91 => 36,  87 => 35,  83 => 33,  79 => 32,  49 => 4,  40 => 3,  11 => 1,);
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
                        <h2>Manage <b>Posts</b></h2>
                        <input type=\"text\" id=\"myInput\" class=\"search form-control\" placeholder=\"What you looking for?\">                    </div>
                    <div class=\"col-sm-6\">

                        <a href=\"#addEmployeeModal\" class=\"btn btn-success\" data-toggle=\"modal\"><i class=\"tim-icons icon-simple-add\"></i>     Add Admin Post</a>
                    </div>
                </div>
            </div>
            <table class=\"table table-striped table-hover\" id=\"myTable\">
                <thead>
                <tr>

                    <th>#</th>
                    <th>Author Name</th>
                    <th>Post Date</th>
                    <th>Post Type</th>
                    <th>Post Content</th>
                    <th>Article Title</th>

                </tr>
                </thead>
                <tbody>
                {% for blogposts in v %}
                <tr>

                    <td>{{ blogposts.postId }}</td>
                    <td>{{ blogposts.author.username }}</td>
                    <td>{{ blogposts.postDate|date(\"m/d/Y\")}}</td>
                    <td>{{ blogposts.postType }}</td>
                    <td>{{ blogposts.postContent }}</td>
                    <td>{{ blogposts.articleTitle}}</td>

                    <td>
                        <a href=\"{{ path('Admin_DetailPost',{('postId'):blogposts.postId}) }}\" class=\"view\" title=\"View\" data-toggle=\"tooltip\"><i class=\"tim-icons icon-notes\"></i></a>
                        <a href=\"{{ path('Admin_UpdatePost',{('postId'):blogposts.postId}) }}\" class=\"edit\"><i class=\"tim-icons icon-pencil\" data-toggle=\"tooltip\" title=\"Edit\"></i></a>
                        <a href=\"{{ path('Admin_deletePost',{('postId'):blogposts.postId}) }}\" class=\"delete\"><i class=\"tim-icons icon-trash-simple\" data-toggle=\"tooltip\" title=\"Delete\"></i></a>
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
                                        <a href=\"{{ path('Admin_deletePost',{('postId'):blogposts.postId}) }}\" type=\"button\" class=\"btn btn-danger\"><label style=\"color:white;\">Delete</label></a>
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

    <!-- Edit Modal HTML -->
    <div id=\"addEmployeeModal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                {{ form_start(form) }}






                <div class=\"modal-header\">
                    <h4 class=\"modal-title\">Add A Post</h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        <label>Post Content</label>
                        {{ form_widget(form.postContent, { 'attr': {'class': 'form-control', 'type' : 'textarea'} }) }}

                    </div>
                    <div class=\"form-group\">
                        <label>Post Type</label>
                        {{ form_widget(form.postType, { 'attr': {'class': 'form-control', 'style':'font-size: 12px'} }) }}

                    </div>
                    <div class=\"form-group\">
                        <label>Article Title</label>
                        {{ form_widget(form.articleTitle, { 'attr': {'class': 'form-control', 'type' : 'textarea'} }) }}

                    </div>
                    <div class=\"form-group\">
                        <label>Article Content</label>
                        {{ form_widget(form.articleContent)}}

                    </div>
                    <div class=\"form-group\">
                        <label>Your Image</label>
                        <i class=\"tim-icons icon-cloud-upload-94\"></i>
                        {{ form_widget(form.image, { 'attr': {'class': 'form-control', 'style':'font-size: 12px'} }) }}

                    </div>
                </div>
                <div class=\"modal-footer\">
                    <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                    <input type=\"submit\" onclick=\"myFunction()\" id=\"form\" name=\"form\" class=\"btn btn-success\" id=\"addb\" value=\"Add\">
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id=\"editEmployeeModal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form>
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">Edit Employee</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>Name</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Email</label>
                            <input type=\"email\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Address</label>
                            <textarea class=\"form-control\" required></textarea>
                        </div>
                        <div class=\"form-group\">
                            <label>Phone</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                        <input type=\"submit\" class=\"btn btn-info\" value=\"Save\">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->

    </body>
    <script src=\"//cdn.ckeditor.com/4.11.3/full/ckeditor.js\"></script><script>
    CKEDITOR.replace('editor1');
</script>
{% endblock %}", "AdminBundle:AdminBlogViews:ListPosts.html.twig", "C:\\xampp\\htdocs\\SmartStart\\src\\AdminBundle/Resources/views/AdminBlogViews/ListPosts.html.twig");
    }
}
