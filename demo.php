<?php
$program = "gswin64c.exe";
$sourceFile = 'source.pdf';
$sourcePass = 'Aa1234567890@Bb';
$outputFile = 'output.pdf';
system('"'.$program.'" -q -dBATCH -dNOPAUSE -sDEVICE=pdfwrite -dPreserveAnnots=false -dAutoRotatePages=/None -sOutputFile="'.$outputFile.'" -sPDFPassword="'.$sourcePass.'" -f "'.$sourceFile.'"');
?>