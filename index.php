<?php
/*
    We're using require_once here because we want to:
    1. Only include the file once
    2. Show us a FATAL ERROR if missing or we've linked the file incorrectly

    Other ways to include files are available:
    include(); - include files multiple times, only warning if missing
    require(); - include file multiple times, FATAL ERROR if missing
    include_once(); - include file ONLY once, only warning if missing

    Adding the _once multiple times just means any future _once of the
    same file gets ignored.

    So:
    require_once('assets/inc/header.php');
    require_once('assets/inc/header.php');
    require_once('assets/inc/header.php');

    Only the first one is loaded, and the others are ignored.
*/

require_once('assets/inc/header.php');
?>
    <section class="content">
        <div class="content__main">
            <h1>Affordable Professional Websites</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi totam quas harum quae reiciendis aut, cum omnis incidunt quam voluptatibus.</p>
        </div><!-- /.content__main -->

        <div class="newsletter">
            <h1>Subscrive to our newsletter</h1>
            <form>
                <input type="email" placeholder="Enter email..."/>
                <button type="submit" class="button-1">Subscrive</button>
            </form><!-- form -->
        </div><!--  newsletter -->
    </section>

    <!-- /.content -->
<?php require_once('assets/inc/footer.php') ?>
