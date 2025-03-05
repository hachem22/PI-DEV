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

/* entretient_chambre/front/edit.html.twig */
class __TwigTemplate_4784924a6dd428743714bf3c8f891407 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretient_chambre/front/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretient_chambre/front/edit.html.twig"));

        $this->parent = $this->loadTemplate("chambre/baseNav.html.twig", "entretient_chambre/front/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "    <div class=\"container d-flex justify-content-center align-items-center min-vh-100\" style=\"background: linear-gradient(135deg, #74EBD5 0%, #9FACE6 100%);\">
        <div class=\"card shadow-lg p-4\" style=\"max-width: 600px; border-radius: 15px;\">
            <div class=\"card-header text-center bg-primary text-white\" style=\"border-radius: 15px 15px 0 0;\">
                <h5>modifier Entretien de Chambre</h5>
                <small>Remplissez les détails</small>
            </div>
            <div class=\"card-body\">
                ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                
                <div class=\"mb-3\">
                    <label class=\"form-label\" for=\"form.type\"><i class=\"bx bx-cog\"></i> Type d'entretien</label>
                    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "type", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-select shadow-sm"]]);
        yield "
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label\" for=\"form.chambre\"><i class=\"bx bx-bed\"></i> Chambre associée</label>
                    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "chambre", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-select shadow-sm"]]);
        yield "
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label\" for=\"form.datedebut\"><i class=\"bx bx-calendar\"></i> Date de début</label>
                    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "datedebut", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control datetime-picker shadow-sm"]]);
        yield "
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label\" for=\"form.datefin\"><i class=\"bx bx-calendar-check\"></i> Date de fin</label>
                    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "datefin", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control datetime-picker shadow-sm"]]);
        yield "
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label\" for=\"form.statut\"><i class=\"bx bx-check-circle\"></i> Statut</label>
                    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "statut", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-select shadow-sm"]]);
        yield "
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label\" for=\"form.details\"><i class=\"bx bx-detail\"></i> Détails</label>
                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "details", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control shadow-sm"]]);
        yield "
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label fw-bold\" for=\"form.femmedemenage\"><i class=\"fas fa-user\"></i> Femme de Ménage</label>
                    <div class=\"input-group shadow-sm\">
                        <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                        ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "femmedemenage", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                </div>

                <button class=\"btn btn-primary w-100 shadow-sm\" style=\"border-radius: 10px; transition: 0.3s;\" 
                        onmouseover=\"this.style.backgroundColor='#0056b3'\" 
                        onmouseout=\"this.style.backgroundColor='#0d6efd'\">
                    <i class=\"bx bx-check\"></i> modifierl'entretien
                </button>
                ";
        // line 55
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
        yield "
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
        return "entretient_chambre/front/edit.html.twig";
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
        return array (  154 => 55,  142 => 46,  132 => 39,  124 => 34,  116 => 29,  108 => 24,  100 => 19,  92 => 14,  85 => 10,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"chambre/baseNav.html.twig\" %}
{% block content %}
    <div class=\"container d-flex justify-content-center align-items-center min-vh-100\" style=\"background: linear-gradient(135deg, #74EBD5 0%, #9FACE6 100%);\">
        <div class=\"card shadow-lg p-4\" style=\"max-width: 600px; border-radius: 15px;\">
            <div class=\"card-header text-center bg-primary text-white\" style=\"border-radius: 15px 15px 0 0;\">
                <h5>modifier Entretien de Chambre</h5>
                <small>Remplissez les détails</small>
            </div>
            <div class=\"card-body\">
                {{ form_start(form, {'attr': {'novalidate': 'novalidate' }}) }}
                
                <div class=\"mb-3\">
                    <label class=\"form-label\" for=\"form.type\"><i class=\"bx bx-cog\"></i> Type d'entretien</label>
                    {{ form_widget(form.type, {'attr': {'class': 'form-select shadow-sm' }}) }}
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label\" for=\"form.chambre\"><i class=\"bx bx-bed\"></i> Chambre associée</label>
                    {{ form_widget(form.chambre, {'attr': {'class': 'form-select shadow-sm' }}) }}
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label\" for=\"form.datedebut\"><i class=\"bx bx-calendar\"></i> Date de début</label>
                    {{ form_widget(form.datedebut, {'attr': {'class': 'form-control datetime-picker shadow-sm' }}) }}
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label\" for=\"form.datefin\"><i class=\"bx bx-calendar-check\"></i> Date de fin</label>
                    {{ form_widget(form.datefin, {'attr': {'class': 'form-control datetime-picker shadow-sm' }}) }}
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label\" for=\"form.statut\"><i class=\"bx bx-check-circle\"></i> Statut</label>
                    {{ form_widget(form.statut, {'attr': {'class': 'form-select shadow-sm' }}) }}
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label\" for=\"form.details\"><i class=\"bx bx-detail\"></i> Détails</label>
                    {{ form_widget(form.details, {'attr': {'class': 'form-control shadow-sm' }}) }}
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label fw-bold\" for=\"form.femmedemenage\"><i class=\"fas fa-user\"></i> Femme de Ménage</label>
                    <div class=\"input-group shadow-sm\">
                        <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                        {{ form_widget(form.femmedemenage, { 'attr': { 'class': 'form-control' } }) }}
                    </div>
                </div>

                <button class=\"btn btn-primary w-100 shadow-sm\" style=\"border-radius: 10px; transition: 0.3s;\" 
                        onmouseover=\"this.style.backgroundColor='#0056b3'\" 
                        onmouseout=\"this.style.backgroundColor='#0d6efd'\">
                    <i class=\"bx bx-check\"></i> modifierl'entretien
                </button>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "entretient_chambre/front/edit.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\entretient_chambre\\front\\edit.html.twig");
    }
}
