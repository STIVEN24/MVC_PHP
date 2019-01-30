<?php namespace config;
class enrutador
{
    public static function run(request $request)
    {
        $controller = $request->getController().'Controller';
        $url = ROOT."controllers".DS.$controller.".php";
        $method = $request->getMethod();
        $parameter = $request->getParameter();
        
        if (is_readable($url))
        {
            require_once $url;
            $show = "controllers\\".$controller;
            $controller = new $show;
            if (!isset($parameter)) {
                $data = call_user_func(array($controller, $method));
            } else {
                $data = call_user_func_array(array($controller, $method), $parameter);
            }
        }
        
        $url = ROOT.'public'.DS.'templates'.DS.$request->getController().DS.$request->getMethod().'.php';
        if (is_readable($url))
        {
            require_once $url;
        } else {
            echo "<b>Esta página no se encuentra</b><br><a href=".URL."user/read>Volver</a>";
        } 

    }
}