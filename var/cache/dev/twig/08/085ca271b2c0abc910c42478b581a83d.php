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
class __TwigTemplate_39e5a78363d98855a7a3826c91b83c1a extends Template
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

    // line 64
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

        // line 65
        yield " <div class=\"container-xxl flex-grow-1 container-p-y\">
        <div class=\"card shadow\">
            <h5 class=\"card-header\">Liste des chambres</h5>
             <form action=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.recherchefront");
        yield "\" method=\"get\" class=\"mb-4\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher par numéro, position ou état...\" value=\"";
        // line 70
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
                            <th>Numéro</th>
                            <th>Type</th>
                            <th>Localisation</th>
                            <th>Service</th>
                            <th>Capacité</th>
                            <th>État</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"table-border-bottom-0\">
                        ";
        // line 95
        $context["hasChambres"] = false;
        // line 96
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 96, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
            // line 97
            yield "                            ";
            $context["hasChambres"] = true;
            // line 98
            yield "                            <tr>
                                <td>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "num", [], "any", false, false, false, 99), "html", null, true);
            yield "</td>
                                <td>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "type", [], "any", false, false, false, 100), "html", null, true);
            yield "</td>
                                <td>";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "localisation", [], "any", false, false, false, 101), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 103
            if (CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "position", [], "any", false, false, false, 103)) {
                // line 104
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.service", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "position", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104)]), "html", null, true);
                yield "\" class=\"text-decoration-none text-primary\">
                                            Bloc ";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "position", [], "any", false, false, false, 105), "nom", [], "any", false, false, false, 105), "html", null, true);
                yield "
                                        </a>
                                    ";
            } else {
                // line 108
                yield "                                        <span class=\"text-muted\">Aucune</span>
                                    ";
            }
            // line 110
            yield "                                </td>
                                <td>";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "capacite", [], "any", false, false, false, 111), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 113
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "active", [], "any", false, false, false, 113) == "disponible")) {
                // line 114
                yield "                                        <span class=\"badge bg-success\">Disponible</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 115
$context["chambre"], "active", [], "any", false, false, false, 115) == "occupee")) {
                // line 116
                yield "                                        <span class=\"badge bg-danger\">Occupée</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 117
$context["chambre"], "active", [], "any", false, false, false, 117) == "maintenance")) {
                // line 118
                yield "                                        <span class=\"badge bg-warning\">Maintenance</span>
                                    ";
            } else {
                // line 120
                yield "                                        <span class=\"badge bg-secondary\">Inconnu</span>
                                    ";
            }
            // line 122
            yield "                                </td>
                                <td>
                                    <div class=\"d-flex justify-content-start\">
                                        <a href=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.entretientsfront", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 125)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm btn-custom me-2\">
                                            <i class=\"bx bx-wrench\"></i>
                                        </a>
                                        <a href=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.visualisation", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 128)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm btn-custom me-2\">
                                            <i class=\"bx bx-cube\"></i>
                                        </a>
                                        <a href=\"";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.litsfront", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 131)]), "html", null, true);
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
        // line 139
        yield "                        ";
        if ( !(isset($context["hasChambres"]) || array_key_exists("hasChambres", $context) ? $context["hasChambres"] : (function () { throw new RuntimeError('Variable "hasChambres" does not exist.', 139, $this->source); })())) {
            // line 140
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center text-muted\">Aucune chambre disponible</td>
                            </tr>
                        ";
        }
        // line 144
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

    // line 162
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

        // line 163
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 168
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
        return array (  388 => 168,  384 => 167,  380 => 166,  376 => 165,  372 => 164,  367 => 163,  354 => 162,  327 => 144,  321 => 140,  318 => 139,  304 => 131,  298 => 128,  292 => 125,  287 => 122,  283 => 120,  279 => 118,  277 => 117,  274 => 116,  272 => 115,  269 => 114,  267 => 113,  262 => 111,  259 => 110,  255 => 108,  249 => 105,  244 => 104,  242 => 103,  237 => 101,  233 => 100,  229 => 99,  226 => 98,  223 => 97,  218 => 96,  216 => 95,  188 => 70,  183 => 68,  178 => 65,  165 => 64,  111 => 20,  106 => 18,  102 => 17,  98 => 16,  93 => 14,  85 => 9,  78 => 4,  65 => 3,  42 => 1,);
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
                            <th>Numéro</th>
                            <th>Type</th>
                            <th>Localisation</th>
                            <th>Service</th>
                            <th>Capacité</th>
                            <th>État</th>
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
