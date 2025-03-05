<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'base_admin', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/patients' => [[['_route' => 'admin_patients', '_controller' => 'App\\Controller\\AdminController::managePatients'], null, null, null, false, false, null]],
        '/admin/doctors' => [[['_route' => 'admin_doctors', '_controller' => 'App\\Controller\\AdminController::manageDoctors'], null, null, null, false, false, null]],
        '/chambre' => [[['_route' => 'app_chambre', '_controller' => 'App\\Controller\\ChambreController::index'], null, null, null, false, false, null]],
        '/chambre/nouveau' => [[['_route' => 'chambre.new', '_controller' => 'App\\Controller\\ChambreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/frontoffice/chambre' => [[['_route' => 'app_chambrefront', '_controller' => 'App\\Controller\\ChambreController::Showoff'], null, null, null, false, false, null]],
        '/chambre/guide' => [[['_route' => 'chambre.guide', '_controller' => 'App\\Controller\\ChambreController::guide'], null, null, null, false, false, null]],
        '/chambre/guide/download-pdf' => [[['_route' => 'chambre.guide.download_pdf', '_controller' => 'App\\Controller\\ChambreController::downloadGuidePdf'], null, null, null, false, false, null]],
        '/chambre/recherche' => [[['_route' => 'chambre.recherche', '_controller' => 'App\\Controller\\ChambreController::recherche'], null, ['GET' => 0], null, false, false, null]],
        '/chambre/recherchefront' => [[['_route' => 'chambre.recherchefront', '_controller' => 'App\\Controller\\ChambreController::recherchefront'], null, ['GET' => 0], null, false, false, null]],
        '/responsable' => [[['_route' => 'app_responsable', '_controller' => 'App\\Controller\\ChambreController::stat'], null, null, null, false, false, null]],
        '/chambre/filtre' => [[['_route' => 'chambre.filtre', '_controller' => 'App\\Controller\\ChambreController::filtre'], null, ['GET' => 0], null, false, false, null]],
        '/chatbot' => [[['_route' => 'chatbot_interact', '_controller' => 'App\\Controller\\ChatbotController::interagirChatbot'], null, ['POST' => 0], null, false, false, null]],
        '/chatbot/interface' => [[['_route' => 'chatbot_interface', '_controller' => 'App\\Controller\\ChatbotController::interfaceChatbot'], null, null, null, false, false, null]],
        '/entretient_chambre' => [[['_route' => 'app_entretient_chambre', '_controller' => 'App\\Controller\\EntretientChambreController::index'], null, null, null, false, false, null]],
        '/entretient_chambrefront' => [[['_route' => 'app_entretient_chambrefront', '_controller' => 'App\\Controller\\EntretientChambreController::indexfront'], null, null, null, false, false, null]],
        '/entretient_chambre/nouveau' => [[['_route' => 'entretient_chambre.new', '_controller' => 'App\\Controller\\EntretientChambreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/entretient_chambrefront/nouveau' => [[['_route' => 'entretient_chambrefront.new', '_controller' => 'App\\Controller\\EntretientChambreController::newfront'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/export/statistiques/csv' => [[['_route' => 'export_statistiques_csv', '_controller' => 'App\\Controller\\ExportController::exportStatistiquesCsv'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_landing_page', '_controller' => 'App\\Controller\\LandingPageController::index'], null, null, null, false, false, null]],
        '/lit' => [[['_route' => 'app_lit', '_controller' => 'App\\Controller\\LitController::index'], null, null, null, false, false, null]],
        '/lit/nouveau' => [[['_route' => 'lit.new', '_controller' => 'App\\Controller\\LitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/litfront/nouveau' => [[['_route' => 'lit.newfront', '_controller' => 'App\\Controller\\LitController::newfront'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front/lit' => [[['_route' => 'app_litfront', '_controller' => 'App\\Controller\\LitController::indexshow'], null, null, null, false, false, null]],
        '/patient/new' => [[['_route' => 'patient_new', '_controller' => 'App\\Controller\\PatientController::new'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\SecurityController::forgotPassword'], null, null, null, false, false, null]],
        '/utilisateur' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/utilisateur/new' => [[['_route' => 'app_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:35)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:73)'
                    .'|wdt/([^/]++)(*:92)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:133)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:170)'
                                .'|router(*:184)'
                                .'|exception(?'
                                    .'|(*:204)'
                                    .'|\\.css(*:217)'
                                .')'
                            .')'
                            .'|(*:227)'
                        .')'
                    .')'
                .')'
                .'|/chambre/(?'
                    .'|edition/([^/]++)(*:266)'
                    .'|suppression/([^/]++)(*:294)'
                    .'|([^/]++)/(?'
                        .'|entretient(?'
                            .'|s(?'
                                .'|(*:331)'
                                .'|front(*:344)'
                            .')'
                            .'|/new(*:357)'
                        .')'
                        .'|visualisation(*:379)'
                        .'|lits(?'
                            .'|(*:394)'
                            .'|front(*:407)'
                        .')'
                        .'|service(*:423)'
                    .')'
                    .'|tri/([^/]++)/([^/]++)(*:453)'
                .')'
                .'|/entretient_chambre(?'
                    .'|/(?'
                        .'|edition/([^/]++)(*:504)'
                        .'|suppression/([^/]++)(*:532)'
                    .')'
                    .'|front/(?'
                        .'|edition/([^/]++)(*:566)'
                        .'|suppression/([^/]++)(*:594)'
                    .')'
                .')'
                .'|/lit/(?'
                    .'|edition(?'
                        .'|/([^/]++)(*:631)'
                        .'|front/([^/]++)(*:653)'
                    .')'
                    .'|suppression(?'
                        .'|/([^/]++)(*:685)'
                        .'|front/([^/]++)(*:707)'
                    .')'
                    .'|([^/]++)/chambre(*:732)'
                    .'|affectation/([^/]++)(*:760)'
                    .'|desaffectation/([^/]++)(*:791)'
                .')'
                .'|/reset\\-password/([^/]++)(*:825)'
                .'|/utilisateur/(?'
                    .'|utilisateur/([^/]++)(*:869)'
                    .'|([^/]++)(?'
                        .'|/edit(*:893)'
                        .'|(*:901)'
                    .')'
                    .'|medecins(*:918)'
                    .'|responsables(*:938)'
                    .'|p(?'
                        .'|harmaciens(*:960)'
                        .'|atients(*:975)'
                    .')'
                    .'|femmeDeMenages(*:998)'
                    .'|infirmiers(*:1016)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        73 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        92 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        133 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        170 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        184 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        204 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        217 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        227 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        266 => [[['_route' => 'chambre.edit', '_controller' => 'App\\Controller\\ChambreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        294 => [[['_route' => 'chambre.supprimer', '_controller' => 'App\\Controller\\ChambreController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        331 => [[['_route' => 'chambre.entretients', '_controller' => 'App\\Controller\\ChambreController::showEntretients'], ['id'], null, null, false, false, null]],
        344 => [[['_route' => 'chambre.entretientsfront', '_controller' => 'App\\Controller\\ChambreController::showEntretientsfront'], ['id'], null, null, false, false, null]],
        357 => [[['_route' => 'chambre.entretient.new', '_controller' => 'App\\Controller\\ChambreController::addEntretient'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        379 => [[['_route' => 'chambre.visualisation', '_controller' => 'App\\Controller\\ChambreController::visualisation'], ['id'], null, null, false, false, null]],
        394 => [[['_route' => 'chambre.lits', '_controller' => 'App\\Controller\\ChambreController::showLits'], ['id'], null, null, false, false, null]],
        407 => [[['_route' => 'chambre.litsfront', '_controller' => 'App\\Controller\\ChambreController::showLitsfront'], ['id'], null, null, false, false, null]],
        423 => [[['_route' => 'chambre.service', '_controller' => 'App\\Controller\\ChambreController::showChambre'], ['id'], ['GET' => 0], null, false, false, null]],
        453 => [[['_route' => 'chambre.tri', '_controller' => 'App\\Controller\\ChambreController::listChambres'], ['sortBy', 'order'], ['GET' => 0], null, false, true, null]],
        504 => [[['_route' => 'entretient_chambre.edit', '_controller' => 'App\\Controller\\EntretientChambreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        532 => [[['_route' => 'entretient_chambre.delete', '_controller' => 'App\\Controller\\EntretientChambreController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        566 => [[['_route' => 'entretient_chambrefront.edit', '_controller' => 'App\\Controller\\EntretientChambreController::editfront'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        594 => [[['_route' => 'entretient_chambrefront.delete', '_controller' => 'App\\Controller\\EntretientChambreController::deletefront'], ['id'], ['GET' => 0], null, false, true, null]],
        631 => [[['_route' => 'lit.edit', '_controller' => 'App\\Controller\\LitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        653 => [[['_route' => 'lit.editfront', '_controller' => 'App\\Controller\\LitController::editfront'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        685 => [[['_route' => 'lit.delete', '_controller' => 'App\\Controller\\LitController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        707 => [[['_route' => 'lit.deletefront', '_controller' => 'App\\Controller\\LitController::deletefront'], ['id'], ['GET' => 0], null, false, true, null]],
        732 => [[['_route' => 'lit.chambre', '_controller' => 'App\\Controller\\LitController::showChambre'], ['id'], ['GET' => 0], null, false, false, null]],
        760 => [[['_route' => 'lit.affecter', '_controller' => 'App\\Controller\\LitController::affecterLit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        791 => [[['_route' => 'lit.desaffecter', '_controller' => 'App\\Controller\\LitController::desaffecterPatient'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        825 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
        869 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], null, null, false, true, null]],
        893 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        901 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        918 => [[['_route' => 'app_medecin_list', '_controller' => 'App\\Controller\\UtilisateurController::medecinList'], [], null, null, false, false, null]],
        938 => [[['_route' => 'app_responsable_list', '_controller' => 'App\\Controller\\UtilisateurController::responsableList'], [], null, null, false, false, null]],
        960 => [[['_route' => 'app_pharmacien_list', '_controller' => 'App\\Controller\\UtilisateurController::pharmacienList'], [], null, null, false, false, null]],
        975 => [[['_route' => 'app_patient_list', '_controller' => 'App\\Controller\\UtilisateurController::patientsList'], [], null, null, false, false, null]],
        998 => [[['_route' => 'app_femmeDeMenage_list', '_controller' => 'App\\Controller\\UtilisateurController::femmeDeMenagesList'], [], null, null, false, false, null]],
        1016 => [
            [['_route' => 'app_infirmier_list', '_controller' => 'App\\Controller\\UtilisateurController::infirmiersList'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
