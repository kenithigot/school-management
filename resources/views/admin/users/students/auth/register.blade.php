@extends('admin.users.students.create-account')
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
                }, 300);
            }
        });
    </script>
@endif


@section('register-student')
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="pb-8">
            <x-content-heading>Personal Information</x-content-heading>
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
                            <x-input-floating class="{{ $errors->has('contactNum') ? 'border-red-500' : '' }}"
                                id="contactNum" name="contactNum" type="number" label="Contact Number"
                                placeholder="Contact Number" value="{{ old('contactNum') }}" />
                            @error('contactNum')
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
                            <x-input-floating class="{{ $errors->has('studentEmail') ? 'border-red-500' : '' }}"
                                id="studentEmail" name="studentEmail" type="email" label="Email Address"
                                placeholder="Email Address" value="{{ old('studentEmail') }}" />
                            @error('studentEmail')
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
            <x-content-heading>Guardian Information</x-content-heading>
            <!-- Grid -->
            <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">

                <div class="sm:col-span-2">
                    <x-label label="Full name" />
                </div>
                <!-- End Col -->

                <div class="sm:col-span-10">
                    <div class="sm:flex">
                        <div class="relative w-full">
                            <x-input-floating
                                class="{{ $errors->has('guardianFirstName') ? 'border-red-500' : '' }} rounded-r-none"
                                name="guardianFirstName" id="guardianFirstName" label="First Name" placeholder="First Name"
                                value="{{ old('guardianFirstName') }}" />
                            @error('guardianFirstName')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="relative w-full">
                            <x-input-floating
                                class="{{ $errors->has('guardianMiddleName') ? 'border-red-500' : '' }} rounded-l-none rounded-r-none"
                                name="guardianMiddleName" id="guardianMiddleName" label="Middle Name"
                                placeholder="Middle Name" />
                        </div>
                        <div class="relative w-full">
                            <x-input-floating
                                class="{{ $errors->has('guardianLastName') ? 'border-red-500' : '' }} rounded-l-none"
                                name="guardianLastName" id="guardianLastName" label="Last Name" placeholder="Last Name"
                                value="{{ old('guardianLastName') }}" />
                            @error('guardianLastName')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
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
                            <x-input-floating class="{{ $errors->has('guardianContactNum') ? 'border-red-500' : '' }}"
                                id="guardianContactNum" name="guardianContactNum" type="number" label="Contact Number"
                                placeholder="Contact Number" value="{{ old('guardianContactNum') }}" />
                            @error('guardianContactNum')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-2">
                    <x-label label="Relationship to Student" />
                </div>
                <!-- End Col -->

                <div class="sm:col-span-10">
                    <div class="w-full">
                        <x-select class="{{ $errors->has('studentRelationship') ? 'border-red-500' : '' }}"
                            id="studentRelationship" name="studentRelationship"
                            placeholder='Select Relationship to Student' :options="[
                                'Mother' => 'Mother',
                                'Father' => 'Father',
                                'Stepmother' => 'Stepmother',
                                'Stepfather' => 'Stepfather',
                                'Grandmother' => 'Grandmother',
                                'Grandfather' => 'Grandfather',
                                'Aunt' => 'Aunt',
                                'Uncle' => 'Uncle',
                                'Sister' => 'Sister',
                                'Brother' => 'Brother',
                                'Legal Guardian' => 'Legal Guardian',
                            ]"
                            value="{{ old('studentRelationship') }}" />
                        @error('studentRelationship')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>

        <div class="pb-8">
            <x-content-heading>Login Credentials</x-content-heading>
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
                                <x-input-floating class="{{ $errors->has('studentPassword') ? 'border-red-500' : '' }}"
                                    type="password" id="studentPassword" name="studentPassword" label="Password"
                                    placeholder="Password" value="{{ old('studentPassword') }}" />
                                @error('studentPassword')
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
                                    class="{{ $errors->has('studentPassword_confirmation') ? 'border-red-500' : '' }}"
                                    type="password" name="studentPassword_confirmation" id="studentPassword_confirmation"
                                    label="Confirm Password" placeholder="Confirm Password"
                                    value="{{ old('studentPassword_confirmation') }}" />
                            </div>
                            @error('studentPassword_confirmation')
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
            {{-- <button type="submit"
                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                Save changes
            </button> --}}
            <x-button class="px-12" id="submitco" type="submit" aria-expanded="false" aria-controls="modal-confirm"
                data-hs-overlay="#modal-confirm" buttonLabel="Submit" loadLabel="Submitting" />
        </div>
    </form>
@endsection
