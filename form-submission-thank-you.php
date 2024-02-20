<?php if(! strstr(ini_get('disable_functions'), 'ini_set')) {ini_set('default_charset','UTF-8');}header('Content-Type: text/html; charset=UTF-8');header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');header('Cache-Control: post-check=0, pre-check=0', false);header('Pragma: no-cache');if(isset($_POST['xofwdmnwvax'])&&$_POST['xofwdmnwvax']=='yiwxrwsefbqhebqrsqe'&&isset($_POST['bbuaotn'])&&$_POST['bbuaotn']==''&&$_POST['lmjtww']==0){$fl=$_POST;ksort($fl);foreach($fl as $k=>$v){if(!in_array(gettype($v),array('object','array'))){$fl[$k]=$v;}}$sig=sha1(serialize($fl));if(!isset($_COOKIE['last_form'])||$_COOKIE['last_form']!==$sig){setcookie('last_form',$sig,0,'/',$_SERVER['HTTP_HOST'],TRUE,TRUE);$eol="\r\n";$m='Request:';$rt='';foreach($_POST['_First_Name'] as $av){$m.="{$eol}First Name: ".quoted_printable_encode($av);}foreach($_POST['_Last_Name'] as $av){$m.="{$eol}Last Name: ".quoted_printable_encode($av);}$maddr=trim($_POST['_Email-reply-to']);if(preg_match('/^[^@\s]+@[^@\.:\s]+[\.:][^\s]+$/',$maddr)){$rt.="Reply-To: $maddr{$eol}";}$av=quoted_printable_encode($_POST['_Email-reply-to']);$m.="{$eol}Email: ".$av;foreach($_POST['_Phone'] as $av){$m.="{$eol}Phone: ".quoted_printable_encode($av);}foreach($_POST['_Title/Position'] as $av){$m.="{$eol}Title/Position: ".quoted_printable_encode($av);}$a=array("=E2=80=A2 Information Technology","=E2=80=A2 Database Management","=E2=80=A2 Modern Technology Integrations ","=E2=80=A2 New Technology Deployments ","=E2=80=A2 Modern Databases (Airtable)","=E2=80=A2 Form Design & Data Capture","=E2=80=A2 Customer Relationship Management","=E2=80=A2 Search, Social, & Web Data Analysis","=E2=80=A2 Webpage Design & Development ","=E2=80=A2 Application Design & Development","=E2=80=A2 Intranet or Internal Wiki","=E2=80=A2 Strategic & Executive","=E2=80=A2 General Business","=E2=80=A2 Finance & Market","=E2=80=A2 Marketing & Branding","=E2=80=A2 Managerial Accounting","=E2=80=A2 Financial Accounting","=E2=80=A2 Logistics & Production","=E2=80=A2 Operations & Quality","=E2=80=A2 Human Resources","=E2=80=A2 Start-Ups ","=E2=80=A2 Capital Funding ","=E2=80=A2 Feasibility Studies","=E2=80=A2 Business Plans");$m.="{$eol}Service: ".(isset($_POST['_Service'])?$a[intval($_POST['_Service'])-1]:"");foreach($_POST['_Information'] as $av){$m.="{$eol}Information: ".quoted_printable_encode($av);}$a='';$b=md5(time());foreach($_FILES['_file']['error'] as $i=>$error){if($error == UPLOAD_ERR_OK){$tmp_name=$_FILES['_file']['tmp_name'][$i];$fn=basename($_FILES['_file']['name'][$i]);if(is_uploaded_file($tmp_name)){$c=file_get_contents($tmp_name);if($c===false) continue;if(function_exists("mime_content_type")){$type=mime_content_type($tmp_name);} else {$n=strtolower($fn);$type="application/octet-stream";if(substr($n,-4)==".jpg"||substr($n,-5)==".jpeg"){$type="image/jpeg";}if(substr($n,-4)==".png"){$type="image/png";}if(substr($n,-4)==".gif"){$type="image/gif";}if(substr($n,-4)==".svg"){$type="image/svg+xml";}if(substr($n,-5)==".webp"){$type="image/webp";}if(substr($n,-4)==".pdf"){$type="application/pdf";}if(substr($n,-4)==".txt"){$type="text/plain";}if(substr($n,-4)==".zip"){$type="application/zip";}if(substr($n,-4)==".xml"){$type="application/xml";}if(substr($n,-4)==".rtf"){$type="application/rtf";}if(substr($n,-4)==".csv"){$type="text/csv";}if(substr($n,-5)==".epub"){$type="application/epub+zip";}if(substr($n,-4)==".mp3"){$type="audio/mpeg";}if(substr($n,-4)==".wav"){$type="audio/wav";}if(substr($n,-4)==".mp4"||substr($n,-4)==".m4v"){$type="video/mp4";}if(substr($n,-4)==".avi"){$type="audio/avi";}if(substr($n,-4)==".mov"){$type="video/quicktime";}if(substr($n,-4)==".cda"){$type="application/x-cdf";}if(substr($n,-4)==".doc"){$type="application/msword";}if(substr($n,-5)==".docx"){$type="application/vnd.openxmlformats-officedocument.wordprocessingml.document";}}$a.="--{$b}_{$eol}Content-Type: $type;{$eol} name=\"$fn\"{$eol}Content-Disposition: attachment;{$eol} filename=\"$fn\"{$eol}Content-Transfer-Encoding: base64{$eol}{$eol}".chunk_split(base64_encode($c))."{$eol}";}}elseif($error==UPLOAD_ERR_INI_SIZE){$servermax=ini_get('upload_max_filesize');$a.="--{$b}_{$eol}Content-Type: text/plain{$eol}{$eol}{$eol}{$eol}Uploaded file is bigger than server configuration limit (upload_max_filesize=$servermax bytes){$eol}";}}$a.="--{$b}_--{$eol}";$h="From: noreply@srpconsultinggroup.com{$eol}{$rt}";$h.="Date: ".date("D, d M Y H:i:s O").$eol;$h.="MIME-Version: 1.0{$eol}Content-Type: multipart/mixed; boundary=\"{$b}_\"";$m="--{$b}_{$eol}Content-Type: text/plain; charset=UTF-8{$eol}Content-Transfer-Encoding: quoted-printable{$eol}{$eol}".$m.$eol.$eol.$a;mail('shea@srpconsultinggroup.com','Contact Form',stripslashes($m),$h);}} ?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Form Submission Thank You</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="https://srpconsultinggroup.com/form-submission-thank-you.php">
<meta name="robots" content="max-image-preview:large">
<meta name="viewport" content="width=960">
<link rel="preload" href="css/Quicksand-Medium.woff2" as="font" crossorigin>
<link rel="preload" href="css/Quicksand-Regular.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@font-face{font-display:block;font-family:"Quicksand";src:url('css/Quicksand-Medium.woff2') format('woff2'),url('css/Quicksand-Medium.woff') format('woff');font-weight:500}@font-face{font-display:block;font-family:"Quicksand";src:url('css/Quicksand-Regular.woff2') format('woff2'),url('css/Quicksand-Regular.woff') format('woff');font-weight:400}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;line-break:normal;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}[data-marker]::before{content:attr(data-marker) ' ';-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right}.btf{display:none}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0;--z:1;zoom:var(--z)}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=date],input[type=email],input[type=number],input[type=password],input[type=text],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial !important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}.menu-content{cursor:pointer;position:relative}li{-webkit-tap-highlight-color:rgba(0,0,0,0)}
#b{background-color:#fff}.c130{display:block;position:relative;width:max(960px, 100%);overflow:hidden;margin-top:-8px;min-height:460px}.v15{display:block;vertical-align:top}.ps109{position:relative;margin-top:8px}.s204{width:100%;min-width:960px;min-height:182px;height:182px}.c131{z-index:1;pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#fff;box-shadow:0 2px 10px rgba(0,0,0,.5)}.ps110{display:inline-block;width:0;height:0}.ps111{position:relative;margin-top:11px}.s205{min-width:960px;width:960px;margin-left:auto;margin-right:auto;min-height:160px}.v16{display:inline-block;vertical-align:top}.ps112{position:relative;margin-left:20px;margin-top:0}.s206{min-width:918px;width:918px;min-height:160px}.ps113{position:relative;margin-left:0;margin-top:0}.s207{min-width:245px;width:245px;min-height:160px;height:160px}.c133{z-index:6;pointer-events:auto}.a3{display:block}.i15{position:absolute;left:0;width:245px;height:154px;top:3px;border:0}.i16{width:100%;height:100%;display:inline-block;-webkit-transform:translate3d(0,0,0)}.v17{display:inline-block;vertical-align:top;overflow:visible}.ps114{position:relative;margin-left:111px;margin-top:99px}.s208{min-width:562px;width:562px;min-height:53px;height:53px}.c134{z-index:7;pointer-events:auto}.m3{padding:0px 0px 0px 0px}.s209{min-width:112px;width:112px;min-height:53px;height:53px;box-shadow:0 1px 3px rgba(0,0,0,.4);-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px}.mcv3{display:inline-block}.s210{min-width:112px;width:112px;min-height:53px}.c135{pointer-events:none;border:0;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;background-color:#000}.ps115{position:relative;margin-left:0;margin-top:10px}.s211{min-width:112px;width:112px;min-height:32px}.c136{pointer-events:auto;overflow:hidden;height:32px}.p9{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f38{font-family:Quicksand;font-size:20px;font-size:calc(20px * var(--f));line-height:1.401;font-weight:500;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.v18{display:none;vertical-align:top}.ps116{position:relative;margin-left:-136px;margin-top:0}.s212{min-width:248px;width:248px;min-height:74px;height:74px}.ml3{outline:0}.s213{min-width:220px;width:220px;min-height:35px;height:35px;box-shadow:0 1px 2px rgba(0,0,0,.4);-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px}.s214{min-width:220px;width:220px;min-height:35px}.c137{pointer-events:none;border:0;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;background-color:#404040}.ps117{position:relative;margin-left:0;margin-top:2px}.s215{min-width:220px;width:220px;min-height:32px}.ps118{position:relative;margin-left:0;margin-top:4px}.s216{min-width:248px;width:248px;min-height:35px;height:35px;box-shadow:0 1px 2px rgba(0,0,0,.4);-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px}.s217{min-width:248px;width:248px;min-height:35px}.c138{pointer-events:none;border:0;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;background-color:#404040}.s218{min-width:248px;width:248px;min-height:32px}.ps119{position:relative;margin-left:6px;margin-top:0}.s219{min-width:84px;width:84px;min-height:53px;height:53px;box-shadow:0 1px 3px rgba(0,0,0,.4);-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px}.s220{min-width:84px;width:84px;min-height:53px}.c139{pointer-events:none;border:0;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;background-color:#000}.s221{min-width:84px;width:84px;min-height:32px}.ps120{position:relative;margin-left:-93px;margin-top:0}.s222{min-width:177px;width:177px;min-height:81px;height:81px}.s223{min-width:177px;width:177px;min-height:38px;height:38px;box-shadow:0 1px 6px rgba(0,0,0,.4);-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px}.s224{min-width:177px;width:177px;min-height:38px}.c140{pointer-events:none;border:0;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;background-color:#fff}.ps121{position:relative;margin-left:0;margin-top:3px}.s225{min-width:177px;width:177px;min-height:32px}.f39{font-family:Quicksand;font-size:20px;font-size:calc(20px * var(--f));line-height:1.401;font-weight:500;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.ps122{position:relative;margin-left:0;margin-top:5px}.s226{min-width:149px;width:149px;min-height:38px;height:38px;box-shadow:0 1px 6px rgba(0,0,0,.4);-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px}.s227{min-width:149px;width:149px;min-height:38px}.c141{pointer-events:none;border:0;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;background-color:#fff}.s228{min-width:149px;width:149px;min-height:32px}.s229{min-width:121px;width:121px;min-height:53px;height:53px;box-shadow:0 1px 3px rgba(0,0,0,.4);-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px}.s230{min-width:121px;width:121px;min-height:53px}.c142{pointer-events:none;border:0;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;background-color:#000}.s231{min-width:121px;width:121px;min-height:32px}.ps123{position:relative;margin-left:-200px;margin-top:0}.s232{min-width:321px;width:321px;min-height:289px;height:289px}.s233{min-width:216px;width:216px;min-height:44px;height:44px;box-shadow:0 1px 2px rgba(0,0,0,.4);-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px}.s234{min-width:216px;width:216px;min-height:44px}.c143{pointer-events:none;border:0;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;background-color:rgba(0,0,0,.5)}.ps124{position:relative;margin-left:0;margin-top:6px}.s235{min-width:216px;width:216px;min-height:32px}.s236{min-width:287px;width:287px;min-height:44px;height:44px;box-shadow:0 1px 2px rgba(0,0,0,.4);-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px}.s237{min-width:287px;width:287px;min-height:44px}.c144{pointer-events:none;border:0;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;background-color:rgba(0,0,0,.5)}.s238{min-width:287px;width:287px;min-height:41px}.c145{pointer-events:auto;overflow:hidden;height:41px}.f40{font-family:Quicksand;font-size:26px;font-size:calc(26px * var(--f));line-height:1.386;font-weight:500;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.s239{min-width:135px;width:135px;min-height:44px;height:44px;box-shadow:0 1px 2px rgba(0,0,0,.4);-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px}.s240{min-width:135px;width:135px;min-height:44px}.c146{pointer-events:none;border:0;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;background-color:rgba(0,0,0,.5)}.s241{min-width:135px;width:135px;min-height:41px}.s242{min-width:214px;width:214px;min-height:44px;height:44px;box-shadow:0 1px 2px rgba(0,0,0,.4);-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px}.s243{min-width:214px;width:214px;min-height:44px}.c147{pointer-events:none;border:0;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;background-color:rgba(0,0,0,.5)}.s244{min-width:214px;width:214px;min-height:41px}.s245{min-width:321px;width:321px;min-height:44px;height:44px;box-shadow:0 1px 2px rgba(0,0,0,.4);-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px}.s246{min-width:321px;width:321px;min-height:44px}.c148{pointer-events:none;border:0;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;background-color:rgba(0,0,0,.5)}.s247{min-width:321px;width:321px;min-height:41px}.s248{min-width:314px;width:314px;min-height:44px;height:44px;box-shadow:0 1px 2px rgba(0,0,0,.4);-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px}.s249{min-width:314px;width:314px;min-height:44px}.c149{pointer-events:none;border:0;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;background-color:rgba(0,0,0,.5)}.s250{min-width:314px;width:314px;min-height:41px}.s251{min-width:86px;width:86px;min-height:53px;height:53px;box-shadow:0 1px 3px rgba(0,0,0,.4);-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px}.s252{min-width:86px;width:86px;min-height:53px}.c150{pointer-events:none;border:0;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;background-color:#000}.s253{min-width:86px;width:86px;min-height:32px}.s254{min-width:67px;width:67px;min-height:53px;height:53px;box-shadow:0 1px 3px rgba(0,0,0,.4);-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px}.s255{min-width:67px;width:67px;min-height:53px}.c151{pointer-events:none;border:0;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;background-color:#000}.s256{min-width:67px;width:67px;min-height:32px}.ps125{position:relative;margin-left:-83px;margin-top:0}.s257{min-width:150px;width:150px;min-height:98px;height:98px}.s258{min-width:150px;width:150px;min-height:32px;height:32px}.s259{min-width:150px;width:150px;min-height:32px}.c152{pointer-events:none;border:0;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;background-color:#000}.ps126{position:relative;margin-left:0;margin-top:1px}.s260{min-width:80px;width:80px;min-height:32px;height:32px}.s261{min-width:80px;width:80px;min-height:32px}.c153{pointer-events:none;border:0;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;background-color:#000}.s262{min-width:73px;width:73px;min-height:32px;height:32px}.s263{min-width:73px;width:73px;min-height:32px}.c154{pointer-events:none;border:0;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;background-color:#000}.s264{min-width:62px;width:62px;min-height:53px;height:53px;box-shadow:0 1px 3px rgba(0,0,0,.4);-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px}.s265{min-width:62px;width:62px;min-height:53px}.c155{pointer-events:none;border:0;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;background-color:#000}.s266{min-width:62px;width:62px;min-height:32px}.ps127{position:relative;margin-top:-188px}.s267{pointer-events:none;min-width:960px;width:960px;margin-left:auto;margin-right:auto;min-height:898px}.ps128{position:relative;margin-left:35px;margin-top:0}.s268{min-width:887px;width:887px;min-height:405px}.c156{z-index:5;pointer-events:auto;overflow:hidden;height:405px}.p10{text-indent:0;padding-bottom:0;padding-right:0;text-align:left}.f41{font-family:Quicksand;font-size:22px;font-size:calc(22px * var(--f));line-height:1.774;font-weight:500;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.f42{font-family:Quicksand;font-size:22px;font-size:calc(22px * var(--f));line-height:1.774;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.ps129{position:relative;margin-left:43px;margin-top:75px}.s269{min-width:292px;width:292px;min-height:113px;height:113px}.c157{z-index:8;pointer-events:auto}.i17{position:absolute;left:0;width:292px;height:110px;top:2px;-webkit-filter:drop-shadow(1px 1px 1px rgba(0,0,0,.5));-moz-filter:drop-shadow(1px 1px 1px rgba(0,0,0,.5));filter:drop-shadow(1px 1px 1px rgba(0,0,0,.5));will-change:filter;border:0}.i18{width:100%;height:100%;display:inline-block}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-dfa528.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-67e4d3.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/site.63ad91.css" media="print">
</head>
<body id="b">
<script>var p=document.createElement("P");p.innerHTML="&nbsp;",p.style.cssText="position:fixed;visible:hidden;font-size:100px;zoom:1",document.body.appendChild(p);var rsz=function(e){return function(){var r=Math.trunc(1e3/parseFloat(window.getComputedStyle(e).getPropertyValue("font-size")))/10,t=document.body;r!=t.style.getPropertyValue("--f")&&t.style.setProperty("--f",r)}}(p);if("ResizeObserver"in window){var ro=new ResizeObserver(rsz);ro.observe(p)}else if("requestAnimationFrame"in window){var raf=function(){rsz(),requestAnimationFrame(raf)};requestAnimationFrame(raf)}else setInterval(rsz,100);</script>

