<!DOCTYPE html>
<html lang="en">

<head>
  <?php require "./PHP-Functions/live-server.php"?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elixirul Tineretii</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="./theme.css">
</head>

<body data-theme="elixirul-tineretii">
  <div class="soft-light">
  </div>
  <nav class="navbar w-full shadow-base-100/50 shadow-sm px-6 backdrop-blur-sm">
    <div class="flex w-full md:w-3/4 justify-between mx-auto">
      <div class="flex flex-1 items-center gap-2 ">
        <svg class="icon-[tabler--spray] size-6"></svg>
        <a class="text-base-content text-2xl font-bold no-underline" href="./index.php">
          ElixirulTineretii
        </a>
        <div class="divider divider-horizontal px-2 hidden md:flex"></div>
        <h1 class="text-xl font-bold hidden md:inline">Profil</h1>
      </div>

    </div>
  </nav>
  <main class="px-6">
    <div class="container bg-base-200 w-3/4 mx-auto mt-12 p-8 rounded-lg shadow-lg">
      <h1 class="text-3xl font-semibold mb-2">Profil</h1>
      <form class="space-y-4 mt-4" action="" method="POST">
        <input type="email" name="email" id="email" placeholder="Email" class="input">
        <input type="text" name="nume" id="nume" placeholder="Nume" class="input">
        <button class="btn btn-primary w-32">Update</button>
      </form>

    </div>
    <div class="container bg-base-200 w-3/4 mx-auto mt-8 p-8 rounded-lg shadow-lg">
      <h1 class="text-3xl font-semibold mb-2">Parola</h1>

      <form class="space-y-4 mt-4" action="" method="POST">
        <input type="password" name="password" id="password" placeholder="New password" class="input">
        <button class="btn btn-primary w-32">Update</button>
      </form>
    </div>
  </main>
  <script type="module" src="/main.js"></script>
</body>

</html>