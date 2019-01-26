<?php
// Copyright 2009, FedEx Corporation. All rights reserved.
/**
 *  Print SOAP request and response
 */
define('Newline',"<br />");
/**
 * This section provides a convenient place to setup many commonly used variables
 * needed for the php sample code to function.
 */
function getProperty($var){
    if($var == 'key') Return '3xmgk097vhyEi8G9'; 
	if($var == 'password') Return '6YvL6TanO4TSJ5MeBpyHLygpu'; 
	if($var == 'parentkey') Return 'XXX'; 
	if($var == 'parentpassword') Return 'XXX'; 	
	if($var == 'shipaccount') Return '510088000';
	if($var == 'billaccount') Return '510088000';
	if($var == 'dutyaccount') Return '510088000'; 
	if($var == 'freightaccount') Return 'XXX';  
	if($var == 'trackaccount') Return 'XXX'; 
	if($var == 'dutiesaccount') Return 'XXX';
	if($var == 'importeraccount') Return 'XXX';
	if($var == 'brokeraccount') Return 'XXX';
	if($var == 'distributionaccount') Return 'XXX';
	if($var == 'locationid') Return 'PLBA';
	if($var == 'printlabels') Return true;
	if($var == 'printdocuments') Return true;
	if($var == 'packagecount') Return '4';
	if($var == 'validateaccount') Return 'XXX';
	if($var == 'meter') Return '118857852';
		
	if($var == 'shiptimestamp') Return mktime(10, 0, 0, date("m"), date("d")+1, date("Y"));
	if($var == 'spodshipdate') Return '2016-04-13';
	if($var == 'serviceshipdate') Return '2013-04-26';
  if($var == 'shipdate') Return '2016-04-21';
	if($var == 'readydate') Return '2014-12-15T08:44:07';
	//if($var == 'closedate') Return date("Y-m-d");
	if($var == 'closedate') Return '2016-04-18';
	if($var == 'pickupdate') Return date("Y-m-d", mktime(8, 0, 0, date("m")  , date("d")+1, date("Y")));
	if($var == 'pickuptimestamp') Return mktime(8, 0, 0, date("m")  , date("d")+1, date("Y"));
	if($var == 'pickuplocationid') Return 'SQLA';
	if($var == 'pickupconfirmationnumber') Return '1';
	if($var == 'dispatchdate') Return date("Y-m-d", mktime(8, 0, 0, date("m")  , date("d")+1, date("Y")));
	if($var == 'dispatchlocationid') Return 'NQAA';
	if($var == 'dispatchconfirmationnumber') Return '4';		
	
	if($var == 'tag_readytimestamp') Return mktime(10, 0, 0, date("m"), date("d")+1, date("Y"));
	if($var == 'tag_latesttimestamp') Return mktime(20, 0, 0, date("m"), date("d")+1, date("Y"));	
	if($var == 'expirationdate') Return date("Y-m-d", mktime(8, 0, 0, date("m"), date("d")+15, date("Y")));
	if($var == 'begindate') Return '2014-10-16';
	if($var == 'enddate') Return '2014-10-16';	
	if($var == 'trackingnumber') Return 'XXX';
	if($var == 'hubid') Return '5531';
	
	if($var == 'jobid') Return 'XXX';
	if($var == 'searchlocationphonenumber') Return '5555555555';
	if($var == 'customerreference') Return '39589';
	if($var == 'shipper') Return array(
		'Contact' => array(
			'PersonName' => 'Sender Name',
			'CompanyName' => 'Sender Company Name',
			'PhoneNumber' => '1234567890'
		),
		'Address' => array(
			'StreetLines' => array('Addres \r  s Line 1'),
			'City' => 'Collierville',
			'StateOrProvinceCode' => 'TN',
			'PostalCode' => '38017',
			'CountryCode' => 'US',
			'Residential' => 1
		)
	);
	if($var == 'recipient') Return array(
		'Contact' => array(
			'PersonName' => 'Recipient Name',
			'CompanyName' => 'Recipient Company Name',
			'PhoneNumber' => '1234567890'
		),
		'Address' => array(
			'StreetLines' => array('Address Line 1'),
			'City' => 'Herndon',
			'StateOrProvinceCode' => 'VA',
			'PostalCode' => '20171',
			'CountryCode' => 'US',
			'Residential' => 1
		)
	);	
	if($var == 'address1') Return array(
		'StreetLines' => array('10 Fed Ex Pkwy'),
		'City' => 'Memphis',
		'StateOrProvinceCode' => 'TN',
		'PostalCode' => '38115',
		'CountryCode' => 'US'
    );
	if($var == 'address2') Return array(
		'StreetLines' => array('13450 Farmcrest Ct'),
		'City' => 'Herndon',
		'StateOrProvinceCode' => 'VA',
		'PostalCode' => '20171',
		'CountryCode' => 'US'
	);					  
	if($var == 'searchlocationsaddress') Return array(
		'StreetLines'=> array('240 Central Park S'),
		'City'=>'Austin',
		'StateOrProvinceCode'=>'TX',
		'PostalCode'=>'78701',
		'CountryCode'=>'US'
	);
									  
	if($var == 'shippingchargespayment') Return array(
		'PaymentType' => 'SENDER',
		'Payor' => array(
			'ResponsibleParty' => array(
				'AccountNumber' => getProperty('billaccount'),
				'Contact' => null,
				'Address' => array('CountryCode' => 'US')
			)
		)
	);	
	if($var == 'freightbilling') Return array(
		'Contact'=>array(
			'ContactId' => 'freight1',
			'PersonName' => 'Big Shipper',
			'Title' => 'Manager',
			'CompanyName' => 'Freight Shipper Co',
			'PhoneNumber' => '1234567890'
		),
		'Address'=>array(
			'StreetLines'=>array(
				'1202 Chalet Ln', 
				'Do Not Delete - Test Account'
			),
			'City' =>'Harrison',
			'StateOrProvinceCode' => 'AR',
			'PostalCode' => '72601-6353',
			'CountryCode' => 'US'
			)
	);
}
function setEndpoint($var){
	if($var == 'changeEndpoint') Return false;
	if($var == 'endpoint') Return 'XXX';
}
function trackDetails($details, $spacer){
	foreach($details as $key => $value){
		if(is_array($value) || is_object($value)){
        	$newSpacer = $spacer. '&nbsp;&nbsp;&nbsp;&nbsp;';
    		echo '<tr><td>'. $spacer . $key.'</td><td>&nbsp;</td></tr>';
    		trackDetails($value, $newSpacer);
    	}elseif(empty($value)){
    		echo '<tr><td>'.$spacer. $key .'</td><td>'.$value.'</td></tr>';
    	}else{
    		echo '<tr><td>'.$spacer. $key .'</td><td>'.$value.'</td></tr>';
    	}
    }
}
   function addShipper()
    {
        $shipper = array(
            'Contact' => array(
                'PersonName' => 'Michel herbelin',
                'CompanyName' => 'Michel herbelin',
                'PhoneNumber' => '0381686767'
            ),
		'Address' => array(
			'StreetLines' => array('9 Rue de la 1ere Armee'),
			'City' => 'Charquemont',
			'StateOrProvinceCode' => 'HL',
			'PostalCode' => '25140',
			'CountryCode' => 'FR'
		)
        );
        return $shipper;
    }
    function addRecipient($deliveryAddress)
    {
        $recipient = array(
            'Contact' => array(
                'PersonName' => $deliveryAddress->getLastname() . ' ' . $deliveryAddress->getFirstname(),
                'CompanyName' => $deliveryAddress->getCompany(),
                'PhoneNumber' =>  $deliveryAddress->getPhone()
            ),
            'Address' => array(
                'StreetLines' => array($deliveryAddress->getAddress1(), $deliveryAddress->getAddress2()),
                'City' =>  $deliveryAddress->getCity(),
                'StateOrProvinceCode' => ($deliveryAddress->getState() == null) ? 'FR' : $deliveryAddress->getState()->getIsocode(),
                'PostalCode' => $deliveryAddress->getZipcode(),
                'CountryCode' => $deliveryAddress->getCountry()->getIsoalpha2()
            )
        );
        return $recipient;	                                    
    }
    function addShippingChargesPayment()
    {
        $shippingChargesPayment = array(
            'PaymentType' => 'SENDER', // valid values RECIPIENT, SENDER and THIRD_PARTY
            'Payor' => array(
                'ResponsibleParty' => array(
                    'AccountNumber' => getProperty('billaccount'),
                    'CountryCode' => 'FR'
                )
            )
        );
        return $shippingChargesPayment;
    }
    function addLabelSpecification()
    {
        $labelSpecification = array(
            'LabelFormatType' => 'COMMON2D', // valid values COMMON2D, LABEL_DATA_ONLY
            'ImageType' => 'PDF',  // valid values DPL, EPL2, PDF, ZPLII and PNG
            'LabelStockType' => 'PAPER_7X4.75'
        );
        return $labelSpecification;
    }
    function addPackageLineItem1($weight)
    {
        $packageLineItem = array(
            'SequenceNumber'=>1,
            'GroupPackageCount'=>1,
            'Weight' => array(
                'Value' => ($weight == 0) ? 1 : $weight,
                'Units' => 'KG'
            ),
            'Dimensions' => array(
                'Length' => 13.1,
                'Width' => 13.3,
                'Height' => 10.5,
                'Units' => 'CM'
            )
        );
        return $packageLineItem;
    }
	
	function addCustomClearanceDetail(){
	$customerClearanceDetail = array(
		'DutiesPayment' => array(
			'PaymentType' => 'SENDER', // valid values RECIPIENT, SENDER and THIRD_PARTY
			'Payor' => array(
				'ResponsibleParty' => array(
					'AccountNumber' => getProperty('dutyaccount'),
					'Contact' => null,
					'Address' => array(
						'CountryCode' => 'FR'
					)
				)
			)
		),
		'DocumentContent' => 'NON_DOCUMENTS',                                                                                            
		'CustomsValue' => array(
			'Currency' => 'USD', 
			'Amount' => 400.0
		),
		'Commodities' => array(
			
			'0' => array(
				'NumberOfPieces' => 1,
				'Description' => 'Books',
				'CountryOfManufacture' => 'FR',
				'Weight' => array(
					'Units' => 'KG', 
					'Value' => 0
				),
				'Quantity' => 1,
				'QuantityUnits' => 'EA',
				'UnitPrice' => array(
					'Currency' => 'USD', 
					'Amount' => 10
				),
				'CustomsValue' => array(
					'Currency' => 'USD', 
					'Amount' => 40
				)
			)
		),
		'ExportDetail' => array(
			'B13AFilingOption' => 'NOT_REQUIRED'
		)
	);
	return $customerClearanceDetail;
}
function writeToLog($client){  
	
	  /**
		 * __DIR__ refers to the directory path of the library file.
		 * This location is not relative based on Include/Require.
		 */
		if (!$logfile = fopen(__DIR__.'/fedextransactions.log', "a"))
		{
			   error_func("Cannot open " . __DIR__.'/fedextransactions.log' . " file.\n", 0);
			   exit(1);
		}
		fwrite($logfile, sprintf("\r%s:- %s",date("D M j G:i:s T Y"), $client->__getLastRequest(). "\r\n" . $client->__getLastResponse()."\r\n\r\n"));
	
	}
		
?>