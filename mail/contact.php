<?
	if($_POST["mail"]=="yes"){
		require("class.phpmailer.php");
		
		$mail = new PHPMailer();
		$mail->Host			= "uncle-wang.com.tw";				//MAIL SERVER
		$mail->From     = $_POST["from_mail"];
		$mail->FromName = $_POST["from_name"];
		$mail->Sender   = $_POST["from_mail"];
		$mail->Subject  = "加盟意願調查表";
		
		//調查表內容
		$body="◎加盟意願調查表◎<br>";
		$body=$body."1.預計在哪一縣市開店：".$_POST["D1"]."(縣市) ".$_POST["D2"]."(鄉鎮) ".$_POST["D3"]."(區)<br>";
		$body=$body."2.是否已備有店面或地點：".$_POST["D4"]."<br>";
		$body=$body."3.店面取得方式：".$_POST["D5"]."<br>";
		$body=$body."4.打算用何種方式經營：".$_POST["D6"]."<br>";
		$body=$body."5.是否有相關餐飲經驗：".$_POST["D7"]."<br>";
		$body=$body."6.預算投入多少資金創業：".$_POST["D8"]."<br>";
		$body=$body."7.經營型態：".$_POST["D9"]."<br>";
		$body=$body."8.是否需要創業貸款：".$_POST["D10"]."，約 ".$_POST["D11"]."<br>";
		$body=$body."9.是否有吃過本公司或其他加盟業者之產品：".$_POST["D12"]."，".$_POST["D13"]."<br>";
		$body=$body."10.何時開店：".$_POST["D14"]."<br>";
		$body=$body."11.最感興趣的經營方式：".$_POST["D15"]."<br>";
		$body=$body."12.資料來源：".$_POST["D16"]."<br>";
		$body=$body."<br>◎個人資料◎<br>";
		$body=$body."姓名：".$_POST["from_name"]."<br>";
		$body=$body."性別：".$_POST["sex"]."<br>";
		$body=$body."出生年月日：".$_POST["birthday"]."<br>";
		$body=$body."目前職業：".$_POST["job"]."<br>";
		$body=$body."聯絡電話：".$_POST["tel1"]."(日) ".$_POST["tel2"]."(夜) ".$_POST["cellphone"]."(行動)<br>";
		$body=$body."e-mail：".$_POST["from_mail"]."<br>";
		$mail->Body = $body;

		$mail->AddAddress("service@uncle-wang.com.tw");		//收調查表的MAIL
		$mail->$SMTPAuth=true;
		$mail->$Username="service-uncle-wang.com.tw";
		$mail->$Password="bdp3v8r8";
		if(!$mail->Send()){
		  echo $mail->ErrorInfo."<br>";
			exit();
		}
		$mail->ClearAddresses();
		
?>
<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
<!--
	alert("我們已收到資料，感謝您的填寫!!");
	location.replace("contact.php");
//-->
</SCRIPT>
<?
		//header("Location: contact.php");
		exit();
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>contact</title>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

function tformsubmit()
{
	tf=document.all.tform;
	
	if(tf.from_name.value==""){
		alert("請輸入您的姓名！");
		return
	}
	if(tf.tel1.value=="" && tf.tel2.value=="" && tf.cellphone.value==""){
		alert("請至少輸入一個聯絡電話！");
		return
	}
	if(tf.from_mail.value==""){
		alert("請輸入您的e-mail！");
		return
	}
	
	if(confirm("確定資料無誤並送出？")){tf.submit();}
}
//-->
</script>
</head>

<body bgcolor="#FFB300">
<table width="700" border="0" align="center" cellpadding="10" cellspacing="0" background="d.gif">
  <tr>
    <td><table width="620" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center"><font size="2"><img src="logo.gif" width="145" height="134"></font></div></td>
      </tr>
    </table>
      <form name="tform" method="post" action="contact.php">
				<input type="hidden" name="mail" value="yes">
        <table width="610" border="0" cellspacing="0" cellpadding="0">
          <tr bgcolor="#FFB300">
            <td height="30" colspan="2"><font size="2"> ◎加盟意願調查表◎</font></td>
          </tr>
          <tr>
            <td height="30" colspan="2"><font size="2">1.您預計在哪一縣市開店？
                  <input name="D1" type="text" id="D1" size="10" maxlength="5">
        縣市
        <input name="D2" type="text" id="D2" size="10" maxlength="5">
        鄉鎮
        <input name="D3" type="text" id="D3" size="10" maxlength="5">
        區 </font></td>
          </tr>
          <tr>
            <td width="292" height="30"><font size="2">2. 是否已備有店面或地點？
                  <input name="D4" type="radio" value="有" checked>
        有
        <input type="radio" name="D4" value="無">
        無 </font></td>
            <td width="318" height="30"><font size="2">3.店面取得方式？
                  <input name="D5" type="radio" value="自有店面" checked>
        自有店面
        <input type="radio" name="D5" value="承租">
        承租</font></td>
          </tr>
          <tr>
            <td width="292" height="30"><font size="2">4.您打算用何種方式經營？
                  <input name="D6" type="radio" value="自有店面" checked>
        自有店面
        <input type="radio" name="D6" value="承租">
        承租</font></td>
            <td width="318" height="30"><font size="2">5.是否有相關餐飲經驗？</font> <font size="2">
              <input name="D7" type="radio" value="無" checked>
        無
        <input type="radio" name="D7" value="有">
        有</font></td>
          </tr>
          <tr>
            <td width="292" height="30"><font size="2">6.您預算投入多少資金創業？</font> <font size="2">
              <select name="D8" id="D8">
                <option selected>20萬以下</option>
                <option>20萬以上</option>
                <option>50萬以上</option>
                <option>100萬以上</option>
              </select>
            </font></td>
            <td width="318" height="30"><font size="2">7. 您的經營型態？</font> <font size="2">
            <input name="D9" type="radio" value="獨資" checked>
獨資</font> <font size="2">
<input type="radio" name="D9" value="合夥">
合夥</font></td>
          </tr>
          <tr>
            <td height="30" colspan="2"><font size="2">8.是否需要創業貸款？
                <input name="D10" type="radio" value="需要" checked>
需要，約
<input name="D11" type="text" id="D11" size="10" maxlength="10">
<input name="D10" type="radio" value="不需要">
不需要</font></td>
          </tr>
          <tr>
            <td height="30" colspan="2"><font size="2">9.您是否有吃過本公司或其他加盟業者之產品？
                  <input name="D12" type="radio" value="有" checked>
        有 感覺
        <input name="D13" type="text" id="D13" maxlength="50">
        <input type="radio" name="D12" value="無">
        無 </font></td>
          </tr>
          <tr>
            <td height="30"><font size="2">10.您何時開店？</font> <font size="2">
              <select name="D14" id="D14">
                <option selected>立即</option>
                <option>三個月內</option>
                <option>半年內</option>
                <option>一年內</option>
                <option>短期間暫不考慮</option>
              </select>
            </font></td>
            <td height="30"><p>&nbsp;</p>            </td>
          </tr>
          <tr>
            <td height="30" colspan="2"><font size="2">11.你最感興趣的經營方式？
                <input name="D15" type="radio" value="餐車型" checked>
餐車型            </font><font size="2">
            <input type="radio" name="D15" value="精緻店面">
店面型
<input type="radio" name="D15" value="精緻店面">
旗艦型</font></td>
          </tr>
          <tr>
            <td height="30" colspan="2"><font size="2">12.您的資料來源？
                <input name="D16" type="text" id="D16" size="60" maxlength="200">
            </font></td>
          </tr>
          <tr>
            <td height="30" colspan="2" bgcolor="#FFB300"><font size="2">◎您的個人資料◎</font></td>
          </tr>
          <tr>
            <td height="30"><font size="2">姓名 :
                  <input name="from_name" type="text" id="from_name" size="15" maxlength="20">
            </font></td>
            <td height="30"><font size="2">性別 :
                  <input name="sex" type="radio" value="男" checked>
        男
        <input type="radio" name="sex" value="女">
        女 </font></td>
          </tr>
          <tr>
            <td height="30"><font size="2">出生年月日
                  <input name="birthday" type="text" id="birthday" size="10" maxlength="10">
(2005/01/01)            </font></td>
            <td height="30"><font size="2">目前職業 :
                  <input name="job" type="text" id="job" size="15" maxlength="20">
            </font></td>
          </tr>
          <tr>
            <td height="30" colspan="2"><font size="2">聯絡電話:（日）
                  <input name="tel1" type="text" id="tel1" size="15" maxlength="15">
        （夜）
        <input name="tel2" type="text" id="tel2" size="15" maxlength="15">
        行動電話
        <input name="cellphone" type="text" id="cellphone" size="15" maxlength="15">
            </font></td>
          </tr>
          <tr>
            <td height="30"><font size="2">e-mail :
                  <input name="from_mail" type="text" id="from_mail" size="30" maxlength="50">
            </font></td>
            <td height="30">&nbsp;</td>
          </tr>
          <tr>
            <td height="25" colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td height="25" colspan="2"><div align="center"></div>
              <div align="center"><font size="2">
							<a href="#" onmousedown="if(confirm('確定重新輸入嗎？')){document.all.tform.reset();}"><img src="02.gif" width="72" height="25" border="0"></a> 
							<a href="#" onmousedown="tformsubmit();"><img src="01.gif" width="72" height="25" border="0"></a></font>
							</div>
						</td>
          </tr>
        </table>
    </form></td>
  </tr>
</table>
</body>
</html>
