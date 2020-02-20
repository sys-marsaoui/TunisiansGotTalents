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

/* @TGT/Entretien/indexEntretien.html.twig */
class __TwigTemplate_878d8dfb7ce0b56b6b06056a667aea1481983b886ca19bc987d2aca7c984580b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'name' => [$this, 'block_name'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "profile.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@TGT/Entretien/indexEntretien.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@TGT/Entretien/indexEntretien.html.twig"));

        $this->parent = $this->loadTemplate("profile.html.twig", "@TGT/Entretien/indexEntretien.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_name($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name"));

        echo "Entretiens list";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <div class=\"data-table-area mg-b-15\">
     <div class=\"container-fluid\">
      <div class=\"row\">
       <div class=\"col-lg-12\">
        <div class=\"sparkline13-list shadow-reset\">
         <div class=\"sparkline13-hd\">
           <div class=\"main-sparkline13-hd\">
            <div class=\"sparkline13-outline-icon\">
                <span class=\"sparkline13-collapse-link\"><i class=\"fa fa-chevron-up\"></i></span>
                <span><i class=\"fa fa-wrench\"></i></span>
                <span class=\"sparkline13-collapse-close\"><i class=\"fa fa-times\"></i></span>
            </div>
           </div>
       </div>
    <div class=\"sparkline13-graph\">
    <div class=\"datatable-dashv1-list custom-datatable-overright\">
        <table  id=\"table\" data-toggle=\"table\" data-pagination=\"true\" data-search=\"true\" data-show-columns=\"true\" data-show-pagination-switch=\"true\" data-show-refresh=\"true\" data-key-events=\"true\" data-show-toggle=\"true\" data-resizable=\"true\" data-cookie=\"true\" data-cookie-id-table=\"saveId\" data-show-export=\"true\" data-click-to-select=\"true\" data-toolbar=\"#toolbar\">
        <thead>
        <tr>
            <th data-field=\"id\" data-editable=\"true\">Id</th>
            <th data-field=\"Dateent\" data-editable=\"true\">Dateent</th>
            <th data-field=\"Statutent\" data-editable=\"true\">Statutent</th>
            <th data-field=\"NNoteent\" data-editable=\"true\">Noteent</th>
            <th data-field=\"Actions\" data-editable=\"true\" >Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entretiens"]) ? $context["entretiens"] : $this->getContext($context, "entretiens")));
        foreach ($context['_seq'] as $context["_key"] => $context["entretien"]) {
            // line 35
            echo "            <tr>
                <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entretien_show", ["id" => $this->getAttribute($context["entretien"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entretien"], "id", []), "html", null, true);
            echo "</a></td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entretien"], "dateEnt", []), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["entretien"], "statutEnt", []), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["entretien"], "noteEnt", []), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entretien_delete", ["id" => $this->getAttribute($context["entretien"], "id", [])]), "html", null, true);
            echo "\">suprimmer</a><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entretien_edit", ["id" => $this->getAttribute($context["entretien"], "id", [])]), "html", null, true);
            echo "\">editer</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entretien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>
          </div>
    </div>
        </div>
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
        return "@TGT/Entretien/indexEntretien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 43,  133 => 40,  129 => 39,  125 => 38,  121 => 37,  115 => 36,  112 => 35,  108 => 34,  79 => 7,  70 => 6,  52 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'profile.html.twig' %}


    {% block name %}Entretiens list{% endblock %}

{% block content %}
    <div class=\"data-table-area mg-b-15\">
     <div class=\"container-fluid\">
      <div class=\"row\">
       <div class=\"col-lg-12\">
        <div class=\"sparkline13-list shadow-reset\">
         <div class=\"sparkline13-hd\">
           <div class=\"main-sparkline13-hd\">
            <div class=\"sparkline13-outline-icon\">
                <span class=\"sparkline13-collapse-link\"><i class=\"fa fa-chevron-up\"></i></span>
                <span><i class=\"fa fa-wrench\"></i></span>
                <span class=\"sparkline13-collapse-close\"><i class=\"fa fa-times\"></i></span>
            </div>
           </div>
       </div>
    <div class=\"sparkline13-graph\">
    <div class=\"datatable-dashv1-list custom-datatable-overright\">
        <table  id=\"table\" data-toggle=\"table\" data-pagination=\"true\" data-search=\"true\" data-show-columns=\"true\" data-show-pagination-switch=\"true\" data-show-refresh=\"true\" data-key-events=\"true\" data-show-toggle=\"true\" data-resizable=\"true\" data-cookie=\"true\" data-cookie-id-table=\"saveId\" data-show-export=\"true\" data-click-to-select=\"true\" data-toolbar=\"#toolbar\">
        <thead>
        <tr>
            <th data-field=\"id\" data-editable=\"true\">Id</th>
            <th data-field=\"Dateent\" data-editable=\"true\">Dateent</th>
            <th data-field=\"Statutent\" data-editable=\"true\">Statutent</th>
            <th data-field=\"NNoteent\" data-editable=\"true\">Noteent</th>
            <th data-field=\"Actions\" data-editable=\"true\" >Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for entretien in entretiens %}
            <tr>
                <td><a href=\"{{ path('entretien_show', { 'id': entretien.id }) }}\">{{ entretien.id }}</a></td>
                <td>{{ entretien.dateEnt|date('Y-m-d H:i:s') }}</td>
                <td>{{ entretien.statutEnt }}</td>
                <td>{{ entretien.noteEnt }}</td>
                <td><a href=\"{{ path('entretien_delete', { 'id':entretien.id }) }}\">suprimmer</a><a href=\"{{ path('entretien_edit', { 'id': entretien.id }) }}\">editer</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
          </div>
    </div>
        </div>
       </div>
      </div>
     </div>
    </div>

{% endblock %}", "@TGT/Entretien/indexEntretien.html.twig", "C:\\wamp64\\www\\2020\\TGT\\src\\TGTBundle\\Resources\\views\\Entretien\\indexEntretien.html.twig");
    }
}
