<?php

/* ComplaintsBundle:Default:addComplaint.html.twig */
class __TwigTemplate_49a71778172d009d8897edbd837d79e46bb5a4328abeaa7c89ec582b8e94b0e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmartStartBase.html.twig", "ComplaintsBundle:Default:addComplaint.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ComplaintsBundle:Default:addComplaint.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ComplaintsBundle:Default:addComplaint.html.twig"));

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
<section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url(";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/blog-banner.png"), "html", null, true);
        echo ");\">
    <h2 class=\"tit6 t-center\">
    </h2>
</section>

<section>
";
        // line 11
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != null)) {
            // line 12
            echo "    </div>
    <a href=\"#complaint\" class=\"btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto\" data-toggle=\"modal\"><i class=\"material-icons\">&#xE147;</i> <span>Add Complaint</span></a>

    </div>
    <!-- Add Modal HTML -->
    <div id=\"complaint\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                ";
            // line 20
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "

                <div class=\"modal-header\">
                    <h4 class=\"modal-title\">Add Complaint</h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                </div>
                <div class=\"modal-body\">

                <div class=\"form-group\">
                    <label>Mail</label>
                    ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mailUser", []), 'widget', ["attr" => ["class" => "form-control", "type" => "email", "name" => "email", "placeholder" => "Enter your email"]]);
            echo "

                </div>
                <div class=\"form-group\">
                    <label>Subject</label>
                    ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subject", []), 'widget', ["attr" => ["class" => "form-control", "type" => "textarea", "placeholder" => "Enter your subject"]]);
            echo "

                </div>
                <div class=\"form-group\">
                    <label>Message</label>
                    ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", []), 'widget', ["attr" => ["class" => "form-control", "type" => "textarea", "placeholder" => "Enter your complaint"]]);
            echo "

                </div>
                    <div class=\"form-group\" hidden>
                        <label>User name</label>
                        ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idUser", []), 'widget', ["attr" => ["class" => "form-control", "type" => "textarea"]]);
            echo "

                    </div>
                    <div class=\"form-group\" hidden>
                        <label>Opportunity</label>
                        ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idOpp", []), 'widget', ["attr" => ["class" => "form-control", "style" => "font-size: 12px"]]);
            echo "

                    </div>

                    <div class=\"form-group\" style=\"visibility: hidden\">
                        <label>Date</label>
                        ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "addedDate", []), 'widget');
            echo "

                    </div>

                </div>
                <div class=\"modal-footer\">
                    <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                    <input type=\"submit\" onclick=\"ValidateEmail(email)\" id=\"form\" name=\"form\" class=\"btn btn-success\" id=\"addb\" value=\"Add\">
                </div>
                ";
            // line 65
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
            </div>
        </div>
    </div>
";
        }
        // line 70
        echo "</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ComplaintsBundle:Default:addComplaint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 70,  158 => 65,  146 => 56,  137 => 50,  129 => 45,  121 => 40,  113 => 35,  105 => 30,  92 => 20,  82 => 12,  80 => 11,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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

<section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url({{ asset('assets/images/blog-banner.png') }});\">
    <h2 class=\"tit6 t-center\">
    </h2>
</section>

<section>
{% if app.user!=null %}
    </div>
    <a href=\"#complaint\" class=\"btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto\" data-toggle=\"modal\"><i class=\"material-icons\">&#xE147;</i> <span>Add Complaint</span></a>

    </div>
    <!-- Add Modal HTML -->
    <div id=\"complaint\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                {{ form_start(form) }}

                <div class=\"modal-header\">
                    <h4 class=\"modal-title\">Add Complaint</h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                </div>
                <div class=\"modal-body\">

                <div class=\"form-group\">
                    <label>Mail</label>
                    {{ form_widget(form.mailUser, { 'attr': {'class': 'form-control', 'type' : 'email','name':'email','placeholder':'Enter your email'} }) }}

                </div>
                <div class=\"form-group\">
                    <label>Subject</label>
                    {{ form_widget(form.subject, { 'attr': {'class': 'form-control', 'type' : 'textarea','placeholder':'Enter your subject'} }) }}

                </div>
                <div class=\"form-group\">
                    <label>Message</label>
                    {{ form_widget(form.content, { 'attr': {'class': 'form-control', 'type' : 'textarea','placeholder':'Enter your complaint'} }) }}

                </div>
                    <div class=\"form-group\" hidden>
                        <label>User name</label>
                        {{ form_widget(form.idUser, { 'attr': {'class': 'form-control', 'type' : 'textarea'} }) }}

                    </div>
                    <div class=\"form-group\" hidden>
                        <label>Opportunity</label>
                        {{ form_widget(form.idOpp, { 'attr': {'class': 'form-control', 'style':'font-size: 12px'} }) }}

                    </div>

                    <div class=\"form-group\" style=\"visibility: hidden\">
                        <label>Date</label>
                        {{ form_widget(form.addedDate) }}

                    </div>

                </div>
                <div class=\"modal-footer\">
                    <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                    <input type=\"submit\" onclick=\"ValidateEmail(email)\" id=\"form\" name=\"form\" class=\"btn btn-success\" id=\"addb\" value=\"Add\">
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endif %}
</section>
{% endblock %}", "ComplaintsBundle:Default:addComplaint.html.twig", "C:\\xampp\\htdocs\\SmartStart\\src\\ComplaintsBundle/Resources/views/Default/addComplaint.html.twig");
    }
}
