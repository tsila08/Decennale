<?php

namespace Proxies\__CG__\Abi\RoutineBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AbsClientDocuments extends \Abi\RoutineBundle\Entity\AbsClientDocuments implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsClientDocuments' . "\0" . 'docId', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsClientDocuments' . "\0" . 'docRef', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsClientDocuments' . "\0" . 'docTitre', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsClientDocuments' . "\0" . 'docDocument', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsClientDocuments' . "\0" . 'docExtension', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsClientDocuments' . "\0" . 'docDate');
        }

        return array('__isInitialized__', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsClientDocuments' . "\0" . 'docId', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsClientDocuments' . "\0" . 'docRef', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsClientDocuments' . "\0" . 'docTitre', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsClientDocuments' . "\0" . 'docDocument', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsClientDocuments' . "\0" . 'docExtension', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsClientDocuments' . "\0" . 'docDate');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (AbsClientDocuments $proxy) {
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
    public function getDocId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getDocId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDocId', array());

        return parent::getDocId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDocRef($docRef)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDocRef', array($docRef));

        return parent::setDocRef($docRef);
    }

    /**
     * {@inheritDoc}
     */
    public function getDocRef()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDocRef', array());

        return parent::getDocRef();
    }

    /**
     * {@inheritDoc}
     */
    public function setDocTitre($docTitre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDocTitre', array($docTitre));

        return parent::setDocTitre($docTitre);
    }

    /**
     * {@inheritDoc}
     */
    public function getDocTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDocTitre', array());

        return parent::getDocTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setDocDocument($docDocument)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDocDocument', array($docDocument));

        return parent::setDocDocument($docDocument);
    }

    /**
     * {@inheritDoc}
     */
    public function getDocDocument()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDocDocument', array());

        return parent::getDocDocument();
    }

    /**
     * {@inheritDoc}
     */
    public function setDocExtension($docExtension)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDocExtension', array($docExtension));

        return parent::setDocExtension($docExtension);
    }

    /**
     * {@inheritDoc}
     */
    public function getDocExtension()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDocExtension', array());

        return parent::getDocExtension();
    }

    /**
     * {@inheritDoc}
     */
    public function setDocDate($docDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDocDate', array($docDate));

        return parent::setDocDate($docDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getDocDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDocDate', array());

        return parent::getDocDate();
    }

}
