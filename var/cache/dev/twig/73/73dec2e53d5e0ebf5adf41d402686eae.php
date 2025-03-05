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

/* lit/index.html.twig */
class __TwigTemplate_261e3dd4bc4f07116a7a75a202afaa60 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lit/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lit/index.html.twig"));

        // line 1
        yield "

";
        // line 3
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 63
        yield "
";
        // line 64
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 150
        yield "
";
        // line 151
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
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
    <title>CareConnect - Liste des lits</title>
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 65
        yield "    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <div class=\"card shadow\">
            <h5 class=\"card-header\">Liste des lits</h5>
            <div class=\"table-responsive\">
                <table class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th><i class=\"fas fa-hashtag\"></i> Numéro</th>
                            <th><i class=\"fas fa-door-open\"></i> Chambre</th>
                            <th><i class=\"fas fa-user-plus\"></i> Patient</th>
                            <th><i class=\"fas fa-edit\"></i> Modifier</th>
                            <th><i class=\"fas fa-trash-alt\"></i> Supprimer</th>
                        </tr>
                    </thead>
                    <tbody class=\"table-border-bottom-0\">
                        ";
        // line 80
        $context["hasLits"] = false;
        // line 81
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lits"]) || array_key_exists("lits", $context) ? $context["lits"] : (function () { throw new RuntimeError('Variable "lits" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lit"]) {
            // line 82
            yield "                            ";
            $context["hasLits"] = true;
            // line 83
            yield "                            <tr>
                                <td>";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "num", [], "any", false, false, false, 84), "html", null, true);
            yield "</td>
                                <td>";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "chambre", [], "any", false, false, false, 85), "num", [], "any", false, false, false, 85), "html", null, true);
            yield "</td>
                                <td>
    ";
            // line 87
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "type", [], "any", false, false, false, 87) == "libre")) {
                // line 88
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lit.affecter", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "id", [], "any", false, false, false, 88)]), "html", null, true);
                yield "\" class=\"btn btn-success btn-sm btn-custom\">
            <i class=\"fas fa-user-plus\"></i> Affecter
        </a>
    ";
            } else {
                // line 92
                yield "        <span class=\"badge bg-danger\">Occupé par ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "patient", [], "any", false, false, false, 92), "nom", [], "any", false, false, false, 92), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "patient", [], "any", false, false, false, 92), "prenom", [], "any", false, false, false, 92), "html", null, true);
                yield "</span>
         <a href=\"";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lit.desaffecter", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "id", [], "any", false, false, false, 93)]), "html", null, true);
                yield "\" class=\"btn btn-success btn-sm btn-custom\">
            <i class=\"fas fa-user-plus\"></i> desaffecter
        </a>
       
    ";
            }
            // line 98
            yield "</td>
                                <td>
                                    <a href=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lit.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "id", [], "any", false, false, false, 100)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm btn-custom\">
                                        <i class=\"fas fa-edit\"></i> Modifier
                                    </a>
                                </td>
                                <td>
                                    <a href=\"";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lit.delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "id", [], "any", false, false, false, 105)]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-sm btn-custom\">
                                        <i class=\"fas fa-trash-alt\"></i> Supprimer
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        yield "                        ";
        if ( !(isset($context["hasLits"]) || array_key_exists("hasLits", $context) ? $context["hasLits"] : (function () { throw new RuntimeError('Variable "hasLits" does not exist.', 111, $this->source); })())) {
            // line 112
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center text-muted\">Aucun lit disponible</td>
                            </tr>
                        ";
        }
        // line 116
        yield "                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"text-end mt-3\">
            <a href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lit.new");
        yield "\" class=\"btn btn-success btn-custom\">
                <i class=\"bx bx-plus\"></i> Ajouter un lit
            </a>
        </div>
    </div>

    <script>
        function confirmSuppression(deleteUrl) {
            Swal.fire({
                title: \"Supprimer ce lit ?\",
                text: \"Cette action est irréversible !\",
                icon: \"warning\",
                showCancelButton: true,
                confirmButtonColor: \"#e53935\",
                cancelButtonColor: \"#6c757d\",
                confirmButtonText: \"Oui, supprimer\",
                cancelButtonText: \"Annuler\"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = deleteUrl;
                }
            });
        }
    </script>

    <!-- SweetAlert2 pour des alertes modernes -->
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 151
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

        // line 152
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 157
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
        return "lit/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  367 => 157,  363 => 156,  359 => 155,  355 => 154,  351 => 153,  346 => 152,  333 => 151,  294 => 122,  286 => 116,  280 => 112,  277 => 111,  265 => 105,  257 => 100,  253 => 98,  245 => 93,  238 => 92,  230 => 88,  228 => 87,  223 => 85,  219 => 84,  216 => 83,  213 => 82,  208 => 81,  206 => 80,  189 => 65,  176 => 64,  122 => 20,  117 => 18,  113 => 17,  109 => 16,  104 => 14,  96 => 9,  89 => 4,  76 => 3,  65 => 151,  62 => 150,  60 => 64,  57 => 63,  55 => 3,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

