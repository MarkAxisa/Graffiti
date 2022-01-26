if(isset($_POST['submit_enquiry_form'])) {
 
    $title = $_POST['post_title'];
    $content = $_POST['post_description'];
 
    $args = [
            'post_title'=> $title,
            'post_description'=>$content,
            'post_status'=> 'publish',
            'post_type'=>'post', // name of your custom post type
            'post_date'=> get_the_date()
    ];
 
    $is_post_inserted = wp_insert_post($args);
 
    if($is_post_inserted) {
        wp_redirect(wp_get_referer());
    }
}