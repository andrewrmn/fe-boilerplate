<!-- Library/ Syntax Styles -->
<?php include('_styles.php'); ?>

    <div class="wrapper-wide" id="modules">
        <div class="row">
            <div class="col--md--3 col--lg--2 is-hidden-sm">
                <?php include('_sidebar.php'); ?>
            </div>

            <div class="col--md--9">
                <!-- Grid -->
                <?php include('grids.php'); ?>

                <!-- Wrappers -->
                <?php include('wrappers.php'); ?>

                <!-- Sections -->
                <?php include('sections.php'); ?>

                <!-- Typography Styles -->
                <?php include('typography.php'); ?>

                <!-- Icons -->
                <?php include('icons.php'); ?>

                <!-- Link Styles -->
                <?php include('links.php'); ?>

                <!-- Text Group Styles -->
                <?php include('text-group.php'); ?>

                <!-- Click Functions -->
                <?php include('click-functions.php'); ?>

                <!--Animate In -->
                <?php include('animate-in.php'); ?>

                <!-- Scroll To -->
                <?php include('scroll-to.php'); ?>

                <!-- Catch On Top -->
                <?php include('catch-on-top.php'); ?>

                <!-- Heros -->
                <?php include('heros.php'); ?>

                <!-- Modal -->
                <?php include('pictures.php'); ?>

                <!-- Modal -->
                <?php include('modal.php'); ?>

                <!-- Dropdown w/ Links -->
                <?php include('dropdown-links.php'); ?>

                <!-- Dropdown Filter -->
                <?php include('dropdown-filter.php'); ?>

                <!-- Media Object -->
                <?php include('media-object.php'); ?>

                <!-- Horizontal List Styles -->
                <?php include('lists.php'); ?>

                <!-- Tabs -->
                <?php include('tabs.php'); ?>

                <!-- Pagination -->
                <?php include('pagination.php'); ?>

                <!-- Revolver Carousel -->
                <?php include('carousel.php'); ?>

                <!-- Inline Styles -->
                <?php include('inline-styles.php'); ?>

                <!-- Form Styles -->
                <?php include('forms.php'); ?>

            </div>
        </div>
    </div><!-- end main wrapper -->


    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>

        <!-- Syntax Highlighter -->
        <script type="text/javascript" src="library/_prism.js"></script>

        <script type="text/javascript">
            var $ = jQuery;
            $(function() {
                $('.language-markup').each(function() {
                    var pre = $(this);
                    pre.html(htmlEncode(pre.html()));
                });
            });

            function htmlEncode(value){
              return $('<div/>').text(value).html();
            }
        </script>
