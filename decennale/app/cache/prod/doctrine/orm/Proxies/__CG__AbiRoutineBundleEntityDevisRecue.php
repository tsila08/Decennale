<?php

namespace Proxies\__CG__\Abi\RoutineBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class DevisRecue extends \Abi\RoutineBundle\Entity\DevisRecue implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisRecue' . "\0" . 'dvrId', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisRecue' . "\0" . 'dvrRefclient', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisRecue' . "\0" . 'dvrRefdevis', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisRecue' . "\0" . 'dvrEtat', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisRecue' . "\0" . 'dvrDate');
        }

        return array('__isInitialized__', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisRecue' . "\0" . 'dvrId', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisRecue' . "\0" . 'dvrRefclient', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisRecue' . "\0" . 'dvrRefdevis', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisRecue' . "\0" . 'dvrEtat', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisRecue' . "\0" . 'dvrDate');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (DevisRecue $proxy) {
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
    public function getDvrId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getDvrId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDvrId', array());

        return parent::getDvrId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDvrRefclient($dvrRefclient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDvrRefclient', array($dvrRefclient));

        return parent::setDvrRefclient($dvrRefclient);
    }

    /**
     * {@inheritDoc}
     */
    public function getDvrRefclient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDvrRefclient', array());

        return parent::getDvrRefclient();
    }

    /**
     * {@inheritDoc}
     */
    public function setDvrRefdevis($dvrRefdevis)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDvrRefdevis', array($dvrRefdevis));

        return parent::setDvrRefdevis($dvrRefdevis);
    }

    /**
     * {@inheritDoc}
     */
    public function getDvrRefdevis()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDvrRefdevis', array());

        return parent::getDvrRefdevis();
    }

    /**
     * {@inheritDoc}
     */
    public function setDvrEtat($dvrEtat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDvrEtat', array($dvrEtat));

        return parent::setDvrEtat($dvrEtat);
    }

    /**
     * {@inheritDoc}
     */
    public function getDvrEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDvrEtat', array());

        return parent::getDvrEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setDvrDate($dvrDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDvrDate', array($dvrDate));

        return parent::setDvrDate($dvrDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getDvrDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDvrDate', array());

        return parent::getDvrDate();
    }

}
