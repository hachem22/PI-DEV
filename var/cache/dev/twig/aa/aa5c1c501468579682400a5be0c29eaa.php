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

/* lit/frontoffice/index.html.twig */
class __TwigTemplate_f8fecb83ce2f2b644fe94c4b1da8994a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lit/frontoffice/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lit/frontoffice/index.html.twig"));

        $this->parent = $this->loadTemplate("chambre/baseNav.html.twig", "lit/frontoffice/index.html.twig", 1);
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
    <title>CareConnect - Liste des lits</title>
    <meta name=\"description\" content=\"\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/favicon/favicon.ico"), "html", null, true);
        yield "\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
    <style>
        body {
            background-color: #eef1f6;
            font-family: 'Public Sans', sans-serif;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .container-xxl {
            margin-top: 30px;
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
            animation: slideIn 0.5s ease-in-out;
        }

        @keyframes slideIn {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15);
        }

        .badge {
            font-size: 1rem;
            padding: 5px 10px;
            animation: popIn 0.3s ease-in-out;
        }

        @keyframes popIn {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .btn-custom {
            border-radius: 25px;
            transition: all 0.3s ease-in-out;
            font-weight: 600;
            position: relative;
            overflow: hidden;
        }

        .btn-custom:hover {
            transform: scale(1.08);
            box-shadow: 0 0 10px rgba(0, 234, 255, 0.5);
        }

        .btn-custom:after {
            content: \"\";
            background: rgba(255, 255, 255, 0.3);
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: transform 0.5s ease;
        }

        .btn-custom:hover:after {
            transform: translate(-50%, -50%) scale(1);
        }

        .btn-custom i {
            margin-right: 5px;
            transition: transform 0.3s ease;
        }

        .btn-custom:hover i {
            animation: bounce 0.5s;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }

        .text-muted {
            color: #6c757d;
        }

        .loading-spinner {
            display: inline-block;
            width: 40px;
            height: 40px;
            border: 4px solid #f3f3f3;
            border-top: 4px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 120
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

        // line 121
        yield "    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <div class=\"row\">
            ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lits"]) || array_key_exists("lits", $context) ? $context["lits"] : (function () { throw new RuntimeError('Variable "lits" does not exist.', 123, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lit"]) {
            // line 124
            yield "                <div class=\"col-md-4\">
                    <div class=\"card shadow-sm mb-4\">
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title\">Lit N° ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "num", [], "any", false, false, false, 127), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\">Chambre : ";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "chambre", [], "any", false, false, false, 128), "num", [], "any", false, false, false, 128), "html", null, true);
            yield "</p>
                            <p class=\"card-text\">
                                ";
            // line 130
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "type", [], "any", false, false, false, 130) == "libre")) {
                // line 131
                yield "                                    <span class=\"badge bg-success\">Disponible</span>
                                ";
            } else {
                // line 133
                yield "                                    <span class=\"badge bg-danger\">Occupé par ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "patient", [], "any", false, false, false, 133), "nom", [], "any", false, false, false, 133), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "patient", [], "any", false, false, false, 133), "prenom", [], "any", false, false, false, 133), "html", null, true);
                yield "</span>
                                    <a href=\"";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lit.desaffecter", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "id", [], "any", false, false, false, 134)]), "html", null, true);
                yield "\" class=\"btn btn-success btn-sm btn-custom\">
            <i class=\"fas fa-user-plus\"></i> desaffecter
        </a>
                                ";
            }
            // line 138
            yield "                            </p>
                            ";
            // line 139
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "type", [], "any", false, false, false, 139) == "libre")) {
                // line 140
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lit.affecter", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "id", [], "any", false, false, false, 140)]), "html", null, true);
                yield "\" class=\"btn btn-success btn-sm btn-custom\">
                                    <i class=\"fas fa-user-plus\"></i> Affecter
                                </a>
                            ";
            }
            // line 144
            yield "                            <div class=\"d-flex justify-content-center mt-3 gap-2\">
                                <a href=\"";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lit.editfront", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "id", [], "any", false, false, false, 145)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm btn-custom\">
                                    <i class=\"fas fa-edit\"></i> Modifier
                                </a>
                                <a href=\"javascript:void(0);\" onclick=\"confirmSuppression('";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lit.delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lit"], "id", [], "any", false, false, false, 148)]), "html", null, true);
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
        // line 159
        if (!$context['_iterated']) {
            // line 156
            yield "                <div class=\"col-12 text-center text-muted\">
                    <p>Aucun lit disponible</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        yield "        </div>
        <div class=\"text-end mt-3\">
            <a href=\"";
        // line 162
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lit.new");
        yield "\" class=\"btn btn-success btn-lg btn-custom\">
                <i class=\"fas fa-bed\"></i> Ajouter un lit
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
    </script>
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
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
        return "lit/frontoffice/index.html.twig";
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
        return array (  310 => 162,  306 => 160,  297 => 156,  295 => 159,  283 => 148,  277 => 145,  274 => 144,  266 => 140,  264 => 139,  261 => 138,  254 => 134,  247 => 133,  243 => 131,  241 => 130,  236 => 128,  232 => 127,  227 => 124,  222 => 123,  218 => 121,  205 => 120,  83 => 8,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"chambre/baseNav.html.twig\" %}

{% block head %}
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>CareConnect - Liste des lits</title>
    <meta name=\"description\" content=\"\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('../assets/img/favicon/favicon.ico') }}\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
    <style>
        body {
            background-color: #eef1f6;
            font-family: 'Public Sans', sans-serif;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .container-xxl {
            margin-top: 30px;
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
            animation: slideIn 0.5s ease-in-out;
        }

        @keyframes slideIn {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15);
        }

        .badge {
            font-size: 1rem;
            padding: 5px 10px;
            animation: popIn 0.3s ease-in-out;
        }

        @keyframes popIn {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .btn-custom {
            border-radius: 25px;
            transition: all 0.3s ease-in-out;
            font-weight: 600;
            position: relative;
            overflow: hidden;
        }

        .btn-custom:hover {
            transform: scale(1.08);
            box-shadow: 0 0 10px rgba(0, 234, 255, 0.5);
        }

        .btn-custom:after {
            content: \"\";
            background: rgba(255, 255, 255, 0.3);
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: transform 0.5s ease;
        }

        .btn-custom:hover:after {
            transform: translate(-50%, -50%) scale(1);
        }

        .btn-custom i {
            margin-right: 5px;
            transition: transform 0.3s ease;
        }

        .btn-custom:hover i {
            animation: bounce 0.5s;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }

        .text-muted {
            color: #6c757d;
        }

        .loading-spinner {
            display: inline-block;
            width: 40px;
            height: 40px;
            border: 4px solid #f3f3f3;
            border-top: 4px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
{% endblock %}

{% block content %}
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <div class=\"row\">
            {% for lit in lits %}
                <div class=\"col-md-4\">
                    <div class=\"card shadow-sm mb-4\">
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title\">Lit N° {{ lit.num }}</h5>
                            <p class=\"card-text\">Chambre : {{ lit.chambre.num }}</p>
                            <p class=\"card-text\">
                                {% if lit.type == 'libre' %}
                                    <span class=\"badge bg-success\">Disponible</span>
                                {% else %}
                                    <span class=\"badge bg-danger\">Occupé par {{ lit.patient.nom }} {{ lit.patient.prenom }}</span>
                                    <a href=\"{{ path('lit.desaffecter', { id: lit.id }) }}\" class=\"btn btn-success btn-sm btn-custom\">
            <i class=\"fas fa-user-plus\"></i> desaffecter
        </a>
                                {% endif %}
                            </p>
                            {% if lit.type == 'libre' %}
                                <a href=\"{{ path('lit.affecter', { id: lit.id }) }}\" class=\"btn btn-success btn-sm btn-custom\">
                                    <i class=\"fas fa-user-plus\"></i> Affecter
                                </a>
                            {% endif %}
                            <div class=\"d-flex justify-content-center mt-3 gap-2\">
                                <a href=\"{{ path('lit.editfront', { id: lit.id }) }}\" class=\"btn btn-warning btn-sm btn-custom\">
                                    <i class=\"fas fa-edit\"></i> Modifier
                                </a>
                                <a href=\"javascript:void(0);\" onclick=\"confirmSuppression('{{ path('lit.delete', { id: lit.id }) }}')\" class=\"btn btn-danger btn-sm btn-custom\">
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
        <div class=\"text-end mt-3\">
            <a href=\"{{ path('lit.new') }}\" class=\"btn btn-success btn-lg btn-custom\">
                <i class=\"fas fa-bed\"></i> Ajouter un lit
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
    </script>
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
{% endblock %}", "lit/frontoffice/index.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\lit\\frontoffice\\index.html.twig");
    }
}
