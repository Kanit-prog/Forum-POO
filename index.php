<?php  
    namespace App;

    require_once "app\Autoloader.php";
    Autoloader::register();
    // var_dump($_POST);

    
    use App\Router;

    define('DS', DIRECTORY_SEPARATOR);
    // DS = Annuaire de séparation
    define('ROOT_DIR', '.'.DS);
    define('PUBLIC_PATH', ROOT_DIR.'public'.DS);
    define('CSS_PATH', PUBLIC_PATH.'css'.DS);
    define('IMG_PATH', PUBLIC_PATH.'img'.DS);

    define('SERVICE_PATH', ROOT_DIR.'app'.DS);
    define('CTRL_PATH', ROOT_DIR.'controller'.DS);
    define('VIEW_PATH', ROOT_DIR.'view'.DS);

    $result = Router::handleRequest($_GET);

    ob_start();
    if(is_array($result) && array_key_exists('view', $result)){
        $data = isset($result['data']) ? $result['data'] : null;
        //La fonction isset () vérifie si une variable est définie, ce qui signifie qu'elle doit être déclarée et qu'elle n'est pas NULL.
        //Cette fonction renvoie true si la variable existe et n'est pas NULL, sinon elle retourne false.
        include VIEW_PATH.$result['view'];
    }
    else include VIEW_PATH."404.html";
    $page = ob_get_contents();
    ob_end_clean();

    include VIEW_PATH."layout.php";
    
  