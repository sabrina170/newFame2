<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<?php
echo '<pre>';
print_r($_FILES);
echo '</pre>';
?>

<body>

    <div class="container" style="margin-top: 100px;">
        <form method="post" enctype="multipart/form-data" action="imagen.php?action=insert" class="row g-3">

            <div class="col-auto">
                <label for="inputPassword2" class="visually-hidden">Password</label>
                <input type="file" class="form-control" name="imagen" placeholder="Password">
            </div>
            <div class="col-auto">
                <button type="submit" name="submit" class="btn btn-primary mb-3">Confirm identity</button>
            </div>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>