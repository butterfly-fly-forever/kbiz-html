<?php
require_once __DIR__ . '/../templates/auth.php';
$adminActivePage = 'messages';
$adminPageTitle = 'Messages | K-Biz Admin';
include 'admin-header.php';
?>


  <!-- Main Content Area -->
  <main class="flex-1 flex flex-col">
    <div class="flex-1 w-full px-6 md:px-16 py-10 max-w-7xl mx-auto flex flex-col">
      
      <!-- Title -->
      <h1 class="text-[34px] font-medium tracking-tight text-gray-900 font-sans mb-8">
        Messages
      </h1>

      <!-- Main Full-width Container Card -->
      <div class="bg-white border border-slate-300 rounded-lg overflow-hidden flex flex-col p-8 shadow-2xs min-h-[140px] justify-center">
        <div id="messages-container" class="space-y-6">
          <!-- Will be populated dynamically by JS -->
        </div>
      </div>

    </div>
  </main>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      localStorage.setItem("kbiz_messages", JSON.stringify(<?php echo file_exists('../data/messages.json') ? file_get_contents('../data/messages.json') : '[]'; ?>));

      
      const container = document.getElementById("messages-container");
      let messages = [];

      // Load messages
      function loadMessages() {
        const saved = localStorage.getItem("kbiz_messages");
        if (saved) {
          try {
            messages = JSON.parse(saved);
          } catch (e) {
            console.error("Failed to parse LocalStorage messages:", e);
          }
        } else {
          // SEED DATA FOR DEMO PURPOSES
          const defaultMessages = [
            {
              id: "m1",
              firstName: "John",
              lastName: "Doe",
              email: "johndoe@example.com",
              phone: "+82 10-1234-5678",
              message: "Hello, I am interested in your consulting services for market entry in Vietnam. Could you please send me more information about your packages?",
              read: false,
              createdAt: new Date(Date.now() - 3600000 * 4).toISOString()
            },
            {
              id: "m2",
              firstName: "Minji",
              lastName: "Kim",
              email: "minji.kim@kbiz.co.kr",
              phone: "+82 2-987-6543",
              message: "Congratulations on the launch of your new website! Everything looks very professional. I would like to schedule a quick call next week to discuss potential partnership opportunities.",
              read: true,
              createdAt: new Date(Date.now() - 3600000 * 24 * 2).toISOString()
            }
          ];
          messages = defaultMessages;
          localStorage.setItem("kbiz_messages", JSON.stringify(defaultMessages));
        }
      }

      function saveAndRender(newMessages) {
        messages = newMessages;
        localStorage.setItem("kbiz_messages", JSON.stringify(newMessages));
        fetch('../api/save_messages', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(newMessages)
        })
        .then(res => res.json())
        .then(data => {
          if (data.success) {
            renderMessages();
          } else {
            alert("Lỗi lưu dữ liệu lên máy chủ.");
          }
        });
      }

      function renderMessages() {
        if (messages.length === 0) {
          container.innerHTML = `
            <div class="text-sm text-gray-700 font-sans py-2">
              No messages yet.
            </div>
          `;
          return;
        }

        // Sort messages by date descending (newest first)
        const sortedMessages = [...messages].sort(function (a, b) {
          return new Date(b.createdAt).getTime() - new Date(a.createdAt).getTime();
        });

        container.innerHTML = sortedMessages.map(function (msg, idx) {
          const formattedDate = new Date(msg.createdAt).toLocaleString();
          const nameClass = msg.read ? 'text-gray-600' : 'text-gray-900 font-bold';
          const borderClass = idx > 0 ? 'pt-6 border-t border-slate-100' : '';
          const newBadge = !msg.read
            ? `<span class="bg-green-50 text-green-700 text-[10px] font-bold px-2 py-0.5 rounded-full uppercase border border-green-200">New</span>`
            : '';
          const phoneBlock = msg.phone ? `<span class="ml-3">Phone: ${msg.phone}</span>` : '';
          const mailIcon = msg.read ? 'mail-open' : 'mail';
          const btnClass = msg.read
            ? 'border-gray-200 text-gray-400 hover:bg-gray-50 hover:text-gray-600'
            : 'border-green-200 bg-green-50 text-green-600 hover:bg-green-100';
          const btnTitle = msg.read ? 'Mark as Unread' : 'Mark as Read';
          
          return `
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 transition-all ${borderClass}">
              <!-- Message Details -->
              <div class="flex-1 space-y-2 w-full">
                <div class="flex items-center gap-3 flex-wrap">
                  <span class="${nameClass} text-sm">
                    ${msg.firstName} ${msg.lastName}
                  </span>
                  <span class="text-xs text-gray-400 font-mono">
                    ${formattedDate}
                  </span>
                  ${newBadge}
                </div>

                <div class="text-xs text-gray-400">
                  <span>
                    Email: <a href="mailto:${msg.email}" class="text-blue-600 hover:underline">${msg.email}</a>
                  </span>
                  ${phoneBlock}
                </div>

                <p class="text-sm text-gray-700 leading-relaxed bg-gray-50/50 p-4 border border-gray-100 rounded-sm whitespace-pre-wrap">
                  ${msg.message || '(Empty message body)'}
                </p>
              </div>

              <!-- Message Quick Actions -->
              <div class="flex items-center gap-2 self-end md:self-center shrink-0">
                <button
                  data-id="${msg.id}"
                  class="toggle-read-btn p-2 rounded-sm border cursor-pointer transition-colors ${btnClass}"
                  title="${btnTitle}"
                >
                  <i data-lucide="${mailIcon}" class="w-3.5 h-3.5"></i>
                </button>
                <button
                  data-id="${msg.id}"
                  class="delete-msg-btn p-2 rounded-sm border border-red-100 hover:bg-red-50 text-red-500 transition-colors cursor-pointer"
                  title="Delete Message"
                >
                  <i data-lucide="trash-2" class="w-3.5 h-3.5"></i>
                </button>
              </div>
            </div>
          `;
        }).join("");

        // Initialize Lucide Icons
        if (window.lucide) {
          lucide.createIcons();
        }

        // Attach event listeners for read status toggle
        document.querySelectorAll(".toggle-read-btn").forEach(function (btn) {
          btn.addEventListener("click", function () {
            const id = btn.getAttribute("data-id");
            const updated = messages.map(function (msg) {
              if (msg.id === id) {
                return { ...msg, read: !msg.read };
              }
              return msg;
            });
            saveAndRender(updated);
          });
        });

        // Attach event listeners for delete
        document.querySelectorAll(".delete-msg-btn").forEach(function (btn) {
          btn.addEventListener("click", function () {
            const id = btn.getAttribute("data-id");
            if (window.confirm("Delete this message permanently?")) {
              const filtered = messages.filter(function (msg) {
                return msg.id !== id;
              });
              saveAndRender(filtered);
            }
          });
        });
      }

      loadMessages();
      renderMessages();

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

