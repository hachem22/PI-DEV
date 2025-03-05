<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* chambre/frontoffice/index.html.twig */
class __TwigTemplate_caea68ebac5a258dfb3d24498bc41089 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "chambre/baseNav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/frontoffice/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/frontoffice/index.html.twig"));

        $this->parent = $this->loadTemplate("chambre/baseNav.html.twig", "chambre/frontoffice/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        yield "    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>CareConnect - Liste des chambres</title>
    <meta name=\"description\" content=\"\" />
    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/favicon/favicon.ico"), "html", null, true);
        yield "\" />
    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/fonts/boxicons.css"), "html", null, true);
        yield "\" />
    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/css/core.css"), "html", null, true);
        yield "\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/css/theme-default.css"), "html", null, true);
        yield "\" class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/css/demo.css"), "html", null, true);
        yield "\" />
    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
    <style>
    th a {
    text-decoration: none;
    color: inherit;
}

th a:hover {
    color: #007bff;
}

th a::after {
    margin-left: 5px;
    font-size: 0.8em;
}
        body {
            background-color: #f8f9fa;
            font-family: 'Public Sans', sans-serif;
        }
        .container-xxl {
            margin-top: 30px;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
        }
        .table th {
            background-color: #e9ecef;
        }
        .badge {
            font-size: 0.9rem;
        }
        .text-muted {
            color: #6c757d;
        }
        .btn-custom {
            border-radius: 20px;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            transform: scale(1.1);
            box-shadow: 0 0 8px rgba(0, 234, 255, 0.4);
        }
        .patient-occupe {
            color: red;
            font-weight: bold;
        }
        .text-center-muted {
            color: #6c757d;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 78
        yield " <div class=\"container-xxl flex-grow-1 container-p-y\">
        <div class=\"card shadow\">
            <h5 class=\"card-header\">Liste des chambres</h5>
             <form action=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.recherchefront");
        yield "\" method=\"get\" class=\"mb-4\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher par numéro, position ou état...\" value=\"";
        // line 83
        yield (((array_key_exists("searchTerm", $context) &&  !(null === $context["searchTerm"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["searchTerm"], "html", null, true)) : (""));
        yield "\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"bx bx-search\"></i> Rechercher
                        </button>
                    </div>
                </form>
            </div>
            </div>
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <div class=\"card shadow\">
            <h5 class=\"card-header\">Liste des chambres</h5>
            <div class=\"table-responsive\">
                <table class=\"table table-bordered table-striped\">
                    <thead>
                    <tr>
                        <th>
                            <a href=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.tri", ["sortBy" => "num", "sortDirection" => (((((((        // line 101
array_key_exists("sortBy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 101, $this->source); })()), "")) : ("")) == "num") && ((array_key_exists("sortDirection", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortDirection"]) || array_key_exists("sortDirection", $context) ? $context["sortDirection"] : (function () { throw new RuntimeError('Variable "sortDirection" does not exist.', 101, $this->source); })()), "ASC")) : ("ASC"))) == "ASC")) ? ("DESC") : ("ASC")), "search" => ((        // line 102
array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 102, $this->source); })()), "")) : ("")), "order" => ((        // line 103
array_key_exists("order", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 103, $this->source); })()), "ASC")) : ("ASC"))]), "html", null, true);
        // line 104
        yield "\">
                                Numéro 
                                ";
        // line 106
        if ((((array_key_exists("sortBy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 106, $this->source); })()), "")) : ("")) == "num")) {
            // line 107
            yield "                                    <i class=\"fas fa-sort-";
            yield (((((array_key_exists("sortDirection", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortDirection"]) || array_key_exists("sortDirection", $context) ? $context["sortDirection"] : (function () { throw new RuntimeError('Variable "sortDirection" does not exist.', 107, $this->source); })()), "ASC")) : ("ASC")) == "ASC")) ? ("up") : ("down"));
            yield "\"></i>
                                ";
        }
        // line 109
        yield "                            </a>
                        </th>
                        <th>
            <a href=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.tri", ["sortBy" => "type", "sortDirection" => (((((((        // line 114
array_key_exists("sortBy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 114, $this->source); })()), "")) : ("")) == "type") && ((array_key_exists("sortDirection", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortDirection"]) || array_key_exists("sortDirection", $context) ? $context["sortDirection"] : (function () { throw new RuntimeError('Variable "sortDirection" does not exist.', 114, $this->source); })()), "ASC")) : ("ASC"))) == "ASC")) ? ("DESC") : ("ASC")), "search" => ((        // line 115
array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 115, $this->source); })()), "")) : ("")), "order" => ((        // line 116
array_key_exists("order", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 116, $this->source); })()), "ASC")) : ("ASC"))]), "html", null, true);
        // line 117
        yield "\">
                Type
                ";
        // line 119
        if ((((array_key_exists("sortBy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 119, $this->source); })()), "")) : ("")) == "type")) {
            // line 120
            yield "                    <i class=\"fas fa-sort-";
            yield (((((array_key_exists("sortDirection", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortDirection"]) || array_key_exists("sortDirection", $context) ? $context["sortDirection"] : (function () { throw new RuntimeError('Variable "sortDirection" does not exist.', 120, $this->source); })()), "ASC")) : ("ASC")) == "ASC")) ? ("up") : ("down"));
            yield "\"></i>
                ";
        }
        // line 122
        yield "            </a>
        </th>
        <th>
            <a href=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.tri", ["sortBy" => "localisation", "sortDirection" => (((((((        // line 127
array_key_exists("sortBy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 127, $this->source); })()), "")) : ("")) == "localisation") && ((array_key_exists("sortDirection", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortDirection"]) || array_key_exists("sortDirection", $context) ? $context["sortDirection"] : (function () { throw new RuntimeError('Variable "sortDirection" does not exist.', 127, $this->source); })()), "ASC")) : ("ASC"))) == "ASC")) ? ("DESC") : ("ASC")), "search" => ((        // line 128
array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 128, $this->source); })()), "")) : ("")), "order" => ((        // line 129
array_key_exists("order", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 129, $this->source); })()), "ASC")) : ("ASC"))]), "html", null, true);
        // line 130
        yield "\">
                Localisation
                ";
        // line 132
        if ((((array_key_exists("sortBy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 132, $this->source); })()), "")) : ("")) == "localisation")) {
            // line 133
            yield "                    <i class=\"fas fa-sort-";
            yield (((((array_key_exists("sortDirection", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortDirection"]) || array_key_exists("sortDirection", $context) ? $context["sortDirection"] : (function () { throw new RuntimeError('Variable "sortDirection" does not exist.', 133, $this->source); })()), "ASC")) : ("ASC")) == "ASC")) ? ("up") : ("down"));
            yield "\"></i>
                ";
        }
        // line 135
        yield "            </a>
        </th>
        <th>
            <a href=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.tri", ["sortBy" => "position", "sortDirection" => (((((((        // line 140
array_key_exists("sortBy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 140, $this->source); })()), "")) : ("")) == "position") && ((array_key_exists("sortDirection", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortDirection"]) || array_key_exists("sortDirection", $context) ? $context["sortDirection"] : (function () { throw new RuntimeError('Variable "sortDirection" does not exist.', 140, $this->source); })()), "ASC")) : ("ASC"))) == "ASC")) ? ("DESC") : ("ASC")), "search" => ((        // line 141
array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 141, $this->source); })()), "")) : ("")), "order" => ((        // line 142
array_key_exists("order", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 142, $this->source); })()), "ASC")) : ("ASC"))]), "html", null, true);
        // line 143
        yield "\">
                Position
                ";
        // line 145
        if ((((array_key_exists("sortBy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 145, $this->source); })()), "")) : ("")) == "position")) {
            // line 146
            yield "                    <i class=\"fas fa-sort-";
            yield (((((array_key_exists("sortDirection", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortDirection"]) || array_key_exists("sortDirection", $context) ? $context["sortDirection"] : (function () { throw new RuntimeError('Variable "sortDirection" does not exist.', 146, $this->source); })()), "ASC")) : ("ASC")) == "ASC")) ? ("up") : ("down"));
            yield "\"></i>
                ";
        }
        // line 148
        yield "            </a>
        </th>
        <th>
            <a href=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.tri", ["sortBy" => "capacite", "sortDirection" => (((((((        // line 153
array_key_exists("sortBy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 153, $this->source); })()), "")) : ("")) == "capacite") && ((array_key_exists("sortDirection", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortDirection"]) || array_key_exists("sortDirection", $context) ? $context["sortDirection"] : (function () { throw new RuntimeError('Variable "sortDirection" does not exist.', 153, $this->source); })()), "ASC")) : ("ASC"))) == "ASC")) ? ("DESC") : ("ASC")), "search" => ((        // line 154
array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 154, $this->source); })()), "")) : ("")), "order" => ((        // line 155
array_key_exists("order", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 155, $this->source); })()), "ASC")) : ("ASC"))]), "html", null, true);
        // line 156
        yield "\">
                Capacité
                ";
        // line 158
        if ((((array_key_exists("sortBy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 158, $this->source); })()), "")) : ("")) == "capacite")) {
            // line 159
            yield "                    <i class=\"fas fa-sort-";
            yield (((((array_key_exists("sortDirection", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortDirection"]) || array_key_exists("sortDirection", $context) ? $context["sortDirection"] : (function () { throw new RuntimeError('Variable "sortDirection" does not exist.', 159, $this->source); })()), "ASC")) : ("ASC")) == "ASC")) ? ("up") : ("down"));
            yield "\"></i>
                ";
        }
        // line 161
        yield "            </a>
        </th>
        <th>
            <a href=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.tri", ["sortBy" => "etat", "sortDirection" => (((((((        // line 166
array_key_exists("sortBy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 166, $this->source); })()), "")) : ("")) == "etat") && ((array_key_exists("sortDirection", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortDirection"]) || array_key_exists("sortDirection", $context) ? $context["sortDirection"] : (function () { throw new RuntimeError('Variable "sortDirection" does not exist.', 166, $this->source); })()), "ASC")) : ("ASC"))) == "ASC")) ? ("DESC") : ("ASC")), "search" => ((        // line 167
array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 167, $this->source); })()), "")) : ("")), "order" => ((        // line 168
array_key_exists("order", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 168, $this->source); })()), "ASC")) : ("ASC"))]), "html", null, true);
        // line 169
        yield "\">
                État
                ";
        // line 171
        if ((((array_key_exists("sortBy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 171, $this->source); })()), "")) : ("")) == "etat")) {
            // line 172
            yield "                    <i class=\"fas fa-sort-";
            yield (((((array_key_exists("sortDirection", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortDirection"]) || array_key_exists("sortDirection", $context) ? $context["sortDirection"] : (function () { throw new RuntimeError('Variable "sortDirection" does not exist.', 172, $this->source); })()), "ASC")) : ("ASC")) == "ASC")) ? ("up") : ("down"));
            yield "\"></i>
                ";
        }
        // line 174
        yield "            </a>
        </th>

                        <th>Actions</th>
                    </tr>
                </thead>
                    <tbody class=\"table-border-bottom-0\">
                        ";
        // line 181
        $context["hasChambres"] = false;
        // line 182
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 182, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
            // line 183
            yield "                            ";
            $context["hasChambres"] = true;
            // line 184
            yield "                            <tr>
                                <td>";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "num", [], "any", false, false, false, 185), "html", null, true);
            yield "</td>
                                <td>";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "type", [], "any", false, false, false, 186), "html", null, true);
            yield "</td>
                                <td>";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "localisation", [], "any", false, false, false, 187), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 189
            if (CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "position", [], "any", false, false, false, 189)) {
                // line 190
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.service", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "position", [], "any", false, false, false, 190), "id", [], "any", false, false, false, 190)]), "html", null, true);
                yield "\" class=\"text-decoration-none text-primary\">
                                            Bloc ";
                // line 191
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "position", [], "any", false, false, false, 191), "nom", [], "any", false, false, false, 191), "html", null, true);
                yield "
                                        </a>
                                    ";
            } else {
                // line 194
                yield "                                        <span class=\"text-muted\">Aucune</span>
                                    ";
            }
            // line 196
            yield "                                </td>
                                <td>";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "capacite", [], "any", false, false, false, 197), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 199
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "active", [], "any", false, false, false, 199) == "disponible")) {
                // line 200
                yield "                                        <span class=\"badge bg-success\">Disponible</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 201
$context["chambre"], "active", [], "any", false, false, false, 201) == "occupee")) {
                // line 202
                yield "                                        <span class=\"badge bg-danger\">Occupée</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 203
$context["chambre"], "active", [], "any", false, false, false, 203) == "maintenance")) {
                // line 204
                yield "                                        <span class=\"badge bg-warning\">Maintenance</span>
                                    ";
            } else {
                // line 206
                yield "                                        <span class=\"badge bg-secondary\">Inconnu</span>
                                    ";
            }
            // line 208
            yield "                                </td>
                                <td>
                                    <div class=\"d-flex justify-content-start\">
                                        <a href=\"";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.entretientsfront", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 211)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm btn-custom me-2\">
                                            <i class=\"bx bx-wrench\"></i>
                                        </a>
                                        <a href=\"";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.visualisation", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 214)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm btn-custom me-2\">
                                            <i class=\"bx bx-cube\"></i>
                                        </a>
                                        <a href=\"";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.litsfront", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 217)]), "html", null, true);
            yield "\" class=\"btn btn-success btn-sm btn-custom me-2\">
                                            <i class=\"bx bx-bed\"></i>
                                        </a>
                                      
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['chambre'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        yield "                        ";
        if ( !(isset($context["hasChambres"]) || array_key_exists("hasChambres", $context) ? $context["hasChambres"] : (function () { throw new RuntimeError('Variable "hasChambres" does not exist.', 225, $this->source); })())) {
            // line 226
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center text-muted\">Aucune chambre disponible</td>
                            </tr>
                        ";
        }
        // line 230
        yield "                    </tbody>
                </table>
            </div>
        </div>

        
    </div>

    <script>
        function confirmDelete() {
            return confirm(\"Êtes-vous sûr de vouloir supprimer cette chambre ?\");
        }
    </script>

    <!-- SweetAlert2 pour des alertes modernes -->
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 248
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 249
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/js/main.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chambre/frontoffice/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  528 => 254,  524 => 253,  520 => 252,  516 => 251,  512 => 250,  507 => 249,  494 => 248,  467 => 230,  461 => 226,  458 => 225,  444 => 217,  438 => 214,  432 => 211,  427 => 208,  423 => 206,  419 => 204,  417 => 203,  414 => 202,  412 => 201,  409 => 200,  407 => 199,  402 => 197,  399 => 196,  395 => 194,  389 => 191,  384 => 190,  382 => 189,  377 => 187,  373 => 186,  369 => 185,  366 => 184,  363 => 183,  358 => 182,  356 => 181,  347 => 174,  341 => 172,  339 => 171,  335 => 169,  333 => 168,  332 => 167,  331 => 166,  330 => 164,  325 => 161,  319 => 159,  317 => 158,  313 => 156,  311 => 155,  310 => 154,  309 => 153,  308 => 151,  303 => 148,  297 => 146,  295 => 145,  291 => 143,  289 => 142,  288 => 141,  287 => 140,  286 => 138,  281 => 135,  275 => 133,  273 => 132,  269 => 130,  267 => 129,  266 => 128,  265 => 127,  264 => 125,  259 => 122,  253 => 120,  251 => 119,  247 => 117,  245 => 116,  244 => 115,  243 => 114,  242 => 112,  237 => 109,  231 => 107,  229 => 106,  225 => 104,  223 => 103,  222 => 102,  221 => 101,  220 => 99,  201 => 83,  196 => 81,  191 => 78,  178 => 77,  111 => 20,  106 => 18,  102 => 17,  98 => 16,  93 => 14,  85 => 9,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"chambre/baseNav.html.twig\" %}

{% block head %}
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>CareConnect - Liste des chambres</title>
    <meta name=\"description\" content=\"\" />
    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('../assets/img/favicon/favicon.ico') }}\" />
    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/fonts/boxicons.css') }}\" />
    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/css/core.css') }}\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/css/theme-default.css') }}\" class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/css/demo.css') }}\" />
    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
    <style>
    th a {
    text-decoration: none;
    color: inherit;
}

