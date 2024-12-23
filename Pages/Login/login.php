<?php
session_start();

// 로그인 처리 (임시 사용자 정보)
$valid_username = "admin";
$valid_password = "password123";

// 로그인 요청이 있을 때 처리
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 폼에서 전달된 사용자 입력 값
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 로그인 유효성 검사
    if ($username === $valid_username && $password === $valid_password) {
        // 로그인 성공: 세션에 사용자 정보 저장 후 대시보드 페이지로 리다이렉트
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        // 로그인 실패: 오류 메시지 표시
        $error_message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- CSS 파일 연결 (상대 경로) -->
    <link rel="stylesheet" href="../css/login.css"> <!-- ../css/login.css로 경로 수정 -->
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>

        <!-- 로그인 폼 -->
        <form method="POST" id="loginForm">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>

        <!-- 로그인 오류 메시지 (PHP로 동적 표시) -->
        <?php if (isset($error_message)): ?>
            <p id="error-message" style="color: red;"><?php echo $error_message; ?></p>
        <?php endif; ?>
    </div>

    <script src="login.js"></script>
</body>
</html>
