<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function liste_article(){
        $articles = Article::all();
        return view('article/liste', compact('articles'));
    }
    public function ajouter_article(){
        return view('article/ajouter');
       }
    
       public function ajouter_article_traitement(Request $request){
        /*dd($request->all());*/
        $request->validate(["
            'nom' => 'required'
            'description' => 'required'
            'date_creation' => 'required'
            'est_a_la_une'=> 'required'
            'image' => 'required'
        "]);
    
        $article= new Article();
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->date_creation = $request->date_creation;
        $article->est_a_la_une = $request->est_a_la_une;
        $article->image = $request->image;
        $article->save();
    
        return redirect('/article')->with('status', "L'article a bien été ajouté avec succés.");
       }
       public function modifier_article($id){
        $articles = Article::find($id);
        return view('article/modifier', compact('articles'));
       }
    
       public function modifier_article_traitement(Request $request){
        /*dd($request->all());*/
        $request->validate(["
        'nom' => 'required'
        'description' => 'required'
        'date_creation' => 'required'
        'est_a_la_une'=> 'required'
        'image' => 'required'
        "]);
        $article=  Article::find($request->id);
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->date_creation = $request->date_creation;
        $article->est_a_la_une = $request->est_a_la_une;
        $article->image = $request->image;
        $article->update();
        
        return redirect('article')->with('status', "L'article a bien été modifié avec succés.");
       }
       public function supprimer_article($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('/article')->with('status', "L'article a bien été supprimer avec succés.");
       }
    
}
