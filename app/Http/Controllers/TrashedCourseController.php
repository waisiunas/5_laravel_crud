<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class TrashedCourseController extends Controller
{
    public function index()
    {
        return view('course.trashed', [
            'courses' => Course::onlyTrashed()->get(),
        ]);
    }

    public function recover(string $id) {
        // $course = Course::onlyTrashed()->where('id' , '=', $id)->latest();
        // $course = Course::onlyTrashed()->find($id);
        // $is_recovered = $course->restore();

        $is_recovered = Course::onlyTrashed()->find($id)->restore();

        if ($is_recovered) {
            return back()->with(['success' => 'Magic has been spelled!']);
        } else {
            return back()->with(['failure' => 'Magic has failed to spell!']);
        }
    }

    public function delete(string $id) {
        $is_deleted = Course::onlyTrashed()->find($id)->forceDelete();

        if ($is_deleted) {
            return back()->with(['success' => 'Magic has been spelled!']);
        } else {
            return back()->with(['failure' => 'Magic has failed to spell!']);
        }
    }
}
