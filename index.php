<?php session_start(); ?>
<html>
<head>
        <title>
            Predictor
        </title>

        <link rel="icon" href="images/favicon.gif" type="image/gif" sizes="32x32">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- For FIsheye Distortion-->
        <script type='text/javascript' src='https://d3js.org/d3.v3.min.js'></script>
		<script src="https://npmcdn.com/babel-core@5.8.34/browser.min.js"></script>
        <script type='text/javascript' src='fisheye.js'></script>
        <!-- END -->
        <script>
            function CheckPassword(inputtxt) 
            { 
                var pwd=inputtxt.value;
                
            }

        </script>
        <style>
        #header 
        {
            position: fixed;
            width: 80%;
            top: 3%;
            right:10%;
            left:10%;
            align:center;
        }

        /*fisheye*/
        .background {
				fill: none;
				pointer-events: all;
			}

			/*
			#chart1 {
				width: 960px;
				height: 600px;
				border: solid 1px #ccc;
			}
			*/

			#chart1 .circle {
				stroke: #fff;
				stroke-width: 1.5px;
			}

			#chart1 .link {
				stroke: #999;
				stroke-opacity: .6;
				stroke-width: 1.5px;
			}

			text {
				font: 12px sans-serif;
				pointer-events: none;
				text-anchor: start;
			}

			/* magnifier glass as circle */
			.lens {
				stroke: gray;
				stroke-width: 2.0px;
				stroke-opacity: 0;
				fill: none;
			}

			/* magnifier glass as path */
			.mag {
				stroke: gray;
				stroke-width: 2.0px;
				stroke-opacity: 0;
				fill: none;
			}

			/* magnifier handle as path */
			.mag2 {
				stroke: black;
				stroke-width: 12.0px;
				stroke-opacity: 0;
				fill: none;
			}
            /*END*/
        #content
        {
            top: 50%;
        }
	line
	{
		color:white;
	}
        </style>
        </head>
    <body>
            <header role="banner" id="header">
        <nav class="navbar navbar-static-top navbar-inverse" style="background:#000000;">
        <div class="container-fluid">
            <div class="navbar-header">
             <ul class="nav navbar-nav navbar-left ">
                 <li><image src="images/logo.png"></image></li> 
                <li><h3 style="font-family: 'Pacifico', cursive; color:white" align="justify">&nbspPredictor</h3></li>
             </ul> 
            </div>
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <div class="collapse navbar-collapse navHeaderCollapse">
            <?php
                if(!isset($_SESSION['id']))
                echo '
                <ul class="nav navbar-nav navbar-right ">
                    <li><a data-target="#loginModal" data-toggle="modal"><span class="glyphicon glyphicon-user"></span> Login</a></li>
                    <li><a data-target="#signupModal" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> SignUp</a></li>
                </ul>
                ';
                else
                {
                    echo '<ul class="nav navbar-nav navbar-right ">
                    <li><a ><span class="glyphicon glyphicon-user"></span>'.$_SESSION['id'].'</a></li>
                    <li><a ><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
                    </ul>';
                }
                echo '</div>
                </div>
                </nav>
               </header>';
               if(isset($_SESSION['id']))
               {
                echo '<a href="predict.php"><h2>Predict Health</h2></a><br>
                <a href="predict_personality.php"><h2>Predict Personality</h2></a>';
               }
            ?>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <form name="form1" action="login.php" method="POST">
        <input type="text" name="id"placeholder="Email Id">
        <input type="password" name="password"placeholder="Password">
        <div class="modal-footer">
          <button class="submit" onClick="CheckPassword(document.form1.password)">Submit</button>
        </div>
        </form>
  </div>
</div> 
</div>
</div>
 <!-- END OF LOGIN Modal -->

