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

/* lit/affectation.html.twig */
class __TwigTemplate_282b8626a011cb1bf25acb34af370574 extends Template
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
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lit/affectation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lit/affectation.html.twig"));

        $this->parent = $this->loadTemplate("chambre/baseNav.html.twig", "lit/affectation.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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

        yield "Affecter un patient";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">

<div class=\"container d-flex justify-content-center align-items-center vh-100\">
    <div class=\"card shadow-lg p-4 animate__animated animate__fadeIn\" style=\"width: 450px;\">
        <div class=\"card-body text-center\">
            <h2 class=\"text-primary mb-3\"><i class=\"fas fa-procedures\"></i> Lit N°";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lit"]) || array_key_exists("lit", $context) ? $context["lit"] : (function () { throw new RuntimeError('Variable "lit" does not exist.', 12, $this->source); })()), "num", [], "any", false, false, false, 12), "html", null, true);
        yield "</h2>
            <p class=\"text-muted\">Sélectionnez un patient à affecter à ce lit.</p>

            ";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["id" => "affectationForm"]]);
        yield "
                <div class=\"mb-4\">
                    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "patient", [], "any", false, false, false, 17), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Patient"]);
        yield "
                    <div class=\"input-group\">
                        <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "patient", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                </div>

                <button type=\"submit\" class=\"btn btn-lg btn-primary w-100\" >
                    <i class=\"fas fa-check-circle\"></i> Affecter
                </button>
            ";
        // line 27
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</div>

<script>
    function confirmAffectation() {
        return Swal.fire({
            title: \"Confirmation\",
            text: \"Êtes-vous sûr de vouloir affecter ce patient ?\",
            icon: \"warning\",
            showCancelButton: true,
            confirmButtonColor: \"#3085d6\",
            cancelButtonColor: \"#d33\",
            confirmButtonText: \"Oui, affecter !\"
        }).then((result) => {
            return result.isConfirmed;
        });
    }
</script>

<!-- Intégration de SweetAlert2 pour une alerte plus moderne -->
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>

<style>
    .card {
        border-radius: 15px;
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .btn-primary {
        background: linear-gradient(to right, #4facfe, #00f2fe);
        border: none;
        transition: background 0.3s ease-in-out;
    }

    .btn-primary:hover {
        background: linear-gradient(to right, #00f2fe, #4facfe);
    }
</style>
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
        return "lit/affectation.html.twig";
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
        return array (  135 => 27,  125 => 20,  119 => 17,  114 => 15,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"chambre/baseNav.html.twig\" %}

{% block title %}Affecter un patient{% endblock %}

{% block content %}
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">

<div class=\"container d-flex justify-content-center align-items-center vh-100\">
    <div class=\"card shadow-lg p-4 animate__animated animate__fadeIn\" style=\"width: 450px;\">
        <div class=\"card-body text-center\">
            <h2 class=\"text-primary mb-3\"><i class=\"fas fa-procedures\"></i> Lit N°{{ lit.num }}</h2>
            <p class=\"text-muted\">Sélectionnez un patient à affecter à ce lit.</p>

            {{ form_start(form, { 'attr': {'id': 'affectationForm'} }) }}
                <div class=\"mb-4\">
                    {{ form_label(form.patient, 'Patient', { 'label_attr': { 'class': 'form-label fw-bold' } }) }}
                    <div class=\"input-group\">
                        <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                        {{ form_widget(form.patient, { 'attr': { 'class': 'form-control' } }) }}
                    </div>
                </div>

                <button type=\"submit\" class=\"btn btn-lg btn-primary w-100\" >
                    <i class=\"fas fa-check-circle\"></i> Affecter
                </button>
            {{ form_end(form) }}
        </div>
    </div>
</div>

<script>
    function confirmAffectation() {
        return Swal.fire({
            title: \"Confirmation\",
            text: \"Êtes-vous sûr de vouloir affecter ce patient ?\",
            icon: \"warning\",
            showCancelButton: true,
            confirmButtonColor: \"#3085d6\",
            cancelButtonColor: \"#d33\",
            confirmButtonText: \"Oui, affecter !\"
        }).then((result) => {
            return result.isConfirmed;
        });
    }
</script>

<!-- Intégration de SweetAlert2 pour une alerte plus moderne -->
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>

<style>
    .card {
        border-radius: 15px;
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .btn-primary {
        background: linear-gradient(to right, #4facfe, #00f2fe);
        border: none;
        transition: background 0.3s ease-in-out;
    }

    .btn-primary:hover {
        background: linear-gradient(to right, #00f2fe, #4facfe);
    }
</style>
{% endblock %}", "lit/affectation.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\lit\\affectation.html.twig");
    }
}
