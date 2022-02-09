<?php

namespace DoctrineORMModule\Proxy\__CG__\TreinoCliente\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TreinoCliente extends \TreinoCliente\Entity\TreinoCliente implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'TreinoCliente\\Entity\\TreinoCliente' . "\0" . 'idTreinoCliente', '' . "\0" . 'TreinoCliente\\Entity\\TreinoCliente' . "\0" . 'idTreinoSistema', '' . "\0" . 'TreinoCliente\\Entity\\TreinoCliente' . "\0" . 'nome', '' . "\0" . 'TreinoCliente\\Entity\\TreinoCliente' . "\0" . 'imagem', '' . "\0" . 'TreinoCliente\\Entity\\TreinoCliente' . "\0" . 'status');
        }

        return array('__isInitialized__', '' . "\0" . 'TreinoCliente\\Entity\\TreinoCliente' . "\0" . 'idTreinoCliente', '' . "\0" . 'TreinoCliente\\Entity\\TreinoCliente' . "\0" . 'idTreinoSistema', '' . "\0" . 'TreinoCliente\\Entity\\TreinoCliente' . "\0" . 'nome', '' . "\0" . 'TreinoCliente\\Entity\\TreinoCliente' . "\0" . 'imagem', '' . "\0" . 'TreinoCliente\\Entity\\TreinoCliente' . "\0" . 'status');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TreinoCliente $proxy) {
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
    public function getIdTreinoCliente()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdTreinoCliente();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdTreinoCliente', array());

        return parent::getIdTreinoCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdTreinoSistema()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdTreinoSistema', array());

        return parent::getIdTreinoSistema();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdTreinoSistema($idTreinoSistema)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdTreinoSistema', array($idTreinoSistema));

        return parent::setIdTreinoSistema($idTreinoSistema);
    }

    /**
     * {@inheritDoc}
     */
    public function getNome()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNome', array());

        return parent::getNome();
    }

    /**
     * {@inheritDoc}
     */
    public function setNome($nome)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNome', array($nome));

        return parent::setNome($nome);
    }

    /**
     * {@inheritDoc}
     */
    public function getImagem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImagem', array());

        return parent::getImagem();
    }

    /**
     * {@inheritDoc}
     */
    public function setImagem($imagem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImagem', array($imagem));

        return parent::setImagem($imagem);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', array());

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', array($status));

        return parent::setStatus($status);
    }

}
