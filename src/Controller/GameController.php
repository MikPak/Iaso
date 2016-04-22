<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;
use Cake\Error\Debugger;

class GameController extends AppController
{
    public function index()
    {

        $session = $this->request->session();
		
		if($session->read('Question.Count') == 1){
			$session->write('Time', microtime(true));
			$session->write('Score', 0);
		}
		
		
        // Set question count if not set
        if(!$session->read('Question.Count')) {
            $session->write('Question.Count', 0);
            // Redirect to Play Again-screen if end of the game
        } else if($session->read('Question.Count') > 10) {
            $session->write('Question.Count', 0);
            $this->redirect(array(
                    'action' => 'playagain')
            );
        }

        if(!$session->read('Score')) {
            $session->write('Score', 0);
        }
		
		if(!$session->read('Time')) {
            $session->write('Time', microtime(true));
        }
		
        $score = $session->read('Score');
        $this->set('score', $score);

        // Set negative value for view to mark question is wrong by default
        $this->set('correct', 0);

        // Set question count for the view
        $this->set('count', $session->read('Question.Count'));

        // Update question count
        $questionCount = $session->read('Question.Count');
        $questionCount++;
        $session->write('Question.Count', $questionCount);

        // Checking if answer was correct
        if($this->request->is('post')) {
            //debug($this->request->data);

            if($this->request->data) {
                $answerID = $this->request->data['answer'][0];
                $correctID = $session->read('Question.AnswerID');
                $score = $session->read('Score');

                $question2 = $session->read('Question.AnswerSet');
                if(isset($question2)) {
                    //debug($question2);
                    if($question2[$answerID]['PrimaryKey'] == $correctID) {
                        $this->set('correct', 1);
                        $score++;
                        $session->write('Score', $score);
                        $this->set('score', $score);
                    }
                    // Question 1
                } else if($answerID == $correctID) {
                    $this->set('correct', 1);
                    $session->write('Score', $score);
                    $this->set('score', $score);
                }
            }
        }

        /* Randomisation for questions will be here.
         * Yet to be implemented.. */
        $random = rand(1,100);
        if($random > 50) {
            $this->question_medicineUsedFor();
        } else {
            $this->question_medicineActiveSubstance();
        }
    }

    /*
     * Generates question about random medicine and
     * makes claims about how it can be used.
     * Only one correct answer.
    */
    private function question_medicineUsedFor() {
        $connection = ConnectionManager::get('default');

        // Fetch 4 random ID's from medicines
        $medicines = TableRegistry::get('Medicine');
        $random = $this->randomNumbers(4, 1, 25);
        $query = $medicines->find()->where(['PrimaryKey IN' => $random])->all();

        // Save result set to array
        $claims = array();
        foreach ($query as $claim) {
            array_push($claims,$claim);
        }
        $this->set('claims', $claims); // Set variable for the view

        // Lets randomize our question and set variable for the view
        $random = rand(0,3);
        $this->set('vastaus', $claims[$random]);

        // Set correct answer to session
        $session = $this->request->session();
        $session->write('Question.AnswerID', $random);

        // Get random medicine data from the DB
        $brand_id = $claims[$random]['Brand'];
        $brand_results = $connection->execute('SELECT * FROM brand WHERE PrimaryKey = :brand',
            ['brand' => $brand_id])
            ->fetchAll('assoc');
        $this->set('question1', $brand_results);
        //debug($brand_results);
    }

    /*
     * Will generate quest where indication of the medicine is shown and
     * user has 4 choices, which are medicine names. One correct answer.
     * Vice versa to question_medicineUsedFor()
    */
	private function question_medicineActiveSubstance() {
        $connection = ConnectionManager::get('default');

        // Fetch 4 random ID's from medicines
        $medicines = TableRegistry::get('Medicine');
        $random = $this->randomNumbers(4, 1, 25);
        $query = $medicines->find()->where(['PrimaryKey IN' => $random])->all();

        // BUG: Result set of query sometimes only returns 3 rows and
        // in the view it gives array index error

        // Save result set to array
        $claims = array();
        $brandPrimaryKeys = array();

        foreach ($query as $claim) {
            array_push($claims, $claim);
            array_push($brandPrimaryKeys, $claim['Brand']); // We want to store selected primary keys
        }

        $random = rand(0,3); // Generate random int, which we refer as array position
        $this->set('vastaus', $brandPrimaryKeys[$random]); // Set random primarykey as correct answer
        $this->set('question2', $claims[$random]); // Set variable for the view
        //debug($brandPrimaryKeys);

		// Get Brands
		$medicines = TableRegistry::get('Brand');
        $query = $medicines->find()->where(['PrimaryKey IN' => $brandPrimaryKeys])->all();

        $claims2 = array();

        // Loop through Brands-rows
        foreach ($query as $brand) {
            array_push($claims2, $brand);
        }

        $this->set('claims2', $claims2); // Save answer-set for view

        $session = $this->request->session();
        // Set correct answer ID to session
        $session->write('Question.AnswerID', $claims2[$random]['PrimaryKey']);
        // Set answer-set to session
        $session->write('Question.AnswerSet', $claims2);

        /* Get random medicine data from the DB
        $substance_id = $claims[$random]['ActiveSubstance'];
        $substance_results = $connection->execute('SELECT * FROM active_substance WHERE PrimaryKey = :substance',
            ['substance' => $substance_id])
            ->fetchAll('assoc');
        $this->set('substance', $substance_results);
        //debug($substance_results);
        */
	}
	

    /*
    *   Generate n-amount of unique integers ranging between $min and $max
    */
    private function randomNumbers($count, $min, $max) {
        $random = array();
        for($i = 0; $i < $count; $i++) {
            $rand = rand($min,$max);
            if(!in_array($rand, $random)) {
                    array_push($random,$rand);
            } else {
                $i--;
            }
        }
        return $random;
    }

    public function playagain(){

		$session = $this->request->session();
	
		$score = $session->read('Score');
        $this->set('score', $score);
	
		$timer = $session->read('Time');
		$time = number_format((microtime(true)) - $timer, 2);
		$minutes = (int)($time / 60);
		$seconds = $time % 60;
		$this->set('seconds', $seconds);
		$this->set('minutes', $minutes);
		
    }
}
