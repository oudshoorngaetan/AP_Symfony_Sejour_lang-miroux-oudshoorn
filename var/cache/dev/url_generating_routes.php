<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_affichage_sejour' => [[], ['_controller' => 'App\\Controller\\AffichageSejourController::index'], [], [['text', '/sejour/sejours']], [], [], []],
    'app_sejour_du_jour' => [[], ['_controller' => 'App\\Controller\\AffichageSejourController::sejoursDuJour'], [], [['text', '/sejour/sejoursDuJour']], [], [], []],
    'app_sejour_date' => [['date'], ['_controller' => 'App\\Controller\\AffichageSejourController::sejoursDate'], [], [['variable', '/', '[^/]++', 'date', true], ['text', '/sejour/sejours']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\LoginController::logout'], [], [['text', '/logout']], [], [], []],
    'patients' => [[], ['_controller' => 'App\\Controller\\PatientController::getPatients'], [], [['text', '/patients']], [], [], []],
    'ajout_patient' => [[], ['_controller' => 'App\\Controller\\PatientController::ajoutPatient'], [], [['text', '/ajout_patient']], [], [], []],
    'patient' => [['id'], ['_controller' => 'App\\Controller\\PatientController::getUnPatient'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/patient']], [], [], []],
    'creer_sejour' => [['id'], ['_controller' => 'App\\Controller\\PatientController::creerSejour'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/creer_sejour']], [], [], []],
    'app_principal' => [[], ['_controller' => 'App\\Controller\\PrincipalController::index'], [], [['text', '/principal']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_ajoutSejour' => [[], ['_controller' => 'App\\Controller\\SejourController::createClub'], [], [['text', '/createSejour']], [], [], []],
    'app_modifSejourId' => [['id'], ['_controller' => 'App\\Controller\\SejourController::modifd'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/modifSejour']], [], [], []],
    'unsejour' => [['id'], ['_controller' => 'App\\Controller\\SejourController::sejourId'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/unsejour']], [], [], []],
    'etatsejour' => [['id'], ['_controller' => 'App\\Controller\\SejourController::etatSejour'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ajoutEtat']], [], [], []],
    'ajoutEtatSortie' => [[], ['_controller' => 'App\\Controller\\SejourController::SejourActuel'], [], [['text', '/sejour/sejourActuel']], [], [], []],
    'app_menuSejour' => [[], ['_controller' => 'App\\Controller\\SejourController::menuSejour'], [], [['text', '/sejour/menuSejour']], [], [], []],
];
