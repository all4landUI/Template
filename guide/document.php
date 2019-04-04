<?php
	include_once('./guide.head.php');
?>

<!-- #guidePage //-->
<div id="guidePage">
	<?php
		include_once('./guide-menu.php');
	?>

	<div id="guideContent">
		<!-- guide-title //-->
		<h2 class="g-title">문서</h2>
		<!--// guide-title -->

		<!-- g-content //-->
		<div class="g-content">
			<h3>실행</h3>
			<p>기본실행파일 - 엘리먼트 단위에도 공통 적용</p>
			<div class="demo-block">
				<div class="source">
<pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang="ko"&gt;
&lt;head&gt;
	&lt;meta charset="UTF-8"&gt;
	&lt;title&gt;UI Template&lt;/title&gt;
	&lt;link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css"&gt;
	&lt;link rel="stylesheet" type="text/css" href="/css/fonts/NotoSansKR.css"&gt; (폰트 종류에 따라 변경)
	&lt;link rel="stylesheet" type="text/css" href="/js/libs/jQuery-ui/jquery-ui.css"&gt;
	&lt;link rel="stylesheet" type="text/css" href="/css/ngii-mng.css"&gt;
	&lt;script type="text/javascript" src="/js/libs/jQuery/1.12.3/jquery.min.js"&gt;&lt;/script&gt;
	&lt;script type="text/javascript" src="/js/libs/jQuery-ui/jquery-ui.min.js"&gt;&lt;/script&gt;
	&lt;script type="text/javascript" src="/js/ngii-mng.js"&gt;&lt;/script&gt;
	&lt;script type="text/javascript" src="/js/pub.js"&gt;&lt;/script&gt;
	&lt;script type="text/javascript" src="/js/pub.lib.js"&gt;&lt;/script&gt;	
&lt;/head&gt;
&lt;body&gt;
 contents
&lt;/body&gt;
&lt;/html&gt;</code></pre>
				</div>
			</div>

			<h3>네비게이션 세팅</h3>
			<p>body 태그에 <code>class="layout-type-1" , layout-type-2 , layout-type-3</code> 적용</p>	
			<div class="demo-block">
				<div class="source">
<pre><code class="language-html">&lt;!DOCTYPE HTML&gt;
&lt;html lang="ko"&gt;
&lt;meta charset="UTF-8"&gt;
&lt;meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"&gt;
&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
&lt;link rel="icon" type="image/x-icon" href="images/ico/favicon.ico"&gt;
&lt;link rel="apple-touch-icon-precomposed" type="image/x-icon" href="images/ico/favicon.ico"&gt;
&lt;link rel="shortcut icon" type="image/x-icon" href="images/ico/favicon.ico"&gt;
&lt;link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css"&gt;
&lt;link rel="stylesheet" type="text/css" href="/css/fonts/NotoSansKR.css"&gt;
&lt;link rel="stylesheet" type="text/css" href="/js/libs/jQuery-ui/jquery-ui.css"&gt;
&lt;link rel="stylesheet" type="text/css" href="/css/ngii-mng.css"&gt;
&lt;title&gt;UI ELEMENT - 가이드&lt;/title&gt;
&lt;script type="text/javascript" src="/js/libs/jQuery/1.12.3/jquery.min.js"&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="/js/libs/jQuery-ui/jquery-ui.min.js"&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="/js/ngii-mng.js"&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="/js/pub.js"&gt;&lt;/script&gt;
&lt;!--[if lt IE 9]&gt;
	&lt;script type="text/javascript" src="/js/libs/html5shiv.min.js"&gt;&lt;/script&gt;
	&lt;script type="text/javascript" src="/js/libs/respond.min.js"&gt;&lt;/script&gt;
&lt;![endif]--&gt;
&lt;body class="layout-type-2"&gt;
  contents
&lt;/body&gt;
&lt;/html&gt;</code></pre>
				</div>
			</div>

			<h3>공통 크기조절</h3>
			<p>적용 될 태크에 <code>class"width-number" , class="height-numer"</code> 각 최대 500</p>	
			<div class="demo-block demo-layer-show">
				<div class="source">
					<div class="width-150 height-150">
						width-150 height-150px
					</div>
					<div class="width-200 height-200">
						width-200 height-200px
					</div>
					<div class="width-230 height-230">
						width-230 height-230px
					</div>
					<div class="width-250 height-250">
						width-250 height-250px
					</div>
					<div class="width-350 height-350">
						width-250 height-250px
					</div>
				</div>
			</div>

			<h3>공통 간격조절</h3>
			<p>적용 될 태그에 <code>class"margin-position-value(number)" , class="padding-position-value(value)"</code> 0부터 5단위로 500까지 지원</p>	
			<div class="demo-block demo-space-show">
				<div class="source">
					<div class="margin-right-10">margin-right-10</div>
					<div class="margin-top-20">margin-top-20</div>
					<div class="margin-left-20">margin-left-20</div>
					<div class="margin-bottom-20">margin-bottom-20</div><br>

					<div class="padding-right-10">padding-right-10</div>
					<div class="padding-top-20">padding-top-20</div>
					<div class="padding-left-20">padding-left-20"</div>
					<div class="padding-bottom-20">padding-bottom-20</div><br>
				</div>
			</div>
		</div>
		<!--// g-content  -->
		

	</div>

</div>
<!--// #guidePage -->
<?php
	include_once('./guide.foot.php');
?>