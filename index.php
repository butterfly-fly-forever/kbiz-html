<?php
$activePage = 'home';
$pageTitle = 'K-Biz Consulting — Innovative consulting for a smarter growth';
include 'templates/header.php';
?>


    <!-- Hero -->
    <section class="relative flex h-[720px] w-full flex-col overflow-hidden">
      <div class="absolute inset-0 z-10 bg-gradient-to-r from-[rgba(61,0,85,0.95)] via-[rgba(184,0,255,0.75)_35%] via-[rgba(184,0,255,0.3)_55%] to-transparent"></div>
      <div class="absolute inset-0 z-0">
        <img
          src="public/images/hero-nhatrang.jpg"
          alt="Nha Trang city skyline"
          class="h-full w-full object-cover object-[50%_44%]"
        />
      </div>

      <div class="relative z-20 flex h-full w-full flex-col justify-center px-6 md:px-10">
        <h1 class="max-w-[561px] text-4xl font-normal leading-tight tracking-[-2.25px] text-white md:text-[56px] md:leading-[62px]">
          INNOVATIVE CONSULTING FOR A SMARTER GROWTH
        </h1>
        <p class="mt-4 max-w-[540px] text-base leading-6 text-white">
          As experts from Khánh Hòa, we’re here to be your consulting partner on the business journey
        </p>
        <div class="mt-8">
          <!-- ArrowLink Component mockup -->
          <a href="projects" class="group flex items-center gap-4">
            <div class="flex h-11 w-11 items-center justify-center transition-colors duration-300 bg-[#B7FCD7] text-[#0C0C0C] group-hover:bg-white">
              <svg width="20" height="20" viewBox="20 41.091 160 117.822" fill="currentColor">
                <path d="M28 92h-8v16h8V92zm149.657 13.657a8 8 0 0 0 0-11.314l-50.912-50.912a8 8 0 0 0-11.314 11.314L160.687 100l-45.255 45.255a8 8 0 0 0 11.314 11.314l50.911-50.912zM28 108h144V92H28v16z" />
              </svg>
            </div>
            <span class="text-xs font-bold uppercase tracking-widest text-white group-hover:opacity-80">
              View Projects
            </span>
          </a>
        </div>
      </div>
    </section>

    <!-- Services -->
    <section id="services" class="relative w-full bg-[#E8FFF3] py-20">
      
      <!-- ShapeDivider services-top -->
      <div class="pointer-events-none absolute left-0 z-10 w-full overflow-hidden top-0" style="height: 142px; opacity: 0.84;">
        <div class="absolute left-0 w-full" style="height: 142px; opacity: 0.25; background-image: url('data:image/svg+xml,%3Csvg preserveAspectRatio=\'none\' viewBox=\'0 100 1920 200\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath fill=\'%23B800FF\' d=\'M1920 300 0 100v200h1920z\'/%3E%3C/svg%3E\'); background-size: 100% 100%; transform: scale(-1, -1); top: 0;"></div>
        <div class="absolute left-0 w-full" style="height: 114px; opacity: 0.33; background-image: url('data:image/svg+xml,%3Csvg preserveAspectRatio=\'none\' viewBox=\'0 100 1920 200\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath fill=\'%23B800FF\' d=\'M1920 300 0 100v200h1920z\'/%3E%3C/svg%3E\'); background-size: 100% 100%; transform: scale(-1, -1); top: 0;"></div>
        <div class="absolute left-0 w-full" style="height: 86px; opacity: 0.5; background-image: url('data:image/svg+xml,%3Csvg preserveAspectRatio=\'none\' viewBox=\'0 100 1920 200\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath fill=\'%23B800FF\' d=\'M1920 300 0 100v200h1920z\'/%3E%3C/svg%3E\'); background-size: 100% 100%; transform: scale(-1, -1); top: 0;"></div>
        <div class="absolute left-0 w-full" style="height: 58px; opacity: 1; background-image: url('data:image/svg+xml,%3Csvg preserveAspectRatio=\'none\' viewBox=\'0 100 1920 200\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath fill=\'%23B800FF\' d=\'M1920 300 0 100v200h1920z\'/%3E%3C/svg%3E\'); background-size: 100% 100%; transform: scale(-1, -1); top: 0; z-index: 1;"></div>
      </div>

      <div class="relative z-20 w-full px-6 md:px-10 mt-16">
        
        <!-- Eyebrow component -->
        <div class="mb-2 flex items-center gap-2">
          <svg width="16" height="16" viewBox="2.665 2.667 10.667 10.666" fill="#005E2C">
            <path d="M7.999 2.667 13.332 8l-5.333 5.333H2.665V2.667z" />
          </svg>
          <h2 class="text-sm font-bold uppercase tracking-[0.2em] text-[#005E2C]">Services</h2>
        </div>

        <h3 class="mb-12 text-3xl leading-tight text-[#3D0055] md:text-4xl">
          Diverse solutions tailored to your business
        </h3>

        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
          
          <!-- Card 1 -->
          <div class="flex flex-col items-center text-center">
            <div class="mb-6 aspect-[4/3] w-full overflow-hidden">
              <img
                src="public/images/svc-consulting-3.jpg"
                alt="BUSINESS DEVELOPMENT SUPPORT"
                class="h-full w-full object-cover"
              />
            </div>
            <h4 class="mb-3 flex min-h-12 items-center px-2 text-base font-bold uppercase tracking-wider text-[#3D0055]">
              BUSINESS DEVELOPMENT SUPPORT
            </h4>
            <p class="mb-8 min-h-[88px] px-4 text-sm leading-[22px] text-gray-600">
              Want your business to truly break through? K-Biz offers specialized support to optimize operations, sparking innovation and continuous growth
            </p>
            <a
              href="services-consulting-3"
              class="mt-auto rounded-sm bg-[#5C2D82] px-8 py-3 text-sm font-bold text-white transition-colors hover:bg-[#4A2368]"
            >
              Read More
            </a>
          </div>

          <!-- Card 2 -->
          <div class="flex flex-col items-center text-center">
            <div class="mb-6 aspect-[4/3] w-full overflow-hidden">
              <img
                src="public/images/svc-consulting-1.jpg"
                alt="INVESTMENT CONSULTING"
                class="h-full w-full object-cover"
              />
            </div>
            <h4 class="mb-3 flex min-h-12 items-center px-2 text-base font-bold uppercase tracking-wider text-[#3D0055]">
              INVESTMENT CONSULTING
            </h4>
            <p class="mb-8 min-h-[88px] px-4 text-sm leading-[22px] text-gray-600">
              Got an investment idea? K-Biz helps you turn it into real profit, partnering with you to ensure your project thrives sustainably.
            </p>
            <a
              href="services-consulting-1"
              class="mt-auto rounded-sm bg-[#5C2D82] px-8 py-3 text-sm font-bold text-white transition-colors hover:bg-[#4A2368]"
            >
              Read More
            </a>
          </div>

          <!-- Card 3 -->
          <div class="flex flex-col items-center text-center">
            <div class="mb-6 aspect-[4/3] w-full overflow-hidden">
              <img
                src="public/images/svc-consulting-2.jpg"
                alt="NEW BUSINESS LAUNCHING"
                class="h-full w-full object-cover"
              />
            </div>
            <h4 class="mb-3 flex min-h-12 items-center px-2 text-base font-bold uppercase tracking-wider text-[#3D0055]">
              NEW BUSINESS LAUNCHING
            </h4>
            <p class="mb-8 min-h-[88px] px-4 text-sm leading-[22px] text-gray-600">
              Thinking of a fresh start? Let K-Biz streamline all the procedures, giving your business a solid foundation from day one.
            </p>
            <a
              href="services-consulting-2"
              class="mt-auto rounded-sm bg-[#5C2D82] px-8 py-3 text-sm font-bold text-white transition-colors hover:bg-[#4A2368]"
            >
              Read More
            </a>
          </div>

        </div>
      </div>
    </section>

    <!-- Stripe band — top of About banner -->
    <div class="relative h-[112px] w-full bg-[#E8FFF3]">
      <!-- ShapeDivider banner-top-external -->
      <div class="pointer-events-none absolute left-0 z-10 w-full overflow-hidden bottom-0" style="height: 112px;">
        <div class="absolute left-0 w-full" style="height: 112px; opacity: 0.25; background-image: url('data:image/svg+xml,%3Csvg preserveAspectRatio=\'none\' viewBox=\'0 100 1920 200\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath fill=\'%23B800FF\' d=\'M1920 300 0 100v200h1920z\'/%3E%3C/svg%3E\'); background-size: 100% 100%; bottom: 0;"></div>
        <div class="absolute left-0 w-full" style="height: 84px; opacity: 0.33; background-image: url('data:image/svg+xml,%3Csvg preserveAspectRatio=\'none\' viewBox=\'0 100 1920 200\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath fill=\'%23B800FF\' d=\'M1920 300 0 100v200h1920z\'/%3E%3C/svg%3E\'); background-size: 100% 100%; bottom: 0;"></div>
        <div class="absolute left-0 w-full" style="height: 56px; opacity: 0.5; background-image: url('data:image/svg+xml,%3Csvg preserveAspectRatio=\'none\' viewBox=\'0 100 1920 200\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath fill=\'%23B800FF\' d=\'M1920 300 0 100v200h1920z\'/%3E%3C/svg%3E\'); background-size: 100% 100%; bottom: 0;"></div>
        <div class="absolute left-0 w-full" style="height: 28px; opacity: 1; background-image: url('data:image/svg+xml,%3Csvg preserveAspectRatio=\'none\' viewBox=\'0 100 1920 200\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath fill=\'%23B800FF\' d=\'M1920 300 0 100v200h1920z\'/%3E%3C/svg%3E\'); background-size: 100% 100%; bottom: 0; z-index: 1;"></div>
      </div>
    </div>

    <!-- Work with Passion -->
    <section id="about" class="relative flex h-[650px] w-full flex-col">
      <div class="absolute inset-0 z-0">
        <img
          src="public/images/team-group.jpg"
          alt="K-Biz team"
          class="h-full w-full object-cover"
        />
      </div>
      <div class="absolute inset-0 z-10 bg-gradient-to-r from-[rgba(61,0,85,0.96)] via-[rgba(184,0,255,0.6)_45%] to-[rgba(184,0,255,0.25)]"></div>

      <div class="relative z-20 flex h-full w-full flex-col justify-center px-6 md:px-10">
        
        <!-- Eyebrow mint component -->
        <div class="mb-2 flex items-center gap-2">
          <svg width="16" height="16" viewBox="2.665 2.667 10.667 10.666" fill="#B7FCD7">
            <path d="M7.999 2.667 13.332 8l-5.333 5.333H2.665V2.667z" />
          </svg>
          <h2 class="text-sm font-bold uppercase tracking-[0.2em] text-[#B7FCD7]">About K-Biz Consulting</h2>
        </div>

        <h2 class="mb-4 text-4xl font-bold leading-none text-white md:text-5xl">
          WORK WITH PASSION
        </h2>
        <p class="mb-8 max-w-[600px] text-base leading-[26px] text-white">
          With decades of extensive industry experience supporting organisations through critical
          challenges, our teams of professionals provide concrete, actionable advice to design and
          guide strategy.
        </p>
        
        <!-- ArrowLink dark component mockup -->
        <a href="about-us" class="group flex items-center gap-4">
          <div class="flex h-11 w-11 items-center justify-center transition-colors duration-300 bg-[#B7FCD7] text-[#0C0C0C] group-hover:bg-white">
            <svg width="20" height="20" viewBox="20 41.091 160 117.822" fill="currentColor">
              <path d="M28 92h-8v16h8V92zm149.657 13.657a8 8 0 0 0 0-11.314l-50.912-50.912a8 8 0 0 0-11.314 11.314L160.687 100l-45.255 45.255a8 8 0 0 0 11.314 11.314l50.911-50.912zM28 108h144V92H28v16z" />
            </svg>
          </div>
          <span class="text-xs font-bold uppercase tracking-widest text-white group-hover:opacity-80">
            About Us
          </span>
        </a>
      </div>
    </section>

    <!-- Stripe band — bottom of About banner -->
    <div class="relative h-[112px] w-full bg-[#D0FCE5]">
      <!-- ShapeDivider banner-bottom-external -->
      <div class="pointer-events-none absolute left-0 z-10 w-full overflow-hidden top-0" style="height: 112px;">
        <div class="absolute left-0 w-full" style="height: 112px; opacity: 0.25; background-image: url('data:image/svg+xml,%3Csvg preserveAspectRatio=\'none\' viewBox=\'0 100 1920 200\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath fill=\'%23B800FF\' d=\'M1920 300 0 100v200h1920z\'/%3E%3C/svg%3E\'); background-size: 100% 100%; transform: scale(-1, -1); top: 0;"></div>
        <div class="absolute left-0 w-full" style="height: 84px; opacity: 0.33; background-image: url('data:image/svg+xml,%3Csvg preserveAspectRatio=\'none\' viewBox=\'0 100 1920 200\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath fill=\'%23B800FF\' d=\'M1920 300 0 100v200h1920z\'/%3E%3C/svg%3E\'); background-size: 100% 100%; transform: scale(-1, -1); top: 0;"></div>
        <div class="absolute left-0 w-full" style="height: 56px; opacity: 0.5; background-image: url('data:image/svg+xml,%3Csvg preserveAspectRatio=\'none\' viewBox=\'0 100 1920 200\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath fill=\'%23B800FF\' d=\'M1920 300 0 100v200h1920z\'/%3E%3C/svg%3E\'); background-size: 100% 100%; transform: scale(-1, -1); top: 0;"></div>
        <div class="absolute left-0 w-full" style="height: 28px; opacity: 1; background-image: url('data:image/svg+xml,%3Csvg preserveAspectRatio=\'none\' viewBox=\'0 100 1920 200\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath fill=\'%23B800FF\' d=\'M1920 300 0 100v200h1920z\'/%3E%3C/svg%3E\'); background-size: 100% 100%; transform: scale(-1, -1); top: 0; z-index: 1;"></div>
      </div>
    </div>

    <!-- Case Studies & Projects -->
    <section id="projects" class="relative w-full bg-[#D0FCE5] pb-20 md:pb-28">
      <div class="w-full px-10">
        
        <!-- Slider 1: Case Studies -->
        <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-12 mb-20 md:mb-28 pt-8 md:pt-12">
          <!-- Left Column: Text & Controls -->
          <div class="flex flex-col justify-between min-h-[420px] lg:col-span-5 pr-0 lg:pr-8">
            <div id="case-studies-text-container" class="animate-fade-in">
              <!-- Rendered dynamically via JavaScript -->
            </div>

            <!-- Slider Controls -->
            <div class="mt-12 flex self-start bg-white shadow-sm">
              <button
                type="button"
                id="prev-case-study-btn"
                class="border-r border-gray-100 px-6 py-4 text-black transition-colors hover:bg-gray-50 cursor-pointer"
                aria-label="Previous slide"
              >
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <path d="M19 12H5M12 19l-7-7 7-7" />
                </svg>
              </button>
              <button
                type="button"
                id="next-case-study-btn"
                class="px-6 py-4 text-black transition-colors hover:bg-gray-50 cursor-pointer"
                aria-label="Next slide"
              >
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
              </button>
            </div>
          </div>

          <!-- Right Column: Image -->
          <div class="h-[380px] overflow-hidden shadow-lg lg:col-span-7 md:h-[480px]" id="case-studies-image-container">
            <!-- Rendered dynamically via JavaScript -->
          </div>
        </div>

        <!-- Slider 2: Project Banner Slider -->
        <div class="relative h-[400px] md:h-[650px] w-full overflow-hidden shadow-lg group" id="project-banner-slider">
          <!-- Slide Image -->
          <img
            id="project-slide-img"
            src="public/images/project-vanphong.jpg"
            alt="VAN PHONG 1 BOT THERMAL POWER PLANT"
            class="h-full w-full object-cover transition-all duration-500 ease-in-out"
          />
          
          <!-- Purple Translucent Overlay -->
          <div class="absolute inset-0 bg-[rgba(184,0,255,0.65)] z-0"></div>
          
          <!-- Left Navigation Arrow -->
          <button
            type="button"
            id="prev-proj-btn"
            class="absolute left-6 top-1/2 -translate-y-1/2 z-20 text-white opacity-75 hover:opacity-100 transition-opacity p-2 cursor-pointer"
            aria-label="Previous slide"
          >
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M15 18l-6-6 6-6" />
            </svg>
          </button>
          
          <!-- Right Navigation Arrow -->
          <button
            type="button"
            id="next-proj-btn"
            class="absolute right-6 top-1/2 -translate-y-1/2 z-20 text-white opacity-75 hover:opacity-100 transition-opacity p-2 cursor-pointer"
            aria-label="Next slide"
          >
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M9 18l6-6-6-6" />
            </svg>
          </button>
          
          <!-- Center Bottom Text Info -->
          <div id="project-slide-text" class="absolute inset-x-0 bottom-0 z-10 py-10 text-center px-6">
            <h4 id="project-slide-title" class="mb-2 text-4xl font-bold tracking-[0.05em] text-white md:text-[28px] uppercase">
              VAN PHONG 1 BOT THERMAL POWER PLANT
            </h4>
            <p id="project-slide-subtitle" class="text-sm font-semibold tracking-wider text-[#B7FCD7] md:text-base">
              Investment Consulting - 2021
            </p>
          </div>
        </div>

      </div>
    </section>

    <!-- Testimonials -->
    <section class="relative w-full bg-gradient-to-b from-[#D0FCE5] to-[#E9D6FF] py-20 md:py-24 overflow-hidden">
      <div class="relative mx-auto w-full max-w-[1440px] px-10">
        
        <!-- Header & Controls Container -->
        <div class="flex items-center justify-between mb-8 relative z-20">
          <div class="flex-1 text-center">
            <span class="text-xs font-bold uppercase tracking-[0.25em] text-[#9B7C56]">
              WHAT CLIENTS SAY
            </span>
          </div>
          <!-- Slider Controls -->
          <div class="absolute right-0 top-0 flex items-center bg-transparent gap-3 md:gap-4">
            <button
              type="button"
              id="prev-testimonial-btn"
              class="text-black hover:opacity-70 transition-opacity cursor-pointer p-1"
              aria-label="Previous testimonial"
            >
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M19 12H5M12 19l-7-7 7-7" />
              </svg>
            </button>
            <button
              type="button"
              id="next-testimonial-btn"
              class="text-black hover:opacity-70 transition-opacity cursor-pointer p-1"
              aria-label="Next testimonial"
            >
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </button>
          </div>
        </div>

        <!-- Testimonial Quote & Info -->
        <div id="testimonial-container" class="mx-auto max-w-[1000px] text-center px-4 relative z-10">
          <h3 id="testimonial-quote" class="mb-8 text-2xl font-bold leading-snug tracking-[-1px] text-[#3D0055] md:text-[36px] md:leading-[52px]">
            "I could not have performed any of these tasks with a successful outcome, without the professional work performed by K-Biz’s team."
          </h3>
          <p id="testimonial-name" class="text-base font-bold text-[#3D0055] md:text-lg">
            Mr. Paul Anthony Hinkley
          </p>
          <p id="testimonial-info" class="mt-1 text-sm font-medium text-[#3D0055] opacity-80 md:text-base">
            (Properties Management, 2014 - 2015)
          </p>
        </div>

      </div>
    </section>

    <!-- Top Stripe Band for Expert Section -->
    <div class="relative h-[120px] w-full bg-[#D0FCE5] overflow-hidden">
      <!-- Wix style divider HTML equivalent to code lines 467-488 -->
      <div
        class="ejT4cR urGGgL"
        data-testid="top-divider"
        style="
          --divider-height__: 50px;
          --divider-pin-layer-height__: 20px;
          --divider-layers-y__: 1;
          --divider-layers-x__: 0px;
          --divider-offset-x__: 0px;
          --divider-pin-border__: 0px;
          --divider-top-color: #E9D6FF;
          --divider-top-image: url(&quot;data:image/svg+xml,%3Csvg preserveAspectRatio='none' viewBox='0 0 1920 120' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon fill='%23E9D6FF' points='0,0 1920,0 960,120' /%3E%3C/svg%3E&quot;);
          --divider-top-size: 100% 100%;
          --divider-height-container: 120px;
        "
      >
        <div style="--divider-layer-i: 3" class="MjZwZE" data-testid="divider-layer-3" data-divider-layer="3"></div>
        <div style="--divider-layer-i: 2" class="MjZwZE" data-testid="divider-layer-2" data-divider-layer="2"></div>
        <div style="--divider-layer-i: 1" class="MjZwZE" data-testid="divider-layer-1" data-divider-layer="1"></div>
        <div style="--divider-layer-i: 0" class="MjZwZE" data-testid="divider-layer-0" data-divider-layer="0"></div>
      </div>
    </div>

    <!-- Meet Our Expert -->
    <section class="relative w-full bg-[#D0FCE5] py-16">
      <div class="w-full px-10">
        <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-12 w-full">
          
          <!-- Left Column: giant text and overlay description -->
          <div class="relative flex items-center justify-center min-h-[420px] lg:col-span-7 w-full">
            <!-- Behind: giant text -->
            <div class="absolute inset-0 flex flex-col justify-center items-center pointer-events-none select-none z-0">
              <span class="text-[72px] md:text-[100px] lg:text-[115px] font-black leading-[0.95] text-[#B800FF] tracking-tight text-center">
                MEET<br />OUR<br />EXPERT
              </span>
            </div>
            
            <!-- In front: left-aligned description and eyebrow -->
            <div class="absolute left-0 top-1/2 -translate-y-1/2 z-10 w-full max-w-[360px] pointer-events-none pr-4">
              <div class="mb-4 flex items-center gap-2">
                <svg width="8" height="8" viewBox="0 0 24 24" fill="#005E2C">
                  <path d="M8 5v14l11-7z" />
                </svg>
                <span class="text-xs font-extrabold uppercase tracking-[0.25em] text-[#005E2C]">
                  K-BIZ MEMBERS
                </span>
              </div>
              <p class="text-sm md:text-base font-semibold leading-relaxed text-[#005E2C]">
                We've successfully supported numerous projects, contributed to local reforms, and built a strong reputation for trust and expertise.
              </p>
            </div>
          </div>

          <!-- Right Column: Expert slider card -->
          <div class="lg:col-span-5 flex justify-center w-full">
            <div class="relative w-[340px] h-[340px] md:w-[420px] md:h-[420px] bg-[#B7FCD7] overflow-hidden rounded-sm shadow-md flex items-center justify-center">
              
              <!-- Logo top left -->
              <div class="absolute top-5 left-5 z-20 opacity-70">
                <img src="public/images/logo.png" alt="K-Biz Logo" class="h-9 object-contain" />
              </div>
              
              <!-- Translucent purple chevron background -->
              <div class="absolute inset-y-0 left-0 w-1/3 z-0 flex items-center justify-start opacity-[0.22] pl-3">
                <svg width="100" height="200" viewBox="0 0 100 200" fill="none" stroke="#B800FF" stroke-width="24" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20 20l60 80-60 80" />
                </svg>
              </div>
              
              <!-- Expert portrait image -->
              <img
                id="expert-img"
                src="public/images/team-huynh-thi-hang.png"
                alt="Huỳnh Thị Hằng"
                class="absolute inset-0 h-full w-full object-cover z-10"
              />
              
              <!-- Slide controls overlay bottom right -->
              <div class="absolute bottom-5 right-5 z-20 flex gap-2">
                <button
                  type="button"
                  id="prev-expert-btn"
                  class="flex h-8 w-8 items-center justify-center rounded-full border border-white/60 text-white hover:border-white hover:bg-white/10 transition-all cursor-pointer"
                  aria-label="Previous expert"
                >
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M15 19l-7-7 7-7" />
                  </svg>
                </button>
                <button
                  type="button"
                  id="next-expert-btn"
                  class="flex h-8 w-8 items-center justify-center rounded-full border border-white/60 text-white hover:border-white hover:bg-white/10 transition-all cursor-pointer"
                  aria-label="Next expert"
                >
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M9 5l7 7-7 7" />
                  </svg>
                </button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- CTA -->
    <section
      id="contact"
      class="relative flex h-[350px] w-full items-center overflow-hidden bg-[#B800FF]"
    >
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
      // 2. SLIDER 1: CASE STUDIES
      // ==========================================
      const defaultSlides = [
        {
          eyrow: "CASE STUDIES", /* wait, eyebrow is correct */
          eyebrow: "CASE STUDIES",
          title: "Perspective on Traditional Market Model – Part 1: The fish market in Busan",
          description: "When tourists visit any destination, they often want to learn about the local culture, history, standard of living, and customs. Traditional markets are an...",
          image: "public/images/blog-busan.jpg",
          href: "project-1",
        },
        {
          eyebrow: "CASE STUDIES",
          title: "Perspective on Traditional Market Model – Part 2: The hub market in Bazar",
          description: "A comprehensive look at traditional markets in the modern economy, focusing on Bazar hub market's vital role in supplying fresh goods and supporting local micro-entrepreneurs...",
          image: "public/images/blog-chodam.jpg",
          href: "projects",
        },
        {
          eyebrow: "CASE STUDIES",
          title: "Traditional Markets vs Modern Supermarkets",
          description: "Analyzing consumer behavior transitions in fast-developing coastal urban cities. How traditional markets retain their competitive edge through cultural connection...",
          image: "public/images/blog-supermarket.jpg",
          href: "projects",
        },
      ];

      let slidesList = [...defaultSlides];
      let currentSlide = 0;

      const caseStudiesTextContainer = document.getElementById("case-studies-text-container");
      const caseStudiesImageContainer = document.getElementById("case-studies-image-container");

      function updateCaseStudies() {
        const slide = slidesList[currentSlide];
        if (!slide) return;

        // Render HTML content
        caseStudiesTextContainer.innerHTML = `
          <span class="mb-6 block text-xs font-extrabold uppercase tracking-[0.25em] text-[#B800FF]">
            ${slide.eyebrow}
          </span>
          <h3 class="mb-5 text-3xl font-bold leading-tight tracking-[-1.5px] text-[#3D0055] md:text-[38px]">
            ${slide.title}
          </h3>
          <p class="mb-8 max-w-[480px] text-sm leading-[22px] text-[#005E2C] md:text-base md:leading-[26px]">
            ${slide.description}
          </p>
          <a
            href="${slide.href}"
            class="inline-block rounded-sm bg-[#B800FF] px-8 py-3 text-sm font-bold text-white transition-all duration-300 hover:bg-[#9900FF]"
          >
            Read more
          </a>
        `;

        caseStudiesImageContainer.innerHTML = `
          <img
            src="${slide.image}"
            alt="${slide.title}"
            class="h-full w-full object-cover transition-all duration-500 ease-in-out animate-fade-in"
          />
        `;

        // Trigger reflow & re-animate
        caseStudiesTextContainer.classList.remove("animate-fade-in");
        void caseStudiesTextContainer.offsetWidth; // force reflow
        caseStudiesTextContainer.classList.add("animate-fade-in");
      }

      // Load published posts from localStorage if present
      const saved = localStorage.getItem("kbiz_posts");
      if (saved) {
        try {
          const parsed = JSON.parse(saved);
          const publishedPosts = parsed.filter(function(p) { return p.status === "published"; });
          if (publishedPosts.length > 0) {
            slidesList = publishedPosts.map(function(p) {
              return {
                eyebrow: p.tags ? p.tags.split(",")[0].toUpperCase().trim() : "CASE STUDIES",
                title: p.title,
                description: p.excerpt || (p.content ? p.content.slice(0, 150) + "..." : "No description available."),
                image: p.coverImage || "public/images/blog-busan.jpg",
                href: "projects",
              };
            });
          }
        } catch (e) {
          console.error("Failed to parse LocalStorage posts:", e);
        }
      }

      updateCaseStudies();

      document.getElementById("prev-case-study-btn").addEventListener("click", function () {
        currentSlide = (currentSlide - 1 + slidesList.length) % slidesList.length;
        updateCaseStudies();
      });

      document.getElementById("next-case-study-btn").addEventListener("click", function () {
        currentSlide = (currentSlide + 1) % slidesList.length;
        updateCaseStudies();
      });


      // ==========================================
      // 3. SLIDER 2: PROJECT BANNER
      // ==========================================
      const projectSlides = [
        {
          image: "public/images/project-vanphong.jpg",
          title: "VAN PHONG 1 BOT THERMAL POWER PLANT",
          subtitle: "Investment Consulting - 2021",
        },
        {
          image: "public/images/australis-8956_edited.jpg",
          title: "AUSTRALIS AQUACULTURE VIETNAM",
          subtitle: "Investment & Licensing",
        },
        {
          image: "public/images/ProjectImageSG.png",
          title: "SAIGON NHA TRANG GENERAL HOSPITAL",
          subtitle: "Investment Consulting - 2019",
        },
      ];

      let currentProjSlide = 0;
      const projectSlideImg = document.getElementById("project-slide-img");
      const projectSlideTitle = document.getElementById("project-slide-title");
      const projectSlideSubtitle = document.getElementById("project-slide-subtitle");
      const projectSlideText = document.getElementById("project-slide-text");

      function updateProjSlide() {
        const slide = projectSlides[currentProjSlide];
        
        projectSlideImg.src = slide.image;
        projectSlideImg.alt = slide.title;
        projectSlideTitle.textContent = slide.title;
        projectSlideSubtitle.textContent = slide.subtitle;

        // Reset and trigger CSS animation reflow
        projectSlideImg.classList.remove("animate-fade-in");
        projectSlideText.classList.remove("animate-fade-in");
        void projectSlideImg.offsetWidth;
        projectSlideImg.classList.add("animate-fade-in");
        projectSlideText.classList.add("animate-fade-in");
      }

      document.getElementById("prev-proj-btn").addEventListener("click", function () {
        currentProjSlide = (currentProjSlide - 1 + projectSlides.length) % projectSlides.length;
        updateProjSlide();
      });

      document.getElementById("next-proj-btn").addEventListener("click", function () {
        currentProjSlide = (currentProjSlide + 1) % projectSlides.length;
        updateProjSlide();
      });


      // ==========================================
      // 4. SLIDER 3: TESTIMONIALS
      // ==========================================
      const testimonials = [
        {
          quote: '"I could not have performed any of these tasks with a successful outcome, without the professional work performed by K-Biz’s team."',
          name: "Mr. Paul Anthony Hinkley",
          info: "(Properties Management, 2014 - 2015)",
        },
        {
          quote: "“I've had the pleasure of working with the K-Biz team and appreciate their valuable insights on investment and law in Nha Trang.”",
          name: "Mr. Peter Allen – Managing Partner",
          info: "NT Ventures",
        },
        {
          quote: "“I’m grateful to K-Biz for helping me start my business in Khanh Hoa. To future clients, I confidently recommend the K-Biz Team.”",
          name: "Mr. Sim Hyun Woo",
          info: "Former Director S-Global Vietnam Co., Ltd",
        },
        {
          quote: '"When we faced serious challenges starting our business in Vietnam, K-Biz helped us overcome them with accurate information and timely support. Since then, they’ve been a trusted partner, and I wholeheartedly recommend their services to anyone looking to start a business in Vietnam."',
          name: "Mr. Sim Hyun Woo",
          info: "Former Director S-Global Vietnam Co., Ltd",
        },
      ];

      let currentTestimonial = 0;
      const testimonialQuote = document.getElementById("testimonial-quote");
      const testimonialName = document.getElementById("testimonial-name");
      const testimonialInfo = document.getElementById("testimonial-info");
      const testimonialContainer = document.getElementById("testimonial-container");

      function updateTestimonial() {
        const item = testimonials[currentTestimonial];
        testimonialQuote.textContent = item.quote;
        testimonialName.textContent = item.name;
        testimonialInfo.textContent = item.info;

        testimonialContainer.classList.remove("animate-fade-in");
        void testimonialContainer.offsetWidth;
        testimonialContainer.classList.add("animate-fade-in");
      }

      document.getElementById("prev-testimonial-btn").addEventListener("click", function () {
        currentTestimonial = (currentTestimonial - 1 + testimonials.length) % testimonials.length;
        updateTestimonial();
      });

      document.getElementById("next-testimonial-btn").addEventListener("click", function () {
        currentTestimonial = (currentTestimonial + 1) % testimonials.length;
        updateTestimonial();
      });


      // ==========================================
      // 5. SLIDER 4: TEAM / EXPERTS
      // ==========================================
      const teamMembers = [
        {
          name: "Huỳnh Thị Hằng",
          role: "Head of Investment Advisory Department – Co-founder",
          image: "public/images/team-huynh-thi-hang.png",
        },
        {
          name: "Nguyễn Trần Khánh Hiệp",
          role: "Project Development Department",
          image: "public/images/team-khanh-hiep.png",
        },
        {
          name: "Từ Ngọc Thùy Nhi",
          role: "Accounting & Tax Department",
          image: "public/images/team-thuy-nhi.png",
        },
        {
          name: "Hà Thái Sơn",
          role: "Legal Department",
          image: "public/images/team-thai-son.png",
        },
        {
          name: "Nguyễn Thị Hải Anh",
          role: "Startup Management Support Department",
          image: "public/images/team-hai-anh.png",
        },
        {
          name: "Bùi Kim Khánh",
          role: "Legal Department",
          image: "public/images/team-kim-khanh.png",
        },
      ];

      let currentExpert = 0;
      const expertImg = document.getElementById("expert-img");

      function updateExpert() {
        const member = teamMembers[currentExpert];
        expertImg.src = member.image;
        expertImg.alt = member.name;

        expertImg.classList.remove("animate-fade-in");
        void expertImg.offsetWidth;
        expertImg.classList.add("animate-fade-in");
      }

      document.getElementById("prev-expert-btn").addEventListener("click", function (e) {
        e.stopPropagation();
        currentExpert = (currentExpert - 1 + teamMembers.length) % teamMembers.length;
        updateExpert();
      });

      document.getElementById("next-expert-btn").addEventListener("click", function (e) {
        e.stopPropagation();
        currentExpert = (currentExpert + 1) % teamMembers.length;
        updateExpert();
      });
    });
</script>
<?php include 'templates/footer.php'; ?>


