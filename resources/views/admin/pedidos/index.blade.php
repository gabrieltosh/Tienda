@extends('admin.template')

@section('contenido')           
                  @if(\Session::has('message'))
                      @include('alerts.message')
                  @endif  
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4 class="text-center"><i class="fa fa-user"></i>Pedidos Registrados</h4>
                            <hr>
                              <thead>

                               <tr>
                                  <th><i class="fa fa-edit"></i> Usuario</th>
                                  <th><i class="fa fa-edit"></i> Subtotal</th>
                                  <th><i class="fa fa-edit"></i> Envio</th>
                                  <th><i class="fa fa-edit"></i> Total</th>
                                  <th><i class="fa fa-edit"></i> Fecha Registro</th>
                                  <th><i class="fa fa-edit"></i> Ver Detalle</th>
                                  <th><i class="fa fa-edit"></i> Eliminar</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($ordenes as $orden)
                              <tr> 
                                  <td>{{$orden->user->nombre}}</td>
                                  <td>${{number_format($orden->subtotal,2)}}</td>
                                  <td>${{number_format($orden->envio,2)}}</td>
                                  <td>${{number_format($orden->subtotal+$orden->envio,2)}}</td>
                                  <td>{{$orden->created_at}}</td>
                                  <td>
                                  <a 
                                      href="#" 
                                      class="btn btn-primary btn-detalle-pedido"
                                      data-id="{{$orden->id}}"
                                      data-path="{{route('panel.order.items')}}"
                                      data-toggle="modal"
                                      data-target="#myModal"
                                      data-token="{{csrf_token()}}"
                                  >
                                  <i class="fa fa-external-link"></i></a>
                                  </td>
                                  <td>
                                      {!!Form::open(['route'=>['panel.order.destroy', $orden->id], 'method' => 'DELETE'])!!}
                                      <button href="" onclick="return confirm('Eliminar Registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      {!!Form::close()!!}
                                  </td>         
                              </tr>
                              @endforeach
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                      <div class="text-center">{!!$ordenes->render()!!}</div>
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
              @include('admin.pedidos.detallePedido')
@stop