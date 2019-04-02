<?php

/* default/index.html.twig */
class __TwigTemplate_6aba62d1c26bc5b898118280d70675752febe2b881119f2e5365c5cdf23e8d63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmartStartBase.html.twig", "default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

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

        echo "Home";
        
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
    <!-- Slide1 -->
    <section class=\"section-slide\">
        <div class=\"wrap-slick1\">
            <div class=\"slick1\">
                <div class=\"item-slick1 item1-slick1\" style=\"background-image: url(";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/pub2.jpg"), "html", null, true);
        echo ");\">
                    <div class=\"wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170\">
\t\t\t\t\t\t<span class=\"caption1-slide1 txt1 t-center animated visible-false m-b-15\" data-appear=\"fadeInDown\">
\t\t\t\t\t\t\tWelcome to
\t\t\t\t\t\t</span>

                        <h2 class=\"caption2-slide1 tit1 t-center animated visible-false m-b-37\" data-appear=\"fadeInUp\">
                            SmartStart
                        </h2>

                        <div class=\"wrap-btn-slide1 animated visible-false\" data-appear=\"zoomIn\">
                            <!-- Button1 -->
                            <a href=\"\" class=\"btn1 flex-c-m size1 txt3 trans-0-4\">
                                Look Menu
                            </a>
                        </div>
                    </div>
                </div>

                <div class=\"item-slick1 item2-slick1\" style=\"background-image: url(";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/mike.jpg"), "html", null, true);
        echo ");\">
                    <div class=\"wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170\">
\t\t\t\t\t\t<span class=\"caption1-slide1 txt1 t-center animated visible-false m-b-15\" data-appear=\"rollIn\">
\t\t\t\t\t\t\tWelcome to
\t\t\t\t\t\t</span>

                        <h2 class=\"caption2-slide1 tit1 t-center animated visible-false m-b-37\" data-appear=\"lightSpeedIn\">
                            SmartStart
                        </h2>

                        <div class=\"wrap-btn-slide1 animated visible-false\" data-appear=\"slideInUp\">
                            <!-- Button1 -->
                            <a href=\"\" class=\"btn1 flex-c-m size1 txt3 trans-0-4\">
                                Look Menu
                            </a>
                        </div>
                    </div>
                </div>

                <div class=\"item-slick1 item3-slick1\" style=\"background-image: url(";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/pub1.jpg"), "html", null, true);
        echo ");\">
                    <div class=\"wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170\">
\t\t\t\t\t\t<span class=\"caption1-slide1 txt1 t-center animated visible-false m-b-15\" data-appear=\"rotateInDownLeft\">
\t\t\t\t\t\t\tWelcome to
\t\t\t\t\t\t</span>

                        <h2 class=\"caption2-slide1 tit1 t-center animated visible-false m-b-37\" data-appear=\"rotateInUpRight\">
                            SmartStart
                        </h2>

                        <div class=\"wrap-btn-slide1 animated visible-false\" data-appear=\"rotateIn\">
                            <!-- Button1 -->
                            <a href=\"\" class=\"btn1 flex-c-m size1 txt3 trans-0-4\">
                                Look Menu
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class=\"wrap-slick1-dots\"></div>
        </div>
    </section>

    <!-- Welcome -->
    <section class=\"section-welcome bg1-pattern p-t-120 p-b-105\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 p-t-45 p-b-30\">
                    <div class=\"wrap-text-welcome t-center\">
\t\t\t\t\t\t<span class=\"tit2 t-center\">
\t\t\t\t\t\t\tItalian Restaurant
\t\t\t\t\t\t</span>

                        <h3 class=\"tit3 t-center m-b-35 m-t-5\">
                            Welcome
                        </h3>

                        <p class=\"t-center m-b-22 size3 m-l-r-auto\">
                            Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia, nisl ante egestas mi, ac facilisis ligula sem id neque.
                        </p>

                        <a href=\"\" class=\"txt4\">
                            Our Story
                            <i class=\"fa fa-long-arrow-right m-l-10\" aria-hidden=\"true\"></i>
                        </a>
                    </div>
                </div>

                <div class=\"col-md-6 p-b-30\">
                    <div class=\"wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto\">
                        <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/our-story-01.jpg"), "html", null, true);
        echo "\" alt=\"IMG-OUR\">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Intro -->
    <section class=\"section-intro\">
        <div class=\"header-intro parallax100 t-center p-t-135 p-b-158\" style=\"background-image: url(";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/bg-intro-01.jpg"), "html", null, true);
        echo ");\">
\t\t\t<span class=\"tit2 p-l-15 p-r-15\">
\t\t\t\tDiscover
\t\t\t</span>

            <h3 class=\"tit4 t-center p-l-15 p-r-15 p-t-3\">
                SmartStart
            </h3>
        </div>

        <div class=\"content-intro bg-white p-t-77 p-b-133\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 p-t-30\">
                        <!-- Block1 -->
                        <div class=\"blo1\">
                            <div class=\"wrap-pic-blo1 bo-rad-10 hov-img-zoom\">
                                <a href=\"#\"><img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/intro-01.jpg"), "html", null, true);
        echo "\" alt=\"IMG-INTRO\"></a>
                            </div>

                            <div class=\"wrap-text-blo1 p-t-35\">
                                <a href=\"#\"><h4 class=\"txt5 color0-hov trans-0-4 m-b-13\">
                                        Romantic Restaurant
                                    </h4></a>

                                <p class=\"m-b-20\">
                                    Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
                                </p>

                                <a href=\"#\" class=\"txt4\">
                                    Learn More
                                    <i class=\"fa fa-long-arrow-right m-l-10\" aria-hidden=\"true\"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-4 p-t-30\">
                        <!-- Block1 -->
                        <div class=\"blo1\">
                            <div class=\"wrap-pic-blo1 bo-rad-10 hov-img-zoom\">
                                <a href=\"#\"><img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/intro-02.jpg"), "html", null, true);
        echo "\" alt=\"IMG-INTRO\"></a>
                            </div>

                            <div class=\"wrap-text-blo1 p-t-35\">
                                <a href=\"#\"><h4 class=\"txt5 color0-hov trans-0-4 m-b-13\">
                                        Delicious Food
                                    </h4></a>

                                <p class=\"m-b-20\">
                                    Aliquam eget aliquam magna, quis posuere risus ac justo ipsum nibh urna
                                </p>

                                <a href=\"#\" class=\"txt4\">
                                    Learn More
                                    <i class=\"fa fa-long-arrow-right m-l-10\" aria-hidden=\"true\"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-4 p-t-30\">
                        <!-- Block1 -->
                        <div class=\"blo1\">
                            <div class=\"wrap-pic-blo1 bo-rad-10 hov-img-zoom\">
                                <a href=\"#\"><img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/intro-04.jpg"), "html", null, true);
        echo "\" alt=\"IMG-INTRO\"></a>
                            </div>

                            <div class=\"wrap-text-blo1 p-t-35\">
                                <a href=\"#\"><h4 class=\"txt5 color0-hov trans-0-4 m-b-13\">
                                        Red Wines You Love
                                    </h4></a>

                                <p class=\"m-b-20\">
                                    Sed ornare ligula eget tortor tempor, quis porta tellus dictum.
                                </p>

                                <a href=\"#\" class=\"txt4\">
                                    Learn More
                                    <i class=\"fa fa-long-arrow-right m-l-10\" aria-hidden=\"true\"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Our menu -->
    <section class=\"section-ourmenu bg2-pattern p-t-115 p-b-120\">
        <div class=\"container\">
            <div class=\"title-section-ourmenu t-center m-b-22\">
