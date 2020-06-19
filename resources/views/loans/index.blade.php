@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        Prestamos
                    </div>
                    <div>
                        <a href="{{ route('loans.create') }}" class="btn btn-primary">
                            {{__('New Loan')}}
                        </a>
                    </div>

                </div>
                
            </div>
            <div class="card-body">


                
                <table clas="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{__('Name')}}</th>
                            <th scope="col">{{__('Cantidad')}}</th>
                            <th scope="col">{{__('NumerosPagos')}}</th>
                            <th scope="col">{{__('Cuota')}}</th>
                            <th scope="col">{{__('TotalPagar')}}</th>
                            <th scope="col">{{__('FechaMinistracion')}}</th>
                            <th scope="col">{{__('FechaVencimiento')}}</th>
                             <th scope="col" style="width: 150px">{{__('Actions')}}</th>
                        </tr>     
                    </thead>
                    @foreach ($loans as $loan)
                      
                   
                    <tr>
                        <td scope="row">{{$loan->id}}</td>
                        <td>{{ $loan->client->name}}</td>
                        <td>{{ $loan->cantidad}}</td>
                        <td>{{$loan->nopago}}</td>
                        <td>{{$loan->cuota}}</td>
                        <td>{{$loan->totalpagar}}</td>
                        <td>{{$loan->fechaministracion}}</td>
                        <td>{{$loan->fechavencimiento}}</td>
                        <td>
                            <a href="" class="btn btn-outline-secondary btn-sm">
                                show
                            </a>
                            <button class="btn btn-outline-danger btn-sm btn-delete" data-id="{{ $loan->id }}">Delete</button>
                        </td>
                    </tr>
                     @endforeach
                     
                    

                    <tbody>
                        
                    </tbody>
                    
                </table>
                
            </div>
            
        </div>
        
    </div>
</div>
@endsection
