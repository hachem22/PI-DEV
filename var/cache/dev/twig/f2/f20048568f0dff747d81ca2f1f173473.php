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

/* lit/desaffectation.html.twig */
class __TwigTemplate_f52c7e9fd51f24f5a29290437383678f extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lit/desaffectation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lit/desaffectation.html.twig"));

        // line 1
        yield "

";
        // line 3
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Désaffectation Patient";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"container mt-4\">
    <h1>Désaffectation du patient</h1>

    <div class=\"card mb-4\">
        <div class=\"card-header\">
            <h2>Confirmation de désaffectation</h2>
        </div>
        <div class=\"card-body\">
            <p>Vous êtes sur le point de désaffecter le patient suivant :</p>
            
            <div class=\"alert alert-info\">
                <strong>Patient :</strong> ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 17, $this->source); })()), "prenom", [], "any", false, false, false, 17), "html", null, true);
        yield "<br>
                <strong>Lit :</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lit"]) || array_key_exists("lit", $context) ? $context["lit"] : (function () { throw new RuntimeError('Variable "lit" does not exist.', 18, $this->source); })()), "num", [], "any", false, false, false, 18), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["lit"]) || array_key_exists("lit", $context) ? $context["lit"] : (function () { throw new RuntimeError('Variable "lit" does not exist.', 18, $this->source); })()), "chambre", [], "any", false, false, false, 18), "num", [], "any", false, false, false, 18), "html", null, true);
        yield ")<br>
            </div>
            
            <p>Cette action va :</p>
            <ul>
                <li>Désaffecter le patient du lit</li>
                <li>Marquer le lit comme libre</li>
                <li>Créer automatiquement un entretien pour la chambre</li>
                ";
        // line 26
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["lit"]) || array_key_exists("lit", $context) ? $context["lit"] : (function () { throw new RuntimeError('Variable "lit" does not exist.', 26, $this->source); })()), "chambre", [], "any", false, false, false, 26), "lits", [], "any", false, false, false, 26)) == 1) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["lit"]) || array_key_exists("lit", $context) ? $context["lit"] : (function () { throw new RuntimeError('Variable "lit" does not exist.', 26, $this->source); })()), "chambre", [], "any", false, false, false, 26), "lits", [], "any", false, false, false, 26), function ($__l__) use ($context, $macros) { $context["l"] = $__l__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 26, $this->source); })()), "type", [], "any", false, false, false, 26) == "occupe"); })) == 1))) {
            // line 27
            yield "                    <li>Mettre la chambre en maintenance pour entretien</li>
                ";
        }
        // line 29
        yield "            </ul>
            
            <div class=\"alert alert-warning\">
                <strong>Attention :</strong> Cette action est irréversible.
            </div>
            
            <form method=\"post\">
                <div class=\"d-flex justify-content-between\">
                    <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lit");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                    <button type=\"submit\" class=\"btn btn-danger\">Confirmer la désaffectation</button>
                </div>
            </form>
        </div>
    </div>
</div>
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
        return "lit/desaffectation.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  154 => 37,  144 => 29,  140 => 27,  138 => 26,  125 => 18,  119 => 17,  106 => 6,  93 => 5,  70 => 3,  59 => 5,  56 => 4,  54 => 3,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

{% block title %}Désaffectation Patient{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <h1>Désaffectation du patient</h1>

    <div class=\"card mb-4\">
        <div class=\"card-header\">
            <h2>Confirmation de désaffectation</h2>
        </div>
        <div class=\"card-body\">
            <p>Vous êtes sur le point de désaffecter le patient suivant :</p>
            
            <div class=\"alert alert-info\">
                <strong>Patient :</strong> {{ patient.nom }} {{ patient.prenom }}<br>
                <strong>Lit :</strong> {{ lit.num }} ({{ lit.chambre.num }})<br>
            </div>
            
            <p>Cette action va :</p>
            <ul>
                <li>Désaffecter le patient du lit</li>
                <li>Marquer le lit comme libre</li>
                <li>Créer automatiquement un entretien pour la chambre</li>
                {% if lit.chambre.lits|length == 1 or lit.chambre.lits|filter(l => l.type == 'occupe')|length == 1 %}
                    <li>Mettre la chambre en maintenance pour entretien</li>
                {% endif %}
            </ul>
            
            <div class=\"alert alert-warning\">
                <strong>Attention :</strong> Cette action est irréversible.
            </div>
            
            <form method=\"post\">
                <div class=\"d-flex justify-content-between\">
                    <a href=\"{{ path('app_lit') }}\" class=\"btn btn-secondary\">Annuler</a>
                    <button type=\"submit\" class=\"btn btn-danger\">Confirmer la désaffectation</button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}", "lit/desaffectation.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\lit\\desaffectation.html.twig");
    }
}
