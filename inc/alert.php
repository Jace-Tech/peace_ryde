<?php 


if(isset($_SESSION['ALERT'])) {
    $alert = json_decode($_SESSION['ALERT'], true);
    ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal("<?= $alert['message'] ?>", "", "<?= $alert['status']; ?>")
        </script>
    <?php
}