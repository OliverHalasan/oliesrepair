<?php include 'includes/header.php' ?>

<style>
        .text-color-theme{
        color: #3f486e;
    }
</style>

<main class="">
    <section>
        <iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19086.575745067184!2d-113.60316598947065!3d53.274809463993726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x539ff9c9f608719f%3A0xbecf103df8a23621!2sOlie&#39;s%20Repair%20shop%20and%20car%20sales!5e0!3m2!1sen!2sca!4v1674548408962!5m2!1sen!2sca" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>
<!-- contact us welcome -->
    <section class=" d-flex flex-column align-items-center mb-5 mt-5">
        <div class="text-center w-75">
            <h1 class=" text-uppercase text-color-theme mb-4">Contact Us</h1>
            <div class="lh-1 ">
            <p class="text-muted">We are one of the leading auto repair shops serving customers in Leduc.</p>
            <p class="text-muted">All mechanic services are performed by highly qualified mechanics.</p>
            </div>
            
        </div>
    </section>

    <!-- company info -->
    <section class="d-flex justify-content-center container mb-4 ">

        <div class="row w-75">
            <div class="col-sm d-flex justify-content-around flex-column">
                <div class="d-flex flex-column">
                    <h1 class="text-color-theme">Call Us Now</h1>
                    <ul class="list-unstyled">
                        <li>phone: <a href="tel:7806129918" class="text-dark text-decoration-none">(780) 612-9918</a></li>
                        <li>Email: <a href="mailto:info@oliesrepair.com" class="text-dark text-decoration-none">info@oliesrepair.com</a></li>
                    </ul>
                </div>
                <div>
                    <h1 class="text-color-theme">Location</h1>

                    <a href="https://goo.gl/maps/FiP4bQHQ8dwFict6A" class="text-dark text-decoration-none">4403 61 Avenue - Stall #4 Leduc AB T9E 7B6</a>

                </div>

                <div>
                    <h1 class="text-color-theme">24/7 Assistance</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ipsa qui soluta odio, repellat consequuntur, quidem commodi, velit magnam atque quasi amet! Autem beatae voluptatem nihil cumque voluptate totam corporis!</p>
                </div>
            </div>

            <?php
            if (!empty($_POST["submit"])) {
                $customerName = $_POST["customerName"];
                $customerEmail = $_POST["customerEmail"];
                $customerPhone = $_POST["customerPhone"];
                $customerMessage = $_POST["customerMessage"];
                $toEmail = "john_oliver30@yahoo.com";

                $mailHeaders =
                    "Name: " . $customerName .
                    "\r\n Email: " . $customerEmail .
                    "\r\n Phone: " . $customerPhone .
                    "\r\n Message: " . $customerMessage . "\r\n";

                if (mail($toEmail, $customerName, $mailHeaders)) {
                    $message = "<div class=\"alert alert-success alert-dismissible fade show\">
                     <strong>Your Concern is Received Successfully</strong>
                </div>";
                } else {
                    $message = "<div class=\"alert alert-danger alert-dismissible fade show\">
                    <strong>There are some error</strong>
               </div>";
                }
            }

            ?>
            <!-- contact us now form -->
            <form method="post" name="contactUs" class="d-flex justify-content-between flex-column col-sm">
                <?php if (!empty($message)) {
                ?>
                    <strong><?php echo $message; ?></strong>
                <?php } ?>
                <label for="Name" class="form-label text-muted">Name</label>
                <input type="text" name="customerName" required id="customerName" class="form-control " placeholder="John Smith">

                <label for="Email" class="form-label text-muted">Email</label>
                <input type="Email" name="customerEmail" required id="customerEmail" class="form-control" placeholder="email@domain.com">

                <label for="Your Phone" class="form-label text-muted">Phone</label>
                <input type="tel" name="customerPhone" required id="customerPhone" class="form-control" placeholder="(123) 456-789">


                <label for="Message" class="form-label text-muted">Message</label>
                <textarea name="customerMessage" required id="customerMessage" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                <div class="g-recaptcha mt-4" data-sitekey="6LfD6L8kAAAAALezZ8UUrOHpRyiE1AzZT1ZqfbfR"></div>
                <button name="submit" value="Submit" id="submit" class="w-25 form-control mt-4 ">Submit</button>


            </form>

        </div>

    </section>


</main>

<script>
    $(document).on('click', '#submit', function() {
        var response = grecaptcha.getResponse();
        if (response == "" || response == null) {
            alert("Please verify you are not a robot!");
            return false;
        }

    });
</script>



<?php include 'includes/footer.php' ?>