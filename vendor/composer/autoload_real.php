<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit29c77b68f2c84476f23ba422fb8a1cf8
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

        spl_autoload_register(array('ComposerAutoloaderInit29c77b68f2c84476f23ba422fb8a1cf8', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit29c77b68f2c84476f23ba422fb8a1cf8', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit29c77b68f2c84476f23ba422fb8a1cf8::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}