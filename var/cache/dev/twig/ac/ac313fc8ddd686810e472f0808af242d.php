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

/* chambre/filtre.html.twig */
class __TwigTemplate_39d1716c9e17d3cb737f22a6c3c1d7cd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/filtre.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/filtre.html.twig"));

        // line 1
        yield "
<div class=\"card mb-4\">
    <div class=\"card-header\">
        <h5>Filtres</h5>
    </div>
    <div class=\"card-body\">
        <form id=\"filterForm\" action=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.filtre");
        yield "\" method=\"get\" class=\"row g-3\">
            <div class=\"col-md-3\">
                <label for=\"type\" class=\"form-label\">Type de chambre</label>
                <select name=\"type\" id=\"type\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    <option value=\"simple\" ";
        // line 12
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "type", [], "any", true, true, false, 12) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 12, $this->source); })()), "type", [], "any", false, false, false, 12) == "simple"))) {
            yield "selected";
        }
        yield ">Simple</option>
                    <option value=\"double\" ";
        // line 13
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "type", [], "any", true, true, false, 13) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 13, $this->source); })()), "type", [], "any", false, false, false, 13) == "double"))) {
            yield "selected";
        }
        yield ">Double</option>
                    <option value=\"suite\" ";
        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "type", [], "any", true, true, false, 14) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 14, $this->source); })()), "type", [], "any", false, false, false, 14) == "suite"))) {
            yield "selected";
        }
        yield ">Suite</option>
                </select>
            </div>
            
            <div class=\"col-md-3\">
                <label for=\"active\" class=\"form-label\">Statut</label>
                <select name=\"active\" id=\"active\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    <option value=\"disponible\" ";
        // line 22
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "active", [], "any", true, true, false, 22) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 22, $this->source); })()), "active", [], "any", false, false, false, 22) == "disponible"))) {
            yield "selected";
        }
        yield ">Disponible</option>
                    <option value=\"occupee\" ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "active", [], "any", true, true, false, 23) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 23, $this->source); })()), "active", [], "any", false, false, false, 23) == "occupee"))) {
            yield "selected";
        }
        yield ">Occupée</option>
                    <option value=\"maintenance\" ";
        // line 24
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "active", [], "any", true, true, false, 24) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 24, $this->source); })()), "active", [], "any", false, false, false, 24) == "maintenance"))) {
            yield "selected";
        }
        yield ">Maintenance</option>
                </select>
            </div>
            
            <div class=\"col-md-2\">
                <label for=\"capaciteMin\" class=\"form-label\">Capacité min</label>
                <input type=\"number\" name=\"capaciteMin\" id=\"capaciteMin\" class=\"form-control\" min=\"1\" max=\"10\" 
                       value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "capaciteMin", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 31, $this->source); })()), "capaciteMin", [], "any", false, false, false, 31), "")) : ("")), "html", null, true);
        yield "\">
            </div>
            
            <div class=\"col-md-2\">
                <label for=\"capaciteMax\" class=\"form-label\">Capacité max</label>
                <input type=\"number\" name=\"capaciteMax\" id=\"capaciteMax\" class=\"form-control\" min=\"1\" max=\"10\"
                       value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "capaciteMax", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 37, $this->source); })()), "capaciteMax", [], "any", false, false, false, 37), "")) : ("")), "html", null, true);
        yield "\">
            </div>
            
            <div class=\"col-md-2\">
                <label for=\"service\" class=\"form-label\">Service</label>
                <select name=\"service\" id=\"service\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 45
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 45), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "service", [], "any", true, true, false, 45) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 45, $this->source); })()), "service", [], "any", false, false, false, 45) == CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 45)))) {
                yield "selected";
            }
            yield ">
                            ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "nom", [], "any", false, false, false, 46), "html", null, true);
            yield "
                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "                </select>
            </div>
            
            <div class=\"col-md-8\">
                <label for=\"search\" class=\"form-label\">Recherche</label>
                <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control\" 
                       placeholder=\"Numéro ou localisation...\" value=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 55)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 55, $this->source); })()), "search", [], "any", false, false, false, 55), "")) : ("")), "html", null, true);
        yield "\">
            </div>
            
            <div class=\"col-md-4 d-flex align-items-end\">
                <button type=\"submit\" class=\"btn btn-primary me-2\">Filtrer</button>
                <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chambre");
        yield "\" class=\"btn btn-secondary\">Réinitialiser</a>
            </div>
        </form>
    </div>
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
        return "chambre/filtre.html.twig";
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
        return array (  170 => 60,  162 => 55,  154 => 49,  145 => 46,  136 => 45,  132 => 44,  122 => 37,  113 => 31,  101 => 24,  95 => 23,  89 => 22,  76 => 14,  70 => 13,  64 => 12,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<div class=\"card mb-4\">
    <div class=\"card-header\">
        <h5>Filtres</h5>
    </div>
    <div class=\"card-body\">
        <form id=\"filterForm\" action=\"{{ path('chambre.filtre') }}\" method=\"get\" class=\"row g-3\">
            <div class=\"col-md-3\">
                <label for=\"type\" class=\"form-label\">Type de chambre</label>
                <select name=\"type\" id=\"type\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    <option value=\"simple\" {% if filters.type is defined and filters.type == 'simple' %}selected{% endif %}>Simple</option>
                    <option value=\"double\" {% if filters.type is defined and filters.type == 'double' %}selected{% endif %}>Double</option>
                    <option value=\"suite\" {% if filters.type is defined and filters.type == 'suite' %}selected{% endif %}>Suite</option>
                </select>
            </div>
            
            <div class=\"col-md-3\">
                <label for=\"active\" class=\"form-label\">Statut</label>
                <select name=\"active\" id=\"active\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    <option value=\"disponible\" {% if filters.active is defined and filters.active == 'disponible' %}selected{% endif %}>Disponible</option>
                    <option value=\"occupee\" {% if filters.active is defined and filters.active == 'occupee' %}selected{% endif %}>Occupée</option>
                    <option value=\"maintenance\" {% if filters.active is defined and filters.active == 'maintenance' %}selected{% endif %}>Maintenance</option>
                </select>
            </div>
            
            <div class=\"col-md-2\">
                <label for=\"capaciteMin\" class=\"form-label\">Capacité min</label>
                <input type=\"number\" name=\"capaciteMin\" id=\"capaciteMin\" class=\"form-control\" min=\"1\" max=\"10\" 
                       value=\"{{ filters.capaciteMin|default('') }}\">
            </div>
            
            <div class=\"col-md-2\">
                <label for=\"capaciteMax\" class=\"form-label\">Capacité max</label>
                <input type=\"number\" name=\"capaciteMax\" id=\"capaciteMax\" class=\"form-control\" min=\"1\" max=\"10\"
                       value=\"{{ filters.capaciteMax|default('') }}\">
            </div>
            
            <div class=\"col-md-2\">
                <label for=\"service\" class=\"form-label\">Service</label>
                <select name=\"service\" id=\"service\" class=\"form-select\">
                    <option value=\"\">Tous</option>
                    {% for service in services %}
                        <option value=\"{{ service.id }}\" {% if filters.service is defined and filters.service == service.id %}selected{% endif %}>
                            {{ service.nom }}
                        </option>
                    {% endfor %}
                </select>
            </div>
            
            <div class=\"col-md-8\">
                <label for=\"search\" class=\"form-label\">Recherche</label>
                <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control\" 
                       placeholder=\"Numéro ou localisation...\" value=\"{{ filters.search|default('') }}\">
            </div>
            
            <div class=\"col-md-4 d-flex align-items-end\">
                <button type=\"submit\" class=\"btn btn-primary me-2\">Filtrer</button>
                <a href=\"{{ path('app_chambre') }}\" class=\"btn btn-secondary\">Réinitialiser</a>
            </div>
        </form>
    </div>
</div>", "chambre/filtre.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\chambre\\filtre.html.twig");
    }
}
