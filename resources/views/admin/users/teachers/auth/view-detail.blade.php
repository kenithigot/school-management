@extends('admin.users.teachers.view-teacher-detail')

@section('teacher-view-detail')
    <div>
        <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
            <div class="sm:col-span-12">
                <div class="flex items-center gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    <x-content-heading class="pb-0">
                        Personal Information
                    </x-content-heading>
                </div>
            </div>

            <div class="sm:col-span-3">
                <x-view-label for="fullName" class="text-base">Full Name</x-view-label>
            </div>
            <!-- End Col -->
            <div class="sm:col-span-9">
                <x-view-input id="fullName" name="fullName" :value="$selectedTeacher['full_name'] ?? ''" readonly></x-view-input>
            </div>
            <!-- End Col -->

            <div class="sm:col-span-3">
                <x-view-label for="gender" class="text-base">Gender</x-view-label>
            </div>
            <!-- End Col -->
            <div class="sm:col-span-9">
                <x-view-input id="gender" name="gender" :value="$selectedTeacher['gender'] ?? ''" readonly></x-view-input>
            </div>
            <!-- End Col -->

            <div class="sm:col-span-3">
                <x-view-label for="dateOfBirth" class="text-base">Date of Birth</x-view-label>
            </div>
            <!-- End Col -->
            <div class="sm:col-span-9">
                <x-view-input id="dateOfBirth" name="dateOfBirth" :value="$selectedTeacher['date_of_birth'] ?? ''" readonly />
            </div>
            <!-- End Col -->

            <div class="sm:col-span-3">
                <x-view-label for="contactNum" class="text-base">Contact Number</x-view-label>
            </div>
            <!-- End Col -->
            <div class="sm:col-span-9">
                <x-view-input id="contactNum" name="contactNum" :value="$selectedTeacher['contact_number'] ?? ''" readonly />
            </div>
            <!-- End Col -->

            <div class="sm:col-span-3">
                <x-view-label for="address" class="text-base">Address</x-view-label>
            </div>
            <!-- End Col -->
            <div class="sm:col-span-9">
                <x-view-input id="address" name="address" :value="$selectedTeacher['address'] ?? ''" readonly />
            </div>
            <!-- End Col -->

            <div class="sm:col-span-3">
                <x-view-label for="emailAddress" class="text-base">Email Address</x-view-label>
            </div>
            <!-- End Col -->
            <div class="sm:col-span-9">
                <x-view-input id="emailAddress" name="emailAddress" :value="$selectedTeacher['email'] ?? ''" readonly />
            </div>
            <!-- End Col -->

            <div class="sm:col-span-12">
                <div class="flex items-center gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                    </svg>
                    <x-content-heading class="pb-0">Professional Information</x-content-heading>
                </div>
            </div>

            <div class="sm:col-span-3">
                <x-view-label for="dateOfJoining" class="text-base">Date of Joining</x-view-label>
            </div>
            <!-- End Col -->
            <div class="sm:col-span-9">
                <x-view-input id="dateOfJoining" name="dateOfJoining" :value="$selectedTeacher['date_of_joining'] ?? ''" readonly />
            </div>
            <!-- End Col -->

            <div class="sm:col-span-3">
                <x-view-label for="educationalQualification" class="text-base">Educational
                    Qualification</x-view-label>
            </div>
            <!-- End Col -->
            <div class="sm:col-span-9">
                <x-view-input id="educationalQualification" name="educationalQualification" :value="$selectedTeacher['educational_qualification'] ?? ''" readonly />
            </div>
            <!-- End Col -->

            <div class="sm:col-span-3">
                <x-view-label for="employmentType" class="text-base">Employment
                    Type</x-view-label>
            </div>
            <!-- End Col -->
            <div class="sm:col-span-9">
                <x-view-input id="employmentType" name="employmentType" :value="$selectedTeacher['employment_type'] ?? ''" readonly />
            </div>
            <!-- End Col -->

            <div class="sm:col-span-3">
                <x-view-label for="employmentStatus" class="text-base">Employment
                    Status</x-view-label>
            </div>
            <!-- End Col -->
            <div class="sm:col-span-9">
                <x-view-input id="employmentStatus" name="employmentStatus" :value="$selectedTeacher['employment_status'] ?? ''" readonly />
            </div>
            <!-- End Col -->

            <div class="sm:col-span-3">
                <x-view-label for="department" class="text-base">Department</x-view-label>
            </div>
            <!-- End Col -->
            <div class="sm:col-span-9">
                <x-view-input id="department" name="department" :value="$selectedTeacher['department'] ?? ''" readonly />
            </div>
            <!-- End Col -->

            <div class="sm:col-span-3">
                <x-view-label for="designation" class="text-base">Designation</x-view-label>
            </div>
            <!-- End Col -->
            <div class="sm:col-span-9">
                <x-view-input id="designation" name="designation" :value="$selectedTeacher['designation'] ?? ''" readonly />
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
@endsection
