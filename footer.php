<?php wp_footer(); ?>

<!-- footer  -->
<footer id="footer">
    <div class="nav-row">
        <a href="<?php echo home_url(); ?>">
            <img src="https://nakampany.website/wp-content/uploads/2022/10/logo2.png" class="d-flex" alt="">
        </a>
        <ul class="nav justify-content-center">
            <li><a href="#sec01">BLOG</a></li>
            <li><a href="#sec02" class="nav-line">ABOUT</a></li>
            <li><a href="#sec02" class="nav-line nav-line-2">MENU</a></li>
            <li><a href="#sec04">INFO</a></li>
        </ul>
    </div>
    <div class="secondary">
        <p class="copyright text-center">Copyright ©︎ BAR CLOUD</p>
    </div>
</footer>
<?php
wp_enqueue_script('jquery');
wp_head();
?>
<script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/3-2-3-1/js/3-2-3-1.js"></script>
</body>

</html>