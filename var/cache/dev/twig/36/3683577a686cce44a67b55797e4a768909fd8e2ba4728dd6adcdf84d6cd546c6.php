<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_f3139bce62933a01bc73b851a25ad1124a148a8f18c0a5666764faa8d91ac6d5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<!-- ======= Hero Section ======= -->
\t<section id=\"hero\" class=\"d-flex flex-column justify-content-end align-items-center\">
\t\t<div
\t\t\tid=\"heroCarousel\" data-bs-interval=\"5000\" class=\"container carousel carousel-fade\" data-bs-ride=\"carousel\">

\t\t\t<!-- Slide 1 -->
\t\t\t<div class=\"carousel-item active mt-5\">
\t\t\t\t<div class=\"carousel-container\">
\t\t\t\t\t<h2 class=\"animate__animated animate__fadeInDown\">Bienvenue dans votre nouvelle plateforme
\t\t\t\t\t\t<span> de logement</span>
\t\t\t\t\t</h2>
\t\t\t\t\t<p class=\"animate__animated fanimate__adeInUp\">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
\t\t\t\t\t<a href=\"#about\" class=\"btn-get-started animate__animated animate__fadeInUp scrollto\">Lire Plus</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Hero -->

\t<!--  Service-->
\t<section id=\"services\" class=\"services\">
\t\t<div class=\"container\">

\t\t\t<div class=\"section-title\" data-aos=\"zoom-out\">
\t\t\t\t<h2>Services</h2>
\t\t\t\t<p>Ce que nous offrons</p>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--  End service-->

\t<!--creation de carte  Div 1-->

\t<div
\t\tclass=\"row\" style=\"margin-left:60px; margin-top: 50px\">
\t\t<!--  card 1 -->
\t\t<div class=\"card mb-3\" style=\"width: 23rem; margin-left: 20px\">
\t\t\t<h3 class=\"card-header\">
\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">Complexes hôteliers</font>
\t\t\t\t</font>
\t\t\t</h3>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Traitement spécial des titres</font>
\t\t\t\t\t</font>
\t\t\t\t</h5>
\t\t\t\t<h6 class=\"card-subtitle text-muted\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Sous-titre de la carte de support</font>
\t\t\t\t\t</font>
\t\t\t\t</h6>
\t\t\t</div>
\t\t\t<img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/3.jpeg"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"...\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Quelques exemples de texte rapides pour s'appuyer sur le titre de la carte et constituer l'essentiel du contenu de la carte.</font>
\t\t\t\t\t</font>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t<!--  end card 1 -->

\t\t<!-- card 2 -->
\t\t<div class=\"card mb-3\" style=\"width: 23rem; margin-left: 20px\">
\t\t\t<h3 class=\"card-header\">
\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t<font style=\"vertical-align: inherit;\">Appartements</font>
\t\t\t\t</font>
\t\t\t</h3>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Traitement spécial des titres</font>
\t\t\t\t\t</font>
\t\t\t\t</h5>
\t\t\t\t<h6 class=\"card-subtitle text-muted\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Sous-titre de la carte de support</font>
\t\t\t\t\t</font>
\t\t\t\t</h6>
\t\t\t</div>
\t\t\t<img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/7.jpeg"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"...\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Quelques exemples de texte rapides pour s'appuyer sur le titre de la carte et constituer l'essentiel du contenu de la carte.</font>
\t\t\t\t\t</font>
\t\t\t\t</p>
\t\t\t</div>

\t\t</div>
\t\t<!-- End card 2 -->

\t\t<!-- card 3-->
\t\t<div class=\"card mb-3\" style=\"width: 23rem; margin-left: 20px\">
\t\t\t<h3 class=\"card-header\">
\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">Appart'hôtels</font>
\t\t\t\t</font>
\t\t\t</h3>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Traitement spécial des titres</font>
\t\t\t\t\t</font>
\t\t\t\t</h5>
\t\t\t\t<h6 class=\"card-subtitle text-muted\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Sous-titre de la carte de support</font>
\t\t\t\t\t</font>
\t\t\t\t</h6>
\t\t\t</div>
\t\t\t<img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/9.jpeg"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"...\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Quelques exemples de texte rapides pour s'appuyer sur le titre de la carte et constituer l'essentiel du contenu de la carte.</font>
\t\t\t\t\t</font>
\t\t\t\t</p>
\t\t\t</div>

