@extends('admin.template')

@section('contenido')           
                  @if(\Session::has('message'))
                      @include('alerts.message')
                  @endif  
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4 class="text-center"><i class="fa fa-tasks"></i> Productos Registrados</h4>
                            <hr>
                              <thead>
                               <tr>
                                  <th class="text-center"><i class="fa fa-edit"></i> Nombre</th>
                                  <th><i class="fa fa-edit"></i> Categoria</th>
                                  <th width="300px"><i class="fa fa-edit"></i> Descripcion</th>
                                  <th width="150px"><i class="fa fa-edit"></i> MiniDescripcion</th>
                                  <th><i class="fa fa-edit"></i> Precio</th>
                                  <th><i class="fa fa-edit"></i> Imagen</th>
                                  <th><i class="fa fa-edit"></i> Visible</th>
                                  <th><i class="fa fa-edit"></i> Fecha Creacion</th> 
                                  <th><i class="fa fa-edit"></i> Acciones</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($productos as $producto)
                              <tr> 
                                  <td>{{$producto->name}}</td>
                                  <td>{{$producto->categoria->nombre}}</td>
                                  <td>{{$producto->descripcion}}</td>
                                  <td>{{$producto->extraer}}</td>
                                  <td>${{number_format($producto->precio,2)}}</td>
                                  <td><img src="../images/{{$producto->imagen}}" alt="" width="50"></td> 
                                  <td>{{$producto->visible == 1 ? "Si" : "No"}}</td>
                                  <td>{{$producto->created_at}}</td>
                                  <td> 
                                        {!!Form::open(['route'=>['panel.producto.destroy', $producto->slug], 'method' => 'DELETE'])!!}
                                        <a href="{{route('panel.producto.edit',$producto->slug)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                        <button href="" onclick="return confirm('Eliminar Registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                      {!!Form::close()!!}
                                  </td>
                             </tr> 
                              @endforeach
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                        <div class="text-center">{!!$productos->render()!!}</div>
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
@stop