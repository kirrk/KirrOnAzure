<?php

//add custom meta boxes

  add_action ( 'add_meta_boxes', 'help_mbe_create' );

  function help_mbe_create() {
      //create the custom meta box within posts
    add_meta_box ( 'help-meta', 'Custom Here to Help meta box', 'help_mbe_function', 'post', 'normal', 'high' );

  }

  function help_mbe_function( $post ) {

    //retrieve metadata values if they exist
    $help_mbe_name = get_post_meta( $post->ID, '_help_mbe_name', true );
    $help_mbe_costume = get_post_meta( $post->ID, '_help_mbe_costume', true );

    echo 'Please fill out the information below';
    ?>

    <p>Name: <input type="text" name-"help_mbe_name" value="
        <?php echo esc_attr( $help_mbe_name ); ?>" /></p>
    <p>Costume:
    <select name="help_mbe_costume">
      <option value="vampire" <?php selected( $help_mbe_costume, 'vampire' ); ?>>
        Vampire
      </option>
    </select>
      <option value="zombie" <?php selected( $help_mbe_costume, 'zombie' ); ?>>
        Zombie
      </option>
      <option value="witch" <?php selected( $help_mbe_costume, 'witch' ); ?>>
        Witch
      </option>
    </select>
    </p>
    <?php
  }
  ?>

<?php

//hook to save the meta box data
add_action ( 'save_post', 'help_mbe_save_meta' );

function help_mbe_save_meta( $post_id ) {

  //verify the metadata is set
  if ( isset ( $_POST['help_mbe_name'] ) ) {

    //save the metadata
    update_post_meta( $post_id, '_help_mbe_name',
      strip_tags( $_POST['help_mbe_name'] ) );
    update_post_meta( $post_id, '_help_mbe_costume',
      strip_tags ( $_POST['help_mbe_costume'] ) );

  }
}
?>
