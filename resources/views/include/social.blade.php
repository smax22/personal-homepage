<div class="social-icons">
    <a href="mailto:?subject={{ $post->title }}&body=Check out this site I came across {{ route('blog.post', ['post_id' => $post->id, '$seo_url' => str_replace(' ', '-', $post->title)]) }}"><span class="fa fa-envelope"></span></a>
    <a href="http://www.facebook.com/share.php?u={{ route('blog.post', ['post_id' => $post->id, '$seo_url' => str_replace(' ', '-', $post->title)]) }}&title={{ $post->title }}"><span class="fa fa-facebook-square"></span></a>
    <a href="http://twitter.com/intent/tweet?status={{ $post->title }}+{{ route('blog.post', ['post_id' => $post->id, '$seo_url' => str_replace(' ', '-', $post->title)]) }}"><span class="fa fa-twitter-square"></span></a>
    <a href="http://www.linkedin.com/shareArticle?mini=true&url={{ route('blog.post', ['post_id' => $post->id, '$seo_url' => str_replace(' ', '-', $post->title)]) }}&title={{ $post->title }}&source=http://www.up-webservices.com"><span class="fa fa-linkedin-square"></span></a>
</div>

