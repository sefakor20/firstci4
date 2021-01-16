
  <h1><?= $title ?></h1>

  <?php foreach($posts as $post): ?>
    <div>
      <h3><?= $post ?></h3>
      <img src="/assets/images/avatar1.jpeg" style="width: 200px; height:auto;" alt="">
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi neque, deleniti optio mollitia reprehenderit commodi adipisci cum, temporibus, quos facilis veritatis dolores nulla et ab id molestias esse sapiente maxime!</p>
    </div>
  <?php endforeach; ?>
