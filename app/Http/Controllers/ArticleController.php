<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Acticles list displayed in the index
     *
     * @return $this
     */
    public function index()
    {
        $art=Article::latest()->published()->get();
       if($art)
       {
           return view('article.index')->with('article',$art);
       }
       else
       {
           echo '<h2>该类还没有发表任何文章</h2>';
       }
    }

    /**
     * single article displayed in the show
     *
     * @param $id
     * @return $this
     */
    public function show($id)
    {
        $art=Article::find($id);
        return view('article.show')->with('article',$art);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse |
     * \Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function add(Request $request)
    {
        $input=$request->all();
//        if(empty($input))
//        {
//        return view('article.add');
//        }
//        else
//        {
//            $input['publish_at']=Carbon::now();
//            print_r($input);exit;
            Article::create($input);
 /*         $art=new Article();
            foreach($input as $k=>$v)
            {
                  $art->$k=$v;
            }
            $art->save();
 */
            return redirect('/index');
//        }
    }

    /**
     * @param $id
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function edit($id,Request $request)
    {
        $art=Article::find($id);
        $input=$request->all();
        if(empty($input))
        {
            return view('article.edit')->with('article',$art);
        }
        else
        {
            $rs=$art->where('id','=',$id)->update($input);
            if($rs)
            {
                return redirect('/index');
            }
        }
    }
}
