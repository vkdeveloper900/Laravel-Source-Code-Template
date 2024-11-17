<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Template</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.7/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Custom CSS (Optional) -->
    <style>
        body {
            padding-top: 56px;
        }

        /* Custom button styles for SweetAlert2 */
        .swal2-confirm {
            background-color: #28a745 !important;
            /* Green for confirm button */
            border-color: #28a745 !important;
            color: white !important;
        }

        .swal2-confirm:hover {
            background-color: #218838 !important;
            border-color: #1e7e34 !important;
        }

        .swal2-cancel {
            background-color: #dc3545 !important;
            /* Red for cancel button */
            border-color: #dc3545 !important;
            color: white !important;
        }

        .swal2-cancel:hover {
            background-color: #c82333 !important;
            border-color: #bd2130 !important;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">My Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <div class="heading text-center mb-5">
            <h1>Alert</h1>
        </div>
        <div class="m-5 p-3 border rounded bg-light">
            <div class="row text-center">

                <div class="heading text-center mb-1">
                    <h4>Simple Alert</h4>
                </div>

                <div class="col-6 ">
                    <div class="container">
                        <button class="btn btn-warning" onclick="showAlert()">Alert</button>
                        <p class="text-muted mt-1">Using Simple Alert</p>
                    </div>
                </div>

                <div class="col-6">
                    <div class="container">
                        <button class="btn btn-warning" onclick="confirmation()">Conformation</button>
                        <p class="text-muted mt-1">Using Simple Conformation Alert</p>
                    </div>
                </div>

                <div class="heading text-center mb-1">
                    <h4>Sweet Alert</h4>
                </div>


                <div class="col-4 mt-4">
                    <div class="container">
                        <button class="btn btn-info" onclick="showSweet()">Center </button>
                        <p class="text-muted mt-1">Using Sweet Alert</p>

                    </div>
                </div>

                <div class="col-4 mt-4">
                    <div class="container">
                        <button class="btn btn-info" onclick="sweetConformation()">Conformation</button>
                        <p class="text-muted mt-1">Using Sweet Conformation Alert</p>

                    </div>
                </div>

                <div class="col-4 mt-4">
                    <div class="container">
                        <button class="btn btn-info" onclick="sweetTimer()">Left Top With Timer </button>
                        <p class="text-muted mt-1">Using Sweet Alert With Timer</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <p>&copy; 2024 My Website. All rights reserved.</p>
            <p>
                Follow us:
                <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
            </p>
        </div>
    </footer>

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.7/dist/sweetalert2.min.js"></script>

    <!-- Custom script -->
    <script>
        function showAlert() {
            alert('Welcome to My Magical World!');
        }

        function confirmation() {
            const confirmed = confirm("Are you sure you want to proceed?");
            if (confirmed) {
                alert("You confirmed the action!");
            } else {
                alert("Action canceled.");
            }
        }

        function showSweet() {
            Swal.fire('Hello World!',
                'This is a SweetAlert!',
                'success');
        }

        function sweetConformation() {
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

            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire('Deleted!', 'Your file has been deleted.', 'success');
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire('Cancelled', 'Your file is safe :)', 'error');
                }
            });
        }

        function sweetTimer() {
            let timerInterval;
            Swal.fire({
                position: "top-end",
                title: "Auto close alert!",
                html: "I will close in <b></b> milliseconds.",
                timer: 5000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading();
                    const timer = Swal.getPopup().querySelector("b");
                    timerInterval = setInterval(() => {
                        timer.textContent = `${Swal.getTimerLeft()}`;
                    }, 100);
                },
                willClose: () => {
                    clearInterval(timerInterval);
                }
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log("I was closed by the timer");
                }
            }); }
    </script>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
