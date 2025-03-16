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
                        <a href="#" class="text-light hover-effect"><i class="fab fa-facebook-f fa-2x"></i> </a>
                    </li>
                    <li class="me-4">
                        <a href="#" class="text-light hover-effect"><i class="fab fa-twitter fa-2x"></i> </a>
                    </li>
                    <li class="me-4">
                        <a href="#" class="text-light hover-effect"><i class="fab fa-instagram fa-2x"></i> </a>
                    </li>
                    <li>
                        <a href="#" class="text-light hover-effect"><i class="fab fa-linkedin-in fa-2x"></i> </a>
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

<!-- Bootstrap JS (ensure you have Bootstrap 5 JS & Font Awesome included) -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

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




<!--Bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>


<script>
    tinymce.init({
        selector: 'textarea#short_des',
        placeholder: "hello world"
    });
</script>






</body>

</html>