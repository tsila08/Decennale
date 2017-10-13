<?php

namespace Proxies\__CG__\Abi\RoutineBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class DevisAntecedentOption extends \Abi\RoutineBundle\Entity\DevisAntecedentOption implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antId', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antRefdevs', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antRefclient', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antDateEffet', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antEcheancier', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antDejassure', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antSoustraitance', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antReprise', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antRedressement', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antDaterecue', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antEtat');
        }

        return array('__isInitialized__', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antId', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antRefdevs', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antRefclient', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antDateEffet', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antEcheancier', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antDejassure', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antSoustraitance', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antReprise', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antRedressement', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antDaterecue', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisAntecedentOption' . "\0" . 'antEtat');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (DevisAntecedentOption $proxy) {
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
    public function getAntId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getAntId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAntId', array());

        return parent::getAntId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAntRefdevs($antRefdevs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAntRefdevs', array($antRefdevs));

        return parent::setAntRefdevs($antRefdevs);
    }

    /**
     * {@inheritDoc}
     */
    public function getAntRefdevs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAntRefdevs', array());

        return parent::getAntRefdevs();
    }

    /**
     * {@inheritDoc}
     */
    public function setAntRefclient($antRefclient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAntRefclient', array($antRefclient));

        return parent::setAntRefclient($antRefclient);
    }

    /**
     * {@inheritDoc}
     */
    public function getAntRefclient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAntRefclient', array());

        return parent::getAntRefclient();
    }

    /**
     * {@inheritDoc}
     */
    public function setAntDateEffet($antDateEffet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAntDateEffet', array($antDateEffet));

        return parent::setAntDateEffet($antDateEffet);
    }

    /**
     * {@inheritDoc}
     */
    public function getAntDateEffet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAntDateEffet', array());

        return parent::getAntDateEffet();
    }

    /**
     * {@inheritDoc}
     */
    public function setAntEcheancier($antEcheancier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAntEcheancier', array($antEcheancier));

        return parent::setAntEcheancier($antEcheancier);
    }

    /**
     * {@inheritDoc}
     */
    public function getAntEcheancier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAntEcheancier', array());

        return parent::getAntEcheancier();
    }

    /**
     * {@inheritDoc}
     */
    public function setAntDejassure($antDejassure)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAntDejassure', array($antDejassure));

        return parent::setAntDejassure($antDejassure);
    }

    /**
     * {@inheritDoc}
     */
    public function getAntDejassure()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAntDejassure', array());

        return parent::getAntDejassure();
    }

    /**
     * {@inheritDoc}
     */
    public function setAntSoustraitance($antSoustraitance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAntSoustraitance', array($antSoustraitance));

        return parent::setAntSoustraitance($antSoustraitance);
    }

    /**
     * {@inheritDoc}
     */
    public function getAntSoustraitance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAntSoustraitance', array());

        return parent::getAntSoustraitance();
    }

    /**
     * {@inheritDoc}
     */
    public function setAntReprise($antReprise)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAntReprise', array($antReprise));

        return parent::setAntReprise($antReprise);
    }

    /**
     * {@inheritDoc}
     */
    public function getAntReprise()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAntReprise', array());

        return parent::getAntReprise();
    }

    /**
     * {@inheritDoc}
     */
    public function setAntRedressement($antRedressement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAntRedressement', array($antRedressement));

        return parent::setAntRedressement($antRedressement);
    }

    /**
     * {@inheritDoc}
     */
    public function getAntRedressement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAntRedressement', array());

        return parent::getAntRedressement();
    }

    /**
     * {@inheritDoc}
     */
    public function setAntDaterecue($antDaterecue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAntDaterecue', array($antDaterecue));

        return parent::setAntDaterecue($antDaterecue);
    }

    /**
     * {@inheritDoc}
     */
    public function getAntDaterecue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAntDaterecue', array());

        return parent::getAntDaterecue();
    }

    /**
     * {@inheritDoc}
     */
    public function setAntEtat($antEtat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAntEtat', array($antEtat));

        return parent::setAntEtat($antEtat);
    }

    /**
     * {@inheritDoc}
     */
    public function getAntEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAntEtat', array());

        return parent::getAntEtat();
    }

}