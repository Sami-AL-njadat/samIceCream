<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard — Sam Ice Cream Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
    <style>
        .search-loading {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--muted);
            display: none;
        }

        .search-bar.loading .search-loading {
            display: block;
        }

        .search-bar.loading .fa-magnifying-glass {
            display: none;
        }
    </style>
</head>

<body>

    <div class="layout">

        <!-- SIDEBAR -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-brand">
                <div class="brand-logo">
                    <div class="brand-icon">

                        <img src="/image/ABOUTIMG.webp" alt="icecreamlogo">
                    </div>
                    <div class="brand-text">
                        <h3>Sam Ice Cream</h3>
                        <span>Admin Panel</span>
                    </div>
                </div>
                <div class="sidebar-profile">
                    <div class="profile-avatar" id="avatarInitial">{{ substr(auth()->user()->name, 0, 1) }}</div>
                    <div class="profile-info">
                        <div class="profile-name" id="adminName">{{ auth()->user()->name }}</div>
                        <div class="profile-role">Administrator</div>
                    </div>
                    <div class="profile-status" title="Online"></div>
                </div>
            </div>

            <nav class="sidebar-nav">
                <div class="nav-label">Main</div>
                <a class="nav-item active" href="#">
                    <i class="fas fa-gauge"></i>
                    Dashboard
                </a>
                <a class="nav-item" href="#">
                    <i class="fas fa-envelope"></i>
                    Messages
                    <span class="nav-badge" id="navBadge">{{ $stats['unread'] }}</span>
                </a>

                <div class="nav-label">Site</div>
                <a class="nav-item" href="{{ url('/') }}" target="_blank">
                    <i class="fas fa-globe"></i>
                    View Website
                </a>
            </nav>

            <div class="sidebar-footer">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn-logout">
                        <i class="fas fa-arrow-right-from-bracket"></i>
                        Sign Out
                    </button>
                </form>
            </div>
        </aside>

        <!-- Sidebar overlay (mobile) -->
        <div class="sidebar-overlay" id="sidebarOverlay"></div>

        <!-- MAIN -->
        <div class="main">

            <!-- Topbar -->
            <div class="topbar">
                <div class="topbar-left">
                    <button class="menu-toggle" id="menuToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h1 class="topbar-title">Messages <span>Inbox</span></h1>
                </div>
                <div class="topbar-right">
                    <span class="topbar-date" id="topbarDate"></span>
                </div>
            </div>

            <!-- Content -->
            <div class="content">

                <!-- Stats -->
                <div class="stats-row">
                    <div class="stat-card">
                        <div class="stat-icon pink"><i class="fas fa-envelope"></i></div>
                        <div class="stat-value" id="statTotal">{{ $stats['total'] }}</div>
                        <div class="stat-label">Total Messages</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon red"><i class="fas fa-circle-dot"></i></div>
                        <div class="stat-value" id="statNew">{{ $stats['unread'] }}</div>
                        <div class="stat-label">Unread</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon green"><i class="fas fa-circle-check"></i></div>
                        <div class="stat-value" id="statRead">{{ $stats['read'] }}</div>
                        <div class="stat-label">Read</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon blue"><i class="fas fa-calendar-day"></i></div>
                        <div class="stat-value" id="statToday">{{ $stats['today'] }}</div>
                        <div class="stat-label">Today</div>
                    </div>
                </div>

                <!-- Messages table -->
                <div class="section-header">
                    <h2>Contact <span>Messages</span></h2>
                    <div class="header-actions">
                        <button class="btn-small btn-ghost" id="btnMarkAllRead">
                            <i class="fas fa-check-double"></i> Mark all read
                        </button>
                    </div>
                </div>

                <!-- Search Bar (Ajax) -->
                <div class="search-bar" id="searchBar">
                    <i class="fas fa-magnifying-glass"></i>
                    <i class="fas fa-spinner fa-spin search-loading"></i>
                    <input type="text" id="searchInput" placeholder="Search by name, email or message…"
                        autocomplete="off">
                </div>

                <!-- Messages Table -->
                <div class="table-wrapper">
                    <div class="table-scroll">
                        <table id="messagesTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Preview</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                                @include('admin.partials.message-rows', ['messages' => $messages])
                            </tbody>
                        </table>
                    </div>

                    <div class="empty-state" id="emptyState"
                        style="{{ $messages->count() > 0 ? 'display: none;' : '' }}">
                        <div class="empty-icon">📭</div>
                        <p>No messages found</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- VIEW MESSAGE MODAL -->
    <div class="modal-overlay" id="messageModal">
        <div class="modal-box">
            <div class="modal-header">
                <div class="modal-sender">
                    <h3 id="modalName">—</h3>
                    <div class="modal-meta">
                        <span><i class="fas fa-envelope"></i> <span id="modalEmail">—</span></span>
                        <span><i class="fas fa-phone"></i> <span id="modalPhone">—</span></span>
                        <span><i class="fas fa-clock"></i> <span id="modalDate">—</span></span>
                    </div>
                </div>
                <button class="modal-close" id="modalClose">
                    <i class="fas fa-xmark"></i>
                </button>
            </div>
            <div class="modal-divider"></div>
            <div class="modal-body">
                <div class="modal-msg-label">
                    <i class="fas fa-comment-dots"></i> Message
                </div>
                <div class="modal-message" id="modalMessage">—</div>
            </div>
            <div class="modal-footer">
                <button class="btn-modal-delete" id="modalDeleteBtn">
                    <i class="fas fa-trash"></i> Delete
                </button>
                <button class="btn-modal-close-main" id="modalCloseMain">
                    Close
                </button>
            </div>
        </div>
    </div>

    <!-- DELETE CONFIRM MODAL -->
    <div class="confirm-overlay" id="confirmModal">
        <div class="confirm-box">
            <div class="confirm-icon"><i class="fas fa-trash"></i></div>
            <h3>Delete Message?</h3>
            <p>This action cannot be undone. The message will be permanently removed.</p>
            <div class="confirm-btns">
                <button class="btn-cancel" id="confirmCancel">Cancel</button>
                <button class="btn-confirm-delete" id="confirmDelete">
                    <i class="fas fa-trash"></i> Delete
                </button>
            </div>
        </div>
    </div>

    <script>
        // ============================================
        // BLADE JAVASCRIPT WITH AJAX SEARCH
        // ============================================
        let messages = @json($messages);
        let currentMessageId = null;
        let searchTimeout = null;

        /** Match PHP: resources/views/admin/partials/message-rows.blade.php (M j, Y · H:i) */
        function formatInboxDate(iso) {
            const d = new Date(iso);
            const mon = d.toLocaleDateString('en-US', {
                month: 'short'
            });
            const day = d.getDate();
            const y = d.getFullYear();
            const h = String(d.getHours()).padStart(2, '0');
            const min = String(d.getMinutes()).padStart(2, '0');
            return `${mon} ${day}, ${y} · ${h}:${min}`;
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Set current date
            const now = new Date();
            document.getElementById('topbarDate').textContent =
                now.toLocaleDateString('en-US', {
                    weekday: 'short',
                    month: 'short',
                    day: 'numeric',
                    year: 'numeric'
                });

            // Ajax Search
            const searchInput = document.getElementById('searchInput');
            const searchBar = document.getElementById('searchBar');

            searchInput.addEventListener('input', function() {
                const query = this.value.trim();

                // Clear previous timeout
                clearTimeout(searchTimeout);

                // Show loading
                searchBar.classList.add('loading');

                // Set new timeout
                searchTimeout = setTimeout(() => {
                    if (query.length === 0) {
                        loadAllMessages();
                    } else {
                        searchMessages(query);
                    }
                }, 500);
            });

            // Mark all read
            document.getElementById('btnMarkAllRead').addEventListener('click', markAllRead);

            // Sidebar mobile
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            document.getElementById('menuToggle').addEventListener('click', () => {
                sidebar.classList.toggle('open');
                overlay.classList.toggle('show');
            });
            overlay.addEventListener('click', () => {
                sidebar.classList.remove('open');
                overlay.classList.remove('show');
            });

            // Modal close
            document.getElementById('modalClose').addEventListener('click', closeModal);
            document.getElementById('modalCloseMain').addEventListener('click', closeModal);
            document.getElementById('messageModal').addEventListener('click', function(e) {
                if (e.target === this) closeModal();
            });

            // Modal delete button
            document.getElementById('modalDeleteBtn').addEventListener('click', function() {
                if (currentMessageId) {
                    closeModal();
                    document.getElementById('confirmModal').classList.add('show');
                }
            });

            // Confirm modal
            document.getElementById('confirmCancel').addEventListener('click', () => {
                document.getElementById('confirmModal').classList.remove('show');
            });

            document.getElementById('confirmDelete').addEventListener('click', deleteMessage);

            // Escape key
            document.addEventListener('keydown', e => {
                if (e.key === 'Escape') {
                    closeModal();
                    document.getElementById('confirmModal').classList.remove('show');
                }
            });
        });

        // ============================================
        // AJAX FUNCTIONS
        // ============================================
        async function searchMessages(query) {
            try {
                const response = await fetch(
                    `{{ route('admin.messages.search.ajax') }}?q=${encodeURIComponent(query)}`, {
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json'
                        }
                    });

                const data = await response.json();

                // Update messages array
                messages = data.messages;

                // Update table
                updateTable(data.messages);

                // Update stats
                updateStats(data.stats);

            } catch (error) {
                console.error('Search error:', error);
            } finally {
                // Hide loading
                document.getElementById('searchBar').classList.remove('loading');
            }
        }

        async function loadAllMessages() {
            try {
                const response = await fetch(`{{ route('admin.messages.search.ajax') }}?q=`, {
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json'
                    }
                });

                const data = await response.json();

                // Update messages array
                messages = data.messages;

                // Update table
                updateTable(data.messages);

                // Update stats
                updateStats(data.stats);

            } catch (error) {
                console.error('Load error:', error);
            } finally {
                // Hide loading
                document.getElementById('searchBar').classList.remove('loading');
            }
        }

        async function markAsRead(id) {
            try {
                const response = await fetch(`/admin/messages/${id}/read`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }
                });

                const data = await response.json();

                if (response.ok) {
                    // Update message in local array
                    const message = messages.find(m => m.id === id);
                    if (message) {
                        message.status = 'read';
                    }

                    // Update UI
                    updateMessageStatus(id, 'read');

                    // Update stats from response
                    if (data.stats) {
                        updateStats(data.stats);
                    }
                }
            } catch (error) {
                console.error('Error marking as read:', error);
            }
        }

        async function markAllRead() {
            try {
                const response = await fetch(`{{ route('admin.messages.mark-all-read') }}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }
                });

                const data = await response.json();

                if (response.ok) {
                    // Update all messages in local array
                    messages.forEach(m => m.status = 'read');

                    // Update all rows in table
                    document.querySelectorAll('tr[data-id]').forEach(row => {
                        const id = row.dataset.id;
                        updateMessageStatus(id, 'read');
                    });

                    // Update stats from response
                    if (data.stats) {
                        updateStats(data.stats);
                    }

                    showNotification('All messages marked as read', 'success');
                }
            } catch (error) {
                console.error('Error marking all as read:', error);
                showNotification('Error marking messages as read', 'error');
            }
        }

        async function deleteMessage() {
            if (!currentMessageId) return;

            try {
                const response = await fetch(`/admin/messages/${currentMessageId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json'
                    }
                });

                const data = await response.json();

                if (response.ok) {
                    // Remove from messages array
                    messages = messages.filter(m => m.id !== currentMessageId);

                    // Remove row from table
                    const row = document.querySelector(`tr[data-id="${currentMessageId}"]`);
                    if (row) row.remove();

                    // Check if table is empty
                    if (messages.length === 0) {
                        document.getElementById('emptyState').style.display = 'block';
                    }

                    // Update stats from response
                    if (data.stats) {
                        updateStats(data.stats);
                    }

                    showNotification('Message deleted successfully', 'success');
                }
            } catch (error) {
                console.error('Error deleting message:', error);
                showNotification('Error deleting message', 'error');
            } finally {
                document.getElementById('confirmModal').classList.remove('show');
                currentMessageId = null;
            }
        }

        // ============================================
        // UI FUNCTIONS
        // ============================================
        function updateTable(newMessages) {
            const tbody = document.getElementById('tableBody');
            const emptyState = document.getElementById('emptyState');

            if (newMessages.length === 0) {
                tbody.innerHTML = '';
                emptyState.style.display = 'block';
                return;
            }

            emptyState.style.display = 'none';

            let html = '';
            newMessages.forEach((msg, index) => {
                const preview = msg.message.length > 55 ? msg.message.substring(0, 55) + '…' : msg.message;
                const date = formatInboxDate(msg.created_at);

                html += `
                    <tr data-id="${msg.id}">
                        <td style="color:var(--muted);font-size:0.78rem">${index + 1}</td>
                        <td class="td-name" ${msg.status === 'unread' ? 'style="color:#fff"' : ''}>
                            ${msg.status === 'unread' ? '<span style="display:inline-block;width:6px;height:6px;border-radius:50%;background:var(--pink);margin-right:6px;vertical-align:middle;box-shadow:0 0 6px var(--pink)"></span>' : ''}
                            ${escapeHtml(msg.name)}
                        </td>
                        <td class="td-email">${escapeHtml(msg.email)}</td>
                        <td class="td-phone">${escapeHtml(msg.phone)}</td>
                        <td class="td-preview">${escapeHtml(preview)}</td>
                        <td>
                            <span class="badge ${msg.status === 'read' ? 'badge-read' : 'badge-new'}">
                                ${msg.status === 'read' ? 'Read' : '● New'}
                            </span>
                        </td>
                        <td class="td-date">${date}</td>
                        <td>
                            <div class="td-actions">
                                <button class="btn-action btn-view" title="View message" onclick="openModal(${msg.id})">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn-action btn-delete" title="Delete" onclick="confirmDelete(${msg.id})">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                `;
            });

            tbody.innerHTML = html;
        }

        function updateStats(stats) {
            document.getElementById('statTotal').textContent = stats.total;
            document.getElementById('statNew').textContent = stats.unread;
            document.getElementById('statRead').textContent = stats.read;
            document.getElementById('statToday').textContent = stats.today;
            document.getElementById('navBadge').textContent = stats.unread;
        }

        function updateMessageStatus(id, status) {
            const row = document.querySelector(`tr[data-id="${id}"]`);
            if (!row) return;

            const nameCell = row.querySelector('.td-name');
            if (status === 'read') {
                nameCell.style.color = '';
                const dot = nameCell.querySelector('span');
                if (dot) dot.remove();
            }

            const badge = row.querySelector('.badge');
            badge.className = `badge ${status === 'read' ? 'badge-read' : 'badge-new'}`;
            badge.textContent = status === 'read' ? 'Read' : '● New';
        }

        // ============================================
        // MODAL FUNCTIONS
        // ============================================
        function openModal(id) {
            const message = messages.find(m => m.id === id);
            if (!message) return;

            currentMessageId = id;

            document.getElementById('modalName').textContent = message.name;
            document.getElementById('modalEmail').textContent = message.email;
            document.getElementById('modalPhone').textContent = message.phone;
            document.getElementById('modalDate').textContent = formatInboxDate(message.created_at);
            document.getElementById('modalMessage').textContent = message.message;

            // Mark as read if unread
            if (message.status === 'unread') {
                markAsRead(id);
            }

            document.getElementById('messageModal').classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('messageModal').classList.remove('show');
            document.body.style.overflow = '';
            currentMessageId = null;
        }

        function confirmDelete(id) {
            currentMessageId = id;
            document.getElementById('confirmModal').classList.add('show');
        }

        // ============================================
        // HELPER FUNCTIONS
        // ============================================
        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }

        function showNotification(message, type = 'info') {
            // يمكنك استخدام Toast أو alert مؤقتاً
            console.log(`[${type}] ${message}`);
        }
    </script>

</body>

</html>
