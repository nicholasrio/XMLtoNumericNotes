<?php
	include_once('inc/PHPWord/PHPWord.php');
	include_once('classes/classParser.php');
	
	$parser = new Parser();
	$parser->loadData('test_scores/White Christmas.xml');
	//$parser->getScoreParts();
	/*$PHPWord = new PHPWord();
	//Adding style
	$garis = array('name'=>'aagaris','size'=>10);
	$huruf = array('name'=>'aahuruf','size'=>10);
	$angka = array('name'=>'aaangka','size'=>10);
	$symbol = array('name'=>'aasymbol','size'=>10);
	$par = array('spacing'=>1, 'spaceBefore'=>0, 'spaceAfter'=>0);
	$PHPWord->addFontStyle('garis',$garis);
	$PHPWord->addFontStyle('huruf',$huruf);
	$PHPWord->addFontStyle('angka',$angka);
	$PHPWord->addFontStyle('symbol',$symbol);
	$PHPWord->addParagraphStyle('par',$par);
	//Done adding style
	$section = $PHPWord->createSection();
	$section->addText('Hello World','huruf','par');
	$section->addText('Ini cuma coba-coba','huruf','par');
	$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
	$objWriter->save('helloWorld.docx');*/
?>