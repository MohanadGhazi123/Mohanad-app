<form action="{{ route('posts.store') }}" method="post">
    @csrf
        <input type="text" name="postText">
        <input type="submit" value="submit">
</form>