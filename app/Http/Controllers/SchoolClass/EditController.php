<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $id)
    {
        $title = "Sistem Sekolah - Mengedit Kelas";

        $majors = [
            ['id' => 1, 'code' => 'AKL'],
            ['id' => 2, 'code' => 'TKJ'],
            ['id' => 3, 'code' => 'BD'],
        ];

        $teachers = [
            ['id' => 1, 'name' => 'Budi Santoso'],
            ['id' => 2, 'name' => 'Siti Aminah'],
        ];

        return view('classes.edit', [
            'title' => $title,
            'majors' => $majors,
            'teachers' => $teachers
        ]);
    }
}