<!-- signupModal -->
        <div class="modal fade" id="signupModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">SignUp</h4>
                    </div>
                    <div class="modal-body">
                        <form action="signup.php" name="form1" method="POST">
                            <input type="text" name="name" placeholder="Enter Name"><br><br>
                            <input type="text" name="emailid" placeholder="Enter email"><br><br>
                            <input type="phone" name="phone" placeholder="Enter Phone"><br><br>
                            DOB:<input type="date" name="dob" placeholder="Enter Date Of Birth"><br><br>
                            <input type="password" name="password" placeholder="Enter password" onkeydown="CheckPassword(document.form1.password)"><p id="ppwd"></p><br>
                            <input type="password" name="cpassword" placeholder="Confirm Password"><p id="pcpwd"></p><br><br>
                            <div class="modal-footer">
                                <button class="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<!-- End of SignUp Modal -->
         <br><br><br>
                 
         <!--FishEye-->
         <!--
         <form style='margin-left: 20px'>
            <input type='radio' name='wot' id='circle' value='one' checked/>&nbsp;as circle<br/>
            <input type='radio' name='wot' id='path' value='two' />&nbsp;as path
        </form>
    -->
    <div id='chart1'></div>
    <!--
    <script lang='babel' type='text/babel'>
const width = 960;
const height = 600;

const color = d3.scale.category20();

const fisheye = d3.fisheye.circular()
.radius(100)
.distortion(5);

const force = d3.layout.force()
.charge(-440)
.linkDistance(60)
.size([width, height]);

const svg = d3.select('#chart1').append('svg')
.attr({
  width,
  height
});


// magnifier as circle
const lens = svg.append('circle')
.attr('class', 'lens')
.attr('r', fisheye.radius());

// magnifier as path
const mag = svg.append('path')
.attr('class', 'mag');

// specify angle where magnifier handle should 'attach' to body
const omega = 0.78;

// magnifier handle as path
const mag2 = svg.append('path')
.attr('class', 'mag2');

/*
svg.append('rect')
.attr('class', 'background')
.attr('width', width)
.attr('height', height);
*/

d3.json('miserables.json', (data) => {
const n = data.nodes.length;

force.nodes(data.nodes).links(data.links);

// Initialize the positions deterministically, for better results.
data.nodes.forEach((d, i) => {
  d.x = d.y = width / n * i;
});

// Run the layout a fixed number of times.
// The ideal number of times scales with graph complexity.
// Of course, don't run too long—you'll hang the page!
force.start();
for (let i = n; i > 0; --i) force.tick();
force.stop();

// Center the nodes in the middle.
let ox = 0;
let oy = 0;
data.nodes.forEach(d => {
  ox += d.x;
  oy += d.y;
});
ox = ox / n - width / 2;
oy = oy / n - height / 2;
data.nodes.forEach(d => {
  d.x -= ox;
  d.y -= oy;
});

const link = svg.selectAll('.link')
  .data(data.links)
  .enter().append('line')
  .attr('class', 'link')
  .attr('x1', d => d.source.x)
  .attr('y1', d => d.source.y)
  .attr('x2', d => d.target.x)
  .attr('y2', d => d.target.y)
  .style('stroke-width', d => Math.sqrt(d.value));

const node = svg.selectAll('.node')
  .data(data.nodes)
  .enter().append('g')
  .attr('class', 'node');

render('path');

function render(shape) {
  node.selectAll('.link').remove();
  node.selectAll('.circle').remove();
  node.selectAll('.text').remove();

  lens.style('stroke-opacity', shape === 'circle' ? 1 : 0);
  mag.style('stroke-opacity', shape === 'path' ? 1 : 0);
  mag2.style('stroke-opacity', shape === 'path' ? 1 : 0);

  const nodeEnter = node
    .append('circle')
    .attr('class', 'circle')
    .attr('cx', d => d.x)
    .attr('cy', d => d.y)
    .attr('r', 6)
    .style('fill', d => color(d.group))
    .call(force.drag);

  const text = node.append('text')
    .attr('class', 'text')
    .attr('dy', d => d.y)
    .attr('dx', d => d.x)
    .text(d => d.name);

  node.append('title')
    .text(d => d.name);

  svg.on('mousemove', function () {
    fisheye.focus(d3.mouse(this));

    const mouseX = d3.mouse(this)[0];
    const mouseY = d3.mouse(this)[1];
    const r = fisheye.radius();

    if (shape === 'circle') {
      // display magnifier as circle
      lens
        .attr('cx', mouseX)
        .attr('cy', mouseY);
    } else {
      // path for magnifier
      const magPath = `M ${mouseX},${mouseY} m -${r}, 0 a ${r},${r} 0 1,0 ${(r * 2)},0 a ${r},${r} 0 1,0 -${(r * 2)},0`;

      // point in circumference to attach magnifier handle
      const x1 = mouseX + r * Math.sin(omega);
      const y1 = mouseY + r * Math.cos(omega);

      // path for magnifier's handle
      const mag2Path = `M ${(x1 + 2)},${(y1 + 2)} L${(mouseX + r * 1.7)},${(mouseY + r * 1.7)}`;

      // display magnifier as path
      mag.attr('d', magPath);

      // display magnifier handle as path
      mag2.attr('d', mag2Path);
    }

    nodeEnter
      .each(d => {
        d.fisheye = fisheye(d);
      })
      .attr('cx', d => d.fisheye.x)
      .attr('cy', d => d.fisheye.y)
      .attr('r', d => d.fisheye.z * 4.5);

    text
      .attr('dx', d => d.fisheye.x)
      .attr('dy', d => d.fisheye.y);

    link.attr('x1', d => d.source.fisheye.x)
      .attr('y1', d => d.source.fisheye.y)
      .attr('x2', d => d.target.fisheye.x)
      .attr('y2', d => d.target.fisheye.y);
  });
}
d3.select('#circle').on('click', () => {
  render('circle');
});

d3.select('#path').on('click', () => {
  render('path');
});
});
    </script>  -->
         <!--FIshEye End-->


