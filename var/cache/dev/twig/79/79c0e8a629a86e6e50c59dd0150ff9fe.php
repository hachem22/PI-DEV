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

/* auth-login-basic.html.twig */
class __TwigTemplate_4596b75d8819e5f099efbf17516ff8af extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth-login-basic.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth-login-basic.html.twig"));

        // line 1
        yield "<!doctype html>

<html lang=\"en\" class=\"light-style layout-wide customizer-hide\" dir=\"ltr\" data-theme=\"theme-default\" data-assets-path=\"../assets/\" data-template=\"vertical-menu-template-free\" data-style=\"light\">
  <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

    <title>
      Demo : Login Basic - Pages | sneat - Bootstrap Dashboard PRO
    </title>

    <meta name=\"description\" content=\"\" />

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/favicon/favicon.ico"), "html", null, true);
        yield "\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com"), "html", null, true);
        yield "\" />
    <link rel=\"preconnect\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.gstatic.com"), "html", null, true);
        yield "\" crossorigin />
    <link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"), "html", null, true);
        yield "\" rel=\"stylesheet\" />

    <link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/fonts/boxicons.css"), "html", null, true);
        yield "\" />

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/css/core.css\" class=\"template-customizer-core-css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/css/theme-default.css\" class=\"template-customizer-theme-css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/css/demo.css"), "html", null, true);
        yield "\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel=\"stylesheet\" href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/css/pages/page-auth.css"), "html", null, true);
        yield "\" /> <!-- Helpers -->
    <script src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/js/config.js"), "html", null, true);
        yield "\"></script>
  </head>

    <body>
    <!-- Content -->

      <div class=\"container-xxl\"> <div class=\"authentication-wrapper authentication-basic container-p-y\">
        <div class=\"authentication-inner\">
          <!-- Register -->
          <div class=\"card px-sm-6 px-0\">
            <div class=\"card-body\">
              <!-- Logo -->
              <div class=\"app-brand justify-content-center\">
                <a href=\"index.html\" class=\"app-brand-link gap-2\">
                  <span class=\"app-brand-logo demo\">
                    <svg width=\"25\" viewBox=\"0 0 25 42\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                      <defs>
                        <path d=\"M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z\" id=\"path-1\"></path>
                        <path d=\"M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z\" id=\"path-3\"></path>
                        <path d=\"M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z\" id=\"path-4\"></path>
                        <path d=\"M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z\" id=\"path-5\"></path>
                      </defs>
                      <g id=\"g-app-brand\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                        <g id=\"Brand-Logo\" transform=\"translate(-27.000000, -15.000000)\">
                          <g id=\"Icon\" transform=\"translate(27.000000, 15.000000)\">
                            <g id=\"Mask\" transform=\"translate(0.000000, 8.000000)\">
                              <mask id=\"mask-2\" fill=\"white\">
                                <use xlink:href=\"#path-1\"></use>
                              </mask>
                              <use fill=\"#696cff\" xlink:href=\"#path-1\"></use>
                              <g id=\"Path-3\" mask=\"url(#mask-2)\">
                                <use fill=\"#696cff\" xlink:href=\"#path-3\"></use>
                                <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-3\"></use>
                              </g>
                              <g id=\"Path-4\" mask=\"url(#mask-2)\">
                                <use fill=\"#696cff\" xlink:href=\"#path-4\"></use>
                                <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-4\"></use>
                              </g>
                            </g>
                            <g id=\"Triangle\" transform=\"translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) \">
                              <use fill=\"#696cff\" xlink:href=\"#path-5\"></use>
                              <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-5\"></use>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </span>
                  <span class=\"app-brand-text demo text-heading fw-bold\">
                    sneat
                  </span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class=\"mb-1\">
                Welcome to sneat! 👋
              </h4>
              <p class=\"mb-6\">
                Please sign-in to your account and start the adventure
              </p>

              <form id=\"formAuthentication\" class=\"mb-6\" action=\"index.html\">
                <div class=\"mb-6\">
                  <label for=\"email\" class=\"form-label\">
                    Email
                  </label>
                  <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email-username\" placeholder=\"Enter your email or username\" autofocus value=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 104, $this->source); })()), "html", null, true);
        yield "\" required />
                </div>
                <div class=\"mb-6 form-password-toggle\">
                  <label class=\"form-label\" for=\"password\">
                    Password
                  </label>
                  <div class=\"input-group input-group-merge\">
                    <input type=\"password\" id=\"password\" class=\"form-control\" name=\"password\" placeholder=\"&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;\" aria-describedby=\"password\" required />
                    <span class=\"input-group-text cursor-pointer\">
                      <i class=\"bx bx-hide\"></i>
                    </span>
                  </div>
                </div>
                <div class=\"mb-8\">
                  <div class=\"d-flex justify-content-between mt-8\">
                    <div class=\"form-check mb-0 ms-2\">
                      <input class=\"form-check-input\" type=\"checkbox\" id=\"remember-me\" />
                      <label class=\"form-check-label\" for=\"remember-me\">
                        Remember Me
                      </label>
                    </div>
                    <a href=\"auth-forgot-password-basic.html\">
                      <span>
                        Forgot Password?
                      </span>
                    </a>
                  </div>
                </div>
                <div class=\"mb-6\">
                  <button class=\"btn btn-primary d-grid w-100\" type=\"submit\">
                    Login
                  </button>
                </div>
              </form>

              <p class=\"text-center\">
                <span>
                  New on our platform?
                </span>
                <a href=\"/patient/new\">
                  <span>
                    Create an account
                  </span>
                </a>
              </p>
            </div>
          </div>
        <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <div class=\"buy-now\">
      <a href=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://themeselection.com/item/sneat-dashboard-pro-bootstrap/"), "html", null, true);
        yield "\" target=\"_blank\" class=\"btn btn-danger btn-buy-now\">
        Upgrade to Pro
      </a>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/js/main.js"), "html", null, true);
        yield "\"></script>

    <!-- Page JS -->

  <!-- Place this tag before closing body tag for github widget button. -->
