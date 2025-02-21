<script>
document.addEventListener("DOMContentLoaded", function() {
    const menuToggle = document.querySelector(".menu-toggle");
    const menu = document.querySelector(".menu");

    menuToggle.addEventListener("click", function() {
        menu.classList.toggle("active");
    });

    // Cierra el menú cuando se hace clic fuera
    document.addEventListener("click", function(event) {
        if (!menu.contains(event.target) && !menuToggle.contains(event.target)) {
            menu.classList.remove("active");
        }
    });
});
</script>

<footer>
    <p>*All content and materials on the Site, including but not limited to text, graphics, logos, and images, are the property of NY Super Clean or its content
    suppliers and are protected by intellectual property laws. You may not use any content from the Site without our express written permission.</p>
    <?php wp_footer(); ?>
</footer>

</body>
</html>