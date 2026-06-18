<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($adminActivePage)) {
    $adminActivePage = 'dashboard';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo isset($adminPageTitle) ? $adminPageTitle : 'K-Biz Admin'; ?></title>
  <link rel="icon" type="image/svg+xml" href="../public/favicon.svg" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet" />
  
  <!-- Tailwind CSS CDN -->
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
  <!-- Lucide Icons CDN -->
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="min-h-screen bg-[#F8F9FA] font-sans flex flex-col text-[#0C0C0C]">

  <!-- Admin Header -->
  <header class="sticky top-0 z-[100] h-20 w-full bg-white border-b border-gray-100 flex items-center justify-between px-6 md:px-10 shadow-xs">
    <!-- Left Side: Logo & Admin label -->
    <div class="flex items-center">
      <a href="dashboard" class="flex items-center shrink-0">
        <img
          src="../public/images/logo.png"
          alt="K-Biz Consulting"
          class="h-10 w-auto object-contain"
        />
      </a>
      <div class="w-[1px] h-6 bg-gray-200 mx-4"></div>
      <span class="text-[11px] font-extrabold uppercase tracking-widest text-[#005E2C]">
        ADMIN
      </span>
    </div>

    <!-- Center: Tabs -->
    <nav class="flex items-center gap-1 md:gap-2">
      <a
        href="dashboard"
        class="px-5 py-2 text-sm font-semibold rounded-lg transition-all <?php echo ($adminActivePage === 'dashboard') ? 'bg-[#E8F0FE] text-[#1A73E8]' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50'; ?>"
      >
        Dashboard
      </a>
      <a
        href="posts"
        class="px-5 py-2 text-sm font-semibold rounded-lg transition-all <?php echo ($adminActivePage === 'posts' || $adminActivePage === 'editor') ? 'bg-[#E8F0FE] text-[#1A73E8]' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50'; ?>"
      >
        Posts
      </a>
      <a
        href="messages"
        class="px-5 py-2 text-sm font-semibold rounded-lg transition-all <?php echo ($adminActivePage === 'messages') ? 'bg-[#E8F0FE] text-[#1A73E8]' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50'; ?>"
      >
        Messages
      </a>
      <a
        href="settings"
        class="px-5 py-2 text-sm font-semibold rounded-lg transition-all <?php echo ($adminActivePage === 'settings') ? 'bg-[#E8F0FE] text-[#1A73E8]' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50'; ?>"
      >
        Settings
      </a>
    </nav>

    <!-- Right Side: Actions -->
    <div class="flex items-center gap-6">
      <!-- Language Switcher Capsule -->
      <div class="flex items-center gap-1.5 bg-gray-50 border border-gray-100 rounded-full px-2.5 py-1">
        <button
          id="lang-en-btn"
          class="text-[10px] font-bold px-2 py-0.5 rounded-full transition-all cursor-pointer bg-black text-white"
        >
          LN
        </button>
        <button
          id="lang-vi-btn"
          class="text-[10px] font-bold px-2 py-0.5 rounded-full transition-all cursor-pointer text-gray-400 hover:text-gray-600"
        >
          VI
        </button>
      </div>

      <!-- Back to Site -->
      <a
        href="../"
        class="text-xs font-bold text-black hover:text-gray-600 transition-colors flex items-center gap-1"
      >
        &larr; Back to site
      </a>

      <!-- admin.signOut -->
      <a
        href="../logout"
        class="bg-[#3D0055] hover:bg-[#5C2D82] text-white text-xs font-semibold px-5 py-2 rounded-sm transition-all shadow-xs cursor-pointer font-sans tracking-wide"
      >
        admin.signOut
      </a>
    </div>
  </header>

