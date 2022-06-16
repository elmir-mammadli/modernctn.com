<?php


namespace App\Http\Controllers;


use App\About;
use App\Brand;
use App\Inquire;
use App\PageSlide;
use App\Project;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainController extends Controller {

    public function index() {
        $slides = PageSlide::all();

        $projects = Project::query()
            ->take(5)
            ->orderBy('position')
            ->where('is_published', 1)
            ->get();

        $brands = Brand::query()
            ->orderBy('position')
            ->where('is_published', 1)
            ->get();

        return view('front.index', compact('slides', 'projects', 'brands'));
    }

    public function projects() {
        $projects = Project::query()
            ->orderBy('position')
            ->where('is_published', 1)
            ->get();

        return view('front.projects', compact('projects'));
    }

    public function project($id) {
        $project = Project::findOrFail($id);
        return view('front.project', compact('project'));
    }

    public function services() {
        $services = Service::query()
            ->orderBy('position')
            ->where('is_published', 1)
            ->get();

        return view('front.services', compact('services'));
    }

    public function about() {
        $about = About::query()->first();

        return view('front.about', compact('about'));
    }

    public function contact() {

        return view('front.contact');
    }

    public function inquire_store(Request $request) {
        $inq = new Inquire();
        $inq->full_name = $request->full_name;
        $inq->email = $request->email;
        $inq->message = $request->message;
        $inq->contact_number = $request->contact_number;
        $inq->save();

        return redirect()->back();
    }

    public function lang($lang) {
        if (in_array($lang, ['az', 'en'])) {
            Session::put('locale', $lang);
        }

        return redirect()->back();
    }
}
