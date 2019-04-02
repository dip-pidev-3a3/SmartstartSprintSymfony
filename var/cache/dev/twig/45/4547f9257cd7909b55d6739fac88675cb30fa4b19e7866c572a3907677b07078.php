<?php

/* BlogBundle:BlogViews:notification.html.twig */
class __TwigTemplate_252c41b153431343307fc8fef120c74ad29b64048ef51ea61d0b5aa4d17a8a4b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:BlogViews:notification.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:BlogViews:notification.html.twig"));

        // line 1
        echo "<html>
<head>
    <style>
        div.gfg {
            margin:5px;
            padding:5px;

            width: 420px;
            height: 200px;
            overflow: auto;
            text-align:justify;
        }

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
            <div id=\"noti_Button\"> <center><i class=\"fas fa-bell\" style=\"color: darkred\"></i></center></div>

            <!--THE NOTIFICAIONS DROPDOWN BOX.-->
            <div id=\"notifications\" >
                <h3>Notifications</h3>
                <div class=\"gfg\">
                    <ul>
                        ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notificationList"] ?? $this->getContext($context, "notificationList")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 114
            echo "                            <li>
                                <b>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "notification", []), "html", null, true);
            echo "</b>
                                <br>
                                seen : ";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "seen", []), "html", null, true);
            echo "
                                <form action=\"";
            // line 118
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->generatePath("notification_mark_as_seen", $this->getAttribute($context["item"], "notifiableEntity", []), $this->getAttribute($context["item"], "notification", []));
            echo "\"
                                      method=\"post\">
                                    <button type=\"submit\">Mark as seen</button>
                                </form>
                                <form action=\"";
            // line 122
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
        // line 128
        echo "                    </ul>
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
                    \$('#noti_Button').css('background-color', '#FFF');
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
        return "BlogBundle:BlogViews:notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 128,  162 => 122,  155 => 118,  151 => 117,  146 => 115,  143 => 114,  139 => 113,  25 => 1,);
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
        div.gfg {
            margin:5px;
            padding:5px;

            width: 420px;
            height: 200px;
            overflow: auto;
            text-align:justify;
        }

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
            <div id=\"noti_Button\"> <center><i class=\"fas fa-bell\" style=\"color: darkred\"></i></center></div>

            <!--THE NOTIFICAIONS DROPDOWN BOX.-->
            <div id=\"notifications\" >
                <h3>Notifications</h3>
                <div class=\"gfg\">
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
                    \$('#noti_Button').css('background-color', '#FFF');
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
</html>", "BlogBundle:BlogViews:notification.html.twig", "C:\\wamp64\\www\\SmartStart\\src\\BlogBundle/Resources/views/BlogViews/notification.html.twig");
    }
}
