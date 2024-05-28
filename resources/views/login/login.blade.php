<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="{{ asset('assets2/css/login.css') }}" rel="stylesheet">
</head>

<body>
    <h2>Login & Register Page</h2>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="/login" method="post">
                @csrf
                <h1>Log In</h1>
                <input type="email" placeholder="Email" name="email" id="email" autocomplete="off" />
                <input type="password" placeholder="Password" name="password" id="password" />
                <button type="submit" value="login">Log In</button>
            </form>
        </div>
        <div class="form-container sign-up-container">
            <form action="/register" method="post">
                @csrf
                <h1>Buat Akun</h1>
                <input type="text" placeholder="Name" name="name" id="name" autocomplete="off" />
                <input type="email" placeholder="Email" name="email" id="password" autocomplete="off" />
                <input type="password" placeholder="Password" name="password" />
                <input type="password" placeholder="Konfirmasi Password" name="password_confirmation"
                    id="password_confirmation" />
                <button>Register</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Selamat datang</h1>
                    <p>Jika anda sudah membuat akun bisa memencet tombol dibawah ini</p>
                    <button class="ghost" id="signIn">Log In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Halo</h1>
                    <p>Terimakasi sudah membuat akun , untuk yang belum membuat bisa memencet tomnbol dibawah ini</p>
                    <button class="ghost" id="signUp">Register</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets2/js/login.js') }}"></script>

</body>

</html>
