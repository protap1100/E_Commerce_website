<?php include 'Partials/Header.php'; ?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill The Form For Contacting us </h2>
            <br>
            <form method="POST" action="" class="signup text-center" >
                <fieldset class="Contact_us">
                    <div class="signup-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Protap Biswas" class="input-responsive" autocomplete="off" required>

                    <div class="signup-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" autocomplete="off" required>

                    <div class="signup-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. Protap@gmail.com" class="input-responsive" autocomplete="off" required>

                    <div class="signup-label">Subject</div>
                    <input type="text" name="Subject" placeholder="E.g. Mondir Repair" class="input-responsive" autocomplete="off" required>

                    <div class="signup-label">Report</div>
                    <textarea name="address" rows="5" placeholder="E.g. Repair The Mondir" class="input-responsive" autocomplete="off" required></textarea>
                    <br>
                    <input type="submit" name="submit" value="Send" class="btn btn-primary">
                </fieldset>
            </form>
        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

<?php include 'Partials/Footer.php'; ?>
