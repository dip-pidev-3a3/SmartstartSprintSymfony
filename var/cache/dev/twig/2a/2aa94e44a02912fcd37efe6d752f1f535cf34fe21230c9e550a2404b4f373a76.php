<?php

/* BlogBundle:BlogViews:PostsByCat.html.twig */
class __TwigTemplate_271481f9adb443d61b663724cbed56cd025a235addbbf4c81ede9af4d1bf777e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmartStartBase.html.twig", "BlogBundle:BlogViews:PostsByCat.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "SmartStartBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:BlogViews:PostsByCat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:BlogViews:PostsByCat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "


    <!-- Title Page -->
    <section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url(";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/blog-banner.png"), "html", null, true);
        echo ");\">
        <h2 class=\"tit6 t-center\">
        </h2>
    </section>


    <!-- Content page -->
    <section>
        <div class=\"bread-crumb bo5-b p-t-17 p-b-17\">
            <div class=\"container\">
                <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_ListPosts");
        echo "\" class=\"txt27\">
                    Home
                </a>

                <span class=\"txt29 m-l-10 m-r-10\" style=\"color: black\">/</span>

                <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_ListPosts");
        echo "\" >

                    ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "cat"], "method"), "html", null, true);
        echo "
                </a>
            </div>
        </div>




        <div class=\"container\">


            <div class=\"row\">
                <div class=\"col-md-8 col-lg-9\">
                    <div class=\"p-t-80 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md\">

                        <!-- Block4 -->
                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["v"] ?? $this->getContext($context, "v")));
        foreach ($context['_seq'] as $context["_key"] => $context["blogposts"]) {
            // line 43
            echo "                            <div class=\"blo4 p-b-63\" id=\"content\">
                                <div class=\"pic-blo4 hov-img-zoom bo-rad-10 pos-relative\">
                                    <a href=";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Detail", ["postId" => $this->getAttribute($context["blogposts"], "postId", [])]), "html", null, true);
            echo ">
                                        <img  src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["blogposts"], "image", []))), "html", null, true);
            echo "\" width=\"600\" height=\"427\" alt=\"IMG-BLOG\">
                                    </a>

                                    <div class=\"date-blo4 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t<span class=\"txt30 m-b-4\">


\t\t\t\t\t\t\t\t\t</span>

                                        <span class=\"txt31\">
