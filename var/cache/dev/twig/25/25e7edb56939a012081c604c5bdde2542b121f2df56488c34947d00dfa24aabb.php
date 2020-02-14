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

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_f86209de6bb87f879de243e52c7d8df86e73217644125a8b2a13a3edb91f5268 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", []), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", []), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<div class=\"container\">
    <div class=\"col-md-4 ml-auto mr-auto\">
        <div class=\"card card-login card-plain\">
            <form class=\"form\" action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                ";
        // line 11
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 12
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                ";
        }
        // line 14
        echo "                <div class=\"card-header text-center\">
                    <div class=\"logo-container\">
                        <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/now-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"input-group no-border input-lg\">
                        <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                      <i class=\"now-ui-icons users_circle-08\"></i>
                    </span>
                        </div>

                        <input type=\"text\" class=\"form-control\"  id=\"username\" name=\"_username\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </div>
                    <div class=\"input-group no-border input-lg\">
                        <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                      <i class=\"now-ui-icons text_caps-small\"></i>
                    </span>
                        </div>
                        <input type=\"password\" class=\"form-control\"  id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" placeholder=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "\"  />
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                            <label for=\"remember_me\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <span class=\"form-check-sign\">
                                         <span class=\"check\"></span>
                                         </span>
                        </label>
                    </div>
                </div>
                <div class=\"card-footer text-center\">
                    <button  type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\" /> Sign in</button>
                    <div class=\"pull-left\">
                        <h6>
                            <a href=\"#\" class=\"link\">Create Account</a>
                        </h6>
                    </div>
                    <div class=\"pull-right\">
                        <h6>
                            <a href=\"#\" class=\"link\">Need Help?</a>
                        </h6>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 50,  106 => 42,  96 => 35,  83 => 27,  69 => 16,  65 => 14,  59 => 12,  57 => 11,  53 => 10,  47 => 6,  41 => 4,  39 => 3,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<div class=\"container\">
    <div class=\"col-md-4 ml-auto mr-auto\">
        <div class=\"card card-login card-plain\">
            <form class=\"form\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                {% if csrf_token %}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                {% endif %}
                <div class=\"card-header text-center\">
                    <div class=\"logo-container\">
                        <img src=\"{{ asset ( 'assets/img/now-logo.png') }}\" alt=\"\">
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"input-group no-border input-lg\">
                        <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                      <i class=\"now-ui-icons users_circle-08\"></i>
                    </span>
                        </div>

                        <input type=\"text\" class=\"form-control\"  id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" placeholder=\"{{ 'security.login.username'|trans }}\" />
                    </div>
                    <div class=\"input-group no-border input-lg\">
                        <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                      <i class=\"now-ui-icons text_caps-small\"></i>
                    </span>
                        </div>
                        <input type=\"password\" class=\"form-control\"  id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" placeholder=\"{{ 'security.login.password'|trans }}\"  />
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                            <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
                            <span class=\"form-check-sign\">
                                         <span class=\"check\"></span>
                                         </span>
                        </label>
                    </div>
                </div>
                <div class=\"card-footer text-center\">
                    <button  type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" class=\"btn btn-primary\" /> Sign in</button>
                    <div class=\"pull-left\">
                        <h6>
                            <a href=\"#\" class=\"link\">Create Account</a>
                        </h6>
                    </div>
                    <div class=\"pull-right\">
                        <h6>
                            <a href=\"#\" class=\"link\">Need Help?</a>
                        </h6>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>", "FOSUserBundle:Security:login_content.html.twig", "C:\\wamp64\\www\\tmt\\TGT\\app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
