<?php
 class Room
{
	public $color = 'red';

	public function getColor()
	{
		echo $this->color . '<br>'; #чтобы в методе класса  обратиться к свойству класса используется конструкция $this->ClassPoperty
	}
	public function changeColor($color){
	$this->color = $color; #$this->color -- обращаемся к свойству класса, $color - на что меняем его.
	}
}

$object = new Room();

$object->getColor(); #выполнить 

$object->color  = 'Новый цвет';
$object->getColor();#выполнить
$object->changeColor('Серобуромалиновый');
$object->getColor(); #выполнить

?>