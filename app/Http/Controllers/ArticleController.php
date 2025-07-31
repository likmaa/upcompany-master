<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $about= About::first();
        $about->update(['description' => '<p class="text-justify">Expert en dimensionnement et l’installation technique des systèmes photovoltaïques et leader dans le domaine de l’efficacité énergétique, nous croyons en la richesse infinie des sources d’énergies renouvelables pour un développement durable et la protection de notre planète.</p>
        <p class="text-center"><a href="/a-propos" class="theme-button-one">Découvrez-nous</a></p>']);
        
        $articles= $this->all();
        
        // dd($articles[0]);

        return view ('admin/actualite/index', ['articles' =>$articles]);
    }

    public function search(Request $request)
    {   
        $state= $request->state;
        $articles= Article::with(['image','createdBy']);
        if (isset($state)) {
            
            $articles->where('state',$state);
        }
        $articles=$articles->latest()->get(['id','title','state','created_at']);

        return $articles;
    }
    
    public function all()
    {
        return Article::with(['image','createdBy'])->latest()->get(['id','title','state','created_at']);
    }

    public function get(Article $article)
    {
        $article=$article->load(['image','createdBy']);
        return $article;
    }

    public function changeState(Request $request, Article $article)
    {
        $state= $request->state;

        switch ($state) {
            case 'publish':
                return $this->publishArticle($article);
                break;

            case 'unpublish':
                return $this->unpublishArticle($article);
                break;

            case 'archive':
                return $this->archiveArticle($article);
                break;

            case 'programmer':
                return $this->programmeArticle($article);
                break;

            case 'trash': 
                return $this->trashArticle($article);
                break;
            
            default:
                return ['action' =>'unknow','error' => 'Default case is selected'];
                break;
        }
    }

    public function publishArticle(Article $article)
    {
        $article->state=1;
        return ['action' =>'publish','completed' => $article->update()];
    }

    public function unpublishArticle(Article $article)
    {
        $article->state=0;
        return ['action' =>'unpublish','completed' => $article->update()];
    }

    public function archiveArticle(Article $article)
    {
        $article->state=2;
        return ['action' =>'archive','completed' => $article->save()];
    }

    public function trashArticle(Article $article)
    {
        $article->state=-2;

        return ['action'=>'trash','completed' => $article->save()];
    }

    public function programmeArticle(Article $article)
    {
        $article->state=3;

        return ['action' =>'programmer', 'completed' => $article->save()];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin/actualite/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $article = Article::create($request->only(['title','description','short_description']));
        // $article->alias = $article->id.'-'.Str::slug($article->title);

        // $article->save();
        if ($request->hasFile('image')) {
            # code...
            $fileUpload = $request->file('image');

            $fileName = $fileUpload->getClientOriginalName();

            $file = File::get($fileUpload);
            
            // dd($fileUpload);

            Storage::disk('images')->put('/blog/'.$fileName,$file);
            $article = $article->image()->create(['path' => 'images/blog/'.$fileName]);
        }


        return back()->with('success','article créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
        $article=$this->get($article);

        $categories=Categorie::all();

        return view('admin/actualite/show', compact('article','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
        // $this->parseDescription($request->input('description'));
        $params=$request->except(['description']);

    // dd(Carbon::createFromFormat('Y-m-d H:i', $params['publish_up'])/* ->toDateTimeString() */);
        // dd($params);

        $article->update($request->only(['title','description','short_description','state','publish_up']));
       

        if ($request->hasFile('image')) {

            $fileUpload = $request->file('image');

            $fileName = $fileUpload->getClientOriginalName();

            $file = File::get($fileUpload);
            
            // dd($fileUpload);

            Storage::disk('images')->put('/blog/'.$fileName,$file);
            $article = $article->image()->update(['path' => 'images/blog/'.$fileName]);
        }

        return back()->with('success',"Modification effectuée avec succèss");
    }

    public function parseDescription($description){
        $dom = new \DomDocument();

        // dd($params['description']);
        
        $dom->loadHtml('<!DOCTYPE html><html><body>'.$description.'</body></html>', LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $k => $img) {
            
            $data=$img->getAttribute('src');

            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $image_name= "/upload/" . time().$k.'.png';
            $path = public_path() . $image_name;
            // file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }
        $description = $dom->saveHTML();

        $description = str_replace('<!DOCTYPE html>', '',$description);
        $description = str_replace(array('<html><body>','</body></html>'), '',$description);

        // $description = str_replace(array("\r\n", "\n", "\r"), '', $description);

        // dd($description);

        return $description;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Article $article)
    {
        //
        optional($article->image()->first())->delete();

        $article->delete();

        return back()->with('success', "Suppression effectué avec succèss");
    }

}
