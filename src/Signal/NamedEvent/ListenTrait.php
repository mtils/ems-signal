<?php namespace Signal\NamedEvent;

use Signal\Contracts\NamedEvent\Distributor;

trait ListenTrait
{

    /**
     * @var \Signal\NamedEvent\Distributor
     **/
    protected $_distributor;

    /**
     * Listen to event(s) $event
     *
     * @param mixed $events (string|array)
     * @param callable $listener
     * @param int $priority
     * @return void
     **/
    public function listen($events, $listener, $priority=0)
    {
        return $this->getDistributor()->listen($events, $listener, $priority);
    }

    /**
     * Return the event distributor
     *
     * @return \Signal\NamedEvent\Distributor
     **/
    public function getDistributor()
    {
        if(!$this->_distributor){
            $this->_distributor = new Bus();
        }
        return $this->_distributor;
    }

    /**
     * Set the event distributor
     *
     * @param \Signal\NamedEvent\Distributor $distributor
     * @return self
     **/
    public function setDistributor(Distributor $distributor)
    {
        $this->_distributor = $distributor;
        return $this;
    }

}