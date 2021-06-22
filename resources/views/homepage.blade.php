<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id"
          content="704208666216-aoqto11mrtufo2hbd58sv35aodskv3ec.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <title>Document</title>
</head>
<style>
    ul{
        list-style-type: none;
    }
    ul li a{
        text-decoration: none;
        color: deeppink;
        padding-left: 35px;
    }
</style>
<body>
    <h1>Đây là 1 web rất xịn xò con bò!</h1>
    <h3>Quản lí trường học.</h3>
    <ul>
        <b>Giảng Viên</b>
        <li><a href="admin/teacher/create">Thêm mới</a></li>
        <li><a href="admin/teacher/show">Xem danh sách</a></li>
    </ul>
    <ul>
        <b>Sinh Viên</b>
        <li><a href="admin/student/create">Thêm mới</a></li>
        <li><a href="admin/student/show">Xem danh sách</a></li>
    </ul>

    <div class="flex-c-m">
        <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
    </div>
</body>
<script>
    function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
    }
</script>
</html>