\t\t</div>
\t\t<!--  End card 3-->


\t</div>

\t<!-- creation de carte Div 2 -->
\t<div
\t\tclass=\"row\" style=\"margin-left:60px; margin-top: 50px\">
\t\t<!-- card 4-->
\t\t<div class=\"card mb-3\" style=\"width: 23rem; margin-left: 20px\">
\t\t\t<h3 class=\"card-header\">
\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">Chambres d'hôtes</font>
\t\t\t\t</font>
\t\t\t</h3>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Traitement spécial des titres</font>
\t\t\t\t\t</font>
\t\t\t\t</h5>
\t\t\t\t<h6 class=\"card-subtitle text-muted\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Sous-titre de la carte de support</font>
\t\t\t\t\t</font>
\t\t\t\t</h6>
\t\t\t</div>
\t\t\t<img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/7.jpeg"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"...\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Quelques exemples de texte rapides pour s'appuyer sur le titre de la carte et constituer l'essentiel du contenu de la carte.</font>
\t\t\t\t\t</font>
\t\t\t\t</p>
\t\t\t</div>


\t\t</div>
\t\t<!-- End card 4 -->

\t\t<!-- card 5-->
\t\t<div class=\"card mb-3\" style=\"width: 23rem; margin-left: 20px\">
\t\t\t<h3 class=\"card-header\">
\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">Camping de luxe</font>
\t\t\t\t</font>
\t\t\t</h3>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Traitement spécial des titres</font>
\t\t\t\t\t</font>
\t\t\t\t</h5>
\t\t\t\t<h6 class=\"card-subtitle text-muted\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Sous-titre de la carte de support</font>
\t\t\t\t\t</font>
\t\t\t\t</h6>
\t\t\t</div>
\t\t\t<img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/8.jpeg"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"...\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Quelques exemples de texte rapides pour s'appuyer sur le titre de la carte et constituer l'essentiel du contenu de la carte.</font>
\t\t\t\t\t</font>
\t\t\t\t</p>
\t\t\t</div>

\t\t</div>
\t\t<!-- End card 5 -->

\t\t<!--  Card 6 -->
\t\t<div class=\"card mb-3\" style=\"width: 23rem; margin-left: 20px\">
\t\t\t<h3 class=\"card-header\">
\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">Logements - cuisine</font>
\t\t\t\t</font>
\t\t\t</h3>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Traitement spécial des titres</font>
\t\t\t\t\t</font>
\t\t\t\t</h5>
\t\t\t\t<h6 class=\"card-subtitle text-muted\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Sous-titre de la carte de support</font>
\t\t\t\t\t</font>
\t\t\t\t</h6>
\t\t\t</div>
\t\t\t<img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/10.jpeg"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"...\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Quelques exemples de texte rapides pour s'appuyer sur le titre de la carte et constituer l'essentiel du contenu de la carte.</font>
\t\t\t\t\t</font>
\t\t\t\t</p>
\t\t\t</div>


\t\t</div>
\t\t<!--  End card 6-->


\t</div>

\t<h2 style=\"margin-left:70px\">
\t\tExplorez le Sénégal
\t</h2>

\t<!-- End publicité -->

