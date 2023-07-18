<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //トップページ投稿リスト
    public function index(){
        $articles=Article::select("*")->orderBy("id","desc")->get();
        return view("guest.index",compact("articles"));
    }

    //編集ページ呼び出し
    public function edit(Request $request){
        $article=Article::find($request->edit_id);
        return view("guest.edit",compact("article"));
    }

    //削除ページ呼び出し
    public function delete(Request $request){
        $article=Article::find($request->delete_id);
        return view("guest.delete",compact("article"));
    }
    
    //新規登録処理
    public function create(Request $request){
        $article=new Article();
        $article->title=$request->title;
        $article->body=$request->body;
        $article->save();

        return redirect("/");
    }

    //変更保存処理
    public function change(Request $request){
        $article=Article::find($request->change_id);
        $article->title=$request->title;
        $article->body=$request->body;
        $article->save();

        return redirect("/");
    }

    //削除処理
    public function del_data(Request $request){
        Article::destroy($request->delete_id);

        return redirect("/");
    }
}