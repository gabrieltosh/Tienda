<?php 

return array(
//Credenciales
	'client_id'=>'ARPv09Nui2J68WiNFJnAioBVewPgYzA_rLGg2neks6MEILUib9wVxxeXrzaKlzRWjytCTYd3yPmbcLBP',
	'secret'=>'ECSzIs5NeKhqfYvdy4YwCwRBf6ZQwdpnLIBR0Ulur4NF6KfCZ1t1uKFHygUD9IFIB1jXnqsvQ3Xwtf7Q',
	//SDK configuracion
	'settings'=>array(

			//sandbox
			'mode'=>'sandbox',
			//Tiempo de REconeccion
			'http.ConnectionTimeOut'=>30,
			//
			'log.LogEnable'=>true,
			//Archio de Escritura
			'log.FileName'=>storage_path().'/logs/paypal.log',
			//Logueo
			'log.LogLevel'=>'FINE'
		),
	);