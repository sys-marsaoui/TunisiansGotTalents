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

/* TGTBundle:Casting:indexCasting.html.twig */
class __TwigTemplate_b600f10ae0f034f9d573f95034afe215e1e92b59360c4e64a9e58972a5b75c58 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "TGTBundle:Casting:indexCasting.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "TGTBundle:Casting:indexCasting.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "TGTBundle:Casting:indexCasting.html.twig", 1);
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
        echo "    <h1>Castings list</h1>

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Titrecasting</th>
            <th>Descriptioncasting</th>
            <th>Datecasting</th>
            <th>Datelp</th>
            <th>Adressecasting</th>
            <th>Imagecasting</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["castings"]) ? $context["castings"] : $this->getContext($context, "castings")));
        foreach ($context['_seq'] as $context["_key"] => $context["casting"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Casting_show", ["id" => $this->getAttribute($context["casting"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["casting"], "id", []), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["casting"], "titreCasting", []), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["casting"], "descriptionCasting", []), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["casting"], "dateCasting", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["casting"], "dateCasting", []), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["casting"], "dateLP", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["casting"], "dateLP", []), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["casting"], "adresseCasting", []), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["casting"], "imageCasting", []), "html", null, true);
            echo "</td>
                <td><button  style=\"    background-color: #ff3636;\" class=\"btn btn-primary btn-round btn-block btn-lg\"><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Casting_delete", ["id" => $this->getAttribute($context["casting"], "id", [])]), "html", null, true);
            echo "\"> DELETE</a></button> </td>
                <td><button class=\"btn btn-primary btn-round btn-block btn-lg\"> <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Casting_edit", ["id" => $this->getAttribute($context["casting"], "id", [])]), "html", null, true);
            echo "\">edit</a></button> </td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['casting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Casting_show");
        echo "\">Create a new casting</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "TGTBundle:Casting:indexCasting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 39,  133 => 34,  123 => 30,  119 => 29,  115 => 28,  111 => 27,  105 => 26,  99 => 25,  95 => 24,  91 => 23,  85 => 22,  82 => 21,  78 => 20,  60 => 4,  51 => 3,  29 => 1,);
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
    <h1>Castings list</h1>

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Titrecasting</th>
            <th>Descriptioncasting</th>
            <th>Datecasting</th>
            <th>Datelp</th>
            <th>Adressecasting</th>
            <th>Imagecasting</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for casting in castings %}
            <tr>
                <td><a href=\"{{ path('Casting_show', { 'id': casting.id }) }}\">{{ casting.id }}</a></td>
                <td>{{ casting.titreCasting }}</td>
                <td>{{ casting.descriptionCasting }}</td>
                <td>{% if casting.dateCasting %}{{ casting.dateCasting|date('Y-m-d') }}{% endif %}</td>
                <td>{% if casting.dateLP %}{{ casting.dateLP|date('Y-m-d') }}{% endif %}</td>
                <td>{{ casting.adresseCasting }}</td>
                <td>{{ casting.imageCasting }}</td>
                <td><button  style=\"    background-color: #ff3636;\" class=\"btn btn-primary btn-round btn-block btn-lg\"><a href=\"{{ path('Casting_delete', { 'id':casting.id }) }}\"> DELETE</a></button> </td>
                <td><button class=\"btn btn-primary btn-round btn-block btn-lg\"> <a href=\"{{ path('Casting_edit', { 'id': casting.id }) }}\">edit</a></button> </td>

            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('Casting_show') }}\">Create a new casting</a>
        </li>
    </ul>
{% endblock %}
", "TGTBundle:Casting:indexCasting.html.twig", "C:\\wamp64\\www\\tmt\\TGT\\src\\TGTBundle/Resources/views/Casting/indexCasting.html.twig");
    }
}
