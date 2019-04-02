<?php

/* BlogBundle:BlogViews:UpdateBlogPost.html.twig */
class __TwigTemplate_0e96d9996a9be0e4031da5383c1502695a3397f223c59ee042555297c1b01902 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmartStartBase.html.twig", "BlogBundle:BlogViews:UpdateBlogPost.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:BlogViews:UpdateBlogPost.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:BlogViews:UpdateBlogPost.html.twig"));

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

        echo "Detail blog";
        
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
            Blog
        </h2>
    </section>


    <!-- Content page -->
    <section>
        <div class=\"bread-crumb bo5-b p-t-17 p-b-17\">
            <div class=\"container\">
                <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_ListPosts");
        echo "\" class=\"txt27\">
                    Home
                </a>

                <span class=\"txt29 m-l-10 m-r-10\">/</span>

                <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_ListPosts");
        echo "\" class=\"txt27\">
                    Blog
                </a>

                <span class=\"txt29 m-l-10 m-r-10\">/</span>
                <a href=\"\" class=\"txt27\">
                    Update your post
                </a>

                <span class=\"txt29\">
\t\t\t\t</span>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row \">
                <div class=\"col-md-8 col-lg-9\">
                    <div class=\"p-t-80 p-b-124 bo5-r p-r-50 h-full p-r-0-md bo-none-md\">
                        <!-- Block4 -->
                        <div class=\"blo4 p-b-63\">
                            <!-- - -->
                            <div class=\"pic-blo4 hov-img-zoom bo-rad-10 pos-relative\">


                                <div class=\"date-blo4 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t<span class=\"txt30 m-b-4\">


\t\t\t\t\t\t\t\t\t</span>

                                    <span class=\"txt31\">
\t\t\t\t\t\t\t\t\t</span>
                                </div>
                            </div>


                        </div>
                        ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                        <div class=\"form-group\">
                            <label>Post Content</label>
                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "postContent", []), 'widget', ["attr" => ["class" => "form-control", "type" => "textarea"]]);
        echo "

                        </div>
                        <div class=\"form-group\">
                            <label>Post Type</label>
                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "postType", []), 'widget', ["attr" => ["class" => "form-control", "style" => "font-size: 12px"]]);
        echo "

                        </div>
                        <div class=\"form-group\">
                            <label>Article Title</label>
                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "articleTitle", []), 'widget', ["attr" => ["class" => "form-control", "type" => "textarea"]]);
        echo "

                        </div>
                        <div class=\"form-group\">
                            <label>Article Content</label>
                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "articleContent", []), 'widget');
        echo "

                        </div>
                        <div class=\"form-group\">
                            <label>Your Image</label>
                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", []), 'widget', ["attr" => ["class" => "form-control", "style" => "font-size: 12px"]]);
        echo "

                        </div>
                        <button type=\"submit\" class=\"btn3 flex-c-m size31 txt11 trans-0-4\" id=\"addb\">
                            Save Changes
                        </button>
                    </div>


                    ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "




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
        return "BlogBundle:BlogViews:UpdateBlogPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 91,  172 => 82,  164 => 77,  156 => 72,  148 => 67,  140 => 62,  134 => 59,  94 => 22,  85 => 16,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Detail blog{% endblock %}
{% block body %}

    <section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url({{ asset('assets/images/blog-banner.png') }});\">
        <h2 class=\"tit6 t-center\">
            Blog
        </h2>
    </section>


    <!-- Content page -->
    <section>
        <div class=\"bread-crumb bo5-b p-t-17 p-b-17\">
            <div class=\"container\">
                <a href=\"{{ path('blog_ListPosts') }}\" class=\"txt27\">
                    Home
                </a>

                <span class=\"txt29 m-l-10 m-r-10\">/</span>

                <a href=\"{{ path('blog_ListPosts') }}\" class=\"txt27\">
                    Blog
                </a>

                <span class=\"txt29 m-l-10 m-r-10\">/</span>
                <a href=\"\" class=\"txt27\">
                    Update your post
                </a>

                <span class=\"txt29\">
\t\t\t\t</span>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row \">
                <div class=\"col-md-8 col-lg-9\">
                    <div class=\"p-t-80 p-b-124 bo5-r p-r-50 h-full p-r-0-md bo-none-md\">
                        <!-- Block4 -->
                        <div class=\"blo4 p-b-63\">
                            <!-- - -->
                            <div class=\"pic-blo4 hov-img-zoom bo-rad-10 pos-relative\">


                                <div class=\"date-blo4 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t<span class=\"txt30 m-b-4\">


\t\t\t\t\t\t\t\t\t</span>

                                    <span class=\"txt31\">
\t\t\t\t\t\t\t\t\t</span>
                                </div>
                            </div>


                        </div>
                        {{ form_start(form) }}
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
                            {{ form_widget(form.articleContent) }}

                        </div>
                        <div class=\"form-group\">
                            <label>Your Image</label>
                            {{ form_widget(form.image, { 'attr': {'class': 'form-control', 'style':'font-size: 12px'} }) }}

                        </div>
                        <button type=\"submit\" class=\"btn3 flex-c-m size31 txt11 trans-0-4\" id=\"addb\">
                            Save Changes
                        </button>
                    </div>


                    {{ form_end(form) }}




                    </div>
                </div>


                </div>
            </div>

    </section>
    <script src=\"//cdn.ckeditor.com/4.11.3/full/ckeditor.js\"></script><script>
    CKEDITOR.replace('editor1');
</script>
{% endblock %}
", "BlogBundle:BlogViews:UpdateBlogPost.html.twig", "C:\\wamp64\\www\\SmartStart\\src\\BlogBundle/Resources/views/BlogViews/UpdateBlogPost.html.twig");
    }
}
