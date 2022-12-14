<!-- sidebar -->
<aside id="sidebar">
    <div class="archive">
        <?php dynamic_sidebar('sidebar'); ?>
    </div>
</aside>

<style>
    .author .profile {
        font-size: 0.875rem;
        text-align: center;
    }

    .archive {
        text-align: center;
        margin-bottom: 60px;
    }

    .archive ul {
        border-bottom: solid 1px #777;
    }

    .archive li {
        font-size: 0.875rem;
        border-top: solid 1px #777;
        padding: 20px;
        text-align: left;
    }

    /*-------------------------------------------
SP
-------------------------------------------*/
    @media screen and (max-width: 767px) {

        /*-------------------------------------------
aside
-------------------------------------------*/
        #sidebar {
            width: 100%;
            padding: 0;
        }
    }
</style>