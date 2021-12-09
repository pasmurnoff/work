@extends('layouts.app')

@section('content')
  @component('components.content.wrap')
    @slot('content')
      @include('components.single.wrap')
    @endslot
  @endcomponent
@endsection
