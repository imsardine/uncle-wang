<?
	if($_POST["mail"]=="yes"){
		require("class.phpmailer.php");
		
		$mail = new PHPMailer();
		$mail->Host			= "uncle-wang.com.tw";				//MAIL SERVER
		$mail->From     = $_POST["from_mail"];
		$mail->FromName = $_POST["from_name"];
		$mail->Sender   = $_POST["from_mail"];
		$mail->Subject  = "�[���N�@�լd��";
		
		//�լd���e
		$body="���[���N�@�լd��<br>";
		$body=$body."1.�w�p�b���@�����}���G".$_POST["D1"]."(����) ".$_POST["D2"]."(�m��) ".$_POST["D3"]."(��)<br>";
		$body=$body."2.�O�_�w�Ʀ������Φa�I�G".$_POST["D4"]."<br>";
		$body=$body."3.�������o�覡�G".$_POST["D5"]."<br>";
		$body=$body."4.����Φ�ؤ覡�g��G".$_POST["D6"]."<br>";
		$body=$body."5.�O�_�������\���g��G".$_POST["D7"]."<br>";
		$body=$body."6.�w���J�h�ָ���з~�G".$_POST["D8"]."<br>";
		$body=$body."7.�g�竬�A�G".$_POST["D9"]."<br>";
		$body=$body."8.�O�_�ݭn�з~�U�ڡG".$_POST["D10"]."�A�� ".$_POST["D11"]."<br>";
		$body=$body."9.�O�_���Y�L�����q�Ψ�L�[���~�̤����~�G".$_POST["D12"]."�A".$_POST["D13"]."<br>";
		$body=$body."10.��ɶ}���G".$_POST["D14"]."<br>";
		$body=$body."11.�̷P���쪺�g��覡�G".$_POST["D15"]."<br>";
		$body=$body."12.��ƨӷ��G".$_POST["D16"]."<br>";
		$body=$body."<br>���ӤH��ơ�<br>";
		$body=$body."�m�W�G".$_POST["from_name"]."<br>";
		$body=$body."�ʧO�G".$_POST["sex"]."<br>";
		$body=$body."�X�ͦ~���G".$_POST["birthday"]."<br>";
		$body=$body."�ثe¾�~�G".$_POST["job"]."<br>";
		$body=$body."�p���q�ܡG".$_POST["tel1"]."(��) ".$_POST["tel2"]."(�]) ".$_POST["cellphone"]."(���)<br>";
		$body=$body."e-mail�G".$_POST["from_mail"]."<br>";
		$mail->Body = $body;

		$mail->AddAddress("service@uncle-wang.com.tw");		//���լd��MAIL
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
	alert("�ڭ̤w�����ơA�P�±z����g!!");
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
		alert("�п�J�z���m�W�I");
		return
	}
	if(tf.tel1.value=="" && tf.tel2.value=="" && tf.cellphone.value==""){
		alert("�Цܤֿ�J�@���p���q�ܡI");
		return
	}
	if(tf.from_mail.value==""){
		alert("�п�J�z��e-mail�I");
		return
	}
	
	if(confirm("�T�w��ƵL�~�ðe�X�H")){tf.submit();}
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
            <td height="30" colspan="2"><font size="2"> ���[���N�@�լd��</font></td>
          </tr>
          <tr>
            <td height="30" colspan="2"><font size="2">1.�z�w�p�b���@�����}���H
                  <input name="D1" type="text" id="D1" size="10" maxlength="5">
        ����
        <input name="D2" type="text" id="D2" size="10" maxlength="5">
        �m��
        <input name="D3" type="text" id="D3" size="10" maxlength="5">
        �� </font></td>
          </tr>
          <tr>
            <td width="292" height="30"><font size="2">2. �O�_�w�Ʀ������Φa�I�H
                  <input name="D4" type="radio" value="��" checked>
        ��
        <input type="radio" name="D4" value="�L">
        �L </font></td>
            <td width="318" height="30"><font size="2">3.�������o�覡�H
                  <input name="D5" type="radio" value="�ۦ�����" checked>
        �ۦ�����
        <input type="radio" name="D5" value="�ӯ�">
        �ӯ�</font></td>
          </tr>
          <tr>
            <td width="292" height="30"><font size="2">4.�z����Φ�ؤ覡�g��H
                  <input name="D6" type="radio" value="�ۦ�����" checked>
        �ۦ�����
        <input type="radio" name="D6" value="�ӯ�">
        �ӯ�</font></td>
            <td width="318" height="30"><font size="2">5.�O�_�������\���g��H</font> <font size="2">
              <input name="D7" type="radio" value="�L" checked>
        �L
        <input type="radio" name="D7" value="��">
        ��</font></td>
          </tr>
          <tr>
            <td width="292" height="30"><font size="2">6.�z�w���J�h�ָ���з~�H</font> <font size="2">
              <select name="D8" id="D8">
                <option selected>20�U�H�U</option>
                <option>20�U�H�W</option>
                <option>50�U�H�W</option>
                <option>100�U�H�W</option>
              </select>
            </font></td>
            <td width="318" height="30"><font size="2">7. �z���g�竬�A�H</font> <font size="2">
            <input name="D9" type="radio" value="�W��" checked>
