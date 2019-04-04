<?php

	include_once('./guide.head.php');
?>

<script src="/plugin/prism/prism.js"></script>
<!-- #guidePage //-->
<div id="guidePage">
	<?php
		include_once('./guide-menu.php');
	?>

	<div id="guideContent">
		<!-- guide-title //-->
		<h2 class="g-title">Form</h2>
		<!--// guide-title -->
		
		<!-- g-content //-->
		<div class="g-content">
			
			<h3>Select</h3>
			<p>기본형</p>
			<div class="demo-block">
				<div class="source">
					<!-- select //-->
					<select name="" id="">
						<option value="">선택해주세요.</option>
						<option value="">옵션1</option>
						<option value="">옵션2</option>
					</select>
					<!--// select -->
					<!-- select //-->
					<select name="" id="" class="width-200">
						<option value="">선택해주세요.</option>
						<option value="">옵션1</option>
						<option value="">옵션2</option>
					</select>
					<!--// select -->
				</div>
				<div class="meta">
					<div class="description">
						<code>class="width-number height-number"</code>로 크기조절 가능
					</div>
					<div class="highlight">
<pre><code class="language-html">&lt;!-- select //--&gt;
&lt;select name="" id=""&gt;
	&lt;option value=""&gt;선택해주세요.&lt;/option&gt;
	&lt;option value=""&gt;옵션1&lt;/option&gt;
	&lt;option value=""&gt;옵션2&lt;/option&gt;
&lt;/select&gt;
&lt;!--// select --&gt;</code></pre>
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>

			<h3>input</h3>
			<p>input type="" 사용 <code>class=""</code>값이 없이 기본 사용</p>
			<div class="demo-block">
				<div class="source">
					<!-- input text //-->
					<input type="text" name="" value="" class="" id="" placeholder="기본 input text">
					<!--// input text -->

					<!-- input password //-->
					<input type="password" name="" value="" class="" id="" placeholder="비활성화 disabled" disabled>
					<!--// input password -->

					<!-- input checkbox //-->
					<label for="commcheckbox"><input type="checkbox" name="" value="" class="" id="commcheckbox"></label>
					<!--// input checkbox -->

					<!-- input radio //-->
					<label for="commradi1"><input type="radio" name="count" value="" class="" id="commradio1"></label>
					<label for="commradi2"><input type="radio" name="count" value="" class="" id="commradio2"></label>
					<!--// input radio -->

					<!-- input file //-->
					<input type="file" name="" value="" class="" id="" placeholder="">
					<!--// input file -->

				</div>
				<div class="meta">
					<div class="description">
						<code>class="width-number height-number"</code>로 크기조절 단 <code>type="text or password"</code>만 가능
					</div>
					<div class="highlight">
<pre><code class="language-html">&lt;!-- input text //--&gt;
&lt;input type="text" name="" value="" class="" id="" placeholder="기본 input text"&gt;
&lt;!--// input text --&gt;

&lt;!-- input password //--&gt;
&lt;input type="password" name="" value="" class="" id="" placeholder="비활성화 disabled" disabled&gt;
&lt;!--// input password --&gt;

&lt;!-- input checkbox //--&gt;
&lt;label for="commcheckbox"&gt;&lt;input type="checkbox" name="" value="" class="" id="commcheckbox"&gt;&lt;/label&gt;
&lt;!--// input checkbox --&gt;

&lt;!-- input radio //--&gt;
&lt;label for="commradi1"&gt;&lt;input type="radio" name="count" value="" class="" id="commradio1"&gt;&lt;/label&gt;
&lt;label for="commradi2"&gt;&lt;input type="radio" name="count" value="" class="" id="commradio2"&gt;&lt;/label&gt;
&lt;!--// input radio --&gt;

&lt;!-- input file //--&gt;
&lt;input type="file" name="" value="" class="" id="" placeholder=""&gt;
&lt;!--// input file --&gt;</code></pre>
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>

			<h3>textarea</h3>
			<p>기본 100%</p>
			<div class="demo-block">
				<div class="source">
					<!-- textarea //-->
					<textarea name="" class="textarea" id="" placeholder="기본사이즈 100%x150 scroll auto"></textarea>
					<!--// textarea -->
				</div>
				<div class="meta">
					<div class="description">
						<code>class="textarea"</code> 기본 100%x150 종축스크롤 자동생성
					</div>
					<div class="highlight">
<pre><code class="language-html">&lt;!-- textarea //--&gt;
&lt;textarea name="" class="textarea" id="" placeholder="기본사이즈 100%x150 scroll auto"&gt;&lt;/textarea&gt;
&lt;!--// textarea --&gt;</code></pre>
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>
		</div>
		<!--// g-content  -->

	</div>

</div>
<!--// #guidePage -->

<?php
	include_once('./guide.foot.php');
?>