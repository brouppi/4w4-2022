<footer class="site__footer">
    <h2 class="footer__titre">Le beau footer</h2>
    <p class="footer__presentation">Un site web fait par une élève du TIM à l'aide de Wordpress.</p>
    <h3 class="footer__author">Fait par Florence Lemieux Cayer</h3>
    <?php wp_nav_menu(array("menu" => "simple",
                            "container" => "nav",
                            "container_class" =>"footer")); ?>
</footer>
</body>

</html>