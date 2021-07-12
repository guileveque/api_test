<?php

namespace ContainerC9cii1s;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3dd90 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb03a8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties494c0 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'getConnection', array(), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'getMetadataFactory', array(), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'getExpressionBuilder', array(), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'beginTransaction', array(), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'getCache', array(), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'transactional', array('func' => $func), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->transactional($func);
    }

    public function commit()
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'commit', array(), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->commit();
    }

    public function rollback()
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'rollback', array(), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'getClassMetadata', array('className' => $className), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'createQuery', array('dql' => $dql), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'createNamedQuery', array('name' => $name), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'createQueryBuilder', array(), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'flush', array('entity' => $entity), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'clear', array('entityName' => $entityName), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->clear($entityName);
    }

    public function close()
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'close', array(), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->close();
    }

    public function persist($entity)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'persist', array('entity' => $entity), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'remove', array('entity' => $entity), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'refresh', array('entity' => $entity), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'detach', array('entity' => $entity), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'merge', array('entity' => $entity), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'contains', array('entity' => $entity), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'getEventManager', array(), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'getConfiguration', array(), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'isOpen', array(), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'getUnitOfWork', array(), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'getProxyFactory', array(), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'initializeObject', array('obj' => $obj), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'getFilters', array(), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'isFiltersStateClean', array(), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'hasFilters', array(), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return $this->valueHolder3dd90->hasFilters();
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

        $instance->initializerb03a8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3dd90) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3dd90 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3dd90->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, '__get', ['name' => $name], $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        if (isset(self::$publicProperties494c0[$name])) {
            return $this->valueHolder3dd90->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3dd90;

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

        $targetObject = $this->valueHolder3dd90;
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
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3dd90;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3dd90;
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
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, '__isset', array('name' => $name), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3dd90;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3dd90;
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
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, '__unset', array('name' => $name), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3dd90;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3dd90;
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
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, '__clone', array(), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        $this->valueHolder3dd90 = clone $this->valueHolder3dd90;
    }

    public function __sleep()
    {
        $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, '__sleep', array(), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;

        return array('valueHolder3dd90');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb03a8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb03a8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb03a8 && ($this->initializerb03a8->__invoke($valueHolder3dd90, $this, 'initializeProxy', array(), $this->initializerb03a8) || 1) && $this->valueHolder3dd90 = $valueHolder3dd90;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3dd90;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3dd90;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
