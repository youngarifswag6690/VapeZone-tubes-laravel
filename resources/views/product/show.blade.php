@extends('layouts.app')

@section('content')
<h4>{{ $product->Product }}</h4>
<p>{{ $product->description }}</p>
<a href="{{ route('product.index') }}" class="btn btn-default">Kembali</a>
@endsection