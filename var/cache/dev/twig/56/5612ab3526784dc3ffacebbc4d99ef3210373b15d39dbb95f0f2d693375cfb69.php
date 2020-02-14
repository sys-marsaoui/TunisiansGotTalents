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

/* @TGT/Events/editEvents.html.twig */
class __TwigTemplate_fb7ac7ad6db31b58d87a494c2f438bdb44802f37126b94078f2d33873ff7e7db extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@TGT/Events/editEvents.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@TGT/Events/editEvents.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@TGT/Events/editEvents.html.twig", 1);
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
        echo "    <div style=\"text-align: center;\">
        <h1>Modifier Casting</h1><br><br>
        <div class=\"align-self-center \">

            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', ["attr" => ["class" => "form-row"]]);
        echo "
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titreEvents", []), 'label', ["attr" => ["class" => "form-group col-md-6"], "label" => "Titre Evenement"]);
        echo "
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titreEvents", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                <div class=\"form-group col-md-6\">
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descriptionEvents", []), 'label', ["attr" => ["class" => "form-group col-md-6"], "label" => "Description Evenement"]);
        echo "
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descriptionEvents", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                <div class=\"form-group col-md-6\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "themeEvents", []), 'label', ["attr" => ["class" => "form-group col-md-6"], "label" => "Theme Evenement"]);
        echo "
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "themeEvents", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                <div class=\"form-group col-md-6\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresseEvents", []), 'label', ["attr" => ["class" => "form-group col-md-6"], "label" => "Adresse"]);
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresseEvents", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                <div class=\"form-group col-md-6\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateEvents", []), 'label', ["attr" => ["class" => "form-group col-md-6"], "label" => "Date et heure Evenement"]);
        echo "
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateEvents", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                <div class=\"form-group col-md-6\">
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prixEvents", []), 'label', ["attr" => ["class" => "form-group col-md-6"], "label" => "Prix"]);
        echo "
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prixEvents", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                <div class=\"form-group col-md-6\">
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "imageEvents", []), 'label', ["attr" => ["class" => "form-group col-md-6"], "label" => "Image"]);
        echo "
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "imageEvents", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>



                <div class=\"form-group col-md-6\">
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Valider", []), 'widget', ["attr" => ["class" => "btn btn-primary btn-round"]]);
        echo "

                </div>
            </div>
        </div>
    </div>
    ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@TGT/Events/editEvents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 53,  151 => 47,  142 => 41,  138 => 40,  131 => 36,  127 => 35,  120 => 31,  116 => 30,  109 => 26,  105 => 25,  98 => 21,  94 => 20,  87 => 16,  83 => 15,  76 => 11,  72 => 10,  66 => 7,  60 => 3,  51 => 2,  29 => 1,);
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
        <h1>Modifier Casting</h1><br><br>
        <div class=\"align-self-center \">

            {{ form_start(edit_form, {'attr': {'class' : 'form-row'}} ) }}
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    {{ form_label(edit_form.titreEvents, 'Titre Evenement', {'attr': {'class' : 'form-group col-md-6'}} ) }}
                    {{ form_widget(edit_form.titreEvents, {'attr': {'class' : 'form-control'}}) }}
                </div>

                <div class=\"form-group col-md-6\">
                    {{ form_label(edit_form.descriptionEvents, 'Description Evenement', {'attr': {'class' : 'form-group col-md-6'}} ) }}
                    {{ form_widget(edit_form.descriptionEvents, {'attr': {'class' : 'form-control'}}) }}
                </div>

                <div class=\"form-group col-md-6\">
                    {{ form_label(edit_form.themeEvents, 'Theme Evenement', {'attr': {'class' : 'form-group col-md-6'}} ) }}
                    {{ form_widget(edit_form.themeEvents, {'attr': {'class' : 'form-control'}}) }}
                </div>

                <div class=\"form-group col-md-6\">
                    {{ form_label(edit_form.adresseEvents, 'Adresse', {'attr': {'class' : 'form-group col-md-6'}} ) }}
                    {{ form_widget(edit_form.adresseEvents, {'attr': {'class' : 'form-control'}}) }}
                </div>

                <div class=\"form-group col-md-6\">
                    {{ form_label(edit_form.dateEvents, 'Date et heure Evenement', {'attr': {'class' : 'form-group col-md-6'}} ) }}
                    {{ form_widget(edit_form.dateEvents, {'attr': {'class' : 'form-control'}}) }}
                </div>

                <div class=\"form-group col-md-6\">
                    {{ form_label(edit_form.prixEvents, 'Prix', {'attr': {'class' : 'form-group col-md-6'}} ) }}
                    {{ form_widget(edit_form.prixEvents, {'attr': {'class' : 'form-control'}}) }}
                </div>

                <div class=\"form-group col-md-6\">
                    {{ form_label(edit_form.imageEvents, 'Image', {'attr': {'class' : 'form-group col-md-6'}} ) }}
                    {{ form_widget(edit_form.imageEvents, {'attr': {'class' : 'form-control'}}) }}
                </div>



                <div class=\"form-group col-md-6\">
                    {{ form_widget(edit_form.Valider, {'attr': {'class' : 'btn btn-primary btn-round'}}) }}

                </div>
            </div>
        </div>
    </div>
    {{ form_end(edit_form) }}


{% endblock %}

", "@TGT/Events/editEvents.html.twig", "C:\\wamp64\\www\\tmt\\TGT\\src\\TGTBundle\\Resources\\views\\Events\\editEvents.html.twig");
    }
}
