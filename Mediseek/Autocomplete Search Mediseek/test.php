<!DOCTYPE html>
<html>
<head>
    <title>Form with PHP Call</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form id="myForm" action="test.php" method="POST">
        <label for="data">Enter Data:</label>
        <input type="text" id="data" name="data">
    </form>
    <?php
    if(!empty($_POST)){
        $q = $_POST["data"]; 
        $output = passthru('python test.py '.$q);
        echo $output;
    }
    ?>
</body>
</html>
<?php
// $user_json = file_get_contents("user.json", 'r');
// $pass_json = file_get_contents("pass.json", 'r');

// $user = json_decode($user_json, TRUE);
// $pass = json_decode($pass_json, TRUE);

// $p = 0;
// $u = "Ayan";

// $user[] = $u;

// $final_data = json_encode($user);
// file_put_contents("user.json", json_encode($user));

// var_dump($user);
// $c = count($user);
// $user[$c]=$u;
// array_push($user, $u);
// echo $user;

// file_put_contents("user.json", json_encode());
// if(in_array($u, $user)){
//     $passindex = array_search($u, $user);
//     if($pass[$passindex] == $p){
//         echo "Login done";
//     }
//     else{
//         echo "password incorrect.";
//     }
// }
// else{
//     echo "invalid user";
// }



// if (!empty($_POST)){
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     if(in_array($email, $user)){
//       $pint = array_search($email, $user);
//       if($pass[$pint] == $password){
// $Array = json_encode($json, true);
// $Array = json_decode($json, true);

// echo count($Array);
// echo $Array[0];
// if ($Array[0]=="Ayan") {
//     echo "pass";
// }
// else{
//     echo "Fail";
// }
// for ($i=0; $i < count($Array); $i++) { 
    // echo $i."<br>";
    //for ($j=0; $j < count($Array[$i]); $j++) { 
        # code...

        // echo $Array[$i][$j];
    //}
    // echo $Array[$i];
//     array(var_dump($Array[$i]));
//     echo "<br>";
//     # code...
// }

// print_r(array(array_keys($Array)));
// foreach ($Array as $name => $value) {
//     echo $value;
//     // if ($value==1) {
//     //     echo "pass";
//     // }
// }
// if ($Array[1]->name == "Ayan Sanki") {
//     echo "pass";
// }
// foreach($Array as $obj){
//     ;
// }
// $Array[1] as $obj;
// print $obj->name;
// $a = json_decode($Array,TRUE);
// echo $a;

//  echo $filter_id;
// $a = $Array->{1};
// echo $Array;
// $a = JSON.parse_str($json);
// $a = array($Array);
// echo $Array([2]);
// print_r($Array[1]);
// $a1 = array($Array[1]);
// $a = $Array[1];
// print_r($a);
// echo $a1;
// echo count($Array);
// echo $a[1];
// echo count(array($Array));
// for ($i=0; $i < ; $i++) { 
//     # code...
// }
?>