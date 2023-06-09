<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a4082704d6ae0b5469a5ca31d0b80e3
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a4082704d6ae0b5469a5ca31d0b80e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a4082704d6ae0b5469a5ca31d0b80e3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1a4082704d6ae0b5469a5ca31d0b80e3::$classMap;

        }, null, ClassLoader::class);
    }
}
