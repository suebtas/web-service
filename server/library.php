<?php
class Calculator{
	/**
	 *@soap
	*/
	public function sum($x,$y){
			return $x+$y;
	}
	/**
	 *@soap
	*/
	public function minus($x,$y){
		return $x-$y;
	}
	/**
	 *@soap
	*/
	public  function test(){
		return json_encode(array('ok'=>'data','value'=>'abc'));
	}
}