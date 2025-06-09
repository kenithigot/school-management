@extends('admin.department.index')
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

@section('department-index')
    <form action="{{ route('department.register') }}" method="POST">
        @csrf
        <x-modal-add modalId="add-department" modalTitle="Add Department" dataOverlay="#add-department"
            modalLabel="department-register-label" buttonName="Add Department" type="submit">
            <div class="grid sm:grid-cols-12 gap-2 sm:gap-6 sm:px-2">
                <div class="sm:col-span-3">
                    <x-label label="Department" />
                </div>
                <!-- End Col -->
                <div class="sm:col-span-9">
                    <div class="sm:flex">
                        <div class="relative w-full">
                            <x-input-floating class="{{ $errors->has('department') ? 'border-red-500' : '' }}"
                                name="department" id="department" label="Department" placeholder="Department"
                                value="{{ old('department') }}" />
                            @error('department')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <x-label label="Description" />
                </div>
                <!-- End Col -->
                <div class="sm:col-span-9">
                    <div class="sm:flex">
                        <div class="relative w-full">
                            <div class="relative w-full">
                                <x-text-area :rows="4"
                                    class="{{ $errors->has('description') ? 'border-red-500' : '' }}" name="description"
                                    id="description" placeholder="Type Description...." />
                                @error('description')
                                    <span class="text-red-500 text-xs">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </x-modal-add>
    </form>
    <livewire:department-index-table />
@endsection
