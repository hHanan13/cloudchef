@extends('dashboard.layouts.app')

@section('content')

<livewire:perfumelivewire />

@endsection
@push('js')

<!-- <script type="text/javascript">
        window.livewire.on('userStore', () => {
            $('#exampleModal').modal('hide');
        });
        CKEDITOR.replace( 'summary-ckeditor' );
CKEDITOR.replace( 'summary-ckeditor1' );
    </script> -->

@endpush