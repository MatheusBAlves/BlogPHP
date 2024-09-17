<?php
require_once("./templates/header.php");

if (isset($_GET['id'])) {
  $postId = $_GET['id'];
  $currentPost;

  foreach ($posts as $post) {
    if ($post['id'] == $postId) {
      $currentPost = $post;
    };
  };
};
?>
<main class="post-container">
  <div class="content-container">
    <h1 class="main-title"><?= $currentPost['title'] ?></h1>
    <p class="post-description"><?= $currentPost['description'] ?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
    <p class="post-content">
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat deserunt quod iure nobis quas ut voluptatum adipisci sint. Quo mollitia facilis inventore quasi provident, unde repudiandae harum commodi. Qui, illo?
      Reiciendis cum consectetur placeat nisi minima tenetur, blanditiis maiores architecto nihil similique explicabo autem adipisci quo possimus velit itaque eveniet quas, eos voluptate incidunt voluptatibus quod dolorum assumenda! Vitae, rerum.
      Vitae necessitatibus officia ipsa commodi quis vero ab magni molestiae porro deserunt itaque similique nulla fugit accusantium, asperiores libero nihil suscipit molestias deleniti repellendus! Debitis amet ipsam unde commodi earum!
      Ab cum sapiente quam! Praesentium pariatur, ut molestiae repudiandae temporibus veritatis labore. Eos in accusamus obcaecati rem? Expedita, veritatis. Veritatis sunt accusantium totam ea facilis eius nihil quos sed ullam.
      Pariatur officia esse doloremque ex vel nostrum, soluta et modi debitis maxime eum similique rem cumque labore veniam doloribus eligendi distinctio porro? Accusantium ducimus molestias, numquam eius magni sed iure.
    </p>
    <p class="post-content">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate fuga dignissimos magnam rem possimus debitis libero? Non consequuntur ipsum est amet eaque voluptatum doloribus error alias optio. Omnis, soluta quasi.
      Voluptates eaque atque explicabo iste sequi cupiditate nobis qui aut ullam ipsum vero dolores quod cum consequuntur sunt similique necessitatibus officia, ipsa totam id distinctio numquam. Quae sed quas blanditiis?
      Cupiditate quod in ab optio, vero, consequuntur, unde deserunt dolore a repudiandae inventore officia blanditiis adipisci quas incidunt facilis nam accusamus doloremque eveniet maiores ipsum doloribus. Veritatis beatae deleniti sit!
      Consequuntur facilis sunt non in accusantium maiores dolorem, perspiciatis similique necessitatibus est ipsa soluta inventore nam doloremque atque asperiores! Omnis, illo quibusdam? Corrupti distinctio rerum perferendis tenetur. Maxime, exercitationem libero.
      Illo hic similique a architecto amet nemo, itaque magnam neque sapiente. Debitis molestias maiores quibusdam dolores nobis qui amet laudantium optio expedita nemo deleniti, sit et quidem vel aut ut!
    </p>
    <p class="post-content">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, ullam assumenda eius eos voluptatibus quae earum nihil ipsa, voluptatum quidem odio deserunt cupiditate error labore officiis possimus impedit facere placeat?
      Unde porro repudiandae mollitia ab omnis, fuga tempore neque nulla officiis, ex distinctio dolorum voluptatum facere obcaecati autem delectus quam, accusantium nihil earum rerum. A suscipit aut inventore laboriosam provident!
      Exercitationem voluptatibus ratione odit, eaque facere dignissimos itaque, corporis dolore minima voluptatum quibusdam qui. Sed dicta similique voluptatum mollitia. Veniam obcaecati vero velit sequi, eligendi optio quidem incidunt sunt voluptatem.
      Hic expedita numquam enim non, sunt dicta repudiandae nemo totam voluptatum omnis quaerat quo molestias dolore ad optio rem, cum quisquam incidunt possimus facere nam mollitia quod explicabo. Ea, velit.
      Deserunt, doloribus cupiditate! Consequatur sunt aspernatur qui ut suscipit possimus iste ab id, repellat incidunt nostrum quia doloremque inventore distinctio nisi voluptatum exercitationem quaerat vero itaque, quisquam dolore deleniti! Perferendis!
    </p>
  </div>
  <aside class="nav-container">
    <h3 class="tags-title">Tags</h3>
    <ul class="tags-list">
      <?php foreach ($currentPost['tags'] as $tag): ?>
        <li>
          <a href="#"><?= $tag ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
    <h3 class="categories-title">Categorias</h3>
    <ul class="categories-list">
      <?php foreach ($categories as $category): ?>
        <li>
          <a href="#"><?= $category ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </aside>
</main>

<?php
require_once("./templates/footer.php");
?>