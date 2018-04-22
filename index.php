<?php
include 'inc/vishesh.function.php';
header("Content-type: text/html; charset=utf-8");

$title = ':: '.$sitename.' ::';
include 'inc/vishesh.header.php';

$set = f3('https://m.youtube.com/?client=mv-google&gl=IN&hl=id');
$potong = cut($set,'</form>','Beranda YouTube');
$ambil = explode('</table>', $potong);

preg_match_all('/<a href=(.*)ditonton/isU',$ambil[0],$listt);
$arjo = cut($ambil[0],'<a href="  /feed/trending','</div');
$trend = explode('">', $arjo);
echo '
<div class="biru" style="text-align: left;"><h1><i class="fa fa-th-large"></i> '.$trend[1].'</h1></div>
';
foreach($listt[0] as $list){
$gid = cut($list,'<a href="  /watch?v=','"');
$id = explode('&', $gid);
$set = json_decode(arjo('https://www.googleapis.com/youtube/v3/videos?key='.$key.'&part=id,snippet,contentDetails,statistics&id='.$id[0]), true);

foreach ($set[items] as $data) {
$ide = $data[id];
$olehid = $data[snippet][channelId];
$oleh = $data[snippet][channelTitle];
$tgl = dateyt($data[snippet][publishedAt]);
$judul = $data[snippet][title];
$thumb = $data[snippet][thumbnails][medium][url];

$watu = $data[contentDetails][duration];
$durasi = format_timeyt($watu);
$view = number_format($data[statistics][viewCount]);
$like = number_format($data[statistics][likeCount]);
$galike = number_format($data[statistics][dislikeCount]);
echo '
<div class="menu2">
<table class="otable" width="100%">
<tbody>
<tr>
<td valign="middle" width="75px" align="center">
<div class="imahe"><img src="//'.$site.'/ytimg/vi/'.$ide.'/mqdefault.jpg" alt="'.$judul.'" title="'.$judul.'" style="border: 1px solid #222; border-radius: 2px; float: left;" width="95" height="60"><h8><span>'.$durasi.'</span></h8></div></td><td style="padding: 4px 6px 4px 6px;><span style=" font-size: 13px;"><a href="//'.$site.'/watch?v='.$ide.'" title="'.$judul.'">'.$judul.'</a></span><br /><span style="font-size: 11px;"><i class="fa fa-eye" aria-hidden="true" style="color: #ccc;"></i> '.$view.'<br /><i class="fa fa-calendar" aria-hidden="true" style="color: #ddd;"></i> '.$tgl.'<br /><i class="fa fa-users" aria-hidden="true" style="color: #ddd;"></i> <a href="//'.$site.'/channel?cid='.$olehid.'" title="'.$judul.'">'.$oleh.'</a></span></td></tr></tbody></table></div>
';
}
}



