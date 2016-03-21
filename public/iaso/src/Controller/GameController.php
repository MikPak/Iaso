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
        // Checking if answer was correct
        if($this->request->is('post')) {
            //debug($this->request->data);
            if($this->request->data) {
                $session = $this->request->session();
                echo "User's choice: " . $this->request->data['answer'][0] . "<br>";
                echo "Correct answer: " . $session->read('Question.AnswerID') . "<br>";
            }
        }

        /* Randomisation for questions will be here.
         * Yet to be implemented.. */
        $this->question_medicineUsedFor();
    }

    /*
     * Will generate question about random medicine and
     * make claims about where one could use it.
     * There is only one correct answer, at the moment.
    */
    private function question_medicineUsedFor() {
        $connection = ConnectionManager::get('default');

        // Fetch 4 random ID's from medicines
        $medicines = TableRegistry::get('Medicine');
        $random = $this->randomNumbers(4, 1, 25);
        $query = $medicines->find()->where(['PrimaryKey IN' => $random])->all();
        //debug($query);

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
        //echo $claims[$random]['Indication'];
        //debug($claims);

        // Get random medicine data from the DB
        $brand_id = $claims[$random]['Brand'];
        $brand_results = $connection->execute('SELECT * FROM brand WHERE PrimaryKey = :brand',
            ['brand' => $brand_id])
            ->fetchAll('assoc');
        $this->set('brand', $brand_results);
        //debug($brand_results);
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
        //debug($random);
        return $random;
    }

    public function playagain(){

    }
}
