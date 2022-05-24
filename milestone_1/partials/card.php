<?php foreach ($songs['response'] as $data) : ?>
    <div class="card col-2 ">
        <div class="card-img">
            <img src="<?= $data['poster'] ?>" alt="" />
        </div>
        <div class="card-text">
            <h3> <?= $data['title'] ?> </h3>
            <p> <?= $data['author'] ?> </p>
            <!-- <p>{{song.genre}}</p> -->
            <p><?= $data['year'] ?> </p>
        </div>
    </div>
<?php endforeach; ?>