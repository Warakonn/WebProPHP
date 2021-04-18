<?php
$error = array();
if(count($error)>0) : 
?>
<div class="error">
    <?php foreach($error as $error) :?>
        <p><?php echo $error ?>
    <?php endforeach ?>
</div>
<?php
endif
?>
