<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_4822f6a6cf40dd05cac4c0882d331c97d0fb206ec9be3e997eeb5f8358907b07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Login V18</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--===============================================================================================-->
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/images/icons/favicon.ico"), "html", null, true);
        echo "\"/>
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/fonts/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/animate/animate.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/animsition/css/animsition.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/select2/select2.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/css/util.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/css/main.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
</head>
<body style=\"background-color: #666666;\">

<div class=\"limiter\">
    <div class=\"container-login100\">
        <div class=\"wrap-login100\">
            <!--

            old form !!

            <form class=\"login100-form validate-form\" action=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" method=\"POST\">

\t\t\t\t\t<span class=\"login100-form-title p-b-43\">
\t\t\t\t\t\tRegister to continue
\t\t\t\t\t</span>

                <div class=\"wrap-input100 validate-input\">
                    <input class=\"input100\" type=\"text\" id=\"username\" name=\"username\">
                    <span class=\"focus-input100\"></span>
                    <span class=\"label-input100\">Username</span>
                </div>

                <div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: ex@abc.xyz\">
                    <input class=\"input100\" type=\"text\" id=\"email\" name=\"email\">
                    <span class=\"focus-input100\"></span>
                    <span class=\"label-input100\">Email</span>
                </div>


                <div class=\"wrap-input100 validate-input\" data-validate=\"Password is required\">
                    <input class=\"input100\" type=\"password\" id=\"plainPassword\" name=\"plainPassword\">
                    <span class=\"focus-input100\"></span>
                    <span class=\"label-input100\">Password</span>
                </div>


                <div class=\"container-login100-form-btn\">
                    <button class=\"login100-form-btn\" type=\"submit\">
                        Sign up
                    </button>
                </div>

                <div class=\"text-center p-t-46 p-b-20\">
\t\t\t\t\t\t<span class=\"txt2\">
\t\t\t\t\t\t\tor sign up using
\t\t\t\t\t\t</span>
                </div>

                <div class=\"login100-form-social flex-c-m\">
                    <a href=\"#\" class=\"login100-form-social-item flex-c-m bg1 m-r-5\">
                        <i class=\"fa fa-facebook-f\" aria-hidden=\"true\"></i>
                    </a>

                    <a href=\"#\" class=\"login100-form-social-item flex-c-m bg2 m-r-5\">
                        <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                    </a>
                </div>
            </form>-->

            ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "login100-form validate-form"]]);
        echo "

            <span class=\"login100-form-title p-b-43\">
\t\t\t\t\t\tRegister to continue
            </span>

            <div class=\"form-group\" id=\"fos_user_registration_form\">

                <div class=\"wrap-input100 validate-input\">
                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'widget', ["attr" => ["class" => "input100"]]);
        echo "
                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'errors');
        echo "
                    <span class=\"focus-input100\"></span>
                    <span class=\"label-input100\">Username</span>
                </div>

                <div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: ex@abc.xyz\">
                    ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "input100"]]);
        echo "
                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'errors');
        echo "
                    <span class=\"focus-input100\"></span>
                    <span class=\"label-input100\">Email</span>
                </div>

                <div class=\"wrap-input100 validate-input\" data-validate=\"Password is required\">
                    ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'widget', ["attr" => ["class" => "input100"]]);
        echo "
                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'errors');
        echo "
                    <span class=\"focus-input100\"></span>
                    <span class=\"label-input100\">Password</span>
                </div>

                <div class=\"wrap-input100 validate-input\" data-validate=\"Password is required\">
                    ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'widget', ["attr" => ["class" => "input100"]]);
        echo "
                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'errors');
        echo "
                    <span class=\"focus-input100\"></span>
                    <span class=\"label-input100\">Confirm Password</span>
                </div>


                ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

            </div>


            <div class=\"container-login100-form-btn\">
                <input class=\"login100-form-btn\" type=\"submit\" value=\"Sign up\">
            </div>

            <div class=\"text-center p-t-46 p-b-20\">
\t\t\t\t\t\t<span class=\"txt2\">
\t\t\t\t\t\t\talready on SmartStart ?
\t\t\t\t\t\t</span>
            </div>

            <div class=\"container-login100-form-btn\">
                <a href=\"";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" class=\"login100-form-btn\" style=\"background: #1da1f2\" name=\"Sign up\">
                    Login
                </a>
            </div>
            ";
        // line 147
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "





            <div class=\"login100-more\" style=\"background-image: url(";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/images/pub.jpg"), "html", null, true);
        echo ");\">
            </div>
        </div>
    </div>
</div>





