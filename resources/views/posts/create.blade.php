<div class="container">
    <div class="card">
        <div class="card-header">Create a Post</div>
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" name="content" rows="3" placeholder="What's on your mind?" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Post</button>
            </form>
        </div>
    </div>
</div>