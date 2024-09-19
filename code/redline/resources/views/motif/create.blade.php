@extends('layouts.app')

@section('content')
<form action="{{route('motif.store')}}" method="POST">
    @csrf
    @method('get')
    <input type="text" name="description">
    <input type="submit" value="create">
</form>
@endsection
