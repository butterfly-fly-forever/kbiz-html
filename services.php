<?php
$activePage = 'services';
$pageTitle = 'Our Services | K-Biz Consulting';
include 'templates/header.php';
?>


    <!-- Hero -->
    <section id="hero-section" class="relative flex min-h-screen w-full items-end overflow-hidden bg-black">

      <video
        id="hero-video-player"
        src="public/videos/services.mp4"
        autoplay
        muted
        loop
        playsinline
        poster="public/images/services.jpg"
        class="absolute inset-0 h-full w-full object-cover z-10"
      ></video>

      <div id="hero-overlay" class="absolute inset-0 bg-black/35 z-10"></div>

      <div id="hero-text-overlay" class="relative z-20 w-full pb-12 pt-24 px-6 md:px-10 pointer-events-none">
        <div class="mb-3 flex items-center gap-2">
          <svg width="10" height="10" viewBox="0 0 24 24" fill="white" class="opacity-90">
            <path d="M8 5v14l11-7z" />
          </svg>
          <span class="text-xs font-bold uppercase tracking-[0.25em] text-white opacity-90 hero-animate">
            Our Services
          </span>
        </div>
        <h1 class="whitespace-nowrap text-4xl font-bold leading-tight text-[#B9FCD8] md:text-[56px] md:leading-[1.1] hero-animate hero-animate-delay-1">
          Joining forces, transforming business
        </h1>
      </div>
    </section>

    <!-- About + Service Pillars -->
    <section class="w-full">
      <div class="grid grid-cols-1 md:grid-cols-5">
        <!-- Left text panel -->
        <div data-animate class="md:col-span-2 flex items-center bg-gradient-to-r from-[#E7AAFF] to-white px-10 py-16 md:py-20">
          <p class="text-lg font-bold leading-[1.6] text-[#0C0C0C]">
            We are a team of experienced professionals dedicated to providing comprehensive business support services to clients across various industries.
          </p>
        </div>
        <!-- Investment Consulting -->
        <div data-animate class="flex flex-col items-center justify-center text-center bg-gradient-to-br from-[#B9FCD8] to-[#E7AAFF] px-8 py-16 md:py-20">
          <h2 class="mb-4 text-base font-bold text-[#0C0C0C]">Investment Consulting</h2>
          <p class="text-sm leading-[1.6] text-[#0C0C0C]">
            Comprehensive support from feasibility analysis and business planning to licensing and capital mobilization.
          </p>
        </div>
        <!-- New Business Launching -->
        <div data-animate class="flex flex-col items-center justify-center text-center bg-gradient-to-br from-[#E7AAFF] to-[#B9FCD8] px-8 py-16 md:py-20">
          <h2 class="mb-4 text-base font-bold text-[#0C0C0C]">New Business Launching</h2>
          <p class="text-sm leading-[1.6] text-[#0C0C0C]">
            End-to-end support to turn business ideas into successful, market-ready ventures.
          </p>
        </div>
        <!-- Business Supporting -->
        <div data-animate class="flex flex-col items-center justify-center text-center bg-gradient-to-br from-[#B9FCD8] to-[#E7AAFF] px-8 py-16 md:py-20">
          <h2 class="mb-4 text-base font-bold text-[#0C0C0C]">Business Supporting</h2>
          <p class="text-sm leading-[1.6] text-[#0C0C0C]">
            Trusted support for legal, admin, and project needs - built to keep your business moving forward.
          </p>
        </div>
      </div>
    </section>

    <!-- Our Services -->
    <section class="w-full bg-white py-16 md:py-24 px-6 md:px-16 lg:px-28 xl:px-40 2xl:px-52">
      <h2 data-animate class="mb-10 text-3xl font-bold text-[#3D0055] md:text-4xl">Our Services</h2>
      <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">

        <article data-animate data-animate-delay="1" class="flex flex-col">
          <div class="mb-4 aspect-[4/3] w-full overflow-hidden">
            <img src="public/images/svc-consulting-1.jpg" alt="Investment Consulting" class="h-full w-full object-cover" />
          </div>
          <h3 class="mb-3 text-base font-bold leading-snug text-[#3D0055]">Investment Consulting</h3>
          <p class="mb-6 flex-1 text-sm leading-[1.5] text-[#0C0C0C]">
            Got an investment idea? K-Biz helps you turn it into real profit, partnering with you to ensure your project thrives sustainably.
          </p>
          <a
            href="services-consulting-1"
            class="inline-block w-fit bg-[#3D0055] px-6 py-2.5 text-xs font-bold uppercase tracking-wider text-white transition-colors hover:bg-[#5C2D82]"
          >
            Read More
          </a>
        </article>

        <article data-animate data-animate-delay="2" class="flex flex-col">
          <div class="mb-4 aspect-[4/3] w-full overflow-hidden">
            <img src="public/images/svc-consulting-2.jpg" alt="New Business Launching" class="h-full w-full object-cover" />
          </div>
          <h3 class="mb-3 text-base font-bold leading-snug text-[#3D0055]">New Business Launching</h3>
          <p class="mb-6 flex-1 text-sm leading-[1.5] text-[#0C0C0C]">
            Thinking of a fresh start? Let K-Biz streamline all the procedures, giving your business a solid foundation from day one.
          </p>
          <a
            href="services-consulting-2"
            class="inline-block w-fit bg-[#3D0055] px-6 py-2.5 text-xs font-bold uppercase tracking-wider text-white transition-colors hover:bg-[#5C2D82]"
          >
            Read More
          </a>
        </article>

        <article data-animate data-animate-delay="3" class="flex flex-col">
          <div class="mb-4 aspect-[4/3] w-full overflow-hidden">
            <img src="public/images/svc-consulting-3.jpg" alt="Business Development Support" class="h-full w-full object-cover" />
          </div>
          <h3 class="mb-3 text-base font-bold leading-snug text-[#3D0055]">Business Development Support</h3>
          <p class="mb-6 flex-1 text-sm leading-[1.5] text-[#0C0C0C]">
            Want your business to truly break through? K-Biz offers specialized support to optimize operations, sparking innovation and continuous growth.
          </p>
          <a
            href="services-consulting-3"
            class="inline-block w-fit bg-[#3D0055] px-6 py-2.5 text-xs font-bold uppercase tracking-wider text-white transition-colors hover:bg-[#5C2D82]"
          >
            Read More
          </a>
        </article>

      </div>
    </section>

    <!-- CTA -->
    <section class="relative flex h-[350px] w-full items-center overflow-hidden bg-[#B800FF]">
      <div
        class="absolute inset-0 z-0"
        style="
          background-image: url(&quot;data:image/svg+xml,%3Csvg preserveAspectRatio='none' viewBox='0 0 1920 350' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon fill='%23a100ff' opacity='0.4' points='0,0 1920,0 960,300' /%3E%3Cpolygon fill='%23b74bff' opacity='0.6' points='0,0 1920,0 960,260' /%3E%3Cpolygon fill='%23d182ff' opacity='0.8' points='0,0 1920,0 960,220' /%3E%3Cpolygon fill='%23E7AAFF' opacity='1.0' points='0,0 1920,0 960,180' /%3E%3C/svg%3E&quot;);
        "
      ></div>
      <div class="relative z-10 flex w-full flex-col items-center justify-center px-6 text-center md:px-10">
        <h4 data-animate class="mb-8 text-2xl font-semibold text-[#3D0055] md:text-[32px] max-w-[600px] leading-tight font-sans">
          Get an estimate for your upcoming project
        </h4>
        <a
          href="contact"
          data-animate
          data-animate-delay="1"
          class="rounded-none bg-[#B9FCD8] px-8 py-2.5 text-sm font-medium text-[#3D0055] transition-colors hover:bg-white hover:text-[#3D0055]"
        >
          Contact
        </a>
      </div>
    </section>

    <!-- Footer -->
    <?php include 'templates/footer.php'; ?>
