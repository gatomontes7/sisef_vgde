@extends('inicio.inicio')
@section('contenido')
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="row">
                    <div class="col col-lg-2">
                        <h5 class="m-0">Nueva Plaga</h5>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="{{url('plaga')}}" method="post">
                @csrf
                    <div class="card-body row">
                        <div class="form-group col col-lg-6">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre" required minlength="0" maxlength="30">
                        </div>
                        <div class="form-group col col-lg-6">
                            <label for="exampleInputPassword1">Clima</label>
                            <input type="text" class="form-control" name="clima" placeholder="Clima" required minlength="0" maxlength="30">
                        </div>
                        <div class="form-group col col-lg-12">
                            <label for="exampleInputPassword1">Descripción</label>
                            <textarea type="text" class="form-control" name="descripcion" placeholder="Descrcipcion" required minlength="0" maxlength="600"></textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection