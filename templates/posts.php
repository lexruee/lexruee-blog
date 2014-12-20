<?php foreach($posts as $post): ?>
<div class="ui stacked blue primary segment">
    <h1 class="ui header">

        <div class="content">
            <a href="#posts/<?php echo $post->ugly_title(); ?>" onclick="app.post_page(<?php echo $post->id ?>)">
                <i class="comment outline icon"></i> <?php echo $post->title; ?>
            </a>
            <div class="sub header">
                <a class="author"><?php echo $post->user->username; ?></a> , <span class="date">Today at 5:42PM</span>
            </div>

        </div>
    </h1>
    <p>
        <?php echo $post->content; ?>
    </p>
    <a href="#posts/<?php echo $post->ugly_title(); ?>" onclick="app.post_page(<?php echo $post->id ?>)">
        <div class="column"><i class="comments icon"></i>Comments (<?php echo count($post->comments); ?>)</div>
    </a>
</div>
<?php endforeach; ?>

<!-- pagination -->
<div class="ui grid">
    <div class="three wide column"></div>
    <div class="ten wide column center aligned">
        <div class="ui pagination menu">
            <a class="icon item">
                <i class="left arrow icon"></i>
            </a>

            <?php foreach(range(1,$pages) as $page): ?>
                <a href="#posts/page/<?php echo $page; ?>" class="<?php echo $page == $current_page ? 'active ' : ''; ?> item page_posts" onclick="app.posts_page(<?php echo $page; ?>)">
                <?php echo $page; ?>
            </a>


            <?php endforeach; ?>

            <a class="icon item">
                <i class="right arrow icon"></i>
            </a>
        </div>
    </div>
    <div class="three wide column"></div>
</div>