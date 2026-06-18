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
</head>
<body class="bg-white antialiased text-[#0C0C0C]">

  <div class="flex w-full flex-col items-center font-sans">
    
    <!-- Header -->
    <header id="site-header" class="sticky top-0 z-[100] w-full border-b border-gray-200/50 bg-[#DBFDEB] transition-all duration-200">
      <div class="flex h-[120px] w-full items-center justify-between px-6 md:px-10">
        <a href="./" class="flex shrink-0 items-center">
          <img
            src="public/images/logo.png"
            alt="K-Biz Consulting"
            class="h-16 w-auto object-contain md:h-24"
          />
        </a>

        <div class="flex h-full shrink-0 items-center gap-10">
          <nav class="hidden h-full items-center gap-10 md:flex" aria-label="Primary">
            <div class="group relative flex h-full items-center">
              <a
                href="services"
                class="flex h-full items-center text-sm font-bold tracking-wide <?php echo ($activePage === 'services' || strpos($activePage, 'services-') === 0) ? 'text-[#B800FF]' : 'text-[#005E2C]'; ?> transition-colors duration-200 hover:text-[#B800FF]"
              >
                Services
              </a>

              <div class="pointer-events-none absolute right-0 top-full z-[200] flex min-w-[280px] flex-col gap-5 bg-[#E7AAFF] p-8 opacity-0 shadow-lg transition-all duration-200 group-hover:pointer-events-auto group-hover:opacity-100">
                <a href="services-consulting-1" class="text-right text-sm font-bold transition-all <?php echo ($activePage === 'services-1') ? 'text-[#005E2C] underline' : 'text-white hover:text-[#005E2C] hover:underline'; ?>">
                  Investment Consulting
                </a>
                <a href="services-consulting-2" class="text-right text-sm font-bold transition-all <?php echo ($activePage === 'services-2') ? 'text-[#005E2C] underline' : 'text-white hover:text-[#005E2C] hover:underline'; ?>">
                  Start New Business
                </a>
                <a href="services-consulting-3" class="text-right text-sm font-bold transition-all <?php echo ($activePage === 'services-3') ? 'text-[#005E2C] underline' : 'text-white hover:text-[#005E2C] hover:underline'; ?>">
                  Business Developing Services
                </a>
              </div>
            </div>

            <a
              href="projects"
              class="flex h-full items-center text-sm font-bold tracking-wide <?php echo ($activePage === 'projects') ? 'text-[#B800FF]' : 'text-[#005E2C]'; ?> transition-colors duration-200 hover:text-[#B800FF]"
            >
              Projects
            </a>
            <a
              href="about-us"
              class="flex h-full items-center text-sm font-bold tracking-wide <?php echo ($activePage === 'about-us') ? 'text-[#B800FF]' : 'text-[#005E2C]'; ?> transition-colors duration-200 hover:text-[#B800FF]"
            >
              About us
            </a>

          </nav>

          <a
            href="contact"
            class="hidden rounded-none px-9 py-3 text-sm font-bold uppercase tracking-widest text-white transition-colors duration-200 md:inline-block bg-[#3D0055] hover:bg-[#5C2D82]"
          >
            Contact
          </a>

          <button
            type="button"
            id="mobile-menu-btn"
            class="p-2 text-[#005E2C] md:hidden cursor-pointer"
            aria-label="Open menu"
            aria-expanded="false"
          >
            <svg id="menu-icon-open" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M4 7h16M4 12h16M4 17h16" />
            </svg>
            <svg id="menu-icon-close" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="hidden">
              <path d="M6 6l12 12M18 6L6 18" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Menu Nav -->
      <nav id="mobile-nav" class="hidden border-t border-gray-200/50 bg-[#DBFDEB] px-6 py-4 md:hidden" aria-label="Mobile">
        <button
          type="button"
          id="mobile-services-btn"
          class="flex w-full items-center justify-between py-3 text-sm font-bold text-[#005E2C]"
          aria-expanded="false"
        >
          <span>Services</span>
          <svg
            id="mobile-services-arrow"
            width="16"
            height="16"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            class="transition-transform"
          >
            <path d="M6 9l6 6 6-6" />
          </svg>
        </button>

        <div id="mobile-services-dropdown" class="hidden mb-2 ml-3 flex flex-col gap-2 border-l-2 border-[#E7AAFF] pl-4">
          <a href="services-consulting-1" class="py-1 text-sm font-bold <?php echo ($activePage === 'services-1') ? 'text-[#B800FF]' : 'text-[#005E2C]'; ?>">
            Investment Consulting
          </a>
          <a href="services-consulting-2" class="py-1 text-sm font-bold <?php echo ($activePage === 'services-2') ? 'text-[#B800FF]' : 'text-[#005E2C]'; ?>">
            Start New Business
          </a>
          <a href="services-consulting-3" class="py-1 text-sm font-bold <?php echo ($activePage === 'services-3') ? 'text-[#B800FF]' : 'text-[#005E2C]'; ?>">
            Business Developing Services
          </a>
        </div>

        <a href="projects" class="block py-3 text-sm font-bold <?php echo ($activePage === 'projects') ? 'text-[#B800FF]' : 'text-[#005E2C]'; ?>">
          Projects
        </a>
        <a href="about-us" class="block py-3 text-sm font-bold <?php echo ($activePage === 'about-us') ? 'text-[#B800FF]' : 'text-[#005E2C]'; ?>">
          About us
        </a>

        <a
          href="contact"
          class="mt-2 inline-block bg-[#3D0055] px-6 py-3 text-sm font-bold uppercase tracking-widest text-white <?php echo ($activePage === 'contact') ? 'outline outline-2 outline-[#B800FF]' : ''; ?>"
        >
          Contact
        </a>
      </nav>
    </header>
