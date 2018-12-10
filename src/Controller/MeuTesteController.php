<?php
namespace App\Controller;

use App\Controller\AppController;
use \Cake\ORM\TableRegistry;

/**
 * MeuTeste Controller
 *
 *
 * @method \App\Model\Entity\MeuTeste[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MeuTesteController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->autoRender = false;
        $this->loadModel('Shippers');
        $shippers = $this->Shippers->find('all')
//                ->where(array('ShipperID' => 1))
                ->toArray();
        debug($shippers);
    }
    
    public function view($id = null){
        $this->autoRender = false;
        $this->loadModel('Shippers');
        $shipper = $this->Shippers->get($id);
        debug($shipper);
    }
    
    public function add(){
        $this->autoRender = false;
        $tableShippers = TableRegistry::get('Shippers');
        $queryString = $this->request->getQuery();
        
        $shipper = $tableShippers->newEntity();
        $shipper->ShipperName = $queryString['ShipperName'];
        $shipper->Phone = $queryString['Phone'];
        $result = $tableShippers->save($shipper);
        debug($result);
    }
    
     public function update($id = null){
        $this->autoRender = false;
        $tableShippers = TableRegistry::get('Shippers');
        $queryString = $this->request->getQuery();
        
        $shipper = $tableShippers->get($id);
        $shipper->ShipperName = $queryString['ShipperName'];
        $shipper->Phone = $queryString['Phone'];
        $result = $tableShippers->save($shipper);
        debug([$shipper, $result, $result->errors()]);
    }
    
    public function delete($id = null){
        $this->autoRender = false;
        $tableShippers = TableRegistry::get('Shippers');
              
        $shipper = $tableShippers->get($id);
        $result = $tableShippers->delete($shipper);
        debug($result);
    }
}
