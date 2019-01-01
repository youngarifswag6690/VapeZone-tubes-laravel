@extends('layouts.app')

@section('content')
    <a href="{{ route('product.create') }}" class="btn btn-info btn-sm">New Product</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-responsive martop-sm">
        <thead>
            <th>ID</th>
            <th>Product</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td><a href="{{ route('product.show', $product->id) }}">{{ $product->Product }}</a></td>
                    <td>
                        <form action="{{ route('product.destroy', $product->id) }}" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning btn-sm">edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection