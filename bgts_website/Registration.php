<?php include 'Partials/Header.php'; ?>


    <!-- fOOD sEARCH Section Starts Here -->
    <section class="">
        <div class="container">
            
            <h2 class="text-center text-white">Enter Correct Information To Register</h2>
            <br>
            <form method="POST" action="" class="signup text-center" >
                <fieldset class="Contact_us">
                    <div class="signup-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="Enter Your Full Name:" class="input-responsive" autocomplete="off" required>

                    <div class="signup-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="Enter Your Phone:" class="input-responsive" autocomplete="off" required>

                    <div class="signup-label">Email</div>
                    <input type="email" name="email" placeholder="Enter Your Email:" class="input-responsive" autocomplete="off" required>

                    <div class="signup-label">Password</div>
                    <input type="Password" name="Password" placeholder="Password:" class="input-responsive" autocomplete="off" required>
                    <br>
                    <input type="submit" name="submit" value="Sign Up" class="btn btn-primary">
                </fieldset>

            </form>
        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

<?php include 'Partials/Footer.php'; ?>
