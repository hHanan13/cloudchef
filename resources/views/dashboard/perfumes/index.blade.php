@extends('dashboard.layouts.app')

@section('content')

<livewire:perfumelive />

@endsection
@push('js')

<script type="text/javascript">
       console.log(desc_en);
    </script>

@endpush