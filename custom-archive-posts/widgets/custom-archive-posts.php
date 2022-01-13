<?php

namespace Elementor;


class Custom_Archive_Posts_Widget extends Widget_Base {

	public function get_name() {
        return 'custom-archive-posts';
    }

	public function get_title() {
        return' Custom Archive Posts' ;
    }

	public function get_icon() {

        return 'eicon-table-of-contents';

    }

	public function get_categories() {

        return  ['ARCHIVE'] ;
    }

	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'plugin-name' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'url',
			[
				'label' => __( 'URL to embed', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'url',
				'placeholder' => __( 'https://your-link.com', 'plugin-name' ),
			]
		);

		$this->end_controls_section();

	}



    // php render

	protected function render() {

		?><div class="posts-container"> <?php

		$args  = [
			'posts_per_page'  => -1,
			 'post_type'  => 'project',

		]; 
		$query = new \WP_Query($args);
		if ( $query->have_posts() ) { ?>

       

			<?php while ( $query->have_posts() ) {
				$query->the_post();?>
    
                   <div class="post-container">
                   <a href="<?php the_permalink();?>">
                       <div class="article-container">
                           <div class="article-img-holder" style="background-image: url(<?php the_post_thumbnail(); ?>);"></div>
                           <div class="post-title"><?php the_title(); ?></div>
                       </div>
                    </a>
                   </div>
				   <?php }
			\wp_reset_postdata();
		} ?>
		
                </div>
				       
				<?php
	


	}



		


     // js render

	protected function _content_template() {

        // echo '<h2>I work in JS too<h2>' ;
		?><div class="posts-container"> <?php

		$args  = [
			'posts_per_page'  => -1,
			 'post_type'  => 'project',

		]; 
		$query = new \WP_Query($args);
		if ( $query->have_posts() ) { ?>

       

			<?php while ( $query->have_posts() ) {
				$query->the_post();?>
    
                   <div class="post-container">
                   <a href="<?php the_permalink();?>">
                       <div class="article-container">
                           <div class="article-img-holder" style="background-image: url(<?php the_post_thumbnail(); ?>);"></div>
                           <div class="post-title"><?php the_title(); ?></div>
                       </div>
                    </a>
                   </div>
				   <?php }
			\wp_reset_postdata();
		} ?>

                </div>
				       
				<?php


	}




















}