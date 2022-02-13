<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf6f581a9c4fb32b88e40b2beac5e672
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf6f581a9c4fb32b88e40b2beac5e672::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf6f581a9c4fb32b88e40b2beac5e672::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaf6f581a9c4fb32b88e40b2beac5e672::$classMap;

        }, null, ClassLoader::class);
    }
}