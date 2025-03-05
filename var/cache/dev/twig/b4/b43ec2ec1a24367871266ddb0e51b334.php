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

/* chambre/guide.html.twig */
class __TwigTemplate_b6314a51833e8d4403c9d9864f86198c extends Template
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
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/guide.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/guide.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 333
        yield "
";
        // line 334
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 2
        yield "    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>CareConnect - Plan des chambres</title>
    <meta name=\"description\" content=\"Plan interactif des chambres de l'hôpital\" />
    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/favicon/favicon.ico"), "html", null, true);
        yield "\" />
    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/fonts/boxicons.css"), "html", null, true);
        yield "\" />
    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/css/core.css"), "html", null, true);
        yield "\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/css/theme-default.css"), "html", null, true);
        yield "\" class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/css/demo.css"), "html", null, true);
        yield "\" />
    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
    <style>
        body {
            background-color: #f5f7fa;
            font-family: 'Public Sans', sans-serif;
        }
        
        .container-xxl {
            margin-top: 30px;
            margin-bottom: 30px;
        }
        
        .hospital-map-header {
            background-color: #1565c0;
            color: white;
            border-radius: 8px 8px 0 0;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .hospital-map-header h5 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 600;
        }
        
        .legend-item {
            display: flex;
            align-items: center;
            margin-right: 15px;
            font-size: 0.85rem;
        }
        
        .legend-color {
            width: 15px;
            height: 15px;
            border-radius: 3px;
            margin-right: 5px;
        }
        
        .map-container {
            background-color: white;
            padding: 20px;
            border-radius: 0 0 8px 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        
        .floor-tabs {
            margin-bottom: 20px;
        }
        
        .floor-tab {
            padding: 10px 20px;
            border: none;
            background-color: #e9ecef;
            color: #495057;
            font-weight: 600;
            border-radius: 30px;
            margin-right: 10px;
            transition: all 0.3s ease;
        }
        
        .floor-tab.active {
            background-color: #1565c0;
            color: white;
            box-shadow: 0 4px 8px rgba(21, 101, 192, 0.3);
        }
        
        .hospital-floor {
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            gap: 15px;
            margin-bottom: 30px;
            position: relative;
        }
        
        /* Corridors */
        .corridor-horizontal {
            grid-column: 1 / span 8;
            height: 40px;
            background-color: #e9ecef;
            border-radius: 8px;
            margin: 10px 0;
            position: relative;
        }
        
        .corridor-vertical {
            grid-row: span 4;
            width: 40px;
            background-color: #e9ecef;
            border-radius: 8px;
            justify-self: center;
            position: relative;
        }
        
        /* Chambres */
        .room {
            background-color: white;
            aspect-ratio: 1/1;
            border-radius: 8px;
            position: relative;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: 2px solid #e9ecef;
        }
        
        .room:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
            z-index: 10;
        }
        
        .room-number {
            font-size: 1.3rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 5px;
        }
        
        .room-beds {
            font-size: 0.85rem;
            color: #666;
        }
        
        .room.disponible {
            background-color: #e8f5e9;
            border-color: #4caf50;
        }
        
        .room.occupee {
            background-color: #ffebee;
            border-color: #f44336;
        }
        
        .room.maintenance {
            background-color: #fff8e1;
            border-color: #ffc107;
        }
        
        .room-status {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }
        
        .room-status.disponible {
            background-color: #4caf50;
            box-shadow: 0 0 5px #4caf50;
        }
        
        .room-status.occupee {
            background-color: #f44336;
            box-shadow: 0 0 5px #f44336;
        }
        
        .room-status.maintenance {
            background-color: #ffc107;
            box-shadow: 0 0 5px #ffc107;
        }
        
        /* Facilités */
        .facility {
            background-color: #e3f2fd;
            aspect-ratio: 1/1;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 2px solid #90caf9;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .facility i {
            font-size: 1.8rem;
            color: #1565c0;
            margin-bottom: 5px;
        }
        
        .facility-name {
            font-size: 0.8rem;
            color: #333;
            text-align: center;
            font-weight: 600;
        }
        
        /* Décorations */
        .plant {
            width: 30px;
            height: 30px;
            background-color: #c8e6c9;
            border-radius: 50%;
            position: absolute;
            border: 2px solid #81c784;
        }
        
        /* Modale pour détails de chambre */
        .room-detail-modal .modal-header {
            background-color: #1565c0;
            color: white;
        }
        
        .bed-icon {
            display: inline-block;
            width: 30px;
            height: 15px;
            background-color: #e0e0e0;
            border-radius: 3px;
            margin-right: 5px;
            position: relative;
        }
        
        .bed-icon.occupied {
            background-color: #ffcdd2;
        }
        
        .bed-icon.free {
            background-color: #c8e6c9;
        }
        
        .room-info-list {
            list-style-type: none;
            padding: 0;
        }
        
        .room-info-list li {
            padding: 8px 0;
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            justify-content: space-between;
        }
        
        .floor-layout {
            position: relative;
            background-color: #f5f7fa;
            padding: 30px;
            border-radius: 8px;
            border: 1px dashed #ccc;
        }
        
        /* Navigation controls */
        .map-controls {
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
        }
        
        .zoom-controls {
            display: flex;
            gap: 10px;
        }
        
        .zoom-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: white;
            border: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.2rem;
            color: #333;
            transition: all 0.2s ease;
        }
        
        .zoom-btn:hover {
            background-color: #1565c0;
            color: white;
            transform: scale(1.1);
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .hospital-floor {
                grid-template-columns: repeat(6, 1fr);
            }
        }
        
        @media (max-width: 768px) {
            .hospital-floor {
                grid-template-columns: repeat(4, 1fr);
            }
            
            .legend {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .legend-item {
                margin-bottom: 5px;
            }
        }
        
        @media (max-width: 576px) {
            .hospital-floor {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 334
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

        // line 335
        yield "    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <div class=\"card shadow-none\">
            <div class=\"hospital-map-header\">
                <h5><i class=\"fas fa-hospital me-2\"></i> Plan des chambres</h5>
                <div class=\"legend d-flex\">
                    <div class=\"legend-item\">
                        <div class=\"legend-color\" style=\"background-color: #4caf50;\"></div>
                        <span>Disponible</span>
                    </div>
                    <div class=\"legend-item\">
                        <div class=\"legend-color\" style=\"background-color: #f44336;\"></div>
                        <span>Occupée</span>
                    </div>
                    <div class=\"legend-item\">
                        <div class=\"legend-color\" style=\"background-color: #ffc107;\"></div>
                        <span>Maintenance</span>
                    </div>
                </div>
            </div>

            <div class=\"map-container\">
                <div class=\"map-controls\">
                    <div class=\"floor-tabs\">
                        <button class=\"floor-tab active\">Étage 1</button>
                        <button class=\"floor-tab\">Étage 2</button>
                        <button class=\"floor-tab\">Étage 3</button>
                    </div>
                    <div class=\"zoom-controls\">
                        <button class=\"zoom-btn\"><i class=\"fas fa-plus\"></i></button>
                        <button class=\"zoom-btn\"><i class=\"fas fa-minus\"></i></button>
                    </div>
                </div>

                <div class=\"floor-layout\">
                    <div class=\"hospital-floor\">
                        <!-- Plantes décoratives -->
                        <div class=\"plant\" style=\"top: 70px; left: 50px;\"></div>
                        <div class=\"plant\" style=\"bottom: 100px; right: 80px;\"></div>
                        <div class=\"plant\" style=\"top: 200px; right: 150px;\"></div>
                        
                        <!-- Ascenseurs et escaliers -->
                        <div class=\"facility\" style=\"grid-column: 1; grid-row: 1;\">
                            <i class=\"fas fa-elevator\"></i>
                            <div class=\"facility-name\">Ascenseur</div>
                        </div>
                        
                        <div class=\"facility\" style=\"grid-column: 2; grid-row: 1;\">
                            <i class=\"fas fa-stairs\"></i>
                            <div class=\"facility-name\">Escalier</div>
                        </div>
                        
                        <!-- Couloir horizontal supérieur -->
                        <div class=\"corridor-horizontal\" style=\"grid-column: 1 / span 8; grid-row: 2;\"></div>
                        
                        <!-- Couloir vertical -->
                        <div class=\"corridor-vertical\" style=\"grid-column: 4; grid-row: 2 / span 6;\"></div>
                        
                        <!-- Chambres -->
                        ";
        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 393, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
            // line 394
            yield "                            ";
            $context["column"] = (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 394) % 8);
            // line 395
            yield "                            ";
            $context["row"] = (Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 395) / 8), 0, "floor") + 3);
            // line 396
            yield "                            
                            ";
            // line 397
            if (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 397, $this->source); })()) == 0)) {
                // line 398
                yield "                                ";
                $context["column"] = 8;
                // line 399
                yield "                            ";
            }
            // line 400
            yield "                            
                            ";
            // line 401
            if (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 401, $this->source); })()) == 4)) {
                // line 402
                yield "                                ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 402) % 2) == 0)) {
                    // line 403
                    yield "                                    ";
                    $context["column"] = 5;
                    // line 404
                    yield "                                ";
                } else {
                    // line 405
                    yield "                                    ";
                    $context["column"] = 3;
                    // line 406
                    yield "                                ";
                }
                // line 407
                yield "                            ";
            }
            // line 408
            yield "                            
                            <div class=\"room ";
            // line 409
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "active", [], "any", false, false, false, 409), "html", null, true);
            yield "\" style=\"grid-column: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 409, $this->source); })()), "html", null, true);
            yield "; grid-row: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 409, $this->source); })()), "html", null, true);
            yield ";\"
                                 data-bs-toggle=\"modal\" data-bs-target=\"#roomModal";
            // line 410
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "num", [], "any", false, false, false, 410), "html", null, true);
            yield "\">
                                <div class=\"room-status ";
            // line 411
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "active", [], "any", false, false, false, 411), "html", null, true);
            yield "\"></div>
                                <div class=\"room-number\">";
            // line 412
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "num", [], "any", false, false, false, 412), "html", null, true);
            yield "</div>
                                <div class=\"room-beds\">
                                    <i class=\"fas fa-bed\"></i> ";
            // line 414
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 1, 4), "html", null, true);
            yield "
                                </div>
                            </div>
                            
                            <!-- Modal pour chaque chambre -->
                            <div class=\"modal fade room-detail-modal\" id=\"roomModal";
            // line 419
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "num", [], "any", false, false, false, 419), "html", null, true);
            yield "\" tabindex=\"-1\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\">Chambre ";
            // line 423
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "num", [], "any", false, false, false, 423), "html", null, true);
            yield "</h5>
                                            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <div class=\"status-badge mb-3 p-2 rounded text-center
                                                ";
            // line 428
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "active", [], "any", false, false, false, 428) == "disponible")) {
                yield " bg-success text-white
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 429
$context["chambre"], "active", [], "any", false, false, false, 429) == "occupee")) {
                yield " bg-danger text-white
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 430
$context["chambre"], "active", [], "any", false, false, false, 430) == "maintenance")) {
                yield " bg-warning
                                                ";
            }
            // line 431
            yield "\">
                                                <i class=\"fas fa-circle me-2\"></i>
                                                ";
            // line 433
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "active", [], "any", false, false, false, 433)), "html", null, true);
            yield "
                                            </div>
                                            
                                            <h6 class=\"mb-3\">Lits:</h6>
                                            <div class=\"d-flex gap-2 mb-4\">
                                                ";
            // line 438
            $context["totalBeds"] = Twig\Extension\CoreExtension::random($this->env->getCharset(), 1, 4);
            // line 439
            yield "                                                ";
            $context["occupiedBeds"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "active", [], "any", false, false, false, 439) == "occupee")) ? (Twig\Extension\CoreExtension::random($this->env->getCharset(), 1, (isset($context["totalBeds"]) || array_key_exists("totalBeds", $context) ? $context["totalBeds"] : (function () { throw new RuntimeError('Variable "totalBeds" does not exist.', 439, $this->source); })()))) : (0));
            // line 440
            yield "                                                
                                                ";
            // line 441
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalBeds"]) || array_key_exists("totalBeds", $context) ? $context["totalBeds"] : (function () { throw new RuntimeError('Variable "totalBeds" does not exist.', 441, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 442
                yield "                                                    ";
                if (($context["i"] <= (isset($context["occupiedBeds"]) || array_key_exists("occupiedBeds", $context) ? $context["occupiedBeds"] : (function () { throw new RuntimeError('Variable "occupiedBeds" does not exist.', 442, $this->source); })()))) {
                    // line 443
                    yield "                                                        <div class=\"bed-icon occupied\" title=\"Lit ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield " - Occupé\"></div>
                                                    ";
                } else {
                    // line 445
                    yield "                                                        <div class=\"bed-icon free\" title=\"Lit ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield " - Libre\"></div>
                                                    ";
                }
                // line 447
                yield "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 448
            yield "                                            </div>
                                            
                                            <h6 class=\"mb-2\">Informations:</h6>
                                            <ul class=\"room-info-list mb-4\">
                                                <li>
                                                    <span>Type de chambre</span>
                                                    <span>";
            // line 454
            yield ((((isset($context["totalBeds"]) || array_key_exists("totalBeds", $context) ? $context["totalBeds"] : (function () { throw new RuntimeError('Variable "totalBeds" does not exist.', 454, $this->source); })()) == 1)) ? ("Individuelle") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("Multiple (" . (isset($context["totalBeds"]) || array_key_exists("totalBeds", $context) ? $context["totalBeds"] : (function () { throw new RuntimeError('Variable "totalBeds" does not exist.', 454, $this->source); })())) . " lits)"), "html", null, true)));
            yield "</span>
                                                </li>
                                                <li>
                                                    <span>Superficie</span>
                                                    <span>";
            // line 458
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((15 + ((isset($context["totalBeds"]) || array_key_exists("totalBeds", $context) ? $context["totalBeds"] : (function () { throw new RuntimeError('Variable "totalBeds" does not exist.', 458, $this->source); })()) * 5)), "html", null, true);
            yield " m²</span>
                                                </li>
                                                <li>
                                                    <span>Équipements</span>
                                                    <span>
                                                        <i class=\"fas fa-wifi me-1\" title=\"WiFi\"></i>
                                                        <i class=\"fas fa-tv me-1\" title=\"Télévision\"></i>
                                                        <i class=\"fas fa-snowflake me-1\" title=\"Climatisation\"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Dernière désinfection</span>
                                                    <span>";
            // line 470
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
            yield "</span>
                                                </li>
                                            </ul>
                                            
                                            ";
            // line 474
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "active", [], "any", false, false, false, 474) == "disponible")) {
                // line 475
                yield "                                                <button class=\"btn btn-primary w-100\">
                                                    <i class=\"fas fa-user-plus me-2\"></i>Assigner un patient
                                                </button>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 478
$context["chambre"], "active", [], "any", false, false, false, 478) == "maintenance")) {
                // line 479
                yield "                                                <a class=\"btn btn-warning w-100\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.entretients", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chambre"], "id", [], "any", false, false, false, 479)]), "html", null, true);
                yield "\">
                                                    <i class=\"fas fa-tools me-2\"></i>Voir détails maintenance
                                                </a>
                                            ";
            } else {
                // line 483
                yield "                                                <button class=\"btn btn-info w-100\">
                                                    <i class=\"fas fa-info-circle me-2\"></i>Voir détails patients
                                                </button>
                                            ";
            }
            // line 487
            yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['chambre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 492
        yield "                        
                        <!-- Autres facilités -->
                        <div class=\"facility\" style=\"grid-column: 8; grid-row: 1;\">
                            <i class=\"fas fa-info-circle\"></i>
                            <div class=\"facility-name\">Accueil</div>
                        </div>
                        
                        <div class=\"facility\" style=\"grid-column: 7; grid-row: 1;\">
                            <i class=\"fas fa-coffee\"></i>
                            <div class=\"facility-name\">Cafétéria</div>
                        </div>
                        
                        <div class=\"facility\" style=\"grid-column: 8; grid-row: 8;\">
                            <i class=\"fas fa-restroom\"></i>
                            <div class=\"facility-name\">Toilettes</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"text-end mt-3\">
            <a href=\"";
        // line 514
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre.guide.download_pdf");
        yield "\" class=\"btn btn-secondary btn-custom\">
                <i class=\"bx bx-download\"></i> Télécharger PDF
            </a>
        </div>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Simulation de zoom
            const floorLayout = document.querySelector('.floor-layout');
            let zoomLevel = 1;
            
            document.querySelectorAll('.zoom-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    if (this.innerHTML.includes('plus') && zoomLevel < 1.5) {
                        zoomLevel += 0.1;
                    } else if (this.innerHTML.includes('minus') && zoomLevel > 0.7) {
                        zoomLevel -= 0.1;
                    }
                    
                    floorLayout.style.transform = `scale(\${zoomLevel})`;
                });
            });
            
            // Changement d'étage
            document.querySelectorAll('.floor-tab').forEach(tab => {
                tab.addEventListener('click', function() {
                    document.querySelector('.floor-tab.active').classList.remove('active');
                    this.classList.add('active');
                    
                    // Ici vous pourriez charger les chambres de l'étage sélectionné via AJAX
                    // ou simplement afficher/masquer différentes sections du DOM
                });
            });
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
        return "chambre/guide.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  775 => 514,  751 => 492,  733 => 487,  727 => 483,  719 => 479,  717 => 478,  712 => 475,  710 => 474,  703 => 470,  688 => 458,  681 => 454,  673 => 448,  667 => 447,  661 => 445,  655 => 443,  652 => 442,  648 => 441,  645 => 440,  642 => 439,  640 => 438,  632 => 433,  628 => 431,  623 => 430,  619 => 429,  615 => 428,  607 => 423,  600 => 419,  592 => 414,  587 => 412,  583 => 411,  579 => 410,  571 => 409,  568 => 408,  565 => 407,  562 => 406,  559 => 405,  556 => 404,  553 => 403,  550 => 402,  548 => 401,  545 => 400,  542 => 399,  539 => 398,  537 => 397,  534 => 396,  531 => 395,  528 => 394,  511 => 393,  451 => 335,  438 => 334,  112 => 18,  107 => 16,  103 => 15,  99 => 14,  94 => 12,  86 => 7,  79 => 2,  66 => 1,  55 => 334,  52 => 333,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block head %}
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>CareConnect - Plan des chambres</title>
    <meta name=\"description\" content=\"Plan interactif des chambres de l'hôpital\" />
    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('../assets/img/favicon/favicon.ico') }}\" />
    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/fonts/boxicons.css') }}\" />
    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/css/core.css') }}\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/css/theme-default.css') }}\" class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/css/demo.css') }}\" />
    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
    <style>
        body {
            background-color: #f5f7fa;
            font-family: 'Public Sans', sans-serif;
        }
        
        .container-xxl {
            margin-top: 30px;
            margin-bottom: 30px;
        }
        
        .hospital-map-header {
            background-color: #1565c0;
            color: white;
            border-radius: 8px 8px 0 0;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .hospital-map-header h5 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 600;
        }
        
        .legend-item {
            display: flex;
            align-items: center;
            margin-right: 15px;
            font-size: 0.85rem;
        }
        
        .legend-color {
            width: 15px;
            height: 15px;
            border-radius: 3px;
            margin-right: 5px;
        }
        
        .map-container {
            background-color: white;
            padding: 20px;
            border-radius: 0 0 8px 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        
        .floor-tabs {
            margin-bottom: 20px;
        }
        
        .floor-tab {
            padding: 10px 20px;
            border: none;
            background-color: #e9ecef;
            color: #495057;
            font-weight: 600;
            border-radius: 30px;
            margin-right: 10px;
            transition: all 0.3s ease;
        }
        
        .floor-tab.active {
            background-color: #1565c0;
            color: white;
            box-shadow: 0 4px 8px rgba(21, 101, 192, 0.3);
        }
        
        .hospital-floor {
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            gap: 15px;
            margin-bottom: 30px;
            position: relative;
        }
        
        /* Corridors */
        .corridor-horizontal {
            grid-column: 1 / span 8;
            height: 40px;
            background-color: #e9ecef;
            border-radius: 8px;
            margin: 10px 0;
            position: relative;
        }
        
        .corridor-vertical {
            grid-row: span 4;
            width: 40px;
            background-color: #e9ecef;
            border-radius: 8px;
            justify-self: center;
            position: relative;
        }
        
        /* Chambres */
        .room {
            background-color: white;
            aspect-ratio: 1/1;
            border-radius: 8px;
            position: relative;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: 2px solid #e9ecef;
        }
        
        .room:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
            z-index: 10;
        }
        
        .room-number {
            font-size: 1.3rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 5px;
        }
        
        .room-beds {
            font-size: 0.85rem;
            color: #666;
        }
        
        .room.disponible {
            background-color: #e8f5e9;
            border-color: #4caf50;
        }
        
        .room.occupee {
            background-color: #ffebee;
            border-color: #f44336;
        }
        
        .room.maintenance {
            background-color: #fff8e1;
            border-color: #ffc107;
        }
        
        .room-status {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }
        
        .room-status.disponible {
            background-color: #4caf50;
            box-shadow: 0 0 5px #4caf50;
        }
        
        .room-status.occupee {
            background-color: #f44336;
            box-shadow: 0 0 5px #f44336;
        }
        
        .room-status.maintenance {
            background-color: #ffc107;
            box-shadow: 0 0 5px #ffc107;
        }
        
        /* Facilités */
        .facility {
            background-color: #e3f2fd;
            aspect-ratio: 1/1;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 2px solid #90caf9;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .facility i {
            font-size: 1.8rem;
            color: #1565c0;
            margin-bottom: 5px;
        }
        
        .facility-name {
            font-size: 0.8rem;
            color: #333;
            text-align: center;
            font-weight: 600;
        }
        
        /* Décorations */
        .plant {
            width: 30px;
            height: 30px;
            background-color: #c8e6c9;
            border-radius: 50%;
            position: absolute;
            border: 2px solid #81c784;
        }
        
        /* Modale pour détails de chambre */
        .room-detail-modal .modal-header {
            background-color: #1565c0;
            color: white;
        }
        
        .bed-icon {
            display: inline-block;
            width: 30px;
            height: 15px;
            background-color: #e0e0e0;
            border-radius: 3px;
            margin-right: 5px;
            position: relative;
        }
        
        .bed-icon.occupied {
            background-color: #ffcdd2;
        }
        
        .bed-icon.free {
            background-color: #c8e6c9;
        }
        
        .room-info-list {
            list-style-type: none;
            padding: 0;
        }
        
        .room-info-list li {
            padding: 8px 0;
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            justify-content: space-between;
        }
        
        .floor-layout {
            position: relative;
            background-color: #f5f7fa;
            padding: 30px;
            border-radius: 8px;
            border: 1px dashed #ccc;
        }
        
        /* Navigation controls */
        .map-controls {
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
        }
        
        .zoom-controls {
            display: flex;
            gap: 10px;
        }
        
        .zoom-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: white;
            border: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.2rem;
            color: #333;
            transition: all 0.2s ease;
        }
        
        .zoom-btn:hover {
            background-color: #1565c0;
            color: white;
            transform: scale(1.1);
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .hospital-floor {
                grid-template-columns: repeat(6, 1fr);
            }
        }
        
        @media (max-width: 768px) {
            .hospital-floor {
                grid-template-columns: repeat(4, 1fr);
            }
            
            .legend {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .legend-item {
                margin-bottom: 5px;
            }
        }
        
        @media (max-width: 576px) {
            .hospital-floor {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <div class=\"card shadow-none\">
            <div class=\"hospital-map-header\">
                <h5><i class=\"fas fa-hospital me-2\"></i> Plan des chambres</h5>
                <div class=\"legend d-flex\">
                    <div class=\"legend-item\">
                        <div class=\"legend-color\" style=\"background-color: #4caf50;\"></div>
                        <span>Disponible</span>
                    </div>
                    <div class=\"legend-item\">
                        <div class=\"legend-color\" style=\"background-color: #f44336;\"></div>
                        <span>Occupée</span>
                    </div>
                    <div class=\"legend-item\">
                        <div class=\"legend-color\" style=\"background-color: #ffc107;\"></div>
                        <span>Maintenance</span>
                    </div>
                </div>
            </div>

            <div class=\"map-container\">
                <div class=\"map-controls\">
                    <div class=\"floor-tabs\">
                        <button class=\"floor-tab active\">Étage 1</button>
                        <button class=\"floor-tab\">Étage 2</button>
                        <button class=\"floor-tab\">Étage 3</button>
                    </div>
                    <div class=\"zoom-controls\">
                        <button class=\"zoom-btn\"><i class=\"fas fa-plus\"></i></button>
                        <button class=\"zoom-btn\"><i class=\"fas fa-minus\"></i></button>
                    </div>
                </div>

                <div class=\"floor-layout\">
                    <div class=\"hospital-floor\">
                        <!-- Plantes décoratives -->
                        <div class=\"plant\" style=\"top: 70px; left: 50px;\"></div>
                        <div class=\"plant\" style=\"bottom: 100px; right: 80px;\"></div>
                        <div class=\"plant\" style=\"top: 200px; right: 150px;\"></div>
                        
                        <!-- Ascenseurs et escaliers -->
                        <div class=\"facility\" style=\"grid-column: 1; grid-row: 1;\">
                            <i class=\"fas fa-elevator\"></i>
                            <div class=\"facility-name\">Ascenseur</div>
                        </div>
                        
                        <div class=\"facility\" style=\"grid-column: 2; grid-row: 1;\">
                            <i class=\"fas fa-stairs\"></i>
                            <div class=\"facility-name\">Escalier</div>
                        </div>
                        
                        <!-- Couloir horizontal supérieur -->
                        <div class=\"corridor-horizontal\" style=\"grid-column: 1 / span 8; grid-row: 2;\"></div>
                        
                        <!-- Couloir vertical -->
                        <div class=\"corridor-vertical\" style=\"grid-column: 4; grid-row: 2 / span 6;\"></div>
                        
                        <!-- Chambres -->
                        {% for chambre in chambres %}
                            {% set column = loop.index % 8 %}
                            {% set row = (loop.index / 8)|round(0, 'floor') + 3 %}
                            
                            {% if column == 0 %}
                                {% set column = 8 %}
                            {% endif %}
                            
                            {% if column == 4 %}
                                {% if loop.index % 2 == 0 %}
                                    {% set column = 5 %}
                                {% else %}
                                    {% set column = 3 %}
                                {% endif %}
                            {% endif %}
                            
                            <div class=\"room {{ chambre.active }}\" style=\"grid-column: {{ column }}; grid-row: {{ row }};\"
                                 data-bs-toggle=\"modal\" data-bs-target=\"#roomModal{{ chambre.num }}\">
                                <div class=\"room-status {{ chambre.active }}\"></div>
                                <div class=\"room-number\">{{ chambre.num }}</div>
                                <div class=\"room-beds\">
                                    <i class=\"fas fa-bed\"></i> {{ random(1, 4) }}
                                </div>
                            </div>
                            
                            <!-- Modal pour chaque chambre -->
                            <div class=\"modal fade room-detail-modal\" id=\"roomModal{{ chambre.num }}\" tabindex=\"-1\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\">Chambre {{ chambre.num }}</h5>
                                            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <div class=\"status-badge mb-3 p-2 rounded text-center
                                                {% if chambre.active == 'disponible' %} bg-success text-white
                                                {% elseif chambre.active == 'occupee' %} bg-danger text-white
                                                {% elseif chambre.active == 'maintenance' %} bg-warning
                                                {% endif %}\">
                                                <i class=\"fas fa-circle me-2\"></i>
                                                {{ chambre.active|capitalize }}
                                            </div>
                                            
                                            <h6 class=\"mb-3\">Lits:</h6>
                                            <div class=\"d-flex gap-2 mb-4\">
                                                {% set totalBeds = random(1, 4) %}
                                                {% set occupiedBeds = chambre.active == 'occupee' ? random(1, totalBeds) : 0 %}
                                                
                                                {% for i in 1..totalBeds %}
                                                    {% if i <= occupiedBeds %}
                                                        <div class=\"bed-icon occupied\" title=\"Lit {{ i }} - Occupé\"></div>
                                                    {% else %}
                                                        <div class=\"bed-icon free\" title=\"Lit {{ i }} - Libre\"></div>
                                                    {% endif %}
                                                {% endfor %}
                                            </div>
                                            
                                            <h6 class=\"mb-2\">Informations:</h6>
                                            <ul class=\"room-info-list mb-4\">
                                                <li>
                                                    <span>Type de chambre</span>
                                                    <span>{{ totalBeds == 1 ? 'Individuelle' : 'Multiple (' ~ totalBeds ~ ' lits)' }}</span>
                                                </li>
                                                <li>
                                                    <span>Superficie</span>
                                                    <span>{{ 15 + totalBeds * 5 }} m²</span>
                                                </li>
                                                <li>
                                                    <span>Équipements</span>
                                                    <span>
                                                        <i class=\"fas fa-wifi me-1\" title=\"WiFi\"></i>
                                                        <i class=\"fas fa-tv me-1\" title=\"Télévision\"></i>
                                                        <i class=\"fas fa-snowflake me-1\" title=\"Climatisation\"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Dernière désinfection</span>
                                                    <span>{{ \"now\"|date(\"d/m/Y\") }}</span>
                                                </li>
                                            </ul>
                                            
                                            {% if chambre.active == 'disponible' %}
                                                <button class=\"btn btn-primary w-100\">
                                                    <i class=\"fas fa-user-plus me-2\"></i>Assigner un patient
                                                </button>
                                            {% elseif chambre.active == 'maintenance' %}
                                                <a class=\"btn btn-warning w-100\" href=\"{{ path('chambre.entretients', {id: chambre.id}) }}\">
                                                    <i class=\"fas fa-tools me-2\"></i>Voir détails maintenance
                                                </a>
                                            {% else %}
                                                <button class=\"btn btn-info w-100\">
                                                    <i class=\"fas fa-info-circle me-2\"></i>Voir détails patients
                                                </button>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                        
                        <!-- Autres facilités -->
                        <div class=\"facility\" style=\"grid-column: 8; grid-row: 1;\">
                            <i class=\"fas fa-info-circle\"></i>
                            <div class=\"facility-name\">Accueil</div>
                        </div>
                        
                        <div class=\"facility\" style=\"grid-column: 7; grid-row: 1;\">
                            <i class=\"fas fa-coffee\"></i>
                            <div class=\"facility-name\">Cafétéria</div>
                        </div>
                        
                        <div class=\"facility\" style=\"grid-column: 8; grid-row: 8;\">
                            <i class=\"fas fa-restroom\"></i>
                            <div class=\"facility-name\">Toilettes</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"text-end mt-3\">
            <a href=\"{{ path('chambre.guide.download_pdf') }}\" class=\"btn btn-secondary btn-custom\">
                <i class=\"bx bx-download\"></i> Télécharger PDF
            </a>
        </div>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Simulation de zoom
            const floorLayout = document.querySelector('.floor-layout');
            let zoomLevel = 1;
            
            document.querySelectorAll('.zoom-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    if (this.innerHTML.includes('plus') && zoomLevel < 1.5) {
                        zoomLevel += 0.1;
                    } else if (this.innerHTML.includes('minus') && zoomLevel > 0.7) {
                        zoomLevel -= 0.1;
                    }
                    
                    floorLayout.style.transform = `scale(\${zoomLevel})`;
                });
            });
            
            // Changement d'étage
            document.querySelectorAll('.floor-tab').forEach(tab => {
                tab.addEventListener('click', function() {
                    document.querySelector('.floor-tab.active').classList.remove('active');
                    this.classList.add('active');
                    
                    // Ici vous pourriez charger les chambres de l'étage sélectionné via AJAX
                    // ou simplement afficher/masquer différentes sections du DOM
                });
            });
        });
    </script>
{% endblock %}", "chambre/guide.html.twig", "C:\\Users\\aziz\\Desktop\\pidevhaythemv3\\pidevHaythemv2\\pidevHaythem\\Nouveau dossier (2)\\PI-DEV\\templates\\chambre\\guide.html.twig");
    }
}