preg_match_all('/<a href=(.*)ditonton/isU',$ambil[1],$listtSatu);
$arjoSatu = cut($ambil[1],'<a href="  /channel/','</div');
$channelSatu = explode('">', $arjoSatu);
echo '
<div class="biru" style="text-align: left;"><h1><i class="fa fa-th-large"></i> '.$channelSatu[1].'</h1></div>
';
foreach($listtSatu[0] as $listSatu){
$gidSatu = cut($listSatu,'<a href="  /watch?v=','"');
$idSatu = explode('&', $gidSatu);
$setSatu = json_decode(arjo('https://www.googleapis.com/youtube/v3/videos?key='.$key.'&part=id,snippet,contentDetails,statistics&id='.$idSatu[0]), true);

foreach ($setSatu[items] as $dataSatu) {
$ideSatu = $dataSatu[id];
$olehidSatu = $dataSatu[snippet][channelId];
$olehSatu = $dataSatu[snippet][channelTitle];
$tglSatu = dateyt($dataSatu[snippet][publishedAt]);
$judulSatu = $dataSatu[snippet][title];
$thumbSatu = $dataSatu[snippet][thumbnails][medium][url];

$watuSatu = $dataSatu[contentDetails][duration];
$durasiSatu = format_timeyt($watuSatu);
$viewSatu = number_format($dataSatu[statistics][viewCount]);
$likeSatu = number_format($dataSatu[statistics][likeCount]);
$galikeSatu = number_format($dataSatu[statistics][dislikeCount]);
echo '
<div class="menu2">
<table class="otable" width="100%">
<tbody>
<tr>
<td valign="middle" width="75px" align="center">
<div class="imahe"><img src="//'.$site.'/ytimg/vi/'.$ideSatu.'/mqdefault.jpg" alt="'.$judulSatu.'" title="'.$judulSatu.'" style="border: 1px solid #222; border-radius: 2px; float: left;" width="95" height="60"><h8><span>'.$durasiSatu.'</span></h8></div></td><td style="padding: 4px 6px 4px 6px;><span style=" font-size: 13px;"><a href="//'.$site.'/watch?v='.$ideSatu.'" title="'.$judulSatu.'">'.$judulSatu.'</a></span><br /><span style="font-size: 11px;"><i class="fa fa-eye" aria-hidden="true" style="color: #ccc;"></i> '.$viewSatu.'<br /><i class="fa fa-calendar" aria-hidden="true" style="color: #ddd;"></i> '.$tglSatu.'<br /><i class="fa fa-users" aria-hidden="true" style="color: #ddd;"></i> <a href="//'.$site.'/channel?cid='.$olehidSatu.'" title="'.$judulSatu.'">'.$olehSatu.'</a></span></td></tr></tbody></table></div>
';
}
}



preg_match_all('/<a href=(.*)ditonton/isU',$ambil[2],$listtDua);
$arjoDua = cut($ambil[2],'<a href="  /channel/','</div');
$channelDua = explode('">', $arjoDua);
echo '
<div class="biru" style="text-align: left;"><h1><i class="fa fa-th-large"></i> '.$channelDua[1].'</h1></div>
';
foreach($listtDua[0] as $listDua){
$gidDua = cut($listDua,'<a href="  /watch?v=','"');
$idDua = explode('&', $gidDua);
$setDua = json_decode(arjo('https://www.googleapis.com/youtube/v3/videos?key='.$key.'&part=id,snippet,contentDetails,statistics&id='.$idDua[0]), true);

foreach ($setDua[items] as $dataDua) {
$ideDua = $dataDua[id];
$olehidDua = $dataDua[snippet][channelId];
$olehDua = $dataDua[snippet][channelTitle];
$tglDua = dateyt($dataDua[snippet][publishedAt]);
$judulDua = $dataDua[snippet][title];
$thumbDua = $dataDua[snippet][thumbnails][medium][url];

$watuDua = $dataDua[contentDetails][duration];
$durasiDua = format_timeyt($watuSatu);
$viewDua = number_format($dataDua[statistics][viewCount]);
$likeDua = number_format($dataDua[statistics][likeCount]);
$galikeDua = number_format($dataDua[statistics][dislikeCount]);
echo '
<div class="menu2">
<table class="otable" width="100%">
<tbody>
<tr>
<td valign="middle" width="75px" align="center">
<div class="imahe"><img src="//'.$site.'/ytimg/vi/'.$ideDua.'/mqdefault.jpg" alt="'.$judulDua.'" title="'.$judulDua.'" style="border: 1px solid #222; border-radius: 2px; float: left;" width="95" height="60"><h8><span>'.$durasiDua.'</span></h8></div></td><td style="padding: 4px 6px 4px 6px;><span style=" font-size: 13px;"><a href="//'.$site.'/watch?v='.$ideDua.'" title="'.$judulDua.'">'.$judulDua.'</a></span><br /><span style="font-size: 11px;"><i class="fa fa-eye" aria-hidden="true" style="color: #ccc;"></i> '.$viewDua.'<br /><i class="fa fa-calendar" aria-hidden="true" style="color: #ddd;"></i> '.$tglDua.'<br /><i class="fa fa-users" aria-hidden="true" style="color: #ddd;"></i> <a href="//'.$site.'/channel?cid='.$olehidDua.'" title="'.$judulDua.'">'.$olehDua.'</a></span></td></tr></tbody></table></div>
';
}
}

//batas dua

