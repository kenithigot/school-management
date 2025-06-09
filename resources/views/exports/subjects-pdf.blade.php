<!DOCTYPE html>
<html>

<head>
    <title>Subjects Report</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h2>Subjects Report</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Subject Code</th>
                <th>Subject Name</th>
                <th>Department</th>
                <th>Semester</th>
                <th>Year Level</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $index => $subject)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $subject->subject_code }}</td>
                    <td>{{ $subject->subject_name }}</td>
                    <td>{{ $subject->department->department_name ?? 'N/A' }}</td>
                    <td>{{ $subject->semester }}</td>
                    <td>{{ $subject->year_level }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
