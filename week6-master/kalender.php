<!DOCTYPE HTML>
<html>
     <head>
          <title> Kalender Maret 2022 </title>
     </head>
     <body>
          <h4>Maret 2022</h4>
          <?php
$day	= date("d");
$month	= date ("m");
$year	= date("Y");
$days_count=date("t",mktime(0,0,0,$month,$day,$year));
?>
<table style="border:2px">
  <tr>
  <td align=center><font color="#FF0000">Sun</font></td>
  <td align=center>Mon</td>
  <td align=center>Tue</td>
  <td align=center>Wed</td>
  <td align=center>Thu</td>
  <td align=center>Fri</td>
  <td align=center>Sat</td>
  </tr>
  
  <?php
$ex=date ("w", mktime (0,0,0,$month,1,$year));
 
for ($i=1 ; $i<=$ex ; $i++) {
echo "<td></td>";
}
for ($j=1 ; $j<=$days_count ; $j++) {
	if (date("w",mktime (0,0,0,$month,$j,$year)) == 0) {
		echo "<tr>"; 
		}
$color="#000000";
if (date("l",mktime (0,0,0,$month,$j,$year)) == "Sunday") {
     $color="#FF0000";
     }
echo "<td align=center valign=middle> <span style=\"color:$color\">$j</span></td>"; 
if (date("w",mktime (0,0,0,$month,$j,$year)) == 6) {
     echo "</tr>"; 
    }
}
echo '</table>'; 
?>
     </body>
</html>