<?php
session_start();
?>
<form method="POST" >
    <input type="tekt" name="username" placeholder="username"> <br><br>
    <input type="password" name"password_kamu" placeholder="password"> <br><br>
    <input type="submit" name="masuk" value="login">

</form>

<?php
if(isset($_post['masuk'])){

    $username =$_POST['username'];
    $password_kamu = $_POST['password kamu'];

    if($username == 'user1'){

        if($password_kamu == '123'){

            $_SESSION['user'] = $username;

            header('location: beranda.php');

        }else{
            echo "
            <script>
            alert(' PASWORD SALAH ... !! ');
            </script>
         ";
        }

    }else {
        echo "
        <script>
        alert(' USERNAME TIDAK TERDAFTAR..!! ');
        </script>

        ";
    }
 }
?>
