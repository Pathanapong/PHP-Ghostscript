<?php
	$program = "gswin32c.exe";
	$sourceFile = 'source.pdf';
	$sourcePass = 'Aa1234567890@Bb';
	$outputFile = 'output.pdf';
    system('"'.$program.'" -q -dBATCH -dNOPAUSE -sDEVICE=pdfwrite -dPreserveAnnots=false -dAutoRotatePages=/None -sFONTPATH="C:/WINDOWS/Fonts" -sOutputFile="'.$outputFile.'" -sPDFPassword="'.$sourcePass.'" -f "'.$sourceFile.'"');
?>