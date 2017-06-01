<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Client;
use App\News;
use App\OtherService;
use App\Page;
use App\Portfolio;
use App\Service;
/*use Mail;*/

class IndexController extends Controller
{
    //
    public function execute(Request $request) {

/*        if ($request->isMethod('post')) {

            $messages = [
                'required' => "Поле :attribute обязательно к заполнению",
                'email' => "Поле :attribute должно соответсвовать email адресу",
            ];

            $this->validate($request, [
                'email' => 'required|email',
                'name' => 'required|max:255',
                'text' => 'required'
            ], $messages );
        }

        
        $data = $request->all();

        //mail
        $result = Mail::send('site.email', ['data' => $data], function ($message) use($data) {

            $mail_admin = env('MAIL_ADMIN');

            $message->from($data['name'], $data['email']);
            $message->to($mail_admin)->subject('Question');
        });

        if ($result) {
            return redirect()->route('home')->with('status', 'Email is send');
        }*/


//dump($request);

        $clients = Client::take(4)->get();
        $news = News::get(array('name', 'image', 'text', 'created_at'));
        $otherServices = OtherService::all();
        $pages = Page::all();
        $portfolio = Portfolio::where('id', '<', 20)->get();
        $services = Service::all();

        //dd($other_services);
        $menu = array();

        $item = array('title'=>'TOP','alias'=>'top-content');
        array_push($menu, $item);

        $item = array('title'=>'SERVICES','alias'=>'services');
        array_push($menu, $item);

        $item = array('title'=>'USERS','alias'=>'more-services');
        array_push($menu, $item);

        $item = array('title'=>'PORTFOLIO','alias'=>'portfolio');
        array_push($menu, $item);

        $item = array('title'=>'CLIENTS','alias'=>'testimonials');
        array_push($menu, $item);

        $item = array('title'=>'NEWS','alias'=>'blog');
        array_push($menu, $item);

        $item = array('title'=>'CONTACT','alias'=>'footer');
        array_push($menu, $item);

        return view('site.index', array(
            'menu'=>$menu,
            'services'=>$services,
            'more-services'=>$otherServices,
            'portfolio'=>$portfolio,
            'clients'=>$clients,
            'news'=>$news
        ));
    }
}
