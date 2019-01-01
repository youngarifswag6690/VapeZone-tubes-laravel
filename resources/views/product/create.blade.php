@extends('layouts.app')

@section('content')
<h4>New Product</h4>
<form action="{{ route('product.store') }}" method="post">
    {{csrf_field()}}
    <div class="form-group {{ $errors->has('product') ? 'has-error' : '' }}">
        <label for="product" class="control-label">Product</label>
        <input type="text" class="form-control" name="product" placeholder="Product">
        @if ($errors->has('product'))
            <span class="help-block">{{ $errors->first('product') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
        <label for="description" class="control-label">description</label>
        <textarea name="description" cols="30" rows="5" class="form-control"></textarea>
        @if ($errors->has('description'))
            <span class="help-block">{{ $errors->first('description') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('product.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection