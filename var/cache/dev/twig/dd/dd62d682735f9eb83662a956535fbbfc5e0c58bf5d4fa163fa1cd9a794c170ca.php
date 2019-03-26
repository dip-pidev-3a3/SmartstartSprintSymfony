<?php

/* @Blog/BlogViews/notification.html.twig */
class __TwigTemplate_4dfb55887d893590b012aca42f59bdc290f5d5e72d02ad25102c143feae2073d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/BlogViews/notification.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/BlogViews/notification.html.twig"));

        // line 1
        echo "<html>
<head>
    <style>

        #noti_Container {
            position:relative;
        }

        /* A CIRCLE LIKE BUTTON IN THE TOP MENU. */
        #noti_Button {
            width:22px;
            height:22px;
            line-height:22px;
            border-radius:50%;
            -moz-border-radius:50%;
            -webkit-border-radius:50%;
            background:#FFF;
            margin:-3px 10px 0 10px;
            cursor:pointer;
        }

        /* THE POPULAR RED NOTIFICATIONS COUNTER. */
        #noti_Counter {
            display:block;
            position:absolute;
            background:#E1141E;
            color:#FFF;
            font-size:12px;
            font-weight:normal;
            padding:1px 3px;
            margin:-8px 0 0 25px;
            border-radius:2px;
            -moz-border-radius:2px;
            -webkit-border-radius:2px;
            z-index:1;
        }

        /* THE NOTIFICAIONS WINDOW. THIS REMAINS HIDDEN WHEN THE PAGE LOADS. */
        #notifications {
            display:none;
            width:430px;
            position:absolute;
            top:30px;
            left:0;
            background:#FFF;
            border:solid 1px rgba(100, 100, 100, .20);
            -webkit-box-shadow:0 3px 8px rgba(0, 0, 0, .20);
            z-index: 0;
        }
        /* AN ARROW LIKE STRUCTURE JUST OVER THE NOTIFICATIONS WINDOW */
        #notifications:before {
            content: '';
            display:block;
            width:0;
            height:0;
            color:transparent;
            border:10px solid #CCC;
            border-color:transparent transparent #FFF;
            margin-top:-20px;
            margin-left:10px;
        }

        h3 {
            display:block;
            color:#333;
            background:#FFF;
            font-weight:bold;
            font-size:13px;
            padding:8px;
            margin:0;
            border-bottom:solid 1px rgba(100, 100, 100, .30);
        }

        .seeAll {
            background:#F6F7F8;
            padding:8px;
            font-size:12px;
            font-weight:bold;
            border-top:solid 1px rgba(100, 100, 100, .30);
            text-align:center;
        }
        .seeAll a {
            color:#3b5998;
        }
        .seeAll a:hover {
            background:#F6F7F8;
            color:white;
            text-decoration:underline;
        }
    </style>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js\"></script>
        <ul>
            <li id=\"noti_Container\">
                <div id=\"noti_Counter\"></div>   <!--SHOW NOTIFICATIONS COUNT.-->

                <!--A CIRCLE LIKE BUTTON TO DISPLAY NOTIFICATION DROPDOWN.-->
                <div id=\"noti_Button\"> <center><i class=\"fas fa-bell\" style=\"color: yellow\"></i></center></div>

                <!--THE NOTIFICAIONS DROPDOWN BOX.-->
                <div id=\"notifications\">
                    <h3>Notifications</h3>
                    <div style=\"height:300px;\">
                        <ul>
                            ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notificationList"] ?? $this->getContext($context, "notificationList")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 105
            echo "                                <li>
                                    <b>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "notification", []), "html", null, true);
            echo "</b>
                                    <br>
                                    seen : ";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "seen", []), "html", null, true);
            echo "
                                    <form action=\"";
            // line 109
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->generatePath("notification_mark_as_seen", $this->getAttribute($context["item"], "notifiableEntity", []), $this->getAttribute($context["item"], "notification", []));
            echo "\"
                                          method=\"post\">
                                        <button type=\"submit\">Mark as seen</button>
                                    </form>
                                    <form action=\"";
            // line 113
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->generatePath("notification_mark_as_unseen", $this->getAttribute($context["item"], "notifiableEntity", []), $this->getAttribute($context["item"], "notification", []));
            echo "\"
                                          method=\"post\">
                                        <button type=\"submit\">Mark as unseen</button>
                                    </form>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                        </ul>
                    </div>
                    <div class=\"seeAll\"><a href=\"#\">See All</a></div>
                </div>
            </li>

        </ul>

</head>

<script>
    \$(document).ready(function () {

        // ANIMATEDLY DISPLAY THE NOTIFICATION COUNTER.
        \$('#noti_Counter')
            .css({ opacity: 0 })
            .text('7')      // ADD DYNAMIC VALUE (YOU CAN EXTRACT DATA FROM DATABASE OR XML).
            .css({ top: '-10px' })
            .animate({ top: '-2px', opacity: 1 }, 500);

        \$('#noti_Button').click(function () {

            // TOGGLE (SHOW OR HIDE) NOTIFICATION WINDOW.
            \$('#notifications').fadeToggle('fast', 'linear', function () {
                if (\$('#notifications').is(':hidden')) {
                    \$('#noti_Button').css('background-color', '#2E467C');
                }
                // CHANGE BACKGROUND COLOR OF THE BUTTON.
                else \$('#noti_Button').css('background-color', '#FFF');
            });

            \$('#noti_Counter').fadeOut('slow');     // HIDE THE COUNTER.

            return false;
        });

        // HIDE NOTIFICATIONS WHEN CLICKED ANYWHERE ON THE PAGE.
        \$(document).click(function () {
            \$('#notifications').hide();

            // CHECK IF NOTIFICATION COUNTER IS HIDDEN.
            if (\$('#noti_Counter').is(':hidden')) {
                // CHANGE BACKGROUND COLOR OF THE BUTTON.
                \$('#noti_Button').css('background-color', '#2E467C');
            }
        });

        \$('#notifications').click(function () {
            return false;       // DO NOTHING WHEN CONTAINER IS CLICKED.
        });
    });
