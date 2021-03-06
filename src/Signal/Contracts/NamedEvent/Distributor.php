<?php namespace Signal\Contracts\NamedEvent;

/**
 * If you want to listen to events, subscribe them at the Distributor
 **/
interface Distributor
{

    /**
     * Listen to event(s) $event
     *
     * @param mixed $events (string|array)
     * @param callable $listener
     * @param int $priority
     * @return void
     **/
    public function listen($events, $listener, $priority=0);

}