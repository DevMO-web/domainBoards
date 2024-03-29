  <!--First Button-->
  <a href="?page=1#change" class="arrow">First</a>

<!--Previous Button-->
<?php if (isset($_GET['page']) && $_GET['page'] > 1): ?>
    <a href="?page=<?=$_GET['page'] - 1 ?>#change" class="arrow">Prev</a>
<?php else: ?>
    <a class="arrow">Prev</a>
<?php endif; ?>

 <!--Specific Button +Some -->


    
<?php if(!isset($_GET['page'])):?>
   
<?php elseif($_GET['page'] - 1 >= 1):?>
    <a href="?page=<?=$_GET['page'] - 1?>#change"><?=$_GET['page']-1?></a>
<?php endif; ?>
<!--Current Button-->
<?php if(!isset($_GET['page'])):?>
    <a href="?page=1#change">1</a>
   <?php else: ?>
    <a href="?page=<?=$_GET['page']?>#change"><?=$_GET['page']?></a>
<?php endif; ?>

<!--Specific Button +Some -->
<?php if(!isset($_GET['page'])):?>
    <a href="?page=2#change">2</a>
<?php elseif($_GET['page'] + 1 <= $totalPages):?>
    <a href="?page=<?=$_GET['page']+1?>#change"><?=$_GET['page']+1?></a>
<?php endif; ?>


 <!--Next Button-->
 <?php if (!isset($_GET['page'])): ?>
    <a href="?page=2#change" class="arrow">Next</a>
<?php elseif($_GET['page'] >= $totalPages): ?>
    <a class="arrow">Next</a>
<?php else: ?>
    <a href="?page=<?=$_GET['page'] + 1 ?>#change" class="arrow">Next</a>
<?php endif; ?>

 <!--Last Button-->
<a href="?page=<?=$totalPages?>#change" class="arrow">Last</a>