\t\t\t\t<span class=\"tit2 t-center\">
\t\t\t\t\tDiscover
\t\t\t\t</span>

                <h3 class=\"tit5 t-center m-t-2\">
                    Our Menu
                </h3>
            </div>

            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <!-- Item our menu -->
                            <div class=\"item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30\">
                                <img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/our-menu-01.jpg"), "html", null, true);
        echo "\" alt=\"IMG-MENU\">

                                <!-- Button2 -->
                                <a href=\"#\" class=\"btn2 flex-c-m txt5 ab-c-m size4\">
                                    Lunch
                                </a>
                            </div>
                        </div>

                        <div class=\"col-sm-6\">
                            <!-- Item our menu -->
                            <div class=\"item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30\">
                                <img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/our-menu-05.jpg"), "html", null, true);
        echo "\" alt=\"IMG-MENU\">

                                <!-- Button2 -->
                                <a href=\"#\" class=\"btn2 flex-c-m txt5 ab-c-m size5\">
                                    Dinner
                                </a>
                            </div>
                        </div>

                        <div class=\"col-12\">
                            <!-- Item our menu -->
                            <div class=\"item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30\">
                                <img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/our-menu-13.jpg"), "html", null, true);
        echo "\" alt=\"IMG-MENU\">

                                <!-- Button2 -->
                                <a href=\"#\" class=\"btn2 flex-c-m txt5 ab-c-m size6\">
                                    Happy Hour
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <!-- Item our menu -->
                            <div class=\"item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30\">
                                <img src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/our-menu-08.jpg"), "html", null, true);
        echo "\" alt=\"IMG-MENU\">

                                <!-- Button2 -->
                                <a href=\"#\" class=\"btn2 flex-c-m txt5 ab-c-m size7\">
                                    Drink
                                </a>
                            </div>
                        </div>

                        <div class=\"col-12\">
                            <!-- Item our menu -->
                            <div class=\"item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30\">
                                <img src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/our-menu-10.jpg"), "html", null, true);
        echo "\" alt=\"IMG-MENU\">

                                <!-- Button2 -->
                                <a href=\"#\" class=\"btn2 flex-c-m txt5 ab-c-m size8\">
                                    Starters
                                </a>
                            </div>
                        </div>

                        <div class=\"col-12\">
                            <!-- Item our menu -->
                            <div class=\"item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30\">
                                <img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/our-menu-16.jpg"), "html", null, true);
        echo "\" alt=\"IMG-MENU\">

                                <!-- Button2 -->
                                <a href=\"#\" class=\"btn2 flex-c-m txt5 ab-c-m size9\">
                                    Dessert
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- Event -->
    <section class=\"section-event\">
        <div class=\"wrap-slick2\">
            <div class=\"slick2\">
                <div class=\"item-slick2 item1-slick2\" style=\"background-image: url(";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/bg-event-01.jpg"), "html", null, true);
        echo ");\">
                    <div class=\"wrap-content-slide2 p-t-115 p-b-208\">
                        <div class=\"container\">
                            <!-- - -->
                            <div class=\"title-event t-center m-b-52\">
\t\t\t\t\t\t\t\t<span class=\"tit2 p-l-15 p-r-15\">
\t\t\t\t\t\t\t\t\tUpcomming
\t\t\t\t\t\t\t\t</span>

                                <h3 class=\"tit6 t-center p-l-15 p-r-15 p-t-3\">
                                    Events
                                </h3>
                            </div>

                            <!-- Block2 -->
                            <div class=\"blo2 flex-w flex-str flex-col-c-m-lg animated visible-false\" data-appear=\"zoomIn\">
                                <!-- Pic block2 -->
                                <a href=\"#\" class=\"wrap-pic-blo2 bg1-blo2\" style=\"background-image: url(";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/bg-event-02.jpg"), "html", null, true);
        echo ");\">
                                    <div class=\"time-event size10 txt6 effect1\">
\t\t\t\t\t\t\t\t\t\t<span class=\"txt-effect1 flex-c-m t-center\">
\t\t\t\t\t\t\t\t\t\t\t08:00 PM Tuesday - 21 November 2018
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </a>

                                <!-- Text block2 -->
                                <div class=\"wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30\">
                                    <h4 class=\"tit7 t-center m-b-10\">
                                        Wines during specific nights
                                    </h4>

                                    <p class=\"t-center\">
                                        Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia
                                    </p>

                                    <div class=\"flex-sa-m flex-w w-full m-t-40\">
                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 days\">
\t\t\t\t\t\t\t\t\t\t\t\t25
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tDays
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>

                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 hours\">
\t\t\t\t\t\t\t\t\t\t\t\t12
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tHours
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>

                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 minutes\">
\t\t\t\t\t\t\t\t\t\t\t\t59
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tMinutes
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>

                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 seconds\">
\t\t\t\t\t\t\t\t\t\t\t\t56
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tSeconds
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>
                                    </div>

                                    <a href=\"#\" class=\"txt4 m-t-40\">
                                        View Details
                                        <i class=\"fa fa-long-arrow-right m-l-10\" aria-hidden=\"true\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"item-slick2 item2-slick2\" style=\"background-image: url(";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/master-slides-02.jpg"), "html", null, true);
        echo ");\">
                    <div class=\"wrap-content-slide2 p-t-115 p-b-208\">
                        <div class=\"container\">
                            <!-- - -->
                            <div class=\"title-event t-center m-b-52\">
