<?php

/* BaseAdmin.html.twig */
class __TwigTemplate_e84e30e166ce0561589599e88fb0ff00764b0f378aa230877d4587f86ff03e7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BaseAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BaseAdmin.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/assets/img/apple-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/assets/img/favicon.png"), "html", null, true);
        echo "\">
    ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "

</head>

<body class=\"\">
<div class=\"wrapper\">
    <div class=\"sidebar\">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color=\"blue | green | orange | red\"
      -->
        <div class=\"sidebar-wrapper\">
            <div class=\"logo\">
                <a href=\"javascript:void(0)\" class=\"simple-text logo-mini\">
                    CT
                </a>
                <a href=\"javascript:void(0)\" class=\"simple-text logo-normal\">
                    Creative Tim
                </a>
            </div>
            <ul class=\"nav\">
                <li class=\"active \">
                    <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_homepage");
        echo "\">
                        <i class=\"tim-icons icon-chart-pie-36\"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_listPosts");
        echo "\">
                        <i class=\"tim-icons icon-atom\"></i>
                        <p>Posts</p>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_listComments");
        echo "\">
                        <i class=\"tim-icons icon-pin\"></i>
                        <p>Comments</p>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Admin_PaymentsBlogList");
        echo "\">
                        <i class=\"tim-icons icon-coins\"></i>
                        <p>Payments</p>
                    </a>
                </li>
                <li>
                    <a href=\"./user.html\">
                        <i class=\"tim-icons icon-single-02\"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href=\"./tables.html\">
                        <i class=\"tim-icons icon-puzzle-10\"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href=\"./typography.html\">
                        <i class=\"tim-icons icon-align-center\"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href=\"./rtl.html\">
                        <i class=\"tim-icons icon-world\"></i>
                        <p>RTL Support</p>
                    </a>
                </li>
                <li class=\"active-pro\">
                    <a href=\"./upgrade.html\">
                        <i class=\"tim-icons icon-spaceship\"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"main-panel\">
        <!-- Navbar -->
        <nav class=\"navbar navbar-expand-lg navbar-absolute navbar-transparent\">
            <div class=\"container-fluid\">
                <div class=\"navbar-wrapper\">
                    <div class=\"navbar-toggle d-inline\">
                        <button type=\"button\" class=\"navbar-toggler\">
                            <span class=\"navbar-toggler-bar bar1\"></span>
                            <span class=\"navbar-toggler-bar bar2\"></span>
                            <span class=\"navbar-toggler-bar bar3\"></span>
                        </button>
                    </div>
                    <a class=\"navbar-brand\" href=\"javascript:void(0)\">Dashboard</a>
                </div>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-bar navbar-kebab\"></span>
                    <span class=\"navbar-toggler-bar navbar-kebab\"></span>
                    <span class=\"navbar-toggler-bar navbar-kebab\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navigation\">
                    <ul class=\"navbar-nav ml-auto\">
                        <li class=\"search-bar input-group\">
                            <button class=\"btn btn-link\" id=\"search-button\" data-toggle=\"modal\" data-target=\"#searchModal\"><i class=\"tim-icons icon-zoom-split\"></i>
                                <span class=\"d-lg-none d-md-block\">Search</span>
                            </button>
                        </li>
                        <li class=\"dropdown nav-item\">
                            <a href=\"javascript:void(0)\" class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\">
                                <div class=\"notification d-none d-lg-block d-xl-block\"></div>
                                <i class=\"tim-icons icon-sound-wave\"></i>
                                <p class=\"d-lg-none\">
                                    Notifications
                                </p>
                            </a>
                            <ul class=\"dropdown-menu dropdown-menu-right dropdown-navbar\">
                                <li class=\"nav-link\">
                                    <a href=\"#\" class=\"nav-item dropdown-item\">Mike John responded to your email</a>
                                </li>
                                <li class=\"nav-link\">
                                    <a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">You have 5 more tasks</a>
                                </li>
                                <li class=\"nav-link\">
                                    <a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">Your friend Michael is in town</a>
                                </li>
                                <li class=\"nav-link\">
                                    <a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">Another notification</a>
                                </li>
                                <li class=\"nav-link\">
                                    <a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">Another one</a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown nav-item\">
                            <a href=\"#\" class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\">
                                <div class=\"photo\">
                                    <img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/assets/img/anime3.png"), "html", null, true);
        echo "\" alt=\"Profile Photo\">
                                </div>
                                <b class=\"caret d-none d-lg-block d-xl-block\"></b>
                                <p class=\"d-lg-none\">
                                    Log out
                                </p>
                            </a>
                            <ul class=\"dropdown-menu dropdown-navbar\">
                                <li class=\"nav-link\">
                                    <a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">Profile</a>
                                </li>
                                <li class=\"nav-link\">
                                    <a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">Settings</a>
                                </li>
                                <li class=\"dropdown-divider\"></li>
                                <li class=\"nav-link\">
                                    <a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">Log out</a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"separator d-lg-none\"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class=\"modal modal-search fade\" id=\"searchModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchModal\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <input type=\"text\" class=\"form-control\" id=\"inlineFormInputGroup\" placeholder=\"SEARCH\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <i class=\"tim-icons icon-simple-remove\"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar -->
        <div class=\"content\">
            ";
        // line 196
        $this->displayBlock('body', $context, $blocks);
        // line 199
        echo "        </div>
        <footer class=\"footer\">
            
        </footer>
    </div>
