<?php
$activePage = 'services';
$pageTitle = 'Services | K-Biz Consulting';
include 'templates/header.php';
?>


    <!-- Main Content Boxed Container -->
    <div class="flex w-[95%] max-w-[1720px] flex-col mx-auto bg-white shadow-2xl flex-1">

      <!-- Hero -->
      <section id="hero-section" class="relative flex h-[min(72vh,720px)] w-full items-end overflow-hidden bg-black">
        
        <!-- Video Element (Hidden Initially) -->
        <video
          id="hero-video-player"
          src="public/videos/services.mp4"
          playsinline
          class="absolute inset-0 h-full w-full object-cover hidden z-10"
        ></video>

        <!-- Background Image -->
        <img
          id="hero-bg-img"
          src="public/images/services.jpg"
          alt="We build projects that last"
          class="absolute inset-0 h-full w-full object-cover z-0"
        />
        <div id="hero-overlay" class="absolute inset-0 bg-black/35 z-0"></div>
        
        <!-- Play Button Overlay -->
        <div id="hero-play-overlay" class="absolute inset-0 flex items-center justify-center z-20 pointer-events-none">
          <button
            id="play-video-btn"
            class="flex h-12 w-12 items-center justify-center rounded-full bg-black/80 text-white hover:scale-110 active:scale-95 transition-all duration-300 shadow-lg cursor-pointer pointer-events-auto z-20"
            aria-label="Play services video"
          >
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="ml-0.5 text-white">
              <path d="M8 5v14l11-7z" />
            </svg>
          </button>
        </div>

        <!-- Text Overlay -->
        <div id="hero-text-overlay" class="relative z-10 w-full pb-12 pt-24 px-6 md:px-16 lg:px-28 xl:px-40 2xl:px-52 pointer-events-none">
          <!-- Eyebrow -->
          <div class="mb-3 flex items-center gap-2.5">
            <svg width="18" height="12" viewBox="0 0 18 12" fill="white" class="shrink-0 opacity-90">
              <path d="M0 0h12l6 6-6 6H0z" />
            </svg>
            <span class="text-xs font-bold uppercase tracking-[0.25em] text-white opacity-90">
              Our Services
            </span>
          </div>
          <h1 class="max-w-[1200px] text-4xl font-bold leading-tight text-[#E8FFF3] md:text-[56px] md:leading-[1.1] font-sans">
            Joining forces, transforming business
          </h1>
        </div>
      </section>

    <!-- 4-Box Info Grid -->
    <section class="w-full">
      <div class="grid grid-cols-1 md:grid-cols-5 items-stretch">
        
        <!-- Box 1: Horizontal Purple-to-Mint Gradient (40% width on desktop) -->
        <div class="md:col-span-2 bg-gradient-to-r from-[#E7AAFF] to-[#DBFDEB] p-10 md:p-16 flex items-center justify-start min-h-[260px]">
          <p class="text-lg md:text-[20px] font-bold leading-relaxed text-[#0C0C0C] text-left">
            We are a team of experienced professionals dedicated to providing comprehensive business support services to clients across various industries.
          </p>
        </div>

        <!-- Box 2: Mint to Purple Vertical Gradient (20% width on desktop) -->
        <div class="md:col-span-1 bg-gradient-to-b from-[#DBFDEB] to-[#E7AAFF] p-8 md:p-12 flex flex-col items-center justify-center text-center min-h-[260px]">
          <h3 class="text-[16px] md:text-[18px] font-bold text-[#0C0C0C] mb-4 font-sans">
            Investment Consulting
          </h3>
          <p class="text-xs md:text-[13px] text-[#0C0C0C] max-w-[280px] leading-relaxed">
            Comprehensive support from feasibility analysis and business planning to licensing and capital mobilization.
          </p>
        </div>

        <!-- Box 3: Purple to Mint Vertical Gradient (20% width on desktop) -->
        <div class="md:col-span-1 bg-gradient-to-b from-[#E7AAFF] to-[#DBFDEB] p-8 md:p-12 flex flex-col items-center justify-center text-center min-h-[260px]">
          <h3 class="text-[16px] md:text-[18px] font-bold text-[#0C0C0C] mb-4 font-sans">
            New Business Launching
          </h3>
          <p class="text-xs md:text-[13px] text-[#0C0C0C] max-w-[280px] leading-relaxed">
            End-to-end support to turn business ideas into successful, market-ready ventures.
          </p>
        </div>

        <!-- Box 4: Mint to Purple Vertical Gradient (20% width on desktop) -->
        <div class="md:col-span-1 bg-gradient-to-b from-[#DBFDEB] to-[#E7AAFF] p-8 md:p-12 flex flex-col items-center justify-center text-center min-h-[260px]">
          <h3 class="text-[16px] md:text-[18px] font-bold text-[#0C0C0C] mb-4 font-sans">
            Business Supporting
          </h3>
          <p class="text-xs md:text-[13px] text-[#0C0C0C] max-w-[280px] leading-relaxed">
            Trusted support for legal, admin, and project needs - built to keep your business moving forward.
          </p>
        </div>

      </div>
    </section>

    <!-- 3-Card Services Section -->
    <section class="w-full bg-white py-16 md:py-24 px-6 md:px-16 lg:px-28 xl:px-40 2xl:px-52">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-16">
        
        <!-- Card 1 -->
        <div class="flex flex-col items-center text-center">
          <div class="mb-6 w-full aspect-square overflow-hidden shadow-sm bg-gray-50">
            <img
              src="public/images/svc-consulting-1.jpg"
              alt="Investment Consulting"
              class="h-full w-full object-cover transition-transform duration-500 hover:scale-105"
            />
          </div>
          <h2 class="mb-4 text-base md:text-lg font-bold tracking-wider text-[#8A00C2] font-sans">
            INVESTMENT CONSULTING
          </h2>
          <p class="mb-6 text-sm leading-relaxed text-[#0C0C0C] opacity-90 max-w-[320px] min-h-[72px]">
            Got an investment idea? K-Biz helps you turn it into real profit, partnering with you to ensure your project thrives sustainably.
          </p>
          <a
            href="services-consulting-1"
            class="bg-[#8A00C2] hover:bg-[#7300A3] px-8 py-3 text-xs font-bold uppercase tracking-wider text-white transition-colors duration-200 rounded-none"
          >
            Read more
          </a>
        </div>

        <!-- Card 2 -->
        <div class="flex flex-col items-center text-center">
          <div class="mb-6 w-full aspect-square overflow-hidden shadow-sm bg-gray-50">
            <img
              src="public/images/svc-consulting-2.jpg"
              alt="New Business Launching"
              class="h-full w-full object-cover transition-transform duration-500 hover:scale-105"
            />
          </div>
          <h2 class="mb-4 text-base md:text-lg font-bold tracking-wider text-[#8A00C2] font-sans">
            NEW BUSINESS LAUNCHING
          </h2>
          <p class="mb-6 text-sm leading-relaxed text-[#0C0C0C] opacity-90 max-w-[320px] min-h-[72px]">
            Thinking of a fresh start? Let K-Biz streamline all the procedures, giving your business a solid foundation from day one.
          </p>
          <a
            href="services-consulting-2"
            class="bg-[#8A00C2] hover:bg-[#7300A3] px-8 py-3 text-xs font-bold uppercase tracking-wider text-white transition-colors duration-200 rounded-none"
          >
            Read more
          </a>
        </div>

        <!-- Card 3 -->
        <div class="flex flex-col items-center text-center">
          <div class="mb-6 w-full aspect-square overflow-hidden shadow-sm bg-gray-50">
            <img
              src="public/images/svc-consulting-3.jpg"
              alt="Business Development Support"
              class="h-full w-full object-cover transition-transform duration-500 hover:scale-105"
            />
          </div>
          <h2 class="mb-4 text-base md:text-lg font-bold tracking-wider text-[#8A00C2] font-sans">
            BUSINESS DEVELOPMENT SUPPORT
          </h2>
          <p class="mb-6 text-sm leading-relaxed text-[#0C0C0C] opacity-90 max-w-[320px] min-h-[72px]">
            Want your business to truly break through? K-Biz offers specialized support to optimize operations, sparking innovation and continuous growth.
          </p>
          <a
            href="services-consulting-3"
            class="bg-[#8A00C2] hover:bg-[#7300A3] px-8 py-3 text-xs font-bold uppercase tracking-wider text-white transition-colors duration-200 rounded-none"
          >
            Read more
          </a>
        </div>

      </div>
    </section>

  </div> <!-- Close Boxed Container -->

  <!-- CTA -->
    <section class="relative flex h-[350px] w-full items-center overflow-hidden bg-[#B800FF]">
      <div
        class="absolute inset-0 z-0"
        style="
          background-image: url(&quot;data:image/svg+xml,%3Csvg preserveAspectRatio='none' viewBox='0 0 1920 350' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon fill='%23a100ff' opacity='0.4' points='0,0 1920,0 960,300' /%3E%3Cpolygon fill='%23b74bff' opacity='0.6' points='0,0 1920,0 960,260' /%3E%3Cpolygon fill='%23d182ff' opacity='0.8' points='0,0 1920,0 960,220' /%3E%3Cpolygon fill='%23E7AAFF' opacity='1.0' points='0,0 1920,0 960,180' /%3E%3C/svg%3E&quot;);
        "
      ></div>
      <div class="relative z-10 flex w-full flex-col items-center justify-center px-6 text-center md:px-10">
        <h4 class="mb-8 text-2xl font-semibold text-[#3D0055] md:text-[32px] max-w-[600px] leading-tight font-sans">
          Get an estimate for your upcoming project
        </h4>
        <a
          href="contact"
          class="rounded-none bg-[#B9FCD8] px-8 py-2.5 text-sm font-medium text-[#3D0055] transition-colors hover:bg-white hover:text-[#3D0055]"
        >
          Contact
        </a>
      </div>
    </section>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
      // ==========================================
      // 2. HERO VIDEO INLINE PLAY
      // ==========================================
      const playVideoBtn = document.getElementById("play-video-btn");
      const heroVideoPlayer = document.getElementById("hero-video-player");
      const heroBgImg = document.getElementById("hero-bg-img");
      const heroOverlay = document.getElementById("hero-overlay");
      const heroPlayOverlay = document.getElementById("hero-play-overlay");
      const heroTextOverlay = document.getElementById("hero-text-overlay");

      if (playVideoBtn && heroVideoPlayer) {
        playVideoBtn.addEventListener("click", function () {
          // Hide backgrounds and overlays
          if (heroBgImg) heroBgImg.classList.add("hidden");
          if (heroOverlay) heroOverlay.classList.add("hidden");
          if (heroPlayOverlay) heroPlayOverlay.classList.add("hidden");
          if (heroTextOverlay) heroTextOverlay.classList.add("hidden");

          // Show and play video
          heroVideoPlayer.classList.remove("hidden");
          heroVideoPlayer.setAttribute("controls", "true");
          heroVideoPlayer.play();
        });
      }
    });
</script>
<?php include 'templates/footer.php'; ?>

