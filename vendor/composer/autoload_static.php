<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit44f950d1a04a14c18f339bfaec3f2d5c
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OCFram\\' => 7,
        ),
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'F' => 
        array (
            'FormBuilder\\' => 12,
        ),
        'E' => 
        array (
            'Entity\\' => 7,
        ),
        'A' => 
        array (
            'App\\Frontend\\' => 13,
            'App\\Backend\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OCFram\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/OCFram',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/vendors/Model',
        ),
        'FormBuilder\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/vendors/FormBuilder',
        ),
        'Entity\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/vendors/Entity',
        ),
        'App\\Frontend\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Frontend',
        ),
        'App\\Backend\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Backend',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit44f950d1a04a14c18f339bfaec3f2d5c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit44f950d1a04a14c18f339bfaec3f2d5c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
