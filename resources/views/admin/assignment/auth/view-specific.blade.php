@extends('admin.assignment.layout-view-specific')
{{-- @if (session('deleted'))
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
@endif --}}



@section('assignment-viewSpecific')
    <form action="{{ route('assignment.assignmentUpdate', ['id' => $assignment->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="grid sm:grid-cols-12 gap-2 sm:gap-6 sm:px-2 sm:mt-8">
            <div class="sm:col-span-2">
                <x-label label="Assignment Title" />
            </div>
            <div class="sm:col-span-10">
                <div class="relative w-full">
                    <x-input-floating class="{{ $errors->has('assignmentTitle') ? 'border-red-500' : '' }}"
                        name="assignmentTitle" id="assignmentTitle" label="Assignment Title" placeholder="Assignment Title"
                        value="{{ old('assignmentTitle', $assignment->assignment_title) }}" />
                </div>
                @error('assignmentTitle')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <div class="sm:col-span-2">
                <x-label label="Description/Instructions" />
            </div>
            <div class="sm:col-span-10">
                <div class="w-full">
                    <x-text-area class="{{ $errors->has('instructions') ? 'border-red-500' : '' }}" name="instructions"
                        id="instructions" label="Description/Instructions" placeholder="Type Description/Instructions ..."
                        value="{{ old('instructions', $assignment->description) }}" rows="4" />
                </div>
                @error('instructions')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="grid sm:grid-cols-6 gap-2 sm:gap-6 sm:px-2 mt-4">
            <div class="sm:col-span-1">
                <x-label label="Department" />
            </div>
            <div class="sm:col-span-2">
                <div class="w-full">
                    <x-select id="department" name="department" placeholder="Select Department" :value="old('department', $assignment->department_id)"
                        class="{{ $errors->has('department') ? 'border-red-500' : '' }}" :options="$departments" />
                    @error('department')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <script>
                function fetchDesignations(departmentId) {
                    if (!departmentId) return;

                    fetch(`/get-designations/${departmentId}`)
                        .then((response) => response.json())
                        .then((data) => {
                            const courseSelect = document.getElementById("course");

                            // Defensive check: make sure we found the select
                            if (!courseSelect) {
                                console.error("Designation select not found.");
                                return;
                            }

                            // Clear existing options
                            courseSelect.innerHTML =
                                '<option value="">Select Course</option>';

                            // Populate new options
                            data.forEach((item) => {
                                const option = document.createElement("option");
                                option.value = item.id;
                                option.textContent = item.course_name;
                                courseSelect.appendChild(option);
                            });
                        })
                        .catch((error) => {
                            console.error("Error fetching designations:", error);
                        });
                }

                // Optional: ensure JS runs after page load
                document.addEventListener("DOMContentLoaded", () => {
                    const departmentSelect = document.getElementById("department");
                    if (departmentSelect) {
                        departmentSelect.addEventListener("change", function() {
                            fetchDesignations(this.value);
                        });
                    }
                });
            </script>
            <div class="sm:col-span-1">
                <x-label label="Course" />
            </div>
            <div class="sm:col-span-2">
                <div class="w-full">
                    <x-select class="{{ $errors->has('course') ? 'border-red-500' : '' }}" id="course" name="course"
                        :options="$courses" placeholder='Select Course'
                        value="{{ old('course', $assignment->course_id) }}" />
                    @error('course')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="sm:col-span-1">
                <x-label label="Subject" />
            </div>
            <div class="sm:col-span-2">
                <div class="w-full">
                    <x-select class="{{ $errors->has('subject') ? 'border-red-500' : '' }}" id="subject" name="subject"
                        placeholder='Select Subject' value="{{ old('subject', $assignment->subject_id) }}"
                        :options="$subjects" />
                    @error('subject')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="sm:col-span-1">
                <x-label label="Year Level" />
            </div>
            <div class="sm:col-span-2">
                <div class="w-full">
                    <x-select class="{{ $errors->has('yearLevel') ? 'border-red-500' : '' }}" id="yearLevel"
                        name="yearLevel" placeholder='Select Year Level'
                        value="{{ old('yearLevel', $assignment->year_level) }}" :options="['1' => '1st Year', '2' => '2nd Year', '3' => '3rd Year', '4' => '4th Year']" />
                    @error('yearLevel')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="sm:col-span-1">
                <x-label label="Due Date" />
            </div>
            <div class="sm:col-span-2">
                <div class="relative w-full">
                    @php
                        $dueDateValue = old(
                            'dueDate',
                            isset($assignment) ? \Carbon\Carbon::parse($assignment->dueDate)->format('Y-m-d\TH:i') : '',
                        );
                    @endphp
                    <x-input-floating type="datetime-local" class="{{ $errors->has('dueDate') ? 'border-red-500' : '' }}"
                        name="dueDate" id="dueDate" label="Due Date" placeholder="Due Date"
                        value="{{ $dueDateValue }}" />

                </div>
                @error('dueDate')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <div class="sm:col-span-1">
                <x-label label="Assignment Type" />
            </div>
            <div class="sm:col-span-2">
                <div class="relative w-full">
                    <x-select class="{{ $errors->has('assignmentType') ? 'border-red-500' : '' }}" name="assignmentType"
                        id="assignmentType" placeholder="Select Assignment Type"
                        value="{{ old('assignmentType', $assignment->assignment_type) }}" :options="[
                            'Homework' => 'Homework',
                            'Project' => 'Project',
                            'Quiz' => 'Quiz',
                            'Report' => 'Report',
                        ]" />
                </div>
                @error('assignmentType')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <div class="sm:col-span-1">
                <x-label label="Submission Mode" />
            </div>
            <div class="sm:col-span-2">
                <div class="relative w-full">
                    <x-select class="{{ $errors->has('submissionMode') ? 'border-red-500' : '' }}" name="submissionMode"
                        id="submissionMode" placeholder="Select Submission Mode"
                        value="{{ old('submissionMode', $assignment->submission_mode) }}" :options="[
                            'Online Upload' => 'Online Upload',
                            'In-person Submission' => 'In-person Submission',
                            'Email' => 'Email',
                        ]" />
                </div>
                @error('submissionMode')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <div class="sm:col-span-1">
                <x-label label="Total Marks/Point" />
            </div>
            <div class="sm:col-span-2">
                <div class="relative w-full">
                    <x-input-floating type="number" class="{{ $errors->has('totalPoint') ? 'border-red-500' : '' }}"
                        name="totalPoint" id="totalPoint" label="Total Marks/Point" placeholder="Total Marks/Point"
                        value="{{ old('totalPoint', $assignment->total_point) }}" />
                </div>
                @error('totalPoint')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="pt-8 flex justify-end gap-x-2">
            <x-button-back href="{{ route('assignment.assignmentView') }}">Back</x-button-back>
            <x-button id="submitBtn" type="submit" aria-expanded="false" aria-controls="modal-confirm"
                data-hs-overlay="#modal-confirm" buttonLabel="Update" loadLabel="Updating" />
        </div>
    </form>
@endsection
