<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\About;
use App\Models\Audit;
use App\Models\Offre;
use App\Models\Slide;
use App\Models\Article;
use App\Models\Produit;
use App\Models\Service;
use App\Mail\ContactMail;
use App\Models\Partenaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    //

    public function home(){

        $slides=Slide::with('image')->get();
        $about=About::with('image')->where('type','accueil')->first();
        $services=Service::all();
        $produits=Produit::with('image')->get();
        $articles=Article::published()->latest()->with('image')->limit(6)->get();
        $partenaires=Partenaire::with('image')->get();
        $recent_article=Article::with('image')->orderBy('id','desc')->limit(2)->get();
        $infos=Info::first();

    	return view('index',compact('slides','about','services','produits','articles','partenaires','recent_article','infos'));
    }

    public function apropos(){
        $partenaires=Partenaire::with('image')->get();
        $recent_article=Article::with('image')->orderBy('id','desc')->limit(2)->get();
        $abouts=About::where('type','about')->get();
        $infos=Info::first();
    	return view('about',compact('abouts','partenaires','recent_article','infos'));
    }

    // Services pages 

    public function autonome(){
        $produits=Produit::with('image')->get();
        $partenaires=Partenaire::with('image')->get();
        $recent_article=Article::with('image')->orderBy('id','desc')->limit(2)->get();
        $service=Service::with('images')->where('type','autonome')->first();
        $infos=Info::first();

        // dd($service);
        // dd(json_decode($service->images));
    	return view('services/autonome',compact('produits','service','partenaires','recent_article','infos'));
    }


    public function pme(){

        $produits=Produit::with('image')->get();
        $partenaires=Partenaire::with('image')->get();
        $recent_article=Article::with('image')->orderBy('id','desc')->limit(2)->get();
        $service=Service::with('images')->where('type','pme')->first();
        $infos=Info::first();
    	return view('services/pme',compact('produits','service','partenaires','recent_article','infos'));
    }

    public function exploitations()
    {   
        $produits=Produit::with('image')->get();
        $partenaires=Partenaire::with('image')->get();
        $recent_article=Article::with('image')->orderBy('id','desc')->limit(2)->get();
        $service=Service::with('images')->where('type','exploitations')->first();
        $infos=Info::first();
        return view('services/exploitations',compact('produits','service','partenaires','recent_article','infos'));
    }


    // OFFRES PAGES


    public function rurale()
    {
        $partenaires=Partenaire::with('image')->get();
        $recent_article=Article::with('image')->orderBy('id','desc')->limit(2)->get();
        $offre=Offre::with('image')->where('type','rurale')->first();
        $infos=Info::first();
        return view('offres.rurale',compact('offre','partenaires','recent_article','infos'));
    }


    public function eclairage()
    {
        $partenaires=Partenaire::with('image')->get();
        $recent_article=Article::with('image')->orderBy('id','desc')->limit(2)->get();
        $offre=Offre::with('image')->where('type','eclairage-led')->first();
        $infos=Info::first();
        return view('offres.eclairage-led',compact('offre','partenaires','recent_article','infos'));
    }

    public function kitSolaire()
    {
        $partenaires=Partenaire::with('image')->get();
        $recent_article=Article::with('image')->orderBy('id','desc')->limit(2)->get();
        $offre=Offre::with('image')->where('type','kit-solaire')->first();
        $infos=Info::first();
        return view('offres.kit-solaire',compact('offre','partenaires','recent_article','infos'));
    }



    public function audit(){
        $partenaires=Partenaire::with('image')->get();
        $audit=Audit::first();
        $recent_article=Article::with('image')->orderBy('id','desc')->limit(2)->get();
        $infos=Info::first();

        return view('audit',compact('audit','partenaires','recent_article','infos'));
    }


    public function contact(){
        $partenaires=Partenaire::with('image')->get();
        $recent_article=Article::with('image')->orderBy('id','desc')->limit(2)->get();
        $infos=Info::first();

    	return view('contact',compact('partenaires','recent_article','infos'));
    }


    public function ajaxcontat(Request $request)
    {
        $validator= Validator::make($request->only(['name','email','phone','subject','message','g-recaptcha-response']),
        [
            'g-recaptcha-response' => 'required|recaptcha',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            
            return response(['errors' => $validator->errors()]);
        }
        
        $from=$request->email;
        $to=$request->email;
        $name=$request->name;
        $subject=$request->subject;
        
        $data=[
            'name'=>$request->name,
            'subject'=>$request->subject,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
        ];

        // Mail::send('admin.email.contact',['data' =>$data] ,function($email) use($from,$name,$subject){
        //     $email->from($from, $name);
        //     $email->to('contact@upcompany.co');
        //     $email->subject("Upcompany Site Web-".$subject);
        // });
        Mail::to('contact@upcompany.co','Contact Upcompany')->send(new ContactMail($data));
        return response(['status' =>true, 'request' => $request->all()]);
    }

    public function singleArticle($alias)
    {
        $partenaires=Partenaire::with('image')->get();
        $recent_article=Article::with('image')->orderBy('id','desc')->limit(2)->get();
        $infos=Info::first();

        $val=explode('-', $alias);
        $article = Article::with('image')->find($val[0]);

        return view('article-details',compact('article','partenaires','recent_article','infos'));
    }
}
