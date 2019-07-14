																																																																																				
<table class="voucher" style=" width: 220px;">
  <tbody>
<!-- Logo Hotspotname -->
    <tr>
      <?php
      $kk = '';
	  $color = '';	
      if($validity=='1d')
      {
        $kk= '1 Hari';
		$color = '#006600';  
      }
      else if($validity=='7d')
      {
        $kk='7 Hari';
		$color='#FF1493';  
      }
      else if($validity=='30d')
      {
        $kk = '30 Hari';
		$color = '#800000';
      }
      ?>
      <td style="text-align: left; font-size: 14px; font-weight:bold; border-bottom: 1px black solid;"><img src="<?php echo $logo;?>" alt="logo" style="height:30px;border:0;">  <span id="num" style="text-align: right;"><?php echo $price;?><br><span style="font-size: 11px;font-weight:normal; "><i>Masa Aktif <?php echo $kk;?></i></span></span></td>
    </tr>
<!-- /  -->
    <tr>
      <td>
    <table style=" text-align: center; width: 210px; font-size: 12px;">
  <tbody>
<!-- Username Password QR    -->
    <tr>
      <td>
        <table style="width:100%;">
<!-- Username = Password    -->
<?php if($usermode == "vc"){?>
        <tr>
          <td font-size: 12px;>Kode Voucher</td>
        </tr>
        <tr>
          <td style="width:100%; border: 1px solid black; font-weight:bold; font-size:16px;"><?php echo $username;?></td>
        </tr>
<!-- /  -->
<!-- Username & Password  -->
<?php }elseif($usermode == "up"){?>
<!-- Check QR  -->
<?php if($qr == "yes"){?>
        <tr>
          <td>Username</td>
        </tr>
        <tr>
          <td style="border: 1px solid black; font-weight:bold;font-size: 17px;"><?php echo $username;?></td>
        </tr>
        <tr>
          <td>Password</td>
        </tr>
        <tr>
          <td style="border: 1px solid black; font-weight:bold;font-size: 17px;"><?php echo $password;?></td>
        </tr>
<?php }else{?>
        <tr>
          <td style="width: 50%">Username</td>
          <td >Password</td>
        </tr>
        <tr style="font-size: 18px;">
          <td style="border: 1px solid black; font-weight:bold;"><?php echo $username;?></td>
          <td style="border: 1px solid black; font-weight:bold;"><?php echo $password;?></td>
        </tr>
<?php }}?>
<!-- /  -->
        </table>
      </td>
<!-- QR Code    -->
<?php if($qr == "yes"){?>
      <td>
	<img src="<?php echo $qrcode ?>" alt="qrcode" style="width: 100px;height: 100px;">
      </td>
<?php }?>
<!-- /  -->
    <tr>
      <!-- Price  -->
      <td colspan="2" style="background:<?php echo $color ?>;color:#FFFFFF;border-top: 1px solid black;font-weight:bold; font-size:12px">Login: http://<?php echo $dnsname;?></td>
<!-- /  -->
    </tr>
    <tr>
      <!-- Note  -->
    <td style="padding:0px;text-align: left; font-size:10px"><i>WA : 08976497111</i> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 
      <?php
      //echo $comment;
      $bln = substr($comment,7,2);
      $tgl = substr($comment,10,2);
      $thn = substr($comment,13,2);
      echo $tgl."-".$bln."-".$thn;
      ?>
    </td>
      
<!-- /  -->
    </tr>
<!-- /  -->
  </tbody>
    </table>
      </td>
    </tr>
  </tbody>
</table>	        	        	        	        	        	        	        	        	        	        	        	        	        	        