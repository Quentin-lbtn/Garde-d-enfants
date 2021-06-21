<?php

class Route {
    public static function get($route, $function){
        //get method, don't continue if method is not the 
        $method = $_SERVER['REQUEST_METHOD'];
        if($method !== 'GET'){ return; }

        //check the structure of the url
        $struct = self::checkStructure($route, $_SERVER['REQUEST_URI']);

        //if the requested url matches the one from the route
        //get the url params and run the callback passing the params
        
        if($struct){
            $params = self::getParams($route, $_SERVER['REQUEST_URI']);
            $function->__invoke($params);

            //prevent checking all other routes
            die();
        } else {
    
        }
    }

    public static function urlToArray($url1, $url2){
        //convert route and requested url to an array
        //remove empty values caused by slashes
        //and refresh the indexes of the array
        $a = array_values(array_filter(explode('/', $url1), function($val){ return $val !== ''; }));
        $b = array_values(array_filter(explode('/', $url2), function($val){ return $val !== ''; }));

        //debug mode for development
        if(true) array_shift($b);
        return array($a, $b);
    }

    public static function checkStructure($url1, $url2){
        list($a, $b) = self::urlToArray($url1, $url2);

        //if the sizes of the arrays don't match, their structures don't match either
        
        if(sizeof($a) !== sizeof($b)){
            
            return false;
        }

        //for each value from the route
        foreach ($a as $key => $value){

            // if the static values from the url don't match
            // or the dynamic values start with a '?' character
            // their structures don't match
            if($value[0] !== ':' && $value !== $b[$key] || $value[0] === ':' && $b[$key][0] === '?'){
               
                return false;
            }
        }

        //else, their structures match
        return true;
    }

    public static function getParams($url1, $url2){
        list($a, $b) = self::urlToArray($url1, $url2);

        $params = array('params' => array(), 'query' => array());

        //foreach value from the route
        foreach($a as $key => $value){
            //if it's a dynamic value
            if($value[0] == ':'){
                //get the value from the requested url and throw away the query string (if any)
                $param = explode('?', $b[$key])[0];
                $params['params'][substr($value, 1)] = $param;
            }
        }

        //get the last item from the request url and parse the query string from it (if any)
        $queryString = explode('?', end($b))[0];
        parse_str($queryString, $params['query']);

        return $params;
    }
}

?>