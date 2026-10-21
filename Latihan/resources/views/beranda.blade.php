<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapor Desa</title>
</head>
<style>
#Header{
padding: 20px;
display: flex;
justify-content:space-between;
align-items: center;
gap: 50px;
}
#logoweb{
    width: 50px;
    height: 50px;
}
#Navbar{
    gap: 50px;
}
#LoginDaftar{
    gap: 20px;
}
</style>
<body>
    <header id="Header">
        <div id="logo">
          <img src="{{ asset('images/logoweb.jpeg') }}" id="logoweb" alt="Logo">
        </div>
        <nav class="Navbar">
            <a href="#">BERANDA</a>
            <a href="#">LAPORAN SAYA</a>
            <a href="#">DAFTAR LAPORAN</a>
        </nav>
        <div id="LoginDaftar">
          <a href="Login">LOGIN</a>
          <a href="Daftar">DAFTAR</a>
        </div>
    </header>
</body>
</html>