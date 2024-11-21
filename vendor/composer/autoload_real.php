<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcca0b229af4be7bdb2e9e828421583ec
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitcca0b229af4be7bdb2e9e828421583ec', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcca0b229af4be7bdb2e9e828421583ec', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcca0b229af4be7bdb2e9e828421583ec::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}