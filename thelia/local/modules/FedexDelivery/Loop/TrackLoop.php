<?php
 namespace FedexDelivery\Loop;

 use Thelia\Core\Template\Element\BaseLoop;
 use Thelia\Core\Template\Element\LoopResult;
 use Thelia\Core\Template\Element\LoopResultRow;
 use Thelia\Core\Template\Element\ArraySearchLoopInterface;
 use Thelia\Core\Template\Loop\Argument\ArgumentCollection;
 use Thelia\Core\Template\Loop\Argument\Argument;
 use FedexDelivery\FedexDelivery;
 use Propel\Runtime\Propel;
 use FedexDelivery\Model\FedexShip;
 use FedexDelivery\Model\FedexShipQuery;
 use FedexDelivery\Model;
 use Propel\Runtime\ActiveQuery\Criteria;


 class TrackLoop extends BaseLoop implements ArraySearchLoopInterface {
    public $countable = true;
    public $timestampable = false;
    public $versionable = false;

     public function getArgDefinitions()
     {
         return new ArgumentCollection(
             /*
             Argument::createIntListTypeArgument('start', 0),
             Argument::createIntListTypeArgument('stop', null, true)
             */
         );
     }

     public function buildArray()
     {
         $items = array();

         //for($i = 0; $i < 10; $i++) {
            //$items[] = array("cascales arthur", "test");
         //}

         $ships = FedexShipQuery::create()
                                    ->orderByClientDateOrder(Criteria::DESC)
                                    ->find();
         // $authors contains a collection of Author objects
         // one object for every row of the author table
         foreach($ships as $ship) {
           $customer = $ship->getClientId();
           $dateOrder = $ship->getClientDateOrder()->format('Y-m-d');
           $orderRef =  $ship->getOrderId();
           $trackId = $ship->getFedexOrderId();
           $items[] = array($orderRef, $customer, $trackId, $dateOrder);
         }

         return $items;

     }

     public function parseResults(LoopResult $loopResult)
     {
         foreach ($loopResult->getResultDataCollection() as $item) {

             $loopResultRow = new LoopResultRow();

             $loopResultRow->set("order", $item[0]);
             $loopResultRow->set("customer", $item[1]);
             $loopResultRow->set("track", $item[2]);
             $loopResultRow->set("date", $item[3]);

             $loopResult->addRow($loopResultRow);
         }

         return $loopResult;
     }
 }