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

/* ::base.html.twig */
class __TwigTemplate_94cb73bd528c146cef6b16aa15c02f26f7a10daa0b5db6ece546e572687fba25 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'navbar' => [$this, 'block_navbar'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'content1' => [$this, 'block_content1'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\"/>
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/apple-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/favicon.png"), "html", null, true);
        echo "\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"/>
    <title>
        TGT - ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700,200\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\"
          integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "</head>

<body class=\"landing-page sidebar-collapse\">
";
        // line 27
        $this->displayBlock('navbar', $context, $blocks);
        // line 92
        $this->displayBlock('header', $context, $blocks);
        // line 107
        $this->displayBlock('content', $context, $blocks);
        // line 170
        $this->displayBlock('content1', $context, $blocks);
        // line 243
        $this->displayBlock('footer', $context, $blocks);
        // line 264
        $this->displayBlock('javascripts', $context, $blocks);
        // line 280
        echo "</body>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "landing-page";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "        <!-- CSS Files -->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/css/now-ui-kit.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/demo/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_navbar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 28
        echo "    <!-- Navbar -->
    <nav class=\"navbar navbar-expand-lg bg-primary fixed-top navbar-transparent \" color-on-scroll=\"400\">
        <div class=\"container\">
            <div class=\"dropdown button-dropdown\">
                <a href=\"#pablo\" class=\"dropdown-toggle\" id=\"navbarDropdown\" data-toggle=\"dropdown\">
                    <span class=\"button-bar\"></span>
                    <span class=\"button-bar\"></span>
                    <span class=\"button-bar\"></span>
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-header\">Menu</a>
                    <a class=\"dropdown-item\" href=\"#objectif\">Notre Objectif</a>
                    <a class=\"dropdown-item\" href=\"#forwho\">Pour Qui ?</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">One more separated link</a>
                </div>
            </div>
            <div class=\"navbar-translate\">
                <div class=\"logo-container\">
                    <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/TGT.png"), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"collapse navbar-collapse justify-content-end\" id=\"navigation\"
                 data-nav-image=\"../assets/img/blurred-image-1.jpg\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Connexion</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Inscription</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" rel=\"tooltip\" title=\"Page Twitter Esprit\" data-placement=\"bottom\"
                           href=\"https://twitter.com/esprit_news?lang=fr\"
                           target=\"_blank\">
                            <i class=\"fab fa-twitter\"></i>
                            <p class=\"d-lg-none d-xl-none\">Twitter</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" rel=\"tooltip\" title=\"Page Facebook Esprit\" data-placement=\"bottom\"
                           href=\"https://www.facebook.com/esprit.tn/\"
                           target=\"_blank\">
                            <i class=\"fab fa-facebook-square\"></i>
                            <p class=\"d-lg-none d-xl-none\">Facebook</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" rel=\"tooltip\" title=\"Site Web Esprit\" data-placement=\"bottom\"
                           href=\"http://esprit.tn/\"
                           target=\"_blank\">
                            <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>
                            <p class=\"d-lg-none d-xl-none\">WebSite</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 93
        echo "    <div class=\"page-header page-header-small\">
        <div class=\"page-header-image\" data-parallax=\"true\"
             style=\"background-image: url('";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/login.jpg"), "html", null, true);
        echo "');\">
        </div>

        <div class=\"content-center\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h1 class=\"title\">Votre Talent ... Notre Responsabilité!</h1>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 108
        echo "    <div class=\"section section-about-us\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 ml-auto mr-auto text-center\">
                    <h2 id=\"objectif\" class=\"title\">Notre objectif</h2>
                    <h5 class=\"description\">
                        Permettre aux stars de demain d'avoir leur propore espace personnel dans lequel
                        ils peuvent faire <br> un échange constructif entre eux, chercher des castings et évenements,
                        appliquer pour des stages et des JOBS, et plus encore....<br><br>
                        <blockquote class=\"blockquote\">
                            <p class=\"mb-0\"><a class=\"text-muted\" href=\"#\">Inscrivez-Vous </a> mainetnant afin de
                                découvrir ce monde et de profiter de toutes ces avantages.</p>
                        </blockquote>
                    </h5>
                    <h2 id=\"forwho\" class=\"title\">Pour Qui ?</h2>
                    <h5 class=\"description\">
                        Cet espace n'est pas exclusif aux talents seulements...<br>
                        A travers cet espace on a pensé à tous l'écosystéme de l'art (talents,organisations,fans).<br>
                        C'est parfaitement l'application incontournable pour chaque artiste.
                    </h5>
                </div>
            </div>
            <div class=\"separator separator-primary\"></div>
            <div class=\"section-story-overview\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"image-container image-left\"
                             style=\"background-image: url('";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/fast.jpg"), "html", null, true);
        echo "')\">
                            <!-- First image on the left side -->
                            <p class=\"blockquote blockquote-primary\">\"Le logiciel est une excellente combinaison entre
                                l'art et l'ingénierie.\"
                                <br>
                                <br>
                                <small>-Bill Gates</small>
                            </p>
                        </div>
                        <!-- Second image on the left side of the article -->
                        <div class=\"image-container\"
                             style=\"background-image: url('";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/bg3.jpg"), "html", null, true);
        echo "')\"></div>
                    </div>
                    <div class=\"col-md-5\">
                        <!-- First image on the right side, above the article -->
                        <div class=\"image-container image-right\"
                             style=\"background-image: url('";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/bg7.jpg"), "html", null, true);
        echo "')\"></div>
                        <h3>Rapidité, convivialité et performance </h3>
                        <p> • Performance : Pour que notre application soit performante, il faut optimiser le temps de
                            chargement des pages en adoptant les bonnes pratiques de développement. <br><br>
                            • Portabilité et comptabilité : notre application doit s’exécuter sur tous les environnements
                            logiciels (une application web qui s’adapte avec tous les périphériques). <br><br>
                            • Ergonomie : notre application doit être conforme avec les standards ergonomiques : une
                            interface graphique conviviale, une application guidée afin de faciliter l’utilisation et la
                            navigation entre les interfaces doit être facile. <br><br>
                            • Sécurité : l’application doit respecter la confidentialité des données d’où l’importance de
                            l’authentification. <br><br>
                            • Fiabilité : les données fournies par l’application doivent être fiables. <br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 170
    public function block_content1($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content1"));

        // line 171
        echo "    <div class=\"section section-team text-center\">
        <div class=\"container\">
            <h2 class=\"title\">Nos clients</h2>
            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\" class=\"active\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                </ol>
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"carousel-item\">
                        <img class=\"d-block\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/bg1.jpg"), "html", null, true);
        echo "\" alt=\"Les premiers\">
                        <div class=\"carousel-caption d-none d-md-block\">
                            <h5>Boite X</h5>
                        </div>
                    </div>
                    <div class=\"carousel-item active\">
                        <img class=\"d-block\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/bg1.jpg"), "html", null, true);
        echo "\" alt=\"Les deuxiémes\">
                        <div class=\"carousel-caption d-none d-md-block\">
                            <h5>Boite Y</h5>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/bg1.jpg"), "html", null, true);
        echo "\" alt=\"Les troisiémes\">
                        <div class=\"carousel-caption d-none d-md-block\">
                            <h5>Boite Y</h5>
                        </div>
                    </div>
                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                    <i class=\"now-ui-icons arrows-1_minimal-left\"></i>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                    <i class=\"now-ui-icons arrows-1_minimal-right\"></i>
                </a>
            </div>
        </div>
    </div>
    <div class=\"section section-contact-us text-center\">
        <div class=\"container\">
            <h2 class=\"title\">Contactez-nous</h2>
            <p class=\"description\">Pour plus d'informations ou pour des propositions.</p>
            <div class=\"row\">
                <div class=\"col-lg-6 text-center col-md-8 ml-auto mr-auto\">
                    <div class=\"input-group input-lg\">
                        <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">
                  <i class=\"now-ui-icons users_circle-08\"></i>
                </span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Votre nom...\">
                    </div>
                    <div class=\"input-group input-lg\">
                        <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">
                  <i class=\"now-ui-icons ui-1_email-85\"></i>
                </span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Email...\">
                    </div>
                    <div class=\"textarea-container\">
                        <textarea class=\"form-control\" name=\"name\" rows=\"4\" cols=\"80\"
                                  placeholder=\"Rédigez votre message...\"></textarea>
                    </div>
                    <div class=\"send-button\">
                        <a href=\"#pablo\" class=\"btn btn-primary btn-round btn-block btn-lg\">Envoyer Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 243
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 244
        echo "    <footer class=\"footer footer-default\">
        <div class=\" container \">
            <nav>
                <ul>
                    <li>
                        Bugs Dealers
                    </li>
                </ul>
            </nav>
            <div class=\"copyright\" id=\"copyright\">
                &copy;
                <script>
                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                </script>
                , Développé par Bugs Dealers.
            </div>
        </div>
    </footer>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 264
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 265
        echo "    <!--   Core JS Files   -->
    <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/js/core/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/js/core/popper.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dashboard/js/core/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/plugins/bootstrap-switch.js"), "html", null, true);
        echo "\"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/plugins/nouislider.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/plugins/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--  Google Maps Plugin    -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE\"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/now-ui-kit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  545 => 278,  538 => 274,  533 => 272,  528 => 270,  523 => 268,  519 => 267,  515 => 266,  512 => 265,  503 => 264,  474 => 244,  465 => 243,  406 => 194,  397 => 188,  388 => 182,  375 => 171,  366 => 170,  337 => 151,  329 => 146,  315 => 135,  286 => 108,  277 => 107,  255 => 95,  251 => 93,  242 => 92,  200 => 60,  194 => 57,  184 => 50,  160 => 28,  151 => 27,  139 => 22,  135 => 21,  131 => 20,  128 => 19,  119 => 18,  101 => 10,  91 => 280,  89 => 264,  87 => 243,  85 => 170,  83 => 107,  81 => 92,  79 => 27,  74 => 24,  72 => 18,  63 => 11,  61 => 10,  55 => 7,  51 => 6,  44 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\"/>
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('front/img/apple-icon.png') }}\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('front/img/favicon.png') }}\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"/>
    <title>
        TGT - {% block title %}landing-page{% endblock %}
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700,200\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\"
          integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
    {% block stylesheets %}
        <!-- CSS Files -->
        <link href=\"{{ asset('dashboard/css/bootstrap.min.css') }}\" rel=\"stylesheet\"/>
        <link href=\"{{ asset('dashboard/css/now-ui-kit.css') }}\" rel=\"stylesheet\"/>
        <link href=\"{{ asset('front/demo/demo.css') }}\" rel=\"stylesheet\"/>
    {% endblock %}
