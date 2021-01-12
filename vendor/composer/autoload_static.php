<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8191c1f1b42aac8ed6db0d50c7b331f0
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sparav\\Notification\\' => 20,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sparav\\Notification\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8191c1f1b42aac8ed6db0d50c7b331f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8191c1f1b42aac8ed6db0d50c7b331f0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8191c1f1b42aac8ed6db0d50c7b331f0::$classMap;

        }, null, ClassLoader::class);
    }
}
