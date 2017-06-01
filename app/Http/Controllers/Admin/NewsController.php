<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class NewsController extends Controller
{
     public function showAllNews() {

         $currentUser = Auth::user();
         $users = User::all();;
         $news = News::all();
            //dd($users);
         return view('admin.news.list', array(
             'users'=>$users,
             'currentUser'=>$currentUser,
             'news'=>$news
         ));
     }

     public function showForm() {
        return view('admin.news.add');
     }

     public function showCurrentNews(Request $request, $id) {
         $news = News::find($id);
         return view('admin.news.edit', ['title' =>'Редактирование материала','news' => $news]);
     }

     public function createNews(Request $request) {

         $this->validate($request, [
             'name' => 'required'
         ]);

         $user = Auth::user();
         $data = $request->all();

         $result = $user->news()->create([
             'name' => $data['name'],
             'image' => $data['image'],
             'text' => $data['text'],
         ]);
         return redirect(route('news'))/*->back()*/->with('message', 'Материал добавлен');

     }

    public function updateNews(Request $request) {

        $this->validate($request, [
            'name' => 'required'
        ]);

        $user = Auth::user();
        $data = $request->except('_token');
        $news = News::find($data['id']);

        /*dd($data);*/

        $news->name = $data['name'];
        $news->image = $data['image'];
        $news->text = $data['text'];

        $result = $user->news()->save($news);

        return redirect()->back()->with('message', 'Материал обновлен');

    }


}
