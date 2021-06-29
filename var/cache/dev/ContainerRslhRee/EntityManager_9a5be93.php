<?php

namespace ContainerRslhRee;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9cbd9 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer460e2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb678b = [
        
    ];

    public function getConnection()
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'getConnection', array(), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'getMetadataFactory', array(), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'getExpressionBuilder', array(), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'beginTransaction', array(), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'getCache', array(), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->getCache();
    }

    public function transactional($func)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'transactional', array('func' => $func), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->transactional($func);
    }

    public function commit()
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'commit', array(), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->commit();
    }

    public function rollback()
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'rollback', array(), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'getClassMetadata', array('className' => $className), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'createQuery', array('dql' => $dql), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'createNamedQuery', array('name' => $name), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'createQueryBuilder', array(), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'flush', array('entity' => $entity), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'clear', array('entityName' => $entityName), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->clear($entityName);
    }

    public function close()
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'close', array(), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->close();
    }

    public function persist($entity)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'persist', array('entity' => $entity), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'remove', array('entity' => $entity), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'refresh', array('entity' => $entity), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'detach', array('entity' => $entity), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'merge', array('entity' => $entity), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'getRepository', array('entityName' => $entityName), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'contains', array('entity' => $entity), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'getEventManager', array(), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'getConfiguration', array(), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'isOpen', array(), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'getUnitOfWork', array(), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'getProxyFactory', array(), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'initializeObject', array('obj' => $obj), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'getFilters', array(), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'isFiltersStateClean', array(), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'hasFilters', array(), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return $this->valueHolder9cbd9->hasFilters();
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

        $instance->initializer460e2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9cbd9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9cbd9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9cbd9->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, '__get', ['name' => $name], $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        if (isset(self::$publicPropertiesb678b[$name])) {
            return $this->valueHolder9cbd9->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9cbd9;

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

        $targetObject = $this->valueHolder9cbd9;
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
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9cbd9;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9cbd9;
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
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, '__isset', array('name' => $name), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9cbd9;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9cbd9;
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
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, '__unset', array('name' => $name), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9cbd9;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9cbd9;
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
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, '__clone', array(), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        $this->valueHolder9cbd9 = clone $this->valueHolder9cbd9;
    }

    public function __sleep()
    {
        $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, '__sleep', array(), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;

        return array('valueHolder9cbd9');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer460e2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer460e2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer460e2 && ($this->initializer460e2->__invoke($valueHolder9cbd9, $this, 'initializeProxy', array(), $this->initializer460e2) || 1) && $this->valueHolder9cbd9 = $valueHolder9cbd9;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9cbd9;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9cbd9;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
