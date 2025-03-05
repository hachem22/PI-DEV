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

/* chambre/liste.html.twig */
class __TwigTemplate_2d9014dc3ac664e0be6ad4b3ae452e8a extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/liste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/liste.html.twig"));

        // line 2
        yield "<div class=\"table-responsive\">
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Type</th>
                <th>Capacité</th>
                <th>Localisation</th>
                <th>Statut</th>
                <th>Service</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 16
        if (array_key_exists("chambres", $context)) {
            // line 17
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 17, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
                // line 18
                yield "                    <tr>
                        <td>";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "num", [], "any", false, false, false, 19), "html", null, true);
                yield "</td>
                        <td>";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "type", [], "any", false, false, false, 20), "html", null, true);
                yield "</td>
                        <td>";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "capacite", [], "any", false, false, false, 21), "html", null, true);
                yield "</td>
                        <td>";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "localisation", [], "any", false, false, false, 22), "html", null, true);
                yield "</td>
                        <td>
                            <span class=\"badge bg-";
                // line 24
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "active", [], "any", false, false, false, 24) == "disponible")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "active", [], "any", false, false, false, 24) == "occupee")) ? ("danger") : ("warning"))));
                yield "\">
                                ";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "active", [], "any", false, false, false, 25), "html", null, true);
                yield "
                            </span>
                        </td>
                        <td>";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "position", [], "any", false, false, false, 28), "nom", [], "any", false, false, false, 28), "html", null, true);
                yield "</td>
                        <td>
                            <div class=\"btn-group\">
                                <a href=\"";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">Éditer</a>
                                <a href=\"";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-danger\" 
                                   onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette chambre ?')\">Supprimer</a>
                            </div>
                        </td>
                    </tr>
                ";
                $context['_iterated'] = true;
            }
            // line 41
            if (!$context['_iterated']) {
                // line 38
                yield "                    <tr>
                        <td colspan=\"7\" class=\"text-center\">Aucune chambre trouvée</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['chambre'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "            ";
        } else {
            // line 43
            yield "                <tr>
                    <td colspan=\"7\" class=\"text-center\">Variable \"chambres\" non définie</td>
                </tr>
            ";
        }
        // line 47
        yield "        </tbody>
    </table>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chambre/liste.html.twig";
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
        return array (  142 => 47,  136 => 43,  133 => 42,  124 => 38,  122 => 41,  112 => 32,  108 => 31,  102 => 28,  96 => 25,  92 => 24,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  72 => 18,  66 => 17,  64 => 16,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# chambre/_liste.html.twig #}
<div class=\"table-responsive\">
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Type</th>
                <th>Capacité</th>
                <th>Localisation</th>
                <th>Statut</th>
                <th>Service</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% if chambres is defined %}
                {% for chambre in chambres %}
                    <tr>
                        <td>{{ chambre.num }}</td>
                        <td>{{ chambre.type }}</td>
                        <td>{{ chambre.capacite }}</td>
                        <td>{{ chambre.localisation }}</td>
                        <td>
                            <span class=\"badge bg-{{ chambre.active == 'disponible' ? 'success' : (chambre.active == 'occupee' ? 'danger' : 'warning') }}\">
                                {{ chambre.active }}
                            </span>
                        </td>
                        <td>{{ chambre.position.nom }}</td>
                        <td>
                            <div class=\"btn-group\">
                                <a href=\"{{ path('chambre.edit', {'id': chambre.id}) }}\" class=\"btn btn-sm btn-outline-primary\">Éditer</a>
                                <a href=\"{{ path('chambre.supprimer', {'id': chambre.id}) }}\" class=\"btn btn-sm btn-outline-danger\" 
                                   onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette chambre ?')\">Supprimer</a>
                            </div>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"7\" class=\"text-center\">Aucune chambre trouvée</td>
                    </tr>
                {% endfor %}
            {% else %}
                <tr>
                    <td colspan=\"7\" class=\"text-center\">Variable \"chambres\" non définie</td>
                </tr>
            {% endif %}
        </tbody>
    </table>
</div>", "chambre/liste.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\chambre\\liste.html.twig");
    }
}
