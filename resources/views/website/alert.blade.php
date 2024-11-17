@extends('website.layout.layout', [
    'pageTitle' => 'Alert',
    'nav' => 'alert',
    'breadcrumbs' => [
        ['Alert'],
    ]
])

@section('content')


    <div class="p-4 bg-">
        <div class="heading text-center mb-4">
            <h4><i class="bi bi-emoji-laughing"> Toast Alert</i></h4>
        </div>
        <div class="row">

            <!-- Toast Alert -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="code-block mb-3">
                            <pre>
          Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: 'This is a Toast!',
            showConfirmButton: false,
            timer: 1500
          });
        </pre>
                        </div>
                        <h5 class="card-title">Toast Alert</h5>
                        <p class="card-text">A Toast-style alert in the top-right corner.</p>
                        <button class="btn btn-success mb-3" onclick="showToastAlert()">Show Toast</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="code-block mb-3">
                            <pre>
            Swal.fire({
              toast: true,
              position: 'top-left',
              icon: 'success',
              title: 'Toast at Top Left!',
              showConfirmButton: false,
              timer: 1500
            });
          </pre>
                        </div>
                        <h5 class="card-title">Toast at Top Left</h5>
                        <button class="btn btn-success mb-3" onclick="showToastTopLeft()">Show Toast</button>
                    </div>
                </div>
            </div>

            <!-- Toast Alert - Top Right -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="code-block mb-3">
                            <pre>
            Swal.fire({
              toast: true,
              position: 'top-right',
              icon: 'error',
              title: 'Toast at Top Right!',
              showConfirmButton: false,
              timer: 1500
            });
          </pre>
                        </div>
                        <h5 class="card-title">Toast at Top Right</h5>
                        <button class="btn btn-success mb-3" onclick="showToastTopRight()">Show Toast</button>
                    </div>
                </div>
            </div>

            <!-- Toast Alert - Bottom Left -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="code-block mb-3">
                            <pre>
            Swal.fire({
              toast: true,
              position: 'bottom-left',
              icon: 'info',
              title: 'Toast at Bottom Left!',
              showConfirmButton: false,
              timer: 1500
            });
          </pre>
                        </div>
                        <h5 class="card-title">Toast at Bottom Left</h5>
                        <button class="btn btn-success " onclick="showToastBottomLeft()">Show Toast</button>
                    </div>
                </div>
            </div>


            <!-- Toast Alert - Bottom Right -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="code-block mb-3">
                            <pre>
            Swal.fire({
              toast: true,
              position: 'bottom-right',
              icon: 'warning',
              title: 'Toast at Bottom Right!',
              showConfirmButton: false,
              timer: 1500
            });
          </pre>
                        </div>
                        <h5 class="card-title">Toast at Bottom Right</h5>
                        <button class="btn btn-success mb-3" onclick="showToastBottomRight()">Show
                            Toast</button>
                    </div>
                </div>
            </div>

            <!-- Toast Alert - Center -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="code-block mb-3">
                            <pre>
            Swal.fire({
              toast: true,
              position: 'center',
              icon: 'success',
              title: 'Toast at Center!',
              showConfirmButton: false,
              timer: 1500
            });
          </pre>
                        </div>
                        <h5 class="card-title">Toast at Center</h5>
                        <button class="btn btn-success mb-3" onclick="showToastCenter()">Show Toast</button>
                    </div>
                </div>
            </div>

            <!-- Toast Alert - Top Start -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="code-block mb-3">
                            <pre>
            Swal.fire({
              toast: true,
              position: 'top-start',
              icon: 'info',
              title: 'Toast at Top Start!',
              showConfirmButton: false,
              timer: 1500
            });
          </pre>
                        </div>
                        <h5 class="card-title">Toast at Top Start</h5>
                        <button class="btn btn-success mb-3" onclick="showToastTopStart()">Show Toast</button>
                    </div>
                </div>
            </div>


        </div>
    </div>







    <!-- js Alert  -->
    <div class="p-4 bg-light">
        <div class="heading text-center mb-4">
            <h4><i class="bi bi-x-diamond-fill"> Simple JS Alert</i></h4>
        </div>

        <div class="row">
            <!-- Simple Alert -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="code-block mb-3">
                            <pre>alert('Welcome to My Magical World!');</pre>
                        </div>
                        <h5 class="card-title">Simple Alert</h5>
                        <p class="card-text">This is a basic JS Alert example.</p>
                        <button class="btn btn-warning" onclick="showAlert()">Alert</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="code-block mb-3">
                            <pre>const confirmed = confirm("Are you sure you want to proceed?");
                            if (confirmed) {
                                alert("You confirmed the action!");
                            } else {
                                alert("Action canceled.");
                            }</pre>
                        </div>
                        <h5 class="card-title">Simple Confirmation Alert</h5>
                        <p class="card-text">This is a basic JS Confirmation Alert example.</p>
                        <button class="btn btn-warning" onclick="simpleConfirmation()">Conformation</button>

                    </div>
                </div>
            </div>



        </div>

    </div>

    <!-- sweet Alert  -->
    <div class="p-4">
        <div class="heading text-center mb-4">
            <h4><i class="bi bi-award-fill"> Sweet Alert</i></h4>
        </div>

        <div class="row">
            <!-- Simple  Alert -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="code-block mb-3">
                            <pre>Swal.fire('This is a simple alert!');</pre>
                        </div>
                        <h5 class="card-title">Simple Alert</h5>
                        <p class="card-text">This is a basic SweetAlert example.</p>
                        <button class="btn btn-info" onclick="showSimpleAlert()">Sweet Alert</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="code-block mb-3">
                            <pre>Swal.fire('Hello World!',
                            'This is a SweetAlert!',
                            'success');</pre>
                        </div>
                        <h5 class="card-title">Sweet Alert With Icon</h5>
                        <p class="card-text">This is a SweetAlert With Icon.</p>
                        <button class="btn btn-info" onclick="showSweet()">Sweet Alert</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="code-block mb-3">
                            <pre>Swal.fire({
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
                        });</pre>
                        </div>
                        <h5 class="card-title">Sweet Alert With Icon</h5>
                        <p class="card-text">This is a SweetAlert With Icon.</p>
                        <button class="btn btn-info" onclick="sweetConformation()">Conformation</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="code-block mb-3">
                            <pre>let timerInterval;
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
                            });</pre>
                        </div>
                        <h5 class="card-title">Sweet Alert With Icon</h5>
                        <p class="card-text">This is a SweetAlert With Icon.</p>
                        <button class="btn btn-info" onclick="sweetTimer()">Left Top With Timer </button>
                    </div>
                </div>
            </div>

            <!-- Timer Alert -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="code-block mb-3">
                            <pre>Swal.fire({
            title: 'Auto close alert!',
            timer: 2000,
          }); </pre>
                        </div>
                        <h5 class="card-title">Timer Alert</h5>
                        <p class="card-text">This alert closes automatically after a set time.</p>
                        <button class="btn btn-info mb-3" onclick="showTimerAlert()">Timer Alert</button>
                    </div>
                </div>
            </div>

            <!-- Custom Position Alert -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="code-block mb-3">
                            <pre>
          Swal.fire({
            title: 'Custom Position!',
            position: 'top-start',
            icon: 'info',
            showConfirmButton: false,
            timer: 1500
          });
        </pre>
                        </div>
                        <h5 class="card-title">Custom Position Alert</h5>
                        <p class="card-text">Show alert in custom position (top-start).</p>
                        <button class="btn btn-info mb-3" onclick="showCustomPositionAlert()">Show
                            Alert</button>
                    </div>
                </div>
            </div>

            <!-- Input Alert -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="code-block mb-3">
                            <pre>
          Swal.fire({
            title: 'Enter your name',
            input: 'text',
            showCancelButton: true,
          });
        </pre>
                        </div>
                        <h5 class="card-title">Input Alert</h5>
                        <p class="card-text">Take input from users with SweetAlert.</p>
                        <button class="btn btn-info mb-3" onclick="showInputAlert()">Show Alert</button>
                    </div>
                </div>
            </div>

        </div>

    </div> 
@endsection