<?php
/*-----------------------------------------------------------------------------------*/
/*	Section Description
/*-----------------------------------------------------------------------------------*/

function ctx_customizer_register( $wp_customize ) {

	/*-----------------------------------------------------------------------------------*/
	/*	Textarea
	/*-----------------------------------------------------------------------------------*/	

	class Example_Customize_Textarea_Control extends WP_Customize_Control {
	    public $type = 'textarea';
	 
	    public function render_content() {
	        ?>
	        <label>
	        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	        <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	        </label>
	        <?php
	    }
	}

	/*-----------------------------------------------------------------------------------*/
	/*	Layout Picker
	/*-----------------------------------------------------------------------------------*/	

	class Layout_Picker_Custom_Control extends WP_Customize_Control {
		public function render_content() { ?>
			<div>
				<div class="customize-control-title"><?php echo esc_html( $this->label ); ?></div>
					<span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
					<ul class="customizer-layout">
						<li class="top"><label><input <?php $this->link(); ?> type="radio" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>[full_width]"  /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout1.png" alt="Full Width" /></label></li>
						<li class="side"><label><input <?php $this->link(); ?> type="radio" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>[side_left]" value="side_left" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout2.png" alt="Full Width" /></label></li>
						<li class="side"><label><input <?php $this->link(); ?> type="radio" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>[side_right]" value="side_right" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout3.png" alt="Full Width" /></label></li>
						<li class="top"><label><input <?php $this->link(); ?> type="radio" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>[boxed_top]" value="boxed_top" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout4.png" alt="Full Width" /></label></li>
						<li class="side"><label><input <?php $this->link(); ?> type="radio" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>[boxed_left]" value="boxed_left" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout5.png" alt="Full Width" /></label></li>
						<li class="side"><label><input <?php $this->link(); ?> type="radio" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>[boxed_right]" value="boxed_right" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout6.png" alt="Full Width" /></label></li>
						<li class="top"><label><input <?php $this->link(); ?> type="radio" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>[full_width_bottom]" value="full_width_bottom" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout7.png" alt="Full Width" /></label></li>
						<li class="side"><label><input <?php $this->link(); ?> type="radio" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>[floating_left]" value="floating_left" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout8.png" alt="Full Width" /></label></li>
						<li class="side"><label><input <?php $this->link(); ?> type="radio" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>[floating_right]" value="floating_right" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout9.png" alt="Full Width" /></label></li>
						<li class="top"><label><input <?php $this->link(); ?> type="radio" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>[freefloating_top]" value="freefloating_top" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout10.png" alt="Full Width" /></label></li>
						<li class="side"><label><input <?php $this->link(); ?> type="radio" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>[vertical_freefloating_left]" value="freefloating_left" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout11.png" alt="Full Width" /></label></li>
						<li class="side"><label><input <?php $this->link(); ?> type="radio" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>[vertical_freefloating_right]" value="freefloating_right" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout12.png" alt="Full Width" /></label></li>
					</ul>
			</div>
	            <?php
	       }
	}

	/*-----------------------------------------------------------------------------------*/
	/*	Presets
	/*-----------------------------------------------------------------------------------*/

	class Preset_Control extends WP_Customize_Control {
		public function render_content() { ?>
	        <div>
	        	<div class="customizer-notice">
	        		Info: If the header isn't visible please makesure you have set the Header Menu under the <strong>Navigation</strong> section.
	        	</div>
	        	<div class="customizer-alert">
	        		Live thumbnail previews coming in the next update! Stay tuned.
	        	</div>
	          	<div class="customize-control-title"><?php echo esc_html( $this->label ); ?></div>
	          	<span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
	         	<div class="category-filter-button">
					<i class="fa fa-th"></i> &nbsp;Filter
						<ul class="category-filter">
							<li><a data-filter="" class="selected">All Styles</a></li>
							<li><a data-filter=".corporate" class="selected">Corporate</a></li>
							<li><a data-filter=".creative" class="selected">Creative</a></li>
							<li><a data-filter=".minimal" class="selected">Minimal</a></li>
							<li><a data-filter=".portfolio" class="selected">Portfolio</a></li>
							<li><a data-filter=".photography" class="selected">Photography</a></li>
		
						</ul>
				</div>
				<ul class="customizer-preset">
					<li class="corporate" title="1"><label><input <?php $this->link(); ?> type="radio" id="style-1" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="1" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Corporate #1</span></label></li>
					<li class="corporate" title="2"><label><input <?php $this->link(); ?> type="radio" id="style-2" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="2" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Corporate #2</span></label></li>
					<li class="creative" title="3"><label><input <?php $this->link(); ?> type="radio" id="style-3" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="3" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Creative #1</span></label></li>
					<li class="corporate" title="4"><label><input <?php $this->link(); ?> type="radio" id="style-4" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="4" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Corporate #3</span></label></li>
					<li class="corporate" title="5"><label><input <?php $this->link(); ?> type="radio" id="style-5" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="5" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Corporate #4</span></label></li>
					<li class="corporate" title="6"><label><input <?php $this->link(); ?> type="radio" id="style-6" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="6" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Corporate #5</span></label></li>
					<li class="creative" title="7"><label><input <?php $this->link(); ?> type="radio" id="style-7" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="7" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Creative #2</span></label></li>
					<li class="corporate" title="8"><label><input <?php $this->link(); ?> type="radio" id="style-8" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="8" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Corporate #6</span></label></li>
					<li class="creative" title="9"><label><input <?php $this->link(); ?> type="radio" id="style-9" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="9" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Creative #3</span></label></li>
					<li class="corporate" title="10"><label><input <?php $this->link(); ?> type="radio" id="style-10" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="10" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Corporate #7</span></label></li>
					<li class="creative" title="11"><label><input <?php $this->link(); ?> type="radio" id="style-11" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="11" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Creative #4</span></label></li>
					<li class="creative" title="12"><label><input <?php $this->link(); ?> type="radio" id="style-12" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="12"  /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Creative #5</span></label></li>
					<li class="creative" title="13"><label><input <?php $this->link(); ?> type="radio" id="style-13" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="13" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Creative #6</span></label></li>
					<li class="creative" title="14"><label><input <?php $this->link(); ?> type="radio" id="style-14" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="14" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Creative #7</span></label></li>
					<li class="creative" title="15"><label><input <?php $this->link(); ?> type="radio" id="style-15" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="15" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Creative #8</span></label></li>
					<li class="creative" title="16"><label><input <?php $this->link(); ?> type="radio" id="style-16" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="16" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Creative #9</span></label></li>
				
					<li class="portfolio" title="18"><label><input <?php $this->link(); ?> type="radio" id="style-18" name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="17" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Portfolio #1</span></label></li>
					<li class="creative" title="19"><label><input <?php $this->link(); ?> type="radio" id="style-19"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="18" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Creative #10</span></label></li>
					<li class="creative" title="20"><label><input <?php $this->link(); ?> type="radio" id="style-20"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="19" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Creative #11</span></label></li>
					<li class="portfolio" title="21"><label><input <?php $this->link(); ?> type="radio" id="style-21"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="20" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Portfolio #2</span></label></li>
					<li class="corporate" title="22"><label><input <?php $this->link(); ?> type="radio" id="style-22"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="21" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Corporate #8</span></label></li>
					<li class="photography" title="23"><label><input <?php $this->link(); ?> type="radio" id="style-23"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="22" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Photography #1</span></label></li>
					<li class="photography" title="24"><label><input <?php $this->link(); ?> type="radio" id="style-24"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="23" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Photography #2</span></label></li>
					<li class="photography" title="25"><label><input <?php $this->link(); ?> type="radio" id="style-25"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="24" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Photography #3</span></label></li>
					<li class="corporate" title="26"><label><input <?php $this->link(); ?> type="radio" id="style-26"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="25" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Corporate #9</span></label></li>
					<li class="portfolio" title="27"><label><input <?php $this->link(); ?> type="radio" id="style-27"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="26" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Portfolio #3</span></label></li>
					<li class="portfolio" title="28"><label><input <?php $this->link(); ?> type="radio" id="style-28"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="27" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Portfolio #4</span></label></li>
					<li class="portfolio" title="29"><label><input <?php $this->link(); ?> type="radio" id="style-29"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="28" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Portfolio #5</span></label></li>
					<li class="portfolio" title="30"><label><input <?php $this->link(); ?> type="radio" id="style-30"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="29" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Portfolio #6</span></label></li>
					<li class="portfolio" title="31"><label><input <?php $this->link(); ?> type="radio" id="style-31"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="30" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Portfolio #7</span></label></li>
					<li class="creative" title="32"><label><input <?php $this->link(); ?> type="radio" id="style-32"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="31" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Creative #12</span></label></li>
					<li class="creative" title="33"><label><input <?php $this->link(); ?> type="radio" id="style-33"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="32" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Creative #13</span></label></li>
					<li class="portfolio" title="34"><label><input <?php $this->link(); ?> type="radio" id="style-34"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="33" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Portfolio #8</span></label></li>
					<li class="portfolio" title="35"><label><input <?php $this->link(); ?> type="radio" id="style-35"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="34" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Portfolio #9</span></label></li>
					<li class="portfolio" title="36"><label><input <?php $this->link(); ?> type="radio" id="style-36"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="35" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Portfolio #10</span></label></li>
					<li class="portfolio" title="37"><label><input <?php $this->link(); ?> type="radio" id="style-37"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="36" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Portfolio #11</span></label></li>
					<li class="portfolio" title="38"><label><input <?php $this->link(); ?> type="radio" id="style-38"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="37" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Portfolio #12</span></label></li>
					<li class="corporate" title="39"><label><input <?php $this->link(); ?> type="radio" id="style-39"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="38" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Corporate #10</span></label></li>
					<li class="creative" title="40"><label><input <?php $this->link(); ?> type="radio" id="style-40"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="39" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Creative #14</span></label></li>
					<li class="corporate" title="41"><label><input <?php $this->link(); ?> type="radio" id="style-41"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="40" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Corporate #11</span></label></li>
					<li class="creative" title="42"><label><input <?php $this->link(); ?> type="radio" id="style-42"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="41"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Creative #15</span></label></li>
			
					<li class="portfolio" title="44"><label><input <?php $this->link(); ?> type="radio" id="style-44"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="42" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Portfolio #13</span></label></li>
				
					<li class="portfolio" title="46"><label><input <?php $this->link(); ?> type="radio" id="style-46"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="43" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Portfolio #14</span></label></li>
					<li class="portfolio" title="47"><label><input <?php $this->link(); ?> type="radio" id="style-47"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="44" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Portfolio #15</span></label></li>
					<li class="portfolio" title="48"><label><input <?php $this->link(); ?> type="radio" id="style-48"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="45" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Portfolio #16</span></label></li>
					<li class="portfolio" title="49"><label><input <?php $this->link(); ?> type="radio" id="style-49"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="46" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Portfolio #17</span></label></li>
					<li class="portfolio" title="50"><label><input <?php $this->link(); ?> type="radio" id="style-50"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="47"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Portfolio #18</span></label></li>
					<li class="photography" title="51"><label><input <?php $this->link(); ?> type="radio" id="style-51"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="48"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Photography #4</span></label></li>
					<li class="photography" title="52"><label><input <?php $this->link(); ?> type="radio" id="style-52"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="49"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Photography #5</span></label></li>
					<li class="photography" title="53"><label><input <?php $this->link(); ?> type="radio" id="style-53"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="50"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Photography #6</span></label></li>
					<li class="photography" title="54"><label><input <?php $this->link(); ?> type="radio" id="style-54"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="51"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Photography #7</span></label></li>
					<li class="photography" title="55"><label><input <?php $this->link(); ?> type="radio" id="style-55"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="52"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Photography #8</span></label></li>
					<li class="photography" title="56"><label><input <?php $this->link(); ?> type="radio" id="style-56"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="53"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Photography #9</span></label></li>
					<li class="photography" title="57"><label><input <?php $this->link(); ?> type="radio" id="style-57"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="54"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Photography #10</span></label></li>
					<li class="photography" title="58"><label><input <?php $this->link(); ?> type="radio" id="style-58"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="55"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Photography #11</span></label></li>
					<li class="blog" title="59"><label><input <?php $this->link(); ?> type="radio" id="style-59"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="56" /><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Blog #1</span></label></li>
					<li class="blog" title="60"><label><input <?php $this->link(); ?> type="radio" id="style-60"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="57"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Blog #2</span></label></li>
					<li class="blog" title="61"><label><input <?php $this->link(); ?> type="radio" id="style-61"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="58"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Blog #3</span></label></li>
					<li class="blog" title="62"><label><input <?php $this->link(); ?> type="radio" id="style-62"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="59"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Blog #4</span></label></li>
					<li class="blog" title="63"><label><input <?php $this->link(); ?> type="radio" id="style-63"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="60"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Blog #5</span></label></li>
					<li class="blog" title="64"><label><input <?php $this->link(); ?> type="radio" id="style-64"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="61"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Blog #6</span></label></li>
					<li class="blog" title="65"><label><input <?php $this->link(); ?> type="radio" id="style-65"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="62"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Blog #7</span></label></li>
					<li class="blog" title="66"><label><input <?php $this->link(); ?> type="radio" id="style-66"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="63"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Blog #8</span></label></li>
					<li class="blog" title="67"><label><input <?php $this->link(); ?> type="radio" id="style-67"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="64"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Blog #9</span></label></li>
					<li class="corporate" title="68"><label><input <?php $this->link(); ?> type="radio" id="style-68"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="65"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Corporate #12</span></label></li>
					<li class="corporate" title="69"><label><input <?php $this->link(); ?> type="radio" id="style-69"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="66"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Corporate #13</span></label></li>
					<li class="corporate" title="70"><label><input <?php $this->link(); ?> type="radio" id="style-70"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="67"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Corporate #14</span></label></li>
					<li class="corporate" title="71"><label><input <?php $this->link(); ?> type="radio" id="style-71"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="68"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Corporate #15</span></label></li>
					<li class="corporate" title="72"><label><input <?php $this->link(); ?> type="radio" id="style-72"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="69"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Corporate #16</span></label></li>
					<li class="corporate" title="73"><label><input <?php $this->link(); ?> type="radio" id="style-73"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="70"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Corporate #17</span></label></li>
					<li class="creative" title="74"><label><input <?php $this->link(); ?> type="radio" id="style-74"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="71"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Creative #16</span></label></li>
					<li class="creative" title="75"><label><input <?php $this->link(); ?> type="radio" id="style-75"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="72"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Creative #17</span></label></li>
					<li class="creative" title="76"><label><input <?php $this->link(); ?> type="radio" id="style-76"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="73"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Creative #18</span></label></li>
					<li class="creative" title="77"><label><input <?php $this->link(); ?> type="radio" id="style-77"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="74"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Creative #19</span></label></li>
					<li class="creative" title="78"><label><input <?php $this->link(); ?> type="radio" id="style-78"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="75"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Creative #20</span></label></li>
					<li class="minimal" title="79"><label><input <?php $this->link(); ?> type="radio" id="style-79"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="76"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Minimal #1</span></label></li>
					<li class="minimal" title="80"><label><input <?php $this->link(); ?> type="radio" id="style-80"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="77"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Minimal #2</span></label></li>
					<li class="minimal" title="81"><label><input <?php $this->link(); ?> type="radio" id="style-81"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="78"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Minimal #3</span></label></li>
					<li class="minimal" title="82"><label><input <?php $this->link(); ?> type="radio" id="style-82"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="79"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Minimal #4</span></label></li>
					<li class="minimal" title="83"><label><input <?php $this->link(); ?> type="radio" id="style-83"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="80"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Minimal #5</span></label></li>
					<li class="minimal" title="84"><label><input <?php $this->link(); ?> type="radio" id="style-84"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="81"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Minimal #6</span></label></li>
					<li class="minimal" title="85"><label><input <?php $this->link(); ?> type="radio" id="style-85"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="82"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Minimal #7</span></label></li>
					<li class="minimal" title="86"><label><input <?php $this->link(); ?> type="radio" id="style-86"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="83"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Minimal #8</span></label></li>
					<li class="minimal" title="87"><label><input <?php $this->link(); ?> type="radio" id="style-87"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="84"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Minimal #9</span></label></li>
					<li class="minimal" title="88"><label><input <?php $this->link(); ?> type="radio" id="style-88"  name="<?php echo esc_attr($this->id); ?>" id="<?php echo esc_attr($this->id); ?>" value="85"/><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.jpg" alt="Full Width" /><span>Minimal #10</span></label></li>
				</ul>
	        </div>
	            <?php
	       }
	}

	/*-----------------------------------------------------------------------------------*/
	/*	Sidebar
	/*-----------------------------------------------------------------------------------*/

	class Sidebar_Control extends WP_Customize_Control {
		public function render_content() { ?>
			<label>
				<div class="customize-control-title"><?php echo esc_html( $this->label ); ?></div>
				<span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>

				<select <?php $this->link(); ?>>					
					<?php
					$field['choices'] = array();
					$field['choices']['None'] = 'None';
					$field['choices']['Page'] = 'Page';
					for($i = 0; $i < get_theme_mod('number_of_sidebars'); ++$i) {
						$s_name = "Sidebar_".$i;
						$field['choices'][ $s_name ] = $s_name;
					};
					foreach($field["choices"] as $fields) {
						echo "<option name=".$this->id." name=".$this->id.$fields." value='".$fields."'>".$fields."</option>";
					}
					?>
				</select>
			</label>
	    <?php
		}
	}

	/*-----------------------------------------------------------------------------------*/
	/*	Footers
	/*-----------------------------------------------------------------------------------*/

	class Footer_Control extends WP_Customize_Control {
		public function render_content() { ?>
			<label>
				<div class="customize-control-title"><?php echo esc_html( $this->label ); ?></div>
				<span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>

				<select <?php $this->link(); ?>> 

					<option name="custom_footer" value="">None</option>
			 
			    <?php
			        $pages = get_pages(); 
			        foreach ( $pages as $page ) { ?>
			            <option name="custom_footer" value="<?php echo esc_attr($page->ID); ?>"><?php echo esc_html($page->post_title); ?></option>

			    <?php } ?>
				</select>

			</label>
	    <?php
		}
	}

	/*-----------------------------------------------------------------------------------*/
	/*	Section Heading
	/*-----------------------------------------------------------------------------------*/

	class Section_Heading extends WP_Customize_Control {
	    public $type = 'sectionheading';
	 
	    public function render_content() { ?>
	        <div class="customize-section-space"></div>
	        <div class="customize-section-heading customize-control-title"><?php echo esc_html( $this->label ); ?></div>
	        <?php
	    }
	}

	/*-----------------------------------------------------------------------------------*/
	/*	Support
	/*-----------------------------------------------------------------------------------*/

	class Support_control extends WP_Customize_Control {
	    public $type = 'support';
	 
	    public function render_content() { ?>
	        <div class="customize-section-space"></div>
	        <div class="customize-section-heading customize-control-title">Having trouble?</div>
	        <br>
	        <p class="description customizer-alert"><i class="fa fa-comments-o"></i> Visit our <a href="http://www.themize.com/forum/support/"> support forum</a> where our support staff are waiting to answer all your questions. 
	        Don't forget to first <a href="http://www.themize.com/register">create an account</a></p>

	        <p>We aim to respond to all queries as fast as possible however please allow us some time investigate the issues :)</p>
	        <?php
	    }
	}

	/*-----------------------------------------------------------------------------------*/
	/*	Quick Options
	/*-----------------------------------------------------------------------------------*/

	class Quick_control extends WP_Customize_Control {
	    public $type = 'quick';
	 
	    public function render_content() { ?>
	        <div class="customizer-quick-option">
				<label>Header Style</label>
				<p>To see all header options, go to<br><strong>General->Header</strong> in the advanced section below</p>
				<div class="btn-group" role="group" aria-label="...">
				  <button type="button" id="quick-option-creative" class="btn btn-default btn-active">Creative</button>
				  <button type="button" id="quick-option-white" class="btn btn-default">White</button>
				  <button type="button" id="quick-option-dark" class="btn btn-default">Dark</button>
				</div>
			</div>
			 <div class="customizer-quick-option">
				<label>Float header over content</label>
				<p>To see all header options, go to<br><strong>General->Header</strong> in the advanced section below</p>
				<div class="btn-group" role="group" aria-label="...">
				  <button type="button" id="quick-option-header-float-enable" class="btn btn-default btn-active">Enable</button>
				  <button type="button" id="quick-option-header-float-disable" class="btn btn-default">Disable</button>
				</div>
			</div>
			<div class="customizer-quick-option">
				<label>Navigation Position</label>
				<div class="btn-group" role="group" aria-label="...">
				  <button type="button" id="quick-option-nav-left" class="btn btn-default btn-active">Left</button>
				  <button type="button" id="quick-option-nav-center" class="btn btn-default">Center</button>
				  <button type="button" id="quick-option-nav-right" class="btn btn-default">Right</button>
				</div>
			</div>
			<div class="customizer-quick-option">
				<label>Layout</label>
				<p>To see all layout options, go to<br><strong>General->Layouts</strong> in the advanced section below</p>
				<div class="btn-group" role="group" aria-label="...">
				  <button type="button" id="quick-option-layout-full" class="btn btn-default btn-active">Full Width</button>
				  <button type="button" id="quick-option-layout-boxed" class="btn btn-default">Boxed</button>
				  <button type="button" id="quick-option-layout-float" class="btn btn-default">Float</button>
				</div>
			</div>
			<div class="customizer-quick-option">
				<label>Menu Hover </label>
				<p>To see all hover options, go to<br><strong>General->Menu Active/Hover Designer</strong> in the advanced section below</p>
				<div class="btn-group" role="group" aria-label="...">
				  <button type="button" id="quick-option-hover-default" class="btn btn-default btn-active">Default</button>
				  <button type="button" id="quick-option-hover1" class="btn btn-default">1</button>
				  <button type="button" id="quick-option-hover2" class="btn btn-default">2</button>
				  <button type="button" id="quick-option-hover3" class="btn btn-default">3</button>
				  <button type="button" id="quick-option-hover4" class="btn btn-default">4</button>
				  <button type="button" id="quick-option-hover5" class="btn btn-default">5</button>
				  <button type="button" id="quick-option-hover6" class="btn btn-default">6</button>
				  <button type="button" id="quick-option-hover7" class="btn btn-default">7</button>
				  <button type="button" id="quick-option-hover8" class="btn btn-default">8</button>
				  <button type="button" id="quick-option-hover9" class="btn btn-default">9</button>
				  <button type="button" id="quick-option-hover10" class="btn btn-default">10</button>
				</div>
			</div>
			<div class="customizer-quick-option">
				<label>Menu Typography </label>
				<p>To see all font options, go to<br><strong>Typography</strong> in the advanced section below</p>
				<div class="btn-group" role="group" aria-label="...">
				  <button type="button" id="quick-option-menu-uppercase" class="btn btn-default btn-active">Uppercase</button>
				  <button type="button" id="quick-option-menu-standard" class="btn btn-default">Standard</button>
				</div>
			</div>
			<div class="customizer-quick-option">
				<label>Menu Font </label>
				<p>To see all font options, go to<br><strong>Typography</strong> in the advanced section below</p>
				<div class="btn-group" role="group" aria-label="...">
				  <button type="button" id="quick-option-menu-font-1" class="btn btn-default btn-active">Open Sans</button>
				  <button type="button" id="quick-option-menu-font-2" class="btn btn-default">Oswald</button>
				  <button type="button" id="quick-option-menu-font-3" class="btn btn-default">Raleway</button>
				</div>
			</div>
			<div class="customizer-quick-option">
				<label>Submenu/Megamenu Colour </label>
				<p>To see all submenu options, go to<br><strong>Header->Submenu</strong> in the advanced section below</p>
				<div class="btn-group" role="group" aria-label="...">
				  <button type="button" id="quick-option-sub-dark" class="btn btn-default btn-active">Dark</button>
				  <button type="button" id="quick-option-sub-white" class="btn btn-default">White</button>
				  <button type="button" id="quick-option-sub-grey" class="btn btn-default">Grey</button>
				  <button type="button" id="quick-option-sub-blue" class="btn btn-default">Blue</button>
				</div>
			</div>
	        <?php

	    }
	}

	/*-----------------------------------------------------------------------------------*/
	/*	Section Description
	/*-----------------------------------------------------------------------------------*/

	class Section_Description extends WP_Customize_Control {
	    public $type = 'sectiondescription';
	 
	    public function render_content() {
	        ?>
	        <p class="description"><?php echo esc_html( $this->label ); ?></p>
	        <?php
	    }
	}

	/*-----------------------------------------------------------------------------------*/
	/*	Google Font
	/*-----------------------------------------------------------------------------------*/

	if ( ! class_exists( 'WP_Customize_Control' ) )
	    return NULL;

	/**
	* A class to create a dropdown for all google fonts
	*/
	class Google_Font_Dropdown_Custom_Control extends WP_Customize_Control {
	    private $fonts = false;
	    public function __construct($manager, $id, $args = array(), $options = array()) {
	        $this->fonts = $this->get_fonts();
	        parent::__construct( $manager, $id, $args );
	    }
	    /**
	     * Render the content of the category dropdown
	     *
	     * @return HTML
	     */
	    public function render_content() {
	        if(!empty($this->fonts)) { ?>
	                <label>
	                    <div class="customize-control-title"><?php echo esc_html( $this->label ); ?></div>
	                    <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
	                    <select <?php $this->link(); ?>>
	                        <?php 
	                        foreach ( $this->fonts as $k => $v ) {
	                        	printf('<option value="%s" %s>%s</option>', $v->family, selected($this->value(), $k, false), $v->family);
	                        }
	                        ?>
	                    </select>
	                </label>
	            <?php
	        }
	    }

	    /**
	     * Get the google fonts from the API or in the cache
	     *
	     * @param  integer $amount
	     *
	     * @return String
	     */
	    public function get_fonts( $amount = 'all' )
	    {

	        $googleApi = get_template_directory_uri() . '/framework/customizer/googlefonts.json';

	        $fontContent = wp_remote_get( $googleApi, array('sslverify'   => false) );


	        $content = json_decode($fontContent['body']);

	        if($amount == 'all') {
	            return $content->items;
	        } else {
	            return array_slice($content->items, 0, $amount);
	        }
	    }
	}

	/*-----------------------------------------------------------------------------------*/
	/*	Add options and settings
	/*-----------------------------------------------------------------------------------*/
	
	include("customizer_general.php");
	include("customizer_typography.php");
	include("customizer_header.php");
	include("customizer_footer.php");
	include("customizer_other.php");
}

add_action( 'customize_register', 'ctx_customizer_register' );

/*-----------------------------------------------------------------------------------*/
/*	Sanitize
/*-----------------------------------------------------------------------------------*/

function sanitize_setting( $input ) {
	return $input;
}

function sanitize_setting_css( $input ) {
	return $input;
}

function sanitize_setting_js( $input ) {
	return $input;
}

?>