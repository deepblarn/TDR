<?php

class Templates{

    private $params = []; //Definimos el array que pasara los parametros de templates

    function __construct(array $params){
        //Ahora vamos a hacer que el array que pongamos en el constructor $params haga que los parametros se hagan en el que tenemos en la clase private $params
        foreach($params as $k =>  $v){
            $this->params[$k] = $v;//Hacemos que se establezcan los valores
        }
    }

    //Haremos que se puedan añadir keys y values al array
    function __set($key, $value){
        $this->params[$key] = $value;//Hacemos que se establezca
    }

    //Esta funcion lo que hará es que cuando se le mande el parametro de el nombre de la pagina se ejecutará el sistema para sustituir X texto por otro que queramos
    public function show($page){
        $dir = __DIR__ . '/../views/' . $page . '.html'; //Ponemos la ruta en la que tengamos los templates ubicados
        $html = file_get_contents($dir);//Obtener la pagina
        foreach($this->params as $key => $val){
            //Hacemos que se sustituyan todas las variables de $this->params, solo las que en el documento html esten entre {}
            $html = str_replace("{".$key."}", $val, $html);
        }
        //Mostramos el resultado
        echo $html;

    }
}