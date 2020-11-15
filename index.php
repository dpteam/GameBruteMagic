<?php 

// # - Letter, @ - Number

$games = array(
	'---Steam---' => '#####-#####-#####-#####-#####',
	'Total War: Shogun 2' => '###@#-##@##-##@##-#@###-@####',
	'Mafia II' => '@@#@@-##@@#-###@@-@###@-@#@##',
	'RAGE' => '##@##-#@#@@-##@##',
	'Call of Duty: Black Ops' => '@@#@@-###@#-#####-##@##-#####',
	'The Elder Scrolls: Skyrim' => '@@@##-##@@@-##@#@',
	'Dead Island' => '@####-@####-@####',
	'Warhammer 40K: Space Marine' => '#####-@@##@-####@',
	'Homefront' => '###@#-#@##@-#####',
	'Orange Box' => '###@#-#####-##@@#-#####-#@##@',
	'Portal 2' => '###@@-#####-@####',
	'---Origin---' => '#####-#####-#####-#####-#####',
	'Sims 2' => '@##@######@@#######@',
	'Sims 3' => '#@#########@####@##@',
	'---Mojang---' => '#####-#####-#####-#####-#####',
	'Minecraft Gift Code Type 1' => '#@#@#-#@#@#-#@#@#-#@#@#-#@#@#',
	'Minecraft Gift Code Type 2' => '#@#@-#@#@-#@#@',
	'Minecraft Gift Code Type 3' => '@@@ @@@ @@@@',
	'---Xbox Giveaway 101120---' => '#####-#####-#####-#####-#####',
	'Watch Dogs Legion' => '##@##-#@@##-#####-@####-#####',
	'Ori and the Will of the Wisps' => '###@@-##@@#-@####-#####-#####',
	'Yakuza Like a Dragon' => '#####-#@##@-#####-###@#-#@@@#',
	'Project CARS 3' => '@@###-@####-####@-@@###-@####',
	'Gears Tactics' => '####@-#@###-#@##@-#####-@@#@#',
	'Gears 5' => '@@###-###@@-@@###-##@@#-##@##',
	'Falconeer' => '@##@@-###@#-#####-@@##@-#####',
	'Assasins Creed Valhalla' => '#####-##@##-##@@#-#####-#@@##',
	'Destiny 2 Beyond Light' => '###@@-@##@#-##@#@-#####-##@##',
	'---Other---' => '#####-#####-#####-#####-#####',
	'Unknown Random Microsoft' => '@@#@#-#@###-##@@#-@####-#####',
	'Microsoft Xbox Ultimate' => '####@-@##@#-###@#-#@##@-#@###',
);

$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

function getGamesList() {
	global $games;
	$list = '';
	foreach($games as $game => $key) {
		$list .= '<option>' . $game . '</option>';
	}
	return $list;
}

if(isset($_POST['submit']) && $_POST['submit'] == 'true') {
	if(isset($_POST['game']) && isset($games[$_POST['game']])) {
		$key = '';
		foreach(str_split($games[$_POST['game']]) as $char) {
			switch($char) {
				case '#':
					$key .= $chars[mt_rand(0, strlen($chars)-1)];
					break;
				case '@':
					$key .= mt_rand(0, 9);
					break;
				default:
					$key .= $char;
					break;
			}
		}
		echo $key;
	} else {echo 'Game not selected';}
} else {
?>
<!DOCTYPE html>
<html language="ru">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<title>GameBruteMagic [GBM]</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			color: #555;
			font-family: "Helvetica Neue", Helvetica, "Segoe UI", Arial;
			font-size: 14px;
		}

		h1 {
			font-size: 18px;
			font-weight: normal;
			margin: 0;
		}

		div#container {
			background: #E9E9E9;
			width: 500px;
			height: 100px;
			margin: 200px auto auto auto;
			padding: 10px;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#keygen').submit(function() {
				$.ajax({
					url: '',
					type: 'POST',
					data : $('#keygen').serialize() + '&submit=true',
					success: function(returned){
						$('#key').attr('value', returned)
					}
				});
				return false;
			});
		});
	</script>
</head>
<body>
	<div id="container">
		<form id="keygen" method="POST">
			<h1>Game Brute Magic - Game Key Generator</h1>
			<label>Game:</label>
			<select name="game" class="input" style="width: 90.5%;" />
				<?= getGamesList(); ?>
			</select>
			<label>Your key:</label>
			<input id="key" type="text" class="input" style="width: 86.2%;" disabled/>
			<input name="submit" type="submit" class="input-big" value="Get key" style="width: 100%;" />
		</form>
	</div>
</body>
</html>

<?php } ?>