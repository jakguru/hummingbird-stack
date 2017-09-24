<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit809074213230fbb3a47eff1daaac2168
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'G' => 
        array (
            'Giggsey\\Locale\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Giggsey\\Locale\\' => 
        array (
            0 => __DIR__ . '/..' . '/giggsey/locale/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'l' => 
        array (
            'libphonenumber' => 
            array (
                0 => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src',
            ),
        ),
    );

    public static $classMap = array (
        'PasswordHash' => __DIR__ . '/..' . '/openwall/phpass/PasswordHash.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit809074213230fbb3a47eff1daaac2168::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit809074213230fbb3a47eff1daaac2168::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit809074213230fbb3a47eff1daaac2168::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit809074213230fbb3a47eff1daaac2168::$classMap;

        }, null, ClassLoader::class);
    }
}