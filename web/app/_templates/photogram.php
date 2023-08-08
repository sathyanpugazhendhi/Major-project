<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crimenews</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
<?php
    include "C://xampp//htdocs//web//app//libs//include//userclass.php";
    include "C://xampp//htdocs//web//app//_templates//head.php";
?>
<div class="album py-5 bg-light">
    <div class="container"> 
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1563486688110-3e8087cb4bb8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y3JpbWV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
                    <div class="card-body">
                        <p class="card-text">
                        <?php
                            $id = 6;
                            $result = user::fetchdata($id);
                            echo $result;
                        ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">&nbsp;Solved&nbsp;</button>&nbsp;&nbsp;
                                <button type="button" class="btn btn-danger">&nbsp;Not Solved&nbsp;</button>&nbsp;&nbsp;
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1520874980933-927e354df1a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8Y3JpbWV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
                    <div class="card-body">
                        <p class="card-text">
                            <?php 
                                $id = 7;
                                $result = user::fetchdata($id);
                                echo $result;
                            ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">&nbsp;Solved&nbsp;</button>&nbsp;&nbsp;
                                <button type="button" class="btn btn-danger">&nbsp;Not Solved&nbsp;</button>&nbsp;&nbsp;
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1617906855223-a69f14c9841d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGNyaW1lfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60">
                    <div class="card-body">
                        <p class="card-text">
                            <?php 
                                $id = 8;
                                $result = user::fetchdata($id);
                                echo $result;
                            ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">&nbsp;Solved&nbsp;</button>&nbsp;&nbsp;
                                <button type="button" class="btn btn-danger">&nbsp;Not Solved&nbsp;</button>&nbsp;&nbsp;
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1589216532372-1c2a367900d9?ixlib=rb-1.2. 1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fGNyaW1lfGVufDB8fDB8fA%3
D%3D&auto=format&fit=crop&w=500&q=60">
                    <div class="card-body">
                        <p class="card-text">
                            <?php 
                                $id = 9;
                                $result = user::fetchdata($id);
                                echo $result;
                            ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">&nbsp;Solved&nbsp;</button>&nbsp;&nbsp;
                                <button type="button" class="btn btn-danger">&nbsp;Not Solved&nbsp;</button>&nbsp;&nbsp;
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1593510987185-1ec2256148a3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fGNyaW1lfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60">
                    <div class="card-body">
                        <p class="card-text">
                            <?php 
                                $id = 10;
                                $result = user::fetchdata($id);
                                echo $result;
                            ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">&nbsp;Solved&nbsp;</button>&nbsp;&nbsp;
                                <button type="button" class="btn btn-danger">&nbsp;Not Solved&nbsp;</button>&nbsp;&nbsp;
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1453873531674-2151bcd01707?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1973&q=80">
                    <div class="card-body">
                        <p class="card-text">
                            <?php 
                                $id = 11;
                                $result = user::fetchdata($id);
                                echo $result;
                            ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">&nbsp;Solved&nbsp;</button>&nbsp;&nbsp;
                                <button type="button" class="btn btn-danger">&nbsp;Not Solved&nbsp;</button>&nbsp;&nbsp;
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1624968683033-c31c672453e2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80">
                    <div class="card-body">
                        <p class="card-text">
                            <?php 
                                $id = 12;
                                $result = user::fetchdata($id);
                                echo $result;
                            ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">&nbsp;Solved&nbsp;</button>&nbsp;&nbsp;
                                <button type="button" class="btn btn-danger">&nbsp;Not Solved&nbsp;</button>&nbsp;&nbsp;
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1620372667306-832545fe2cc3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                    <div class="card-body">
                        <p class="card-text">
                            <?php 
                                $id = 13;
                                $result = user::fetchdata($id);
                                echo $result;
                            ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">&nbsp;Solved&nbsp;</button>&nbsp;&nbsp;
                                <button type="button" class="btn btn-danger">&nbsp;Not Solved&nbsp;</button>&nbsp;&nbsp;
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://plus.unsplash.com/premium_photo-1673543763736-f74c4b14a007?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=837&q=80">
                    <div class="card-body">
                        <p class="card-text">
                            <?php 
                                $id = 14;
                                $result = user::fetchdata($id);
                                echo $result;
                            ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">&nbsp;Solved&nbsp;</button>&nbsp;&nbsp;
                                <button type="button" class="btn btn-danger">&nbsp;Not Solved&nbsp;</button>&nbsp;&nbsp;
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1625449281218-cbb6183f0aec?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                    <div class="card-body">
                        <p class="card-text">
                            <?php 
                                $id = 15;
                                $result = user::fetchdata($id);
                                echo $result;
                            ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">&nbsp;Solved&nbsp;</button>&nbsp;&nbsp;
                                <button type="button" class="btn btn-danger">&nbsp;Not Solved&nbsp;</button>&nbsp;&nbsp;
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1520874980933-927e354df1a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8Y3JpbWV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
                    <div class="card-body">
                        <p class="card-text">
                            <?php 
                                $id = 16;
                                $result = user::fetchdata($id);
                                echo $result;
                            ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">&nbsp;Solved&nbsp;</button>&nbsp;&nbsp;
                                <button type="button" class="btn btn-danger">&nbsp;Not Solved&nbsp;</button>&nbsp;&nbsp;
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include "C://xampp//htdocs//web//app//_templates//footer.php";
?>
</body>
</html>