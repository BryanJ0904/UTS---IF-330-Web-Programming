<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="list.css?v=<?php echo time(); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;800&family=Kaushan+Script&family=Pacifico&family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        function toggleSwitch(switchElement) {
            const isChecked = switchElement.checked;
            let action = isChecked ? 'edit' : 'view';
            let baseUrl = "<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>";
            window.location.href = baseUrl + '/list.php?action=' + action;
        }
        function toggleModals() {
            $('#exampleModal').modal('hide');
        }
    </script>
    <title>Task Tracker</title>
</head>
<body class="body">
    <?php
        require 'user_validation.php';
        require 'db.php';
        require 'action.php';
        require 'add.php';
        require 'edit.php';
        require 'delete.php';

    ?>
    <div class="mt-5 container d-flex flex-column justify-content-center">
        <a href="homepage.php" style="color: black; font-family: 'Kaushan Script', cursive; font-size: 24px; text-decoration: none;"><img class="img-fluid" id="back-button" src="./assets/back.png" style="margin-right: 10px;"/>Back to Home</a>
        <?php echo "<h1 class='user text-center'>" . $_COOKIE['user_name'] . "'s </h1>" ?>
        <h1 class="title text-center">To Do List</h1><br />
        <div class="d-flex justify-content-between align-self-center align-items-center">
            <div class="mx-5 d-flex flex-column flex-md-row justify-content-center align-items-center" id="choose-box">
                <div class="text-center">Edit Mode</div>
                <div><jelly-switch id="example" name="switch" onToggle="toggleSwitch(this)" <?php echo ($_GET["action"] == "edit" ? 'aria-checked="true" checked' : ''); ?>></jelly-switch></div>
                <div class="text-center">On/Off</div>
            </div>
            <div class="mx-5 d-flex flex-column flex-md-row justify-content-center align-self-center align-items-center" id="choose-box">
                <div class="mr-md-3 d-flex align-self-center"><a href="list.php?action=add"><img class="img-fluid" id="add-button" src="./assets/add.png"/></a></div>
                <div class="text-center">Add to list</div>
            </div>
        </div>
        <br />
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
            $q = "SELECT * FROM todolist WHERE user_id = " . $_COOKIE['user_id'] . ";";
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
                            <div class='d-flex'>
                                <a href='$url'>
                                    <img id='edit-button' src='./assets/edit-button.png' />
                                </a>
                                <form id='edit-button' action='list.php?action=edit' method='POST'>
                                    <input type='hidden' name='delete' value='true'/>
                                    <input type='hidden' name='id' value='" . $index ."'/>
                                    <button id='hidden' type='submit' name='delete' value='true'>
                                        <img id='edit-button' src='./assets/delete-button.png' />
                                    </button>
                                </form>
                            </div>
                        </td>";
                }
                echo "</tr>";
                $index++;
            }
            echo "</tbody></table>";
        ?>
    </div>
    <script>
        $(document).ready(function(){
            $.fn.dataTable.ext.order['custom-order'] = function(settings, col) {
                return this.api().column(col, {order:'index'}).nodes().map(function(td, i) {
                    var customOrder = ['Not yet started', 'Waiting on', 'In progress', 'Done'];
                    return customOrder.indexOf(td.innerText);
                });
            };
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
    <script src ="//unpkg.com/jelly-switch"></script>
</body>
</html>