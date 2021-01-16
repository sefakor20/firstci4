
  <h1 class="mb-5 mt-5"><?= $title ?></h1>

 <div class="row mb-5">
  <?php foreach($posts as $post): ?>
      <?= view_cell('\App\Libraries\Blog::postItem', ['title' => $post]) ?>
  <?php endforeach; ?>
 </div>
