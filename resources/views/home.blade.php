@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panel administrativo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{ $products->total() }} registros | página {{ $products->currentPage() }} 
                    de {{ $products->lastPage() }}</p>
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th width="20px">ID</th>
                                <th>Nombre del producto</th>
                                <th>&nbsp;</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $item)

                            <tr>
                                <td width="20px">{{ $item ->id }}</td>
                                <td >{{ $item ->name }}</td>
                                <td width="20px"></td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    {!! $products->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
