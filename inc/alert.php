<?php 

if(isset($_SESSION['ALERT'])) {
    $alert = json_decode($_SESSION['ALERT'], true);
    print_r($alert);
    ?>
        <script>
            swal("<?= $alert['message'] ?>", "", "<?= $alert['status']; ?>")
        </script>
    <?php
}

sleep(10);
unset($_SESSION['ALERT']);

?>