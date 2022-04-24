<?php
  require_once('Author.php');

  class AuthorController extends Controller {
    public function index() {
    return view('author/index',['author' => Author::all(),'title'=>'Authors List']);
   }
   public function show($id) {
    $prof = Author::find($id);
    return view('author/show',
      ['author'=>$prof,
       'title'=>'Author Review']);
  }

  }
?>