\t\t\t\t\t\t\t\t\t\t";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blogposts"], "postDate", []), "m/d/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </div>

                                <div class=\"text-blo4 p-t-33\">

                                    ";
            // line 63
            if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
                // line 64
                echo "                                        ";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", []) == $this->getAttribute($this->getAttribute($context["blogposts"], "author", []), "id", []))) {
                    // line 65
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_delete", ["postId" => $this->getAttribute($context["blogposts"], "postId", [])]), "html", null, true);
                    echo "\" class=\"delete\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" title=\"Delete\"></i></a>

                                            <a href=\"";
                    // line 67
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Update_BlogPost", ["postId" => $this->getAttribute($context["blogposts"], "postId", [])]), "html", null, true);
                    echo "\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" title=\"Edit\"></i></a>
                                        ";
                }
                // line 69
                echo "                                    ";
            }
            // line 70
            echo "                                    ";
            if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
                // line 71
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Like", ["postId" => $this->getAttribute($context["blogposts"], "postId", []), "id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", [])]), "html", null, true);
                echo "\" class=\"link\">
                                            <i class=\"far fa-thumbs-up\" style=\"color:midnightblue\"></i>
                                            <span class=\"js-likes\" style=\"color: midnightblue\">";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postLikesCount", []), "html", null, true);
                echo "</span>
                                            <span class=\"js-label\" style=\"color: midnightblue\">Like</span>
                                        </a>
                                    ";
            }
            // line 77
            echo "                                    ";
            if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) == null)) {
                // line 78
                echo "                                        <a>
                                            <i class=\"far fa-thumbs-up\" style=\"color:midnightblue\"></i>
                                            <span class=\"js-likes\" style=\"color: midnightblue\">";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postLikesCount", []), "html", null, true);
                echo "</span>
                                            <span class=\"js-label\" style=\"color: midnightblue\">Like</span>
                                        </a>
                                    ";
            }
            // line 84
            echo "
                                    <h4 class=\"p-b-16\">
                                        <a href=";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Detail", ["postId" => $this->getAttribute($context["blogposts"], "postId", [])]), "html", null, true);
            echo " class=\"tit9\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postContent", []), "html", null, true);
            echo "</a>
                                    </h4>


                                    <div class=\"txt32 flex-w p-b-24\">
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user\" style=\"color: midnightblue\"></i> by ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["blogposts"], "author", []), "username", []), "html", null, true);
            echo "
                                        <span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                        <span>
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-calendar\" style=\"color: midnightblue;\"></i> ";
            // line 97
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blogposts"], "postDate", []), "m/d/Y"), "html", null, true);
            echo "
                                            <span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                        <span>
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-quote-left\"style=\"color: midnightblue\"></i> ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postType", []), "html", null, true);
            echo "
                                            <span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                        <span>
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-comments\" style=\"color:midnightblue\"></i> ";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postCommentCount", []), "html", null, true);
            echo " Comments
                                        <span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>


                                        ";
            // line 112
            if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
                // line 113
                echo "
                                            <!-- Modal HTML -->
                                            <div id=\"myModal\" class=\"modal fade\">
                                                <div class=\"modal-dialog modal-confirm\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <div class=\"icon-box\">
                                                                <i class=\"material-icons\">&#xE5CD;</i>
                                                            </div>
                                                            <h4 class=\"modal-title\">Are you sure?</h4>
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <p>Do you really want to delete these records? This process cannot be undone.</p>
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button type=\"button\" class=\"btn btn-info\" data-dismiss=\"modal\">Cancel</button>
                                                            <a href=\"";
                // line 130
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_delete", ["postId" => $this->getAttribute($context["blogposts"], "postId", [])]), "html", null, true);
                echo "\" type=\"button\" class=\"btn btn-danger\"><label style=\"color:white;\">Delete</label></a>


                                                        </div>
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
                                        ";
            }
            // line 174
            echo "
                                    </div>

                                    <p style=\" word-wrap:break-word\">
                                        ";
            // line 178
            echo $this->getAttribute($context["blogposts"], "articleContent", []);
            echo "
                                    </p>
                                    <br>

                                    <a class=\"dis-block txt4m-t-30\" href=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Detail", ["postId" => $this->getAttribute($context["blogposts"], "postId", [])]), "html", null, true);
            echo "\">
                                        Continue Reading
                                        <i class=\"fas fa-book-open\"></i>
                                    </a>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogposts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "



                        <!-- Pagination -->

                        <div class=\"pagination flex-l-m flex-w m-l--6 p-t-25\">
                            ";
        // line 196
        echo $this->env->getExtension('Tiloweb\PaginationBundle\Twig\Extension\PaginationExtension')->paginationFunction(($context["v"] ?? $this->getContext($context, "v")), "page");
        echo "

                        </div>
                    </div>
                </div>

                <div style=\"word-wrap: break-word\" class=\"col-md-4 col-lg-3\">
                    <div style=\"word-wrap: break-word\" class=\"sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md\">
                        <!-- Search -->
                        <div >
                            ";
        // line 206
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
            // line 207
            echo "

                                <div class=\"right\">
                                    <a href=\"#addEmployeeModal\"
                                       data-toggle=\"modal\"><i class=\"fas fa-plus-circle\" style=\"color: green\"></i><span style=\"color: black\"> Add A Post</span></a><br>
                                    <a href=\"";
            // line 212
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Managment");
            echo "\"
                                    ><i class=\"fas fa-tasks\" style=\"color: darkred\"></i> <span style=\"color: black;font-family: Montserrat-Regular\">Blog Manager</span></a>

                                </div>

                                <!-- Add Modal HTML -->
                                <div id=\"addEmployeeModal\" class=\"modal fade\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            ";
            // line 221
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "






                                            <div class=\"modal-header\">
                                                <h4 class=\"modal-title\">Add A Post</h4>
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                            </div>
                                            <div class=\"modal-body\">
                                                <div class=\"form-group\">
                                                    <label>Post Content</label>
                                                    ";
            // line 235
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "postContent", []), 'widget', ["attr" => ["class" => "form-control", "type" => "textarea"]]);
            echo "

                                                </div>
                                                <div class=\"form-group\">
                                                    <label>Post Type</label>
                                                    ";
            // line 240
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "postType", []), 'widget', ["attr" => ["class" => "form-control", "style" => "font-size: 12px"]]);
            echo "

                                                </div>
                                                <div class=\"form-group\">
                                                    <label>Article Title</label>
                                                    ";
            // line 245
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "articleTitle", []), 'widget', ["attr" => ["class" => "form-control", "type" => "textarea"]]);
            echo "

                                                </div>
                                                <div class=\"form-group\">
                                                    <label>Article Content</label>
                                                    ";
            // line 250
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "articleContent", []), 'widget');
            echo "

                                                </div>
                                                <div class=\"form-group\">
                                                    <label>Your Image</label>
                                                    ";
            // line 255
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", []), 'widget', ["attr" => ["class" => "form-control", "style" => "font-size: 12px"]]);
            echo "

                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                                                <input type=\"submit\" onclick=\"myFunction()\" id=\"form\" name=\"form\" class=\"btn btn-success\" id=\"addb\" value=\"Add\">
                                            </div>
                                            ";
            // line 263
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        // line 268
        echo "                        </div>

                        <!-- Categories -->
                        <div class=\"categories\">
                            <h4 class=\"txt33 bo5-b p-b-35 p-t-58\">
                                <a>Categories</a>
                            </h4>

                            <ul>
                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"";
        // line 278
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Blog_PostCat", ["cat" => "NewsjackingPost"]);
        echo "\" class=\"txt27\">
                                        Newsjacking
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"";
        // line 284
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Blog_PostCat", ["cat" => "InstructionalPost"]);
        echo "\" class=\"txt27\">
                                        Instructional
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"";
        // line 290
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Blog_PostCat", ["cat" => "PersonalSpotlightPost"]);
        echo "\" class=\"txt27\">
                                        Personal Spotlight
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"";
        // line 296
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Blog_PostCat", ["cat" => "CheatSheetPost"]);
        echo "\" class=\"txt27\">
                                        Cheat Sheet
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"";
        // line 302
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Blog_PostCat", ["cat" => "MediaPost"]);
        echo "\" class=\"txt27\">
                                        Media
                                    </a>
                                </li>
                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"";
        // line 307
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Blog_PostCat", ["cat" => "Entertaining"]);
        echo "\" class=\"txt27\">
                                        Entertaining
                                    </a>
                                </li>
                            </ul>
                        </div>


                        <!-- Most Popular -->
                        <div style=\"word-wrap: break-word\" class=\"popular\">
                            <h4 class=\"txt33 p-b-35 p-t-58\">
                                Most popular
                            </h4>

                            <ul>
                                ";
        // line 322
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["popular"] ?? $this->getContext($context, "popular")));
        foreach ($context['_seq'] as $context["_key"] => $context["pop"]) {
            // line 323
            echo "                                    <li class=\"flex-w m-b-25\">
                                        <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                            <a href=\"";
            // line 325
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Detail", ["postId" => $this->getAttribute($context["pop"], "postId", [])]), "html", null, true);
            echo "\">
                                                <img src=\"";
            // line 326
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["pop"], "image", []))), "html", null, true);
            echo "\" alt=\"IMG-BLOG\">
                                            </a>
                                        </div>

                                        <div class=\"size28\">
                                            <a href=\"";
            // line 331
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Detail", ["postId" => $this->getAttribute($context["pop"], "postId", [])]), "html", null, true);
            echo "\" class=\"dis-block txt28 m-b-8\">
                                                ";
            // line 332
            echo twig_escape_filter($this->env, $this->getAttribute($context["pop"], "articleTitle", []), "html", null, true);
            echo "
                                            </a>

                                            <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 336
            $context["leftDays"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["pop"], "postDate", []), "diff", [0 => twig_date_converter($this->env, "now")], "method"), "format", [0 => "%a"], "method");
            // line 337
            echo "                                                ";
            echo twig_escape_filter($this->env, ($context["leftDays"] ?? $this->getContext($context, "leftDays")), "html", null, true);
            echo " Days Ago
