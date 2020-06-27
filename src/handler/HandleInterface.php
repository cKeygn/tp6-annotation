<?php
/** Created by 嗝嗝<china_wangyu@aliyun.com>. Date: 2019-11-14  */

namespace keygn\tp6\annotation\handler;


use Doctrine\Common\Annotations\Annotation;

interface HandleInterface
{
    public function cls(\ReflectionClass $refClass,Annotation $annotation,\think\Route &$route);

    public function func(\ReflectionMethod $refMethod,Annotation $annotation,\think\route\RuleItem &$rule);
}