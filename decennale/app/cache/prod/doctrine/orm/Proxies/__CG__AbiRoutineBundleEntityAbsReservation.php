<?php

namespace Proxies\__CG__\Abi\RoutineBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AbsReservation extends \Abi\RoutineBundle\Entity\AbsReservation implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revId', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revRefclient', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revRefresrv', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revVilledepart', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revVilleariv', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revDateresev', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revHeureresev', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revNbperssone', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revNbbagage', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revDistance', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revPrix', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revMessage', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revDate', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revEtat');
        }

        return array('__isInitialized__', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revId', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revRefclient', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revRefresrv', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revVilledepart', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revVilleariv', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revDateresev', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revHeureresev', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revNbperssone', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revNbbagage', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revDistance', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revPrix', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revMessage', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revDate', '' . "\0" . 'Abi\\RoutineBundle\\Entity\\AbsReservation' . "\0" . 'revEtat');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (AbsReservation $proxy) {
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
    public function getRevId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getRevId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRevId', array());

        return parent::getRevId();
    }

    /**
     * {@inheritDoc}
     */
    public function setRevRefclient($revRefclient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRevRefclient', array($revRefclient));

        return parent::setRevRefclient($revRefclient);
    }

    /**
     * {@inheritDoc}
     */
    public function getRevRefclient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRevRefclient', array());

        return parent::getRevRefclient();
    }

    /**
     * {@inheritDoc}
     */
    public function setRevRefresrv($revRefresrv)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRevRefresrv', array($revRefresrv));

        return parent::setRevRefresrv($revRefresrv);
    }

    /**
     * {@inheritDoc}
     */
    public function getRevRefresrv()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRevRefresrv', array());

        return parent::getRevRefresrv();
    }

    /**
     * {@inheritDoc}
     */
    public function setRevVilledepart($revVilledepart)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRevVilledepart', array($revVilledepart));

        return parent::setRevVilledepart($revVilledepart);
    }

    /**
     * {@inheritDoc}
     */
    public function getRevVilledepart()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRevVilledepart', array());

        return parent::getRevVilledepart();
    }

    /**
     * {@inheritDoc}
     */
    public function setRevVilleariv($revVilleariv)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRevVilleariv', array($revVilleariv));

        return parent::setRevVilleariv($revVilleariv);
    }

    /**
     * {@inheritDoc}
     */
    public function getRevVilleariv()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRevVilleariv', array());

        return parent::getRevVilleariv();
    }

    /**
     * {@inheritDoc}
     */
    public function setRevDateresev($revDateresev)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRevDateresev', array($revDateresev));

        return parent::setRevDateresev($revDateresev);
    }

    /**
     * {@inheritDoc}
     */
    public function getRevDateresev()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRevDateresev', array());

        return parent::getRevDateresev();
    }

    /**
     * {@inheritDoc}
     */
    public function setRevHeureresev($revHeureresev)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRevHeureresev', array($revHeureresev));

        return parent::setRevHeureresev($revHeureresev);
    }

    /**
     * {@inheritDoc}
     */
    public function getRevHeureresev()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRevHeureresev', array());

        return parent::getRevHeureresev();
    }

    /**
     * {@inheritDoc}
     */
    public function setRevNbperssone($revNbperssone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRevNbperssone', array($revNbperssone));

        return parent::setRevNbperssone($revNbperssone);
    }

    /**
     * {@inheritDoc}
     */
    public function getRevNbperssone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRevNbperssone', array());

        return parent::getRevNbperssone();
    }

    /**
     * {@inheritDoc}
     */
    public function setRevNbbagage($revNbbagage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRevNbbagage', array($revNbbagage));

        return parent::setRevNbbagage($revNbbagage);
    }

    /**
     * {@inheritDoc}
     */
    public function getRevNbbagage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRevNbbagage', array());

        return parent::getRevNbbagage();
    }

    /**
     * {@inheritDoc}
     */
    public function setRevDistance($revDistance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRevDistance', array($revDistance));

        return parent::setRevDistance($revDistance);
    }

    /**
     * {@inheritDoc}
     */
    public function getRevDistance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRevDistance', array());

        return parent::getRevDistance();
    }

    /**
     * {@inheritDoc}
     */
    public function setRevPrix($revPrix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRevPrix', array($revPrix));

        return parent::setRevPrix($revPrix);
    }

    /**
     * {@inheritDoc}
     */
    public function getRevPrix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRevPrix', array());

        return parent::getRevPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setRevMessage($revMessage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRevMessage', array($revMessage));

        return parent::setRevMessage($revMessage);
    }

    /**
     * {@inheritDoc}
     */
    public function getRevMessage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRevMessage', array());

        return parent::getRevMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function setRevDate($revDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRevDate', array($revDate));

        return parent::setRevDate($revDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getRevDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRevDate', array());

        return parent::getRevDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setRevEtat($revEtat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRevEtat', array($revEtat));

        return parent::setRevEtat($revEtat);
    }

    /**
     * {@inheritDoc}
     */
    public function getRevEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRevEtat', array());

        return parent::getRevEtat();
    }

}