@extends('layouts.app')

@section('content')
@if (count($results))
@foreach ($results as $result)
{{ $result->email }}
@endforeach
@endif
@endsection
