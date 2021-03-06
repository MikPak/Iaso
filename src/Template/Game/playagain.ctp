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
    <?= $this->Html->css('playagain.css') ?>
</head>
<body>
	<div id="MainContainer">
		<div id="MainContainerContent">

			<div id="Container">
				
				<div id="scoreContainer">
                    <div id="yourScore">
						Game Details:
					</div>
					<div class="scoreContent">
						Time <br>
						<?php echo $minutes. " min"; ?>
						<?php echo $seconds. " sec"; ?>
					</div>
					<div class="scoreContent">
						Score <br>
						<?php echo $score; ?>
					</div>
					<div id="nextbutton">
						<?= $this->Html->link('Play again', '/game/', array('class' => 'button')) ?>
					</div>
				</div>		
			</div>

		</div>
	</div>
<footer>
</footer>
</body>
</html>
