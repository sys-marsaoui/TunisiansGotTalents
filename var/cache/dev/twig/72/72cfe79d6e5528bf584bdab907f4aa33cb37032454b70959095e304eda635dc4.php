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

/* @TGT/Organisations/indexOrganisations.html.twig */
class __TwigTemplate_404e7eb7a1f45f67c020529c81f1f0b71bd08fa491a64da6e169236b3c547175 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@TGT/Organisations/indexOrganisations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@TGT/Organisations/indexOrganisations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@TGT/Organisations/indexOrganisations.html.twig", 1);
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
        echo "    <h1>Organisations list</h1>

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Nomorganisation</th>
            <th>Adresseorganisation</th>
            <th>Telorganisation</th>
            <th>Emailorganisation</th>
            <th>Loginorganisation</th>
            <th>Passwordorganisation</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["organisations"]) ? $context["organisations"] : $this->getContext($context, "organisations")));
        foreach ($context['_seq'] as $context["_key"] => $context["organisation"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Organisations_show", ["id" => $this->getAttribute($context["organisation"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["organisation"], "id", []), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["organisation"], "nomOrganisation", []), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["organisation"], "adresseOrganisation", []), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["organisation"], "telOrganisation", []), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["organisation"], "emailOrganisation", []), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["organisation"], "loginOrganisation", []), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["organisation"], "passwordOrganisation", []), "html", null, true);
            echo "</td>
                <td><button  style=\"    background-color: #ff3636;\" class=\"btn btn-primary btn-round btn-block btn-lg\"><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Organisations_delete", ["id" => $this->getAttribute($context["organisation"], "id", [])]), "html", null, true);
            echo "\"> DELETE</a></button> </td>
                <td><button class=\"btn btn-primary btn-round btn-block btn-lg\"> <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Organisations_edit", ["id" => $this->getAttribute($context["organisation"], "id", [])]), "html", null, true);
            echo "\">edit</a></button> </td>



            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Organisations_show");
        echo "\">Create a new organisation</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@TGT/Organisations/indexOrganisations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 41,  131 => 36,  119 => 30,  115 => 29,  111 => 28,  107 => 27,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  85 => 22,  82 => 21,  78 => 20,  60 => 4,  51 => 3,  29 => 1,);
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
    <h1>Organisations list</h1>

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Nomorganisation</th>
            <th>Adresseorganisation</th>
            <th>Telorganisation</th>
            <th>Emailorganisation</th>
            <th>Loginorganisation</th>
            <th>Passwordorganisation</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for organisation in organisations %}
            <tr>
                <td><a href=\"{{ path('Organisations_show', { 'id': organisation.id }) }}\">{{ organisation.id }}</a></td>
                <td>{{ organisation.nomOrganisation }}</td>
                <td>{{ organisation.adresseOrganisation }}</td>
                <td>{{ organisation.telOrganisation }}</td>
                <td>{{ organisation.emailOrganisation }}</td>
                <td>{{ organisation.loginOrganisation }}</td>
                <td>{{ organisation.passwordOrganisation }}</td>
                <td><button  style=\"    background-color: #ff3636;\" class=\"btn btn-primary btn-round btn-block btn-lg\"><a href=\"{{ path('Organisations_delete', { 'id': organisation.id }) }}\"> DELETE</a></button> </td>
                <td><button class=\"btn btn-primary btn-round btn-block btn-lg\"> <a href=\"{{ path('Organisations_edit', { 'id': organisation.id }) }}\">edit</a></button> </td>



            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('Organisations_show') }}\">Create a new organisation</a>
        </li>
    </ul>
{% endblock %}
", "@TGT/Organisations/indexOrganisations.html.twig", "C:\\wamp64\\www\\tmt\\TGT\\src\\TGTBundle\\Resources\\views\\Organisations\\indexOrganisations.html.twig");
    }
}
