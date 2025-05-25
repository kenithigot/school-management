@extends('admin.subject.layout-register-subject')
@if (session('success'))
    <x-success-modal id="subject-confirm" hsOverlay="#subject-confirm">
        {{ session('success') }}
    </x-success-modal>

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

@section('register-subject')
    <form action="{{ route('subject.register') }}" method="POST">
        @csrf
        <x-modal-add modalId="add-subject" modalTitle="Add Subject" dataOverlay="#add-subject"
            modalLabel="subject-register-label" buttonName="Add Subject" type="submit">
            <div class="grid sm:grid-cols-12 gap-2 sm:gap-6 sm:px-2">
                <div class="sm:col-span-3">
                    <x-label label="Subject Name" />
                </div>
                <!-- End Col -->
                <div class="sm:col-span-9">
                    <div class="sm:flex">
                        <div class="relative w-full">
                            <x-input-floating class="{{ $errors->has('subjectName') ? 'border-red-500' : '' }}"
                                name="subjectName" id="subjectName" label="Subject Name" placeholder="Subject Name"
                                value="{{ old('subjectName') }}" />
                            @error('subjectName')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <x-label label="Subject Code" />
                </div>
                <!-- End Col -->
                <div class="sm:col-span-9">
                    <div class="sm:flex">
                        <div class="relative w-full">
                            <x-input-floating class="{{ $errors->has('subjectCode') ? 'border-red-500' : '' }}"
                                name="subjectCode" id="subjectCode" label="Subject Code" placeholder="Subject Code"
                                value="{{ old('subjectCode') }}" />
                            @error('subjectCode')
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
                            <x-text-area :rows="4" class="{{ $errors->has('description') ? 'border-red-500' : '' }}"
                                name="description" id="description" placeholder="Type Description" />
                            @error('description')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <x-label label="Subject Unit" />
                </div>
                <!-- End Col -->
                <div class="sm:col-span-9">
                    <div class="sm:flex">
                        <div class="relative w-full">
                            <x-input-floating type="number"
                                class="{{ $errors->has('subjectUnit') ? 'border-red-500' : '' }}" name="subjectUnit"
                                id="subjectUnit" label="Subject Unit" placeholder="Subject Unit"
                                value="{{ old('subjectUnit') }}" />
                            @error('subjectUnit')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <x-label label="Year Level" />
                </div>
                <!-- End Col -->
                <div class="sm:col-span-9">
                    <div class="w-full">
                        <x-select class="{{ $errors->has('yearLevel') ? 'border-red-500' : '' }}" id="yearLevel"
                            name="yearLevel" placeholder='Select Year Level' :options="[
                                '1' => '1st year',
                                '2' => '2nd year',
                                '3' => '3rd year',
                                '4' => '4th year',
                                '5' => '5th year',
                            ]"
                            value="{{ old('yearLevel') }}" />
                        @error('yearLevel')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <x-label label="Semester" />
                </div>
                <!-- End Col -->
                <div class="sm:col-span-9">
                    <div class="w-full">
                        <x-select class="{{ $errors->has('semester') ? 'border-red-500' : '' }}" id="semester"
                            name="semester" placeholder='Select Semester' :options="['1' => '1st Semester', '2' => '2nd Semester', '3' => 'Summer']"
                            value="{{ old('semester') }}" />
                        @error('semester')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <x-label label="Department" />
                </div>
                <!-- End Col -->
                <div class="sm:col-span-9">
                    <div class="w-full">
                        <x-select class="{{ $errors->has('departments') ? 'border-red-500' : '' }}" id="department"
                            name="department" placeholder='Select Department' :options="$departments->pluck('department_name', 'id')->toArray()"
                            value="{{ old('department') }}" />
                        @error('departments')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </x-modal-add>
    </form>

    <livewire:add-subject-table />
@endsection
