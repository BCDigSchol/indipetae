<?php

use BCLib\Indipetae\ThemeHelpers;

?>

</div>
</article>

<footer>
    <div id="footer-container" class="container">

        <p class="footer-title">Digital Indipetae Database</p>
        <p>The Digital Indipetae Database is organized by the
            <a href="https://www.bc.edu/content/bc-web/centers/iajs.html">Institute for Advanced Jesuit Studies</a> in
            collaboration with the <a href="http://www.sjweb.info/arsi/en/archivum-romanum-societatis-iesu/">Archivum
                Romanum Societatis Iesu</a>. Its <a href="https://indipetae.bc.edu/board">editorial and scientific
                boards</a> coordinate the
            project and promote it within the international community of scholars.
        </p>

        <div class="row">
            <div class="col-md-3 col-sm-12">
                <a href="https://library.bc.edu/"><img src="<?= ThemeHelpers::IMG_PATH ?>/Logo_300.png" class="footer-logo" alt="Boston College Libraries"></a>
            </div>

            <div class="col-md-9 col-sm-12">
                <p>The Digital Indipetae Database was developed and is maintained in cooperation with Boston College Libraries. Learn more about the
                    <a href="/team">development team</a> and process.</p>
            </div>
        </div>

        <div id="footer-menu">
            <ul class="site-links">
                <li><a href="/about">About</a></li>
                <li><a href="/collaborate">Learn More</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>

        <div class='copyright'>
            <p>Copyright Trustees of Boston College</p>
        </div>

    </div>
    <!-- end wrap -->
</footer>

<script>
    jQuery(document).ready(function () {
        Omeka.showAdvancedForm();
        Omeka.skipNav();
        Omeka.megaMenu('#top-nav');
    });
</script>

</body>
</html>