</div>
<div class=\"fixed-plugin\">
    <div class=\"dropdown show-dropdown\">
        <a href=\"#\" data-toggle=\"dropdown\">
            <i class=\"fa fa-cog fa-2x\"> </i>
        </a>
        <ul class=\"dropdown-menu\">
            <li class=\"header-title\"> Sidebar Background</li>
            <li class=\"adjustments-line\">
                <a href=\"javascript:void(0)\" class=\"switch-trigger background-color\">
                    <div class=\"badge-colors text-center\">
                        <span class=\"badge filter badge-primary active\" data-color=\"primary\"></span>
                        <span class=\"badge filter badge-info\" data-color=\"blue\"></span>
                        <span class=\"badge filter badge-success\" data-color=\"green\"></span>
                    </div>
                    <div class=\"clearfix\"></div>
                </a>
            </li>
            <li class=\"adjustments-line text-center color-change\">
                <span class=\"color-label\">LIGHT MODE</span>
                <span class=\"badge light-badge mr-2\"></span>
                <span class=\"badge dark-badge ml-2\"></span>
                <span class=\"color-label\">DARK MODE</span>
            </li>
            <li class=\"button-container\">

            </li>

        </ul>
    </div>
</div>
";
        // line 235
        $this->displayBlock('javascripts', $context, $blocks);
        // line 371
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 11
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        <!--     Fonts and icons     -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://use.fontawesome.com/releases/v5.0.6/css/all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Nucleo Icons -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/assets/css/nucleo-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- CSS Files -->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/assets/css/black-dashboard.css?v=1.0.0"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/assets/demo/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 196
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 197
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 235
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 236
        echo "    <!--   Core JS Files   -->
    <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/assets/js/core/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/assets/js/core/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/assets/js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/assets/js/plugins/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"), "html", null, true);
        echo "\"></script>
    <!-- Chart JS -->
    <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/assets/js/plugins/chartjs.min.js"), "html", null, true);
        echo "\"></script>
    <!--  Notifications Plugin    -->
    <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/assets/js/plugins/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/assets/js/black-dashboard.min.js?v=1.0.0"), "html", null, true);
        echo "\"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminAssets/assets/demo/demo.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            \$().ready(function() {
                \$sidebar = \$('.sidebar');
                \$navbar = \$('.navbar');
                \$main_panel = \$('.main-panel');

                \$full_page = \$('.full-page');

                \$sidebar_responsive = \$('body > .navbar-collapse');
                sidebar_mini_active = true;
                white_color = false;

                window_width = \$(window).width();

                fixed_plugin_open = \$('.sidebar .sidebar-wrapper .nav li.active a p').html();



                \$('.fixed-plugin a').click(function(event) {
                    if (\$(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                \$('.fixed-plugin .background-color span').click(function() {
                    \$(this).siblings().removeClass('active');
                    \$(this).addClass('active');

                    var new_color = \$(this).data('color');

                    if (\$sidebar.length != 0) {
                        \$sidebar.attr('data', new_color);
                    }

                    if (\$main_panel.length != 0) {
                        \$main_panel.attr('data', new_color);
                    }

                    if (\$full_page.length != 0) {
                        \$full_page.attr('filter-color', new_color);
                    }

                    if (\$sidebar_responsive.length != 0) {
                        \$sidebar_responsive.attr('data', new_color);
                    }
                });

                \$('.switch-sidebar-mini input').on(\"switchChange.bootstrapSwitch\", function() {
                    var \$btn = \$(this);

                    if (sidebar_mini_active == true) {
                        \$('body').removeClass('sidebar-mini');
                        sidebar_mini_active = false;
                        blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                    } else {
                        \$('body').addClass('sidebar-mini');
                        sidebar_mini_active = true;
                        blackDashboard.showSidebarMessage('Sidebar mini activated...');
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);
                });

                \$('.switch-change-color input').on(\"switchChange.bootstrapSwitch\", function() {
                    var \$btn = \$(this);

                    if (white_color == true) {

                        \$('body').addClass('change-background');
                        setTimeout(function() {
                            \$('body').removeClass('change-background');
                            \$('body').removeClass('white-content');
                        }, 900);
                        white_color = false;
                    } else {

                        \$('body').addClass('change-background');
                        setTimeout(function() {
                            \$('body').removeClass('change-background');
                            \$('body').addClass('white-content');
                        }, 900);

                        white_color = true;
                    }


                });

                \$('.light-badge').click(function() {
                    \$('body').addClass('white-content');
                });

                \$('.dark-badge').click(function() {
                    \$('body').removeClass('white-content');
                });
            });
        });
    </script>
    <script>
        \$(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BaseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 251,  422 => 249,  417 => 247,  412 => 245,  407 => 243,  401 => 240,  397 => 239,  393 => 238,  389 => 237,  386 => 236,  377 => 235,  366 => 197,  357 => 196,  344 => 22,  339 => 20,  334 => 18,  329 => 16,  325 => 15,  322 => 14,  313 => 13,  302 => 11,  293 => 10,  281 => 371,  279 => 235,  241 => 199,  239 => 196,  197 => 157,  101 => 64,  92 => 58,  83 => 52,  74 => 46,  51 => 25,  48 => 13,  46 => 10,  42 => 9,  38 => 8,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('AdminAssets/assets/img/apple-icon.png') }}\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('AdminAssets/assets/img/favicon.png') }}\">
    {% block title %}

    {% endblock %}
    {% block stylesheets %}
        <!--     Fonts and icons     -->
        <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800') }}\" rel=\"stylesheet\" />
        <link href=\"{{ asset('https://use.fontawesome.com/releases/v5.0.6/css/all.css') }}\" rel=\"stylesheet\">
        <!-- Nucleo Icons -->
        <link href=\"{{ asset('AdminAssets/assets/css/nucleo-icons.css') }}\" rel=\"stylesheet\" />
        <!-- CSS Files -->
        <link href=\"{{ asset('AdminAssets/assets/css/black-dashboard.css?v=1.0.0') }}\" rel=\"stylesheet\" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href=\"{{ asset ('AdminAssets/assets/demo/demo.css') }}\" rel=\"stylesheet\" />

    {% endblock %}


