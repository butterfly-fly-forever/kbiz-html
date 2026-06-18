<?php
$activePage = 'services-1';
$pageTitle = 'Investment Consulting | K-Biz Consulting';
include 'templates/header.php';
?>


    <main class="w-full bg-white flex flex-col items-center">
      
      <!-- ServiceIntroFrame component equivalent -->
      <section class="w-full">
        <!-- Title bar -->
        <div class="flex w-full">
          <div class="w-[8.5%] shrink-0 bg-[#B912FC]"></div>
          <div
            class="flex-1 py-8 pl-8 md:py-10 md:pl-10"
            style="background: linear-gradient(90deg, #7B00AA 0%, #B800FF 100%);"
          >
            <h1 class="text-[28px] font-bold uppercase leading-normal tracking-normal text-white md:text-[40px] lg:text-[50px]">
              INVESTMENT CONSULTING
            </h1>
          </div>
          <div class="w-[8.5%] shrink-0 bg-[#F0EBF1]"></div>
        </div>

        <!-- Intro bar -->
        <div class="flex w-full">
          <div class="w-[8.5%] shrink-0 bg-white"></div>
          <div class="flex-1 bg-[#E8FFF3] py-10 pl-8 md:py-12 md:pl-10">
            <h2 class="mb-6 text-[25px] font-bold leading-normal tracking-[0.01em] text-[#3D0055] md:text-[32px] lg:text-[40px]">
              K-Biz: Investment guidance, value growth
            </h2>
            <p class="text-lg leading-[1.6] text-[#000000] pr-8 md:pr-10">
              We offer in-depth investment consulting services, ensuring your projects are feasible, profitable, and legally compliant. From initial concept to full implementation, K-Biz is with you every step of the way, helping you achieve sustainable investment goals.
            </p>
          </div>
          <div class="w-[8.5%] shrink-0 bg-white"></div>
        </div>
      </section>

      <!-- Section 1 (Image First) -->
      <section class="w-full bg-white border-b border-gray-100">
        <div class="grid grid-cols-1 md:grid-cols-2 items-stretch">
          <!-- Image -->
          <div class="relative w-full h-[360px] md:h-full min-h-[360px] md:min-h-full overflow-hidden">
            <img
              src="public/images/indus.jpg"
              alt="Industrial complex"
              class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 hover:scale-105"
            />
          </div>
          <!-- Text -->
          <div class="flex flex-col justify-center px-6 py-12 md:px-16 md:py-20 lg:px-24 lg:py-28 bg-white">
            <h2 class="mb-6 text-3xl font-bold text-[#0C0C0C] md:text-[40px] lg:text-[46px] leading-[1.15] tracking-tight">
              1. Investment Certificate Applications
            </h2>
            <div class="space-y-5 text-sm md:text-base leading-relaxed text-[#0C0C0C] opacity-90">
              <ul class="list-disc space-y-4 pl-5">
                <li>
                  Applying for an Investment Registration Certificate depends on various factors such as the
                  project objectives, location and area of land, construction scale, capital sources,
                  technology, environmental impact, and more. A clear and legally compliant business plan is
                  a key factor.
                </li>
                <li>
                  Our experts assist you in developing a feasibility study that aligns with your business
                  plan and complies with all relevant laws and regulations.
                </li>
                <li>
                  K-Biz has successfully supported numerous clients in obtaining their Investment
                  Registration Certificates for significant projects, including: 
                  <em>
                    The project of manufacture and supply construction materials and services at Song Cau
                    industrial zone (Vietnamese investor, 2024); The project of operation and maintenance
                    for The Van Phong 1 Coal Power Plan (Korean Investor, 2020).
                  </em>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Section 2 (Text First) -->
      <section class="w-full bg-white border-b border-gray-100">
        <div class="grid grid-cols-1 md:grid-cols-2 items-stretch">
          <!-- Text -->
          <div class="flex flex-col justify-center px-6 py-12 md:px-16 md:py-20 lg:px-24 lg:py-28 bg-white order-2 md:order-1">
            <h2 class="mb-6 text-3xl font-bold text-[#0C0C0C] md:text-[40px] lg:text-[46px] leading-[1.15] tracking-tight">
              2. Prepare Business Plan
            </h2>
            <div class="space-y-5 text-sm md:text-base leading-relaxed text-[#0C0C0C] opacity-90">
              <p class="text-justify">
                Business plans serve various purposes. At K-Biz, we frequently prepare business plans for
                two key objectives: <strong>(1) obtaining investment certificates,</strong> and 
                <strong>(2) securing bank loans.</strong>
              </p>
              <p>
                Both types of business plans guarantee full legal compliance, ensuring your project is
                stable and easy to implement. With over 20 years of experience, we offer comprehensive
                support from documentation to successful project execution.
              </p>
              <p>Several business plans developed by K-Biz have been successfully implemented:</p>
              <ul class="list-disc space-y-4 pl-5">
                <li>
                  To purchase and install medical equipment for Khanh Hoa Provincial General Hospital (
                  <em>
                    Source of capital: The Khanh Hoa investment fund and Vietcombank Khanh Hoa
                    (2016-2017); The Vietin bank - Khanh Hoa branch (2017-2018).
                  </em>
                  ).
                </li>
                <li>
                  To purchase and install medical equipment for Sai Gon – Nha Trang General Hospital (
                  <em>Source of capital: The Khanh Hoa investment fund – Word Bank, 2016-2017</em>).
                </li>
              </ul>
            </div>
          </div>
          <!-- Image -->
          <div class="relative w-full h-[360px] md:h-full min-h-[360px] md:min-h-full overflow-hidden order-1 md:order-2">
            <img
              src="public/images/plan.jpg"
              alt="Business planning documents"
              class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 hover:scale-105"
            />
          </div>
        </div>
      </section>

      <!-- Section 3 (Image First) -->
      <section class="w-full bg-white border-b border-gray-100 last:border-b-0">
        <div class="grid grid-cols-1 md:grid-cols-2 items-stretch">
          <!-- Image -->
          <div class="relative w-full h-[360px] md:h-full min-h-[360px] md:min-h-full overflow-hidden">
            <img
              src="public/images/financial-planning-analysis.webp"
              alt="Financial planning and analysis"
              class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 hover:scale-105"
            />
          </div>
          <!-- Text -->
          <div class="flex flex-col justify-center px-6 py-12 md:px-16 md:py-20 lg:px-24 lg:py-28 bg-white">
            <h2 class="mb-6 text-3xl font-bold text-[#0C0C0C] md:text-[40px] lg:text-[46px] leading-[1.15] tracking-tight">
              3. Investment Development Support Services
            </h2>
            <div class="space-y-5 text-sm md:text-base leading-relaxed text-[#0C0C0C] opacity-90">
              <ul class="list-disc space-y-4 pl-5">
                <li>
                  Developing a successful project requires a thorough understanding of various legal and
                  regulatory requirements. These include land use regulations, property leasing laws,
                  construction permits, environmental compliance, taxation, accounting, import-export,
                  project management, human resources, and business operations.
                </li>
                <li>
                  To assist project owners in navigating these complexities, K-Biz offers specialized
                  support services, including: Tax exemption policy advice, Foreigner employment support,
                  Foreign capital borrowing and transfer, Retainer services.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA -->
      <section class="relative mt-[50px] flex h-[350px] w-full items-center overflow-hidden bg-[#B800FF]">
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

    <?php include 'templates/footer.php'; ?>

