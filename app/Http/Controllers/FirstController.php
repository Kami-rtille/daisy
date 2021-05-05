<?php
namespace App\Http\Controllers;
use App\Models\Photo;
use App\Models\Plantaes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class FirstController extends Controller
{
    public function index() {
        $photos = Photo::all(); // SELECT * from photos
        return view("firstcontroller.index", ["photos" => $photos]);
    }
  
    public function about() {
        return view("firstcontroller.about");
    }

    public function article($id) {
        return view("firstcontroller.article", ["id" => $id ]);
    }

    public function create() {
        return view("firstcontroller.create");
    }

    public function store(Request $request) {

        $validated = $request->validate([
            "title" => "required|min:3|max:255",
            "spec1" => "required|min:3|max:255",
            "spec2" => "required|min:3|max:255",
            "image" => "file|mimes:jpg,bmp,png"
        ]);

        $p = new Photo();
        $p->title = $request->input("title");
        $p->spec1 = $request->input("spec1");
        $p->spec2 = $request->input("spec2");
        $name = $request->file("image")->hashName(); 
        $request->file("image")->move("images/uploads/".Auth::id(), $name);
        $p->url = "/images/uploads/".Auth::id()."/$name";
        $p->user_id = Auth::id();
        $p->save(); //INSERT....
        return redirect("/");
    }

    public function users($id) {
        $user = User::findOrFail($id);
        return view("firstcontroller.users", ["user" => $user]);
    }
    public function changesuivi($id) {
        $user = User::findOrFail($id);
        Auth::user()->IFollowThem()->toggle($id);
        return back();
    }

    public function herbarium() {
        $plantaes = Plantaes::all(); 
        return view("firstcontroller.herbarium", ["plantaes" => $plantaes]);
    }
    public function ficheHerbier($id) {
        $plantae = Plantaes::findOrFail($id);
        return view("firstcontroller.ficheHerbier", ["plantae" => $plantae]);
    }
    public function herbariumsearch($search){
        $response = Http::get('https://trefle.io/api/v1/plants/search?token=9kzxH4ZVjL9YAkBi8_ox02G5YlzfDJbTR91UZA9BJMk&q='.$search);
       return view("firstcontroller.herbarium", ["responses" => $response->json()]);
    }

}
