<div class="modal fade" id="searchmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Search</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
      	</div>
     
      <div class="modal-body">
        <form action="/" method="get">
			<div class="row">
				<div class="col-lg-8">
					<input class="form-control form-control-lg" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
				</div>
				<div class="col-lg-4"><input class="btn btn-primary-outline btn-block" type="submit" value="search" /></div>
			</div>
		</form>
      </div>
     
    </div>
  </div>
</div>