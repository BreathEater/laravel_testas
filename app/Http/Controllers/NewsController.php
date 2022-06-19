<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() 
    {
        $news = News::latest()->paginate(10);

        return view('news.index', compact('news'));
    }

    public function create() 
    {
        return view('news.create');
    }

    public function show(News $news) 
    {
        return view('news.show', [
            'news' => $news
        ]);
    }

    public function store(Request $request) 
    {

            $request->validate([
                'title' => 'required',
                'active' => 'required',
            ]);
            News::create($request->all() );

            return redirect()->route('news.index')
            ->withSuccess(__('News item created successfully.'));
    
        

        
    }

    public function delete(News $news) 
    {
        $news->delete();

        return redirect()->route('news.index')
            ->withSuccess(__('News item deleted successfully.'));
    }

    public function edit(News $news) 
    {
        return view('news.edit', [
            'news' => $news
        ]);
    }
    public function update(Request $request) 
    {
        $request->validate([
            'title' => 'required',
            'active' => 'required',
        ]);
        News::update($request->all() );

        return redirect()->route('news.index')
            ->withSuccess(__('News item updated successfully.'));
    }


}