\t\t\t\t\t\t\t\t<span class=\"tit2 p-l-15 p-r-15\">
\t\t\t\t\t\t\t\t\tUpcomming
\t\t\t\t\t\t\t\t</span>

                                <h3 class=\"tit6 t-center p-l-15 p-r-15 p-t-3\">
                                    Events
                                </h3>
                            </div>

                            <!-- Block2 -->
                            <div class=\"blo2 flex-w flex-str flex-col-c-m-lg animated visible-false\" data-appear=\"fadeInDown\">
                                <!-- Pic block2 -->
                                <a href=\"#\" class=\"wrap-pic-blo2 bg2-blo2\" style=\"background-image: url(";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/event-06.jpg"), "html", null, true);
        echo ");\">
                                    <div class=\"time-event size10 txt6 effect1\">
\t\t\t\t\t\t\t\t\t\t<span class=\"txt-effect1 flex-c-m\">
\t\t\t\t\t\t\t\t\t\t\t08:00 PM Tuesday - 21 November 2018
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </a>

                                <!-- Text block2 -->
                                <div class=\"wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30\">
                                    <h4 class=\"tit7 t-center m-b-10\">
                                        Wines during specific nights
                                    </h4>

                                    <p class=\"t-center\">
                                        Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia
                                    </p>

                                    <div class=\"flex-sa-m flex-w w-full m-t-40\">
                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 days\">
\t\t\t\t\t\t\t\t\t\t\t\t25
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tDays
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>

                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 hours\">
\t\t\t\t\t\t\t\t\t\t\t\t12
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tHours
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>

                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 minutes\">
\t\t\t\t\t\t\t\t\t\t\t\t59
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tMinutes
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>

                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 seconds\">
\t\t\t\t\t\t\t\t\t\t\t\t56
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tSeconds
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>
                                    </div>

                                    <a href=\"#\" class=\"txt4 m-t-40\">
                                        View Details
                                        <i class=\"fa fa-long-arrow-right m-l-10\" aria-hidden=\"true\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"item-slick2 item3-slick2\" style=\"background-image: url(";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/bg-event-04.jpg"), "html", null, true);
        echo ");\">
                    <div class=\"wrap-content-slide2 p-t-115 p-b-208\">
                        <div class=\"container\">
                            <!-- - -->
                            <div class=\"title-event t-center m-b-52\">
\t\t\t\t\t\t\t\t<span class=\"tit2 p-l-15 p-r-15\">
\t\t\t\t\t\t\t\t\tUpcomming
\t\t\t\t\t\t\t\t</span>

                                <h3 class=\"tit6 t-center p-l-15 p-r-15 p-t-3\">
                                    Events
                                </h3>
                            </div>

                            <!-- Block2 -->
                            <div class=\"blo2 flex-w flex-str flex-col-c-m-lg animated visible-false\" data-appear=\"rotateInUpLeft\">
                                <!-- Pic block2 -->
                                <a href=\"#\" class=\"wrap-pic-blo2 bg3-blo2\" style=\"background-image: url(";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/event-01.jpg"), "html", null, true);
        echo ");\">
                                    <div class=\"time-event size10 txt6 effect1\">
\t\t\t\t\t\t\t\t\t\t<span class=\"txt-effect1 flex-c-m\">
\t\t\t\t\t\t\t\t\t\t\t08:00 PM Tuesday - 21 November 2018
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </a>

                                <!-- Text block2 -->
                                <div class=\"wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30\">
                                    <h4 class=\"tit7 t-center m-b-10\">
                                        Wines during specific nights
                                    </h4>

                                    <p class=\"t-center\">
                                        Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia
                                    </p>

                                    <div class=\"flex-sa-m flex-w w-full m-t-40\">
                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 days\">
\t\t\t\t\t\t\t\t\t\t\t\t25
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tDays
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>

                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 hours\">
\t\t\t\t\t\t\t\t\t\t\t\t12
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tHours
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>

                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 minutes\">
\t\t\t\t\t\t\t\t\t\t\t\t59
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tMinutes
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>

                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 seconds\">
\t\t\t\t\t\t\t\t\t\t\t\t56
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tSeconds
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>
                                    </div>

                                    <a href=\"#\" class=\"txt4 m-t-40\">
                                        View Details
                                        <i class=\"fa fa-long-arrow-right m-l-10\" aria-hidden=\"true\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class=\"wrap-slick2-dots\"></div>
        </div>
    </section>

    <!-- Booking -->
    <section class=\"section-booking bg1-pattern p-t-100 p-b-110\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 p-b-30\">
                    <div class=\"t-center\">
\t\t\t\t\t\t<span class=\"tit2 t-center\">
\t\t\t\t\t\t\tReservation
\t\t\t\t\t\t</span>

                        <h3 class=\"tit3 t-center m-b-35 m-t-2\">
                            Book table
                        </h3>
                    </div>

                    <div class=\"wrap-btn-booking flex-c-m m-t-6\">
                        <!-- Button3 -->
                        <a href=\"\" class=\"btn3 flex-c-m size12 txt11 trans-0-4\">
                            Réserver maintenant
                        </a>
                    </div>
                </div>

                <div class=\"col-lg-6 p-b-30 p-t-18\">
                    <div class=\"wrap-pic-booking size2 bo-rad-10 hov-img-zoom m-l-r-auto\">
                        <img src=\"";
        // line 593
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/booking-01.jpg"), "html", null, true);
        echo "\" alt=\"IMG-OUR\">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Review -->
    <section class=\"section-review p-t-115\">
        <!-- - -->
        <div class=\"title-review t-center m-b-2\">
