<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       kjhuer.com
 * @since      1.0.0
 *
 * @package    We_Are_Open
 * @subpackage We_Are_Open/admin/partials
 */
?>

<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
    <p>	<?php  _e( 'Fill out the table below to reflect your hours of operation.</br> 
                 This table uses the 24hour clock system (ex. 3:00PM = 15) The times can only be set by hour and half hour.</br>
                 For half hour use ".5". For "closed" enter the open and close fields for that day as "0"', $this->plugin_name );?>
</p>
    <form method="post" name="we_are_open_options" action="options.php">
        
        <?php
            $options = get_option($this->plugin_name);
        
        ?>
        
        
            <?php settings_fields($this->plugin_name); 
                do_settings_sections($this->plugin_name);?>
        <table>
            <tbody>
               <tr>
                   <th scope="col" id="day"><?php _e('Day',$this->plugin_name);?></th>
                   <th scope="col" id="open"><?php _e('Open',$this->plugin_name);?></th>
                   <th scope="col" id="close"><?php _e('Close',$this->plugin_name);?></th>
                </tr>   
                <tr>
                    <!-- settings for monday -->
                   <td><span><?php esc_attr_e('Monday', $this->plugin_name); ?></span></td>
                    <td>
                        <label for="<?php echo $this->plugin_name; ?>-monday-open">
                            <span class="scr-rd"><?php esc_attr_e('Monday Open', $this->plugin_name); ?></span>
                            <input type='number' min='0' max='23.5' step='0.5' aria-labelledby="open" id="<?php echo $this->plugin_name; ?>-monday-open" name="<?php echo $this->plugin_name; ?>[monday-open]" value="<?php echo $options['monday-open'] ?>"/>
                        </label>
                    </td>
                    <td>
                        <label for="<?php echo $this->plugin_name; ?>-monday-close">
                            <span class="scr-rd"><?php esc_attr_e('Monday Close', $this->plugin_name); ?></span>
                            <input type='number' min='0' max='23.5' step='0.5' aria-labelledby="close" id="<?php echo $this->plugin_name; ?>-monday-close" name="<?php echo $this->plugin_name; ?>[monday-close]" value="<?php echo $options['monday-close'] ?>"/>
                        </label>
                    </td>
                </tr> 
                
                <tr>
                    <!-- settings for tuesday -->
                   <td><span><?php esc_attr_e('Tuesday', $this->plugin_name); ?></span></td>
                    <td>
                        <label for="<?php echo $this->plugin_name; ?>-tuesday-open">
                            <span class="scr-rd"><?php esc_attr_e('Tuesday Open', $this->plugin_name); ?></span>
                            <input type='number' min='0' max='23.5' step='0.5' aria-labelledby="open" id="<?php echo $this->plugin_name; ?>-tuesday-open" name="<?php echo $this->plugin_name; ?>[tuesday-open]" value="<?php echo $options['tuesday-open'] ?>"/>
                        </label>
                    </td>
                    <td>
                        <label for="<?php echo $this->plugin_name; ?>-tuesday-close">
                            <span class="scr-rd"><?php esc_attr_e('Tuesday Close', $this->plugin_name); ?></span>
                            <input type='number' min='0' max='23.5' step='0.5'  aria-labelledby="close" id="<?php echo $this->plugin_name; ?>-tuesday-close" name="<?php echo $this->plugin_name; ?>[tuesday-close]" value="<?php echo $options['tuesday-close'] ?>"/>
                        </label>
                    </td>
                </tr>
                <tr>
                    <!-- settings for wednesday -->
                 <td><span><?php esc_attr_e('Wednesday', $this->plugin_name); ?></span></td>
                    <td>
                        <label for="<?php echo $this->plugin_name; ?>-wednesday-open">
                            <span class="scr-rd"><?php esc_attr_e('Wednesday Open', $this->plugin_name); ?></span>
                            <input type='number' min='0' max='23.5' step='0.5' aria-labelledby="open" id="<?php echo $this->plugin_name; ?>-wednesday-open" name="<?php echo $this->plugin_name; ?>[wednesday-open]" value="<?php echo $options['wednesday-open'] ?>"/>
                        </label>
                    </td>
                    <td>
                        <label for="<?php echo $this->plugin_name; ?>-wednesday-close">
                            <span class="scr-rd"><?php esc_attr_e('Wednesday Close', $this->plugin_name); ?></span>
                            <input type='number' min='0' max='23.5' step='0.5'  aria-labelledby="close" id="<?php echo $this->plugin_name; ?>-wednesday-close" name="<?php echo $this->plugin_name; ?>[wednesday-close]" value="<?php echo $options['wednesday-close'] ?>"/>
                        </label>
                    </td>
                </tr>
                <tr>
                    <!-- settings for thursday -->
                   <td><span><?php esc_attr_e('Thursday', $this->plugin_name); ?></span></td>
                    <td>
                        <label for="<?php echo $this->plugin_name; ?>-thursday-open">
                            <span class="scr-rd"><?php esc_attr_e('Thursday Open', $this->plugin_name); ?></span>
                            <input type='number' min='0' max='23.5' step='0.5' aria-labelledby="open" id="<?php echo $this->plugin_name; ?>-thursday-open" name="<?php echo $this->plugin_name; ?>[thursday-open]" value="<?php echo $options['thursday-open'] ?>"/>
                        </label>
                    </td>
                    <td>
                        <label for="<?php echo $this->plugin_name; ?>-thursday-close">
                            <span class="scr-rd"><?php esc_attr_e('Thursday Close', $this->plugin_name); ?></span>
                            <input type='number' min='0' max='23.5' step='0.5' aria-labelledby="close" id="<?php echo $this->plugin_name; ?>-thursday-close" name="<?php echo $this->plugin_name; ?>[thursday-close]" value="<?php echo $options['thursday-close'] ?>"/>
                        </label>
                    </td>
                </tr>
                <tr>
                    <!-- settings for friday -->
                   <td><span><?php esc_attr_e('Friday', $this->plugin_name); ?></span></td>
                    <td>
                        <label for="<?php echo $this->plugin_name; ?>-friday-open">
                            <span class="scr-rd"><?php esc_attr_e('Friday Open', $this->plugin_name); ?></span>
                            <input type='number' min='0' max='23.5' step='0.5' aria-labelledby="open" id="<?php echo $this->plugin_name; ?>-friday-open" name="<?php echo $this->plugin_name; ?>[friday-open]" value="<?php echo $options['friday-open'] ?>"/>
                        </label>
                    </td>
                    <td>
                        <label for="<?php echo $this->plugin_name; ?>-friday-close">
                            <span class="scr-rd"><?php esc_attr_e('Friday Close', $this->plugin_name); ?></span>
                            <input type='number' min='0' max='23.5' step='0.5' aria-labelledby="close"  id="<?php echo $this->plugin_name; ?>-friday-close" name="<?php echo $this->plugin_name; ?>[friday-close]" value="<?php echo $options['friday-close'] ?>"/>
                        </label>
                    </td>
                </tr>
                <tr>
                    <!-- settings for saturday -->
                    <td><span><?php esc_attr_e('Saturday', $this->plugin_name); ?></span></td>
                    <td>
                        <label for="<?php echo $this->plugin_name; ?>-saturday-open">
                            <span class="scr-rd"><?php esc_attr_e('Saturday Open', $this->plugin_name); ?></span>
                            <input type='number' min='0' max='23.5' step='0.5' aria-labelledby="open" id="<?php echo $this->plugin_name; ?>-saturday-open" name="<?php echo $this->plugin_name; ?>[saturday-open]" value="<?php echo $options['saturday-open'] ?>"/>
                        </label>
                    </td>
                    <td>
                        <label for="<?php echo $this->plugin_name; ?>-saturday-close">
                            <span class="scr-rd"><?php esc_attr_e('Saturday Close', $this->plugin_name); ?></span>
                            <input type='number' min='0' max='23.5' step='0.5'  aria-labelledby="close"  id="<?php echo $this->plugin_name; ?>-saturday-close" name="<?php echo $this->plugin_name; ?>[saturday-close]" value="<?php echo $options['saturday-close'] ?>"/>
                        </label>
                    </td>
                </tr> 
               <tr>
                    <!-- settings for sunday -->
                    <td><span><?php esc_attr_e('Sunday', $this->plugin_name); ?></span></td>
                    <td>
                        <label for="<?php echo $this->plugin_name; ?>-sunday-open">
                            <span class="scr-rd"><?php esc_attr_e('Sunday Open', $this->plugin_name); ?></span>
                            <input type='number' min='0' max='23.5' step='0.5' aria-labelledby="open" id="<?php echo $this->plugin_name; ?>-sunday-open" name="<?php echo $this->plugin_name; ?>[sunday-open]" value="<?php echo $options['sunday-open'] ?>"/>
                        </label>
                    </td>
                    <td>
                        <label for="<?php echo $this->plugin_name; ?>-sunday-close">
                            <span class="scr-rd"><?php esc_attr_e('Sunday Close', $this->plugin_name); ?></span>
                            <input type='number' min='0' max='23.5' step='0.5' aria-labelledby="close" id="<?php echo $this->plugin_name; ?>-sunday-close" name="<?php echo $this->plugin_name; ?>[sunday-close]" value="<?php echo $options['sunday-close'] ?>"/>
                        </label>
                    </td>
                </tr> 
            <tbody>
        </table>
        
          <label for="<?php echo $this->plugin_name;?>-highlight-color">
               <span><?php esc_attr_e('Background color (highlight) of current day', $this->plugin_name);?></span>
                    <input type="text" class="<?php echo $this->plugin_name;?>-color-picker" id="<?php echo $this->plugin_name;?>-highlight-color" name="<?php echo $this->plugin_name;?>[highlight-color]" value="<?php echo $options['highlight-color'];?>" />
                   
                </label>
        
        
        <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>

    </form>

</div>
