<x-app-layout>
    <div class="container mt-5 p-4 bg-white shadow sm:rounded-lg">
        <h2 class="mb-4">Course Catalog</h2>
        
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Course Code</th>
                    <th>Course Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                <tr>
                    <td>{{ $course->course_code }}</td>
                    <td>{{ $course->course_name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>