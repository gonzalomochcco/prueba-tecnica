@extends('layouts.app')

@section('content')
<div class="container">

    {{--@dump($empresas)--}}



    <h1>Listado de Empresas</h1>

    <br><br>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre Empresa</th>
            <th scope="col">Ruc</th>
            <th scope="col">Razon Social</th>
            <th scope="col">Direccion</th>
            <th scope="col">Opciones</th>            
          </tr>
        </thead>
        <tbody>

            {{--$empresas[0]->sede->nombre--}}   
         
            @foreach ($empresas as $key => $item )
                
                <tr>
                    <th scope="row">{{ $key + 1  }}</th>
                    <td>{{ $item->nombre_empresa }} </td>                    
                    <td>{{ $item->ruc }}  </td>
                    <td>{{ $item->razon_social }}</td>
                    <td>{{ $item->direccion }}</td>
                    <td>
                            
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal_sedes" >L. Sedes</button>
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal_trabajadores" >L. Trabajadores</button>
                        <a type="button" class="btn btn-sm btn-primary">Configuración</a>

                    </td>                    
                </tr>

            @endforeach

        
          
        </tbody>
      </table>

</div>

<div class="modal fade" id="modal_sedes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Listado de Sedes</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal_trabajadores" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel2">Listado de Trabajadores<h1>
          <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


@endsection
