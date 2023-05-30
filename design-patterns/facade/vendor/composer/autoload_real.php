<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit1a4082704d6ae0b5469a5ca31d0b80e3
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

        spl_autoload_register(array('ComposerAutoloaderInit1a4082704d6ae0b5469a5ca31d0b80e3', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit1a4082704d6ae0b5469a5ca31d0b80e3', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit1a4082704d6ae0b5469a5ca31d0b80e3::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
