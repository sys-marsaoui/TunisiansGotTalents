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

/* front.html.twig */
class __TwigTemplate_52ee599cfc24748c93453db365e8e0b1b9eb6ea6ce47acd8da8f79bdb9f5daa8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>TGT - ";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Favicon -->
    <link rel=\"icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/core-img/favicon.png"), "html", null, true);
        echo "\">
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
</head>

<body>
<!-- ##### Preloader ##### -->
<div class=\"preloader d-flex align-items-center justify-content-center\">
    <div class=\"circle-preloader\">
        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/core-img/compact-disc.png"), "html", null, true);
        echo "\" alt=\"\">
    </div>
</div>
";
        // line 31
        $this->displayBlock('header', $context, $blocks);
        // line 92
        $this->displayBlock('content', $context, $blocks);
        // line 325
        $this->displayBlock('footer', $context, $blocks);
        // line 363
        echo "<!-- ##### Footer Area Start ##### -->
";
        // line 364
        $this->displayBlock('javascripts', $context, $blocks);
        // line 383
        echo "</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Acceuil ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <!-- Core Stylesheet -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/login-register.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 32
        echo "    <!-- ##### Header Area Start ##### -->
    <header class=\"header-area\">
        <!-- Navbar Area -->
        <div class=\"musica-main-menu\">
            <div class=\"classy-nav-container breakpoint-off\">
                <div class=\"container-fluid\">
                    <!-- Menu -->
                    <nav class=\"classy-navbar justify-content-between\" id=\"musicaNav\">

                        <!-- Nav brand -->
                        <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"nav-brand\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/core-img/TGT.png"), "html", null, true);
        echo "\" alt=\"\"></a>

                        <!-- Navbar Toggler -->
                        <div class=\"classy-navbar-toggler\">
                            <span class=\"navbarToggler\"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class=\"classy-menu\">

                            <!-- close btn -->
                            <div class=\"classycloseIcon\">
                                <div class=\"cross-wrap\"><span class=\"top\"></span><span class=\"bottom\"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class=\"classynav\">
                                <ul>
                                    <li><a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Acceuil</a></li>
                                    <li><a href=\"#\">Publications</a></li>
                                    <li><a href=\"#\">Menu Organisation</a>
                                        <ul class=\"dropdown\">
                                            <li><a href=\"#\">Evenements</a></li>
                                            <li><a href=\"#\">Castings</a>
                                                <ul class=\"dropdown\">
                                                    <li><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entretien_show");
        echo "\">Passer Entretien</a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href=\"#\">Formations</a></li>
                                    <li><a href=\"#\">Articles</a></li>
                                    <li><a href=\"#\">Forum</a></li>
                                </ul>

                                <!-- Social Button -->
                                <div class=\"top-social-info\">
                                    <a data-toggle=\"modal\" href=\"javascript:void(0)\" onclick=\"openLoginModal();\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Connexion</a>
                                    <a href=\"#\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>S'inscrire</a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 93
        echo "    <!-- ##### Hero Area Start ##### -->
    <section class=\"hero-area\">
        <div class=\"hero-slides owl-carousel\">

            <!-- Single Hero Slide -->
            <div class=\"single-hero-slide d-flex align-items-center justify-content-center\">
                <!-- Slide Img -->
                <div class=\"slide-img bg-img\" style=\"background-image: url(";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/bg-img/bg-2.jpg"), "html", null, true);
        echo ");\"></div>
                <!-- Slide Content -->
                <div class=\"hero-slides-content text-center\">
                    <h2 data-animation=\"fadeInUp\" data-delay=\"100ms\">Talents <span>Talents</span></h2>
                    <p data-animation=\"fadeInUp\" data-delay=\"300ms\">Espace Talents</p>
                </div>
                <!-- Big Text -->
                <h2 class=\"big-text\">Talents</h2>
            </div>

            <!-- Single Hero Slide -->
            <div class=\"single-hero-slide d-flex align-items-center justify-content-center\">
                <!-- Slide Img -->
                <div class=\"slide-img bg-img\" style=\"background-image: url(";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/bg-img/bg-1.jpg"), "html", null, true);
        echo ");\"></div>
                <!-- Slide Content -->
                <div class=\"hero-slides-content text-center\">
                    <h2 data-animation=\"fadeInUp\" data-delay=\"100ms\">Organisations <span>Organisations</span></h2>
                    <p data-animation=\"fadeInUp\" data-delay=\"300ms\">Espace pour vos events et casting</p>
                </div>
                <!-- Big Text -->
                <h2 class=\"big-text\">Organisations</h2>
            </div>

            <!-- Single Hero Slide -->
            <div class=\"single-hero-slide d-flex align-items-center justify-content-center\">
                <!-- Slide Img -->
                <div class=\"slide-img bg-img\" style=\"background-image: url(";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/bg-img/bg-3.jpg"), "html", null, true);
        echo ");\"></div>
                <!-- Slide Content -->
                <div class=\"hero-slides-content text-center\">
                    <h2 data-animation=\"fadeInUp\" data-delay=\"100ms\">Membres <span>Membres</span></h2>
                    <p data-animation=\"fadeInUp\" data-delay=\"300ms\">Découvrir les talents de demain</p>
                </div>
                <!-- Big Text -->
                <h2 class=\"big-text\">Membres</h2>
            </div>

        </div>
        <!-- bg gradients -->
        <div class=\"bg-gradients\"></div>

        <!-- Slide Down -->
        <div class=\"slide-down\" id=\"scrollDown\">
            <h6>Glisser vers le bas</h6>
            <div class=\"line\"></div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <div class=\"about-us-area section-padding-100-0 bg-img bg-overlay\" style=\"background-image: url(";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/bg-img/bg-4.jpg"), "html", null, true);
        echo ");\" id=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"section-heading\">
                        <h2>Artist Bio</h2>
                        <h6>Sed porta cursus enim, vitae maximus felis luctus iaculis.</h6>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <!-- About Thumbnail -->
                <div class=\"col-12 col-lg-6\">
                    <div class=\"about-thumbnail mb-100\">
                        <img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/bg-img/bg-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
                <!-- About Content -->
                <div class=\"col-12 col-lg-6\">
                    <div class=\"about-content mb-100\">
                        <h4>Hello, It’s Michael Smithson</h4>
                        <p>Nulla pretium tincidunt felis, nec sollicitudin mauris lobortis in. Aliquam eu feugiat ligula, laoreet efficitur nulla. Morbi nec neque porta, elementum massa at, vehicula nunc. Nulla facilisi. Donec id purus eu lectus imperdiet varius. Curabitur consectetur nunc sem, vitae cursus enim tempor eget. Praesent pellentesque nisi urna, sit amet suscipit ligula posuere id. Aenean id tortor vel quam ornare gravida. Phasellus luctus feugiat nunc, quis vulputate ipsum convallis quis. Integer vel nulla erat. Donec erat metus, luctus quis maximus quis, volutpat eu tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Upcoming Shows Area Start ##### -->
    <div class=\"upcoming-shows-area section-padding-100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"section-heading\">
                        <h2>Upcoming shows</h2>
                        <h6>Sed porta cursus enim, vitae maximus felis luctus iaculis.</h6>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-12\">
                    <!-- Upcoming Shows Content -->
                    <div class=\"upcoming-shows-content\">

                        <!-- Single Upcoming Shows -->
                        <div class=\"single-upcoming-shows d-flex align-items-center flex-wrap\">
                            <div class=\"shows-date\">
                                <h2>17 <span>July</span></h2>
                            </div>
                            <div class=\"shows-desc d-flex align-items-center\">
                                <div class=\"shows-img\">
                                    <img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/bg-img/s1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"shows-name\">
                                    <h6>Electric castle Festival</h6>
                                    <p>Cluj, Romania</p>
                                </div>
                            </div>
                            <div class=\"shows-location\">
                                <p>At the Castle</p>
                            </div>
                            <div class=\"shows-time\">
                                <p>20:30</p>
                            </div>
                            <div class=\"buy-tickets\">
                                <a href=\"#\" class=\"btn musica-btn\">Buy Tikets</a>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <div class=\"single-upcoming-shows d-flex align-items-center flex-wrap\">
                            <div class=\"shows-date\">
                                <h2>23 <span>July</span></h2>
                            </div>
                            <div class=\"shows-desc d-flex align-items-center\">
                                <div class=\"shows-img\">
                                    <img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/bg-img/s2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"shows-name\">
                                    <h6>Electric Festival</h6>
                                    <p>Manhathan, NY, USA</p>
                                </div>
                            </div>
                            <div class=\"shows-location\">
                                <p>Main Stadium</p>
                            </div>
                            <div class=\"shows-time\">
                                <p>21:30</p>
                            </div>
                            <div class=\"buy-tickets\">
                                <a href=\"#\" class=\"btn musica-btn\">Buy Tikets</a>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <div class=\"single-upcoming-shows d-flex align-items-center flex-wrap\">
                            <div class=\"shows-date\">
                                <h2>25 <span>July</span></h2>
                            </div>
                            <div class=\"shows-desc d-flex align-items-center\">
                                <div class=\"shows-img\">
                                    <img src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/bg-img/s3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"shows-name\">
                                    <h6>Sunflower festival</h6>
                                    <p>Paris, France</p>
                                </div>
                            </div>
                            <div class=\"shows-location\">
                                <p>Sunflower Arena</p>
                            </div>
                            <div class=\"shows-time\">
                                <p>20:30</p>
                            </div>
                            <div class=\"buy-tickets\">
                                <a href=\"#\" class=\"btn musica-btn\">Buy Tikets</a>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <div class=\"single-upcoming-shows d-flex align-items-center flex-wrap\">
                            <div class=\"shows-date\">
                                <h2>30 <span>July</span></h2>
                            </div>
                            <div class=\"shows-desc d-flex align-items-center\">
                                <div class=\"shows-img\">
                                    <img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/bg-img/s4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"shows-name\">
                                    <h6>Electric castle Festival</h6>
                                    <p>Cluj, Romania</p>
                                </div>
                            </div>
                            <div class=\"shows-location\">
                                <p>At the Castle</p>
                            </div>
                            <div class=\"shows-time\">
                                <p>20:30</p>
                            </div>
                            <div class=\"buy-tickets\">
                                <a href=\"#\" class=\"btn musica-btn\">Buy Tikets</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Upcoming Shows Area End ##### -->

    <!-- ##### Music Artists Area Start ##### -->
    <div class=\"musica-music-artists-area d-flex flex-wrap clearfix\">
        <!-- Music Search -->
        <div class=\"music-search bg-img bg-overlay2 wow fadeInUp\" data-wow-delay=\"300ms\" style=\"background-image: url(";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/bg-img/bg-9.jpg"), "html", null, true);
        echo ");\">
            <!-- Content -->
            <div class=\"music-search-content\">
                <h2>Talents</h2>
                <h4>Chercher les meilleurs Talents</h4>
            </div>
        </div>

        <!-- Artists Search -->
        <div class=\"artists-search bg-img bg-overlay2 wow fadeInUp\" data-wow-delay=\"600ms\" style=\"background-image: url(";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/bg-img/bg-1.jpg"), "html", null, true);
        echo ");\">
            <!-- Content -->
            <div class=\"music-search-content\">
                <h2>Organisations</h2>
                <h4>Chercher les boites de demain</h4>
            </div>
        </div>
    </div>
    <!-- ##### Music Artists Area End ##### -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 325
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 326
        echo "    <!-- ##### Footer Area Start ##### -->
    <footer class=\"footer-area section-padding-100-0\">
        <div class=\"container-fluid\">
            <div class=\"row\">

                <!-- Footer Widget Area -->
                <div class=\"col-12 col-md-6 col-xl-3\">
                    <div class=\"footer-widget-area mb-100\">
                        <a href=\"#\"><img src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/core-img/TGT.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                        <p class=\"copywrite-text\">
                            &copy;<script>document.write(new Date().getFullYear());</script> Développé avec <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> par Bugs Dealers
                        </p>
                    </div>
                </div>
                <div class=\"col-12 col-sm-4 col-xl-2\">
                </div>
                <div class=\"col-12 col-sm-4 col-xl-2\">
                </div>
                <div class=\"col-12 col-sm-4 col-xl-2\">
                </div>
                <!-- Footer Widget Area -->
                <div class=\"col-12 col-md-6 col-xl-3\">
                    <div class=\"footer-widget-area mb-100\">
                        <div class=\"widget-title\">
                            <h4>Abonnez-Vous</h4>
                        </div>
                        <form action=\"#\" method=\"post\" class=\"subscribe-form\">
                            <input type=\"email\" name=\"subscribe-email\" id=\"subscribeemail\">
                            <button type=\"submit\">S'abonner</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 364
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 365
        echo "    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Popper js -->
    <script src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/bootstrap/popper.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap js -->
    <script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- All Plugins js -->
    <script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/plugins/plugins.js"), "html", null, true);
        echo "\"></script>
    <!-- Active js -->
    <script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/active.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/login-register.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            openLoginModal();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  619 => 376,  615 => 375,  610 => 373,  605 => 371,  600 => 369,  595 => 367,  591 => 365,  582 => 364,  543 => 334,  533 => 326,  524 => 325,  504 => 315,  492 => 306,  461 => 278,  433 => 253,  405 => 228,  377 => 203,  335 => 164,  317 => 149,  291 => 126,  275 => 113,  259 => 100,  250 => 93,  241 => 92,  206 => 67,  196 => 60,  173 => 42,  161 => 32,  152 => 31,  140 => 19,  136 => 18,  133 => 17,  124 => 16,  106 => 12,  93 => 383,  91 => 364,  88 => 363,  86 => 325,  84 => 92,  82 => 31,  76 => 28,  67 => 21,  65 => 16,  61 => 15,  55 => 12,  42 => 1,);
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
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>TGT - {% block title %} Acceuil {% endblock %}</title>

    <!-- Favicon -->
    <link rel=\"icon\" href=\"{{ asset('front/img/core-img/favicon.png') }}\">
    {% block stylesheets %}
        <!-- Core Stylesheet -->
        <link rel=\"stylesheet\" href=\"{{ asset('front/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/login-register.css') }}\">
    {% endblock %}

