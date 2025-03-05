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

/* utilisateur/index.html.twig */
class __TwigTemplate_8e4616cd4159a4c26a078181c1a15072 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/index.html.twig"));

        $this->parent = $this->loadTemplate("utilisateur/sidenav.html.twig", "utilisateur/index.html.twig", 1);
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
        yield "    <html lang=\"en\" class=\"light-style layout-menu-fixed layout-compact\" dir=\"ltr\" data-theme=\"theme-default\" data-assets-path=\"../assets/\" data-template=\"vertical-menu-template-free\" data-style=\"light\">
        <head>
            <meta charset=\"utf-8\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

            <title>
                Demo : Dashboard - Analytics | sneat - Bootstrap Dashboard PRO
            </title>

            <meta name=\"description\" content=\"\" />

            <!-- Favicon -->
            <link rel=\"icon\" type=\"image/x-icon\" href=\"../assets/images/favicon/favicon.ico\" />

            <!-- Fonts -->
            <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
            <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\" />

            <link rel=\"stylesheet\" href=\"../assets/vendor/fonts/boxicons.css\" />

            <!-- Core CSS -->
            <link rel=\"stylesheet\" href=\"../assets/vendor/css/core.css\" class=\"template-customizer-core-css\" />
            <link rel=\"stylesheet\" href=\"../assets/vendor/css/theme-default.css\" class=\"template-customizer-theme-css\" />
            <link rel=\"stylesheet\" href=\"../assets/css/demo.css\" />

            <!-- Vendors CSS -->
            <link rel=\"stylesheet\" href=\"../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css\" />
            <link rel=\"stylesheet\" href=\"../assets/vendor/libs/apex-charts/apex-charts.css\" />

            <!-- Page CSS -->

            <!-- Helpers -->
            <script src=\"../assets/vendor/js/helpers.js\"></script>
            <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme optio    ns, Set your preferred theme option in this file.  -->
        <script src=\"../assets/js/config.js\"></script>
            </head>

                ";
        // line 43
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 245
        yield "    </html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 43
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

        yield " <div class=\"content-wrapper\"style=\"margin-top:450px;\"> <div class=\"container-xxl flex-grow-1 container-p-y\">
                    <div class=\"row\">
                        <div class=\"col-xxl-8 mb-6 order-0\">
                            <div class=\"card\" style=\"width: 800px; margin-left: 190px ; margin-top: 10px\">
                                <div class=\"d-flex align-items-start row\">
                                    <div class=\"col-sm-7\">
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title text-primary mb-3\">
                                                Bienvenue Haythem ! 🎉
                                            </h5>
                                            <p>
                                                À partir d'ici, vous pouvez ajouter un nouvel employé et gérer les informations des employés existants.
                                            </p>
                                            <a href=\"/utilisateur/new\" class=\"btn btn-primary\">
                                                Ajouter
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-5 text-center text-sm-left\">
                                        <div class=\"card-body pb-0 px-0 px-md-6\">
                                            <img src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/illustrations/man-with-laptop.png"), "html", null, true);
        yield "\" height=\"175\" class=\"scaleX-n1-rtl\" alt=\"View Badge User\" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- First Row of Cards -->
            <div class=\"container-xxl flex-grow-1 container-p-y\">
                <div class=\"row\">
                    <!-- Card 1 -->
                    <div class=\"col-md-4\">
                        <div class=\"card h-100\">
                            <div class=\"d-flex align-items-start row\">
                                <div class=\"col-sm-7\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\">
                                            Liste des Responsables
                                        </h5>
                                        <p class=\"card-text\">
                                            Ici, vous pouvez gérer les responsables en consultant ou supprimant des entrées.
                                        </p>
                                        <a href=\"/utilisateur/responsables\" class=\"btn btn-primary\">
                                            Plus
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-sm-5 text-center text-sm-left\">
                                    <div class=\"card-body pb-0 px-0 px-md-6\" style=\"margin-left: -100px;\">
                                        <img src=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/illustrations/man-working-on-laptop.png"), "html", null, true);
        yield "\" height=\"200\" class=\"scaleX-n1-rtl\" alt=\"View Badge User\" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class=\"col-md-4\">
                        <div class=\"card h-100\">
                            <div class=\"d-flex align-items-start row\">
                                <div class=\"col-sm-7\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\">
                                            Liste des
                                            <br/>
                                            Médecins
                                        </h5>
                                        <p class=\"card-text\">
                                            Ici, vous pouvez gérer les médecins en consultant ou supprimant des entrées.
                                        </p>
                                        <a href=\"/utilisateur/medecins\" class=\"btn btn-primary\">
                                            Plus
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-sm-5 text-center text-sm-left\">
                                    <div class=\"card-body pb-0 px-0 px-md-6\" style=\"margin-left: -80px;\">
                                        <img src=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/illustrations/2353_R0lVIERBTiA1MjYtMTk.jpg"), "html", null, true);
        yield "\" height=\"200\" class=\"scaleX-n1-rtl\" alt=\"View Badge User\" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class=\"col-md-4\">
                        <div class=\"card h-100\">
                            <div class=\"d-flex align-items-start row\">
                                <div class=\"col-sm-7\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\">
                                            Liste des
                                            <br/>
                                            Patients
                                        </h5>
                                        <p class=\"card-text\">
                                            Ici, vous pouvez gérer les patients en consultant ou supprimant des entrées.
                                        </p>
                                        <a href=\"/utilisateur/patients\" class=\"btn btn-primary\">
                                            Plus
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-sm-5 text-center text-sm-left\">
                                    <div class=\"card-body pb-0 px-0 px-md-6\" style=\"margin-left: -80px;\">
                                        <img src=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/illustrations/7015899.jpg"), "html", null, true);
        yield "\" height=\"200\" class=\"scaleX-n1-rtl\" alt=\"View Badge User\" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Row of Cards -->
            <div class=\"container-xxl flex-grow-1 container-p-y\">
                <div class=\"row\">
                    <!-- Card 4 -->
                    <div class=\"col-md-4\">
                        <div class=\"card h-100\">
                            <div class=\"d-flex align-items-start row\">
                                <div class=\"col-sm-7\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\">
                                            Liste des Pharmaciens
                                        </h5>
                                        <p class=\"card-text\">
                                            Ici, vous pouvez gérer les pharmaciens en consultant ou supprimant des entrées.
                                        </p>
                                        <a href=\"/utilisateur/pharmaciens\" class=\"btn btn-primary\">
                                            Plus
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-sm-5 text-center text-sm-left\">
                                    <div class=\"card-body pb-0 px-0 px-md-6\" style=\"margin-left: -80px;\">
                                        <img src=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/illustrations/2406022.jpg"), "html", null, true);
        yield "\" height=\"200\" class=\"scaleX-n1-rtl\" alt=\"View Badge User\" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class=\"col-md-4\">
                        <div class=\"card h-100\">
                            <div class=\"d-flex align-items-start row\">
                                <div class=\"col-sm-7\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\">
                                            Liste des
                                            <br/>
                                            Infirmiers
                                        </h5>
                                        <p class=\"card-text\">
                                            Ici, vous pouvez gérer les infirmiers en consultant ou supprimant des entrées.
                                        </p>
                                        <a href=\"/utilisateur/infirmiers\" class=\"btn btn-primary\">
                                            Plus
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-sm-5 text-center text-sm-left\">
                                    <div class=\"card-body pb-0 px-0 px-md-6\" style=\"margin-left: -80px;\">
                                        <img src=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/illustrations/9276867.jpg"), "html", null, true);
        yield "\" height=\"200\" class=\"scaleX-n1-rtl\" alt=\"View Badge User\" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class=\"col-md-4\">
                        <div class=\"card h-100\">
                            <div class=\"d-flex align-items-start row\">
                                <div class=\"col-sm-7\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\">
                                            Liste des Femmes De Ménage
                                        </h5>
                                        <p class=\"card-text\">
                                            Ici, vous pouvez gérer les femmes de ménage en consultant ou supprimant des entrées.
                                        </p>
                                        <a href=\"/utilisateur/femmeDeMenages\" class=\"btn btn-primary\">
                                            Plus
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-sm-5 text-center text-sm-left\">
                                    <div class=\"card-body pb-0 px-0 px-md-6\" style=\"margin-left: -80px;\">
                                        <img src=\"";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/illustrations/346_SkVNQSBCUlkgMTA3Ny0yNw.jpg"), "html", null, true);
        yield "\" height=\"200\" class=\"scaleX-n1-rtl\" alt=\"View Badge User\" />
                                    </div>
                                </div>
                            </div>
                        </div>
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
        return "utilisateur/index.html.twig";
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
        return array (  357 => 236,  328 => 210,  297 => 182,  263 => 151,  232 => 123,  201 => 95,  166 => 63,  132 => 43,  120 => 245,  118 => 43,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"utilisateur/sidenav.html.twig\" %}

{% block content %}
    <html lang=\"en\" class=\"light-style layout-menu-fixed layout-compact\" dir=\"ltr\" data-theme=\"theme-default\" data-assets-path=\"../assets/\" data-template=\"vertical-menu-template-free\" data-style=\"light\">
        <head>
            <meta charset=\"utf-8\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

            <title>
                Demo : Dashboard - Analytics | sneat - Bootstrap Dashboard PRO
            </title>

            <meta name=\"description\" content=\"\" />

            <!-- Favicon -->
            <link rel=\"icon\" type=\"image/x-icon\" href=\"../assets/images/favicon/favicon.ico\" />

            <!-- Fonts -->
            <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
            <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\" />

            <link rel=\"stylesheet\" href=\"../assets/vendor/fonts/boxicons.css\" />

            <!-- Core CSS -->
            <link rel=\"stylesheet\" href=\"../assets/vendor/css/core.css\" class=\"template-customizer-core-css\" />
            <link rel=\"stylesheet\" href=\"../assets/vendor/css/theme-default.css\" class=\"template-customizer-theme-css\" />
            <link rel=\"stylesheet\" href=\"../assets/css/demo.css\" />

            <!-- Vendors CSS -->
            <link rel=\"stylesheet\" href=\"../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css\" />
            <link rel=\"stylesheet\" href=\"../assets/vendor/libs/apex-charts/apex-charts.css\" />

            <!-- Page CSS -->

            <!-- Helpers -->
            <script src=\"../assets/vendor/js/helpers.js\"></script>
            <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme optio    ns, Set your preferred theme option in this file.  -->
        <script src=\"../assets/js/config.js\"></script>
            </head>

                {% block body %} <div class=\"content-wrapper\"style=\"margin-top:450px;\"> <div class=\"container-xxl flex-grow-1 container-p-y\">
                    <div class=\"row\">
                        <div class=\"col-xxl-8 mb-6 order-0\">
                            <div class=\"card\" style=\"width: 800px; margin-left: 190px ; margin-top: 10px\">
                                <div class=\"d-flex align-items-start row\">
                                    <div class=\"col-sm-7\">
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title text-primary mb-3\">
                                                Bienvenue Haythem ! 🎉
                                            </h5>
                                            <p>
                                                À partir d'ici, vous pouvez ajouter un nouvel employé et gérer les informations des employés existants.
                                            </p>
                                            <a href=\"/utilisateur/new\" class=\"btn btn-primary\">
                                                Ajouter
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-5 text-center text-sm-left\">
                                        <div class=\"card-body pb-0 px-0 px-md-6\">
                                            <img src=\"{{ asset('assets/images/illustrations/man-with-laptop.png') }}\" height=\"175\" class=\"scaleX-n1-rtl\" alt=\"View Badge User\" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- First Row of Cards -->
            <div class=\"container-xxl flex-grow-1 container-p-y\">
                <div class=\"row\">
                    <!-- Card 1 -->
                    <div class=\"col-md-4\">
                        <div class=\"card h-100\">
                            <div class=\"d-flex align-items-start row\">
                                <div class=\"col-sm-7\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\">
                                            Liste des Responsables
                                        </h5>
                                        <p class=\"card-text\">
                                            Ici, vous pouvez gérer les responsables en consultant ou supprimant des entrées.
                                        </p>
                                        <a href=\"/utilisateur/responsables\" class=\"btn btn-primary\">
                                            Plus
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-sm-5 text-center text-sm-left\">
                                    <div class=\"card-body pb-0 px-0 px-md-6\" style=\"margin-left: -100px;\">
                                        <img src=\"{{ asset('assets/images/illustrations/man-working-on-laptop.png') }}\" height=\"200\" class=\"scaleX-n1-rtl\" alt=\"View Badge User\" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class=\"col-md-4\">
                        <div class=\"card h-100\">
                            <div class=\"d-flex align-items-start row\">
                                <div class=\"col-sm-7\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\">
                                            Liste des
                                            <br/>
                                            Médecins
                                        </h5>
                                        <p class=\"card-text\">
                                            Ici, vous pouvez gérer les médecins en consultant ou supprimant des entrées.
                                        </p>
                                        <a href=\"/utilisateur/medecins\" class=\"btn btn-primary\">
                                            Plus
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-sm-5 text-center text-sm-left\">
                                    <div class=\"card-body pb-0 px-0 px-md-6\" style=\"margin-left: -80px;\">
                                        <img src=\"{{ asset('assets/images/illustrations/2353_R0lVIERBTiA1MjYtMTk.jpg') }}\" height=\"200\" class=\"scaleX-n1-rtl\" alt=\"View Badge User\" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class=\"col-md-4\">
                        <div class=\"card h-100\">
                            <div class=\"d-flex align-items-start row\">
                                <div class=\"col-sm-7\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\">
                                            Liste des
                                            <br/>
                                            Patients
                                        </h5>
                                        <p class=\"card-text\">
                                            Ici, vous pouvez gérer les patients en consultant ou supprimant des entrées.
                                        </p>
                                        <a href=\"/utilisateur/patients\" class=\"btn btn-primary\">
                                            Plus
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-sm-5 text-center text-sm-left\">
                                    <div class=\"card-body pb-0 px-0 px-md-6\" style=\"margin-left: -80px;\">
                                        <img src=\"{{ asset('assets/images/illustrations/7015899.jpg') }}\" height=\"200\" class=\"scaleX-n1-rtl\" alt=\"View Badge User\" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Row of Cards -->
            <div class=\"container-xxl flex-grow-1 container-p-y\">
                <div class=\"row\">
                    <!-- Card 4 -->
                    <div class=\"col-md-4\">
                        <div class=\"card h-100\">
                            <div class=\"d-flex align-items-start row\">
                                <div class=\"col-sm-7\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\">
                                            Liste des Pharmaciens
                                        </h5>
                                        <p class=\"card-text\">
                                            Ici, vous pouvez gérer les pharmaciens en consultant ou supprimant des entrées.
                                        </p>
                                        <a href=\"/utilisateur/pharmaciens\" class=\"btn btn-primary\">
                                            Plus
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-sm-5 text-center text-sm-left\">
                                    <div class=\"card-body pb-0 px-0 px-md-6\" style=\"margin-left: -80px;\">
                                        <img src=\"{{ asset('assets/images/illustrations/2406022.jpg') }}\" height=\"200\" class=\"scaleX-n1-rtl\" alt=\"View Badge User\" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class=\"col-md-4\">
                        <div class=\"card h-100\">
                            <div class=\"d-flex align-items-start row\">
                                <div class=\"col-sm-7\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\">
                                            Liste des
                                            <br/>
                                            Infirmiers
                                        </h5>
                                        <p class=\"card-text\">
                                            Ici, vous pouvez gérer les infirmiers en consultant ou supprimant des entrées.
                                        </p>
                                        <a href=\"/utilisateur/infirmiers\" class=\"btn btn-primary\">
                                            Plus
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-sm-5 text-center text-sm-left\">
                                    <div class=\"card-body pb-0 px-0 px-md-6\" style=\"margin-left: -80px;\">
                                        <img src=\"{{ asset('assets/images/illustrations/9276867.jpg') }}\" height=\"200\" class=\"scaleX-n1-rtl\" alt=\"View Badge User\" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class=\"col-md-4\">
                        <div class=\"card h-100\">
                            <div class=\"d-flex align-items-start row\">
                                <div class=\"col-sm-7\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\">
                                            Liste des Femmes De Ménage
                                        </h5>
                                        <p class=\"card-text\">
                                            Ici, vous pouvez gérer les femmes de ménage en consultant ou supprimant des entrées.
                                        </p>
                                        <a href=\"/utilisateur/femmeDeMenages\" class=\"btn btn-primary\">
                                            Plus
                                        </a>
                                    </div>
                                </div>
                                <div class=\"col-sm-5 text-center text-sm-left\">
                                    <div class=\"card-body pb-0 px-0 px-md-6\" style=\"margin-left: -80px;\">
                                        <img src=\"{{ asset('assets/images/illustrations/346_SkVNQSBCUlkgMTA3Ny0yNw.jpg') }}\" height=\"200\" class=\"scaleX-n1-rtl\" alt=\"View Badge User\" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% endblock %}
    </html>
{% endblock %}
", "utilisateur/index.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\utilisateur\\index.html.twig");
    }
}
