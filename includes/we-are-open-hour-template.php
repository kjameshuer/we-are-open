<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
   
     $days = ['monday','tuesday','wednesday','thursday','friday','saturday','sunday'];
     
    //  $options = get_option( 'we_are_open_settings' ); 
      $options = get_option('we-are-open');

    ?>
<table> 
<?php
 for( $i = 0; $i <= 6; $i++) { 
     
      $openString = $days[$i].'-open';
    $closeString = $days[$i].'-close';
    $openTime = floatval($options[strtolower($openString)]);
    $closeTime = floatval($options[strtolower($closeString)]);
    $openTimeString = '';
    $clostTimeSTring = '';
    $openMinutes = '00';
    $closeMinutes = '00';
    
 
    
    if ($openTime == 0 && $closeTime == 0) {
        $openTime = 'closed';
        $closeTime = 'closed';
    }
    
    if (is_numeric($openTime) && floor($openTime) != $openTime) {
        $openMinutes = '30';
        $openTime = intval(floor($openTime));
    }
    
    if (is_numeric($closeTime) && floor($closeTime) != $closeTime) {
        $closeMinutes = '30';
        $closeTime = intval(floor($closeTime));
    }
    
  

    if ($openTime > 12) {
        $openTime = ($openTime - 12) .':'. $openMinutes.'PM';
    }else {
       if (gettype($openTime) != 'string') {
           if ($openTime == 0) {
               $openTime = 12;
           }
            $openTime = $openTime.':'. $openMinutes.'AM';
       }
      
    }
    
    if ($closeTime > 12) {
        $closeTime = $closeTime - 12 .':'.$closeMinutes.'PM';
    }else {
         if (gettype($closeTime) != 'string') {
             if ($closeTime == 0) {
                 $closeTime = 12;
             }
        $closeTime = $closeTime . ':'.$closeMinutes.'AM';
         }
        
    }
    
    
    
    ?>

    <tr class='we-are-open-row'>
        <td class='we-are-open-days'><?php echo esc_html__($days[$i],'weareopen');?></td>
        <td class='we-are-open-hours'><?php echo $openTime.' - '. $closeTime ?></td>
    </tr>
<?php } ?>
        
</table>
<?php
if ($options['we_are_open_holiday_check'] == '1') {
    echo '<p>'.esc_html__($options['we_are_open_holiday_msg'],'weareopen').'</p>';
}
    