\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 342
        echo "                            </ul>
                        </div>


                        <!-- Archive -->
                        <div class=\"archive\">
                            <h4 class=\"txt33 p-b-20 p-t-43\">
                                Archive
                            </h4>

                            <ul>
                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        uly 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(9)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        June 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(39)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        May 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(29)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        April  2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(35)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        March 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(22)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        February 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(32)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        January 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(21)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        December 2017
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(26)
\t\t\t\t\t\t\t\t\t</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>


    <script src=\"//cdn.ckeditor.com/4.11.3/full/ckeditor.js\"></script><script>
    CKEDITOR.replace('editor1');
</script>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:BlogViews:PostsByCat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 342,  563 => 337,  561 => 336,  554 => 332,  550 => 331,  542 => 326,  538 => 325,  534 => 323,  530 => 322,  512 => 307,  504 => 302,  495 => 296,  486 => 290,  477 => 284,  468 => 278,  456 => 268,  448 => 263,  437 => 255,  429 => 250,  421 => 245,  413 => 240,  405 => 235,  388 => 221,  376 => 212,  369 => 207,  367 => 206,  354 => 196,  345 => 189,  332 => 182,  325 => 178,  319 => 174,  272 => 130,  253 => 113,  251 => 112,  243 => 107,  235 => 102,  227 => 97,  219 => 92,  208 => 86,  204 => 84,  197 => 80,  193 => 78,  190 => 77,  183 => 73,  177 => 71,  174 => 70,  171 => 69,  166 => 67,  160 => 65,  157 => 64,  155 => 63,  145 => 56,  132 => 46,  128 => 45,  124 => 43,  120 => 42,  101 => 26,  96 => 24,  87 => 18,  74 => 8,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SmartStartBase.html.twig\" %}
{% block title %}Blog{% endblock %}
{% block body %}



    <!-- Title Page -->
    <section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url({{ asset('assets/images/blog-banner.png') }});\">
        <h2 class=\"tit6 t-center\">
        </h2>
    </section>


    <!-- Content page -->
    <section>
        <div class=\"bread-crumb bo5-b p-t-17 p-b-17\">
            <div class=\"container\">
                <a href=\"{{ path('blog_ListPosts') }}\" class=\"txt27\">
                    Home
                </a>

                <span class=\"txt29 m-l-10 m-r-10\" style=\"color: black\">/</span>

                <a href=\"{{ path('blog_ListPosts') }}\" >

                    {{ app.request.attributes.get('cat') }}
                </a>
            </div>
        </div>




        <div class=\"container\">


            <div class=\"row\">
                <div class=\"col-md-8 col-lg-9\">
                    <div class=\"p-t-80 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md\">

                        <!-- Block4 -->
                        {% for blogposts in v %}
                            <div class=\"blo4 p-b-63\" id=\"content\">
                                <div class=\"pic-blo4 hov-img-zoom bo-rad-10 pos-relative\">
                                    <a href={{ path('blog_Detail',{('postId'):blogposts.postId}) }}>
                                        <img  src=\"{{ asset('uploads/images/' ~ blogposts.image) }}\" width=\"600\" height=\"427\" alt=\"IMG-BLOG\">
                                    </a>

                                    <div class=\"date-blo4 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t<span class=\"txt30 m-b-4\">


