<?php

/*
** This class is made with love by YoYo
*/

class LOG {
	private $COUNT = 0;
	private $LOG = NULL;
	public function SET($content) {
		if($content != NULL) {
			$this->COUNT++;
			$this->LOG[$this->COUNT] = $content;
		}
	}
	public function SHOW() {
		return $this->LOG;
	}
}

$LOG = new LOG();
$LOG->SET('aici s-a produs ceva');
$LOG->SET('aici bla bla bla');
$LOG->SHOW();

?>
