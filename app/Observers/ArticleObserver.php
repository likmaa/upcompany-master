<?php

namespace App\Observers;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ArticleObserver
{

    public function creating(Article $article)
    {
        if ($article->publish_up !=null) {
            
            $article->publish_up=Carbon::parse($article->publish_up)->toDateTimeString();
            $article->state=3; //programmer
        }

        $article->alias=Str::slug($article->title);

        // dd('creating',collect($article)->except(['descripiton']));
    }
    /**
     * Handle the article "created" event.
     *
     * @param  \App\Models\Article  $article
     * @return void
     */
    public function created(Article $article)
    {
        //
        $article->alias = $article->id.'-'.$article->alias;
        $article->created_by= Auth::user()->id;
        $article->save();
    }

    public function updating(Article $article)
    {
        
        if ($article->publish_up != null && $article->state !== 3) {
            
            $article->publish_up=Carbon::parse($article->publish_up)->toDateTimeString();
            $article->state=3; // Programmer
        }
        $article->updated_at = now();
        $article->updated_by= Auth::user()->id;

        // dd('updating',collect($article)->except(['description']));
    }

    /**
     * Handle the article "updated" event.
     *
     * @param  \App\Models\Article  $article
     * @return void
     */
    public function updated(Article $article)
    {
        //
    }

    public function saving(Article $article)
    {
        if ($article->publish_up != null && $article->state !== 3) {
            
            $article->publish_up=Carbon::parse($article->publish_up)->toDateTimeString();
            $article->state=3; // Programmer
        }
        $article->updated_at = now();
        $article->updated_by= Auth::user()->id;

        // dd('saving',collect($article)->except(['description']));
    }

    /**
     * Handle the article "deleted" event.
     *
     * @param  \App\Models\Article  $article
     * @return void
     */
    public function deleted(Article $article)
    {
        //
    }

    /**
     * Handle the article "restored" event.
     *
     * @param  \App\Models\Article  $article
     * @return void
     */
    public function restored(Article $article)
    {
        //
    }

    /**
     * Handle the article "force deleted" event.
     *
     * @param  \App\Models\Article  $article
     * @return void
     */
    public function forceDeleted(Article $article)
    {
        //
    }
}
