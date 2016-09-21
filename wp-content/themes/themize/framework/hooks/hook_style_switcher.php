<?php
/*-----------------------------------------------------------------------------------*/
/*	Style Switcher
/*-----------------------------------------------------------------------------------*/

add_action('style_switcher', 'themize_style_switcher'); 

function themize_style_switcher() { ?>

	<div class="live-previews-container">
		<div class="live-previews-button">
			<i class="fa fa-cog"></i> Option Samples
		</div>

		<div class="live-previews-screenshots">
			<div class="live-previews-logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo_white.png" alt="">
				<p>A sample of some of the options<br>available in Themize</p>
			</div>

			<div class="live-preview-option">
				<label>Header Style</label>
				<div class="btn-group" role="group" aria-label="...">
				  <button type="button" id="option-header-creative" class="btn btn-default btn-active">Creative</button>
				  <button type="button" id="option-header-standard" class="btn btn-default">Standard</button>
				</div>
			</div>

			<div class="live-preview-option option-creative">
				<label>Header Background Opacity</label>
				<input type="text" id="option-header-opacity-creative" class="range" data-min="0" data-max="1" data-from="0.74" data-step="0.01" data-hideminmax="true" value="0.74">
			</div>

			<div class="live-preview-option option-size">
				<label>Header Size</label>
				<input type="text" id="option-header-size" class="range" data-min="20" data-max="100" data-from="45" data-step="1" data-hideminmax="true" value="45">
			</div>

			<div class="live-preview-option">
				<label>Layout: (Over 8 different layouts available)</label>
				<div class="btn-group" role="group" aria-label="...">
				  <button type="button" id="option-full-width" class="btn btn-default btn-active">Full</button>
				  <button type="button" id="option-boxed" class="btn btn-default">Boxed</button>
				  <button type="button" id="option-float-top" class="btn btn-default">Float Top</button>
				</div>
			</div>
<!-- 
			<div class="live-preview-option">
				<label>Full Website Width</label>
				<input type="text" id="option-website-width" class="range" data-min="800" data-max="2000" to="1170" data-step="1" data-hideminmax="true" value="1170">
			</div>

			<div class="live-preview-option">
				<label>Full Website Width</label>
				<input type="text" id="option-website-width" class="range" data-min="800" data-max="2000" to="1170" data-step="1" data-hideminmax="true" value="1170">
			</div> -->

			<div class="live-preview-option">
				<label>Navigation Position:</label>
				<div class="btn-group" role="group" aria-label="...">
					<button type="button" id="option-nav-left" class="btn btn-default">Left</button>
					<button type="button" id="option-nav-center" class="btn btn-default">Center</button>
				 	<button type="button" id="option-nav-right" class="btn btn-default btn-active">Right</button>
				</div>
			</div>

			<div class="live-preview-option">
				<label>Sub Menu Colour:</label>
				<div class="btn-group" role="group" aria-label="...">
				  <button type="button" id="option-submenu-dark" class="btn btn-default btn-active">Dark</button>
				  <button type="button" id="option-submenu-white" class="btn btn-default">White</button>
				  <button type="button" id="option-submenu-blue" class="btn btn-default">Blue</button>
				  <button type="button" class="btn btn-default">Unlimited Colours</button>
				</div>
			</div>

			<div class="live-preview-option">
				<label>Header:</label>
				<div class="btn-group" role="group" aria-label="...">
				  <button type="button" id="option-header-topbar" class="btn btn-default">Top Bar</button>
				  <button type="button" id="option-header-rainbowbar" class="btn btn-default btn-active">Rainbow Bar</button>
				</div>
			</div>

			<div class="live-preview-option">
				<label>Menu Hover <strong>(Hundreds of variations available)</strong></label>
				<div class="btn-group" role="group" aria-label="...">
				  <button type="button" id="option-menu-default" class="btn btn-default btn-active">Default</button>
				  <button type="button" id="option-menu-style1" class="btn btn-default">#1</button>
				  <button type="button" id="option-menu-style2" class="btn btn-default">#2</button>
				  <button type="button" id="option-menu-style3" class="btn btn-default">#3</button>
				  <button type="button" id="option-menu-style4" class="btn btn-default">#4</button>
				</div>
			</div>

			<div class="live-preview-option">
				<label>Menu Typography</label>
				<div class="btn-group" role="group" aria-label="...">
				  <button type="button" id="option-menu-type-uppercase" class="btn btn-default btn-active">Uppercase</button>
				  <button type="button" id="option-menu-type-standard" class="btn btn-default">Standard</button>
				</div>
			</div>
		</div>
	</div>

<?php } ?>