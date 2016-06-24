<?php

namespace Proxies\__CG__\BackEnd\Requete\RequeteBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Demande extends \BackEnd\Requete\RequeteBundle\Entity\Demande implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'BackEnd\\Requete\\RequeteBundle\\Entity\\Demande' . "\0" . 'id', '' . "\0" . 'BackEnd\\Requete\\RequeteBundle\\Entity\\Demande' . "\0" . 'typeEchange', '' . "\0" . 'BackEnd\\Requete\\RequeteBundle\\Entity\\Demande' . "\0" . 'nomJeu', '' . "\0" . 'BackEnd\\Requete\\RequeteBundle\\Entity\\Demande' . "\0" . 'anneeJeu', '' . "\0" . 'BackEnd\\Requete\\RequeteBundle\\Entity\\Demande' . "\0" . 'etatJeu', '' . "\0" . 'BackEnd\\Requete\\RequeteBundle\\Entity\\Demande' . "\0" . 'etatValidation', '' . "\0" . 'BackEnd\\Requete\\RequeteBundle\\Entity\\Demande' . "\0" . 'date_requete');
        }

        return array('__isInitialized__', '' . "\0" . 'BackEnd\\Requete\\RequeteBundle\\Entity\\Demande' . "\0" . 'id', '' . "\0" . 'BackEnd\\Requete\\RequeteBundle\\Entity\\Demande' . "\0" . 'typeEchange', '' . "\0" . 'BackEnd\\Requete\\RequeteBundle\\Entity\\Demande' . "\0" . 'nomJeu', '' . "\0" . 'BackEnd\\Requete\\RequeteBundle\\Entity\\Demande' . "\0" . 'anneeJeu', '' . "\0" . 'BackEnd\\Requete\\RequeteBundle\\Entity\\Demande' . "\0" . 'etatJeu', '' . "\0" . 'BackEnd\\Requete\\RequeteBundle\\Entity\\Demande' . "\0" . 'etatValidation', '' . "\0" . 'BackEnd\\Requete\\RequeteBundle\\Entity\\Demande' . "\0" . 'date_requete');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Demande $proxy) {
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeEchange($typeEchange)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeEchange', array($typeEchange));

        return parent::setTypeEchange($typeEchange);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeEchange()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeEchange', array());

        return parent::getTypeEchange();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomJeu($nomJeu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomJeu', array($nomJeu));

        return parent::setNomJeu($nomJeu);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomJeu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomJeu', array());

        return parent::getNomJeu();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnneeJeu($anneeJeu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnneeJeu', array($anneeJeu));

        return parent::setAnneeJeu($anneeJeu);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnneeJeu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnneeJeu', array());

        return parent::getAnneeJeu();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtatJeu($etatJeu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtatJeu', array($etatJeu));

        return parent::setEtatJeu($etatJeu);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtatJeu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtatJeu', array());

        return parent::getEtatJeu();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtatValidation($etatValidation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtatValidation', array($etatValidation));

        return parent::setEtatValidation($etatValidation);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtatValidation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtatValidation', array());

        return parent::getEtatValidation();
    }

    /**
     * {@inheritDoc}
     */
    public function getDate_requete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate_requete', array());

        return parent::getDate_requete();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate_requete($date_requete)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate_requete', array($date_requete));

        return parent::setDate_requete($date_requete);
    }

}