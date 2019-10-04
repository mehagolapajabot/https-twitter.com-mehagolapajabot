<? php
// Crear aplicación y agregar claves de
include ( ' configsql.php ' );
$ SESS1ON  =  $ con -> query ( " SELECT  *  FROM frases WHERE autorizada =  1  AND publicado =  0  LIMIT  1 " );
$ SESSION  =  $ SESS1ON -> fetch_row ();


// https://apps.twitter.com
var Twit = require ( 'mehagolapaja'

var T = nuevo Twit ({ clave_consumidor : '2zkOZXvEPxVlXTcCikCbfHGCC ' consumer_secret : ' KEv2srzJIvHTYOxwS43RcyW7T1wdkmsFOWdQPWqgdNydRalPOs', access_token: '1179097431406977024-wshf8ZJG8PRJNMDivwNVNkXNZnf5CA access_token_secret : 'kKc5phouRpxKS2XNhYVSSAyX0GLTsiChlGqb6LuaOp0XB' , timeout_ms : 60 * 1000 , // tiempo de espera de solicitud HTTP opcional para aplicar a todas las solicitudes. strictlySSL : verdadero , // opcional: requiere que los certificados SSL sean válidos. })

// // tuitea 'mehagolapaja' // T . post ( ' status / update ' , {status : ' mehagolapaja ' }, function (tweet ) { console . log (tweet) })

// // búsqueda de Twitter para todos los tweets que contengan la palabra 'mehagolapaja' desde julio 11, 2011 // T . get ( ' search / tweets ' , {q : ' mehagolapaja desde: 2011-07-11 ' , count : 100 }, function (tweet) { console . log (tweet) })
