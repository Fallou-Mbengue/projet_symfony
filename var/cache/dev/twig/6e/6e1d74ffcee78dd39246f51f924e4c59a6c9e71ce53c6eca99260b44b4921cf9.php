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

/* annonce/view.html.twig */
class __TwigTemplate_19e03a9c78750ae52baa67f8049fad1d6659afcf5dadb45c3cd48f6aa24f74ff extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "annonce/view.html.twig", 1);
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

        echo "Hello AnnonceController!
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
\t\t\t\t\t<h2 class=\"animate__animated animate__fadeInDown\">
\t\t\t\t\t\tDétail Annonce
\t\t\t\t\t</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Hero -->
\t<!-- ======= Blog Single Section ======= -->
\t<section id=\"blog\" class=\"blog\">
\t\t<div class=\"container\" data-aos=\"fade-up\">

\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-lg-8 entries\">

\t\t\t\t\t<article class=\"entry entry-single\">

\t\t\t\t\t\t<div class=\"entry-img\">
\t\t\t\t\t\t\t<img src=\"https://www.1000-annonces.com/appartement-a-vendre-a-dakar-plateau-WBPL1581092179_img20200207wa0258.webp\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h2 class=\"entry-title\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 40, $this->source); })()), "title", [], "any", false, false, false, 40), "html", null, true);
        echo "</font>
\t\t\t\t\t\t</h2>

\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t";
        // line 45
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 45, $this->source); })()), "description", [], "any", false, false, false, 45), 0, 500), "html", null, true);
        echo "</font>
\t\t\t\t\t\t</div>


\t\t\t\t\t</article>
\t\t\t\t\t<!-- End blog entry -->
\t\t\t<section>

\t\t\t\t<div class=\"blog-author d-flex align-items-center\">
\t\t\t\t\t\t\t<img src=\"assets/img/blog/blog-author.jpg\" class=\"rounded-circle float-left\" alt=\"\">
\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h3>Commentaires</h3>
\t\t\t\t\t\t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 57, $this->source); })()), "comments", [], "any", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 58
            echo "\t\t\t\t\t\t\t\t\tAuteur:
\t\t\t\t\t\t\t\t\t";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "autor", [], "any", false, false, false, 59), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\tContenue :
\t\t\t\t\t\t\t\t";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 62), "html", null, true);
            echo "
\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- End blog author bio -->

\t\t\t<div class=\"blog-comments\">


\t\t\t\t<div id=\"comment-1\" class=\"comment\">
\t\t\t\t\t<div class=\"d-flex\"></div>
\t\t\t\t</div>
\t\t\t\t<!-- End comment #1 -->

\t\t\t\t<div id=\"comment-2\" class=\"comment\">
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<div class=\"comment-img\"><img src=\"assets/img/blog/comments-2.jpg\" alt=\"\"></div>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"comment-reply-1\" class=\"comment comment-reply\">
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<div class=\"comment-img\"><img src=\"assets/img/blog/comments-3.jpg\" alt=\"\"></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div id=\"comment-reply-2\" class=\"comment comment-reply\">
\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<div class=\"comment-img\"><img src=\"assets/img/blog/comments-4.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End comment reply #2-->

\t\t\t\t\t</div>
\t\t\t\t\t<!-- End comment reply #1-->

\t\t\t\t</div>
\t\t\t\t<!-- End comment #2-->


\t\t\t\t<div id=\"comment-4\" class=\"comment\">
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<div class=\"comment-img\"><img src=\"assets/img/blog/comments-6.jpg\" alt=\"\"></div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- End comment #4 -->

\t\t\t\t<div class=\"reply-form\">
\t\t\t\t\t<h4>Pour plus d'information</h4>
\t\t\t\t\t<p>Your email address will not be published. Required fields are marked *
\t\t\t\t\t</p>
\t\t\t\t\t<form action=\"\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t<input name=\"name\" type=\"text\" class=\"form-control\" placeholder=\"Nom\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t<input name=\"email\" type=\"text\" class=\"form-control\" placeholder=\"Prénom\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col form-group\">
\t\t\t\t\t\t\t\t<input name=\"website\" type=\"text\" class=\"form-control\" placeholder=\"Email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col form-group\">
\t\t\t\t\t\t\t\t<textarea name=\"comment\" class=\"form-control\" placeholder=\"Commentaire\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Post Comment</button>

\t\t\t\t\t</form>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<!-- End blog comments -->

\t\t</div>
\t\t<!-- End blog entries list -->

\t\t<div class=\"col-lg-4\">

\t\t\t<div class=\"sidebar\">

\t\t\t\t<h3 class=\"sidebar-title\">Auteur</h3>

\t\t\t\t<h3 class=\"sidebar-title\"></h3>
\t\t\t\t<div class=\"sidebar-item categories\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Nom<span>:</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\">Prénom<span>:</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\">Adresse<span>:</span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!-- End sidebar categories-->


\t\t\t\t<div class=\"post-item clearfix\">
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div class=\"post-item clearfix\">
\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div class=\"post-item clearfix\">
\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div class=\"post-item clearfix\">
\t\t\t
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<!-- End sidebar recent posts-->

\t\t</div>
\t\t<!-- End sidebar -->

\t</div>
\t<!-- End blog sidebar -->

