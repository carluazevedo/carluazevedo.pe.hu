<?php

defined('_SCHECK') or die('Acesso negado.');

define('BASE_PATH', __DIR__ . '/a');
define('CLASSES', BASE_PATH . '/classes');
define('CONFIG', BASE_PATH . '/config');
define('LIB', BASE_PATH . '/libraries');
define('STYLES', BASE_PATH . '/styles');
define('TEMPLATES', BASE_PATH . '/templates');

class Config {
    public static $sitename = 'WebSIS';
    # ATENÇÃO! Utilizar 'trailing slash'
    # TODO: Criar função para determinar diterório base
    public static $basedir  = '/carluazevedo.pe.hu/';
}