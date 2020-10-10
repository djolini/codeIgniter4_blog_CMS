<section>

  <?php
  $session = \Config\Services::session();
   ?>
   <?php if (isset($session->success)): ?>
     <div class="alert alert-success text-center alert-dismissible fade show mb-0 role='0' ">
        <?= $session->success ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
     </div>
   <?php endif; ?>
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-4">Ci4 Blog</h1>
      <p class="lead">Made by : Djordje Milicevic,Full stack developer</p>
      <hr class="my-4">
      <p>Made by : Djordje Milicevic,Full stack developer</p>
      <a class="btn btn-primary btn-lg" href="https://www.linkedin.com/in/djordje-milicevic-82a009166/" role="button">LinkedIn Profile</a>
  </div>
</div>
</section>

<section class="blog-section text-center">
  <div class="container">
      <?php if ($news): ?>
        <?= "<h2> Posts: </h2>" ?>
        <?php foreach ($news as $newsItem): ?>
          <h3><a href="/blog/<?= $newsItem['slug'] ?>"> <?= $newsItem['title'] ?>  </a></h3>
        <?php endforeach; ?>
        <?php else: ?>
          <p class="text-center">No posts have been found.</p>
      <?php endif; ?>


     </div>
</section>