\t\t\t<span class=\"tit2 p-l-15 p-r-15\">
\t\t\t\tCustomers Say
\t\t\t</span>

            <h3 class=\"tit8 t-center p-l-20 p-r-15 p-t-3\">
                Review
            </h3>
        </div>

        <!-- - -->
        <div class=\"wrap-slick3\">
            <div class=\"slick3\">
                <div class=\"item-slick3 item1-slick3\">
                    <div class=\"wrap-content-slide3 p-b-50 p-t-50\">
                        <div class=\"container\">
                            <div class=\"pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false\" data-appear=\"zoomIn\">
                                <img src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/avatar-01.jpg"), "html", null, true);
        echo "\" alt=\"IGM-AVATAR\">
                            </div>

                            <div class=\"content-review m-t-33 animated visible-false\" data-appear=\"fadeInUp\">
                                <p class=\"t-center txt12 size15 m-l-r-auto\">
                                    “ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”
                                </p>

                                <div class=\"star-review fs-18 color0 flex-c-m m-t-12\">
                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                </div>

                                <div class=\"more-review txt4 t-center animated visible-false m-t-32\" data-appear=\"fadeInUp\">
                                    Marie Simmons ˗ New York
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"item-slick3 item2-slick3\">
                    <div class=\"wrap-content-slide3 p-b-50 p-t-50\">
                        <div class=\"container\">
                            <div class=\"pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false\" data-appear=\"zoomIn\">
                                <img src=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/avatar-04.jpg"), "html", null, true);
        echo "\" alt=\"IGM-AVATAR\">
                            </div>

                            <div class=\"content-review m-t-33 animated visible-false\" data-appear=\"fadeInUp\">
                                <p class=\"t-center txt12 size15 m-l-r-auto\">
                                    “ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”
                                </p>

                                <div class=\"star-review fs-18 color0 flex-c-m m-t-12\">
                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                </div>

                                <div class=\"more-review txt4 t-center animated visible-false m-t-32\" data-appear=\"fadeInUp\">
                                    Marie Simmons ˗ New York
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"item-slick3 item3-slick3\">
                    <div class=\"wrap-content-slide3 p-b-50 p-t-50\">
                        <div class=\"container\">
                            <div class=\"pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false\" data-appear=\"zoomIn\">
                                <img src=\"";
        // line 676
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/avatar-05.jpg"), "html", null, true);
        echo "\" alt=\"IGM-AVATAR\">
                            </div>

                            <div class=\"content-review m-t-33 animated visible-false\" data-appear=\"fadeInUp\">
                                <p class=\"t-center txt12 size15 m-l-r-auto\">
                                    “ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”
                                </p>

                                <div class=\"star-review fs-18 color0 flex-c-m m-t-12\">
                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                </div>

                                <div class=\"more-review txt4 t-center animated visible-false m-t-32\" data-appear=\"fadeInUp\">
                                    Marie Simmons ˗ New York
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class=\"wrap-slick3-dots m-t-30\"></div>
        </div>
    </section>


    <!-- Video -->
    <section class=\"section-video parallax100\" style=\"background-image: url(";
        // line 708
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/bg-cover-video-02.jpg"), "html", null, true);
        echo ");\">
        <div class=\"content-video t-center p-t-225 p-b-250\">
\t\t\t<span class=\"tit2 p-l-15 p-r-15\">
\t\t\t\tDiscover
\t\t\t</span>

            <h3 class=\"tit4 t-center p-l-15 p-r-15 p-t-3\">
                Our Video
            </h3>

            <div class=\"btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33\" data-toggle=\"modal\" data-target=\"#modal-video-01\">
                <div class=\"flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4\">
                    <i class=\"fa fa-play fs-18 m-l-2\" aria-hidden=\"true\"></i>
                </div>
            </div>
        </div>
    </section>


    <!-- Blog -->
    <section class=\"section-blog bg-white p-t-115 p-b-123\">
        <div class=\"container\">
            <div class=\"title-section-ourmenu t-center m-b-22\">
\t\t\t\t<span class=\"tit2 t-center\">
\t\t\t\t\tTOP 3
\t\t\t\t</span>

                <h3 class=\"tit5 t-center m-t-2\">
                    ARTICLES
                </h3>
            </div>

            <div class=\"row\">
                ";
        // line 741
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["v"] ?? $this->getContext($context, "v")));
        foreach ($context['_seq'] as $context["_key"] => $context["blogposts"]) {
            // line 742
            echo "                    <div class=\"col-md-4 p-t-30\">
                        <!-- Block1 -->
                        <div class=\"blo1\">
                            <div class=\"wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative\">
                                <a href=\"";
            // line 746
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Detail", ["postId" => $this->getAttribute($context["blogposts"], "postId", [])]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["blogposts"], "image", []))), "html", null, true);
            echo "\" alt=\"IMG-INTRO\" width=\"500\" height=\"250\"></a>

                                <div class=\"time-blog\">
                                    ";
            // line 749
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blogposts"], "postDate", []), "m/d/Y"), "html", null, true);
            echo "
                                </div>
                            </div>

                            <div class=\"wrap-text-blo1 p-t-35\">
                                <a href=\"\"><h4 class=\"txt5 color0-hov trans-0-4 m-b-13\">
                                       ";
            // line 755
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "articleTitle", []), "html", null, true);
            echo "
                                    </h4></a>

                                <p class=\"m-b-20\">
                                    ";
            // line 759
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postContent", []), "html", null, true);
            echo "
                                </p>

                                <a href=\"";
            // line 762
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Detail", ["postId" => $this->getAttribute($context["blogposts"], "postId", [])]), "html", null, true);
            echo "\" class=\"txt4\">
                                    Continue Reading
                                    <i class=\"fas fa-book-open\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogposts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 770
        echo "            </div>

        </div>
    </section>


    <!-- Sign up -->
    <div class=\"section-signup bg1-pattern p-t-85 p-b-85\">
        <form class=\"flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5\">
\t\t\t<span class=\"txt5 m-10\">
\t\t\t\tSpecials Sign up
\t\t\t</span>

            <div class=\"wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10\">
                <input class=\"bo-rad-10 sizefull txt10 p-l-20\" type=\"text\" name=\"email-address\" placeholder=\"Email Adrress\">
                <i class=\"fa fa-envelope ab-r-m m-r-18\" aria-hidden=\"true\"></i>
            </div>

            <!-- Button3 -->
            <button type=\"submit\" class=\"btn3 flex-c-m size18 txt11 trans-0-4 m-10\">
                Sign-up
            </button>
        </form>
    </div>


    <!-- Container Selection1 -->
    <div id=\"dropDownSelect1\"></div>
    <!-- Modal Video 01-->
    <div class=\"modal fade\" id=\"modal-video-01\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">

        <div class=\"modal-dialog\" role=\"document\" data-dismiss=\"modal\">
            <div class=\"close-mo-video-01 trans-0-4\" data-dismiss=\"modal\" aria-label=\"Close\">&times;</div>

            <div class=\"wrap-video-mo-01\">
                <div class=\"w-full wrap-pic-w op-0-0\"><img src=\"";
        // line 805
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/video-16-9.jpg"), "html", null, true);
        echo "\" alt=\"IMG\"></div>
                <div class=\"video-mo-01\">
                    <iframe src=\"https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0\" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  973 => 805,  936 => 770,  922 => 762,  916 => 759,  909 => 755,  900 => 749,  892 => 746,  886 => 742,  882 => 741,  846 => 708,  811 => 676,  780 => 648,  749 => 620,  719 => 593,  615 => 492,  595 => 475,  522 => 405,  502 => 388,  429 => 318,  409 => 301,  386 => 281,  371 => 269,  356 => 257,  337 => 241,  322 => 229,  307 => 217,  260 => 173,  233 => 149,  206 => 125,  186 => 108,  174 => 99,  119 => 47,  97 => 28,  75 => 9,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Home{% endblock %}
{% block body %}

    <!-- Slide1 -->
    <section class=\"section-slide\">
        <div class=\"wrap-slick1\">
            <div class=\"slick1\">
                <div class=\"item-slick1 item1-slick1\" style=\"background-image: url({{ asset('assets/images/pub2.jpg') }});\">
                    <div class=\"wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170\">
