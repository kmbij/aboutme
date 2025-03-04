<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>林宜潔簡介</title>

	<style type="text/css">
		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
		h1 {color:#484891; font-size:60px;}
		h2 {color:#C4E1E1; font-size:40px;}
	</style>
	<script>
		function change1() {
  			document.getElementById("pic").src = "mountain.jpg";
  			document.getElementById("h2text").innerText = "靜宜資管";
		}

		function change2() {
  			document.getElementById("pic").src = "cliff.jpg";
  			document.getElementById("h2text").innerText = "Tzyy-Ching Yang";
		}
	</script>

</head>

<body>
<table width="70%">
	<tr>
		<td>
			<img src="cliff.jpg"width="110%"
			id="pic" onmouseover="change1()" onmouseout="change2()">
				
			</img>
		</td>

		<td>
			<h1>林宜潔</h1>
			<h2 id="h2text">Yi-Jie Lin</h2>
		</td>
	</tr>
</table>

<table width="70%" border="1">
	<tr>
		<td>
			個人網頁：<a href ="https://www.pu.edu.tw/">https://www.pu.edu.tw/</a><br>
	FB：<a href ="https://www.facebook.com/profile.php?id=100009641599571&locale=zh_TW">https://www.facebook.com/profile.php?id=100009641599571&locale=zh_TW</a><br>
	Tel:<a href="tel:095254933">0952354933</a><br>
	E-Mail:<a href="mailto:hhh0952354933@gmail.com">hhh0952354933@gmail.com</a><br>
		</td>

		<td>
			大象席地而坐電影配樂<br>
				<audio controls>
					<source src="elephant.mp3" type="audio/mP3">
				</audio><br>
		</td>

		<td>
			【那些突如其來的迷因梗】零幀起手怎麼防<br>
		<iframe src="https://www.youtube.com/embed/rh2Bd9sTm0U" allowfullscreen></iframe>

		</td>


	</tr>
</table>

<table>
	<tr>
		<td>
			
<iframe
    allow="microphone;"
    width="350"
    height="430"
    src="https://console.dialogflow.com/api-client/demo/embedded/011b76a8-b4ff-487e-a5db-734c0c488636">
</iframe>
		</td>
	</tr>
</table>

 <?php echo date("Y-m-d") ?>

</body>
</html>