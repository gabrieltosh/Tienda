@extends('admin.template')

@section('contenido')           
                  @if(\Session::has('message'))
                      @include('alerts.message')
                  @endif  
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4 class="text-center"><i class="fa fa-tasks"></i> Categorias Registrados</h4>
	                  	  	  <hr>
                              <thead>
                               <tr>
                                  <th><i class="fa fa-edit"></i> Nombre</th>
                                  <th><i class="fa fa-edit"></i> Slug</th>
                                  <th width="500px"><i class="fa fa-edit"></i> Descripcion</th>
                                  <th><i class="fa fa-edit"></i> Color</th>
                                  <th><i class="fa fa-edit"></i> Fecha de Creacion</th>
                                  <th><i class="fa fa-edit"></i> Acciones</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($categorias as $categoria)
                              <tr> 
                                  <td>{{$categoria->nombre}}</td>
                                  <td>{{$categoria->slug}}</td>
                                  <td width="500px">{{$categoria->descripcion}}</td>
                                  <td>{{$categoria->color}}</td>
                                  <td>{{$categoria->created_at}}</td> 
                                  <td> 
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                             </tr> 
                              @endforeach
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
@stop