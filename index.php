<?php
session_start();
$time = time() + 4799952000; // 86400

if (isset($_POST['user'], $_POST['pass'])) {
    if ($_POST['checkbox'] == 'checkedValue') {
        echo 'Đăng Nhập thành công!';
        $_SESSION['LOGIN'] = $_POST['user'];
        setcookie('Ghi_Nho', $_POST['user'], $time);
        header('location:main.php');
    }
    else {
        echo 'Đăng Nhập thành công!';
        $_SESSION['LOGIN'] = $_POST['user'];
        header('location:main.php');
    }
}

if (isset($_SESSION['LOGIN'])) {
    header('location:main.php');
}
if (isset($_COOKIE['Ghi_Nho'])) {
    header('location:main.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Login PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form method="POST">
        <div class="form-group">
            <label for="">USER:</label>
            <input type="text" class="form-control" name="user" placeholder="... USERNAME ...">
        </div>
        <div class="form-group">
            <label for="">PASS:</label>
            <input type="text" class="form-control" name="pass" placeholder="... PASSWORD ...">
        </div>
        <div class="form-group">
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="checkbox" value="checkedValue">
                    Ghi Nhớ
                </label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
