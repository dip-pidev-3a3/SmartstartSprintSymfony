<?php

/* ComplaintsBundle:Default:afficher.html.twig */
class __TwigTemplate_0b9d0d4d13931806055bee5f2cbf8ca4443820bde7328b9dae951cca6aba57a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmartStartBase.html.twig", "ComplaintsBundle:Default:afficher.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ComplaintsBundle:Default:afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ComplaintsBundle:Default:afficher.html.twig"));

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

        echo "Complaints";
        
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
    <section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url(";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/blog-banner.png"), "html", null, true);
        echo ");\">
        <h2 class=\"tit6 t-center\">
        </h2>
    </section>

    <div class=\"container\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["con"] ?? $this->getContext($context, "con")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 12
            echo "        <div class=\"modal-dialog modal-notify modal-info\" role=\"document\" style=\"width: 100%\" style=\"display: inline-block\" >
            <!--Content-->
            <div class=\"modal-content text-center\">
                <!--Header-->
                <div class=\"modal-header d-flex justify-content-center\">
                    <p class=\"heading\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "subject", []), "html", null, true);
            echo "</p>
                </div>

                <!--Body-->
                <div class=\"modal-body\">

                    <i class=\"fas fa-bell fa-4x animated rotateIn mb-4\"></i>

                    <p>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "content", []), "html", null, true);
            echo "</p>

                </div>

                <!--Footer-->
                <div class=\"modal-footer flex-center\">
                    <a href=\"#modalConfirmDelete";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "idComplaint", []), "html", null, true);
            echo "\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#modalConfirmDelete";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "idComplaint", []), "html", null, true);
            echo "\">Remove</a>
                    <a href=\"#updateContract";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "idComplaint", []), "html", null, true);
            echo "\" data-toggle=\"modal\" class=\"btn btn-outline-info waves-effect\" data-dismiss=\"modal\">Details</a>
                </div>
            </div>
            <!--/.Content-->
        </div>

        <!-- Add Modal HTML -->
        <div id=\"updateContract";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "idComplaint", []), "html", null, true);
            echo "\" class=\"modal fade\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">All Details ...</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>

                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>User Name</label>
                            <input type=\"text\" class=\"form-control\" disabled=\"true\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "idUser", []), "name", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "idUser", []), "lastName", []), "html", null, true);
            echo "\">

                        </div>
                        <div class=\"form-group\">
                            <label>Email</label>
                            <input type=\"text\" id=\"idApplication\" name=\"idApplication\" class=\"form-control\" disabled=\"true\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "mailUser", []), "html", null, true);
            echo "\">

                        </div>
                        ";
            // line 58
            if (($this->getAttribute($context["i"], "idOpp", []) != null)) {
                // line 59
                echo "                           <div class=\"form-group\">
                            <label>Opportunity</label>
                            <input type=\"text\" id=\"idApplication\" name=\"idApplication\" class=\"form-control\" disabled=\"true\" value=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "idOpp", []), "jobTitle", []), "html", null, true);
                echo "\">

                        </div>
                        ";
            }
            // line 65
            echo "                        <div class=\"form-group\">
                            <label>Subject</label>
                            <input type=\"text\" id=\"idApplication\" name=\"idApplication\" class=\"form-control\" disabled=\"true\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "subject", []), "html", null, true);
            echo "\">

                        </div>
                        <div class=\"form-group\">
                            <label> Content</label>
                            <input type=\"text\" class=\"form-control\" disabled=\"true\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "content", []), "html", null, true);
            echo "\">

                        </div>
                        <div class=\"form-group\">
                            <label>Added Date</label>
                            <input type=\"text\" class=\"form-control\" disabled=\"true\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "addedDate", [])), "html", null, true);
            echo "\">

                        </div>


                    </div>
                    <div class=\"modal-footer\">
                        <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                    </div>
                </div>
            </div>
        </div>

    <div class=\"modal fade\" id=\"modalConfirmDelete";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "idComplaint", []), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-sm modal-notify modal-danger\" role=\"document\">
            <!--Content-->
            <div class=\"modal-content text-center\">
                <!--Header-->
                <div class=\"modal-header d-flex justify-content-center\">
                    <p class=\"heading\">Are you sure?</p>
                </div>

                <!--Body-->
                <div class=\"modal-body\">

                    <i class=\"fas fa-times fa-4x animated rotateIn\"></i>

                </div>

                <!--Footer-->
                <div class=\"modal-footer flex-center\">
                    <a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("remove_complaint", ["id" => $this->getAttribute($context["i"], "idComplaint", [])]), "html", null, true);
            echo "\" class=\"btn  btn-outline-danger\">Yes</a>
                    <a type=\"button\" class=\"btn  btn-danger waves-effect\" data-dismiss=\"modal\">No</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ComplaintsBundle:Default:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 117,  228 => 109,  206 => 90,  190 => 77,  182 => 72,  174 => 67,  170 => 65,  163 => 61,  159 => 59,  157 => 58,  151 => 55,  141 => 50,  127 => 39,  117 => 32,  111 => 31,  102 => 25,  91 => 17,  84 => 12,  80 => 11,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Complaints{% endblock %}
{% block body %}

    <section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url({{ asset('assets/images/blog-banner.png') }});\">
        <h2 class=\"tit6 t-center\">
        </h2>
    </section>

    <div class=\"container\">
    {% for i in con %}
        <div class=\"modal-dialog modal-notify modal-info\" role=\"document\" style=\"width: 100%\" style=\"display: inline-block\" >
            <!--Content-->
            <div class=\"modal-content text-center\">
                <!--Header-->
                <div class=\"modal-header d-flex justify-content-center\">
                    <p class=\"heading\">{{ i.subject }}</p>
                </div>

                <!--Body-->
                <div class=\"modal-body\">

                    <i class=\"fas fa-bell fa-4x animated rotateIn mb-4\"></i>

                    <p>{{ i.content }}</p>

                </div>

                <!--Footer-->
                <div class=\"modal-footer flex-center\">
                    <a href=\"#modalConfirmDelete{{ i.idComplaint }}\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#modalConfirmDelete{{ i.idComplaint }}\">Remove</a>
                    <a href=\"#updateContract{{ i.idComplaint }}\" data-toggle=\"modal\" class=\"btn btn-outline-info waves-effect\" data-dismiss=\"modal\">Details</a>
                </div>
            </div>
            <!--/.Content-->
        </div>

        <!-- Add Modal HTML -->
        <div id=\"updateContract{{ i.idComplaint }}\" class=\"modal fade\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">All Details ...</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>

                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>User Name</label>
                            <input type=\"text\" class=\"form-control\" disabled=\"true\" value=\"{{ i.idUser.name }} {{ i.idUser.lastName }}\">

                        </div>
                        <div class=\"form-group\">
                            <label>Email</label>
                            <input type=\"text\" id=\"idApplication\" name=\"idApplication\" class=\"form-control\" disabled=\"true\" value=\"{{ i.mailUser }}\">

                        </div>
                        {% if i.idOpp != null %}
                           <div class=\"form-group\">
                            <label>Opportunity</label>
                            <input type=\"text\" id=\"idApplication\" name=\"idApplication\" class=\"form-control\" disabled=\"true\" value=\"{{ i.idOpp.jobTitle }}\">

                        </div>
                        {% endif %}
                        <div class=\"form-group\">
                            <label>Subject</label>
                            <input type=\"text\" id=\"idApplication\" name=\"idApplication\" class=\"form-control\" disabled=\"true\" value=\"{{ i.subject }}\">

                        </div>
                        <div class=\"form-group\">
                            <label> Content</label>
                            <input type=\"text\" class=\"form-control\" disabled=\"true\" value=\"{{ i.content }}\">

                        </div>
                        <div class=\"form-group\">
                            <label>Added Date</label>
                            <input type=\"text\" class=\"form-control\" disabled=\"true\" value=\"{{ i.addedDate|date }}\">

                        </div>


                    </div>
                    <div class=\"modal-footer\">
                        <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                    </div>
                </div>
            </div>
        </div>

    <div class=\"modal fade\" id=\"modalConfirmDelete{{ i.idComplaint }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-sm modal-notify modal-danger\" role=\"document\">
            <!--Content-->
            <div class=\"modal-content text-center\">
                <!--Header-->
                <div class=\"modal-header d-flex justify-content-center\">
                    <p class=\"heading\">Are you sure?</p>
                </div>

                <!--Body-->
                <div class=\"modal-body\">

                    <i class=\"fas fa-times fa-4x animated rotateIn\"></i>

                </div>

                <!--Footer-->
                <div class=\"modal-footer flex-center\">
                    <a href=\"{{ path(\"remove_complaint\",{'id': i.idComplaint})}}\" class=\"btn  btn-outline-danger\">Yes</a>
                    <a type=\"button\" class=\"btn  btn-danger waves-effect\" data-dismiss=\"modal\">No</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    {% endfor %}
    </div>
{% endblock %}", "ComplaintsBundle:Default:afficher.html.twig", "C:\\xampp\\htdocs\\SmartStart\\src\\ComplaintsBundle/Resources/views/Default/afficher.html.twig");
    }
}