\t\t\t\t\t\t\t\t\t</span>

                                        <span class=\"txt31\">
\t\t\t\t\t\t\t\t\t\t{{ blogposts.postDate|date(\"m/d/Y\")}}
\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </div>

                                <div class=\"text-blo4 p-t-33\">

                                    {% if app.user!=null %}
                                        {% if app.user.id==blogposts.author.id %}
                                            <a href=\"{{ path('blog_delete',{('postId'):blogposts.postId}) }}\" class=\"delete\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" title=\"Delete\"></i></a>

                                            <a href=\"{{ path('Update_BlogPost',{('postId'):blogposts.postId}) }}\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" title=\"Edit\"></i></a>
                                        {% endif %}
                                    {% endif %}
                                    {% if app.user!=null %}
                                        <a href=\"{{ path('blog_Like',{('postId'):blogposts.postId,('id'):app.user.id}) }}\" class=\"link\">
                                            <i class=\"far fa-thumbs-up\" style=\"color:midnightblue\"></i>
                                            <span class=\"js-likes\" style=\"color: midnightblue\">{{ blogposts.postLikesCount }}</span>
                                            <span class=\"js-label\" style=\"color: midnightblue\">Like</span>
                                        </a>
                                    {% endif %}
                                    {% if app.user==null %}
                                        <a>
                                            <i class=\"far fa-thumbs-up\" style=\"color:midnightblue\"></i>
                                            <span class=\"js-likes\" style=\"color: midnightblue\">{{ blogposts.postLikesCount }}</span>
                                            <span class=\"js-label\" style=\"color: midnightblue\">Like</span>
                                        </a>
                                    {% endif %}

                                    <h4 class=\"p-b-16\">
                                        <a href={{ path('blog_Detail',{('postId'):blogposts.postId}) }} class=\"tit9\">{{ blogposts.postContent }}</a>
                                    </h4>


                                    <div class=\"txt32 flex-w p-b-24\">
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user\" style=\"color: midnightblue\"></i> by {{ blogposts.author.username }}
                                        <span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                        <span>
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-calendar\" style=\"color: midnightblue;\"></i> {{ blogposts.postDate|date(\"m/d/Y\")}}
                                            <span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                        <span>
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-quote-left\"style=\"color: midnightblue\"></i> {{ blogposts.postType }}
                                            <span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                        <span>
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-comments\" style=\"color:midnightblue\"></i> {{ blogposts.postCommentCount }} Comments
                                        <span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>


                                        {% if app.user!=null %}

                                            <!-- Modal HTML -->
                                            <div id=\"myModal\" class=\"modal fade\">
                                                <div class=\"modal-dialog modal-confirm\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <div class=\"icon-box\">
                                                                <i class=\"material-icons\">&#xE5CD;</i>
                                                            </div>
                                                            <h4 class=\"modal-title\">Are you sure?</h4>
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <p>Do you really want to delete these records? This process cannot be undone.</p>
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button type=\"button\" class=\"btn btn-info\" data-dismiss=\"modal\">Cancel</button>
                                                            <a href=\"{{ path('blog_delete',{('postId'):blogposts.postId}) }}\" type=\"button\" class=\"btn btn-danger\"><label style=\"color:white;\">Delete</label></a>


                                                        </div>
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
                                        {% endif %}

                                    </div>

                                    <p style=\" word-wrap:break-word\">
                                        {{ blogposts.articleContent|raw }}
                                    </p>
                                    <br>

                                    <a class=\"dis-block txt4m-t-30\" href=\"{{ path('blog_Detail',{('postId'):blogposts.postId}) }}\">
                                        Continue Reading
                                        <i class=\"fas fa-book-open\"></i>
                                    </a>
                                </div>
                            </div>
                        {% endfor %}




                        <!-- Pagination -->

                        <div class=\"pagination flex-l-m flex-w m-l--6 p-t-25\">
                            {{ pagination(v, 'page') }}

                        </div>
                    </div>
                </div>

                <div style=\"word-wrap: break-word\" class=\"col-md-4 col-lg-3\">
                    <div style=\"word-wrap: break-word\" class=\"sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md\">
                        <!-- Search -->
                        <div >
                            {% if app.user!=null %}


                                <div class=\"right\">
                                    <a href=\"#addEmployeeModal\"
                                       data-toggle=\"modal\"><i class=\"fas fa-plus-circle\" style=\"color: green\"></i><span style=\"color: black\"> Add A Post</span></a><br>
                                    <a href=\"{{ path('blog_Managment') }}\"
                                    ><i class=\"fas fa-tasks\" style=\"color: darkred\"></i> <span style=\"color: black;font-family: Montserrat-Regular\">Blog Manager</span></a>

                                </div>

                                <!-- Add Modal HTML -->
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
                            {% endif %}
                        </div>

                        <!-- Categories -->
                        <div class=\"categories\">
                            <h4 class=\"txt33 bo5-b p-b-35 p-t-58\">
                                <a>Categories</a>
                            </h4>

                            <ul>
                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"{{ path('Blog_PostCat',{('cat'):('NewsjackingPost')}) }}\" class=\"txt27\">
                                        Newsjacking
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"{{ path('Blog_PostCat',{('cat'):('InstructionalPost')}) }}\" class=\"txt27\">
                                        Instructional
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"{{ path('Blog_PostCat',{('cat'):('PersonalSpotlightPost')}) }}\" class=\"txt27\">
                                        Personal Spotlight
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"{{ path('Blog_PostCat',{('cat'):('CheatSheetPost')}) }}\" class=\"txt27\">
                                        Cheat Sheet
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"{{ path('Blog_PostCat',{('cat'):('MediaPost')}) }}\" class=\"txt27\">
                                        Media
                                    </a>
                                </li>
                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"{{ path('Blog_PostCat',{('cat'):('Entertaining')}) }}\" class=\"txt27\">
                                        Entertaining
                                    </a>
                                </li>
                            </ul>
                        </div>


                        <!-- Most Popular -->
                        <div style=\"word-wrap: break-word\" class=\"popular\">
                            <h4 class=\"txt33 p-b-35 p-t-58\">
                                Most popular
                            </h4>

                            <ul>
                                {% for pop in popular %}
                                    <li class=\"flex-w m-b-25\">
                                        <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                            <a href=\"{{ path('blog_Detail',{('postId'):pop.postId}) }}\">
                                                <img src=\"{{ asset('uploads/images/' ~ pop.image) }}\" alt=\"IMG-BLOG\">
                                            </a>
                                        </div>

                                        <div class=\"size28\">
                                            <a href=\"{{ path('blog_Detail',{('postId'):pop.postId}) }}\" class=\"dis-block txt28 m-b-8\">
                                                {{ pop.articleTitle }}
                                            </a>

                                            <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\t{% set leftDays = pop.postDate.diff( date(\"now\") ).format('%a') %}
                                                {{ leftDays }} Days Ago
\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>


                        <!-- Archive -->
                        <div class=\"archive\">
                            <h4 class=\"txt33 p-b-20 p-t-43\">
                                Archive
                            </h4>

                            <ul>
                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        uly 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(9)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        June 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(39)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        May 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(29)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        April  2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(35)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        March 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(22)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        February 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(32)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        January 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(21)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        December 2017
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(26)
\t\t\t\t\t\t\t\t\t</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>


    <script src=\"//cdn.ckeditor.com/4.11.3/full/ckeditor.js\"></script><script>
    CKEDITOR.replace('editor1');
</script>



{% endblock %}





", "BlogBundle:BlogViews:PostsByCat.html.twig", "C:\\xampp\\htdocs\\SmartStart\\src\\BlogBundle/Resources/views/BlogViews/PostsByCat.html.twig");
    }
}
