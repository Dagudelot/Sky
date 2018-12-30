<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FilesController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware(['role:Admin|client']);
    }

    public function create(){
    	return view('admin.files.create');
    }

    public function delete($id){
    	$file = File::findOrFail($id);

    	if(Storage::disk('local')->exists('/public/' . $this->getUserFolder() . '/' . $file->type . '/' . $file->name . '.' . $file->extension )){

    		$file->delete();

    	}

    	return back()->with('info', 'File successfully deleted');
    }

    public function store(Request $request){
    	$max_size = (int) ini_get('upload_max_filesize') * 10000;
    	$all_ext = implode(',', $this->allExtensions());

    	$this->validate(request(), [
    		'file' => 'required|file|mimes:' . $all_ext . '|max:' . $max_size
    	]);

    	$uploadFile = new File();

    	$file = $request->file('file');
    	$name = $request->file('file')->getClientOriginalName();
    	$ext = $file->getClientOriginalExtension();
    	$type = $this->getType($ext);

    	if(Storage::putFileAs('/public/' . $this->getUserFolder() . '/' . $type . '/', $file, $name . '.' . $ext)){
    		$uploadFile::create([
    			'name' => $name,
    			'type' => $type,
    			'extension' => $ext,
    			'user_id' => Auth::id()
    		]);
    	}

    	return back()->with('info', 'File successfully uploaded!');
    }

    private $img_ext = ['jpg', 'png', 'jpeg', 'gif', 'JPG', 'PNG', 'JPEG', 'GIF'];
    private $video_ext = ['mp4', 'avi', 'mpeg', 'MP4', 'AVI', 'MPEG'];
    private $doc_ext = ['doc', 'docx', 'pdf', 'odt', 'xls', 'xlsx', 'DOC', 'DOCX', 'PDF', 'ODT', 'XLS', 'XLSX'];
    private $audio_ext = ['mp3', 'mpga', 'wma', 'ogg', 'MP3', 'MPGA', 'WMA', 'OGG'];

    public function getType($ext){
    	if (in_array($ext, $this->img_ext)) {
    		return 'image';
    	}
    	if(in_array($ext, $this->video_ext)){
    		return 'video';
    	}
    	if(in_array($ext, $this->doc_ext)){
    		return 'document';
    	}
    	if(in_array($ext, $this->audio_ext)){
    		return 'audio';
    	}
    }

    private function allExtensions(){
    	return array_merge($this->img_ext, $this->video_ext, $this->doc_ext, $this->audio_ext);
    }

    private function getUserFolder(){
    	$folder = Auth::user()->name . '-' . Auth::id();
    	return str_slug($folder);
    }

    public function images(){
    	$images = File::whereUserId(auth()->id())->orderBy('id', 'desc')->where('type', '=', 'image')->get();
    	$folder = str_slug(Auth::user()->name . '-' . Auth::id());
    	return view('admin.files.types.images', compact('images', 'folder'));
    }

    public function videos(){
    	$videos = File::whereUserId(auth()->id())->orderBy('id', 'desc')->where('type', '=', 'video')->get();
    	$folder = str_slug(Auth::user()->name . '-' . Auth::id());
    	return view('admin.files.types.videos', compact('videos', 'folder'));
    }

    public function audios(){
    	$audios = File::whereUserId(auth()->id())->orderBy('id', 'desc')->where('type', '=', 'audio')->get();
    	$folder = str_slug(Auth::user()->name . '-' . Auth::id());
    	return view('admin.files.types.audios', compact('audios', 'folder'));
    }

    public function docs(){
    	$docs = File::whereUserId(auth()->id())->orderBy('id', 'desc')->where('type', '=', 'document')->get();
    	$folder = str_slug(Auth::user()->name . '-' . Auth::id());
    	return view('admin.files.types.docs', compact('docs', 'folder'));
    }
}
