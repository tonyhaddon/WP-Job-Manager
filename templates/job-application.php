<?php if ( $apply = get_the_job_application_method() ) :
	wp_enqueue_script( 'wp-job-manager-job-application' );
	?>
	<div class="application">
		<input class="btn btn-primary application_button" type="button" value="<?php _e( 'Apply for job', 'wp-job-manager' ); ?>" />

		<div class="application_details">
			<?php
				switch ( $apply->type ) {
					case 'email' :

						echo '<p>' . sprintf( __( 'To apply for this job <strong>email your details to</strong> <a class="job_application_email" href="mailto:%1$s%2$s">%1$s</a>', 'wp-job-manager' ), $apply->email, '?subject=' . rawurlencode( $apply->subject ) ) . '</p>';

					break;
					case 'url' :
						echo '<p>' . sprintf( __( 'To apply for this job please visit the following URL: <a href="%1$s">%1$s &rarr;</a>', 'wp-job-manager' ), $apply->url ) . '</p>';
					break;
				}
			?>
		</div>
	</div>
<?php endif; ?>