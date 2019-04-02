<?php

/* AdminBundle:AdminBlogViews:Detailpost.html.twig */
class __TwigTemplate_39688a30a6710d114930fc82f6df78084985c74cc49b06af4b5d7254877cd825 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseAdmin.html.twig", "AdminBundle:AdminBlogViews:Detailpost.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:AdminBlogViews:Detailpost.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:AdminBlogViews:Detailpost.html.twig"));

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
        echo "<!-- Page Content -->
<div class=\"container\">

    <!-- Portfolio Item Heading -->
    <h2 class=\"my-4\" style=\"font-family: Montserrat-Bold;color: midnightblue;font-size: xx-large\"> Article Title : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? $this->getContext($context, "v")), "ArticleTitle", []), "html", null, true);
        echo "
        <small style=\"font-family: Montserrat-Bold;color: darkred\">";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["v"] ?? $this->getContext($context, "v")), "postDate", []), "m/d/Y"), "html", null, true);
        echo "</small>
    </h2>
    <br><br>

    <!-- Portfolio Item Row -->
    <div class=\"row\">

        <div class=\"col-md-8\">
            <img class=\"img-fluid\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute(($context["v"] ?? $this->getContext($context, "v")), "image", []))), "html", null, true);
        echo "\" alt=\"\" width=\"750\" height=\"500\">
        </div>

        <div class=\"col-md-4\" style=\"word-wrap:break-word\">
            <h3  style=\"color: midnightblue;font-family: Montserrat-Bold;word-wrap:break-word;font-size: xx-large\">Article Content</h3>
            <p style=\"word-wrap:break-word;font-family: Montserrat-Regular;font-size: medium;color: #000;\">";
        // line 22
        echo $this->getAttribute(($context["v"] ?? $this->getContext($context, "v")), "articleContent", []);
        echo "</p>
            <h3 style=\"color: midnightblue;font-family: Montserrat-Bold;word-wrap:break-word;font-size: xx-large\">Post Details</h3>
            <ul>
                <li style=\"color: #000;\">Author : ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["v"] ?? $this->getContext($context, "v")), "author", []), "username", []), "html", null, true);
        echo "</li>
                <li style=\"color: #000;\">Type : ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? $this->getContext($context, "v")), "postType", []), "html", null, true);
        echo "</li>
                <li style=\"color: #000;\">Comments ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? $this->getContext($context, "v")), "postCommentCount", []), "html", null, true);
        echo " Comments</li>
                <li style=\"color: #000;\">Likes : ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? $this->getContext($context, "v")), "postLikesCount", []), "html", null, true);
        echo " Likes</li>
            </ul>
        </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    

    <div class=\"row\">



    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:AdminBlogViews:Detailpost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 28,  92 => 27,  88 => 26,  84 => 25,  78 => 22,  70 => 17,  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
<!-- Page Content -->
<div class=\"container\">

    <!-- Portfolio Item Heading -->
    <h2 class=\"my-4\" style=\"font-family: Montserrat-Bold;color: midnightblue;font-size: xx-large\"> Article Title : {{ v.ArticleTitle }}
        <small style=\"font-family: Montserrat-Bold;color: darkred\">{{ v.postDate|date(\"m/d/Y\")}}</small>
    </h2>
    <br><br>

    <!-- Portfolio Item Row -->
    <div class=\"row\">

        <div class=\"col-md-8\">
            <img class=\"img-fluid\" src=\"{{ asset('uploads/images/' ~ v.image) }}\" alt=\"\" width=\"750\" height=\"500\">
        </div>

        <div class=\"col-md-4\" style=\"word-wrap:break-word\">
            <h3  style=\"color: midnightblue;font-family: Montserrat-Bold;word-wrap:break-word;font-size: xx-large\">Article Content</h3>
            <p style=\"word-wrap:break-word;font-family: Montserrat-Regular;font-size: medium;color: #000;\">{{ v.articleContent|raw }}</p>
            <h3 style=\"color: midnightblue;font-family: Montserrat-Bold;word-wrap:break-word;font-size: xx-large\">Post Details</h3>
            <ul>
                <li style=\"color: #000;\">Author : {{ v.author.username }}</li>
                <li style=\"color: #000;\">Type : {{ v.postType }}</li>
                <li style=\"color: #000;\">Comments {{ v.postCommentCount }} Comments</li>
                <li style=\"color: #000;\">Likes : {{ v.postLikesCount }} Likes</li>
            </ul>
        </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    

    <div class=\"row\">



    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
{% endblock %}", "AdminBundle:AdminBlogViews:Detailpost.html.twig", "C:\\wamp64\\www\\SmartStart\\src\\AdminBundle/Resources/views/AdminBlogViews/Detailpost.html.twig");
    }
}
