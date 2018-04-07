<?php
if(preg_match("/[^a-zA-Z0-9.,_]+/", $_POST['uname']))
{
    echo '';
}
else
{
error_reporting( error_reporting() & ~E_NOTICE );
$uname = $_POST['uname'];
echo "<body bgcolor='#000000'></body>";
echo "<head><title>BBH Sigs</title></head>";
echo "<center><b><FONT COLOR='#FFFFFF'>Boxhead Bounty Hunter signature generator</FONT></b></center><br /><br /><br />";
echo "<center><form action='http://hydra-anticheat.com/boxhead/' method='post'><FONT COLOR='#DAA520'>Username</FONT> &nbsp;<input type='text' name='uname' /><input type='submit' name='submit' value='Generate' /></form>";
echo "<center><object width='570' height='100'>";
echo "<param name='movie' value='BBH.swf?name=$uname'>";
echo "<embed src='BBH.swf?name=$uname' width='100' height='100'>";
echo "</embed>";
echo "</object></center>";
}
?>
