@extends('layouts.app')

@section('content')

@foreach ($motifs as $motif)
    <div>
        <a href="{{route('motif.edit',['motif'=>$motif->id])}}">{{$motif->description}}</a>
    </div>
@endforeach
<div>
    <a href="{{route('motif.create')}}">Create new motif</a>
</div>
@endsection
