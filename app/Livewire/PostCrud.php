<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

use function Pest\Laravel\session;

class PostCrud extends Component
{
     public string $pageTitle = 'Dashboard';

     public $posts,$title,$content,$postId;
     public $isEdit=false;
    public function render()
    {
        $this->posts=Post::latest()->get();
        return view('livewire.post-crud')->title($this->pageTitle);
    }
    public function store(){
        $this->validate([
            'title'=>'required',
            'content'=> 'required',
        ]);
        Post::create([
            'title'=> $this->title,
            'content'=> $this->content,
        ]);
        \session()->flash('message','Post Created Successfully');
        $this->resetInput();
    }
    public function resetInput(){
        $this->title="";
        $this->content= "";
        $this->isEdit=false;
        $this->postId="";
    }
    public function edit($id){
        $post=Post::findOrFail($id);
        $this->title=$post->title;
        $this->content=$post->content;
        $this->postId=$post->id;
        $this->isEdit=true;
    }
    public function delete($id){
        Post::findOrFail($id)->delete();
        \session()->flash("message","Post Deleted Successfully");
    }
    public function update(){
        $this->validate([
            "title"=> "required",
            "content"=> "required",
        ]);
        if($this->postId){
            $post=Post::findOrFail($this->postId);
            $post->update([
                "title"=> $this->title,
                "content"=> $this->content,
            ]);
            \session()->flash("message","Post Updated  Successfully!");
            $this->resetInput();
        }
    }
}
