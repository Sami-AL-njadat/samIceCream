@forelse($messages as $index => $message)
<tr data-id="{{ $message->id }}">
    <td style="color:var(--muted);font-size:0.78rem">{{ $index + 1 }}</td>
    <td class="td-name" @if($message->status == 'unread') style="color:#fff" @endif>
        @if($message->status == 'unread')
        <span style="display:inline-block;width:6px;height:6px;border-radius:50%;background:var(--pink);margin-right:6px;vertical-align:middle;box-shadow:0 0 6px var(--pink)"></span>
        @endif
        {{ $message->name }}
    </td>
    <td class="td-email">{{ $message->email }}</td>
    <td class="td-phone">{{ $message->phone }}</td>
    <td class="td-preview">{{ Str::limit($message->message, 55) }}</td>
    <td>
        <span class="badge {{ $message->status == 'read' ? 'badge-read' : 'badge-new' }}">
            {{ $message->status == 'read' ? 'Read' : '● New' }}
        </span>
    </td>
    <td class="td-date">{{ $message->created_at->format('M j, Y · H:i') }}</td>
    <td>
        <div class="td-actions">
            <button class="btn-action btn-view" title="View message" onclick="openModal({{ $message->id }})">
                <i class="fas fa-eye"></i>
            </button>
            <button class="btn-action btn-delete" title="Delete" onclick="confirmDelete({{ $message->id }})">
                <i class="fas fa-trash"></i>
            </button>
        </div>
    </td>
</tr>
@empty
<tr>
    <td colspan="8" style="text-align: center; padding: 40px; color: var(--muted);">
        <div class="empty-icon" style="font-size: 48px; margin-bottom: 16px;">📭</div>
        <p>No messages found</p>
    </td>
</tr>
@endforelse