\t<!-- ======= Portfolio Section ======= -->
        <section id=\"portfolio\" class=\"portfolio\">
            <div class=\"container\">

                <div class=\"section-title\" data-aos=\"zoom-out\">
                    <h2>Portfolio</h2>
                    <p>Nos Appartements</p>
                </div>

                <div class=\"row portfolio-container\" data-aos=\"fade-up\">

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                        <div class=\"portfolio-img\"><img src=\"https://cf.bstatic.com/static/img/theme-index/carousel_320x240/bg_riad/ec1ea267f18d830b68ca76a666734f8e93a1853d.jpg\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"portfolio-info\">
                            <h4>App 1</h4>
                            <p>App</p>
                            <a href=\"assets/img/portfolio/portfolio-1.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 1\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                        <div class=\"portfolio-img\"><img src=\"https://cf.bstatic.com/static/img/theme-index/carousel_320x240/bg_guest_house/70618d86d515349ce56296a56d2eaaf283fd1542.jpg\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"portfolio-info\">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href=\"assets/img/portfolio/portfolio-2.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                        <div class=\"portfolio-img\"><img src=\"https://cf.bstatic.com/static/img/theme-index/carousel_320x240/bg_country_house/6ffa05069b50124c993f00c998f1dfc66999c93f.jpg\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"portfolio-info\">
                            <h4>App 2</h4>
                            <p>App</p>
                            <a href=\"assets/img/portfolio/portfolio-3.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 2\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                        <div class=\"portfolio-img\"><img src=\"https://cf.bstatic.com/static/img/theme-index/carousel_320x240/bg_campsite/6d40bef46964b8841a84cd88793fc8f0fa6663d9.jpg\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"portfolio-info\">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <a href=\"assets/img/portfolio/portfolio-4.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 2\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                        <div class=\"portfolio-img\"><img src=\"https://cf.bstatic.com/static/img/theme-index/carousel_320x240/bg_home_stay/9499c7a4ab5a599218da6d49422dae03384013e3.jpg\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"portfolio-info\">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <a href=\"assets/img/portfolio/portfolio-5.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 2\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                        <div class=\"portfolio-img\"><img src=\"https://cf.bstatic.com/static/img/theme-index/carousel_320x240/bg_farmhouses/9aeedf4b943c722367e5e901681463bf543c5afd.jpg\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"portfolio-info\">
                            <h4>App 3</h4>
                            <p>App</p>
                            <a href=\"assets/img/portfolio/portfolio-6.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                        <div class=\"portfolio-img\"><img src=\"https://cf.bstatic.com/static/img/theme-index/carousel_320x240/bg_self-catering/7a0939f5a5338faf255840e895953a522335434a.jpg\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"portfolio-info\">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <a href=\"assets/img/portfolio/portfolio-7.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 1\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                        <div class=\"portfolio-img\"><img src=\"https://cf.bstatic.com/static/img/theme-index/carousel_320x240/bg_aparthotel/10e092f390b128dcff92727912299eef7824b751.jpg\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"portfolio-info\">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <a href=\"assets/img/portfolio/portfolio-8.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                        <div class=\"portfolio-img\"><img src=\"https://cf.bstatic.com/static/img/theme-index/carousel_320x240/card-image-apartments_300/9f60235dc09a3ac3f0a93adbc901c61ecd1ce72e.jpg\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"portfolio-info\">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href=\"assets/img/portfolio/portfolio-9.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->


\t<!-- ======= Contact Section ======= -->
\t<section id=\"contact\" class=\"contact\">
\t\t<div class=\"container\">

\t\t\t<div class=\"section-title\" data-aos=\"zoom-out\">
\t\t\t\t<h2>Contact</h2>
\t\t\t\t<p>Nous Contacter</p>
\t\t\t</div>

\t\t\t<div class=\"row mt-5\">

\t\t\t\t<div class=\"col-lg-4\" data-aos=\"fade-right\">
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t<div class=\"address\">
\t\t\t\t\t\t\t<i class=\"bi bi-geo-alt\"></i>
\t\t\t\t\t\t\t<h4>Adresse:</h4>
\t\t\t\t\t\t\t<p>Dakar/Sénégal</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"email\">
\t\t\t\t\t\t\t<i class=\"bi bi-envelope\"></i>
\t\t\t\t\t\t\t<h4>Email:</h4>
\t\t\t\t\t\t\t<p>info@habitatsenegal.com</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"phone\">
\t\t\t\t\t\t\t<i class=\"bi bi-phone\"></i>
\t\t\t\t\t\t\t<h4>Téléphone:</h4>
\t\t\t\t\t\t\t<p>+221 33 8652356</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-8 mt-5 mt-lg-0\" data-aos=\"fade-left\">

\t\t\t\t\t<form action=\"forms/contact.php\" method=\"post\" role=\"form\" class=\"php-email-form\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 form-group mt-3 mt-md-0\">
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\" required></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"my-3\">
\t\t\t\t\t\t\t<div class=\"loading\">Loading</div>
\t\t\t\t\t\t\t<div class=\"error-message\"></div>
\t\t\t\t\t\t\t<div class=\"sent-message\">Your message has been sent. Thank you!</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<button type=\"submit\">Send Message</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>
\t</section>
\t<!-- End Contact Section -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 225,  290 => 194,  255 => 162,  215 => 125,  181 => 94,  146 => 62,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Hello HomeController!
{% endblock %}

{% block body %}

