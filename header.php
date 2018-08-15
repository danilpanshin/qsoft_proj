<?php include "main_menu.php"; ?>
<div class="header">
    <div class="logo"><img src="i/logo.png" width="68" height="23" alt="Project" /></div>
    <div style="clear: both"></div>

</div>
<div>
    <h3>menu List</h3>
    <ul class="">
        <?php foreach (array_sort($arrayMenu, "sort", "desc") as $array): ?>
            <li><a href="<?= $array["path"] ?>"><?= $array["title"] ?></a></li>
        <?php endforeach; ?>    
    </ul>
</div>



