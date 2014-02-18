<div id="job-manager-job-dashboard">
	
	<table class="job-manager-jobs">
		<thead>
			<tr>
				<th class="job_title"><?php _e( 'Job Title', 'wp-job-manager' ); ?></th>
				<th class="date"><?php _e( 'Date Posted', 'wp-job-manager' ); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php if ( ! $jobs ) : ?>
				<tr>
					<td colspan="6"><?php _e( 'You do not have any active job listings.', 'wp-job-manager' ); ?></td>
				</tr>
			<?php else : ?>
				<?php foreach ( $jobs as $job ) : ?>
					<tr>
						<td class="job_title">
							<?php if ( $job->post_status == 'publish' ) : ?>
								<a href="<?php echo get_permalink( $job->ID ); ?>"><?php echo $job->post_title; ?></a>
							<?php else : ?>
								<?php echo $job->post_title; ?>
							<?php endif; ?>
						</td>
						<td class="date"><?php echo date_i18n( get_option( 'date_format' ), strtotime( $job->post_date ) ); ?></td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
	<?php get_job_manager_template( 'pagination.php', array( 'max_num_pages' => $max_num_pages ) ); ?>
</div>