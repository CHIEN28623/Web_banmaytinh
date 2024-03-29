<br> <br>
<!-- footer -->
<footer class="bg-black">
    <div class="py-4">
        <h2 class="text-white text-center text-xl">Nguyễn Lê Chiến</h2>
    </div>
</footer>
</div>
<!-- JS cho slideshow -->
<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
<br>
</body>

</html>