<?php
$activePage = 'services-2';
$pageTitle = 'Start New Business | K-Biz Consulting';
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
              NEW BUSINESS LAUNCHING
            </h1>
          </div>
          <div class="w-[8.5%] shrink-0 bg-[#F0EBF1]"></div>
        </div>

        <!-- Intro bar -->
        <div class="flex w-full">
          <div class="w-[8.5%] shrink-0 bg-white"></div>
          <div class="flex-1 bg-[#E8FFF3] py-10 pl-8 md:py-12 md:pl-10">
            <h2 class="mb-6 text-[25px] font-bold leading-normal tracking-[0.01em] text-[#3D0055] md:text-[32px] lg:text-[40px]">
              K-Biz: Partnering with you from concept to reality
            </h2>
            <p class="text-lg leading-[1.6] text-[#000000] pr-8 md:pr-10">
              At K-Biz, our experienced team provides comprehensive support for starting a business that matches your business plan and the rules and regulations your company must comply with.
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
              src="public/images/consulting2-differences.jpeg"
              alt="Business professional reviewing global market data"
              class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 hover:scale-105"
            />
          </div>
          <!-- Text -->
          <div class="flex flex-col justify-center px-6 py-12 md:px-16 md:py-20 lg:px-24 lg:py-28 bg-white">
            <h2 class="mb-6 text-3xl font-bold text-[#0C0C0C] md:text-[40px] lg:text-[46px] leading-[1.15] tracking-tight">
              1. To grant the Enterprise Registration Certificate (ERC)
            </h2>
            <div class="space-y-5 text-sm md:text-base leading-relaxed text-[#0C0C0C] opacity-90">
              <ul class="list-disc space-y-4 pl-5">
                <li>
                  K-Biz can assist you in selecting the appropriate company type (Limited Liability Company,
                  Corporation, or others), choosing the business code based on your operating plan, and advising on
                  the development of the Company Charter, Charter capital, and how to contribute charter capital.
                </li>
                <li>
                  We can also guide you on tax policy and declaration, as well as the necessary regulations that a
                  start-up company must follow after receiving the Enterprise Registration Certificate, such as
                  creating a Company stamp, registering for electronic invoices, registering for social insurance,
                  and more.
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
              2. To grant the sub-license
            </h2>
            <div class="space-y-5 text-sm md:text-base leading-relaxed text-[#0C0C0C] opacity-90">
              <ul class="list-disc space-y-4 pl-5">
                <li>
                  According to the Investment Law of 2020, 228 business codes require specific conditions. These
                  industries include restaurants, hotels, food processing, transportation, tour operators,
                  construction, healthcare services, and more. Each industry and business code has specific
                  requirements, such as personnel qualifications, construction and equipment standards, financial
                  capabilities, or sub-licenses such as Food Hygiene and Safety Certificates, International Tour
                  Operator Licenses, Construction Activity Qualification Certificates, or Healthcare Practice Licenses.
                </li>
                <li>
                  Understanding the specific requirements of the business line is crucial before registration. The
                  K-Biz team is here to assist you in justifying the terms and conditions and helping you meet industry
                  standards, obtain necessary licenses, and stay compliant with regulations.
                </li>
              </ul>
            </div>
          </div>
          <!-- Image -->
          <div class="relative w-full h-[360px] md:h-full min-h-[360px] md:min-h-full overflow-hidden order-1 md:order-2">
            <img
              src="public/images/consulting2-sublicense.jpg"
              alt="Financial planning and business documentation"
              class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 hover:scale-105"
            />
          </div>
        </div>
      </section>

      <!-- FIC vs Domestic Company Section -->
      <section class="w-full bg-white">
        <div class="grid grid-cols-1 md:grid-cols-2">
          <div class="h-[350px] w-full overflow-hidden md:h-[700px]">
            <img
              src="public/images/consulting2-erc.jpg"
              alt="Coastal city skyline in Vietnam"
              class="h-full w-full object-cover"
            />
          </div>
          <div class="flex flex-col justify-center bg-[#E8FFF3] px-6 py-8 md:px-10 md:py-12">
            <h2 class="mb-6 text-xl font-bold text-[#0C0C0C] md:text-[22px]">
              Key Differences Between Foreign-Invested and Vietnamese Companies in Vietnam
            </h2>
            <div class="space-y-4 text-sm md:text-base leading-relaxed text-[#0C0C0C] opacity-90">
              <p>
                While Vietnam has significantly opened its doors to foreign investment, foreign-invested
                companies (FICs) still face certain restrictions compared to domestic businesses. These
                limitations primarily stem from international commitments and domestic legal regulations.
              </p>
              <p>
                According to Decree No. 31/2021/ND-CP, FICs are completely prohibited from investing in 25
                specific sectors and are subject to conditional restrictions in 58 others, primarily to safeguard
                national security, economic interests, and cultural heritage.
              </p>
              <p>
                <strong>Key Market Access Conditions: </strong>
                Foreign investors may face ownership caps, be limited to specific investment methods (e.g.,
                greenfield or M&amp;A), and encounter additional restrictions in sensitive sectors like
                distribution, entertainment, and real estate.
              </p>
              <p>
                <strong>Operational Restrictions:</strong>
              </p>
              <p>
                In addition to the market access conditions, foreign investors and foreign-invested companies in
                Vietnam may need to comply with specific requirements related to:
              </p>
              <ul class="list-disc space-y-3 pl-5">
                <li>
                  <strong>Land and Real Estate:</strong> Leasing, ownership, and trade of housing and real
                  estate.
                </li>
                <li>
                  <strong>Human Resources:</strong> Recruitment of foreign employees and obtaining work permits.
                </li>
                <li>
                  <strong>Capital Acquisition:</strong> Obtaining foreign capital through charter capital
                  contributions and foreign loans.
                </li>
              </ul>
              <p>
                Vietnam's investment landscape is dynamic. K-Biz offers legal and financial consulting to help
                foreign investors stay compliant and seize opportunities.
              </p>
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

