<head>
        <link href="myStylesheet.css"
            rel="stylesheet"
            type="text/css"/>
</head>

<?php 
//access the global array called $_POST to get the values from the text fields 
 
$pitcairnCapital = $_POST["pitcairnCapital"]; 
$keelingCapital = $_POST["keelingCapital"]; 
$tokelauCapital = $_POST["tokelauCapital"]; 
$niueCapital = $_POST["niueCapital"]; 
$norfolkCapital = $_POST["norfolkCapital"];

$quizTotal = 0;
if($pitcairnCapital == "adamstown"){
    $quizTotal++;
}
if($keelingCapital == "panjang"){
    $quizTotal++;
}
if($tokelauCapital == "nukunonu"){
    $quizTotal++;
}
if($niueCapital == "alofi"){
    $quizTotal++;
}
if($norfolkCapital == "kingston"){
    $quizTotal++;
}


echo "<h1>Joe Rubalcava</h1>";
echo "<p><b><a href=\"../../\">HOME</a></b></p>";

echo "<h2>Quiz Answers: " . $quizTotal * 20 . "%"; 


echo "<h3>Question 1: What is the Capital of the Pitcairn Islands? ";
if($pitcairnCapital == "adamstown"){
    echo "Correct";
}else {
    echo "Incorrect";
}
echo "</h3><div><p>";
if($pitcairnCapital != null){
    echo "You said the Capital of the Pitcain Islands was ";
    if($pitcairnCapital == "adamstown"){
        echo "Adamstown. This is Correct.";
    }else{
        if($pitcairnCapital == "pitcairn"){
            echo "Pitcairn";
        }else if($pitcairnCapital == "henderson"){
            echo "Henderson.";
        }else if($pitcairnCapital == "ducie"){
            echo "Ducie.";
        }
        echo " This is Not Correct. The Capital of the Pitcairn Islands is Adamstown.";
    }
}else{
    echo "You did not select an answer. The Capital of the Pitcairn Islands is Adamstown.";
}
echo "<br><p></div>"; 





echo "<h3>Question 2: What is the Capital of the Keeling Islands? ";
if($keelingCapital == "panjang"){
    echo "Correct";
}else {
    echo "Incorrect";
}
echo "</h3><div><p>";
if($keelingCapital != null){
    echo "You said the Capital of the Keeling Islands was ";
    if($keelingCapital == "panjang"){
        echo "Pulau Panjang otherwise known as Long Island. This is Correct.";
    }else{
        if($keelingCapital == "gangsa"){
            echo "Pulau Gangsa otherwise known as Copper Island.";
        }else if($keelingCapital == "kechil"){
            echo "Pulau Ampang Kechil otherwise known as Little Ampang Island.";
        }else if($keelingCapital == "ampang"){
            echo "Pulau Ampang otherwise known as Ampang Island.";
        }
        echo " This is Not Correct. The Capital of the Keeling Islands is Pulau Panjang otherwise known as Long Island.";
    }
}else{
    echo "You did not select an answer. The Capital of the Keeling Islands is Pulau Panjang.";
}
echo "<br><p></div>"; 




echo "<h3>Question 3: What is the Capital of Tokelau? ";
if($tokelauCapital == "nukunonu"){
    echo "Correct";
}else {
    echo "Incorrect";
}
echo "</h3><div><p>";
if($tokelauCapital != null){
    echo "You said the Capital of Tokelau was ";
    if($tokelauCapital == "nukunonu"){
        echo "Nukunonu. This is Correct.";
    }else{
        if($tokelauCapital == "tokelau"){
            echo "Tokelau.";
        }else if($tokelauCapital == "atafu"){
            echo "Atafu.";
        }else if($tokelauCapital == "fakaofo"){
            echo "Fakaofo.";
        }
        echo " This is Not Correct. The Capital of Tokelau is Nukunonu.";
    }
}else{
    echo "You did not select an answer. The Capital of Tokelau is Nukunonu.";
}
echo "<br><p></div>"; 





echo "<h3>Question 4: What is the Capital of Niue? ";
if($niueCapital == "alofi"){
    echo "Correct";
}else {
    echo "Incorrect";
}
echo "</h3><div><p>";
if($niueCapital != null){
    echo "You said the Capital of Niue was ";
    if($niueCapital == "alofi"){
        echo "Alofi. This is Correct.";
    }else{
        if($niueCapital == "fulalatea"){
            echo "Fulalatea.";
        }else if($niueCapital == "mutalau"){
            echo "Mutalau.";
        }else if($niueCapital == "tamakautoga"){
            echo "Tamakautoga.";
        }
        echo " This is Not Correct. The Capital of Niue is Alofi.";
    }
}else{
    echo "You did not select an answer. The Capital of Niue is Alofi.";
}
echo "<br><p></div>"; 



echo "<h3>Question 5: What is the Capital of Norfolk Island? ";
if($norfolkCapital == "kingston"){
    echo "Correct";
}else {
    echo "Incorrect";
}
echo "</h3><div><p>";
if($norfolkCapital != null){
    echo "You said the Capital of Norfolk Island was ";
    if($norfolkCapital == "kingston"){
        echo "Kingston. This is Correct.";
    }else{
        if($norfolkCapital == "burntpine"){
            echo "Burnt Pine.";
        }else if($norfolkCapital == "stbarnabas"){
            echo "St Barnabas.";
        }else if($norfolkCapital == "cascade"){
            echo "Cascade.";
        }
        echo " This is Not Correct. The Capital of Norfolk Island is Kingston.";
    }
}else{
    echo "You did not select an answer. The Capital of Norfolk Island is Kingston.";
}
echo "<br><p></div>";
echo "<p><b><a href=\"../exercise2/e2qc.html\">Retake Quiz</a></b></p>"; 

?> 