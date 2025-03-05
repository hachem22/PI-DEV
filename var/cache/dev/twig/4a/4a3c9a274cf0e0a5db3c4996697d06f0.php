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

/* entretient_chambre/index.html.twig */
class __TwigTemplate_09e9cb261f13a9d4efcefcb7d38a28ee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretient_chambre/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretient_chambre/index.html.twig"));

        // line 1
        yield "

";
        // line 3
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 21
        yield "
";
        // line 22
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 103
        yield "
";
        // line 104
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
    <title>CareConnect - Liste des entretiens</title>
    <meta name=\"description\" content=\"\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/favicon/favicon.ico"), "html", null, true);
        yield "\" />
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/fonts/boxicons.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/css/core.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/css/theme-default.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/css/demo.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 22
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

        // line 23
        yield "    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <div class=\"card shadow\">
            <h5 class=\"card-header\">Liste des entretiens</h5>
            <div class=\"table-responsive\">
                <table class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th>Chambre</th>
                            <th>Type</th>
                            <th>Date de début</th>
                            <th>Date de fin</th>
                            <th>Statut</th>
                            <th>Détails</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["entretients"]) || array_key_exists("entretients", $context) ? $context["entretients"] : (function () { throw new RuntimeError('Variable "entretients" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entretient"]) {
            // line 41
            yield "                            <tr>
                                <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entretient"], "chambre", [], "any", false, false, false, 42), "num", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                                <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entretient"], "type", [], "any", false, false, false, 43), "value", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                                <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["entretient"], "datedebut", [], "any", false, false, false, 44), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["entretient"], "datefin", [], "any", false, false, false, 45), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 47
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entretient"], "statut", [], "any", false, false, false, 47), "value", [], "any", false, false, false, 47) == "En cours")) {
                // line 48
                yield "                                        <span class=\"badge bg-warning\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entretient"], "statut", [], "any", false, false, false, 48), "value", [], "any", false, false, false, 48), "html", null, true);
                yield "</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 49
$context["entretient"], "statut", [], "any", false, false, false, 49), "value", [], "any", false, false, false, 49) == "Terminé")) {
                // line 50
                yield "                                        <span class=\"badge bg-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entretient"], "statut", [], "any", false, false, false, 50), "value", [], "any", false, false, false, 50), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 52
                yield "                                        <span class=\"badge bg-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entretient"], "statut", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 54
            yield "                                </td>
                                <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entretient"], "details", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                                <td>
                                    <div class=\"d-flex\">
                                        <a href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entretient_chambre.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["entretient"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm me-2\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <a href=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entretient_chambre.delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["entretient"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-sm\" >
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 71
        if (!$context['_iterated']) {
            // line 68
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center text-muted\">Aucun entretien disponible</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entretient'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"text-end mt-3\">
            <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entretient_chambre.new");
        yield "\" class=\"btn btn-success\">
                <i class=\"fas fa-plus\"></i> Ajouter un entretien
            </a>
        </div>
    </div>

    <script>
        function confirmDelete(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Êtes-vous sûr?',
                text: \"Vous ne pourrez pas revenir en arrière!\",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#28a745',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oui, supprimer!',
                cancelButtonText: 'Annuler'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = event.target.href;
                }
            });
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 104
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

        // line 105
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 110
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
        return "entretient_chambre/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  327 => 110,  323 => 109,  319 => 108,  315 => 107,  311 => 106,  306 => 105,  293 => 104,  256 => 77,  249 => 72,  240 => 68,  238 => 71,  227 => 61,  221 => 58,  215 => 55,  212 => 54,  206 => 52,  200 => 50,  198 => 49,  193 => 48,  191 => 47,  186 => 45,  182 => 44,  178 => 43,  174 => 42,  171 => 41,  166 => 40,  147 => 23,  134 => 22,  118 => 16,  114 => 15,  110 => 14,  106 => 13,  102 => 12,  95 => 8,  89 => 4,  76 => 3,  65 => 104,  62 => 103,  60 => 22,  57 => 21,  55 => 3,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

{% block head %}
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>CareConnect - Liste des entretiens</title>
    <meta name=\"description\" content=\"\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('../assets/img/favicon/favicon.ico') }}\" />
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/fonts/boxicons.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/css/core.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/css/theme-default.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/css/demo.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
{% endblock %}

{% block body %}
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <div class=\"card shadow\">
            <h5 class=\"card-header\">Liste des entretiens</h5>
            <div class=\"table-responsive\">
                <table class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th>Chambre</th>
                            <th>Type</th>
                            <th>Date de début</th>
                            <th>Date de fin</th>
                            <th>Statut</th>
                            <th>Détails</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for entretient in entretients %}
                            <tr>
                                <td>{{ entretient.chambre.num }}</td>
                                <td>{{ entretient.type.value }}</td>
                                <td>{{ entretient.datedebut|date('d/m/Y H:i') }}</td>
                                <td>{{ entretient.datefin|date('d/m/Y H:i') }}</td>
                                <td>
                                    {% if entretient.statut.value == 'En cours' %}
                                        <span class=\"badge bg-warning\">{{ entretient.statut.value }}</span>
                                    {% elseif entretient.statut.value == 'Terminé' %}
                                        <span class=\"badge bg-success\">{{ entretient.statut.value }}</span>
                                    {% else %}
                                        <span class=\"badge bg-secondary\">{{ entretient.statut.value }}</span>
                                    {% endif %}
                                </td>
                                <td>{{ entretient.details }}</td>
                                <td>
                                    <div class=\"d-flex\">
                                        <a href=\"{{ path('entretient_chambre.edit', {id: entretient.id}) }}\" class=\"btn btn-warning btn-sm me-2\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <a href=\"{{ path('entretient_chambre.delete', {id: entretient.id}) }}\" class=\"btn btn-danger btn-sm\" >
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"text-center text-muted\">Aucun entretien disponible</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"text-end mt-3\">
            <a href=\"{{ path('entretient_chambre.new') }}\" class=\"btn btn-success\">
                <i class=\"fas fa-plus\"></i> Ajouter un entretien
            </a>
        </div>
    </div>

    <script>
        function confirmDelete(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Êtes-vous sûr?',
                text: \"Vous ne pourrez pas revenir en arrière!\",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#28a745',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oui, supprimer!',
                cancelButtonText: 'Annuler'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = event.target.href;
                }
            });
        }
    </script>
{% endblock %}

{% block scripts %}
    <script src=\"{{ asset('../assets/vendor/libs/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('../assets/vendor/libs/popper/popper.js') }}\"></script>
    <script src=\"{{ asset('../assets/vendor/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
    <script src=\"{{ asset('../assets/vendor/js/menu.js') }}\"></script>
    <script src=\"{{ asset('../assets/js/main.js') }}\"></script>
{% endblock %}
", "entretient_chambre/index.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\entretient_chambre\\index.html.twig");
    }
}
