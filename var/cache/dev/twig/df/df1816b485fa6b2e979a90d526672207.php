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

/* chambre/baseNav.html.twig */
class __TwigTemplate_2d0bf05320f38d748ebff6376fbac838 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/baseNav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/baseNav.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Favicon -->
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚕️</text></svg>\">

    <!-- Bootstrap CSS -->
    ";
        // line 12
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 244
        yield "</head>
<body>
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <!-- Menu -->
            <!-- / Menu -->

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Navbar -->
                <nav class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\" id=\"layout-navbar\">
                    <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none\">
                        <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
                            <i class=\"bx bx-menu bx-sm\"></i>
                        </a>
                    </div>
    
                    <!-- Logo CareConnect -->
                    <div class=\"navbar-nav-left d-flex align-items-center\">
                        <a class=\"navbar-brand\" href=\"#\">
                            <img src=\"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo2.png"), "html", null, true);
        yield "\" alt=\"CareConnect\" width=\"60\" height=\"60\">
                            <span class=\"ms-2\">CareConnect</span>
                        </a>
                    </div>

                    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
                        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
                            <!-- Accueil -->
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 273
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_responsable");
        yield "\"><i class=\"fa-solid fa-house\"></i> Accueil</a>
                            </li>

                            <!-- chambre Dropdown -->
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"servicesDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <i class=\"fas fa-calendar-alt\"></i> chambre
                                </a>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"servicesDropdown\">
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 282
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chambrefront");
        yield "\"><i class=\"fas fa-calendar-check\"></i> litse chambre</a></li>
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 283
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.guide");
        yield "\"><i class=\"fas fa-calendar-check\"></i> voir Guide</a></li>
                                    
                                </ul>
                            </li>

                            <!-- lits Dropdown -->
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"eventsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <i class=\"fas fa-bell\"></i> Lits
                                </a>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"eventsDropdown\">
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 294
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_litfront");
        yield "\"><i class=\"fas fa-calendar-day\"></i> Liste Lits</a></li>
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 295
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chatbot_interface");
        yield "\"><i class=\"fas fa-calendar-check\"></i> ChatBot</a></li>
                                </ul>
                            </li>

                            <!-- Réclamations Dropdown -->
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"complaintsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <i class=\"fas fa-comment-dots\"></i>Entretient
                                </a>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"complaintsDropdown\">
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 305
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entretient_chambrefront");
        yield "\"><i class=\"fas fa-file-alt\"></i> Liste d'entretient</a></li>
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 306
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entretient_chambrefront.new");
        yield "\"><i class=\"fas fa-history\"></i> gérer entretients</a></li>
                                </ul>
                            </li>

                            <!-- Profil Dropdown -->
                            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                                    <div class=\"avatar avatar-online\">
                                        <img src=\"";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/lhech.jpg"), "html", null, true);
        yield "\" alt=\"Profil\" class=\"w-px-40 h-auto rounded-circle\" />
                                    </div>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar avatar-online\">
                                                        <img src=\"";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/lhech.jpg"), "html", null, true);
        yield "\" alt=\"Profil\" class=\"w-px-40 h-auto rounded-circle\" />
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <span class=\"fw-semibold d-block\">Patient</span>
                                                    <small class=\"text-muted\">Patient</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li><div class=\"dropdown-divider\"></div></li>
                                    <li><a class=\"dropdown-item\" href=\"#\"><i class=\"bx bx-user me-2\"></i> <span class=\"align-middle\">Mon Profil</span></a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\"><i class=\"bx bx-cog me-2\"></i> <span class=\"align-middle\">Paramètres</span></a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\"><i class=\"bx bx-power-off me-2\"></i> <span class=\"align-middle\">Déconnexion</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>

                ";
        // line 343
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 344
        yield "            </div>
        </div>
    </div>
    
    

    ";
        // line 350
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 377
        yield "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "CareConnect";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        yield "    <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    

    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/fonts/boxicons.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/css/core.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/css/theme-default.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/demo.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/apex-charts/apex-charts.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/css/core.css"), "html", null, true);
        yield "\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/css/theme-default.css"), "html", null, true);
        yield "\" class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/css/demo.css"), "html", null, true);
        yield "\" />
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/fonts/boxicons.css"), "html", null, true);
        yield "\" />
    <style>
    body {
            background-color: #f8f9fa;
            font-family: 'Public Sans', sans-serif;
        }
        .container-xxl {
            margin-top: 30px;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
        }
        .card-custom {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .badge {
            font-size: 0.9rem;
        }
        .text-muted {
            color: #6c757d;
        }
        .btn-custom {
            border-radius: 20px;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            transform: scale(1.1);
            box-shadow: 0 0 8px rgba(0, 234, 255, 0.4);
        }
        .patient-occupe {
            color: red;
            font-weight: bold;
        }
        .text-center-muted {
            color: #6c757d;
        }
        /* Animations CSS */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animated-card {
            animation: fadeIn 0.6s ease-out;
        }

        /* Effet de survol pour les cartes */
        .card-hover-effect {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-hover-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        /* Style pour les boutons */
        .btn-custom {
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Style pour les graphiques */
        .chart-container {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Style pour l'en-tête */
        .welcome-header {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            border-radius: 10px;
            padding: 20px;
        }

        .welcome-header h2 {
            font-weight: 700;
        }

        .welcome-header p {
            font-size: 1.1rem;
        }

        /* Style pour les statistiques */
        .stat-card {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .stat-card h5 {
            font-weight: 600;
        }

        .stat-card h2 {
            font-weight: 700;
        }

        .stat-card .avatar {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
        }

        /* Style pour les lits */
        .lit-card {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .lit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .lit-card h5 {
            font-weight: 600;
        }

        .lit-card .badge {
            font-size: 0.9rem;
            padding: 0.5em 0.75em;
        }

        /* Style pour les boutons d'action */
        .action-buttons .btn {
            margin: 5px;
        }
    
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f9; }
        .chat-container {
            width: 400px; 
            max-width: 90%;
            position: fixed;
            bottom: 20px;
            right: 20px;
            border: 1px solid #ccc; 
            padding: 20px; 
            border-radius: 10px; 
            background-color: #fff; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            display: none;
            z-index: 1000;
        }
        .chat-box { 
            height: 300px; 
            overflow-y: scroll; 
            border: 1px solid #ddd; 
            padding: 10px; 
            text-align: left; 
            margin-bottom: 10px;
            background-color: #fafafa;
            border-radius: 5px;
        }
        .user-message { color: blue; font-weight: bold; }
        .bot-message { color: green; }
        input, button { 
            margin-top: 10px; 
            padding: 10px; 
            width: calc(100% - 24px); 
            border: 1px solid #ddd; 
            border-radius: 5px;
        }
        button { 
            background-color: #007bff; 
            color: white; 
            cursor: pointer; 
        }
        button:hover { background-color: #0056b3; }
        .chat-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 50%;
            padding: 15px;
            font-size: 20px;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            z-index: 1000;
            width: 50px;
            height: 50px;
        }
    </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 343
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 350
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 351
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 355
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/apex-charts/apexcharts.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dashboards-analytics.js"), "html", null, true);
        yield "\"></script>
        <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
        <script src=\"";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/config.js"), "html", null, true);
        yield "\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
         <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/favicon/favicon.ico"), "html", null, true);
        yield "\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/fonts/boxicons.css"), "html", null, true);
        yield "\" />
    
        

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
        return "chambre/baseNav.html.twig";
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
        return array (  627 => 372,  621 => 369,  610 => 361,  606 => 360,  601 => 358,  597 => 357,  593 => 356,  589 => 355,  585 => 354,  581 => 353,  577 => 352,  572 => 351,  559 => 350,  537 => 343,  314 => 32,  307 => 28,  303 => 27,  299 => 26,  293 => 23,  289 => 22,  285 => 21,  281 => 20,  277 => 19,  273 => 18,  269 => 17,  261 => 13,  248 => 12,  225 => 5,  213 => 377,  211 => 350,  203 => 344,  201 => 343,  178 => 323,  166 => 314,  155 => 306,  151 => 305,  138 => 295,  134 => 294,  120 => 283,  116 => 282,  104 => 273,  92 => 264,  70 => 244,  68 => 12,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}CareConnect{% endblock %}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Favicon -->
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚕️</text></svg>\">

    <!-- Bootstrap CSS -->
    {% block stylesheets %}
    <link href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    

    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/fonts/boxicons.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/core.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/theme-default.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/demo.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/css/core.css') }}\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/css/theme-default.css') }}\" class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/css/demo.css') }}\" />
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/fonts/boxicons.css') }}\" />
    <style>
    body {
            background-color: #f8f9fa;
            font-family: 'Public Sans', sans-serif;
        }
        .container-xxl {
            margin-top: 30px;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
        }
        .card-custom {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .badge {
            font-size: 0.9rem;
        }
        .text-muted {
            color: #6c757d;
        }
        .btn-custom {
            border-radius: 20px;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            transform: scale(1.1);
            box-shadow: 0 0 8px rgba(0, 234, 255, 0.4);
        }
        .patient-occupe {
            color: red;
            font-weight: bold;
        }
        .text-center-muted {
            color: #6c757d;
        }
        /* Animations CSS */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animated-card {
            animation: fadeIn 0.6s ease-out;
        }

        /* Effet de survol pour les cartes */
        .card-hover-effect {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-hover-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        /* Style pour les boutons */
        .btn-custom {
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Style pour les graphiques */
        .chart-container {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Style pour l'en-tête */
        .welcome-header {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            border-radius: 10px;
            padding: 20px;
        }

        .welcome-header h2 {
            font-weight: 700;
        }

        .welcome-header p {
            font-size: 1.1rem;
        }

        /* Style pour les statistiques */
        .stat-card {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .stat-card h5 {
            font-weight: 600;
        }

        .stat-card h2 {
            font-weight: 700;
        }

        .stat-card .avatar {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
        }

        /* Style pour les lits */
        .lit-card {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .lit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .lit-card h5 {
            font-weight: 600;
        }

        .lit-card .badge {
            font-size: 0.9rem;
            padding: 0.5em 0.75em;
        }

        /* Style pour les boutons d'action */
        .action-buttons .btn {
            margin: 5px;
        }
    
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f9; }
        .chat-container {
            width: 400px; 
            max-width: 90%;
            position: fixed;
            bottom: 20px;
            right: 20px;
            border: 1px solid #ccc; 
            padding: 20px; 
            border-radius: 10px; 
            background-color: #fff; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            display: none;
            z-index: 1000;
        }
        .chat-box { 
            height: 300px; 
            overflow-y: scroll; 
            border: 1px solid #ddd; 
            padding: 10px; 
            text-align: left; 
            margin-bottom: 10px;
            background-color: #fafafa;
            border-radius: 5px;
        }
        .user-message { color: blue; font-weight: bold; }
        .bot-message { color: green; }
        input, button { 
            margin-top: 10px; 
            padding: 10px; 
            width: calc(100% - 24px); 
            border: 1px solid #ddd; 
            border-radius: 5px;
        }
        button { 
            background-color: #007bff; 
            color: white; 
            cursor: pointer; 
        }
        button:hover { background-color: #0056b3; }
        .chat-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 50%;
            padding: 15px;
            font-size: 20px;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            z-index: 1000;
            width: 50px;
            height: 50px;
        }
    </style>
    {% endblock %}
</head>
<body>
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <!-- Menu -->
            <!-- / Menu -->

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Navbar -->
                <nav class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\" id=\"layout-navbar\">
                    <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none\">
                        <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
                            <i class=\"bx bx-menu bx-sm\"></i>
                        </a>
                    </div>
    
                    <!-- Logo CareConnect -->
                    <div class=\"navbar-nav-left d-flex align-items-center\">
                        <a class=\"navbar-brand\" href=\"#\">
                            <img src=\"{{ asset('assets/images/logo2.png') }}\" alt=\"CareConnect\" width=\"60\" height=\"60\">
                            <span class=\"ms-2\">CareConnect</span>
                        </a>
                    </div>

                    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
                        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
                            <!-- Accueil -->
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{path('app_responsable')}}\"><i class=\"fa-solid fa-house\"></i> Accueil</a>
                            </li>

                            <!-- chambre Dropdown -->
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"servicesDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <i class=\"fas fa-calendar-alt\"></i> chambre
                                </a>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"servicesDropdown\">
                                    <li><a class=\"dropdown-item\" href=\"{{path('app_chambrefront')}}\"><i class=\"fas fa-calendar-check\"></i> litse chambre</a></li>
                                    <li><a class=\"dropdown-item\" href=\"{{path('chambre.guide')}}\"><i class=\"fas fa-calendar-check\"></i> voir Guide</a></li>
                                    
                                </ul>
                            </li>

                            <!-- lits Dropdown -->
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"eventsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <i class=\"fas fa-bell\"></i> Lits
                                </a>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"eventsDropdown\">
                                    <li><a class=\"dropdown-item\" href=\"{{path('app_litfront')}}\"><i class=\"fas fa-calendar-day\"></i> Liste Lits</a></li>
                                    <li><a class=\"dropdown-item\" href=\"{{path('chatbot_interface')}}\"><i class=\"fas fa-calendar-check\"></i> ChatBot</a></li>
                                </ul>
                            </li>

                            <!-- Réclamations Dropdown -->
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"complaintsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <i class=\"fas fa-comment-dots\"></i>Entretient
                                </a>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"complaintsDropdown\">
                                    <li><a class=\"dropdown-item\" href=\"{{path('app_entretient_chambrefront')}}\"><i class=\"fas fa-file-alt\"></i> Liste d'entretient</a></li>
                                    <li><a class=\"dropdown-item\" href=\"{{path('entretient_chambrefront.new')}}\"><i class=\"fas fa-history\"></i> gérer entretients</a></li>
                                </ul>
                            </li>

                            <!-- Profil Dropdown -->
                            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                                    <div class=\"avatar avatar-online\">
                                        <img src=\"{{ asset('assets/images/lhech.jpg') }}\" alt=\"Profil\" class=\"w-px-40 h-auto rounded-circle\" />
                                    </div>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar avatar-online\">
                                                        <img src=\"{{ asset('assets/images/lhech.jpg') }}\" alt=\"Profil\" class=\"w-px-40 h-auto rounded-circle\" />
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <span class=\"fw-semibold d-block\">Patient</span>
                                                    <small class=\"text-muted\">Patient</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li><div class=\"dropdown-divider\"></div></li>
                                    <li><a class=\"dropdown-item\" href=\"#\"><i class=\"bx bx-user me-2\"></i> <span class=\"align-middle\">Mon Profil</span></a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\"><i class=\"bx bx-cog me-2\"></i> <span class=\"align-middle\">Paramètres</span></a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\"><i class=\"bx bx-power-off me-2\"></i> <span class=\"align-middle\">Déconnexion</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>

                {% block content %}{% endblock %}
            </div>
        </div>
    </div>
    
    

    {% block javascripts %}
        <script src=\"{{ asset('assets/vendor/libs/jquery/jquery.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/libs/popper/popper.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/js/bootstrap.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/js/menu.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}\"></script>
        <script src=\"{{ asset('assets/js/main.js') }}\"></script>
        <script src=\"{{ asset('assets/js/dashboards-analytics.js') }}\"></script>
        <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
        <script src=\"{{ asset('assets/vendor/js/helpers.js') }}\"></script>
        <script src=\"{{ asset('assets/js/config.js') }}\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
         <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('../assets/img/favicon/favicon.ico') }}\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/fonts/boxicons.css') }}\" />
    
        

           {% endblock %}
</body>
</html>", "chambre/baseNav.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\chambre\\baseNav.html.twig");
    }
}
