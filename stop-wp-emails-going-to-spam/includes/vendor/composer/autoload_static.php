<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc5767ecd02f2b066d3b55eefdbbd7d59
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fullworks_WP_Autoloader\\' => 24,
        ),
        'A' => 
        array (
            'AlanEFPluginDonation\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fullworks_WP_Autoloader\\' => 
        array (
            0 => __DIR__ . '/..' . '/alanef/wp_autoloader/src',
        ),
        'AlanEFPluginDonation\\' => 
        array (
            0 => __DIR__ . '/..' . '/alanef/plugindonation_lib',
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc5767ecd02f2b066d3b55eefdbbd7d59::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc5767ecd02f2b066d3b55eefdbbd7d59::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc5767ecd02f2b066d3b55eefdbbd7d59::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc5767ecd02f2b066d3b55eefdbbd7d59::$classMap;

        }, null, ClassLoader::class);
    }
}
