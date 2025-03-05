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

/* utilisateur/edit.html.twig */
class __TwigTemplate_d28176b11dbefda0f9e0c8590fb60e1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/edit.html.twig"));

        $this->parent = $this->loadTemplate("utilisateur/sidenav.html.twig", "utilisateur/edit.html.twig", 1);
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
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/"), "html", null, true);
        yield "\" data-template=\"vertical-menu-template-free\" data-style=\"light\">
        <head>
            <meta charset=\"utf-8\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

            <title>
                Modifier un employé
            </title>

            <meta name=\"description\" content=\"\" />

            <!-- Favicon -->
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/favicon/favicon.ico"), "html", null, true);
        yield "\" />

            <!-- Fonts -->
            <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
            <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\" />

            <link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/fonts/boxicons.css"), "html", null, true);
        yield "\" />

            <!-- Core CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/css/core.css"), "html", null, true);
        yield "\" class=\"template-customizer-core-css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/css/theme-default.css"), "html", null, true);
        yield "\" class=\"template-customizer-theme-css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/css/demo.css"), "html", null, true);
        yield "\" />

            <!-- Vendors CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />

            <!-- Helpers -->
            <script src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/js/config.js"), "html", null, true);
        yield "\"></script>
        </head>

        ";
        // line 40
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 210
        yield "    </html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 40
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

        // line 41
        yield "            <!-- Layout wrapper -->
            <div class=\"layout-wrapper layout-content-navbar\">
                <div class=\"layout-container\">
                    <!-- Menu -->

                    <!-- Content -->
                        <div class=\"container-xxl flex-grow-1 container-p-y\"> <!-- Basic Layout -->
                        <div class=\"row\">
                            <div class=\"col-xl\" style=\"margin-left: 250px; margin-top: 750px; width: 500px;\">
                                <div class=\"card mb-6\">
                                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                                        <h5 class=\"mb-0\">
                                            Ajouter un employé
                                        </h5>
                                        <small class=\"text-body float-end\">
                                            Remplissez les détails
                                        </small>
                                    </div>
                                    <div class=\"card-body\">
                                        ";
        // line 60
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        // line 61
        yield "
                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.Nom\">
                                                <i class=\"bx bx-user\"></i>
                                                Nom
                                            </label>
                                            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "Nom", [], "any", false, false, false, 67), 'row', ["attr" => ["class" => "form-control"]]);
        // line 68
        yield "
                                        </div>
                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.Prenom\">
                                                <i class=\"bx bx-user\"></i>
                                                Prénom
                                            </label>
                                            ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "Prenom", [], "any", false, false, false, 75), 'row', ["attr" => ["class" => "form-control"]]);
        // line 76
        yield "
                                        </div>
                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.Email\">
                                                <i class=\"bx bx-envelope\"></i>
                                                Email
                                            </label>
                                            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "Email", [], "any", false, false, false, 83), 'row', ["attr" => ["class" => "form-control"]]);
        // line 84
        yield "
                                        </div>
                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.Adress\">
                                                <i class=\"bx bx-home\"></i>
                                                Adresse
                                            </label>
                                            ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "Adress", [], "any", false, false, false, 91), 'row', ["attr" => ["class" => "form-control"]]);
        // line 92
        yield "
                                        </div>
                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.Tel\">
                                                <i class=\"bx bx-phone\"></i>
                                                Téléphone
                                            </label>
                                            ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "Tel", [], "any", false, false, false, 99), 'row', ["attr" => ["class" => "form-control"]]);
        // line 100
        yield "
                                        </div>

                                        ";
        // line 104
        yield "                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.utilisateurRole\">
                                                <i class=\"bx bx-id-card\"></i>
                                                Rôle
                                            </label>
                                            ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "utilisateurRole", [], "any", false, false, false, 109), 'row', ["attr" => ["class" => "form-control js-role-selector"]]);
        // line 111
        yield "
                                        </div>

                                        ";
        // line 115
        yield "                                        <div id=\"service-field\" class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.service\">
                                                <i class=\"bx bx-building\"></i>
                                                Service
                                            </label>
                                            ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "service", [], "any", false, false, false, 120), 'row', ["attr" => ["class" => "form-control"]]);
        // line 121
        yield "
                                        </div>

                                        ";
        // line 125
        yield "                                        <div id=\"medecin-fields\" style=\"display: none;\" class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.Grade\">
                                                <i class=\"bx bx-award\"></i>
                                                Grade
                                            </label>
                                            ";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "Grade", [], "any", false, false, false, 130), 'row', ["attr" => ["class" => "form-control"]]);
        // line 131
        yield "
                                            <label class=\"form-label\" for=\"form.medecinSpecilaite\">
                                                <i class=\"bx bx-plus-medical\"></i>
                                                Spécialité
                                            </label>
                                            ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "medecinSpecilaite", [], "any", false, false, false, 136), 'row', ["attr" => ["class" => "form-control"]]);
        // line 137
        yield "
                                        </div>

                                        <button class=\"btn btn-primary\">
                                            ";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 141, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        yield "
                                        </button>
                                        ";
        // line 143
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), 'form_end');
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <div class=\"content-backdrop fade\"></div>
                </div>
            <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        <a href=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_index");
        yield "\">back to list</a>

        ";
        // line 158
        yield Twig\Extension\CoreExtension::include($this->env, $context, "utilisateur/_delete_form.html.twig");
        yield "
            <!-- Overlay -->
            <div class=\"layout-overlay layout-menu-toggle\"></div>
            <!-- / Layout wrapper -->

            <!-- Core JS -->
            <script src=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>

            <!-- Main JS -->
            <script src=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/js/main.js"), "html", null, true);
        yield "\"></script>

            <!-- Custom Script -->
            <script>
      document.addEventListener('DOMContentLoaded', function() {
          let roleSelector = document.querySelector('.js-role-selector');
          let medecinFields = document.getElementById('medecin-fields');
          let serviceField = document.getElementById('service-field');

          function toggleFields() {
              let selectedRole = roleSelector.value;

              // Show/hide Medecin-specific fields
              if (selectedRole === 'Medecin') { 
                  medecinFields.style.display = 'block';
              } else {
                  medecinFields.style.display = 'none';
                  medecinFields.querySelectorAll('input, select').forEach(field => {
                      field.value = ''; // Reset values when hidden
                  });
              }

              // Show/hide Service field for Medecin, Infirmier, Responsable
              if (['Medecin', 'Infirmier', 'Responsable'].includes(selectedRole)) {
                  serviceField.style.display = 'block';
              } else {
                  serviceField.style.display = 'none';
                  serviceField.querySelector('select').value = ''; // Reset when hidden
              }
          }

          // Run on page load (for edit forms)
          toggleFields();

          // Listen for changes
          roleSelector.addEventListener('change', toggleFields);
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
        return "utilisateur/edit.html.twig";
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
        return array (  360 => 171,  354 => 168,  350 => 167,  346 => 166,  342 => 165,  338 => 164,  329 => 158,  324 => 156,  308 => 143,  303 => 141,  297 => 137,  295 => 136,  288 => 131,  286 => 130,  279 => 125,  274 => 121,  272 => 120,  265 => 115,  260 => 111,  258 => 109,  251 => 104,  246 => 100,  244 => 99,  235 => 92,  233 => 91,  224 => 84,  222 => 83,  213 => 76,  211 => 75,  202 => 68,  200 => 67,  192 => 61,  190 => 60,  169 => 41,  156 => 40,  144 => 210,  142 => 40,  136 => 37,  132 => 36,  126 => 33,  120 => 30,  116 => 29,  112 => 28,  106 => 25,  96 => 18,  81 => 6,  77 => 4,  64 => 3,  41 => 1,);
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

            <title>
                Modifier un employé
            </title>

            <meta name=\"description\" content=\"\" />

            <!-- Favicon -->
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('../assets/img/favicon/favicon.ico') }}\" />

            <!-- Fonts -->
            <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
            <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\" />

            <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/fonts/boxicons.css') }}\" />

            <!-- Core CSS -->
            <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/css/core.css') }}\" class=\"template-customizer-core-css\" />
            <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/css/theme-default.css') }}\" class=\"template-customizer-theme-css\" />
            <link rel=\"stylesheet\" href=\"{{ asset('../assets/css/demo.css') }}\" />

            <!-- Vendors CSS -->
            <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\" />

            <!-- Helpers -->
            <script src=\"{{ asset('../assets/vendor/js/helpers.js') }}\"></script>
            <script src=\"{{ asset('../assets/js/config.js') }}\"></script>
        </head>

        {% block body %}
            <!-- Layout wrapper -->
            <div class=\"layout-wrapper layout-content-navbar\">
                <div class=\"layout-container\">
                    <!-- Menu -->

                    <!-- Content -->
                        <div class=\"container-xxl flex-grow-1 container-p-y\"> <!-- Basic Layout -->
                        <div class=\"row\">
                            <div class=\"col-xl\" style=\"margin-left: 250px; margin-top: 750px; width: 500px;\">
                                <div class=\"card mb-6\">
                                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                                        <h5 class=\"mb-0\">
                                            Ajouter un employé
                                        </h5>
                                        <small class=\"text-body float-end\">
                                            Remplissez les détails
                                        </small>
                                    </div>
                                    <div class=\"card-body\">
                                        {{ form_start(form, {'attr': {'novalidate': 'novalidate' }}
                                        ) }}
                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.Nom\">
                                                <i class=\"bx bx-user\"></i>
                                                Nom
                                            </label>
                                            {{ form_row(form.Nom, {'attr': {'class': 'form-control' }}
                                            ) }}
                                        </div>
                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.Prenom\">
                                                <i class=\"bx bx-user\"></i>
                                                Prénom
                                            </label>
                                            {{ form_row(form.Prenom, {'attr': {'class': 'form-control' }}
                                            ) }}
                                        </div>
                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.Email\">
                                                <i class=\"bx bx-envelope\"></i>
                                                Email
                                            </label>
                                            {{ form_row(form.Email, {'attr': {'class': 'form-control' }}
                                            ) }}
                                        </div>
                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.Adress\">
                                                <i class=\"bx bx-home\"></i>
                                                Adresse
                                            </label>
                                            {{ form_row(form.Adress, {'attr': {'class': 'form-control' }}
                                            ) }}
                                        </div>
                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.Tel\">
                                                <i class=\"bx bx-phone\"></i>
                                                Téléphone
                                            </label>
                                            {{ form_row(form.Tel, {'attr': {'class': 'form-control' }}
                                            ) }}
                                        </div>

                                        {# Utilisateur Role Field #}
                                        <div class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.utilisateurRole\">
                                                <i class=\"bx bx-id-card\"></i>
                                                Rôle
                                            </label>
                                            {{ form_row(form.utilisateurRole, {
                          'attr': {'class': 'form-control js-role-selector'}
                      }) }}
                                        </div>

                                        {# Service Field - Initially Hidden #}
                                        <div id=\"service-field\" class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.service\">
                                                <i class=\"bx bx-building\"></i>
                                                Service
                                            </label>
                                            {{ form_row(form.service, {'attr': {'class': 'form-control' }}
                                            ) }}
                                        </div>

                                        {# Medecin Fields - Initially Hidden #}
                                        <div id=\"medecin-fields\" style=\"display: none;\" class=\"mb-6\">
                                            <label class=\"form-label\" for=\"form.Grade\">
                                                <i class=\"bx bx-award\"></i>
                                                Grade
                                            </label>
                                            {{ form_row(form.Grade, {'attr': {'class': 'form-control' }}
                                            ) }}
                                            <label class=\"form-label\" for=\"form.medecinSpecilaite\">
                                                <i class=\"bx bx-plus-medical\"></i>
                                                Spécialité
                                            </label>
                                            {{ form_row(form.medecinSpecilaite, {'attr': {'class': 'form-control' }}
                                            ) }}
                                        </div>

                                        <button class=\"btn btn-primary\">
                                            {{ button_label|default('Sauvegarder') }}
                                        </button>
                                        {{ form_end(form) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <div class=\"content-backdrop fade\"></div>
                </div>
            <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        <a href=\"{{ path('app_utilisateur_index') }}\">back to list</a>

        {{ include('utilisateur/_delete_form.html.twig') }}
            <!-- Overlay -->
            <div class=\"layout-overlay layout-menu-toggle\"></div>
            <!-- / Layout wrapper -->

            <!-- Core JS -->
            <script src=\"{{ asset('../assets/vendor/libs/jquery/jquery.js') }}\"></script>
            <script src=\"{{ asset('../assets/vendor/libs/popper/popper.js') }}\"></script>
            <script src=\"{{ asset('../assets/vendor/js/bootstrap.js') }}\"></script>
            <script src=\"{{ asset('../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
            <script src=\"{{ asset('../assets/vendor/js/menu.js') }}\"></script>

            <!-- Main JS -->
            <script src=\"{{ asset('../assets/js/main.js') }}\"></script>

            <!-- Custom Script -->
            <script>
      document.addEventListener('DOMContentLoaded', function() {
          let roleSelector = document.querySelector('.js-role-selector');
          let medecinFields = document.getElementById('medecin-fields');
          let serviceField = document.getElementById('service-field');

          function toggleFields() {
              let selectedRole = roleSelector.value;

              // Show/hide Medecin-specific fields
              if (selectedRole === 'Medecin') { 
                  medecinFields.style.display = 'block';
              } else {
                  medecinFields.style.display = 'none';
                  medecinFields.querySelectorAll('input, select').forEach(field => {
                      field.value = ''; // Reset values when hidden
                  });
              }

              // Show/hide Service field for Medecin, Infirmier, Responsable
              if (['Medecin', 'Infirmier', 'Responsable'].includes(selectedRole)) {
                  serviceField.style.display = 'block';
              } else {
                  serviceField.style.display = 'none';
                  serviceField.querySelector('select').value = ''; // Reset when hidden
              }
          }

          // Run on page load (for edit forms)
          toggleFields();

          // Listen for changes
          roleSelector.addEventListener('change', toggleFields);
      });
    </script>
        {% endblock %}
    </html>
{% endblock %}
", "utilisateur/edit.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\utilisateur\\edit.html.twig");
    }
}
