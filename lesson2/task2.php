<?php
// 2. *Реализовать паттерн Singleton при помощи traits.

trait Singleton
{
    final private function __construct() {}
    final protected function __clone() {}
    final protected function __wakeup() {}

    static public function getInstance() : object
    {
        static $instance = null;
        if (!$instance) {
            $instance = new self;
        }
        return $instance;
    }

}

class TestSingleton {
    use Singleton;

    private static array $settings = [];

    public function setSettings(array $settings) : void
    {
        self::$settings = $settings;
    }

    public function getSettings() : string
    {
        return implode(', ', self::$settings);
    }
}

$settings = [
    'key_1' => 'Value 1',
    'key_2' => 'Value 2',
    'key_3' => 'Value 3',
    'key_4' => 'Value 4',
    'key_5' => 'Value 5',
];

$testSingleton = TestSingleton::getInstance();
$testSingleton->setSettings($settings);
var_dump($testSingleton->getSettings());