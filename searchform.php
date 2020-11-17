<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="input-group" action="<?php bloginfo( 'url' ) ?>">
    <input class="form-control" type="search" id="<?php echo $unique_id; ?>" class="search-field form-control"
        placeholder="'Search..." value="<?php echo get_search_query(); ?>" name="s" />
    <button type="submit" class="btn btn-primary">Search</button>
</form>