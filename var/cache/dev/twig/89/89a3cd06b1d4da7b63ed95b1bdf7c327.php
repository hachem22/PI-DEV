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

/* lit/frontoffice/new.html.twig */
class __TwigTemplate_d0912569c406d373ab58fa1eda3a972d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lit/frontoffice/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lit/frontoffice/new.html.twig"));

        $this->parent = $this->loadTemplate("chambre/baseNav.html.twig", "lit/frontoffice/new.html.twig", 1);
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
        yield "    <div class=\"container d-flex justify-content-center align-items-center vh-100\">
        <div class=\"card shadow-lg p-4\" style=\"max-width: 500px; border-radius: 15px;\">
            <div class=\"card-header text-center bg-primary text-white\" style=\"border-radius: 10px;\">
                <h4 class=\"mb-0\">🛏️ Ajouter un Nouveau Lit</h4>
                <small class=\"text-light\">Remplissez les informations ci-dessous</small>
            </div>
            <div class=\"card-body\">
                ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                
                <div class=\"mb-3\">
                    <label class=\"form-label\">
                        <i class=\"bx bx-hash\"></i> Numéro du lit
                    </label>
                    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "num", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 101"]]);
        yield "
                    ";
        // line 17
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "num", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "errors", [], "any", false, false, false, 17)) > 0)) {
            // line 18
            yield "                        <span class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "num", [], "any", false, false, false, 18), 'errors');
            yield "</span>
                    ";
        }
        // line 20
        yield "                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label\">
                        <i class=\"bx bx-bed\"></i> Type de lit
                    </label>
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "type", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    ";
        // line 27
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "type", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "errors", [], "any", false, false, false, 27)) > 0)) {
            // line 28
            yield "                        <span class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "type", [], "any", false, false, false, 28), 'errors');
            yield "</span>
                    ";
        }
        // line 30
        yield "                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label\">
                        <i class=\"bx bx-building\"></i> Chambre associée
                    </label>
                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "chambre", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    ";
        // line 37
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "chambre", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "errors", [], "any", false, false, false, 37)) > 0)) {
            // line 38
            yield "                        <span class=\"text-danger small\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "chambre", [], "any", false, false, false, 38), 'errors');
            yield "</span>
                    ";
        }
        // line 40
        yield "                </div>
                
                <div class=\"text-center\">
                    <button class=\"btn btn-success w-100\" style=\"border-radius: 10px; font-size: 18px;\">
                        <i class=\"bx bx-plus-circle\"></i> Ajouter
                    </button>
                </div>
                ";
        // line 47
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>

    <style>
        body {
            background: linear-gradient(135deg,rgb(248, 250, 251), #0984e3);
            font-family: 'Public Sans', sans-serif;
        }

        .card {
            background: white;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-success {
            background-color: #2ecc71;
            border: none;
            transition: background 0.3s;
        }

        .btn-success:hover {
            background-color: #27ae60;
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
        return "lit/frontoffice/new.html.twig";
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
        return array (  155 => 47,  146 => 40,  140 => 38,  138 => 37,  134 => 36,  126 => 30,  120 => 28,  118 => 27,  114 => 26,  106 => 20,  100 => 18,  98 => 17,  94 => 16,  85 => 10,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"chambre/baseNav.html.twig\" %}
{% block content %}
    <div class=\"container d-flex justify-content-center align-items-center vh-100\">
        <div class=\"card shadow-lg p-4\" style=\"max-width: 500px; border-radius: 15px;\">
            <div class=\"card-header text-center bg-primary text-white\" style=\"border-radius: 10px;\">
                <h4 class=\"mb-0\">🛏️ Ajouter un Nouveau Lit</h4>
                <small class=\"text-light\">Remplissez les informations ci-dessous</small>
            </div>
            <div class=\"card-body\">
                {{ form_start(form, {'attr': {'novalidate': 'novalidate' }}) }}
                
                <div class=\"mb-3\">
                    <label class=\"form-label\">
                        <i class=\"bx bx-hash\"></i> Numéro du lit
                    </label>
                    {{ form_widget(form.num, {'attr': {'class': 'form-control', 'placeholder': 'Ex: 101' }}) }}
                    {% if form.num.vars.errors|length > 0 %}
                        <span class=\"text-danger small\">{{ form_errors(form.num) }}</span>
                    {% endif %}
                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label\">
                        <i class=\"bx bx-bed\"></i> Type de lit
                    </label>
                    {{ form_widget(form.type, {'attr': {'class': 'form-select' }}) }}
                    {% if form.type.vars.errors|length > 0 %}
                        <span class=\"text-danger small\">{{ form_errors(form.type) }}</span>
                    {% endif %}
                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label\">
                        <i class=\"bx bx-building\"></i> Chambre associée
                    </label>
                    {{ form_widget(form.chambre, {'attr': {'class': 'form-select' }}) }}
                    {% if form.chambre.vars.errors|length > 0 %}
                        <span class=\"text-danger small\">{{ form_errors(form.chambre) }}</span>
                    {% endif %}
                </div>
                
                <div class=\"text-center\">
                    <button class=\"btn btn-success w-100\" style=\"border-radius: 10px; font-size: 18px;\">
                        <i class=\"bx bx-plus-circle\"></i> Ajouter
                    </button>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>

    <style>
        body {
            background: linear-gradient(135deg,rgb(248, 250, 251), #0984e3);
            font-family: 'Public Sans', sans-serif;
        }

        .card {
            background: white;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-success {
            background-color: #2ecc71;
            border: none;
            transition: background 0.3s;
        }

        .btn-success:hover {
            background-color: #27ae60;
        }
    </style>
{% endblock %}
", "lit/frontoffice/new.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\lit\\frontoffice\\new.html.twig");
    }
}
