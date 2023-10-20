<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="list.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Pacifico&family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <title>Task Tracker</title>
</head>
<body class="body">
    <?php
        $db = mysqli_connect("localhost", "root", "", "webproglab");
        if(mysqli_connect_error()){
            die('Connect Error: ' . mysqli_connect_error());
        }
        if($_GET["action"] == "add"){
            echo "
                <div class='modal fade' id='exampleModal' role='dialog' aria-hidden='true' backdrop='static'>
                    <div class='modal-dialog' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='exampleModalLabel'>Add new task</h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>
                            <div class='modal-body'>
                                <form action='list.php'>
                                    <input type='text' name='task' class='form-control' placeholder='What is on your mind?'/><br />
                                    <label>What is the current status?</label><br />
                                    <input type='radio' name='status' class='form-control' value='notstarted' />Not Started<br />
                                    <input type='radio' name='status' class='form-control' value='waitingon' />Waiting On<br />
                                    <input type='radio' name='status' class='form-control' value='inprogress' />In Progress<br />
                                    <input type='radio' name='status' class='form-control' value='done' />Done<br />
                            </div>
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                <button type='button' class='btn btn-primary'>Save changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            ";

            echo "
                <script>
                    $(document).ready(function(){
                        $('#exampleModal').modal('show');
                        $('#exampleModal').modal({
                            backdrop: 'static'
                        });
                    });
                </script>
            ";
        }
        if (isset($_GET['editid'])) {
            $selection = "SELECT * FROM todolist LIMIT 1 OFFSET " . $_GET['editid'];
            $selected = mysqli_query($db, $selection);

            while($hasil = mysqli_fetch_array($selected)){
            echo "
                <div class='modal fade' id='exampleModal' role='dialog' aria-hidden='true' backdrop='static'>
                    <div class='modal-dialog' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='exampleModalLabel'>Edit task</h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>
                            <div class='modal-body'>
                                <form action='list.php?action=edit' method='POST'>
                                    <input type='hidden' name='id' value='" . $_GET['editid'] . "'/><br />
                                    <input type='text' name='task' class='form-control' value='" . $hasil["task"] . "'/><br /> 
                                    <label>What is the current progress?</label><br />
                                    <input type='radio' name='progress' value='Not yet started'" . ($hasil["progress"] == "Not yet started" ? 'checked' : '') . "/>Not Started<br />
                                    <input type='radio' name='progress' value='Waiting on'" . ($hasil["progress"] == "Waiting on" ? 'checked' : '') . "/>Waiting On<br />
                                    <input type='radio' name='progress' value='In progress'" . ($hasil["progress"] == "In progress" ? 'checked' : '') . " />In Progress<br />
                                    <input type='radio' name='progress' value='Done'" . ($hasil["progress"] == "Done" ? 'checked' : '') . " />Done<br />
                            </div>
                            <div class='modal-footer'>
                                <button type='submit' class='btn btn-primary' name='edit' value='true'>Save changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }

            echo "
                <script>
                    $(document).ready(function(){
                        $('#exampleModal').modal('show');
                        $('#exampleModal').modal({
                            backdrop: 'static'
                        });
                    });
                </script>
            ";
        }
        if (!empty($_POST["task"]) && !empty($_POST["progress"])) {
            $stmt = $db->prepare("UPDATE todolist SET task = ?, done = ?, progress = ? WHERE task = (SELECT task FROM todolist LIMIT 1 OFFSET ?)");
        
            if ($stmt) {
                $done = ($_POST["progress"] == 'Done') ? 1 : 0;
        
                $stmt->bind_param("sisi", $_POST['task'], $done, $_POST['progress'], $_POST['id']);
        
                if ($stmt->execute()) {
                    echo 'Update successful';
                } else {
                    echo 'Update failed';
                }
        
                $stmt->close();
            } else {
                echo 'Statement preparation failed';
            }
        }
        
    ?>
    <nav class="navbar navbar-expand navbar-light bg-light justify-content-center">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="#">Register</a>
            <a class="nav-item nav-link" href="#">Login</a>
        </div>
    </nav>
    <div class="mt-5 container d-flex flex-column justify-content-center">
        <h1 class="title text-center">To Do List</h1>
        <table class="table" id="table" style="border: 2px solid black">
            <thead>
                <tr>
                    <th scope="col">Task</th>
                    <th scope="col">Done</th>
                    <th scope="col">Progress</th>
                    <?php if ($_GET['action'] == 'edit'): ?>
                        <th scope="col" class="col-1"></th>
                    <?php endif; ?>
                </tr>
            </thead>
        <?php
            $q = "SELECT * FROM todolist";
            $query = mysqli_query($db, $q);
            $index = 0;

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
                if($_GET["action"] == "edit"){
                    $baseUrl = dirname($_SERVER['SCRIPT_NAME']);
                    $url = $baseUrl . '/' . "list.php?action=edit&editid=" . urlencode($index);
                    echo "<td>
                            <a href='$url'>
                                <img style='width: 50px; height: 50px;' src='./assets/edit-button.png' />
                            </a>
                        </td>";
                }
                $index++;
            }
            echo "</tbody></table>";
        ?>


        

    </div>
    <script>
        $.fn.dataTable.ext.order['custom-order'] = function(settings, col) {
            return this.api().column(col, {order:'index'}).nodes().map(function(td, i) {
                var customOrder = ['Not yet started', 'Waiting on', 'In progress', 'Done'];
            return customOrder.indexOf(td.innerText);
        });
        };
        $(document).ready(function(){
            $('#table').DataTable({
                order: [[2, 'asc']],
                columnDefs: [
                    {
                        targets: [0,1], orderable: false
                    },
                    {
                        targets: [2], type: 'string', orderDataType: 'custom-order'
                    }
                ]
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

</body>
</html>