<?php
session_start();
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: admins/dashboard.php');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    // Simple default credentials
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['admin_logged_in'] = true;
        header('Location: admins/dashboard.php');
        exit;
    } else {
        $error = 'Tên đăng nhập hoặc mật khẩu không chính xác!';
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Đăng nhập Admin | K-Biz Consulting</title>
  <link rel="icon" type="image/svg+xml" href="public/favicon.svg" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ["Montserrat", "Inter", "system-ui", "sans-serif"],
          },
        },
      },
    };
  </script>
</head>
<body class="min-h-screen bg-[#DBFDEB] flex items-center justify-center font-sans p-6">
  
  <div class="w-full max-w-md bg-white border border-gray-200/50 shadow-2xl p-10 relative overflow-hidden">
    <!-- Purple Top Accent Line -->
    <div class="absolute top-0 left-0 right-0 h-1.5 bg-[#3D0055]"></div>
    
    <!-- Branding logo -->
    <div class="flex flex-col items-center mb-8">
      <img src="public/images/logo.png" alt="K-Biz Logo" class="h-16 w-auto object-contain mb-3" />
      <span class="text-[10px] font-extrabold uppercase tracking-widest text-[#005E2C]">
        Admin Portal Login
      </span>
    </div>

    <!-- Error message -->
    <?php if (!empty($error)): ?>
      <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 text-red-700 text-xs font-semibold">
        <?php echo htmlspecialchars($error); ?>
      </div>
    <?php endif; ?>

    <!-- Form -->
    <form method="POST" action="login.php" class="space-y-6">
      <label class="flex flex-col gap-2">
        <span class="text-xs font-mono font-bold uppercase tracking-wider text-[#005E2C]">
          Username
        </span>
        <input
          type="text"
          name="username"
          required
          placeholder="admin"
          class="border border-transparent bg-[#B7FCD7]/40 px-4 py-3.5 text-sm text-[#005E2C] placeholder-[#005E2C]/30 outline-none focus:bg-[#B7FCD7]/60 rounded-none transition-all"
        />
      </label>

      <label class="flex flex-col gap-2">
        <span class="text-xs font-mono font-bold uppercase tracking-wider text-[#005E2C]">
          Password
        </span>
        <input
          type="password"
          name="password"
          required
          placeholder="••••••••"
          class="border border-transparent bg-[#B7FCD7]/40 px-4 py-3.5 text-sm text-[#005E2C] placeholder-[#005E2C]/30 outline-none focus:bg-[#B7FCD7]/60 rounded-none transition-all"
        />
      </label>

      <button
        type="submit"
        class="w-full bg-[#3D0055] py-4 text-xs font-bold uppercase tracking-widest text-white transition-all hover:bg-[#5C2D82] cursor-pointer shadow-md"
      >
        Sign In
      </button>
      
      <div class="flex justify-between items-center text-[11px] text-gray-400 mt-6 pt-4 border-t border-gray-100">
        <span>Default username: <strong class="text-gray-600">admin</strong></span>
        <span>Password: <strong class="text-gray-600">admin123</strong></span>
      </div>
    </form>
    
    <div class="text-center mt-6">
      <a href="index.php" class="text-xs text-[#005E2C] hover:underline font-semibold transition-all">
        &larr; Back to Website
      </a>
    </div>
  </div>

</body>
</html>
