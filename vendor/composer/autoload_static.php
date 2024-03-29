<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit29c77b68f2c84476f23ba422fb8a1cf8
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'traits\\' => 7,
        ),
        'i' => 
        array (
            'interfaces\\' => 11,
        ),
        'E' => 
        array (
            'Exercise\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'traits\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Maharah/Traits',
        ),
        'interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Maharah/interfaces',
        ),
        'Exercise\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Maharah/Classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit29c77b68f2c84476f23ba422fb8a1cf8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit29c77b68f2c84476f23ba422fb8a1cf8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit29c77b68f2c84476f23ba422fb8a1cf8::$classMap;

        }, null, ClassLoader::class);
    }
}
