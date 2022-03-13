<?php

    /*
    ¡¡¡¡¡¡¡¡¡¡¡¡ TIENE QUE ESTAR SIEMPRE EL WSDLDocument.php 
    - Como se transmite la informacion --> Protocolo SOAP
    - Como se publican las funciones a las que se puede accedeer --> WSDL
    
    SOAPCLIENT
        puede usarse:
        - indicando documento WSDL
        $cliente = new SoapClient($wsdl)
        - indicando URL
            $url = 'http://127.0.0.1/Tema8/hoja08/servicio.php';
            $uri = 'http://127.0.0.1/Tema8/hoja08/';
        $cliente = new SoapClient(null,array('location'=>$url,'uri'=>$uri,'trace'=>true))

    WSDL
        para acceder al documento se suele usar ?wsdl en la url del servicio
        secciones del documento:
        - types: definiciones de los tipos de datos que se usan
        - message: define conjuntos de datos como parametros que recibe o devuelve una funcion
        - portType: cada uno es un grupo de funciones que implementa el servicio web. cada funcion se define como operation dentro de cada portType
        - binding: define como va a transmitirse la informacion de cada PORTTYPE
        - service: lista de elementos tipo port, cada port indica en que URL se puede acceder al servicio web

    SOAPSERVER
        - en caso de no existir documento WSDL
        $uri = "http://127.0.0.1/dwes/tema8/servidor.php";
        $server = new SoapServer(null, array('uri'=>$uri));

        - en caso de tener documento WSDL
        $server = new SoapServer($wsdl);

        ¡Es recomendable crear una clase que implemente los metodos que queremos publicar!
        despues hay que definir en :
        require_once("clase.php");
        $server = new SoapServer(null, array('uri'=>));
        $server->setClass('clase');
        $server->handle() --> este metodo procesa las peticiones recogiendo los datos que se reciben a traves de post y get

    GENERAR DOCUMENTO WSDL
        - crear nuevo fichero
        - contenido:
            require_once 'Calcula.php';
            require 'WSDLDocument.php';
            $wsdl = new
            WSDLDocument('Calcula',"http://127.0.0.1/URLDelServicio.php","http://127.0.0.1/URIEspacioNombres”);
            $wsdl->formatOutput = true;
            header('Content-Type: text/xml');
            echo $wsdl->saveXML();
    */
?>