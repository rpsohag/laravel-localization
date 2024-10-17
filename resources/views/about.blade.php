@extends('layouts.master')
@section('content')
<div class="flex flex-col justify-center items-center py-8">
    <h1 class="text-xl py-7">{{ $translation->title }}</h1>
    <div>
      {!! $translation->body !!}
    </div>
</div>
@endsection