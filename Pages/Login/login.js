document.getElementById("loginForm").addEventListener("submit", function(event) {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // 클라이언트 측 검증: 빈 입력 필드 체크
    if (username === "" || password === "") {
        event.preventDefault(); // 폼 제출 막기
        alert("Please enter both username and password.");
    }
});