</head>

<body class=\"landing-page sidebar-collapse\">
{% block navbar %}
    <!-- Navbar -->
    <nav class=\"navbar navbar-expand-lg bg-primary fixed-top navbar-transparent \" color-on-scroll=\"400\">
        <div class=\"container\">
            <div class=\"dropdown button-dropdown\">
                <a href=\"#pablo\" class=\"dropdown-toggle\" id=\"navbarDropdown\" data-toggle=\"dropdown\">
                    <span class=\"button-bar\"></span>
                    <span class=\"button-bar\"></span>
                    <span class=\"button-bar\"></span>
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-header\">Menu</a>
                    <a class=\"dropdown-item\" href=\"#objectif\">Notre Objectif</a>
                    <a class=\"dropdown-item\" href=\"#forwho\">Pour Qui ?</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">One more separated link</a>
                </div>
            </div>
            <div class=\"navbar-translate\">
                <div class=\"logo-container\">
                    <img src=\"{{ asset('front/img/TGT.png') }}\">
                </div>
            </div>
            <div class=\"collapse navbar-collapse justify-content-end\" id=\"navigation\"
                 data-nav-image=\"../assets/img/blurred-image-1.jpg\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('fos_user_registration_register') }}\">Inscription</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" rel=\"tooltip\" title=\"Page Twitter Esprit\" data-placement=\"bottom\"
                           href=\"https://twitter.com/esprit_news?lang=fr\"
                           target=\"_blank\">
                            <i class=\"fab fa-twitter\"></i>
                            <p class=\"d-lg-none d-xl-none\">Twitter</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" rel=\"tooltip\" title=\"Page Facebook Esprit\" data-placement=\"bottom\"
                           href=\"https://www.facebook.com/esprit.tn/\"
                           target=\"_blank\">
                            <i class=\"fab fa-facebook-square\"></i>
                            <p class=\"d-lg-none d-xl-none\">Facebook</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" rel=\"tooltip\" title=\"Site Web Esprit\" data-placement=\"bottom\"
                           href=\"http://esprit.tn/\"
                           target=\"_blank\">
                            <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>
                            <p class=\"d-lg-none d-xl-none\">WebSite</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
{% endblock %}
{% block header %}
    <div class=\"page-header page-header-small\">
        <div class=\"page-header-image\" data-parallax=\"true\"
             style=\"background-image: url('{{ asset('front/img/login.jpg') }}');\">
        </div>

        <div class=\"content-center\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h1 class=\"title\">Votre Talent ... Notre Responsabilité!</h1>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block content %}
    <div class=\"section section-about-us\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 ml-auto mr-auto text-center\">
                    <h2 id=\"objectif\" class=\"title\">Notre objectif</h2>
                    <h5 class=\"description\">
                        Permettre aux stars de demain d'avoir leur propore espace personnel dans lequel
                        ils peuvent faire <br> un échange constructif entre eux, chercher des castings et évenements,
                        appliquer pour des stages et des JOBS, et plus encore....<br><br>
                        <blockquote class=\"blockquote\">
                            <p class=\"mb-0\"><a class=\"text-muted\" href=\"#\">Inscrivez-Vous </a> mainetnant afin de
                                découvrir ce monde et de profiter de toutes ces avantages.</p>
                        </blockquote>
                    </h5>
                    <h2 id=\"forwho\" class=\"title\">Pour Qui ?</h2>
                    <h5 class=\"description\">
                        Cet espace n'est pas exclusif aux talents seulements...<br>
                        A travers cet espace on a pensé à tous l'écosystéme de l'art (talents,organisations,fans).<br>
                        C'est parfaitement l'application incontournable pour chaque artiste.
                    </h5>
                </div>
            </div>
            <div class=\"separator separator-primary\"></div>
            <div class=\"section-story-overview\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"image-container image-left\"
                             style=\"background-image: url('{{ asset('front/img/fast.jpg') }}')\">
                            <!-- First image on the left side -->
                            <p class=\"blockquote blockquote-primary\">\"Le logiciel est une excellente combinaison entre
                                l'art et l'ingénierie.\"
                                <br>
                                <br>
                                <small>-Bill Gates</small>
                            </p>
                        </div>
                        <!-- Second image on the left side of the article -->
                        <div class=\"image-container\"
                             style=\"background-image: url('{{ asset('front/img/bg3.jpg') }}')\"></div>
                    </div>
                    <div class=\"col-md-5\">
                        <!-- First image on the right side, above the article -->
                        <div class=\"image-container image-right\"
                             style=\"background-image: url('{{ asset('front/img/bg7.jpg') }}')\"></div>
                        <h3>Rapidité, convivialité et performance </h3>
                        <p> • Performance : Pour que notre application soit performante, il faut optimiser le temps de
                            chargement des pages en adoptant les bonnes pratiques de développement. <br><br>
                            • Portabilité et comptabilité : notre application doit s’exécuter sur tous les environnements
                            logiciels (une application web qui s’adapte avec tous les périphériques). <br><br>
                            • Ergonomie : notre application doit être conforme avec les standards ergonomiques : une
                            interface graphique conviviale, une application guidée afin de faciliter l’utilisation et la
                            navigation entre les interfaces doit être facile. <br><br>
                            • Sécurité : l’application doit respecter la confidentialité des données d’où l’importance de
                            l’authentification. <br><br>
                            • Fiabilité : les données fournies par l’application doivent être fiables. <br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block content1 %}
    <div class=\"section section-team text-center\">
        <div class=\"container\">
            <h2 class=\"title\">Nos clients</h2>
            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\" class=\"active\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                </ol>
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"carousel-item\">
                        <img class=\"d-block\" src=\"{{asset('front/img/bg1.jpg')}}\" alt=\"Les premiers\">
                        <div class=\"carousel-caption d-none d-md-block\">
                            <h5>Boite X</h5>
                        </div>
                    </div>
                    <div class=\"carousel-item active\">
                        <img class=\"d-block\" src=\"{{asset('front/img/bg1.jpg')}}\" alt=\"Les deuxiémes\">
                        <div class=\"carousel-caption d-none d-md-block\">
                            <h5>Boite Y</h5>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block\" src=\"{{asset('front/img/bg1.jpg')}}\" alt=\"Les troisiémes\">
                        <div class=\"carousel-caption d-none d-md-block\">
                            <h5>Boite Y</h5>
                        </div>
                    </div>
                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                    <i class=\"now-ui-icons arrows-1_minimal-left\"></i>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                    <i class=\"now-ui-icons arrows-1_minimal-right\"></i>
                </a>
            </div>
        </div>
    </div>
    <div class=\"section section-contact-us text-center\">
        <div class=\"container\">
            <h2 class=\"title\">Contactez-nous</h2>
            <p class=\"description\">Pour plus d'informations ou pour des propositions.</p>
            <div class=\"row\">
                <div class=\"col-lg-6 text-center col-md-8 ml-auto mr-auto\">
                    <div class=\"input-group input-lg\">
                        <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">
                  <i class=\"now-ui-icons users_circle-08\"></i>
                </span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Votre nom...\">
                    </div>
                    <div class=\"input-group input-lg\">
                        <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">
                  <i class=\"now-ui-icons ui-1_email-85\"></i>
                </span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Email...\">
                    </div>
                    <div class=\"textarea-container\">
                        <textarea class=\"form-control\" name=\"name\" rows=\"4\" cols=\"80\"
                                  placeholder=\"Rédigez votre message...\"></textarea>
                    </div>
                    <div class=\"send-button\">
                        <a href=\"#pablo\" class=\"btn btn-primary btn-round btn-block btn-lg\">Envoyer Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block footer %}
    <footer class=\"footer footer-default\">
        <div class=\" container \">
            <nav>
                <ul>
                    <li>
                        Bugs Dealers
                    </li>
                </ul>
            </nav>
            <div class=\"copyright\" id=\"copyright\">
                &copy;
                <script>
                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                </script>
                , Développé par Bugs Dealers.
            </div>
        </div>
    </footer>
    </div>
{% endblock %}
{% block javascripts %}
    <!--   Core JS Files   -->
    <script src=\"{{ asset('dashboard/js/core/jquery.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('dashboard/js/core/popper.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('dashboard/js/core/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src=\"{{ asset('front/js/plugins/bootstrap-switch.js') }}\"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src=\"{{ asset('front/js/plugins/nouislider.min.js') }}\" type=\"text/javascript\"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src=\"{{ asset('front/js/plugins/bootstrap-datepicker.js') }}\" type=\"text/javascript\"></script>
    <!--  Google Maps Plugin    -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE\"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src=\"{{ asset('front/js/now-ui-kit.js') }}\" type=\"text/javascript\"></script>
{% endblock %}
</body>", "::base.html.twig", "C:\\wamp64\\www\\tmt\\TGT\\app/Resources\\views/base.html.twig");
    }
}
