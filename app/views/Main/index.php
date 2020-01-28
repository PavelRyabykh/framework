<?php if(!empty($posts)):?>
    <div class="container">
        <button class="btn btn-default" id="send">Кнопка</button>
    <?php foreach($posts as $post):?>

    <div class="card">
        <div class="card-header">
            <?=$post['name'];?>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p><?=$post['post'];?></p>
            </blockquote>
        </div>
    </div>

<?php endforeach; ?>
    </div>
<?php endif; ?>
    