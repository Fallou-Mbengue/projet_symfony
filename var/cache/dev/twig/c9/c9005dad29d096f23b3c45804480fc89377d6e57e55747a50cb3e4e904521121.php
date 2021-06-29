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

/* annonce/index.html.twig */
class __TwigTemplate_18f7de06bbd117f62b5305bc931b3edb70adc957ce1e2dd3e2eb355199f5d85d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "annonce/index.html.twig", 1);
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
\t\t\t\t\t\tInformation Des Annonces
\t\t\t\t\t</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Hero -->

\t<div class=\"row\" style=\"margin-left:60px; margin-top: 50px\">
\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 27
            echo "\t\t\t<div class=\"card mb-3\" style=\"width: 23rem; margin-left: 20px\">
\t\t\t\t<h3 class=\"card-header\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"></font>
\t\t\t\t\t</font>
\t\t\t\t</h3>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "title", [], "any", false, false, false, 36), "html", null, true);
            echo "</font>
\t\t\t\t\t\t</font>
\t\t\t\t\t</h5>
\t\t\t\t\t<h6 class=\"card-subtitle text-muted\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "slug", [], "any", false, false, false, 41), "html", null, true);
            echo "</font>
\t\t\t\t\t\t</font>
\t\t\t\t\t</h6>
\t\t\t\t</div>
\t\t\t\t<img src=";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "image", [], "any", false, false, false, 45), "html", null, true);
            echo " class=\"card-img-top\" alt=\"...\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> ";
            // line 49
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 49), 0, 30), "html", null, true);
            echo "</font>
\t\t\t\t\t\t</font>
\t\t\t\t\t</p>
\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "price", [], "any", false, false, false, 55), "html", null, true);
            echo " Fcfa</font>
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "adress", [], "any", false, false, false, 60), "html", null, true);
            echo "</font>
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"></font>
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<a href=\"view/";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "\"> Voir Détail </a>
\t\t\t\t</div>

\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "annonce/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 74,  176 => 69,  164 => 60,  156 => 55,  147 => 49,  140 => 45,  133 => 41,  125 => 36,  114 => 27,  110 => 26,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
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
\t\t\t\t\t\tInformation Des Annonces
\t\t\t\t\t</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Hero -->

\t<div class=\"row\" style=\"margin-left:60px; margin-top: 50px\">
\t\t{% for annonce in annonces %}
\t\t\t<div class=\"card mb-3\" style=\"width: 23rem; margin-left: 20px\">
\t\t\t\t<h3 class=\"card-header\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"></font>
\t\t\t\t\t</font>
\t\t\t\t</h3>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> {{annonce.title}}</font>
\t\t\t\t\t\t</font>
\t\t\t\t\t</h5>
\t\t\t\t\t<h6 class=\"card-subtitle text-muted\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> {{annonce.slug}}</font>
\t\t\t\t\t\t</font>
\t\t\t\t\t</h6>
\t\t\t\t</div>
\t\t\t\t<img src={{annonce.image}} class=\"card-img-top\" alt=\"...\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> {{annonce.description|slice(0, 30)}}</font>
\t\t\t\t\t\t</font>
\t\t\t\t\t</p>
\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> {{annonce.price}} Fcfa</font>
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"> {{annonce.adress}}</font>
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\"></font>
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<a href=\"view/{{annonce.id}}\"> Voir Détail </a>
\t\t\t\t</div>

\t\t\t</div>
\t\t{% endfor %}

\t</div>

{% endblock %}
", "annonce/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/lab_symfony/templates/annonce/index.html.twig");
    }
}
