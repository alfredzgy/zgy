<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index()
    {
        $art=new Article();
        if($first=$art->find(2))
        {
        echo $first->title;
        echo $first->content;
        echo $first->pid;
        return view('cs.cs')->with('article',$first);
        }
        else
        {
            return view('cs.cs');
        }
    }

    /**
     *
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addArticle()
    {
        if(empty($_POST))
        {
        return view('add.addArticle');
        }
        else
        {
            $published=new Carbon();
            $_POST['publish_at']=$published;
            $art=new Article();
            foreach($_POST as $k=>$v)
            {
                $art->$k=$v;
            }
            $rs=$art->save();
            if($rs)
            {
                return redirect('/test');
            }
        }
    }
}
