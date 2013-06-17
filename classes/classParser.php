<?php
	class Parser{
		private $data;
		
		public function __construct(){
			echo "Parser module started<br/>";
			//Insert construction method here			
		}
		
		public function loadData($origin){
			$data = simplexml_load_file($origin);
			print_r($data->{'part-list'}->children());
			echo "Data loaded<br/>";				
		}
		
		public function getScoreParts(){
			//Called after loadData
			//Used to get the available scoreparts
			echo $data->{'part-list'}->children();
		}
		
	}
?>