</head>

<body class=\"\">
<div class=\"wrapper\">
    <div class=\"sidebar\">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color=\"blue | green | orange | red\"
      -->
        <div class=\"sidebar-wrapper\">
            <div class=\"logo\">
                <a href=\"javascript:void(0)\" class=\"simple-text logo-mini\">
                    CT
                </a>
                <a href=\"javascript:void(0)\" class=\"simple-text logo-normal\">
                    Creative Tim
                </a>
            </div>
            <ul class=\"nav\">
                <li class=\"active \">
                    <a href=\"{{ path('admin_homepage') }}\">
                        <i class=\"tim-icons icon-chart-pie-36\"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href=\"{{ path('admin_listPosts') }}\">
                        <i class=\"tim-icons icon-atom\"></i>
                        <p>Posts</p>
                    </a>
                </li>
                <li>
                    <a href=\"{{ path('admin_listComments') }}\">
                        <i class=\"tim-icons icon-pin\"></i>
                        <p>Comments</p>
                    </a>
                </li>
                <li>
                    <a href=\"{{ path('Admin_PaymentsBlogList') }}\">
                        <i class=\"tim-icons icon-coins\"></i>
                        <p>Payments</p>
                    </a>
                </li>
                <li>
                    <a href=\"./user.html\">
                        <i class=\"tim-icons icon-single-02\"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href=\"./tables.html\">
                        <i class=\"tim-icons icon-puzzle-10\"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href=\"./typography.html\">
                        <i class=\"tim-icons icon-align-center\"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href=\"./rtl.html\">
                        <i class=\"tim-icons icon-world\"></i>
                        <p>RTL Support</p>
                    </a>
                </li>
                <li class=\"active-pro\">
                    <a href=\"./upgrade.html\">
                        <i class=\"tim-icons icon-spaceship\"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"main-panel\">
        <!-- Navbar -->
        <nav class=\"navbar navbar-expand-lg navbar-absolute navbar-transparent\">
            <div class=\"container-fluid\">
                <div class=\"navbar-wrapper\">
                    <div class=\"navbar-toggle d-inline\">
                        <button type=\"button\" class=\"navbar-toggler\">
                            <span class=\"navbar-toggler-bar bar1\"></span>
                            <span class=\"navbar-toggler-bar bar2\"></span>
                            <span class=\"navbar-toggler-bar bar3\"></span>
                        </button>
                    </div>
                    <a class=\"navbar-brand\" href=\"javascript:void(0)\">Dashboard</a>
                </div>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-bar navbar-kebab\"></span>
                    <span class=\"navbar-toggler-bar navbar-kebab\"></span>
                    <span class=\"navbar-toggler-bar navbar-kebab\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navigation\">
                    <ul class=\"navbar-nav ml-auto\">
                        <li class=\"search-bar input-group\">
                            <button class=\"btn btn-link\" id=\"search-button\" data-toggle=\"modal\" data-target=\"#searchModal\"><i class=\"tim-icons icon-zoom-split\"></i>
                                <span class=\"d-lg-none d-md-block\">Search</span>
                            </button>
                        </li>
                        <li class=\"dropdown nav-item\">
                            <a href=\"javascript:void(0)\" class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\">
                                <div class=\"notification d-none d-lg-block d-xl-block\"></div>
                                <i class=\"tim-icons icon-sound-wave\"></i>
                                <p class=\"d-lg-none\">
                                    Notifications
                                </p>
                            </a>
                            <ul class=\"dropdown-menu dropdown-menu-right dropdown-navbar\">
                                <li class=\"nav-link\">
                                    <a href=\"#\" class=\"nav-item dropdown-item\">Mike John responded to your email</a>
                                </li>
                                <li class=\"nav-link\">
                                    <a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">You have 5 more tasks</a>
                                </li>
                                <li class=\"nav-link\">
                                    <a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">Your friend Michael is in town</a>
                                </li>
                                <li class=\"nav-link\">
                                    <a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">Another notification</a>
                                </li>
                                <li class=\"nav-link\">
                                    <a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">Another one</a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown nav-item\">
                            <a href=\"#\" class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\">
                                <div class=\"photo\">
                                    <img src=\"{{ asset('AdminAssets/assets/img/anime3.png') }}\" alt=\"Profile Photo\">
                                </div>
                                <b class=\"caret d-none d-lg-block d-xl-block\"></b>
                                <p class=\"d-lg-none\">
                                    Log out
                                </p>
                            </a>
                            <ul class=\"dropdown-menu dropdown-navbar\">
                                <li class=\"nav-link\">
                                    <a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">Profile</a>
                                </li>
                                <li class=\"nav-link\">
                                    <a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">Settings</a>
                                </li>
                                <li class=\"dropdown-divider\"></li>
                                <li class=\"nav-link\">
                                    <a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">Log out</a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"separator d-lg-none\"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class=\"modal modal-search fade\" id=\"searchModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchModal\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <input type=\"text\" class=\"form-control\" id=\"inlineFormInputGroup\" placeholder=\"SEARCH\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <i class=\"tim-icons icon-simple-remove\"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar -->
        <div class=\"content\">
            {% block body %}

            {% endblock %}
        </div>
        <footer class=\"footer\">
            
        </footer>
    </div>
