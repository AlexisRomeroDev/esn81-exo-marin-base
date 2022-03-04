<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit655a11abe3ef96b0a3374d3ccf388bfa
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit655a11abe3ef96b0a3374d3ccf388bfa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit655a11abe3ef96b0a3374d3ccf388bfa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit655a11abe3ef96b0a3374d3ccf388bfa::$classMap;

        }, null, ClassLoader::class);
    }
}
