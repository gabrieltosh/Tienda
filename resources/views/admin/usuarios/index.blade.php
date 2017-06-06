@extends('admin.template')

@section('contenido')           
                  @if(\Session::has('message'))
                      @include('alerts.message')
                  @endif  
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4 class="text-center"><i class="fa fa-user"></i>Usuarios Registrados</h4>
                            <hr>
                              <thead>

                               <tr>
                                  <th><i class="fa fa-edit"></i> Nombre</th>
                                  <th><i class="fa fa-edit"></i> Apellido</th>
                                  <th><i class="fa fa-edit"></i> Email</th>
                                  <th><i class="fa fa-edit"></i> Usuario</th>
                                  <th><i class="fa fa-edit"></i> Tipo</th>
                                  <th><i class="fa fa-edit"></i> Activo</th>
                                  <th><i class="fa fa-edit"></i> Direccion</th>
                                  <th><i class="fa fa-edit"></i> Fecha Registro</th>
                                  <th><i class="fa fa-edit"></i> Acciones</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($usuarios as $usuario)
                              <tr> 
                                  <td>{{$usuario->nombre}}</td>
                                  <td>{{$usuario->apellido}}</td>
                                  <td>{{$usuario->email}}</td>
                                  <td>{{$usuario->usuario}}</td>
                                  @if($usuario->tipo=='admin')
                                  <td><span class="label label-primary label-mini">{{$usuario->tipo}}</span></td>
                                  @else
                                  <td><span class="label label-success label-mini">{{$usuario->tipo}}</span></td>
                                  @endif
                                  @if($usuario->activo=='1')
                                      <td><span class="label label-info label-mini">activo</span></td>
                                      <td>{{$usuario->direccion}}</td>
                                      <td>{{$usuario->created_at}}</td>
                                      <td>
                                          <button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button>
                                          <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                          <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                      </td>   
                                  @else
                                      <td><span class="label label-warning label-mini">Desactivado</span></td>
                                      <td>{{$usuario->direccion}}</td>
                                      <td>{{$usuario->created_at}}</td>
                                      <td>
                                          <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                          <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                          <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                      </td>
                                  @endif           
                              </tr>
                              @endforeach
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
@stop