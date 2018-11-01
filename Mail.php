
<?php

$Navn =$_POST['Dit Navn'];
$MedlemsNr =$_POST['MedlemsNr'];
$cola =$_POST['Cola 05'];
$Topform =$_POST['Topform'];
$Classic =$_POST['Classic'];
$Pilser =$_POST['Pilser'];
if(isset($_POST['send'])){

    $to = "michael_trans@hotmail.com";
    $subject = "Personalekøb";
    $txt = "Navn " + $Navn + "\n" + " MedlemsNr " + $MedlemsNr + "\n" + " Antal cola på 0,5 liter= " + $cola + 
    " Antal Topform = " + $Topform + " Antal Classic " + $Classic + " Antal Pilser " + $Pilser;
    
    $headers = "From: it@michael-trans.dk" . "\r\n" ;
//echo $txt;
    mail($to,$subject,$txt,$headers);
}
// the message

?>

