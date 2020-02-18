<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {

              background-image: url("https://s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2017/11/22114910/lotes-en-mendoza-1.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  text-align: center;
  font-family: helvetica;

            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #map{
              margin: auto
            }


            #map {
  background-color: rgb(255, 255, 255, .5);
  margin: auto;
  width: 200px;
  min-height: 281px;
  padding: 10px;
  border: 1px solid;
  border-radius: 2.5%;
  text-align: center;
  
            }
          
            

.header {
  background: url(../img/bg-header.jpeg) no-repeat center;
  background-size: cover;

}

.header .navbar {
  background-color: transparent !important;
}
 #todo{
  background-color: rgb(255, 255, 255, .5);
  margin: auto;
  height: 150px;
  width: 1000px; 
  min-height: 50px;
  padding: 10px;
  border: 1px solid;
  border-radius: 2.5%;
  text-align: center;
  text-align: center;
  font-family: helvetica;
}


        </style>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin="" />

  <script src="https://unpkg.com/jquery@3.4.1/dist/jquery.min.js"
    integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin=""></script>
  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
    integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
    crossorigin=""></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>



    </head>
    <body>
    <ul>
       
        <li>

            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </li>
    </ul>

    <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
          
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      
      
      
      </div>
    </nav>
  </header>
    <br><br>

    <div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">    <div  style="background-color: rgba(0, 0, 0, 0.0)"><H1 align="center " >RED WINE</H1> </div>
</div>
  <div class="col-sm-4"></div>
</div>
   <br><br>
  
  
  <div  class="card"   id="map" style="width: 1000px; height: 440px; border: 1px solid #AAA;">
  
  </div>

<div id="todo" >
<div class="container">
                        <h2>Descarga de la APP</h2>
                        <p>Toma por mirón</p>

                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Open modal
                        </button>

                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Puto</h4>
                                        




                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <a href="https://github.com/twbs/bootstrap/archive/v4.3.1.zip" class="btn btn-lg btn-bd-primary" onclick="ga('send', 'event', 'Examples', 'Hero', 'Download');">
                                            <form>
                                                <input type="button" onClick="incrementar()" value="Descargar Aplicación Version 1.1 'Vamos a volver'">
                                            </form>
                                        </a>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>



</div>


<!--
  <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Id</th>
               <th>Nombre</th>
               <th>Direccion</th>
               <th>Latitud</th>
               <th>longitud</th>
               <th>Foto</th>
               <th>Comentario</th>

               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($maps->count())  
              @foreach($maps as $map)  
              <tr>
                <td>{{$map->id}}</td>
                <td>{{$map->nombre}}</td>
                <td>{{$map->direccion}}</td>
                <td>{{$map->lat}}</td>
                <td>{{$map->lng}}</td>
                <td>{{$map->foto}}</td>
                <td>{{$map->comentario}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('NegocioController@edit', $map->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('NegocioController@destroy', $map->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table>

-->


<div id="sfcsbdemcjbt4rcqt4a8br1fxbhaspakrgd"></div>
<script type="text/javascript" src="https://counter4.stat.ovh/private/counter.js?c=sbdemcjbt4rcqt4a8br1fxbhaspakrgd&down=async" async></script>
<noscript><a href="https://www.freecounterstat.com" title="visitors counter"><img src="https://counter4.stat.ovh/private/freecounterstat.php?c=sbdemcjbt4rcqt4a8br1fxbhaspakrgd" border="0" title="visitors counter" alt="visitors counter"></a></noscript>




  </div>
  <script type='text/javascript' src='maps/markers.js'></script>
  <script type='text/javascript' src='maps/leaf-demo.js'></script>



<script>

const map = {!! json_encode($maps) !!};


///  //Cargando nuestro mapa
  var maps = L.map('map').
      setView([-32.906861, -68.846071], 
      15); //[38.6202, -0.5731] es la latitud y longitud de la zona que queremos mostrar, en nuestro caso Ibi 
      L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
          maxZoom: 18
      }).addTo(maps);


     $.each(map, function(i, item) {      
///////MARCADOR1
alert(map[i].lat, map[i].lng);
var marker = L.marker([map[i].lat, map[i].lng]).addTo(maps);
marker.bindPopup("<b>Hola!</b><br>Sipe Informática se situa aquí."



).openPopup();
//
});

</script>







    </body>
</html>
