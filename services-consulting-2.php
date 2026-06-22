<?php
$activePage = 'services-2';
$pageTitle = 'New Business Launching | K-Biz Consulting';
include 'templates/header.php';
?>

    <main class="w-full bg-white flex flex-col items-center">
      <div id="read-more-mount"></div>
    </main>
    <script>
    window.READ_MORE_CONFIG = {
      categoryTitle: "NEW BUSINESS LAUNCHING",
      headline: "K-Biz: Partnering with you from concept to reality",
      intro: "At K-Biz, our experienced team provides comprehensive support for starting a business that matches your business plan and the rules and regulations your company must comply with.",
      backLink: { href: "services.html", label: "Back to Services" },
      sections: [
        {
          title: "1. To grant the Enterprise Registration Certificate (ERC)",
          body: "<ul class=\"list-disc space-y-4 pl-5\"><li>K-Biz can assist you in selecting the appropriate company type (Limited Liability Company, Corporation, or others), choosing the business code based on your operating plan, and advising on the development of the Company Charter, Charter capital, and how to contribute charter capital.</li><li>We can also guide you on tax policy and declaration, as well as the necessary regulations that a start-up company must follow after receiving the Enterprise Registration Certificate, such as creating a Company stamp, registering for electronic invoices, registering for social insurance, and more.</li></ul>",
          image: "public/images/consulting2-differences.jpeg",
          imageAlt: "Business professional reviewing global market data"
        },
        {
          title: "2. To grant the sub-license",
          body: "<ul class=\"list-disc space-y-4 pl-5\"><li>According to the Investment Law of 2020, 228 business codes require specific conditions. These industries include restaurants, hotels, food processing, transportation, tour operators, construction, healthcare services, and more. Each industry and business code has specific requirements, such as personnel qualifications, construction and equipment standards, financial capabilities, or sub-licenses such as Food Hygiene and Safety Certificates, International Tour Operator Licenses, Construction Activity Qualification Certificates, or Healthcare Practice Licenses.</li><li>Understanding the specific requirements of the business line is crucial before registration. The K-Biz team is here to assist you in justifying the terms and conditions and helping you meet industry standards, obtain necessary licenses, and stay compliant with regulations.</li></ul>",
          image: "public/images/consulting2-sublicense.jpg",
          imageAlt: "Financial planning and business documentation"
        },
        {
          title: "Key Differences Between Foreign-Invested and Vietnamese Companies in Vietnam",
          titleSmall: true,
          textBg: "mint",
          body: "<p>While Vietnam has significantly opened its doors to foreign investment, foreign-invested companies (FICs) still face certain restrictions compared to domestic businesses. These limitations primarily stem from international commitments and domestic legal regulations.</p><p>According to Decree No. 31/2021/ND-CP, FICs are completely prohibited from investing in 25 specific sectors and are subject to conditional restrictions in 58 others, primarily to safeguard national security, economic interests, and cultural heritage.</p><p><strong>Key Market Access Conditions: </strong>Foreign investors may face ownership caps, be limited to specific investment methods (e.g., greenfield or M&amp;A), and encounter additional restrictions in sensitive sectors like distribution, entertainment, and real estate.</p><p><strong>Operational Restrictions:</strong></p><p>In addition to the market access conditions, foreign investors and foreign-invested companies in Vietnam may need to comply with specific requirements related to:</p><ul class=\"list-disc space-y-3 pl-5\"><li><strong>Land and Real Estate:</strong> Leasing, ownership, and trade of housing and real estate.</li><li><strong>Human Resources:</strong> Recruitment of foreign employees and obtaining work permits.</li><li><strong>Capital Acquisition:</strong> Obtaining foreign capital through charter capital contributions and foreign loans.</li></ul><p>Vietnam's investment landscape is dynamic. K-Biz offers legal and financial consulting to help foreign investors stay compliant and seize opportunities.</p>",
          image: "public/images/consulting2-erc.jpg",
          imageAlt: "Coastal city skyline in Vietnam"
        }
      ]
    };
  </script>
<?php include 'templates/footer.php'; ?>
