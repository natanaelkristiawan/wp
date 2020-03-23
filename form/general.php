<div class="wrap">
<h1>General Setting Website</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'my-cool-plugin-settings-group' ); ?>
    <?php do_settings_sections( 'my-cool-plugin-settings-group' ); ?>


    <fieldset>
        <legend>Main Page</legend>

        <div class="form-group">
            <label>Site Title</label>
            <input type="text" name="blogname" value="<?php echo esc_attr( get_option('blogname') ); ?>" />
        </div>
    </fieldset>
    <?php submit_button(); ?>

</form>
</div>


<style type="text/css">
    fieldset {
  padding: 1em;
  font:80%/1 sans-serif;
  }

    .wrap {
        width: 100%;
    }

    .form-group {
        display: block;
        margin-bottom: 15px
    }

    .form-group  label {
        display: block;
        margin-bottom: 5px
    }

    .form-input {
        width: 100%
    }
</style>