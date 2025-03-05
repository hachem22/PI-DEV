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

/* patient/rendezVous.html.twig */
class __TwigTemplate_3d6af7eb1ce639e208a6c30f06b6d949 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "patient/basePatient.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/rendezVous.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/rendezVous.html.twig"));

        $this->parent = $this->loadTemplate("patient/basePatient.html.twig", "patient/rendezVous.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <div class=\"container mt-4\">
        <h2 class=\"text-center\">Prise de Rendez-vous</h2>
        
        <!-- Formulaire d'informations utilisateur et sélection du médecin -->
        <form id=\"step1\">
            <div class=\"mb-3\">
                <label for=\"nom\" class=\"form-label\">Nom</label>
                <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">Email</label>
                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"departement\" class=\"form-label\">Département</label>
                <select class=\"form-select\" id=\"departement\" name=\"departement\" required>
                    <option value=\"\">Sélectionner un département</option>
                    <option value=\"cardiologie\">Cardiologie</option>
                    <option value=\"dermatologie\">Dermatologie</option>
                    <option value=\"neurologie\">Neurologie</option>
                </select>
            </div>
            <div class=\"mb-3\">
                <label for=\"medecin\" class=\"form-label\">Médecin</label>
                <select class=\"form-select\" id=\"medecin\" name=\"medecin\" required>
                    <option value=\"\">Sélectionner un médecin</option>
                    <option value=\"dr_smith\">Dr Smith</option>
                    <option value=\"dr_johnson\">Dr Johnson</option>
                    <option value=\"dr_brown\">Dr Brown</option>
                </select>
            </div>
            <button type=\"button\" class=\"btn btn-primary\" id=\"nextStep\">Suivant</button>
        </form>
        
        <!-- Sélection des dates disponibles -->
        <div id=\"step2\" class=\"mt-4\" style=\"display: none;\">
            <h3 class=\"text-center\">Dates disponibles</h3>
            <form id=\"appointmentForm\">
                <div class=\"mb-3\">
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"date\" value=\"2025-02-10\" id=\"date1\">
                        <label class=\"form-check-label\" for=\"date1\">10 Février 2025</label>
                    </div>
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"date\" value=\"2025-02-12\" id=\"date2\">
                        <label class=\"form-check-label\" for=\"date2\">12 Février 2025</label>
                    </div>
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"date\" value=\"2025-02-15\" id=\"date3\">
                        <label class=\"form-check-label\" for=\"date3\">15 Février 2025</label>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-success\">Confirmer</button>
            </form>
        </div>
    </div>
    
    <script>
        document.getElementById('nextStep').addEventListener('click', function() {
            document.getElementById('step1').style.display = 'none';
            document.getElementById('step2').style.display = 'block';
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
        return "patient/rendezVous.html.twig";
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
        return array (  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'patient/basePatient.html.twig' %}

{% block body %}
    <div class=\"container mt-4\">
        <h2 class=\"text-center\">Prise de Rendez-vous</h2>
        
        <!-- Formulaire d'informations utilisateur et sélection du médecin -->
        <form id=\"step1\">
            <div class=\"mb-3\">
                <label for=\"nom\" class=\"form-label\">Nom</label>
                <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">Email</label>
                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"departement\" class=\"form-label\">Département</label>
                <select class=\"form-select\" id=\"departement\" name=\"departement\" required>
                    <option value=\"\">Sélectionner un département</option>
                    <option value=\"cardiologie\">Cardiologie</option>
                    <option value=\"dermatologie\">Dermatologie</option>
                    <option value=\"neurologie\">Neurologie</option>
                </select>
            </div>
            <div class=\"mb-3\">
                <label for=\"medecin\" class=\"form-label\">Médecin</label>
                <select class=\"form-select\" id=\"medecin\" name=\"medecin\" required>
                    <option value=\"\">Sélectionner un médecin</option>
                    <option value=\"dr_smith\">Dr Smith</option>
                    <option value=\"dr_johnson\">Dr Johnson</option>
                    <option value=\"dr_brown\">Dr Brown</option>
                </select>
            </div>
            <button type=\"button\" class=\"btn btn-primary\" id=\"nextStep\">Suivant</button>
        </form>
        
        <!-- Sélection des dates disponibles -->
        <div id=\"step2\" class=\"mt-4\" style=\"display: none;\">
            <h3 class=\"text-center\">Dates disponibles</h3>
            <form id=\"appointmentForm\">
                <div class=\"mb-3\">
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"date\" value=\"2025-02-10\" id=\"date1\">
                        <label class=\"form-check-label\" for=\"date1\">10 Février 2025</label>
                    </div>
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"date\" value=\"2025-02-12\" id=\"date2\">
                        <label class=\"form-check-label\" for=\"date2\">12 Février 2025</label>
                    </div>
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"date\" value=\"2025-02-15\" id=\"date3\">
                        <label class=\"form-check-label\" for=\"date3\">15 Février 2025</label>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-success\">Confirmer</button>
            </form>
        </div>
    </div>
    
    <script>
        document.getElementById('nextStep').addEventListener('click', function() {
            document.getElementById('step1').style.display = 'none';
            document.getElementById('step2').style.display = 'block';
        });
    </script>
{% endblock %}
", "patient/rendezVous.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\patient\\rendezVous.html.twig");
    }
}
