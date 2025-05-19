<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subjects')->insert([
            ['subject_name' => 'Principles of Management', 'subject_code' => 'BBA101', 'description' => 'Core Management principles', 'units' => 3, 'semester' => '1', 'year_level' => '1', 'department_id' => 1],
            ['subject_name' => 'Business Communication', 'subject_code' => 'BBA102', 'description' => 'Effective communication in business', 'units' => 3, 'semester' => '1', 'year_level' => '1', 'department_id' => 1],
            ['subject_name' => 'Business Mathematics', 'subject_code' => 'BBA103', 'description' => 'Mathematics for business applications', 'units' => 3, 'semester' => '1', 'year_level' => '1', 'department_id' => 1],
            ['subject_name' => 'Business Economics (Micro and Macro)', 'subject_code' => 'BBA104', 'description' => 'Economic principles in business', 'units' => 3, 'semester' => '2', 'year_level' => '1', 'department_id' => 1],
            ['subject_name' => 'Financial Accounting', 'subject_code' => 'BBA105', 'description' => 'Basics of accounting', 'units' => 3, 'semester' => '2', 'year_level' => '1', 'department_id' => 1],
            ['subject_name' => 'Cost and Management Accounting', 'subject_code' => 'BBA106', 'description' => 'Costing and management accounting concepts', 'units' => 3, 'semester' => '2', 'year_level' => '2', 'department_id' => 1],
            ['subject_name' => 'Marketing Management', 'subject_code' => 'BBA107', 'description' => 'Introduction to marketing', 'units' => 3, 'semester' => '1', 'year_level' => '2', 'department_id' => 1],
            ['subject_name' => 'Human Resource Management', 'subject_code' => 'BBA108', 'description' => 'Basics of HRM', 'units' => 3, 'semester' => '1', 'year_level' => '2', 'department_id' => 1],
            ['subject_name' => 'Business Law', 'subject_code' => 'BBA109', 'description' => 'Legal aspects of business', 'units' => 3, 'semester' => '2', 'year_level' => '2', 'department_id' => 1],
            ['subject_name' => 'Organizational Behavior', 'subject_code' => 'BBA110', 'description' => 'Behavior in organizations', 'units' => 3, 'semester' => '2', 'year_level' => '2', 'department_id' => 1],
            ['subject_name' => 'Statistics for Business', 'subject_code' => 'BBA111', 'description' => 'Statistical methods in business', 'units' => 3, 'semester' => '1', 'year_level' => '2', 'department_id' => 1],
            ['subject_name' => 'Management Information Systems (MIS)', 'subject_code' => 'BBA112', 'description' => 'Information systems in management', 'units' => 3, 'semester' => '1', 'year_level' => '2', 'department_id' => 1],
            ['subject_name' => 'Operations Management', 'subject_code' => 'BBA113', 'description' => 'Managing operations', 'units' => 3, 'semester' => '2', 'year_level' => '2', 'department_id' => 1],
            ['subject_name' => 'Business Environment', 'subject_code' => 'BBA114', 'description' => 'Business and its environment', 'units' => 3, 'semester' => '2', 'year_level' => '2', 'department_id' => 1],
            ['subject_name' => 'Entrepreneurship Development', 'subject_code' => 'BBA115', 'description' => 'Starting and managing new businesses', 'units' => 3, 'semester' => '2', 'year_level' => '2', 'department_id' => 1],

            // Specializations (Year 3) - Marketing
            ['subject_name' => 'Consumer Behavior', 'subject_code' => 'BBA201', 'description' => 'Understanding consumer psychology', 'units' => 3, 'semester' => '1', 'year_level' => '3', 'department_id' => 1],
            ['subject_name' => 'Digital Marketing', 'subject_code' => 'BBA202', 'description' => 'Online marketing strategies', 'units' => 3, 'semester' => '1', 'year_level' => '3', 'department_id' => 1],
            ['subject_name' => 'Sales & Distribution Management', 'subject_code' => 'BBA203', 'description' => 'Sales force and distribution', 'units' => 3, 'semester' => '1', 'year_level' => '3', 'department_id' => 1],
            ['subject_name' => 'Brand Management', 'subject_code' => 'BBA204', 'description' => 'Building strong brands', 'units' => 3, 'semester' => '2', 'year_level' => '3', 'department_id' => 1],

            // Finance
            ['subject_name' => 'Financial Management', 'subject_code' => 'BBA205', 'description' => 'Managing finances', 'units' => 3, 'semester' => '1', 'year_level' => '3', 'department_id' => 1],
            ['subject_name' => 'Investment Analysis', 'subject_code' => 'BBA206', 'description' => 'Analyzing investments', 'units' => 3, 'semester' => '1', 'year_level' => '3', 'department_id' => 1],
            ['subject_name' => 'Banking and Insurance', 'subject_code' => 'BBA207', 'description' => 'Banking and insurance fundamentals', 'units' => 3, 'semester' => '2', 'year_level' => '3', 'department_id' => 1],
            ['subject_name' => 'International Finance', 'subject_code' => 'BBA208', 'description' => 'Global finance', 'units' => 3, 'semester' => '2', 'year_level' => '3', 'department_id' => 1],

            // Human Resource Management (HRM)
            ['subject_name' => 'Recruitment and Selection', 'subject_code' => 'BBA209', 'description' => 'Hiring processes', 'units' => 3, 'semester' => '1', 'year_level' => '3', 'department_id' => 1],
            ['subject_name' => 'Training and Development', 'subject_code' => 'BBA210', 'description' => 'Employee training', 'units' => 3, 'semester' => '1', 'year_level' => '3', 'department_id' => 1],
            ['subject_name' => 'Industrial Relations', 'subject_code' => 'BBA211', 'description' => 'Employer-employee relations', 'units' => 3, 'semester' => '2', 'year_level' => '3', 'department_id' => 1],
            ['subject_name' => 'Performance Management', 'subject_code' => 'BBA212', 'description' => 'Managing employee performance', 'units' => 3, 'semester' => '2', 'year_level' => '3', 'department_id' => 1],

            // International Business
            ['subject_name' => 'Global Trade Policies', 'subject_code' => 'BBA213', 'description' => 'Policies affecting global trade', 'units' => 3, 'semester' => '1', 'year_level' => '3', 'department_id' => 1],
            ['subject_name' => 'Export-Import Management', 'subject_code' => 'BBA214', 'description' => 'Managing export and import operations', 'units' => 3, 'semester' => '1', 'year_level' => '3', 'department_id' => 1],
            ['subject_name' => 'Cross-Cultural Management', 'subject_code' => 'BBA215', 'description' => 'Managing cultural diversity', 'units' => 3, 'semester' => '2', 'year_level' => '3', 'department_id' => 1],
            ['subject_name' => 'International Marketing', 'subject_code' => 'BBA216', 'description' => 'Marketing in international markets', 'units' => 3, 'semester' => '2', 'year_level' => '3', 'department_id' => 1],

            // Operations & Supply Chain
            ['subject_name' => 'Logistics Management', 'subject_code' => 'BBA217', 'description' => 'Managing logistics', 'units' => 3, 'semester' => '1', 'year_level' => '3', 'department_id' => 1],
            ['subject_name' => 'Quality Management', 'subject_code' => 'BBA218', 'description' => 'Ensuring quality in operations', 'units' => 3, 'semester' => '1', 'year_level' => '3', 'department_id' => 1],
            ['subject_name' => 'Production Planning', 'subject_code' => 'BBA219', 'description' => 'Planning production processes', 'units' => 3, 'semester' => '2', 'year_level' => '3', 'department_id' => 1],
            ['subject_name' => 'Supply Chain Strategy', 'subject_code' => 'BBA220', 'description' => 'Supply chain management strategies', 'units' => 3, 'semester' => '2', 'year_level' => '3', 'department_id' => 1],

            // Other Common Courses
            ['subject_name' => 'Business Ethics and Corporate Social Responsibility (CSR)', 'subject_code' => 'BBA221', 'description' => 'Ethical business practices', 'units' => 3, 'semester' => '1', 'year_level' => '3', 'department_id' => 1],
            ['subject_name' => 'Strategic Management', 'subject_code' => 'BBA222', 'description' => 'Business strategy formulation', 'units' => 3, 'semester' => '1', 'year_level' => '3', 'department_id' => 1],
            ['subject_name' => 'Project Management', 'subject_code' => 'BBA223', 'description' => 'Managing projects effectively', 'units' => 3, 'semester' => '2', 'year_level' => '3', 'department_id' => 1],
            ['subject_name' => 'E-Commerce', 'subject_code' => 'BBA224', 'description' => 'Online business and commerce', 'units' => 3, 'semester' => '2', 'year_level' => '3', 'department_id' => 1],
            ['subject_name' => 'Internship/Industry Project', 'subject_code' => 'BBA225', 'description' => 'Practical industry experience', 'units' => 3, 'semester' => '2', 'year_level' => '3', 'department_id' => 1],
            ['subject_name' => 'Business Research Methods', 'subject_code' => 'BBA226', 'description' => 'Research methodologies in business', 'units' => 3, 'semester' => '1', 'year_level' => '3', 'department_id' => 1],
            ['subject_name' => 'Leadership Skills and Team Management', 'subject_code' => 'BBA227', 'description' => 'Developing leadership and teamwork', 'units' => 3, 'semester' => '1', 'year_level' => '3', 'department_id' => 1],


            [
                'subject_code' => 'PSY101',
                'subject_name' => 'Introduction to Psychology',
                'description' => 'Overview of psychological concepts and principles.',
                'units' => 3,
                'semester' => '1',
                'year_level' => '1',
                'department_id' => 2
            ],
            [
                'subject_code' => 'PSY102',
                'subject_name' => 'General Biology (for Psychology majors)',
                'description' => 'Basic biology focused on human biology and neuroscience.',
                'units' => 3,
                'semester' => '1',
                'year_level' => '1',
                'department_id' => 2
            ],
            [
                'subject_code' => 'ENG101 PSY',
                'subject_name' => 'English Communication',
                'description' => 'Effective communication skills in English.',
                'units' => 3,
                'semester' => '1',
                'year_level' => '1',
                'department_id' => 2
            ],
            [
                'subject_code' => 'SOC101',
                'subject_name' => 'Introduction to Sociology',
                'description' => 'Basic principles and theories in sociology.',
                'units' => 3,
                'semester' => '1',
                'year_level' => '1',
                'department_id' => 2
            ],
            [
                'subject_code' => 'MATH101 Basic',
                'subject_name' => 'Basic Statistics or Quantitative Methods',
                'description' => 'Introduction to statistics with application to behavioral sciences.',
                'units' => 3,
                'semester' => '1',
                'year_level' => '1',
                'department_id' => 2
            ],

            // Year 1 - Semester 2
            [
                'subject_code' => 'PSY103',
                'subject_name' => 'Developmental Psychology',
                'description' => 'Study of human development across the lifespan.',
                'units' => 3,
                'semester' => '2',
                'year_level' => '1',
                'department_id' => 2
            ],
            [
                'subject_code' => 'PSY104',
                'subject_name' => 'Cognitive Psychology',
                'description' => 'Study of mental processes such as perception and memory.',
                'units' => 3,
                'semester' => '2',
                'year_level' => '1',
                'department_id' => 2
            ],
            [
                'subject_code' => 'PHIL101',
                'subject_name' => 'Introduction to Philosophy',
                'description' => 'Fundamentals of philosophical thought and ethics.',
                'units' => 3,
                'semester' => '2',
                'year_level' => '1',
                'department_id' => 2
            ],
            [
                'subject_code' => 'ENG102 PSY',
                'subject_name' => 'Academic Writing',
                'description' => 'Techniques and skills for academic essays and papers.',
                'units' => 3,
                'semester' => '2',
                'year_level' => '1',
                'department_id' => 2
            ],
            [
                'subject_code' => 'SOC102',
                'subject_name' => 'Social Psychology I',
                'description' => 'Study of how individuals interact in social contexts.',
                'units' => 3,
                'semester' => '2',
                'year_level' => '1',
                'department_id' => 2
            ],

            // Year 2 - Semester 3
            [
                'subject_code' => 'PSY201 PSYCHOLOGY',
                'subject_name' => 'Biological Psychology / Physiological Psychology',
                'description' => 'Study of the biological basis of behavior.',
                'units' => 3,
                'semester' => '1',
                'year_level' => '2',
                'department_id' => 2
            ],
            [
                'subject_code' => 'PSY202',
                'subject_name' => 'Research Methods in Psychology',
                'description' => 'Introduction to psychological research design and analysis.',
                'units' => 3,
                'semester' => '1',
                'year_level' => '2',
                'department_id' => 2
            ],
            [
                'subject_code' => 'PSY203',
                'subject_name' => 'Abnormal Psychology',
                'description' => 'Study of abnormal behaviors and mental disorders.',
                'units' => 3,
                'semester' => '1',
                'year_level' => '2',
                'department_id' => 2
            ],
            [
                'subject_code' => 'STAT201 I',
                'subject_name' => 'Applied Statistics for Behavioral Sciences',
                'description' => 'Statistical methods used in psychology research.',
                'units' => 3,
                'semester' => '1',
                'year_level' => '2',
                'department_id' => 2
            ],
            [
                'subject_code' => 'ELECTIVE1 BA',
                'subject_name' => 'Elective (e.g., Anthropology, History)',
                'description' => 'Choice of elective course to broaden knowledge.',
                'units' => 3,
                'semester' => '1',
                'year_level' => '2',
                'department_id' => 2
            ],

            // Year 2 - Semester 4
            [
                'subject_code' => 'PSY204',
                'subject_name' => 'Personality Psychology',
                'description' => 'Study of personality theories and traits.',
                'units' => 3,
                'semester' => '2',
                'year_level' => '2',
                'department_id' => 2
            ],
            [
                'subject_code' => 'PSY205',
                'subject_name' => 'Social Psychology II',
                'description' => 'Advanced concepts of social interactions.',
                'units' => 3,
                'semester' => '2',
                'year_level' => '2',
                'department_id' => 2
            ],
            [
                'subject_code' => 'PSY206',
                'subject_name' => 'Psychological Testing and Measurement',
                'description' => 'Methods for psychological assessment.',
                'units' => 3,
                'semester' => '2',
                'year_level' => '2',
                'department_id' => 2
            ],
            [
                'subject_code' => 'ELECTIVE2 BA',
                'subject_name' => 'Elective (e.g., Philosophy, Education)',
                'description' => 'Choice of elective course to broaden knowledge.',
                'units' => 3,
                'semester' => '2',
                'year_level' => '2',
                'department_id' => 2
            ],
            [
                'subject_code' => 'PSY207',
                'subject_name' => 'Psychopathology',
                'description' => 'Study of mental disorders and clinical psychology.',
                'units' => 3,
                'semester' => '2',
                'year_level' => '2',
                'department_id' => 2
            ],

            // Year 3 - Semester 5 (Specialized/Elective Courses)
            [
                'subject_code' => 'PSY301',
                'subject_name' => 'Cognitive Neuroscience',
                'description' => 'Study of the neural basis of cognition.',
                'units' => 3,
                'semester' => '1',
                'year_level' => '3',
                'department_id' => 2
            ],
            [
                'subject_code' => 'PSY302',
                'subject_name' => 'Clinical Psychology',
                'description' => 'Study of clinical methods and mental health treatments.',
                'units' => 3,
                'semester' => '1',
                'year_level' => '3',
                'department_id' => 2
            ],
            [
                'subject_code' => 'PSY303',
                'subject_name' => 'Health Psychology',
                'description' => 'Psychological aspects of health and illness.',
                'units' => 3,
                'semester' => '1',
                'year_level' => '3',
                'department_id' => 2
            ],
            [
                'subject_code' => 'PSY304',
                'subject_name' => 'Counseling Psychology',
                'description' => 'Techniques in counseling and therapy.',
                'units' => 3,
                'semester' => '1',
                'year_level' => '3',
                'department_id' => 2
            ],
            [
                'subject_code' => 'ELECTIVE3 PYSCHOLOGY',
                'subject_name' => 'Elective (e.g., Gender Studies, Ethics)',
                'description' => 'Choice of elective course.',
                'units' => 3,
                'semester' => '1',
                'year_level' => '3',
                'department_id' => 2
            ],

            // Year 3 - Semester 6 (Advanced Topics & Thesis)
            [
                'subject_code' => 'PSY305',
                'subject_name' => 'Industrial and Organizational Psychology',
                'description' => 'Psychology in workplace settings.',
                'units' => 3,
                'semester' => '2',
                'year_level' => '3',
                'department_id' => 2
            ],
            [
                'subject_code' => 'PSY306',
                'subject_name' => 'Educational Psychology BASIC',
                'description' => 'Study of learning and teaching processes.',
                'units' => 3,
                'semester' => '2',
                'year_level' => '3',
                'department_id' => 2
            ],
            [
                'subject_code' => 'PSY307',
                'subject_name' => 'Psychology of Learning',
                'description' => 'Behavioral and cognitive learning theories.',
                'units' => 3,
                'semester' => '2',
                'year_level' => '3',
                'department_id' => 2
            ],
            [
                'subject_code' => 'PSY399',
                'subject_name' => 'Thesis / Research Project',
                'description' => 'Capstone research project.',
                'units' => 3,
                'semester' => '2',
                'year_level' => '3',
                'department_id' => 2
            ],
            [
                'subject_code' => 'ELECTIVE4 PYSCHOLOGY',
                'subject_name' => 'Elective',
                'description' => 'Final elective course.',
                'units' => 3,
                'semester' => '2',
                'year_level' => '3',
                'department_id' => 2
            ],

            // Year 1 - Semester 1
            ['subject_code' => 'CPE101', 'subject_name' => 'Introduction to Computer Engineering', 'description' => 'Basics of computer engineering', 'units' => 3, 'semester' => 1, 'year_level' => 1, 'department_id' => 3],
            ['subject_code' => 'MATH101 PreCal', 'subject_name' => 'Calculus I', 'description' => 'Differential and integral calculus', 'units' => 3, 'semester' => 1, 'year_level' => 1, 'department_id' => 3],
            ['subject_code' => 'PHYS101', 'subject_name' => 'Physics I (Mechanics)', 'description' => 'Mechanics and motion principles', 'units' => 3, 'semester' => 1, 'year_level' => 1, 'department_id' => 3],
            ['subject_code' => 'ENGL101', 'subject_name' => 'English Communication Skills', 'description' => 'Effective communication in English', 'units' => 3, 'semester' => 1, 'year_level' => 1, 'department_id' => 3],
            ['subject_code' => 'COMP101', 'subject_name' => 'Introduction to Computing', 'description' => 'Fundamentals of computing', 'units' => 3, 'semester' => 1, 'year_level' => 1, 'department_id' => 3],

            // Year 1 - Semester 2
            ['subject_code' => 'CPE102', 'subject_name' => 'Digital Logic Design', 'description' => 'Logic circuits and design', 'units' => 3, 'semester' => 2, 'year_level' => 1, 'department_id' => 3],
            ['subject_code' => 'MATH102 CPE', 'subject_name' => 'Calculus II', 'description' => 'Advanced calculus topics', 'units' => 3, 'semester' => 2, 'year_level' => 1, 'department_id' => 3],
            ['subject_code' => 'PHYS102', 'subject_name' => 'Physics II (Electricity and Magnetism)', 'description' => 'Electricity and magnetism concepts', 'units' => 3, 'semester' => 2, 'year_level' => 1, 'department_id' => 3],
            ['subject_code' => 'ENGL102', 'subject_name' => 'Technical Writing', 'description' => 'Technical communication skills', 'units' => 3, 'semester' => 2, 'year_level' => 1, 'department_id' => 3],
            ['subject_code' => 'COMP102', 'subject_name' => 'Programming Fundamentals', 'description' => 'Basic programming concepts', 'units' => 3, 'semester' => 2, 'year_level' => 1, 'department_id' => 3],

            // Year 2 - Semester 3
            ['subject_code' => 'CPE201', 'subject_name' => 'Data Structures and Algorithms', 'description' => 'Data organization and algorithm design', 'units' => 3, 'semester' => 1, 'year_level' => 2, 'department_id' => 3],
            ['subject_code' => 'MATH201 CPE', 'subject_name' => 'Linear Algebra', 'description' => 'Vector spaces and matrices', 'units' => 3, 'semester' => 1, 'year_level' => 2, 'department_id' => 3],
            ['subject_code' => 'ELEC201', 'subject_name' => 'Circuit Analysis', 'description' => 'Electrical circuit fundamentals', 'units' => 3, 'semester' => 1, 'year_level' => 2, 'department_id' => 3],
            ['subject_code' => 'COMP201', 'subject_name' => 'Object-Oriented Programming', 'description' => 'OOP principles and practice', 'units' => 3, 'semester' => 1, 'year_level' => 2, 'department_id' => 3],
            ['subject_code' => 'STAT201', 'subject_name' => 'Probability and Statistics', 'description' => 'Basic probability and statistics', 'units' => 3, 'semester' => 1, 'year_level' => 2, 'department_id' => 3],

            // Year 2 - Semester 4
            ['subject_code' => 'CPE202', 'subject_name' => 'Computer Architecture and Organization', 'description' => 'Internal structure of computers', 'units' => 3, 'semester' => 2, 'year_level' => 2, 'department_id' => 3],
            ['subject_code' => 'ELEC202', 'subject_name' => 'Electronics I', 'description' => 'Basic electronic devices and circuits', 'units' => 3, 'semester' => 2, 'year_level' => 2, 'department_id' => 3],
            ['subject_code' => 'COMP202', 'subject_name' => 'Operating Systems', 'description' => 'Operating system concepts', 'units' => 3, 'semester' => 2, 'year_level' => 2, 'department_id' => 3],
            ['subject_code' => 'MATH202 CPE', 'subject_name' => 'Differential Equations', 'description' => 'Ordinary differential equations', 'units' => 3, 'semester' => 2, 'year_level' => 2, 'department_id' => 3],
            ['subject_code' => 'ELEC203', 'subject_name' => 'Signals and Systems', 'description' => 'Signal processing fundamentals', 'units' => 3, 'semester' => 2, 'year_level' => 2, 'department_id' => 3],

            // Year 3 - Semester 5
            ['subject_code' => 'CPE301', 'subject_name' => 'Microprocessors and Interfacing', 'description' => 'Microprocessor architecture and programming', 'units' => 3, 'semester' => 1, 'year_level' => 3, 'department_id' => 3],
            ['subject_code' => 'ELEC301', 'subject_name' => 'Electronics II', 'description' => 'Advanced electronic circuits', 'units' => 3, 'semester' => 1, 'year_level' => 3, 'department_id' => 3],
            ['subject_code' => 'COMP301', 'subject_name' => 'Database Systems', 'description' => 'Database design and management', 'units' => 3, 'semester' => 1, 'year_level' => 3, 'department_id' => 3],
            ['subject_code' => 'CPE302', 'subject_name' => 'Embedded Systems', 'description' => 'Design of embedded systems', 'units' => 3, 'semester' => 1, 'year_level' => 3, 'department_id' => 3],
            ['subject_code' => 'ELEC302', 'subject_name' => 'Electromagnetics', 'description' => 'Electromagnetic theory', 'units' => 3, 'semester' => 1, 'year_level' => 3, 'department_id' => 3],

            // Year 3 - Semester 6
            ['subject_code' => 'CPE303', 'subject_name' => 'Software Engineering', 'description' => 'Software development lifecycle', 'units' => 3, 'semester' => 2, 'year_level' => 3, 'department_id' => 3],
            ['subject_code' => 'COMP302', 'subject_name' => 'Computer Networks', 'description' => 'Networking concepts and protocols', 'units' => 3, 'semester' => 2, 'year_level' => 3, 'department_id' => 3],
            ['subject_code' => 'CPE304', 'subject_name' => 'Digital Signal Processing', 'description' => 'Signal processing techniques', 'units' => 3, 'semester' => 2, 'year_level' => 3, 'department_id' => 3],
            ['subject_code' => 'ELEC303', 'subject_name' => 'Control Systems', 'description' => 'Control theory and applications', 'units' => 3, 'semester' => 2, 'year_level' => 3, 'department_id' => 3],
            ['subject_code' => 'CPE399', 'subject_name' => 'Undergraduate Research / Project', 'description' => 'Capstone project or research', 'units' => 3, 'semester' => 2, 'year_level' => 3, 'department_id' => 3],

            // Year 4 - Semester 7
            ['subject_code' => 'CPE401', 'subject_name' => 'VLSI Design', 'description' => 'Very Large Scale Integration design', 'units' => 3, 'semester' => 1, 'year_level' => 4, 'department_id' => 3],
            ['subject_code' => 'COMP401', 'subject_name' => 'Cybersecurity', 'description' => 'Computer security principles', 'units' => 3, 'semester' => 1, 'year_level' => 4, 'department_id' => 3],
            ['subject_code' => 'CPE402', 'subject_name' => 'Artificial Intelligence', 'description' => 'AI concepts and techniques', 'units' => 3, 'semester' => 1, 'year_level' => 4, 'department_id' => 3],
            ['subject_code' => 'ELEC401', 'subject_name' => 'Power Electronics', 'description' => 'Power electronic devices and circuits', 'units' => 3, 'semester' => 1, 'year_level' => 4, 'department_id' => 3],
            ['subject_code' => 'ELECTIVE1 CPE', 'subject_name' => 'Elective Course  1(e.g., Robotics)', 'description' => 'Elective course', 'units' => 3, 'semester' => 1, 'year_level' => 4, 'department_id' => 3],

            // Year 4 - Semester 8
            ['subject_code' => 'CPE403', 'subject_name' => 'Capstone Design Project', 'description' => 'Final year design project', 'units' => 3, 'semester' => 2, 'year_level' => 4, 'department_id' => 3],
            ['subject_code' => 'COMP402', 'subject_name' => 'Mobile and Wireless Computing', 'description' => 'Mobile computing technologies', 'units' => 3, 'semester' => 2, 'year_level' => 4, 'department_id' => 3],
            ['subject_code' => 'ELECTIVE2 CPE', 'subject_name' => 'Elective Course 2 (e.g., Machine Learning)', 'description' => 'Elective course', 'units' => 3, 'semester' => 2, 'year_level' => 4, 'department_id' => 3],
            ['subject_code' => 'ELECTIVE3 CPE', 'subject_name' => 'Elective Course 3', 'description' => 'Elective course', 'units' => 3, 'semester' => 2, 'year_level' => 4, 'department_id' => 3],
            ['subject_code' => 'ELECTIVE4 CPE', 'subject_name' => 'Elective Course 4', 'description' => 'Elective course', 'units' => 3, 'semester' => 2, 'year_level' => 4, 'department_id' => 3],

            // Year 1 – Semester 1
            ['subject_code' => 'ELED101', 'subject_name' => 'Foundations of Education', 'description' => 'Introduction to the philosophy and foundations of education', 'units' => 3, 'semester' => 1, 'year_level' => 1, 'department_id' => 4],
            ['subject_code' => 'ENG101  EDUC', 'subject_name' => 'Communication Arts', 'description' => 'English communication skills development', 'units' => 3, 'semester' => 1, 'year_level' => 1, 'department_id' => 4],
            ['subject_code' => 'MATH101 2', 'subject_name' => 'Mathematics for Elementary Teachers I', 'description' => 'Basic math concepts for teaching', 'units' => 3, 'semester' => 1, 'year_level' => 1, 'department_id' => 4],
            ['subject_code' => 'SCI101 I', 'subject_name' => 'Science for Elementary Teachers I', 'description' => 'Basic science concepts for teaching', 'units' => 3, 'semester' => 1, 'year_level' => 1, 'department_id' => 4],
            ['subject_code' => 'FIL101 SOCSCIE', 'subject_name' => 'Filipino Language and Literature I', 'description' => 'Panimulang pagsusuri ng wikang Filipino', 'units' => 3, 'semester' => 1, 'year_level' => 1, 'department_id' => 4],

            // Year 1 – Semester 2
            ['subject_code' => 'ELED102', 'subject_name' => 'Child and Adolescent Development', 'description' => 'Human development stages from birth to adolescence', 'units' => 3, 'semester' => 2, 'year_level' => 1, 'department_id' => 4],
            ['subject_code' => 'ENG102 EDUC', 'subject_name' => 'Reading and Writing Skills', 'description' => 'College-level reading and writing', 'units' => 3, 'semester' => 2, 'year_level' => 1, 'department_id' => 4],
            ['subject_code' => 'MATH102 EDUC', 'subject_name' => 'Mathematics for Elementary Teachers II', 'description' => 'Advanced math concepts for teaching', 'units' => 3, 'semester' => 2, 'year_level' => 1, 'department_id' => 4],
            ['subject_code' => 'SCI102', 'subject_name' => 'Science for Elementary Teachers II', 'description' => 'Advanced science concepts for teaching', 'units' => 3, 'semester' => 2, 'year_level' => 1, 'department_id' => 4],
            ['subject_code' => 'FIL102', 'subject_name' => 'Filipino Language and Literature II', 'description' => 'Pagpapalawak ng kaalaman sa wikang Filipino', 'units' => 3, 'semester' => 2, 'year_level' => 1, 'department_id' => 4],

            // Year 2 – Semester 3
            ['subject_code' => 'ELED201', 'subject_name' => 'Educational Psychology PSY', 'description' => 'Psychology principles in teaching', 'units' => 3, 'semester' => 1, 'year_level' => 2, 'department_id' => 4],
            ['subject_code' => 'ENG201', 'subject_name' => 'Philippine Literature', 'description' => 'Survey of literature in the Philippines', 'units' => 3, 'semester' => 1, 'year_level' => 2, 'department_id' => 4],
            ['subject_code' => 'MATH201 EDUC', 'subject_name' => 'Number Sense and Operations', 'description' => 'Elementary mathematics concepts', 'units' => 3, 'semester' => 1, 'year_level' => 2, 'department_id' => 4],
            ['subject_code' => 'SOC201', 'subject_name' => 'Social Studies for Elementary Teachers I', 'description' => 'Teaching social sciences in elementary', 'units' => 3, 'semester' => 1, 'year_level' => 2, 'department_id' => 4],
            ['subject_code' => 'PSY201 CPE', 'subject_name' => 'Educational Assessment and Evaluation', 'description' => 'Measurement and evaluation in learning', 'units' => 3, 'semester' => 1, 'year_level' => 2, 'department_id' => 4],

            // Year 2 – Semester 4
            ['subject_code' => 'ELED202', 'subject_name' => 'Curriculum Development', 'description' => 'Curriculum design and implementation', 'units' => 3, 'semester' => 2, 'year_level' => 2, 'department_id' => 4],
            ['subject_code' => 'ENG202', 'subject_name' => 'Literature for Children', 'description' => 'Study of children’s literature', 'units' => 3, 'semester' => 2, 'year_level' => 2, 'department_id' => 4],
            ['subject_code' => 'MATH202 CPE II', 'subject_name' => 'Geometry and Measurement', 'description' => 'Geometry concepts for teachers', 'units' => 3, 'semester' => 2, 'year_level' => 2, 'department_id' => 4],
            ['subject_code' => 'SOC202', 'subject_name' => 'Social Studies for Elementary Teachers II', 'description' => 'Advanced social science teaching', 'units' => 3, 'semester' => 2, 'year_level' => 2, 'department_id' => 4],
            ['subject_code' => 'MAPEH201', 'subject_name' => 'Music, Arts, Physical Education, and Health I', 'description' => 'Fundamentals of MAPEH', 'units' => 3, 'semester' => 2, 'year_level' => 2, 'department_id' => 4],

            // Year 3 – Semester 5
            ['subject_code' => 'ELED301', 'subject_name' => 'Teaching Strategies and Techniques I', 'description' => 'Teaching strategies for elementary', 'units' => 3, 'semester' => 1, 'year_level' => 3, 'department_id' => 4],
            ['subject_code' => 'ENG301', 'subject_name' => 'Language Arts Curriculum', 'description' => 'Curriculum for English language arts', 'units' => 3, 'semester' => 1, 'year_level' => 3, 'department_id' => 4],
            ['subject_code' => 'SCI301', 'subject_name' => 'Earth Science', 'description' => 'Earth science concepts for teachers', 'units' => 3, 'semester' => 1, 'year_level' => 3, 'department_id' => 4],
            ['subject_code' => 'MAPEH301', 'subject_name' => 'Music, Arts, PE and Health II', 'description' => 'Advanced MAPEH concepts', 'units' => 3, 'semester' => 1, 'year_level' => 3, 'department_id' => 4],
            ['subject_code' => 'EDUC301', 'subject_name' => 'Educational Technology', 'description' => 'Integrating technology in teaching', 'units' => 3, 'semester' => 1, 'year_level' => 3, 'department_id' => 4],

            // Year 3 – Semester 6
            ['subject_code' => 'ELED302', 'subject_name' => 'Teaching Strategies and Techniques II', 'description' => 'Advanced teaching strategies', 'units' => 3, 'semester' => 2, 'year_level' => 3, 'department_id' => 4],
            ['subject_code' => 'ENG302', 'subject_name' => 'Oral Communication', 'description' => 'Public speaking and communication skills', 'units' => 3, 'semester' => 2, 'year_level' => 3, 'department_id' => 4],
            ['subject_code' => 'SCI302', 'subject_name' => 'Biology for Elementary Teachers', 'description' => 'Biological science teaching', 'units' => 3, 'semester' => 2, 'year_level' => 3, 'department_id' => 4],
            ['subject_code' => 'SOC301', 'subject_name' => 'Community Engagement and Development', 'description' => 'Community involvement strategies', 'units' => 3, 'semester' => 2, 'year_level' => 3, 'department_id' => 4],
            ['subject_code' => 'EDUC302', 'subject_name' => 'Guidance and Counseling', 'description' => 'Basic counseling and guidance principles', 'units' => 3, 'semester' => 2, 'year_level' => 3, 'department_id' => 4],

            // Year 4 – Semester 7
            ['subject_code' => 'ELED401', 'subject_name' => 'Action Research in Education', 'description' => 'Classroom-based research practices', 'units' => 3, 'semester' => 1, 'year_level' => 4, 'department_id' => 4],
            ['subject_code' => 'ELED402', 'subject_name' => 'Practicum / Student Teaching I', 'description' => 'Teaching internship I', 'units' => 6, 'semester' => 1, 'year_level' => 4, 'department_id' => 4],
            ['subject_code' => 'EDUC401', 'subject_name' => 'Classroom Management', 'description' => 'Strategies in managing classrooms', 'units' => 3, 'semester' => 1, 'year_level' => 4, 'department_id' => 4],
            ['subject_code' => 'EDUC402', 'subject_name' => 'Educational Measurement and Evaluation II', 'description' => 'Advanced evaluation techniques', 'units' => 3, 'semester' => 1, 'year_level' => 4, 'department_id' => 4],

            // Year 4 – Semester 8
            ['subject_code' => 'ELED403', 'subject_name' => 'Practicum / Student Teaching II', 'description' => 'Teaching internship II', 'units' => 6, 'semester' => 2, 'year_level' => 4, 'department_id' => 4],
            ['subject_code' => 'EDUC403', 'subject_name' => 'Educational Leadership and Administration', 'description' => 'Leadership skills in educational settings', 'units' => 3, 'semester' => 2, 'year_level' => 4, 'department_id' => 4],
            ['subject_code' => 'ELECTIVE1 EDUC', 'subject_name' => 'Elective Course (e.g., Special Education)', 'description' => 'Elective course', 'units' => 3, 'semester' => 2, 'year_level' => 4, 'department_id' => 4],
            ['subject_code' => 'ELECTIVE2 EDUC', 'subject_name' => 'Elective Course (e.g., Early Childhood Education)', 'description' => 'Elective course', 'units' => 3, 'semester' => 2, 'year_level' => 4, 'department_id' => 4],


            // Year 1 - Semester 1
            ['subject_name' => 'Introduction to Criminology', 'subject_code' => 'CRIM101', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 1, 'year_level' => 1, 'department_id' => 5],
            ['subject_name' => 'Theories of Crime Causation', 'subject_code' => 'CRIM102', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 1, 'year_level' => 1, 'department_id' => 5],
            ['subject_name' => 'Introduction to Sociology with Anthropology', 'subject_code' => 'SOCSCI101 I', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 1, 'year_level' => 1, 'department_id' => 5],
            ['subject_name' => 'Communication Skills I', 'subject_code' => 'ENG101 CRIM', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 1, 'year_level' => 1, 'department_id' => 5],
            ['subject_name' => 'College Algebra', 'subject_code' => 'MATH101 II', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 1, 'year_level' => 1, 'department_id' => 5],
            ['subject_name' => 'Physical Education I', 'subject_code' => 'PE101', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 2, 'semester' => 1, 'year_level' => 1, 'department_id' => 5],
            ['subject_name' => 'National Service Training Program I', 'subject_code' => 'NSTP101', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 1, 'year_level' => 1, 'department_id' => 5],

            // Year 1 - Semester 2
            ['subject_name' => 'Human Behavior and Victimology', 'subject_code' => 'CRIM103', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 2, 'year_level' => 1, 'department_id' => 5],
            ['subject_name' => 'Juvenile Delinquency', 'subject_code' => 'CRIM104', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 2, 'year_level' => 1, 'department_id' => 5],
            ['subject_name' => 'Police Organization and Administration', 'subject_code' => 'CRIM105', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 2, 'year_level' => 1, 'department_id' => 5],
            ['subject_name' => 'Communication Skills II', 'subject_code' => 'ENG102 CRIM', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 2, 'year_level' => 1, 'department_id' => 5],
            ['subject_name' => 'Komunikasyon sa Akademikong Filipino', 'subject_code' => 'FIL101 CRIM', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 2, 'year_level' => 1, 'department_id' => 5],
            ['subject_name' => 'Physical Education II', 'subject_code' => 'PE102', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 2, 'semester' => 2, 'year_level' => 1, 'department_id' => 5],
            ['subject_name' => 'National Service Training Program II', 'subject_code' => 'NSTP102', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 2, 'year_level' => 1, 'department_id' => 5],

            // Year 2 - Semester 1
            ['subject_name' => 'Criminal Law Book 1', 'subject_code' => 'CRIM201', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 1, 'year_level' => 2, 'department_id' => 5],
            ['subject_name' => 'Law Enforcement Organization & Admin. with Police Planning', 'subject_code' => 'CRIM202', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 1, 'year_level' => 2, 'department_id' => 5],
            ['subject_name' => 'Police Patrol Operations with Police Communications System', 'subject_code' => 'CRIM203', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 1, 'year_level' => 2, 'department_id' => 5],
            ['subject_name' => 'Philippine History', 'subject_code' => 'HIST101', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 1, 'year_level' => 2, 'department_id' => 5],
            ['subject_name' => 'General Chemistry (with Lab)', 'subject_code' => 'SCI101 CRIM', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 4, 'semester' => 1, 'year_level' => 2, 'department_id' => 5],
            ['subject_name' => 'Physical Education III', 'subject_code' => 'PE103', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 2, 'semester' => 1, 'year_level' => 2, 'department_id' => 5],

            // Year 2 - Semester 2
            ['subject_name' => 'Criminal Law Book 2', 'subject_code' => 'CRIM204', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 2, 'year_level' => 2, 'department_id' => 5],
            ['subject_name' => 'Traffic Management and Accident Investigation', 'subject_code' => 'CRIM205', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 2, 'year_level' => 2, 'department_id' => 5],
            ['subject_name' => 'Fire Protection and Arson Investigation', 'subject_code' => 'CRIM206', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 2, 'year_level' => 2, 'department_id' => 5],
            ['subject_name' => 'Police Intelligence', 'subject_code' => 'CRIM207', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 2, 'year_level' => 2, 'department_id' => 5],
            ['subject_name' => 'Art Appreciation', 'subject_code' => 'HUM101', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 2, 'year_level' => 2, 'department_id' => 5],
            ['subject_name' => 'Physical Education IV', 'subject_code' => 'PE104', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 2, 'semester' => 2, 'year_level' => 2, 'department_id' => 5],

            // Year 3 - Semester 1
            ['subject_name' => 'Criminalistics I (Police Photography)', 'subject_code' => 'CRIM301', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 1, 'year_level' => 3, 'department_id' => 5],
            ['subject_name' => 'Criminalistics II (Forensic Ballistics)', 'subject_code' => 'CRIM302', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 1, 'year_level' => 3, 'department_id' => 5],
            ['subject_name' => 'Criminal Evidence', 'subject_code' => 'CRIM303', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 1, 'year_level' => 3, 'department_id' => 5],
            ['subject_name' => 'Ethics and Values', 'subject_code' => 'CRIM304', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 1, 'year_level' => 3, 'department_id' => 5],
            ['subject_name' => 'Correctional Administration', 'subject_code' => 'CRIM305', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 1, 'year_level' => 3, 'department_id' => 5],

            // Year 3 - Semester 2
            ['subject_name' => 'Criminalistics III (Questioned Documents)', 'subject_code' => 'CRIM306', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 2, 'year_level' => 3, 'department_id' => 5],
            ['subject_name' => 'Criminalistics IV (Lie Detection & Polygraphy)', 'subject_code' => 'CRIM307', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 2, 'year_level' => 3, 'department_id' => 5],
            ['subject_name' => 'Comparative Models of Policing', 'subject_code' => 'CRIM308', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 2, 'year_level' => 3, 'department_id' => 5],
            ['subject_name' => 'Industrial Security Management', 'subject_code' => 'CRIM309', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 2, 'year_level' => 3, 'department_id' => 5],
            ['subject_name' => 'Organized Crime Investigation', 'subject_code' => 'CRIM310', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 2, 'year_level' => 3, 'department_id' => 5],

            // Year 4 - Semester 1
            ['subject_name' => 'Forensic Medicine', 'subject_code' => 'CRIM401', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 1, 'year_level' => 4, 'department_id' => 5],
            ['subject_name' => 'Research and Thesis Writing I', 'subject_code' => 'CRIM402', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 1, 'year_level' => 4, 'department_id' => 5],
            ['subject_name' => 'Drug Education and Vice Control', 'subject_code' => 'CRIM403', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 1, 'year_level' => 4, 'department_id' => 5],
            ['subject_name' => 'Firearms and Marksmanship', 'subject_code' => 'CRIM404', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 1, 'year_level' => 4, 'department_id' => 5],
            ['subject_name' => 'Seminar 1 (Current Issues in Criminology)', 'subject_code' => 'CRIM405', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 2, 'semester' => 1, 'year_level' => 4, 'department_id' => 5],

            // Year 4 - Semester 2
            ['subject_name' => 'Practicum I (Law Enforcement & Patrol)', 'subject_code' => 'CRIM406', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 2, 'year_level' => 4, 'department_id' => 5],
            ['subject_name' => 'Practicum II (Jail Management & Penology)', 'subject_code' => 'CRIM407', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 2, 'year_level' => 4, 'department_id' => 5],
            ['subject_name' => 'Practicum III (Crime Laboratory Work)', 'subject_code' => 'CRIM408', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 2, 'year_level' => 4, 'department_id' => 5],
            ['subject_name' => 'Research and Thesis Writing II', 'subject_code' => 'CRIM409', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 3, 'semester' => 2, 'year_level' => 4, 'department_id' => 5],
            ['subject_name' => 'Seminar 2 (Review for Board Exam)', 'subject_code' => 'CRIM410', 'description' => 'Overview of criminology, its development, and its role in understanding criminal behavior.', 'units' => 2, 'semester' => 2, 'year_level' => 4, 'department_id' => 5],
        ]);
    }
}