\t\t\t\t\t\t<span class=\"caption1-slide1 txt1 t-center animated visible-false m-b-15\" data-appear=\"fadeInDown\">
\t\t\t\t\t\t\tWelcome to
\t\t\t\t\t\t</span>

                        <h2 class=\"caption2-slide1 tit1 t-center animated visible-false m-b-37\" data-appear=\"fadeInUp\">
                            SmartStart
                        </h2>

                        <div class=\"wrap-btn-slide1 animated visible-false\" data-appear=\"zoomIn\">
                            <!-- Button1 -->
                            <a href=\"\" class=\"btn1 flex-c-m size1 txt3 trans-0-4\">
                                Look Menu
                            </a>
                        </div>
                    </div>
                </div>

                <div class=\"item-slick1 item2-slick1\" style=\"background-image: url({{ asset('assets/images/mike.jpg') }});\">
                    <div class=\"wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170\">
\t\t\t\t\t\t<span class=\"caption1-slide1 txt1 t-center animated visible-false m-b-15\" data-appear=\"rollIn\">
\t\t\t\t\t\t\tWelcome to
\t\t\t\t\t\t</span>

                        <h2 class=\"caption2-slide1 tit1 t-center animated visible-false m-b-37\" data-appear=\"lightSpeedIn\">
                            SmartStart
                        </h2>

                        <div class=\"wrap-btn-slide1 animated visible-false\" data-appear=\"slideInUp\">
                            <!-- Button1 -->
                            <a href=\"\" class=\"btn1 flex-c-m size1 txt3 trans-0-4\">
                                Look Menu
                            </a>
                        </div>
                    </div>
                </div>

                <div class=\"item-slick1 item3-slick1\" style=\"background-image: url({{ asset('assets/images/pub1.jpg') }});\">
                    <div class=\"wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170\">
\t\t\t\t\t\t<span class=\"caption1-slide1 txt1 t-center animated visible-false m-b-15\" data-appear=\"rotateInDownLeft\">
\t\t\t\t\t\t\tWelcome to
\t\t\t\t\t\t</span>

                        <h2 class=\"caption2-slide1 tit1 t-center animated visible-false m-b-37\" data-appear=\"rotateInUpRight\">
                            SmartStart
                        </h2>

                        <div class=\"wrap-btn-slide1 animated visible-false\" data-appear=\"rotateIn\">
                            <!-- Button1 -->
                            <a href=\"\" class=\"btn1 flex-c-m size1 txt3 trans-0-4\">
                                Look Menu
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class=\"wrap-slick1-dots\"></div>
        </div>
    </section>

    <!-- Welcome -->
    <section class=\"section-welcome bg1-pattern p-t-120 p-b-105\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 p-t-45 p-b-30\">
                    <div class=\"wrap-text-welcome t-center\">
\t\t\t\t\t\t<span class=\"tit2 t-center\">
\t\t\t\t\t\t\tItalian Restaurant
\t\t\t\t\t\t</span>

                        <h3 class=\"tit3 t-center m-b-35 m-t-5\">
                            Welcome
                        </h3>

                        <p class=\"t-center m-b-22 size3 m-l-r-auto\">
                            Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia, nisl ante egestas mi, ac facilisis ligula sem id neque.
                        </p>

                        <a href=\"\" class=\"txt4\">
                            Our Story
                            <i class=\"fa fa-long-arrow-right m-l-10\" aria-hidden=\"true\"></i>
                        </a>
                    </div>
                </div>

                <div class=\"col-md-6 p-b-30\">
                    <div class=\"wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto\">
                        <img src=\"{{ asset('assets/images/our-story-01.jpg') }}\" alt=\"IMG-OUR\">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Intro -->
    <section class=\"section-intro\">
        <div class=\"header-intro parallax100 t-center p-t-135 p-b-158\" style=\"background-image: url({{ asset('assets/images/bg-intro-01.jpg') }});\">
\t\t\t<span class=\"tit2 p-l-15 p-r-15\">
\t\t\t\tDiscover
\t\t\t</span>

            <h3 class=\"tit4 t-center p-l-15 p-r-15 p-t-3\">
                SmartStart
            </h3>
        </div>

        <div class=\"content-intro bg-white p-t-77 p-b-133\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 p-t-30\">
                        <!-- Block1 -->
                        <div class=\"blo1\">
                            <div class=\"wrap-pic-blo1 bo-rad-10 hov-img-zoom\">
                                <a href=\"#\"><img src=\"{{ asset('assets/images/intro-01.jpg') }}\" alt=\"IMG-INTRO\"></a>
                            </div>

                            <div class=\"wrap-text-blo1 p-t-35\">
                                <a href=\"#\"><h4 class=\"txt5 color0-hov trans-0-4 m-b-13\">
                                        Romantic Restaurant
                                    </h4></a>

                                <p class=\"m-b-20\">
                                    Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
                                </p>

                                <a href=\"#\" class=\"txt4\">
                                    Learn More
                                    <i class=\"fa fa-long-arrow-right m-l-10\" aria-hidden=\"true\"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-4 p-t-30\">
                        <!-- Block1 -->
                        <div class=\"blo1\">
                            <div class=\"wrap-pic-blo1 bo-rad-10 hov-img-zoom\">
                                <a href=\"#\"><img src=\"{{ asset('assets/images/intro-02.jpg') }}\" alt=\"IMG-INTRO\"></a>
                            </div>

                            <div class=\"wrap-text-blo1 p-t-35\">
                                <a href=\"#\"><h4 class=\"txt5 color0-hov trans-0-4 m-b-13\">
                                        Delicious Food
                                    </h4></a>

                                <p class=\"m-b-20\">
                                    Aliquam eget aliquam magna, quis posuere risus ac justo ipsum nibh urna
                                </p>

                                <a href=\"#\" class=\"txt4\">
                                    Learn More
                                    <i class=\"fa fa-long-arrow-right m-l-10\" aria-hidden=\"true\"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-4 p-t-30\">
                        <!-- Block1 -->
                        <div class=\"blo1\">
                            <div class=\"wrap-pic-blo1 bo-rad-10 hov-img-zoom\">
                                <a href=\"#\"><img src=\"{{ asset('assets/images/intro-04.jpg') }}\" alt=\"IMG-INTRO\"></a>
                            </div>

                            <div class=\"wrap-text-blo1 p-t-35\">
                                <a href=\"#\"><h4 class=\"txt5 color0-hov trans-0-4 m-b-13\">
                                        Red Wines You Love
                                    </h4></a>

                                <p class=\"m-b-20\">
                                    Sed ornare ligula eget tortor tempor, quis porta tellus dictum.
                                </p>

                                <a href=\"#\" class=\"txt4\">
                                    Learn More
                                    <i class=\"fa fa-long-arrow-right m-l-10\" aria-hidden=\"true\"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Our menu -->
    <section class=\"section-ourmenu bg2-pattern p-t-115 p-b-120\">
        <div class=\"container\">
            <div class=\"title-section-ourmenu t-center m-b-22\">
