<?php
	include "../components/core.php";
    require '../autoload.php';
    $phpWord = new \PhpOffice\PhpWord\PhpWord();

    $phpWord->setDefaultFontName('Times New Roman');
    $phpWord->setDefaultFontSize(14);

    $properties = $phpWord->getDocInfo();

    $section = $phpWord->addSection();
    
    $stmt = $connect->prepare("SELECT * FROM `projects`");
	$stmt->execute(); 
	$result = $stmt->bind_result($id, $name, $description, $img);
    while($stmt->fetch()){
        $text = "";
        $text = $text . "Название проекта: ". $name . " ";
        $text = $text . "Описание проекта: ". $description;
        $section ->addText($text,array(),array()); 
    }

    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord,'Word2007');
    $objWriter -> save('projects.docx');
    header("Location: projects.docx");
?>