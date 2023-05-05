<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Colis extends \App\Entity\Colis implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Colis' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Colis' . "\0" . 'nomExpediteur', '' . "\0" . 'App\\Entity\\Colis' . "\0" . 'adresseExpediteur', '' . "\0" . 'App\\Entity\\Colis' . "\0" . 'nomDestinataire', '' . "\0" . 'App\\Entity\\Colis' . "\0" . 'adresseDestinataire', '' . "\0" . 'App\\Entity\\Colis' . "\0" . 'poids', '' . "\0" . 'App\\Entity\\Colis' . "\0" . 'statut', '' . "\0" . 'App\\Entity\\Colis' . "\0" . 'dateExpedition', '' . "\0" . 'App\\Entity\\Colis' . "\0" . 'id_u', '' . "\0" . 'App\\Entity\\Colis' . "\0" . 'colisRec'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Colis' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Colis' . "\0" . 'nomExpediteur', '' . "\0" . 'App\\Entity\\Colis' . "\0" . 'adresseExpediteur', '' . "\0" . 'App\\Entity\\Colis' . "\0" . 'nomDestinataire', '' . "\0" . 'App\\Entity\\Colis' . "\0" . 'adresseDestinataire', '' . "\0" . 'App\\Entity\\Colis' . "\0" . 'poids', '' . "\0" . 'App\\Entity\\Colis' . "\0" . 'statut', '' . "\0" . 'App\\Entity\\Colis' . "\0" . 'dateExpedition', '' . "\0" . 'App\\Entity\\Colis' . "\0" . 'id_u', '' . "\0" . 'App\\Entity\\Colis' . "\0" . 'colisRec'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Colis $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getNomExpediteur(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomExpediteur', []);

        return parent::getNomExpediteur();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomExpediteur(string $nomExpediteur): \App\Entity\Colis
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomExpediteur', [$nomExpediteur]);

        return parent::setNomExpediteur($nomExpediteur);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresseExpediteur(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresseExpediteur', []);

        return parent::getAdresseExpediteur();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresseExpediteur(string $adresseExpediteur): \App\Entity\Colis
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresseExpediteur', [$adresseExpediteur]);

        return parent::setAdresseExpediteur($adresseExpediteur);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomDestinataire(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomDestinataire', []);

        return parent::getNomDestinataire();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomDestinataire(string $nomDestinataire): \App\Entity\Colis
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomDestinataire', [$nomDestinataire]);

        return parent::setNomDestinataire($nomDestinataire);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresseDestinataire(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresseDestinataire', []);

        return parent::getAdresseDestinataire();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresseDestinataire(string $adresseDestinataire): \App\Entity\Colis
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresseDestinataire', [$adresseDestinataire]);

        return parent::setAdresseDestinataire($adresseDestinataire);
    }

    /**
     * {@inheritDoc}
     */
    public function getPoids(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPoids', []);

        return parent::getPoids();
    }

    /**
     * {@inheritDoc}
     */
    public function setPoids(float $poids): \App\Entity\Colis
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPoids', [$poids]);

        return parent::setPoids($poids);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatut(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatut', []);

        return parent::getStatut();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatut(string $statut): \App\Entity\Colis
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatut', [$statut]);

        return parent::setStatut($statut);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateExpedition(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateExpedition', []);

        return parent::getDateExpedition();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateExpedition(\DateTimeInterface $dateExpedition): \App\Entity\Colis
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateExpedition', [$dateExpedition]);

        return parent::setDateExpedition($dateExpedition);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdU(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdU', []);

        return parent::getIdU();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdU(?\App\Entity\User $id_u): \App\Entity\Colis
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdU', [$id_u]);

        return parent::setIdU($id_u);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getColisRec(): ?\App\Entity\ColisRec
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getColisRec', []);

        return parent::getColisRec();
    }

    /**
     * {@inheritDoc}
     */
    public function setColisRec(?\App\Entity\ColisRec $colisRec): \App\Entity\Colis
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setColisRec', [$colisRec]);

        return parent::setColisRec($colisRec);
    }

}
