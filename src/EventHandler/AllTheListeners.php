<?php
namespace Plugin\ExamplePlugin\EventHandler;

use App\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AllTheListeners implements EventSubscriberInterface
{
    /**
     * Returns an array of event names this subscriber wants to listen to.
     *
     * The array keys are event names and the value can be:
     *
     *  * The method name to call (priority defaults to 0)
     *  * An array composed of the method name to call and the priority
     *  * An array of arrays composed of the method names to call and respective
     *    priorities, or 0 if unset
     *
     * For instance:
     *
     *  * array('eventName' => 'methodName')
     *  * array('eventName' => array('methodName', $priority))
     *  * array('eventName' => array(array('methodName1', $priority), array('methodName2')))
     *
     * @return array The event names to listen to
     */
    public static function getSubscribedEvents()
    {
        return [
            Event\Radio\WriteLiquidsoapConfiguration::NAME => [
                ['configureStreamRecording', -20]
            ],
        ];
    }

    public function configureStreamRecording(Event\Radio\WriteLiquidsoapConfiguration $event)
    {
        $lines[] = '';
        $lines[] = '# Test Line';
        $event->appendLines( $lines );
    }
}