<script src="https://d3js.org/d3.v2.min.js" charset="utf-8"></script>
<script src="https://bost.ocks.org/mike/fisheye/fisheye.js"></script>
<script>


  var width = 960,
      height = 500;

  var color = d3.scale.category20();

  var fisheye = d3.fisheye.circular()
      .radius(120);

  var force = d3.layout.force()
      .charge(-240)
      .linkDistance(40)
      .size([width, height]);

  var svg = d3.select("#chart1").append("svg")
      .attr("width", width)
      .attr("height", height);

  svg.append("rect")
      .attr("class", "background")
      .attr("width", width)
      .attr("height", height);

  d3.json("miserables.json", function(data) {
    var n = data.nodes.length;

    force.nodes(data.nodes).links(data.links);

    // Initialize the positions deterministically, for better results.
    data.nodes.forEach(function(d, i) { d.x = d.y = width / n * i; });

    // Run the layout a fixed number of times.
    // The ideal number of times scales with graph complexity.
    // Of course, don't run too long—you'll hang the page!
    force.start();
    for (var i = n; i > 0; --i) force.tick();
    force.stop();

    // Center the nodes in the middle.
    var ox = 0, oy = 0;
    data.nodes.forEach(function(d) { ox += d.x, oy += d.y; });
    ox = ox / n - width / 2, oy = oy / n - height / 2;
    data.nodes.forEach(function(d) { d.x -= ox, d.y -= oy; });

    var link = svg.selectAll(".link")
        .data(data.links)
      .enter().append("line")
        .attr("class", "link")
        .attr("x1", function(d) { return d.source.x; })
        .attr("y1", function(d) { return d.source.y; })
        .attr("x2", function(d) { return d.target.x; })
        .attr("y2", function(d) { return d.target.y; })
        .style("stroke-width", function(d) { return Math.sqrt(d.value); });

    var node = svg.selectAll(".node")
        .data(data.nodes)
      .enter().append("circle")
        .attr("class", "node")
        .attr("cx", function(d) { return d.x; })
        .attr("cy", function(d) { return d.y; })
        .attr("r", 4.5)
        .style("fill", function(d) { return color(d.group); })
        .call(force.drag);

    svg.on("mousemove", function() {
      fisheye.focus(d3.mouse(this));

      node.each(function(d) { d.fisheye = fisheye(d); })
          .attr("cx", function(d) { return d.fisheye.x; })
          .attr("cy", function(d) { return d.fisheye.y; })
          .attr("r", function(d) { return d.fisheye.z * 4.5; });

      link.attr("x1", function(d) { return d.source.fisheye.x; })
          .attr("y1", function(d) { return d.source.fisheye.y; })
          .attr("x2", function(d) { return d.target.fisheye.x; })
          .attr("y2", function(d) { return d.target.fisheye.y; });
    });
  });
</script>

</body>
</html>


