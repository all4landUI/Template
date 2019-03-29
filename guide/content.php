<?php
	$guide = true;
	include_once('../head.php');
?>
<link rel="stylesheet" href="/plugin/prism/prism.css">
<link rel="stylesheet" type="text/css" href="/css/guide.css">
<script src="/plugin/prism/prism.js"></script>
<!-- #guidePage //-->
<div id="guidePage">

	<nav class="g-navi">

		<ul>
			<li class="g-depth1"><a href="#">Layout</a></li>
			<li class="g-depth1"><a href="#">Theme</a></li>
			<li class="g-depth1 g-depth-view"><a href="#">Element</a>
				<ul class="g-depth2">
					<li><a href="./board.php">List</a></li>
					<li><a href="./gallery_board.php">Gallery</a></li>
					<li><a href="./gallery_board.php">Thumbnail</a></li>
					<li><a href="./search.php">Search Box</a></li>
					<li><a href="./tab.php">Tab</a></li>
					<li><a href="./button.php">Button</a></li>
					<li><a href="./form.php">Form</a></li>
					<li><a href="./table.php">Table</a></li>
					<li><a href="./content.php">Contents</a></li>
					<li><a href="./content.php">Popup</a></li>
				</ul>
			</li>
		</ul>

	</nav>

	<div id="guideContent">
		<!-- guide-title //-->
		<h2 class="g-title">컨텐츠</h2>
		<!--// guide-title -->
		
		<!-- g-content //-->
		<div class="g-content">
			<h3>기본 설명 컨텐츠</h3>

			<canvas id="c" style="width:100%"></canvas>


			<script>
				var c = document.getElementById('c'),
				    ctx = c.getContext('2d'),
				    cw = c.width = window.innerWidth,
				    ch = c.height = window.innerHeight,
				    points = [],
				    tick = 0,
				    opt = {
				      count: 5,
				      range: {
				        x: 20,
				        y: 80
				      },
				      duration: {
				        min: 20,
				        max: 40
				      },
				      thickness: 10,
				      strokeColor: '#444',
				      level: .35,
				      curved: true
				    },
				    rand = function(min, max){
				        return Math.floor( (Math.random() * (max - min + 1) ) + min);
				    },
				    ease = function (t, b, c, d) {
					    if ((t/=d/2) < 1) return c/2*t*t + b;
					    return -c/2 * ((--t)*(t-2) - 1) + b;
				    };

				ctx.lineJoin = 'round';
				ctx.lineWidth = opt.thickness;
				ctx.strokeStyle = opt.strokeColor;

				var Point = function(config){
				  this.anchorX = config.x;
				  this.anchorY = config.y;
				  this.x = config.x;
				  this.y = config.y;
				  this.setTarget();  
				};

				Point.prototype.setTarget = function(){
				  this.initialX = this.x;
				  this.initialY = this.y;
				  this.targetX = this.anchorX + rand(0, opt.range.x * 2) - opt.range.x;
				  this.targetY = this.anchorY + rand(0, opt.range.y * 2) - opt.range.y;
				  this.tick = 0;
				  this.duration = rand(opt.duration.min, opt.duration.max);
				}
				  
				Point.prototype.update = function(){
				  var dx = this.targetX - this.x;
				  var dy = this.targetY - this.y;
				  var dist = Math.sqrt(dx * dx + dy * dy);
				  
				  if(Math.abs(dist) <= 0){
				    this.setTarget();
				  } else {       
				    var t = this.tick;
				    var b = this.initialY;
				    var c = this.targetY - this.initialY;
				    var d = this.duration;
				    this.y = ease(t, b, c, d);
				    
				    b = this.initialX;
				    c = this.targetX - this.initialX;
				    d = this.duration;
				    this.x = ease(t, b, c, d);
				  
				    this.tick++;
				  }
				};
				    
				Point.prototype.render = function(){
				  ctx.beginPath();
				  ctx.arc(this.x, this.y, 3, 0, Math.PI * 2, false);
				  ctx.fillStyle = '#000';
				  ctx.fill();
				};

				var updatePoints = function(){
				  var i = points.length;
				  while(i--){
				    points[i].update();
				  }
				};

				var renderPoints = function(){
				  var i = points.length;
				  while(i--){
				    points[i].render();
				  }
				};

				var renderShape = function(){
				  ctx.beginPath();
				  var pointCount = points.length;
				  ctx.moveTo(points[0].x, points[0].y);	  
				  var i;
				  for (i = 0; i < pointCount - 1; i++) {
				    var c = (points[i].x + points[i + 1].x) / 2;
				    var d = (points[i].y + points[i + 1].y) / 2;
				    ctx.quadraticCurveTo(points[i].x, points[i].y, c, d);
				  }
				  ctx.lineTo(-opt.range.x - opt.thickness, ch + opt.thickness);
				  ctx.lineTo(cw + opt.range.x + opt.thickness, ch + opt.thickness);
				  ctx.closePath();   
				  ctx.fillStyle = 'hsl('+(tick/2)+', 80%, 60%)';
				  ctx.fill();  
				  ctx.stroke();
				};

				var clear = function(){
				  ctx.clearRect(0, 0, cw, ch);
				};

				var loop = function(){
				  window.requestAnimFrame(loop, c);
				  tick++;
				  clear();
				  updatePoints();
				  renderShape();
				  //renderPoints();
				};

				var i = opt.count + 2;
				var spacing = (cw + (opt.range.x * 2)) / (opt.count-1);
				while(i--){
				  points.push(new Point({
				    x: (spacing * (i - 1)) - opt.range.x,
				    y: ch - (ch * opt.level)
				  }));
				}

				window.requestAnimFrame=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(a){window.setTimeout(a,1E3/60)}}();

				loop();

			</script>
			<p>종속을 이용한 목록</p>
			<div class="demo-block">
				<div class="source">
					
					<div class="content-list">
						<div class="sewolho_con">
							<h4 class="cont_title1">인적손해 구제의 구조</h4>
							
							<ul class="list_comm list_st3 margin-top-5">
								<li>해양수산발전기본법 및 해양수산발전위원회 운영</li>
								<li>국 서무(관리), 조직관리.감사.민원.기록물관리 업무</li>
								<li>2012여수세계박람회 기념특별법 운영 및 개정</li>
								<li>해양문화행사(해양사진전, 해양문학상)</li>
							</ul>

							<p class="margin-top-15 margin-bottom-15"><img alt="인적손해 구제의 구조 이미지입니다. 자세한 설명은 아래를 참고하세요." src="/images/dummy/img_sewolho_structure.gif"></p>

							<h4 class="cont_title1">인적손해 구제의 구조</h4>
							
							<ul class="list_comm list_st2 margin-top-5">
								<li>해양수산발전기본법 및 해양수산발전위원회 운영</li>
								<li>국 서무(관리), 조직관리.감사.민원.기록물관리 업무</li>
								<li>2012여수세계박람회 기념특별법 운영 및 개정</li>
								<li>해양문화행사(해양사진전, 해양문학상)</li>
							</ul>
						</div>
					</div>

				</div>
				<div class="meta">
					<div class="description"></div>
					<div class="highlight">
					
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
	include_once('../foot.php');
?>