{% block head %}
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>CareConnect - Liste des lits</title>
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

{% block body %}
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <div class=\"card shadow\">
            <h5 class=\"card-header\">Liste des lits</h5>
            <div class=\"table-responsive\">
                <table class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th><i class=\"fas fa-hashtag\"></i> Numéro</th>
                            <th><i class=\"fas fa-door-open\"></i> Chambre</th>
                            <th><i class=\"fas fa-user-plus\"></i> Patient</th>
                            <th><i class=\"fas fa-edit\"></i> Modifier</th>
                            <th><i class=\"fas fa-trash-alt\"></i> Supprimer</th>
                        </tr>
                    </thead>
                    <tbody class=\"table-border-bottom-0\">
                        {% set hasLits = false %}
                        {% for lit in lits %}
                            {% set hasLits = true %}
                            <tr>
                                <td>{{ lit.num }}</td>
                                <td>{{ lit.chambre.num }}</td>
                                <td>
    {% if lit.type == 'libre' %}
        <a href=\"{{ path('lit.affecter', { id: lit.id }) }}\" class=\"btn btn-success btn-sm btn-custom\">
            <i class=\"fas fa-user-plus\"></i> Affecter
        </a>
    {% else %}
        <span class=\"badge bg-danger\">Occupé par {{ lit.patient.nom }} {{ lit.patient.prenom }}</span>
         <a href=\"{{ path('lit.desaffecter', { id: lit.id }) }}\" class=\"btn btn-success btn-sm btn-custom\">
            <i class=\"fas fa-user-plus\"></i> desaffecter
        </a>
       
    {% endif %}
</td>
                                <td>
                                    <a href=\"{{ path('lit.edit', { id: lit.id }) }}\" class=\"btn btn-warning btn-sm btn-custom\">
                                        <i class=\"fas fa-edit\"></i> Modifier
                                    </a>
                                </td>
                                <td>
                                    <a href=\"{{ path('lit.delete', { id: lit.id }) }}\" class=\"btn btn-danger btn-sm btn-custom\">
                                        <i class=\"fas fa-trash-alt\"></i> Supprimer
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                        {% if not hasLits %}
                            <tr>
                                <td colspan=\"5\" class=\"text-center text-muted\">Aucun lit disponible</td>
                            </tr>
                        {% endif %}
                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"text-end mt-3\">
            <a href=\"{{ path('lit.new') }}\" class=\"btn btn-success btn-custom\">
                <i class=\"bx bx-plus\"></i> Ajouter un lit
            </a>
        </div>
    </div>

    <script>
        function confirmSuppression(deleteUrl) {
            Swal.fire({
                title: \"Supprimer ce lit ?\",
                text: \"Cette action est irréversible !\",
                icon: \"warning\",
                showCancelButton: true,
                confirmButtonColor: \"#e53935\",
                cancelButtonColor: \"#6c757d\",
                confirmButtonText: \"Oui, supprimer\",
                cancelButtonText: \"Annuler\"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = deleteUrl;
                }
            });
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
{% endblock %}", "lit/index.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\lit\\index.html.twig");
    }
}
