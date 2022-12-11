<?php wp_footer(); ?>

<div class="LINE">
    <a href="https://lin.ee/4CemrXl" target="_blank" rel="noopener" class="project">
        <img src="https://barcloud-fukui.com/wp-content/uploads/2022/12/LINE.jpg" alt="LINE友だち追加">
    </a>
</div>
<!-- footer  -->
<footer id="footer">
    <div class="nav-row">
        <a href="<?php echo home_url(); ?>">
            <img src="https://barcloud-fukui.com/wp-content/uploads/2022/12/logo2.png" class="d-flex" alt="">
        </a>
        <ul class="nav justify-content-center">
            <li><a href="https://barcloud-fukui.com/blog">BLOG</a></li>
            <li><a href="https://barcloud-fukui.com/about" class="nav-line">ABOUT</a></li>
            <li><a href="https://barcloud-fukui.com/menu" class="nav-line nav-line-2">MENU</a></li>
            <li><a href="https://barcloud-fukui.com/info">INFO</a></li>
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
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scroll.js"></script>
</body>

</html>