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

/* profile.html.twig */
class __TwigTemplate_cec819778135e96c2cc695bb53e23f76cec2c07b8f6061564ca928b740f961f9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'name' => [$this, 'block_name'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile.html.twig"));

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
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Favicon -->
    <link rel=\"icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/core-img/favicon.png"), "html", null, true);
        echo "\">
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
</head>

<body>
<!-- ##### Preloader ##### -->
<div class=\"preloader d-flex align-items-center justify-content-center\">
    <div class=\"circle-preloader\">
        <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/core-img/compact-disc.png"), "html", null, true);
        echo "\" alt=\"\">
    </div>
</div>
";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 106
        echo "<!-- ##### Breadcumb Area Start ##### -->
<div class=\"breadcumb-area bg-img bg-overlay2\"
     style=\"background-image: url(";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/bg-img/breadcumb5.jpg"), "html", null, true);
        echo ");\">
    <div class=\"bradcumbContent\">
        <h2>";
        // line 110
        $this->displayBlock('name', $context, $blocks);
        echo "</h2>
    </div>
</div>
<!-- bg gradients -->
<div class=\"bg-gradients\"></div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Elements Area Start ##### -->
<section class=\"elements-area mt-30 section-padding-100-0\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 121
        $this->displayBlock('content', $context, $blocks);
        // line 123
        echo "        </div>
    </div>
</section>
<!-- ##### CTA Area Start ##### -->
<div class=\"musica-cta-area section-padding-100 bg-img bg-overlay2\"
     style=\"background-image: url(";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/blog-img/4.jpg"), "html", null, true);
        echo ");\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"cta-content d-flex justify-content-between align-items-center\">
                    <div class=\"cta-text\">
                        <h4>Contactez-nous maintenant</h4>
                        <h2>Avez-vous une Question?</h2>
                        <h6>N'hesitez pas à consulter notre Forum.</h6>
                    </div>
                    <div class=\"cta-btn\">
                        <a href=\"#\" class=\"btn musica-btn\">forum</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### CTA Area End ##### -->
";
        // line 147
        $this->displayBlock('footer', $context, $blocks);
        // line 186
        echo "<!-- ##### Footer Area Start ##### -->
