<?php

/* @Feedback/Default/index.html.twig */
class __TwigTemplate_053112113b3b611fde9f25a3d4d1a143815b36f871d835ae5d5659d3eb450def extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmartStartBase.html.twig", "@Feedback/Default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Feedback/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Feedback/Default/index.html.twig"));

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
            echo "            </div>
            <a href=\"#complaint\" class=\"btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto\" data-toggle=\"modal\"><i class=\"material-icons\">&#xE147;</i> <span>Add Feedback</span></a>

            </div>
            <!-- Add Modal HTML -->
            <div id=\"complaint\" class=\"modal fade\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">

                        <div class=\"modal-header\">
                            <h4 class=\"modal-title\">Add Feedback</h4>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        </div>
                        <div class=\"modal-body\">

                            <div class=\"form-group\" hidden>
                                <label>Application</label>
                                <input class=\"form-control\" type=\"text\" name=\"name\" value=\"\" disabled=\"disabled\">

                            </div>
                            <div class=\"form-group\">
                                <label>Rating</label>
                                <input class=\"form-control\" type=\"text\" name=\"name\" >

                            </div>
                            <div class=\"form-group\">
                                <label>Comment</label>
                                <textarea class=\"form-control\" name=\"name\" cols=\"10\" rows=\"10\" ></textarea>

                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                            <input type=\"submit\" onclick=\"ValidateEmail(email)\" id=\"form\" name=\"form\" class=\"btn btn-success\" id=\"addb\" value=\"Add\">
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 51
        echo "    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Feedback/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 51,  82 => 12,  80 => 11,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
            <a href=\"#complaint\" class=\"btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto\" data-toggle=\"modal\"><i class=\"material-icons\">&#xE147;</i> <span>Add Feedback</span></a>

            </div>
            <!-- Add Modal HTML -->
            <div id=\"complaint\" class=\"modal fade\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">

                        <div class=\"modal-header\">
                            <h4 class=\"modal-title\">Add Feedback</h4>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        </div>
                        <div class=\"modal-body\">

                            <div class=\"form-group\" hidden>
                                <label>Application</label>
                                <input class=\"form-control\" type=\"text\" name=\"name\" value=\"\" disabled=\"disabled\">

                            </div>
                            <div class=\"form-group\">
                                <label>Rating</label>
                                <input class=\"form-control\" type=\"text\" name=\"name\" >

                            </div>
                            <div class=\"form-group\">
                                <label>Comment</label>
                                <textarea class=\"form-control\" name=\"name\" cols=\"10\" rows=\"10\" ></textarea>

                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                            <input type=\"submit\" onclick=\"ValidateEmail(email)\" id=\"form\" name=\"form\" class=\"btn btn-success\" id=\"addb\" value=\"Add\">
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}
    </section>
{% endblock %}", "@Feedback/Default/index.html.twig", "C:\\xampp\\htdocs\\SmartStart\\src\\FeedbackBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
