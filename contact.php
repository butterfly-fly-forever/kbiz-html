<?php
$activePage = 'contact';
$pageTitle = 'Contact | K-Biz Consulting';
include 'templates/header.php';
?>


    <!-- Top: title + help info -->
    <section class="w-full py-16 md:py-20 px-6 md:px-16 lg:px-28 xl:px-40 2xl:px-52">
      <div class="grid grid-cols-1 items-start gap-10 lg:grid-cols-2 lg:gap-16">
        <h1 class="text-5xl font-bold text-[#005E2C] md:text-[72px] md:leading-none">Contact</h1>

        <div class="bg-[#E8FFF3] px-8 py-10 md:px-10 md:py-12">
          <!-- Custom Eyebrow -->
          <div class="mb-4 flex items-center gap-2">
            <svg width="10" height="10" viewBox="0 0 24 24" fill="#005E2C">
              <path d="M8 5v14l11-7z" />
            </svg>
            <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#005E2C]">
              How can we help?
            </span>
          </div>
          <div id="contact-details-container" class="mt-6 space-y-4 text-base leading-[1.6] text-[#005E2C]">
            <p id="contact-address">16A Le Quy Don Street, Nha Trang Ward, Khanh Hoa Province.</p>
            <p id="contact-phone"><?php echo htmlspecialchars($siteSettings["phone"]); ?></p>
            <div id="contact-emails" class="space-y-1">
              <p><a href="mailto:<?php echo htmlspecialchars($siteSettings["email"]); ?>" class="underline hover:text-[#B800FF] transition-colors"><?php echo htmlspecialchars($siteSettings["email"]); ?></a></p>
              <p><a href="mailto:info@kbiz.com.vn" class="underline hover:text-[#B800FF] transition-colors">info@kbiz.com.vn</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="px-6 md:px-16 lg:px-28 xl:px-40 2xl:px-52">
      <hr class="border-[#005E2C]/15" />
    </div>

    <!-- Form section -->
    <section class="w-full py-16 md:py-24 px-6 md:px-16 lg:px-28 xl:px-40 2xl:px-52">
      <div class="grid grid-cols-1 gap-12 lg:grid-cols-2 lg:gap-16 items-stretch">
        
        <!-- Left Column: Video -->
        <div class="relative w-full h-[360px] lg:h-full overflow-hidden rounded-sm bg-black shadow-lg">
          <video
            src="public/videos/contact.mp4"
            autoplay
            loop
            muted
            playsinline
            class="h-full w-full absolute inset-0 object-cover opacity-90"
          ></video>
          <!-- Play Button Overlay in center -->
          <div class="pointer-events-none absolute inset-0 flex items-center justify-center z-10">
            <div class="flex h-14 w-14 items-center justify-center rounded-full bg-black/80 shadow-md">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="white" class="ml-0.5">
                <path d="M8 5v14l11-7z" />
              </svg>
            </div>
          </div>
        </div>

        <!-- Right Column: Title + Line + Form -->
        <div class="flex flex-col w-full">
          <!-- Eyebrow -->
          <div class="mb-4 flex items-center gap-2">
            <svg width="10" height="10" viewBox="0 0 24 24" fill="#005E2C">
              <path d="M8 5v14l11-7z" />
            </svg>
            <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#005E2C]">
              Contact us
            </span>
          </div>
          <h2 class="mb-6 text-4xl font-bold text-[#005E2C] md:text-[56px] md:leading-[1.1] leading-tight">
            Tell us about your next project
          </h2>

          <!-- Green dividing line -->
          <hr class="border-[#B7FCD7] mb-8" />

          <!-- Form container with mint background -->
          <form
            id="contact-form"
            class="space-y-6 bg-[#E8FFF3] p-8 md:p-10 shadow-sm border border-[#B7FCD7]/30"
          >
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
              <label class="flex flex-col gap-2">
                <span class="text-xs font-mono font-bold uppercase tracking-wider text-[#005E2C]">
                  First name *
                </span>
                <input
                  type="text"
                  name="firstName"
                  required
                  class="border border-transparent bg-[#B7FCD7] px-4 py-3 text-sm text-[#005E2C] placeholder-[#005E2C]/50 outline-none focus:bg-[#B7FCD7]/90 rounded-none transition-all"
                />
              </label>
              <label class="flex flex-col gap-2">
                <span class="text-xs font-mono font-bold uppercase tracking-wider text-[#005E2C]">
                  Last name *
                </span>
                <input
                  type="text"
                  name="lastName"
                  required
                  class="border border-transparent bg-[#B7FCD7] px-4 py-3 text-sm text-[#005E2C] placeholder-[#005E2C]/50 outline-none focus:bg-[#B7FCD7]/90 rounded-none transition-all"
                />
              </label>
            </div>

            <label class="flex flex-col gap-2">
              <span class="text-xs font-mono font-bold uppercase tracking-wider text-[#005E2C]">Email *</span>
              <input
                type="email"
                name="email"
                required
                class="border border-transparent bg-[#B7FCD7] px-4 py-3 text-sm text-[#005E2C] placeholder-[#005E2C]/50 outline-none focus:bg-[#B7FCD7]/90 rounded-none transition-all"
              />
            </label>

            <label class="flex flex-col gap-2 relative">
              <span class="text-xs font-mono font-bold uppercase tracking-wider text-[#005E2C]">Phone</span>
              <div class="flex border border-transparent bg-[#B7FCD7] rounded-none relative">
                
                <!-- Trigger Button for Country Selector -->
                <button
                  type="button"
                  id="country-select-btn"
                  class="flex items-center gap-1.5 border-r border-[#005E2C]/15 px-3 text-sm text-[#005E2C] font-mono select-none outline-none focus:outline-none cursor-pointer"
                >
                  <span id="selected-flag" class="text-base select-none">🌐</span>
                  <span id="selected-code">+84</span>
                  <svg id="country-chevron" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="transition-transform duration-200">
                    <path d="M6 9l6 6 6-6" />
                  </svg>
                </button>
                
                <input
                  type="tel"
                  name="phone"
                  class="flex-1 bg-transparent px-4 py-3 text-sm text-[#005E2C] outline-none"
                />

                <!-- Country Dropdown (Opens upwards) -->
                <div
                  id="country-dropdown"
                  class="hidden absolute left-0 bottom-full mb-1 z-50 w-[280px] bg-[#B7FCD7] border border-[#005E2C]/20 shadow-xl flex flex-col transition-all"
                >
                  <!-- Search Box -->
                  <div class="flex items-center gap-2 px-3 py-2 border-b border-[#005E2C]/20 bg-[#B7FCD7]">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-[#005E2C]/70">
                      <circle cx="11" cy="11" r="8" />
                      <path d="M21 21l-4.35-4.35" />
                    </svg>
                    <input
                      type="text"
                      id="country-search"
                      placeholder="Search"
                      class="w-full bg-transparent text-sm text-[#005E2C] outline-none placeholder-[#005E2C]/50"
                    />
                  </div>
                  
                  <!-- Scrollable Country List -->
                  <div
                    id="country-list"
                    class="max-h-[220px] overflow-y-auto bg-[#B7FCD7] divide-y divide-[#005E2C]/5"
                  >
                    <!-- Populated dynamically via JS -->
                  </div>
                </div>

              </div>
            </label>

            <label class="flex flex-col gap-2">
              <span class="text-xs font-mono font-bold uppercase tracking-wider text-[#005E2C]">Message</span>
              <textarea
                name="message"
                rows="5"
                placeholder="This is a message"
                class="resize-y border border-transparent bg-[#B7FCD7] px-4 py-3 text-sm text-[#005E2C] placeholder-[#005E2C]/50 outline-none focus:bg-[#B7FCD7]/90 rounded-none transition-all"
              ></textarea>
            </label>

            <!-- Success Alert placeholder -->
            <div id="form-success-alert" class="hidden bg-[#B7FCD7] border border-[#005E2C]/20 text-[#005E2C] text-xs font-semibold p-4 rounded-none transition-all">
              Your message has been sent successfully to the Admin Dashboard!
            </div>

            <button
              type="submit"
              class="w-full bg-[#E7AAFF] py-4 text-sm font-bold uppercase tracking-widest text-[#3D0055] transition-colors hover:bg-[#d182ff] cursor-pointer"
            >
              Submit
            </button>
          </form>
        </div>

      </div>
    </section>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
      // ==========================================
      // 3. CUSTOM COUNTRY SELECTOR
      // ==========================================
      const countrySelectBtn = document.getElementById("country-select-btn");
      const countryChevron = document.getElementById("country-chevron");
      const countryDropdown = document.getElementById("country-dropdown");
      const countrySearch = document.getElementById("country-search");
      const countryList = document.getElementById("country-list");
      const selectedFlag = document.getElementById("selected-flag");
      const selectedCode = document.getElementById("selected-code");

      const countries = [
        { name: "Vietnam", code: "+84", flag: "🇻🇳" },
        { name: "Afghanistan", code: "+93", flag: "🇦🇫" },
        { name: "Aland Islands", code: "+358", flag: "🇦🇽" },
        { name: "Albania", code: "+355", flag: "🇦🇱" },
        { name: "Algeria", code: "+213", flag: "🇩🇿" },
        { name: "American Samoa", code: "+1684", flag: "🇦🇸" },
        { name: "Andorra", code: "+376", flag: "🇦🇩" },
        { name: "Angola", code: "+244", flag: "🇦🇴" },
        { name: "Argentina", code: "+54", flag: "🇦🇷" },
        { name: "Australia", code: "+61", flag: "🇦🇺" },
        { name: "Austria", code: "+43", flag: "🇦🇹" },
        { name: "Bangladesh", code: "+880", flag: "🇧🇩" },
        { name: "Belgium", code: "+32", flag: "🇧🇪" },
        { name: "Brazil", code: "+55", flag: "🇧🇷" },
        { name: "Canada", code: "+1", flag: "🇨🇦" },
        { name: "China", code: "+86", flag: "🇨🇳" },
        { name: "France", code: "+33", flag: "🇫🇷" },
        { name: "Germany", code: "+49", flag: "🇩🇪" },
        { name: "India", code: "+91", flag: "🇮🇳" },
        { name: "Indonesia", code: "+62", flag: "🇮🇩" },
        { name: "Japan", code: "+81", flag: "🇯🇵" },
        { name: "Korea, Republic of", code: "+82", flag: "🇰🇷" },
        { name: "Malaysia", code: "+60", flag: "🇲🇾" },
        { name: "Singapore", code: "+65", flag: "🇸🇬" },
        { name: "Thailand", code: "+66", flag: "🇹🇭" },
        { name: "United Kingdom", code: "+44", flag: "🇬🇧" },
        { name: "United States", code: "+1", flag: "🇺🇸" }
      ];

      function renderCountryList(filterText = "") {
        countryList.innerHTML = "";
        const lowerFilter = filterText.toLowerCase();

        const filtered = countries.filter(function (c) {
          return c.name.toLowerCase().includes(lowerFilter) || c.code.includes(lowerFilter);
        });

        filtered.forEach(function (c) {
          const btn = document.createElement("button");
          btn.type = "button";
          btn.className = "w-full flex items-center gap-2.5 px-3 py-2 text-sm text-left hover:bg-[#005E2C]/10 transition-colors text-[#005E2C] font-sans";
          btn.innerHTML = '<span class="text-base shrink-0 select-none">' + c.flag + '</span><span class="truncate">' + c.name + ' ' + c.code + '</span>';
          
          btn.addEventListener("click", function () {
            selectedFlag.textContent = c.flag;
            selectedCode.textContent = c.code;
            closeDropdown();
          });
          countryList.appendChild(btn);
        });
      }

      function openDropdown() {
        countryDropdown.classList.remove("hidden");
        countryChevron.classList.add("rotate-180");
        countrySearch.focus();
        countrySearch.value = "";
        renderCountryList("");
      }

      function closeDropdown() {
        countryDropdown.classList.add("hidden");
        countryChevron.classList.remove("rotate-180");
      }

      countrySelectBtn.addEventListener("click", function (e) {
        e.stopPropagation();
        if (countryDropdown.classList.contains("hidden")) {
          openDropdown();
        } else {
          closeDropdown();
        }
      });

      countryDropdown.addEventListener("click", function (e) {
        e.stopPropagation();
      });

      countrySearch.addEventListener("input", function (e) {
        renderCountryList(e.target.value);
      });

      document.addEventListener("click", function () {
        closeDropdown();
      });

      renderCountryList("");


      // ==========================================
      // 4. FORM SUBMISSION
      // ==========================================
      const contactForm = document.getElementById("contact-form");
      const formSuccessAlert = document.getElementById("form-success-alert");
      let alertTimeout = null;

      contactForm.addEventListener("submit", function (e) {
        e.preventDefault();
        const formData = new FormData(contactForm);
        const firstName = formData.get("firstName");
        const lastName = formData.get("lastName");
        const email = formData.get("email");
        const rawPhone = formData.get("phone");
        const countryCode = selectedCode.textContent;
        const phone = rawPhone ? (countryCode + " " + rawPhone) : "";
        const message = formData.get("message");
        const newMsg = {
          id: Date.now().toString(),
          firstName: firstName,
          lastName: lastName,
          email: email,
          phone: phone,
          message: message,
          read: false,
          createdAt: new Date().toISOString()
        };
        fetch('api/save_messages.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(newMsg)
        })
        .then(res => res.json())
        .then(data => {
          if (data.success) {
            formSuccessAlert.classList.remove("hidden");
            contactForm.reset();
            if (alertTimeout) clearTimeout(alertTimeout);
            alertTimeout = setTimeout(function () {
              formSuccessAlert.classList.add("hidden");
            }, 5000);
          } else {
            alert("Gửi tin nhắn thất bại. Vui lòng thử lại.");
          }
        })
        .catch(err => {
          console.error(err);
          alert("Lỗi kết nối máy chủ.");
        });
      });
    });
</script>
<?php include 'templates/footer.php'; ?>