</script>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/BlogViews/notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 119,  153 => 113,  146 => 109,  142 => 108,  137 => 106,  134 => 105,  130 => 104,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    <style>

        #noti_Container {
            position:relative;
        }

        /* A CIRCLE LIKE BUTTON IN THE TOP MENU. */
        #noti_Button {
            width:22px;
            height:22px;
            line-height:22px;
            border-radius:50%;
            -moz-border-radius:50%;
            -webkit-border-radius:50%;
            background:#FFF;
            margin:-3px 10px 0 10px;
            cursor:pointer;
        }

        /* THE POPULAR RED NOTIFICATIONS COUNTER. */
        #noti_Counter {
            display:block;
            position:absolute;
            background:#E1141E;
            color:#FFF;
            font-size:12px;
            font-weight:normal;
            padding:1px 3px;
            margin:-8px 0 0 25px;
            border-radius:2px;
            -moz-border-radius:2px;
            -webkit-border-radius:2px;
            z-index:1;
        }

        /* THE NOTIFICAIONS WINDOW. THIS REMAINS HIDDEN WHEN THE PAGE LOADS. */
        #notifications {
            display:none;
            width:430px;
            position:absolute;
            top:30px;
            left:0;
            background:#FFF;
            border:solid 1px rgba(100, 100, 100, .20);
            -webkit-box-shadow:0 3px 8px rgba(0, 0, 0, .20);
            z-index: 0;
        }
        /* AN ARROW LIKE STRUCTURE JUST OVER THE NOTIFICATIONS WINDOW */
        #notifications:before {
            content: '';
            display:block;
            width:0;
            height:0;
            color:transparent;
            border:10px solid #CCC;
            border-color:transparent transparent #FFF;
            margin-top:-20px;
            margin-left:10px;
        }

        h3 {
            display:block;
            color:#333;
            background:#FFF;
            font-weight:bold;
            font-size:13px;
            padding:8px;
            margin:0;
            border-bottom:solid 1px rgba(100, 100, 100, .30);
        }

        .seeAll {
            background:#F6F7F8;
            padding:8px;
            font-size:12px;
            font-weight:bold;
            border-top:solid 1px rgba(100, 100, 100, .30);
            text-align:center;
        }
        .seeAll a {
            color:#3b5998;
        }
        .seeAll a:hover {
            background:#F6F7F8;
            color:white;
            text-decoration:underline;
        }
    </style>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js\"></script>
        <ul>
            <li id=\"noti_Container\">
                <div id=\"noti_Counter\"></div>   <!--SHOW NOTIFICATIONS COUNT.-->

                <!--A CIRCLE LIKE BUTTON TO DISPLAY NOTIFICATION DROPDOWN.-->
                <div id=\"noti_Button\"> <center><i class=\"fas fa-bell\" style=\"color: yellow\"></i></center></div>

                <!--THE NOTIFICAIONS DROPDOWN BOX.-->
                <div id=\"notifications\">
                    <h3>Notifications</h3>
                    <div style=\"height:300px;\">
                        <ul>
                            {% for item in notificationList %}
                                <li>
                                    <b>{{ item.notification }}</b>
                                    <br>
                                    seen : {{ item.seen }}
                                    <form action=\"{{ mgilet_notification_generate_path('notification_mark_as_seen', item.notifiableEntity, item.notification) }}\"
                                          method=\"post\">
                                        <button type=\"submit\">Mark as seen</button>
                                    </form>
                                    <form action=\"{{ mgilet_notification_generate_path('notification_mark_as_unseen', item.notifiableEntity, item.notification) }}\"
                                          method=\"post\">
                                        <button type=\"submit\">Mark as unseen</button>
                                    </form>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                    <div class=\"seeAll\"><a href=\"#\">See All</a></div>
                </div>
            </li>

        </ul>

</head>

<script>
    \$(document).ready(function () {

        // ANIMATEDLY DISPLAY THE NOTIFICATION COUNTER.
        \$('#noti_Counter')
            .css({ opacity: 0 })
            .text('7')      // ADD DYNAMIC VALUE (YOU CAN EXTRACT DATA FROM DATABASE OR XML).
            .css({ top: '-10px' })
            .animate({ top: '-2px', opacity: 1 }, 500);

        \$('#noti_Button').click(function () {

            // TOGGLE (SHOW OR HIDE) NOTIFICATION WINDOW.
            \$('#notifications').fadeToggle('fast', 'linear', function () {
                if (\$('#notifications').is(':hidden')) {
                    \$('#noti_Button').css('background-color', '#2E467C');
                }
                // CHANGE BACKGROUND COLOR OF THE BUTTON.
                else \$('#noti_Button').css('background-color', '#FFF');
            });

            \$('#noti_Counter').fadeOut('slow');     // HIDE THE COUNTER.

            return false;
        });

        // HIDE NOTIFICATIONS WHEN CLICKED ANYWHERE ON THE PAGE.
        \$(document).click(function () {
            \$('#notifications').hide();

            // CHECK IF NOTIFICATION COUNTER IS HIDDEN.
            if (\$('#noti_Counter').is(':hidden')) {
                // CHANGE BACKGROUND COLOR OF THE BUTTON.
                \$('#noti_Button').css('background-color', '#2E467C');
            }
        });

        \$('#notifications').click(function () {
            return false;       // DO NOTHING WHEN CONTAINER IS CLICKED.
        });
    });
</script>
</html>", "@Blog/BlogViews/notification.html.twig", "C:\\wamp\\www\\SmartStartSymfony-push\\src\\BlogBundle\\Resources\\views\\BlogViews\\notification.html.twig");
    }
}
