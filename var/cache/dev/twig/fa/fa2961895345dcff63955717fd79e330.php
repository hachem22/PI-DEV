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

/* chambre/edit.html.twig */
class __TwigTemplate_80d9a1b144efe08d281bc270cf5494f3 extends Template
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
        // line 1
        return "utilisateur/sidenav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/edit.html.twig"));

        $this->parent = $this->loadTemplate("utilisateur/sidenav.html.twig", "chambre/edit.html.twig", 1);
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
            <title>Créer une Nouvelle Chambre</title>
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
        // line 131
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
                            <div class=\"col-xl\" style=\"margin-left: 250px; margin-top: 200px; width: 500px;\">
                                <div class=\"card mb-6\">
                                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                                        <h5 class=\"mb-0\">Modifier chambre ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chambre"]) || array_key_exists("chambre", $context) ? $context["chambre"] : (function () { throw new RuntimeError('Variable "chambre" does not exist.', 32, $this->source); })()), "num", [], "any", false, false, false, 32), "html", null, true);
        yield " </h5>
                                        <small class=\"text-body float-end\">Remplissez les détails</small>
                                    </div>
                                    <div class=\"card-body\">
                                        ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                                        
                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.num\">
                                                <i class=\"bx bx-hash\"></i> Numero ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "num", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                            </label>
                                            ";
        // line 42
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "num", [], "any", false, false, false, 42), "vars", [], "any", false, false, false, 42), "errors", [], "any", false, false, false, 42)) > 0)) {
            // line 43
            yield "                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    ";
            // line 44
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "num", [], "any", false, false, false, 44), 'errors');
            yield "
                                                </span>
                                            ";
        }
        // line 47
        yield "                                        </div>

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.type\">
                                                <i class=\"bx bx-bed\"></i> Type de chambre
                                            </label>
                                            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "type", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                            ";
        // line 54
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "type", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "errors", [], "any", false, false, false, 54)) > 0)) {
            // line 55
            yield "                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    ";
            // line 56
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "type", [], "any", false, false, false, 56), 'errors');
            yield "
                                                </span>
                                            ";
        }
        // line 59
        yield "                                        </div>

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.localisation\">
                                                <i class=\"bx bx-map\"></i> Localisation
                                            </label>
                                            ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "localisation", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                            ";
        // line 66
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "localisation", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "errors", [], "any", false, false, false, 66)) > 0)) {
            // line 67
            yield "                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    ";
            // line 68
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "localisation", [], "any", false, false, false, 68), 'errors');
            yield "
                                                </span>
                                            ";
        }
        // line 71
        yield "                                        </div>

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.position\">
                                                <i class=\"bx bx-building\"></i> Service associé
                                            </label>
                                            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "position", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                            ";
        // line 78
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "position", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "errors", [], "any", false, false, false, 78)) > 0)) {
            // line 79
            yield "                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    ";
            // line 80
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "position", [], "any", false, false, false, 80), 'errors');
            yield "
                                                </span>
                                            ";
        }
        // line 83
        yield "                                        </div>

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.capacite\">
                                                <i class=\"bx bx-user\"></i> Capacité
                                            </label>
                                            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "capacite", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                            ";
        // line 90
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "capacite", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "errors", [], "any", false, false, false, 90)) > 0)) {
            // line 91
            yield "                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    ";
            // line 92
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "capacite", [], "any", false, false, false, 92), 'errors');
            yield "
                                                </span>
                                            ";
        }
        // line 95
        yield "                                        </div>

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.active\">
                                                <i class=\"bx bx-check\"></i> État actif
                                            </label>
                                            ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "active", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                            ";
        // line 102
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "active", [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "errors", [], "any", false, false, false, 102)) > 0)) {
            // line 103
            yield "                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    ";
            // line 104
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "active", [], "any", false, false, false, 104), 'errors');
            yield "
                                                </span>
                                            ";
        }
        // line 107
        yield "                                        </div>

                                        <button class=\"btn btn-primary btn-lg\">Modifier</button>
                                        ";
        // line 110
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), 'form_end');
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
                    let form = document.getElementById('chambreForm');
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
        return "chambre/edit.html.twig";
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
        return array (  312 => 110,  307 => 107,  301 => 104,  298 => 103,  296 => 102,  292 => 101,  284 => 95,  278 => 92,  275 => 91,  273 => 90,  269 => 89,  261 => 83,  255 => 80,  252 => 79,  250 => 78,  246 => 77,  238 => 71,  232 => 68,  229 => 67,  227 => 66,  223 => 65,  215 => 59,  209 => 56,  206 => 55,  204 => 54,  200 => 53,  192 => 47,  186 => 44,  183 => 43,  181 => 42,  176 => 40,  169 => 36,  162 => 32,  153 => 25,  140 => 24,  128 => 131,  126 => 24,  120 => 21,  116 => 20,  112 => 19,  108 => 18,  104 => 17,  100 => 16,  96 => 15,  89 => 11,  80 => 5,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"utilisateur/sidenav.html.twig\" %}

{% block content %}
    <!doctype html>
    <html lang=\"fr\" class=\"light-style layout-menu-fixed layout-compact\" dir=\"ltr\" data-theme=\"theme-default\" data-assets-path=\"{{ asset('../assets/') }}\" data-template=\"vertical-menu-template-free\" data-style=\"light\">
        <head>
            <meta charset=\"utf-8\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
            <title>Créer une Nouvelle Chambre</title>
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
                            <div class=\"col-xl\" style=\"margin-left: 250px; margin-top: 200px; width: 500px;\">
                                <div class=\"card mb-6\">
                                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                                        <h5 class=\"mb-0\">Modifier chambre {{ chambre.num }} </h5>
                                        <small class=\"text-body float-end\">Remplissez les détails</small>
                                    </div>
                                    <div class=\"card-body\">
                                        {{ form_start(form, {'attr': {'novalidate': 'novalidate' }}) }}
                                        
                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.num\">
                                                <i class=\"bx bx-hash\"></i> Numero {{ form_widget(form.num, {'attr': {'class': 'form-control' }}) }}
                                            </label>
                                            {% if form.num.vars.errors|length > 0 %}
                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    {{ form_errors(form.num) }}
                                                </span>
                                            {% endif %}
                                        </div>

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.type\">
                                                <i class=\"bx bx-bed\"></i> Type de chambre
                                            </label>
                                            {{ form_widget(form.type, {'attr': {'class': 'form-select' }}) }}
                                            {% if form.type.vars.errors|length > 0 %}
                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    {{ form_errors(form.type) }}
                                                </span>
                                            {% endif %}
                                        </div>

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.localisation\">
                                                <i class=\"bx bx-map\"></i> Localisation
                                            </label>
                                            {{ form_widget(form.localisation, {'attr': {'class': 'form-control' }}) }}
                                            {% if form.localisation.vars.errors|length > 0 %}
                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    {{ form_errors(form.localisation) }}
                                                </span>
                                            {% endif %}
                                        </div>

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.position\">
                                                <i class=\"bx bx-building\"></i> Service associé
                                            </label>
                                            {{ form_widget(form.position, {'attr': {'class': 'form-select' }}) }}
                                            {% if form.position.vars.errors|length > 0 %}
                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    {{ form_errors(form.position) }}
                                                </span>
                                            {% endif %}
                                        </div>

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.capacite\">
                                                <i class=\"bx bx-user\"></i> Capacité
                                            </label>
                                            {{ form_widget(form.capacite, {'attr': {'class': 'form-control' }}) }}
                                            {% if form.capacite.vars.errors|length > 0 %}
                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    {{ form_errors(form.capacite) }}
                                                </span>
                                            {% endif %}
                                        </div>

                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.active\">
                                                <i class=\"bx bx-check\"></i> État actif
                                            </label>
                                            {{ form_widget(form.active, {'attr': {'class': 'form-select' }}) }}
                                            {% if form.active.vars.errors|length > 0 %}
                                                <span style=\"color: red; font-size: 0.9em; margin-top: 0.5rem;\">
                                                    {{ form_errors(form.active) }}
                                                </span>
                                            {% endif %}
                                        </div>

                                        <button class=\"btn btn-primary btn-lg\">Modifier</button>
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
                    let form = document.getElementById('chambreForm');
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
", "chambre/edit.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\chambre\\edit.html.twig");
    }
}
