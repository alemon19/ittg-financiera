@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        Importar Clientes
                    </div>
                    <div>
                        
                        
                    </div>

                </div>
                
            </div>
            <div class="card-body">

<form action="upload" method="POST" enctype="multipart/form-data">
	<input type="file" name="lista"/>
	@csrf
	<br>
	<br>
	<button type="submit"> subir archivo</button>
</form>







                
            </div>
            
        </div>
        
    </div>
</div>
@endsection