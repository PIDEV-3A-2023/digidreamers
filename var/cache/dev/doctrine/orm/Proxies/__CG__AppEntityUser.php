<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\User' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\User' . "\0" . 'adress', '' . "\0" . 'App\\Entity\\User' . "\0" . 'cin', '' . "\0" . 'App\\Entity\\User' . "\0" . 'dateNaissance', '' . "\0" . 'App\\Entity\\User' . "\0" . 'dateCreationC', '' . "\0" . 'App\\Entity\\User' . "\0" . 'status', '' . "\0" . 'App\\Entity\\User' . "\0" . 'role', '' . "\0" . 'App\\Entity\\User' . "\0" . 'motPass', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'Token', '' . "\0" . 'App\\Entity\\User' . "\0" . 'score', '' . "\0" . 'App\\Entity\\User' . "\0" . 'numtel', '' . "\0" . 'App\\Entity\\User' . "\0" . 'image', '' . "\0" . 'App\\Entity\\User' . "\0" . 'Compte_ex', '' . "\0" . 'App\\Entity\\User' . "\0" . 'token_ex'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\User' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\User' . "\0" . 'adress', '' . "\0" . 'App\\Entity\\User' . "\0" . 'cin', '' . "\0" . 'App\\Entity\\User' . "\0" . 'dateNaissance', '' . "\0" . 'App\\Entity\\User' . "\0" . 'dateCreationC', '' . "\0" . 'App\\Entity\\User' . "\0" . 'status', '' . "\0" . 'App\\Entity\\User' . "\0" . 'role', '' . "\0" . 'App\\Entity\\User' . "\0" . 'motPass', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'Token', '' . "\0" . 'App\\Entity\\User' . "\0" . 'score', '' . "\0" . 'App\\Entity\\User' . "\0" . 'numtel', '' . "\0" . 'App\\Entity\\User' . "\0" . 'image', '' . "\0" . 'App\\Entity\\User' . "\0" . 'Compte_ex', '' . "\0" . 'App\\Entity\\User' . "\0" . 'token_ex'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom(string $prenom): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdress(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdress', []);

        return parent::getAdress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdress(string $adress): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdress', [$adress]);

        return parent::setAdress($adress);
    }

    /**
     * {@inheritDoc}
     */
    public function getCin(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCin', []);

        return parent::getCin();
    }

    /**
     * {@inheritDoc}
     */
    public function setCin(string $cin): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCin', [$cin]);

        return parent::setCin($cin);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatenaissance(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatenaissance', []);

        return parent::getDatenaissance();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatenaissance(\DateTimeInterface $datenaissance): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatenaissance', [$datenaissance]);

        return parent::setDatenaissance($datenaissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatecreationc(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatecreationc', []);

        return parent::getDatecreationc();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatecreationc(\DateTimeInterface $dateCreationC): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatecreationc', [$dateCreationC]);

        return parent::setDatecreationc($dateCreationC);
    }

    /**
     * {@inheritDoc}
     */
    public function isStatus(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isStatus', []);

        return parent::isStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(bool $status): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getRole(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRole', []);

        return parent::getRole();
    }

    /**
     * {@inheritDoc}
     */
    public function setRole(string $role): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRole', [$role]);

        return parent::setRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getMotpass(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMotpass', []);

        return parent::getMotpass();
    }

    /**
     * {@inheritDoc}
     */
    public function setMotpass(string $motpass): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMotpass', [$motpass]);

        return parent::setMotpass($motpass);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getToken(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToken', []);

        return parent::getToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setToken(string $token): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToken', [$token]);

        return parent::setToken($token);
    }

    /**
     * {@inheritDoc}
     */
    public function getScore(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScore', []);

        return parent::getScore();
    }

    /**
     * {@inheritDoc}
     */
    public function setScore(string $score): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScore', [$score]);

        return parent::setScore($score);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumtel(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumtel', []);

        return parent::getNumtel();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumtel(string $numtel): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumtel', [$numtel]);

        return parent::setNumtel($numtel);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(string $image): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompteEx(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompteEx', []);

        return parent::getCompteEx();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompteEx(?\DateTimeInterface $compteEx): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompteEx', [$compteEx]);

        return parent::setCompteEx($compteEx);
    }

    /**
     * {@inheritDoc}
     */
    public function getTokenEx(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTokenEx', []);

        return parent::getTokenEx();
    }

    /**
     * {@inheritDoc}
     */
    public function setTokenEx(?\DateTimeInterface $tokenEx): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTokenEx', [$tokenEx]);

        return parent::setTokenEx($tokenEx);
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
    public function setValidation(?\App\Entity\Validation $validation): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValidation', [$validation]);

        return parent::setValidation($validation);
    }

}
