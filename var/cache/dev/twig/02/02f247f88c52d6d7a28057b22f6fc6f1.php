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

/* responsable/dashboard.html.twig */
class __TwigTemplate_1257b8ec767033a77ae9b78d11c23072 extends Template
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
            'scripts' => [$this, 'block_scripts'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("chambre/baseNav.html.twig", "responsable/dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>CareConnect - Liste des lits</title>
    <meta name=\"description\" content=\"\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/favicon/favicon.ico"), "html", null, true);
        yield "\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
    <style>
        /* Animations CSS */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animated-card {
            animation: fadeIn 0.6s ease-out;
        }

        /* Effet de survol pour les cartes */
        .card-hover-effect {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-hover-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        /* Style pour les boutons */
        .btn-custom {
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Style pour les graphiques */
        .chart-container {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Style pour l'en-tête */
        .welcome-header {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            border-radius: 10px;
            padding: 20px;
        }

        .welcome-header h2 {
            font-weight: 700;
        }

        .welcome-header p {
            font-size: 1.1rem;
        }

        /* Style pour les statistiques */
        .stat-card {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .stat-card h5 {
            font-weight: 600;
        }

        .stat-card h2 {
            font-weight: 700;
        }

        .stat-card .avatar {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
        }

        /* Style pour les lits */
        .lit-card {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .lit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .lit-card h5 {
            font-weight: 600;
        }

        .lit-card .badge {
            font-size: 0.9rem;
            padding: 0.5em 0.75em;
        }

        /* Style pour les boutons d'action */
        .action-buttons .btn {
            margin: 5px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 121
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

        // line 122
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 126
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

        // line 127
        yield "    <div class=\"container-fluid py-4\">
        <!-- En-tête de bienvenue -->
        <div class=\"row mb-4\">
            <div class=\"col-12\">
                <div class=\"welcome-header animated-cardd\">
                    <h2 class=\"mb-1\">Bienvenue dans votre espace Responsable! 👋</h2>
                    <p class=\"mb-0\">Supervisez l'occupation des lits et des chambres de l'hôpital.</p>
                </div>
            </div>
        </div>

        <!-- Statistiques -->
        <div class=\"row mb-4\">
            <!-- Lits occupés -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"stat-card card-hover-effect animated-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between\">
                            <div>
                                <h5 class=\"card-title mb-0\">Lits Occupés</h5>
                                <h2 class=\"mt-2 mb-0 text-danger\">";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["litsOccupes"]) || array_key_exists("litsOccupes", $context) ? $context["litsOccupes"] : (function () { throw new RuntimeError('Variable "litsOccupes" does not exist.', 147, $this->source); })()), "html", null, true);
        yield "</h2>
                                <p class=\"text-muted mb-0\">sur ";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalLits"]) || array_key_exists("totalLits", $context) ? $context["totalLits"] : (function () { throw new RuntimeError('Variable "totalLits" does not exist.', 148, $this->source); })()), "html", null, true);
        yield " lits</p>
                            </div>
                            <div class=\"avatar bg-danger-subtle rounded\">
                                <i class=\"bx bx-bed fs-3 text-danger\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lits disponibles -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"stat-cardd card-hover-effect animated-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between\">
                            <div>
                                <h5 class=\"card-title mb-0\">Lits Disponibles</h5>
                                <h2 class=\"mt-2 mb-0 text-success\">";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["litsDisponibles"]) || array_key_exists("litsDisponibles", $context) ? $context["litsDisponibles"] : (function () { throw new RuntimeError('Variable "litsDisponibles" does not exist.', 165, $this->source); })()), "html", null, true);
        yield "</h2>
                                <p class=\"text-muted mb-0\">prêts à l'usage</p>
                            </div>
                            <div class=\"avatar bg-success-subtle rounded\">
                                <i class=\"bx bx-check-circle fs-3 text-success\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chambres occupées -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"stat-card card-hover-effect animated-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between\">
                            <div>
                                <h5 class=\"card-title mb-0\">Chambres Occupées</h5>
                                <h2 class=\"mt-2 mb-0 text-warning\">";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["chambresOccupees"]) || array_key_exists("chambresOccupees", $context) ? $context["chambresOccupees"] : (function () { throw new RuntimeError('Variable "chambresOccupees" does not exist.', 183, $this->source); })()), "html", null, true);
        yield "</h2>
                                <p class=\"text-muted mb-0\">sur ";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalChambres"]) || array_key_exists("totalChambres", $context) ? $context["totalChambres"] : (function () { throw new RuntimeError('Variable "totalChambres" does not exist.', 184, $this->source); })()), "html", null, true);
        yield " chambres</p>
                            </div>
                            <div class=\"avatar bg-warning-subtle rounded\">
                                <i class=\"bx bx-door-open fs-3 text-warning\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chambres disponibles -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"stat-card card-hover-effect animated-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between\">
                            <div>
                                <h5 class=\"card-title mb-0\">Chambres Disponibles</h5>
                                <h2 class=\"mt-2 mb-0 text-info\">";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["chambresDisponibles"]) || array_key_exists("chambresDisponibles", $context) ? $context["chambresDisponibles"] : (function () { throw new RuntimeError('Variable "chambresDisponibles" does not exist.', 201, $this->source); })()), "html", null, true);
        yield "</h2>
                                <p class=\"text-muted mb-0\">disponibles</p>
                            </div>
                            <div class=\"avatar bg-info-subtle rounded\">
                                <i class=\"bx bx-door-open fs-3 text-info\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section des lits en cartes -->
        <div class=\"card card-hover-effect animated-card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\">État des Lits</h5>
                <div>
                    <a href=\"";
        // line 218
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lit.new");
        yield "\" class=\"btn btn-primary btn-sm btn-custom\">
                        <i class=\"bx bx-plus me-1\"></i> Ajouter un lit
                    </a>
                    <a class=\"btn btn-success btn-sm btn-custom ms-2\" href=\"";
        // line 221
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_statistiques_csv");
        yield "\">
                        <i class=\"bx bx-download me-1\"></i> Exporter
                    </a>
                </div>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    ";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lits"]) || array_key_exists("lits", $context) ? $context["lits"] : (function () { throw new RuntimeError('Variable "lits" does not exist.', 228, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lit"]) {
            // line 229
            yield "                        <div class=\"col-md-4 mb-4\">
                            <div class=\"lit-card card-hover-effect animated-card\">
                                <div class=\"card-body text-center\">
                                    <h5 class=\"card-title\">Lit N° ";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "num", [], "any", false, false, false, 232), "html", null, true);
            yield "</h5>
                                    <p class=\"card-text\">Chambre : ";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "chambre", [], "any", false, false, false, 233), "num", [], "any", false, false, false, 233), "html", null, true);
            yield "</p>
                                    <p class=\"card-text\">
                                        ";
            // line 235
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "type", [], "any", false, false, false, 235) == "libre")) {
                // line 236
                yield "                                            <span class=\"badge bg-success\">Disponible</span>
                                        ";
            } else {
                // line 238
                yield "                                            <span class=\"badge bg-danger\">Occupé par ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "patient", [], "any", false, false, false, 238), "nom", [], "any", false, false, false, 238), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "patient", [], "any", false, false, false, 238), "prenom", [], "any", false, false, false, 238), "html", null, true);
                yield "</span>
                                        ";
            }
            // line 240
            yield "                                    </p>
                                    ";
            // line 241
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "type", [], "any", false, false, false, 241) == "libre")) {
                // line 242
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lit.affecter", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "id", [], "any", false, false, false, 242)]), "html", null, true);
                yield "\" class=\"btn btn-success btn-sm btn-custom\">
                                            <i class=\"fas fa-user-plus\"></i> Affecter
                                        </a>
                                    ";
            }
            // line 246
            yield "                                    <div class=\"d-flex justify-content-center mt-3 gap-2 action-buttons\">
                                        <a href=\"";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lit.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "id", [], "any", false, false, false, 247)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm btn-custom\">
                                            <i class=\"fas fa-edit\"></i> Modifier
                                        </a>
                                        <a href=\"javascript:void(0);\" onclick=\"confirmSuppression('";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lit.deletefront", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "id", [], "any", false, false, false, 250)]), "html", null, true);
            yield "')\" class=\"btn btn-danger btn-sm btn-custom\">
                                            <i class=\"fas fa-trash-alt\"></i> Supprimer
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        // line 261
        if (!$context['_iterated']) {
            // line 258
            yield "                        <div class=\"col-12 text-center text-muted\">
                            <p>Aucun lit disponible</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        yield "                </div>
            </div>
        </div>

        <!-- Graphiques -->
        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                <div class=\"chart-container card-hover-effect animated-card\">
                    <h5 class=\"card-title\">Statistiques des Chambres et Lits</h5>
                    <canvas id=\"statChart\"></canvas>
                </div>
            </div>
           
            </div>
        </div>
    </div>

    <script>
        // Confirmation de suppression avec SweetAlert2
        function confirmSuppression(deleteUrl) {
            Swal.fire({
                title: \"Supprimer ce lit ?\",
                text: \"Cette action est irréversible !\",
                icon: \"warning\",
                showCancelButton: true,
                confirmButtonColor: \"#e53935\",
                cancelButtonColor: \"#6c757d\",
                confirmButtonText: \"Oui, supprimer\",
                cancelButtonText: \"Annuler\",
                customClass: {
                    popup: 'animated bounceIn'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: \"Supprimé !\",
                        text: \"Le lit a été supprimé.\",
                        icon: \"success\",
                        customClass: {
                            popup: 'animated fadeOut'
                        }
                    }).then(() => {
                        window.location.href = deleteUrl;
                    });
                }
            });
        }

        // Initialisation des graphiques avec Chart.js
       document.addEventListener('DOMContentLoaded', function () {
    // Créer un seul canvas pour les deux graphiques
    const statChartCtx = document.getElementById('statChart').getContext('2d');
    
    // Utiliser Chart.js avec la configuration pour des graphiques multiples
    new Chart(statChartCtx, {
        type: 'bar',
        data: {
            labels: ['Statut'],
            datasets: [
                {
                    label: 'Chambres Disponibles',
                    data: [";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["chambresDisponibles"]) || array_key_exists("chambresDisponibles", $context) ? $context["chambresDisponibles"] : (function () { throw new RuntimeError('Variable "chambresDisponibles" does not exist.', 323, $this->source); })()), "html", null, true);
        yield "],
                    backgroundColor: '#4caf50',
                    stack: 'Chambres'
                },
                {
                    label: 'Chambres Occupées',
                    data: [";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["chambresOccupees"]) || array_key_exists("chambresOccupees", $context) ? $context["chambresOccupees"] : (function () { throw new RuntimeError('Variable "chambresOccupees" does not exist.', 329, $this->source); })()), "html", null, true);
        yield "],
                    backgroundColor: '#f44336',
                    stack: 'Chambres'
                },
                {
                    label: 'Chambres en Maintenance',
                    data: [";
        // line 335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["chambresMaintenance"]) || array_key_exists("chambresMaintenance", $context) ? $context["chambresMaintenance"] : (function () { throw new RuntimeError('Variable "chambresMaintenance" does not exist.', 335, $this->source); })()), "html", null, true);
        yield "],
                    backgroundColor: '#ff9800',
                    stack: 'Chambres'
                },
                {
                    label: 'Lits Disponibles',
                    data: [";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["litsDisponibles"]) || array_key_exists("litsDisponibles", $context) ? $context["litsDisponibles"] : (function () { throw new RuntimeError('Variable "litsDisponibles" does not exist.', 341, $this->source); })()), "html", null, true);
        yield "],
                    backgroundColor: '#81c784', // Vert plus clair
                    stack: 'Lits'
                },
                {
                    label: 'Lits Occupés',
                    data: [";
        // line 347
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["litsOccupes"]) || array_key_exists("litsOccupes", $context) ? $context["litsOccupes"] : (function () { throw new RuntimeError('Variable "litsOccupes" does not exist.', 347, $this->source); })()), "html", null, true);
        yield "],
                    backgroundColor: '#e57373', // Rouge plus clair
                    stack: 'Lits'
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' },
                title: { 
                    display: true, 
                    text: 'Statut des Chambres et des Lits',
                    font: { size: 16 }
                }
            },
            scales: {
                x: { stacked: false },
                y: { 
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Nombre'
                    }
                }
            }
        }
    });
});
    </script>
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
        return "responsable/dashboard.html.twig";
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
        return array (  551 => 347,  542 => 341,  533 => 335,  524 => 329,  515 => 323,  452 => 262,  443 => 258,  441 => 261,  429 => 250,  423 => 247,  420 => 246,  412 => 242,  410 => 241,  407 => 240,  399 => 238,  395 => 236,  393 => 235,  388 => 233,  384 => 232,  379 => 229,  374 => 228,  364 => 221,  358 => 218,  338 => 201,  318 => 184,  314 => 183,  293 => 165,  273 => 148,  269 => 147,  247 => 127,  234 => 126,  221 => 122,  208 => 121,  84 => 7,  78 => 3,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'chambre/baseNav.html.twig' %} 
{% block head %}
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>CareConnect - Liste des lits</title>
    <meta name=\"description\" content=\"\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('../assets/img/favicon/favicon.ico') }}\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
    <style>
        /* Animations CSS */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animated-card {
            animation: fadeIn 0.6s ease-out;
        }

        /* Effet de survol pour les cartes */
        .card-hover-effect {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-hover-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        /* Style pour les boutons */
        .btn-custom {
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Style pour les graphiques */
        .chart-container {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Style pour l'en-tête */
        .welcome-header {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            border-radius: 10px;
            padding: 20px;
        }

        .welcome-header h2 {
            font-weight: 700;
        }

        .welcome-header p {
            font-size: 1.1rem;
        }

        /* Style pour les statistiques */
        .stat-card {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .stat-card h5 {
            font-weight: 600;
        }

        .stat-card h2 {
            font-weight: 700;
        }

        .stat-card .avatar {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
        }

        /* Style pour les lits */
        .lit-card {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .lit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .lit-card h5 {
            font-weight: 600;
        }

        .lit-card .badge {
            font-size: 0.9rem;
            padding: 0.5em 0.75em;
        }

        /* Style pour les boutons d'action */
        .action-buttons .btn {
            margin: 5px;
        }
    </style>
{% endblock %}

{% block scripts %}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
{% endblock %}

{% block content %}
    <div class=\"container-fluid py-4\">
        <!-- En-tête de bienvenue -->
        <div class=\"row mb-4\">
            <div class=\"col-12\">
                <div class=\"welcome-header animated-cardd\">
                    <h2 class=\"mb-1\">Bienvenue dans votre espace Responsable! 👋</h2>
                    <p class=\"mb-0\">Supervisez l'occupation des lits et des chambres de l'hôpital.</p>
                </div>
            </div>
        </div>

        <!-- Statistiques -->
        <div class=\"row mb-4\">
            <!-- Lits occupés -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"stat-card card-hover-effect animated-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between\">
                            <div>
                                <h5 class=\"card-title mb-0\">Lits Occupés</h5>
                                <h2 class=\"mt-2 mb-0 text-danger\">{{ litsOccupes }}</h2>
                                <p class=\"text-muted mb-0\">sur {{ totalLits }} lits</p>
                            </div>
                            <div class=\"avatar bg-danger-subtle rounded\">
                                <i class=\"bx bx-bed fs-3 text-danger\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lits disponibles -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"stat-cardd card-hover-effect animated-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between\">
                            <div>
                                <h5 class=\"card-title mb-0\">Lits Disponibles</h5>
                                <h2 class=\"mt-2 mb-0 text-success\">{{ litsDisponibles }}</h2>
                                <p class=\"text-muted mb-0\">prêts à l'usage</p>
                            </div>
                            <div class=\"avatar bg-success-subtle rounded\">
                                <i class=\"bx bx-check-circle fs-3 text-success\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chambres occupées -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"stat-card card-hover-effect animated-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between\">
                            <div>
                                <h5 class=\"card-title mb-0\">Chambres Occupées</h5>
                                <h2 class=\"mt-2 mb-0 text-warning\">{{ chambresOccupees }}</h2>
                                <p class=\"text-muted mb-0\">sur {{ totalChambres }} chambres</p>
                            </div>
                            <div class=\"avatar bg-warning-subtle rounded\">
                                <i class=\"bx bx-door-open fs-3 text-warning\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chambres disponibles -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"stat-card card-hover-effect animated-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between\">
                            <div>
                                <h5 class=\"card-title mb-0\">Chambres Disponibles</h5>
                                <h2 class=\"mt-2 mb-0 text-info\">{{ chambresDisponibles }}</h2>
                                <p class=\"text-muted mb-0\">disponibles</p>
                            </div>
                            <div class=\"avatar bg-info-subtle rounded\">
                                <i class=\"bx bx-door-open fs-3 text-info\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section des lits en cartes -->
        <div class=\"card card-hover-effect animated-card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\">État des Lits</h5>
                <div>
                    <a href=\"{{ path('lit.new') }}\" class=\"btn btn-primary btn-sm btn-custom\">
                        <i class=\"bx bx-plus me-1\"></i> Ajouter un lit
                    </a>
                    <a class=\"btn btn-success btn-sm btn-custom ms-2\" href=\"{{ path('export_statistiques_csv') }}\">
                        <i class=\"bx bx-download me-1\"></i> Exporter
                    </a>
                </div>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    {% for lit in lits %}
                        <div class=\"col-md-4 mb-4\">
                            <div class=\"lit-card card-hover-effect animated-card\">
                                <div class=\"card-body text-center\">
                                    <h5 class=\"card-title\">Lit N° {{ lit.num }}</h5>
                                    <p class=\"card-text\">Chambre : {{ lit.chambre.num }}</p>
                                    <p class=\"card-text\">
                                        {% if lit.type == 'libre' %}
                                            <span class=\"badge bg-success\">Disponible</span>
                                        {% else %}
                                            <span class=\"badge bg-danger\">Occupé par {{ lit.patient.nom }} {{ lit.patient.prenom }}</span>
                                        {% endif %}
                                    </p>
                                    {% if lit.type == 'libre' %}
                                        <a href=\"{{ path('lit.affecter', { id: lit.id }) }}\" class=\"btn btn-success btn-sm btn-custom\">
                                            <i class=\"fas fa-user-plus\"></i> Affecter
                                        </a>
                                    {% endif %}
                                    <div class=\"d-flex justify-content-center mt-3 gap-2 action-buttons\">
                                        <a href=\"{{ path('lit.edit', { id: lit.id }) }}\" class=\"btn btn-warning btn-sm btn-custom\">
                                            <i class=\"fas fa-edit\"></i> Modifier
                                        </a>
                                        <a href=\"javascript:void(0);\" onclick=\"confirmSuppression('{{ path('lit.deletefront', { id: lit.id }) }}')\" class=\"btn btn-danger btn-sm btn-custom\">
                                            <i class=\"fas fa-trash-alt\"></i> Supprimer
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% else %}
                        <div class=\"col-12 text-center text-muted\">
                            <p>Aucun lit disponible</p>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>

        <!-- Graphiques -->
        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                <div class=\"chart-container card-hover-effect animated-card\">
                    <h5 class=\"card-title\">Statistiques des Chambres et Lits</h5>
                    <canvas id=\"statChart\"></canvas>
                </div>
            </div>
           
            </div>
        </div>
    </div>

    <script>
        // Confirmation de suppression avec SweetAlert2
        function confirmSuppression(deleteUrl) {
            Swal.fire({
                title: \"Supprimer ce lit ?\",
                text: \"Cette action est irréversible !\",
                icon: \"warning\",
                showCancelButton: true,
                confirmButtonColor: \"#e53935\",
                cancelButtonColor: \"#6c757d\",
                confirmButtonText: \"Oui, supprimer\",
                cancelButtonText: \"Annuler\",
                customClass: {
                    popup: 'animated bounceIn'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: \"Supprimé !\",
                        text: \"Le lit a été supprimé.\",
                        icon: \"success\",
                        customClass: {
                            popup: 'animated fadeOut'
                        }
                    }).then(() => {
                        window.location.href = deleteUrl;
                    });
                }
            });
        }

        // Initialisation des graphiques avec Chart.js
       document.addEventListener('DOMContentLoaded', function () {
    // Créer un seul canvas pour les deux graphiques
    const statChartCtx = document.getElementById('statChart').getContext('2d');
    
    // Utiliser Chart.js avec la configuration pour des graphiques multiples
    new Chart(statChartCtx, {
        type: 'bar',
        data: {
            labels: ['Statut'],
            datasets: [
                {
                    label: 'Chambres Disponibles',
                    data: [{{ chambresDisponibles }}],
                    backgroundColor: '#4caf50',
                    stack: 'Chambres'
                },
                {
                    label: 'Chambres Occupées',
                    data: [{{ chambresOccupees }}],
                    backgroundColor: '#f44336',
                    stack: 'Chambres'
                },
                {
                    label: 'Chambres en Maintenance',
                    data: [{{ chambresMaintenance }}],
                    backgroundColor: '#ff9800',
                    stack: 'Chambres'
                },
                {
                    label: 'Lits Disponibles',
                    data: [{{ litsDisponibles }}],
                    backgroundColor: '#81c784', // Vert plus clair
                    stack: 'Lits'
                },
                {
                    label: 'Lits Occupés',
                    data: [{{ litsOccupes }}],
                    backgroundColor: '#e57373', // Rouge plus clair
                    stack: 'Lits'
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' },
                title: { 
                    display: true, 
                    text: 'Statut des Chambres et des Lits',
                    font: { size: 16 }
                }
            },
            scales: {
                x: { stacked: false },
                y: { 
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Nombre'
                    }
                }
            }
        }
    });
});
    </script>
{% endblock %}", "responsable/dashboard.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\responsable\\dashboard.html.twig");
    }
}