</head>

<body>
<!-- ##### Preloader ##### -->
<div class=\"preloader d-flex align-items-center justify-content-center\">
    <div class=\"circle-preloader\">
        <img src=\"{{ asset('front/img/core-img/compact-disc.png') }}\" alt=\"\">
    </div>
</div>
{% block header %}
    <!-- ##### Header Area Start ##### -->
    <header class=\"header-area\">
        <!-- Navbar Area -->
        <div class=\"musica-main-menu\">
            <div class=\"classy-nav-container breakpoint-off\">
                <div class=\"container-fluid\">
                    <!-- Menu -->
                    <nav class=\"classy-navbar justify-content-between\" id=\"musicaNav\">

                        <!-- Nav brand -->
                        <a href=\"{{ path('homepage') }}\" class=\"nav-brand\"><img src=\"{{ asset('front/img/core-img/TGT.png') }}\" alt=\"\"></a>

                        <!-- Navbar Toggler -->
                        <div class=\"classy-navbar-toggler\">
                            <span class=\"navbarToggler\"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class=\"classy-menu\">

                            <!-- close btn -->
                            <div class=\"classycloseIcon\">
                                <div class=\"cross-wrap\"><span class=\"top\"></span><span class=\"bottom\"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class=\"classynav\">
                                <ul>
                                    <li><a href=\"{{ path('homepage') }}\">Acceuil</a></li>
                                    <li><a href=\"#\">Publications</a></li>
                                    <li><a href=\"#\">Menu Organisation</a>
                                        <ul class=\"dropdown\">
                                            <li><a href=\"#\">Evenements</a></li>
                                            <li><a href=\"#\">Castings</a>
                                                <ul class=\"dropdown\">
                                                    <li><a href=\"{{ path('entretien_show') }}\">Passer Entretien</a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href=\"#\">Formations</a></li>
                                    <li><a href=\"#\">Articles</a></li>
                                    <li><a href=\"#\">Forum</a></li>
                                </ul>

                                <!-- Social Button -->
                                <div class=\"top-social-info\">
                                    <a data-toggle=\"modal\" href=\"javascript:void(0)\" onclick=\"openLoginModal();\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Connexion</a>
                                    <a href=\"#\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>S'inscrire</a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
{% endblock %}
{% block content %}
    <!-- ##### Hero Area Start ##### -->
    <section class=\"hero-area\">
        <div class=\"hero-slides owl-carousel\">

            <!-- Single Hero Slide -->
            <div class=\"single-hero-slide d-flex align-items-center justify-content-center\">
                <!-- Slide Img -->
                <div class=\"slide-img bg-img\" style=\"background-image: url({{asset('front/img/bg-img/bg-2.jpg')}});\"></div>
                <!-- Slide Content -->
                <div class=\"hero-slides-content text-center\">
                    <h2 data-animation=\"fadeInUp\" data-delay=\"100ms\">Talents <span>Talents</span></h2>
                    <p data-animation=\"fadeInUp\" data-delay=\"300ms\">Espace Talents</p>
                </div>
                <!-- Big Text -->
                <h2 class=\"big-text\">Talents</h2>
            </div>

            <!-- Single Hero Slide -->
            <div class=\"single-hero-slide d-flex align-items-center justify-content-center\">
                <!-- Slide Img -->
                <div class=\"slide-img bg-img\" style=\"background-image: url({{asset('front/img/bg-img/bg-1.jpg')}});\"></div>
                <!-- Slide Content -->
                <div class=\"hero-slides-content text-center\">
                    <h2 data-animation=\"fadeInUp\" data-delay=\"100ms\">Organisations <span>Organisations</span></h2>
                    <p data-animation=\"fadeInUp\" data-delay=\"300ms\">Espace pour vos events et casting</p>
                </div>
                <!-- Big Text -->
                <h2 class=\"big-text\">Organisations</h2>
            </div>

            <!-- Single Hero Slide -->
            <div class=\"single-hero-slide d-flex align-items-center justify-content-center\">
                <!-- Slide Img -->
                <div class=\"slide-img bg-img\" style=\"background-image: url({{asset('front/img/bg-img/bg-3.jpg')}});\"></div>
                <!-- Slide Content -->
                <div class=\"hero-slides-content text-center\">
                    <h2 data-animation=\"fadeInUp\" data-delay=\"100ms\">Membres <span>Membres</span></h2>
                    <p data-animation=\"fadeInUp\" data-delay=\"300ms\">Découvrir les talents de demain</p>
                </div>
                <!-- Big Text -->
                <h2 class=\"big-text\">Membres</h2>
            </div>

        </div>
        <!-- bg gradients -->
        <div class=\"bg-gradients\"></div>

        <!-- Slide Down -->
        <div class=\"slide-down\" id=\"scrollDown\">
            <h6>Glisser vers le bas</h6>
            <div class=\"line\"></div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <div class=\"about-us-area section-padding-100-0 bg-img bg-overlay\" style=\"background-image: url({{asset('front/img/bg-img/bg-4.jpg')}});\" id=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"section-heading\">
                        <h2>Artist Bio</h2>
                        <h6>Sed porta cursus enim, vitae maximus felis luctus iaculis.</h6>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <!-- About Thumbnail -->
                <div class=\"col-12 col-lg-6\">
                    <div class=\"about-thumbnail mb-100\">
                        <img src=\"{{ asset('front/img/bg-img/bg-5.jpg') }}\" alt=\"\">
                    </div>
                </div>
                <!-- About Content -->
                <div class=\"col-12 col-lg-6\">
                    <div class=\"about-content mb-100\">
                        <h4>Hello, It’s Michael Smithson</h4>
                        <p>Nulla pretium tincidunt felis, nec sollicitudin mauris lobortis in. Aliquam eu feugiat ligula, laoreet efficitur nulla. Morbi nec neque porta, elementum massa at, vehicula nunc. Nulla facilisi. Donec id purus eu lectus imperdiet varius. Curabitur consectetur nunc sem, vitae cursus enim tempor eget. Praesent pellentesque nisi urna, sit amet suscipit ligula posuere id. Aenean id tortor vel quam ornare gravida. Phasellus luctus feugiat nunc, quis vulputate ipsum convallis quis. Integer vel nulla erat. Donec erat metus, luctus quis maximus quis, volutpat eu tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Upcoming Shows Area Start ##### -->
    <div class=\"upcoming-shows-area section-padding-100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"section-heading\">
                        <h2>Upcoming shows</h2>
                        <h6>Sed porta cursus enim, vitae maximus felis luctus iaculis.</h6>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-12\">
                    <!-- Upcoming Shows Content -->
                    <div class=\"upcoming-shows-content\">

                        <!-- Single Upcoming Shows -->
                        <div class=\"single-upcoming-shows d-flex align-items-center flex-wrap\">
                            <div class=\"shows-date\">
                                <h2>17 <span>July</span></h2>
                            </div>
                            <div class=\"shows-desc d-flex align-items-center\">
                                <div class=\"shows-img\">
                                    <img src=\"{{ asset('front/img/bg-img/s1.jpg') }}\" alt=\"\">
                                </div>
                                <div class=\"shows-name\">
                                    <h6>Electric castle Festival</h6>
                                    <p>Cluj, Romania</p>
                                </div>
                            </div>
                            <div class=\"shows-location\">
                                <p>At the Castle</p>
                            </div>
                            <div class=\"shows-time\">
                                <p>20:30</p>
                            </div>
                            <div class=\"buy-tickets\">
                                <a href=\"#\" class=\"btn musica-btn\">Buy Tikets</a>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <div class=\"single-upcoming-shows d-flex align-items-center flex-wrap\">
                            <div class=\"shows-date\">
                                <h2>23 <span>July</span></h2>
                            </div>
                            <div class=\"shows-desc d-flex align-items-center\">
                                <div class=\"shows-img\">
                                    <img src=\"{{ asset('front/img/bg-img/s2.jpg') }}\" alt=\"\">
                                </div>
                                <div class=\"shows-name\">
                                    <h6>Electric Festival</h6>
                                    <p>Manhathan, NY, USA</p>
                                </div>
                            </div>
                            <div class=\"shows-location\">
                                <p>Main Stadium</p>
                            </div>
                            <div class=\"shows-time\">
                                <p>21:30</p>
                            </div>
                            <div class=\"buy-tickets\">
                                <a href=\"#\" class=\"btn musica-btn\">Buy Tikets</a>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <div class=\"single-upcoming-shows d-flex align-items-center flex-wrap\">
                            <div class=\"shows-date\">
                                <h2>25 <span>July</span></h2>
                            </div>
                            <div class=\"shows-desc d-flex align-items-center\">
                                <div class=\"shows-img\">
                                    <img src=\"{{ asset('front/img/bg-img/s3.jpg') }}\" alt=\"\">
                                </div>
                                <div class=\"shows-name\">
                                    <h6>Sunflower festival</h6>
                                    <p>Paris, France</p>
                                </div>
                            </div>
                            <div class=\"shows-location\">
                                <p>Sunflower Arena</p>
                            </div>
                            <div class=\"shows-time\">
                                <p>20:30</p>
                            </div>
                            <div class=\"buy-tickets\">
                                <a href=\"#\" class=\"btn musica-btn\">Buy Tikets</a>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <div class=\"single-upcoming-shows d-flex align-items-center flex-wrap\">
                            <div class=\"shows-date\">
                                <h2>30 <span>July</span></h2>
                            </div>
                            <div class=\"shows-desc d-flex align-items-center\">
                                <div class=\"shows-img\">
                                    <img src=\"{{ asset('front/img/bg-img/s4.jpg') }}\" alt=\"\">
                                </div>
                                <div class=\"shows-name\">
                                    <h6>Electric castle Festival</h6>
                                    <p>Cluj, Romania</p>
                                </div>
                            </div>
                            <div class=\"shows-location\">
                                <p>At the Castle</p>
                            </div>
                            <div class=\"shows-time\">
                                <p>20:30</p>
                            </div>
                            <div class=\"buy-tickets\">
                                <a href=\"#\" class=\"btn musica-btn\">Buy Tikets</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Upcoming Shows Area End ##### -->

    <!-- ##### Music Artists Area Start ##### -->
    <div class=\"musica-music-artists-area d-flex flex-wrap clearfix\">
        <!-- Music Search -->
        <div class=\"music-search bg-img bg-overlay2 wow fadeInUp\" data-wow-delay=\"300ms\" style=\"background-image: url({{asset('front/img/bg-img/bg-9.jpg')}});\">
            <!-- Content -->
            <div class=\"music-search-content\">
                <h2>Talents</h2>
                <h4>Chercher les meilleurs Talents</h4>
            </div>
        </div>

        <!-- Artists Search -->
        <div class=\"artists-search bg-img bg-overlay2 wow fadeInUp\" data-wow-delay=\"600ms\" style=\"background-image: url({{asset('front/img/bg-img/bg-1.jpg')}});\">
            <!-- Content -->
            <div class=\"music-search-content\">
                <h2>Organisations</h2>
                <h4>Chercher les boites de demain</h4>
            </div>
        </div>
    </div>
    <!-- ##### Music Artists Area End ##### -->
{% endblock %}
{% block footer %}
    <!-- ##### Footer Area Start ##### -->
    <footer class=\"footer-area section-padding-100-0\">
        <div class=\"container-fluid\">
            <div class=\"row\">

                <!-- Footer Widget Area -->
                <div class=\"col-12 col-md-6 col-xl-3\">
                    <div class=\"footer-widget-area mb-100\">
                        <a href=\"#\"><img src=\"{{ asset('front/img/core-img/TGT.png') }}\" alt=\"\"></a>
                        <p class=\"copywrite-text\">
                            &copy;<script>document.write(new Date().getFullYear());</script> Développé avec <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> par Bugs Dealers
                        </p>
                    </div>
                </div>
                <div class=\"col-12 col-sm-4 col-xl-2\">
                </div>
                <div class=\"col-12 col-sm-4 col-xl-2\">
                </div>
                <div class=\"col-12 col-sm-4 col-xl-2\">
                </div>
                <!-- Footer Widget Area -->
                <div class=\"col-12 col-md-6 col-xl-3\">
                    <div class=\"footer-widget-area mb-100\">
                        <div class=\"widget-title\">
                            <h4>Abonnez-Vous</h4>
                        </div>
                        <form action=\"#\" method=\"post\" class=\"subscribe-form\">
                            <input type=\"email\" name=\"subscribe-email\" id=\"subscribeemail\">
                            <button type=\"submit\">S'abonner</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </footer>
{% endblock %}
<!-- ##### Footer Area Start ##### -->
{% block javascripts %}
    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src=\"{{asset('front/js/jquery/jquery-2.2.4.min.js')}}\"></script>
    <!-- Popper js -->
    <script src=\"{{asset('front/js/bootstrap/popper.min.js')}}\"></script>
    <!-- Bootstrap js -->
    <script src=\"{{ asset('back/js/bootstrap.min.js') }}\"></script>
    <!-- All Plugins js -->
    <script src=\"{{ asset('front/js/plugins/plugins.js') }}\"></script>
    <!-- Active js -->
    <script src=\"{{ asset('front/js/active.js') }}\"></script>
    <script src=\"{{ asset('front/js/login-register.js') }}\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            openLoginModal();
        });
    </script>
{% endblock %}
</body>

</html>
", "front.html.twig", "C:\\wamp64\\www\\2020\\TGT\\app\\Resources\\views\\front.html.twig");
    }
}
