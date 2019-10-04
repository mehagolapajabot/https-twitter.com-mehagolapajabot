<? php
// Crear aplicación y agregar claves de
include ( ' configsql.php ' );
$ SESS1ON  =  $ con -> query ( " SELECT  *  FROM frases WHERE autorizada =  1  AND publicado =  0  LIMIT  1 " );
$ SESSION  =  $ SESS1ON -> fetch_row ();


// https://apps.twitter.com/
$ consumerKey  =  ' ' ;
$ consumerSecret  =  ' ' ;
$ oAuthToken      =  ' ' ;
$ oAuthSecret     =  ' ' ;

require_once ( ' twitteroauth.php ' );

if ( $ SESSION [ 2 ] ==  1  &&  $ SESSION [ 3 ] ==  0 ) {

 $ tweet  =  nuevo  TwitterOAuth ( $ consumerKey , $ consumerSecret , $ oAuthToken , $ oAuthSecret );
 $ msg_base  =  " mehagolapaja " ;
 // . $ Msg = $ msg_base "red de dibujos animados veo.";
        $ msg  =  $ msg_base . $ SESIÓN [ ' 1 ' ];
        if ( strlen ( $ msg ) <  140 ) { 	
        $ t  =  $ tweet -> post ( ' status / update ' , array ( ' estado '  =>  $ msg ));
        
         $ clave  =  $ clave  +  1 ;
            if ( $ con -> query ( " ACTUALIZAR frases SET publicado =  1  WHERE ID = " . $ SESSION [ 0 ]) ==  TRUE )
            {
             echo ( " la mejor salio todo bienardo " );
                echo ( ' </br> <p style = "color: red";> El estado ahora es: ' . ' </p> ' . $ SESSION [ 3 ] . ' </p> ' );
            }
            más
            {
                echo ( ' <p style = "color: blue;"> no se hizo ni a palos </p> ' );
            }
            echo ( ' </br> <center> <h2> Se acaba de mandar el siguiente twitt: </h1> </br> </br> <p style = "red";> ID: </p> <p > ' . $ SESSION [ 0 ] . ' </p> </br> ' );
    echo ( ' <p style = "red";> Frase: </p> <p> ' . $ SESSION [ 1 ] . ' </p> </br> ' );
    echo ( ' <p style = "red";> Autorizada: </p> <p> ' . $ SESSION [ 2 ] . ' </p> </center> </br> ' );
    }
    más {
        echo ( ' no se twitteo una mierda bro ' );
    }
// }


}
? >
