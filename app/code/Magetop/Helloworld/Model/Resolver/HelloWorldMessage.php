<?php

namespace Magetop\Helloworld\Model\Resolver;

use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\Event\ManagerInterface;
use Psr\Log\LoggerInterface;

class HelloWorldMessage implements ResolverInterface
{
    /**
     * @var ManagerInterface
     */
    protected $_eventManager;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * Constructor
     *
     * @param ManagerInterface $eventManager
     * @param LoggerInterface $logger
     */
    public function __construct(ManagerInterface $eventManager, LoggerInterface $logger)
    {
        $this->_eventManager = $eventManager;
        $this->logger = $logger;
    }

    public function resolve(Field $field, $context, ResolveInfo $info, array $value = null, array $args = null)
    {
        $this->_eventManager->dispatch('custom_event_name', ['message' => 'Test-message.']);
        return "Test-message.";
    }
}
