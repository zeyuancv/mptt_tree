<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5288bfcdb700adfaf6cfba75ce755a22
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mycherry\\Tree\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mycherry\\Tree\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5288bfcdb700adfaf6cfba75ce755a22::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5288bfcdb700adfaf6cfba75ce755a22::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5288bfcdb700adfaf6cfba75ce755a22::$classMap;

        }, null, ClassLoader::class);
    }
}