<!--===============================================================================================-->
<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/animsition/js/animsition.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/daterangepicker/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/countdowntime/countdowntime.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 178,  297 => 176,  292 => 174,  288 => 173,  283 => 171,  278 => 169,  274 => 168,  269 => 166,  264 => 164,  250 => 153,  241 => 147,  234 => 143,  215 => 127,  206 => 121,  202 => 120,  193 => 114,  189 => 113,  180 => 107,  176 => 106,  167 => 100,  163 => 99,  151 => 90,  99 => 41,  84 => 29,  80 => 28,  75 => 26,  70 => 24,  65 => 22,  60 => 20,  55 => 18,  50 => 16,  45 => 14,  40 => 12,  35 => 10,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Login V18</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--===============================================================================================-->
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('loginassets/images/icons/favicon.ico') }}\"/>
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('loginassets/vendor/bootstrap/css/bootstrap.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('loginassets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('loginassets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('loginassets/vendor/animate/animate.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('loginassets/vendor/css-hamburgers/hamburgers.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('loginassets/vendor/animsition/css/animsition.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('loginassets/vendor/select2/select2.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('loginassets/vendor/daterangepicker/daterangepicker.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('loginassets/css/util.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('loginassets/css/main.css') }}\">
    <!--===============================================================================================-->
</head>
<body style=\"background-color: #666666;\">

<div class=\"limiter\">
    <div class=\"container-login100\">
        <div class=\"wrap-login100\">
            <!--

            old form !!

            <form class=\"login100-form validate-form\" action=\"{{ path('fos_user_registration_register') }}\" method=\"POST\">

\t\t\t\t\t<span class=\"login100-form-title p-b-43\">
\t\t\t\t\t\tRegister to continue
\t\t\t\t\t</span>

                <div class=\"wrap-input100 validate-input\">
                    <input class=\"input100\" type=\"text\" id=\"username\" name=\"username\">
                    <span class=\"focus-input100\"></span>
                    <span class=\"label-input100\">Username</span>
                </div>

                <div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: ex@abc.xyz\">
                    <input class=\"input100\" type=\"text\" id=\"email\" name=\"email\">
                    <span class=\"focus-input100\"></span>
                    <span class=\"label-input100\">Email</span>
                </div>


                <div class=\"wrap-input100 validate-input\" data-validate=\"Password is required\">
                    <input class=\"input100\" type=\"password\" id=\"plainPassword\" name=\"plainPassword\">
                    <span class=\"focus-input100\"></span>
                    <span class=\"label-input100\">Password</span>
                </div>


                <div class=\"container-login100-form-btn\">
                    <button class=\"login100-form-btn\" type=\"submit\">
                        Sign up
                    </button>
                </div>

                <div class=\"text-center p-t-46 p-b-20\">
\t\t\t\t\t\t<span class=\"txt2\">
\t\t\t\t\t\t\tor sign up using
\t\t\t\t\t\t</span>
                </div>

                <div class=\"login100-form-social flex-c-m\">
                    <a href=\"#\" class=\"login100-form-social-item flex-c-m bg1 m-r-5\">
                        <i class=\"fa fa-facebook-f\" aria-hidden=\"true\"></i>
                    </a>

                    <a href=\"#\" class=\"login100-form-social-item flex-c-m bg2 m-r-5\">
                        <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                    </a>
                </div>
            </form>-->

            {{ form_start(form, { 'attr': {'class': 'login100-form validate-form'} }) }}

            <span class=\"login100-form-title p-b-43\">
\t\t\t\t\t\tRegister to continue
            </span>

            <div class=\"form-group\" id=\"fos_user_registration_form\">

                <div class=\"wrap-input100 validate-input\">
                    {{ form_widget(form.username, { 'attr': {'class': 'input100' } }) }}
                    {{ form_errors(form.username) }}
                    <span class=\"focus-input100\"></span>
                    <span class=\"label-input100\">Username</span>
                </div>

                <div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: ex@abc.xyz\">
                    {{ form_widget(form.email, { 'attr': {'class': 'input100' } }) }}
                    {{ form_errors(form.email) }}
                    <span class=\"focus-input100\"></span>
                    <span class=\"label-input100\">Email</span>
                </div>

                <div class=\"wrap-input100 validate-input\" data-validate=\"Password is required\">
                    {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'input100'} }) }}
                    {{ form_errors(form.plainPassword.first) }}
                    <span class=\"focus-input100\"></span>
                    <span class=\"label-input100\">Password</span>
                </div>

                <div class=\"wrap-input100 validate-input\" data-validate=\"Password is required\">
                    {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'input100'} }) }}
                    {{ form_errors(form.plainPassword.second) }}
                    <span class=\"focus-input100\"></span>
                    <span class=\"label-input100\">Confirm Password</span>
                </div>


                {{ form_rest(form) }}

            </div>


            <div class=\"container-login100-form-btn\">
                <input class=\"login100-form-btn\" type=\"submit\" value=\"Sign up\">
            </div>

            <div class=\"text-center p-t-46 p-b-20\">
\t\t\t\t\t\t<span class=\"txt2\">
\t\t\t\t\t\t\talready on SmartStart ?
\t\t\t\t\t\t</span>
            </div>

            <div class=\"container-login100-form-btn\">
                <a href=\"{{ path('fos_user_security_login') }}\" class=\"login100-form-btn\" style=\"background: #1da1f2\" name=\"Sign up\">
                    Login
                </a>
            </div>
            {{ form_end(form) }}





            <div class=\"login100-more\" style=\"background-image: url({{ asset('loginassets/images/pub.jpg') }});\">
            </div>
        </div>
    </div>
</div>





<!--===============================================================================================-->
<script src=\"{{ asset('loginassets/vendor/jquery/jquery-3.2.1.min.js') }}\"></script>
<!--===============================================================================================-->
<script src=\"{{ asset('loginassets/vendor/animsition/js/animsition.min.js') }}\"></script>
<!--===============================================================================================-->
<script src=\"{{ asset('loginassets/vendor/bootstrap/js/popper.js') }}\"></script>
<script src=\"{{ asset('loginassets/vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
<!--===============================================================================================-->
<script src=\"{{ asset('loginassets/vendor/select2/select2.min.js') }}\"></script>
<!--===============================================================================================-->
<script src=\"{{ asset('loginassets/vendor/daterangepicker/moment.min.js') }}\"></script>
<script src=\"{{ asset('loginassets/vendor/daterangepicker/daterangepicker.js') }}\"></script>
<!--===============================================================================================-->
<script src=\"{{ asset('loginassets/vendor/countdowntime/countdowntime.js') }}\"></script>
<!--===============================================================================================-->
<script src=\"{{ asset('loginassets/js/main.js') }}\"></script>

</body>
</html>", "FOSUserBundle:Registration:register_content.html.twig", "C:\\xampp\\htdocs\\SmartStart\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}
