<?php

namespace App\Mail;

use App\Models\Post;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CommentPost extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $post;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Post $post)
    {
        $this->user = $user;
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('dimas_fcn@outlook.com')
            ->subject('fizeram um comentário no seu post')
            ->markdown('emails.comment', [
                'url' => 'http://http://127.0.0.1:8000/post/'.$this->post->slug
            ]);
        // return $this->view('view.name');
    }
}