\t<!-- ======= Hero Section ======= -->
\t<section id=\"hero\" class=\"d-flex flex-column justify-content-end align-items-center\">
\t\t<div
\t\t\tid=\"heroCarousel\" data-bs-interval=\"5000\" class=\"container carousel carousel-fade\" data-bs-ride=\"carousel\">

\t\t\t<!-- Slide 1 -->
\t\t\t<div class=\"carousel-item active mt-5\">
\t\t\t\t<div class=\"carousel-container\">
\t\t\t\t\t<h2 class=\"animate__animated animate__fadeInDown\">Bienvenue dans votre nouvelle plateforme
\t\t\t\t\t\t<span> de logement</span>
\t\t\t\t\t</h2>
\t\t\t\t\t<p class=\"animate__animated fanimate__adeInUp\">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
\t\t\t\t\t<a href=\"#about\" class=\"btn-get-started animate__animated animate__fadeInUp scrollto\">Lire Plus</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Hero -->

\t<!--  Service-->
\t<section id=\"services\" class=\"services\">
\t\t<div class=\"container\">

\t\t\t<div class=\"section-title\" data-aos=\"zoom-out\">
\t\t\t\t<h2>Services</h2>
\t\t\t\t<p>Ce que nous offrons</p>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--  End service-->

\t<!--creation de carte  Div 1-->

\t<div
\t\tclass=\"row\" style=\"margin-left:60px; margin-top: 50px\">
\t\t<!--  card 1 -->
\t\t<div class=\"card mb-3\" style=\"width: 23rem; margin-left: 20px\">
\t\t\t<h3 class=\"card-header\">
\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">Complexes hôteliers</font>
\t\t\t\t</font>
\t\t\t</h3>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Traitement spécial des titres</font>
\t\t\t\t\t</font>
\t\t\t\t</h5>
\t\t\t\t<h6 class=\"card-subtitle text-muted\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Sous-titre de la carte de support</font>
\t\t\t\t\t</font>
\t\t\t\t</h6>
\t\t\t</div>
\t\t\t<img src=\"{{asset('assets/img/3.jpeg')}}\" class=\"card-img-top\" alt=\"...\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Quelques exemples de texte rapides pour s'appuyer sur le titre de la carte et constituer l'essentiel du contenu de la carte.</font>
\t\t\t\t\t</font>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t<!--  end card 1 -->

\t\t<!-- card 2 -->
\t\t<div class=\"card mb-3\" style=\"width: 23rem; margin-left: 20px\">
\t\t\t<h3 class=\"card-header\">
\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t<font style=\"vertical-align: inherit;\">Appartements</font>
\t\t\t\t</font>
\t\t\t</h3>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Traitement spécial des titres</font>
\t\t\t\t\t</font>
\t\t\t\t</h5>
\t\t\t\t<h6 class=\"card-subtitle text-muted\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Sous-titre de la carte de support</font>
\t\t\t\t\t</font>
\t\t\t\t</h6>
\t\t\t</div>
\t\t\t<img src=\"{{asset('assets/img/7.jpeg')}}\" class=\"card-img-top\" alt=\"...\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Quelques exemples de texte rapides pour s'appuyer sur le titre de la carte et constituer l'essentiel du contenu de la carte.</font>
\t\t\t\t\t</font>
\t\t\t\t</p>
\t\t\t</div>

\t\t</div>
\t\t<!-- End card 2 -->

\t\t<!-- card 3-->
\t\t<div class=\"card mb-3\" style=\"width: 23rem; margin-left: 20px\">
\t\t\t<h3 class=\"card-header\">
\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">Appart'hôtels</font>
\t\t\t\t</font>
\t\t\t</h3>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Traitement spécial des titres</font>
\t\t\t\t\t</font>
\t\t\t\t</h5>
\t\t\t\t<h6 class=\"card-subtitle text-muted\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Sous-titre de la carte de support</font>
\t\t\t\t\t</font>
\t\t\t\t</h6>
\t\t\t</div>
\t\t\t<img src=\"{{asset('assets/img/9.jpeg')}}\" class=\"card-img-top\" alt=\"...\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Quelques exemples de texte rapides pour s'appuyer sur le titre de la carte et constituer l'essentiel du contenu de la carte.</font>
\t\t\t\t\t</font>
\t\t\t\t</p>
\t\t\t</div>

\t\t</div>
\t\t<!--  End card 3-->


\t</div>

