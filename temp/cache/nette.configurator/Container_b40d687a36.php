<?php
// source: C:\xampp\htdocs\Zbysaweb\app/config/common.neon
// source: C:\xampp\htdocs\Zbysaweb\app/config/local.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_b40d687a36 extends Nette\DI\Container
{
	protected $tags = [
		'nette.inject' => [
			'application.1' => true,
			'application.2' => true,
			'application.3' => true,
			'application.4' => true,
			'application.5' => true,
			'application.6' => true,
		],
	];

	protected $types = ['container' => 'Nette\DI\Container'];

	protected $aliases = [
		'application' => 'application.application',
		'cacheStorage' => 'cache.storage',
		'database.default' => 'database.default.connection',
		'httpRequest' => 'http.request',
		'httpResponse' => 'http.response',
		'nette.cacheJournal' => 'cache.journal',
		'nette.database.default' => 'database.default',
		'nette.database.default.context' => 'database.default.context',
		'nette.httpRequestFactory' => 'http.requestFactory',
		'nette.latteFactory' => 'latte.latteFactory',
		'nette.mailer' => 'mail.mailer',
		'nette.presenterFactory' => 'application.presenterFactory',
		'nette.templateFactory' => 'latte.templateFactory',
		'nette.userStorage' => 'security.userStorage',
		'router' => 'routing.router',
		'session' => 'session.session',
		'user' => 'security.user',
	];

	protected $wiring = [
		'Nette\DI\Container' => [['container']],
		'Nette\Application\Application' => [['application.application']],
		'Nette\Application\IPresenterFactory' => [['application.presenterFactory']],
		'Nette\Application\LinkGenerator' => [['application.linkGenerator']],
		'Nette\Caching\Storages\IJournal' => [['cache.journal']],
		'Nette\Caching\IStorage' => [['cache.storage']],
		'Nette\Database\Connection' => [['database.default.connection']],
		'Nette\Database\IStructure' => [['database.default.structure']],
		'Nette\Database\Structure' => [['database.default.structure']],
		'Nette\Database\IConventions' => [['database.default.conventions']],
		'Nette\Database\Conventions\DiscoveredConventions' => [['database.default.conventions']],
		'Nette\Database\Context' => [['database.default.context']],
		'Nette\Http\RequestFactory' => [['http.requestFactory']],
		'Nette\Http\IRequest' => [['http.request']],
		'Nette\Http\Request' => [['http.request']],
		'Nette\Http\IResponse' => [['http.response']],
		'Nette\Http\Response' => [['http.response']],
		'Nette\Bridges\ApplicationLatte\ILatteFactory' => [['latte.latteFactory']],
		'Nette\Application\UI\ITemplateFactory' => [['latte.templateFactory']],
		'Nette\Mail\Mailer' => [['mail.mailer']],
		'Nette\Routing\RouteList' => [['routing.router']],
		'Nette\Routing\Router' => [['routing.router']],
		'Nette\Application\IRouter' => [['routing.router']],
		'ArrayAccess' => [2 => ['routing.router', 'application.1', 'application.2', 'application.4']],
		'Countable' => [2 => ['routing.router']],
		'IteratorAggregate' => [2 => ['routing.router']],
		'Traversable' => [2 => ['routing.router']],
		'Nette\Application\Routers\RouteList' => [['routing.router']],
		'Nette\Security\Passwords' => [['security.passwords']],
		'Nette\Security\IUserStorage' => [['security.userStorage']],
		'Nette\Security\User' => [['security.user']],
		'Nette\Http\Session' => [['session.session']],
		'Tracy\ILogger' => [['tracy.logger']],
		'Tracy\BlueScreen' => [['tracy.blueScreen']],
		'Tracy\Bar' => [['tracy.bar']],
		'Nette\Security\IAuthenticator' => [['authenticator']],
		'UserClass' => [['authenticator']],
		'baseModel' => [['baseModel', 'pdfModel', 'supplierModel', 'customerModel', 'factureModel']],
		'pdfModel' => [['pdfModel']],
		'supplierModel' => [['supplierModel']],
		'customerModel' => [['customerModel']],
		'factureModel' => [['factureModel']],
		'BasePresenter' => [2 => ['application.1', 'application.4']],
		'Nette\Application\UI\Presenter' => [2 => ['application.1', 'application.2', 'application.4']],
		'Nette\Application\UI\Control' => [2 => ['application.1', 'application.2', 'application.4']],
		'Nette\Application\UI\Component' => [2 => ['application.1', 'application.2', 'application.4']],
		'Nette\ComponentModel\Container' => [2 => ['application.1', 'application.2', 'application.4']],
		'Nette\ComponentModel\Component' => [2 => ['application.1', 'application.2', 'application.4']],
		'Nette\Application\UI\IRenderable' => [2 => ['application.1', 'application.2', 'application.4']],
		'Nette\ComponentModel\IContainer' => [2 => ['application.1', 'application.2', 'application.4']],
		'Nette\ComponentModel\IComponent' => [2 => ['application.1', 'application.2', 'application.4']],
		'Nette\Application\UI\ISignalReceiver' => [2 => ['application.1', 'application.2', 'application.4']],
		'Nette\Application\UI\IStatePersistent' => [2 => ['application.1', 'application.2', 'application.4']],
		'Nette\Application\IPresenter' => [
			2 => ['application.1', 'application.2', 'application.3', 'application.4', 'application.5', 'application.6'],
		],
		'App\factureModule\Presenters\HomepagePresenter' => [2 => ['application.1']],
		'App\Presenters\Error4xxPresenter' => [2 => ['application.2']],
		'App\Presenters\ErrorPresenter' => [2 => ['application.3']],
		'App\publicModule\Presenters\HomepagePresenter' => [2 => ['application.4']],
		'NetteModule\ErrorPresenter' => [2 => ['application.5']],
		'NetteModule\MicroPresenter' => [2 => ['application.6']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [
			'appDir' => 'C:\xampp\htdocs\Zbysaweb\app',
			'wwwDir' => 'C:\xampp\htdocs\Zbysaweb\www',
			'vendorDir' => 'C:\xampp\htdocs\Zbysaweb\vendor',
			'debugMode' => true,
			'productionMode' => false,
			'consoleMode' => false,
			'tempDir' => 'C:\xampp\htdocs\Zbysaweb\app/../temp',
		];
	}


	public function createServiceApplication__1(): App\factureModule\Presenters\HomepagePresenter
	{
		$service = new App\factureModule\Presenters\HomepagePresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__2(): App\Presenters\Error4xxPresenter
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__3(): App\Presenters\ErrorPresenter
	{
		return new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__4(): App\publicModule\Presenters\HomepagePresenter
	{
		$service = new App\publicModule\Presenters\HomepagePresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
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
		return new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('routing.router'));
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application(
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response')
		);
		$service->catchExceptions = false;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel(
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('application.presenterFactory')
		));
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		return new Nette\Application\LinkGenerator(
			$this->getService('routing.router'),
			$this->getService('http.request')->getUrl()->withoutUserInfo(),
			$this->getService('application.presenterFactory')
		);
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback(
			$this,
			5,
			'C:\xampp\htdocs\Zbysaweb\app/../temp/cache/nette.application/touch'
		));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		return $service;
	}


	public function createServiceAuthenticator(): UserClass
	{
		return new UserClass($this->getService('database.default.context'), $this->getService('security.passwords'));
	}


	public function createServiceBaseModel(): baseModel
	{
		return new baseModel($this->getService('database.default.context'), $this, $this->getService('latte.latteFactory'));
	}


	public function createServiceCache__journal(): Nette\Caching\Storages\IJournal
	{
		return new Nette\Caching\Storages\SQLiteJournal('C:\xampp\htdocs\Zbysaweb\app/../temp/cache/journal.s3db');
	}


	public function createServiceCache__storage(): Nette\Caching\IStorage
	{
		return new Nette\Caching\Storages\FileStorage('C:\xampp\htdocs\Zbysaweb\app/../temp/cache', $this->getService('cache.journal'));
	}


	public function createServiceContainer(): Container_b40d687a36
	{
		return $this;
	}


	public function createServiceCustomerModel(): customerModel
	{
		return new customerModel($this->getService('database.default.context'), $this, $this->getService('latte.latteFactory'));
	}


	public function createServiceDatabase__default__connection(): Nette\Database\Connection
	{
		$service = new Nette\Database\Connection('mysql:host=127.0.0.1;dbname=zbysaweb', 'root', '', ['lazy' => true]);
		$this->getService('tracy.blueScreen')->addPanel(['Nette\Bridges\DatabaseTracy\ConnectionPanel', 'renderException']);
		Nette\Database\Helpers::createDebugPanel($service, true, 'default');
		return $service;
	}


	public function createServiceDatabase__default__context(): Nette\Database\Context
	{
		return new Nette\Database\Context(
			$this->getService('database.default.connection'),
			$this->getService('database.default.structure'),
			$this->getService('database.default.conventions'),
			$this->getService('cache.storage')
		);
	}


	public function createServiceDatabase__default__conventions(): Nette\Database\Conventions\DiscoveredConventions
	{
		return new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
	}


	public function createServiceDatabase__default__structure(): Nette\Database\Structure
	{
		return new Nette\Database\Structure($this->getService('database.default.connection'), $this->getService('cache.storage'));
	}


	public function createServiceFactureModel(): factureModel
	{
		return new factureModel($this->getService('database.default.context'), $this, $this->getService('latte.latteFactory'));
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
		return new Nette\Http\Response;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\ILatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\ILatteFactory {
			private $container;


			public function __construct(Container_b40d687a36 $container)
			{
				$this->container = $container;
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('C:\xampp\htdocs\Zbysaweb\app/../temp/cache/latte');
				$service->setAutoRefresh();
				$service->setContentType('html');
				Nette\Utils\Html::$xhtml = false;
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): Nette\Application\UI\ITemplateFactory
	{
		return new Nette\Bridges\ApplicationLatte\TemplateFactory(
			$this->getService('latte.latteFactory'),
			$this->getService('http.request'),
			$this->getService('security.user'),
			$this->getService('cache.storage')
		);
	}


	public function createServiceMail__mailer(): Nette\Mail\Mailer
	{
		return new Nette\Mail\SendmailMailer;
	}


	public function createServicePdfModel(): pdfModel
	{
		return new pdfModel($this->getService('database.default.context'), $this, $this->getService('latte.latteFactory'));
	}


	public function createServiceRouting__router(): Nette\Application\Routers\RouteList
	{
		return App\Router\RouterFactory::createRouter();
	}


	public function createServiceSecurity__passwords(): Nette\Security\Passwords
	{
		return new Nette\Security\Passwords;
	}


	public function createServiceSecurity__user(): Nette\Security\User
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'), $this->getService('authenticator'));
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	public function createServiceSecurity__userStorage(): Nette\Security\IUserStorage
	{
		return new Nette\Http\UserStorage($this->getService('session.session'));
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('1 days');
		return $service;
	}


	public function createServiceSupplierModel(): supplierModel
	{
		return new supplierModel($this->getService('database.default.context'), $this, $this->getService('latte.latteFactory'));
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


	public function initialize()
	{
		// constants.
		(function () {
			define('WEB_ADRESS', 'http://zbysaweb.loc/');
		})();
		// di.
		(function () {
			$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		})();
		// forms.
		(function () {
			Nette\Forms\Validator::$messages[Nette\Forms\Form::EQUAL] = 'Zadejte %s.';
			Nette\Forms\Validator::$messages[Nette\Forms\Form::NOT_EQUAL] = 'Tato hodnota by neměla být %s.';
			Nette\Forms\Validator::$messages[Nette\Forms\Form::FILLED] = 'Toto pole je povinné.';
			Nette\Forms\Validator::$messages[Nette\Forms\Form::BLANK] = 'Toto pole by mělo být prázdné.';
			Nette\Forms\Validator::$messages[Nette\Forms\Form::MIN_LENGTH] = 'Zadejte prosím alespoň %d znaků.';
			Nette\Forms\Validator::$messages[Nette\Forms\Form::MAX_LENGTH] = 'Zadejte prosím maximálně %d znaků.';
			Nette\Forms\Validator::$messages[Nette\Forms\Form::LENGTH] = 'Zadejte prosím hodnotu %d až %d znaků dlouho.';
			Nette\Forms\Validator::$messages[Nette\Forms\Form::EMAIL] = 'Zadejte platnou e-mailovou adresu.';
			Nette\Forms\Validator::$messages[Nette\Forms\Form::URL] = 'Zadejte prosím platné URL.';
			Nette\Forms\Validator::$messages[Nette\Forms\Form::INTEGER] = 'Zadejte platné celé číslo.';
			Nette\Forms\Validator::$messages[Nette\Forms\Form::FLOAT] = 'Zadejte platné číslo.';
			Nette\Forms\Validator::$messages[Nette\Forms\Form::MIN] = 'Zadejte prosím hodnotu větší nebo rovnou %d.';
			Nette\Forms\Validator::$messages[Nette\Forms\Form::MAX] = 'Zadejte prosím hodnotu menší nebo rovnou %d.';
			Nette\Forms\Validator::$messages[Nette\Forms\Form::RANGE] = 'Zadejte hodnotu mezi %d a %d.';
			Nette\Forms\Validator::$messages[Nette\Forms\Form::MAX_FILE_SIZE] = 'Velikost nahraného souboru může být nejvýše %d bytů.';
			Nette\Forms\Validator::$messages[Nette\Forms\Form::MAX_POST_SIZE] = 'Nahraná data překračují limit %d bytů.';
			Nette\Forms\Validator::$messages[Nette\Forms\Form::MIME_TYPE] = 'Nahraný soubor není v očekávaném formátu.';
			Nette\Forms\Validator::$messages[Nette\Forms\Form::IMAGE] = 'Nahraný soubor musí být obraz ve formátu JPEG, GIF, PNG nebo WebP.';
			Nette\Forms\Validator::$messages[Nette\Forms\Controls\SelectBox::VALID] = 'Vyberte prosím platnou možnost.';
			Nette\Forms\Validator::$messages[Nette\Forms\Controls\UploadControl::VALID] = 'Při nahrávání souboru došlo k chybě.';
			Nette\Forms\Validator::$messages[Nette\Forms\Controls\CsrfProtection::PROTECTION] = 'Vaše relace vypršela. Vraťte se na domovskou stránku a zkuste to znovu.';
		})();
		// http.
		(function () {
			$response = $this->getService('http.response');
			$response->setHeader('X-Powered-By', 'Nette Framework 3');
			$response->setHeader('Content-Type', 'text/html; charset=utf-8');
			$response->setHeader('X-Frame-Options', 'SAMEORIGIN');
			$response->setCookie('nette-samesite', '1', 0, '/', null, null, true, 'Strict');
		})();
		// session.
		(function () {
			$this->getService('session.session')->exists() && $this->getService('session.session')->start();
		})();
		// tracy.
		(function () {
			Tracy\Debugger::getLogger()->mailer = [new Tracy\Bridges\Nette\MailSender($this->getService('mail.mailer')), 'send'];
			$this->getService('session.session')->start();
			Tracy\Debugger::dispatch();
		})();
	}
}