\t\t\t\t<span class=\"tit2 t-center\">
\t\t\t\t\tDiscover
\t\t\t\t</span>

                <h3 class=\"tit5 t-center m-t-2\">
                    Our Menu
                </h3>
            </div>

            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <!-- Item our menu -->
                            <div class=\"item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30\">
                                <img src=\"{{ asset('assets/images/our-menu-01.jpg') }}\" alt=\"IMG-MENU\">

                                <!-- Button2 -->
                                <a href=\"#\" class=\"btn2 flex-c-m txt5 ab-c-m size4\">
                                    Lunch
                                </a>
                            </div>
                        </div>

                        <div class=\"col-sm-6\">
                            <!-- Item our menu -->
                            <div class=\"item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30\">
                                <img src=\"{{ asset('assets/images/our-menu-05.jpg') }}\" alt=\"IMG-MENU\">

                                <!-- Button2 -->
                                <a href=\"#\" class=\"btn2 flex-c-m txt5 ab-c-m size5\">
                                    Dinner
                                </a>
                            </div>
                        </div>

                        <div class=\"col-12\">
                            <!-- Item our menu -->
                            <div class=\"item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30\">
                                <img src=\"{{ asset('assets/images/our-menu-13.jpg') }}\" alt=\"IMG-MENU\">

                                <!-- Button2 -->
                                <a href=\"#\" class=\"btn2 flex-c-m txt5 ab-c-m size6\">
                                    Happy Hour
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <!-- Item our menu -->
                            <div class=\"item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30\">
                                <img src=\"{{ asset('assets/images/our-menu-08.jpg') }}\" alt=\"IMG-MENU\">

                                <!-- Button2 -->
                                <a href=\"#\" class=\"btn2 flex-c-m txt5 ab-c-m size7\">
                                    Drink
                                </a>
                            </div>
                        </div>

                        <div class=\"col-12\">
                            <!-- Item our menu -->
                            <div class=\"item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30\">
                                <img src=\"{{ asset('assets/images/our-menu-10.jpg') }}\" alt=\"IMG-MENU\">

                                <!-- Button2 -->
                                <a href=\"#\" class=\"btn2 flex-c-m txt5 ab-c-m size8\">
                                    Starters
                                </a>
                            </div>
                        </div>

                        <div class=\"col-12\">
                            <!-- Item our menu -->
                            <div class=\"item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30\">
                                <img src=\"{{ asset('assets/images/our-menu-16.jpg') }}\" alt=\"IMG-MENU\">

                                <!-- Button2 -->
                                <a href=\"#\" class=\"btn2 flex-c-m txt5 ab-c-m size9\">
                                    Dessert
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- Event -->
    <section class=\"section-event\">
        <div class=\"wrap-slick2\">
            <div class=\"slick2\">
                <div class=\"item-slick2 item1-slick2\" style=\"background-image: url({{ asset('assets/images/bg-event-01.jpg') }});\">
                    <div class=\"wrap-content-slide2 p-t-115 p-b-208\">
                        <div class=\"container\">
                            <!-- - -->
                            <div class=\"title-event t-center m-b-52\">
\t\t\t\t\t\t\t\t<span class=\"tit2 p-l-15 p-r-15\">
\t\t\t\t\t\t\t\t\tUpcomming
\t\t\t\t\t\t\t\t</span>

                                <h3 class=\"tit6 t-center p-l-15 p-r-15 p-t-3\">
                                    Events
                                </h3>
                            </div>

                            <!-- Block2 -->
                            <div class=\"blo2 flex-w flex-str flex-col-c-m-lg animated visible-false\" data-appear=\"zoomIn\">
                                <!-- Pic block2 -->
                                <a href=\"#\" class=\"wrap-pic-blo2 bg1-blo2\" style=\"background-image: url({{ asset('assets/images/bg-event-02.jpg') }});\">
                                    <div class=\"time-event size10 txt6 effect1\">
\t\t\t\t\t\t\t\t\t\t<span class=\"txt-effect1 flex-c-m t-center\">
\t\t\t\t\t\t\t\t\t\t\t08:00 PM Tuesday - 21 November 2018
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </a>

                                <!-- Text block2 -->
                                <div class=\"wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30\">
                                    <h4 class=\"tit7 t-center m-b-10\">
                                        Wines during specific nights
                                    </h4>

                                    <p class=\"t-center\">
                                        Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia
                                    </p>

                                    <div class=\"flex-sa-m flex-w w-full m-t-40\">
                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 days\">
\t\t\t\t\t\t\t\t\t\t\t\t25
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tDays
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>

                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 hours\">
\t\t\t\t\t\t\t\t\t\t\t\t12
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tHours
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>

                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 minutes\">
\t\t\t\t\t\t\t\t\t\t\t\t59
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tMinutes
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>

                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 seconds\">
\t\t\t\t\t\t\t\t\t\t\t\t56
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tSeconds
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>
                                    </div>

                                    <a href=\"#\" class=\"txt4 m-t-40\">
                                        View Details
                                        <i class=\"fa fa-long-arrow-right m-l-10\" aria-hidden=\"true\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"item-slick2 item2-slick2\" style=\"background-image: url({{ asset('assets/images/master-slides-02.jpg') }});\">
                    <div class=\"wrap-content-slide2 p-t-115 p-b-208\">
                        <div class=\"container\">
                            <!-- - -->
                            <div class=\"title-event t-center m-b-52\">
