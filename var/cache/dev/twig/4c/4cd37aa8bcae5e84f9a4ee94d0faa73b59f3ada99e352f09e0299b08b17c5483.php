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

/* @TGT/Organisations/editOrganisations.html.twig */
class __TwigTemplate_5611ae680582d43f435c75a30865be88686c73e27c00c2ba7554e24843ea0c69 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@TGT/Organisations/editOrganisations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@TGT/Organisations/editOrganisations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@TGT/Organisations/editOrganisations.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div style=\"text-align: center;\">
    <h1>Modifier Organisation</h1><br><br>
    <div class=\"align-self-center \">

        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', ["attr" => ["class" => "form-row"]]);
        echo "
        <div class=\"form-row\">
            <div class=\"form-group col-md-6\">
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomOrganisation", []), 'label', ["attr" => ["class" => "form-group col-md-6"], "label" => "Nom Organisation"]);
        echo "
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomOrganisation", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>

            <div class=\"form-group col-md-6\">
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresseOrganisation", []), 'label', ["attr" => ["class" => "form-group col-md-6"], "label" => "Adresse"]);
        echo "
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresseOrganisation", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>

            <div class=\"form-group col-md-6\">
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telOrganisation", []), 'label', ["attr" => ["class" => "form-group col-md-6"], "label" => "Numero de Telephone"]);
        echo "
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telOrganisation", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>

            <div class=\"form-group col-md-6\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "emailOrganisation", []), 'label', ["attr" => ["class" => "form-group col-md-6"], "label" => "Adresse Mail"]);
        echo "
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "emailOrganisation", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>

            <div class=\"form-group col-md-6\">
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "loginOrganisation", []), 'label', ["attr" => ["class" => "form-group col-md-6"], "label" => "Login"]);
        echo "
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "loginOrganisation", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>

            <div class=\"form-group col-md-6\">
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "passwordOrganisation", []), 'label', ["attr" => ["class" => "form-group col-md-6"], "label" => "Mot de passe"]);
        echo "
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "passwordOrganisation", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>


    <div class=\"form-group col-md-6\">
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Valider", []), 'widget', ["attr" => ["class" => "btn btn-primary btn-round"]]);
        echo "

    </div>
        </div>
    </div>
</div>
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "


            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@TGT/Organisations/editOrganisations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 47,  139 => 41,  131 => 36,  127 => 35,  120 => 31,  116 => 30,  109 => 26,  105 => 25,  98 => 21,  94 => 20,  87 => 16,  83 => 15,  76 => 11,  72 => 10,  66 => 7,  60 => 3,  51 => 2,  29 => 1,);
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
<div style=\"text-align: center;\">
    <h1>Modifier Organisation</h1><br><br>
    <div class=\"align-self-center \">

        {{ form_start(edit_form, {'attr': {'class' : 'form-row'}} ) }}
        <div class=\"form-row\">
            <div class=\"form-group col-md-6\">
                {{ form_label(edit_form.nomOrganisation, 'Nom Organisation', {'attr': {'class' : 'form-group col-md-6'}} ) }}
                {{ form_widget(edit_form.nomOrganisation, {'attr': {'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group col-md-6\">
                {{ form_label(edit_form.adresseOrganisation, 'Adresse', {'attr': {'class' : 'form-group col-md-6'}} ) }}
                {{ form_widget(edit_form.adresseOrganisation, {'attr': {'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group col-md-6\">
                {{ form_label(edit_form.telOrganisation, 'Numero de Telephone', {'attr': {'class' : 'form-group col-md-6'}} ) }}
                {{ form_widget(edit_form.telOrganisation, {'attr': {'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group col-md-6\">
                {{ form_label(edit_form.emailOrganisation, 'Adresse Mail', {'attr': {'class' : 'form-group col-md-6'}} ) }}
                {{ form_widget(edit_form.emailOrganisation, {'attr': {'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group col-md-6\">
                {{ form_label(edit_form.loginOrganisation, 'Login', {'attr': {'class' : 'form-group col-md-6'}} ) }}
                {{ form_widget(edit_form.loginOrganisation, {'attr': {'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group col-md-6\">
                {{ form_label(edit_form.passwordOrganisation, 'Mot de passe', {'attr': {'class' : 'form-group col-md-6'}} ) }}
                {{ form_widget(edit_form.passwordOrganisation, {'attr': {'class' : 'form-control'}}) }}
            </div>


    <div class=\"form-group col-md-6\">
        {{ form_widget(edit_form.Valider, {'attr': {'class' : 'btn btn-primary btn-round'}}) }}

    </div>
        </div>
    </div>
</div>
            {{ form_end(edit_form) }}


            {% endblock %}

", "@TGT/Organisations/editOrganisations.html.twig", "C:\\wamp64\\www\\tmt\\TGT\\src\\TGTBundle\\Resources\\views\\Organisations\\editOrganisations.html.twig");
    }
}