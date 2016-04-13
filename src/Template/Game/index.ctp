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
				<?php echo "".$count." / 10"; ?>
			</div>

			<div id="Container">
				<div class="rightside">
					<div class="block">
						Time
					</div>
					<div class="block">
						<?php echo "Pts: ".$score.""; ?>
					</div>
				</div>
				<div id="product">
                    <?php
						/* 	Check which question GameController has drawn
						 *	and form the question respectively.
						 */
						if(isset($question1)) { // question_medicineUsedFor()
							echo $question1[0]['Brand'];
						} else if(isset($question2)) { // question_medicineActiveSubstance()
							echo $question2['Indication'];
						}
					?>
				</div>		
			</div>
			<div class="correct">
				<?php
					if($this->request->is('post')) {
						if($correct) echo "Correct!";
						else echo "Wrong!";
					}
				?>
			</div>
			<div id="mainQuestion">
				<?php
					/*
					 *	Set correct assignment for the question
					 */
					if(isset($question1)) { // question_medicineUsedFor()
						echo "This medicine is used for..";
					} else if(isset($question2)) { // question_medicineActiveSubstance()
						echo "Select medicine to match indication above..";
					}
				?>
			</div>
			<?php echo $this->Form->create(); ?>
			<div id="questions">
				<?php if(isset($question1)) { // question_medicineUsedFor() ?>
					<div class="question">
						<input type="checkbox" name="answer[]" value="0"><?php echo $claims[0]['Indication']; ?>
					</div>
					<div class="question">
						<input type="checkbox" name="answer[]" value="1"><?php echo $claims[1]['Indication']; ?>
					</div>
					<div class="question">
						<input type="checkbox" name="answer[]" value="2"><?php echo $claims[2]['Indication']; ?>
					</div>
					<div class="question">
						<input type="checkbox" name="answer[]" value="3"><?php echo $claims[3]['Indication']; ?>
					</div>
				<?php } elseif(isset($question2)) { ?>
					<div class="question">
						<input type="checkbox" name="answer[]" value="0"><?php echo $claims2[0]['Brand']; ?>
					</div>
					<div class="question">
						<input type="checkbox" name="answer[]" value="1"><?php echo $claims2[1]['Brand']; ?>
					</div>
					<div class="question">
						<input type="checkbox" name="answer[]" value="2"><?php echo $claims2[2]['Brand']; ?>
					</div>
					<div class="question">
						<input type="checkbox" name="answer[]" value="3"><?php echo $claims2[3]['Brand']; ?>
					</div>
				<?php } ?>
			</div>
			<div id="footpanel">
				<div id="footpanelHolder">
					<div id="nextbutton">
						<?= $this->Form->button('Next', array('class' => 'button')); ?>
					</div>
					<?php echo $this->Form->end(); ?>
				</div>
			</div>
		</div>
	</div>
<footer>
</footer>
</body>
</html>
