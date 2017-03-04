@extends('layouts.app')

@section('content')

@foreach ($categories as $category)
    <p>This is Category {{ $category->name }}</p>
    @foreach ($category->subCategories as $subCategory)
        <p>Sub: {{ $subCategory->name}}
    @endforeach
@endforeach

@endsection