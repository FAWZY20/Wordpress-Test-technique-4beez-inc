<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a4a273116fd1db20c339433e60dee63
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TijsVerkoyen\\CssToInlineStyles\\' => 31,
            'Thunder\\Shortcode\\' => 18,
            'Tamtamchik\\NameCase\\' => 20,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Contracts\\Translation\\' => 30,
            'Symfony\\Component\\Yaml\\' => 23,
            'Symfony\\Component\\Translation\\' => 30,
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\CssSelector\\' => 30,
            'Symfony\\Component\\Config\\' => 25,
        ),
        'P' => 
        array (
            'PredictHQ\\AddressFormatter\\' => 27,
        ),
        'C' => 
        array (
            'Coduo\\PHPHumanizer\\Tests\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TijsVerkoyen\\CssToInlineStyles\\' => 
        array (
            0 => __DIR__ . '/..' . '/tijsverkoyen/css-to-inline-styles/src',
        ),
        'Thunder\\Shortcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/thunderer/shortcode/src',
        ),
        'Tamtamchik\\NameCase\\' => 
        array (
            0 => __DIR__ . '/..' . '/tamtamchik/namecase/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Contracts\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation-contracts',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\CssSelector\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/css-selector',
        ),
        'Symfony\\Component\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/config',
        ),
        'PredictHQ\\AddressFormatter\\' => 
        array (
            0 => __DIR__ . '/..' . '/predicthq/address-formatter/src',
        ),
        'Coduo\\PHPHumanizer\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/coduo/php-humanizer/tests',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/coduo/php-humanizer/src',
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mustache' => 
            array (
                0 => __DIR__ . '/..' . '/mustache/mustache/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0a4a273116fd1db20c339433e60dee63::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0a4a273116fd1db20c339433e60dee63::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit0a4a273116fd1db20c339433e60dee63::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0a4a273116fd1db20c339433e60dee63::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
