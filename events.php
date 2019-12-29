<?php
use Azura\Event;

return function (\Azura\EventDispatcher $dispatcher)
{
    // You can also add classes that implement the EventSubscriberInterface
    $dispatcher->addSubscriber(new \Plugin\ExamplePlugin\EventHandler\AllTheListeners);
};