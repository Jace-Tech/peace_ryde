<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 

if(isset($_SESSION['ALERT'])) {
    $alert = json_decode($_SESSION['ALERT'], true);
    ?>
        <script>
            swal("<?= $alert['message'] ?>", "", "<?= $alert['status']; ?>")
        </script>
    <?php
}