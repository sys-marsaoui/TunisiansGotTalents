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

/* @TGT/Events/addEvents.html.twig */
class __TwigTemplate_41cd17faa79e2e657bbc245c5ed82228c39ec9a19da400b40f687527cf017944 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@TGT/Events/addEvents.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@TGT/Events/addEvents.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@TGT/Events/addEvents.html.twig", 1);
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
    <h1>Publier un Evenement</h1><br><br>
    <div class=\"align-self-center \">

        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "form-row"]]);
        echo "
        <div class=\"form-row\">
            <div class=\"form-group col-md-6\">
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titreEvents", []), 'label', ["attr" => ["class" => "form-group col-md-6"], "label" => "Titre evenement"]);
        echo "
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titreEvents", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>

            <div class=\"form-group col-md-6\">
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptionEvents", []), 'label', ["attr" => ["class" => "form-group col-md-6"], "label" => "Description Evenement"]);
        echo "
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptionEvents", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>

            <div class=\"form-group col-md-6\">
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "themeEvents", []), 'label', ["attr" => ["class" => "form-group col-md-6"], "label" => "Theme Evenement"]);
        echo "
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "themeEvents", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>

            <div class=\"form-group col-md-6\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresseEvents", []), 'label', ["attr" => ["class" => "form-group col-md-6"], "label" => "Adresse Evenement"]);
        echo "
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresseEvents", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>

            <div class=\"form-group col-md-6\">
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateEvents", []), 'label', ["attr" => ["class" => "form-group col-md-6"], "label" => "Date Evenement"]);
        echo "
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateEvents", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>

              <div class=\"form-group col-md-6\">
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixEvents", []), 'label', ["attr" => ["class" => "form-group col-md-6"], "label" => "Prix Evenement"]);
        echo "
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixEvents", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>

            <div class=\"form-group col-md-6\">
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageEvents", []), 'label', ["attr" => ["class" => "form-group col-md-6"], "label" => "Image Evenement"]);
        echo "
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageEvents", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>

            <div class=\"form-group col-md-6\">
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", []), 'widget', ["attr" => ["class" => "btn btn-primary btn-round"]]);
        echo "

            </div>
        </div></div></div>


            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@TGT/Events/addEvents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 51,  149 => 45,  142 => 41,  138 => 40,  131 => 36,  127 => 35,  120 => 31,  116 => 30,  109 => 26,  105 => 25,  98 => 21,  94 => 20,  87 => 16,  83 => 15,  76 => 11,  72 => 10,  66 => 7,  60 => 3,  51 => 2,  29 => 1,);
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
    <h1>Publier un Evenement</h1><br><br>
    <div class=\"align-self-center \">

        {{ form_start(form, {'attr': {'class' : 'form-row'}} ) }}
        <div class=\"form-row\">
            <div class=\"form-group col-md-6\">
                {{ form_label(form.titreEvents, 'Titre evenement', {'attr': {'class' : 'form-group col-md-6'}} ) }}
                {{ form_widget(form.titreEvents, {'attr': {'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group col-md-6\">
                {{ form_label(form.descriptionEvents, 'Description Evenement', {'attr': {'class' : 'form-group col-md-6'}} ) }}
                {{ form_widget(form.descriptionEvents, {'attr': {'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group col-md-6\">
                {{ form_label(form.themeEvents, 'Theme Evenement', {'attr': {'class' : 'form-group col-md-6'}} ) }}
                {{ form_widget(form.themeEvents, {'attr': {'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group col-md-6\">
                {{ form_label(form.adresseEvents, 'Adresse Evenement', {'attr': {'class' : 'form-group col-md-6'}} ) }}
                {{ form_widget(form.adresseEvents, {'attr': {'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group col-md-6\">
                {{ form_label(form.dateEvents, 'Date Evenement', {'attr': {'class' : 'form-group col-md-6'}} ) }}
                {{ form_widget(form.dateEvents, {'attr': {'class' : 'form-control'}}) }}
            </div>

              <div class=\"form-group col-md-6\">
                {{ form_label(form.prixEvents, 'Prix Evenement', {'attr': {'class' : 'form-group col-md-6'}} ) }}
                {{ form_widget(form.prixEvents, {'attr': {'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group col-md-6\">
                {{ form_label(form.imageEvents, 'Image Evenement', {'attr': {'class' : 'form-group col-md-6'}} ) }}
                {{ form_widget(form.imageEvents, {'attr': {'class' : 'form-control'}}) }}
            </div>

            <div class=\"form-group col-md-6\">
                {{ form_widget(form.Valider, {'attr': {'class' : 'btn btn-primary btn-round'}}) }}

            </div>
        </div></div></div>


            {{ form_end(form) }}


            {% endblock %}

", "@TGT/Events/addEvents.html.twig", "C:\\wamp64\\www\\tmt\\TGT\\src\\TGTBundle\\Resources\\views\\Events\\addEvents.html.twig");
    }
}
