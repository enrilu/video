@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Insertar Nuevo Criminal</div>

                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="">Nombre Criminal</label>
                            <input type="text" class="form-control" name="name"  placeholder="Ingresar Nombre del Criminal">
                            
                        </div>
                        <div class="form-group">
                            <label for="">Edad</label>
                            <input type="text" class="form-control" name="age" placeholder="Ingrese la Edad">
                        </div>
                        <div class="form-group">
                            <label for="">Direccion</label>
                            <input type="text" class="form-control" name="age" placeholder="Ingrese direccion">
                        </div>

                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </form>

            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
