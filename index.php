<?php

// autoload do Composer
use LimaLessa\EcommerceIntegration\Application;

require 'vendor/autoload.php';

try {
    \Cerberus\Config\MainConfig::loadToEnv();
}catch(\Exception $exception) { //se o arquivo .env não foi localizado
    die("Falha Geral: Não foi possível econtrar o arquivo de configuração de ambiente.");
}

Application::instance()->run();