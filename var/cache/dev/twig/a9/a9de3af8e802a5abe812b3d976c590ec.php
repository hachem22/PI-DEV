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

/* patient/basePatient.html.twig */
class __TwigTemplate_71b147df2f16a1ca17f440e7f8875c1c extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/basePatient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/basePatient.html.twig"));

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

    <!-- Bootstrap & FontAwesome -->
    <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">
    
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">

    ";
        // line 18
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 19
        yield "</head>
<body>

    <!-- Sidebar (à gauche) -->
    <div class=\"sidebar\">
        <h2>Tableau de Bord</h2>
        <ul>
            <li><a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rendezVous");
        yield "\"><i class=\"fas fa-calendar-check\"></i> Mes Rendez-vous</a></li>
            <li><a href=\"#\"><i class=\"fas fa-file-medical\"></i> Mon Dossier Médical</a></li>
            <li><a href=\"#\"><i class=\"fas fa-bell\"></i> Notifications</a></li>
            <li><a href=\"#\"><i class=\"fas fa-user-md\"></i> Trouver un Médecin</a></li>
        </ul>
    </div>

    <!-- Navbar -->
    <header class=\"header\">
        <div class=\"container-fluid\">
            <div class=\"nav-content\">
                <a href=\"#\" class=\"logo\">
<img src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo2.png"), "html", null, true);
        yield "\" alt=\"CareConnect\" width=\"60\" height=\"60\">
                </a>
                <div class=\"profile-dropdown\">
                    <button class=\"profile-btn\">
                        <img src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/lhech.jpg"), "html", null, true);
        yield "\" alt=\"Profil\" class=\"profile-img\">
                        <span>Patient</span>
                        <i class=\"fas fa-chevron-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\"><i class=\"fas fa-user\"></i> Mon Profil</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-sign-out-alt\"></i> Déconnexion</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class=\"content\">
        ";
        // line 56
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 57
        yield "    </div>

    <!-- Scripts -->
    <script src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script>
        // Gestion du menu déroulant du profil
        document.querySelector(\".profile-btn\").addEventListener(\"click\", function() {
            document.querySelector(\".dropdown-menu\").classList.toggle(\"show\");
        });

        // Fermer le menu si on clique ailleurs
        document.addEventListener(\"click\", function(event) {
            if (!document.querySelector(\".profile-dropdown\").contains(event.target)) {
                document.querySelector(\".dropdown-menu\").classList.remove(\"show\");
            }
        });
    </script>

    ";
        // line 76
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 77
        yield "</body>
</html>
";
        
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

    // line 18
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 56
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 76
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "patient/basePatient.html.twig";
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
        return array (  241 => 76,  219 => 56,  197 => 18,  174 => 5,  161 => 77,  159 => 76,  141 => 61,  137 => 60,  132 => 57,  130 => 56,  113 => 42,  106 => 38,  91 => 26,  82 => 19,  80 => 18,  75 => 16,  68 => 12,  58 => 5,  52 => 1,);
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

    <!-- Bootstrap & FontAwesome -->
    <link href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">
    
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">

    {% block stylesheets %}{% endblock %}
</head>
<body>

    <!-- Sidebar (à gauche) -->
    <div class=\"sidebar\">
        <h2>Tableau de Bord</h2>
        <ul>
            <li><a href=\"{{ path('rendezVous') }}\"><i class=\"fas fa-calendar-check\"></i> Mes Rendez-vous</a></li>
            <li><a href=\"#\"><i class=\"fas fa-file-medical\"></i> Mon Dossier Médical</a></li>
            <li><a href=\"#\"><i class=\"fas fa-bell\"></i> Notifications</a></li>
            <li><a href=\"#\"><i class=\"fas fa-user-md\"></i> Trouver un Médecin</a></li>
        </ul>
    </div>

    <!-- Navbar -->
    <header class=\"header\">
        <div class=\"container-fluid\">
            <div class=\"nav-content\">
                <a href=\"#\" class=\"logo\">
<img src=\"{{ asset('assets/images/logo2.png') }}\" alt=\"CareConnect\" width=\"60\" height=\"60\">
                </a>
                <div class=\"profile-dropdown\">
                    <button class=\"profile-btn\">
                        <img src=\"{{ asset('assets/images/lhech.jpg') }}\" alt=\"Profil\" class=\"profile-img\">
                        <span>Patient</span>
                        <i class=\"fas fa-chevron-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\"><i class=\"fas fa-user\"></i> Mon Profil</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-sign-out-alt\"></i> Déconnexion</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class=\"content\">
        {% block body %}{% endblock %}
    </div>

    <!-- Scripts -->
    <script src=\"{{ asset('jquery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <script>
        // Gestion du menu déroulant du profil
        document.querySelector(\".profile-btn\").addEventListener(\"click\", function() {
            document.querySelector(\".dropdown-menu\").classList.toggle(\"show\");
        });

        // Fermer le menu si on clique ailleurs
        document.addEventListener(\"click\", function(event) {
            if (!document.querySelector(\".profile-dropdown\").contains(event.target)) {
                document.querySelector(\".dropdown-menu\").classList.remove(\"show\");
            }
        });
    </script>

    {% block javascripts %}{% endblock %}
</body>
</html>
", "patient/basePatient.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\patient\\basePatient.html.twig");
    }
}
