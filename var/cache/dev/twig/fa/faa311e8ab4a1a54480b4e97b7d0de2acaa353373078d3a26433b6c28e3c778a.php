<?php

/* @TilowebPagination/pagination.html.twig */
class __TwigTemplate_cfa0517b0395b72b18f7873fecfcb328941c27fb6f09aa37f7ed593b391bec55 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TilowebPagination/pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TilowebPagination/pagination.html.twig"));

        // line 1
        if ((($context["pages"] ?? $this->getContext($context, "pages")) > 1)) {
            // line 2
            echo "    ";
            $context["page"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "int", [0 => ($context["get"] ?? $this->getContext($context, "get")), 1 => 1], "method");
            // line 3
            echo "    <ul class=\"pagination\">
        ";
            // line 4
            if ((($context["pages"] ?? $this->getContext($context, "pages")) > 2)) {
                // line 5
                echo "            <li class=\"page-item start ";
                if ((($context["page"] ?? $this->getContext($context, "page")) == 1)) {
                    echo "disabled";
                }
                echo "\">
                <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_route"], "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_route_params"], "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "all", []), [($context["get"] ?? $this->getContext($context, "get")) => 1]))), "html", null, true);
                echo "\" class=\"page-link\">
                    <<
                </a>
            </li>
        ";
            }
            // line 11
            echo "
        <li class=\"page-item prev ";
            // line 12
            if ((($context["page"] ?? $this->getContext($context, "page")) == 1)) {
                echo "disabled";
            }
            echo "\">
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_route"], "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_route_params"], "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "all", []), [($context["get"] ?? $this->getContext($context, "get")) => (($context["page"] ?? $this->getContext($context, "page")) - 1)]))), "html", null, true);
            echo "\" class=\"page-link\" ";
            if ((($context["page"] ?? $this->getContext($context, "page")) > 1)) {
                echo "rel=\"prev\"";
            }
            echo ">
                <
            </a>
        </li>

        ";
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max((($context["page"] ?? $this->getContext($context, "page")) - 4), 1), min((($context["page"] ?? $this->getContext($context, "page")) + 4), ($context["pages"] ?? $this->getContext($context, "pages")))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 20
                echo "            <li class=\"page-item ";
                if (($context["p"] == ($context["page"] ?? $this->getContext($context, "page")))) {
                    echo "active";
                } else {
                    echo "hidden-xs";
                }
                echo "\">
                <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_route"], "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_route_params"], "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "all", []), [($context["get"] ?? $this->getContext($context, "get")) => $context["p"]]))), "html", null, true);
                echo "\" class=\"page-link\">
                    ";
                // line 22
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "
        <li class=\"page-item next ";
            // line 27
            if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["pages"] ?? $this->getContext($context, "pages")))) {
                echo "disabled";
            }
            echo "\">
            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_route"], "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_route_params"], "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "all", []), [($context["get"] ?? $this->getContext($context, "get")) => (($context["page"] ?? $this->getContext($context, "page")) + 1)]))), "html", null, true);
            echo "\" class=\"page-link\" ";
            if ((($context["page"] ?? $this->getContext($context, "page")) < ($context["pages"] ?? $this->getContext($context, "pages")))) {
                echo "rel=\"next\"";
            }
            echo ">
                >
            </a>
        </li>

        ";
            // line 33
            if ((($context["pages"] ?? $this->getContext($context, "pages")) > 2)) {
                // line 34
                echo "            <li class=\"page-item end ";
                if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["pages"] ?? $this->getContext($context, "pages")))) {
                    echo "disabled";
                }
                echo "\">
                <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_route"], "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_route_params"], "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "all", []), [($context["get"] ?? $this->getContext($context, "get")) => ($context["pages"] ?? $this->getContext($context, "pages"))]))), "html", null, true);
                echo "\" class=\"page-link\">
                    >>
                </a>
            </li>
        ";
            }
            // line 40
            echo "    </ul>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@TilowebPagination/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 40,  129 => 35,  122 => 34,  120 => 33,  108 => 28,  102 => 27,  99 => 26,  89 => 22,  85 => 21,  76 => 20,  71 => 19,  59 => 13,  53 => 12,  50 => 11,  42 => 6,  35 => 5,  33 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if pages > 1 %}
    {% set page =  app.request.query.int(get, 1) %}
    <ul class=\"pagination\">
        {% if pages > 2 %}
            <li class=\"page-item start {% if page == 1 %}disabled{% endif %}\">
                <a href=\"{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge(app.request.query.all|merge({(get): 1}))) }}\" class=\"page-link\">
                    <<
                </a>
            </li>
        {% endif %}

        <li class=\"page-item prev {% if page == 1 %}disabled{% endif %}\">
            <a href=\"{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge(app.request.query.all|merge({(get): page - 1}))) }}\" class=\"page-link\" {% if page > 1 %}rel=\"prev\"{% endif %}>
                <
            </a>
        </li>

        {# Affichage de toutes les pages entre p-4 et p+4 sauf si < 1 ou > nbPages #}
        {% for p in range(max(page - 4, 1), min(page + 4, pages)) %}
            <li class=\"page-item {% if p == page %}active{% else %}hidden-xs{% endif %}\">
                <a href=\"{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge(app.request.query.all|merge({(get): p}))) }}\" class=\"page-link\">
                    {{ p }}
                </a>
            </li>
        {% endfor %}

        <li class=\"page-item next {% if page == pages %}disabled{% endif %}\">
            <a href=\"{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge(app.request.query.all|merge({(get): page +1 }))) }}\" class=\"page-link\" {% if page < pages %}rel=\"next\"{% endif %}>
                >
            </a>
        </li>

        {% if pages > 2 %}
            <li class=\"page-item end {% if page == pages %}disabled{% endif %}\">
                <a href=\"{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge(app.request.query.all|merge({(get): pages}))) }}\" class=\"page-link\">
                    >>
                </a>
            </li>
        {% endif %}
    </ul>
{% endif %}
", "@TilowebPagination/pagination.html.twig", "C:\\wamp64\\www\\SmartStart\\vendor\\tiloweb\\pagination-bundle\\Tiloweb\\PaginationBundle\\Resources\\views\\pagination.html.twig");
    }
}
