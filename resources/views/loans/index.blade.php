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


                
                
            </div>
            
        </div>
        
    </div>
</div>
@endsection
