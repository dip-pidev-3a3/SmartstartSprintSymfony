<?php

/* MgiletNotificationBundle::notifications.html.twig */
class __TwigTemplate_370647b75859d16eed1d5dd920f9f9a92ca85b2e21db14a8b1870dda7460c632 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MgiletNotificationBundle::notifications.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MgiletNotificationBundle::notifications.html.twig"));

        // line 1
        echo "Notifications :
";
        // line 2
        if ((twig_length_filter($this->env, ($context["notificationList"] ?? $this->getContext($context, "notificationList"))) > 0)) {
            // line 3
            echo "    <form action=\"";
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->generatePath("notification_mark_all_as_seen", $this->getAttribute(twig_first($this->env, ($context["notificationList"] ?? $this->getContext($context, "notificationList"))), "notifiableEntity", []));
            echo "\" method=\"post\">
        <button type=\"submit\">Mark all as seen</button>
    </form>
";
        }
        // line 7
        echo "<ul>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notificationList"] ?? $this->getContext($context, "notificationList")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "        <li>
            <b>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "notification", []), "html", null, true);
            echo "</b>
            <br>
            seen : ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "seen", []), "html", null, true);
            echo "
            <form action=\"";
            // line 13
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->generatePath("notification_mark_as_seen", $this->getAttribute($context["item"], "notifiableEntity", []), $this->getAttribute($context["item"], "notification", []));
            echo "\"
                  method=\"post\">
                <button type=\"submit\">Mark as seen</button>
            </form>
            <form action=\"";
            // line 17
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
        // line 23
        echo "</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MgiletNotificationBundle::notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  64 => 17,  57 => 13,  53 => 12,  48 => 10,  45 => 9,  41 => 8,  38 => 7,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Notifications :
{% if notificationList|length > 0 %}
    <form action=\"{{ mgilet_notification_generate_path('notification_mark_all_as_seen', notificationList|first.notifiableEntity) }}\" method=\"post\">
        <button type=\"submit\">Mark all as seen</button>
    </form>
{% endif %}
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
", "MgiletNotificationBundle::notifications.html.twig", "C:\\xampp\\htdocs\\SmartStart\\vendor\\mgilet\\notification-bundle/Resources/views/notifications.html.twig");
    }
}