preg_match_all('/<a href=(.*)ditonton/isU',$ambil[3],$listtTiga);
$arjoTiga = cut($ambil[3],'<a href="  /channel/','</div');
$channelTiga = explode('">', $arjoTiga);
echo '
<div class="biru" style="text-align: left;"><h1><i class="fa fa-th-large"></i> '.$channelTiga[1].'</h1></div>
';
foreach($listtTiga[0] as $listTiga){
$gidTiga = cut($listTiga,'<a href="  /watch?v=','"');
$idTiga = explode('&', $gidTiga);
$setTiga = json_decode(arjo('https://www.googleapis.com/youtube/v3/videos?key='.$key.'&part=id,snippet,contentDetails,statistics&id='.$idTiga[0]), true);

foreach ($setTiga[items] as $dataTiga) {
$ideTiga = $dataTiga[id];
$olehidTiga = $dataTiga[snippet][channelId];
$olehTiga = $dataTiga[snippet][channelTitle];
$tglTiga = dateyt($dataTiga[snippet][publishedAt]);
$judulTiga = $dataTiga[snippet][title];
$thumbTiga = $dataTiga[snippet][thumbnails][medium][url];

$watuTiga = $dataTiga[contentDetails][duration];
$durasiTiga = format_timeyt($watuTiga);
$viewTiga = number_format($dataTiga[statistics][viewCount]);
$likeTiga = number_format($dataTiga[statistics][likeCount]);
$galikeTiga = number_format($dataTiga[statistics][dislikeCount]);
echo '
<div class="menu2">
<table class="otable" width="100%">
<tbody>
<tr>
<td valign="middle" width="75px" align="center">
<div class="imahe"><img src="//'.$site.'/ytimg/vi/'.$ideTiga.'/mqdefault.jpg" alt="'.$judulTiga.'" title="'.$judulTiga.'" style="border: 1px solid #222; border-radius: 2px; float: left;" width="95" height="60"><h8><span>'.$durasiTiga.'</span></h8></div></td><td style="padding: 4px 6px 4px 6px;><span style=" font-size: 13px;"><a href="//'.$site.'/watch?v='.$ideTiga.'" title="'.$judulTiga.'">'.$judulTiga.'</a></span><br /><span style="font-size: 11px;"><i class="fa fa-eye" aria-hidden="true" style="color: #ccc;"></i> '.$viewTiga.'<br /><i class="fa fa-calendar" aria-hidden="true" style="color: #ddd;"></i> '.$tglTiga.'<br /><i class="fa fa-users" aria-hidden="true" style="color: #ddd;"></i> <a href="//'.$site.'/channel?cid='.$olehidTiga.'" title="'.$judulTiga.'">'.$olehTiga.'</a></span></td></tr></tbody></table></div>
';
}
}

//batas tiga

preg_match_all('/<a href=(.*)ditonton/isU',$ambil[4],$listtEmpat);
$arjoEmpat = cut($ambil[4],'<a href="  /channel/','</div');
$channelEmpat = explode('">', $arjoEmpat);
echo '
<div class="biru" style="text-align: left;"><h1><i class="fa fa-th-large"></i> '.$channelEmpat[1].'</h1></div>
';
foreach($listtEmpat[0] as $listEmpat){
$gidEmpat = cut($listEmpat,'<a href="  /watch?v=','"');
$idEmpat = explode('&', $gidEmpat);
$setEmpat = json_decode(arjo('https://www.googleapis.com/youtube/v3/videos?key='.$key.'&part=id,snippet,contentDetails,statistics&id='.$idEmpat[0]), true);

foreach ($setEmpat[items] as $dataEmpat) {
$ideEmpat = $dataEmpat[id];
$olehidEmpat = $dataEmpat[snippet][channelId];
$olehEmpat = $dataEmpat[snippet][channelTitle];
$tglEmpat = dateyt($dataEmpat[snippet][publishedAt]);
$judulEmpat = $dataEmpat[snippet][title];
$thumbEmpat = $dataEmpat[snippet][thumbnails][medium][url];

$watuEmpat = $dataEmpat[contentDetails][duration];
$durasiEmpat = format_timeyt($watuEmpat);
$viewEmpat = number_format($dataEmpat[statistics][viewCount]);
$likeEmpat = number_format($dataEmpat[statistics][likeCount]);
$galikeEmpat = number_format($dataEmpat[statistics][dislikeCount]);
echo '
<div class="menu2">
<table class="otable" width="100%">
<tbody>
<tr>
<td valign="middle" width="75px" align="center">
<div class="imahe"><img src="//'.$site.'/ytimg/vi/'.$ideEmpat.'/mqdefault.jpg" alt="'.$judulEmpat.'" title="'.$judulEmpat.'" style="border: 1px solid #222; border-radius: 2px; float: left;" width="95" height="60"><h8><span>'.$durasiEmpat.'</span></h8></div></td><td style="padding: 4px 6px 4px 6px;><span style=" font-size: 13px;"><a href="//'.$site.'/watch?v='.$ideEmpat.'" title="'.$judulEmpat.'">'.$judulEmpat.'</a></span><br /><span style="font-size: 11px;"><i class="fa fa-eye" aria-hidden="true" style="color: #ccc;"></i> '.$viewEmpat.'<br /><i class="fa fa-calendar" aria-hidden="true" style="color: #ddd;"></i> '.$tglEmpat.'<br /><i class="fa fa-users" aria-hidden="true" style="color: #ddd;"></i> <a href="//'.$site.'/channel?cid='.$olehidEmpat.'" title="'.$judulEmpat.'">'.$olehEmpat.'</a></span></td></tr></tbody></table></div>
';
}
}

