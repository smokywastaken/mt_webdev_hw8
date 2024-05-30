<?php
use App\Models\Post;

$posts = Post::latest()->get();?>

@if(isset($posts) && $posts->count() > 0)
    @foreach($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                @if($post->user)
                    <h5 class="card-title">{{ $post->user->name }}</h5>
                @else
                    <h5 class="card-title text-muted">Unknown User</h5>
                @endif
                <p class="card-text">{{ $post->content }}</p>
                <p class="card-text">
                    <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                </p>
            </div>
        </div>
    @endforeach
@else
    <p>No posts available.</p>
@endif