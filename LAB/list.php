<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Task Tracker</title>
</head>
<body>
    <nav class="navbar navbar-expand navbar-light bg-light justify-content-center">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="#">Register</a>
            <a class="nav-item nav-link" href="#">Login</a>
        </div>
    </nav>
    <div class="mt-5 container d-flex flex-column justify-content-center">
        <h1 class="text-center">To Do List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Task</th>
                    <th scope="col">Done</th>
                    <th scope="col">Progress</th>
                </tr>
            </thead>
        <?php
            $db = mysqli_connect("localhost", "root", "", "webproglab");
            if(mysqli_connect_error()){
                die('Connect Error: ' . mysqli_connect_error());
            }
            if($_GET["action"] == "view"){
                $q = "SELECT * FROM todolist ORDER BY done ASC";
                $query = mysqli_query($db, $q);
                
                echo "<tbody>";
                while($hasil = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>" . $hasil['task'] . "</td>";
                    echo "<td>" . "<input type='checkbox' disabled " . ($hasil['done'] == 1 ? 'checked' : '') . "></td>";
                    echo "<td>" . "<span style='background-color:" . (
                        $hasil['progress'] == "Done" ? 'PaleGreen' : (
                            $hasil['progress'] == "In progress" ? 'LemonChiffon' : (
                                $hasil['progress'] == "Waiting on" ? 'PapayaWhip' : 'LightPink'
                            )
                        )
                    ). ";'>" . $hasil['progress'] . "</span></td>";
                }

                
            }else{
                echo "to edit";
            }
        ?>


        

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>