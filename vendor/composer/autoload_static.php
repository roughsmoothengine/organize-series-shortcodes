<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ace1d9af7bf69a524bf9c0773d0ff0a
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OrganizeSeries\\ShortcodesAddon\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OrganizeSeries\\ShortcodesAddon\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 
            array (
                0 => __DIR__ . '/..' . '/composer/installers/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ace1d9af7bf69a524bf9c0773d0ff0a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ace1d9af7bf69a524bf9c0773d0ff0a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit3ace1d9af7bf69a524bf9c0773d0ff0a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