</div>
<div class=\"fixed-plugin\">
    <div class=\"dropdown show-dropdown\">
        <a href=\"#\" data-toggle=\"dropdown\">
            <i class=\"fa fa-cog fa-2x\"> </i>
        </a>
        <ul class=\"dropdown-menu\">
            <li class=\"header-title\"> Sidebar Background</li>
            <li class=\"adjustments-line\">
                <a href=\"javascript:void(0)\" class=\"switch-trigger background-color\">
                    <div class=\"badge-colors text-center\">
                        <span class=\"badge filter badge-primary active\" data-color=\"primary\"></span>
                        <span class=\"badge filter badge-info\" data-color=\"blue\"></span>
                        <span class=\"badge filter badge-success\" data-color=\"green\"></span>
                    </div>
                    <div class=\"clearfix\"></div>
                </a>
            </li>
            <li class=\"adjustments-line text-center color-change\">
                <span class=\"color-label\">LIGHT MODE</span>
                <span class=\"badge light-badge mr-2\"></span>
                <span class=\"badge dark-badge ml-2\"></span>
                <span class=\"color-label\">DARK MODE</span>
            </li>
            <li class=\"button-container\">

            </li>

        </ul>
    </div>
</div>
{% block javascripts %}
    <!--   Core JS Files   -->
    <script src=\"{{ asset('AdminAssets/assets/js/core/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('AdminAssets/assets/js/core/popper.min.js') }}\"></script>
    <script src=\"{{ asset('AdminAssets/assets/js/core/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('AdminAssets/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}\"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script src=\"{{ asset('https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE') }}\"></script>
    <!-- Chart JS -->
    <script src=\"{{ asset('AdminAssets/assets/js/plugins/chartjs.min.js') }}\"></script>
    <!--  Notifications Plugin    -->
    <script src=\"{{ asset('AdminAssets/assets/js/plugins/bootstrap-notify.js')  }}\"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src=\"{{asset('AdminAssets/assets/js/black-dashboard.min.js?v=1.0.0')  }}\"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src=\"{{ asset('AdminAssets/assets/demo/demo.js') }}\"></script>
    <script>
        \$(document).ready(function() {
            \$().ready(function() {
                \$sidebar = \$('.sidebar');
                \$navbar = \$('.navbar');
                \$main_panel = \$('.main-panel');

                \$full_page = \$('.full-page');

                \$sidebar_responsive = \$('body > .navbar-collapse');
                sidebar_mini_active = true;
                white_color = false;

                window_width = \$(window).width();

                fixed_plugin_open = \$('.sidebar .sidebar-wrapper .nav li.active a p').html();



                \$('.fixed-plugin a').click(function(event) {
                    if (\$(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                \$('.fixed-plugin .background-color span').click(function() {
                    \$(this).siblings().removeClass('active');
                    \$(this).addClass('active');

                    var new_color = \$(this).data('color');

                    if (\$sidebar.length != 0) {
                        \$sidebar.attr('data', new_color);
                    }

                    if (\$main_panel.length != 0) {
                        \$main_panel.attr('data', new_color);
                    }

                    if (\$full_page.length != 0) {
                        \$full_page.attr('filter-color', new_color);
                    }

                    if (\$sidebar_responsive.length != 0) {
                        \$sidebar_responsive.attr('data', new_color);
                    }
                });

                \$('.switch-sidebar-mini input').on(\"switchChange.bootstrapSwitch\", function() {
                    var \$btn = \$(this);

                    if (sidebar_mini_active == true) {
                        \$('body').removeClass('sidebar-mini');
                        sidebar_mini_active = false;
                        blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                    } else {
                        \$('body').addClass('sidebar-mini');
                        sidebar_mini_active = true;
                        blackDashboard.showSidebarMessage('Sidebar mini activated...');
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);
                });

                \$('.switch-change-color input').on(\"switchChange.bootstrapSwitch\", function() {
                    var \$btn = \$(this);

                    if (white_color == true) {

                        \$('body').addClass('change-background');
                        setTimeout(function() {
                            \$('body').removeClass('change-background');
                            \$('body').removeClass('white-content');
                        }, 900);
                        white_color = false;
                    } else {

                        \$('body').addClass('change-background');
                        setTimeout(function() {
                            \$('body').removeClass('change-background');
                            \$('body').addClass('white-content');
                        }, 900);

                        white_color = true;
                    }


                });

                \$('.light-badge').click(function() {
                    \$('body').addClass('white-content');
                });

                \$('.dark-badge').click(function() {
                    \$('body').removeClass('white-content');
                });
            });
        });
    </script>
    <script>
        \$(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

        });
    </script>
{% endblock %}
</body>

</html>", "BaseAdmin.html.twig", "C:\\xampp\\htdocs\\SmartStart\\app\\Resources\\views\\BaseAdmin.html.twig");
    }
}
