<div class="content">
	<div class="row mt40">
		<div class="col-xs-12">
			<div class="back">
				<?php if ($result_id !=0): ?>
				<a href="<?php echo site_url('test/result/' . $result_id);?>"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> <?php echo $_SESSION['LINK_BACKTEST'] ?></a>
				<?php endif; ?>
			</div>
			<div class="box">
				<div class="box_top">
					
					<div class="hud row">
						<div class="col-xs-12 col-sm-10">
							<h2 class="study_title"><?php echo $study_unit->No; ?> <?php echo $study_unit->Name; 
							?></h1>
						</div>

						<div class="col-xs-12 col-sm-2">
							<div class="page_numer"><?php echo $current_page; ?>/<?php echo $total_pages; ?></div>
						</div>

						<div class="col-xs-12"><div class="line"></div></div>
					</div>
					
					<div class="study_example">
					<p>

						<?php
						        $cards = [
						          $study_unit->Description,
					              $study_unit->Example,
					              $study_unit->Explanation,
					              $study_unit->Others,
					        ];

					        $mobileIconCSS = 'class= "grammar_icon_mobile"';
					        $computerIconCSS = 'class= "grammar_icon_computer"';

					        $iconCSS = "";

					        $this -> load -> library('Mobile-Detect/Mobile_Detect');
					        $detect = new Mobile_Detect();
					        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
					        	$iconCSS = $mobileIconCSS;
							} else {
								$iconCSS = $computerIconCSS;
							}

					        $asset_url = asset_url();

							for ($i = 1; $i <=4; $i++) {
								if ($cards[$i-1] != null) {
									$imageID = $i + 37;
									$icon = "<br/><br/><img $iconCSS src=$asset_url/img/grammarPoints/$imageID.pic.jpg><br/>";
									echo $icon;
									echo nl2br($cards[$i-1]);
								}
							}
						?>

					</p>

					</div>
					<div class="col-xs-12"><div class="line"></div></div>

					
<!-- 					<div class="study_example">
						<?php
							$grammarContent = trim($study_unit->Example);
							$stringOut = "<h3>B. 实例</h3><p>$grammarContent</p>";
							if (strlen($grammarContent) > 0) {
								echo nl2br($stringOut);
							}
						?>
					</div>
					
					<div class="study_example">
						<?php
							$grammarContent = trim($study_unit->Explanation);
							$stringOut = "<h3>C. 解析</h3><p>$grammarContent</p>";
							if (strlen($grammarContent) > 0) {
								echo nl2br($stringOut);
							}
						?>

					</div>

					<div class="study_example">

						<?php
							$grammarContent = trim($study_unit->Others);
							$stringOut = "<h3>D. 补充说明</h3><p>$grammarContent</p>";
							if (strlen($grammarContent) > 0) {
								echo nl2br($stringOut);
							}
						?>

					</div> -->

					<div class="row">
						
						
					</div>

				</div>

					<a class="basic_icon_computer" href="<?php 
						$bugUrl = base_url(uri_string());
						echo site_url('api/newBug/'.$bugUrl); ?>">
						<?php 
						$iconCSS = 'class= "basic_icon_computer"';
						$icon = "<img $iconCSS src=$asset_url/img/bug.jpg>";
						echo $icon;
						echo '发现错误'; 
						?>
					</a>
					<br/><br/>
				<div class="box_bottom">
					
					<?php if ($current_page > 1):?>
						<a href="<?php echo site_url('study/' . $result_id . '/' . $study_nums . '/' . ($current_page-1) );?>" class="btn back_button f_l transition"><?php echo $_SESSION['BTN_BACK']; ?></a>
					<?php endif;?>
					



					<?php if ($current_page < $total_pages):?>
						<a href="<?php echo site_url('study/' . $result_id . '/' . $study_nums . '/' . ($current_page+1)   );?>" class="btn btn-default next_button f_r transition" ><?php echo $_SESSION['BTN_NEXT']; ?></a>
					<?php endif; ?>
				</div>

				</form>


			</div>
		</div>
		
	</div>
</div>