<?php
//echo '<pre>';
//    print_r($_POST);

//$x=100;
//echo isset($x); //if found value in isset $x then return 1 and other hand it will bw null.

//echo isset($_POST['btn']);

//if (isset($_POST['btn'])) {
//    echo "hello";
//}else {
//    echo "hai";
//}


//if (isset($_POST['btn'])) {
//    $firstName = $_POST['first_name'];
//    $lastName = $_POST['last_name'];
//    $fullName = $firstName.' '.$lastName;
//    echo $fullName;
//}
$result=' ';
if (isset($_POST['btn'])) {
   require_once 'FullName.php';
   $fullName = new FullName();
   $result = $fullName->makeFullName($_POST['first_name'], $_POST['last_name']);
}



?>

<form action="" method="post">
    <table>
        <tr>
            <th>First Name</th>
            <td><input type="text" name="first_name"></td>
        </tr>

        <tr>
            <th>Last Name</th>
            <td><input type="text" name="last_name"></td>
        </tr>

        <tr>
            <th>Full Name</th>
            <td><input type="text" name="full_name" value="<?php echo $result;?>"></td>
        </tr>

        <tr>
            <th></th>
            <th><input type="submit" name="btn" value="Submit"></th>
        </tr>
    </table>
</form>