<?php

//$student = "Bill Gates";
//$siswa = ["John Cena","The Rock","Batista","Rey Mysterio"];
//echo $siswa[3];

//array numeric -> array yg indexnya berupa numerik
//array assosiative -> array yg indexnya berupa string
$person = [
    ["name" => "Gopal", "address" => "Madrid", "age" => 40],
    ["name" => "Kaizo", "address" => "Saturnus", "age" => 80],
    ["name" => "Kokochi", "address" => "Pluto", "age" => 20],
];

echo $person[2]["address"];
?>