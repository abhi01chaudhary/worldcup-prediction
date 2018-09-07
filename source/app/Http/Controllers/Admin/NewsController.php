<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use File;
use App\Models\NewsImage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $news = News::orderBy('created_at', 'Desc')->get();
        return view('admin.news.index', compact('news'))->with('title', 'World cup | All News');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create')->with('title', 'World cup | Create News');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:2000',       
        ]);

        $input = $request->all();

        $destinationPath = 'image/news/';

        $thumbnailDestinationPath = 'image/news/thumbnail/';

        $mediumDestinationPath = 'image/news/medium/';

        $mediumLargeDestinationPath = 'image/news/mediumLarge/';

        $fullDestinationPath = 'image/news/full/';

        if ($request->file('thumbnail')) {

            $file = $request->file('thumbnail')->getClientOriginalName();

            $uploadedFile = $request->thumbnail;

            $thumbPath = $thumbnailDestinationPath . '/' . $file;

            $mediumPath = $mediumDestinationPath . '/' . $file;

            $mediumLargePath = $mediumLargeDestinationPath . '/' . $file;

            $fullPath = $fullDestinationPath . '/' . $file;

            Image::make($uploadedFile->getRealpath())->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save($thumbPath);

            Image::make($uploadedFile->getRealpath())->resize(250, 160, function ($constraint) {
                $constraint->aspectRatio();
            })->crop('205', '131')->save($mediumPath);

            Image::make($uploadedFile->getRealpath())->resize(409, 245, function ($constraint) {
                $constraint->aspectRatio();
            })->crop('310', '190')->save($mediumLargePath);

            Image::make($uploadedFile->getRealpath())->resize(800, 445, function ($constraint) {
                $constraint->aspectRatio();
            })->save($fullPath);

            File::delete($file);

            $image = str_random(6) . '_' . time() . '.' . $request->file('thumbnail')->getClientOriginalName();

            $input['thumbnail'] = $request->file('thumbnail')->move($destinationPath, $image);

            $input['thumbnail'] = str_replace('\\', '/', $input['thumbnail']);

        }

        $schedule_date = Carbon::parse($request['schedule_news'])->format('Y/m/d');

        $input['schedule_news'] = $schedule_date;

        $news = News::create($input);


        if ($news->thumbnail) {
            NewsImage::create([
                'news_id' => $news->id,
                'thumbnail_image' => $thumbPath,
                'medium_image' => $mediumPath,
                'mediumLarge_image' => $mediumLargePath,
                'full_image' => $fullPath
            ]);
        }

        session()->flash('message', 'News Created');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
