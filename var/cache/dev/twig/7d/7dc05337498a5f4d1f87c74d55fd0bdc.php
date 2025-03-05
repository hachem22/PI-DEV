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

/* utilisateur/show.html.twig */
class __TwigTemplate_c547f2c86008e09560cec8249049ccd2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/show.html.twig"));

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
                  <h5 class=\"mb-0\">Basic with Icons</h5>
                  <small class=\"text-muted float-end\">Merged input group</small>
                </div>
                <div class=\"card-body\">
                  <form>
                    <div class=\"mb-6\">
                      <label class=\"form-label\" for=\"basic-icon-default-fullname\">Full Name</label>
                      <div class=\"input-group input-group-merge\">
                        <span id=\"basic-icon-default-fullname2\" class=\"input-group-text\"
                          ><i class=\"bx bx-user\"></i
                        ></span>
                        <input
                          type=\"text\"
                          class=\"form-control\"
                          id=\"basic-icon-default-fullname\"
                          placeholder=\"John Doe\"
                          aria-label=\"John Doe\"
                          aria-describedby=\"basic-icon-default-fullname2\" />
                      </div>
                    </div>
                    <div class=\"mb-6\">
                      <label class=\"form-label\" for=\"basic-icon-default-company\">Company</label>
                      <div class=\"input-group input-group-merge\">
                        <span id=\"basic-icon-default-company2\" class=\"input-group-text\"
                          ><i class=\"bx bx-buildings\"></i
                        ></span>
                        <input
                          type=\"text\"
                          id=\"basic-icon-default-company\"
                          class=\"form-control\"
                          placeholder=\"ACME Inc.\"
                          aria-label=\"ACME Inc.\"
                          aria-describedby=\"basic-icon-default-company2\" />
                      </div>
                    </div>
                    <div class=\"mb-6\">
                      <label class=\"form-label\" for=\"basic-icon-default-email\">Email</label>
                      <div class=\"input-group input-group-merge\">
                        <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                        <input
                          type=\"text\"
                          id=\"basic-icon-default-email\"
                          class=\"form-control\"
                          placeholder=\"john.doe\"
                          aria-label=\"john.doe\"
                          aria-describedby=\"basic-icon-default-email2\" />
                        <span id=\"basic-icon-default-email2\" class=\"input-group-text\">@example.com</span>
                      </div>
                      <div class=\"form-text\">You can use letters, numbers & periods</div>
                    </div>
                    <div class=\"mb-6\">
                      <label class=\"form-label\" for=\"basic-icon-default-phone\">Phone No</label>
                      <div class=\"input-group input-group-merge\">
                        <span id=\"basic-icon-default-phone2\" class=\"input-group-text\"
                          ><i class=\"bx bx-phone\"></i
                        ></span>
                        <input
                          type=\"text\"
                          id=\"basic-icon-default-phone\"
                          class=\"form-control phone-mask\"
                          placeholder=\"658 799 8941\"
                          aria-label=\"658 799 8941\"
                          aria-describedby=\"basic-icon-default-phone2\" />
                      </div>
                    </div>
                    <div class=\"mb-6\">
                      <label class=\"form-label\" for=\"basic-icon-default-message\">Message</label>
                      <div class=\"input-group input-group-merge\">
                        <span id=\"basic-icon-default-message2\" class=\"input-group-text\"
                          ><i class=\"bx bx-comment\"></i
                        ></span>
                        <textarea
                          id=\"basic-icon-default-message\"
                          class=\"form-control\"
                          placeholder=\"Hi, Do you have a moment to talk Joe?\"
                          aria-label=\"Hi, Do you have a moment to talk Joe?\"
                          aria-describedby=\"basic-icon-default-message2\"></textarea>
                      </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Send</button>
                  </form>
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
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src=\"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/js/main.js"), "html", null, true);
        yield "\"></script>

    <!-- Page JS -->

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
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
        return "utilisateur/show.html.twig";
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
        return array (  264 => 173,  255 => 167,  251 => 166,  247 => 165,  243 => 164,  239 => 163,  120 => 47,  114 => 44,  106 => 39,  100 => 36,  96 => 35,  92 => 34,  86 => 31,  74 => 22,  57 => 8,  48 => 1,);
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
                  <h5 class=\"mb-0\">Basic with Icons</h5>
                  <small class=\"text-muted float-end\">Merged input group</small>
                </div>
                <div class=\"card-body\">
                  <form>
                    <div class=\"mb-6\">
                      <label class=\"form-label\" for=\"basic-icon-default-fullname\">Full Name</label>
                      <div class=\"input-group input-group-merge\">
                        <span id=\"basic-icon-default-fullname2\" class=\"input-group-text\"
                          ><i class=\"bx bx-user\"></i
                        ></span>
                        <input
                          type=\"text\"
                          class=\"form-control\"
                          id=\"basic-icon-default-fullname\"
                          placeholder=\"John Doe\"
                          aria-label=\"John Doe\"
                          aria-describedby=\"basic-icon-default-fullname2\" />
                      </div>
                    </div>
                    <div class=\"mb-6\">
                      <label class=\"form-label\" for=\"basic-icon-default-company\">Company</label>
                      <div class=\"input-group input-group-merge\">
                        <span id=\"basic-icon-default-company2\" class=\"input-group-text\"
                          ><i class=\"bx bx-buildings\"></i
                        ></span>
                        <input
                          type=\"text\"
                          id=\"basic-icon-default-company\"
                          class=\"form-control\"
                          placeholder=\"ACME Inc.\"
                          aria-label=\"ACME Inc.\"
                          aria-describedby=\"basic-icon-default-company2\" />
                      </div>
                    </div>
                    <div class=\"mb-6\">
                      <label class=\"form-label\" for=\"basic-icon-default-email\">Email</label>
                      <div class=\"input-group input-group-merge\">
                        <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                        <input
                          type=\"text\"
                          id=\"basic-icon-default-email\"
                          class=\"form-control\"
                          placeholder=\"john.doe\"
                          aria-label=\"john.doe\"
                          aria-describedby=\"basic-icon-default-email2\" />
                        <span id=\"basic-icon-default-email2\" class=\"input-group-text\">@example.com</span>
                      </div>
                      <div class=\"form-text\">You can use letters, numbers & periods</div>
                    </div>
                    <div class=\"mb-6\">
                      <label class=\"form-label\" for=\"basic-icon-default-phone\">Phone No</label>
                      <div class=\"input-group input-group-merge\">
                        <span id=\"basic-icon-default-phone2\" class=\"input-group-text\"
                          ><i class=\"bx bx-phone\"></i
                        ></span>
                        <input
                          type=\"text\"
                          id=\"basic-icon-default-phone\"
                          class=\"form-control phone-mask\"
                          placeholder=\"658 799 8941\"
                          aria-label=\"658 799 8941\"
                          aria-describedby=\"basic-icon-default-phone2\" />
                      </div>
                    </div>
                    <div class=\"mb-6\">
                      <label class=\"form-label\" for=\"basic-icon-default-message\">Message</label>
                      <div class=\"input-group input-group-merge\">
                        <span id=\"basic-icon-default-message2\" class=\"input-group-text\"
                          ><i class=\"bx bx-comment\"></i
                        ></span>
                        <textarea
                          id=\"basic-icon-default-message\"
                          class=\"form-control\"
                          placeholder=\"Hi, Do you have a moment to talk Joe?\"
                          aria-label=\"Hi, Do you have a moment to talk Joe?\"
                          aria-describedby=\"basic-icon-default-message2\"></textarea>
                      </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Send</button>
                  </form>
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
  </body>
</html>", "utilisateur/show.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\utilisateur\\show.html.twig");
    }
}