�W��</font> <font size="2">
<input type="radio" name="D9" value="�X��">
�X��</font></td>
          </tr>
          <tr>
            <td height="30" colspan="2"><font size="2">8.�O�_�ݭn�з~�U�ڡH
                <input name="D10" type="radio" value="�ݭn" checked>
�ݭn�A��
<input name="D11" type="text" id="D11" size="10" maxlength="10">
<input name="D10" type="radio" value="���ݭn">
���ݭn</font></td>
          </tr>
          <tr>
            <td height="30" colspan="2"><font size="2">9.�z�O�_���Y�L�����q�Ψ�L�[���~�̤����~�H
                  <input name="D12" type="radio" value="��" checked>
        �� �Pı
        <input name="D13" type="text" id="D13" maxlength="50">
        <input type="radio" name="D12" value="�L">
        �L </font></td>
          </tr>
          <tr>
            <td height="30"><font size="2">10.�z��ɶ}���H</font> <font size="2">
              <select name="D14" id="D14">
                <option selected>�ߧY</option>
                <option>�T�Ӥ뤺</option>
                <option>�b�~��</option>
                <option>�@�~��</option>
                <option>�u�����Ȥ��Ҽ{</option>
              </select>
            </font></td>
            <td height="30"><p>&nbsp;</p>            </td>
          </tr>
          <tr>
            <td height="30" colspan="2"><font size="2">11.�A�̷P���쪺�g��覡�H
                <input name="D15" type="radio" value="�\����" checked>
�\����            </font><font size="2">
            <input type="radio" name="D15" value="��o����">
������
<input type="radio" name="D15" value="��o����">
�Xĥ��</font></td>
          </tr>
          <tr>
            <td height="30" colspan="2"><font size="2">12.�z����ƨӷ��H
                <input name="D16" type="text" id="D16" size="60" maxlength="200">
            </font></td>
          </tr>
          <tr>
            <td height="30" colspan="2" bgcolor="#FFB300"><font size="2">���z���ӤH��ơ�</font></td>
          </tr>
          <tr>
            <td height="30"><font size="2">�m�W :
                  <input name="from_name" type="text" id="from_name" size="15" maxlength="20">
            </font></td>
            <td height="30"><font size="2">�ʧO :
                  <input name="sex" type="radio" value="�k" checked>
        �k
        <input type="radio" name="sex" value="�k">
        �k </font></td>
          </tr>
          <tr>
            <td height="30"><font size="2">�X�ͦ~���
                  <input name="birthday" type="text" id="birthday" size="10" maxlength="10">
(2005/01/01)            </font></td>
            <td height="30"><font size="2">�ثe¾�~ :
                  <input name="job" type="text" id="job" size="15" maxlength="20">
            </font></td>
          </tr>
          <tr>
            <td height="30" colspan="2"><font size="2">�p���q��:�]��^
                  <input name="tel1" type="text" id="tel1" size="15" maxlength="15">
        �]�]�^
        <input name="tel2" type="text" id="tel2" size="15" maxlength="15">
        ��ʹq��
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
							<a href="#" onmousedown="if(confirm('�T�w���s��J�ܡH')){document.all.tform.reset();}"><img src="02.gif" width="72" height="25" border="0"></a> 
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
