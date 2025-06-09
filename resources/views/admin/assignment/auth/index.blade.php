@extends('admin.assignment.index')
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

@section('assignment-index')
    <!-- Icon Blocks -->
    {{-- <div class="py-10 lg:py-14 mx-auto">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 items-center gap-2">
            <!-- Icon Block -->
            <div class="border border-green-500 px-4 py-6 rounded-md shadow-lg">
                <a class="group flex flex-col justify-center hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 rounded-xl"
                    href="#">
                    <div class="flex justify-center items-center size-12 bg-green-500 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="shrink-0 size-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h3 class="group-hover:text-gray-600 text-lg font-semibold text-gray-800">
                            Responsive</h3>
                        <p class="mt-1 text-gray-600">Responsive, and mobile-first project on the web</p>
                        <span
                            class="mt-2 inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 group-hover:underline group-focus:underline font-medium">
                            Learn more
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </span>
                    </div>
                </a>
            </div>
            <!-- End Icon Block -->
        </div>
    </div> --}}
    <div class="flex justify-end m-2">
        <h3 class="text-gray-800 text-base">
            Issue Date: <span id="issueDate" class="text-lg font-semibold"></span>
        </h3>
        <input type="hidden" name="issue_date" id="hiddenIssueDate">
    </div>
    <script>
        function updateIssueDate() {
            const now = new Date();

            const options = {
                timeZone: 'Asia/Manila',
                year: 'numeric',
                month: 'long',
                day: '2-digit',
                hour: '2-digit',
                minute: '2-digit',
                hour12: true,
            };

            const displayDate = now.toLocaleString('en-US', options);
            const hiddenDate = now.toLocaleString('sv-SE', {
                timeZone: 'Asia/Manila'
            }).replace(' ', 'T'); // "YYYY-MM-DDTHH:mm:ss"

            document.getElementById('issueDate').textContent = displayDate;
            document.getElementById('hiddenIssueDate').value = hiddenDate;
        }

        // Initial call
        updateIssueDate();

        // Update every second (optional, for ticking clock effect)
        setInterval(updateIssueDate, 1000);
    </script>

    <div class="grid sm:grid-cols-12 gap-2 sm:gap-6 sm:px-2 mt-8">
        <div class="sm:col-span-2">
            <x-label label="Assignment Title" />
        </div>
        <div class="sm:col-span-10">
            <div class="relative w-full">
                <x-input-floating class="{{ $errors->has('assignmentTitle') ? 'border-red-500' : '' }}"
                    name="assignmentTitle" id="assignmentTitle" label="Assignment Title" placeholder="Assignment Title"
                    value="{{ old('assignmentTitle') }}" />
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
                <x-text-area class="{{ $errors->has('instructions') ? 'border-red-500' : '' }} min-w-3xl"
                    name="instructions" id="instructions" label="Description/Instructions"
                    placeholder="Type Description/Instructions ..." value="{{ old('instructions') }}" rows="4" />
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
                <x-select id="department" name="department" placeholder="Select Department" :value="old('department')"
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
                    placeholder='Select Course' value="{{ old('course') }}" />
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
                    placeholder='Select Subject' value="{{ old('subject') }}" :options="$subjects" />
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
                <x-select class="{{ $errors->has('yearLevel') ? 'border-red-500' : '' }}" id="yearLevel" name="yearLevel"
                    placeholder='Select Year Level' value="{{ old('yearLevel') }}" :options="['1' => '1st Year', '2' => '2nd Year', '3' => '3rd Year', '4' => '4th Year']" />
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
                <x-input-floating type="date" class="{{ $errors->has('dueDate') ? 'border-red-500' : '' }}"
                    name="dueDate" id="dueDate" label="Due Date" placeholder="Due Date"
                    value="{{ old('dueDate') }}" />
            </div>
            @error('dueDate')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="sm:col-span-1">
            <x-label label="Time Close" />
        </div>
        <div class="sm:col-span-2">
            <div class="relative w-full">
                <x-input-floating type="time" class="{{ $errors->has('timeClose') ? 'border-red-500' : '' }}"
                    name="timeClose" id="timeClose" label="Time Close" placeholder="Time Close"
                    value="{{ old('timeClose') }}" />
            </div>
            @error('timeClose')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="sm:col-span-1">
            <x-label label="Assignment Type" />
        </div>
        <div class="sm:col-span-2">
            <div class="relative w-full">
                <x-select class="{{ $errors->has('assignmentType') ? 'border-red-500' : '' }}"
                    name="assignmentType" id="assignmentType" placeholder="Select Assignment Type"
                    value="{{ old('assignmentType') }}" :options="['Homework' => 'Homework', 'Project' => 'Project', 'Quiz' => 'Quiz', 'Report' => 'Report']"/>
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
                <x-select class="{{ $errors->has('submissionMode') ? 'border-red-500' : '' }}"
                    name="submissionMode" id="submissionMode" placeholder="Select Submission Mode"
                    value="{{ old('submissionMode') }}" :options="['Online Upload' => 'Online Upload', 'In-person Submission' => 'In-person Submission', 'Email' => 'Email']"/>
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
                    value="{{ old('totalPoint') }}" />
            </div>
            @error('totalPoint')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>
    </div>
@endsection
