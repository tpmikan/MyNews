<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

use App\News;

class NewsController extends Controller
{
    public function index(Request $request)
    {
      \Log::info('ログ出力テスト');
      return News::all()->sortByDesc('updated_at');
    }
    
    public function add(Request $request)
    {
      $news = new News;
      $news->title = null;
      $news->body = $request->input("body");
    \Log::info(["Api\NewsController@endex:news"=>$news]);
      $news->save();
    }
    
    public function form(Request $request)
    {
      $news = new News;
      $news->title = $request->input("title");
      $news->body = $request->input("body");
    
      $news->save();
    }
    
}