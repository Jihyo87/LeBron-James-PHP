<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/CMS TASK/includes/helpers.php'; ?>
<?php foreach($feedback as $feedbacks): ?>
    <section class="feedbackmain1">
        <blockquote>
            <p><?php echo $feedbacks['message']; ?></p>

            <?php if (!empty($feedbacks['image'])): ?>
                <img src="uploads/<?php echo $feedbacks['image']; ?>" alt="Uploaded Image" style="max-width: 200px; display: block; margin-top: 10px;">
            <?php endif; ?>

            <form action="?" method="post" >
                <input type="hidden" name="deletejoke" value="<?php echo $feedbacks['feedback_id']; ?>">
                <footer>— <?php echo $feedbacks['full_name']; ?> (<?php echo $feedbacks['email']; ?>)</footer>
                <button type="submit">Delete</button>
            </form>
        </blockquote>
    </section>
<?php endforeach; ?>

