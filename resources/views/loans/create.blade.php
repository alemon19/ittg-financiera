@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        Prestamos crea
                    </div>
                    <div>
                        <a href="{{ route('loans.index') }}" class="btn btn-danger">
                            {{__('Cancelar')}}
                        </a>
                    </div>

                </div>
                
            </div>
            <div class="card-body">
                

                <form action="{{ route('loans.store') }}" method="POST">
                    @csrf
                    <div class="form-group form-row">
                         <div class="col-md-6">
                            <label for="name">{{__('client_id')}}</label>
                            <select name="client_id" id="client_id" class="form-control @error('name') is-invalid @enderror">

                                @foreach($clients as $client)
                                <option value="{{ $client['id'] }}">{{$client['name']}} </option>

                                @endforeach

                                @error('client_id')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                                
                            </select>
                                
                           

                            
                        </div>
                         <div class="col-md-6">
                            <label for="name">{{__('cantidad')}}</label>
                            <input type="text" name="cantidad" id="cantidad" class="form-control @error('cantidad') is-invalid @enderror">

                            @error('cantidad')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror

                        </div>
                        
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-4">
                            <label for="name">{{__('Numero Pagos')}}</label>
                            <input type="text" name="nopago" id="nopago" class="form-control @error('nopago') is-invalid @enderror">

                            @error('nopago')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            
                        </div>
                         <div class="col-md-4">
                            <label for="name">{{__('Cuota')}}</label>
                            <input type="text" name="cuota" id="cuota" class="form-control @error('cuota') is-invalid @enderror">
                            
                            @error('cuota')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror


                        </div>
                        <div class="col-md-4">
                            <label for="name">{{__('TotalPagar')}}</label>
                            <input type="text" name="totalpagar" id="totalpagar" class="form-control @error('totalpagar') is-invalid @enderror">

                            @error('totalpagar')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            
                        </div>


                       
                        
                    </div>

                     <div class="form-group form-row">
                        <div class="col-md-6">
                            <label for="name">{{__('FechaMinistracion')}}</label>
                            <input type="date" name="fechaministracion" id="fechaministracion" class="form-control @error('fechaministracion') is-invalid @enderror">

                            @error('fechaministracion')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            
                        </div>
                         <div class="col-md-6">
                            <label for="name">{{__('FechaVencimiento')}}</label>
                            <input type="date" name="fechavencimiento" id="fechavencimiento" class="form-control @error('fechavencimiento') is-invalid @enderror">

                            @error('fechavencimiento')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg">{{__('Create')}}</button>
                        
                    </div>

                </form>











                
            </div>
            
        </div>
        
    </div>
</div>
@endsection