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

/* HomeUser/Home.html.twig */
class __TwigTemplate_0ca5703a8b7f6725679bb6744904abf4 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "HomeUser/Home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "HomeUser/Home.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
    <link href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-chain-app-dev.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animated.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        yield "\">
    
    <style>
        /* Ajustement du padding pour éviter que la navbar couvre le contenu */
        body {
            padding-top: 70px;
        }
        
        /* Styles du Slider */
        #home {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }
        .header-area {
        position: sticky;
        top: 0;
        width: 100%;
        z-index: 1000;
        background: white;
        transition: all 0.3s ease-in-out;
    }

    .navbar-brand img {
        transition: transform 0.3s ease-in-out;
    }

    .navbar-brand img:hover {
        transform: scale(1.1);
    }

    .navbar-nav .nav-link {
        font-weight: 500;
        color: #333;
        transition: color 0.3s ease-in-out;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
        color: #007bff;
    }

    /* Profil */
    .profile-img {
        width: 40px;
        height: 40px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #007bff;
    }

    .dropdown-menu {
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .dropdown-item {
        transition: background 0.3s ease-in-out;
    }

    .dropdown-item:hover {
        background: #007bff;
        color: white;
    }

        .carousel-item img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
        .profile-img {
    width: 50px;
    height: 50px;
    object-fit: cover;
    border-radius: 50%;
}
    </style>
</head>
<body>
    <!-- Header/Navbar -->
    <header class=\"header-area header-sticky wow slideInDown\" data-wow-duration=\"0.75s\" data-wow-delay=\"0s\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav class=\"main-nav\">
                        <a href=\"#\" class=\"logo\" style=\"margin-left: -150px;\">
                            <img src=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo2.png"), "html", null, true);
        yield "\" alt=\"Chain App Dev\" width=\"80px\" height=\"80px\">
                        </a>
                        <ul class=\"nav\">
                            <li class=\"scroll-to-section\"><a href=\"#home\" class=\"active\">Home</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#services\">Rendez-vous</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#about\">Evenement</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#pricing\">Reclamation</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#newsletter\">Forum</a></li>
                            <li>
                                <div class=\"profile-dropdown\">
                    <button class=\"profile-btn\">
                        <img src=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/lhech.jpg"), "html", null, true);
        yield "\" alt=\"Profil\" class=\"profile-img\">
                        <span>Responsable</span>
                        <i class=\"fas fa-chevron-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\"><i class=\"fas fa-user\"></i> Mon Profil</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-sign-out-alt\"></i> Déconnexion</a></li>
                    </ul>
                </div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Section Home avec le Slider -->
    <section id=\"home\">
        <div id=\"homeCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img src=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/slide1.jpg"), "html", null, true);
        yield "\" class=\"d-block w-100\" alt=\"Slide 1\">
                    <div class=\"carousel-caption\">
                        <h3>Bienvenue sur notre plateforme</h3>
                        <p>Découvrez nos services innovants</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img src=\"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/slide2.jpg"), "html", null, true);
        yield "\" class=\"d-block w-100\" alt=\"Slide 2\">
                    <div class=\"carousel-caption\">
                        <h3>Apprenez avec nous</h3>
                        <p>Des formations adaptées à vos besoins</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img src=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/slide3.jpg"), "html", null, true);
        yield "\" class=\"d-block w-100\" alt=\"Slide 3\">
                    <div class=\"carousel-caption\">
                        <h3>Rejoignez notre communauté</h3>
                        <p>Un espace d'apprentissage collaboratif</p>
                    </div>
                </div>
            </div>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#homeCarousel\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Précédent</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#homeCarousel\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Suivant</span>
            </button>
        </div>
    </section>
    
    
    <div class=\"content\">
        ";
        // line 175
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 176
        yield "    </div>
    <!-- Footer -->
    <footer id=\"newsletter\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"section-heading\">
                        <h4>Join our mailing list to receive the news &amp; latest trends</h4>
                    </div>
                </div>
                <div class=\"col-lg-6 offset-lg-3\">
                    <form id=\"search\" action=\"#\" method=\"GET\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-sm-6\">
                                <fieldset>
                                    <input type=\"address\" name=\"address\" class=\"email\" placeholder=\"Email Address...\" autocomplete=\"on\" required>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-6 col-sm-6\">
                                <fieldset>
                                    <button type=\"submit\" class=\"main-button\">Subscribe Now <i class=\"fa fa-angle-right\"></i></button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"footer-widget\">
                        <h4>Contact Us</h4>
                        <p>Rio de Janeiro - RJ, 22795-008, Brazil</p>
                        <p><a href=\"#\">010-020-0340</a></p>
                        <p><a href=\"#\">info@company.co</a></p>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"footer-widget\">
                        <h4>About Us</h4>
                        <ul>
                            <li><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">Services</a></li>
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\">Testimonials</a></li>
                            <li><a href=\"#\">Pricing</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"footer-widget\">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href=\"#\">Free Apps</a></li>
                            <li><a href=\"#\">App Engine</a></li>
                            <li><a href=\"#\">Programming</a></li>
                            <li><a href=\"#\">Development</a></li>
                            <li><a href=\"#\">App News</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"footer-widget\">
                        <h4>About Our Company</h4>
                        <div class=\"logo\">
                            <img src=\"";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo2.png"), "html", null, true);
        yield "\" alt=\"\">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>
                <div class=\"col-lg-12\">
                    <div class=\"copyright-text\">
                        <p>Copyright © 2022 Chain App Dev Company. All Rights Reserved. 
                        <br>Design: <a href=\"https://templatemo.com/\" target=\"_blank\" title=\"css templates\">TemplateMo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src=\"";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/animation.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/imagesloaded.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        yield "\"></script>
    ";
        // line 262
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 265
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 175
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

    // line 262
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

        // line 263
        yield "        ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        yield "
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
        return "HomeUser/Home.html.twig";
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
        return array (  444 => 263,  431 => 262,  409 => 175,  386 => 5,  373 => 265,  371 => 262,  367 => 261,  363 => 260,  359 => 259,  355 => 258,  351 => 257,  347 => 256,  343 => 255,  325 => 240,  259 => 176,  257 => 175,  234 => 155,  224 => 148,  214 => 141,  186 => 116,  172 => 105,  76 => 12,  72 => 11,  68 => 10,  63 => 8,  57 => 5,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
    <link href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-chain-app-dev.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animated.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
    
    <style>
        /* Ajustement du padding pour éviter que la navbar couvre le contenu */
        body {
            padding-top: 70px;
        }
        
        /* Styles du Slider */
        #home {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }
        .header-area {
        position: sticky;
        top: 0;
        width: 100%;
        z-index: 1000;
        background: white;
        transition: all 0.3s ease-in-out;
    }

    .navbar-brand img {
        transition: transform 0.3s ease-in-out;
    }

    .navbar-brand img:hover {
        transform: scale(1.1);
    }

    .navbar-nav .nav-link {
        font-weight: 500;
        color: #333;
        transition: color 0.3s ease-in-out;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
        color: #007bff;
    }

    /* Profil */
    .profile-img {
        width: 40px;
        height: 40px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #007bff;
    }

    .dropdown-menu {
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .dropdown-item {
        transition: background 0.3s ease-in-out;
    }

    .dropdown-item:hover {
        background: #007bff;
        color: white;
    }

        .carousel-item img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
        .profile-img {
    width: 50px;
    height: 50px;
    object-fit: cover;
    border-radius: 50%;
}
    </style>
</head>
<body>
    <!-- Header/Navbar -->
    <header class=\"header-area header-sticky wow slideInDown\" data-wow-duration=\"0.75s\" data-wow-delay=\"0s\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav class=\"main-nav\">
                        <a href=\"#\" class=\"logo\" style=\"margin-left: -150px;\">
                            <img src=\"{{ asset('assets/images/logo2.png') }}\" alt=\"Chain App Dev\" width=\"80px\" height=\"80px\">
                        </a>
                        <ul class=\"nav\">
                            <li class=\"scroll-to-section\"><a href=\"#home\" class=\"active\">Home</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#services\">Rendez-vous</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#about\">Evenement</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#pricing\">Reclamation</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#newsletter\">Forum</a></li>
                            <li>
                                <div class=\"profile-dropdown\">
                    <button class=\"profile-btn\">
                        <img src=\"{{ asset('assets/images/lhech.jpg') }}\" alt=\"Profil\" class=\"profile-img\">
                        <span>Responsable</span>
                        <i class=\"fas fa-chevron-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\"><i class=\"fas fa-user\"></i> Mon Profil</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-sign-out-alt\"></i> Déconnexion</a></li>
                    </ul>
                </div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Section Home avec le Slider -->
    <section id=\"home\">
        <div id=\"homeCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img src=\"{{ asset('assets/images/slide1.jpg') }}\" class=\"d-block w-100\" alt=\"Slide 1\">
                    <div class=\"carousel-caption\">
                        <h3>Bienvenue sur notre plateforme</h3>
                        <p>Découvrez nos services innovants</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img src=\"{{ asset('assets/images/slide2.jpg') }}\" class=\"d-block w-100\" alt=\"Slide 2\">
                    <div class=\"carousel-caption\">
                        <h3>Apprenez avec nous</h3>
                        <p>Des formations adaptées à vos besoins</p>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <img src=\"{{ asset('assets/images/slide3.jpg') }}\" class=\"d-block w-100\" alt=\"Slide 3\">
                    <div class=\"carousel-caption\">
                        <h3>Rejoignez notre communauté</h3>
                        <p>Un espace d'apprentissage collaboratif</p>
                    </div>
                </div>
            </div>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#homeCarousel\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Précédent</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#homeCarousel\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Suivant</span>
            </button>
        </div>
    </section>
    
    
    <div class=\"content\">
        {% block body %}{% endblock %}
    </div>
    <!-- Footer -->
    <footer id=\"newsletter\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"section-heading\">
                        <h4>Join our mailing list to receive the news &amp; latest trends</h4>
                    </div>
                </div>
                <div class=\"col-lg-6 offset-lg-3\">
                    <form id=\"search\" action=\"#\" method=\"GET\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-sm-6\">
                                <fieldset>
                                    <input type=\"address\" name=\"address\" class=\"email\" placeholder=\"Email Address...\" autocomplete=\"on\" required>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-6 col-sm-6\">
                                <fieldset>
                                    <button type=\"submit\" class=\"main-button\">Subscribe Now <i class=\"fa fa-angle-right\"></i></button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"footer-widget\">
                        <h4>Contact Us</h4>
                        <p>Rio de Janeiro - RJ, 22795-008, Brazil</p>
                        <p><a href=\"#\">010-020-0340</a></p>
                        <p><a href=\"#\">info@company.co</a></p>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"footer-widget\">
                        <h4>About Us</h4>
                        <ul>
                            <li><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">Services</a></li>
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\">Testimonials</a></li>
                            <li><a href=\"#\">Pricing</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"footer-widget\">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href=\"#\">Free Apps</a></li>
                            <li><a href=\"#\">App Engine</a></li>
                            <li><a href=\"#\">Programming</a></li>
                            <li><a href=\"#\">Development</a></li>
                            <li><a href=\"#\">App News</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"footer-widget\">
                        <h4>About Our Company</h4>
                        <div class=\"logo\">
                            <img src=\"{{ asset('assets/images/logo2.png') }}\" alt=\"\">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>
                <div class=\"col-lg-12\">
                    <div class=\"copyright-text\">
                        <p>Copyright © 2022 Chain App Dev Company. All Rights Reserved. 
                        <br>Design: <a href=\"https://templatemo.com/\" target=\"_blank\" title=\"css templates\">TemplateMo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src=\"{{ asset('jquery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/owl-carousel.js') }}\"></script>
    <script src=\"{{ asset('assets/js/animation.js') }}\"></script>
    <script src=\"{{ asset('assets/js/imagesloaded.js') }}\"></script>
    <script src=\"{{ asset('assets/js/popup.js') }}\"></script>
    <script src=\"{{ asset('assets/js/custom.js') }}\"></script>
    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
    {% endblock %}
</body>
</html>
", "HomeUser/Home.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\HomeUser\\Home.html.twig");
    }
}
