    <!-- Footer -->
    <footer class="relative w-full overflow-hidden bg-white py-[6%] px-[5%] flex flex-col justify-between min-h-[500px]">
      <!-- Background gradients -->
      <div class="absolute inset-0 z-0 pointer-events-none" style="
        background: radial-gradient(circle at 10% 20%, rgba(200, 100, 255, 0.4) 0%, rgba(255, 255, 255, 0) 50%), radial-gradient(circle at 80% 50%, rgba(200, 255, 200, 0.4) 0%, rgba(255, 255, 255, 0) 50%), radial-gradient(circle at 90% 90%, rgba(220, 150, 255, 0.4) 0%, rgba(255, 255, 255, 0) 50%)
      "></div>

      <!-- Top Content: Logo -->
      <div class="z-10 w-full mb-[120px]">
        <img src="public/images/logo.png" alt="K-Biz Consulting" class="h-[140px] object-contain ml-[2%]" />
      </div>

      <!-- Bottom Content: Columns -->
      <div class="z-10 w-full grid grid-cols-1 md:grid-cols-12 gap-8 items-end pb-4 pl-[2%]">
        <!-- Location -->
        <div class="md:col-span-4">
          <h3 class="text-[12px] font-bold uppercase text-black mb-5 tracking-widest">
            Location
          </h3>
          <p class="text-[13px] text-[#333]">
            16A Le Quy Don St, Nha Trang Ward, Khanh Hoa Province
          </p>
        </div>

        <!-- Contact -->
        <div class="md:col-span-4">
          <h3 class="text-[12px] font-bold uppercase text-black mb-5 tracking-widest">
            Contact
          </h3>
          <div class="flex flex-col text-[13px] text-[#333] space-y-1.5">
            <a href="mailto:<?php echo htmlspecialchars($siteSettings['email']); ?>" class="hover:underline">
              <?php echo htmlspecialchars($siteSettings['email']); ?>
            </a>
            <a href="mailto:info@kbiz.com.vn" class="hover:underline">
              info@kbiz.com.vn
            </a>
            <p>
              <?php echo htmlspecialchars($siteSettings['phone']); ?>
            </p>
          </div>
        </div>

        <!-- Copyright & Admin Link -->
        <div class="md:col-span-4 flex flex-col items-start md:items-end pr-[5%] gap-2">
          <p class="text-[11px] text-[#333] tracking-widest uppercase">
            © K-BIZ CONSULTING
          </p>
          <a
            href="admins/dashboard.php"
            class="text-[10px] font-bold text-gray-400 hover:text-green-600 transition-colors uppercase tracking-widest"
          >
            Admin Portal
          </a>
        </div>
      </div>
    </footer>

  </div>

  <!-- Vanilla JS Interactive Engine -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      
      // ==========================================
      // 1. HEADER SCROLL DETECTION & MOBILE NAV
      // ==========================================
      const header = document.getElementById("site-header");
      if (header) {
        window.addEventListener("scroll", function () {
          if (window.scrollY > 6) {
            header.classList.add("shadow-sm");
          } else {
            header.classList.remove("shadow-sm");
          }
        }, { passive: true });
      }

      const mobileMenuBtn = document.getElementById("mobile-menu-btn");
      const mobileNav = document.getElementById("mobile-nav");
      const menuIconOpen = document.getElementById("menu-icon-open");
      const menuIconClose = document.getElementById("menu-icon-close");
      let mobileOpen = false;

      if (mobileMenuBtn && mobileNav) {
        mobileMenuBtn.addEventListener("click", function () {
          mobileOpen = !mobileOpen;
          mobileMenuBtn.setAttribute("aria-expanded", mobileOpen);
          if (mobileOpen) {
            mobileNav.classList.remove("hidden");
            menuIconOpen.classList.add("hidden");
            menuIconClose.classList.remove("hidden");
            document.body.style.overflow = "hidden";
          } else {
            mobileNav.classList.add("hidden");
            menuIconOpen.classList.remove("hidden");
            menuIconClose.classList.add("hidden");
            document.body.style.overflow = "";
          }
        });
      }

      const mobileServicesBtn = document.getElementById("mobile-services-btn");
      const mobileServicesDropdown = document.getElementById("mobile-services-dropdown");
      const mobileServicesArrow = document.getElementById("mobile-services-arrow");
      let mobileServicesOpen = false;

      if (mobileServicesBtn && mobileServicesDropdown) {
        mobileServicesBtn.addEventListener("click", function () {
          mobileServicesOpen = !mobileServicesOpen;
          mobileServicesBtn.setAttribute("aria-expanded", mobileServicesOpen);
          if (mobileServicesOpen) {
            mobileServicesDropdown.classList.remove("hidden");
            if (mobileServicesArrow) mobileServicesArrow.classList.add("rotate-180");
          } else {
            mobileServicesDropdown.classList.add("hidden");
            if (mobileServicesArrow) mobileServicesArrow.classList.remove("rotate-180");
          }
        });
      }
    });
  </script>
</body>
</html>
