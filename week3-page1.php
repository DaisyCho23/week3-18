<DOCTYPE html>   
<html>

<head>
<meta charset="UTF-8"></meta>
<title>系烤報名表單網頁</title>
</head>

<body text="black" bgcolor="LightGray">
<h1>高雄大學 第二學期 新生系烤 報名表單</h1>
<font size="6">請盡量填寫完整</font>

<UL>
<form method="post" action="result.php">
<LI>第一點<br/>
請輸入您的姓名:<input type="text" name="id" placeholder="只能輸入英文"><br/>
請輸入您的學號:<input type="password" name="pwd" value="123"><br/>

請輸入您是否住學校宿舍:
是<input type="checkbox" name="dorm" value="yes" checked>
否<input type="checkbox" name="dorm" value="no"><br/>

請問您是否要報名參加本學期系烤:
是<input type="checkbox" name="barbecue" value="yes">
否<input type="checkbox" name="barbecue" value="no"><br/>

性別:<br/>
<input type="radio" name="gender" value="male">男<br/>
<input type="radio" name="gender" value="female">女<br/>
<input type="radio" name="gender" value="others">其他<br/>
<br>
<!--radio是圓形欄位，checkbox是方形欄位-->

年級:
<select name="grade[]" multiple>
<option value="freshman">一年級
<option value="sophomore">二年級
<option value="junior">三年級
<option value="senior">四年級
</select>
<br/>
<img src="/img/spy.jpg" width="100" height="100" border="1"> 

<LI>第二點

      <table border="5" color="black">                          <!--表格-->
         <tr><th>食材</th><th>名稱</th><th>單人份價格</th></tr>
         <tr><th>1</th><th>火腿</th><th>20</th></tr>
         <tr><th>2</th><th>黑輪</th><th>10</th></tr>
         <tr><th>3</th><th>吐司</th><th>10</th></tr>
         <tr><th>4</th><th>米血</th><th>20</th></tr>
         <tr><th>5</th><th>棉花糖</th><th>10</th></tr>
         <tr><th>6</th><th>四季豆</th><th>20</th></tr>
      </table>

<form action="1.php" method="post">
請選擇您想吃的食材(複選):
火腿<input type="checkbox" name="ham">
黑輪<input type="checkbox" name="oden">
吐司<input type="checkbox" name="toast">
米血<input type="checkbox" name="StickyRiceSausage">
棉花糖<input type="checkbox" name="marshmallow">
四季豆<input type="checkbox" name="greenBeans"><br/>

<br>
<LI>第三點
有什麼建議想對我們說:
<textarea name="comment" cols="50" row="50">
</textarea>
<br/>

<input type="submit"><input type="reset">

</UL>
</form>
</body>
</html>
