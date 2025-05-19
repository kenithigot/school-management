@extends('admin.users.teachers.view-teacher-detail')

@section('teacher-view-detail')
    <div>
        <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
            <div class="sm:col-span-12">
                <x-content-heading class="pb-0">Personal Information</x-content-heading>
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
                <x-content-heading class="pb-0">Professional Information</x-content-heading>
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
