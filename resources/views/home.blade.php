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

                    <span id="products-total">{{ $products->total() }} registros | página {{ $products->currentPage() }} 
                    de {{ $products->lastPage() }}</span>

                    <div id="alert" class="alert alert-info"></div>

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
                                <td width="20px">
                                    {!! Form::open(['route' => ['destroyProduct', $item->id], 'method' => 'DELETE']) !!}
                                        <a href="#" class="btn-delete">Eliminar</a>
                                    {!! Form::close() !!}
                                </td>
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

@section('script')
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
@endsection