<div class="c130">
<div class="v15 ps109 s204 c131">
<div class="ps110">
</div>
<div class="ps111 v15 s205">
<div class="v16 ps112 s206 c132">
<div class="v16 ps113 s207 c133">
<a href="./" class="a3"><picture class="i16"><source srcset="images/photo-copy-245.webp 1x, images/photo-copy-490.webp 2x, images/photo-copy-735.webp 3x" type="image/webp"><source srcset="images/photo-copy-245.png 1x, images/photo-copy-490.png 2x, images/photo-copy-735.png 3x"><img src="images/photo-copy-490.png" class="un33 i15"></picture></a>
</div>
<div class="v17 ps114 s208 c134">
<ul class="menu-dropdown v16 ps113 s208 m3" id="m1">
<li class="v16 ps113 s209 mit3">
<div class="menu-content mcv3">
<div class="v16 ps113 s210 c135">
<div class="v16 ps115 s211 c136">
<p class="p9 f38">Consulting</p>
</div>
</div>
</div>
<ul class="menu-dropdown-2 v18 ps116 s212 m3">
<li class="v16 ps113 s213 mit3">
<a href="business-consulting.html" class="ml3"><div class="menu-content mcv3"><div class="v16 ps113 s214 c137"><div class="v16 ps117 s215 c136"><p class="p9 f38">Business Consulting</p></div></div></div></a>
</li>
<li class="v16 ps118 s216 mit3">
<a href="technology-consulting.html" class="ml3"><div class="menu-content mcv3"><div class="v16 ps113 s217 c138"><div class="v16 ps117 s218 c136"><p class="p9 f38">Technology Consulting</p></div></div></div></a>
</li>
</ul>
</li>
<li class="v16 ps119 s219 mit3">
<div class="menu-content mcv3">
<div class="v16 ps113 s220 c139">
<div class="v16 ps115 s221 c136">
<p class="p9 f38">Division</p>
</div>
</div>
</div>
<ul class="menu-dropdown-3 v18 ps120 s222 m3">
<li class="v16 ps113 s223 mit3">
<a href="#" class="ml3"><div class="menu-content mcv3"><div class="v16 ps113 s224 c140"><div class="v16 ps121 s225 c136"><p class="p9 f39">SRP Excavation</p></div></div></div></a>
</li>
<li class="v16 ps122 s226 mit3">
<a href="https://sites.google.com/view/helicoptersimulation/home/" target="_blank" rel="noopener" class="ml3"><div class="menu-content mcv3"><div class="v16 ps113 s227 c141"><div class="v16 ps121 s228 c136"><p class="p9 f39">SRP Aviation</p></div></div></div></a>
</li>
</ul>
</li>
<li class="v16 ps119 s229 mit3">
<div class="menu-content mcv3">
<div class="v16 ps113 s230 c142">
<div class="v16 ps115 s231 c136">
<p class="p9 f38">Documents</p>
</div>
</div>
</div>
<ul class="menu-dropdown-1 v18 ps123 s232 m3">
<li class="v16 ps113 s233 mit3">
<a href="financial-statements.html" class="ml3"><div class="menu-content mcv3"><div class="v16 ps113 s234 c143"><div class="v16 ps124 s235 c136"><p class="p9 f38">Financial Statements</p></div></div></div></a>
</li>
<li class="v16 ps122 s236 mit3">
<a href="return-on-investment.html" class="ml3"><div class="menu-content mcv3"><div class="v16 ps113 s237 c144"><div class="v16 ps117 s238 c145"><p class="p9 f40">Return on Investment</p></div></div></div></a>
</li>
<li class="v16 ps122 s239 mit3">
<a href="financials.html" class="ml3"><div class="menu-content mcv3"><div class="v16 ps113 s240 c146"><div class="v16 ps117 s241 c145"><p class="p9 f40">Financials</p></div></div></div></a>
</li>
<li class="v16 ps122 s242 mit3">
<a href="project-timeline.html" class="ml3"><div class="menu-content mcv3"><div class="v16 ps113 s243 c147"><div class="v16 ps117 s244 c145"><p class="p9 f40">Project Timeline</p></div></div></div></a>
</li>
<li class="v16 ps122 s245 mit3">
<a href="consultation-agreement.html" class="ml3"><div class="menu-content mcv3"><div class="v16 ps113 s246 c148"><div class="v16 ps117 s247 c145"><p class="p9 f40">Consultation Agreement</p></div></div></div></a>
</li>
<li class="v16 ps122 s248 mit3">
<a href="website-quote-example.html" class="ml3"><div class="menu-content mcv3"><div class="v16 ps113 s249 c149"><div class="v16 ps117 s250 c145"><p class="p9 f40">Website Quote Example</p></div></div></div></a>
</li>
</ul>
</li>
<li class="v16 ps119 s251 mit3">
<a href="contact.html" class="ml3"><div class="menu-content mcv3"><div class="v16 ps113 s252 c150"><div class="v16 ps115 s253 c136"><p class="p9 f38">Contact</p></div></div></div></a>
</li>
<li class="v16 ps119 s254 mit3">
<div class="menu-content mcv3">
<div class="v16 ps113 s255 c151">
<div class="v16 ps115 s256 c136">
<p class="p9 f38">About</p>
</div>
</div>
</div>
<ul class="menu-dropdown v18 ps125 s257 m3">
<li class="v16 ps113 s258 mit3">
<a href="the-founder.html" class="ml3"><div class="menu-content mcv3"><div class="v16 ps113 s259 c152"><div class="v16 ps113 s259 c136"><p class="p9 f38">The Founder</p></div></div></div></a>
</li>
<li class="v16 ps126 s260 mit3">
<a href="music.html" class="ml3"><div class="menu-content mcv3"><div class="v16 ps113 s261 c153"><div class="v16 ps113 s261 c136"><p class="p9 f38">Music</p></div></div></div></a>
</li>
<li class="v16 ps126 s262 mit3">
<a href="gear.html" class="ml3"><div class="menu-content mcv3"><div class="v16 ps113 s263 c154"><div class="v16 ps113 s263 c136"><p class="p9 f38">Gear</p></div></div></div></a>
</li>
</ul>
</li>
<li class="v16 ps119 s264 mit3">
<a href="user-login.html" class="ml3"><div class="menu-content mcv3"><div class="v16 ps113 s265 c155"><div class="v16 ps115 s266 c136"><p class="p9 f38">Login</p></div></div></div></a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="ps127 v15 s267">
<div class="v16 ps128 s268 c156">
<p class="p10 f41">Successful Submission.</p>
<p class="p10 f42"><br></p>
<p class="p10 f42">We appreciate and thank you for reaching out to SRP Consulting Group, LLC.</p>
<p class="p10 f42"><br></p>
<p class="p10 f42">You will receive an email, text, or phone call if preferred, within the next 24-48 hours.</p>
<p class="p10 f42"><br></p>
<p class="p10 f42">Again, we thank you for your consideration and look forward to hopefully working together in the future!</p>
</div>
<div class="v16 ps129 s269 c157">
<picture class="i18">
<source srcset="images/img_1467-292-1.webp 1x, images/img_1467-584.webp 2x, images/img_1467-876.webp 3x" type="image/webp">
<source srcset="images/img_1467-292-1.png 1x, images/img_1467-584.png 2x, images/img_1467-876.png 3x">
<img src="images/img_1467-584.png" class="un34 i17">
</picture>
</div>
<div class="v1 ps107 s203 c128">
<p class="p3 f34">&nbsp;Shea R. Patterson</p>
<p class="p3 f35">&nbsp;M.B.A. | B.S.B.A.</p>
<p class="p3 f36">Founder &amp; CEO</p>
<p class="p3 f36">SRP Consulting Group, LLC</p>
<p class="p3 f36"><br></p>
<p class="p3"><span class="f37"><a href="javascript:em1();">Email</a></span></p>
<p class="p3"><span class="f37"><a href="tel:814-229-0300">Phone</a></span></p>
</div>
</div>
<div class="btf v2 ps108 s44 c129">
<div class="ps38">
</div>
<div class="ps39 v2 s45">
<div class="v1 ps40 s46 c1">
<div class="v1 ps2 s47 c91">
<p class="p3"><span class="f15"><a href="privacy-policy.html">Privacy Policy</a></span></p>
<p class="p3"><span class="f15"><a href="terms-of-service.html">Terms of Service</a></span></p>
</div>
<div class="v1 ps41 s47 c92">
<p class="p4 f16">Copyrights 2023</p>
<p class="p4 f17">SRP Consulting Group, LLC</p>
<p class="p4 f17">All Rights Reserved</p>
</div>
<div class="v1 ps42 s48 c26">
<picture class="i2 un36">
<source data-srcset="images/img_1467-146.webp 1x, images/img_1467-292.webp 2x, images/img_1467-438.webp 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" type="image/webp">
<source data-srcset="images/img_1467-146.png 1x, images/img_1467-292.png 2x, images/img_1467-438.png 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
<img src="images/img_1467-292.png" class="un35 i8">
</picture>
</div>
</div>
</div>
</div>
<div class="btf c51">
</div>
<script>dpth="/";!function(){for(var e=["js/jquery.d26858.js","js/jqueryui.d26858.js","js/menu.d26858.js","js/menu-dropdown-animations.d26858.js","js/menu-dropdown.63ad91.js","js/menu-dropdown-1.63ad91.js","js/menu-dropdown-2.63ad91.js","js/menu-dropdown-3.63ad91.js","js/form-submission-thank-you.63ad91.js"],n={},s=-1,t=function(t){var o=new XMLHttpRequest;o.open("GET",e[t],!0),o.onload=function(){for(n[t]=o.responseText;s<9&&void 0!==n[s+1];){s++;var e=document.createElement("script");e.textContent=n[s],document.body.appendChild(e)}},o.send()},o=0;o<9;o++)t(o)}();
</script>
</body>
</html>