\t\t\t\t\t\t\t\t<span class=\"tit2 p-l-15 p-r-15\">
\t\t\t\t\t\t\t\t\tUpcomming
\t\t\t\t\t\t\t\t</span>

                                <h3 class=\"tit6 t-center p-l-15 p-r-15 p-t-3\">
                                    Events
                                </h3>
                            </div>

                            <!-- Block2 -->
                            <div class=\"blo2 flex-w flex-str flex-col-c-m-lg animated visible-false\" data-appear=\"fadeInDown\">
                                <!-- Pic block2 -->
                                <a href=\"#\" class=\"wrap-pic-blo2 bg2-blo2\" style=\"background-image: url({{ asset('assets/images/event-06.jpg') }});\">
                                    <div class=\"time-event size10 txt6 effect1\">
\t\t\t\t\t\t\t\t\t\t<span class=\"txt-effect1 flex-c-m\">
\t\t\t\t\t\t\t\t\t\t\t08:00 PM Tuesday - 21 November 2018
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </a>

                                <!-- Text block2 -->
                                <div class=\"wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30\">
                                    <h4 class=\"tit7 t-center m-b-10\">
                                        Wines during specific nights
                                    </h4>

                                    <p class=\"t-center\">
                                        Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia
                                    </p>

                                    <div class=\"flex-sa-m flex-w w-full m-t-40\">
                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 days\">
\t\t\t\t\t\t\t\t\t\t\t\t25
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tDays
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>

                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 hours\">
\t\t\t\t\t\t\t\t\t\t\t\t12
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tHours
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>

                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 minutes\">
\t\t\t\t\t\t\t\t\t\t\t\t59
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tMinutes
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>

                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 seconds\">
\t\t\t\t\t\t\t\t\t\t\t\t56
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tSeconds
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>
                                    </div>

                                    <a href=\"#\" class=\"txt4 m-t-40\">
                                        View Details
                                        <i class=\"fa fa-long-arrow-right m-l-10\" aria-hidden=\"true\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"item-slick2 item3-slick2\" style=\"background-image: url({{ asset('assets/images/bg-event-04.jpg') }});\">
                    <div class=\"wrap-content-slide2 p-t-115 p-b-208\">
                        <div class=\"container\">
                            <!-- - -->
                            <div class=\"title-event t-center m-b-52\">
\t\t\t\t\t\t\t\t<span class=\"tit2 p-l-15 p-r-15\">
\t\t\t\t\t\t\t\t\tUpcomming
\t\t\t\t\t\t\t\t</span>

                                <h3 class=\"tit6 t-center p-l-15 p-r-15 p-t-3\">
                                    Events
                                </h3>
                            </div>

                            <!-- Block2 -->
                            <div class=\"blo2 flex-w flex-str flex-col-c-m-lg animated visible-false\" data-appear=\"rotateInUpLeft\">
                                <!-- Pic block2 -->
                                <a href=\"#\" class=\"wrap-pic-blo2 bg3-blo2\" style=\"background-image: url({{ asset('assets/images/event-01.jpg') }});\">
                                    <div class=\"time-event size10 txt6 effect1\">
\t\t\t\t\t\t\t\t\t\t<span class=\"txt-effect1 flex-c-m\">
\t\t\t\t\t\t\t\t\t\t\t08:00 PM Tuesday - 21 November 2018
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </a>

                                <!-- Text block2 -->
                                <div class=\"wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30\">
                                    <h4 class=\"tit7 t-center m-b-10\">
                                        Wines during specific nights
                                    </h4>

                                    <p class=\"t-center\">
                                        Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia
                                    </p>

                                    <div class=\"flex-sa-m flex-w w-full m-t-40\">
                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 days\">
\t\t\t\t\t\t\t\t\t\t\t\t25
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tDays
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>

                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 hours\">
\t\t\t\t\t\t\t\t\t\t\t\t12
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tHours
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>

                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 minutes\">
\t\t\t\t\t\t\t\t\t\t\t\t59
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tMinutes
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>

                                        <div class=\"size11 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dis-block t-center txt7 m-b-2 seconds\">
\t\t\t\t\t\t\t\t\t\t\t\t56
\t\t\t\t\t\t\t\t\t\t\t</span>

                                            <span class=\"dis-block t-center txt8\">
\t\t\t\t\t\t\t\t\t\t\t\tSeconds
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>
                                    </div>

                                    <a href=\"#\" class=\"txt4 m-t-40\">
                                        View Details
                                        <i class=\"fa fa-long-arrow-right m-l-10\" aria-hidden=\"true\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class=\"wrap-slick2-dots\"></div>
        </div>
    </section>

    <!-- Booking -->
    <section class=\"section-booking bg1-pattern p-t-100 p-b-110\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 p-b-30\">
                    <div class=\"t-center\">
\t\t\t\t\t\t<span class=\"tit2 t-center\">
\t\t\t\t\t\t\tReservation
\t\t\t\t\t\t</span>

                        <h3 class=\"tit3 t-center m-b-35 m-t-2\">
                            Book table
                        </h3>
                    </div>

                    <div class=\"wrap-btn-booking flex-c-m m-t-6\">
                        <!-- Button3 -->
                        <a href=\"\" class=\"btn3 flex-c-m size12 txt11 trans-0-4\">
                            Réserver maintenant
                        </a>
                    </div>
                </div>

                <div class=\"col-lg-6 p-b-30 p-t-18\">
                    <div class=\"wrap-pic-booking size2 bo-rad-10 hov-img-zoom m-l-r-auto\">
                        <img src=\"{{ asset('assets/images/booking-01.jpg') }}\" alt=\"IMG-OUR\">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Review -->
    <section class=\"section-review p-t-115\">
        <!-- - -->
        <div class=\"title-review t-center m-b-2\">