<script async defer src=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://buttons.github.io/buttons.js"), "html", null, true);
        yield "\"></script>
</body></html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "auth-login-basic.html.twig";
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
        return array (  292 => 183,  284 => 178,  274 => 171,  270 => 170,  266 => 169,  262 => 168,  258 => 167,  247 => 159,  189 => 104,  120 => 38,  114 => 35,  110 => 34,  103 => 30,  97 => 27,  93 => 26,  89 => 25,  83 => 22,  78 => 20,  74 => 19,  70 => 18,  64 => 15,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>

<html lang=\"en\" class=\"light-style layout-wide customizer-hide\" dir=\"ltr\" data-theme=\"theme-default\" data-assets-path=\"../assets/\" data-template=\"vertical-menu-template-free\" data-style=\"light\">
  <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

    <title>
      Demo : Login Basic - Pages | sneat - Bootstrap Dashboard PRO
    </title>

    <meta name=\"description\" content=\"\" />

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('../assets/img/favicon/favicon.ico') }}\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"{{ asset('https://fonts.googleapis.com') }}\" />
    <link rel=\"preconnect\" href=\"{{ asset('https://fonts.gstatic.com') }}\" crossorigin />
    <link href=\"{{ asset('https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap') }}\" rel=\"stylesheet\" />

    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/fonts/boxicons.css') }}\" />

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/css/core.css\" class=\"template-customizer-core-css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/css/theme-default.css\" class=\"template-customizer-theme-css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/css/demo.css') }}\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/css/pages/page-auth.css') }}\" /> <!-- Helpers -->
    <script src=\"{{ asset('../assets/vendor/js/helpers.js') }}\"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src=\"{{ asset('../assets/js/config.js') }}\"></script>
  </head>

    <body>
    <!-- Content -->

      <div class=\"container-xxl\"> <div class=\"authentication-wrapper authentication-basic container-p-y\">
        <div class=\"authentication-inner\">
          <!-- Register -->
          <div class=\"card px-sm-6 px-0\">
            <div class=\"card-body\">
              <!-- Logo -->
              <div class=\"app-brand justify-content-center\">
                <a href=\"index.html\" class=\"app-brand-link gap-2\">
                  <span class=\"app-brand-logo demo\">
                    <svg width=\"25\" viewBox=\"0 0 25 42\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                      <defs>
                        <path d=\"M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z\" id=\"path-1\"></path>
                        <path d=\"M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z\" id=\"path-3\"></path>
                        <path d=\"M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z\" id=\"path-4\"></path>
                        <path d=\"M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z\" id=\"path-5\"></path>
                      </defs>
                      <g id=\"g-app-brand\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                        <g id=\"Brand-Logo\" transform=\"translate(-27.000000, -15.000000)\">
                          <g id=\"Icon\" transform=\"translate(27.000000, 15.000000)\">
                            <g id=\"Mask\" transform=\"translate(0.000000, 8.000000)\">
                              <mask id=\"mask-2\" fill=\"white\">
                                <use xlink:href=\"#path-1\"></use>
                              </mask>
                              <use fill=\"#696cff\" xlink:href=\"#path-1\"></use>
                              <g id=\"Path-3\" mask=\"url(#mask-2)\">
                                <use fill=\"#696cff\" xlink:href=\"#path-3\"></use>
                                <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-3\"></use>
                              </g>
                              <g id=\"Path-4\" mask=\"url(#mask-2)\">
                                <use fill=\"#696cff\" xlink:href=\"#path-4\"></use>
                                <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-4\"></use>
                              </g>
                            </g>
                            <g id=\"Triangle\" transform=\"translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) \">
                              <use fill=\"#696cff\" xlink:href=\"#path-5\"></use>
                              <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-5\"></use>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </span>
                  <span class=\"app-brand-text demo text-heading fw-bold\">
                    sneat
                  </span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class=\"mb-1\">
                Welcome to sneat! 👋
              </h4>
              <p class=\"mb-6\">
                Please sign-in to your account and start the adventure
              </p>

              <form id=\"formAuthentication\" class=\"mb-6\" action=\"index.html\">
                <div class=\"mb-6\">
                  <label for=\"email\" class=\"form-label\">
                    Email
                  </label>
                  <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email-username\" placeholder=\"Enter your email or username\" autofocus value=\"{{ last_username }}\" required />
                </div>
                <div class=\"mb-6 form-password-toggle\">
                  <label class=\"form-label\" for=\"password\">
                    Password
                  </label>
                  <div class=\"input-group input-group-merge\">
                    <input type=\"password\" id=\"password\" class=\"form-control\" name=\"password\" placeholder=\"&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;\" aria-describedby=\"password\" required />
                    <span class=\"input-group-text cursor-pointer\">
                      <i class=\"bx bx-hide\"></i>
                    </span>
                  </div>
                </div>
                <div class=\"mb-8\">
                  <div class=\"d-flex justify-content-between mt-8\">
                    <div class=\"form-check mb-0 ms-2\">
                      <input class=\"form-check-input\" type=\"checkbox\" id=\"remember-me\" />
                      <label class=\"form-check-label\" for=\"remember-me\">
                        Remember Me
                      </label>
                    </div>
                    <a href=\"auth-forgot-password-basic.html\">
                      <span>
                        Forgot Password?
                      </span>
                    </a>
                  </div>
                </div>
                <div class=\"mb-6\">
                  <button class=\"btn btn-primary d-grid w-100\" type=\"submit\">
                    Login
                  </button>
                </div>
              </form>

              <p class=\"text-center\">
                <span>
                  New on our platform?
                </span>
                <a href=\"/patient/new\">
                  <span>
                    Create an account
                  </span>
                </a>
              </p>
            </div>
          </div>
        <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <div class=\"buy-now\">
      <a href=\"{{ asset('https://themeselection.com/item/sneat-dashboard-pro-bootstrap/') }}\" target=\"_blank\" class=\"btn btn-danger btn-buy-now\">
        Upgrade to Pro
      </a>
    </div>

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
<script async defer src=\"{{ asset('https://buttons.github.io/buttons.js') }}\"></script>
</body></html>", "auth-login-basic.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\auth-login-basic.html.twig");
    }
}
