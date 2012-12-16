				<div id="sidebar3">

					<?php if ( is_active_sidebar( 'sidebar3' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar3' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="help">
						
							<p>Please activate some Widgets.</p>
						
						</div>

					<?php endif; ?>

				</div>