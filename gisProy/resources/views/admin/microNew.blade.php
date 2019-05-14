@extends('layouts.app')
@section('header')
<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->      
</div>
@endsection

@section('contentadm')
<!-- Page content -->
<div class="container-fluid mt--7">
    <div class="row">
        
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                    <h3 class="mb-0">Registre el nuevo micro</h3>
                    </div>
                    <div class="col-4 text-right">
                    <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                    </div>
                </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('microSave') }}" class="smart-form" role="form" method="post">
                            {{csrf_field()}}
                        <h6 class="heading-small text-muted mb-4">Introduzca los siguientes datos</h6>
                        <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Placa</label>
                                <input type="text" id="placa" name="placa" class="form-control form-control-alternative" placeholder="placa.." value="">
                            </div>
                            </div>
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Modelo</label>
                                <input type="text" id="modelo" name="modelo"class="form-control form-control-alternative" placeholder="modelo..">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Capacidad</label>
                                <input type="number" id="capacidad" name="capacidad" class="form-control form-control-alternative" placeholder="capacidad.." value="">
                            </div>
                            </div>                    
                        </div>
                        </div>
                        <hr class="my-4" />
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-primary">
                                Guardar
                            </button>                
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>     
</div>
@endsection