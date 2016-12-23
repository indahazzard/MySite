    <?php require('./header.php') ?>
  <?php require('menu.php') ?>
  
   require('bd.php');
  <?php $article = $_GET['article']; ?>
  <?php 
    $result = mysqli_query($con, "SELECT * FROM news WHERE id = $article");
    $news = mysqli_fetch_array($result, MYSQLI_ASSOC);
  ?>
       <div class="post-div">
          <form class="post-form" action="edit_post_func.php?article=<?php echo $article; ?>" method="post">
            <div class="leftpostadd">
            <label for="title"> Title </label>
            <input class="title-field" type="text" name="title" value="<?php echo $news['title']; ?>">
            
            <input type="submit" name="submit" value="Edit">
            </div>
            <div class="rightpostadd">
            <label for="info"> News text </label>
            <textarea class="full-text-edit" name="info"> <?php echo $news['info']; ?> </textarea>
            </div>
          </form>
        </div>
  <?php require('./footer.php') ?>