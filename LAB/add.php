<?php
if($_GET["action"] == "add"){
    echo "
        <div class='modal fade' id='exampleModal' role='dialog' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Add new task</h5>
                        <button class='close' data-dismiss='modal' aria-label='close' onclick='toggleModals()'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='modal-body'>
                        <form action='list.php?action=view' method='POST'>
                            <input type='hidden' name='id' value='" . $_COOKIE['user_id'] . "'/>
                            <input type='text' name='task' class='form-control' placeholder='What is on your mind?' required/><br />
                            <label>Select the due date:</label><br />
                            <input type='date' name='due_date' class='form-control' placeholder='What is the due date?' required/><br />
                            <label>What is the current status?</label><br />
                            <input type='radio' name='progress' value='Not yet started' required/>Not Started<br />
                            <input type='radio' name='progress' value='Waiting on' required/>Waiting On<br />
                            <input type='radio' name='progress' value='In progress' required/>In Progress<br />
                            <input type='radio' name='progress' value='Done' required/>Done<br />
                    </div>
                    <div class='modal-footer'>
                        <button type='submit' class='btn btn-primary' name='edit' value='true'>Save changes</button>
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
?>