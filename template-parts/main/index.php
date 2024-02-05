<main>
    <?php
        get_template_part('template-parts/main/hero', '');
        ?>
        <div>
            <?php
                get_template_part('template-parts/main/principles', '');
                get_template_part('template-parts/main/gallery', '');
                get_template_part('template-parts/main/company', '');
                the_content();
                get_template_part('template-parts/main/feedback', '');
            ?>
        </div>
</main>
<?php
