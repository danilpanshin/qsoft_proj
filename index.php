<?php 

if (!empty($_POST)) { 
    require 'logins.php';
    require 'passwords.php';
    $auth = false; 
    $key = array_search($_POST["login"], $logins);
    
    if ($key !== false) {
        if($passwords[$key] == $_POST["password"]) {
            $auth = true;
       } 
    }
    $showMessage = true;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?=include 'header.php'; ?>

<body>

  <div class="header">
    	<div class="logo"><img src="i/logo.png" width="68" height="23" alt="Project" /></div>
        <div style="clear: both"></div>
    </div>
    
    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        	<tr>
            	<td class="left-collum-index">
				
					<h1>Возможности проекта —</h1>
					<p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>
					
				
				</td>
                <td class="right-collum-index">
					
					<div class="project-folders-menu">
						<ul class="project-folders-v">
						<li class="project-folders-v-active"><span>Авторизация</span></li>
						<li><a href="#">Регистрация</a></li>
						<li><a href="#">Забыли пароль?</a></li>
						</ul>
					<div style="clear: both;"></div>
					</div>
					
 					<?php if (isset($_GET["login"]) && $_GET["login"] == "yes"): ?>
						<form action="index.php?login=yes" method="POST">
							<p>Ваш e-mail: <input id="login_id" size="30" name="login" value="<?=$_POST["login"] ?? ''?>" /></p>
								
							<p>Ваш пароль: <input id="password_id" size="30" name="password" type="password"/></p>
					
							<p><input type="submit" value="Войти" /></p>
			
						</form>
					<?php else: ?>
					    <div>
					        No login!
					    </div>		
				    <?php endif; ?>	

                    <?php 
                    if (isset($showMessage) && $auth) {
                        require $_SERVER['DOCUMENT_ROOT'] . '/include/success.php';
                    } elseif (isset($showMessage) && $auth == false) {
                        require $_SERVER['DOCUMENT_ROOT'] . '/include/error.php';
                    }
                    ?>                  

				</td>
            </tr>
        </table>
    
    

</body>

<?=include 'footer.php'; ?>

</html>