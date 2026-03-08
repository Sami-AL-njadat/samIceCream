<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Message sent successfully!'
        ]);
    }

    /**
     * عرض صفحة لوحة التحكم مع جميع الرسائل
     */
    public function dashboard()
    {
        $messages = Contact::orderBy('created_at', 'desc')->get();

        $stats = [
            'total' => Contact::count(),
            'unread' => Contact::where('status', 'unread')->count(),
            'read' => Contact::where('status', 'read')->count(),
            'today' => Contact::whereDate('created_at', today())->count(),
        ];

        return view('admin.dashboard.dashboard', compact('messages', 'stats'));
    }

    /**
     * تحديث حالة الرسالة إلى مقروءة
     */
    public function markAsRead(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->status = 'read';
        $contact->save();

        if ($request->wantsJson()) {
            return response()->json([
                'status' => true,
                'message' => 'Message marked as read',
                'stats' => [
                    'total' => Contact::count(),
                    'unread' => Contact::where('status', 'unread')->count(),
                    'read' => Contact::where('status', 'read')->count(),
                    'today' => Contact::whereDate('created_at', today())->count(),
                ]
            ]);
        }

        return redirect()->route('admin.dashboard')->with('success', 'Message marked as read');
    }

    /**
     * تحديث جميع الرسائل إلى مقروءة
     */
    public function markAllRead(Request $request)
    {
        Contact::where('status', 'unread')->update(['status' => 'read']);

        if ($request->wantsJson()) {
            return response()->json([
                'status' => true,
                'message' => 'All messages marked as read',
                'stats' => [
                    'total' => Contact::count(),
                    'unread' => 0,
                    'read' => Contact::count(),
                    'today' => Contact::whereDate('created_at', today())->count(),
                ]
            ]);
        }

        return redirect()->route('admin.dashboard')->with('success', 'All messages marked as read');
    }

    /**
     * حذف رسالة
     */
    public function destroy(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        if ($request->wantsJson()) {
            return response()->json([
                'status' => true,
                'message' => 'Message deleted successfully',
                'stats' => [
                    'total' => Contact::count(),
                    'unread' => Contact::where('status', 'unread')->count(),
                    'read' => Contact::where('status', 'read')->count(),
                    'today' => Contact::whereDate('created_at', today())->count(),
                ]
            ]);
        }

        return redirect()->route('admin.dashboard')->with('success', 'Message deleted successfully');
    }

    /**
     * البحث في الرسائل - Ajax
     */
    public function searchAjax(Request $request)
    {
        $query = $request->get('q');

        $messages = Contact::where('name', 'like', "%{$query}%")
            ->orWhere('email', 'like', "%{$query}%")
            ->orWhere('phone', 'like', "%{$query}%")
            ->orWhere('message', 'like', "%{$query}%")
            ->orderBy('created_at', 'desc')
            ->get();

        $stats = [
            'total' => $messages->count(),
            'unread' => $messages->where('status', 'unread')->count(),
            'read' => $messages->where('status', 'read')->count(),
            'today' => $messages->filter(function ($msg) {
                return $msg->created_at->isToday();
            })->count(),
        ];

        return response()->json([
            'messages' => $messages,
            'stats' => $stats
        ]);
    }
}
