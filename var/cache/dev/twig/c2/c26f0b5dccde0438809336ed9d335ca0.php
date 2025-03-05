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

/* entretient_chambre/front/new.html.twig */
class __TwigTemplate_6046465101195e2ee25e3581a355188f extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "chambre/baseNav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretient_chambre/front/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretient_chambre/front/new.html.twig"));

        $this->parent = $this->loadTemplate("chambre/baseNav.html.twig", "entretient_chambre/front/new.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <!doctype html>
    <html lang=\"fr\" class=\"light-style layout-menu-fixed layout-compact\" dir=\"ltr\" data-theme=\"theme-default\" data-assets-path=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/"), "html", null, true);
        yield "\" data-template=\"vertical-menu-template-free\" data-style=\"light\">
        <head>
            <meta charset=\"utf-8\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
            <title>Créer un Entretien de Chambre</title>
            <meta name=\"description\" content=\"\" />
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/favicon/favicon.ico"), "html", null, true);
        yield "\" />
            <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
            <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />
            <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/fonts/boxicons.css"), "html", null, true);
        yield "\" />
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
            <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />
            <script src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/js/config.js"), "html", null, true);
        yield "\"></script>
        </head>

        ";
        // line 24
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 143
        yield "    </html>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 24
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

        // line 25
        yield "            <div class=\"layout-wrapper layout-content-navbar\">
                <div class=\"layout-container\">
                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        <div class=\"row\">
                            <div class=\"col-xl\" style=\"margin-left: 250px; margin-top: 300px; width: 500px;\">
                                <div class=\"card mb-6\">
                                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                                        <h5 class=\"mb-0\">Créer un Entretien de Chambre</h5>
                                        <small class=\"text-body float-end\">Remplissez les détails</small>
                                    </div>
                                    <div class=\"card-body\">
                                        ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.type\">
                                                <i class=\"bx bx-cog\"></i> Type d'entretien
                                            </label>
                                            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "type", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                            ";
        // line 43
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "type", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "errors", [], "any", false, false, false, 43)) > 0)) {
            // line 44
            yield "                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    ";
            // line 45
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "type", [], "any", false, false, false, 45), 'errors');
            yield "
                                                </span>
                                            ";
        }
        // line 48
        yield "                                        </div>

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.chambre\">
                                                <i class=\"bx bx-bed\"></i> Chambre associée
                                            </label>
                                            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "chambre", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                            ";
        // line 55
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "chambre", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "errors", [], "any", false, false, false, 55)) > 0)) {
            // line 56
            yield "                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    ";
            // line 57
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "chambre", [], "any", false, false, false, 57), 'errors');
            yield "
                                                </span>
                                            ";
        }
        // line 60
        yield "                                        </div>

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.datedebut\">
                                                <i class=\"bx bx-calendar\"></i> Date de début
                                            </label>
                                            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "datedebut", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control datetime-picker"]]);
        yield "
                                            ";
        // line 67
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "datedebut", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "errors", [], "any", false, false, false, 67)) > 0)) {
            // line 68
            yield "                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    ";
            // line 69
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "datedebut", [], "any", false, false, false, 69), 'errors');
            yield "
                                                </span>
                                            ";
        }
        // line 72
        yield "                                        </div>

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.datefin\">
                                                <i class=\"bx bx-calendar-check\"></i> Date de fin
                                            </label>
                                            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "datefin", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control datetime-picker"]]);
        yield "
                                            ";
        // line 79
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "datefin", [], "any", false, false, false, 79), "vars", [], "any", false, false, false, 79), "errors", [], "any", false, false, false, 79)) > 0)) {
            // line 80
            yield "                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    ";
            // line 81
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "datefin", [], "any", false, false, false, 81), 'errors');
            yield "
                                                </span>
                                            ";
        }
        // line 84
        yield "                                        </div>

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.statut\">
                                                <i class=\"bx bx-check-circle\"></i> Statut
                                            </label>
                                            ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "statut", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                            ";
        // line 91
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "statut", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "errors", [], "any", false, false, false, 91)) > 0)) {
            // line 92
            yield "                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    ";
            // line 93
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "statut", [], "any", false, false, false, 93), 'errors');
            yield "
                                                </span>
                                            ";
        }
        // line 96
        yield "                                        </div>

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.details\">
                                                <i class=\"bx bx-detail\"></i> Détails
                                            </label>
                                            ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "details", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                            ";
        // line 103
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "details", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "errors", [], "any", false, false, false, 103)) > 0)) {
            // line 104
            yield "                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    ";
            // line 105
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "details", [], "any", false, false, false, 105), 'errors');
            yield "
                                                </span>
                                            ";
        }
        // line 108
        yield "                                        </div>
                                        <div class=\"mb-6\">
                    ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "femmedemenage", [], "any", false, false, false, 110), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "FemmeDeMenage"]);
        yield "
                    <div class=\"input-group\">
                        <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                        ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "femmedemenage", [], "any", false, false, false, 113), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                       

                    </div>
                </div>
                

                                        <button class=\"btn btn-primary btn-lg\">Créer l'entretien</button>
                                        ";
        // line 121
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), 'form_end');
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    let form = document.getElementById('entretienForm');
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    });
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
        return "entretient_chambre/front/new.html.twig";
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
        return array (  326 => 121,  315 => 113,  309 => 110,  305 => 108,  299 => 105,  296 => 104,  294 => 103,  290 => 102,  282 => 96,  276 => 93,  273 => 92,  271 => 91,  267 => 90,  259 => 84,  253 => 81,  250 => 80,  248 => 79,  244 => 78,  236 => 72,  230 => 69,  227 => 68,  225 => 67,  221 => 66,  213 => 60,  207 => 57,  204 => 56,  202 => 55,  198 => 54,  190 => 48,  184 => 45,  181 => 44,  179 => 43,  175 => 42,  166 => 36,  153 => 25,  140 => 24,  128 => 143,  126 => 24,  120 => 21,  116 => 20,  112 => 19,  108 => 18,  104 => 17,  100 => 16,  96 => 15,  89 => 11,  80 => 5,  77 => 4,  64 => 3,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends \"chambre/baseNav.html.twig\" %}
{% block content %}
    <!doctype html>
    <html lang=\"fr\" class=\"light-style layout-menu-fixed layout-compact\" dir=\"ltr\" data-theme=\"theme-default\" data-assets-path=\"{{ asset('../assets/') }}\" data-template=\"vertical-menu-template-free\" data-style=\"light\">
        <head>
            <meta charset=\"utf-8\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
            <title>Créer un Entretien de Chambre</title>
            <meta name=\"description\" content=\"\" />
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('../assets/img/favicon/favicon.ico') }}\" />
            <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
            <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />
            <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/fonts/boxicons.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/css/core.css') }}\" class=\"template-customizer-core-css\" />
            <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/css/theme-default.css') }}\" class=\"template-customizer-theme-css\" />
            <link rel=\"stylesheet\" href=\"{{ asset('../assets/css/demo.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\" />
            <script src=\"{{ asset('../assets/vendor/js/helpers.js') }}\"></script>
            <script src=\"{{ asset('../assets/js/config.js') }}\"></script>
        </head>

        {% block body %}
            <div class=\"layout-wrapper layout-content-navbar\">
                <div class=\"layout-container\">
                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        <div class=\"row\">
                            <div class=\"col-xl\" style=\"margin-left: 250px; margin-top: 300px; width: 500px;\">
                                <div class=\"card mb-6\">
                                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                                        <h5 class=\"mb-0\">Créer un Entretien de Chambre</h5>
                                        <small class=\"text-body float-end\">Remplissez les détails</small>
                                    </div>
                                    <div class=\"card-body\">
                                        {{ form_start(form, {'attr': {'novalidate': 'novalidate' }}) }}

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.type\">
                                                <i class=\"bx bx-cog\"></i> Type d'entretien
                                            </label>
                                            {{ form_widget(form.type, {'attr': {'class': 'form-select' }}) }}
                                            {% if form.type.vars.errors|length > 0 %}
                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    {{ form_errors(form.type) }}
                                                </span>
                                            {% endif %}
                                        </div>

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.chambre\">
                                                <i class=\"bx bx-bed\"></i> Chambre associée
                                            </label>
                                            {{ form_widget(form.chambre, {'attr': {'class': 'form-select' }}) }}
                                            {% if form.chambre.vars.errors|length > 0 %}
                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    {{ form_errors(form.chambre) }}
                                                </span>
                                            {% endif %}
                                        </div>

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.datedebut\">
                                                <i class=\"bx bx-calendar\"></i> Date de début
                                            </label>
                                            {{ form_widget(form.datedebut, {'attr': {'class': 'form-control datetime-picker' }}) }}
                                            {% if form.datedebut.vars.errors|length > 0 %}
                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    {{ form_errors(form.datedebut) }}
                                                </span>
                                            {% endif %}
                                        </div>

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.datefin\">
                                                <i class=\"bx bx-calendar-check\"></i> Date de fin
                                            </label>
                                            {{ form_widget(form.datefin, {'attr': {'class': 'form-control datetime-picker' }}) }}
                                            {% if form.datefin.vars.errors|length > 0 %}
                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    {{ form_errors(form.datefin) }}
                                                </span>
                                            {% endif %}
                                        </div>

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.statut\">
                                                <i class=\"bx bx-check-circle\"></i> Statut
                                            </label>
                                            {{ form_widget(form.statut, {'attr': {'class': 'form-select' }}) }}
                                            {% if form.statut.vars.errors|length > 0 %}
                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    {{ form_errors(form.statut) }}
                                                </span>
                                            {% endif %}
                                        </div>

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.details\">
                                                <i class=\"bx bx-detail\"></i> Détails
                                            </label>
                                            {{ form_widget(form.details, {'attr': {'class': 'form-control' }}) }}
                                            {% if form.details.vars.errors|length > 0 %}
                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    {{ form_errors(form.details) }}
                                                </span>
                                            {% endif %}
                                        </div>
                                        <div class=\"mb-6\">
                    {{ form_label(form.femmedemenage, 'FemmeDeMenage', { 'label_attr': { 'class': 'form-label fw-bold' } }) }}
                    <div class=\"input-group\">
                        <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                        {{ form_widget(form.femmedemenage, { 'attr': { 'class': 'form-control' } }) }}
                       

                    </div>
                </div>
                

                                        <button class=\"btn btn-primary btn-lg\">Créer l'entretien</button>
                                        {{ form_end(form) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    let form = document.getElementById('entretienForm');
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    });
                });
            </script>
            
        {% endblock %}
    </html>
    {% endblock %}
", "entretient_chambre/front/new.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\entretient_chambre\\front\\new.html.twig");
    }
}
