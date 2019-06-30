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
            <div class="card shadow">
              
                <div class="card-header border-0">
                <h3 class="mb-0">Ruta de la Linea 34</h3>
                <!--<button class="btn btn-success float-right">Cambiar Ruta</button>-->
                </div>
                <div id="map" ></div>

                 
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
      console.log(score);
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZ6ghQusTyTIsQq_y0ME8UHiSoj_TiqCc&callback=initMap&v=3&libraries=drawing"></script>
  
  
@endsection




