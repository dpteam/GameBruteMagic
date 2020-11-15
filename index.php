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

function getGamesList()
{
	global $games;
	$list = '';
	foreach ($games as $game => $key)
	{
		$list .= '<option>' . $game . '</option>';
	}
	return $list;
}

if (isset($_POST['submit']) && $_POST['submit'] == 'true')
{
	if (isset($_POST['game']) && isset($games[$_POST['game']]))
	{
		$key = '';
		foreach (str_split($games[$_POST['game']]) as $char)
		{
			switch ($char)
			{
			case '#':
				$key .= $chars[mt_rand(0, strlen($chars) - 1) ];
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
	}
	else
	{
		echo 'Game not selected';
	}
}
else
{
?>
<!DOCTYPE html>
<html language="ru">
	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<title>GameBruteMagic [GBM]</title>
		<style>
			body {
				background: url(https://sun9-44.userapi.com/iMP7gpGQjyzEG94IlT_DltDSKj2VRqW0gU1JYQ/o7G0tbvWM5g.jpg);
				background-size: cover;
				margin: 0;
				padding: 0;
				color: #555;
				font-family: "Helvetica Neue", Helvetica, "Segoe UI", Arial;
				font-size: 14px;
			}

			h1 {
				text-align: center;
				font-size: 18px;
				font-family:"Helvetica";
				font-weight:bold;
				font-style:none;
				text-shadow:0px 1px 3px rgba(42,42,42,.50);
				color:#fff;  
				margin: 0;
			}
			
			h1:focus { outline:none; } 

			.formPadding {
				padding: 30px;
			}
				
			span {
				color: black;
				font-size: 36px;
			}
			
			p {
				font-size: 12px;
				font-family: "Helvetica" ;
			}

			input, label {
				margin-top: 10px;
			}

			label {
				text-align: center;
				font-size: 12px;
				font-family:"Helvetica";
				font-weight:bold;
				font-style:none;
				text-shadow:0px 1px 3px rgba(42,42,42,.50);
				color:#fff;
				margin: 0;
				margin-top: 10%;
			}

			.input { padding:5px; font-size:15px; text-align:center; border-width:2px; border-radius:5px; border-style:outset; font-family:"Helvetica"; font-family:monospace; font-weight:bold; font-style:none; text-shadow:0px 1px 3px rgba(42,42,42,.50); box-shadow: 0px 0px 5px 0px rgba(255,0,136,.50); border-color:#ff00ff; background-color:#ffffff; color:#000000;  } 
			.input:focus { outline:none; } 

			div#keygen-container {
				text-align: center;
				-webkit-box-shadow: 4px 4px 8px 0px rgba(255, 0, 136, 0.2);
				-moz-box-shadow: 4px 4px 8px 0px rgba(255, 0, 136, 0.2);
				box-shadow: 4px 4px 8px 0px rgba(255, 0, 136, 0.2);
				background: -webkit-linear-gradient(45deg, rgb(255, 0, 136), rgb(136, 0, 255));
				background: -moz-linear-gradient(45deg, rgb(255, 0, 136), rgb(136, 0, 255));
				background: linear-gradient(45deg, rgb(255, 0, 136), rgb(136, 0, 255));
				width: 500px;
				height: 150px;
				margin: 250px auto auto auto;
				padding: 25px;
				border-radius: 25px;
			}

			.btn-getkey {
				position: relative;
				overflow: hidden;
				box-shadow: inset 0px 1px 0px 0px #bbdaf7;
				background: linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
				background-color: #79bbff;
				border-radius: 6px;
				border: 1px solid #84bbf3;
				display: inline-block;
				cursor: pointer;
				color: #ffffff;
				font-family: Arial;
				font-size: 15px;
				font-weight: bold;
				padding: 6px 24px;
				text-decoration: none;
				text-shadow: 0px 1px 0px #528ecc;
			}

			.btn-getkey:hover {
				background: linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
				background-color: #378de5;
			}

			.btn-getkey:active {
				position: relative;
				top: 1px;
			}

			.btn-getkey:after {
				content: "";
				position: absolute;
				top: -110%;
				left: -210%;
				width: 200%;
				height: 200%;
				opacity: 0;
				background: rgba(255, 255, 255, 0.13);
				background: linear-gradient( to right, rgba(255, 255, 255, 0.13) 0%, rgba(255, 255, 255, 0.13) 77%, rgba(255, 255, 255, 0.5) 92%, rgba(255, 255, 255, 0.0) 100%);
			}

			.btn-getkey:hover:after {
				opacity: 1;
				top: -30%;
				left: -30%;
				transition-property: left, top, opacity;
				transition-duration: 0.7s, 0.7s, 0.15s;
				transition-timing-function: ease;
			}

			.btn-getkey:active:after {
				opacity: 0;
			}
		</style>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#keygen').submit(function () {
					$.ajax({
						url: '',
						type: 'POST',
						data: $('#keygen').serialize() + '&submit=true',
						success: function (returned) {
							$('#key').attr('value', returned)
						}
					});
					return false;
				});
			});
		</script>
	</head>
	<body>
		<div id="keygen-container">
			<form class="form" id="keygen" method="POST">
				<h1>Game Brute Magic - Game Key Generator</h1></br>
				<label>Game:</label></br>
				<select name="game" class="input" style="width: 90.5%;" /></br>
				<?=getGamesList(); ?>
				</select></br>
				<label>Your key:</label></br>
				<input id="key" type="text" class="input" style="width: 55%;" disabled/>
				<input name="submit" type="submit" class="input-big btn-getkey" value="Get key" style="width: 25%;" />
			</form>
		</div>
	</body>
</html>

<?php } ?>