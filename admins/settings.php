<?php
require_once __DIR__ . '/../templates/auth.php';
$adminActivePage = 'settings';
$adminPageTitle = 'Settings | K-Biz Admin';
include 'admin-header.php';
?>


  <!-- Main Content Area -->
  <main class="flex-1 flex flex-col">
    <div class="flex-1 w-full px-6 md:px-16 py-10 max-w-7xl mx-auto flex flex-col">
      
      <!-- Heading -->
      <h1 class="text-[34px] font-medium tracking-tight text-gray-900 font-sans mb-8">
        Settings
      </h1>

      <!-- Settings Grid - 2 equal columns -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
        
        <!-- Left Card: Contact details -->
        <div class="bg-white border border-slate-300 rounded-lg p-8 shadow-2xs flex flex-col justify-between">
          <form id="settings-form" class="space-y-6 flex-1 flex flex-col justify-between">
            <div class="space-y-6">
              <h2 class="text-sm font-semibold text-gray-800 font-sans">
                Contact details
              </h2>

              <!-- Email Input -->
              <label class="flex flex-col gap-2">
                <span class="text-[11px] font-bold text-gray-400 uppercase tracking-wider font-sans">
                  Email
                </span>
                <input
                  type="email"
                  id="settings-email"
                  required
                  class="w-full border border-slate-200 rounded px-4 py-2.5 text-sm text-gray-700 outline-none focus:border-[#3D0055] bg-white font-sans transition-colors"
                />
              </label>

              <!-- Phone Input -->
              <label class="flex flex-col gap-2">
                <span class="text-[11px] font-bold text-gray-400 uppercase tracking-wider font-sans">
                  Phone
                </span>
                <input
                  type="text"
                  id="settings-phone"
                  required
                  class="w-full border border-slate-200 rounded px-4 py-2.5 text-sm text-gray-700 outline-none focus:border-[#3D0055] bg-white font-sans transition-colors"
                />
              </label>
            </div>

            <!-- Save Button -->
            <button
              type="submit"
              id="settings-submit-btn"
              class="mt-8 w-full bg-[#5c2d82] hover:bg-[#4A2368] text-white text-xs font-bold px-6 py-3.5 rounded-sm transition-all uppercase tracking-wider font-sans cursor-pointer text-center"
            >
              Saved
            </button>
          </form>
        </div>

        <!-- Right Card: Sao lưu dữ liệu -->
        <div class="bg-white border border-slate-300 rounded-lg p-8 shadow-2xs flex flex-col justify-between">
          <div class="space-y-6 flex-1">
            <h2 class="text-sm font-semibold text-gray-800 font-sans">
              Sao lưu dữ liệu
            </h2>

            <!-- Side-by-side action buttons -->
            <div class="flex items-center gap-12 pt-8">
              <button
                type="button"
                id="export-json-btn"
                class="text-sm font-bold text-gray-900 hover:text-purple-700 hover:underline transition-colors font-sans cursor-pointer"
              >
                Export JSON
              </button>
              <button
                type="button"
                id="import-json-btn"
                class="text-sm font-bold text-gray-900 hover:text-purple-700 hover:underline transition-colors font-sans cursor-pointer"
              >
                Import JSON
              </button>
            </div>
          </div>
        </div>

      </div>

    </div>
  </main>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      localStorage.setItem("kbiz_settings", JSON.stringify(<?php echo file_exists('../data/settings.json') ? file_get_contents('../data/settings.json') : '{}'; ?>));

      
      const emailInput = document.getElementById("settings-email");
      const phoneInput = document.getElementById("settings-phone");
      const submitBtn = document.getElementById("settings-submit-btn");

      let email = 'kbizconsulting16@gmail.com';
      let phone = '(0258) 3516 343';
      let isSaved = true;

      // Load settings from localStorage
      function loadSettings() {
        const savedSettings = localStorage.getItem('kbiz_settings');
        if (savedSettings) {
          try {
            const parsed = JSON.parse(savedSettings);
            if (parsed.email) email = parsed.email;
            if (parsed.phone) phone = parsed.phone;
          } catch (e) {
            console.error("Failed to parse LocalStorage settings:", e);
          }
        }
      }

      function updateButtonState(saved) {
        isSaved = saved;
        if (isSaved) {
          submitBtn.textContent = "Saved";
        } else {
          submitBtn.textContent = "Save Changes";
        }
      }

      loadSettings();
      emailInput.value = email;
      phoneInput.value = phone;
      updateButtonState(true);

      // Input change triggers button status update
      emailInput.addEventListener("input", function() {
        updateButtonState(false);
      });
      phoneInput.addEventListener("input", function() {
        updateButtonState(false);
      });

      // Submit Form
      document.getElementById("settings-form").addEventListener("submit", function(e) {
        e.preventDefault();
        const newSettings = {
          email: emailInput.value,
          phone: phoneInput.value
        };
        localStorage.setItem("kbiz_settings", JSON.stringify(newSettings));
        fetch('../api/save_settings', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(newSettings)
        })
        .then(res => res.json())
        .then(data => {
          if (data.success) {
            updateButtonState(true);
            alert("Đã lưu cấu hình lên máy chủ thành công!");
          } else {
            alert("Lỗi lưu dữ liệu lên máy chủ.");
          }
        });
      });

      // Export JSON backup
      document.getElementById("export-json-btn").addEventListener("click", function() {
        const posts = localStorage.getItem('kbiz_posts') || '[]';
        const messages = localStorage.getItem('kbiz_messages') || '[]';
        const settings = localStorage.getItem('kbiz_settings') || '{}';

        const database = {
          posts: JSON.parse(posts),
          messages: JSON.parse(messages),
          settings: JSON.parse(settings)
        };

        const jsonString = "data:text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(database, null, 2));
        
        const downloadAnchor = document.createElement('a');
        downloadAnchor.setAttribute('href', jsonString);
        downloadAnchor.setAttribute('download', 'kbiz_backup.json');
        document.body.appendChild(downloadAnchor);
        downloadAnchor.click();
        downloadAnchor.remove();
      });

      // Import JSON backup
      const fileInput = document.getElementById("json-file-input");
      document.getElementById("import-json-btn").addEventListener("click", function() {
        fileInput.click();
      });

      fileInput.addEventListener("change", function(e) {
        const file = e.target.files[0];
        if (!file) return;

        const reader = new FileReader();
        reader.onload = function(event) {
          try {
            const data = JSON.parse(event.target.result);
            
            // Restore keys if present in files
            if (data.posts) {
              localStorage.setItem('kbiz_posts', JSON.stringify(data.posts));
            }
            if (data.messages) {
              localStorage.setItem('kbiz_messages', JSON.stringify(data.messages));
            }
            if (data.settings) {
              localStorage.setItem('kbiz_settings', JSON.stringify(data.settings));
            }

            alert('Database backup imported successfully! Reloading page to update state...');
            window.location.reload();
          } catch(err) {
            alert('Failed to parse import file. Make sure it is a valid kbiz_backup.json file!');
          }
        };
        reader.readAsText(file);
      });

      // Language Switcher Mock
      const langEnBtn = document.getElementById("lang-en-btn");
      const langViBtn = document.getElementById("lang-vi-btn");
      langEnBtn.addEventListener("click", function() {
        langEnBtn.className = "text-[10px] font-bold px-2 py-0.5 rounded-full transition-all cursor-pointer bg-black text-white";
        langViBtn.className = "text-[10px] font-bold px-2 py-0.5 rounded-full transition-all cursor-pointer text-gray-400 hover:text-gray-600";
      });
      langViBtn.addEventListener("click", function() {
        langViBtn.className = "text-[10px] font-bold px-2 py-0.5 rounded-full transition-all cursor-pointer bg-black text-white";
        langEnBtn.className = "text-[10px] font-bold px-2 py-0.5 rounded-full transition-all cursor-pointer text-gray-400 hover:text-gray-600";
      });

    });
  </script>
</body>
</html>

