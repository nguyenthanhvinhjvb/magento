<?php

namespace Magetop\Helloworld\Observer;

use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class CustomEventObserver implements ObserverInterface
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $message = $observer->getData('message');

        // Log the message to debug log
        $this->logger->debug($message);
    }
}
