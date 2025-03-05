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
class __TwigTemplate_3787be6188d3260dbd9e4dd19d614098 extends Template
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
        .card-custom {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
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

    // line 71
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

        // line 72
        yield "<div class=\"container-xxl flex-grow-1 container-p-y\">
    <div class=\"card shadow mb-4\">
        <h5 class=\"card-header\">Liste des chambres</h5>
        <form action=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.recherchefront");
        yield "\" method=\"get\" class=\"mb-4 p-3\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher par numéro, position ou état...\" value=\"";
        // line 77
        yield (((array_key_exists("searchTerm", $context) &&  !(null === $context["searchTerm"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["searchTerm"], "html", null, true)) : (""));
        yield "\">
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"bx bx-search\"></i> Rechercher
                </button>
            </div>
        </form>
    </div>

    <div class=\"row\">
        ";
        // line 86
        $context["hasChambres"] = false;
        // line 87
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
            // line 88
            yield "            ";
            $context["hasChambres"] = true;
            // line 89
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"card card-custom\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Chambre ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "num", [], "any", false, false, false, 92), "html", null, true);
            yield "</h5>
                        <p class=\"card-text\">
                            <strong>Type:</strong> ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "type", [], "any", false, false, false, 94), "html", null, true);
            yield "<br>
                            <strong>Localisation:</strong> ";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "localisation", [], "any", false, false, false, 95), "html", null, true);
            yield "<br>
                            <strong>Service:</strong>
                            ";
            // line 97
            if (CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "position", [], "any", false, false, false, 97)) {
                // line 98
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.service", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "position", [], "any", false, false, false, 98), "id", [], "any", false, false, false, 98)]), "html", null, true);
                yield "\" class=\"text-decoration-none text-primary\">
                                    Bloc ";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "position", [], "any", false, false, false, 99), "nom", [], "any", false, false, false, 99), "html", null, true);
                yield "
                                </a>
                            ";
            } else {
                // line 102
                yield "                                <span class=\"text-muted\">Aucune</span>
                            ";
            }
            // line 104
            yield "                            <br>
                            <strong>Capacité:</strong> ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "capacite", [], "any", false, false, false, 105), "html", null, true);
            yield "<br>
                            <strong>État:</strong>
                            ";
            // line 107
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "active", [], "any", false, false, false, 107) == "disponible")) {
                // line 108
                yield "                                <span class=\"badge bg-success\">Disponible</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 109
$context["chambre"], "active", [], "any", false, false, false, 109) == "occupee")) {
                // line 110
                yield "                                <span class=\"badge bg-danger\">Occupée</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 111
$context["chambre"], "active", [], "any", false, false, false, 111) == "maintenance")) {
                // line 112
                yield "                                <span class=\"badge bg-warning\">Maintenance</span>
                            ";
            } else {
                // line 114
                yield "                                <span class=\"badge bg-secondary\">Inconnu</span>
                            ";
            }
            // line 116
            yield "                        </p>
                        <div class=\"d-flex justify-content-between\">
                            <a href=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.entretients", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 118)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm btn-custom\">
                                <i class=\"bx bx-wrench\"></i>
                            </a>
                            <a href=\"";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.visualisation", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 121)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm btn-custom\">
                                <i class=\"bx bx-cube\"></i>
                            </a>
                            <a href=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.lits", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 124)]), "html", null, true);
            yield "\" class=\"btn btn-success btn-sm btn-custom\">
                                <i class=\"bx bx-bed\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['chambre'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        yield "        ";
        if ( !(isset($context["hasChambres"]) || array_key_exists("hasChambres", $context) ? $context["hasChambres"] : (function () { throw new RuntimeError('Variable "hasChambres" does not exist.', 132, $this->source); })())) {
            // line 133
            yield "            <div class=\"col-12 text-center text-muted\">
                Aucune chambre disponible
            </div>
        ";
        }
        // line 137
        yield "    </div>
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

    // line 150
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

        // line 151
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 156
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
        return array (  376 => 156,  372 => 155,  368 => 154,  364 => 153,  360 => 152,  355 => 151,  342 => 150,  320 => 137,  314 => 133,  311 => 132,  297 => 124,  291 => 121,  285 => 118,  281 => 116,  277 => 114,  273 => 112,  271 => 111,  268 => 110,  266 => 109,  263 => 108,  261 => 107,  256 => 105,  253 => 104,  249 => 102,  243 => 99,  238 => 98,  236 => 97,  231 => 95,  227 => 94,  222 => 92,  217 => 89,  214 => 88,  209 => 87,  207 => 86,  195 => 77,  190 => 75,  185 => 72,  172 => 71,  111 => 20,  106 => 18,  102 => 17,  98 => 16,  93 => 14,  85 => 9,  78 => 4,  65 => 3,  42 => 1,);
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
        .card-custom {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
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
    <div class=\"card shadow mb-4\">
        <h5 class=\"card-header\">Liste des chambres</h5>
        <form action=\"{{ path('chambre.recherchefront') }}\" method=\"get\" class=\"mb-4 p-3\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher par numéro, position ou état...\" value=\"{{ searchTerm ?? '' }}\">
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"bx bx-search\"></i> Rechercher
                </button>
            </div>
        </form>
    </div>

    <div class=\"row\">
        {% set hasChambres = false %}
        {% for chambre in chambres %}
            {% set hasChambres = true %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"card card-custom\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Chambre {{ chambre.num }}</h5>
                        <p class=\"card-text\">
                            <strong>Type:</strong> {{ chambre.type }}<br>
                            <strong>Localisation:</strong> {{ chambre.localisation }}<br>
                            <strong>Service:</strong>
                            {% if chambre.position %}
                                <a href=\"{{ path('chambre.service', { id: chambre.position.id }) }}\" class=\"text-decoration-none text-primary\">
                                    Bloc {{ chambre.position.nom }}
                                </a>
                            {% else %}
                                <span class=\"text-muted\">Aucune</span>
                            {% endif %}
                            <br>
                            <strong>Capacité:</strong> {{ chambre.capacite }}<br>
                            <strong>État:</strong>
                            {% if chambre.active == 'disponible' %}
                                <span class=\"badge bg-success\">Disponible</span>
                            {% elseif chambre.active == 'occupee' %}
                                <span class=\"badge bg-danger\">Occupée</span>
                            {% elseif chambre.active == 'maintenance' %}
                                <span class=\"badge bg-warning\">Maintenance</span>
                            {% else %}
                                <span class=\"badge bg-secondary\">Inconnu</span>
                            {% endif %}
                        </p>
                        <div class=\"d-flex justify-content-between\">
                            <a href=\"{{ path('chambre.entretients', {id: chambre.id}) }}\" class=\"btn btn-warning btn-sm btn-custom\">
                                <i class=\"bx bx-wrench\"></i>
                            </a>
                            <a href=\"{{ path('chambre.visualisation', {id: chambre.id}) }}\" class=\"btn btn-info btn-sm btn-custom\">
                                <i class=\"bx bx-cube\"></i>
                            </a>
                            <a href=\"{{ path('chambre.lits', {id: chambre.id}) }}\" class=\"btn btn-success btn-sm btn-custom\">
                                <i class=\"bx bx-bed\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
        {% if not hasChambres %}
            <div class=\"col-12 text-center text-muted\">
                Aucune chambre disponible
            </div>
        {% endif %}
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
{% endblock %}", "chambre/frontoffice/index.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\chambre\\frontoffice\\index.html.twig");
    }
}
