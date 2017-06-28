<?php
	class Site {
		private $talleresArray, $bodyshopArray, $expressMaintenanceArray, $repairsArray;
		function __construct() {
			$this->talleresArray = array(
				'eurostern-country' => array(
					'id' => '1',
					'name' => 'Eurostern Country',
					'address' => 'Av. Ávila Camacho No. 2085, Col. Country Club CP 44210. Guadalajara, Jalisco.',
					'telefono' => '01 (33) 5000 3400',
					'call' => '01 (33) 5000 3400',
					'grid' => 'pull-left',
					'image' => 'small_eurostern_country.jpg'
				),
				'suecia-car-quajimalpa' => array(
					'id' => '2',
					'name' => 'Suecia Car Quajimalpa',
					'address' => 'Carretera México – Toluca No. 5567 KM. 20, Col. Santa Fe Cuajimalpa, Deleg. Cuajimalpa de Morelos, C.P. 05000, México, D.F.',
					'telefono' => '(55) 4125 5870',
					'call' => '5541255870',
					'grid' => 'pull-right',
					'image' => 'small_suecia_car_cuajimalpa.jpg'
				),
				'brp-ssandier' => array(
					'id' => '3',
					'name' => 'BRP Ssandier',
					'address' => 'Av. Vallarta 5500-B.',
					'telefono' => '(33) 3770 7490',
					'call' => '3337707490',
					'grid' => 'pull-left',
					'image' => 'small_brp_ssandier.jpg'
				),
				'direct-express-sanzio' => array(
					'id' => '4',
					'name' => 'Direct Express Sanzio',
					'address' => 'Av. Rafael Sanzio No. 578, Col Arcos de Guadalupe, CP 45037, Zapopan, Jal.',
					'telefono' => '(33) 3777 1927',
					'horarios' => array(
						'ventas' => '09:00-20:00',
						'servicios' => '08:00-19:00'	
					),
					'grid' => 'pull-right',
					'image' => 'small_direct_express_sanzio.jpg'
				)
			);
			$this->bodyshopArray = array(
				'body_shop_ford' => array(
					'id' => '1',
					'name' => 'Body Shop Ford',
					'address' => 'Calzada Alamos No. 141-C, C.P. 45010, Col. Ciudad Granja, Zapopan.',
					'telefono' => '(33) 3818 7500',
					'call' => '3338187500',
					'grid' => 'pull-left',
					'horarios' => array(
						'servicio' => '08:00-20:00'
					),
					'image' => 'smal_body_shop_ford.jpg'
				),
				'body_shop_vw' => array(
					'id' => '2',
					'name' => 'Body Shop VW',
					'address' => 'Carlos Ramírez.',
					'telefono' => '(33) 1204 1025',
					'call' => '3312041025',
					'grid' => 'pull-right',
					'image' => 'small_body_shop_vw.jpg'
				)
			);
			$this->expressMaintenanceArray = array(
				'tyreplus' => array(
					'id' => '1',
					'name' => 'Tyre Plus',
					'address' => 'Agustín Yañez No. 2494.',
					'telefono' => '(33) 3770 4000',
					'call' => '3337704000',
					'grid' => 'pull-left',
					'horarios' => array(
						'ventas' => 'Lunes a viernes de 8:30am a 7:00pm, sábados de 8:30am a 2:00pm.'
					),
					'image' => 'small_tyreplus.jpg'
				),
				'tyreplus-country' => array(
					'id' => '2',
					'name' => 'Tyre Plus Country',
					'address' => 'Circunvalación Jorge Álvarez del Castillo #1224, Col. Prados Providencia, C.P. 44670.',
					'grid' => 'pull-right',
					'horarios' => array(
						'servicio' => 'Lunes a Viernes de 9 a 7, horario corrido, Sábados de 9:00am a 2:00 pm'
					),
					'image' => 'tyreplus.jpg'
				)
			);
			$this->repairsArray = array(
				'mopar' => array(
					'id' => '1',
					'name' => 'Mopar Shop SyC Motors',
					'address' => 'Calzada Lázaro Cárdenas 1962, Del Fresno, 44909 Guadalajara, Jal.',
					'telefono' => '01 33 1404 7401',
					'call' => '013314047401',
					'grid' => 'pull-left',
					'horarios' => array(
						'today' => array(
							'legend' => 'Hoy Abierto: ',
							'horario' => '9–14, 15:30–18:30'
						)
					),
					'image' => 'small_mopar_shop.jpg'
				)
			);
		}
		public function getWorkShop() {
			return $this->talleresArray;
		}
		public function getBoyShop() {
			return $this->bodyshopArray;
		}
		public function getMaintenance() {
			return $this->expressMaintenanceArray;
		}
		public function getReparirs() {
			return $this->repairsArray;
		}
	}
?>