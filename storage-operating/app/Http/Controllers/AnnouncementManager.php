<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isEmpty;

class AnnouncementManager extends Controller
{
    function addAnnouncement() {
        return view('pages.addAnnouncement');
    }

    function editLastAnnouncement() {
        $announcement = Announcement::latest()->first();

        return view('pages.editLastAnnouncement', compact('announcement'));
    }

    function showAllAnnouncements() {
        $announcements = Announcement::all();

        return view('pages.showAllAnnouncement', compact('announcements'));
    }

    function usershowAllAnnouncements() {
        $announcements = Announcement::all();

        return view('pages.usershowAllAnnouncement', compact('announcements'));
    }

    function addAnnouncementPost(Request $request) {
        $acceptableData = $request->validate([
            'tittle' => 'required',
            'content' => 'required',
            'description' => 'nullable'
        ]);

        $announcement = Announcement::create([
            'tittle' => $acceptableData['tittle'],
            'content' => $acceptableData['content'],
            'description' => $acceptableData['description']
        ]);

        if(!$announcement){
            return redirect(route('addAnnouncement'))->with('error', 'Duyuru eklenemedi, tekrar deneyiniz');
        }
        return redirect(route('addAnnouncement'))->with('success', 'Duyuru başarıyla eklendi');
    }

    function editLastAnnouncementPost(Request $request) {
        $acceptableData = $request->validate([
            'tittle' => 'required',
            'content' => 'required',
            'description' => 'required'
        ]);

        $announcement = Announcement::latest()->first();

        $updateData = [];
        if (isset($acceptableData['tittle'])) {
            $updateData['tittle'] = $acceptableData['tittle'];
        }
        if (isset($acceptableData['content'])) {
            $updateData['content'] = $acceptableData['content'];
        }
        if (isset($acceptableData['description'])) {
            $updateData['description'] = $acceptableData['description'];
        }

        if (isEmpty($announcement)) {
            return redirect(route('editLastAnnouncement'))->with('error', 'Sistemde herhangi bir duyuru bulunamadı');
        } else {
            $announcement->update($updateData);
            return redirect(route('editLastAnnouncement'))->with('success', 'Son duyuru başarıyla güncellendi');
        }
    }

}
