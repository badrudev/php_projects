<?php

// $s1 = "interview mocks.com is a interview prep site";

// $s2 = "interview";

// $res = substr_count($s1, $s2);

// echo($res);

// $target_dir = "uploads/";

// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

// $uploadOk = 1;

// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// if(isset($_POST["submit"])) {

//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

//   if($check !== false) {

//     echo "File is an image - " . $check["mime"] . ".";

//     $uploadOk = 1;

//   } else {

//     echo "File is not an image.";

//     $uploadOk = 0;

//   }

// }


// function Palindrome($number){ 
//     $temp = $number; 
//     $new = 0; 
//     while (floor($temp)) { 
//         $d = $temp % 10; 
//         $new = $new * 10 + $d; 
//         $temp = $temp/10; 

//     } 

//     if ($new == $number){ 
//         return 1; 
//     } else{
//         return 0;
//     }

// } 

// $original = 123;
// $new = 54; 
// $d = $original % 10;
// $new = $new * 10 + $d; 
// $original = $original/10; 

// print($d);
// echo "<br>";
// print($new);
// echo "<br>";
// print($original);

// if (Palindrome($original)){ 
//     echo "Palindrome"; 
// }else { 
// echo "Not a Palindrome"; 
// }

$body = "This is a sentence and it has to find find@me.com in it"; 
echo $str = preg_replace('/([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})/', '<a href="mailto:$1">$1</a>', $body);

?>