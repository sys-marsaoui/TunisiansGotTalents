<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* TGTBundle:Events:indexEvents.html.twig */
class __TwigTemplate_a24dda580dda7f6e9d58c37441505a2d2071ace7edd03927165e11fb13050821 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "TGTBundle:Events:indexEvents.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "TGTBundle:Events:indexEvents.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "TGTBundle:Events:indexEvents.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Events list</h1>

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Titreevents</th>
            <th>Descriptionevents</th>
            <th>Themeevents</th>
            <th>Adresseevents</th>
            <th>Dateevents</th>
            <th>Prixevents</th>
            <th>Imageevents</th>
            <th>Actions</th>
        </tr>
        </thead>
       ";
        // line 39
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 40
            echo "    <div class=\"card\" style=\"width: 20rem;\">
        <img class=\"card-img-top\" width=\"320\" height=\"240\" src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["event"], "ImageEvents", []))), "html", null, true);
            echo "\" alt=\"Card image cap\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "titreEvents", []), "html", null, true);
            echo "</h4>
            <p class=\"card-text\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "descriptionEvents", []), "html", null, true);
            echo "</p>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "themeEvents", []), "html", null, true);
            echo "</li>
                <li class=\"list-group-item\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "adresseEvents", []), "html", null, true);
            echo "</li>
                <li class=\"list-group-item\">";
            // line 48
            if ($this->getAttribute($context["event"], "dateEvents", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateEvents", []), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</li>
                <li class=\"list-group-item\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "prixEvents", []), "html", null, true);
            echo "</li>
            </ul>
            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Events_delete", ["id" => $this->getAttribute($context["event"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-primary\">delete</a>
            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Events_edit", ["id" => $this->getAttribute($context["event"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-primary\">edit</a>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
    <ul>
        <li>
            <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Events_show");
        echo "\">Create a new event</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "TGTBundle:Events:indexEvents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 59,  133 => 56,  123 => 52,  119 => 51,  114 => 49,  108 => 48,  104 => 47,  100 => 46,  95 => 44,  91 => 43,  86 => 41,  83 => 40,  78 => 39,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
    <h1>Events list</h1>

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Titreevents</th>
            <th>Descriptionevents</th>
            <th>Themeevents</th>
            <th>Adresseevents</th>
            <th>Dateevents</th>
            <th>Prixevents</th>
            <th>Imageevents</th>
            <th>Actions</th>
        </tr>
        </thead>
       {# <tbody>
        {% for event in events %}
            <tr>
                <td><a href=\"{{ path('Events_show', { 'id': event.id }) }}\">{{ event.id }}</a></td>
                <td>{{ event.titreEvents }}</td>
                <td>{{ event.descriptionEvents }}</td>
                <td>{{ event.themeEvents }}</td>
                <td>{{ event.adresseEvents }}</td>
                <td>{% if event.dateEvents %}{{ event.dateEvents|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ event.prixEvents }}</td>
                <td>{{ event.imageEvents }}</td>
                <td><button  style=\"    background-color: #ff3636;\" class=\"btn btn-primary btn-round btn-block btn-lg\"><a href=\"{{ path('Events_delete', { 'id': event.id }) }}\"> DELETE</a></button> </td>
                <td><button class=\"btn btn-primary btn-round btn-block btn-lg\"> <a href=\"{{ path('Events_edit', { 'id': event.id }) }}\">edit</a></button> </td>


            </tr>
        {% endfor %}
        </tbody>
    </table>#}
    {% for event in events %}
    <div class=\"card\" style=\"width: 20rem;\">
        <img class=\"card-img-top\" width=\"320\" height=\"240\" src=\"{{ asset('uploads/images/' ~ event.ImageEvents) }}\" alt=\"Card image cap\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">{{ event.titreEvents }}</h4>
            <p class=\"card-text\">{{ event.descriptionEvents }}</p>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">{{ event.themeEvents }}</li>
                <li class=\"list-group-item\">{{ event.adresseEvents }}</li>
                <li class=\"list-group-item\">{% if event.dateEvents %}{{ event.dateEvents|date('Y-m-d H:i:s') }}{% endif %}</li>
                <li class=\"list-group-item\">{{ event.prixEvents }}</li>
            </ul>
            <a href=\"{{ path('Events_delete', { 'id': event.id }) }}\" class=\"btn btn-primary\">delete</a>
            <a href=\"{{ path('Events_edit', { 'id': event.id }) }}\" class=\"btn btn-primary\">edit</a>
        </div>
    </div>
    {% endfor %}

    <ul>
        <li>
            <a href=\"{{ path('Events_show') }}\">Create a new event</a>
        </li>
    </ul>
{% endblock %}
", "TGTBundle:Events:indexEvents.html.twig", "C:\\wamp64\\www\\tmt\\TGT\\src\\TGTBundle/Resources/views/Events/indexEvents.html.twig");
    }
}
