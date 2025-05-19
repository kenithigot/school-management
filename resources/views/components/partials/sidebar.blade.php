<!-- Sidebar -->
<div id="hs-sidebar-content-push"
    class="hs-overlay [--auto-close:lg] lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 w-72
    hs-overlay-open:translate-x-0
    -translate-x-full transition-all duration-300 transform
    h-full
    hidden
    fixed top-0 start-0 bottom-0 z-60
    bg-slate-100 border-e border-gray-200"
    role="dialog" tabindex="-1" aria-label="Sidebar">
    <div class="relative flex flex-col h-full max-h-full ">
        <!-- Header -->
        <header class="p-4 flex justify-center items-center gap-x-2">
            <a class="flex font-semibold text-xl text-black focus:outline-hidden focus:opacity-80" href="#"
                aria-label="Brand">
                <img class="h-20" src="{{ asset('images/logo.png') }} " alt="Logo"></a>
        </header>
        <!-- End Header -->

        <!-- Body -->
        <nav
            class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
            <div class="hs-accordion-group pb-0 px-2  w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
                <ul class="space-y-1">
                    <li>
                        <x-side-bar-link href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
                            <x-svg.home-icon />
                            Dashboard
                        </x-side-bar-link>
                    </li>

                    <li class="hs-accordion" id="students-accordion">
                        <x-side-bar-button :isActive="request()->routeIs('viewStudent', 'register')">
                            <x-svg.users-icon />
                            Students
                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </x-side-bar-button>

                        <div id="students-accordion-sub-1-collapse-1"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                            role="students" aria-labelledby="students-accordion">
                            <ul class="pt-1 ps-7 space-y-1">
                                <li>
                                    <x-side-bar-link href="{{ route('viewStudent') }}">
                                        <x-svg.eye-icon />
                                        View Students
                                    </x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link href="{{ route('register') }}">
                                        <x-svg.add-user-icon />
                                        Add Student
                                    </x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.edit-user-icon />Edit Student Information</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.assign-icon />Assign Grades</x-side-bar-link>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="hs-accordion" id="teachers-accordion">
                        <x-side-bar-button :isActive="request()->routeIs('viewTeacher', 'teacher.register', 'viewTeacherDetails')">
                            <x-svg.users-icon />
                            Teachers
                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </x-side-bar-button>

                        <div id="teachers-accordion-sub-1-collapse-1"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                            role="teachers" aria-labelledby="teachers-accordion">
                            <ul class="pt-1 ps-7 space-y-1">
                                <li>
                                    <x-side-bar-link href="{{ route('viewTeacher')}}"><x-svg.eye-icon />View Teachers</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link href="{{ route('teacher.register') }}"><x-svg.add-user-icon />Add
                                        Teacher</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.edit-user-icon />Edit Teacher Information</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.assign-icon />Assign Classes</x-side-bar-link>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="hs-accordion" id="classes-accordion">
                        <x-side-bar-button>
                            <x-svg.classes-icon />
                            Classes
                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </x-side-bar-button>

                        <div id="classes-accordion-sub-1-collapse-1"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                            role="classes" aria-labelledby="classes-accordion">
                            <ul class="pt-1 ps-7 space-y-1">
                                <li>
                                    <x-side-bar-link><x-svg.eye-icon />View Classes</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.add-class-icon /> Add Class</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.assign-teacher-icon />Assign Teacher to
                                        Classes</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.view-class-icon /> View Class Schedules</x-side-bar-link>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="hs-accordion" id="subjects-accordion">
                        <x-side-bar-button>
                            <x-svg.book-icon />
                            Subjects
                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </x-side-bar-button>

                        <div id="subjects-accordion-sub-1-collapse-1"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                            role="subjects" aria-labelledby="subjects-accordion">
                            <ul class="pt-1 ps-7 space-y-1">
                                <li>
                                    <x-side-bar-link><x-svg.list-icon />Manage Subjects</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.add-class-icon /> Add New Subject</x-side-bar-link>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="hs-accordion" id="assignments-accordion">
                        <x-side-bar-button>
                            <x-svg.clipboard-icon />
                            Assignments
                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </x-side-bar-button>

                        <div id="assignments-accordion-sub-1-collapse-1"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                            role="assignments" aria-labelledby="assignments-accordion">
                            <ul class="pt-1 ps-7 space-y-1">
                                <li>
                                    <x-side-bar-link><x-svg.eye-icon />View Assignments</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.add-class-icon />Add Assignment</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.check-circle />Grade Assignments</x-side-bar-link>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="hs-accordion" id="exam-accordion">
                        <x-side-bar-button>
                            <x-svg.check-square />
                            Exams
                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </x-side-bar-button>

                        <div id="exam-accordion-sub-1-collapse-1"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                            role="exam" aria-labelledby="exam-accordion">
                            <ul class="pt-1 ps-7 space-y-1">
                                <li>
                                    <x-side-bar-link><x-svg.list-icon /> Manage Exams</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.eye-icon />View Exam results</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.add-class-icon />Add Exam</x-side-bar-link>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="hs-accordion" id="attendance-accordion">
                        <x-side-bar-button>
                            <x-svg.file-text-icon />
                            Attendance
                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </x-side-bar-button>

                        <div id="attendance-accordion-sub-1-collapse-1"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                            role="attendance" aria-labelledby="attendance-accordion">
                            <ul class="pt-1 ps-7 space-y-1">
                                <li>
                                    <x-side-bar-link><x-svg.eye-icon /> View Attendance</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.check-circle /> Mark Attendance</x-side-bar-link>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="hs-accordion" id="timetable-accordion">
                        <x-side-bar-button>
                            <x-svg.calendar-minus-icon />
                            Timetable
                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </x-side-bar-button>

                        <div id="timetable-accordion-sub-1-collapse-1"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                            role="timetable" aria-labelledby="timetable-accordion">
                            <ul class="pt-1 ps-7 space-y-1">
                                <li>
                                    <x-side-bar-link><x-svg.eye-icon />View Timetable</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.calendar-minus-light-icon /> Edit
                                        Timetable</x-side-bar-link>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="hs-accordion" id="library-accordion">
                        <x-side-bar-button>
                            <x-svg.building-icon />
                            Library
                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </x-side-bar-button>

                        <div id="library-accordion-sub-1-collapse-1"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                            role="library" aria-labelledby="library-accordion">
                            <ul class="pt-1 ps-7 space-y-1">
                                <li>
                                    <x-side-bar-link><x-svg.eye-icon /> View Books</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.add-class-icon /> Add New Books</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.list-icon />Manage Book Loans</x-side-bar-link>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="hs-accordion" id="payment-accordion">
                        <x-side-bar-button>
                            <x-svg.bank-icon />
                            Payments
                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </x-side-bar-button>

                        <div id="payment-accordion-sub-1-collapse-1"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                            role="payment" aria-labelledby="payment-accordion">
                            <ul class="pt-1 ps-7 space-y-1">
                                <li>
                                    <x-side-bar-link><x-svg.eye-icon /> View Payments</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.add-class-icon /> Add Payment</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.clock-icon /> Payment History</x-side-bar-link>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="hs-accordion" id="reports-accordion">
                        <x-side-bar-button>
                            <x-svg.reception-icon />
                            Reports
                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </x-side-bar-button>

                        <div id="reports-accordion-sub-1-collapse-1"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                            role="reports" aria-labelledby="reports-accordion">
                            <ul class="pt-1 ps-7 space-y-1">
                                <li>
                                    <x-side-bar-link><x-svg.eye-icon /> View Academic Reports</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.body-text-icon />Generate Reports</x-side-bar-link>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="hs-accordion" id="notification-accordion">
                        <x-side-bar-button>
                            <x-svg.bell-icon />
                            Notifications
                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </x-side-bar-button>

                        <div id="notification-accordion-sub-1-collapse-1"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                            role="notification" aria-labelledby="notification-accordion">
                            <ul class="pt-1 ps-7 space-y-1">
                                <li>
                                    <x-side-bar-link><x-svg.list-icon /> Manage Notifications</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.send-check-icon />Send Notifications</x-side-bar-link>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="hs-accordion" id="admin-settings-accordion">
                        <x-side-bar-button>
                            <x-svg.database-gear-icon />
                            Admin Settings
                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </x-side-bar-button>

                        <div id="admin-settings-accordion-sub-1-collapse-1"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                            role="admin-settings" aria-labelledby="admin-settings-accordion">
                            <ul class="pt-1 ps-7 space-y-1">
                                <li>
                                    <x-side-bar-link><x-svg.list-icon /> Manage Users</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.shield-check-icon />Roles and Permissions</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.building-exclamation-icon />School
                                        Information</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.slider-icon />General Settings</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.newspaper-icon />System Logs</x-side-bar-link>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="hs-accordion" id="system-log-accordion">
                        <x-side-bar-button>
                            <x-svg.newspaper-icon />
                            System Logs
                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </x-side-bar-button>

                        <div id="system-log-accordion-sub-1-collapse-1"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                            role="system-log" aria-labelledby="system-log-accordion">
                            <ul class="pt-1 ps-7 space-y-1">
                                <li>
                                    <x-side-bar-link><x-svg.eye-icon />View Activity Logs</x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.exclamation-circle />Error Logs</x-side-bar-link>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="hs-accordion" id="help-support-accordion">
                        <x-side-bar-button>
                            <x-svg.question-octagon-icon />
                            Help & Support
                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </x-side-bar-button>

                        <div id="help-support-accordion-sub-1-collapse-1"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                            role="help-support" aria-labelledby="help-support-accordion">
                            <ul class="pt-1 ps-7 space-y-1">
                                <li>
                                    <x-side-bar-link><x-svg.info-circle-icon />FAQs </x-side-bar-link>
                                </li>
                                <li>
                                    <x-side-bar-link><x-svg.person-lock-icon />Contact Support</x-side-bar-link>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Body -->
    </div>
</div>
<!-- End Sidebar -->
