<div class="collapse multi-collapse" id="verNoticias" style=" margin-left: -12px; margin-top: -40px;width: 103% !important; background-color: white !important; position: relative;">
    <div class="card" style=" border-color: white!important;">
      <div class="card-header">
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
		    <div class="card border border-success rounded shadow p-3 mb-5 bg-white rounded" style="display: none; border-color: #43d39e!important;">
		        <div class="card-header" style="background-color: white !important;">
		            <div class="row">
		                <div class="col-md-8">
		                    <center><h4>Noticias</h4></center>
		                </div>
		                <div class="col-md-2">
		                    @if(\Auth::user()->tipo_usuario=="Admin")
		                        <a style="width: 100%" href="#" data-toggle="modal" data-target="#crearNoticia" class="btn btn-success">Nueva</a>
		                    @endif
		                </div>
		                <div class="col-md-2">  
                            <a data-toggle="collapse" data-target="#verNoticias" aria-expanded="false" aria-controls="verNoticias" class="btn btn-primary text-white" style="border-radius: 5px; float: right;" onclick="cerrarVP()">
                              Cerrar
                            </a>
                        </div>
		            </div>
		        </div>
		        <div class="card-body">
		            
		            @foreach(noticias() as $key)
		            <h4>{{$key->titulo}}</h4>
		                <div class="row">
		                    <div class="col-md-10">
		                        <p>{{$key->contenido }}</p>
		                    </div>
		                    @if(\Auth::user()->tipo_usuario == 'Admin')
			                    <div class="col-md-2">
			                        <div class="dropdown align-self-center float-right">
			                            <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown" aria-expanded="false">
			                                <i class="uil uil-ellipsis-v"></i>
			                            </a>
			                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-177px, 20px, 0px);">
			                                <!-- item-->
			                                <!-- <a href="#" class="dropdown-item" data-toggle="modal" data-target="#editarNoticia" ><i class="uil uil-edit-alt mr-2"></i>Editar</a> -->
			                                <!-- item-->
			                                <div class="dropdown-divider"></div>
			                                <!-- item-->
			                                <a href="{{ route('eliminarNoticia', $key->id)}}" class="dropdown-item text-danger"><i class="uil uil-trash mr-2"></i>Eliminar</a>
			                            </div>
			                        </div>
			                    </div>
		                    @endif
		                </div>
		            @endforeach()
		        </div>
		    </div>
		</div>
	</div>
</div>
</div>
</div>

@include('layouts.admin.layouts.noticias.create')