<?php

/* ContractBundle:Default:index.html.twig */
class __TwigTemplate_8dfb97179a45a6efaadecb9e39d001ada812e9a108db867a3e8448e3eb414fd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmartStartBase.html.twig", "ContractBundle:Default:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContractBundle:Default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContractBundle:Default:index.html.twig"));

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

        echo "My Contracts";
        
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
        echo "    <section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url(https://www.insidehighered.com/sites/default/server_files/media/contracts%20finkelstein.jpg);\">
        <h2 class=\"tit6 t-center\">
        </h2>
    </section>

    <section>
        <div class=\"bread-crumb bo5-b p-t-17 p-b-17\">
            <div class=\"container\">
                <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_contracts");
        echo "\" class=\"txt27\">
                    My Contracts
                </a>
                <span class=\"txt29 m-l-10 m-r-10\">/</span>
                <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_low_contracts");
        echo "\" class=\"txt27\">
                    Auto-Generated Contracts
                </a>
            </div>
        </div>
    </section>


    <div class=\"container\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["con"] ?? $this->getContext($context, "con")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 26
            echo "
            <div class=\"modal-dialog modal-lg\" role=\"document\" style=\"display: inline-block\" style=\"width: 100%\">
                <div class=\"modal-content\">
                    <div class=\"modal-body\">
                        <div class=\"row\">
                            <div class=\"col-lg-5\">
                                <!--Carousel Wrapper-->
                                <div id=\"carousel-thumb\" class=\"carousel slide carousel-fade carousel-thumbnails\" data-ride=\"carousel\">
                                    <!--Slides-->
                                    <div class=\"carousel-inner\" role=\"listbox\">
                                        <div class=\"carousel-item active\">
                                            <img class=\"d-block w-100\" src=\"data:image/jpeg;base64,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\"
                                                 alt=\"First slide\">
                                        </div>
                                    </div>
                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>
                            <div class=\"col-lg-7\">
                                <h2 class=\"h2-responsive product-name\">
                                    <strong>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["i"], "idApplication", []), "idFreelancer", []), "name", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["i"], "idApplication", []), "idFreelancer", []), "lastName", []), "html", null, true);
            echo "</strong>
                                </h2>
                                <h4 class=\"h4-responsive\">
              <span class=\"green-text\">
                <strong>\$";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "sum", []), "html", null, true);
            echo "</strong>
              </span>
                                </h4>

                                <!--Accordion wrapper-->
                                <div class=\"accordion md-accordion\" id=\"accordionEx\" role=\"tablist\" aria-multiselectable=\"true\">

                                    <!-- Accordion card -->
                                    <!-- Card header -->
                                    <div class=\"card-header\" role=\"tab\" id=\"headingOne1\">
                                        <a data-toggle=\"collapse\" data-parent=\"#accordionEx\" href=\"#collapseOne1";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "idContract", []), "html", null, true);
            echo "\" aria-expanded=\"true\"
                                           aria-controls=\"collapseOne1";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "idContract", []), "html", null, true);
            echo "\">
                                            <h5 class=\"mb-0\">
                                                Job Description <i class=\"fas fa-angle-down rotate-icon\"></i>
                                            </h5>
                                        </a>
                                    </div>

                                    <!-- Card body -->
                                    <div id=\"collapseOne1";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "idContract", []), "html", null, true);
            echo "\" class=\"collapse show\" role=\"tabpanel\" aria-labelledby=\"headingOne1\"
                                         data-parent=\"#accordionEx\">
                                        <div class=\"card-body\">
                                            ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["i"], "idApplication", []), "idOpportunity", []), "jobDescription", []), "html", null, true);
            echo "
                                        </div>
                                    </div>

                                </div>

                                <!-- Accordion card -->
                                <div class=\"card\">

                                    <!-- Card header -->
                                    <div class=\"card-header\" role=\"tab\" id=\"headingTwo2\">
                                        <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordionEx\" href=\"#collapseTwo2";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "idContract", []), "html", null, true);
            echo "\"
                                           aria-expanded=\"false\" aria-controls=\"collapseTwo2";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "idContract", []), "html", null, true);
            echo "\">
                                            <h5 class=\"mb-0\">
                                                Start Date <i class=\"fas fa-angle-down rotate-icon\"></i>
                                            </h5>
                                        </a>
                                    </div>

                                    <!-- Card body -->
                                    <div id=\"collapseTwo2";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "idContract", []), "html", null, true);
            echo "\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo2\"
                                         data-parent=\"#accordionEx\">
                                        <div class=\"card-body\">
                                            ";
            // line 95
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "startDate", [])), "html", null, true);
            echo "
                                        </div>
                                    </div>

                                </div>
                                <!-- Accordion card -->

                                <!-- Accordion card -->
                                <div class=\"card\">

                                    <!-- Card header -->
                                    <div class=\"card-header\" role=\"tab\" id=\"headingFour4\">
                                        <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordionEx\" href=\"#collapseFour4";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "idContract", []), "html", null, true);
            echo "\"
                                           aria-expanded=\"false\" aria-controls=\"collapseFour4";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "idContract", []), "html", null, true);
            echo "\">
                                            <h5 class=\"mb-0\">
                                                Finish Date <i class=\"fas fa-angle-down rotate-icon\"></i>
                                            </h5>
                                        </a>
                                    </div>

                                    <!-- Card body -->
                                    <div id=\"collapseFour4";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "idContract", []), "html", null, true);
            echo "\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingFour4\"
                                         data-parent=\"#accordionEx\">
                                        <div class=\"card-body\">
                                            ";
            // line 119
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "finishDate", [])), "html", null, true);
            echo "
                                        </div>
                                    </div>

                                </div>
                                <!-- Accordion card -->

                                <!-- Accordion card -->
                                <div class=\"card\">

                                    <!-- Card header -->
                                    <div class=\"card-header\" role=\"tab\" id=\"headingThree3\">
                                        <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordionEx\" href=\"#collapseThree3";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "idContract", []), "html", null, true);
            echo "\"
                                           aria-expanded=\"false\" aria-controls=\"collapseThree3";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "idContract", []), "html", null, true);
            echo "\">
                                            <h5 class=\"mb-0\">
                                                Payment Method <i class=\"fas fa-angle-down rotate-icon\"></i>
                                            </h5>
                                        </a>
                                    </div>

                                    <!-- Card body -->
                                    <div id=\"collapseThree3";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "idContract", []), "html", null, true);
            echo "\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree3\"
                                         data-parent=\"#accordionEx\">
                                        <div class=\"card-body\">
                                            ";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "paymentMethod", []), "html", null, true);
            echo "
                                        </div>
                                    </div>

                                </div>
                                <!-- Accordion card -->
                                <div class=\"text-center\" style=\"display: inline-block\">
                                    <a href=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_contract", ["id" => $this->getAttribute($context["i"], "idContract", [])]), "html", null, true);
            echo "\" class=\"btn btn-primary a-btn-slide-text\">
                                        <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                                        <span><strong>Delete</strong></span>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-primary a-btn-slide-text\">
                                        <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                                        <span><strong>Pay</strong></span>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-primary a-btn-slide-text\">
                                        <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                                        <span><strong>Print</strong></span>
                                    </a>
                                </div>
                            </div>
                            <!-- Accordion wrapper -->
                            <!-- Add to Cart -->

                        </div>
                        <!-- /.Add to Cart -->
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "    </div>






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ContractBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 173,  283 => 150,  273 => 143,  267 => 140,  256 => 132,  252 => 131,  237 => 119,  231 => 116,  220 => 108,  216 => 107,  201 => 95,  195 => 92,  184 => 84,  180 => 83,  166 => 72,  160 => 69,  149 => 61,  145 => 60,  132 => 50,  123 => 46,  101 => 26,  97 => 25,  85 => 16,  78 => 12,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}My Contracts{% endblock %}
{% block body %}
    <section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url(https://www.insidehighered.com/sites/default/server_files/media/contracts%20finkelstein.jpg);\">
        <h2 class=\"tit6 t-center\">
        </h2>
    </section>

    <section>
        <div class=\"bread-crumb bo5-b p-t-17 p-b-17\">
            <div class=\"container\">
                <a href=\"{{ path('my_contracts') }}\" class=\"txt27\">
                    My Contracts
                </a>
                <span class=\"txt29 m-l-10 m-r-10\">/</span>
                <a href=\"{{ path('my_low_contracts') }}\" class=\"txt27\">
                    Auto-Generated Contracts
                </a>
            </div>
        </div>
    </section>


    <div class=\"container\">
        {% for i in con %}

            <div class=\"modal-dialog modal-lg\" role=\"document\" style=\"display: inline-block\" style=\"width: 100%\">
                <div class=\"modal-content\">
                    <div class=\"modal-body\">
                        <div class=\"row\">
                            <div class=\"col-lg-5\">
                                <!--Carousel Wrapper-->
                                <div id=\"carousel-thumb\" class=\"carousel slide carousel-fade carousel-thumbnails\" data-ride=\"carousel\">
                                    <!--Slides-->
                                    <div class=\"carousel-inner\" role=\"listbox\">
                                        <div class=\"carousel-item active\">
                                            <img class=\"d-block w-100\" src=\"data:image/jpeg;base64,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\"
                                                 alt=\"First slide\">
                                        </div>
                                    </div>
                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>
                            <div class=\"col-lg-7\">
                                <h2 class=\"h2-responsive product-name\">
                                    <strong>{{ i.idApplication.idFreelancer.name }} {{ i.idApplication.idFreelancer.lastName }}</strong>
                                </h2>
                                <h4 class=\"h4-responsive\">
              <span class=\"green-text\">
                <strong>\${{ i.sum }}</strong>
              </span>
                                </h4>

                                <!--Accordion wrapper-->
                                <div class=\"accordion md-accordion\" id=\"accordionEx\" role=\"tablist\" aria-multiselectable=\"true\">

                                    <!-- Accordion card -->
                                    <!-- Card header -->
                                    <div class=\"card-header\" role=\"tab\" id=\"headingOne1\">
                                        <a data-toggle=\"collapse\" data-parent=\"#accordionEx\" href=\"#collapseOne1{{ i.idContract }}\" aria-expanded=\"true\"
                                           aria-controls=\"collapseOne1{{ i.idContract }}\">
                                            <h5 class=\"mb-0\">
                                                Job Description <i class=\"fas fa-angle-down rotate-icon\"></i>
                                            </h5>
                                        </a>
                                    </div>

                                    <!-- Card body -->
                                    <div id=\"collapseOne1{{ i.idContract }}\" class=\"collapse show\" role=\"tabpanel\" aria-labelledby=\"headingOne1\"
                                         data-parent=\"#accordionEx\">
                                        <div class=\"card-body\">
                                            {{ i.idApplication.idOpportunity.jobDescription }}
                                        </div>
                                    </div>

                                </div>

                                <!-- Accordion card -->
                                <div class=\"card\">

                                    <!-- Card header -->
                                    <div class=\"card-header\" role=\"tab\" id=\"headingTwo2\">
                                        <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordionEx\" href=\"#collapseTwo2{{ i.idContract }}\"
                                           aria-expanded=\"false\" aria-controls=\"collapseTwo2{{ i.idContract }}\">
                                            <h5 class=\"mb-0\">
                                                Start Date <i class=\"fas fa-angle-down rotate-icon\"></i>
                                            </h5>
                                        </a>
                                    </div>

                                    <!-- Card body -->
                                    <div id=\"collapseTwo2{{ i.idContract }}\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo2\"
                                         data-parent=\"#accordionEx\">
                                        <div class=\"card-body\">
                                            {{ i.startDate|date }}
                                        </div>
                                    </div>

                                </div>
                                <!-- Accordion card -->

                                <!-- Accordion card -->
                                <div class=\"card\">

                                    <!-- Card header -->
                                    <div class=\"card-header\" role=\"tab\" id=\"headingFour4\">
                                        <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordionEx\" href=\"#collapseFour4{{ i.idContract }}\"
                                           aria-expanded=\"false\" aria-controls=\"collapseFour4{{ i.idContract }}\">
                                            <h5 class=\"mb-0\">
                                                Finish Date <i class=\"fas fa-angle-down rotate-icon\"></i>
                                            </h5>
                                        </a>
                                    </div>

                                    <!-- Card body -->
                                    <div id=\"collapseFour4{{ i.idContract }}\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingFour4\"
                                         data-parent=\"#accordionEx\">
                                        <div class=\"card-body\">
                                            {{ i.finishDate|date }}
                                        </div>
                                    </div>

                                </div>
                                <!-- Accordion card -->

                                <!-- Accordion card -->
                                <div class=\"card\">

                                    <!-- Card header -->
                                    <div class=\"card-header\" role=\"tab\" id=\"headingThree3\">
                                        <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordionEx\" href=\"#collapseThree3{{ i.idContract }}\"
                                           aria-expanded=\"false\" aria-controls=\"collapseThree3{{ i.idContract }}\">
                                            <h5 class=\"mb-0\">
                                                Payment Method <i class=\"fas fa-angle-down rotate-icon\"></i>
                                            </h5>
                                        </a>
                                    </div>

                                    <!-- Card body -->
                                    <div id=\"collapseThree3{{ i.idContract }}\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree3\"
                                         data-parent=\"#accordionEx\">
                                        <div class=\"card-body\">
                                            {{ i.paymentMethod }}
                                        </div>
                                    </div>

                                </div>
                                <!-- Accordion card -->
                                <div class=\"text-center\" style=\"display: inline-block\">
                                    <a href=\"{{ path(\"delete_contract\",{'id':i.idContract}) }}\" class=\"btn btn-primary a-btn-slide-text\">
                                        <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                                        <span><strong>Delete</strong></span>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-primary a-btn-slide-text\">
                                        <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                                        <span><strong>Pay</strong></span>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-primary a-btn-slide-text\">
                                        <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                                        <span><strong>Print</strong></span>
                                    </a>
                                </div>
                            </div>
                            <!-- Accordion wrapper -->
                            <!-- Add to Cart -->

                        </div>
                        <!-- /.Add to Cart -->
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>






{% endblock %}", "ContractBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\SmartStart\\src\\ContractBundle/Resources/views/Default/index.html.twig");
    }
}
