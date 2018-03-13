<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9bb4641cd9984747639a4552d1e064d9
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Ctk\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ctk\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Ctk\\CtkClient' => __DIR__ . '/../..' . '/src/CtkClient.php',
        'Ctk\\Request\\Request\\CardRequest' => __DIR__ . '/../..' . '/src/Request/CardRequest.php',
        'Ctk\\Request\\Request\\ExchangeRequest' => __DIR__ . '/../..' . '/src/Request/ExchangeRequest.php',
        'Ctk\\Request\\Request\\Request' => __DIR__ . '/../..' . '/src/Request/Request.php',
        'Ctk\\Request\\Request\\SymbolRequest' => __DIR__ . '/../..' . '/src/Request/SymbolRequest.php',
        'Ctk\\Request\\Request\\TransactionRequest' => __DIR__ . '/../..' . '/src/Request/TransactionRequest.php',
        'Ctk\\Request\\Request\\UserRequest' => __DIR__ . '/../..' . '/src/Request/UserRequest.php',
        'Ctk\\Request\\Request\\WalletRequest' => __DIR__ . '/../..' . '/src/Request/WalletRequest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9bb4641cd9984747639a4552d1e064d9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9bb4641cd9984747639a4552d1e064d9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9bb4641cd9984747639a4552d1e064d9::$classMap;

        }, null, ClassLoader::class);
    }
}