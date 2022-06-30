<?php

namespace core\base\settings;

class Settings
{
    static private $_instance;

    private array $routes = [
        'admin' => [
            'name' => 'admin',
            'path' => 'core/admin/controllers/',
            'hrUrl' => false,
        ],

        'settings' => [
            'path' => 'core/base/settings/'
        ],

        'plugins' => [
            'path' => 'core/plugins/',
            'hrUrl' => false,
        ],

        'user' => [
            'path' => 'core/user/controllers/',
            'hrUrl' => true,
            'routes' => []
        ],

        'default' => [
            'controller' => 'IndexController',
            'inputMethod' => 'inputData',
            'outputMethod' => 'outputData',
        ],
    ];

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    static public function get($property){
        return self::instance()->$property;
    }

    static public function instance(): Settings
    {
        if (self::$_instance instanceof self) {
            return self::$_instance;
        }

        return self::$_instance = new self();
    }
}