";
        // line 187
        $this->displayBlock('javascripts', $context, $blocks);
        // line 220
        echo "</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
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

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "        <!-- Core Stylesheet -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/login-register.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/tree-viewer.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/adminpro-custon-icon.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/jquery.mCustomScrollbar.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/bootstrap-table.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/bootstrap-editable.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/normalize.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/c3.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/responsive.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 45
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
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"nav-brand\"><img
                                    src=\"";
        // line 56
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
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Acceuil</a></li>
                                    <li><a href=\"#\">Publications</a></li>
                                    <li><a href=\"#\">Menu Organisation</a>
                                        <ul class=\"dropdown\">
                                            <li><a href=\"#\">Evenements</a></li>
                                            <li><a href=\"#\">Castings</a>
                                                <ul class=\"dropdown\">
                                                    <li><a href=\"";
        // line 81
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
                                    <a href=\"#\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Déconnexion</a>
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

    // line 110
    public function block_name($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name"));

        echo " Change Name ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 121
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 122
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 147
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 148
        echo "<!-- ##### Footer Area Start ##### -->
<footer class=\"footer-area section-padding-100-0\">
    <div class=\"container-fluid\">
        <div class=\"row\">

            <!-- Footer Widget Area -->
            <div class=\"col-12 col-md-6 col-xl-3\">
                <div class=\"footer-widget-area mb-100\">
                    <a href=\"#\"><img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/img/core-img/TGT.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <p class=\"copywrite-text\">
                        &copy;<script>document.write(new Date().getFullYear());</script>
                        Développé avec <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> par Bugs Dealers
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

    // line 187
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 188
        echo "    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Popper js -->
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/bootstrap/popper.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap js -->
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- All Plugins js -->
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/plugins/plugins.js"), "html", null, true);
        echo "\"></script>
    <!-- Active js -->
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/active.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/login-register.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/jquery.peity.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/peity/peity-active.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/sparkline-active.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/bootstrap-table.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/tableExport.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/data-table-active.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/bootstrap-table-editable.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/bootstrap-editable.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/bootstrap-table-resizable.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/colResizable-1.5.source.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/bootstrap-table-export.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/jquery.meanmenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/jquery.scrollUp.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/modernizr-2.8.3.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 218,  556 => 217,  552 => 216,  548 => 215,  544 => 214,  540 => 213,  536 => 212,  532 => 211,  528 => 210,  524 => 209,  520 => 208,  516 => 207,  512 => 206,  508 => 205,  504 => 204,  500 => 203,  496 => 202,  492 => 201,  488 => 200,  484 => 199,  480 => 198,  475 => 196,  470 => 194,  465 => 192,  460 => 190,  456 => 188,  447 => 187,  407 => 156,  397 => 148,  388 => 147,  378 => 122,  369 => 121,  351 => 110,  316 => 81,  306 => 74,  285 => 56,  281 => 55,  269 => 45,  260 => 44,  248 => 32,  244 => 31,  240 => 30,  236 => 29,  232 => 28,  228 => 27,  224 => 26,  220 => 25,  216 => 24,  212 => 23,  208 => 22,  204 => 21,  200 => 20,  196 => 19,  192 => 18,  188 => 17,  185 => 16,  176 => 15,  158 => 11,  145 => 220,  143 => 187,  140 => 186,  138 => 147,  116 => 128,  109 => 123,  107 => 121,  93 => 110,  88 => 108,  84 => 106,  82 => 44,  76 => 41,  67 => 34,  65 => 15,  61 => 14,  55 => 11,  43 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ asset('back/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('back/css/tree-viewer.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('back/css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('back/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('back/css/font-awesome.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('back/css/adminpro-custon-icon.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('back/css/jquery.mCustomScrollbar.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('back/css/animate.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('back/css/bootstrap-table.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('back/css/bootstrap-editable.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('back/css/normalize.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('back/css/c3.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('back/css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('back/css/responsive.css') }}\">
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
                        <a href=\"{{ path('homepage') }}\" class=\"nav-brand\"><img
                                    src=\"{{ asset('front/img/core-img/TGT.png') }}\" alt=\"\"></a>

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
                                    <a href=\"#\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Déconnexion</a>
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
<!-- ##### Breadcumb Area Start ##### -->
<div class=\"breadcumb-area bg-img bg-overlay2\"
     style=\"background-image: url({{ asset('front/img/bg-img/breadcumb5.jpg') }});\">
    <div class=\"bradcumbContent\">
        <h2>{% block name %} Change Name {% endblock %}</h2>
    </div>
</div>
<!-- bg gradients -->
<div class=\"bg-gradients\"></div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Elements Area Start ##### -->
<section class=\"elements-area mt-30 section-padding-100-0\">
    <div class=\"container\">
        <div class=\"row\">
            {% block content %}
            {% endblock %}
        </div>
    </div>
</section>
<!-- ##### CTA Area Start ##### -->
<div class=\"musica-cta-area section-padding-100 bg-img bg-overlay2\"
     style=\"background-image: url({{ asset('front/img/blog-img/4.jpg') }});\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"cta-content d-flex justify-content-between align-items-center\">
                    <div class=\"cta-text\">
                        <h4>Contactez-nous maintenant</h4>
                        <h2>Avez-vous une Question?</h2>
                        <h6>N'hesitez pas à consulter notre Forum.</h6>
                    </div>
                    <div class=\"cta-btn\">
                        <a href=\"#\" class=\"btn musica-btn\">forum</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### CTA Area End ##### -->
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
                        &copy;<script>document.write(new Date().getFullYear());</script>
                        Développé avec <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> par Bugs Dealers
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
    <script src=\"{{ asset('front/js/jquery/jquery-2.2.4.min.js') }}\"></script>
    <!-- Popper js -->
    <script src=\"{{ asset('front/js/bootstrap/popper.min.js') }}\"></script>
    <!-- Bootstrap js -->
    <script src=\"{{ asset('back/js/bootstrap.min.js') }}\"></script>
    <!-- All Plugins js -->
    <script src=\"{{ asset('front/js/plugins/plugins.js') }}\"></script>
    <!-- Active js -->
    <script src=\"{{ asset('front/js/active.js') }}\"></script>
    <script src=\"{{ asset('front/js/login-register.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('back/js/waypoints.min.js') }}\"></script>
    <script src=\"{{ asset('back/js/jquery.peity.min.js') }}\"></script>
    <script src=\"{{ asset('back/js/peity/peity-active.js') }}\"></script>
    <script src=\"{{ asset('back/js/jquery.sparkline.min.js') }}\"></script>
    <script src=\"{{ asset('back/js/sparkline-active.js') }}\"></script>
    <script src=\"{{ asset('back/js/bootstrap-table.js') }}\"></script>
    <script src=\"{{ asset('back/js/tableExport.js') }}\"></script>
    <script src=\"{{ asset('back/js/data-table-active.js') }}\"></script>
    <script src=\"{{ asset('back/js/bootstrap-table-editable.js') }}\"></script>
    <script src=\"{{ asset('back/js/bootstrap-editable.js') }}\"></script>
    <script src=\"{{ asset('back/js/bootstrap-table-resizable.js') }}\"></script>
    <script src=\"{{ asset('back/js/colResizable-1.5.source.js') }}\"></script>
    <script src=\"{{ asset('back/js/bootstrap-table-export.js') }}\"></script>
    <script src=\"{{ asset('back/js/jquery.meanmenu.js') }}\"></script>
    <script src=\"{{ asset('back/js/jquery.mCustomScrollbar.concat.min.js') }}\"></script>
    <script src=\"{{ asset('back/js/jquery.sticky.js') }}\"></script>
    <script src=\"{{ asset('back/js/jquery.scrollUp.min.js') }}\"></script>
    <script src=\"{{ asset('back/js/jquery.counterup.min.js') }}\"></script>
    <script src=\"{{ asset('back/js/modernizr-2.8.3.min.js') }}\"></script>
{% endblock %}
</body>

</html>
", "profile.html.twig", "C:\\wamp64\\www\\2020\\TGT\\app\\Resources\\views\\profile.html.twig");
    }
}
