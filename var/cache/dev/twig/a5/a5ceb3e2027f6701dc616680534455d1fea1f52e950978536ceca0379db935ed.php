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

/* :organisations:show.html.twig */
class __TwigTemplate_42ae2ef9db8d98a5c219143a090abde3ce60ca4d4f43b3444bd339247f98f943 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":organisations:show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":organisations:show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", ":organisations:show.html.twig", 1);
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
        echo "    <h1>Organisation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["organisation"]) ? $context["organisation"] : $this->getContext($context, "organisation")), "id", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomorganisation</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["organisation"]) ? $context["organisation"] : $this->getContext($context, "organisation")), "nomOrganisation", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresseorganisation</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["organisation"]) ? $context["organisation"] : $this->getContext($context, "organisation")), "adresseOrganisation", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telorganisation</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["organisation"]) ? $context["organisation"] : $this->getContext($context, "organisation")), "telOrganisation", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Emailorganisation</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["organisation"]) ? $context["organisation"] : $this->getContext($context, "organisation")), "emailOrganisation", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Loginorganisation</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["organisation"]) ? $context["organisation"] : $this->getContext($context, "organisation")), "loginOrganisation", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Passwordorganisation</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["organisation"]) ? $context["organisation"] : $this->getContext($context, "organisation")), "passwordOrganisation", []), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organisations_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organisations_edit", ["id" => $this->getAttribute((isset($context["organisation"]) ? $context["organisation"] : $this->getContext($context, "organisation")), "id", [])]), "html", null, true);
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
        return ":organisations:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 49,  132 => 47,  126 => 44,  120 => 41,  110 => 34,  103 => 30,  96 => 26,  89 => 22,  82 => 18,  75 => 14,  68 => 10,  60 => 4,  51 => 3,  29 => 1,);
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
    <h1>Organisation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ organisation.id }}</td>
            </tr>
            <tr>
                <th>Nomorganisation</th>
                <td>{{ organisation.nomOrganisation }}</td>
            </tr>
            <tr>
                <th>Adresseorganisation</th>
                <td>{{ organisation.adresseOrganisation }}</td>
            </tr>
            <tr>
                <th>Telorganisation</th>
                <td>{{ organisation.telOrganisation }}</td>
            </tr>
            <tr>
                <th>Emailorganisation</th>
                <td>{{ organisation.emailOrganisation }}</td>
            </tr>
            <tr>
                <th>Loginorganisation</th>
                <td>{{ organisation.loginOrganisation }}</td>
            </tr>
            <tr>
                <th>Passwordorganisation</th>
                <td>{{ organisation.passwordOrganisation }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('organisations_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('organisations_edit', { 'id': organisation.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":organisations:show.html.twig", "C:\\wamp64\\www\\tmt\\TGT\\app/Resources\\views/organisations/show.html.twig");
    }
}
