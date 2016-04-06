<?php


class CssController{


	function displayHeader($id, $header, $lead = null){
		?>
			<div class="bg-blue header">
	   			<h1 id="<?php echo $id; ?>"><?php echo $header; ?></h1>
	   			<?php if($lead != null): ?>
					<p class="lead"><?php echo $lead; ?></p>
				<?php endif; ?>
			</div>
		<?php
	}

	function displaySubHeader($id, $header, $description){
		?>

		   <h2 class="subhead" id="<?php echo $id; ?>"><?php echo $header; ?></h2>
   			<?php foreach($description as $paragraph): ?>
   				<p><?php echo $paragraph; ?></p>
   			<?php endforeach; ?>

   <?php
	}

	function displayOverview(){

   		$this->displayHeader(
			'overview',
			'Overview',
			'Get the lowdown on the key pieces of Bootstrap\'s infrastructure, including our approach to better, faster, stronger web development.'
		);



   ?>

   <div class="section-body">


   		<?php
   			$this->displaySubHeader(
				'overview-doctype',
				'HTML5 doctype',
				array('Bootstrap makes use of certain HTML elements and CSS properties that require the use of the HTML5 doctype. Include it at the beginning of all your projects.')
			);
   		?>

   <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="cp">&lt;!DOCTYPE html&gt;</span>
	<span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">"en"</span><span class="nt">&gt;</span>
	...
	<span class="nt">&lt;/html&gt;</span></code></pre>
   </figure>


      		<?php
   			$this->displaySubHeader(
   						'overview-mobile',
   						'Mobile first',
   						array(
   							'With Bootstrap 2, we added optional mobile friendly styles for key aspects of the framework. With Bootstrap 3, we\'ve rewritten the project to be mobile friendly from the start. Instead of adding on optional mobile styles, they\'re baked right into the core. In fact, <strong>Bootstrap is mobile first</strong>. Mobile first styles can be found throughout the entire library instead of in separate files.'
   							
   							)
   						);
   		?>
  <p>To ensure proper rendering and touch zooming, <strong>add the viewport meta tag</strong> to your <code>&lt;head&gt;</code>.</p>
   <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">"viewport"</span> <span class="na">content=</span><span class="s">"width=device-width, initial-scale=1"</span><span class="nt">&gt;</span></code></pre>
   </figure>
   <p>You can disable zooming capabilities on mobile devices by adding <code>user-scalable=no</code> to the viewport meta tag. This disables zooming, meaning users are only able to scroll, and results in your site feeling a bit more like a native application. Overall, we don't recommend this on every site, so use caution!</p>
   <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">"viewport"</span> <span class="na">content=</span><span class="s">"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"</span><span class="nt">&gt;</span></code></pre>
   </figure>
   <h2 id="overview-type-links">Typography and links</h2>
   <p>Bootstrap sets basic global display, typography, and link styles. Specifically, we:</p>
   <ul class="bullet-list">
      <li>Set <code>background-color: #fff;</code> on the <code>body</code></li>
      <li>Use the <code>@font-family-base</code>, <code>@font-size-base</code>, and <code>@line-height-base</code> attributes as our typographic base</li>
      <li>Set the global link color via <code>@link-color</code> and apply link underlines only on <code>:hover</code></li>
   </ul>
   <p>These styles can be found within <code>scaffolding.less</code>.</p>


  		<?php
			$this->displaySubHeader(
						'overview-normalize',
						'Normalize.css',
						array(
							'For improved cross-browser rendering, we use <a href="http://necolas.github.io/normalize.css/" target="_blank">Normalize.css</a>, a project by <a href="https://twitter.com/necolas" target="_blank">Nicolas Gallagher</a> and <a href="https://twitter.com/jon_neal" target="_blank">Jonathan Neal</a>.'
							)
						);

			$this->displaySubHeader(
				'overview-container',
				'Containers',
				array(
					'Bootstrap requires a containing element to wrap site contents and house our grid system. You may choose one of two containers to use in your projects. Note that, due to <code>padding</code> and more, neither container is nestable.'
					)
						);
		?>


   <p>Use <code>.container</code> for a responsive fixed width container.</p>
   <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
	...
	<span class="nt">&lt;/div&gt;</span></code></pre>
   </figure>
   <p>Use <code>.container-fluid</code> for a full width container, spanning the entire width of your viewport.</p>
   <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container-fluid"</span><span class="nt">&gt;</span>
	...
	<span class="nt">&lt;/div&gt;</span>



	</code></pre>
   </figure>


</div>
<?php

}



function displayGrid(){

   		$this->displayHeader(
   					'grid',
   					'Grid system',
   					'Bootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes <a href="#grid-example-basic">predefined classes</a> for easy layout options, as well as powerful <a href="#grid-less">mixins for generating more semantic layouts</a>.'
   				);
?>
   <div class="section-body">



  		<?php
			$this->displaySubHeader(
						'grid-intro',
						'Introduction',
						array(
							'Grid systems are used for creating page layouts through a series of rows and columns that house your content. Here\'s how the Bootstrap grid system works:',
							'<ul class="bullet-list">
		            <li>Rows must be placed within a <code>.container</code> (fixed-width) or <code>.container-fluid</code> (full-width) for proper alignment and padding.</li>
		            <li>Use rows to create horizontal groups of columns.</li>
		            <li>Content should be placed within columns, and only columns may be immediate children of rows.</li>
		            <li>Predefined grid classes like <code>.row</code> and <code>.col-xs-4</code> are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.</li>
		            <li>Columns create gutters (gaps between column content) via <code>padding</code>. That padding is offset in rows for the first and last column via negative margin on <code>.row</code>s.</li>
		            <li>The negative margin is why the examples below are outdented. It\'s so that content within grid columns is lined up with non-grid content.</li>
		            <li>Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three <code>.col-xs-4</code>.</li>
		            <li>If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.</li>
		            <li>Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any <code>.col-md-*</code> class to an element will not only affect its styling on medium devices but also on large devices if a <code>.col-lg-*</code> class is not present.</li>
		        </ul>',
		        'Look to the examples for applying these principles to your code.'

							)
						);

					$this->displaySubHeader(
						'grid-media-queries',
						'Media queries',
						array('We use the following media queries in our Less files to create the key breakpoints in our grid system.')
						);
		?>
		       
		        


		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="cm">/* Extra small devices (phones, less than 768px) */</span>
<span class="cm">/* No media query since this is the default in Bootstrap */</span>

<span class="cm">/* Small devices (tablets, 768px and up) */</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-sm-min</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="cm">/* Medium devices (desktops, 992px and up) */</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-md-min</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="cm">/* Large devices (large desktops, 1200px and up) */</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-lg-min</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre></figure>

		        <p>We occasionally expand on these media queries to include a <code>max-width</code> to limit CSS to a narrower set of devices.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@media</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-xs-max</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-sm-min</span><span class="p">)</span> <span class="nf">and</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-sm-max</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-md-min</span><span class="p">)</span> <span class="nf">and</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-md-max</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-lg-min</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre></figure>

<?php
				$this->displaySubHeader(
						'grid-options',
						'Grid options',
						array('See how aspects of the Bootstrap grid system work across multiple devices with a handy table.')
						);
		?>
		       
		        
		        <div class="table-responsive">
		            <table class="table table-bordered table-striped">
		                <thead>
		                    <tr>
		                        <th></th>
		                        <th> Extra small devices <small>Phones (&lt;768px)</small> </th>
		                        <th> Small devices <small>Tablets (≥768px)</small> </th>
		                        <th> Medium devices <small>Desktops (≥992px)</small> </th>
		                        <th> Large devices <small>Desktops (≥1200px)</small> </th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th class="text-nowrap" scope="row">Grid behavior</th>
		                        <td>Horizontal at all times</td>
		                        <td colspan="3">Collapsed to start, horizontal above breakpoints</td>
		                    </tr>
		                    <tr>
		                        <th class="text-nowrap" scope="row">Container width</th>
		                        <td>None (auto)</td>
		                        <td>750px</td>
		                        <td>970px</td>
		                        <td>1170px</td>
		                    </tr>
		                    <tr>
		                        <th class="text-nowrap" scope="row">Class prefix</th>
		                        <td><code>.col-xs-</code></td>
		                        <td><code>.col-sm-</code></td>
		                        <td><code>.col-md-</code></td>
		                        <td><code>.col-lg-</code></td>
		                    </tr>
		                    <tr>
		                        <th class="text-nowrap" scope="row"># of columns</th>
		                        <td colspan="4">12</td>
		                    </tr>
		                    <tr>
		                        <th class="text-nowrap" scope="row">Column width</th>
		                        <td class="text-muted">Auto</td>
		                        <td>~62px</td>
		                        <td>~81px</td>
		                        <td>~97px</td>
		                    </tr>
		                    <tr>
		                        <th class="text-nowrap" scope="row">Gutter width</th>
		                        <td colspan="4">30px (15px on each side of a column)</td>
		                    </tr>
		                    <tr>
		                        <th class="text-nowrap" scope="row">Nestable</th>
		                        <td colspan="4">Yes</td>
		                    </tr>
		                    <tr>
		                        <th class="text-nowrap" scope="row">Offsets</th>
		                        <td colspan="4">Yes</td>
		                    </tr>
		                    <tr>
		                        <th class="text-nowrap" scope="row">Column ordering</th>
		                        <td colspan="4">Yes</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>

		        <?php

					$this->displaySubHeader(
						'grid-example-basic',
						'Example: Stacked-to-horizontal',
						array('Using a single set of <code>.col-md-*</code> grid classes, you can create a basic grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any <code>.row</code>.')
						);
		        ?>
		        <div class="row show-grid">
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		            <div class="col-md-1">.col-md-1</div>
		        </div>
		        <div class="row show-grid">
		            <div class="col-md-8">.col-md-8</div>
		            <div class="col-md-4">.col-md-4</div>
		        </div>
		        <div class="row show-grid">
		            <div class="col-md-4">.col-md-4</div>
		            <div class="col-md-4">.col-md-4</div>
		            <div class="col-md-4">.col-md-4</div>
		        </div>
		        <div class="row show-grid">
		            <div class="col-md-6">.col-md-6</div>
		            <div class="col-md-6">.col-md-6</div>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-8"</span><span class="nt">&gt;</span>.col-md-8<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span class="nt">&gt;</span>.col-md-6<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span class="nt">&gt;</span>.col-md-6<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>


  		<?php
			$this->displaySubHeader(
				'grid-example-fluid',
				'Example: Fluid container',
				array('Turn any fixed-width grid layout into a full-width layout by changing your outermost <code>.container</code> to <code>.container-fluid</code>.')
				);
        ?>

		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container-fluid"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>



  		<?php
			$this->displaySubHeader(
				'grid-example-mixed',
				'Example: Mobile and desktop',
				array('Don\'t want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding <code>.col-xs-*</code> <code>.col-md-*</code> to your columns. See the example below for a better idea of how it all works.')
				);
        ?>
		        <div class="row show-grid">
		            <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
		            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		        </div>
		        <div class="row show-grid">
		            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		        </div>
		        <div class="row show-grid">
		            <div class="col-xs-6">.col-xs-6</div>
		            <div class="col-xs-6">.col-xs-6</div>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Stack the columns on mobile by making one full-width and the other half-width --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-12 col-md-8"</span><span class="nt">&gt;</span>.col-xs-12 .col-md-8<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Columns are always 50% wide, on mobile and desktop --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6"</span><span class="nt">&gt;</span>.col-xs-6<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6"</span><span class="nt">&gt;</span>.col-xs-6<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

	<?php
			$this->displaySubHeader(
				'grid-example-mixed-complete',
				'Example: Mobile, tablet, desktop',
				array('Build on the previous example by creating even more dynamic and powerful layouts with tablet <code>.col-sm-*</code> classes.')
				);
        ?>
		        <div class="row show-grid">
		            <div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
		            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		        </div>
		        <div class="row show-grid">
		            <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
		            <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
		            <div class="clearfix visible-xs-block"></div>
		            <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-12 col-sm-6 col-md-8"</span><span class="nt">&gt;</span>.col-xs-12 .col-sm-6 .col-md-8<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-4<span class="nt">&lt;/div&gt;</span>
  <span class="c">&lt;!-- Optional: clear the XS cols if their content doesn't match in height --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"clearfix visible-xs-block"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>


<?php
			$this->displaySubHeader(
				'grid-example-wrapping',
				'Example: Column wrapping',
				array('If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.')
				);
        ?>
		        <div class="row show-grid">
		            <div class="col-xs-9">.col-xs-9</div>
		            <div class="col-xs-4">.col-xs-4
		                <br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
		            <div class="col-xs-6">.col-xs-6
		                <br>Subsequent columns continue along the new line.</div>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-9"</span><span class="nt">&gt;</span>.col-xs-9<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-4"</span><span class="nt">&gt;</span>.col-xs-4<span class="nt">&lt;br&gt;</span>Since 9 + 4 = 13 <span class="ni">&amp;gt;</span> 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6"</span><span class="nt">&gt;</span>.col-xs-6<span class="nt">&lt;br&gt;</span>Subsequent columns continue along the new line.<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        <h2 id="grid-responsive-resets"><a class="anchorjs-link " href="#grid-responsive-resets" aria-label="Anchor link for: grid responsive resets" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Responsive column resets</h2>
		        <p>With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a <code>.clearfix</code> and our <a href="#responsive-utilities">responsive utility classes</a>.</p>
		        <div class="row show-grid">
		            <div class="col-xs-6 col-sm-3"> .col-xs-6 .col-sm-3
		                <br> Resize your viewport or check it out on your phone for an example. </div>
		            <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
		            <div class="clearfix visible-xs-block"></div>
		            <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
		            <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>

  <span class="c">&lt;!-- Add the extra clearfix for only the required viewport --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"clearfix visible-xs-block"</span><span class="nt">&gt;&lt;/div&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        <p>In addition to column clearing at responsive breakpoints, you may need to <strong>reset offsets, pushes, or pulls</strong>. See this in action in <a href="../examples/grid/">the grid example</a>.</p>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-5 col-md-6"</span><span class="nt">&gt;</span>.col-sm-5 .col-md-6<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0"</span><span class="nt">&gt;</span>.col-sm-5 .col-sm-offset-2 .col-md-6 .col-md-offset-0<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6 col-md-5 col-lg-6"</span><span class="nt">&gt;</span>.col-sm-6 .col-md-5 .col-lg-6<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-0"</span><span class="nt">&gt;</span>.col-sm-6 .col-md-5 .col-md-offset-2 .col-lg-6 .col-lg-offset-0<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>


<?php
			$this->displaySubHeader(
				'grid-offsetting',
				'Offsetting columns',
				array('Move columns to the right using <code>.col-md-offset-*</code> classes. These classes increase the left margin of a column by <code>*</code> columns. For example, <code>.col-md-offset-4</code> moves <code>.col-md-4</code> over four columns.')
				);
        ?>

		        <div class="row show-grid">
		            <div class="col-md-4">.col-md-4</div>
		            <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
		        </div>
		        <div class="row show-grid">
		            <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
		            <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
		        </div>
		        <div class="row show-grid">
		            <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4 col-md-offset-4"</span><span class="nt">&gt;</span>.col-md-4 .col-md-offset-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-md-offset-3"</span><span class="nt">&gt;</span>.col-md-3 .col-md-offset-3<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-md-offset-3"</span><span class="nt">&gt;</span>.col-md-3 .col-md-offset-3<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6 col-md-offset-3"</span><span class="nt">&gt;</span>.col-md-6 .col-md-offset-3<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        <p>You can also override offsets from lower grid tiers with <code>.col-*-offset-0</code> classes.</p>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-0"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>


<?php
			$this->displaySubHeader(
				'grid-nesting',
				'Nesting columns',
				array('To nest your content with the default grid, add a new <code>.row</code> and set of <code>.col-sm-*</code> columns within an existing <code>.col-sm-*</code> column. Nested rows should include a set of columns that add up to 12 or fewer (it is not required that you use all 12 available columns).')
				);
        ?>

		        <div class="row show-grid">
		            <div class="col-sm-9"> Level 1: .col-sm-9
		                <div class="row show-grid">
		                    <div class="col-xs-8 col-sm-6"> Level 2: .col-xs-8 .col-sm-6 </div>
		                    <div class="col-xs-4 col-sm-6"> Level 2: .col-xs-4 .col-sm-6 </div>
		                </div>
		            </div>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
    Level 1: .col-sm-9
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-8 col-sm-6"</span><span class="nt">&gt;</span>
        Level 2: .col-xs-8 .col-sm-6
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-4 col-sm-6"</span><span class="nt">&gt;</span>
        Level 2: .col-xs-4 .col-sm-6
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>


<?php
			$this->displaySubHeader(
				'grid-column-ordering',
				'Column ordering',
				array('Easily change the order of our built-in grid columns with <code>.col-md-push-*</code> and <code>.col-md-pull-*</code> modifier classes.')
				);
        ?>

		        <div class="row show-grid">
		            <div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
		            <div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
		        </div>
		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-9 col-md-push-3"</span><span class="nt">&gt;</span>.col-md-9 .col-md-push-3<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-md-pull-9"</span><span class="nt">&gt;</span>.col-md-3 .col-md-pull-9<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<?php
			$this->displaySubHeader(
				'grid-less',
				'Less mixins and variables',
				array('In addition to <a href="#grid-example-basic">prebuilt grid classes</a> for fast layouts, Bootstrap includes Less variables and mixins for quickly generating your own simple, semantic layouts.')
				);
        ?>

		        <h3 id="variables"><a class="anchorjs-link " href="#variables" aria-label="Anchor link for: variables" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Variables</h3>
		        <p>Variables determine the number of columns, the gutter width, and the media query point at which to begin floating columns. We use these to generate the predefined grid classes documented above, as well as for the custom mixins listed below.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@grid-columns</span><span class="nd">:</span>              <span class="nt">12</span><span class="p">;</span>
<span class="k">@grid-gutter-width</span><span class="nd">:</span>         <span class="nt">30px</span><span class="p">;</span>
<span class="k">@grid-float-breakpoint</span><span class="nd">:</span>     <span class="nt">768px</span><span class="p">;</span></code></pre></figure>

		        <h3 id="mixins"><a class="anchorjs-link " href="#mixins" aria-label="Anchor link for: mixins" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Mixins</h3>
		        <p>Mixins are used in conjunction with the grid variables to generate semantic CSS for individual grid columns.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Creates a wrapper for a series of columns
</span><span class="err">.</span><span class="na">make-row</span><span class="err">(@</span><span class="na">gutter</span><span class="p">:</span> <span class="o">@</span><span class="n">grid-gutter-width</span><span class="p">)</span> <span class="p">{</span>
  <span class="c1">// Then clear the floated columns
</span>  <span class="nc">.clearfix</span><span class="o">()</span><span class="p">;</span>

  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-sm-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">margin-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">-2</span><span class="p">);</span>
    <span class="nl">margin-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">-2</span><span class="p">);</span>
  <span class="p">}</span>

  <span class="c1">// Negative margin nested rows out to align the content of columns
