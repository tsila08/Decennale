<?php

namespace Proxies\__CG__\Abi\RoutineBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AbsRealisation extends \Abi\RoutineBundle\Entity\AbsRealisation implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsRealisation' . "\0" . 'galerieId', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsRealisation' . "\0" . 'galerieTitre', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsRealisation' . "\0" . 'galerieDescription', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsRealisation' . "\0" . 'galerieImg', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsRealisation' . "\0" . 'galerieExtention', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsRealisation' . "\0" . 'galerieEtat', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsRealisation' . "\0" . 'galerieDate');
        }

        return array('__isInitialized__', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsRealisation' . "\0" . 'galerieId', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsRealisation' . "\0" . 'galerieTitre', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsRealisation' . "\0" . 'galerieDescription', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsRealisation' . "\0" . 'galerieImg', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsRealisation' . "\0" . 'galerieExtention', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsRealisation' . "\0" . 'galerieEtat', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsRealisation' . "\0" . 'galerieDate');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (AbsRealisation $proxy) {
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
    public function getGalerieId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getGalerieId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGalerieId', array());

        return parent::getGalerieId();
    }

    /**
     * {@inheritDoc}
     */
    public function setGalerieTitre($galerieTitre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGalerieTitre', array($galerieTitre));

        return parent::setGalerieTitre($galerieTitre);
    }

    /**
     * {@inheritDoc}
     */
    public function getGalerieTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGalerieTitre', array());

        return parent::getGalerieTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setGalerieDescription($galerieDescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGalerieDescription', array($galerieDescription));

        return parent::setGalerieDescription($galerieDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getGalerieDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGalerieDescription', array());

        return parent::getGalerieDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setGalerieImg($galerieImg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGalerieImg', array($galerieImg));

        return parent::setGalerieImg($galerieImg);
    }

    /**
     * {@inheritDoc}
     */
    public function getGalerieImg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGalerieImg', array());

        return parent::getGalerieImg();
    }

    /**
     * {@inheritDoc}
     */
    public function setGalerieExtention($galerieExtention)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGalerieExtention', array($galerieExtention));

        return parent::setGalerieExtention($galerieExtention);
    }

    /**
     * {@inheritDoc}
     */
    public function getGalerieExtention()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGalerieExtention', array());

        return parent::getGalerieExtention();
    }

    /**
     * {@inheritDoc}
     */
    public function setGalerieEtat($galerieEtat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGalerieEtat', array($galerieEtat));

        return parent::setGalerieEtat($galerieEtat);
    }

    /**
     * {@inheritDoc}
     */
    public function getGalerieEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGalerieEtat', array());

        return parent::getGalerieEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setGalerieDate($galerieDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGalerieDate', array($galerieDate));

        return parent::setGalerieDate($galerieDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getGalerieDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGalerieDate', array());

        return parent::getGalerieDate();
    }

}
