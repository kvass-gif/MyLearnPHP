 <?php if (is_array($listErrors) && count($listErrors) > 0) :
    ?>
     <ul style="background-color:#ccc; color:red;">
         <?php foreach ($listErrors as $errorval) :
            ?>
             <li><?= $errorval ?></li>
         <?php endforeach ?>
     </ul>
 <?php endif
    ?>