\t<!-- creation de carte Div 2 -->
\t<div
\t\tclass=\"row\" style=\"margin-left:60px; margin-top: 50px\">
\t\t<!-- card 4-->
\t\t<div class=\"card mb-3\" style=\"width: 23rem; margin-left: 20px\">
\t\t\t<h3 class=\"card-header\">
\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">Chambres d'hôtes</font>
\t\t\t\t</font>
\t\t\t</h3>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Traitement spécial des titres</font>
\t\t\t\t\t</font>
\t\t\t\t</h5>
\t\t\t\t<h6 class=\"card-subtitle text-muted\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Sous-titre de la carte de support</font>
\t\t\t\t\t</font>
\t\t\t\t</h6>
\t\t\t</div>
\t\t\t<img src=\"{{asset('assets/img/7.jpeg')}}\" class=\"card-img-top\" alt=\"...\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Quelques exemples de texte rapides pour s'appuyer sur le titre de la carte et constituer l'essentiel du contenu de la carte.</font>
\t\t\t\t\t</font>
\t\t\t\t</p>
\t\t\t</div>


\t\t</div>
\t\t<!-- End card 4 -->

\t\t<!-- card 5-->
\t\t<div class=\"card mb-3\" style=\"width: 23rem; margin-left: 20px\">
\t\t\t<h3 class=\"card-header\">
\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">Camping de luxe</font>
\t\t\t\t</font>
\t\t\t</h3>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Traitement spécial des titres</font>
\t\t\t\t\t</font>
\t\t\t\t</h5>
\t\t\t\t<h6 class=\"card-subtitle text-muted\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Sous-titre de la carte de support</font>
\t\t\t\t\t</font>
\t\t\t\t</h6>
\t\t\t</div>
\t\t\t<img src=\"{{asset('assets/img/8.jpeg')}}\" class=\"card-img-top\" alt=\"...\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Quelques exemples de texte rapides pour s'appuyer sur le titre de la carte et constituer l'essentiel du contenu de la carte.</font>
\t\t\t\t\t</font>
\t\t\t\t</p>
\t\t\t</div>

\t\t</div>
\t\t<!-- End card 5 -->

\t\t<!--  Card 6 -->
\t\t<div class=\"card mb-3\" style=\"width: 23rem; margin-left: 20px\">
\t\t\t<h3 class=\"card-header\">
\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">Logements - cuisine</font>
\t\t\t\t</font>
\t\t\t</h3>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Traitement spécial des titres</font>
\t\t\t\t\t</font>
\t\t\t\t</h5>
\t\t\t\t<h6 class=\"card-subtitle text-muted\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Sous-titre de la carte de support</font>
\t\t\t\t\t</font>
\t\t\t\t</h6>
\t\t\t</div>
\t\t\t<img src=\"{{asset('assets/img/10.jpeg')}}\" class=\"card-img-top\" alt=\"...\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">Quelques exemples de texte rapides pour s'appuyer sur le titre de la carte et constituer l'essentiel du contenu de la carte.</font>
\t\t\t\t\t</font>
\t\t\t\t</p>
\t\t\t</div>


\t\t</div>
\t\t<!--  End card 6-->


\t</div>

\t<h2 style=\"margin-left:70px\">
\t\tExplorez le Sénégal
\t</h2>

\t<!-- End publicité -->

