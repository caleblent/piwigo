<?php
/* Smarty version 4.3.1, created on 2024-10-17 06:26:05
  from 'C:\xampp\htdocs\piwigo\themes\default\template\no_photo_yet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_671091dddd9e19_85664703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7134c952fc066be51663bde474ae762ebe43e643' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piwigo\\themes\\default\\template\\no_photo_yet.tpl',
      1 => 1729120850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671091dddd9e19_85664703 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="themes/default/theme.css">
<title>Piwigo, <?php echo l10n('Welcome');?>
</title>

<style type="text/css">
body {
margin: 0;
padding: 0;
background-color:#f9f9f9;
}

P {text-align:center;}
TD {color:#888; letter-spacing:1px;}

#global {
position:absolute;
left: 50%;
top: 50%;
width: 700px;
height: 400px;
margin-top: -200px; /* height half */
margin-left: -350px; /* width half */

background-color: #f1f1f1;
border:2px solid #dddddd;
}

#noPhotoWelcome {font-size:25px; color:#555;text-align:center; letter-spacing:1px; margin-top:30px;}
.bigButton {}

.bigButton {text-align:center; margin-top:120px;}

.bigButton a {
    background-color:#666;
    padding:10px;
    text-decoration:none;
    margin:0px 5px 0px 5px;
    -moz-border-radius:6px;
    -webkit-border-radius:6px;
    color:#fff;
    font-size:25px;
    letter-spacing:2px;
    padding:20px;
}

.bigButton a:hover {
    background-color:#ff7700;
    outline:none;
    color:#fff;
    border:none;
}

#deactivate {
    position:absolute;
    bottom:10px;
    text-align:center;
    width:100%;

    font-style:normal;
    font-size:1.0em;
}

.submit {font-size:1.0em; letter-spacing:2px; font-weight:normal;}

#deactivate A {
    text-decoration:none;
    border:none;
    color:#f70;
}

#deactivate A:hover {
  border-bottom:1px dotted #f70;
}

#quickconnect {
    margin:0 auto;
    margin-top:60px;
    width:300px;
    color:#555;
    font-size:14px;
    letter-spacing:1px;
}

#quickconnect input[type="text"], #quickconnect input[type="password"] {
  width:300px;
  color:#555;
  font-size:20px;
  margin-top:3px;
  background-color:#ddd;
  border:2px solid #ccc;
  -moz-border-radius:5px;
  padding:2px;

}

#quickconnect input[type="text"]:focus, #quickconnect input[type="password"]:focus {
  background-color:#fff;
  border:2px solid #ff7700;
}

#quickconnect input[type="submit"] {
  font-size:14px;
  font-weight:bold;
  letter-spacing:2px;
  border:none;
  background-color:#666666;
  color:#fff;
  padding:5px;
  -moz-border-radius:5px;
}

#quickconnect input[type="submit"]:hover {
  background-color:#ff7700;
  color:white;
}
</style>


</head>

<body>
<div id="global">

<?php if ($_smarty_tpl->tpl_vars['step']->value == 1) {?>
<p id="noPhotoWelcome"><?php echo l10n('Welcome to your Piwigo photo gallery!');?>
</p>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['U_LOGIN']->value;?>
" id="quickconnect">
<?php echo l10n('Username');?>

<br><input type="text" name="username">
<br>
<br><?php echo l10n('Password');?>

<br><input type="password" name="password">

<p><input class="submit" type="submit" name="login" value="<?php echo l10n('Login');?>
"></p>

</form>
<div id="deactivate"><a href="<?php echo $_smarty_tpl->tpl_vars['deactivate_url']->value;?>
"><?php echo l10n('... or browse your empty gallery');?>
</a></div>


<?php } else { ?>
<p id="noPhotoWelcome"><?php echo $_smarty_tpl->tpl_vars['intro']->value;?>
</p>
<div class="bigButton"><a href="<?php echo $_smarty_tpl->tpl_vars['next_step_url']->value;?>
"><?php echo l10n('I want to add photos');?>
</a></div>
<div id="deactivate"><a href="<?php echo $_smarty_tpl->tpl_vars['deactivate_url']->value;?>
"><?php echo l10n('... or please deactivate this message, I will find my way by myself');?>
</a></div>
<?php }?>


</div>
</body>

</html>

<?php }
}
