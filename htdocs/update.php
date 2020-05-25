<?php
require('lib/print.php');
 ?>
 <?php
 require('view/top.php');
  ?>
    <a href="create.php">글 생성</a>
    <?php if(isset($_GET['id'])) { ?>
    <a href="update.php?id=<?=$_GET['id']?>">글 수정</a>
    <?php } ?>
    <h2>
   <form action="update_process.php" method="post">
     <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
     <p>
       <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>">
     </p>
     <p>
       <textarea name="description" placeholder="Description"><?php print_description(); ?></textarea>
     </p>
     <p>
       <input type="submit">
     </p>
     </from>
     <?php
     require('view/bottom.php');
      ?>
