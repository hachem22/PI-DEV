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

/* register.html.twig */
class __TwigTemplate_1008ea3564229c8ae1d8a0937d71a717 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Connexion</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">
    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-primary {
            background: #667eea;
            border: none;
        }
        .btn-primary:hover {
            background: #5a67d8;
        }
        .form-footer {
            text-align: center;
            margin-top: 1rem;
        }
    </style>
</head>
<body>

    <div class=\"login-container\">
        <h2 class=\"text-center mb-4\">Register</h2>
        <form method=\"POST\" action=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Register");
        yield "\">
        <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">nom</label>
                <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">prenom</label>
                <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">Email</label>
                <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"password\" class=\"form-label\">Mot de passe</label>
                <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" required>
            </div>
            <button type=\"submit\" class=\"btn btn-primary w-100\">Se connecter</button>
        </form>
        <div class=\"form-footer\">
            <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Login");
        yield "\" class=\"text-muted\">connexion</a>
        </div>
    </div>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "register.html.twig";
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
        return array (  116 => 64,  93 => 44,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Connexion</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">
    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-primary {
            background: #667eea;
            border: none;
        }
        .btn-primary:hover {
            background: #5a67d8;
        }
        .form-footer {
            text-align: center;
            margin-top: 1rem;
        }
    </style>
</head>
<body>

    <div class=\"login-container\">
        <h2 class=\"text-center mb-4\">Register</h2>
        <form method=\"POST\" action=\"{{ path('Register') }}\">
        <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">nom</label>
                <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">prenom</label>
                <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">Email</label>
                <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required>
            </div>
            <div class=\"mb-3\">
                <label for=\"password\" class=\"form-label\">Mot de passe</label>
                <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" required>
            </div>
            <button type=\"submit\" class=\"btn btn-primary w-100\">Se connecter</button>
        </form>
        <div class=\"form-footer\">
            <a href=\"{{ path('Login') }}\" class=\"text-muted\">connexion</a>
        </div>
    </div>

</body>
</html>
", "register.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\register.html.twig");
    }
}
