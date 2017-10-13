<?php

namespace Proxies\__CG__\Abi\RoutineBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class MdlNosServicesImg extends \Abi\RoutineBundle\Entity\MdlNosServicesImg implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\MdlNosServicesImg' . "\0" . 'nsergId', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\MdlNosServicesImg' . "\0" . 'nsergTitre', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\MdlNosServicesImg' . "\0" . 'nsergDescription', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\MdlNosServicesImg' . "\0" . 'nsergOrdre', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\MdlNosServicesImg' . "\0" . 'nsergImg', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\MdlNosServicesImg' . "\0" . 'nsergEtat');
        }

        return array('__isInitialized__', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\MdlNosServicesImg' . "\0" . 'nsergId', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\MdlNosServicesImg' . "\0" . 'nsergTitre', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\MdlNosServicesImg' . "\0" . 'nsergDescription', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\MdlNosServicesImg' . "\0" . 'nsergOrdre', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\MdlNosServicesImg' . "\0" . 'nsergImg', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\MdlNosServicesImg' . "\0" . 'nsergEtat');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (MdlNosServicesImg $proxy) {
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
    public function getNsergId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getNsergId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNsergId', array());

        return parent::getNsergId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNsergTitre($nsergTitre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNsergTitre', array($nsergTitre));

        return parent::setNsergTitre($nsergTitre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNsergTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNsergTitre', array());

        return parent::getNsergTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setNsergDescription($nsergDescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNsergDescription', array($nsergDescription));

        return parent::setNsergDescription($nsergDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getNsergDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNsergDescription', array());

        return parent::getNsergDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setNsergOrdre($nsergOrdre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNsergOrdre', array($nsergOrdre));

        return parent::setNsergOrdre($nsergOrdre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNsergOrdre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNsergOrdre', array());

        return parent::getNsergOrdre();
    }

    /**
     * {@inheritDoc}
     */
    public function setNsergImg($nsergImg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNsergImg', array($nsergImg));

        return parent::setNsergImg($nsergImg);
    }

    /**
     * {@inheritDoc}
     */
    public function getNsergImg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNsergImg', array());

        return parent::getNsergImg();
    }

    /**
     * {@inheritDoc}
     */
    public function setNsergEtat($nsergEtat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNsergEtat', array($nsergEtat));

        return parent::setNsergEtat($nsergEtat);
    }

    /**
     * {@inheritDoc}
     */
    public function getNsergEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNsergEtat', array());

        return parent::getNsergEtat();
    }

}
