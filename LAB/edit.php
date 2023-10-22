<?php
if (isset($_GET['editid'])) {
    $selection = "SELECT * FROM todolist WHERE user_id = '" . $_COOKIE['user_id']. "' LIMIT 1 OFFSET " . $_GET['editid'];
    $selected = mysqli_query($db, $selection);

    while($hasil = mysqli_fetch_array($selected)){
    echo "
        <div class='modal fade' id='exampleModal' role='dialog' aria-hidden='true' data-backdrop='static'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Edit task</h5>
                        <button class='close' data-dismiss='modal' aria-label='close' onclick='toggleModals()'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='modal-body'>
                        <form action='list.php?action=edit' method='POST'>
                            <input type='hidden' name='id' value='" . $_GET['editid'] . "'/><br />
                            <input type='text' name='task' class='form-control' value='" . htmlspecialchars($hasil["task"], ENT_QUOTES, 'UTF-8') . "' required/><br /> 
                            <label>Select the due date:</label><br />
                            <input type='date' name='due_date' class='form-control' value='" . $hasil['due_date'] . "' required/><br />
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
?>