
<?php

    require_once 'connect.php';
    require_once 'header.php';

?>

    <div class="container">
    <?php
                if(empty($_POST['update'])){
                    if(isset($_POST['firstname'])|| empty($_POST['lastname']) ||
                        empty($_POST['address']) || empty($_POST['contact']))
                    {
                    echo "Please fillout all required fields";
                   
                   
                    }

                    else{
                            $firstname = $_POST['firstname'];
                            $lastname = $_POST['lastname'];
                            $address = $_POST['address'];
                            $contact = $_POST['contact'];
                   
                      $sql = "UPDATE users set firstname='{$firstname}',lastname = ' {$lastname}', address = '{$address}',contact = '{$contact}' WHERE user_id =".$_POST['userid'];

                        if ($con->query($sql) === TRUE) {
                            echo "<div class='alert alert-sucess'>Successfully updated user</div>";
                        }
                        else{
                        echo "div class='alert alert-danger'>Error:There was an error while updating user info</div>";
                    }
                    }
                }

                $id = isset($_GET['id']) ? (int)$_GET['id'] :0;    

                $sql = "SELECT * FROM users WHERE user_id={$id}";
                $result = $con->query($sql);
                
                if ($result->num_rows <1)
                {
                    header('location: index.php'); 
                    exit;
                }
                
                $row = $result->fetch_assoc(); 
    
    ?>
            <div class="row">
             <div class="cod-md-6 col-md-offset-3">
                <div class="box">
                    <h3><i class="glyphicon glyphicon-plus"></i>&nbsp;modify user</h3>
                    
                            <form action="" method="POST">

                            <input type="hidden" value="<?php echo $row['user_id'];?>" name="user_id">


                            <label for="firstname">Firtname</label>
                            <input type="text" id="firstname" name="firstname" value="<?php echo $row['firstname'];?>" class="form-control"><br>

                            <label for="lastname">Lastname</label>
                            <input type="text" name="lastname" id="lastname" value="<?php echo $row['lastname'];?>" class="form-control"><br>

                            <label for="address">Address</label>
                            <textarea rows="4" name="address" class="form-control"><?php echo $row['address'];?></textarea><br>

                            <label for="contact">Contact</label>
                           
                               <input type="text" name="contact" id="contact" value="<?php echo $row['contact'];?>" class="form-control"><br>
                            <br>
                            <input type="submit" name="update" class="btn btn-success" value ="update">
        </form>
        </div>
        </div>
        </div>
        </div>
<?php
require_once 'footer.php';
        