<?php

namespace ContainerXOXGb7I;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8c396 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer90b0f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties151d2 = [
        
    ];

    public function getConnection()
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'getConnection', array(), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'getMetadataFactory', array(), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'getExpressionBuilder', array(), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'beginTransaction', array(), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'getCache', array(), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->getCache();
    }

    public function transactional($func)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'transactional', array('func' => $func), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->transactional($func);
    }

    public function commit()
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'commit', array(), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->commit();
    }

    public function rollback()
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'rollback', array(), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'getClassMetadata', array('className' => $className), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'createQuery', array('dql' => $dql), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'createNamedQuery', array('name' => $name), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'createQueryBuilder', array(), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'flush', array('entity' => $entity), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'clear', array('entityName' => $entityName), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->clear($entityName);
    }

    public function close()
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'close', array(), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->close();
    }

    public function persist($entity)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'persist', array('entity' => $entity), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'remove', array('entity' => $entity), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'refresh', array('entity' => $entity), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'detach', array('entity' => $entity), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'merge', array('entity' => $entity), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'getRepository', array('entityName' => $entityName), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'contains', array('entity' => $entity), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'getEventManager', array(), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'getConfiguration', array(), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'isOpen', array(), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'getUnitOfWork', array(), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'getProxyFactory', array(), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'initializeObject', array('obj' => $obj), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'getFilters', array(), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'isFiltersStateClean', array(), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'hasFilters', array(), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return $this->valueHolder8c396->hasFilters();
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

        $instance->initializer90b0f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8c396) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8c396 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8c396->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, '__get', ['name' => $name], $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        if (isset(self::$publicProperties151d2[$name])) {
            return $this->valueHolder8c396->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c396;

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

        $targetObject = $this->valueHolder8c396;
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
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c396;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8c396;
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
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, '__isset', array('name' => $name), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c396;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8c396;
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
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, '__unset', array('name' => $name), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c396;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8c396;
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
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, '__clone', array(), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        $this->valueHolder8c396 = clone $this->valueHolder8c396;
    }

    public function __sleep()
    {
        $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, '__sleep', array(), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;

        return array('valueHolder8c396');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer90b0f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer90b0f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer90b0f && ($this->initializer90b0f->__invoke($valueHolder8c396, $this, 'initializeProxy', array(), $this->initializer90b0f) || 1) && $this->valueHolder8c396 = $valueHolder8c396;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8c396;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8c396;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
