<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_349ee229e1547479f4d64f34af282b7d0334fbe0f081949e450c87e7c2a94fc2 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

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
            <form action=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"login100-form validate-form\" >
                ";
        // line 38
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 39
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                ";
        }
        // line 41
        echo "                <span class=\"login100-form-title p-b-43\">
\t\t\t\t\t\tLogin to continue
\t\t\t\t\t</span>


                <div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: ex@abc.xyz\">
                    <input class=\"input100\" type=\"text\" id=\"username\" name=\"_username\">
                    <span class=\"focus-input100\"></span>
                    <span class=\"label-input100\">Username</span>
                </div>


                <div class=\"wrap-input100 validate-input\" data-validate=\"Password is required\">
                    <input class=\"input100\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\">
                    <span class=\"focus-input100\"></span>
                    <span class=\"label-input100\">Password</span>
                </div>

                ";
        // line 59
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 60
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", []), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", []), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 62
        echo "
                <div class=\"flex-sb-m w-full p-t-3 p-b-32\">
                    <div class=\"contact100-form-checkbox\">
                        <input class=\"input-checkbox100\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                        <label class=\"label-checkbox100\" for=\"remember_me\">
                            Remember me
                        </label>
                    </div>

                    <div>
                        <a href=\"#\" class=\"txt1\">
                            Forgot Password?
                        </a>
                    </div>
                </div>


                <div class=\"container-login100-form-btn\">
                    <button class=\"login100-form-btn\" type=\"submit\" id=\"_submit\" name=\"_submit\">
                        Login
                    </button>
                </div>

                <div class=\"text-center p-t-46 p-b-20\">
\t\t\t\t\t\t<span class=\"txt2\">
\t\t\t\t\t\t\tnew on SmartStart ?
\t\t\t\t\t\t</span>
                </div>

                <div class=\"container-login100-form-btn\">
                    <a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"login100-form-btn\" style=\"background: #1da1f2\" name=\"Sign up\">
                        Sign up
                    </a>
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
            </form>

            <div class=\"login100-more\" style=\"background-image: url(";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/images/pub.jpg"), "html", null, true);
        echo ");\">
            </div>
        </div>
    </div>
</div>





<!--===============================================================================================-->
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/animsition/js/animsition.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/daterangepicker/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/vendor/countdowntime/countdowntime.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 139,  239 => 137,  234 => 135,  230 => 134,  225 => 132,  220 => 130,  216 => 129,  211 => 127,  206 => 125,  192 => 114,  167 => 92,  135 => 62,  129 => 60,  127 => 59,  107 => 41,  101 => 39,  99 => 38,  95 => 37,  84 => 29,  80 => 28,  75 => 26,  70 => 24,  65 => 22,  60 => 20,  55 => 18,  50 => 16,  45 => 14,  40 => 12,  35 => 10,  25 => 2,);
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
            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"login100-form validate-form\" >
                {% if csrf_token %}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                {% endif %}
                <span class=\"login100-form-title p-b-43\">
\t\t\t\t\t\tLogin to continue
\t\t\t\t\t</span>


                <div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: ex@abc.xyz\">
                    <input class=\"input100\" type=\"text\" id=\"username\" name=\"_username\">
                    <span class=\"focus-input100\"></span>
                    <span class=\"label-input100\">Username</span>
                </div>


                <div class=\"wrap-input100 validate-input\" data-validate=\"Password is required\">
                    <input class=\"input100\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\">
                    <span class=\"focus-input100\"></span>
                    <span class=\"label-input100\">Password</span>
                </div>

                {% if error %}
                    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}

                <div class=\"flex-sb-m w-full p-t-3 p-b-32\">
                    <div class=\"contact100-form-checkbox\">
                        <input class=\"input-checkbox100\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                        <label class=\"label-checkbox100\" for=\"remember_me\">
                            Remember me
                        </label>
                    </div>

                    <div>
                        <a href=\"#\" class=\"txt1\">
                            Forgot Password?
                        </a>
                    </div>
                </div>


                <div class=\"container-login100-form-btn\">
                    <button class=\"login100-form-btn\" type=\"submit\" id=\"_submit\" name=\"_submit\">
                        Login
                    </button>
                </div>

                <div class=\"text-center p-t-46 p-b-20\">
\t\t\t\t\t\t<span class=\"txt2\">
\t\t\t\t\t\t\tnew on SmartStart ?
\t\t\t\t\t\t</span>
                </div>

                <div class=\"container-login100-form-btn\">
                    <a href=\"{{ path('fos_user_registration_register') }}\" class=\"login100-form-btn\" style=\"background: #1da1f2\" name=\"Sign up\">
                        Sign up
                    </a>
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
            </form>

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
</html>", "FOSUserBundle:Security:login_content.html.twig", "C:\\xampp\\htdocs\\SmartStart\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
