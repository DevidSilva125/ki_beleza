<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a4341b36dfe4ea9cb2c694dd8c755b4
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a4341b36dfe4ea9cb2c694dd8c755b4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a4341b36dfe4ea9cb2c694dd8c755b4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7a4341b36dfe4ea9cb2c694dd8c755b4::$classMap;

        }, null, ClassLoader::class);
    }
}
