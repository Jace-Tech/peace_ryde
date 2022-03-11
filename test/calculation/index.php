<?php require("../../utils/country_fee.php"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="w-50 mx-auto">
                <form action="./handler.php" class="mt-5" method="post">
                    <div class="form-group">
                        <label for="country">Select country</label>
                        <select name="contry" id="" class="form-control">
                            <?php foreach ($country_fee as $key => $value): ?>
                                <option value="<?= $key ?>"> 
                                    <?= $key; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button name="submit" class="btn btn-primary">Get Quotation</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>