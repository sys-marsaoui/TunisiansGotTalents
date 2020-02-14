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

/* TGTBundle:Casting:showCasting.html.twig */
class __TwigTemplate_980fa209e87354c8e007ed24f88e9b17535580ab82c33a1c86c6c45532e2da38 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "TGTBundle:Casting:showCasting.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "TGTBundle:Casting:showCasting.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "TGTBundle:Casting:showCasting.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Casting</h1>

    <table>
        <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["casting"]) ? $context["casting"] : $this->getContext($context, "casting")), "id", []), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Titrecasting</th>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["casting"]) ? $context["casting"] : $this->getContext($context, "casting")), "titreCasting", []), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Descriptioncasting</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["casting"]) ? $context["casting"] : $this->getContext($context, "casting")), "descriptionCasting", []), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Datecasting</th>
            <td>";
        // line 22
        if ($this->getAttribute((isset($context["casting"]) ? $context["casting"] : $this->getContext($context, "casting")), "dateCasting", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["casting"]) ? $context["casting"] : $this->getContext($context, "casting")), "dateCasting", []), "Y-m-d"), "html", null, true);
        }
        echo "</td>
        </tr>
        <tr>
            <th>Datelp</th>
            <td>";
        // line 26
        if ($this->getAttribute((isset($context["casting"]) ? $context["casting"] : $this->getContext($context, "casting")), "dateLP", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["casting"]) ? $context["casting"] : $this->getContext($context, "casting")), "dateLP", []), "Y-m-d"), "html", null, true);
        }
        echo "</td>
        </tr>
        <tr>
            <th>Adressecasting</th>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["casting"]) ? $context["casting"] : $this->getContext($context, "casting")), "adresseCasting", []), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Imagecasting</th>
            <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["casting"]) ? $context["casting"] : $this->getContext($context, "casting")), "imageCasting", []), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("casting_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("casting_edit", ["id" => $this->getAttribute((isset($context["casting"]) ? $context["casting"] : $this->getContext($context, "casting")), "id", [])]), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "TGTBundle:Casting:showCasting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 49,  136 => 47,  130 => 44,  124 => 41,  114 => 34,  107 => 30,  98 => 26,  89 => 22,  82 => 18,  75 => 14,  68 => 10,  60 => 4,  51 => 3,  29 => 1,);
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

{% block body %}
    <h1>Casting</h1>

    <table>
        <tbody>
        <tr>
            <th>Id</th>
            <td>{{ casting.id }}</td>
        </tr>
        <tr>
            <th>Titrecasting</th>
            <td>{{ casting.titreCasting }}</td>
        </tr>
        <tr>
            <th>Descriptioncasting</th>
            <td>{{ casting.descriptionCasting }}</td>
        </tr>
        <tr>
            <th>Datecasting</th>
            <td>{% if casting.dateCasting %}{{ casting.dateCasting|date('Y-m-d') }}{% endif %}</td>
        </tr>
        <tr>
            <th>Datelp</th>
            <td>{% if casting.dateLP %}{{ casting.dateLP|date('Y-m-d') }}{% endif %}</td>
        </tr>
        <tr>
            <th>Adressecasting</th>
            <td>{{ casting.adresseCasting }}</td>
        </tr>
        <tr>
            <th>Imagecasting</th>
            <td>{{ casting.imageCasting }}</td>
        </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('casting_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('casting_edit', { 'id': casting.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "TGTBundle:Casting:showCasting.html.twig", "C:\\wamp64\\www\\tmt\\TGT\\src\\TGTBundle/Resources/views/Casting/showCasting.html.twig");
    }
}
