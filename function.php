<?php
// $conn = mysqli_connect("localhost","id21944867_fauzandzkr","@Kf2d1cmp3n4","id21944867_dbpomoru");
// $conn = mysqli_connect("sql300.infinityfree.com","if0_36078450","Kf2d1cmp3n4","if0_36078450_dbpomoru");
$conn = mysqli_connect("localhost","root","","dbpomoru");

function registrasi($data){
    date_default_timezone_set('Asia/Jakarta');
    global $conn;

    $username       = strtolower(stripcslashes($data['username']));
    $email          = $data['email'];
    $password       = mysqli_real_escape_string($conn, $data['password']);
    $acc_created    = date("Y-m-d");


    $username_check = "SELECT username FROM account WHERE username =  '$username'";

    $fetch = mysqli_query($conn, $username_check);

    if( mysqli_fetch_assoc($fetch)){
        echo "
            <script>
                alert('Mohon maaf, username sudah terdaftar.')
            </script>
        ";
        return false;
    };

    // ENKRIPSI PASSWORD
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // TAMBAH KE DATABASE
    $addData = "INSERT INTO account VALUES('', '$username', '$email', '$password_hash', '$acc_created')";

    mysqli_query($conn, $addData);

    return mysqli_affected_rows($conn);
}


?>