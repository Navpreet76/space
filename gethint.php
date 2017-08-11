<?php
//Array of names
$a[] = "Anna";
$a[] = "Amanda";
$a[] = "Athena";
$a[] = "Allison";
$a[] = "Brittany";
$a[] = "Betty";
$a[] = "Cathy";
$a[] = "Celine";
$a[] = "Clive";
$a[] = "Cliff";
$a[] = "Chris";
$a[] = "Diane";
$a[] = "Dora";
$a[] = "Davia";
$a[] = "Delilah";
$a[] = "Elizabeth";
$a[] = "Elijah";
$a[] = "Eleanore";
$a[] = "Elmer";
$a[] = "Frank";
$a[] = "Francesca";
$a[] = "Fiona";
$a[] = "Fidel";
$a[] = "Gary";
$a[] = "Georgia";
$a[] = "Gloria";
$a[] = "George";
$a[] = "Hank";
$a[] = "Herman";
$a[] = "Helena";
$a[] = "Helga";
$a[] = "Holly";
$a[] = "Issac";
$a[] = "Ivan";
$a[] = "Ingrid";
$a[] = "Jack";
$a[] = "Jill";
$a[] = "Jermaine";
$a[] = "Jenna";
$a[] = "Jennifer";
$a[] = "Joanna";
$a[] = "Josie";
$a[] = "Jamie";
$a[] = "Joseph";
$a[] = "Jojo";
$a[] = "Julian";
$a[] = "Jhene";
$a[] = "Javier";
$a[] = "Jackson";
$a[] = "Kevin";
$a[] = "Kianna";
$a[] = "Keilani";
$a[] = "Kim";
$a[] = "Kathy";
$a[] = "Lamar";
$a[] = "Latrell";
$a[] = "Lila";
$a[] = "Laila";
$a[] = "Max";
$a[] = "Michael";
$a[] = "Mitchell";
$a[] = "Michelle";
$a[] = "Maria";
$a[] = "Mary";
$a[] = "Mimi";
$a[] = "Navpreet";
$a[] = "Nancy";
$a[] = "Nigel";
$a[] = "Nelson";
$a[] = "Oscar";
$a[] = "Ophelia";
$a[] = "Omar";
$a[] = "Patrick";
$a[] = "Peter";
$a[] = "Patricia";
$a[] = "Pinky";
$a[] = "Qadir";
$a[] = "Qantas";
$a[] = "Quavo";
$a[] = "Roger";
$a[] = "Rambo";
$a[] = "River";
$a[] = "Ronin";
$a[] = "Sam";
$a[] = "Sara";
$a[] = "Smerna";
$a[] = "Sissy";
$a[] = "Steven";
$a[] = "Steph";
$a[] = "Samson";
$a[] = "Tom";
$a[] = "Tia";
$a[] = "Tyson";
$a[] = "Trisha";
$a[] = "Tammy";
$a[] = "Ursula";
$a[] = "Usman";
$a[] = "Urvashi";
$a[] = "Vivian";
$a[] = "Veronica";
$a[] = "Vernon";
$a[] = "William";
$a[] = "Wendy";
$a[] = "Wilson";
$a[] = "Xenia";
$a[] = "Xander";
$a[] = "Yasmine";
$a[] = "Zora";
$a[] = "Zebo";
$a[] = "Zara";
$a[] = "Zlatan";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

//lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>










