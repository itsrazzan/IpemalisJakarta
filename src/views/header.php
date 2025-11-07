<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../output.css" rel="stylesheet">
</head>
<body>
    <nav class="bg-primary text-black px-4 py-2 flex items-center justify-between">
  <div class="flex items-center space-x-2">
    <img src="/public/logo.png" alt="Logo" class="h-8">
    <span class="font-bold text-xl text-yellow-500">navigation bar</span>
  </div>
  <ul class="flex gap-6">
    <li><a href="/" class="hover:text-yellow-400">Beranda</a></li>
    <li class="relative group">
      <a href="#" class="hover:text-yellow-400">Profil</a>
      <ul class="absolute hidden group-hover:block bg-white text-black shadow-lg rounded mt-2">
        <li><a href="/tentang-kami">Tentang Kami</a></li>
        <li><a href="/struktur">Struktur</a></li>
        <li><a href="/anggota">Anggota</a></li>
      </ul>
    </li>
    <li><a href="../src/views/kegiatan.php" class="hover:text-yellow-400">Kegiatan</a></li>
    <li><a href="/berita" class="hover:text-yellow-400">Berita</a></li>
  </ul>
</nav>

</body>
</html>
