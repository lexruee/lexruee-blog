
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
    <p>


    <div class="ui comments">
        <h3 class="ui dividing header">Comments</h3>
        <?php foreach($post->comments as $comment): ?>
            <div class="comment">
                <a class="avatar">
                    <h2 class="ui header"> <i class="user icon"></i> </h2>
                </a>
                <div class="content">
                    <a class="author"><?php echo $comment->username(); ?></a>
                    <div class="metadata">
                        <span class="date">Today at 5:42PM</span>
                    </div>
                    <div class="text">
                        How artistic!
                    </div>
                    <div class="actions">
                        <a class="reply">Reply</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <form class="ui reply form">
            <div class="field">
                <textarea></textarea>
            </div>
            <div class="ui blue labeled submit icon button">
                <i class="icon edit"></i> Add Reply
            </div>
        </form>
    </div>

    </p>
</div>
