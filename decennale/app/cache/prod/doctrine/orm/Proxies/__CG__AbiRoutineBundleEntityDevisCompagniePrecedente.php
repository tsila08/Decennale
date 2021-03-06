<?php

namespace Proxies\__CG__\Abi\RoutineBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class DevisCompagniePrecedente extends \Abi\RoutineBundle\Entity\DevisCompagniePrecedente implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprId', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprRefdevs', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprNomCompagnie', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprTypeContrat', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprNumeroContrat', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprDateSouscription', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprDateResiliation', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprNbSinistres', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprTotSinistres', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprResilieNonPaiement', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprResilieFausseDeclaration', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprResilieSinistre');
        }

        return array('__isInitialized__', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprId', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprRefdevs', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprNomCompagnie', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprTypeContrat', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprNumeroContrat', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprDateSouscription', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprDateResiliation', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprNbSinistres', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprTotSinistres', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprResilieNonPaiement', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprResilieFausseDeclaration', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\DevisCompagniePrecedente' . "\0" . 'cogprResilieSinistre');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (DevisCompagniePrecedente $proxy) {
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
    public function getCogprId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCogprId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCogprId', array());

        return parent::getCogprId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCogprRefdevs($cogprRefdevs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCogprRefdevs', array($cogprRefdevs));

        return parent::setCogprRefdevs($cogprRefdevs);
    }

    /**
     * {@inheritDoc}
     */
    public function getCogprRefdevs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCogprRefdevs', array());

        return parent::getCogprRefdevs();
    }

    /**
     * {@inheritDoc}
     */
    public function setCogprNomCompagnie($cogprNomCompagnie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCogprNomCompagnie', array($cogprNomCompagnie));

        return parent::setCogprNomCompagnie($cogprNomCompagnie);
    }

    /**
     * {@inheritDoc}
     */
    public function getCogprNomCompagnie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCogprNomCompagnie', array());

        return parent::getCogprNomCompagnie();
    }

    /**
     * {@inheritDoc}
     */
    public function setCogprTypeContrat($cogprTypeContrat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCogprTypeContrat', array($cogprTypeContrat));

        return parent::setCogprTypeContrat($cogprTypeContrat);
    }

    /**
     * {@inheritDoc}
     */
    public function getCogprTypeContrat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCogprTypeContrat', array());

        return parent::getCogprTypeContrat();
    }

    /**
     * {@inheritDoc}
     */
    public function setCogprNumeroContrat($cogprNumeroContrat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCogprNumeroContrat', array($cogprNumeroContrat));

        return parent::setCogprNumeroContrat($cogprNumeroContrat);
    }

    /**
     * {@inheritDoc}
     */
    public function getCogprNumeroContrat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCogprNumeroContrat', array());

        return parent::getCogprNumeroContrat();
    }

    /**
     * {@inheritDoc}
     */
    public function setCogprDateSouscription($cogprDateSouscription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCogprDateSouscription', array($cogprDateSouscription));

        return parent::setCogprDateSouscription($cogprDateSouscription);
    }

    /**
     * {@inheritDoc}
     */
    public function getCogprDateSouscription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCogprDateSouscription', array());

        return parent::getCogprDateSouscription();
    }

    /**
     * {@inheritDoc}
     */
    public function setCogprDateResiliation($cogprDateResiliation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCogprDateResiliation', array($cogprDateResiliation));

        return parent::setCogprDateResiliation($cogprDateResiliation);
    }

    /**
     * {@inheritDoc}
     */
    public function getCogprDateResiliation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCogprDateResiliation', array());

        return parent::getCogprDateResiliation();
    }

    /**
     * {@inheritDoc}
     */
    public function setCogprNbSinistres($cogprNbSinistres)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCogprNbSinistres', array($cogprNbSinistres));

        return parent::setCogprNbSinistres($cogprNbSinistres);
    }

    /**
     * {@inheritDoc}
     */
    public function getCogprNbSinistres()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCogprNbSinistres', array());

        return parent::getCogprNbSinistres();
    }

    /**
     * {@inheritDoc}
     */
    public function setCogprTotSinistres($cogprTotSinistres)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCogprTotSinistres', array($cogprTotSinistres));

        return parent::setCogprTotSinistres($cogprTotSinistres);
    }

    /**
     * {@inheritDoc}
     */
    public function getCogprTotSinistres()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCogprTotSinistres', array());

        return parent::getCogprTotSinistres();
    }

    /**
     * {@inheritDoc}
     */
    public function setCogprResilieNonPaiement($cogprResilieNonPaiement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCogprResilieNonPaiement', array($cogprResilieNonPaiement));

        return parent::setCogprResilieNonPaiement($cogprResilieNonPaiement);
    }

    /**
     * {@inheritDoc}
     */
    public function getCogprResilieNonPaiement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCogprResilieNonPaiement', array());

        return parent::getCogprResilieNonPaiement();
    }

    /**
     * {@inheritDoc}
     */
    public function setCogprResilieFausseDeclaration($cogprResilieFausseDeclaration)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCogprResilieFausseDeclaration', array($cogprResilieFausseDeclaration));

        return parent::setCogprResilieFausseDeclaration($cogprResilieFausseDeclaration);
    }

    /**
     * {@inheritDoc}
     */
    public function getCogprResilieFausseDeclaration()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCogprResilieFausseDeclaration', array());

        return parent::getCogprResilieFausseDeclaration();
    }

    /**
     * {@inheritDoc}
     */
    public function setCogprResilieSinistre($cogprResilieSinistre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCogprResilieSinistre', array($cogprResilieSinistre));

        return parent::setCogprResilieSinistre($cogprResilieSinistre);
    }

    /**
     * {@inheritDoc}
     */
    public function getCogprResilieSinistre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCogprResilieSinistre', array());

        return parent::getCogprResilieSinistre();
    }

}
