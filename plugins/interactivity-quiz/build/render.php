<?php
/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

 $answers = array();
 for ($i=0; $i < count($attributes['answers']); $i++) { 
    $answers[$i]['index'] = $i;
    $answers[$i]['text'] = $attributes['answers'][$i];
    $answers[$i]['correct'] = $attributes['correctAnswer'] == $i;
 }
 $ourContext = array('solved' => false, 'showCongrats' => false, 'showSorry' => false, 'answers' => $answers, 'correctAnswer' => $attributes['correctAnswer']);

?>

<div style="background-color: <?php echo $attributes['bgColor'] ?>" class="paying-attention-frontend"
    data-wp-interactive="create-block" <?php echo wp_interactivity_data_wp_context($ourContext) ?>>
    <p><?php echo $attributes['question'] ?></p>
    <ul>
        <?php
            foreach ($ourContext['answers'] as $answer) { ?>
        <li <?php echo wp_interactivity_data_wp_context($answer) ?> data-wp-on--click="actions.guessAttempt">
            <?php echo $answer['text'] ?></li>
        <?php }
        ?>
    </ul>
</div>