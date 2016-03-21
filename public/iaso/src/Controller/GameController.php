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
        $random = rand(1,25);
        $connection = ConnectionManager::get('default');

        // Fetch random medicine
        $medicine_results = $connection->execute('SELECT * FROM medicine WHERE PrimaryKey = :random',
            ['random' => $random])
            ->fetchAll('assoc');
        $this->set('medicines', $medicine_results);

        // Get medicine brand
        $brand_id = $medicine_results[0]['Brand'];
        $brand_results = $connection->execute('SELECT * FROM brand WHERE PrimaryKey = :brand',
            ['brand' => $brand_id])
            ->fetchAll('assoc');
        $this->set('brand', $brand_results);

        // Fetch all from medicine
        $query = $connection->execute('SELECT * FROM medicine')
            ->fetchAll('assoc');

        //debug($query);

        /*
        foreach ($query as $medicine) {
            echo $medicine->Dosage;
        }*/
    }
}
