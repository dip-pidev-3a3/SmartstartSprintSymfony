<?php

/* BlogBundle:BlogViews:BlogManagment.html.twig */
class __TwigTemplate_ef8419f7f2c06ea027159652481b3630cb02f3de2564ee47006323b4439fc100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmartStartBase.html.twig", "BlogBundle:BlogViews:BlogManagment.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:BlogViews:BlogManagment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:BlogViews:BlogManagment.html.twig"));

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

        echo "Blog Managment";
        
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
        echo "    <!-- Title Page -->
    <section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url(";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/blog-banner.png"), "html", null, true);
        echo ");\">
        <h2 class=\"tit6 t-center\">
        </h2>
    </section>
    <br><br>

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-sm-3\"><!--left col-->

                <ul class=\"list-group\">
                    <li class=\"list-group-item\" style=\"color: midnightblue;font-size: small;font-family: Montserrat-Bold\">Profile</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>First Post</strong></span> ";
        // line 18
        echo twig_escape_filter($this->env, twig_join_filter(($context["first"] ?? $this->getContext($context, "first"))), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Last Post</strong></span> ";
        // line 19
        echo twig_escape_filter($this->env, twig_join_filter(($context["last"] ?? $this->getContext($context, "last"))), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Username</strong></span>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
        echo "</li>

                </ul>





                <br>

                <ul class=\"list-group\">
                    <li class=\"list-group-item\" style=\"color: midnightblue;font-size: small;font-family: Montserrat-Bold\">Number Of Posts Per Category</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>NEWSJACKING</strong></span>";
        // line 32
        echo twig_escape_filter($this->env, twig_join_filter(($context["n"] ?? $this->getContext($context, "n"))), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>INSTRUCTIONAL</strong></span>";
        // line 33
        echo twig_escape_filter($this->env, twig_join_filter(($context["i"] ?? $this->getContext($context, "i"))), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>PERSONAL SPOTLIGHT</strong></span>";
        // line 34
        echo twig_escape_filter($this->env, twig_join_filter(($context["p"] ?? $this->getContext($context, "p"))), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>CHEAT SHEET</strong></span>";
        // line 35
        echo twig_escape_filter($this->env, twig_join_filter(($context["c"] ?? $this->getContext($context, "c"))), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>MEDIA</strong></span>";
        // line 36
        echo twig_escape_filter($this->env, twig_join_filter(($context["m"] ?? $this->getContext($context, "m"))), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>ENTERTAINING</strong></span>";
        // line 37
        echo twig_escape_filter($this->env, twig_join_filter(($context["e"] ?? $this->getContext($context, "e"))), "html", null, true);
        echo "</li>

                </ul>


                <br>

                <ul class=\"list-group\">
                    <li class=\"list-group-item\" style=\"color: midnightblue;font-size: small;font-family: Montserrat-Bold\">Numbers</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Likes</strong></span>";
        // line 46
        echo twig_escape_filter($this->env, twig_join_filter(($context["l"] ?? $this->getContext($context, "l"))), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Comments</strong></span> ";
        // line 47
        echo twig_escape_filter($this->env, twig_join_filter(($context["com"] ?? $this->getContext($context, "com"))), "html", null, true);
        echo "</li>


                </ul>
                ";
        // line 51
        if ((twig_join_filter(($context["l"] ?? $this->getContext($context, "l"))) > 1000)) {
            // line 52
            echo "
                    <br>
                    <ul class=\"list-group\">
                        <li class=\"list-group-item\" style=\"color: midnightblue;font-size: small;font-family: Montserrat-Bold\">Profits</li>
                        <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Likes</strong></span>";
            // line 56
            echo twig_escape_filter($this->env, twig_join_filter(($context["l"] ?? $this->getContext($context, "l"))), "html", null, true);
            echo "</li>
                        <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Comments</strong></span> ";
            // line 57
            echo twig_escape_filter($this->env, twig_join_filter(($context["com"] ?? $this->getContext($context, "com"))), "html", null, true);
            echo "</li>
                    </ul>
                        <br>

                ";
            // line 61
            if ((($context["profit"] ?? $this->getContext($context, "profit")) == null)) {
                // line 62
                echo "                        <center><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">
                    <i class=\"fas fa-money-check-alt\">  Ask For Your Money</i>
                        </button></center>

                        <!-- The Modal -->
                        <div class=\"modal fade\" id=\"myModal\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">

                                    <!-- Modal Header -->
                                    <div class=\"modal-header\">
                                        <h4 class=\"modal-title\">Modal Heading</h4>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class=\"modal-body\">
                                        Modal body..
                                    </div>

                                    <!-- Modal footer -->
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>

                                        <a href=\"";
                // line 86
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Profits");
                echo "\" class=\"btn btn-info\">
                                            Accept
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                ";
            }
            // line 96
            echo "                    ";
            if ((($context["profit"] ?? $this->getContext($context, "profit")) != null)) {
                // line 97
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["profit"] ?? $this->getContext($context, "profit")));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 98
                    echo "                            ";
                    if (($this->getAttribute($context["i"], "Status", []) == 1)) {
                        // line 99
                        echo "                                ";
                        if ((twig_date_format_filter($this->env, "now", "Y-m-d") < twig_date_format_filter($this->env, $this->getAttribute($context["i"], "EndDate", []), "Y-m-d"))) {
                            // line 100
                            echo "

                        Successfully Sent !
                        You will have to wait until <span>";
                            // line 103
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "EndDate", []), "l jS  F Y h:i:s A"), "html", null, true);
                            echo "</span> to ask for your next pay !
                            ";
                        }
                        // line 105
                        echo "                                ";
                        if ((twig_date_format_filter($this->env, "now", "Y-m-d") > twig_date_format_filter($this->env, $this->getAttribute($context["i"], "EndDate", []), "Y-m-d"))) {
                            // line 106
                            echo "                                    <center><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">
                                            <i class=\"fas fa-money-check-alt\">  Ask For Your Money</i>
                                        </button></center>

                                    <!-- The Modal -->
                                    <div class=\"modal fade\" id=\"myModal\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">

                                                <!-- Modal Header -->
                                                <div class=\"modal-header\">
                                                    <h4 class=\"modal-title\">Modal Heading</h4>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class=\"modal-body\">
                                                    Modal body..
                                                </div>

                                                <!-- Modal footer -->
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>

                                                    <a href=\"";
                            // line 130
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Profits");
                            echo "\" class=\"btn btn-info\">
                                                        Accept
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                ";
                        }
                        // line 139
                        echo "                            ";
                    }
                    // line 140
                    echo "                            ";
                    if (($this->getAttribute($context["i"], "Status", []) == 2)) {
                        // line 141
                        echo "                                Ongoing
                                <a href=\"";
                        // line 142
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Profits");
                        echo "\" class=\"btn btn-info\">
                                    Confirm your Payment
                                </a>
                            ";
                    }
                    // line 146
                    echo "                            ";
                    if (($this->getAttribute($context["i"], "Status", []) == 0)) {
                        // line 147
                        echo "                                ";
                        if ((twig_date_format_filter($this->env, "now", "Y-m-d") < twig_date_format_filter($this->env, $this->getAttribute($context["i"], "EndDate", []), "Y-m-d"))) {
                            // line 148
                            echo "

                                    Successfully Sent !
                                    You will have to wait until <span>";
                            // line 151
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "EndDate", []), "l jS  F Y h:i:s A"), "html", null, true);
                            echo "</span> to ask for your next pay !
                                ";
                        }
                        // line 153
                        echo "                                ";
                        if ((twig_date_format_filter($this->env, "now", "Y-m-d") > twig_date_format_filter($this->env, $this->getAttribute($context["i"], "EndDate", []), "Y-m-d"))) {
                            // line 154
                            echo "                                    <center><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">
                                            <i class=\"fas fa-money-check-alt\">  Ask For Your Money</i>
                                        </button></center>

                                    <!-- The Modal -->
                                    <div class=\"modal fade\" id=\"myModal\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">

                                                <!-- Modal Header -->
                                                <div class=\"modal-header\">
                                                    <h4 class=\"modal-title\">Modal Heading</h4>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class=\"modal-body\">
                                                    Modal body..
                                                </div>

                                                <!-- Modal footer -->
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>

                                                    <a href=\"";
                            // line 178
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Profits");
                            echo "\" class=\"btn btn-info\">
                                                        Accept
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                ";
                        }
                        // line 187
                        echo "                            ";
                    }
                    // line 188
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 189
                echo "
                        ";
            }
            // line 191
            echo "                ";
        }
        // line 192
        echo "                ";
        if ((twig_join_filter(($context["l"] ?? $this->getContext($context, "l"))) < 1000)) {
            // line 193
            echo "                <br><br>Vous devez Debloquer les 1000 Likes pour rentabiliser votre Blog
                ";
        }
        // line 195
        echo "

            </div><!--/col-3-->
            <div class=\"col-sm-9\">



                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"home\">
                        <div id=\"carousel-example-2\" class=\"carousel slide carousel-fade z-depth-1-half\" data-ride=\"carousel\">
                            <!--Indicators-->
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carousel-example-2\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carousel-example-2\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carousel-example-2\" data-slide-to=\"2\"></li>
                            </ol>
                            <!--/.Indicators-->
                            <!--Slides-->

                            <!--/.Slides-->
                            <!--Controls-->
                            <a class=\"carousel-control-prev\" href=\"#carousel-example-2\" role=\"button\" data-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carousel-example-2\" role=\"button\" data-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                            <!--/.Controls-->
                        </div>



                        <h4>Your Posts</h4>
                        <br><hr>
                         ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["v"] ?? $this->getContext($context, "v")));
        foreach ($context['_seq'] as $context["_key"] => $context["blogposts"]) {
            // line 232
            echo "                        <div class=\"media\">
                            <img class=\"mr-3\" src=\"";
            // line 233
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["blogposts"], "image", []))), "html", null, true);
            echo "\" width=\"64\" height=\"64\" alt=\"Generic placeholder image\">
                            <div class=\"media-body\">
                                <h5 class=\"mt-0\">";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "articleTitle", []), "html", null, true);
            echo "</h5>
                                ";
            // line 236
            echo $this->getAttribute($context["blogposts"], "articleContent", []);
            echo "
                            </div>
                            <div class=\"right\">
                                <a href=\"";
            // line 239
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_delete", ["postId" => $this->getAttribute($context["blogposts"], "postId", [])]), "html", null, true);
            echo "\" class=\"delete\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" title=\"Delete\" style=\"color: darkred\"></i></a>

                                <a href=\"";
            // line 241
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Update_BlogPost", ["postId" => $this->getAttribute($context["blogposts"], "postId", [])]), "html", null, true);
            echo "\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" title=\"Edit\"style=\"color: green\"></i></a><br><br>
                                <i class=\"far fa-calendar\" style=\"color: midnightblue;\"></i> ";
            // line 242
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blogposts"], "postDate", []), "m/d/Y"), "html", null, true);
            echo "
                                <br>
                                <i class=\"far fa-thumbs-up\" style=\"color:midnightblue\"></i>
                                <span class=\"js-likes\" style=\"color: midnightblue\">";
            // line 245
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postLikesCount", []), "html", null, true);
            echo "</span>
                                <span class=\"js-label\" style=\"color: midnightblue\">Like</span>
                                <br>
                                <i class=\"fas fa-comments\" style=\"color:midnightblue\"></i> ";
            // line 248
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postCommentCount", []), "html", null, true);
            echo " Comments
                            </div>
                        </div>
                             <br><hr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogposts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "
                    </div><!--/tab-pane-->
                </div> <center><div class=\"pagination flex-l-m flex-w m-l--6 p-t-25\">
                        <center>";
        // line 256
        echo $this->env->getExtension('Tiloweb\PaginationBundle\Twig\Extension\PaginationExtension')->paginationFunction(($context["v"] ?? $this->getContext($context, "v")), "page");
        echo "</center></div></center>
                <br><br>
            </div>


        </div>
        <!--/col-9-->
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:BlogViews:BlogManagment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 256,  466 => 253,  455 => 248,  449 => 245,  443 => 242,  439 => 241,  434 => 239,  428 => 236,  424 => 235,  419 => 233,  416 => 232,  412 => 231,  374 => 195,  370 => 193,  367 => 192,  364 => 191,  360 => 189,  354 => 188,  351 => 187,  339 => 178,  313 => 154,  310 => 153,  305 => 151,  300 => 148,  297 => 147,  294 => 146,  287 => 142,  284 => 141,  281 => 140,  278 => 139,  266 => 130,  240 => 106,  237 => 105,  232 => 103,  227 => 100,  224 => 99,  221 => 98,  216 => 97,  213 => 96,  200 => 86,  174 => 62,  172 => 61,  165 => 57,  161 => 56,  155 => 52,  153 => 51,  146 => 47,  142 => 46,  130 => 37,  126 => 36,  122 => 35,  118 => 34,  114 => 33,  110 => 32,  95 => 20,  91 => 19,  87 => 18,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Blog Managment{% endblock %}
{% block body %}
    <!-- Title Page -->
    <section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url({{ asset('assets/images/blog-banner.png') }});\">
        <h2 class=\"tit6 t-center\">
        </h2>
    </section>
    <br><br>

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-sm-3\"><!--left col-->

                <ul class=\"list-group\">
                    <li class=\"list-group-item\" style=\"color: midnightblue;font-size: small;font-family: Montserrat-Bold\">Profile</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>First Post</strong></span> {{ first|join }}</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Last Post</strong></span> {{ last|join }}</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Username</strong></span>{{ app.user.username }}</li>

                </ul>





                <br>

                <ul class=\"list-group\">
                    <li class=\"list-group-item\" style=\"color: midnightblue;font-size: small;font-family: Montserrat-Bold\">Number Of Posts Per Category</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>NEWSJACKING</strong></span>{{ n|join }}</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>INSTRUCTIONAL</strong></span>{{ i|join }}</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>PERSONAL SPOTLIGHT</strong></span>{{ p|join }}</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>CHEAT SHEET</strong></span>{{ c|join }}</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>MEDIA</strong></span>{{ m|join }}</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>ENTERTAINING</strong></span>{{ e|join }}</li>

                </ul>


                <br>

                <ul class=\"list-group\">
                    <li class=\"list-group-item\" style=\"color: midnightblue;font-size: small;font-family: Montserrat-Bold\">Numbers</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Likes</strong></span>{{ l|join }}</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Comments</strong></span> {{ com|join }}</li>


                </ul>
                {% if l|join>1000 %}

                    <br>
                    <ul class=\"list-group\">
                        <li class=\"list-group-item\" style=\"color: midnightblue;font-size: small;font-family: Montserrat-Bold\">Profits</li>
                        <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Likes</strong></span>{{ l|join }}</li>
                        <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Comments</strong></span> {{ com|join }}</li>
                    </ul>
                        <br>

                {% if profit==null %}
                        <center><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">
                    <i class=\"fas fa-money-check-alt\">  Ask For Your Money</i>
                        </button></center>

                        <!-- The Modal -->
                        <div class=\"modal fade\" id=\"myModal\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">

                                    <!-- Modal Header -->
                                    <div class=\"modal-header\">
                                        <h4 class=\"modal-title\">Modal Heading</h4>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class=\"modal-body\">
                                        Modal body..
                                    </div>

                                    <!-- Modal footer -->
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>

                                        <a href=\"{{ path('blog_Profits') }}\" class=\"btn btn-info\">
                                            Accept
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                {% endif %}
                    {% if profit!=null %}
                        {% for i in profit %}
                            {% if i.Status==1 %}
                                {% if \"now\"|date('Y-m-d') < i.EndDate|date('Y-m-d') %}


                        Successfully Sent !
                        You will have to wait until <span>{{ i.EndDate|date('l jS \\f F Y h:i:s A') }}</span> to ask for your next pay !
                            {% endif %}
                                {% if \"now\"|date('Y-m-d') > i.EndDate|date('Y-m-d') %}
                                    <center><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">
                                            <i class=\"fas fa-money-check-alt\">  Ask For Your Money</i>
                                        </button></center>

                                    <!-- The Modal -->
                                    <div class=\"modal fade\" id=\"myModal\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">

                                                <!-- Modal Header -->
                                                <div class=\"modal-header\">
                                                    <h4 class=\"modal-title\">Modal Heading</h4>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class=\"modal-body\">
                                                    Modal body..
                                                </div>

                                                <!-- Modal footer -->
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>

                                                    <a href=\"{{ path('blog_Profits') }}\" class=\"btn btn-info\">
                                                        Accept
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                            {% endif %}
                            {% if i.Status==2 %}
                                Ongoing
                                <a href=\"{{ path('blog_Profits') }}\" class=\"btn btn-info\">
                                    Confirm your Payment
                                </a>
                            {% endif %}
                            {% if i.Status==0 %}
                                {% if \"now\"|date('Y-m-d') < i.EndDate|date('Y-m-d') %}


                                    Successfully Sent !
                                    You will have to wait until <span>{{ i.EndDate|date('l jS \\f F Y h:i:s A') }}</span> to ask for your next pay !
                                {% endif %}
                                {% if \"now\"|date('Y-m-d') > i.EndDate|date('Y-m-d') %}
                                    <center><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">
                                            <i class=\"fas fa-money-check-alt\">  Ask For Your Money</i>
                                        </button></center>

                                    <!-- The Modal -->
                                    <div class=\"modal fade\" id=\"myModal\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">

                                                <!-- Modal Header -->
                                                <div class=\"modal-header\">
                                                    <h4 class=\"modal-title\">Modal Heading</h4>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class=\"modal-body\">
                                                    Modal body..
                                                </div>

                                                <!-- Modal footer -->
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>

                                                    <a href=\"{{ path('blog_Profits') }}\" class=\"btn btn-info\">
                                                        Accept
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                            {% endif %}
                        {% endfor %}

                        {% endif %}
                {% endif %}
                {% if l|join<1000 %}
                <br><br>Vous devez Debloquer les 1000 Likes pour rentabiliser votre Blog
                {% endif %}


            </div><!--/col-3-->
            <div class=\"col-sm-9\">



                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"home\">
                        <div id=\"carousel-example-2\" class=\"carousel slide carousel-fade z-depth-1-half\" data-ride=\"carousel\">
                            <!--Indicators-->
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carousel-example-2\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carousel-example-2\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carousel-example-2\" data-slide-to=\"2\"></li>
                            </ol>
                            <!--/.Indicators-->
                            <!--Slides-->

                            <!--/.Slides-->
                            <!--Controls-->
                            <a class=\"carousel-control-prev\" href=\"#carousel-example-2\" role=\"button\" data-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carousel-example-2\" role=\"button\" data-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                            <!--/.Controls-->
                        </div>



                        <h4>Your Posts</h4>
                        <br><hr>
                         {% for blogposts in v %}
                        <div class=\"media\">
                            <img class=\"mr-3\" src=\"{{ asset('uploads/images/' ~ blogposts.image) }}\" width=\"64\" height=\"64\" alt=\"Generic placeholder image\">
                            <div class=\"media-body\">
                                <h5 class=\"mt-0\">{{ blogposts.articleTitle }}</h5>
                                {{ blogposts.articleContent|raw }}
                            </div>
                            <div class=\"right\">
                                <a href=\"{{ path('blog_delete',{('postId'):blogposts.postId}) }}\" class=\"delete\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" title=\"Delete\" style=\"color: darkred\"></i></a>

                                <a href=\"{{ path('Update_BlogPost',{('postId'):blogposts.postId}) }}\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" title=\"Edit\"style=\"color: green\"></i></a><br><br>
                                <i class=\"far fa-calendar\" style=\"color: midnightblue;\"></i> {{ blogposts.postDate|date(\"m/d/Y\")}}
                                <br>
                                <i class=\"far fa-thumbs-up\" style=\"color:midnightblue\"></i>
                                <span class=\"js-likes\" style=\"color: midnightblue\">{{ blogposts.postLikesCount }}</span>
                                <span class=\"js-label\" style=\"color: midnightblue\">Like</span>
                                <br>
                                <i class=\"fas fa-comments\" style=\"color:midnightblue\"></i> {{ blogposts.postCommentCount }} Comments
                            </div>
                        </div>
                             <br><hr>
                        {% endfor %}

                    </div><!--/tab-pane-->
                </div> <center><div class=\"pagination flex-l-m flex-w m-l--6 p-t-25\">
                        <center>{{ pagination(v, 'page') }}</center></div></center>
                <br><br>
            </div>


        </div>
        <!--/col-9-->
    </div>


{% endblock %}", "BlogBundle:BlogViews:BlogManagment.html.twig", "C:\\wamp64\\www\\SmartStart\\src\\BlogBundle/Resources/views/BlogViews/BlogManagment.html.twig");
    }
}
