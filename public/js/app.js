function showAlert() {
    alert('Welcome to My Magical World!');
}

function simpleConfirmation() {
    const confirmed = confirm("Are you sure you want to proceed?");
    if (confirmed) {
        alert("You confirmed the action!");
    } else {
        alert("Action canceled.");
    }
}


// Simple sweet Alert
function showSimpleAlert() {
    Swal.fire('This is a simple alert!');
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
    });
}

// Timer Alert
function showTimerAlert() {
    Swal.fire({
        title: 'Auto close alert!',
        text: 'This will close in 2 seconds.',
        timer: 2000,
        timerProgressBar: true,
    });
}

// Custom Position Alert
function showCustomPositionAlert() {
    Swal.fire({
        title: 'Custom Position!',
        position: 'top-start',
        icon: 'info',
        showConfirmButton: false,
        timer: 1500
    });
}


// Input Alert
function showInputAlert() {
    Swal.fire({
        title: 'Enter your name',
        input: 'text',
        inputPlaceholder: 'Enter your name here...',
        showCancelButton: true,
    }).then((result) => {
        if (result.value) {
            Swal.fire(`Hello, ${result.value}!`);
        }
    });
}

// Toast Alert
function showToastAlert() {
    Swal.fire({
        toast: true,
        position: 'top-end',
        icon: 'success',
        title: 'This is a Toast!',
        showConfirmButton: false,
        timer: 1500
    });
}



// Toast at Top Left
function showToastTopLeft() {
    Swal.fire({
        toast: true,
        position: 'top-left',
        icon: 'success',
        title: 'Toast at Top Left!',
        showConfirmButton: false,
        timer: 1500
    });
}

// Toast at Top Right
function showToastTopRight() {
    Swal.fire({
        toast: true,
        position: 'top-right',
        icon: 'error',
        title: 'Toast at Top Right!',
        showConfirmButton: false,
        timer: 1500
    });
}

// Toast at Bottom Left
function showToastBottomLeft() {
    Swal.fire({
        toast: true,
        position: 'bottom-left',
        icon: 'info',
        title: 'Toast at Bottom Left!',
        showConfirmButton: false,
        timer: 1500
    });
}

// Toast at Bottom Right
function showToastBottomRight() {
    Swal.fire({
        toast: true,
        position: 'bottom-right',
        icon: 'warning',
        title: 'Toast at Bottom Right!',
        showConfirmButton: false,
        timer: 1500
    });
}

// Toast at Center
function showToastCenter() {
    Swal.fire({
        toast: true,
        position: 'center',
        icon: 'success',
        title: 'Toast at Center!',
        showConfirmButton: false,
        timer: 1500
    });
}

// Toast at Top Start
function showToastTopStart() {
    Swal.fire({
        toast: true,
        position: 'top-start',
        icon: 'info',
        title: 'Toast at Top Start!',
        showConfirmButton: false,
        timer: 1500
    });
}














