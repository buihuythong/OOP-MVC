<?php
	interface Base_Model {

		public function getAll($row);
		public function getRowFromCodition($row, $conditon);
		public function removeFromCondition($row,$conditon);
		
	}