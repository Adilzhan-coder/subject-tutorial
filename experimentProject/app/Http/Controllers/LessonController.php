<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;

class LessonController extends Controller
{
    public function index()
    {
        $lessons = Lesson::paginate(12);
        return view('lesson.index', [
            'lessons'=>$lessons
        ]);
    }
}