</span>  <span class="nc">.row</span> <span class="p">{</span>
    <span class="nl">margin-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">-2</span><span class="p">);</span>
    <span class="nl">margin-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">-2</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Generate the extra small columns
</span><span class="nc">.make-xs-column</span><span class="o">(@</span><span class="nt">columns</span><span class="p">;</span> <span class="k">@gutter</span><span class="nd">:</span> <span class="o">@</span><span class="nt">grid-gutter-width</span><span class="o">)</span> <span class="p">{</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
  <span class="c1">// Prevent columns from collapsing when empty
</span>  <span class="nl">min-height</span><span class="p">:</span> <span class="m">1px</span><span class="p">;</span>
  <span class="c1">// Inner gutter via padding
</span>  <span class="nl">padding-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>
  <span class="nl">padding-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>

  <span class="c1">// Calculate width based on number of columns available
</span>  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">grid-float-breakpoint</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
    <span class="nl">width</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Generate the small columns
</span><span class="nc">.make-sm-column</span><span class="o">(@</span><span class="nt">columns</span><span class="p">;</span> <span class="k">@gutter</span><span class="nd">:</span> <span class="o">@</span><span class="nt">grid-gutter-width</span><span class="o">)</span> <span class="p">{</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
  <span class="c1">// Prevent columns from collapsing when empty
</span>  <span class="nl">min-height</span><span class="p">:</span> <span class="m">1px</span><span class="p">;</span>
  <span class="c1">// Inner gutter via padding
</span>  <span class="nl">padding-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>
  <span class="nl">padding-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>

  <span class="c1">// Calculate width based on number of columns available
</span>  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-sm-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
    <span class="nl">width</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Generate the small column offsets
</span><span class="nc">.make-sm-column-offset</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-sm-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">margin-left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="nc">.make-sm-column-push</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-sm-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="nc">.make-sm-column-pull</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-sm-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">right</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Generate the medium columns
</span><span class="nc">.make-md-column</span><span class="o">(@</span><span class="nt">columns</span><span class="p">;</span> <span class="k">@gutter</span><span class="nd">:</span> <span class="o">@</span><span class="nt">grid-gutter-width</span><span class="o">)</span> <span class="p">{</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
  <span class="c1">// Prevent columns from collapsing when empty
</span>  <span class="nl">min-height</span><span class="p">:</span> <span class="m">1px</span><span class="p">;</span>
  <span class="c1">// Inner gutter via padding
</span>  <span class="nl">padding-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>
  <span class="nl">padding-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>

  <span class="c1">// Calculate width based on number of columns available
</span>  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-md-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
    <span class="nl">width</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Generate the medium column offsets
</span><span class="nc">.make-md-column-offset</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-md-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">margin-left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="nc">.make-md-column-push</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-md-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="nc">.make-md-column-pull</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-md-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">right</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Generate the large columns
</span><span class="nc">.make-lg-column</span><span class="o">(@</span><span class="nt">columns</span><span class="p">;</span> <span class="k">@gutter</span><span class="nd">:</span> <span class="o">@</span><span class="nt">grid-gutter-width</span><span class="o">)</span> <span class="p">{</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
  <span class="c1">// Prevent columns from collapsing when empty
</span>  <span class="nl">min-height</span><span class="p">:</span> <span class="m">1px</span><span class="p">;</span>
  <span class="c1">// Inner gutter via padding
</span>  <span class="nl">padding-left</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>
  <span class="nl">padding-right</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>

  <span class="c1">// Calculate width based on number of columns available
</span>  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-lg-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
    <span class="nl">width</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Generate the large column offsets
</span><span class="nc">.make-lg-column-offset</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-lg-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">margin-left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="nc">.make-lg-column-push</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-lg-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="nc">.make-lg-column-pull</span><span class="o">(@</span><span class="nt">columns</span><span class="o">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-lg-min</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">right</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="o">@</span><span class="n">columns</span> <span class="o">/</span> <span class="o">@</span><span class="n">grid-columns</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="example-usage"><a class="anchorjs-link " href="#example-usage" aria-label="Anchor link for: example usage" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Example usage</h3>
		        <p>You can modify the variables to your own custom values, or just use the mixins with their default values. Here's an example of using the default settings to create a two-column layout with a gap between.</p>
		        
<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.wrapper</span> <span class="p">{</span>
  <span class="nc">.make-row</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.content-main</span> <span class="p">{</span>
  <span class="nc">.make-lg-column</span><span class="o">(</span><span class="nt">8</span><span class="o">)</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.content-secondary</span> <span class="p">{</span>
  <span class="nc">.make-lg-column</span><span class="o">(</span><span class="nt">3</span><span class="o">)</span><span class="p">;</span>
  <span class="nc">.make-lg-column-offset</span><span class="o">(</span><span class="nt">1</span><span class="o">)</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"wrapper"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content-main"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content-secondary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>



</div>
<?php
}



function displayTypography(){

   		$this->displayHeader(
   					'type',
   					'Typography'
   				);

?>

   <div class="section-body">


<?php
			$this->displaySubHeader(
				'type-font-family',
				'Font Family',
				array('Digital River\'s offical web fonts are DIN Engschrift, DIN Medium, DIN Light, Arial.')
				);
        ?>

		<div class="dr-callout dr-callout-warning">
		    <h4>Heading Font Family</h4>
		    <p>DIN Engschrift, DIN Medium, DIN Light should only be used in headings.</p>
		</div>

		<div class="dr-callout dr-callout-warning">
		    <h4>Body Font Family</h4>
		    <p>Arial should only be used in paragraphs. </p>
		</div>

<div class="example">
	<div class="top">
		<label>Example</label>
		<table class="table">
            <tbody>
                <tr>
					<td><h1 class="eng">DIN Engschrift Heading</h1></td>
				</tr>
                <tr>
					<td><h1 class="med">DIN Medium Heading</h1></td>
				</tr>
                <tr>	
					<td><h1 class="light">DIN Light Heading</h1></td>
				</tr>
                <tr>
					<td><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac nunc nec turpis suscipit cursus eget quis nibh. Aenean id nibh odio. Aliquam erat volutpat. In maximus tincidunt urna sit amet tincidunt. Aliquam nec mauris rhoncus, iaculis erat sed, blandit turpis. Sed sed diam accumsan, bibendum ex in, mattis nulla. Sed blandit pharetra dolor, a tempor felis suscipit aliquam. Praesent placerat efficitur dolor, ornare mattis tortor pellentesque non.</p></td>
				</tr>
			</tbody>
		</table>
	</div>
	<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"eng"</span><span class="nt">&gt;</span></span>DIN Engschrift Heading<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"med"</span><span class="nt">&gt;</span></span>DIN Medium Heading<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"light"</span><span class="nt">&gt;</span></span>DIN Light Heading<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;p&gt;</span> ... <span class="nt">&lt;/p&gt;</span>
	</code></pre></figure>

</div>
		

<?php
			$this->displaySubHeader(
				'type-headings',
				'Headings',
				array('All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available. <code>.h1</code> through <code>.h6</code> classes are also available, for when you want to match the font styling of a heading but still want your text to be displayed inline.')
				);
        ?>

		<div class="dr-callout dr-callout-info">
		    <h4>Visual Hierarchy</h4>
		    <p>To ensure visual hierarchy, use <code>.h1</code> through <code>.h6</code> classes to adjust the size of headings when needed.</p>
		</div>


<div class="example">
			<div class="top">
				<label>Example</label>
				 <table class="table">
		                <tbody>
		                    <tr>
		                        <td><h1>h1 Heading</h1></td>
		                        <td class="text-right" style="vertical-align:bottom">
		                        	<h1 class="h6">h1 Heading <small>with h6 class</small></h1>
		                        </td>
		                    </tr>
		                    <tr>
		                        <td><h2>h2 Heading</h2></td>
		                        <td class="text-right" style="vertical-align:bottom">
		                        	<h2 class="h5">h2 Heading <small>with h5 class</small></h2>
		                        </td>
		                    </tr>
		                    <tr>
		                        <td><h3>h3 Heading</h3></td>
		                        <td class="text-right" style="vertical-align:bottom">
		                        	<h3 class="h4">h3 Heading <small>with h4 class</small></h3>
		                        </td>
		                    </tr>
		                    <tr>
		                        <td><h4>h4 Heading</h4></td>
		                        <td class="text-right" style="vertical-align:bottom">
		                        	<h4 class="h3">h4 Heading <small>with h3 class</small></h4>
		                        </td>
		                    </tr>
		                    <tr>
		                        <td><h5>h5 Heading</h5></td>
		                        <td class="text-right" style="vertical-align:bottom">
		                        	<h5 class="h2">h5 Heading <small>with h2 class</small></h5>
		                        </td>
		                    </tr>
		                    <tr>
		                        <td><h6>h6 Heading</h6></td>
		                        <td class="text-right" style="vertical-align:bottom">
		                        	<h6 class="h1">h6 Heading <small>with h1 class</small></h6>
		                        </td>
		                    </tr>
		                </tbody>
		            </table>
			</div>
			<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1&gt;</span>h1 Heading<span class="nt">&lt;/h1&gt;</span>    <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"h6"</span><span class="nt">&gt;</span>h1 Heading <span class="nt">&lt;small&gt;</span>with h6 class<span class="nt">&lt;/small&gt;&lt;/h1&gt;</span>
<span class="nt">&lt;h2&gt;</span>h2 Heading<span class="nt">&lt;/h2&gt;</span>    <span class="nt">&lt;h2</span> <span class="na">class=</span><span class="s">"h5"</span><span class="nt">&gt;</span>h2 Heading <span class="nt">&lt;small&gt;</span>with h5 class<span class="nt">&lt;/small&gt;&lt;/h2&gt;</span>
<span class="nt">&lt;h3&gt;</span>h3 Heading<span class="nt">&lt;/h3&gt;</span>    <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"h4"</span><span class="nt">&gt;</span>h3 Heading <span class="nt">&lt;small&gt;</span>with h4 class<span class="nt">&lt;/small&gt;&lt;/h3&gt;</span>
<span class="nt">&lt;h4&gt;</span>h4 Heading<span class="nt">&lt;/h4&gt;</span>    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"h3"</span><span class="nt">&gt;</span>h4 Heading <span class="nt">&lt;small&gt;</span>with h3 class<span class="nt">&lt;/small&gt;&lt;/h4&gt;</span>
<span class="nt">&lt;h5&gt;</span>h5 Heading<span class="nt">&lt;/h5&gt;</span>    <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"h2"</span><span class="nt">&gt;</span>h5 Heading <span class="nt">&lt;small&gt;</span>with h2 class<span class="nt">&lt;/small&gt;&lt;/h5&gt;</span>
<span class="nt">&lt;h6&gt;</span>h6 Heading<span class="nt">&lt;/h6&gt;</span>    <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"h1"</span><span class="nt">&gt;</span>h6 Heading <span class="nt">&lt;small&gt;</span>with h1 class<span class="nt">&lt;/small&gt;&lt;/h6&gt;</span>
</code></pre></figure>
		</div>

		        <p>Create lighter, secondary text in any heading with a generic <code>&lt;small&gt;</code> tag or the <code>.small</code> class.</p>
		    
<div class="example">
			<div class="top">
				<label>Example</label>
		            <table class="table">
		                <tbody>
		                    <tr>
		                        <td>
		                            <h1>h1 Heading <small>Secondary text</small></h1></td>
		                    </tr>
		                    <tr>
		                        <td>
		                            <h2>h2 Heading <small>Secondary text</small></h2></td>
		                    </tr>
		                    <tr>
		                        <td>
		                            <h3>h3 Heading <small>Secondary text</small></h3></td>
		                    </tr>
		                    <tr>
		                        <td>
		                            <h4>h4 Heading <small>Secondary text</small></h4></td>
		                    </tr>
		                    <tr>
		                        <td>
		                            <h5>h5 Heading <small>Secondary text</small></h5></td>
		                    </tr>
		                    <tr>
		                        <td>
		                            <h6>h6 Heading <small>Secondary text</small></h6></td>
		                    </tr>
		                </tbody>
		            </table>
			</div>
			<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1&gt;</span>h1 Heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h1&gt;</span>
<span class="nt">&lt;h2&gt;</span>h2 Heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h2&gt;</span>
<span class="nt">&lt;h3&gt;</span>h3 Heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h3&gt;</span>
<span class="nt">&lt;h4&gt;</span>h4 Heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h4&gt;</span>
<span class="nt">&lt;h5&gt;</span>h5 Heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h5&gt;</span>
<span class="nt">&lt;h6&gt;</span>h6 Heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h6&gt;</span>
</code></pre></figure>
		</div>



<?php
			$this->displaySubHeader(
				'type-body-copy',
				'Body copy',
				array('Bootstrap\'s global default <code>font-size</code> is <strong>14px</strong>, with a <code>line-height</code> of <strong>1.428</strong>. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin of half their computed line-height (10px by default).')
				);
        ?>

        <div class="example">
			<div class="top">
				<label>Example</label>
		            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
		            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
		            <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
			</div>
			<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
</code></pre></figure>
		</div>

<!-- 		        <h3 id="lead-body-copy"><a class="anchorjs-link " href="#lead-body-copy" aria-label="Anchor link for: lead body copy" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Lead body copy</h3>
		        <p>Make a paragraph stand out by adding <code>.lead</code>.</p>


        <div class="example">
			<div class="top">
				<label>Example</label>
	            <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
			</div>
			<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"lead"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span></code></pre></figure>
		</div>
 -->
		        

		        <h3 id="built-with-less"><a class="anchorjs-link " href="#built-with-less" aria-label="Anchor link for: built with less" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Built with Less</h3>
		        <p>The typographic scale is based on two Less variables in <strong>variables.less</strong>: <code>@font-size-base</code> and <code>@line-height-base</code>. The first is the base font-size used throughout and the second is the base line-height. We use those variables and some simple math to create the margins, paddings, and line-heights of all our type and more. Customize them and Bootstrap adapts.</p>
		       
		       <?php
			$this->displaySubHeader(
				'type-inline-text',
				'Inline text elements'
				);
        ?>
		       
		        <h3 id="marked-text"><a class="anchorjs-link " href="#marked-text" aria-label="Anchor link for: marked text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Marked text</h3>
		        <p>For highlighting a run of text due to its relevance in another context, use the <code>&lt;mark&gt;</code> tag.</p>
		       
        <div class="example">
			<div class="top">
				<label>Example</label>
	            <p>You can use the mark tag to
		                <mark>highlight</mark> text.</p>
			</div>
			<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html">You can use the mark tag to <span class="nt">&lt;mark&gt;</span>highlight<span class="nt">&lt;/mark&gt;</span> text.</code></pre></figure>
		</div>

		        <h3 id="deleted-text"><a class="anchorjs-link " href="#deleted-text" aria-label="Anchor link for: deleted text" data-anchorjs-icon="" ></a>Deleted and Strikethrough text</h3>
		        <p>The <code>&lt;del&gt;</code> tag is for indicating blocks of text that have been deleted, and the <code>&lt;s&gt;</code> tag is for indicating blocks of text that are no longer relevant use.</p>

		       <div class="example">
					<div class="top">
						<label>Example</label>
		            	<p><del>This line of text is meant to be treated as deleted text.</del></p>
		            	<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
					</div>
					<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;del&gt;</span>This line of text is meant to be treated as deleted text.<span class="nt">&lt;/del&gt;</span>
<span class="nt">&lt;s&gt;</span>This line of text is meant to be treated as no longer accurate.<span class="nt">&lt;/s&gt;</span></code></pre></figure>
				</div>

		        <h3 id="inserted-text"><a class="anchorjs-link " href="#inserted-text" aria-label="Anchor link for: inserted text" data-anchorjs-icon="" ></a>Inserted text and Underlined text</h3>
		        <p>Use the <code>&lt;ins&gt;</code> tag to indicate additions to the document. Use the <code>&lt;u&gt;</code> tag to underline text </p>

   				<div class="example">
					<div class="top">
						<label>Example</label>
		            	<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
		            	<p><u>This line of text will render as underlined</u></p>
					</div>
					<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ins&gt;</span>This line of text is meant to be treated as an addition to the document.<span class="nt">&lt;/ins&gt;</span>
<span class="nt">&lt;u&gt;</span>This line of text will render as underlined<span class="nt">&lt;/u&gt;</span></code></pre></figure>
				</div>

		        <h3 id="small-text"><a class="anchorjs-link " href="#small-text" aria-label="Anchor link for: small text" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Small text</h3>
		        <p>For de-emphasizing inline or blocks of text, use the <code>&lt;small&gt;</code> tag to set text at 85% the size of the parent. Heading elements receive their own <code>font-size</code> for nested <code>&lt;small&gt;</code> elements.</p>
		        <p>You may alternatively use an inline element with <code>.small</code> in place of any <code>&lt;small&gt;</code>.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>
		            	<p><small>This line of text is meant to be treated as fine print.</small></p>
		            </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;small&gt;</span>This line of text is meant to be treated as fine print.<span class="nt">&lt;/small&gt;</span></code></pre></figure>

</div>


		        <h3 id="bold"><a class="anchorjs-link " href="#bold" aria-label="Anchor link for: bold" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Bold</h3>
		        <p>For emphasizing a snippet of text with a heavier font-weight.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;strong&gt;</span>rendered as bold text<span class="nt">&lt;/strong&gt;</span></code></pre></figure>
</div>


		        <h3 id="italics"><a class="anchorjs-link " href="#italics" aria-label="Anchor link for: italics" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Italics</h3>
		        <p>For emphasizing a snippet of text with italics.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;em&gt;</span>rendered as italicized text<span class="nt">&lt;/em&gt;</span></code></pre></figure>
</div>


		        <div class="dr-callout dr-callout-info" id="callout-type-b-i-elems">
		            <h4>Alternate elements</h4>
		            <p>Feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5. <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>
		        </div>
		        <h2 id="type-alignment"><a class="anchorjs-link " href="#type-alignment" aria-label="Anchor link for: type alignment" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Alignment classes</h2>
		        <p>Easily realign text to components with text alignment classes.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <p class="text-left">Left aligned text.</p>
		            <p class="text-center">Center aligned text.</p>
		            <p class="text-right">Right aligned text.</p>
		            <p class="text-justify">Justified text.</p>
		            <p class="text-nowrap">No wrap text.</p>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-left"</span><span class="nt">&gt;</span>Left aligned text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-center"</span><span class="nt">&gt;</span>Center aligned text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-right"</span><span class="nt">&gt;</span>Right aligned text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-justify"</span><span class="nt">&gt;</span>Justified text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-nowrap"</span><span class="nt">&gt;</span>No wrap text.<span class="nt">&lt;/p&gt;</span></code></pre></figure>
</div>

<?php
			$this->displaySubHeader(
				'type-transformation',
				'Transformation classes',
				array('Transform text in components with text capitalization classes.')
				);
        ?>

   				<div class="example">
					<div class="top">
						<label>Example</label>		            <p class="text-lowercase">Lowercased text.</p>
		            <p class="text-uppercase">Uppercased text.</p>
		            <p class="text-capitalize">Capitalized text.</p>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-lowercase"</span><span class="nt">&gt;</span>Lowercased text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-uppercase"</span><span class="nt">&gt;</span>Uppercased text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-capitalize"</span><span class="nt">&gt;</span>Capitalized text.<span class="nt">&lt;/p&gt;</span></code></pre></figure>
</div>

<?php
			$this->displaySubHeader(
				'type-abbreviations',
				'Abbreviations',
				array('Stylized implementation of HTML\'s <code>&lt;abbr&gt;</code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a <code>title</code> attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover and to users of assistive technologies.')
				);
        ?>

		        <h3 id="basic-abbreviation"><a class="anchorjs-link " href="#basic-abbreviation" aria-label="Anchor link for: basic abbreviation" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Basic abbreviation</h3>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"attribute"</span><span class="nt">&gt;</span>attr<span class="nt">&lt;/abbr&gt;</span></code></pre></figure>
</div>

		        <h3 id="initialism"><a class="anchorjs-link " href="#initialism" aria-label="Anchor link for: initialism" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Initialism</h3>
		        <p>Add <code>.initialism</code> to an abbreviation for a slightly smaller font-size.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr> is the best thing since sliced bread.</p>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"HyperText Markup Language"</span> <span class="na">class=</span><span class="s">"initialism"</span><span class="nt">&gt;</span>HTML<span class="nt">&lt;/abbr&gt;</span></code></pre></figure>
</div>


<?php
			$this->displaySubHeader(
				'type-addresses',
				'Addresses',
				array('Present contact information for the nearest ancestor or the entire body of work. Preserve formatting by ending all lines with <code>&lt;br&gt;</code>.')
				);
        ?>

   				<div class="example">
					<div class="top">
						<label>Example</label>		
					</div>        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;address&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Twitter, Inc.<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
  1355 Market Street, Suite 900<span class="nt">&lt;br&gt;</span>
  San Francisco, CA 94103<span class="nt">&lt;br&gt;</span>
  <span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"Phone"</span><span class="nt">&gt;</span>P:<span class="nt">&lt;/abbr&gt;</span> (123) 456-7890
<span class="nt">&lt;/address&gt;</span>

<span class="nt">&lt;address&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Full Name<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"mailto:#"</span><span class="nt">&gt;</span>first.last@example.com<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/address&gt;</span></code></pre></figure>
</div>


<?php
			$this->displaySubHeader(
				'type-blockquotes',
				'Blockquotes',
				array('For quoting blocks of content from another source within your document.')
				);
        ?>
		        <h3 id="default-blockquote"><a class="anchorjs-link " href="#default-blockquote" aria-label="Anchor link for: default blockquote" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Default blockquote</h3>
		        <p>Wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For straight quotes, we recommend a <code>&lt;p&gt;</code>.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <blockquote>
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
		            </blockquote>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote&gt;</span>
  <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span></code></pre></figure>
</div>


		        <h3 id="blockquote-options"><a class="anchorjs-link " href="#blockquote-options" aria-label="Anchor link for: blockquote options" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Blockquote options</h3>
		        <p>Style and content changes for simple variations on a standard <code>&lt;blockquote&gt;</code>.</p>
		        <h4 id="naming-a-source"><a class="anchorjs-link " href="#naming-a-source" aria-label="Anchor link for: naming a source" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Naming a source</h4>
		        <p>Add a <code>&lt;footer&gt;</code> for identifying the source. Wrap the name of the source work in <code>&lt;cite&gt;</code>.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <blockquote>
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
		                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
		            </blockquote>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote&gt;</span>
  <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span></code></pre></figure>
</div>


		        <h4 id="alternate-displays"><a class="anchorjs-link " href="#alternate-displays" aria-label="Anchor link for: alternate displays" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Alternate displays</h4>
		        <p>Add <code>.blockquote-reverse</code> for a blockquote with right-aligned content.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <blockquote class="blockquote-reverse">
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
		                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
		            </blockquote>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"blockquote-reverse"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/blockquote&gt;</span></code></pre></figure>
</div>


<?php
			$this->displaySubHeader(
				'type-lists',
				'Lists'
				);
        ?>
		        <h3 id="unordered"><a class="anchorjs-link " href="#unordered" aria-label="Anchor link for: unordered" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Unordered</h3>
		        <p>A list of items in which the order does <em>not</em> explicitly matter.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>
		                    <ul class="bullet-list">
		                        <li>Phasellus iaculis neque</li>
		                        <li>Purus sodales ultricies</li>
		                        <li>Vestibulum laoreet porttitor sem</li>
		                        <li>Ac tristique libero volutpat at</li>
		                    </ul>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul <span class="na">class=</span><span class="s">"bullet-list"</span><span class="nt">&gt;</span></span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></figure>
</div>


		        <h3 id="ordered"><a class="anchorjs-link " href="#ordered" aria-label="Anchor link for: ordered" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Ordered</h3>
		        <p>A list of items in which the order <em>does</em> explicitly matter.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>
					<ol>
		                <li>Lorem ipsum dolor sit amet</li>
		                <li>Consectetur adipiscing elit</li>
		                <li>Integer molestie lorem at massa</li>
		                <li>Facilisis in pretium nisl aliquet</li>
		                <li>Nulla volutpat aliquam velit</li>
		                <li>Faucibus porta lacus fringilla vel</li>
		                <li>Aenean sit amet erat nunc</li>
		                <li>Eget porttitor lorem</li>
		            </ol>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ol&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ol&gt;</span></code></pre></figure>
</div>

<!-- 
		        <h3 id="unstyled"><a class="anchorjs-link " href="#unstyled" aria-label="Anchor link for: unstyled" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Unstyled</h3>
		        <p>Remove the default <code>list-style</code> and left margin on list items (immediate children only). <strong>This only applies to immediate children list items</strong>, meaning you will need to add the class for any nested lists as well.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <ul class="list-unstyled">
		                <li>Lorem ipsum dolor sit amet</li>
		                <li>Consectetur adipiscing elit</li>
		                <li>Integer molestie lorem at massa</li>
		                <li>Facilisis in pretium nisl aliquet</li>
		                <li>Nulla volutpat aliquam velit
		                    <ul>
		                        <li>Phasellus iaculis neque</li>
		                        <li>Purus sodales ultricies</li>
		                        <li>Vestibulum laoreet porttitor sem</li>
		                        <li>Ac tristique libero volutpat at</li>
		                    </ul>
		                </li>
		                <li>Faucibus porta lacus fringilla vel</li>
		                <li>Aenean sit amet erat nunc</li>
		                <li>Eget porttitor lorem</li>
		            </ul>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-unstyled"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></figure>
</div> -->


		        <h3 id="inline"><a class="anchorjs-link " href="#inline" aria-label="Anchor link for: inline" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Inline</h3>
		        <p>Place all list items on a single line with <code>display: inline-block;</code> and some light padding.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <ul class="list-inline">
		                <li>Lorem ipsum</li>
		                <li>Phasellus iaculis</li>
		                <li>Nulla volutpat</li>
		            </ul>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></figure>
</div>


		        <h3 id="description"><a class="anchorjs-link " href="#description" aria-label="Anchor link for: description" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Description</h3>
		        <p>A list of terms with their associated descriptions.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <dl> <dt>Description lists</dt>
		                <dd>A description list is perfect for defining terms.</dd> <dt>Euismod</dt>
		                <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
		                <dd>Donec id elit non mi porta gravida at eget metus.</dd> <dt>Malesuada porta</dt>
		                <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
		            </dl>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;dl&gt;</span>
  <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
<span class="nt">&lt;/dl&gt;</span></code></pre></figure>
</div>


		        <h4 id="horizontal-description"><a class="anchorjs-link " href="#horizontal-description" aria-label="Anchor link for: horizontal description" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Horizontal description</h4>
		        <p>Make terms and descriptions in <code>&lt;dl&gt;</code> line up side-by-side. Starts off stacked like default <code>&lt;dl&gt;</code>s, but when the navbar expands, so do these.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <dl class="dl-horizontal"> <dt>Description lists</dt>
		                <dd>A description list is perfect for defining terms.</dd> <dt>Euismod</dt>
		                <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
		                <dd>Donec id elit non mi porta gravida at eget metus.</dd> <dt>Malesuada porta</dt>
		                <dd>Etiam porta sem malesuada magna mollis euismod.</dd> <dt>Felis euismod semper eget lacinia</dt>
		                <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
		            </dl>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;dl</span> <span class="na">class=</span><span class="s">"dl-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
<span class="nt">&lt;/dl&gt;</span></code></pre></figure>
</div>


		        <div class="dr-callout dr-callout-info" id="callout-type-dl-truncate">
		            <h4>Auto-truncating</h4>
		            <p>Horizontal description lists will truncate terms that are too long to fit in the left column with <code>text-overflow</code>. In narrower viewports, they will change to the default stacked layout.</p>
		        </div>

</div>
<?php
}


function displayCode(){


   		$this->displayHeader(
   					'code',
   					'Code'
   				);
?>
   <div class="section-body">


<?php
			$this->displaySubHeader(
				'code-inline',
				'Inline'
				);
        ?>
		        <p>Wrap inline snippets of code with <code>&lt;code&gt;</code>. Within <code>&lt;code&gt;</code> tags, use html entities.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>	
					</div>	        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html">For example, <span class="nt">&lt;code&gt;</span><span class="ni">&amp;lt;</span>section<span class="ni">&amp;gt;</span><span class="nt">&lt;/code&gt;</span> should be wrapped as inline.</code></pre></figure>
</div>



<?php
			$this->displaySubHeader(
				'code-user-input',
				'User input'
				);
        ?>
		        <p>Use the <code>&lt;kbd&gt;</code> to indicate input that is typically entered via keyboard.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <br> To edit settings, press <kbd>ctrl</kbd> + <kbd>,</kbd>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html">To switch directories, type <span class="nt">&lt;kbd&gt;</span>cd<span class="nt">&lt;/kbd&gt;</span> followed by the name of the directory.<span class="nt">&lt;br&gt;</span>
To edit settings, press <span class="nt">&lt;kbd&gt;</span>ctrl<span class="nt">&lt;/kbd&gt;</span> + <span class="nt">&lt;kbd&gt;</span>,<span class="nt">&lt;/kbd&gt;</span></code></pre></figure>
</div>




<?php
			$this->displaySubHeader(
				'code-block',
				'Basic block'
				);
        ?>
		        <p>Use <code>&lt;pre&gt;</code> for multiple lines of code. Be sure to escape any angle brackets in the code for proper rendering.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>	
					</div>	        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;pre&gt;</span><span class="ni">&amp;lt;</span>p<span class="ni">&amp;gt;</span>Sample text here...<span class="ni">&amp;lt;</span>/p<span class="ni">&amp;gt;</span><span class="nt">&lt;/pre&gt;</span></code></pre></figure>
</div>


		        <p>You may optionally add the <code>.pre-scrollable</code> class, which will set a max-height of 350px and provide a y-axis scrollbar.</p>
		       

<?php
			$this->displaySubHeader(
				'code-variables',
				'Variables'
				);
        ?>
		        <p>For indicating variables use the <code>&lt;var&gt;</code> tag.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <p><var>y</var> = <var>m</var><var>x</var> + <var>b</var></p>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;var&gt;</span>y<span class="nt">&lt;/var&gt;</span> = <span class="nt">&lt;var&gt;</span>m<span class="nt">&lt;/var&gt;&lt;var&gt;</span>x<span class="nt">&lt;/var&gt;</span> + <span class="nt">&lt;var&gt;</span>b<span class="nt">&lt;/var&gt;</span></code></pre></figure>
</div>


<?php
			$this->displaySubHeader(
				'code-sample-output',
				'Sample output'
				);
        ?>
		        <p>For indicating blocks sample output from a program use the <code>&lt;samp&gt;</code> tag.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <p><samp>This text is meant to be treated as sample output from a computer program.</samp></p>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;samp&gt;</span>This text is meant to be treated as sample output from a computer program.<span class="nt">&lt;/samp&gt;</span></code></pre></figure>
</div>



</div>
<?php

}

function displayTables(){

	$this->displayHeader(
   					'tables',
   					'Tables'
   				);

?>

   <div class="section-body">


<?php
			$this->displaySubHeader(
				'tables-example',
				'Basic example'
				);
        ?>
		        <p>For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>. It may seem super redundant, but given the widespread use of tables for other plugins like calendars and date pickers, we've opted to isolate our custom table styles.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <table class="table">
		                <caption>Optional table caption.</caption>
		                <thead>
		                    <tr>
		                        <th>#</th>
		                        <th>First Name</th>
		                        <th>Last Name</th>
		                        <th>Username</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th scope="row">1</th>
		                        <td>Mark</td>
		                        <td>Otto</td>
		                        <td>@mdo</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">2</th>
		                        <td>Jacob</td>
		                        <td>Thornton</td>
		                        <td>@fat</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">3</th>
		                        <td>Larry</td>
		                        <td>the Bird</td>
		                        <td>@twitter</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/table&gt;</span></code></pre></figure>
</div>

<?php
	$this->displaySubHeader(
		'tables-header-color',
		'Header Color Options'
		);
?>

   				<div class="example">
					<div class="top">
						<label>Example</label>		        
						<table class="table ">
		                <thead class="bg-red">
		                    <tr>
		                        <th>#</th>
		                        <th>First Name</th>
		                        <th>Last Name</th>
		                        <th>Username</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th scope="row">1</th>
		                        <td>Mark</td>
		                        <td>Otto</td>
		                        <td>@mdo</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-striped"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/table&gt;</span></code></pre></figure>
</div>

<?php
			$this->displaySubHeader(
				'tables-striped',
				'Striped rows',
				array('Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.')
				);
        ?>
		        <div class="dr-callout dr-callout-danger" id="callout-tables-striped-ie8">
		            <h4>Cross-browser compatibility</h4>
		            <p>Striped tables are styled via the <code>:nth-child</code> CSS selector, which is not available in Internet Explorer 8.</p>
		        </div>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <table class="table table-striped">
		                <thead>
		                    <tr>
		                        <th>#</th>
		                        <th>First Name</th>
		                        <th>Last Name</th>
		                        <th>Username</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th scope="row">1</th>
		                        <td>Mark</td>
		                        <td>Otto</td>
		                        <td>@mdo</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">2</th>
		                        <td>Jacob</td>
		                        <td>Thornton</td>
		                        <td>@fat</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">3</th>
		                        <td>Larry</td>
		                        <td>the Bird</td>
		                        <td>@twitter</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-striped"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/table&gt;</span></code></pre></figure>
</div>


		<?php
			$this->displaySubHeader(
				'tables-bordered',
				'Bordered table'
				);
        ?>
		        <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <table class="table table-bordered">
		                <thead>
		                    <tr>
		                        <th>#</th>
		                        <th>First Name</th>
		                        <th>Last Name</th>
		                        <th>Username</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th scope="row">1</th>
		                        <td>Mark</td>
		                        <td>Otto</td>
		                        <td>@mdo</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">2</th>
		                        <td>Jacob</td>
		                        <td>Thornton</td>
		                        <td>@fat</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">3</th>
		                        <td>Larry</td>
		                        <td>the Bird</td>
		                        <td>@twitter</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-bordered"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/table&gt;</span></code></pre></figure>
</div>


		<?php
			$this->displaySubHeader(
				'tables-hover-rows',
				'Hover rows'
				);
        ?>
		        <p>Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <table class="table table-hover">
		                <thead>
		                    <tr>
		                        <th>#</th>
		                        <th>First Name</th>
		                        <th>Last Name</th>
		                        <th>Username</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th scope="row">1</th>
		                        <td>Mark</td>
		                        <td>Otto</td>
		                        <td>@mdo</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">2</th>
		                        <td>Jacob</td>
		                        <td>Thornton</td>
		                        <td>@fat</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">3</th>
		                        <td>Larry</td>
		                        <td>the Bird</td>
		                        <td>@twitter</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-hover"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/table&gt;</span></code></pre></figure>
</div>



		<?php
			//$this->displaySubHeader(
				// 'tables-condensed',
				// 'Condensed table'
				// );
        ?>
<!-- 		        <p>Add <code>.table-condensed</code> to make tables more compact by cutting cell padding in half.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <table class="table table-condensed">
		                <thead>
		                    <tr>
		                        <th>#</th>
		                        <th>First Name</th>
		                        <th>Last Name</th>
		                        <th>Username</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th scope="row">1</th>
		                        <td>Mark</td>
		                        <td>Otto</td>
		                        <td>@mdo</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">2</th>
		                        <td>Jacob</td>
		                        <td>Thornton</td>
		                        <td>@fat</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">3</th>
		                        <td colspan="2">Larry the Bird</td>
		                        <td>@twitter</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-condensed"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/table&gt;</span></code></pre></figure>
</div>
 -->


		<?php
			$this->displaySubHeader(
				'tables-contextual-classes',
				'Contextual classes'
				);
        ?>
		        <p>Use contextual classes to color table rows or individual cells.</p>
		        <div class="table-responsive">
		            <table class="table table-bordered table-striped">
		                <colgroup>
		                    <col class="col-xs-1">
		                        <col class="col-xs-7">
		                </colgroup>
		                <thead>
		                    <tr>
		                        <th>Class</th>
		                        <th>Description</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th scope="row"> <code>.active</code> </th>
		                        <td>Applies the hover color to a particular row or cell</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"> <code>.success</code> </th>
		                        <td>Indicates a successful or positive action</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"> <code>.info</code> </th>
		                        <td>Indicates a neutral informative change or action</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"> <code>.warning</code> </th>
		                        <td>Indicates a warning that might need attention</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"> <code>.danger</code> </th>
		                        <td>Indicates a dangerous or potentially negative action</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <table class="table">
		                <thead>
		                    <tr>
		                        <th>#</th>
		                        <th>Column heading</th>
		                        <th>Column heading</th>
		                        <th>Column heading</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr class="active">
		                        <th scope="row">1</th>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">2</th>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                    </tr>
		                    <tr class="success">
		                        <th scope="row">3</th>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">4</th>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                    </tr>
		                    <tr class="info">
		                        <th scope="row">5</th>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">6</th>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                    </tr>
		                    <tr class="warning">
		                        <th scope="row">7</th>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                    </tr>
		                    <tr>
		                        <th scope="row">8</th>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                    </tr>
		                    <tr class="danger">
		                        <th scope="row">9</th>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                        <td>Column content</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- On rows --&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>

<span class="c">&lt;!-- On cells (`td` or `th`) --&gt;</span>
<span class="nt">&lt;tr&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
<span class="nt">&lt;/tr&gt;</span></code></pre></figure>
</div>


		        <div class="dr-callout dr-callout-warning" id="callout-tables-context-accessibility">
		            <h4>Conveying meaning to assistive technologies</h4>
		            <p>Using color to add meaning to a table row or individual cell only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (the visible text in the relevant table row/cell), or is included through alternative means, such as additional text hidden with the <code>.sr-only</code> class.</p>
		        </div>


  	<?php	
	$this->displaySubHeader(
		"tables-responsive",
		"Responsive tables"
	);
	?>
		        <p>Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code> to make them scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, you will not see any difference in these tables.</p>
		        <div class="dr-callout dr-callout-warning" id="callout-tables-responsive-overflow">
		            <h4>Vertical clipping/truncation</h4>
		            <p>Responsive tables make use of <code>overflow-y: hidden</code>, which clips off any content that goes beyond the bottom or top edges of the table. In particular, this can clip off dropdown menus and other third-party widgets.</p>
		        </div>
		        <div class="dr-callout dr-callout-warning" id="callout-tables-responsive-ff-fieldset">
		            <h4>Firefox and fieldsets</h4>
		            <p>Firefox has some awkward fieldset styling involving <code>width</code> that interferes with the responsive table. This cannot be overriden without a Firefox-specific hack that we <strong>don't</strong> provide in Bootstrap:</p>
		            
<figure class="highlight"><label>HTML</label><pre><code class="language-css" data-lang="css"><span class="k">@-moz-document</span> <span class="n">url-prefix</span><span class="p">()</span> <span class="p">{</span>
  <span class="nt">fieldset</span> <span class="p">{</span> <span class="nl">display</span><span class="p">:</span> <span class="nb">table-cell</span><span class="p">;</span> <span class="p">}</span>
<span class="p">}</span></code></pre></figure>


		            <p>For more information, read <a href="https://stackoverflow.com/questions/17408815/fieldset-resizes-wrong-appears-to-have-unremovable-min-width-min-content/17863685#17863685">this Stack Overflow answer</a>.</p>
		        </div>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <div class="table-responsive">
		                <table class="table">
		                    <thead>
		                        <tr>
		                            <th>#</th>
		                            <th>Table heading</th>
		                            <th>Table heading</th>
		                            <th>Table heading</th>
		                            <th>Table heading</th>
		                            <th>Table heading</th>
		                            <th>Table heading</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                        <tr>
		                            <th scope="row">1</th>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">2</th>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">3</th>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                        </tr>
		                    </tbody>
		                </table>
		            </div>
		            <div class="table-responsive">
		                <table class="table table-bordered">
		                    <thead>
		                        <tr>
		                            <th>#</th>
		                            <th>Table heading</th>
		                            <th>Table heading</th>
		                            <th>Table heading</th>
		                            <th>Table heading</th>
		                            <th>Table heading</th>
		                            <th>Table heading</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                        <tr>
		                            <th scope="row">1</th>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">2</th>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">3</th>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                            <td>Table cell</td>
		                        </tr>
		                    </tbody>
		                </table>
		            </div>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"table-responsive"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/table&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
</div>


</div>
<?php
}


function displayForms(){

	$this->displayHeader(
   					'forms',
   					'Forms'
   				);


?>

   <div class="section-body">


		<?php
			$this->displaySubHeader(
				'forms-example',
				'Basic example'
				);
        ?>

		        <p>Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <form lpformnum="1">
		                <div class="form-group">
		                    <label for="exampleInputEmail1">Email address</label>
		                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" autocomplete="off" > </div>
		                <div class="form-group">
		                    <label for="exampleInputPassword1">Password</label>
		                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="off" > </div>
		                <div class="form-group">
		                    <label for="exampleInputFile">File input</label>
		                    <input type="file" id="exampleInputFile">
		                    <p class="help-block">Example block-level help text here.</p>
		                </div>
		                <div class="checkbox">
		                    <label>
		                        <input type="checkbox"> Check me out </label>
		                </div>
		                <button type="submit" class="btn btn-default">Submit</button>
		            </form>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputEmail1"</span><span class="nt">&gt;</span>Email address<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputEmail1"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputPassword1"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputPassword1"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputFile"</span><span class="nt">&gt;</span>File input<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"file"</span> <span class="na">id=</span><span class="s">"exampleInputFile"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"help-block"</span><span class="nt">&gt;</span>Example block-level help text here.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Check me out
    <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>
</div>
		        <div class="dr-callout dr-callout-warning" id="callout-formgroup-inputgroup">
		            <h4>Don't mix form groups with input groups</h4>
		            <p>Do not mix form groups directly with <a href="/components/#input-groups">input groups</a>. Instead, nest the input group inside of the form group.</p>
		        </div>
		        <h2 id="forms-inline"><a class="anchorjs-link " href="#forms-inline" aria-label="Anchor link for: forms inline" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Inline form</h2>
		        <p>Add <code>.form-inline</code> to your form (which doesn't have to be a <code>&lt;form&gt;</code>) for left-aligned and inline-block controls. <strong>This only applies to forms within viewports that are at least 768px wide.</strong></p>
		        <div class="dr-callout dr-callout-danger" id="callout-inline-form-width">
		            <h4>May require custom widths</h4>
		            <p>Inputs and selects have <code>width: 100%;</code> applied by default in Bootstrap. Within inline forms, we reset that to <code>width: auto;</code> so multiple controls can reside on the same line. Depending on your layout, additional custom widths may be required.</p>
		        </div>
		        <div class="dr-callout dr-callout-warning" id="callout-inline-form-labels">
		            <h4>Always add labels</h4>
		            <p>Screen readers will have trouble with your forms if you don't include a label for every input. For these inline forms, you can hide the labels using the <code>.sr-only</code> class. There are further alternative methods of providing a label for assistive technologies, such as the <code>aria-label</code>, <code>aria-labelledby</code> or <code>title</code> attribute. If none of these is present, screen readers may resort to using the <code>placeholder</code> attribute, if present, but note that use of <code>placeholder</code> as a replacement for other labelling methods is not advised.</p>
		        </div>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <form class="form-inline">
		                <div class="form-group">
		                    <label for="exampleInputName2">Name</label>
		                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe"> </div>
		                <div class="form-group">
		                    <label for="exampleInputEmail2">Email</label>
		                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com"> </div>
		                <button type="submit" class="btn btn-default">Send invitation</button>
		            </form>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputName2"</span><span class="nt">&gt;</span>Name<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputName2"</span> <span class="na">placeholder=</span><span class="s">"Jane Doe"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputEmail2"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputEmail2"</span> <span class="na">placeholder=</span><span class="s">"jane.doe@example.com"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Send invitation<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>
</div>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <form class="form-inline">
		                <div class="form-group">
		                    <label class="sr-only" for="exampleInputEmail3">Email address</label>
		                    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email"> </div>
		                <div class="form-group">
		                    <label class="sr-only" for="exampleInputPassword3">Password</label>
		                    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password"> </div>
		                <div class="checkbox">
		                    <label>
		                        <input type="checkbox"> Remember me </label>
		                </div>
		                <button type="submit" class="btn btn-default">Sign in</button>
		            </form>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span> <span class="na">for=</span><span class="s">"exampleInputEmail3"</span><span class="nt">&gt;</span>Email address<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputEmail3"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span> <span class="na">for=</span><span class="s">"exampleInputPassword3"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputPassword3"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Remember me
    <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>
</div>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <form class="form-inline">
		                <div class="form-group">
		                    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
		                    <div class="input-group">
		                        <div class="input-group-addon">$</div>
		                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
		                        <div class="input-group-addon">.00</div>
		                    </div>
		                </div>
		                <button type="submit" class="btn btn-primary">Transfer cash</button>
		            </form>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span> <span class="na">for=</span><span class="s">"exampleInputAmount"</span><span class="nt">&gt;</span>Amount (in dollars)<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>$<span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputAmount"</span> <span class="na">placeholder=</span><span class="s">"Amount"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>.00<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Transfer cash<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>
</div>
		<?php
			$this->displaySubHeader(
				'forms-horizontal',
				'Horizontal form'
				);
        ?>
		        <p>Use Bootstrap's predefined grid classes to align labels and groups of form controls in a horizontal layout by adding <code>.form-horizontal</code> to the form (which doesn't have to be a <code>&lt;form&gt;</code>). Doing so changes <code>.form-group</code>s to behave as grid rows, so no need for <code>.row</code>.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <form class="form-horizontal">
		                <div class="form-group">
		                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
		                    <div class="col-sm-10">
		                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" autocomplete="off" > </div>
		                </div>
		                <div class="form-group">
		                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
		                    <div class="col-sm-10">
		                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" autocomplete="off" > </div>
		                </div>
		                <div class="form-group">
		                    <div class="col-sm-offset-2 col-sm-10">
		                        <div class="checkbox">
		                            <label>
		                                <input type="checkbox"> Remember me </label>
		                        </div>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <div class="col-sm-offset-2 col-sm-10">
		                        <button type="submit" class="btn btn-default">Sign in</button>
		                    </div>
		                </div>
		            </form>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputEmail3"</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputEmail3"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword3"</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword3"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-offset-2 col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Remember me
        <span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-offset-2 col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>
</div>
		<?php
			$this->displaySubHeader(
				'forms-controls',
				'Supported controls'
				);
        ?>
		        <p>Examples of standard form controls supported in an example form layout.</p>
		        <h3 id="inputs"><a class="anchorjs-link " href="#inputs" aria-label="Anchor link for: inputs" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Inputs</h3>
		        <p>Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.</p>
		        <div class="dr-callout dr-callout-danger" id="callout-input-needs-type">
		            <h4>Type declaration required</h4>
		            <p>Inputs will only be fully styled if their <code>type</code> is properly declared.</p>
		        </div>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <form lpformnum="2">
		                <input type="text" class="form-control" placeholder="Text input"> </form>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Text input"</span><span class="nt">&gt;</span></code></pre></figure>
</div>
		        <div class="dr-callout dr-callout-info" id="callout-xref-input-group">
		            <h4>Input groups</h4>
		            <p>To add integrated text or buttons before and/or after any text-based <code>&lt;input&gt;</code>, <a href="../components/#input-groups">check out the input group component</a>.</p>
		        </div>
		        <h3 id="textarea"><a class="anchorjs-link " href="#textarea" aria-label="Anchor link for: textarea" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Textarea</h3>
		        <p>Form control which supports multiple lines of text. Change <code>rows</code> attribute as necessary.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <form lpformnum="3">
		                <textarea class="form-control" rows="3" placeholder="Textarea"></textarea>
		            </form>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">rows=</span><span class="s">"3"</span><span class="nt">&gt;&lt;/textarea&gt;</span></code></pre></figure>
</div>
		        <h3 id="checkboxes-and-radios"><a class="anchorjs-link " href="#checkboxes-and-radios" aria-label="Anchor link for: checkboxes and radios" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Checkboxes and radios</h3>
		        <p>Checkboxes are for selecting one or several options in a list, while radios are for selecting one option from many.</p>
		        <p>Disabled checkboxes and radios are supported, but to provide a "not-allowed" cursor on hover of the parent <code>&lt;label&gt;</code>, you'll need to add the <code>.disabled</code> class to the parent <code>.radio</code>, <code>.radio-inline</code>, <code>.checkbox</code>, or <code>.checkbox-inline</code>.</p>
		        <h4 id="default-stacked"><a class="anchorjs-link " href="#default-stacked" aria-label="Anchor link for: default stacked" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Default (stacked)</h4>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <form lpformnum="4">
		                <div class="checkbox">
		                    <label>
		                        <input type="checkbox" value=""> Option one is this and that—be sure to include why it's great </label>
		                </div>
		                <div class="checkbox disabled">
		                    <label>
		                        <input type="checkbox" value="" disabled="disabled"> Option two is disabled </label>
		                </div>
		                <br>
		                <div class="radio">
		                    <label>
		                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="checked"> Option one is this and that—be sure to include why it's great </label>
		                </div>
		                <div class="radio">
		                    <label>
		                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Option two can be something else and selecting it will deselect option one </label>
		                </div>
		                <div class="radio disabled">
		                    <label>
		                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="disabled"> Option three is disabled </label>
		                </div>
		            </form>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span><span class="nt">&gt;</span>
    Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why it's great
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox disabled"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    Option two is disabled
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span class="s">"optionsRadios1"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">checked</span><span class="nt">&gt;</span>
    Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why it's great
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span class="s">"optionsRadios2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span>
    Option two can be something else and selecting it will deselect option one
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio disabled"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span class="s">"optionsRadios3"</span> <span class="na">value=</span><span class="s">"option3"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    Option three is disabled
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
</div>
		        <h4 id="inline-checkboxes-and-radios"><a class="anchorjs-link " href="#inline-checkboxes-and-radios" aria-label="Anchor link for: inline checkboxes and radios" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Inline checkboxes and radios</h4>
		        <p>Use the <code>.checkbox-inline</code> or <code>.radio-inline</code> classes on a series of checkboxes or radios for controls that appear on the same line.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <form lpformnum="5">
		                <label class="checkbox-inline">
		                    <input type="checkbox" id="inlineCheckbox1" value="option1"> 1 </label>
		                <label class="checkbox-inline">
		                    <input type="checkbox" id="inlineCheckbox2" value="option2"> 2 </label>
		                <label class="checkbox-inline">
		                    <input type="checkbox" id="inlineCheckbox3" value="option3"> 3 </label>
		            </form>
		            <br>
		            <form lpformnum="6">
		                <label class="radio-inline">
		                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1 </label>
		                <label class="radio-inline">
		                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2 </label>
		                <label class="radio-inline">
		                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3 </label>
		            </form>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"checkbox-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox1"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span> 1
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"checkbox-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span> 2
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"checkbox-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox3"</span> <span class="na">value=</span><span class="s">"option3"</span><span class="nt">&gt;</span> 3
<span class="nt">&lt;/label&gt;</span>

<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"inlineRadioOptions"</span> <span class="na">id=</span><span class="s">"inlineRadio1"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span> 1
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"inlineRadioOptions"</span> <span class="na">id=</span><span class="s">"inlineRadio2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span> 2
<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"inlineRadioOptions"</span> <span class="na">id=</span><span class="s">"inlineRadio3"</span> <span class="na">value=</span><span class="s">"option3"</span><span class="nt">&gt;</span> 3
<span class="nt">&lt;/label&gt;</span></code></pre></figure>
</div>
		        <h4 id="checkboxes-and-radios-without-la"><a class="anchorjs-link " href="#checkboxes-and-radios-without-la" aria-label="Anchor link for: checkboxes and radios without la" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Checkboxes and radios without label text</h4>
		        <p>Should you have no text within the <code>&lt;label&gt;</code>, the input is positioned as you'd expect. <strong>Currently only works on non-inline checkboxes and radios.</strong> Remember to still provide some form of label for assistive technologies (for instance, using <code>aria-label</code>).</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <form lpformnum="7">
		                <div class="checkbox">
		                    <label>
		                        <input type="checkbox" id="blankCheckbox" value="option1" aria-label="Checkbox without label text"> </label>
		                </div>
		                <div class="radio">
		                    <label>
		                        <input type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="Radio button without label text"> </label>
		                </div>
		            </form>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"blankCheckbox"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"blankRadio"</span> <span class="na">id=</span><span class="s">"blankRadio1"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
</div>
		        <h3 id="selects"><a class="anchorjs-link " href="#selects" aria-label="Anchor link for: selects" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Selects</h3>
		        <p>Note that many native select menus—namely in Safari and Chrome—have rounded corners that cannot be modified via <code>border-radius</code> properties.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <form lpformnum="8">
		                <select class="form-control">
		                    <option>1</option>
		                    <option>2</option>
		                    <option>3</option>
		                    <option>4</option>
		                    <option>5</option>
		                </select>
		            </form>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span></code></pre></figure>
</div>
		        <p>For <code>&lt;select&gt;</code> controls with the <code>multiple</code> attribute, multiple options are shown by default.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <form>
		                <select multiple="multiple" class="form-control">
		                    <option>1</option>
		                    <option>2</option>
		                    <option>3</option>
		                    <option>4</option>
		                    <option>5</option>
		                </select>
		            </form>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;select</span> <span class="na">multiple</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span></code></pre></figure>
</div>

		<?php
			$this->displaySubHeader(
				'forms-controls-static',
				'Static control'
				);
        ?>
		        <p>When you need to place plain text next to a form label within a form, use the <code>.form-control-static</code> class on a <code>&lt;p&gt;</code>.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <form class="form-horizontal">
		                <div class="form-group">
		                    <label class="col-sm-2 control-label">Email</label>
		                    <div class="col-sm-10">
		                        <p class="form-control-static">email@example.com</p>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
		                    <div class="col-sm-10">
		                        <input type="password" class="form-control" id="inputPassword" placeholder="Password" autocomplete="off" > </div>
		                </div>
		            </form>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"form-control-static"</span><span class="nt">&gt;</span>email@example.com<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword"</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>
</div>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <form class="form-inline">
		                <div class="form-group">
		                    <label class="sr-only">Email</label>
		                    <p class="form-control-static">email@example.com</p>
		                </div>
		                <div class="form-group">
		                    <label for="inputPassword2" class="sr-only">Password</label>
		                    <input type="password" class="form-control" id="inputPassword2" placeholder="Password"> </div>
		                <button type="submit" class="btn btn-default">Confirm identity</button>
		            </form>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"form-control-static"</span><span class="nt">&gt;</span>email@example.com<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword2"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword2"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Confirm identity<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>
</div>

		<?php
			$this->displaySubHeader(
				'forms-control-focus',
				'Focus state'
				);
        ?>
		        <p>We remove the default <code>outline</code> styles on some form controls and apply a <code>box-shadow</code> in its place for <code>:focus</code>.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <form lpformnum="9">
		                <input class="form-control" id="focusedInput" type="text" value="Demonstrative focus state"> </form>
		        </div></div>
		        <div class="dr-callout dr-callout-info" id="callout-focus-demo">
		            <h4>Demo <code>:focus</code> state</h4>
		            <p>The above example input uses custom styles in our documentation to demonstrate the <code>:focus</code> state on a <code>.form-control</code>.</p>
		        </div>
		        <h2 id="forms-control-disabled"><a class="anchorjs-link " href="#forms-control-disabled" aria-label="Anchor link for: forms control disabled" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Disabled state</h2>
		        <p>Add the <code>disabled</code> boolean attribute on an input to prevent user interactions. Disabled inputs appear lighter and add a <code>not-allowed</code> cursor.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <form lpformnum="10">
		                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="disabled"> </form>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"disabledInput"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Disabled input here..."</span> <span class="na">disabled</span><span class="nt">&gt;</span></code></pre></figure>
</div>
		        <h3 id="forms-disabled-fieldsets"><a class="anchorjs-link " href="#forms-disabled-fieldsets" aria-label="Anchor link for: forms disabled fieldsets" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Disabled fieldsets</h3>
		        <p>Add the <code>disabled</code> attribute to a <code>&lt;fieldset&gt;</code> to disable all the controls within the <code>&lt;fieldset&gt;</code> at once.</p>
		        <div class="dr-callout dr-callout-warning" id="callout-fieldset-disabled-pointer-events">
		            <h4>Caveat about link functionality of <code>&lt;a&gt;</code></h4>
		            <p>By default, browsers will treat all native form controls (<code>&lt;input&gt;</code>, <code>&lt;select&gt;</code> and <code>&lt;button&gt;</code> elements) inside a <code>&lt;fieldset disabled&gt;</code> as disabled, preventing both keyboard and mouse interactions on them. However, if your form also includes <code>&lt;a ... class="btn btn-*"&gt;</code> elements, these will only be given a style of <code>pointer-events: none</code>. As noted in the section about <a href="#buttons-disabled">disabled state for buttons</a> (and specifically in the sub-section for anchor elements), this CSS property is not yet standardized and isn't fully supported in Opera 18 and below, or in Internet Explorer 11, and won't prevent keyboard users from being able to focus or activate these links. So to be safe, use custom JavaScript to disable such links.</p>
		        </div>
		        <div class="dr-callout dr-callout-danger" id="callout-fieldset-disabled-ie">
		            <h4>Cross-browser compatibility</h4>
		            <p>While Bootstrap will apply these styles in all browsers, Internet Explorer 11 and below don't fully support the <code>disabled</code> attribute on a <code>&lt;fieldset&gt;</code>. Use custom JavaScript to disable the fieldset in these browsers.</p>
		        </div>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <form lpformnum="11">
		                <fieldset disabled="disabled">
		                    <div class="form-group">
		                        <label for="disabledTextInput">Disabled input</label>
		                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"> </div>
		                    <div class="form-group">
		                        <label for="disabledSelect">Disabled select menu</label>
		                        <select id="disabledSelect" class="form-control">
		                            <option>Disabled select</option>
		                        </select>
		                    </div>
		                    <div class="checkbox">
		                        <label>
		                            <input type="checkbox"> Can't check this </label>
		                    </div>
		                    <button type="submit" class="btn btn-primary">Submit</button>
		                </fieldset>
		            </form>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;fieldset</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"disabledTextInput"</span><span class="nt">&gt;</span>Disabled input<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">id=</span><span class="s">"disabledTextInput"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Disabled input"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"disabledSelect"</span><span class="nt">&gt;</span>Disabled select menu<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;select</span> <span class="na">id=</span><span class="s">"disabledSelect"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;option&gt;</span>Disabled select<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;/select&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Can't check this
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/fieldset&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>
</div>


		<?php
			$this->displaySubHeader(
				'forms-control-readonly',
				'Readonly state'
				);
        ?>
		        <p>Add the <code>readonly</code> boolean attribute on an input to prevent modification of the input's value. Read-only inputs appear lighter (just like disabled inputs), but retain the standard cursor.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <form lpformnum="12">
		                <input class="form-control" type="text" placeholder="Readonly input here…" readonly="readonly"> </form>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Readonly input here…"</span> <span class="na">readonly</span><span class="nt">&gt;</span></code></pre></figure>
</div>

		<?php
			$this->displaySubHeader(
				'forms-help-text',
				'Help text'
				);
        ?>
		        <p>Block level help text for form controls.</p>
		        <div class="dr-callout dr-callout-info" id="callout-help-text-accessibility">
		            <h4>Associating help text with form controls</h4>
		            <p>Help text should be explicitly associated with the form control it relates to using the <code>aria-describedby</code> attribute. This will ensure that assistive technologies – such as screen readers – will announce this help text when the user focuses or enters the control.</p>
		        </div>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <form lpformnum="13">
		                <div class="form-group">
		                    <label for="inputHelpBlock">Input with help text</label>
		                    <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock"> </div> <span id="helpBlock" class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> </form>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"sr-only"</span> <span class="na">for=</span><span class="s">"inputHelpBlock"</span><span class="nt">&gt;</span>Input with help text<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">id=</span><span class="s">"inputHelpBlock"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-describedby=</span><span class="s">"helpBlock"</span><span class="nt">&gt;</span>
...
<span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"helpBlock"</span> <span class="na">class=</span><span class="s">"help-block"</span><span class="nt">&gt;</span>A block of help text that breaks onto a new line and may extend beyond one line.<span class="nt">&lt;/span&gt;</span></code></pre></figure>
</div>


		<?php
			$this->displaySubHeader(
				'forms-control-validation',
				'Validation states'
				);
        ?>
		    <p>Bootstrap includes validation styles for error, warning, and success states on form controls. To use, add <code>.has-warning</code>, <code>.has-error</code>, or <code>.has-success</code> to the parent element. Any <code>.control-label</code>, <code>.form-control</code>, and <code>.help-block</code> within that element will receive the validation styles.</p>
		    <div class="dr-callout dr-callout-warning" id="callout-form-validation-state-accessibility">
		        <h4>Conveying validation state to assistive technologies and colorblind users</h4>
		        <p>Using these validation styles to denote the state of a form control only provides a visual, color-based indication, which will not be conveyed to users of assistive technologies - such as screen readers - or to colorblind users.</p>
		        <p>Ensure that an alternative indication of state is also provided. For instance, you can include a hint about state in the form control's <code>&lt;label&gt;</code> text itself (as is the case in the following code example), include a <a href="../components/#glyphicons">Glyphicon</a> (with appropriate alternative text using the <code>.sr-only</code> class - see the <a href="../components/#glyphicons-examples">Glyphicon examples</a>), or by providing an additional <a href="#forms-help-text">help text</a> block. Specifically for assistive technologies, invalid form controls can also be assigned an <code>aria-invalid="true"</code> attribute.</p>
		    </div>
   				<div class="example">
					<div class="top">
						<label>Example</label>		        <form lpformnum="14">
		            <div class="form-group has-success">
		                <label class="control-label" for="inputSuccess1">Input with success</label>
		                <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" > <span id="helpBlock2" class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> </div>
		            <div class="form-group has-warning">
		                <label class="control-label" for="inputWarning1">Input with warning</label>
		                <input type="text" class="form-control" id="inputWarning1"> </div>
		            <div class="form-group has-error">
		                <label class="control-label" for="inputError1">Input with error</label>
		                <input type="text" class="form-control" id="inputError1"> </div>
		            <div class="has-success">
		                <div class="checkbox">
		                    <label>
		                        <input type="checkbox" id="checkboxSuccess" value="option1"> Checkbox with success </label>
		                </div>
		            </div>
		            <div class="has-warning">
		                <div class="checkbox">
		                    <label>
		                        <input type="checkbox" id="checkboxWarning" value="option1"> Checkbox with warning </label>
		                </div>
		            </div>
		            <div class="has-error">
		                <div class="checkbox">
		                    <label>
		                        <input type="checkbox" id="checkboxError" value="option1"> Checkbox with error </label>
		                </div>
		            </div>
		        </form>
		    </div>
		    
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputSuccess1"</span><span class="nt">&gt;</span>Input with success<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputSuccess1"</span> <span class="na">aria-describedby=</span><span class="s">"helpBlock2"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"helpBlock2"</span> <span class="na">class=</span><span class="s">"help-block"</span><span class="nt">&gt;</span>A block of help text that breaks onto a new line and may extend beyond one line.<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-warning"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputWarning1"</span><span class="nt">&gt;</span>Input with warning<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputWarning1"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-error"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputError1"</span><span class="nt">&gt;</span>Input with error<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputError1"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"has-success"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"checkboxSuccess"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span>
      Checkbox with success
    <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"has-warning"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"checkboxWarning"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span>
      Checkbox with warning
    <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"has-error"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"checkboxError"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span>
      Checkbox with error
    <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
</div>
		    <h3>With optional icons</h3>
		    <p>You can also add optional feedback icons with the addition of <code>.has-feedback</code> and the right icon.</p>
		    <p><strong class="text-danger">Feedback icons only work with textual <code>&lt;input class="form-control"&gt;</code> elements.</strong></p>
		    <div class="dr-callout dr-callout-warning" id="callout-has-feedback-icon-positioning">
		        <h4>Icons, labels, and input groups</h4>
		        <p>Manual positioning of feedback icons is required for inputs without a label and for <a href="../components#input-groups">input groups</a> with an add-on on the right. You are strongly encouraged to provide labels for all inputs for accessibility reasons. If you wish to prevent labels from being displayed, hide them with the <code>.sr-only</code> class. If you must do without labels, adjust the <code>top</code> value of the feedback icon. For input groups, adjust the <code>right</code> value to an appropriate pixel value depending on the width of your addon.</p>
		    </div>
		    <div class="dr-callout dr-callout-warning" id="callout-has-feedback-icon-accessibility">
		        <h4>Conveying the icon's meaning to assistive technologies</h4>
		        <p>To ensure that assistive technologies – such as screen readers – correctly convey the meaning of an icon, additional hidden text should be included with the <code>.sr-only</code> class and explicitly associated with the form control it relates to using <code>aria-describedby</code>. Alternatively, ensure that the meaning (for instance, the fact that there is a warning for a particular text entry field) is conveyed in some other form, such as changing the text of the actual <code>&lt;label&gt;</code> associated with the form control.</p>
		        <p>Although the following examples already mention the validation state of their respective form controls in the <code>&lt;label&gt;</code> text itself, the above technique (using <code>.sr-only</code> text and <code>aria-describedby</code>) has been included for illustrative purposes.</p>
		    </div>
   				<div class="example">
					<div class="top">
						<label>Example</label>		        <form lpformnum="15">
		            <div class="form-group has-success has-feedback">
		                <label class="control-label" for="inputSuccess2">Input with success</label>
		                <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" > <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputSuccess2Status" class="sr-only">(success)</span> </div>
		            <div class="form-group has-warning has-feedback">
		                <label class="control-label" for="inputWarning2">Input with warning</label>
		                <input type="text" class="form-control" id="inputWarning2" aria-describedby="inputWarning2Status"> <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span> <span id="inputWarning2Status" class="sr-only">(warning)</span> </div>
		            <div class="form-group has-error has-feedback">
		                <label class="control-label" for="inputError2">Input with error</label>
		                <input type="text" class="form-control" id="inputError2" aria-describedby="inputError2Status"> <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span> <span id="inputError2Status" class="sr-only">(error)</span> </div>
		            <div class="form-group has-success has-feedback">
		                <label class="control-label" for="inputGroupSuccess1">Input group with success</label>
		                <div class="input-group"> <span class="input-group-addon">@</span>
		                    <input type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status"> </div> <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputGroupSuccess1Status" class="sr-only">(success)</span> </div>
		        </form>
		    </div>
		    
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputSuccess2"</span><span class="nt">&gt;</span>Input with success<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputSuccess2"</span> <span class="na">aria-describedby=</span><span class="s">"inputSuccess2Status"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputSuccess2Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-warning has-feedback"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputWarning2"</span><span class="nt">&gt;</span>Input with warning<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputWarning2"</span> <span class="na">aria-describedby=</span><span class="s">"inputWarning2Status"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-warning-sign form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputWarning2Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(warning)<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-error has-feedback"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputError2"</span><span class="nt">&gt;</span>Input with error<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputError2"</span> <span class="na">aria-describedby=</span><span class="s">"inputError2Status"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-remove form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputError2Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(error)<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputGroupSuccess1"</span><span class="nt">&gt;</span>Input group with success<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputGroupSuccess1"</span> <span class="na">aria-describedby=</span><span class="s">"inputGroupSuccess1Status"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputGroupSuccess1Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
</div>
		    <h4>Optional icons in horizontal and inline forms</h4>
   				<div class="example">
					<div class="top">
						<label>Example</label>		        <form class="form-horizontal">
		            <div class="form-group has-success has-feedback">
		                <label class="control-label col-sm-3" for="inputSuccess3">Input with success</label>
		                <div class="col-sm-9">
		                    <input type="text" class="form-control" id="inputSuccess3" aria-describedby="inputSuccess3Status" autocomplete="off" > <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputSuccess3Status" class="sr-only">(success)</span> </div>
		            </div>
		            <div class="form-group has-success has-feedback">
		                <label class="control-label col-sm-3" for="inputGroupSuccess2">Input group with success</label>
		                <div class="col-sm-9">
		                    <div class="input-group"> <span class="input-group-addon">@</span>
		                        <input type="text" class="form-control" id="inputGroupSuccess2" aria-describedby="inputGroupSuccess2Status" autocomplete="off" > </div> <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputGroupSuccess2Status" class="sr-only">(success)</span> </div>
		            </div>
		        </form>
		    </div>
		    
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label col-sm-3"</span> <span class="na">for=</span><span class="s">"inputSuccess3"</span><span class="nt">&gt;</span>Input with success<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputSuccess3"</span> <span class="na">aria-describedby=</span><span class="s">"inputSuccess3Status"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputSuccess3Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label col-sm-3"</span> <span class="na">for=</span><span class="s">"inputGroupSuccess2"</span><span class="nt">&gt;</span>Input group with success<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputGroupSuccess2"</span> <span class="na">aria-describedby=</span><span class="s">"inputGroupSuccess2Status"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputGroupSuccess2Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>
</div>
   				<div class="example">
					<div class="top">
						<label>Example</label>		        <form class="form-inline">
		            <div class="form-group has-success has-feedback">
		                <label class="control-label" for="inputSuccess4">Input with success</label>
		                <input type="text" class="form-control" id="inputSuccess4" aria-describedby="inputSuccess4Status"> <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputSuccess4Status" class="sr-only">(success)</span> </div>
		        </form>
		        <br>
		        <form class="form-inline">
		            <div class="form-group has-success has-feedback">
		                <label class="control-label" for="inputGroupSuccess3">Input group with success</label>
		                <div class="input-group"> <span class="input-group-addon">@</span>
		                    <input type="text" class="form-control" id="inputGroupSuccess3" aria-describedby="inputGroupSuccess3Status"> </div> <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputGroupSuccess3Status" class="sr-only">(success)</span> </div>
		        </form>
		    </div>
		    
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputSuccess4"</span><span class="nt">&gt;</span>Input with success<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputSuccess4"</span> <span class="na">aria-describedby=</span><span class="s">"inputSuccess4Status"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputSuccess4Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span>
<span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputGroupSuccess3"</span><span class="nt">&gt;</span>Input group with success<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputGroupSuccess3"</span> <span class="na">aria-describedby=</span><span class="s">"inputGroupSuccess3Status"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputGroupSuccess3Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>
</div>
		    <h4>Optional icons with hidden <code>.sr-only</code> labels</h4>
		    <p>If you use the <code>.sr-only</code> class to hide a form control's <code>&lt;label&gt;</code> (rather than using other labelling options, such as the <code>aria-label</code> attribute), Bootstrap will automatically adjust the position of the icon once it's been added.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		        <div class="form-group has-success has-feedback">
		            <label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
		            <input type="text" class="form-control" id="inputSuccess5" aria-describedby="inputSuccess5Status"> <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputSuccess5Status" class="sr-only">(success)</span> </div>
		        <div class="form-group has-success has-feedback">
		            <label class="control-label sr-only" for="inputGroupSuccess4">Input group with success</label>
		            <div class="input-group"> <span class="input-group-addon">@</span>
		                <input type="text" class="form-control" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status"> </div> <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputGroupSuccess4Status" class="sr-only">(success)</span> </div>
		    </div>
		    
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label sr-only"</span> <span class="na">for=</span><span class="s">"inputSuccess5"</span><span class="nt">&gt;</span>Hidden label<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputSuccess5"</span> <span class="na">aria-describedby=</span><span class="s">"inputSuccess5Status"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputSuccess5Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label sr-only"</span> <span class="na">for=</span><span class="s">"inputGroupSuccess4"</span><span class="nt">&gt;</span>Input group with success<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputGroupSuccess4"</span> <span class="na">aria-describedby=</span><span class="s">"inputGroupSuccess4Status"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputGroupSuccess4Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
</div>

		<?php
			$this->displaySubHeader(
				'forms-control-sizes',
				'Control sizing'
				);
        ?>
		    <p>Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.</p>
		    <h3>Height sizing</h3>
		    <p>Create taller or shorter form controls that match button sizes.</p>
		    <div class="example">
					<div class="top">
						<label>Example</label>
		        <form lpformnum="16">
		            <div class="controls">
		                <input class="form-control input-lg" type="text" placeholder=".input-lg" >
		                <input type="text" class="form-control" placeholder="Default input">
		                <input class="form-control input-sm" type="text" placeholder=".input-sm">
		                <select class="form-control input-lg">
		                    <option value="">.input-lg</option>
		                </select>
		                <select class="form-control">
		                    <option value="">Default select</option>
		                </select>
		                <select class="form-control input-sm">
		                    <option value="">.input-sm</option>
		                </select>
		            </div>
		        </form>
		    </div>
		    
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control input-lg"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">".input-lg"</span><span class="nt">&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Default input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control input-sm"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">".input-sm"</span><span class="nt">&gt;</span>

<span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control input-lg"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/select&gt;</span>
<span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/select&gt;</span>
<span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control input-sm"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/select&gt;</span></code></pre></figure>
</div>
		    <h3>Horizontal form group sizes</h3>
		    <p>Quickly size labels and form controls within <code>.form-horizontal</code> by adding <code>.form-group-lg</code> or <code>.form-group-sm</code>.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		        <form class="form-horizontal">
		            <div class="form-group form-group-lg">
		                <label class="col-sm-2 control-label" for="formGroupInputLarge">Large label</label>
		                <div class="col-sm-10">
		                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input" autocomplete="off" > </div>
		            </div>
		            <div class="form-group form-group-sm">
		                <label class="col-sm-2 control-label" for="formGroupInputSmall">Small label</label>
		                <div class="col-sm-10">
		                    <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Small input" autocomplete="off" > </div>
		            </div>
		        </form>
		    </div>
		    
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group form-group-lg"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span> <span class="na">for=</span><span class="s">"formGroupInputLarge"</span><span class="nt">&gt;</span>Large label<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">id=</span><span class="s">"formGroupInputLarge"</span> <span class="na">placeholder=</span><span class="s">"Large input"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group form-group-sm"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"col-sm-2 control-label"</span> <span class="na">for=</span><span class="s">"formGroupInputSmall"</span><span class="nt">&gt;</span>Small label<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-10"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">id=</span><span class="s">"formGroupInputSmall"</span> <span class="na">placeholder=</span><span class="s">"Small input"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></figure>
</div>
		    <h3>Column sizing</h3>
		    <p>Wrap inputs in grid columns, or any custom parent element, to easily enforce desired widths.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>
						<form lpformnum="17">
		            <div class="row">
		                <div class="col-xs-2">
		                    <input type="text" class="form-control" placeholder=".col-xs-2" > </div>
		                <div class="col-xs-3">
		                    <input type="text" class="form-control" placeholder=".col-xs-3"> </div>
		                <div class="col-xs-4">
		                    <input type="text" class="form-control" placeholder=".col-xs-4"> </div>
		            </div>
		        </form>
		    </div>
		    
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-2"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">".col-xs-2"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-3"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">".col-xs-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-4"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">".col-xs-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
</div>


</div>

<?php

}

function displayHelperClasses(){

				$this->displayHeader(
   					'helper-classes',
   					'Helper classes'
   				);

?>
   <div class="section-body">


		        <h3 id="helper-classes-colors"><a class="anchorjs-link " href="#helper-classes-colors" aria-label="Anchor link for: helper classes colors" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Contextual colors</h3>
		        <p>Convey meaning through color with a handful of emphasis utility classes. These may also be applied to links and will darken on hover just like our default link styles.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>
					<p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
		            <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		            <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
		            <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
		            <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
		            <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span></code></pre></figure>
</div>
		        <div class="dr-callout dr-callout-info" id="callout-helper-context-color-specificity">
		            <h4>Dealing with specificity</h4>
		            <p>Sometimes emphasis classes cannot be applied due to the specificity of another selector. In most cases, a sufficient workaround is to wrap your text in a <code>&lt;span&gt;</code> with the class.</p>
		        </div>
		        <div class="dr-callout dr-callout-warning" id="callout-helper-context-color-accessibility">
		            <h4>Conveying meaning to assistive technologies</h4>
		            <p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (the contextual colors are only used to reinforce meaning that is already present in the text/markup), or is included through alternative means, such as additional text hidden with the <code>.sr-only</code> class.</p>
		        </div>
		        <h3 id="helper-classes-backgrounds"><a class="anchorjs-link " href="#helper-classes-backgrounds" aria-label="Anchor link for: helper classes backgrounds" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Contextual backgrounds</h3>
		        <p>Similar to the contextual text color classes, easily set the background of an element to any contextual class. Anchor components will darken on hover, just like the text classes.</p>
		        <div class="dr-example dr-example-bg-classes" data-example-id="contextual-backgrounds-helpers">
		            <p class="bg-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		            <p class="bg-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
		            <p class="bg-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
		            <p class="bg-warning">Etiam porta sem malesuada magna mollis euismod.</p>
		            <p class="bg-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"bg-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"bg-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"bg-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"bg-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"bg-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span></code></pre></figure>

		        <div class="dr-callout dr-callout-info" id="callout-helper-bg-specificity">
		            <h4>Dealing with specificity</h4>
		            <p>Sometimes contextual background classes cannot be applied due to the specificity of another selector. In some cases, a sufficient workaround is to wrap your element's content in a <code>&lt;div&gt;</code> with the class.</p>
		        </div>
		        <div class="dr-callout dr-callout-warning" id="callout-helper-bg-accessibility">
		            <h4>Conveying meaning to assistive technologies</h4>
		            <p>As with <a href="#helper-classes-colors">contextual colors</a>, ensure that any meaning conveyed through color is also conveyed in a format that is not purely presentational.</p>
		        </div>
		        <h3 id="helper-classes-close"><a class="anchorjs-link " href="#helper-classes-close" aria-label="Anchor link for: helper classes close" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Close icon</h3>
		        <p>Use the generic close icon for dismissing content like modals and alerts.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <p>
		                <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
		            </p>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;&lt;/button&gt;</span></code></pre></figure>
</div>
		        <h3 id="helper-classes-carets"><a class="anchorjs-link " href="#helper-classes-carets" aria-label="Anchor link for: helper classes carets" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Carets</h3>
		        <p>Use carets to indicate dropdown functionality and direction. Note that the default caret will reverse automatically in <a href="../components/#btn-dropdowns-dropup">dropup menus</a>.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label></div>		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span></code></pre></figure>
</div>
		        <h3 id="helper-classes-floats"><a class="anchorjs-link " href="#helper-classes-floats" aria-label="Anchor link for: helper classes floats" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Quick floats</h3>
		        <p>Float an element to the left or right with a class. <code>!important</code> is included to avoid specificity issues. Classes can also be used as mixins.</p>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"pull-left"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"pull-right"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        
<figure class="highlight"><label>HTML</label><pre><code class="language-scss" data-lang="scss"><span class="c1">// Classes</span>
<span class="nc">.pull-left</span> <span class="p">{</span>
  <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.pull-right</span> <span class="p">{</span>
  <span class="nl">float</span><span class="p">:</span> <span class="nb">right</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
<span class="p">}</span>

<span class="c1">// Usage as mixins</span>
<span class="nc">.element</span> <span class="p">{</span>
  <span class="nc">.pull-left</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.another-element</span> <span class="p">{</span>
  <span class="nc">.pull-right</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <div class="dr-callout dr-callout-warning" id="callout-helper-pull-navbar">
		            <h4>Not for use in navbars</h4>
		            <p>To align components in navbars with utility classes, use <code>.navbar-left</code> or <code>.navbar-right</code> instead. <a href="../components/#navbar-component-alignment">See the navbar docs</a> for details.</p>
		        </div>
		        <h3 id="helper-classes-center"><a class="anchorjs-link " href="#helper-classes-center" aria-label="Anchor link for: helper classes center" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Center content blocks</h3>
		        <p>Set an element to <code>display: block</code> and center via <code>margin</code>. Available as a mixin and class.</p>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"center-block"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        
<figure class="highlight"><label>HTML</label><pre><code class="language-scss" data-lang="scss"><span class="c1">// Class</span>
<span class="nc">.center-block</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="nb">block</span><span class="p">;</span>
  <span class="nl">margin-left</span><span class="p">:</span> <span class="nb">auto</span><span class="p">;</span>
  <span class="nl">margin-right</span><span class="p">:</span> <span class="nb">auto</span><span class="p">;</span>
<span class="p">}</span>

<span class="c1">// Usage as a mixin</span>
<span class="nc">.element</span> <span class="p">{</span>
  <span class="nc">.center-block</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="helper-classes-clearfix"><a class="anchorjs-link " href="#helper-classes-clearfix" aria-label="Anchor link for: helper classes clearfix" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Clearfix</h3>
		        <p>Easily clear <code>float</code>s by adding <code>.clearfix</code> <strong>to the parent element</strong>. Utilizes <a href="http://nicolasgallagher.com/micro-clearfix-hack/">the micro clearfix</a> as popularized by Nicolas Gallagher. Can also be used as a mixin.</p>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Usage as a class --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"clearfix"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        
<figure class="highlight"><label>HTML</label><pre><code class="language-scss" data-lang="scss"><span class="c1">// Mixin itself</span>
<span class="nc">.clearfix</span><span class="o">()</span> <span class="p">{</span>
  <span class="k">&amp;</span><span class="nd">:before</span><span class="o">,</span>
  <span class="k">&amp;</span><span class="nd">:after</span> <span class="p">{</span>
    <span class="nl">content</span><span class="p">:</span> <span class="s2">" "</span><span class="p">;</span>
    <span class="nl">display</span><span class="p">:</span> <span class="n">table</span><span class="p">;</span>
  <span class="p">}</span>
  <span class="k">&amp;</span><span class="nd">:after</span> <span class="p">{</span>
    <span class="nl">clear</span><span class="p">:</span> <span class="nb">both</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Usage as a mixin
		</span><span class="nc">.element</span> <span class="p">{</span>
  <span class="nc">.clearfix</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="helper-classes-show-hide"><a class="anchorjs-link " href="#helper-classes-show-hide" aria-label="Anchor link for: helper classes show hide" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Showing and hiding content</h3>
		        <p>Force an element to be shown or hidden (<strong>including for screen readers</strong>) with the use of <code>.show</code> and <code>.hidden</code> classes. These classes use <code>!important</code> to avoid specificity conflicts, just like the <a href="#helper-classes-floats">quick floats</a>. They are only available for block level toggling. They can also be used as mixins.</p>
		        <p><code>.hide</code> is available, but it does not always affect screen readers and is <strong>deprecated</strong> as of v3.0.1. Use <code>.hidden</code> or <code>.sr-only</code> instead.</p>
		        <p>Furthermore, <code>.invisible</code> can be used to toggle only the visibility of an element, meaning its <code>display</code> is not modified and the element can still affect the flow of the document.</p>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"show"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"hidden"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>

		        
<figure class="highlight"><label>HTML</label><pre><code class="language-scss" data-lang="scss"><span class="c1">// Classes</span>
<span class="nc">.show</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="nb">block</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.hidden</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="nb">none</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.invisible</span> <span class="p">{</span>
  <span class="nl">visibility</span><span class="p">:</span> <span class="nb">hidden</span><span class="p">;</span>
<span class="p">}</span>

<span class="c1">// Usage as mixins</span>
<span class="nc">.element</span> <span class="p">{</span>
  <span class="nc">.show</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.another-element</span> <span class="p">{</span>
  <span class="nc">.hidden</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="helper-classes-screen-readers"><a class="anchorjs-link " href="#helper-classes-screen-readers" aria-label="Anchor link for: helper classes screen readers" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Screen reader and keyboard navigation content</h3>
		        <p>Hide an element to all devices <strong>except screen readers</strong> with <code>.sr-only</code>. Combine <code>.sr-only</code> with <code>.sr-only-focusable</code> to show the element again when it's focused (e.g. by a keyboard-only user). Necessary for following <a href="../getting-started/#accessibility">accessibility best practices</a>. Can also be used as mixins.</p>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"sr-only sr-only-focusable"</span> <span class="na">href=</span><span class="s">"#content"</span><span class="nt">&gt;</span>Skip to main content<span class="nt">&lt;/a&gt;</span></code></pre></figure>

		        
<figure class="highlight"><label>HTML</label><pre><code class="language-scss" data-lang="scss"><span class="c1">// Usage as a mixin</span>
<span class="nc">.skip-navigation</span> <span class="p">{</span>
  <span class="nc">.sr-only</span><span class="o">()</span><span class="p">;</span>
  <span class="nc">.sr-only-focusable</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

		        <h3 id="helper-classes-image-replacement"><a class="anchorjs-link " href="#helper-classes-image-replacement" aria-label="Anchor link for: helper classes image replacement" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Image replacement</h3>
		        <p>Utilize the <code>.text-hide</code> class or mixin to help replace an element's text content with a background image.</p>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"text-hide"</span><span class="nt">&gt;</span>Custom heading<span class="nt">&lt;/h1&gt;</span></code></pre></figure>

		        
<figure class="highlight"><label>HTML</label><pre><code class="language-scss" data-lang="scss"><span class="c1">// Usage as a mixin</span>
<span class="nc">.heading</span> <span class="p">{</span>
  <span class="nc">.text-hide</span><span class="o">()</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

</div>
<?php
}


function displayImages(){

	$this->displayHeader(
   					'images',
   					'Images'
   				);

?>

   <div class="section-body">
			<?php
				$this->displaySubHeader(
					'images-responsive',
					'Responsive images'
					);
		        ?>

		        <p>Images in Bootstrap 3 can be made responsive-friendly via the addition of the <code>.img-responsive</code> class. This applies <code>max-width: 100%;</code>, <code>height: auto;</code> and <code>display: block;</code> to the image so that it scales nicely to the parent element.</p>
		        <p>To center images which use the <code>.img-responsive</code> class, use <code>.center-block</code> instead of <code>.text-center</code>. <a href="../css/#helper-classes-center">See the helper classes section</a> for more details about <code>.center-block</code> usage.</p>
		        <div class="dr-callout dr-callout-warning" id="callout-images-ie-svg">
		            <h4>SVG images and IE 8-10</h4>
		            <p>In Internet Explorer 8-10, SVG images with <code>.img-responsive</code> are disproportionately sized. To fix this, add <code>width: 100% \9;</code> where necessary. Bootstrap doesn't apply this automatically as it causes complications to other image formats.</p>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-responsive"</span> <span class="na">alt=</span><span class="s">"Responsive image"</span><span class="nt">&gt;</span></code></pre></figure>

		        <h2 id="images-shapes"><a class="anchorjs-link " href="#images-shapes" aria-label="Anchor link for: images shapes" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Image shapes</h2>
		        <p>Add classes to an <code>&lt;img&gt;</code> element to easily style images in any project.</p>
		        <div class="dr-callout dr-callout-danger" id="callout-images-ie-rounded-corners">
		            <h4>Cross-browser compatibility</h4>
		            <p>Keep in mind that Internet Explorer 8 lacks support for rounded corners.</p>
		        </div>
		        <div class="dr-example dr-example-images" data-example-id="image-shapes"> <img data-src="holder.js/140x140" class="img-rounded" alt="140x140" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTM1MmJlYTNkMCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MzUyYmVhM2QwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9Ijc0LjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true" style="width: 140px; height: 140px;"> <img data-src="holder.js/140x140" class="img-circle" alt="140x140" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTM1MmJlZWIwYSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MzUyYmVlYjBhIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9Ijc0LjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true" style="width: 140px; height: 140px;"> <img data-src="holder.js/140x140" class="img-thumbnail" alt="140x140" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTM1MmJlYzc0MyB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MzUyYmVjNzQzIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9Ijc0LjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true" style="width: 140px; height: 140px;"> </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-rounded"</span><span class="nt">&gt;</span>
<span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-circle"</span><span class="nt">&gt;</span>
<span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"img-thumbnail"</span><span class="nt">&gt;</span></code></pre></figure>



</div>
<?php

}

function displayButtons(){

	$this->displayHeader(
			'buttons',
			'Buttons'
		);

?>
   <div class="section-body">

			<?php
				$this->displaySubHeader(
					'buttons-tags',
					'Button tags'
					);
		        ?>
		        <p>Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>	
		        	<a class="btn btn-default" href="#" role="button">Link</a>
		            <button class="btn btn-default" type="submit">Button</button>
		            <input class="btn btn-default" type="button" value="Input">
		            <input class="btn btn-default" type="submit" value="Submit">
		        	</div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">value=</span><span class="s">"Input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">value=</span><span class="s">"Submit"</span><span class="nt">&gt;</span></code></pre></figure>
</div>

		        <div class="dr-callout dr-callout-warning" id="callout-buttons-context-usage">
		            <h4>Context-specific usage</h4>
		            <p>While button classes can be used on <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> elements, only <code>&lt;button&gt;</code> elements are supported within our nav and navbar components.</p>
		        </div>
		        <div class="dr-callout dr-callout-warning" id="callout-buttons-anchor-accessibility">
		            <h4>Links acting as buttons</h4>
		            <p>If the <code>&lt;a&gt;</code> elements are used to act as buttons – triggering in-page functionality, rather than navigating to another document or section within the current page – they should also be given an appropriate <code>role="button"</code>.</p>
		        </div>
		        <div class="dr-callout dr-callout-warning" id="callout-buttons-ff-height">
		            <h4>Cross-browser rendering</h4>
		            <p>As a best practice, <strong>we highly recommend using the <code>&lt;button&gt;</code> element whenever possible</strong> to ensure matching cross-browser rendering.</p>
		            <p>Among other things, there's <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=697451">a bug in Firefox &lt;30</a> that prevents us from setting the <code>line-height</code> of <code>&lt;input&gt;</code>-based buttons, causing them to not exactly match the height of other buttons on Firefox.</p>
		        </div>
    			<?php
				$this->displaySubHeader(
					'buttons-options',
					'Options'
					);
		        ?>
		        <p>Use any of the available button classes to quickly create a styled button.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>
						<button type="button" class="btn btn-default">Default</button>
		           		<button type="button" class="btn btn-primary">Primary</button>
<!-- 		            <button type="button" class="btn btn-success">Success</button>
		            <button type="button" class="btn btn-info">Info</button>
		            <button type="button" class="btn btn-warning">Warning</button>
		            <button type="button" class="btn btn-danger">Danger</button>
		            <button type="button" class="btn btn-link">Link</button> -->
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Standard button --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Provides extra visual weight and identifies the primary action in a set of buttons --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>

<!-- <span class="c">&lt;!-- Indicates a successful or positive action --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Contextual button for informational alert messages --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Indicates caution should be taken with this action --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Indicates a dangerous or potentially negative action --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Deemphasize a button by making it look like a link while maintaining button behavior --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-link"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/button&gt;</span> --></code></pre></figure>
</div>

		        <div class="dr-callout dr-callout-warning" id="callout-buttons-color-accessibility">
		            <h4>Conveying meaning to assistive technologies</h4>
		            <p>Using color to add meaning to a button only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (the visible text of the button), or is included through alternative means, such as additional text hidden with the <code>.sr-only</code> class.</p>
		        </div>
		        <h2 id="buttons-sizes"><a class="anchorjs-link " href="#buttons-sizes" aria-label="Anchor link for: buttons sizes" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Sizes</h2>
		        <p>Add <code>.btn-lg</code> for a larger button.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <p>
		                <button type="button" class="btn btn-primary btn-lg">Large button</button>
		                <button type="button" class="btn btn-default btn-lg">Large button</button>
		            </p>
		            <p>
		                <button type="button" class="btn btn-primary">Default button</button>
		                <button type="button" class="btn btn-default">Default button</button>
		            </p>
					<!-- 		           
					 <p>
		                <button type="button" class="btn btn-primary btn-sm">Small button</button>
		                <button type="button" class="btn btn-default btn-sm">Small button</button>
		            </p> -->
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg"</span><span class="nt">&gt;</span>Large button<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg"</span><span class="nt">&gt;</span>Large button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Default button<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Default button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<!-- <span class="nt">&lt;p&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-sm"</span><span class="nt">&gt;</span>Small button<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-sm"</span><span class="nt">&gt;</span>Small button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/p&gt;</span> -->
</code></pre></figure>
</div>

		        <p>Create block level buttons—those that span the full width of a parent— by adding <code>.btn-block</code>.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <div class="well center-block" style="max-width:400px">
		                <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
		                <button type="button" class="btn btn-default btn-lg btn-block">Block level button</button>
		            </div>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg btn-block"</span><span class="nt">&gt;</span>Block level button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg btn-block"</span><span class="nt">&gt;</span>Block level button<span class="nt">&lt;/button&gt;</span></code></pre></figure>
</div>

		          			<?php
				$this->displaySubHeader(
					'buttons-active',
					'Active state'
					);
		        ?>

		        <p>Buttons will appear pressed (with a darker background, darker border, and inset shadow) when active. For <code>&lt;button&gt;</code> elements, this is done via <code>:active</code>. For <code>&lt;a&gt;</code> elements, it's done with <code>.active</code>. However, you may use <code>.active</code> on <code>&lt;button&gt;</code>s (and include the <code>aria-pressed="true"</code> attribute) should you need to replicate the active state programmatically.</p>
		        <h3 id="button-element"><a class="anchorjs-link " href="#button-element" aria-label="Anchor link for: button element" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Button element</h3>
		        <p>No need to add <code>:active</code> as it's a pseudo-class, but if you need to force the same appearance, go ahead and add <code>.active</code>. You can also add the <code>.active</code> class to <code>&lt;a&gt;</code> buttons.</p>
		       <div class="example">
					<div class="top">
						<label>Example</label>	
		            <button type="button" class="btn btn-primary btn-lg active">Primary button</button>
		            <button type="button" class="btn btn-default btn-lg active">Button</button>
		        	<a href="#" class="btn btn-primary btn-lg active" role="button">Primary link</a>
		        	<a href="#" class="btn btn-default btn-lg active" role="button">Link</a>

		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg active"</span><span class="nt">&gt;</span>Primary button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg active"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg active"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Primary link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg active"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span></code></pre></figure>
</div>

    			<?php
				$this->displaySubHeader(
					'buttons-disabled',
					'Disabled state'
					);
		        ?>
		        <p>Make buttons look unclickable by fading them back with <code>opacity</code>.</p>
		        <h3 id="button-element-1"><a class="anchorjs-link " href="#button-element-1" aria-label="Anchor link for: button element 1" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Button element</h3>
		        <p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons. Also, you can add the <code>.disabled</code> class to <code>&lt;a&gt;</code> buttons.</p>
		       		       		       <div class="example">
					<div class="top">
						<label>Example</label>	
		            <button type="button" class="btn btn-primary btn-lg" disabled="disabled">Primary button</button>
		            <button type="button" class="btn btn-default btn-lg" disabled="disabled">Button</button>
		            <a href="#" class="btn btn-primary btn-lg disabled" role="button">Primary link</a>
		            <a href="#" class="btn btn-default btn-lg disabled" role="button">Link</a>
		        </div>
		        
<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-primary"</span> <span class="na">disabled=</span><span class="s">"disabled"</span><span class="nt">&gt;</span>Primary button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg"</span> <span class="na">disabled=</span><span class="s">"disabled"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg disabled"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Primary link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg disabled"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span></code></pre></figure>
</div>

		        <div class="dr-callout dr-callout-danger" id="callout-buttons-ie-disabled">
		            <h4>Cross-browser compatibility</h4>
		            <p>If you add the <code>disabled</code> attribute to a <code>&lt;button&gt;</code>, Internet Explorer 9 and below will render text gray with a nasty text-shadow that we cannot fix.</p>
		        </div>

		        <div class="dr-callout dr-callout-warning" id="callout-buttons-disabled-anchor">
		            <h4>Link functionality caveat</h4>
		            <p>This class uses <code>pointer-events: none</code> to try to disable the link functionality of <code>&lt;a&gt;</code>s, but that CSS property is not yet standardized and isn't fully supported in Opera 18 and below, or in Internet Explorer 11. In addition, even in browsers that do support <code>pointer-events: none</code>, keyboard navigation remains unaffected, meaning that sighted keyboard users and users of assistive technologies will still be able to activate these links. So to be safe, use custom JavaScript to disable such links.</p>
		        </div>


</div>
<?php
}

function displayScss(){


	$this->displayHeader(
			'sass',
			'Using Sass'
		);



?>

   <div class="section-body">


		        <p class="lead">While Bootstrap is built on Less, it also has an <a href="https://github.com/twbs/bootstrap-sass">official Sass port</a>. We maintain it in a separate GitHub repository and handle updates with a conversion script.</p>


			<?php
				$this->displaySubHeader(
					'sass-contents',
					'What\'s included',
					array('Since the Sass port has a separate repo and serves a slightly different audience, the contents of the project differ greatly from the main Bootstrap project. This ensures the Sass port is as compatible with as many Sass-based systems as possible.')
					);
		        ?>
		        <div class="table-responsive">
		            <table class="table table-bordered table-striped">
		                <thead>
		                    <tr>
		                        <th>Path</th>
		                        <th>Description</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th scope="row"><code>lib/</code></th>
		                        <td>Ruby gem code (Sass configuration, Rails and Compass integrations)</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>tasks/</code></th>
		                        <td>Converter scripts (turning upstream Less to Sass)</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>test/</code></th>
		                        <td>Compilation tests</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>templates/</code></th>
		                        <td>Compass package manifest</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>vendor/assets/</code></th>
		                        <td>Sass, JavaScript, and font files</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>Rakefile</code></th>
		                        <td>Internal tasks, such as rake and convert</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        <p>Visit the <a href="https://github.com/twbs/bootstrap-sass">Sass port's GitHub repository</a> to see these files in action.</p>
		        <h2 id="sass-installation"><a class="anchorjs-link " href="#sass-installation" aria-label="Anchor link for: sass installation" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Installation</h2>
		        <p>For information on how to install and use Bootstrap for Sass, consult the <a href="https://github.com/twbs/bootstrap-sass">GitHub repository readme</a>. It's the most up to date source and includes information for use with Rails, Compass, and standard Sass projects.</p>


</div>
<?php

}


function displayResponsiveUtilities(){


	$this->displayHeader(
			'responsive-utilities',
			'Responsive utilities'
		);

?>
   <div class="section-body">

		        <p class="lead">For faster mobile-friendly development, use these utility classes for showing and hiding content by device via media query. Also included are utility classes for toggling content when printed.</p>
		        <p>Try to use these on a limited basis and avoid creating entirely different versions of the same site. Instead, use them to complement each device's presentation.</p>

		        <?php
				$this->displaySubHeader(
					'responsive-utilities-classes',
					'Available classes',
					array('Use a single or combination of the available classes for toggling content across viewport breakpoints.')
					);
		        ?>
		        <div class="table-responsive">
		            <table class="table table-bordered table-striped responsive-utilities">
		                <thead>
		                    <tr>
		                        <th></th>
		                        <th> Extra small devices <small>Phones (&lt;768px)</small> </th>
		                        <th> Small devices <small>Tablets (≥768px)</small> </th>
		                        <th> Medium devices <small>Desktops (≥992px)</small> </th>
		                        <th> Large devices <small>Desktops (≥1200px)</small> </th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th scope="row"><code>.visible-xs-*</code></th>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-hidden">Hidden</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>.visible-sm-*</code></th>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-hidden">Hidden</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>.visible-md-*</code></th>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-hidden">Hidden</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>.visible-lg-*</code></th>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-visible">Visible</td>
		                    </tr>
		                </tbody>
		                <tbody>
		                    <tr>
		                        <th scope="row"><code>.hidden-xs</code></th>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-visible">Visible</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>.hidden-sm</code></th>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-visible">Visible</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>.hidden-md</code></th>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-visible">Visible</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>.hidden-lg</code></th>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-hidden">Hidden</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        <p>As of v3.2.0, the <code>.visible-*-*</code> classes for each breakpoint come in three variations, one for each CSS <code>display</code> property value listed below.</p>
		        <div class="table-responsive">
		            <table class="table table-bordered table-striped">
		                <thead>
		                    <tr>
		                        <th>Group of classes</th>
		                        <th>CSS <code>display</code></th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th scope="row"><code>.visible-*-block</code></th>
		                        <td><code>display: block;</code></td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>.visible-*-inline</code></th>
		                        <td><code>display: inline;</code></td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>.visible-*-inline-block</code></th>
		                        <td><code>display: inline-block;</code></td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        <p>So, for extra small (<code>xs</code>) screens for example, the available <code>.visible-*-*</code> classes are: <code>.visible-xs-block</code>, <code>.visible-xs-inline</code>, and <code>.visible-xs-inline-block</code>.</p>
		        <p>The classes <code>.visible-xs</code>, <code>.visible-sm</code>, <code>.visible-md</code>, and <code>.visible-lg</code> also exist, but are <strong>deprecated as of v3.2.0</strong>. They are approximately equivalent to <code>.visible-*-block</code>, except with additional special cases for toggling <code>&lt;table&gt;</code>-related elements.</p>
		        <h2 id="responsive-utilities-print"><a class="anchorjs-link " href="#responsive-utilities-print" aria-label="Anchor link for: responsive utilities print" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Print classes</h2>
		        <p>Similar to the regular responsive classes, use these for toggling content for print.</p>
		        <div class="table-responsive">
		            <table class="table table-bordered table-striped responsive-utilities">
		                <thead>
		                    <tr>
		                        <th>Classes</th>
		                        <th>Browser</th>
		                        <th>Print</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <th scope="row"> <code>.visible-print-block</code>
		                            <br> <code>.visible-print-inline</code>
		                            <br> <code>.visible-print-inline-block</code> </th>
		                        <td class="is-hidden">Hidden</td>
		                        <td class="is-visible">Visible</td>
		                    </tr>
		                    <tr>
		                        <th scope="row"><code>.hidden-print</code></th>
		                        <td class="is-visible">Visible</td>
		                        <td class="is-hidden">Hidden</td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
		        <p>The class <code>.visible-print</code> also exists but is <strong>deprecated</strong> as of v3.2.0. It is approximately equivalent to <code>.visible-print-block</code>, except with additional special cases for <code>&lt;table&gt;</code>-related elements.</p>

 				<?php
				$this->displaySubHeader(
					'responsive-utilities-tests',
					'Test cases',
					array('Green checkmarks indicate the element <strong>is visible</strong> in your current viewport.')
					);
		        ?>

		        <h3 id="visible-on"><a class="anchorjs-link " href="#visible-on" aria-label="Anchor link for: visible on" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Visible on...</h3>
		        <p>Green checkmarks indicate the element <strong>is visible</strong> in your current viewport.</p>
		        <div class="row responsive-utilities-test visible-on">
		            <div class="col-xs-6 col-sm-3"> <span class="hidden-xs">Extra small</span> <span class="visible-xs-block">✔ Visible on x-small</span> </div>
		            <div class="col-xs-6 col-sm-3"> <span class="hidden-sm">Small</span> <span class="visible-sm-block">✔ Visible on small</span> </div>
		            <div class="clearfix visible-xs-block"></div>
		            <div class="col-xs-6 col-sm-3"> <span class="hidden-md">Medium</span> <span class="visible-md-block">✔ Visible on medium</span> </div>
		            <div class="col-xs-6 col-sm-3"> <span class="hidden-lg">Large</span> <span class="visible-lg-block">✔ Visible on large</span> </div>
		        </div>
		        <div class="row responsive-utilities-test visible-on">
		            <div class="col-xs-6"> <span class="hidden-xs hidden-sm">Extra small and small</span> <span class="visible-xs-block visible-sm-block">✔ Visible on x-small and small</span> </div>
		            <div class="col-xs-6"> <span class="hidden-md hidden-lg">Medium and large</span> <span class="visible-md-block visible-lg-block">✔ Visible on medium and large</span> </div>
		            <div class="clearfix visible-xs-block"></div>
		            <div class="col-xs-6"> <span class="hidden-xs hidden-md">Extra small and medium</span> <span class="visible-xs-block visible-md-block">✔ Visible on x-small and medium</span> </div>
		            <div class="col-xs-6"> <span class="hidden-sm hidden-lg">Small and large</span> <span class="visible-sm-block visible-lg-block">✔ Visible on small and large</span> </div>
		            <div class="clearfix visible-xs-block"></div>
		            <div class="col-xs-6"> <span class="hidden-xs hidden-lg">Extra small and large</span> <span class="visible-xs-block visible-lg-block">✔ Visible on x-small and large</span> </div>
		            <div class="col-xs-6"> <span class="hidden-sm hidden-md">Small and medium</span> <span class="visible-sm-block visible-md-block">✔ Visible on small and medium</span> </div>
		        </div>
		        <h3 id="hidden-on"><a class="anchorjs-link " href="#hidden-on" aria-label="Anchor link for: hidden on" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Hidden on...</h3>
		        <p>Here, green checkmarks also indicate the element <strong>is hidden</strong> in your current viewport.</p>
		        <div class="row responsive-utilities-test hidden-on">
		            <div class="col-xs-6 col-sm-3"> <span class="hidden-xs">Extra small</span> <span class="visible-xs-block">✔ Hidden on x-small</span> </div>
		            <div class="col-xs-6 col-sm-3"> <span class="hidden-sm">Small</span> <span class="visible-sm-block">✔ Hidden on small</span> </div>
		            <div class="clearfix visible-xs-block"></div>
		            <div class="col-xs-6 col-sm-3"> <span class="hidden-md">Medium</span> <span class="visible-md-block">✔ Hidden on medium</span> </div>
		            <div class="col-xs-6 col-sm-3"> <span class="hidden-lg">Large</span> <span class="visible-lg-block">✔ Hidden on large</span> </div>
		        </div>
		        <div class="row responsive-utilities-test hidden-on">
		            <div class="col-xs-6"> <span class="hidden-xs hidden-sm">Extra small and small</span> <span class="visible-xs-block visible-sm-block">✔ Hidden on x-small and small</span> </div>
		            <div class="col-xs-6"> <span class="hidden-md hidden-lg">Medium and large</span> <span class="visible-md-block visible-lg-block">✔ Hidden on medium and large</span> </div>
		            <div class="clearfix visible-xs-block"></div>
		            <div class="col-xs-6"> <span class="hidden-xs hidden-md">Extra small and medium</span> <span class="visible-xs-block visible-md-block">✔ Hidden on x-small and medium</span> </div>
		            <div class="col-xs-6"> <span class="hidden-sm hidden-lg">Small and large</span> <span class="visible-sm-block visible-lg-block">✔ Hidden on small and large</span> </div>
		            <div class="clearfix visible-xs-block"></div>
		            <div class="col-xs-6"> <span class="hidden-xs hidden-lg">Extra small and large</span> <span class="visible-xs-block visible-lg-block">✔ Hidden on x-small and large</span> </div>
		            <div class="col-xs-6"> <span class="hidden-sm hidden-md">Small and medium</span> <span class="visible-sm-block visible-md-block">✔ Hidden on small and medium</span> </div>
		        </div>


</div>
<?php

}


function displayBreadcrumbs(){



	$this->displayHeader(
			'breadcrumbs',
			'Breadcrumbs',
			'Indicate the current page\'s location within a navigational hierarchy.'
		);

?>
   <div class="section-body">
		       
		        <p>Separators are automatically added in CSS through <code>:before</code> and <code>content</code>.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <ol class="breadcrumb">
		                <li class="active">Home</li>
		            </ol>
		            <ol class="breadcrumb">
		                <li><a href="#">Home</a></li>
		                <li class="active">Library</li>
		            </ol>
		            <ol class="breadcrumb">
		                <li><a href="#">Home</a></li>
		                <li><a href="#">Library</a></li>
		                <li class="active">Data</li>
		            </ol>
		        </div>
		        
        <figure class="highlight"><label>HTML</label><pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;ol</span> <span class="na">class=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Library<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>Data<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ol&gt;</span>
</code></pre></figure>
</div>

	</div>
<?php
}


function displayPagination(){

$this->displayHeader(
			'pagination',
			'Pagination',
			'Provide pagination links for your site or app with the multi-page pagination component<!--, or the simpler <a href="#pagination-pager">pager alternative</a>-->.'
		);

	?>

   <div class="section-body">

		        <h2 id="pagination-default"><a class="anchorjs-link " href="#pagination-default" aria-label="Anchor link for: pagination default" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Default pagination</h2>
		        <p>Simple pagination inspired by Rdio, great for apps and search results. The large block is hard to miss, easily scalable, and provides large click areas.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <nav>
		                <ul class="pagination">
		                    <li>
		                        <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a>
		                    </li>
		                    <li><a href="#">1</a></li>
		                    <li><a href="#">2</a></li>
		                    <li><a href="#">3</a></li>
		                    <li><a href="#">4</a></li>
		                    <li><a href="#">5</a></li>
		                    <li>
		                        <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a>
		                    </li>
		                </ul>
		            </nav>
		        </div>
		        
        <figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">aria-label=</span><span class="s">"Previous"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>4<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>5<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">aria-label=</span><span class="s">"Next"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;raquo;</span><span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></figure>
</div>
		        <h3 id="disabled-and-active-states"><a class="anchorjs-link " href="#disabled-and-active-states" aria-label="Anchor link for: disabled and active states" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Disabled and active states</h3>
		        <p>Links are customizable for different circumstances. Use <code>.disabled</code> for unclickable links and <code>.active</code> to indicate the current page.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <nav>
		                <ul class="pagination">
		                    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
		                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
		                    <li><a href="#">2</a></li>
		                    <li><a href="#">3</a></li>
		                    <li><a href="#">4</a></li>
		                    <li><a href="#">5</a></li>
		                    <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
		                </ul>
		            </nav>
		        </div>
    <figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"disabled"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">aria-label=</span><span class="s">"Previous"</span><span class="nt">&gt;&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>1 <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
    ...
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></figure>
</div>

    </div>

	<?php
}


function displayAlerts(){

$this->displayHeader(
			'alerts',
			'Alerts',
			'Provide contextual feedback messages<!-- for typical user actions with the handful of available and flexible alert messages-->.'
		);


?>

   <div class="section-body">


		    <!--     <h2 id="alerts-examples"><a class="anchorjs-link " href="#alerts-examples" aria-label="Anchor link for: alerts examples" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Examples</h2>
		        <p>Wrap any text and an optional dismiss button in <code>.alert</code> and one of the four contextual classes (e.g., <code>.alert-success</code>) for basic alert messages.</p>
		        <div class="dr-callout dr-callout-info" id="callout-alerts-no-default">
		            <h4>No default class</h4>
		            <p>Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much sense, so you're required to specify a type via contextual class. Choose from success, info, warning, or danger.</p>
		        </div>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <div class="alert alert-success" role="alert"> <strong>Well done!</strong> You successfully read this important alert message. </div>
		            <div class="alert alert-info" role="alert"> <strong>Heads up!</strong> This alert needs your attention, but it's not super important. </div>
		            <div class="alert alert-warning" role="alert"> <strong>Warning!</strong> Better check yourself, you're not looking too good. </div>
		            <div class="alert alert-danger" role="alert"> <strong>Oh snap!</strong> Change a few things up and try submitting again. </div>
		        </div>
		        
        <figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>
</div>

		        <h2 id="alerts-dismissible"><a class="anchorjs-link " href="#alerts-dismissible" aria-label="Anchor link for: alerts dismissible" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Dismissible alerts</h2>
		        <p>Build on any alert by adding an optional <code>.alert-dismissible</code> and close button.</p>
		        <div class="dr-callout dr-callout-info" id="callout-alerts-dismiss-plugin">
		            <h4>Requires JavaScript alert plugin</h4>
		            <p>For fully functioning, dismissible alerts, you must use the <a href="../javascript/#alerts">alerts JavaScript plugin</a>.</p>
		        </div>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <div class="alert alert-warning alert-dismissible" role="alert">
		                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Warning!</strong> Better check yourself, you're not looking too good. </div>
		        </div>
		        
        <figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning alert-dismissible"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;&lt;/button&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Warning!<span class="nt">&lt;/strong&gt;</span> Better check yourself, you're not looking too good.
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
</div>
		        <div class="dr-callout dr-callout-warning" id="callout-alerts-dismiss-use-button">
		            <h4>Ensure proper behavior across all devices</h4>
		            <p>Be sure to use the <code>&lt;button&gt;</code> element with the <code>data-dismiss="alert"</code> data attribute.</p>
		        </div>
		        <h2 id="alerts-links"><a class="anchorjs-link " href="#alerts-links" aria-label="Anchor link for: alerts links" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Links in alerts</h2>
		        <p>Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <div class="alert alert-success" role="alert"> <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>. </div>
		            <div class="alert alert-info" role="alert"> <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important. </div>
		            <div class="alert alert-warning" role="alert"> <strong>Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>. </div>
		            <div class="alert alert-danger" role="alert"> <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again. </div>
		        </div>
		        
        <figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
</div>
 -->


	        <h2 id="alerts-callout"><a class="anchorjs-link " href="#alerts-callout" aria-label="Anchor link for: alerts callout" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Callout Alerts</h2>
	        <p>Callout alerts are for this identifying important (and not so important) notes related to a given topic. Choose from success, info, warning, or danger.</p>

   				<div class="example">
					<div class="top">
						<label>Example</label>    	        
						<div class="dr-callout dr-callout-info">
			            	<h4><i class="fa fa-info-circle"></i> Info class</h4>
			            	<p>Use the info class when there is any information that might be helpfull to a developer. For example, embedding YouTube videos in modals requires additional JavaScript not in Bootstrap to automatically stop playback and more. <a href="https://stackoverflow.com/questions/18622508/bootstrap-3-and-youtube-in-modal">See this helpful Stack Overflow post</a> for more information.</p>
			        	</div>
				        <div class="dr-callout dr-callout-warning">
				            <h4><i class="fa fa-exclamation-triangle"></i> Warning Class</h4>
				            <p>Use the warning class when there are known (possible) issues with a component. For example, invoking <code>$(...).popover('show')</code> when the target element is <code>display: none;</code> will cause the popover to be incorrectly positioned for this hypothetical component.</p>
				        </div>
				        <div class="dr-callout dr-callout-danger">
				            <h4><i class="fa fa-exclamation"></i> Danger Class</h4>
				            <p>Use the danger class when a component is in danger of failing if certain circumstances are not met. For example, a <code>&lt;a href="#home"&gt;home&lt;/a&gt;</code> must correspond to something in the DOM like <code>&lt;div id="home"&gt;&lt;/div&gt;</code> or this hypothetical component will fail.</p>
				        </div>
	        		</div>

	          <figure class="highlight"><label>HTML</label>
	          	<pre>
	          		<code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dr-callout dr-callout-info"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4&gt;</span> ... <span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p&gt;</span> ... <span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
</div>
	        
	</div>

<?php

}

function displayPanels(){


	$this->displayHeader(
			'panels',
			'Panels',
			'While not always necessary, sometimes you need to put your DOM in a box. For those situations, try the panel component.'
		);

?>
   <div class="section-body">

	
		        <h2 id="panels-basic"><a class="anchorjs-link " href="#panels-basic" aria-label="Anchor link for: panels basic" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Basic example</h2>
		        <p>By default, all the <code>.panel</code> does is apply some basic border and padding to contain some content.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <div class="panel panel-default">
		                <div class="panel-body"> Basic panel example </div>
		            </div>
		        </div>
		        
        <figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
    Basic panel example
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
</div>
		        <h2 id="panels-heading"><a class="anchorjs-link " href="#panels-heading" aria-label="Anchor link for: panels heading" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Panel with heading</h2>
		        <p>Easily add a heading container to your panel with <code>.panel-heading</code>. You may also include any <code>&lt;h1&gt;</code>-<code>&lt;h6&gt;</code> with a <code>.panel-title</code> class to add a pre-styled heading. However, the font sizes of <code>&lt;h1&gt;</code>-<code>&lt;h6&gt;</code> are overridden by <code>.panel-heading</code>.</p>
		        <p>For proper link coloring, be sure to place links in headings within <code>.panel-title</code>.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <div class="panel panel-default">
		                <div class="panel-heading">Panel heading without title</div>
		                <div class="panel-body"> Panel content </div>
		            </div>
		            <div class="panel panel-default">
		                <div class="panel-heading">
		                    <h3 class="panel-title">Panel title</h3> </div>
		                <div class="panel-body"> Panel content </div>
		            </div>
		        </div>
		        
        <figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>Panel heading without title<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
    Panel content
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"panel-title"</span><span class="nt">&gt;</span>Panel title<span class="nt">&lt;/h3&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
    Panel content
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
</div>
		        <h2 id="panels-footer"><a class="anchorjs-link " href="#panels-footer" aria-label="Anchor link for: panels footer" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Panel with footer</h2>
		        <p>Wrap buttons or secondary text in <code>.panel-footer</code>. Note that panel footers <strong>do not</strong> inherit colors and borders when using contextual variations as they are not meant to be in the foreground.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <div class="panel panel-default">
		                <div class="panel-body"> Panel content </div>
		                <div class="panel-footer">Panel footer</div>
		            </div>
		        </div>
		        
        <figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
    Panel content
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-footer"</span><span class="nt">&gt;</span>Panel footer<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
</div>
	<?php	
	$this->displaySubHeader(
		"panels-alternatives",
		"Contextual alternatives"
	);
	?>
		        <p>Like other components, easily make a panel more meaningful to a particular context by adding any of the contextual state classes.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <div class="panel panel-primary">
		                <div class="panel-heading">
		                    <h3 class="panel-title">Panel title</h3> </div>
		                <div class="panel-body"> Panel content </div>
		            </div>
		            <div class="panel panel-success">
		                <div class="panel-heading">
		                    <h3 class="panel-title"><i class="fa fa-check"></i> Panel title</h3> </div>
		                <div class="panel-body"> Panel content </div>
		            </div>
		            <div class="panel panel-info">
		                <div class="panel-heading">
		                    <h3 class="panel-title"><i class="fa fa-info-circle"></i> Panel title</h3> </div>
		                <div class="panel-body"> Panel content </div>
		            </div>
		            <div class="panel panel-warning">
		                <div class="panel-heading">
		                    <h3 class="panel-title"><i class="fa fa-exclamation-triangle"></i> Panel title</h3> </div>
		                <div class="panel-body"> Panel content </div>
		            </div>
		            <div class="panel panel-danger">
		                <div class="panel-heading">
		                    <h3 class="panel-title"><i class="fa fa-exclamation"></i> Panel title</h3> </div>
		                <div class="panel-body"> Panel content </div>
		            </div>
		            <div class="panel panel-default">
		                <div class="panel-heading">
		                    <h3 class="panel-title">Panel title</h3> </div>
		                <div class="panel-body"> Panel content </div>
		            </div>
		        </div>
		        
        <figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>

</div>
		       
	<?php	
	// $this->displaySubHeader(
	// 	"panels-tables",
	// 	"With tables"
	// );
	?>
	<!-- 	        <p>Add any non-bordered <code>.table</code> within a panel for a seamless design. If there is a <code>.panel-body</code>, we add an extra border to the top of the table for separation.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <div class="panel panel-default">
		                <div class="panel-heading">Panel heading</div>
		                <div class="panel-body">
		                    <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		                </div>
		                <table class="table">
		                    <thead>
		                        <tr>
		                            <th>#</th>
		                            <th>First Name</th>
		                            <th>Last Name</th>
		                            <th>Username</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                        <tr>
		                            <th scope="row">1</th>
		                            <td>Mark</td>
		                            <td>Otto</td>
		                            <td>@mdo</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">2</th>
		                            <td>Jacob</td>
		                            <td>Thornton</td>
		                            <td>@fat</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">3</th>
		                            <td>Larry</td>
		                            <td>the Bird</td>
		                            <td>@twitter</td>
		                        </tr>
		                    </tbody>
		                </table>
		            </div>
		        </div>
		        
        <figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Default panel contents --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>Panel heading<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="c">&lt;!-- Table --&gt;</span>
  <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/table&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
</div>
		        <p>If there is no panel body, the component moves from panel header to table without interruption.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <div class="panel panel-default">
		                <div class="panel-heading">Panel heading</div>
		                <table class="table">
		                    <thead>
		                        <tr>
		                            <th>#</th>
		                            <th>First Name</th>
		                            <th>Last Name</th>
		                            <th>Username</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                        <tr>
		                            <th scope="row">1</th>
		                            <td>Mark</td>
		                            <td>Otto</td>
		                            <td>@mdo</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">2</th>
		                            <td>Jacob</td>
		                            <td>Thornton</td>
		                            <td>@fat</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">3</th>
		                            <td>Larry</td>
		                            <td>the Bird</td>
		                            <td>@twitter</td>
		                        </tr>
		                    </tbody>
		                </table>
		            </div>
		        </div>
		        
        <figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Default panel contents --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>Panel heading<span class="nt">&lt;/div&gt;</span>

  <span class="c">&lt;!-- Table --&gt;</span>
  <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/table&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
</div> -->
		  	<?php	
	// $this->displaySubHeader(
	// 	"panels-list-group",
	// 	"With list groups"
	// );
	?>
<!-- 		        <p>Easily include full-width <a href="#list-group">list groups</a> within any panel.</p>
   				<div class="example">
					<div class="top">
						<label>Example</label>		            <div class="panel panel-default">
		                <div class="panel-heading">Panel heading</div>
		                <div class="panel-body">
		                    <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		                </div>
		                <ul class="list-group">
		                    <li class="list-group-item">Cras justo odio</li>
		                    <li class="list-group-item">Dapibus ac facilisis in</li>
		                    <li class="list-group-item">Morbi leo risus</li>
		                    <li class="list-group-item">Porta ac consectetur ac</li>
		                    <li class="list-group-item">Vestibulum at eros</li>
		                </ul>
		            </div>
		        </div>
		        
        <figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Default panel contents --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>Panel heading<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="c">&lt;!-- List group --&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
</div> -->
		    </div>

<?php
}


function displayTabs(){

	$this->displayHeader(
		'tabs',
		'Tabs'
	);

	?>
<div class="section-body">

   				<div class="example">
					<div class="top">
						<label>Example</label>		<ul class="nav nav-tabs">
		    <li class="active"><a data-toggle="tab" href="#tab1">Tab 1</a></li>
		    <li class=""><a data-toggle="tab" href="#tab2">Tab 2</a></li>
		    <li class=""><a data-toggle="tab" href="#tab3">Tab 3</a></li>
	 	</ul>
		<div class="tab-content">
		    <div id="tab1" class="tab-pane active">
		      <h3>Tab 1</h3>
		      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		    </div>
		    <div id="tab2" class="tab-pane">
		      <h3>Tab 2</h3>
		      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		    </div>
		    <div id="tab3" class="tab-pane">
		      <h3>Tab 3</h3>
		      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
		    </div>
		</div>

	</div>
	<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#tab1"</span><span class="nt">&gt;</span>Tab 1<span class="nt">&lt;/a&gt;</span><span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#tab2"</span><span class="nt">&gt;</span>Tab 2<span class="nt">&lt;/a&gt;</span><span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#tab3"</span><span class="nt">&gt;</span>Tab 3<span class="nt">&lt;/a&gt;</span><span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-content"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"tab1"</span> <span class="na">class=</span><span class="s">"tab-pane active"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h3&gt;</span> ... <span class="nt">&lt;/h3&gt;</span>
    <span class="nt">&lt;p&gt;</span> ... <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"tab2"</span> <span class="na">class=</span><span class="s">"tab-pane"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h3&gt;</span> ... <span class="nt">&lt;/h3&gt;</span>
    <span class="nt">&lt;p&gt;</span> ... <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"tab3"</span> <span class="na">class=</span><span class="s">"tab-pane"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h3&gt;</span> ... <span class="nt">&lt;/h3&gt;</span>
    <span class="nt">&lt;p&gt;</span> ... <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
</div>
</div>

	<?php
}

function displayColors(){

	$this->displayHeader(
		'colors',
		'Colors'
	);

	?>
<div class="section-body" id="dr-docs-colors">
	<?php
				$this->displaySubHeader(
					'colors-brand',
					'Brand Colors'
					);
	        ?>
    <p>Below are brand colors, as well as some lighter and darker variations. Though there are no specific limitations on where these fills may be used, it's important to take into account the context and previous usages when using these fills as part of your design.</p>

    <h3>Primary Colors</h3>
    <div class="color-options">
		<div class="row">	
	    	<div class="col-xs-6 col-md-4">
	    		<span>Light Blue</span>
	    		<code>$lightBlue</code>
	    		<div class="bg-lightBlue"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>Blue</span>
	    		<code>$blue</code>
	    		<div class="bg-blue"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>Dark Blue</span>
	    		<code>$darkBlue</code>
	    		<div class="bg-darkBlue"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>Light Green</span>
	    		<code>$lightGreen</code>
	    		<div class="bg-lightGreen"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>Green</span>
	    		<code>$green</code>
	    		<div class="bg-green"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>Dark Green</span>
	    		<code>$darkGreen</code>
	    		<div class="bg-darkGreen"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>Light Gray</span>
	    		<code>$lightGray</code>
	    		<div class="bg-lightGray"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>Gray</span>
	    		<code>$gray</code>
	    		<div class="bg-gray"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>Dark Gray</span>
	    		<code>$darkGray</code>
	    		<div class="bg-darkGray"><span class="color"></span></div>
	    	</div>
	    </div>
	    <h3>Secondary Colors</h3>
		<div class="row">	
	    	<div class="col-xs-6 col-md-4">
	    		<span>Light Orange</span>
	    		<code>$lightOrange</code>
	    		<div class="bg-lightOrange"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>Orange</span>
	    		<code>$orange</code>
	    		<div class="bg-orange"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>Dark Orange</span>
	    		<code>$darkOrange</code>
	    		<div class="bg-darkOrange"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>Light Red</span>
	    		<code>$lightRed</code>
	    		<div class="bg-lightRed"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>Red</span>
	    		<code>$red</code>
	    		<div class="bg-red"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>Dark Red</span>
	    		<code>$darkRed</code>
	    		<div class="bg-darkRed"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>Light Purple</span>
	    		<code>$lightPurple</code>
	    		<div class="bg-lightPurple"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>Purple</span>
	    		<code>$purple</code>
	    		<div class="bg-purple"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>Dark Purple</span>
	    		<code>$darkPurple</code>
	    		<div class="bg-darkPurple"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>Light Yellow</span>
	    		<code>$lightYellow</code>
	    		<div class="bg-lightYellow"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>Yellow</span>
	    		<code>$Yellow</code>
	    		<div class="bg-yellow"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>Dark Yellow</span>
	    		<code>$darkYellow</code>
	    		<div class="bg-darkYellow"><span class="color"></span></div>
	    	</div>
	    </div>
	    <?php
				$this->displaySubHeader(
					'colors-helper',
					'Helper Colors'
					);
	        ?>
		<p>Below are helper colors that are not specific to the brand, but are commonly used in custom applications. Though there are no specific limitations on where these fills may be used, it's important to take into account the context and previous usages when using these fills as part of your design.</p>
	    <div class="row">
	    	<div class="col-xs-6 col-md-4">
	    		<span>Black</span>
	    		<code>$black</code>
	    		<div class="bg-black"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>White</span>
	    		<code>$white</code>
	    		<div class="bg-white"><span class="color" style="color:#808080;"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>Off White</span>
	    		<code>$whiteOff</code>
	    		<div class="bg-offWhite"><span class="color" style="color:#808080;"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>10% Gray</span>
	    		<code>$gray10</code>
	    		<div class="bg-gray10"><span class="color" style="color:#808080;"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>20% Gray</span>
	    		<code>$gray20</code>
	    		<div class="bg-gray20"><span class="color" style="color:#808080;"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>30% Gray</span>
	    		<code>$gray30</code>
	    		<div class="bg-gray30"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>40% Gray</span>
	    		<code>$gray40</code>
	    		<div class="bg-gray40"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>50% Gray</span>
	    		<code>$gray50</code>
	    		<div class="bg-gray50"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>60% Gray</span>
	    		<code>$gray60</code>
	    		<div class="bg-gray60"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>70% Gray</span>
	    		<code>$gray70</code>
	    		<div class="bg-gray70"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>80% Gray</span>
	    		<code>$gray80</code>
	    		<div class="bg-gray80"><span class="color"></span></div>
	    	</div>
	    	<div class="col-xs-6 col-md-4">
	    		<span>90% Gray</span>
	    		<code>$gray90</code>
	    		<div class="bg-gray90"><span class="color"></span></div>
	    	</div>
	    </div>
	</div>

	<?php
				$this->displaySubHeader(
					'colors-classes',
					'Contextual classes'
					);
	        ?>
	        	<h3>Text Colors</h3>
				<p>Color text in components with branded and common text colors. Text color classes are prefixed with <code>.txt-</code> followed by the color of your choice. Use color text on white, gray, or black backgrounds.</p>

	   				<div class="example">
						<div class="top">
							<label>Example</label>
							<h1 class="txt-blue">Blue text.</h1>
			            	<p class="txt-darkGreen">Dark Green text.</p>
			            	<p class="txt-purple">Purple text.</p>
			        </div>
			        
	<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"txt-blue"</span><span class="nt">&gt;</span>Blue text.<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"txt-darkGreen"</span><span class="nt">&gt;</span>Dark green text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"txt-purple"</span><span class="nt">&gt;</span>Purple text.<span class="nt">&lt;/p&gt;</span></code></pre></figure>
	</div>

	<div class="background-colors">

		<h3>Background Colors</h3>
		<p>Color background in components with branded and common background colors. Background color classes are prefixed with <code>.bg-</code> followed by the color of your choice. When possible, use the default text color that the background class provides.</p>

			<div class="example">
				<div class="top">
					<label>Example</label>
					<div class="bg-blue">
						<h1>Blue background.</h1>
						<p>Example paragraph text</p>
					</div>
					<div class="bg-darkGreen">
						<h1>Dark green background.</h1>
						<p>Example paragraph text</p>
					</div>
					<div class="bg-purple">
						<h1>Purple background.</h1>
						<p>Example paragraph text</p>
					</div>
		   		</div>
		        
		<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"bg-blue"</span><span class="nt">&gt;</span>
   <span class="nt">&lt;h1&gt;</span>Blue background.<span class="nt">&lt;/h1&gt;</span>
   <span class="nt">&lt;p&gt;</span>Example paragraph text<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"bg-darkGreen"</span><span class="nt">&gt;</span>
   <span class="nt">&lt;h1&gt;</span>Dark green background.<span class="nt">&lt;/h1&gt;</span>
   <span class="nt">&lt;p&gt;</span>Example paragraph text<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"bg-purple"</span><span class="nt">&gt;</span>
   <span class="nt">&lt;h1&gt;</span>Purple background.<span class="nt">&lt;/h1&gt;</span>
   <span class="nt">&lt;p&gt;</span>Example paragraph text<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
		</div>
	</div>

	<div class="dr-callout dr-callout-warning" id="callout-type-dl-truncate">
        <h4>No Funny Business</h4>
        <p>When possible, do not use color backgrounds with color text. For instance, stay away from these examples:</p>
		<div class="background-colors">
	        <div class="bg-blue">
	        	<h1 class="txt-orange">Don't do this.</h1>
	        </div>
	        <div class="bg-red">
	        	<h1 class="txt-green">Don't do this.</h1>
	        </div>
	        <div class="bg-darkGreen">
	        	<h1 class="txt-blue">Don't do this.</h1>
	        </div>
        </div>
    </div>
</div>



<?php
}


function displayExample()
{
	$this->displayHeader(
		'code-examples',
		'Code Examples',
		'For showing examples in code documentation.'
	);
	?>
   <div class="section-body">
	<?php	
	$this->displaySubHeader(
		"code-examples-basic",
		"Basic"
	);
	?>

		<div class="example">
			<div class="top">
				<label>Example</label>

		<div class="example">
			<div class="top">
				<label>Result</label>
				<p> ... </p>
			</div>
			<figure class="highlight"><label>Code</label><pre><code class="language-json" data-lang="json"> ... </code></pre></figure>
		</div>
		</div>
		<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"example"</span><span class="nt">&gt;</span>
   <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"top"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label&gt;</span>Result<span class="nt">&lt;/label&gt;</span>
      ...
   <span class="nt">&lt;/div&gt;</span>
   <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"highlight"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label&gt;</span>Code<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;pre&gt;</span>
         <span class="nt">&lt;code&gt;</span> ... <span class="nt">&lt;/code&gt;</span>
      <span class="nt">&lt;/pre&gt;</span>
   <span class="nt">&lt;/figure&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
		</div>

	<?php	
	$this->displaySubHeader(
		"code-examples-tabbed",
		"Tabbed Example",
		array('Use tabs to show an example in different code languages')
	);
	?>

		<div class="example">
			<div class="top">
				<label>Example</label>

		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#json">JSON</a></li>
			<li><a data-toggle="tab" href="#xml">XML</a></li>
		</ul>
		<div class="tab-content">
			<div id="json" class="tab-pane active">
				<div class="example">
					<div class="top">
						<label>Request</label>
						<p> Json Request Here </p>
					</div>
					<figure class="highlight"><label>Response</label><pre><code class="language-json" data-lang="json"> {} </code></pre></figure>
				</div>
			</div>
			<div id="xml" class="tab-pane">
				<div class="example">
					<div class="top">
						<label>Request</label>
						<p> XML Request Here </p>
					</div>
				<figure class="highlight"><label>Response</label><pre><code class="language-xml" data-lang="xml"><span class="nt">&lt;?xml</span> <span class="na">version=</span><span class="s">"1.0"</span> <span class="nt">?&gt;</span>
<span class="nt">&lt;metadata&gt;</span>
<span class="nt">&lt;/metadata&gt;</span></code></pre></figure>
		</div>
</div>
</div>
</div>
		<figure class="highlight"><label>HTML</label><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs"</span><span class="nt">&gt;</span>
   <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#json"</span><span class="nt">&gt;</span>JSON<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
   <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#xml"</span><span class="nt">&gt;</span>XML<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"json"</span> <span class="na">class=</span><span class="s">"tab-pane"</span><span class="nt">&gt;</span>
   <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"example"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"top"</span><span class="nt">&gt;</span>
         <span class="nt">&lt;label&gt;</span>Request<span class="nt">&lt;/label&gt;</span>
         ...
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"highlight"</span><span class="nt">&gt;</span>
         <span class="nt">&lt;label&gt;</span>Response<span class="nt">&lt;/label&gt;</span>
         <span class="nt">&lt;pre&gt;</span>
            <span class="nt">&lt;code&gt;</span> ... <span class="nt">&lt;/code&gt;</span>
         <span class="nt">&lt;/pre&gt;</span>
      <span class="nt">&lt;/figure&gt;</span>
   <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"xml"</span> <span class="na">class=</span><span class="s">"tab-pane"</span><span class="nt">&gt;</span>
   <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"example"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"top"</span><span class="nt">&gt;</span>
         <span class="nt">&lt;label&gt;</span>Request<span class="nt">&lt;/label&gt;</span>
         ...
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"highlight"</span><span class="nt">&gt;</span>
         <span class="nt">&lt;label&gt;</span>Response<span class="nt">&lt;/label&gt;</span>
         <span class="nt">&lt;pre&gt;</span>
            <span class="nt">&lt;code&gt;</span> ... <span class="nt">&lt;/code&gt;</span>
         <span class="nt">&lt;/pre&gt;</span>
      <span class="nt">&lt;/figure&gt;</span>
   <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
</div>
		



		<!-- <figure class="highlight"><pre><code class="language-html" data-lang="html">

		</figure></pre></code>
 -->

   </div>
	<?php
}

}


?>