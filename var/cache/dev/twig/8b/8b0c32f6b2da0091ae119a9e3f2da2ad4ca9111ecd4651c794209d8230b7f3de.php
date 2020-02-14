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

/* EasyAdminBundle:default:field_percent.html.twig */
class __TwigTemplate_e8ac2656838317dcacdead4f2cbb6b62a3585cdcccd59549b60b11774ad6bc4e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_percent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_percent.html.twig"));

        // line 1
        $context["type"] = (($this->getAttribute($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : null), "type_options", [], "any", false, true), "type", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : null), "type_options", [], "any", false, true), "type", []), "fractional")) : ("fractional"));
        // line 2
        $context["scale"] = (($this->getAttribute($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : null), "type_options", [], "any", false, true), "scale", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : null), "type_options", [], "any", false, true), "scale", []), 0)) : (0));
        // line 3
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "fractional")) ? (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100)) : ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))), (isset($context["scale"]) ? $context["scale"] : $this->getContext($context, "scale"))), "html", null, true);
        echo "%
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set type = field_options.type_options.type|default('fractional') %}
{% set scale = field_options.type_options.scale|default(0) %}
{{ (type == 'fractional' ? value * 100 : value)|number_format(scale) }}%
", "EasyAdminBundle:default:field_percent.html.twig", "C:\\wamp64\\www\\tmt\\TGT\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/views/default/field_percent.html.twig");
    }
}
