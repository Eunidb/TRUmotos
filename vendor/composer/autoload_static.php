<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3c9bd2370b0186c2957c8451b005560b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3c9bd2370b0186c2957c8451b005560b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3c9bd2370b0186c2957c8451b005560b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3c9bd2370b0186c2957c8451b005560b::$classMap;

        }, null, ClassLoader::class);
    }
}