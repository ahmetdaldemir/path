<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
require __DIR__.'/ContainerXw1WgSs/srcApp_KernelDevDebugContainer.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'FOS\RestBundle\FOSRestBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'JMS\SerializerBundle\JMSSerializerBundle';
$classes[] = 'Bazinga\Bundle\HateoasBundle\BazingaHateoasBundle';
$classes[] = 'Nelmio\ApiDocBundle\NelmioApiDocBundle';
$classes[] = 'Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle';
$classes[] = 'Symfony\Bundle\WebServerBundle\WebServerBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser';
$classes[] = 'Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\CustomerController';
$classes[] = 'App\Controller\OrderController';
$classes[] = 'App\Controller\ProductController';
$classes[] = 'App\Controller\UserController';
$classes[] = 'App\EventListener\LoggerListener';
$classes[] = 'App\EventSubscriber\ExceptionSubscriber';
$classes[] = 'App\Normalizer\MethodNotAllowedHttpExceptionNormalizer';
$classes[] = 'App\Normalizer\NotFoundHttpExceptionNormalizer';
$classes[] = 'App\Repository\CustomerRepository';
$classes[] = 'App\Repository\OrderRepository';
$classes[] = 'App\Repository\ProductRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Dbal\ManagerRegistryAwareConnectionProvider';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Tools\Console\Command\RunSqlCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\AboutCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand';
$classes[] = 'Symfony\Component\Console\CommandLoader\ContainerCommandLoader';
$classes[] = 'Symfony\Component\Console\EventListener\ErrorListener';
$classes[] = 'Symfony\Bridge\Monolog\Logger';
$classes[] = 'Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\ExpressionLanguage';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Logging\LoggerChain';
$classes[] = 'Symfony\Bridge\Doctrine\Logger\DbalLogger';
$classes[] = 'Doctrine\DBAL\Logging\DebugStack';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand';
$classes[] = 'Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand';
$classes[] = 'Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader';
$classes[] = 'App\DataFixtures\AppFixtures';
$classes[] = 'Doctrine\Bundle\FixturesBundle\Purger\ORMPurgerFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Symfony\Component\Cache\DoctrineProvider';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Command\MigrationsDumpSchemaDoctrineCommand';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Command\MigrationsRollupDoctrineCommand';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Command\MigrationsUpToDateDoctrineCommand';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'bool';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Monolog\Handler\NullHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'FOS\RestBundle\EventListener\BodyListener';
$classes[] = 'FOS\RestBundle\Decoder\ContainerDecoderProvider';
$classes[] = 'FOS\RestBundle\Decoder\JsonDecoder';
$classes[] = 'FOS\RestBundle\Decoder\XmlDecoder';
$classes[] = 'FOS\RestBundle\EventListener\FormatListener';
$classes[] = 'FOS\RestBundle\Negotiation\FormatNegotiator';
$classes[] = 'FOS\RestBundle\EventListener\ParamFetcherListener';
$classes[] = 'FOS\RestBundle\Request\ParamFetcher';
$classes[] = 'FOS\RestBundle\Request\ParamReader';
$classes[] = 'FOS\RestBundle\Serializer\Normalizer\FormErrorHandler';
$classes[] = 'JMS\Serializer\Handler\FormErrorHandler';
$classes[] = 'FOS\RestBundle\Serializer\JMSSerializerAdapter';
$classes[] = 'FOS\RestBundle\Serializer\JMSHandlerRegistryV2';
$classes[] = 'JMS\Serializer\Handler\LazyHandlerRegistry';
$classes[] = 'FOS\RestBundle\View\ViewHandler';
$classes[] = 'FOS\RestBundle\EventListener\ViewResponseListener';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Metadata\Driver\DriverChain';
$classes[] = 'Hateoas\Configuration\Metadata\Driver\YamlDriver';
$classes[] = 'Hateoas\Configuration\Metadata\Driver\XmlDriver';
$classes[] = 'Hateoas\Configuration\Metadata\Driver\ExtensionDriver';
$classes[] = 'Hateoas\Configuration\Metadata\Driver\AnnotationDriver';
$classes[] = 'Metadata\MetadataFactory';
$classes[] = 'Metadata\Driver\LazyLoadingDriver';
$classes[] = 'Metadata\Cache\FileCache';
$classes[] = 'Hateoas\Configuration\Provider\ChainProvider';
$classes[] = 'Hateoas\Configuration\Provider\FunctionProvider';
$classes[] = 'Hateoas\Configuration\Provider\StaticMethodProvider';
$classes[] = 'Hateoas\Configuration\Provider\ExpressionEvaluatorProvider';
$classes[] = 'Hateoas\Factory\EmbeddedsFactory';
$classes[] = 'Hateoas\Serializer\AddRelationsListener';
$classes[] = 'Hateoas\Serializer\JsonHalSerializer';
$classes[] = 'Hateoas\Serializer\XmlSerializer';
$classes[] = 'Hateoas\UrlGenerator\UrlGeneratorRegistry';
$classes[] = 'Hateoas\UrlGenerator\SymfonyUrlGenerator';
$classes[] = 'Hateoas\Helper\LinkHelper';
$classes[] = 'Hateoas\Serializer\Metadata\InlineDeferrer';
$classes[] = 'Hateoas\Factory\LinkFactory';
$classes[] = 'Hateoas\Factory\LinksFactory';
$classes[] = 'Hateoas\Serializer\ExclusionManager';
$classes[] = 'JMS\Serializer\Exclusion\ExpressionLanguageExclusionStrategy';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'JMS\Serializer\Serializer';
$classes[] = 'JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory';
$classes[] = 'JMS\Serializer\Construction\DoctrineObjectConstructor';
$classes[] = 'JMS\Serializer\Construction\UnserializeObjectConstructor';
$classes[] = 'JMS\Serializer\Accessor\DefaultAccessorStrategy';
$classes[] = 'JMS\Serializer\EventDispatcher\LazyEventDispatcher';
$classes[] = 'JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory';
$classes[] = 'JMS\Serializer\Handler\ArrayCollectionHandler';
$classes[] = 'JMS\SerializerBundle\Cache\CacheClearer';
$classes[] = 'JMS\Serializer\Handler\ConstraintViolationHandler';
$classes[] = 'JMS\Serializer\Handler\DateHandler';
$classes[] = 'JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory';
$classes[] = 'JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber';
$classes[] = 'JMS\Serializer\Expression\ExpressionEvaluator';
$classes[] = 'Symfony\Component\ExpressionLanguage\ExpressionLanguage';
$classes[] = 'JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider';
$classes[] = 'Bazinga\Bundle\HateoasBundle\Expression\LinkExpressionFunction';
$classes[] = 'JMS\Serializer\Handler\IteratorHandler';
$classes[] = 'Metadata\Driver\FileLocator';
$classes[] = 'JMS\Serializer\Metadata\Driver\DoctrineTypeDriver';
$classes[] = 'JMS\Serializer\Metadata\Driver\YamlDriver';
$classes[] = 'JMS\Serializer\Naming\SerializedNameAnnotationStrategy';
$classes[] = 'JMS\Serializer\Naming\CamelCaseNamingStrategy';
$classes[] = 'JMS\Serializer\Metadata\Driver\XmlDriver';
$classes[] = 'JMS\Serializer\Metadata\Driver\AnnotationDriver';
$classes[] = 'JMS\SerializerBundle\Serializer\StopwatchEventSubscriber';
$classes[] = 'JMS\Serializer\Twig\SerializerRuntimeHelper';
$classes[] = 'JMS\Serializer\Type\Parser';
$classes[] = 'App\Kernel';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Command\CheckConfigCommand';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Encoder\LcobucciJWTEncoder';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Command\GenerateTokenCommand';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Bundle\MakerBundle\Command\MakerCommand';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeAuthenticator';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeCommand';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeController';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeCrud';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeDockerDatabase';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeEntity';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeFixtures';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeForm';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeMessage';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeMessengerMiddleware';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeMigration';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeRegistrationForm';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeResetPassword';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeSerializerEncoder';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeSerializerNormalizer';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeSubscriber';
$classes[] = 'Symfony\Bundle\MakerBundle\EventRegistry';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeTest';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeTwigExtension';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeUser';
$classes[] = 'Symfony\Bundle\MakerBundle\Security\UserClassBuilder';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeValidator';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeVoter';
$classes[] = 'Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber';
$classes[] = 'Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper';
$classes[] = 'Symfony\Bundle\MakerBundle\Doctrine\EntityClassGenerator';
$classes[] = 'Symfony\Bundle\MakerBundle\FileManager';
$classes[] = 'Symfony\Bundle\MakerBundle\Util\AutoloaderUtil';
$classes[] = 'Symfony\Bundle\MakerBundle\Util\ComposerAutoloaderFinder';
$classes[] = 'Symfony\Bundle\MakerBundle\Util\MakerFileLinkFormatter';
$classes[] = 'Symfony\Bundle\MakerBundle\Generator';
$classes[] = 'Symfony\Bundle\MakerBundle\Util\PhpCompatUtil';
$classes[] = 'Symfony\Bundle\MakerBundle\Renderer\FormTypeRenderer';
$classes[] = 'Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater';
$classes[] = 'Symfony\Component\Mime\MimeTypes';
$classes[] = 'Symfony\Bridge\Monolog\Handler\ConsoleHandler';
$classes[] = 'Monolog\Handler\StreamHandler';
$classes[] = 'Monolog\Processor\PsrLogMessageProcessor';
$classes[] = 'Nelmio\ApiDocBundle\Controller\DocumentationController';
$classes[] = 'Nelmio\ApiDocBundle\Controller\SwaggerUiController';
$classes[] = 'Nelmio\ApiDocBundle\Util\ControllerReflector';
$classes[] = 'Nelmio\ApiDocBundle\Describer\ExternalDocDescriber';
$classes[] = 'Nelmio\ApiDocBundle\Describer\DefaultDescriber';
$classes[] = 'Nelmio\ApiDocBundle\Describer\RouteDescriber';
$classes[] = 'Nelmio\ApiDocBundle\Describer\SwaggerPhpDescriber';
$classes[] = 'Nelmio\ApiDocBundle\ApiDocGenerator';
$classes[] = 'Nelmio\ApiDocBundle\ModelDescriber\BazingaHateoasModelDescriber';
$classes[] = 'Nelmio\ApiDocBundle\ModelDescriber\JMSModelDescriber';
$classes[] = 'Nelmio\ApiDocBundle\ModelDescriber\ObjectModelDescriber';
$classes[] = 'Nelmio\ApiDocBundle\ModelDescriber\FallbackObjectModelDescriber';
$classes[] = 'Nelmio\ApiDocBundle\PropertyDescriber\ArrayPropertyDescriber';
$classes[] = 'Nelmio\ApiDocBundle\PropertyDescriber\BooleanPropertyDescriber';
$classes[] = 'Nelmio\ApiDocBundle\PropertyDescriber\DateTimePropertyDescriber';
$classes[] = 'Nelmio\ApiDocBundle\PropertyDescriber\FloatPropertyDescriber';
$classes[] = 'Nelmio\ApiDocBundle\PropertyDescriber\IntegerPropertyDescriber';
$classes[] = 'Nelmio\ApiDocBundle\PropertyDescriber\ObjectPropertyDescriber';
$classes[] = 'Nelmio\ApiDocBundle\PropertyDescriber\StringPropertyDescriber';
$classes[] = 'Nelmio\ApiDocBundle\RouteDescriber\FosRestDescriber';
$classes[] = 'Nelmio\ApiDocBundle\RouteDescriber\PhpDocDescriber';
$classes[] = 'Nelmio\ApiDocBundle\RouteDescriber\RouteMetadataDescriber';
$classes[] = 'Symfony\Component\Routing\RouteCollection';
$classes[] = 'Nelmio\ApiDocBundle\Routing\FilteredRouteCollectionBuilder';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\SerializerExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\LegacyRouteLoaderContainer';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint';
$classes[] = 'Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Encoder\EncoderFactory';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Core\Encoder\UserPasswordEncoder';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserProvider';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'FOS\RestBundle\Request\RequestBodyParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser';
$classes[] = 'Symfony\Component\Serializer\Serializer';
$classes[] = 'FOS\RestBundle\Serializer\Normalizer\FormErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ProblemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DataUriNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ArrayDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ObjectNormalizer';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata';
$classes[] = 'Symfony\Component\Serializer\Encoder\XmlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\JsonEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\YamlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\CsvEncoder';
$classes[] = 'Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\LoaderChain';
$classes[] = 'Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Twig\Environment';
$classes[] = 'Symfony\Bundle\TwigBundle\Loader\NativeFilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ExpressionExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'JMS\Serializer\Twig\SerializerRuntimeExtension';
$classes[] = 'Hateoas\Twig\Extension\LinkExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Command\DebugCommand';
$classes[] = 'Symfony\Bundle\TwigBundle\Command\LintCommand';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer';
$classes[] = 'Symfony\Bundle\TwigBundle\TemplateIterator';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Bundle\WebServerBundle\Command\ServerLogCommand';
$classes[] = 'Symfony\Bundle\WebServerBundle\Command\ServerRunCommand';
$classes[] = 'Symfony\Bundle\WebServerBundle\Command\ServerStartCommand';
$classes[] = 'Symfony\Bundle\WebServerBundle\Command\ServerStatusCommand';
$classes[] = 'Symfony\Bundle\WebServerBundle\Command\ServerStopCommand';

Preloader::preload($classes);
