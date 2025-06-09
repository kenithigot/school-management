@extends('admin.subject.layout-specific-department')
@if (session('deleted'))
    <x-delete-modal id="subject-confirm" hsOverlay="#subject-confirm">
        {{ session(key: 'deleted') }}
    </x-delete-modal>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.querySelector('#subject-confirm');
            if (modal && window.HSOverlay && typeof window.HSOverlay.open === 'function') {
                setTimeout(() => {
                    window.HSOverlay.open(modal);
                }, 200);
            }
        });
    </script>
@endif

@section('department-subject')
    <livewire:manage-subject :department="$department->id" />
@endsection
