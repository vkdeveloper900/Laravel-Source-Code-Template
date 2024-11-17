@extends('website.layout.layout', [
    'pageTitle' => 'Dashboard',
    'nav' => 'dashboard',
    'breadcrumbs' => [['Dashboard']],
])

@section('content')
    <div class="p-2 text-center">
        <h4>Welcome to the Admin Dashboard!</h4>
        <p>Student</p>
    </div>

    <div class="">
        <table border="1" class="table table-dark table-striped table-hover text-center">
            <thead class="">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->subject }}</td>
                        <td>
                            <!-- Edit Button -->
                            <button class="btn edit-btn rounded btn-success" data-id="{{ $student->id }}">
                                <i class="bi bi-pencil-square"></i>
                            </button>

                            <!-- Delete Button -->
                            <button class="btn delete-btn rounded btn-danger"
                                onclick="apiDeleteStudent({{ $student->id }})">
                                <i class="bi bi-trash3-fill"></i>
                            </button>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script>
        function apiDeleteStudent(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, keep it',
                reverseButtons: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
            }).then(function(result) {

                if (result.value) {
                    $.post("{{ route('apiDeleteStudent') }}", {
                        _token: "{{ csrf_token() }}",
                        id: id
                    }, function(respo) {

                        if (respo.success == true) {
                            Swal.fire({
                                icon: 'success', 
                                title: 'Deleted!',
                                text: respo.msg,
                                customClass: {
                                    confirmButton: 'btn btn-success'
                                }
                            }); 
                            setTimeout(function() {
                                window.location.reload()
                            }, 2000); 
                        } else {
                            Swal.fire({
                                icon: 'failed',
                                title: 'Failed',
                                text: respo.msg,
                                customClass: {
                                    confirmButton: 'btn btn-danger'
                                }
                            });
                        } 
                    }); 
                } //if
            });
        }
    </script>
@endsection
