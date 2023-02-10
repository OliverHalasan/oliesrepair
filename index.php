<?php include 'includes/header.php'; ?>

<style>
    .bg-image {
        background-image: url(img/auto-mechanic-working-garage-repair-service.jpg);
        background-size: cover;

    }

    .index-image-size {
        display: block;
        width: 800px;
        height: 600px;

    }
</style>

<main class="">

    <section style="height: 100%;" class="d-flex">
        <div class="px-4 py-5 my-5 text-center d-flex align-items-center justify-content-center flex-wrap">
            <div class="d-flex flex-column align-items-center justify-content-center w-50">
                <h1 class="">Auto Repair Sercives</h1>
                <p class="p-4">Olie's Repair is a full auto care for you vehcile. We have invested in all the latest specialist tools and diagnostic software that is specifically tailored for the software in your vehicle. Our auto repair shop is capable of servicing a variety of models. We only do the work that is needed to fix your problem. If you want the quality you would expect from the dealership, but with a more personal and friendly atmosphere, you have found it. </p>
            </div>
            <div class="col-5">
                <img src="img/auto-mechanic-working-garage-repair-service.jpg" class="img-fluid" alt="">
            </div>
        </div>

    </section>

    <iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19086.575745067184!2d-113.60316598947065!3d53.274809463993726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x539ff9c9f608719f%3A0xbecf103df8a23621!2sOlie&#39;s%20Repair%20shop%20and%20car%20sales!5e0!3m2!1sen!2sca!4v1674548408962!5m2!1sen!2sca" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</main>

<script>
    function welcomePage(){
        if(x.matches) {
            document.getElementById("welcomeImage")
        }
    }

    var x = window.matchMedia("(max-width: 1099px)")
            screensize(x) // Call listener function at run time
            x.addListener(screensize) // Attach listener function on state changes
</script>

<?php include 'includes/footer.php'; ?>