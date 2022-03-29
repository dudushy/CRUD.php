<!DOCTYPE html>
<html>
    <head>
        <title>CRUD - CI3</title>
        <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.css') ?>"/>
        <script src="<?php echo base_url('public/js/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('public/js/bootstrap.js')?>"></script>
    </head>
    <body>
        <header>
            header
        </header>
        <div id="container">
            <div class="col-md-5">
                <?php
                $this->load->view($content);
                ?>
            </div>
        </div>
        <footer>
            footer
        </footer>
    </body>
</html>
