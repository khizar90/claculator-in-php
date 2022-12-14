<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit60c1d59820bad0ee90526cc8b2372ea6
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit60c1d59820bad0ee90526cc8b2372ea6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit60c1d59820bad0ee90526cc8b2372ea6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit60c1d59820bad0ee90526cc8b2372ea6::$classMap;

        }, null, ClassLoader::class);
    }
}
