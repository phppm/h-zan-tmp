<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit628c149a061894a96ddd6a18f63cac89
{
    public static $files = array (
        '93bb91f2fa2c6d4b132f9d06ab9c4880' => __DIR__ . '/..' . '/zanphp/support/src/helpers.php',
        '3078a8a9ce8fda4cc17ee1f1728bea8f' => __DIR__ . '/..' . '/zanphp/container/src/helpers.php',
        '6052a99862aa9b90bacba184acbad87a' => __DIR__ . '/..' . '/zanphp/coroutine/src/Command/Task.php',
        'bdbd6131aec3ea69165df48f2d79d10b' => __DIR__ . '/..' . '/zanphp/rpc-context/src/functions.php',
        '200140090f15c4b3e7bb9a299d8aa9f2' => __DIR__ . '/..' . '/zanphp/http-foundation/src/Command/Task.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '090c0990064eb4e640dd296e5c42c62b' => __DIR__ . '/..' . '/zanphp/nova-codec/src/polyfill.php',
        '8307870d9df08f453d953936669bd706' => __DIR__ . '/..' . '/zanphp/framework/src/Foundation/Application.php',
        '6730773b2ace27b1a44d92f1e45e6f4a' => __DIR__ . '/..' . '/zanphp/framework/src/Contract/Foundation/Bootable.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZanPHP\\WorkerMonitor\\' => 21,
            'ZanPHP\\WSServer\\' => 16,
            'ZanPHP\\Validation\\' => 18,
            'ZanPHP\\Utilities\\' => 17,
            'ZanPHP\\Trace\\' => 13,
            'ZanPHP\\Timer\\' => 13,
            'ZanPHP\\ThriftSerialization\\' => 27,
            'ZanPHP\\Testing\\' => 15,
            'ZanPHP\\TcpServer\\' => 17,
            'ZanPHP\\Support\\' => 15,
            'ZanPHP\\ServiceStore\\' => 20,
            'ZanPHP\\ServiceChain\\' => 20,
            'ZanPHP\\ServerBase\\' => 18,
            'ZanPHP\\SPI\\' => 11,
            'ZanPHP\\RpcContext\\' => 18,
            'ZanPHP\\Routing\\' => 15,
            'ZanPHP\\Nova\\Tests\\' => 18,
            'ZanPHP\\Nova\\' => 12,
            'ZanPHP\\NovaGeneric\\' => 19,
            'ZanPHP\\NovaFoundation\\' => 22,
            'ZanPHP\\NovaConnectionPool\\' => 26,
            'ZanPHP\\NovaCodec\\' => 17,
            'ZanPHP\\NovaClient\\' => 18,
            'ZanPHP\\NoSql\\' => 13,
            'ZanPHP\\MqServer\\' => 16,
            'ZanPHP\\Log\\' => 11,
            'ZanPHP\\LoadBalance\\' => 19,
            'ZanPHP\\HttpView\\' => 16,
            'ZanPHP\\HttpServer\\' => 18,
            'ZanPHP\\HttpFoundation\\' => 22,
            'ZanPHP\\HttpClient\\' => 18,
            'ZanPHP\\Hawk\\' => 12,
            'ZanPHP\\Framework\\' => 17,
            'ZanPHP\\Exception\\' => 17,
            'ZanPHP\\EtcdRegistry\\' => 20,
            'ZanPHP\\EtcdClient\\' => 18,
            'ZanPHP\\DnsClient\\' => 17,
            'ZanPHP\\Debugger\\' => 16,
            'ZanPHP\\Database\\' => 16,
            'ZanPHP\\Coroutine\\' => 17,
            'ZanPHP\\Contracts\\' => 17,
            'ZanPHP\\Container\\' => 17,
            'ZanPHP\\Console\\' => 15,
            'ZanPHP\\ConnectionPool\\' => 22,
            'ZanPHP\\Config\\' => 14,
            'ZanPHP\\Cache\\' => 13,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'C' => 
        array (
            'Com\\Youzan\\ZanTcpDemo\\Init\\' => 27,
            'Com\\Youzan\\ZanTcpDemo\\' => 22,
            'Com\\Youzan\\Nova\\Framework\\Generic\\' => 34,
            'Com\\Yourcompany\\Demo\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZanPHP\\WorkerMonitor\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/worker-monitor/src',
        ),
        'ZanPHP\\WSServer\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/ws-server/src',
        ),
        'ZanPHP\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/validation/src',
        ),
        'ZanPHP\\Utilities\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/utilities/src',
        ),
        'ZanPHP\\Trace\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/trace/src',
        ),
        'ZanPHP\\Timer\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/timer/src',
        ),
        'ZanPHP\\ThriftSerialization\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/thrift-serialization/src',
        ),
        'ZanPHP\\Testing\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/testing/src',
        ),
        'ZanPHP\\TcpServer\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/tcp-server/src',
        ),
        'ZanPHP\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/support/src',
        ),
        'ZanPHP\\ServiceStore\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/service-store/src',
        ),
        'ZanPHP\\ServiceChain\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/service-chain/src',
        ),
        'ZanPHP\\ServerBase\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/server-base/src',
        ),
        'ZanPHP\\SPI\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/spi/src',
        ),
        'ZanPHP\\RpcContext\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/rpc-context/src',
        ),
        'ZanPHP\\Routing\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/routing/src',
        ),
        'ZanPHP\\Nova\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/nova/tests',
        ),
        'ZanPHP\\Nova\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/nova/src',
        ),
        'ZanPHP\\NovaGeneric\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/nova-generic/src',
        ),
        'ZanPHP\\NovaFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/nova-foundation/src',
        ),
        'ZanPHP\\NovaConnectionPool\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/nova-connection-pool/src',
        ),
        'ZanPHP\\NovaCodec\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/nova-codec/src',
        ),
        'ZanPHP\\NovaClient\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/nova-client/src',
        ),
        'ZanPHP\\NoSql\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/nosql/src',
        ),
        'ZanPHP\\MqServer\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/mq-server/src',
        ),
        'ZanPHP\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/log/src',
        ),
        'ZanPHP\\LoadBalance\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/loadbalance/src',
        ),
        'ZanPHP\\HttpView\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/http-view/src',
        ),
        'ZanPHP\\HttpServer\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/http-server/src',
        ),
        'ZanPHP\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/http-foundation/src',
        ),
        'ZanPHP\\HttpClient\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/http-client/src',
        ),
        'ZanPHP\\Hawk\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/hawk/src',
        ),
        'ZanPHP\\Framework\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/framework/src',
        ),
        'ZanPHP\\Exception\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/exception/src',
        ),
        'ZanPHP\\EtcdRegistry\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/etcd-registry/src',
        ),
        'ZanPHP\\EtcdClient\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/etcd-client/src',
        ),
        'ZanPHP\\DnsClient\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/dns-client/src',
        ),
        'ZanPHP\\Debugger\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/debugger/src',
        ),
        'ZanPHP\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/database/src',
        ),
        'ZanPHP\\Coroutine\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/coroutine/src',
        ),
        'ZanPHP\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/contracts/src',
        ),
        'ZanPHP\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/container/src',
        ),
        'ZanPHP\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/console/src',
        ),
        'ZanPHP\\ConnectionPool\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/connection-pool/src',
        ),
        'ZanPHP\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/config/src',
        ),
        'ZanPHP\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/zanphp/cache/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Com\\Youzan\\ZanTcpDemo\\Init\\' => 
        array (
            0 => __DIR__ . '/../..' . '/init',
        ),
        'Com\\Youzan\\ZanTcpDemo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Com\\Youzan\\Nova\\Framework\\Generic\\' => 
        array (
            0 => __DIR__ . '/..' . '/nova-service/generic/sdk/gen-php/Framework/Generic',
        ),
        'Com\\Yourcompany\\Demo\\' => 
        array (
            0 => __DIR__ . '/..' . '/nova-service/nova-demo/sdk/gen-php',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Thrift\\' => 
            array (
                0 => __DIR__ . '/..' . '/packaged/thrift/src',
            ),
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 
            array (
                0 => __DIR__ . '/..' . '/psr/log',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit628c149a061894a96ddd6a18f63cac89::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit628c149a061894a96ddd6a18f63cac89::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit628c149a061894a96ddd6a18f63cac89::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
