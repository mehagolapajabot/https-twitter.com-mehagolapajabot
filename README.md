# https-twitter.com-mehagolapajabot
TwitterBot
https://github.com/mehagolapajabot 

TwitterBot es un algoritmo creado en php y MySQL para la automatización de una cuenta de Twitter, simulando ser un bot. Trabaja como una aplicación de twitter, con el token correspondiente, token de acceso y clave secreta que brinda la red social a quien solicita crear una aplicación en Twitter.

El post se encuentra en desarrollo, al igual que la aplicación / bot. Se irán agregando nuevas actualizaciones.

Por ahora cuenta con solo 2 archivos de script:

-> sendTweet.php Algoritmo que toma una frase de la base de datos enlazada y la twittea posterior al "mehagolapaja".  frase con la cual se identifica al bot.

-> buscarTweets.php Algoritmo que toma los tweets más recientes que se incluyen en la búsqueda del hashtag "#mehagolapaja". Tiene diferentes 'filtraciones' para que no contengan spam ni enlaces / sitios maliciosos. Los agrega una base de datos si es que la frase no existe. Y envía un correo con los informes enviados.

TwitterBot

var Twit =  require ( 'mehagolapaja' 

var  T  =  nuevo  Twit ({
clave_consumidor :          '2zkOZXvEPxVlXTcCikCbfHGCC ' 
consumer_secret :       ' KEv2srzJIvHTYOxwS43RcyW7T1wdkmsFOWdQPWqgdNydRalPOs',
access_token:  '1179097431406977024-wshf8ZJG8PRJNMDivwNVNkXNZnf5CA
access_token_secret :   'kKc5phouRpxKS2XNhYVSSAyX0GLTsiChlGqb6LuaOp0XB' ,
  timeout_ms :            60 * 1000 ,   // tiempo de espera de solicitud HTTP opcional para aplicar a todas las solicitudes. 
  strictlySSL :             verdadero ,      // opcional: requiere que los certificados SSL sean válidos.
})

// 
//   tuitea 'mehagolapaja' 
//
 T . post ( ' status / update ' , {status :  ' mehagolapaja ' }, function (tweet ) {
   console . log (tweet)
})

// 
//   búsqueda de Twitter para todos los tweets que contengan la palabra 'mehagolapaja' desde julio 11, 2011 
//
 T . get ( ' search / tweets ' , {q :  ' mehagolapaja desde: 2011-07-11 ' , count :  100 }, function (tweet) {
   console . log (tweet)
})