//batas empat

preg_match_all('/<a href=(.*)ditonton/isU',$ambil[5],$listtLima);
$arjoLima = cut($ambil[5],'<a href="  /channel/','</div');
$channelLima = explode('">', $arjoLima);
echo '
<div class="biru" style="text-align: left;"><h1><i class="fa fa-th-large"></i> '.$channelLima[1].'</h1></div>
';
foreach($listtLima[0] as $listLima){
$gidLima = cut($listLima,'<a href="  /watch?v=','"');
$idLima = explode('&', $gidLima);
$setLima = json_decode(arjo('https://www.googleapis.com/youtube/v3/videos?key='.$key.'&part=id,snippet,contentDetails,statistics&id='.$idLima[0]), true);

foreach ($setLima[items] as $dataLima) {
$ideLima = $dataLima[id];
$olehidLima = $dataLima[snippet][channelId];
$olehLima = $dataLima[snippet][channelTitle];
$tglLima = dateyt($dataLima[snippet][publishedAt]);
$judulLima = $dataLima[snippet][title];
$thumbLima = $dataLima[snippet][thumbnails][medium][url];

$watuLima = $dataLima[contentDetails][duration];
$durasiLima = format_timeyt($watuLima);
$viewLima = number_format($dataLima[statistics][viewCount]);
$likeLima = number_format($dataLima[statistics][likeCount]);
$galikeLima = number_format($dataLima[statistics][dislikeCount]);
echo '
<div class="menu2">
<table class="otable" width="100%">
<tbody>
<tr>
<td valign="middle" width="75px" align="center">
<div class="imahe"><img src="//'.$site.'/ytimg/vi/'.$ideLima.'/mqdefault.jpg" alt="'.$judulLima.'" title="'.$judulLima.'" style="border: 1px solid #222; border-radius: 2px; float: left;" width="95" height="60"><h8><span>'.$durasiLima.'</span></h8></div></td><td style="padding: 4px 6px 4px 6px;><span style=" font-size: 13px;"><a href="//'.$site.'/watch?v='.$ideLima.'" title="'.$judulLima.'">'.$judulLima.'</a></span><br /><span style="font-size: 11px;"><i class="fa fa-eye" aria-hidden="true" style="color: #ccc;"></i> '.$viewLima.'<br /><i class="fa fa-calendar" aria-hidden="true" style="color: #ddd;"></i> '.$tglLima.'<br /><i class="fa fa-users" aria-hidden="true" style="color: #ddd;"></i> <a href="//'.$site.'/channel?cid='.$olehidLima.'" title="'.$judulLima.'">'.$olehLima.'</a></span></td></tr></tbody></table></div>
';
}
}

//batas lima

include 'inc/vishesh.footer.php';

?>