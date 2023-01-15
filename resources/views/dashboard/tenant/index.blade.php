@extends('dashboard.layouts.app')
@section('title')
    @lang('lang.tenant')
@endsection
@section('content')

    @livewire('tenants.index')
@endsection


