<?php
// source: C:\Users\gheor\ipsos-test/config/common.neon
// source: C:\Users\gheor\ipsos-test/config/services.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_9ad27bcc40 extends Nette\DI\Container
{
	protected array $aliases = [
		'application' => 'application.application',
		'cacheStorage' => 'cache.storage',
		'database.default' => 'database.default.connection',
		'database.default.context' => 'database.default.explorer',
		'httpRequest' => 'http.request',
		'httpResponse' => 'http.response',
		'nette.authenticator' => 'security.authenticator',
		'nette.database.default' => 'database.default',
		'nette.database.default.context' => 'database.default.explorer',
		'nette.httpRequestFactory' => 'http.requestFactory',
		'nette.latteFactory' => 'latte.latteFactory',
		'nette.mailer' => 'mail.mailer',
		'nette.presenterFactory' => 'application.presenterFactory',
		'nette.templateFactory' => 'latte.templateFactory',
		'nette.userStorage' => 'security.userStorage',
		'session' => 'session.session',
		'user' => 'security.user',
	];

	protected array $wiring = [
		'Nette\DI\Container' => [['container']],
		'Nette\Application\Application' => [['application.application']],
		'Nette\Application\IPresenterFactory' => [['application.presenterFactory']],
		'Nette\Application\LinkGenerator' => [['application.linkGenerator']],
		'Nette\Caching\Storage' => [['cache.storage']],
		'Nette\Database\Connection' => [['database.default.connection']],
		'Nette\Database\IStructure' => [['database.default.structure']],
		'Nette\Database\Structure' => [['database.default.structure']],
		'Nette\Database\Conventions' => [['database.default.conventions']],
		'Nette\Database\Conventions\DiscoveredConventions' => [['database.default.conventions']],
		'Nette\Database\Explorer' => [['database.default.explorer']],
		'Nette\Http\RequestFactory' => [['http.requestFactory']],
		'Nette\Http\IRequest' => [['http.request']],
		'Nette\Http\Request' => [['http.request']],
		'Nette\Http\IResponse' => [['http.response']],
		'Nette\Http\Response' => [['http.response']],
		'Nette\Bridges\ApplicationLatte\LatteFactory' => [['latte.latteFactory']],
		'Nette\Application\UI\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Bridges\ApplicationLatte\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Mail\Mailer' => [['mail.mailer']],
		'Nette\Security\Passwords' => [['security.passwords']],
		'Nette\Security\UserStorage' => [['security.userStorage']],
		'Nette\Security\User' => [['security.user']],
		'Nette\Security\IAuthenticator' => [['security.authenticator']],
		'Nette\Http\Session' => [['session.session']],
		'Tracy\ILogger' => [['tracy.logger']],
		'Tracy\BlueScreen' => [['tracy.blueScreen']],
		'Tracy\Bar' => [['tracy.bar']],
		'Contributte\Translation\LocaleResolver' => [['translation.localeResolver']],
		'Contributte\Translation\LocalesResolvers\ResolverInterface' => [
			[
				'translation.localeResolverSession',
				'translation.localeResolverRouter',
				'translation.localeResolverParameter',
				'translation.localeResolverHeader',
			],
		],
		'Contributte\Translation\LocalesResolvers\Session' => [['translation.localeResolverSession']],
		'Contributte\Translation\LocalesResolvers\Router' => [['translation.localeResolverRouter']],
		'Contributte\Translation\LocalesResolvers\Parameter' => [['translation.localeResolverParameter']],
		'Contributte\Translation\LocalesResolvers\Header' => [['translation.localeResolverHeader']],
		'Contributte\Translation\FallbackResolver' => [['translation.fallbackResolver']],
		'Symfony\Component\Config\ConfigCacheFactoryInterface' => [['translation.configCacheFactory']],
		'Symfony\Component\Config\ConfigCacheFactory' => [['translation.configCacheFactory']],
		'Symfony\Component\Translation\Translator' => [['translation.translator']],
		'Symfony\Contracts\Translation\TranslatorInterface' => [['translation.translator']],
		'Symfony\Component\Translation\TranslatorBagInterface' => [1 => ['translation.translator']],
		'Symfony\Contracts\Translation\LocaleAwareInterface' => [1 => ['translation.translator']],
		'Nette\Localization\Translator' => [['translation.translator']],
		'Contributte\Translation\Translator' => [['translation.translator']],
		'Symfony\Component\Translation\Loader\ArrayLoader' => [['translation.loaderNeon']],
		'Symfony\Component\Translation\Loader\LoaderInterface' => [['translation.loaderNeon']],
		'Contributte\Translation\Loaders\Neon' => [['translation.loaderNeon']],
		'Tracy\IBarPanel' => [['translation.tracyPanel']],
		'Contributte\Translation\Tracy\Panel' => [['translation.tracyPanel']],
		'Nette\Routing\RouteList' => [['01']],
		'Nette\Routing\Router' => [['01']],
		'ArrayAccess' => [2 => ['01', 'application.1', 'application.3', 'application.4']],
		'Nette\Application\Routers\RouteList' => [['01']],
		'Nette\Application\UI\Presenter' => [2 => ['application.1', 'application.3', 'application.4']],
		'Nette\Application\UI\Control' => [2 => ['application.1', 'application.3', 'application.4']],
		'Nette\Application\UI\Component' => [2 => ['application.1', 'application.3', 'application.4']],
		'Nette\ComponentModel\Container' => [2 => ['application.1', 'application.3', 'application.4']],
		'Nette\ComponentModel\Component' => [2 => ['application.1', 'application.3', 'application.4']],
		'Nette\Application\IPresenter' => [
			2 => ['application.1', 'application.2', 'application.3', 'application.4', 'application.5', 'application.6'],
		],
		'Nette\Application\UI\Renderable' => [2 => ['application.1', 'application.3', 'application.4']],
		'Nette\Application\UI\StatePersistent' => [2 => ['application.1', 'application.3', 'application.4']],
		'Nette\Application\UI\SignalReceiver' => [2 => ['application.1', 'application.3', 'application.4']],
		'Nette\ComponentModel\IContainer' => [2 => ['application.1', 'application.3', 'application.4']],
		'Nette\ComponentModel\IComponent' => [2 => ['application.1', 'application.3', 'application.4']],
		'App\UI\Error\Error4xx\Error4xxPresenter' => [2 => ['application.1']],
		'App\UI\Error\Error5xx\Error5xxPresenter' => [2 => ['application.2']],
		'App\UI\Home\HomePresenter' => [2 => ['application.3']],
		'App\UI\Info\InfoPresenter' => [2 => ['application.4']],
		'NetteModule\ErrorPresenter' => [2 => ['application.5']],
		'NetteModule\MicroPresenter' => [2 => ['application.6']],
		'Contributte\Translation\Latte\Filters' => [['translation.latte.filters']],
		'Latte\Extension' => [['translation.latte.extension']],
		'Contributte\Translation\Latte\TranslatorExtension' => [['translation.latte.extension']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
	}


	public function createService01(): Nette\Application\Routers\RouteList
	{
		return App\Core\RouterFactory::createRouter();
	}


	public function createServiceApplication__1(): App\UI\Error\Error4xx\Error4xxPresenter
	{
		$service = new App\UI\Error\Error4xx\Error4xxPresenter;
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__2(): App\UI\Error\Error5xx\Error5xxPresenter
	{
		return new App\UI\Error\Error5xx\Error5xxPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__3(): App\UI\Home\HomePresenter
	{
		$service = new App\UI\Home\HomePresenter;
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->translator = $this->getService('translation.translator');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__4(): App\UI\Info\InfoPresenter
	{
		$service = new App\UI\Info\InfoPresenter;
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__5(): NetteModule\ErrorPresenter
	{
		return new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__6(): NetteModule\MicroPresenter
	{
		return new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('01'));
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application(
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
		);
		Nette\Bridges\ApplicationDI\ApplicationExtension::initializeBlueScreenPanel(
			$this->getService('tracy.blueScreen'),
			$service,
		);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel(
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('application.presenterFactory'),
		));
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		return new Nette\Application\LinkGenerator(
			$this->getService('01'),
			$this->getService('http.request')->getUrl()->withoutUserInfo(),
			$this->getService('application.presenterFactory'),
		);
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback(
			$this,
			5,
			'C:\Users\gheor\ipsos-test/temp/cache/nette.application/touch',
		));
		$service->setMapping(['*' => 'App\UI\*\**Presenter']);
		return $service;
	}


	public function createServiceCache__storage(): Nette\Caching\Storage
	{
		return new Nette\Caching\Storages\FileStorage('C:\Users\gheor\ipsos-test/temp/cache');
	}


	public function createServiceContainer(): Nette\DI\Container
	{
		return $this;
	}


	public function createServiceDatabase__default__connection(): Nette\Database\Connection
	{
		$service = new Nette\Database\Connection('sqlite::memory:', null, null, []);
		Nette\Bridges\DatabaseTracy\ConnectionPanel::initialize(
			$service,
			true,
			'default',
			true,
			$this->getService('tracy.bar'),
			$this->getService('tracy.blueScreen'),
		);
		return $service;
	}


	public function createServiceDatabase__default__conventions(): Nette\Database\Conventions\DiscoveredConventions
	{
		return new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
	}


	public function createServiceDatabase__default__explorer(): Nette\Database\Explorer
	{
		return new Nette\Database\Explorer(
			$this->getService('database.default.connection'),
			$this->getService('database.default.structure'),
			$this->getService('database.default.conventions'),
			$this->getService('cache.storage'),
		);
	}


	public function createServiceDatabase__default__structure(): Nette\Database\Structure
	{
		return new Nette\Database\Structure($this->getService('database.default.connection'), $this->getService('cache.storage'));
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		return $this->getService('http.requestFactory')->fromGlobals();
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		$service = new Nette\Http\Response;
		$service->cookieSecure = $this->getService('http.request')->isSecured();
		return $service;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\LatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\LatteFactory {
			public function __construct(
				private Container_9ad27bcc40 $container,
			) {
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('C:\Users\gheor\ipsos-test/temp/cache/latte');
				$service->setAutoRefresh(true);
				$service->setStrictTypes(true);
				$service->setStrictParsing(true);
				$service->enablePhpLinter(null);
				func_num_args() && $service->addExtension(new Nette\Bridges\ApplicationLatte\UIExtension(func_get_arg(0)));
				$service->addExtension(new Nette\Bridges\CacheLatte\CacheExtension($this->container->getService('cache.storage')));
				$service->addExtension(new Nette\Bridges\FormsLatte\FormsExtension);
				$service->addExtension(new App\UI\Accessory\LatteExtension);
				$service->addExtension($this->container->getService('translation.latte.extension'));
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): Nette\Bridges\ApplicationLatte\TemplateFactory
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory(
			$this->getService('latte.latteFactory'),
			$this->getService('http.request'),
			$this->getService('security.user'),
			$this->getService('cache.storage'),
			null,
		);
		Nette\Bridges\ApplicationDI\LatteExtension::initLattePanel($service, $this->getService('tracy.bar'), false);
		return $service;
	}


	public function createServiceMail__mailer(): Nette\Mail\Mailer
	{
		return new Nette\Mail\SendmailMailer;
	}


	public function createServiceSecurity__authenticator(): Nette\Security\IAuthenticator
	{
		return new Nette\Security\SimpleAuthenticator(['Ipsos' => '123456'], ['Ipsos' => null], ['Ipsos' => []]);
	}


	public function createServiceSecurity__passwords(): Nette\Security\Passwords
	{
		return new Nette\Security\Passwords;
	}


	public function createServiceSecurity__user(): Nette\Security\User
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'), $this->getService('security.authenticator'));
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	public function createServiceSecurity__userStorage(): Nette\Security\UserStorage
	{
		return new Nette\Bridges\SecurityHttp\SessionStorage($this->getService('session.session'));
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setOptions(['cookieSamesite' => 'Lax']);
		return $service;
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		return Tracy\Debugger::getBar();
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		return Tracy\Debugger::getBlueScreen();
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		return Tracy\Debugger::getLogger();
	}


	public function createServiceTranslation__configCacheFactory(): Symfony\Component\Config\ConfigCacheFactory
	{
		return new Symfony\Component\Config\ConfigCacheFactory(true);
	}


	public function createServiceTranslation__fallbackResolver(): Contributte\Translation\FallbackResolver
	{
		return new Contributte\Translation\FallbackResolver;
	}


	public function createServiceTranslation__latte__extension(): Contributte\Translation\Latte\TranslatorExtension
	{
		return new Contributte\Translation\Latte\TranslatorExtension($this->getService('translation.translator'));
	}


	public function createServiceTranslation__latte__filters(): Contributte\Translation\Latte\Filters
	{
		return new Contributte\Translation\Latte\Filters($this->getService('translation.translator'));
	}


	public function createServiceTranslation__loaderNeon(): Contributte\Translation\Loaders\Neon
	{
		return new Contributte\Translation\Loaders\Neon;
	}


	public function createServiceTranslation__localeResolver(): Contributte\Translation\LocaleResolver
	{
		$service = new Contributte\Translation\LocaleResolver($this);
		$service->addResolver('Contributte\Translation\LocalesResolvers\Session');
		$service->addResolver('Contributte\Translation\LocalesResolvers\Router');
		$service->addResolver('Contributte\Translation\LocalesResolvers\Parameter');
		$service->addResolver('Contributte\Translation\LocalesResolvers\Header');
		return $service;
	}


	public function createServiceTranslation__localeResolverHeader(): Contributte\Translation\LocalesResolvers\Header
	{
		return new Contributte\Translation\LocalesResolvers\Header($this->getService('http.request'));
	}


	public function createServiceTranslation__localeResolverParameter(
	): Contributte\Translation\LocalesResolvers\Parameter
	{
		return new Contributte\Translation\LocalesResolvers\Parameter($this->getService('http.request'));
	}


	public function createServiceTranslation__localeResolverRouter(): Contributte\Translation\LocalesResolvers\Router
	{
		return new Contributte\Translation\LocalesResolvers\Router($this->getService('http.request'), $this->getService('01'));
	}


	public function createServiceTranslation__localeResolverSession(): Contributte\Translation\LocalesResolvers\Session
	{
		return new Contributte\Translation\LocalesResolvers\Session(
			$this->getService('http.response'),
			$this->getService('session.session'),
		);
	}


	public function createServiceTranslation__tracyPanel(): Contributte\Translation\Tracy\Panel
	{
		$service = new Contributte\Translation\Tracy\Panel($this->getService('translation.translator'));
		$service->addLocaleResolver($this->getService('translation.localeResolverSession'));
		$service->addLocaleResolver($this->getService('translation.localeResolverRouter'));
		$service->addLocaleResolver($this->getService('translation.localeResolverParameter'));
		$service->addLocaleResolver($this->getService('translation.localeResolverHeader'));
		$service->addResource('C:\Users\gheor\ipsos-test\app\lang\messages.cs.neon', 'cs', 'messages');
		$service->addResource('C:\Users\gheor\ipsos-test\app\lang\messages.en.neon', 'en', 'messages');
		return $service;
	}


	public function createServiceTranslation__translator(): Contributte\Translation\Translator
	{
		$service = new Contributte\Translation\Translator(
			$this->getService('translation.localeResolver'),
			$this->getService('translation.fallbackResolver'),
			'cs',
			'C:\Users\gheor\ipsos-test/temp/cache/translation',
			true,
			[],
		);
		$service->setLocalesWhitelist(['en', 'cs']);
		$service->setConfigCacheFactory($this->getService('translation.configCacheFactory'));
		$service->setFallbackLocales(['cs']);
		$service->returnOriginalMessage = true;
		$service->addLoader('neon', $this->getService('translation.loaderNeon'));
		$service->addResource('neon', 'C:\Users\gheor\ipsos-test\app\lang\messages.cs.neon', 'cs', 'messages');
		$service->addResource('neon', 'C:\Users\gheor\ipsos-test\app\lang\messages.en.neon', 'en', 'messages');
		return $service;
	}


	public function initialize(): void
	{
		// di.
		(function () {
			$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		})();
		// http.
		(function () {
			$response = $this->getService('http.response');
			$response->setHeader('X-Powered-By', 'Nette Framework 3');
			$response->setHeader('Content-Type', 'text/html; charset=utf-8');
			$response->setHeader('X-Frame-Options', 'SAMEORIGIN');
			Nette\Http\Helpers::initCookie($this->getService('http.request'), $response);
		})();
		// session.
		(function () {
			$this->getService('session.session')->autoStart(false);
		})();
		// tracy.
		(function () {
			if (!Tracy\Debugger::isEnabled()) { return; }
			$logger = $this->getService('tracy.logger');
			if ($logger instanceof Tracy\Logger) $logger->mailer = [
				new Tracy\Bridges\Nette\MailSender(
					$this->getService('mail.mailer'),
					null,
					$this->getByType('Nette\Http\Request', false)?->getUrl()->getHost(),
				),
				'send',
			];
		})();
		$this->getService('tracy.bar')->addPanel($this->getService('translation.tracyPanel'));
	}
}
