<?php

// define('NAMA', 'Gahasa Purba');
// echo NAMA;

// echo "<br>";

// const UMUR = 17;
// echo UMUR;

// class Coba {
// 	const NAMA = 'Gahasa Purba';
// }

// echo Coba::NAMA;

// echo __LINE__;
// echo "<br>";
// echo __FILE__;

// function coba() {
// 	return __FUNCTION__;
// }

// echo coba();

class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

?>