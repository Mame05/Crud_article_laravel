<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        dd($request->all());
        $request->validate(["
            'nom' => 'required'
            'description' => 'required'
            'date_creation' => 'required'
            'est_a_la_une'=> 'required|boolean'
            'image' => 'required'
        "]);
    
        $article= new Article();
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->date_creation = $request->date_creation;
        $article->est_a_la_une = $request->input('est_a_la_une')[0] ?? false; /*Cela permettra de récupérer la première valeur du tableau est_a_la_une. Si la case "oui" est cochée, elle aura la valeur "1" et sera donc considérée comme vraie. Si la case "non" est cochée, elle aura la valeur "0" et sera considérée comme fausse. Si aucune des cases n'est cochée, la valeur par défaut sera fausse.*/
        $article->image = $request->input('image');/*Assure l'affichage de l'image via l'url*/
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
        'est_a_la_une'=> 'required|boolean'
        'image' => 'required'
        "]);
        $article=  Article::find($request->id);
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->date_creation = $request->date_creation;
        $article->est_a_la_une = $request->input('est_a_la_une')[0] ?? false; 
        $article->image = $request->input('image');
        $article->update();
        
        return redirect('article')->with('status', "L'article a bien été modifié avec succés.");
       }
       public function supprimer_article($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('/article')->with('status', "L'article a bien été supprimer avec succés.");
       }
    
       public function detail_article($id){
        $article = DB::table('articles')->where('id', $id)->get();
        $article = Article::findOrFail($id);
        return view('article/detail',['article'=>$article]);
    } 
      
}

