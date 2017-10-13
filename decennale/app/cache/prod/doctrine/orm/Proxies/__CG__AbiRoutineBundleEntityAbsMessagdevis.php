<?php

namespace Proxies\__CG__\Abi\RoutineBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AbsMessagdevis extends \Abi\RoutineBundle\Entity\AbsMessagdevis implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsMessagdevis' . "\0" . 'devisId', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsMessagdevis' . "\0" . 'devisRefclient', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsMessagdevis' . "\0" . 'devisRefdevis', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsMessagdevis' . "\0" . 'devisTypecontrat', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsMessagdevis' . "\0" . 'devisEcheance', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsMessagdevis' . "\0" . 'devisEtat', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsMessagdevis' . "\0" . 'devisDate');
        }

        return array('__isInitialized__', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsMessagdevis' . "\0" . 'devisId', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsMessagdevis' . "\0" . 'devisRefclient', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsMessagdevis' . "\0" . 'devisRefdevis', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsMessagdevis' . "\0" . 'devisTypecontrat', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsMessagdevis' . "\0" . 'devisEcheance', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsMessagdevis' . "\0" . 'devisEtat', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsMessagdevis' . "\0" . 'devisDate');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (AbsMessagdevis $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getDevisId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getDevisId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDevisId', array());

        return parent::getDevisId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDevisRefclient($devisRefclient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDevisRefclient', array($devisRefclient));

        return parent::setDevisRefclient($devisRefclient);
    }

    /**
     * {@inheritDoc}
     */
    public function getDevisRefclient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDevisRefclient', array());

        return parent::getDevisRefclient();
    }

    /**
     * {@inheritDoc}
     */
    public function setDevisRefdevis($devisRefdevis)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDevisRefdevis', array($devisRefdevis));

        return parent::setDevisRefdevis($devisRefdevis);
    }

    /**
     * {@inheritDoc}
     */
    public function getDevisRefdevis()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDevisRefdevis', array());

        return parent::getDevisRefdevis();
    }

    /**
     * {@inheritDoc}
     */
    public function setDevisTypecontrat($devisTypecontrat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDevisTypecontrat', array($devisTypecontrat));

        return parent::setDevisTypecontrat($devisTypecontrat);
    }

    /**
     * {@inheritDoc}
     */
    public function getDevisTypecontrat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDevisTypecontrat', array());

        return parent::getDevisTypecontrat();
    }

    /**
     * {@inheritDoc}
     */
    public function setDevisEcheance($devisEcheance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDevisEcheance', array($devisEcheance));

        return parent::setDevisEcheance($devisEcheance);
    }

    /**
     * {@inheritDoc}
     */
    public function getDevisEcheance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDevisEcheance', array());

        return parent::getDevisEcheance();
    }

    /**
     * {@inheritDoc}
     */
    public function setDevisEtat($devisEtat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDevisEtat', array($devisEtat));

        return parent::setDevisEtat($devisEtat);
    }

    /**
     * {@inheritDoc}
     */
    public function getDevisEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDevisEtat', array());

        return parent::getDevisEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setDevisDate($devisDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDevisDate', array($devisDate));

        return parent::setDevisDate($devisDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getDevisDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDevisDate', array());

        return parent::getDevisDate();
    }

}