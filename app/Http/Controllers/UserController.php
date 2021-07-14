<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\Phone;
use  App\Models\User;
use  App\Models\Post;
use  App\Models\Comment;

// one to  one  user and phone
class UserController extends Controller
{
    public function insert(){

        $p = new Phone();
        $u = new User();

        $p->phone = '23369456';

        $u->name = 'arij';
        $u->email ='arij@gmail.com';
        $u->password ='azertyuiop';

        $u->save();
        $u->phone()->save($p);

        return 'ok';

        
    }

    public function getuserphone($id){
        $p = User::find($id)->phone;
        dd($p);
    }

    // one to  many     post and  commment   chaque post has many comment 

    public function addpost(){

     $p2 = new Post();

     $p2->designation = "article";
     $p2->save();

     return 'success';
    }

  
/******************************************* */

//  relation hasMany 
    public function addcomment($id){
        $post = new Post();
        $comment = new Comment();


        $post= Post::find($id);
        $comment->comment ='new comment2';
        $post->comments()->save($comment);

     return 'success';
        
    }
}