th a:hover {
    color: #007bff;
}

th a::after {
    margin-left: 5px;
    font-size: 0.8em;
}
        body {
            background-color: #f8f9fa;
            font-family: 'Public Sans', sans-serif;
        }
        .container-xxl {
            margin-top: 30px;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
        }
        .table th {
            background-color: #e9ecef;
        }
        .badge {
            font-size: 0.9rem;
        }
        .text-muted {
            color: #6c757d;
        }
        .btn-custom {
            border-radius: 20px;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            transform: scale(1.1);
            box-shadow: 0 0 8px rgba(0, 234, 255, 0.4);
        }
        .patient-occupe {
            color: red;
            font-weight: bold;
        }
        .text-center-muted {
            color: #6c757d;
        }
    </style>
{% endblock %}

 {% block content %}
 <div class=\"container-xxl flex-grow-1 container-p-y\">
        <div class=\"card shadow\">
            <h5 class=\"card-header\">Liste des chambres</h5>
             <form action=\"{{ path('chambre.recherchefront') }}\" method=\"get\" class=\"mb-4\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher par numéro, position ou état...\" value=\"{{ searchTerm ?? '' }}\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"bx bx-search\"></i> Rechercher
                        </button>
                    </div>
                </form>
            </div>
            </div>
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <div class=\"card shadow\">
            <h5 class=\"card-header\">Liste des chambres</h5>
            <div class=\"table-responsive\">
                <table class=\"table table-bordered table-striped\">
                    <thead>
                    <tr>
                        <th>
                            <a href=\"{{ path('chambre.tri', {
                                'sortBy': 'num', 
                                'sortDirection': (sortBy|default('') == 'num' and sortDirection|default('ASC')) == 'ASC' ? 'DESC' : 'ASC',
                                 'search': searchTerm|default(''),
                                 'order': order|default('ASC')
                            }) }}\">
                                Numéro 
                                {% if sortBy|default('') == 'num' %}
                                    <i class=\"fas fa-sort-{{ sortDirection|default('ASC') == 'ASC' ? 'up' : 'down' }}\"></i>
                                {% endif %}
                            </a>
                        </th>
                        <th>
            <a href=\"{{ path('chambre.tri', {
                'sortBy': 'type', 
                'sortDirection': (sortBy|default('') == 'type' and sortDirection|default('ASC')) == 'ASC' ? 'DESC' : 'ASC',
                'search': searchTerm|default(''),
                'order': order|default('ASC')
            }) }}\">
                Type
                {% if sortBy|default('') == 'type' %}
                    <i class=\"fas fa-sort-{{ sortDirection|default('ASC') == 'ASC' ? 'up' : 'down' }}\"></i>
                {% endif %}
            </a>
        </th>
        <th>
            <a href=\"{{ path('chambre.tri', {
                'sortBy': 'localisation', 
                'sortDirection': (sortBy|default('') == 'localisation' and sortDirection|default('ASC')) == 'ASC' ? 'DESC' : 'ASC',
                'search': searchTerm|default(''),
                'order': order|default('ASC')
            }) }}\">
                Localisation
                {% if sortBy|default('') == 'localisation' %}
                    <i class=\"fas fa-sort-{{ sortDirection|default('ASC') == 'ASC' ? 'up' : 'down' }}\"></i>
                {% endif %}
            </a>
        </th>
        <th>
            <a href=\"{{ path('chambre.tri', {
                'sortBy': 'position', 
                'sortDirection': (sortBy|default('') == 'position' and sortDirection|default('ASC')) == 'ASC' ? 'DESC' : 'ASC',
                'search': searchTerm|default(''),
                'order': order|default('ASC')
            }) }}\">
                Position
                {% if sortBy|default('') == 'position' %}
                    <i class=\"fas fa-sort-{{ sortDirection|default('ASC') == 'ASC' ? 'up' : 'down' }}\"></i>
                {% endif %}
            </a>
        </th>
        <th>
            <a href=\"{{ path('chambre.tri', {
                'sortBy': 'capacite', 
                'sortDirection': (sortBy|default('') == 'capacite' and sortDirection|default('ASC')) == 'ASC' ? 'DESC' : 'ASC',
                'search': searchTerm|default(''),
                'order': order|default('ASC')
            }) }}\">
                Capacité
                {% if sortBy|default('') == 'capacite' %}
                    <i class=\"fas fa-sort-{{ sortDirection|default('ASC') == 'ASC' ? 'up' : 'down' }}\"></i>
                {% endif %}
            </a>
        </th>
        <th>
            <a href=\"{{ path('chambre.tri', {
                'sortBy': 'etat', 
                'sortDirection': (sortBy|default('') == 'etat' and sortDirection|default('ASC')) == 'ASC' ? 'DESC' : 'ASC',
                'search': searchTerm|default(''),
                'order': order|default('ASC')
            }) }}\">
                État
                {% if sortBy|default('') == 'etat' %}
                    <i class=\"fas fa-sort-{{ sortDirection|default('ASC') == 'ASC' ? 'up' : 'down' }}\"></i>
                {% endif %}
            </a>
        </th>

                        <th>Actions</th>
                    </tr>
                </thead>
                    <tbody class=\"table-border-bottom-0\">
                        {% set hasChambres = false %}
                        {% for chambre in chambres %}
                            {% set hasChambres = true %}
                            <tr>
                                <td>{{ chambre.num }}</td>
                                <td>{{ chambre.type }}</td>
                                <td>{{ chambre.localisation }}</td>
                                <td>
                                    {% if chambre.position %}
                                        <a href=\"{{ path('chambre.service', { id: chambre.position.id }) }}\" class=\"text-decoration-none text-primary\">
                                            Bloc {{ chambre.position.nom }}
                                        </a>
                                    {% else %}
                                        <span class=\"text-muted\">Aucune</span>
                                    {% endif %}
                                </td>
                                <td>{{ chambre.capacite }}</td>
                                <td>
                                    {% if chambre.active == 'disponible' %}
                                        <span class=\"badge bg-success\">Disponible</span>
                                    {% elseif chambre.active == 'occupee' %}
                                        <span class=\"badge bg-danger\">Occupée</span>
                                    {% elseif chambre.active == 'maintenance' %}
                                        <span class=\"badge bg-warning\">Maintenance</span>
                                    {% else %}
                                        <span class=\"badge bg-secondary\">Inconnu</span>
                                    {% endif %}
                                </td>
                                <td>
                                    <div class=\"d-flex justify-content-start\">
                                        <a href=\"{{ path('chambre.entretientsfront', {id: chambre.id}) }}\" class=\"btn btn-warning btn-sm btn-custom me-2\">
                                            <i class=\"bx bx-wrench\"></i>
                                        </a>
                                        <a href=\"{{ path('chambre.visualisation', {id: chambre.id}) }}\" class=\"btn btn-info btn-sm btn-custom me-2\">
                                            <i class=\"bx bx-cube\"></i>
                                        </a>
                                        <a href=\"{{ path('chambre.litsfront', {id: chambre.id}) }}\" class=\"btn btn-success btn-sm btn-custom me-2\">
                                            <i class=\"bx bx-bed\"></i>
                                        </a>
                                      
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                        {% if not hasChambres %}
                            <tr>
                                <td colspan=\"7\" class=\"text-center text-muted\">Aucune chambre disponible</td>
                            </tr>
                        {% endif %}
                    </tbody>
                </table>
            </div>
        </div>

        
    </div>

    <script>
        function confirmDelete() {
            return confirm(\"Êtes-vous sûr de vouloir supprimer cette chambre ?\");
        }
    </script>

    <!-- SweetAlert2 pour des alertes modernes -->
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
{% endblock %}

{% block scripts %}
    <script src=\"{{ asset('../assets/vendor/libs/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('../assets/vendor/libs/popper/popper.js') }}\"></script>
    <script src=\"{{ asset('../assets/vendor/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
    <script src=\"{{ asset('../assets/vendor/js/menu.js') }}\"></script>
    <script src=\"{{ asset('../assets/js/main.js') }}\"></script>
{% endblock %}
", "chambre/frontoffice/index.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\chambre\\frontoffice\\index.html.twig");
    }
}
