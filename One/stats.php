<?php
$servername = "localhost";
$username = "id10723384_sheepishlamb";
$password = "adid3249";
$database = "id10723384_sheets";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	$query = "SELECT * FROM `GeneralInfo` WHERE `Name` = 'NKomo'";
        $result = mysqli_query($conn,$query);
		if (!$result) {  die("Query Failed."); 
echo "This Failed"; 
		}
		if ($result){
			 while($row = mysqli_fetch_array($result)){
?>


<table style="font-size: 14pt; margin: auto; text-align: center; font-family: alegreya;">
  <tr>
    <th align="center" colspan="8">General Info
    </th>
  </tr>
  <tr>
    <td class="q">Race</td>
    <td class="a"><?php echo $row['Race']?></td>
    <td class="q">Class - Level</td>
    <td class="a"><?php echo $row['Class_Level']?></td>
    <td class="q">Alignment</td>
    <td class="a"><?php echo $row['Alignment']?></td>
    <td class="q">Deity</td>
    <td class="a"><?php echo $row['Deity']?></td>
  </tr>
  <tr>
    <td class="q">Size</td>
    <td class="a"><?php echo $row['Size']?></td>
    <td class="q">Gender</td>
    <td class="a"><?php echo $row['Gender']?></td>
    <td class="q">Age</td>
    <td class="a"><?php echo $row['Age']?></td>
    <td class="q">Weight</td>
    <td class="a"><?php echo $row['Weight']?></td>
  </tr>
  <tr>
    <td class="q">Height</td>
    <td class="a"><?php echo $row['Height']?></td>
    <td class="q">Hair</td>
    <td class="a"><?php echo $row['Hair']?></td>
    <td class="q">Eyes</td>
    <td class="a"><?php echo $row['Eyes']?></td>
    <td class="q">Skin</td>
    <td class="a"><?php echo $row['Skin']?></td>
  </tr>
</table>

		<?php }} 
		
		$query = "SELECT * FROM `Attributes` WHERE `Name` = 'NKomo'";
        $result = mysqli_query($conn,$query);
		if (!$result) {  die("Query Failed."); 
echo "This Failed"; 
		}
		if ($result){
			 while($row = mysqli_fetch_array($result)){
		?>

<table style="font-size: 14pt; margin: auto; text-align: center; font-family: alegreya;">
  <tr>
    <th align="center" colspan="5">Ability Scores
    </th>
  </tr>
  <tr>
    <td class="q">Name</td>
    <td class="a">Score</td>
    <td class="a">Modifier</td>
    <td class="a1">Temp Score</td>
    <td class="a1">Temp Modifier</td>
  </tr>
  <tr>
    <td class="q">STR</td>
    <td class="a STR"><?php echo $row['Str']?></td>
    <td class="a strmod"></td>
    <td class="a1">&nbsp;</td>
    <td class="a1">&nbsp;</td>
  </tr>
  <tr>
    <td class="q">DEX</td>
    <td class="a DEX"><?php echo $row['Dex']?></td>
    <td class="a dexmod"></td>
    <td class="a1">&nbsp;</td>
    <td class="a1">&nbsp;</td>
  </tr>
  <tr>
    <td class="q">CON</td>
    <td class="a CON"><?php echo $row['Con']?></td>
    <td class="a conmod"></td>
    <td class="a1">&nbsp;</td>
    <td class="a1">&nbsp;</td>
  </tr>
  <tr>
    <td class="q">INT</td>
    <td class="a INT"><?php echo $row['Int']?></td>
    <td class="a intmod"></td>
    <td class="a1">&nbsp;</td>
    <td class="a1">&nbsp;</td>
  </tr>
  <tr>
    <td class="q">WIS</td>
    <td class="a WIS"><?php echo $row['Wis']?></td>
    <td class="a wismod"></td>
    <td class="a1">&nbsp;</td>
    <td class="a1">&nbsp;</td>
  </tr>
  <tr>
    <td class="q">CHA</td>
    <td class="a CHA"><?php echo $row['Cha']?></td>
    <td class="a chamod"></td>
    <td class="a1">&nbsp;</td>
    <td class="a1">&nbsp;</td>
  </tr>
</table>

		<?php }} ?>

<table style="font-size: 14pt; margin: auto; text-align: center; font-family: alegreya;">
  <tr>
    <th align="center" colspan="10">Saving Throws
    </th>
  </tr>
  <tr>
    <td class="q">Name</td>
    <td class="a">Total</td>
	<td>&nbsp;</td>
    <td class="a">Base Save</td>
	<td>&nbsp;</td>
    <td class="a" colspan="2">Ability Mod</td>
	<td>&nbsp;</td>
    <td class="a">Magic Mod</td>
	<td>&nbsp;</td>
	<td class="a">Misc Mod</td>
  </tr>
  <tr>
    <td class="q">Fortitude</td>
    <td class="a total">&nbsp;</td>
	<td>=</td>
    <td class="a save">4</td>
	<td>+</td>
	<td>CON</td>
    <td class="a save conmod">&nbsp;</td>
	<td>+</td>
    <td class="a save">2</td>
	<td>+</td>
	<td class="a save">&nbsp;</td>
  </tr>
  <tr>
    <td class="q">Reflex</td>
    <td class="a total">&nbsp;</td>
	<td>=</td>
    <td class="a save">4</td>
	<td>+</td>
	<td>DEX</td>
    <td class="a save dexmod">&nbsp;</td>
	<td>+</td>
    <td class="a save">2</td>
	<td>+</td>
	<td class="a save">&nbsp;</td>
  </tr>
  <tr>
    <td class="q">Will</td>
    <td class="a total">&nbsp;</td>
	<td>=</td>
    <td class="a save">8</td>
	<td>+</td>
	<td>WIS</td>
    <td class="a save wismod">&nbsp;</td>
	<td>+</td>
    <td class="a save">2</td>
	<td>+</td>
	<td class="a save">&nbsp;</td>
  </tr>
</table>

<table style="font-size: 14pt; margin: auto; text-align: center; font-family: alegreya;">
  <tr>
    <th align="center" colspan="10">Languages
    </th>
  </tr>
  <tr>
    <td class="a">Common (Eastern)</td>
  </tr>
  <tr>
    <td class="a">Common</td>
  </tr>
  <tr>
    <td class="a">Giant</td>
  </tr>
</table>

<script>

$(document).ready(function () {
    //iterate through each row in the table
    $('#stats tr').each(function () {
        //the value of sum needs to be reset for each row, so it has to be set inside the row loop
        var sum = 0
        //find the combat elements in the current row and sum it 
        $(this).find('.save').each(function () {
            //a much shorter version to sum the values, using unary operator
            sum += +$(this).text() || 0;
        });
        //set the value of currents rows sum to the total-combat element in the current row
        $('.total', this).html(sum);
    });
});
</script>

<style>
  .q {
  background: #00000033;
  border: 1px #8a8a8a solid;
  }
  .a {
  background: #ffffff33;
  border: 1px #8a8a8a solid;
  }
  .a1 {
  background: #7375d433;
  border: 1px #8a8a8a solid;
  }
</style>
