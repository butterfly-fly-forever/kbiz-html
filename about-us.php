<?php
$activePage = 'about-us';
$pageTitle = 'About us | K-Biz Consulting';
include 'templates/header.php';
?>


    <main class="w-full bg-white flex flex-col items-center">
      
      <!-- Hero -->
      <section class="relative flex min-h-[480px] w-full max-w-[1440px] items-end overflow-hidden md:min-h-[560px]">
        <video
          id="hero-video"
          autoplay
          loop
          muted
          playsinline
          poster="public/images/11062b_1400d5c5de334faa95fd2772b400413df000.jpg"
          class="absolute inset-0 h-full w-full object-cover"
        >
          <source src="public/videos/aboutus.mp4" type="video/mp4" />
        </video>
        <div class="absolute inset-0 bg-white/10"></div>

        <!-- Play Button Overlay -->
        <div class="absolute inset-0 flex items-center justify-center z-10">
          <button
            id="play-video-btn"
            class="flex h-16 w-16 items-center justify-center rounded-full bg-black/60 text-white backdrop-blur-sm transition-all duration-300 hover:bg-black/80 hover:scale-110 active:scale-95 shadow-lg border border-white/10 cursor-pointer"
            aria-label="Play video"
          >
            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="ml-1 text-white">
              <path d="M8 5v14l11-7z" />
            </svg>
          </button>
        </div>

        <div class="relative z-10 w-full pb-12 pt-24 px-6 md:px-10">
          <!-- Eyebrow component equivalent -->
          <div class="mb-2 flex items-center gap-2">
            <svg width="16" height="16" viewBox="2.665 2.667 10.667 10.666" fill="#005E2C">
              <path d="M7.999 2.667 13.332 8l-5.333 5.333H2.665V2.667z" />
            </svg>
            <h2 class="text-sm font-bold uppercase tracking-[0.2em] text-[#005E2C]">ABOUT KBIZ CONSULTING</h2>
          </div>
          
          <h1 class="max-w-[720px] text-4xl font-normal leading-tight text-[#b70dfc] md:text-[56px] md:leading-[1.1]">
            We build projects that last
          </h1>
        </div>
      </section>

      <!-- Video Modal -->
      <div id="video-modal" class="hidden fixed inset-0 z-[999] flex items-center justify-center bg-black/90 p-4 transition-opacity duration-300">
        <button
          id="close-video-btn"
          class="absolute top-6 right-6 text-white/70 hover:text-white hover:scale-110 transition-all duration-200 cursor-pointer"
          aria-label="Close video"
        >
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
        </button>
        <div class="relative w-full max-w-5xl aspect-video overflow-hidden rounded-lg bg-black shadow-2xl border border-white/10">
          <video
            id="modal-video-player"
            src="public/videos/aboutus.mp4"
            controls
            playsinline
            class="w-full h-full object-contain"
          ></video>
        </div>
      </div>

      <!-- Intro + Mission / Vision -->
      <section class="w-full max-w-[1440px]">
        <div class="grid grid-cols-1 md:grid-cols-2">
          <div class="flex items-center bg-gradient-to-r from-[#e5afff] to-[#fcf4ff] px-6 py-12 md:px-10 md:py-16">
            <p class="text-lg leading-[1.6] text-[#0C0C0C]">
              <strong className="text-[#b70dfc]">Established in 2005.</strong> K-Biz is a leading business consulting firm in Nha Trang.
              We've successfully supported numerous projects, contributed to local reforms, and built a strong
              reputation for trust and expertise.
            </p>
          </div>
          <div class="flex flex-col">
            <div class="bg-[#b9fcd8] px-6 py-10 md:px-10 md:py-12 flex-1">
              <h2 class="mb-4 text-2xl font-normal text-[#b70dfc] md:text-[28px]">Our Mission</h2>
              <p class="text-base leading-[1.5] text-[#0C0C0C]">
                Empowering businesses in Khánh Hòa and beyond through innovative solutions, expert guidance, and
                unwavering support. We understand your unique challenges and tailor our solutions to meet your
                specific needs.
              </p>
            </div>
            <div class="bg-[#e6aafd] px-6 py-10 md:px-10 md:py-12 flex-1">
              <h2 class="mb-4 text-2xl font-normal text-[#b70dfc] md:text-[28px]">Our Vision</h2>
              <p class="text-base leading-[1.5] text-[#0C0C0C]">
                To be the indispensable partner for businesses in Khánh Hòa and Nationwide, fostering growth,
                innovation, and success. We are committed to building long-lasting relationships with our clients,
                providing unwavering support and expertise every step of the way.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Photo gallery -->
      <section class="w-full max-w-[1440px] bg-white py-12 md:py-16 px-6 md:px-10">
        <div class="flex flex-col gap-2">
          <div class="grid grid-cols-2 gap-2 md:grid-cols-4">
            
            <!-- Grid Image 1 -->
            <div class="aspect-[4/5] cursor-pointer overflow-hidden group gallery-item" data-index="0">
              <img
                src="public/images/team-1.jpg"
                alt="K-Biz team at office"
                class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
              />
            </div>
            <!-- Grid Image 2 -->
            <div class="aspect-[4/5] cursor-pointer overflow-hidden group gallery-item" data-index="1">
              <img
                src="public/images/team-2.jpg"
                alt="K-Biz team meeting"
                class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
              />
            </div>
            <!-- Grid Image 3 -->
            <div class="aspect-[4/5] cursor-pointer overflow-hidden group gallery-item" data-index="2">
              <img
                src="public/images/team-3.jpg"
                alt="K-Biz team on site visit"
                class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
              />
            </div>
            <!-- Grid Image 4 -->
            <div class="aspect-[4/5] cursor-pointer overflow-hidden group gallery-item" data-index="3">
              <img
                src="public/images/gallery-1.jpg"
                alt="K-Biz team group photo"
                class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
              />
            </div>

          </div>
          <div class="grid grid-cols-2 gap-2 md:grid-cols-4">
            
            <!-- Grid Image 5 -->
            <div class="aspect-video cursor-pointer overflow-hidden group gallery-item" data-index="4">
              <img
                src="public/images/gallery-2.jpg"
                alt="K-Biz team at project site"
                class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
              />
            </div>
            <!-- Grid Image 6 -->
            <div class="aspect-video cursor-pointer overflow-hidden group gallery-item" data-index="5">
              <img
                src="public/images/gallery-3.jpg"
                alt="K-Biz team discussion"
                class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
              />
            </div>
            <!-- Grid Image 7 -->
            <div class="aspect-video cursor-pointer overflow-hidden group gallery-item" data-index="6">
              <img
                src="public/images/team-group.jpg"
                alt="K-Biz team celebration"
                class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
              />
            </div>
            <!-- Grid Image 8 -->
            <div class="aspect-video cursor-pointer overflow-hidden group gallery-item" data-index="7">
              <img
                src="public/images/about-office.jpg"
                alt="K-Biz office"
                class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
              />
            </div>

          </div>
        </div>
      </section>

      <!-- Lightbox Modal -->
      <div id="lightbox-modal" class="hidden fixed inset-0 z-[999] flex h-full w-full flex-col bg-white">
        <div class="flex w-full items-center justify-between p-6">
          <button class="text-gray-400 hover:text-gray-600 transition-colors" aria-label="Maximize">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7" />
            </svg>
          </button>
          <button
            id="close-lightbox-btn"
            class="text-gray-400 hover:text-gray-600 transition-colors cursor-pointer"
            aria-label="Close"
          >
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="18" y1="6" x2="6" y2="18"></line>
              <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
          </button>
        </div>

        <div class="relative flex flex-1 items-center justify-center px-4 pb-10 min-h-0">
          
          <!-- Left Chevron -->
          <button
            id="prev-lightbox-btn"
            class="absolute left-0 md:left-4 z-20 flex h-11 w-11 md:h-12 md:w-12 items-center justify-center rounded-full bg-black/5 hover:bg-black/15 text-gray-600 hover:text-black transition-all duration-200 cursor-pointer shadow-sm"
            aria-label="Previous image"
          >
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
          </button>

          <!-- Centered Image & Info -->
          <div class="flex h-full w-full max-w-5xl flex-col items-center justify-center gap-4 md:flex-row md:items-center md:gap-8 px-10 md:px-16 min-h-0">
            <div class="flex-1 flex items-center justify-center min-h-0">
              <img
                id="lightbox-img"
                src=""
                alt=""
                class="max-h-[48vh] md:max-h-[65vh] w-auto max-w-full object-contain rounded-sm shadow-md border border-gray-100 transition-all duration-300"
              />
            </div>
            <div class="w-full md:w-60 lg:w-72 flex-shrink-0 text-center md:text-left pb-4 md:pb-0">
              <p id="lightbox-caption" class="text-[#0C0C0C] text-xs md:text-sm font-medium leading-relaxed bg-gray-50 md:bg-transparent p-3 md:p-0 rounded-sm">
                Caption
              </p>
            </div>
          </div>

          <!-- Right Chevron -->
          <button
            id="next-lightbox-btn"
            class="absolute right-0 md:right-4 z-20 flex h-11 w-11 md:h-12 md:w-12 items-center justify-center rounded-full bg-black/5 hover:bg-black/15 text-gray-600 hover:text-black transition-all duration-200 cursor-pointer shadow-sm"
            aria-label="Next image"
          >
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </button>
        </div>
      </div>

      <!-- Key Differentiators -->
      <section class="w-full bg-white pb-16 md:pb-20 px-6 md:px-10">
        <h2 class="mb-10 text-center text-3xl font-bold text-[#005E2C] md:text-4xl">Our Key Differentiators</h2>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
          
          <!-- Differentiator 1 -->
          <div class="flex flex-col items-center rounded-2xl px-10 py-14 md:px-12 md:py-16 text-center bg-[#E8FFF3]">
            <div class="mb-5">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="9" r="6" />
                <path d="M9 14.8V22l3-3 3 3v-7.2" />
              </svg>
            </div>
            <h3 class="mb-4 text-xl font-bold capitalize text-[#0C0C0C]">Experience</h3>
            <p class="text-sm leading-[1.5] text-[#0C0C0C]">
              K-Biz (est. 2005) offers 20 years' expertise. K-Biz has developed a strong track record of success. Our team possesses the expertise and know-how to effectively address all client challenges and deliver tailored solutions in every area.
            </p>
          </div>

          <!-- Differentiator 2 -->
          <div class="flex flex-col items-center rounded-2xl px-10 py-14 md:px-12 md:py-16 text-center bg-[#E7AAFF]">
            <div class="mb-5">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="18" cy="5" r="3" />
                <circle cx="6" cy="12" r="3" />
                <circle cx="18" cy="19" r="3" />
                <path d="M8.59 13.51l6.83 3.98M15.41 6.51l-6.82 3.98" />
              </svg>
            </div>
            <h3 class="mb-4 text-xl font-bold capitalize text-[#0C0C0C]">Business network</h3>
            <p class="text-sm leading-[1.5] text-[#0C0C0C]">
              At K-Biz, clients connect with the business community in Khanh Hoa and beyond. We foster partnerships, customer relationships, and industry collaboration.
            </p>
          </div>

          <!-- Differentiator 3 -->
          <div class="flex flex-col items-center rounded-2xl px-10 py-14 md:px-12 md:py-16 text-center bg-[#E8FFF3]">
            <div class="mb-5">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 21s7-4.5 7-11a7 7 0 1 0-14 0c0 6.5 7 11 7 11z" />
                <circle cx="12" cy="10" r="2.5" />
              </svg>
            </div>
            <h3 class="mb-4 text-xl font-bold capitalize text-[#0C0C0C]">Local knowledge</h3>
            <p class="text-sm leading-[1.5] text-[#0C0C0C]">
              Local experts provide up-to-date Khanh Hoa-specific knowledge in law, investment, business, finance, and tax. Our database facilitates flexible investment, business, and market entry planning.
            </p>
          </div>

          <!-- Differentiator 4 -->
          <div class="flex flex-col items-center rounded-2xl px-10 py-14 md:px-12 md:py-16 text-center bg-[#E7AAFF]">
            <div class="mb-5">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <path d="M9 12l2 2 4-4" />
              </svg>
            </div>
            <h3 class="mb-4 text-xl font-bold capitalize text-[#0C0C0C]">Maximize efficiency</h3>
            <p class="text-sm leading-[1.5] text-[#0C0C0C]">
              Save time and money with K-Biz. Our optimized solutions streamline processes and reduce costs. Get professional advice at a reasonable rate
            </p>
          </div>

        </div>
      </section>

      <!-- Team -->
      <section class="w-full max-w-[1440px] bg-white pb-16 md:pb-20 px-6 md:px-10">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
          
          <!-- Member 1 -->
          <article class="flex flex-col items-center text-center">
            <div class="relative mb-6 flex w-full overflow-hidden">
              <img src="public/images/team-huynh-thi-hang.png" alt="Huỳnh Thị Hằng" class="w-full h-auto object-cover" />
            </div>
            <h3 class="mb-2 text-lg font-bold text-[#0C0C0C]">Huỳnh Thị Hằng</h3>
            <p class="text-sm text-gray-600">Head of Investment Advisory Department – Co-founder</p>
          </article>

          <!-- Member 2 -->
          <article class="flex flex-col items-center text-center">
            <div class="relative mb-6 flex w-full overflow-hidden">
              <img src="public/images/team-khanh-hiep.png" alt="Nguyễn Trần Khánh Hiệp" class="w-full h-auto object-cover" />
            </div>
            <h3 class="mb-2 text-lg font-bold text-[#0C0C0C]">Nguyễn Trần Khánh Hiệp</h3>
            <p class="text-sm text-gray-600">Project Development Department</p>
          </article>

          <!-- Member 3 -->
          <article class="flex flex-col items-center text-center">
            <div class="relative mb-6 flex w-full overflow-hidden">
              <img src="public/images/team-thuy-nhi.png" alt="Từ Ngọc Thùy Nhi" class="w-full h-auto object-cover" />
            </div>
            <h3 class="mb-2 text-lg font-bold text-[#0C0C0C]">Từ Ngọc Thùy Nhi</h3>
            <p class="text-sm text-gray-600">Accounting & Tax Department</p>
          </article>

          <!-- Member 4 -->
          <article class="flex flex-col items-center text-center">
            <div class="relative mb-6 flex w-full overflow-hidden">
              <img src="public/images/team-thai-son.png" alt="Hà Thái Sơn" class="w-full h-auto object-cover" />
            </div>
            <h3 class="mb-2 text-lg font-bold text-[#0C0C0C]">Hà Thái Sơn</h3>
            <p class="text-sm text-gray-600">Legal Department</p>
          </article>

        </div>
        <div class="mx-auto mt-8 grid max-w-[720px] grid-cols-1 gap-8 sm:grid-cols-2">
          
          <!-- Member 5 -->
          <article class="flex flex-col items-center text-center">
            <div class="relative mb-6 flex w-full overflow-hidden">
              <img src="public/images/team-hai-anh.png" alt="Nguyễn Thị Hải Anh" class="w-full h-auto object-cover" />
            </div>
            <h3 class="mb-2 text-lg font-bold text-[#0C0C0C]">Nguyễn Thị Hải Anh</h3>
            <p class="text-sm text-gray-600">Startup Management Support Department</p>
          </article>

          <!-- Member 6 -->
          <article class="flex flex-col items-center text-center">
            <div class="relative mb-6 flex w-full overflow-hidden">
              <img src="public/images/team-kim-khanh.png" alt="Bùi Kim Khánh" class="w-full h-auto object-cover" />
            </div>
            <h3 class="mb-2 text-lg font-bold text-[#0C0C0C]">Bùi Kim Khánh</h3>
            <p class="text-sm text-gray-600">Legal Department</p>
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

    </main>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
      // ==========================================
      // 2. VIDEO POPUP MODAL
      // ==========================================
      const playVideoBtn = document.getElementById("play-video-btn");
      const videoModal = document.getElementById("video-modal");
      const closeVideoBtn = document.getElementById("close-video-btn");
      const modalVideoPlayer = document.getElementById("modal-video-player");

      playVideoBtn.addEventListener("click", function () {
        videoModal.classList.remove("hidden");
        modalVideoPlayer.play();
      });

      function closeVideoModal() {
        videoModal.classList.add("hidden");
        modalVideoPlayer.pause();
        modalVideoPlayer.currentTime = 0;
      }

      closeVideoBtn.addEventListener("click", closeVideoModal);
      videoModal.addEventListener("click", function (e) {
        if (e.target === videoModal) {
          closeVideoModal();
        }
      });


      // ==========================================
      // 3. LIGHTBOX GALLERY
      // ==========================================
      const galleryImages = [
        { src: 'public/images/team-1.jpg', alt: 'K-Biz team at office' },
        { src: 'public/images/team-2.jpg', alt: 'K-Biz team meeting' },
        { src: 'public/images/team-3.jpg', alt: 'K-Biz team on site visit' },
        { src: 'public/images/gallery-1.jpg', alt: 'K-Biz team group photo' },
        { src: 'public/images/gallery-2.jpg', alt: 'K-Biz team at project site' },
        { src: 'public/images/gallery-3.jpg', alt: 'K-Biz team discussion' },
        { src: 'public/images/team-group.jpg', alt: 'K-Biz team celebration' },
        { src: 'public/images/about-office.jpg', alt: 'K-Biz office' },
        { src: 'public/images/project-khanhhoa.jpg', alt: 'K-Biz field visit' },
      ];

      let selectedImageIndex = null;

      const lightboxModal = document.getElementById("lightbox-modal");
      const lightboxImg = document.getElementById("lightbox-img");
      const lightboxCaption = document.getElementById("lightbox-caption");
      const closeLightboxBtn = document.getElementById("close-lightbox-btn");
      const prevLightboxBtn = document.getElementById("prev-lightbox-btn");
      const nextLightboxBtn = document.getElementById("next-lightbox-btn");

      function openLightbox(index) {
        selectedImageIndex = index;
        updateLightbox();
        lightboxModal.classList.remove("hidden");
        document.body.style.overflow = "hidden";
      }

      function closeLightbox() {
        selectedImageIndex = null;
        lightboxModal.classList.add("hidden");
        if (!mobileOpen) {
          document.body.style.overflow = "";
        }
      }

      function updateLightbox() {
        if (selectedImageIndex === null) return;
        const photo = galleryImages[selectedImageIndex];
        
        lightboxImg.src = photo.src;
        lightboxImg.alt = photo.alt;
        lightboxCaption.textContent = photo.alt;

        // Force transition reflow
        lightboxImg.classList.remove("opacity-0");
        void lightboxImg.offsetWidth;
      }

      // Add click listeners to gallery elements
      const galleryItems = document.querySelectorAll(".gallery-item");
      galleryItems.forEach(function (item) {
        item.addEventListener("click", function () {
          const index = parseInt(item.getAttribute("data-index"));
          openLightbox(index);
        });
      });

      closeLightboxBtn.addEventListener("click", closeLightbox);

      prevLightboxBtn.addEventListener("click", function (e) {
        e.stopPropagation();
        selectedImageIndex = (selectedImageIndex === 0) ? galleryImages.length - 1 : selectedImageIndex - 1;
        updateLightbox();
      });

      nextLightboxBtn.addEventListener("click", function (e) {
        e.stopPropagation();
        selectedImageIndex = (selectedImageIndex === galleryImages.length - 1) ? 0 : selectedImageIndex + 1;
        updateLightbox();
      });

      // Keyboard support for Lightbox
      document.addEventListener("keydown", function (e) {
        if (selectedImageIndex === null) return;
        if (e.key === "Escape") {
          closeLightbox();
        } else if (e.key === "ArrowLeft") {
          selectedImageIndex = (selectedImageIndex === 0) ? galleryImages.length - 1 : selectedImageIndex - 1;
          updateLightbox();
        } else if (e.key === "ArrowRight") {
          selectedImageIndex = (selectedImageIndex === galleryImages.length - 1) ? 0 : selectedImageIndex + 1;
          updateLightbox();
        }
      });
    });
</script>
<?php include 'templates/footer.php'; ?>