\t<!-- ======= Portfolio Section ======= -->
        <section id=\"portfolio\" class=\"portfolio\">
            <div class=\"container\">

                <div class=\"section-title\" data-aos=\"zoom-out\">
                    <h2>Portfolio</h2>
                    <p>Nos Appartements</p>
                </div>

                <div class=\"row portfolio-container\" data-aos=\"fade-up\">

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                        <div class=\"portfolio-img\"><img src=\"https://cf.bstatic.com/static/img/theme-index/carousel_320x240/bg_riad/ec1ea267f18d830b68ca76a666734f8e93a1853d.jpg\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"portfolio-info\">
                            <h4>App 1</h4>
                            <p>App</p>
                            <a href=\"assets/img/portfolio/portfolio-1.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 1\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                        <div class=\"portfolio-img\"><img src=\"https://cf.bstatic.com/static/img/theme-index/carousel_320x240/bg_guest_house/70618d86d515349ce56296a56d2eaaf283fd1542.jpg\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"portfolio-info\">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href=\"assets/img/portfolio/portfolio-2.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                        <div class=\"portfolio-img\"><img src=\"https://cf.bstatic.com/static/img/theme-index/carousel_320x240/bg_country_house/6ffa05069b50124c993f00c998f1dfc66999c93f.jpg\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"portfolio-info\">
                            <h4>App 2</h4>
                            <p>App</p>
                            <a href=\"assets/img/portfolio/portfolio-3.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 2\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                        <div class=\"portfolio-img\"><img src=\"https://cf.bstatic.com/static/img/theme-index/carousel_320x240/bg_campsite/6d40bef46964b8841a84cd88793fc8f0fa6663d9.jpg\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"portfolio-info\">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <a href=\"assets/img/portfolio/portfolio-4.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 2\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                        <div class=\"portfolio-img\"><img src=\"https://cf.bstatic.com/static/img/theme-index/carousel_320x240/bg_home_stay/9499c7a4ab5a599218da6d49422dae03384013e3.jpg\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"portfolio-info\">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <a href=\"assets/img/portfolio/portfolio-5.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 2\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                        <div class=\"portfolio-img\"><img src=\"https://cf.bstatic.com/static/img/theme-index/carousel_320x240/bg_farmhouses/9aeedf4b943c722367e5e901681463bf543c5afd.jpg\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"portfolio-info\">
                            <h4>App 3</h4>
                            <p>App</p>
                            <a href=\"assets/img/portfolio/portfolio-6.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                        <div class=\"portfolio-img\"><img src=\"https://cf.bstatic.com/static/img/theme-index/carousel_320x240/bg_self-catering/7a0939f5a5338faf255840e895953a522335434a.jpg\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"portfolio-info\">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <a href=\"assets/img/portfolio/portfolio-7.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 1\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                        <div class=\"portfolio-img\"><img src=\"https://cf.bstatic.com/static/img/theme-index/carousel_320x240/bg_aparthotel/10e092f390b128dcff92727912299eef7824b751.jpg\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"portfolio-info\">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <a href=\"assets/img/portfolio/portfolio-8.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                        <div class=\"portfolio-img\"><img src=\"https://cf.bstatic.com/static/img/theme-index/carousel_320x240/card-image-apartments_300/9f60235dc09a3ac3f0a93adbc901c61ecd1ce72e.jpg\" class=\"img-fluid\" alt=\"\"></div>
                        <div class=\"portfolio-info\">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href=\"assets/img/portfolio/portfolio-9.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->


\t<!-- ======= Contact Section ======= -->
\t<section id=\"contact\" class=\"contact\">
\t\t<div class=\"container\">

\t\t\t<div class=\"section-title\" data-aos=\"zoom-out\">
\t\t\t\t<h2>Contact</h2>
\t\t\t\t<p>Nous Contacter</p>
\t\t\t</div>

\t\t\t<div class=\"row mt-5\">

\t\t\t\t<div class=\"col-lg-4\" data-aos=\"fade-right\">
\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t<div class=\"address\">
\t\t\t\t\t\t\t<i class=\"bi bi-geo-alt\"></i>
\t\t\t\t\t\t\t<h4>Adresse:</h4>
\t\t\t\t\t\t\t<p>Dakar/Sénégal</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"email\">
\t\t\t\t\t\t\t<i class=\"bi bi-envelope\"></i>
\t\t\t\t\t\t\t<h4>Email:</h4>
\t\t\t\t\t\t\t<p>info@habitatsenegal.com</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"phone\">
\t\t\t\t\t\t\t<i class=\"bi bi-phone\"></i>
\t\t\t\t\t\t\t<h4>Téléphone:</h4>
\t\t\t\t\t\t\t<p>+221 33 8652356</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-8 mt-5 mt-lg-0\" data-aos=\"fade-left\">

\t\t\t\t\t<form action=\"forms/contact.php\" method=\"post\" role=\"form\" class=\"php-email-form\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 form-group mt-3 mt-md-0\">
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\" required></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"my-3\">
\t\t\t\t\t\t\t<div class=\"loading\">Loading</div>
\t\t\t\t\t\t\t<div class=\"error-message\"></div>
\t\t\t\t\t\t\t<div class=\"sent-message\">Your message has been sent. Thank you!</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<button type=\"submit\">Send Message</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>
\t</section>
\t<!-- End Contact Section -->


{% endblock %}
", "home/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/lab_symfony/templates/home/index.html.twig");
    }
}
