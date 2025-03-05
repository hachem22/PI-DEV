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

/* security/login.html.twig */
class __TwigTemplate_fdd6dbea54b1290c8bdf5de2ebd74efa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"fr\" class=\"light-style layout-wide customizer-hide\" dir=\"ltr\" data-theme=\"theme-default\" data-assets-path=\"../assets/\" data-template=\"vertical-menu-template-free\" data-style=\"light\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
        <title>Se connecter</title>
        <meta name=\"description\" content=\"\" />
        <!-- Favicon -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/favicon.ico"), "html", null, true);
        yield "\" />
        <!-- Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
        <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />
        <!-- Icons -->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/fonts/boxicons.css"), "html", null, true);
        yield "\" />
        <!-- Core CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/css/core.css"), "html", null, true);
        yield "\" class=\"template-customizer-core-css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/css/theme-default.css"), "html", null, true);
        yield "\" class=\"template-customizer-theme-css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/demo.css"), "html", null, true);
        yield "\" />
        <!-- Vendors CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />
        <!-- Page CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/css/pages/page-auth.css"), "html", null, true);
        yield "\" />
        <!-- Helpers -->
        <script src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
        <!-- Config -->
        <script src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/config.js"), "html", null, true);
        yield "\"></script>
    </head>
    <body>
        <!-- Content -->
        <div class=\"container-xxl\">
            <div class=\"authentication-wrapper authentication-basic container-p-y\">
                <div class=\"authentication-inner\">
                    <!-- Login Form -->
                    <div class=\"card px-sm-6 px-0\">
                        <div class=\"card-body\">
                            <!-- Logo -->
                            <div class=\"app-brand justify-content-center\">
                                <a href=\"index.html\" class=\"app-brand-link gap-2\">
                                    <span class=\"app-brand-logo demo\">
                                        <svg width=\"25\" viewBox=\"0 0 25 42\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                                            <!-- SVG Paths Here -->
                                        </svg>
                                    </span>
                                    <span class=\"app-brand-text demo text-heading fw-bold\">CareConnect</span>
                                </a>
                            </div>
                            <!-- /Logo -->
                            <h4 class=\"mb-1\">Bienvenue sur CareConnect ! 👋</h4>
                            <p class=\"mb-6\">Veuillez vous connecter à votre compte pour commencer l'aventure</p>

                            <!-- Flash Messages -->
                            ";
        // line 53
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })())) {
            // line 54
            yield "                                <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 54, $this->source); })()), "messageKey", [], "any", false, false, false, 54), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 54, $this->source); })()), "messageData", [], "any", false, false, false, 54), "security"), "html", null, true);
            yield "</div>
                            ";
        }
        // line 56
        yield "
                            <!-- Login Form -->
                            <form id=\"formAuthentication\" class=\"mb-6\" method=\"post\" action=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">                                <!-- CSRF Token -->
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                                <!-- Email Field -->
                                <div class=\"mb-6\">
                                    <label for=\"email\" class=\"form-label\">Email</label>
                                    <input type=\"text\" class=\"form-control\" id=\"email\" name=\"_username\" placeholder=\"Entrez votre email\" autofocus value=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 64, $this->source); })()), "html", null, true);
        yield "\" required />
                                </div>

                                <!-- Password Field -->
                                <div class=\"mb-6 form-password-toggle\">
                                    <label class=\"form-label\" for=\"password\">Mot de passe</label>
                                    <div class=\"input-group input-group-merge\">
                                        <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;\" aria-describedby=\"password\" required />
                                        <span class=\"input-group-text cursor-pointer\"><i class=\"bx bx-hide\"></i></span>
                                    </div>
                                </div>

                                <!-- Remember Me Checkbox -->
                                <div class=\"mb-8\">
                                    <div class=\"d-flex justify-content-between mt-8\">
                                        <div class=\"form-check mb-0 ms-2\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"remember-me\" name=\"_remember_me\" />
                                            <label class=\"form-check-label\" for=\"remember-me\">Se souvenir de moi</label>
                                        </div>
                                        <a href=\"/forgot-password\"><span>Mot de passe oublié ?</span></a>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class=\"mb-6\">
                                    <button class=\"btn btn-primary d-grid w-100\" type=\"submit\">Se connecter</button>
                                </div>
                            </form>

                            <!-- Registration Link -->
                            <p class=\"text-center\">
                                <span>Nouveau sur notre plateforme ?</span>
                                <a href=\"#\"><span>Créer un compte</span></a>
                            </p>
                        </div>
                    </div>
                    <!-- /Login Form -->
                </div>
            </div>
        </div>
        <!-- / Content -->

        <!-- Core JS -->
        <script src=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
        <!-- Main JS -->
        <script src=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>
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
        return "security/login.html.twig";
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
        return array (  220 => 113,  215 => 111,  211 => 110,  207 => 109,  203 => 108,  199 => 107,  153 => 64,  145 => 59,  141 => 58,  137 => 56,  131 => 54,  129 => 53,  100 => 27,  95 => 25,  90 => 23,  85 => 21,  80 => 19,  76 => 18,  72 => 17,  67 => 15,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"fr\" class=\"light-style layout-wide customizer-hide\" dir=\"ltr\" data-theme=\"theme-default\" data-assets-path=\"../assets/\" data-template=\"vertical-menu-template-free\" data-style=\"light\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
        <title>Se connecter</title>
        <meta name=\"description\" content=\"\" />
        <!-- Favicon -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets/img/favicon/favicon.ico') }}\" />
        <!-- Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
        <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />
        <!-- Icons -->
        <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/fonts/boxicons.css') }}\" />
        <!-- Core CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/core.css') }}\" class=\"template-customizer-core-css\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/theme-default.css') }}\" class=\"template-customizer-theme-css\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/demo.css') }}\" />
        <!-- Vendors CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\" />
        <!-- Page CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/pages/page-auth.css') }}\" />
        <!-- Helpers -->
        <script src=\"{{ asset('assets/vendor/js/helpers.js') }}\"></script>
        <!-- Config -->
        <script src=\"{{ asset('assets/js/config.js') }}\"></script>
    </head>
    <body>
        <!-- Content -->
        <div class=\"container-xxl\">
            <div class=\"authentication-wrapper authentication-basic container-p-y\">
                <div class=\"authentication-inner\">
                    <!-- Login Form -->
                    <div class=\"card px-sm-6 px-0\">
                        <div class=\"card-body\">
                            <!-- Logo -->
                            <div class=\"app-brand justify-content-center\">
                                <a href=\"index.html\" class=\"app-brand-link gap-2\">
                                    <span class=\"app-brand-logo demo\">
                                        <svg width=\"25\" viewBox=\"0 0 25 42\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                                            <!-- SVG Paths Here -->
                                        </svg>
                                    </span>
                                    <span class=\"app-brand-text demo text-heading fw-bold\">CareConnect</span>
                                </a>
                            </div>
                            <!-- /Logo -->
                            <h4 class=\"mb-1\">Bienvenue sur CareConnect ! 👋</h4>
                            <p class=\"mb-6\">Veuillez vous connecter à votre compte pour commencer l'aventure</p>

                            <!-- Flash Messages -->
                            {% if error %}
                                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                            {% endif %}

                            <!-- Login Form -->
                            <form id=\"formAuthentication\" class=\"mb-6\" method=\"post\" action=\"{{ path('app_login') }}\">                                <!-- CSRF Token -->
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                                <!-- Email Field -->
                                <div class=\"mb-6\">
                                    <label for=\"email\" class=\"form-label\">Email</label>
                                    <input type=\"text\" class=\"form-control\" id=\"email\" name=\"_username\" placeholder=\"Entrez votre email\" autofocus value=\"{{ last_username }}\" required />
                                </div>

                                <!-- Password Field -->
                                <div class=\"mb-6 form-password-toggle\">
                                    <label class=\"form-label\" for=\"password\">Mot de passe</label>
                                    <div class=\"input-group input-group-merge\">
                                        <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;\" aria-describedby=\"password\" required />
                                        <span class=\"input-group-text cursor-pointer\"><i class=\"bx bx-hide\"></i></span>
                                    </div>
                                </div>

                                <!-- Remember Me Checkbox -->
                                <div class=\"mb-8\">
                                    <div class=\"d-flex justify-content-between mt-8\">
                                        <div class=\"form-check mb-0 ms-2\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"remember-me\" name=\"_remember_me\" />
                                            <label class=\"form-check-label\" for=\"remember-me\">Se souvenir de moi</label>
                                        </div>
                                        <a href=\"/forgot-password\"><span>Mot de passe oublié ?</span></a>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class=\"mb-6\">
                                    <button class=\"btn btn-primary d-grid w-100\" type=\"submit\">Se connecter</button>
                                </div>
                            </form>

                            <!-- Registration Link -->
                            <p class=\"text-center\">
                                <span>Nouveau sur notre plateforme ?</span>
                                <a href=\"#\"><span>Créer un compte</span></a>
                            </p>
                        </div>
                    </div>
                    <!-- /Login Form -->
                </div>
            </div>
        </div>
        <!-- / Content -->

        <!-- Core JS -->
        <script src=\"{{ asset('assets/vendor/libs/jquery/jquery.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/libs/popper/popper.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/js/bootstrap.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/js/menu.js') }}\"></script>
        <!-- Main JS -->
        <script src=\"{{ asset('assets/js/main.js') }}\"></script>
    </body>
</html>", "security/login.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\security\\login.html.twig");
    }
}
