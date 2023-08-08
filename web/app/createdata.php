<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Crime data storing</title>
</head>
<body>
    <?php
        include "C://xampp//htdocs//web//app//_templates//head.php";
    ?>
    <main class="form-record">
    <form method="post" action="process-createdata.php" style="margin: 0px 300px">
            <br>
            <!--<img class="mb-4" src="https://previews.123rf.com/images/stas11/stas111710/stas11171000033/88679415-icono-de-seguridad-cibern%C3%A9tica-escudo-con-cerradura-ilustraci%C3%B3n-vectorial.jpg" alt="" width="250" height="250">-->
            <h1 class="h3 mb-3 fw-bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create New Crime Record </h1>
            <br>
            <div class="form-floating">
                <input name="victim_name" type="text" class="form-control" id="floatingInputUsername" placeholder="name@example.com" required>
                <label for="floatingInput">victim_name</label>
            </div>
            <br>
            <div class="form-floating">
                <input name="case_type" type="text" class="form-control" id="floatingInputUsername" placeholder="name@example.com" required>
                <label for="floatingInput">case_type</label>
            </div>
            <br>
            <div class="form-floating">
                <input name="case_id" type="text" class="form-control" id="floatingInputUsername" placeholder="name@example.com" required>
                <label for="floatingInput">case_id</label>
            </div>
            <br>
            <div class="form-floating">
                <input name="gender" type="text" class="form-control" id="floatingInputUsername" placeholder="name@example.com" required>
                <label for="floatingInput">gender</label>
            </div>
            <br>
            <div class="form-floating">
                <input name="phone" type="number" class="form-control" id="floatingInputNumber" placeholder="name@example.com" required>
                <label for="floatingInputNumber">phone</label>
            </div>
            <br>
            <div class="form-floating">
                <input name="Email_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Email_address</label>
            </div>
            <br>
            <div class="form-floating">
                <input name="locations" type="text" class="form-control" id="floatingInputNumber" placeholder="name@example.com" required>
                <label for="floatingInputNumber">location</label>
            </div>
            <br>
            <div class="form-floating">
                <input name="crime_details" type="text" class="form-control" id="floatingInputNumber" placeholder="name@example.com" required>
                <label for="floatingInputNumber">crime_details</label>
            </div>
            <br>
            
            <br>
            <button class="w-100 btn btn-lg btn-primary" onclick="<?php myreload(); ?>" type="submit">submit</button>
        </form>
        <?php
            function myreload(){
                $result = exec("python3 C://xampp//htdocs//web//app//libs//include//crime.py");
                echo $result;
            }
        ?>
    </main>
    <?php
        include "C://xampp//htdocs//web//app//_templates//footer.php";
    ?>
</body>
</html>