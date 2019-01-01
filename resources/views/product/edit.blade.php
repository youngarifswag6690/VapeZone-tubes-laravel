@extends('layouts.app')

@section('content')
<h4>edit product</h4>
<form action="{{ route('product.update', $product->id) }}" method="post">
    {{csrf_field()}}
    {{ method_field('PUT') }}
    <div class="form-group {{ $errors->has('product') ? 'has-error' : '' }}">
        <label for="product" class="control-label">Product</label>
        <input type="text" class="form-control" name="product" placeholder="Product" value="{{ $product->product }}">
        @if ($errors->has('product'))
            <span class="help-block">{{ $errors->first('product') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
        <label for="description" class="control-label">description</label>
        <textarea name="description" cols="30" rows="5" class="form-control">{{ $product->description }}</textarea>
        @if ($errors->has('content'))
            <span class="help-block">{{ $errors->first('description') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('product.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection