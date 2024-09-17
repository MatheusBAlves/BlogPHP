<?php
require_once("./templates/header.php");
?>
<main>
  <div class="title-container">
    <h1>Blog</h1>
    <p>Blog de programação</p>
  </div>
  <div class="posts-container">
    <?php foreach ($posts as $post): ?>
      <div class="post-box">
        <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
        <h2 class="post-title">
          <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
        </h2>
        <p class="post-description">
          <?= $post['description'] ?>
        </p>
        <div class="tags-container">
          <?php foreach ($post['tags'] as $tag): ?>
            <a href="#"><?= $tag ?></a>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</main>
<?php

require_once("./templates/footer.php");
?>