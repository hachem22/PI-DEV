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

/* utilisateur/form-layouts-vertical.html.twig */
class __TwigTemplate_39eb07abddc1aa894362744cd4b2682d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/form-layouts-vertical.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/form-layouts-vertical.html.twig"));

        // line 1
        yield "<!doctype html>

<html
  lang=\"en\"
  class=\"light-style layout-menu-fixed layout-compact\"
  dir=\"ltr\"
  data-theme=\"theme-default\"
  data-assets-path=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/"), "html", null, true);
        yield "\"
  data-template=\"vertical-menu-template-free\"
  data-style=\"light\">
  <head>
    <meta charset=\"utf-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

    <title>Demo : Vertical Layouts - Forms | sneat - Bootstrap Dashboard PRO</title>

    <meta name=\"description\" content=\"\" />

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/favicon/favicon.ico"), "html", null, true);
        yield "\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
      href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
      rel=\"stylesheet\" />

    <link rel=\"stylesheet\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/fonts/boxicons.css"), "html", null, true);
        yield "\" />

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/css/core.css"), "html", null, true);
        yield "\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/css/theme-default.css"), "html", null, true);
        yield "\" class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/css/demo.css"), "html", null, true);
        yield "\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/js/config.js"), "html", null, true);
        yield "\"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
      <div class=\"layout-container\">
        <!-- Menu -->

        <!-- Content -->
        <div class=\"container-xxl flex-grow-1 container-p-y\">
          <!-- Basic Layout -->
          <div class=\"row\">
            <div class=\"col-xl\">
              <div class=\"card mb-6\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                  <h5 class=\"mb-0\">User Form</h5>
                  <small class=\"text-body float-end\">Fill in the details</small>
                </div>
                <div class=\"card-body\">
                  ";
        // line 67
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                    <div class=\"mb-6\">
                      ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "Nom", [], "any", false, false, false, 69), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    <div class=\"mb-6\">
                      ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "Prenom", [], "any", false, false, false, 72), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    <div class=\"mb-6\">
                      ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "Email", [], "any", false, false, false, 75), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    <div class=\"mb-6\">
                      ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "Adress", [], "any", false, false, false, 78), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    <div class=\"mb-6\">
                      ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "Tel", [], "any", false, false, false, 81), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>

                    ";
        // line 85
        yield "                    <div class=\"mb-6\">
                      ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "utilisateurRole", [], "any", false, false, false, 86), 'row', ["attr" => ["class" => "form-control js-role-selector"]]);
        // line 88
        yield "
                    </div>

                    ";
        // line 92
        yield "                    <div id=\"service-field\" class=\"mb-6\">
                      ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "service", [], "any", false, false, false, 93), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>

                    ";
        // line 97
        yield "                    <div id=\"medecin-fields\" style=\"display: none;\" class=\"mb-6\">
                      ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "Grade", [], "any", false, false, false, 98), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                      ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "medecinSpecilaite", [], "any", false, false, false, 99), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>

                    <button class=\"btn btn-primary\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 102, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
                  ";
        // line 103
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'form_end');
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

    <!-- Overlay -->
    <div class=\"layout-overlay layout-menu-toggle\"></div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/js/main.js"), "html", null, true);
        yield "\"></script>

    <!-- Page JS -->

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>

    <!-- Your Custom Script -->
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
  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "utilisateur/form-layouts-vertical.html.twig";
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
        return array (  262 => 133,  253 => 127,  249 => 126,  245 => 125,  241 => 124,  237 => 123,  214 => 103,  210 => 102,  204 => 99,  200 => 98,  197 => 97,  191 => 93,  188 => 92,  183 => 88,  181 => 86,  178 => 85,  172 => 81,  166 => 78,  160 => 75,  154 => 72,  148 => 69,  143 => 67,  120 => 47,  114 => 44,  106 => 39,  100 => 36,  96 => 35,  92 => 34,  86 => 31,  74 => 22,  57 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>

<html
  lang=\"en\"
  class=\"light-style layout-menu-fixed layout-compact\"
  dir=\"ltr\"
  data-theme=\"theme-default\"
  data-assets-path=\"{{ asset('../assets/') }}\"
  data-template=\"vertical-menu-template-free\"
  data-style=\"light\">
  <head>
    <meta charset=\"utf-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

    <title>Demo : Vertical Layouts - Forms | sneat - Bootstrap Dashboard PRO</title>

    <meta name=\"description\" content=\"\" />

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('../assets/img/favicon/favicon.ico') }}\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
      href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
      rel=\"stylesheet\" />

    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/fonts/boxicons.css') }}\" />

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/css/core.css') }}\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/css/theme-default.css') }}\" class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/css/demo.css') }}\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src=\"{{ asset('../assets/vendor/js/helpers.js') }}\"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src=\"{{ asset('../assets/js/config.js') }}\"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
      <div class=\"layout-container\">
        <!-- Menu -->

        <!-- Content -->
        <div class=\"container-xxl flex-grow-1 container-p-y\">
          <!-- Basic Layout -->
          <div class=\"row\">
            <div class=\"col-xl\">
              <div class=\"card mb-6\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                  <h5 class=\"mb-0\">User Form</h5>
                  <small class=\"text-body float-end\">Fill in the details</small>
                </div>
                <div class=\"card-body\">
                  {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                    <div class=\"mb-6\">
                      {{ form_row(form.Nom, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"mb-6\">
                      {{ form_row(form.Prenom, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"mb-6\">
                      {{ form_row(form.Email, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"mb-6\">
                      {{ form_row(form.Adress, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"mb-6\">
                      {{ form_row(form.Tel, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    {# Utilisateur Role Field #}
                    <div class=\"mb-6\">
                      {{ form_row(form.utilisateurRole, {
                          'attr': {'class': 'form-control js-role-selector'}
                      }) }}
                    </div>

                    {# Service Field - Initially Hidden #}
                    <div id=\"service-field\" class=\"mb-6\">
                      {{ form_row(form.service, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    {# Medecin Fields - Initially Hidden #}
                    <div id=\"medecin-fields\" style=\"display: none;\" class=\"mb-6\">
                      {{ form_row(form.Grade, {'attr': {'class': 'form-control'}}) }}
                      {{ form_row(form.medecinSpecilaite, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    <button class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
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

    <!-- Overlay -->
    <div class=\"layout-overlay layout-menu-toggle\"></div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src=\"{{ asset('../assets/vendor/libs/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('../assets/vendor/libs/popper/popper.js') }}\"></script>
    <script src=\"{{ asset('../assets/vendor/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
    <script src=\"{{ asset('../assets/vendor/js/menu.js') }}\"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src=\"{{ asset('../assets/js/main.js') }}\"></script>

    <!-- Page JS -->

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>

    <!-- Your Custom Script -->
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
  </body>
</html>", "utilisateur/form-layouts-vertical.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\utilisateur\\form-layouts-vertical.html.twig");
    }
}
