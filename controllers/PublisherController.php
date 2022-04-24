<?php
  require_once('Publisher.php');

  class PublisherController extends Controller {
    public function index() {
    return view('publisher/index',['publishers' => Publisher::all(),'title'=>'Publisher List']);
   }
   public function show($id) {
    $prof = Publisher::find($id);
    return view('publisher/show',
      ['publisher'=>$prof,
       'title'=>'Publisher Detail']);
  }

  }
?>
