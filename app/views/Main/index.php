    <?php if(!empty($posts)):?>
    <?php foreach($posts as $post):?>
            <div class="container">
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
</div>
<?php endforeach; ?>
<?php endif; ?>
    