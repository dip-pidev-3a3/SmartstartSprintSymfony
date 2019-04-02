<?php

/* @Complaints/Default/index.html.twig */
class __TwigTemplate_4089f2c5c33bf8bb68973db8251fc2820e0d42f6d6d2e394b02c1a32b89637d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmartStartBase.html.twig", "@Complaints/Default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Complaints/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Complaints/Default/index.html.twig"));

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
        echo "<body class=\"animsition\">

<!-- Contact form -->
<section class=\"section-contact bg1-pattern p-t-90 p-b-113\">
    <!-- Map -->
    <div class=\"container\">
        <div class=\"map bo8 bo-rad-10 of-hidden\">

            <div class=\"contact-map size37\" id=\"map\"></div>
        </div>
    </div>

    <div class=\"container\">
        <h3 class=\"tit7 t-center p-b-62 p-t-105\">
            Send us a Message
        </h3>

        <form class=\"wrap-form-reservation size22 m-l-r-auto\" method=\"post\" action=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addComplaint2_homepage");
        echo "\" name=\"addForm\" id=\"addForm\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <!-- Name -->
                    <span class=\"txt9\">
\t\t\t\t\t\t\tName
\t\t\t\t\t\t</span>

                    <div class=\"wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23\">
                        <input class=\"bo-rad-10 sizefull txt10 p-l-20\" type=\"text\" name=\"name\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
        echo "\" disabled=\"disabled\">
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <!-- Email -->
                    <span class=\"txt9\">
\t\t\t\t\t\t\tEmail
\t\t\t\t\t\t</span>

                    <div class=\"wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23\">
                        <input class=\"bo-rad-10 sizefull txt10 p-l-20\" type=\"email\" onblur=\"validMail()\" name=\"email\" id=\"email\" placeholder=\"Email\">
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <!-- Phone -->
                    <span class=\"txt9\">
\t\t\t\t\t\t\tSubject
\t\t\t\t\t\t</span>


                    <select class=\"wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23\" name=\"subject\" id=\"subject\">
                        <option value=\"verbal abuse\">Verbal Abuse</option>
                        <option value=\"Fake opportunity\">Fake opportunity</option>
                        <option value=\"High price opportunity\" selected>High price opportunity</option>
                        <option value=\"Others\">Others</option>
                    </select>

                </div>

                <div class=\"col-12\">
                    <!-- Message -->
                    <span class=\"txt9\">
\t\t\t\t\t\t\tMessage
\t\t\t\t\t\t</span>
                    <textarea class=\"bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3\" onblur=\"validMessage()\" name=\"message\" placeholder=\"Message\" id=\"message\"></textarea>
                    <label name=\"erreur\" id=\"erreur\" hidden>erreur de saisie</label>
                </div>
            </div>

            <div class=\"wrap-btn-booking flex-c-m m-t-13\">
                <!-- Button3 -->
                <button type=\"submit\" name=\"valider\" id=\"valider\" class=\"btn btn-success\" disabled>
                    Add Complaint
                </button>
            </div>
        </form>
    </div>
</section>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/complaints.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Complaints/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 80,  99 => 30,  87 => 21,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
<body class=\"animsition\">

<!-- Contact form -->
<section class=\"section-contact bg1-pattern p-t-90 p-b-113\">
    <!-- Map -->
    <div class=\"container\">
        <div class=\"map bo8 bo-rad-10 of-hidden\">

            <div class=\"contact-map size37\" id=\"map\"></div>
        </div>
    </div>

    <div class=\"container\">
        <h3 class=\"tit7 t-center p-b-62 p-t-105\">
            Send us a Message
        </h3>

        <form class=\"wrap-form-reservation size22 m-l-r-auto\" method=\"post\" action=\"{{ path('addComplaint2_homepage') }}\" name=\"addForm\" id=\"addForm\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <!-- Name -->
                    <span class=\"txt9\">
\t\t\t\t\t\t\tName
\t\t\t\t\t\t</span>

                    <div class=\"wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23\">
                        <input class=\"bo-rad-10 sizefull txt10 p-l-20\" type=\"text\" name=\"name\" value=\"{{ app.user.username }}\" disabled=\"disabled\">
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <!-- Email -->
                    <span class=\"txt9\">
\t\t\t\t\t\t\tEmail
\t\t\t\t\t\t</span>

                    <div class=\"wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23\">
                        <input class=\"bo-rad-10 sizefull txt10 p-l-20\" type=\"email\" onblur=\"validMail()\" name=\"email\" id=\"email\" placeholder=\"Email\">
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <!-- Phone -->
                    <span class=\"txt9\">
\t\t\t\t\t\t\tSubject
\t\t\t\t\t\t</span>


                    <select class=\"wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23\" name=\"subject\" id=\"subject\">
                        <option value=\"verbal abuse\">Verbal Abuse</option>
                        <option value=\"Fake opportunity\">Fake opportunity</option>
                        <option value=\"High price opportunity\" selected>High price opportunity</option>
                        <option value=\"Others\">Others</option>
                    </select>

                </div>

                <div class=\"col-12\">
                    <!-- Message -->
                    <span class=\"txt9\">
\t\t\t\t\t\t\tMessage
\t\t\t\t\t\t</span>
                    <textarea class=\"bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3\" onblur=\"validMessage()\" name=\"message\" placeholder=\"Message\" id=\"message\"></textarea>
                    <label name=\"erreur\" id=\"erreur\" hidden>erreur de saisie</label>
                </div>
            </div>

            <div class=\"wrap-btn-booking flex-c-m m-t-13\">
                <!-- Button3 -->
                <button type=\"submit\" name=\"valider\" id=\"valider\" class=\"btn btn-success\" disabled>
                    Add Complaint
                </button>
            </div>
        </form>
    </div>
</section>
<script src=\"{{ asset('assets/js/complaints.js') }}\"></script>
{% endblock %}
", "@Complaints/Default/index.html.twig", "C:\\xampp\\htdocs\\SmartStart\\src\\ComplaintsBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