\t\t\t<span class=\"tit2 p-l-15 p-r-15\">
\t\t\t\tCustomers Say
\t\t\t</span>

            <h3 class=\"tit8 t-center p-l-20 p-r-15 p-t-3\">
                Review
            </h3>
        </div>

        <!-- - -->
        <div class=\"wrap-slick3\">
            <div class=\"slick3\">
                <div class=\"item-slick3 item1-slick3\">
                    <div class=\"wrap-content-slide3 p-b-50 p-t-50\">
                        <div class=\"container\">
                            <div class=\"pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false\" data-appear=\"zoomIn\">
                                <img src=\"{{ asset('assets/images/avatar-01.jpg') }}\" alt=\"IGM-AVATAR\">
                            </div>

                            <div class=\"content-review m-t-33 animated visible-false\" data-appear=\"fadeInUp\">
                                <p class=\"t-center txt12 size15 m-l-r-auto\">
                                    “ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”
                                </p>

                                <div class=\"star-review fs-18 color0 flex-c-m m-t-12\">
                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                </div>

                                <div class=\"more-review txt4 t-center animated visible-false m-t-32\" data-appear=\"fadeInUp\">
                                    Marie Simmons ˗ New York
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"item-slick3 item2-slick3\">
                    <div class=\"wrap-content-slide3 p-b-50 p-t-50\">
                        <div class=\"container\">
                            <div class=\"pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false\" data-appear=\"zoomIn\">
                                <img src=\"{{ asset('assets/images/avatar-04.jpg') }}\" alt=\"IGM-AVATAR\">
                            </div>

                            <div class=\"content-review m-t-33 animated visible-false\" data-appear=\"fadeInUp\">
                                <p class=\"t-center txt12 size15 m-l-r-auto\">
                                    “ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”
                                </p>

                                <div class=\"star-review fs-18 color0 flex-c-m m-t-12\">
                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                </div>

                                <div class=\"more-review txt4 t-center animated visible-false m-t-32\" data-appear=\"fadeInUp\">
                                    Marie Simmons ˗ New York
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"item-slick3 item3-slick3\">
                    <div class=\"wrap-content-slide3 p-b-50 p-t-50\">
                        <div class=\"container\">
                            <div class=\"pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false\" data-appear=\"zoomIn\">
                                <img src=\"{{ asset('assets/images/avatar-05.jpg') }}\" alt=\"IGM-AVATAR\">
                            </div>

                            <div class=\"content-review m-t-33 animated visible-false\" data-appear=\"fadeInUp\">
                                <p class=\"t-center txt12 size15 m-l-r-auto\">
                                    “ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”
                                </p>

                                <div class=\"star-review fs-18 color0 flex-c-m m-t-12\">
                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                    <i class=\"fa fa-star p-l-1\" aria-hidden=\"true\"></i>
                                </div>

                                <div class=\"more-review txt4 t-center animated visible-false m-t-32\" data-appear=\"fadeInUp\">
                                    Marie Simmons ˗ New York
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class=\"wrap-slick3-dots m-t-30\"></div>
        </div>
    </section>


    <!-- Video -->
    <section class=\"section-video parallax100\" style=\"background-image: url({{ asset('assets/images/bg-cover-video-02.jpg') }});\">
        <div class=\"content-video t-center p-t-225 p-b-250\">
\t\t\t<span class=\"tit2 p-l-15 p-r-15\">
\t\t\t\tDiscover
\t\t\t</span>

            <h3 class=\"tit4 t-center p-l-15 p-r-15 p-t-3\">
                Our Video
            </h3>

            <div class=\"btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33\" data-toggle=\"modal\" data-target=\"#modal-video-01\">
                <div class=\"flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4\">
                    <i class=\"fa fa-play fs-18 m-l-2\" aria-hidden=\"true\"></i>
                </div>
            </div>
        </div>
    </section>


    <!-- Blog -->
    <section class=\"section-blog bg-white p-t-115 p-b-123\">
        <div class=\"container\">
            <div class=\"title-section-ourmenu t-center m-b-22\">
\t\t\t\t<span class=\"tit2 t-center\">
\t\t\t\t\tTOP 3
\t\t\t\t</span>

                <h3 class=\"tit5 t-center m-t-2\">
                    ARTICLES
                </h3>
            </div>

            <div class=\"row\">
                {% for blogposts in v  %}
                    <div class=\"col-md-4 p-t-30\">
                        <!-- Block1 -->
                        <div class=\"blo1\">
                            <div class=\"wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative\">
                                <a href=\"{{ path('blog_Detail',{('postId'):blogposts.postId}) }}\"><img src=\"{{ asset('uploads/images/' ~ blogposts.image) }}\" alt=\"IMG-INTRO\" width=\"500\" height=\"250\"></a>

                                <div class=\"time-blog\">
                                    {{ blogposts.postDate|date(\"m/d/Y\")}}
                                </div>
                            </div>

                            <div class=\"wrap-text-blo1 p-t-35\">
                                <a href=\"\"><h4 class=\"txt5 color0-hov trans-0-4 m-b-13\">
                                       {{ blogposts.articleTitle }}
                                    </h4></a>

                                <p class=\"m-b-20\">
                                    {{ blogposts.postContent }}
                                </p>

                                <a href=\"{{ path('blog_Detail',{('postId'):blogposts.postId}) }}\" class=\"txt4\">
                                    Continue Reading
                                    <i class=\"fas fa-book-open\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>

        </div>
    </section>


    <!-- Sign up -->
    <div class=\"section-signup bg1-pattern p-t-85 p-b-85\">
        <form class=\"flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5\">
\t\t\t<span class=\"txt5 m-10\">
\t\t\t\tSpecials Sign up
\t\t\t</span>

            <div class=\"wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10\">
                <input class=\"bo-rad-10 sizefull txt10 p-l-20\" type=\"text\" name=\"email-address\" placeholder=\"Email Adrress\">
                <i class=\"fa fa-envelope ab-r-m m-r-18\" aria-hidden=\"true\"></i>
            </div>

            <!-- Button3 -->
            <button type=\"submit\" class=\"btn3 flex-c-m size18 txt11 trans-0-4 m-10\">
                Sign-up
            </button>
        </form>
    </div>


    <!-- Container Selection1 -->
    <div id=\"dropDownSelect1\"></div>
    <!-- Modal Video 01-->
    <div class=\"modal fade\" id=\"modal-video-01\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">

        <div class=\"modal-dialog\" role=\"document\" data-dismiss=\"modal\">
            <div class=\"close-mo-video-01 trans-0-4\" data-dismiss=\"modal\" aria-label=\"Close\">&times;</div>

            <div class=\"wrap-video-mo-01\">
                <div class=\"w-full wrap-pic-w op-0-0\"><img src=\"{{ asset('assets/images/icons/video-16-9.jpg') }}\" alt=\"IMG\"></div>
                <div class=\"video-mo-01\">
                    <iframe src=\"https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0\" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "default/index.html.twig", "C:\\wamp64\\www\\SmartStart\\app\\Resources\\views\\default\\index.html.twig");
    }
}
