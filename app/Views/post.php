<section class="text-center">
  <div class="container">
      <article class="blog-post">
        <h1> <?= $post['title'] ?></h1>
        <div class="details">
          Posted on: <?= date('M d Y', strtotime($post['timestamp'])) ?> by someone..<br>
        <?="<i>". $post['body'] ."</i><hr> "?>
      </article>
    </div>
  </div>
</section>
