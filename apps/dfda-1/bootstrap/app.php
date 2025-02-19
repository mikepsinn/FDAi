<?php /** @noinspection LaravelFunctionsInspection */
use App\Computers\ThisComputer;
use App\Logging\QMLogLevel;
use App\Utils\Env;
//Env::setAppEnvIfEmpty();
/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all the various parts.
|
*/
$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);
/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
*/
$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);
$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);
$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\ExceptionHandler::class
);

/*
|--------------------------------------------------------------------------
| Set Storage Path
|--------------------------------------------------------------------------
| This script allows us to override the default storage location used by
| the  application.  You may set the APP_STORAGE environment variable
| in your .env file,  if not set the default location will be used
| useStoragePath IS NECESSARY BECAUSE BUILDING ON JENKINS IS HARD-CODING JENKINS WORKSPACE PATH IN bootstrap/cache files
|
*/
$app->useStoragePath(env('APP_STORAGE', base_path() . '/storage' ) );

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script, so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

ThisComputer::setPrecision();
if($_GET['debug'] ?? false){
	Env::set('APP_DEBUG', true);
	QMLogLevel::setDebug();
}
return $app;
