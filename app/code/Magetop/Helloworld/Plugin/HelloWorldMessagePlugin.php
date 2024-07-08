<?php

namespace Magetop\Helloworld\Plugin;

class HelloWorldMessagePlugin
{
    public function beforeGetHelloWorldMessage($subject)
    {
    }

    public function afterGetHelloWorldMessage($subject, $result)
    {
        return $result;
    }
}
