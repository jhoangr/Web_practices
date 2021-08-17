<?php $i=1; foreach($categories as $categoria)
        {?>
         <?php echo $i;?>
         <option value="<?php echo $i;?>">
         <?php echo $categoria["NOM"];?> 
         <?php $i++;?>
         </option>
         <?php } ?>
