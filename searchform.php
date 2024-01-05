<form role="search" method="get" class="d-flex position-relative" action="<?php echo home_url( '/' ); ?>">
    <label class="d-flex position-absolute top-50 start-50 translate-middle" >
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="search-field form-control"
            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
			<input type="submit" class="search-submit btn btn-outline-success"
        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
    </label>    
</form>