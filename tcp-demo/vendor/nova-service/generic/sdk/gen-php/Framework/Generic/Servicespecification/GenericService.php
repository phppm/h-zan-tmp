<?php
/**
 * Autogenerated by Thrift Compiler (0.9.2)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 * THIS IS MODIFIED FOR YOUZAN, ANY PROBLEM PLS CONTACT lanhu(zhangyuanhao@qima-inc.com)
 * qingjiao(qingjiao@qima-inc.com) & xiao'er(shiyu@qima-inc.com)
 * @generated
 */

namespace Com\Youzan\Nova\Framework\Generic\Servicespecification;

use Kdt\Iron\Nova\Foundation\TSpecification;
use Thrift\Type\TType;


class GenericService extends TSpecification {

  protected $serviceName = 'Com.Youzan.Nova.Framework.Generic.Service.GenericService';

  protected $inputStructSpec = [
    'invoke' => [
      1 => [
        'var' => 'request',
        'type' => TType::STRUCT,
        'class' => '\Com\Youzan\Nova\Framework\Generic\Service\GenericRequest',
        ],
    ],
  ];
  protected $outputStructSpec = [

    'invoke' => [
      'type' => TType::STRING,
    ],
  ];
  protected $exceptionStructSpec = [

  ];
}

