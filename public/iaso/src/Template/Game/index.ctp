<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

$cakeDescription = 'Iaso - Game';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('iaso.css') ?>
</head>
<body>
	<div id="MainContainer">
		<div id="MainContainerContent">
			<div class="NavBar">
				0 1 2 3 4 5
			</div>

			<div id="Container">
				<div class="rightside">
					<div class="block">
						Time
					</div>
					<div class="block">
						PTS
					</div>
				</div>
				<div id="product">
					Ibuprofen
				</div>		
			</div>
			<div id="mainQuestion">
				Who stole my bike?!
			</div>
			<form>
			<div id="questions">
				<div class="question">
					<input type="checkbox" name="vehicle" value="Bike">Mikko stole my bike
				</div>
				<div class="question">
					<input type="checkbox" name="vehicle" value="Bike">Lauri stole my bike
				</div>
				<div class="question">
					<input type="checkbox" name="vehicle" value="Bike">Emil stole my bike
				</div>
				<div class="question">
					<input type="checkbox" name="vehicle" value="Bike">Matias stole my bike
				</div>
			</div>
			</form>
			<div id="footpanel">
				<div id="footpanelHolder">
					<div id="progressbar">
						<div id="progressbarProgress">
						</div>
					</div>
					<div id="nextbutton">
						<?= $this->Html->link('Next', '/game/', array('class' => 'button')) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?PHP foreach($medicines as $medicine => $key) {
		//Debugger::dump($medicines);
		echo $key['PrimaryKey'];
		echo $key['Indication'];
		echo "<br>";
	}
	?>
<footer>
</footer>
</body>
</html>
