<?php
	include_once('inc/PHPWord/PHPWord.php');
	$PHPWord = new PHPWord();
	//Adding style
	$garis = array('name'=>'aagaris','size'=>10);
	$huruf = array('name'=>'aahuruf','size'=>10);
	$angka = array('name'=>'aaangka','size'=>10);
	$symbol = array('name'=>'aasymbol','size'=>10);
	$PHPWord->addFontStyle('garis',$garis);
	$PHPWord->addFontStyle('huruf',$huruf);
	$PHPWord->addFontStyle('angka',$angka);
	$PHPWord->addFontStyle('symbol',$symbol);
	//Done adding style
	$section = $PHPWord->createSection();
	$section->addText('Hello World','huruf');
	$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
	$objWriter->save('helloWorld.docx');
?>