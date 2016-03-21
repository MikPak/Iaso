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
        $this->set('claims', $claims);

        $random = rand(0,3);
        //echo $random;
        $this->set('vastaus', $claims[$random]);
        //echo $claims[$random]['Indication'];
        //debug($claims);

        // Form a question of claims[0] and fetch corresponding data from brand
        $brand_id = $claims[$random]['Brand'];
        $brand_results = $connection->execute('SELECT * FROM brand WHERE PrimaryKey = :brand',
            ['brand' => $brand_id])
            ->fetchAll('assoc');
        $this->set('brand', $brand_results);
        //debug($brand_results);
    }
	public function playagain(){
		
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
}
