@extends('layouts.app')
@section('header')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
        <!-- Card stats -->
        <div class="row">
            <div class="col-xl-3 col-lg-6">
            </div>
            <div class="col-xl-3 col-lg-6">
            </div>
            <div class="col-xl-3 col-lg-6">
            </div>    
           </div>
        </div>
    </div>
</div>

@endsection

@section('contentadm')


<div class="container-fluid mt--7">
    <!-- Table -->
    <div class="row">
        <div class="col">
        <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                    <h3 class="mb-0">Registre la nueva ruta</h3>
                    </div>
                    <div class="col-4 text-right">
                    <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                    </div>
                </div>
                </div>
            <div class="card shadow">
              <form method="POST" action="{{ route('rutaStore')}}">
                {{csrf_field()}}
                    
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Nombre</label>
                                <input type="text" id="nombre" name="nombre" class="form-control form-control-alternative" placeholder="nombre.." value="">
                            </div>
                            </div>                            
                        </div>
                        
                    </div>
                <div class="card-header border-0">
                <h3 class="mb-0">Marque la ruta completa</h3>
                <!--<button class="btn btn-success float-right">Cambiar Ruta</button>-->
                </div>
                <div id="map"></div>
              
               <input id="areglo" name="latLog" style="display:none" type="text" class="lg-12"/>
                
               <!--<button type="button"  onclick="intercambiar()">Terminar Ruta</button>-->
               <button type="submit" class="btn btn-success btn-block">Guardar</button>
              </form>
            </div>  
        </div>   
    </div> 
</div>        
             

<style>
  #map{
    background: grey;
    height: 500px;
  }
</style>




<script>
      var map;
      var copia=[];
      var poly;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: {lat: -17.7681, lng: -63.1787}
        });

        poly = new google.maps.Polyline({
          strokeColor: '#000000',
          strokeOpacity: 1.0,
          strokeWeight: 3
        });
        poly.setMap(map);

        map.addListener('click', addLatLng);
      }
      function addLatLng(event) {
        var path = poly.getPath();
        path.push(event.latLng);
        copia.push(event.latLng);
        document.getElementById('areglo').value=copia.toString();
        if(path.getLength()==1){
        var marker = new google.maps.Marker({
          position: event.latLng,
          title: '#' + path.getLength(),
          map: map
        });
        }
      }


    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdG9dbToS4EEPT5rvxhdbLKZxiG6l8YPI&callback=initMap&v=3&libraries=drawing"></script>
  
  
@endsection




