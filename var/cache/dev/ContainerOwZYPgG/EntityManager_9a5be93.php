<?php

namespace ContainerOwZYPgG;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc5842 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer67c34 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties374bd = [
        
    ];

    public function getConnection()
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'getConnection', array(), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'getMetadataFactory', array(), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'getExpressionBuilder', array(), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'beginTransaction', array(), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'getCache', array(), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->getCache();
    }

    public function transactional($func)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'transactional', array('func' => $func), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->transactional($func);
    }

    public function commit()
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'commit', array(), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->commit();
    }

    public function rollback()
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'rollback', array(), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'getClassMetadata', array('className' => $className), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'createQuery', array('dql' => $dql), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'createNamedQuery', array('name' => $name), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'createQueryBuilder', array(), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'flush', array('entity' => $entity), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'clear', array('entityName' => $entityName), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->clear($entityName);
    }

    public function close()
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'close', array(), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->close();
    }

    public function persist($entity)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'persist', array('entity' => $entity), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'remove', array('entity' => $entity), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'refresh', array('entity' => $entity), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'detach', array('entity' => $entity), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'merge', array('entity' => $entity), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'getRepository', array('entityName' => $entityName), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'contains', array('entity' => $entity), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'getEventManager', array(), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'getConfiguration', array(), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'isOpen', array(), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'getUnitOfWork', array(), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'getProxyFactory', array(), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'initializeObject', array('obj' => $obj), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'getFilters', array(), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'isFiltersStateClean', array(), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'hasFilters', array(), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return $this->valueHolderc5842->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer67c34 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc5842) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc5842 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc5842->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, '__get', ['name' => $name], $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        if (isset(self::$publicProperties374bd[$name])) {
            return $this->valueHolderc5842->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc5842;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc5842;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc5842;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc5842;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, '__isset', array('name' => $name), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc5842;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc5842;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, '__unset', array('name' => $name), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc5842;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc5842;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, '__clone', array(), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        $this->valueHolderc5842 = clone $this->valueHolderc5842;
    }

    public function __sleep()
    {
        $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, '__sleep', array(), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;

        return array('valueHolderc5842');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer67c34 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer67c34;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer67c34 && ($this->initializer67c34->__invoke($valueHolderc5842, $this, 'initializeProxy', array(), $this->initializer67c34) || 1) && $this->valueHolderc5842 = $valueHolderc5842;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc5842;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc5842;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
