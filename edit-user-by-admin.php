    <?php require('./header.php') ?>
  <?php require('menu.php') ?>
       <div class="usr-edit-div">
       <?php if(! isset($_SESSION["id"])) { ?>
       <h2> You are not logged in </h2>
       <?php } else { ?>
       <?php $id = $_GET['id']; 
        $result = mysqli_query($con, "SELECT * FROM users WHERE id = $id");
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
  ?>
        <div class="profile-left-panel">
            <img src="" class="usr-photo">
        </div> 
        <div class="usr-info">
            <h3> user info </h3> 
            <form method="post" class="usr-edit-form" action="func_edit_user_by_admin.php?id=<?php echo $id; ?>">
                <ul class="ul-usrinfo">
                    <li> <input type="login" name="login" value="<?php echo $user['login'] ?>"> </li>
                    <li> <input type="text" name="fname" value="<?php echo $user['fname'] ?>"> </li>
                    <li> <input type="text" name="sname" value="<?php echo $user['sname'] ?>"> </li>
                    <li> <input type="submit" name="submit" value="EDIT" > </li>
                </ul>
            </form>
        </div>
        <?php } ?>
    </div>


    <?php require('./footer.php') ?>