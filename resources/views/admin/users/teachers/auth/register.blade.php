@extends('admin.users.teachers.create-account')
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

@section('register-teacher')
    <form action="{{ route('teacher.store') }}" method="POST">
        @csrf
        <div class="pb-8">
            <x-content-heading class="pb-3">Personal Information</x-content-heading>
            <!-- Grid -->
            <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">

                <div class="sm:col-span-2">
                    <x-label label="Full name" />
                </div>
                <!-- End Col -->

                <div class="sm:col-span-10">
                    <div class="sm:flex">
                        <div class="relative w-full">
                            <x-input-floating class="{{ $errors->has('firstName') ? 'border-red-500' : '' }} rounded-r-none"
                                name="firstName" id="firstName" label="First Name" placeholder="First Name"
                                value="{{ old('firstName') }}" />
                            @error('firstName')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="relative w-full">
                            <x-input-floating class="rounded-l-none rounded-r-none" name="middleName" id="middleName"
                                label="Middle Name" placeholder="Middle Name" />
                        </div>
                        <div class="relative w-full">
                            <x-input-floating class="{{ $errors->has('lastName') ? 'border-red-500' : '' }} rounded-l-none"
                                name="lastName" id="lastName" label="Last Name" placeholder="Last Name"
                                value="{{ old('lastName') }}" />
                            @error('lastName')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-2">
                    <x-label label="Gender" />
                </div>
                <!-- End Col -->

                <div class="sm:col-span-10">
                    <div class="w-full">
                        <x-select class="{{ $errors->has('gender') ? 'border-red-500' : '' }}" id="gender" name="gender"
                            placeholder='Select Gender' :options="['Male' => 'Male', 'Female' => 'Female']" value="{{ old('gender') }}" />
                        @error('gender')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-2">
                    <x-label label="Date of Birth" />
                </div>
                <!-- End Col -->

                <div class="sm:col-span-10">
                    <div class="relative w-full">
                        <x-input-date class="{{ $errors->has('dateOfBirth') ? 'border-red-500' : '' }}" id="dateOfBirth"
                            name="dateOfBirth" type="date" value="{{ old('dateOfBirth') }}" />
                        @error('dateOfBirth')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-2">
                    <x-label label="Contact Number" />
                </div>
                <!-- End Col -->

                <div class="sm:col-span-10">
                    <div class="sm:flex">
                        <div class="relative w-full">
                            <x-input-floating class="{{ $errors->has('contactNumber') ? 'border-red-500' : '' }}"
                                id="contactNumber" name="contactNumber" type="number" label="Contact Number"
                                placeholder="Contact Number" value="{{ old('contactNumber') }}" />
                            @error('contactNumber')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-2">
                    <x-label label="Address" />
                </div>
                <!-- End Col -->

                <div class="sm:col-span-10">
                    <div class="sm:flex">
                        <div class="relative w-full">
                            <x-input-floating class="{{ $errors->has('address') ? 'border-red-500' : '' }}" id="address"
                                name="address" type="text" label="Address" placeholder="Contact Number"
                                value="{{ old('address') }}" />
                            @error('address')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-2">
                    <x-label label="Email Address" />
                </div>
                <!-- End Col -->

                <div class="sm:col-span-10">
                    <div class="sm:flex">
                        <div class="relative w-full">
                            <x-input-floating class="{{ $errors->has('email') ? 'border-red-500' : '' }}" id="email"
                                name="email" type="email" label="Email Address" placeholder="Email Address"
                                value="{{ old('email') }}" />
                            @error('email')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>

        <div class="pb-8">
            <x-content-heading class="pb-3">Professional Information</x-content-heading>
            <!-- Grid -->
            <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">

                <div class="sm:col-span-2">
                    <x-label label="Date of Joining" />
                </div>
                <!-- End Col -->

                <div class="sm:col-span-10">
                    <div class="relative w-full">
                        <x-input-date class="{{ $errors->has('dateOfJoining') ? 'border-red-500' : '' }}"
                            id="dateOfJoining" name="dateOfJoining" type="date" value="{{ old('dateOfJoining') }}" />
                        @error('dateOfJoining')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-2">
                    <x-label label="Educational Qualification" />
                </div>
                <!-- End Col -->

                <div class="sm:col-span-10">
                    <div class="sm:flex">
                        <div class="relative w-full">
                            <x-input-floating
                                class="{{ $errors->has('educationalQualification') ? 'border-red-500' : '' }}"
                                id="educationalQualification" name="educationalQualification" type="text"
                                label="Educational Qualification" placeholder="Contact Number"
                                value="{{ old('educationalQualification') }}" />
                            @error('educationalQualification')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-2">
                    <x-label label="Employment Type" />
                </div>
                <!-- End Col -->

                <div class="sm:col-span-10">
                    <div class="w-full">
                        <x-select class="{{ $errors->has('employmentType') ? 'border-red-500' : '' }}"
                            id="employmentType" name="employmentType" placeholder='Select Employment Type'
                            :options="[
                                'Full-time' => 'Full-time',
                                'Part-time' => 'Part-time',
                                'Contractual' => 'Contractual',
                                'Temporary' => 'Temporary',
                            ]" value="{{ old('employmentType') }}" />
                        @error('employmentType')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-2">
                    <x-label label="Employment Status" />
                </div>
                <!-- End Col -->

                <div class="sm:col-span-10">
                    <div class="w-full">
                        <x-select class="{{ $errors->has('employmentStatus') ? 'border-red-500' : '' }}"
                            id="employmentStatus" name="employmentStatus" placeholder='Select Employment Status'
                            :options="[
                                'Active' => 'Active',
                                'Inactive' => 'Inactive',
                                'On Leave' => 'On Leave',
                                'Resigned' => 'Resigned',
                                'Retired' => 'Retired',
                                'Terminated' => 'Terminated',
                                'Newly Hired' => 'Newly Hired',
                            ]" value="{{ old('employmentStatus') }}" />
                        @error('employmentStatus')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-2">
                    <x-label label="Department" />
                </div>
                <!-- End Col -->

                <div class="sm:col-span-10">
                    <div class="w-full">
                        <x-select class="{{ $errors->has('department') ? 'border-red-500' : '' }}" id="department"
                            name="department" placeholder="Select Department" :options="$departments->pluck('department_name')->toArray()"
                            value="{{ old('department') }}" />
                        @error('department')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-2">
                    <x-label label="Designation" />
                </div>
                <!-- End Col -->

                <div class="sm:col-span-10">
                    <div class="w-full">
                        <x-select id="designation" name="designation" placeholder="Select Designation"
                            class=" {{ $errors->has('designation') ? 'border-red-500' : '' }}">
                            <option value="">Select Designation</option>
                        </x-select>
                        @error('designation')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- End Col -->

            </div>
            <!-- End Grid -->
        </div>

        <div class="pb-8">
            <x-content-heading class="pb-3">Login Credentials</x-content-heading>
            <!-- Grid -->
            <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">

                <div class="sm:col-span-2">
                    <x-label label="Username" />
                </div>
                <!-- End Col -->

                <div class="sm:col-span-10">
                    <div class="relative w-full">
                        <x-input-floating class="{{ $errors->has('username') ? 'border-red-500' : '' }}" id="username"
                            name="username" label="Username" placeholder="Username" value="{{ old('username') }}" />
                        @error('username')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-2">
                    <x-label label="Password" />
                </div>
                <!-- End Col -->

                <div class="sm:col-span-10">
                    <div class="sm:flex">
                        <div class="relative w-full">
                            <div class="flex flex-col">
                                <x-input-floating class="{{ $errors->has('password') ? 'border-red-500' : '' }}"
                                    type="password" id="password" name="password" label="Password"
                                    placeholder="Password" value="{{ old('password') }}" />
                                @error('password')
                                    <span class="text-red-500 text-xs">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-2">
                    <x-label label="Confirm Password" />
                </div>
                <!-- End Col -->

                <div class="sm:col-span-10">
                    <div class="sm:flex">
                        <div class="relative w-full">
                            <div class="flex flex-col">
                                <x-input-floating
                                    class="{{ $errors->has('password_confirmation') ? 'border-red-500' : '' }}"
                                    type="password" name="password_confirmation" id="password_confirmation"
                                    label="Confirm Password" placeholder="Confirm Password"
                                    value="{{ old('password_confirmation') }}" />
                            </div>
                            @error('password_confirmation')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
        <div class="pt-8 flex justify-end gap-x-2">
            <x-button class="px-12" id="submitBtn" type="submit" aria-expanded="false" aria-controls="modal-confirm"
                data-hs-overlay="#modal-confirm" buttonLabel="Submit" loadLabel="Submitting" />
        </div>
    </form>
@endsection
