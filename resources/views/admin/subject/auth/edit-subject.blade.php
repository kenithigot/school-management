@extends('admin.subject.layout-edit-subject')
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

@section('edit-subject')
    <div class="pt-4">
        <form action="{{ route('subject.updateSubject', ['department' => $subject->department_id, 'id' => $subject->id]) }}"
            method="POST">
            @csrf
            @method('PUT')
            <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
                <div class="sm:col-span-6">
                    <div class="relative w-full">
                        <x-input-floating class="{{ $errors->has('subjectName') ? 'border-red-500' : '' }}" id="subjectName"
                            name="subjectName" label="Subject Name" placeholder="Subject Name"
                            value="{{ old('subjectName', $subject->subject_name) }}" />
                        @error('subjectName')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-6">
                    <div class="relative w-full">
                        <x-input-floating class="{{ $errors->has('subjectCode') ? 'border-red-500' : '' }}" id="subjectCode"
                            name="subjectCode" label="Subject Code" placeholder="Subject Code"
                            value="{{ old('subjectCode', $subject->subject_code) }}" />
                        @error('subjectCode')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <div class="relative w-full">
                        <x-input-floating class="{{ $errors->has('subjectDescription') ? 'border-red-500' : '' }}"
                            id="subjectDescription" name="subjectDescription" label="Subject Description"
                            placeholder="Subject Description"
                            value="{{ old('subjectDescription', $subject->description) }}" />
                        @error('subjectDescription')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-4">
                    <div class="relative w-full">
                        <x-input-floating type="number" class="{{ $errors->has('unit') ? 'border-red-500' : '' }}"
                            id="unit" name="unit" label="Subject Unit" placeholder="Subject Unit"
                            value="{{ old('unit', $subject->units) }}" />
                        @error('unit')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-4">
                    <div class="w-full">
                        <x-select id="semester" name="semester" placeholder="Select Semester" :options="[1 => '1st Semester', 2 => '2nd Semester', 3 => 'Summer']"
                            :selected="old('semester', $subject->semester)" class="{{ $errors->has('semester') ? 'border-red-500' : '' }}" />
                        @error('semester')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-4">
                    <div class="w-full">
                        <x-select id="yearLevel" name="yearLevel" placeholder="Select Year Level" :options="[1 => '1st Year', 2 => '2nd Year', 3 => '3rd Year', 4 => '4th Year']"
                            :selected="old('yearLevel', $subject->year_level)" class="{{ $errors->has('yearLevel') ? 'border-red-500' : '' }}" />
                        @error('yearLevel')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <div class="pt-8 flex justify-end gap-x-2">
                        <x-button class="px-12" id="submitBtn" type="submit" aria-expanded="false"
                            aria-controls="subject-confirm" data-hs-overlay="#subject-confirm" buttonLabel="Update Subject"
                            loadLabel="Submitting" />
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
