<?php

/** 
 * 
 * poin 2
 * 
 * - 1 || Buatlah sebuah class dengan menginplementasikan access modifier pada method maupun properties
 * - 1 || invoke/call method yang kalian buat dengan visibilitas static maupun non static
 */
class Card
{
    private $access;

    public function setaccess($a){
		$this->access = $a;
	}

	public function getaccess() {
		return $this->access; 
}
}
 
$card =new Card;
$card ->setaccess("access accepted");

echo $card->getaccess();