</div></div></section><!-- End Blog Single Section -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "annonce/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 65,  160 => 62,  154 => 59,  151 => 58,  147 => 57,  132 => 45,  124 => 40,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AnnonceController!
{% endblock %}

{% block body %}

\t<!-- ======= Hero Section ======= -->
\t<section id=\"hero\" class=\"d-flex flex-column justify-content-end align-items-center\">
\t\t<div
\t\t\tid=\"heroCarousel\" data-bs-interval=\"5000\" class=\"container carousel carousel-fade\" data-bs-ride=\"carousel\">

\t\t\t<!-- Slide 1 -->
\t\t\t<div class=\"carousel-item active mt-5\">
\t\t\t\t<div class=\"carousel-container\">
\t\t\t\t\t<h2 class=\"animate__animated animate__fadeInDown\">
\t\t\t\t\t\tDétail Annonce
\t\t\t\t\t</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Hero -->
\t<!-- ======= Blog Single Section ======= -->
\t<section id=\"blog\" class=\"blog\">
\t\t<div class=\"container\" data-aos=\"fade-up\">

\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-lg-8 entries\">

\t\t\t\t\t<article class=\"entry entry-single\">

\t\t\t\t\t\t<div class=\"entry-img\">
\t\t\t\t\t\t\t<img src=\"https://www.1000-annonces.com/appartement-a-vendre-a-dakar-plateau-WBPL1581092179_img20200207wa0258.webp\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h2 class=\"entry-title\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t{{annonce.title}}</font>
\t\t\t\t\t\t</h2>

\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t{{annonce.description|slice(0, 500)}}</font>
\t\t\t\t\t\t</div>


\t\t\t\t\t</article>
\t\t\t\t\t<!-- End blog entry -->
\t\t\t<section>

\t\t\t\t<div class=\"blog-author d-flex align-items-center\">
\t\t\t\t\t\t\t<img src=\"assets/img/blog/blog-author.jpg\" class=\"rounded-circle float-left\" alt=\"\">
\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h3>Commentaires</h3>
\t\t\t\t\t\t\t\t{% for comment in annonce.comments %}
\t\t\t\t\t\t\t\t\tAuteur:
\t\t\t\t\t\t\t\t\t{{comment.autor}}
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\tContenue :
\t\t\t\t\t\t\t\t{{comment.content}}
\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- End blog author bio -->

\t\t\t<div class=\"blog-comments\">


\t\t\t\t<div id=\"comment-1\" class=\"comment\">
\t\t\t\t\t<div class=\"d-flex\"></div>
\t\t\t\t</div>
\t\t\t\t<!-- End comment #1 -->

\t\t\t\t<div id=\"comment-2\" class=\"comment\">
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<div class=\"comment-img\"><img src=\"assets/img/blog/comments-2.jpg\" alt=\"\"></div>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"comment-reply-1\" class=\"comment comment-reply\">
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<div class=\"comment-img\"><img src=\"assets/img/blog/comments-3.jpg\" alt=\"\"></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div id=\"comment-reply-2\" class=\"comment comment-reply\">
\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<div class=\"comment-img\"><img src=\"assets/img/blog/comments-4.jpg\" alt=\"\"></div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End comment reply #2-->

\t\t\t\t\t</div>
\t\t\t\t\t<!-- End comment reply #1-->

\t\t\t\t</div>
\t\t\t\t<!-- End comment #2-->


\t\t\t\t<div id=\"comment-4\" class=\"comment\">
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<div class=\"comment-img\"><img src=\"assets/img/blog/comments-6.jpg\" alt=\"\"></div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- End comment #4 -->

\t\t\t\t<div class=\"reply-form\">
\t\t\t\t\t<h4>Pour plus d'information</h4>
\t\t\t\t\t<p>Your email address will not be published. Required fields are marked *
\t\t\t\t\t</p>
\t\t\t\t\t<form action=\"\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t<input name=\"name\" type=\"text\" class=\"form-control\" placeholder=\"Nom\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t<input name=\"email\" type=\"text\" class=\"form-control\" placeholder=\"Prénom\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col form-group\">
\t\t\t\t\t\t\t\t<input name=\"website\" type=\"text\" class=\"form-control\" placeholder=\"Email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col form-group\">
\t\t\t\t\t\t\t\t<textarea name=\"comment\" class=\"form-control\" placeholder=\"Commentaire\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Post Comment</button>

\t\t\t\t\t</form>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<!-- End blog comments -->

\t\t</div>
\t\t<!-- End blog entries list -->

\t\t<div class=\"col-lg-4\">

\t\t\t<div class=\"sidebar\">

\t\t\t\t<h3 class=\"sidebar-title\">Auteur</h3>

\t\t\t\t<h3 class=\"sidebar-title\"></h3>
\t\t\t\t<div class=\"sidebar-item categories\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Nom<span>:</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\">Prénom<span>:</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\">Adresse<span>:</span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!-- End sidebar categories-->


\t\t\t\t<div class=\"post-item clearfix\">
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div class=\"post-item clearfix\">
\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div class=\"post-item clearfix\">
\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div class=\"post-item clearfix\">
\t\t\t
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<!-- End sidebar recent posts-->

\t\t</div>
\t\t<!-- End sidebar -->

\t</div>
\t<!-- End blog sidebar -->

</div></div></section><!-- End Blog Single Section -->
{% endblock %}
", "annonce/view.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/lab_symfony/templates/annonce/view.html.twig");
    }
}
