<!-- Footer Section -->
<footer class="bg-dark text-light py-5">
    <div class="container">
        <div class="row">
            <!-- About Section -->
            <div class="col-md-4">
                <h5 class="text-uppercase mb-3" style="letter-spacing: 2px;">About</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non urna nec nulla malesuada feugiat at at orci. Donec fringilla sollicitudin dolor.</p>
            </div>

            <!-- Quick Links Section -->
            <div class="col-md-4">
                <h5 class="text-uppercase mb-3" style="letter-spacing: 2px;">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light text-decoration-none hover-effect">Home</a></li>
                    <li><a href="userinput.php" class="text-light text-decoration-none hover-effect">User Input</a></li>
                    <li><a href="#" class="text-light text-decoration-none hover-effect">Blog Posts</a></li>
                    <li><a href="#" class="text-light text-decoration-none hover-effect">Contact</a></li>
                </ul>
            </div>

            <!-- Social Media Section -->
            <div class="col-md-4">
                <h5 class="text-uppercase mb-3" style="letter-spacing: 2px;">Follow Us</h5>
                <ul class="list-unstyled d-flex">
                    <li class="me-4">
                        <a href="#" class="text-light hover-effect"><i onmouseover="this.style.color='rgb(70, 154, 188)'" onmouseout="this.style.color='white'" class="fab fa-facebook-f fa-2x"></i> </a>
                    </li>
                    <li class="me-4">
                        <a href="#" class="text-light hover-effect"><i onmouseover="this.style.color='rgb(70, 154, 188)'" onmouseout="this.style.color='white'" class="fab fa-twitter fa-2x"></i> </a>
                    </li>
                    <li class="me-4">
                        <a href="#" class="text-light hover-effect"><i onmouseover="this.style.color='rgb(70, 154, 188)'" onmouseout="this.style.color='white'" class="fab fa-instagram fa-2x"></i> </a>
                    </li>
                    <li>
                        <a href="#" class="text-light hover-effect"><i onmouseover="this.style.color='rgb(70, 154, 188)'" onmouseout="this.style.color='white'" class="fab fa-linkedin-in fa-2x"></i> </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="row mt-4">
            <div class="col-12 text-center">
                <p class="mb-0">&copy; 2025 <span class="fw-bold" style="cursor: pointer;">Mustafizur's Blog.</span> All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>

<style>
    /* Hover Effect */
    .hover-effect {
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .hover-effect:hover {
        color: rgb(70, 154, 188);
        /* Change to a vibrant color on hover */
        transform: translateY(-5px);
    }

    /* Make footer text a bit more elegant */
    footer h5 {
        font-size: 1.25rem;
        font-weight: 600;
        text-transform: uppercase;
        color: rgb(70, 154, 188);
        /* Vibrant color for section titles */
    }

    /* Slight shadow effect for footer */
    footer {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Margin and spacing improvements */
    footer p {
        font-size: 0.9rem;
        opacity: 0.8;
    }

    list-unstyled li a:hover {
        color: rgb(70, 154, 188);
    }
</style>


<!-- jquery link  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<!--Bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- sweet alert cdn -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Trumbowyg Script -->
<script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.25.1/dist/trumbowyg.min.js"></script>


<script>
    // Initialize Trumbowyg
$('#short_des').trumbowyg();

$('#description').trumbowyg();








const submit = document.getElementById("submit");
submit.addEventListener("submit",function(stop){
    stop.preventDefault();

    Swal.fire({
      title: 'Are you sure?',
      text: 'Do you want to submit the form?',
      icon: 'question',
      showCancelButton: true,
      confirmButtonText: 'Yes, submit!',
      cancelButtonText: 'Cancel'
    }).then((result) => {
      if (result.isConfirmed) {
        // If confirmed, submit the form
        form.submit();
      }
    });

})
</script>



</body>

</html>