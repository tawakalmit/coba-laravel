@extends('layouts.app', ['title' => 'Homepage'])

@section('content')

@component('components.alert')

  @slot('title')
  kambing
  @endslot

  <x-new>
    <x-slot name="sapi">
    ini adalah komponen new dari passing data
    </x-slot>
  </x-new>

<p>satu</p>
@endcomponent

ini adalah halaman beranda

@endsection