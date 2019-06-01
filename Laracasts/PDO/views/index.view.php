<?php require('partials/head.php'); ?>
<ul>
<?php foreach ($tasks as $task) : ?>
<li>
<?php if($task->completed):?>
<strike> <?php echo $task->description;  ?> </strike>

<?php  else: ?>
<?php echo $task->description;  ?>
<?php endif ?>
</li>
<?php endforeach; ?>
</ul>

<form method="GET" action="/contact ">
<input name="name"/>
<button type="submit" >send 
</button>
</form>

<?php require('partials/footer.php'); ?>
