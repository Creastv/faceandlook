</div>
</div>
<?php get_template_part('templates-parts/footer/footer', 'partners'); ?>
<?php get_template_part('templates-parts/footer/footer', 'newsletter'); ?>

</main>
<footer id="footer" itemscope itemtype="http://schema.org/WPFooter">
        <div class="container" >
                <div class="footer__wrap">
                        <div class="f-col-one">
                        <?php get_template_part('templates-parts/footer/footer', 'col-one'); ?>
                        </div>
                        
                        <div class="f-col-all">
                        <svg id="f-sygnet-bg"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72.92 116.33">
                         <path fill="#fff" stroke-width="opx" d="m31.52,59.4l19.56,5.28v-11.68l-19.56,6.4ZM7.37,8.3v99.34l58.17-18.04v-41.33l-7.1,2.32v18.9c0,1.15-.53,2.23-1.45,2.93-.9.7-2.09.94-3.2.63l-35.82-9.67c-1.92-.52-3.07-2.46-2.63-4.39.22-1.3,1.15-2.44,2.49-2.88l33.24-10.87v-27.04L7.37,8.3Zm-3.69,108.03c-.78,0-1.55-.25-2.19-.72-.94-.69-1.5-1.8-1.5-2.97V3.7c0-.98.38-1.87,1.01-2.53C1.88.24,3.2-.2,4.52.09l51.06,11.58c1.68.38,2.87,1.87,2.87,3.6v27.57l9.64-3.15c1.11-.37,2.36-.17,3.31.52.96.69,1.52,1.8,1.52,2.98v49.13c0,1.62-1.05,3.04-2.6,3.52L4.78,116.16c-.36.11-.73.17-1.09.17"/>
                        </svg>
                                <?php get_template_part('templates-parts/footer/footer', 'two'); ?>
                                <?php get_template_part('templates-parts/footer/footer', 'tree'); ?>
                                <?php get_template_part('templates-parts/footer/footer', 'four'); ?>
                                <?php get_template_part('templates-parts/footer/footer', 'info'); ?>
                        </div>
                </div>
        </div>
</footer>
<span id="go-to-top">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path id="Icon_material-arrow-upward" data-name="Icon material-arrow-upward" d="M6,18l2.115,2.115,8.385-8.37V30h3V11.745l8.37,8.385L30,18,18,6Z" transform="translate(-6 -6)" />
    </svg>
</span>

<?php wp_footer(); ?>

</body>
</html>