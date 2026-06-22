<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Load settings from JSON
$settingsFile = __DIR__ . '/../data/settings.json';
$siteSettings = [
    'email' => 'kbizconsulting16@gmail.com',
    'phone' => '(0258) 3516 343'
];
if (file_exists($settingsFile)) {
    $loadedSettings = json_decode(file_get_contents($settingsFile), true);
    if ($loadedSettings) {
        $siteSettings = array_merge($siteSettings, $loadedSettings);
    }
}

// Active page helper
if (!isset($activePage)) {
    $activePage = 'home';
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo isset($pageTitle) ? $pageTitle : 'K-Biz Consulting — Innovative consulting for a smarter growth'; ?></title>
  <link rel="icon" type="image/svg+xml" href="public/favicon.svg" />
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
  
  <!-- Custom Styles -->
  <style>
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(12px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fade-in {
      animation: fadeIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    /* Scroll animation styles to prevent layout shift before shared.js runs */
    [data-animate] {
      opacity: 0;
      transform: translateY(32px);
      transition: opacity 0.75s cubic-bezier(0.16,1,0.3,1), transform 0.75s cubic-bezier(0.16,1,0.3,1);
    }
    [data-animate].in { opacity: 1; transform: none; }
    [data-animate-from="left"]  { transform: translateX(-32px); }
    [data-animate-from="left"].in  { transform: none; }
    [data-animate-from="right"] { transform: translateX(32px); }
    [data-animate-from="right"].in { transform: none; }
    [data-animate-scale] { opacity:0; transform: scale(0.94); transition: opacity 0.6s cubic-bezier(0.16,1,0.3,1), transform 0.6s cubic-bezier(0.16,1,0.3,1); }
    [data-animate-scale].in { opacity:1; transform:none; }
    [data-animate-delay="1"] { transition-delay: 0.08s !important; }
    [data-animate-delay="2"] { transition-delay: 0.16s !important; }
    [data-animate-delay="3"] { transition-delay: 0.24s !important; }
    [data-animate-delay="4"] { transition-delay: 0.32s !important; }
    [data-animate-delay="5"] { transition-delay: 0.40s !important; }

    #site-header { transition: background 0.3s, box-shadow 0.3s, backdrop-filter 0.3s; }
    #site-header.scrolled { background: rgba(219,253,235,0.92); backdrop-filter: blur(12px); box-shadow: 0 1px 16px rgba(0,0,0,0.08); }

    .nav-link { position:relative; }
    .nav-link::after { content:""; position:absolute; left:0; bottom:-4px; width:0; height:2px; background:#B800FF; transition: width 0.3s cubic-bezier(0.16,1,0.3,1); }
    .nav-link:hover::after, .nav-link.active::after { width:100%; }

    @keyframes heroFadeIn {
      from { opacity:0; transform: translateY(20px); }
      to   { opacity:1; transform: none; }
    }
    .hero-animate { animation: heroFadeIn 1s cubic-bezier(0.16,1,0.3,1) forwards; }
    .hero-animate-delay-1 { animation-delay: 0.15s; opacity:0; }
    .hero-animate-delay-2 { animation-delay: 0.3s;  opacity:0; }
    .hero-animate-delay-3 { animation-delay: 0.45s; opacity:0; }

    /* Wix-style Shape Divider Styles */
    .ejT4cR {
      position: absolute;
      left: 0;
      width: 100%;
      overflow: hidden;
      pointer-events: none;
      z-index: 10;
    }

    .urGGgL {
      top: 0;
      height: var(--divider-height-container, 120px);
    }

    .yIAE9q {
      bottom: 0;
      height: var(--divider-height-container, 120px);
    }

    .ejT4cR .MjZwZE {
      --divider-layer-i__: var(--divider-layer-i, 0);
      width: 100%;
      height: calc(var(--divider-height__) + var(--divider-pin-layer-height__) * var(--divider-layer-i__) * var(--divider-layers-y__));
      opacity: calc(1 - var(--divider-layer-i__) / (var(--divider-layer-i__) + 1));
      background-repeat: repeat-x;
      background-position: left calc(50% + var(--divider-offset-x__) + var(--divider-layers-x__) * var(--divider-layer-i__)) bottom;
      border-bottom-width: calc(var(--divider-pin-border__) * var(--divider-layer-i__) * var(--divider-layers-y__));
      border-bottom-style: solid;
      position: absolute;
      left: 0;
    }

    .urGGgL .MjZwZE {
      border-color: var(--divider-top-color, currentColor);
      background-image: var(--divider-top-image, none);
      background-size: var(--divider-top-size, contain);
      filter: var(--divider-top-filter, none);
      top: 0;
    }

    .yIAE9q .MjZwZE {
      border-color: var(--divider-bottom-color, currentColor);
      background-image: var(--divider-bottom-image, none);
      background-size: var(--divider-bottom-size, contain);
      filter: var(--divider-bottom-filter, none);
      top: 0;
    }
  </style>
  <script src="public/js/shared.js" defer></script>
</head>
<body class="bg-white antialiased text-[#0C0C0C]">

  <div class="flex w-full flex-col items-center font-sans">
    
    <!-- Header -->
    <header id="site-header" class="sticky top-0 z-[100] w-full border-b border-white/30 bg-[#DBFDEB]">
      <div class="flex h-[88px] w-full items-center justify-between px-6 md:px-10 lg:px-14">
        <a href="./" class="flex shrink-0 items-center">
          <img src="public/images/logo.png" alt="K-Biz Consulting" class="h-14 w-auto object-contain md:h-20" />
        </a>
        <div class="flex h-full shrink-0 items-center gap-8 md:gap-10">
          <nav class="hidden h-full items-center gap-8 md:flex" aria-label="Primary">
            <div class="group relative flex h-full items-center">
              <a href="services" data-nav="services" class="nav-link flex h-full items-center text-sm font-bold tracking-wide <?php echo ($activePage === 'services' || strpos($activePage, 'services-') === 0) ? 'text-[#B800FF] active' : 'text-[#005E2C]'; ?> transition-colors duration-200 hover:text-[#B800FF]">Services</a>
              <div class="pointer-events-none absolute right-0 top-full z-[200] flex min-w-[260px] flex-col gap-4 bg-[#3D0055] px-8 py-7 opacity-0 shadow-xl transition-all duration-200 group-hover:pointer-events-auto group-hover:opacity-100">
                <a href="services-consulting-1" class="text-left text-sm font-bold <?php echo ($activePage === 'services-1') ? 'text-white underline' : 'text-[#E7AAFF] hover:text-white hover:underline'; ?> transition-all whitespace-nowrap">Investment Consulting</a>
                <a href="services-consulting-2" class="text-left text-sm font-bold <?php echo ($activePage === 'services-2') ? 'text-white underline' : 'text-[#E7AAFF] hover:text-white hover:underline'; ?> transition-all whitespace-nowrap">Start New Business</a>
                <a href="services-consulting-3" class="text-left text-sm font-bold <?php echo ($activePage === 'services-3') ? 'text-white underline' : 'text-[#E7AAFF] hover:text-white hover:underline'; ?> transition-all whitespace-nowrap">Business Developing Services</a>
              </div>
            </div>
            <a href="projects" data-nav="projects" class="nav-link flex h-full items-center text-sm font-bold tracking-wide <?php echo ($activePage === 'projects' || strpos($activePage, 'case-') === 0) ? 'text-[#B800FF] active' : 'text-[#005E2C]'; ?> transition-colors duration-200 hover:text-[#B800FF]">Projects</a>
            <a href="about-us" data-nav="about" class="nav-link flex h-full items-center text-sm font-bold tracking-wide <?php echo ($activePage === 'about-us' || $activePage === 'about') ? 'text-[#B800FF] active' : 'text-[#005E2C]'; ?> transition-colors duration-200 hover:text-[#B800FF]">About us</a>
          </nav>
          <a href="contact" class="hidden md:inline-block rounded-none px-8 py-3 text-sm font-bold uppercase tracking-widest text-white bg-[#3D0055] hover:bg-[#5C2D82] transition-colors duration-200">Contact</a>
          <button type="button" id="mobile-menu-btn" class="p-2 text-[#005E2C] md:hidden cursor-pointer" aria-label="Open menu" aria-expanded="false">
            <svg id="menu-icon-open" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
            <svg id="menu-icon-close" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="hidden"><path d="M6 6l12 12M18 6L6 18"/></svg>
          </button>
        </div>
      </div>
      <nav id="mobile-nav" class="hidden border-t border-white/30 bg-[#DBFDEB] px-6 py-4 md:hidden" aria-label="Mobile">
        <button type="button" id="mobile-services-btn" class="flex w-full items-center justify-between py-3 text-sm font-bold text-[#005E2C]" aria-expanded="false">
          <span>Services</span>
          <svg id="mobile-services-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="transition-transform"><path d="M6 9l6 6 6-6"/></svg>
        </button>
        <div id="mobile-services-dropdown" class="hidden mb-2 ml-3 flex flex-col gap-2 border-l-2 border-[#E7AAFF] pl-4">
          <a href="services-consulting-1" class="py-1 text-sm font-bold <?php echo ($activePage === 'services-1') ? 'text-[#B800FF]' : 'text-[#005E2C]'; ?>">Investment Consulting</a>
          <a href="services-consulting-2" class="py-1 text-sm font-bold <?php echo ($activePage === 'services-2') ? 'text-[#B800FF]' : 'text-[#005E2C]'; ?>">Start New Business</a>
          <a href="services-consulting-3" class="py-1 text-sm font-bold <?php echo ($activePage === 'services-3') ? 'text-[#B800FF]' : 'text-[#005E2C]'; ?>">Business Developing Services</a>
        </div>
        <a href="projects" class="block py-3 text-sm font-bold <?php echo ($activePage === 'projects') ? 'text-[#B800FF]' : 'text-[#005E2C]'; ?>">Projects</a>
        <a href="about-us" class="block py-3 text-sm font-bold <?php echo ($activePage === 'about-us' || $activePage === 'about') ? 'text-[#B800FF]' : 'text-[#005E2C]'; ?>">About us</a>
        <a href="contact" class="mt-2 inline-block bg-[#3D0055] px-6 py-3 text-sm font-bold uppercase tracking-widest text-white">Contact</a>
      </nav>
    </header>
