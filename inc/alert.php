<?php 

if(isset($_SESSION['ALERT'])) {
    $alert = json_decode($_SESSION['ALERT'], true);
    ?>
        <script>
            swal("<?= $alert['message'] ?>", "", "<?= $alert['status']; ?>")
        </script>
    <?php
}


unset($_SESSION['ALERT']);