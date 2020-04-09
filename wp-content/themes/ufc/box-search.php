<form action="<?php bloginfo( 'url' ); ?>" method="get" name="search-form" class="search-form">
	<input type="text" name="s" placeholder="search" value="<?php if(get_search_query()) { echo get_search_query(); } else { echo ""; } ?>" /><button type="submit" alt="Search" value="" /></button>
</form>