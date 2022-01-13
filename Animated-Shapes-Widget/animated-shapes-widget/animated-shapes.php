<?php

namespace Elementor;


class Animated_Shapes_Widget extends Widget_Base {

    // register widget style & script

    public function __construct( $data = array(), $args = null ) {
		parent::__construct( $data, $args );

		
		wp_register_style( 'animated_shapes_style',  get_theme_file_uri( 'widgets/animated-shapes-widget/shapes_widget.css' ));
		wp_register_script( 'animated_shapes_script',get_theme_file_uri( 'widgets/animated-shapes-widget/shapes_widget.js' ));
	}


	public function get_name() {
        return 'animated-shapes';
    }

	public function get_title() {
        return' Animated Shapes' ;
    }

	public function get_icon() {

        return 'eicon-gallery-justified';

    }

	public function get_categories() {

        return [ 'EL MOKRI' ];
    }

    public function get_style_depends() {
		return array( 'animated_shapes_style' );
	}

    public function get_script_depends() {
        return array ('animated_shapes_script');
      }

	protected function _register_controls() {

		$this->start_controls_section(
			'top_right_shape',
			[
				'label' => __( 'Top Right Shape', 'Animated_Shapes_Widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

/* ************************ add control for Top Right Shape ***************************** */



		//background Image for the shape

		$this->add_control(
			'top_right_shape_background_image',
			[
				'label' => __( 'Choose a Background Image for this Shape', 'Animated_Shapes_Widget' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				
			         ]
		);


	
		$this->add_control(
			'top_right_shape_background_image_width',
			[
				'label' => __( 'Set the Width for This Shape Background Image', 'Animated_Shapes_Widget' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => 'px' ,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
				
				],
				'default' => [
					'unit' => 'px',
					'size' => 610,
				],
				'selectors' => [
					'{{WRAPPER}} .maroc image' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

				//Logo Image for the shape

				$this->add_control(
					'top_right_shape_logo_image',
					[
						'label' => __( 'Choose The Logo Image for this Shape', 'Animated_Shapes_Widget' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
							'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					]
				);

	      	$this->add_control(
			'top_right_logo_image_width',
			[
				'label' => __( 'Set the Width for The Logo', 'Animated_Shapes_Widget' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => 'px' ,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
				
				],
				'default' => [
					'unit' => 'px',
					'size' => 80,
				],
				'selectors' => [
					'{{WRAPPER}} .maroc .shape-logo img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		


		//Description for the shape

		$this->add_control(
			'top_right_shape_description',
			[
				'label' => __( 'Type The Description for this Shape', 'Animated_Shapes_Widget' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => __( 'Shape Description', 'Animated_Shapes_Widget' ),
				'placeholder' => __( 'Type your description here', 'Animated_Shapes_Widget' ),
				
			],
			
			
			
		);	
        
		//Gallery for the shape

		$this->add_control(
			'top_right_shape_gallery',
			[
				'label' => __( 'Add Images Gallery for this project', 'Animated_Shapes_Widget' ),
				'type' => \Elementor\Controls_Manager::GALLERY,
				'default' => [],
				
			],
			
			
			
		);	

		
		$this->end_controls_section(
			'top_right_shape',
			[
				'label' => __( 'Top Right Shape', 'Animated_Shapes_Widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);



		/* ************************ add control for Top Middle Shape ***************************** */


		$this->start_controls_section(
			'top_middle_shape',
			[
				'label' => __( 'Top Middle Shape', 'Animated_Shapes_Widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);




		//background Image for the shape

		$this->add_control(
			'top_middle_shape_background_image',
			[
				'label' => __( 'Choose a Background Image for this Shape', 'Animated_Shapes_Widget' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				
			         ]
		);

		$this->add_control(
			'top_middle_shape_background_image_width',
			[
				'label' => __( 'Set the Width This Shape Background Image', 'Animated_Shapes_Widget' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => 'px' ,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
				
				],
				'default' => [
					'unit' => 'px',
					'size' => 710,
				],
				'selectors' => [
					'{{WRAPPER}} .nespresso image' => 'width: {{SIZE}}{{UNIT}};',
				],
				
			]
		);

		//Logo Image for the shape

		$this->add_control(
			'top_middle_shape_logo_image',
			[
				'label' => __( 'Choose The Logo Image for this Shape', 'Animated_Shapes_Widget' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		//Logo Image for the shape



		
		$this->add_control(
			'top_middle_logo_image_width',
			[
				'label' => __( 'Set the Width for The Logo', 'Animated_Shapes_Widget' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => 'px' ,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
				
				],
				'default' => [
					'unit' => 'px',
					'size' => 80,
				],
				'selectors' => [
					'{{WRAPPER}} .nespresso .shape-logo img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);


		//Description for the shape

		$this->add_control(
			'top_middle_shape_description',
			[
				'label' => __( 'Type The Description for this Shape', 'Animated_Shapes_Widget' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => __( 'Shape Description', 'Animated_Shapes_Widget' ),
				'placeholder' => __( 'Type your description here', 'Animated_Shapes_Widget' ),
				
			],
			
			
			
		);

		$this->end_controls_section(
			'top_middle_shape',
			[
				'label' => __( 'Top Middle Shape', 'Animated_Shapes_Widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


			/* ************************ add control for Top Left Shape ***************************** */


			
			$this->start_controls_section(
				'top_left_shape',
				[
					'label' => __( 'Top Left Shape', 'Animated_Shapes_Widget' ),
					'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				]
			);
	
	
	
	
			//background Image for the shape
	
			$this->add_control(
				'top_left_shape_background_image',
				[
					'label' => __( 'Choose a Background Image for this Shape', 'Animated_Shapes_Widget' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
					
						 ]
			);

			$this->add_control(
				'top_left_shape_background_image_width',
				[
					'label' => __( 'Set the Width This Shape Background Image', 'Animated_Shapes_Widget' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => 'px' ,
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 5,
						],
					
					],
					'default' => [
						'unit' => 'px',
						'size' => 697,
					],
					'selectors' => [
						'{{WRAPPER}} .gotiboy image' => 'width: {{SIZE}}{{UNIT}};',
					],
					
				]
			);
	
			//Logo Image for the shape
	
			$this->add_control(
				'top_left_shape_logo_image',
				[
					'label' => __( 'Choose The Logo Image for this Shape', 'Animated_Shapes_Widget' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
	
			//Logo Image for the shape
	
	


			$this->add_control(
				'top_left_logo_image_width',
				[
					'label' => __( 'Set the Width for The Logo', 'Animated_Shapes_Widget' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => 'px' ,
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 5,
						],
					
					],
					'default' => [
						'unit' => 'px',
						'size' => 80,
					],
					'selectors' => [
						'{{WRAPPER}} .gotiboy .shape-logo img' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			
	
	
			//Description for the shape
	
			$this->add_control(
				'top_left_shape_description',
				[
					'label' => __( 'Type The Description for this Shape', 'Animated_Shapes_Widget' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'rows' => 10,
					'default' => __( 'Shape Description', 'Animated_Shapes_Widget' ),
					'placeholder' => __( 'Type your description here', 'Animated_Shapes_Widget' ),
					
				],
				
				
				
			);
	
			$this->end_controls_section(
				'top_left_shape',
				[
					'label' => __( 'Top Left Shape', 'Animated_Shapes_Widget' ),
					'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				]
			);
	
	
				/* ************************ add control for Bottom Right Shape ***************************** */

				$this->start_controls_section(
					'bottom_right_shape',
					[
						'label' => __( 'Bottom Right Shape', 'Animated_Shapes_Widget' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
		
		
		
		
				//background Image for the shape
		
				$this->add_control(
					'bottom_right_shape_background_image',
					[
						'label' => __( 'Choose a Background Image for this Shape', 'Animated_Shapes_Widget' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
							'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
						
							 ]
				);

				$this->add_control(
					'bottom_right_shape_background_image_width',
					[
						'label' => __( 'Set the Width This Shape Background Image', 'Animated_Shapes_Widget' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => 'px' ,
						'range' => [
							'px' => [
								'min' => 0,
								'max' => 1000,
								'step' => 5,
							],
						
						],
						'default' => [
							'unit' => 'px',
							'size' => 670,
						],
						'selectors' => [
							'{{WRAPPER}} .tommy image' => 'width: {{SIZE}}{{UNIT}};',
						],
						
					]
				);

		
				//Logo Image for the shape
		
				$this->add_control(
					'bottom_right_shape_logo_image',
					[
						'label' => __( 'Choose The Logo Image for this Shape', 'Animated_Shapes_Widget' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
							'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					]
				);
		
				//Logo Image for the shape
		
		
		
				$this->add_control(
					'bottom_right_logo_image_width',
					[
						'label' => __( 'Set the Width for The Logo', 'Animated_Shapes_Widget' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => 'px' ,
						'range' => [
							'px' => [
								'min' => 0,
								'max' => 1000,
								'step' => 5,
							],
						
						],
						'default' => [
							'unit' => 'px',
							'size' => 80,
						],
						'selectors' => [
							'{{WRAPPER}} .tommy .shape-logo img' => 'width: {{SIZE}}{{UNIT}};',
						],
					]
				);
				
				
		
		
				//Description for the shape
		
				$this->add_control(
					'bottom_right_shape_description',
					[
						'label' => __( 'Type The Description for this Shape', 'Animated_Shapes_Widget' ),
						'type' => \Elementor\Controls_Manager::TEXTAREA,
						'rows' => 10,
						'default' => __( 'Shape Description', 'Animated_Shapes_Widget' ),
						'placeholder' => __( 'Type your description here', 'Animated_Shapes_Widget' ),
						
					],
					
					
					
				);
		
				$this->end_controls_section(
					'bottom_right_shape',
					[
						'label' => __( 'Bottom Right Shape', 'Animated_Shapes_Widget' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
		
		
					/* ************************ add control for Bottom Left Shape ***************************** */
		


					$this->start_controls_section(
						'bottom_left_shape',
						[
							'label' => __( 'Bottom Left Shape', 'Animated_Shapes_Widget' ),
							'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
						]
					);
			
			
			
			
					//background Image for the shape
			
					$this->add_control(
						'bottom_left_shape_background_image',
						[
							'label' => __( 'Choose a Background Image for this Shape', 'Animated_Shapes_Widget' ),
							'type' => \Elementor\Controls_Manager::MEDIA,
							'default' => [
								'url' => \Elementor\Utils::get_placeholder_image_src(),
							],
							
								 ]
					);

					$this->add_control(
						'bottom_left_shape_background_image_width',
						[
							'label' => __( 'Set the Width This Shape Background Image', 'Animated_Shapes_Widget' ),
							'type' => Controls_Manager::SLIDER,
							'size_units' => 'px' ,
							'range' => [
								'px' => [
									'min' => 0,
									'max' => 1000,
									'step' => 5,
								],
							
							],
							'default' => [
								'unit' => 'px',
								'size' => 700,
							],
							'selectors' => [
								'{{WRAPPER}} .act image' => 'width: {{SIZE}}{{UNIT}};',
							],
							
						]
					);
			
					//Logo Image for the shape
			
					$this->add_control(
						'bottom_left_shape_logo_image',
						[
							'label' => __( 'Choose The Logo Image for this Shape', 'Animated_Shapes_Widget' ),
							'type' => \Elementor\Controls_Manager::MEDIA,
							'default' => [
								'url' => \Elementor\Utils::get_placeholder_image_src(),
							],
						]
					);

					$this->add_control(
						'bottom_left_logo_image_width',
						[
							'label' => __( 'Set the Width for The Logo', 'Animated_Shapes_Widget' ),
							'type' => Controls_Manager::SLIDER,
							'size_units' => 'px' ,
							'range' => [
								'px' => [
									'min' => 0,
									'max' => 1000,
									'step' => 5,
								],
							
							],
							'default' => [
								'unit' => 'px',
								'size' => 80,
							],
							'selectors' => [
								'{{WRAPPER}} .act .shape-logo img' => 'width: {{SIZE}}{{UNIT}};',
							],
						]
					);
			
			
		
					
			
			
					//Description for the shape
			
					$this->add_control(
						'bottom_left_shape_description',
						[
							'label' => __( 'Type The Description for this Shape', 'Animated_Shapes_Widget' ),
							'type' => \Elementor\Controls_Manager::TEXTAREA,
							'rows' => 10,
							'default' => __( 'Shape Description', 'Animated_Shapes_Widget' ),
							'placeholder' => __( 'Type your description here', 'Animated_Shapes_Widget' ),
							
						],
						
						
						
					);
			
					$this->end_controls_section(
						'bottom_left_shape',
						[
							'label' => __( 'Bottom Left Shape', 'Animated_Shapes_Widget' ),
							'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
						]
					);
			
	}



    // php render

	protected function render() {

		$settings = $this->get_settings_for_display();
		
		?>
		
		
		<div class="shapes-container">
			
    
          <button class="maroc">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 415.05 401.51" class="marocsvg">
              <defs>
                <clipPath id="marocsvgPath">
                  <path d="M410.84,271.2c-43.8-106-140.2-60.1-170.1-87.1S216.54-14.2,99.14,1-31.36,249.3,60,353.1C151.24,456.9,454.54,377.2,410.84,271.2Z" transform="translate(-0.07 -0.05)" fill="#010202"/>
                </clipPath>
              </defs>
              <image href="<?php echo $settings['top_right_shape_background_image']['url'];?>" x="0" y="0" width="610"  style="clip-path: url(#marocsvgPath);" /> 
            </svg>
              <div class="shape-description" style="left: 9px; top: 107px; width: 54%;"><?php echo $settings['top_right_shape_description'] ?></div>
			 <!-- <div class="project-btn">The Project</div>
			  
			
			   <div class="project-gallery">
				  <?php  
				    foreach ( $settings['top_right_shape_gallery'] as $image ) {
						echo '<img src="' . $image['url'] . '">';
					} ?>
			  </div> -->
              <div class="shape-logo"><img src="<?php echo $settings['top_right_shape_logo_image']['url'];?>" style="top: 38%;  right: 118px; width: <?php echo $settings['top_right_logo_image_width']['size'];?>"></div> 
          </button>

          <button class="nespresso">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.67 473.14">
                <defs>
                  <clipPath id="nespressosvgPath">
                   <path d="M46.63,290c3-12.2,9.7-45.7-5.9-90.1s-93.8-137,19.5-191.1,216.5,154.9,223.1,234.7S183,489.5,70.73,471.8,46.63,290,46.63,290Z" transform="translate(0.05 0.03)"/>
                  </clipPath>
                </defs>
                 <image href="<?php echo $settings['top_middle_shape_background_image']['url'];?>" x="0" y="0"  width="710" style="clip-path: url(#nespressosvgPath);" />
              </svg>
              <div class="shape-description" style="left: 44px; width: 61%; top: 54px;"><?php echo $settings['top_middle_shape_description'] ?></div>
              <div class="shape-logo"><img src="<?php echo $settings['top_middle_shape_logo_image']['url'];?>" style="top: 41%; right: 23px; width: <?php echo $settings['top_middle_logo_image_width']['size'];?> "></div>
            </button>

          <button class="gotiboy">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 322.74 465.53">
                <defs>
                  <clipPath id="gotiboysvgPath">
                   <path d="M291.94,30.57c51.3,102.5-46.5,145.3-45.8,185.5s133.8,148.3,45.4,227S18.54,378.77,0,241.77,240.54-71.93,291.94,30.57Z" transform="translate(0.91 0.02)" fill="#010202"/>
                  </clipPath>
                </defs>
                 <image href="<?php echo $settings['top_left_shape_background_image']['url'];?>" x="0" y="0"  width="697" style="clip-path: url(#gotiboysvgPath);" />
              </svg>
              <div class="shape-description" style="left: 44px; width: 61%; top: 78px;"><?php echo $settings['top_left_shape_description'] ?></div>
              <div class="shape-logo"><img src="<?php echo $settings['top_left_shape_logo_image']['url'];?>" style="top: 38%; right: 81px; width: <?php echo $settings['top_left_logo_image_width']['size'];?>;"></div>
            </button>

          <button class="tommy">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 438.57 445.71">
                <defs>
                  <clipPath id="tommysvgPath">
                   <path d="M438.5,266c4.4,132-171.2,198.2-243.8,175.2C119.6,410.8-17.7,247.5,1.9,123.3,20,31.5,82.3-5.3,133.9.6,199.1,7.5,255,62.9,268.8,74.7,303.1,105.1,437.1,149.3,438.5,266Z" transform="translate(-0.01 0.01)" fill="#010202"/>
                  </clipPath>
                </defs>
                 <image href="<?php echo $settings['bottom_right_shape_background_image']['url'];?>" x="0" y="0"  width="697" style="clip-path: url(#tommysvgPath);" />
              </svg>
              <div class="shape-description" style="left: 36px; top: 79px; width: 77%;"><?php echo $settings['bottom_right_shape_description'] ?></div>
              <div class="shape-logo"><img src="<?php echo $settings['bottom_right_shape_logo_image']['url'];?>" style="top: 40%; right: 28px; width: <?php echo $settings['bottom_right_logo_image_width']['size'];?>"></div>
            </button>

          <button class="act">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 322.74 465.53">
                 <defs>
                   <clipPath id="gotiboysvgPath">
                    <path d="M291.94,30.57c51.3,102.5-46.5,145.3-45.8,185.5s133.8,148.3,45.4,227S18.54,378.77,0,241.77,240.54-71.93,291.94,30.57Z" transform="translate(0.91 0.02)" fill="#010202"/>
                   </clipPath>
                 </defs>
                  <image href="<?php echo $settings['bottom_left_shape_background_image']['url'];?>" x="0" y="0"  width="697" style="clip-path: url(#gotiboysvgPath); " />
               </svg>
              <div class="shape-description" style="left: 50px ; top: 110px ; width: 55%;"><?php echo $settings['bottom_left_shape_description'] ?></div>
              <div class="shape-logo"><img src="<?php echo $settings['bottom_left_shape_logo_image']['url'] ;?>" style="top: 36%; right: 55px; width: <?php echo $settings['bottom_left_logo_image_width']['size'];?>"></div>
          </button>
         
        </div>
				<?php
	


	}




     // js render

	// protected function _content_template() {
	// }




















}