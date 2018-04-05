<?php

namespace LimaLessa\EcommerceIntegration;


class Application
{

    /**
     * Instância do sigleton
     * @var Application
     */
    private static $instance = null;

    /**
     * Retorna uma instância única desta classe. Se a instância ainda não existir, a cria.
     *
     * @author Ian Lessa
     * @return Application a Instância da classe.
     */
    public static function instance() : Application
    {
        if(self::$instance === null) {
            self::$instance = new Application();
        }
        return self::$instance;
    }

    /**
     * Application constructor.
     *
     * @author Ian Lessa
     */
    private function __construct($console = false)
    {
        try{

        //tratadores de erros
           // ExceptionHandler::initExceptionHandlers(MainConfig::getenv('DEBUG'));
            //ExceptionHandler::initErrorHandlers();



//            //Slim Framework
//            if($console) {
//                set_time_limit(0);
//                $argv = $GLOBALS['argv'];
//                array_shift($argv);
//
//                //Convert $argv to PATH_INFO
//                $env = \Slim\Http\Environment::mock([
//                    'SCRIPT_NAME' => $_SERVER['SCRIPT_NAME'],
//                    'REQUEST_URI' => count($argv) == 0 ? "/" : "/{$argv[0]}"
//                ]);
//
//                $settings['environment'] = $env;
//                $c = $settings;
//            }
//            else {
//                $slimSettings = [];
//                if(MainConfig::getenv('DEBUG') === 'true') {
//                    $slimSettings['displayErrorDetails'] = true;
//                }
//                $c = new \Slim\Container([
//                    'settings' => $slimSettings
//                ]);
//            }
//
//            //instanciando Slim
//            $this->slim = new \Slim\App($c);
//



            //iniciando rotas
//            if($console) {
//                Routes::initConsoleRoutes($this->slim);
//            }
//            else {
//                Routes::initWebRoutes($this->slim);
//            }

        }catch(\Exception $exception) {
            throw new Exception("Ouve um problema com a incialização básica da aplicação: " .
                $exception->getMessage());
        }

    }

    public function run()
    {

    }

}