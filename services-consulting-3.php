<?php
$activePage = 'services-3';
$pageTitle = 'Business Developing Services | K-Biz Consulting';
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
              BUSINESS DEVELOPMENT SUPPORT
            </h1>
          </div>
          <div class="w-[8.5%] shrink-0 bg-[#F0EBF1]"></div>
        </div>

        <!-- Intro bar -->
        <div class="flex w-full">
          <div class="w-[8.5%] shrink-0 bg-white"></div>
          <div class="flex-1 bg-[#E8FFF3] py-10 pl-8 md:py-12 md:pl-10">
            <h2 class="mb-6 text-[25px] font-bold leading-normal tracking-[0.01em] text-[#3D0055] md:text-[32px] lg:text-[40px]">
              K-Biz: Strategic support for sustainable business development
            </h2>
            <p class="text-lg leading-[1.6] text-[#000000] pr-8 md:pr-10">
              We offer comprehensive support for your business growth through legal consulting, administrative outsourcing, and project management services. With hands-on experience in both public and private sectors, we also deliver customized solutions and field research to drive innovation and sustainable development.
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
              src="public/images/consulting3-operational.jpg"
              alt="Business team reviewing financial planning documents"
              class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 hover:scale-105"
            />
          </div>
          <!-- Text -->
          <div class="flex flex-col justify-center px-6 py-12 md:px-16 md:py-20 lg:px-24 lg:py-28 bg-white">
            <h2 class="mb-6 text-3xl font-bold text-[#0C0C0C] md:text-[40px] lg:text-[46px] leading-[1.15] tracking-tight">
              1. The short-term operational needs
            </h2>
            <div class="space-y-5 text-sm md:text-base leading-relaxed text-[#0C0C0C] opacity-90">
              <p>
                For short-term operational needs or project development, the efficient solution is using the
                outsourcing service:
              </p>
              <ul class="list-disc space-y-4 pl-5">
                <li>
                  <em>
                    <strong>Retainer Consulting Services:</strong>
                  </em> 
                  Our legal team can provide ongoing support for your day-to-day business operations, including labor
                  agreements, tax compliance, commercial and civil contracts, land leasing and construction permits,
                  environmental protection, food safety, and more.
                </li>
                <li>
                  <em>
                    <strong>Office Support Services:</strong>
                  </em> 
                  Our administrative staff can provide short-term support for your new business, handling tasks such as
                  administrative duties and paperwork.
                </li>
                <li>
                  <em>
                    <strong>Project management services:</strong>
                  </em> 
                  Our experienced team will provide comprehensive support throughout your project, ensuring compliance with
                  all legal and regulatory procedures, including land leasing, fire safety, environmental compliance, design
                  approvals, and construction permits.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Section 2 (Text First) -->
      <section class="w-full bg-white border-b border-gray-100 last:border-b-0">
        <div class="grid grid-cols-1 md:grid-cols-2 items-stretch">
          <!-- Text -->
          <div class="flex flex-col justify-center px-6 py-12 md:px-16 md:py-20 lg:px-24 lg:py-28 bg-white order-2 md:order-1">
            <h2 class="mb-6 text-3xl font-bold text-[#0C0C0C] md:text-[40px] lg:text-[46px] leading-[1.15] tracking-tight">
              2. The specialized needs
            </h2>
            <div class="space-y-5 text-sm md:text-base leading-relaxed text-[#0C0C0C] opacity-90">
              <p>
                For specialized needs, we can create exceptional products by combining your creative ideas with our
                expertise and practice experience. Let's see some unique projects in which we have done:
              </p>
              <ul class="list-disc space-y-4 pl-5">
                <li>
                  <em>
                    <strong>The Public and Private Services Transformation (2014-2023):</strong>
                  </em>
                </li>
              </ul>
              <p>
                We've successfully created the procedure to transform the traditional market management services from the
                public to the private sector in Khanh Hoa and Ba Ria-Vung Tau province.
              </p>
              <ul class="list-disc space-y-4 pl-5">
                <li>
                  <em>
                    <strong>Survey of Public Administrative Services (2018-2023):</strong>
                  </em>
                </li>
              </ul>
              <p>
                To assess the satisfaction of public administrative services in Khanh Hoa (for example formality to issuing
                construction permits, business registration certificates, and investment certificates…), we conducted
                individual interviews with questionnaires to gather their feedback.
              </p>
              <ul class="list-disc space-y-4 pl-5">
                <li>
                  <em>
                    <strong>Survey of Agricultural Value Chain in Highland and Mekong Delta (2012-2014):</strong>
                  </em>
                </li>
              </ul>
              <p>
                As participants in the Global Competitiveness Facility for Vietnamese Enterprises (GCF), our K-Biz team
                surveyed farmers across several provinces to assess impacts on aquaculture, vegetables, coffee, cocoa, and
                rice production.
              </p>
            </div>
          </div>
          <!-- Image -->
          <div class="relative w-full h-[360px] md:h-full min-h-[360px] md:min-h-full overflow-hidden order-1 md:order-2">
            <img
              src="public/images/consulting3-specialized.jpg"
              alt="Professional workspace environment"
              class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 hover:scale-105"
            />
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

