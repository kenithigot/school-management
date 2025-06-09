@extends('admin.department.layout-edit')
@if (session('success'))
    <x-success-modal id="modal-confirm" :hsOverlay="'#modal-confirm'">
        {{ session('success') }}
    </x-success-modal>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.querySelector('#modal-confirm');
            if (modal && window.HSOverlay && typeof window.HSOverlay.open === 'function') {
                // Slight delay to ensure Preline initializes
                setTimeout(() => {
                    window.HSOverlay.open(modal);
                }, 200);
            }
        });
    </script>
@endif

@section('department-edit')
    <form action="{{ route('department.departmentUpdate', $departments->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
            <div class="sm:col-span-6">
                <div class="relative w-full">
                    <x-input-floating class="{{ $errors->has('department_name') ? 'border-red-500' : '' }}"
                        id="department_name" name="department_name" label="Department" placeholder="Department"
                        value="{{ old('department_name', $departments->department_name) }}" />
                    @error('department_name')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- End Col -->

            <div class="sm:col-span-6">
                <div class="relative w-full">
                    <x-input-floating class="{{ $errors->has('description') ? 'border-red-500' : '' }}" id="description"
                        name="description" label="Description" placeholder="Description"
                        value="{{ old('description', $departments->description) }}" />
                    @error('Description')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- End Col -->

            <div class="sm:col-span-12">
                <div class="pt-8 flex justify-end gap-x-2">
                    <x-button class="px-12" id="submitBtn" type="submit" aria-expanded="false"
                        aria-controls="modal-confirm" data-hs-overlay="#modal-confirm" buttonLabel="Update Department"
                        loadLabel="Submitting" />
                </div>
            </div>
        </div>
    </form>
@endsection
