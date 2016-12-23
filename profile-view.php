    <?php require('./header.php') ?>
  <?php require('menu.php') ?>
       <div class="profile-div">
        <div class="profile-left-panel">
            <img src="" class="usr-photo">
        </div> 
        <?php $id = $_GET['id']; ?>
        <?php 
    $result = mysqli_query($con, "SELECT * FROM users WHERE id = $id");
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
  ?>
        <div class="usr-info">
            <h3> user info  </h3> 
                <ul class="ul-usrinfo">
                    <li> <?php echo $user["login"]; ?> </li>
                    
                    <li> <?php echo $user["fname"]; ?> </li>
                    <li> <?php echo $user["sname"]; ?></li>
                </ul>
        </div>
    </div>


    <?php require('./footer.php') ?>