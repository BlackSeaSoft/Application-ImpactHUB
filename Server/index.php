<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="style.css" rel="stylesheet">
</head>

<body>
<?include('db_function.php');?>

<div class="wrapper">
	<main class="content BoxShadow">
		<div class="AdminPanel arrow_box BoxShadow"><span class="TextShadow">Admin Panel</span></div>
		<div class="Interface_BD BoxShadowForInterface BoxBorderRadius">
				<table class="tg" style="undefined; table-layout: fixed; width: 216px">
					<colgroup>
						<col style="width: 23px">
						<col style="width: 85px">
						<col style="width: 80px">
						<col style="width: 30px">
						<col style="width: 40px">
						<col style="width: 150px">
						<col style="width: 450px">
						<col style="width: 450px">
					</colgroup>
					  <tr>
						<th class="tg-s6z2">id</th>
						<th class="tg-431l">date</th>
						<th class="tg-s6z2">time</th>
						<th class="tg-s6z2">hall</th>
						<th class="tg-s6z2">price</th>
						<th class="tg-s6z2">title</th>
						<th class="tg-s6z2">description</th>
						<th class="tg-s6z2">photo</th>
					  </tr>
				<? $table = get_table();	
				foreach($table as $value) : ?>
					  <tr>
						<td class="tg-031e"><? echo $value['id']; ?></td>
						<td class="tg-031e"><? echo $value['date']; ?></td>
						<td class="tg-031e"><? echo $value['time']; ?></td>
						<td class="tg-031e"><? echo $value['hall']; ?></td>
						<td class="tg-031e"><? echo $value['price']; ?></td>
						<td class="tg-031e"><? echo $value['title']; ?></td>
						<td class="tg-031e"><? echo $value['description']; ?></td>
						<td class="tg-031e"><? echo $value['photo']; ?></td>
					  </tr>
				<? endforeach; ?>
				</table>
		</div>
	</main><!-- .content -->
</div><!-- .wrapper -->

<!-- 
<footer class="footer">
	<strong>Footer:</strong> Mus elit Morbi mus enim lacus at quis Nam eget morbi. Et semper urna urna non at cursus dolor vestibulum neque enim. Tellus interdum at laoreet laoreet lacinia lacinia sed Quisque justo quis. Hendrerit scelerisque lorem elit orci tempor tincidunt enim Phasellus dignissim tincidunt. Nunc vel et Sed nisl Vestibulum odio montes Aliquam volutpat pellentesque. Ut pede sagittis et quis nunc gravida porttitor ligula.
</footer><!-- .footer -->

</body>
</html>
