// login.js

document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // 입력된 값 가져오기
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // 여기에 실제 로그인 로직을 추가할 수 있습니다.
    // 예시로 간단한 사용자 이름과 비밀번호 검증
    const validUsername = 'user123';
    const validPassword = 'password123';

    if (username === validUsername && password === validPassword) {
        alert('Login successful');
        // 로그인 성공 후 home.html로 리디렉션
        window.location.href = 'home.html';  // 홈페이지로 리디렉션
    } else {
        // 로그인 실패 시 오류 메시지 표시
        document.getElementById('error-message').style.display = 'block';
    }
});