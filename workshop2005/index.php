<?php

// index is the default page
$page = "home";
$oldPicNo = 0;
if( array_key_exists('p', $_GET) and $_GET['p'] != "" ) {
  $page = $_GET['p'];
}

if( array_key_exists('i', $_GET) and $_GET['i'] != "" ) {
  $oldPicNo = preg_replace( "/[^0-9]+/", "", substr($_GET['i'], 0, 30) );
}

// no spaces or special characters are allowed in $page
// also allow only a length of 30 characters
$page = preg_replace( "/[^A-Za-z0-9_]+/", "", substr($page, 0, 30) );

switch( $page ) {

 case "home":
 case "program":
 case "dates":
 case "submission":
 case "papers":
 case "committee":
 case "contact":
   break;
   
 // make sure we always will display a page
 default:
   $page = "home";
   break;
}

$includedPage = "i_".$page.".php"; // the name of the inner pages

# choose a pic to display
$minPicNo = 1;
$maxPicNo = 24;
do {
  $picNo = rand($minPicNo, $maxPicNo);
} while( $picNo == $oldPicNo );
$picture = "pic".$picNo.".jpg";

// here goes the template html
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
     <title>AAAI-05 Workshop on Inference for Textual Question Answering</title>     
     <link rel="styleSheet" type="text/css" href="style.css">     
     <meta http-Equiv="Content-Type" content="text/html; charset=iso-8859-1">
     <script language="JavaScript" type="text/javascript">
<!--

function newImage(arg) {
	if (document.images) {
		rslt = new Image();
		rslt.src = arg;
		return rslt;
	}
}

function changeImages() {
	if (document.images && (preloadFlag == true)) {
		for (var i=0; i<changeImages.arguments.length; i+=2) {
			document[changeImages.arguments[i]].src = changeImages.arguments[i+1];
		}
	}
}

var preloadFlag = false;
function preloadImages() {
	if (document.images) {
        home_over = newImage("images/home-over.gif");
        program_over = newImage("images/program-over.gif");
        dates_over = newImage("images/dates-over.gif");
        submission_over = newImage("images/submission-over.gif");
        papers_over = newImage("images/papers-over.gif");
        committee_over = newImage("images/committee-over.gif");
        //menu_25_contact_over = newImage("images/menu_25-contact_over.gif");
        contact_over = newImage("images/contact-over.gif");
		preloadFlag = true;
	}
}

// -->
</script>

<script language="JavaScript" type="text/javascript">
<!--

// The Central Randomizer 1.3 (C) 1997 by Paul Houle (houle@msc.cornell.edu)
// See:  http://www.msc.cornell.edu/~houle/javascript/randomizer.html

rnd.today=new Date();
rnd.seed=rnd.today.getTime();

function rnd() {
        rnd.seed = (rnd.seed*9301+49297) % 233280;
        return rnd.seed/(233280.0);
};

function rand(number) {
        return Math.ceil(rnd()*number);
};

// end central randomizer.

//editable region
var number_of_images = <?=$maxPicNo;?>;
var seconds_to_display = 5;
var image_prefix = "images/pic"
//editable region

var oldImage = <?=$picNo;?>;

function updateTime() {

  do {
    image = rand(number_of_images);
  } while( image == oldImage );

  oldImage = image;
  document.rotatingImage.src = image_prefix + image + ".jpg";   
}

// 1000 milliseconds = 1 second
seconds_to_display = seconds_to_display * 1000;
window.setInterval( "updateTime()", seconds_to_display );

// <img name="rotatingImage" alt="Slideshow" src="">

//-->

</script>

</head>
<body bgcolor="#D4BDDA" onload="preloadImages();" style="background: url(images/bkg.jpg) #D4BDDA 50% 50% repeat-y;">

<table border="0" width="800" cellspacing="0" cellpadding="0" align="center">
<tr>
   <td>
     <img src="images/title.gif" alt="AAAI-05 Workshop on Inference for Textual Question Answering" width="800" height="105" usemap="#title_Map" border="0">
     <MAP NAME="title_Map">
       <AREA SHAPE="rect" ALT="Pittsburgh" COORDS="489,83,582,105" HREF="http://www.pittsburgh.net">
       <AREA SHAPE="rect" ALT="AAAI-05" COORDS="23,8,112,94" HREF="http://www.aaai.org/Conferences/National/2005/aaai05.html">
     </MAP>
   </td>
</tr>
<tr>
   <td>
     <img src="images/spacer.gif" alt="" width="800" height="30">
   </td>
</tr>
<tr>
   <td valign="top">
     <!-- MENU -->
     <table border="0" width="156" cellspacing="0" cellpadding="0" align="left">
     <tr>
       <td>
<table width="146" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td>
            <img src="images/spacer.gif" width="17" height="1"></td>
        <td>
            <img src="images/spacer.gif" width="2" height="1"></td>
        <td>
            <img src="images/spacer.gif" width="9" height="1"></td>
        <td>
            <img src="images/spacer.gif" width="6" height="1"></td>
        <td>
            <img src="images/spacer.gif" width="2" height="1"></td>
        <td>
            <img src="images/spacer.gif" width="2" height="1"></td>
        <td>
            <img src="images/spacer.gif" width="64" height="1"></td>
        <td>
            <img src="images/spacer.gif" width="3" height="1"></td>
        <td>
            <img src="images/spacer.gif" width="3" height="1"></td>
        <td>
            <img src="images/spacer.gif" width="6" height="1"></td>
        <td>
            <img src="images/spacer.gif" width="8" height="1"></td>
        <td>
            <img src="images/spacer.gif" width="2" height="1"></td>
        <td>
            <img src="images/spacer.gif" width="22" height="1"></td>
    </tr>
    <tr>
        <td colspan="13">
            <img src="images/menu_01.gif" width="146" height="37"></td>
    </tr>
    <tr>
        <td colspan="4" rowspan="2">
            <img src="images/menu_02.gif" width="34" height="26"></td>
        <td colspan="5">
            <a href="index.php?p=home&amp;i=<?=$picNo;?>"
                onmouseover="changeImages('home', 'images/home-over.gif'); return true;"
                onmouseout="changeImages('home', 'images/home.gif'); return true;">
                <img name="home" src="images/home.gif" width="74" height="20" border="0"></a></td>
        <td colspan="4" rowspan="2">
            <img src="images/menu_04.gif" width="38" height="26"></td>
    </tr>
    <tr>
        <td colspan="5">
            <img src="images/menu_05.gif" width="74" height="6"></td>
    </tr>
    <tr>
        <td colspan="3" rowspan="4">
            <img src="images/menu_06.gif" width="28" height="53"></td>
        <td colspan="7">
            <a href="index.php?p=program&amp;i=<?=$picNo;?>"
                onmouseover="changeImages('program', 'images/program-over.gif'); return true;"
                onmouseout="changeImages('program', 'images/program.gif'); return true;">
                <img name="program" src="images/program.gif" width="86" height="21" border="0"></a></td>
        <td colspan="3" rowspan="4">
            <img src="images/menu_08.gif" width="32" height="53"></td>
    </tr>
    <tr>
        <td colspan="7">
            <img src="images/menu_09.gif" width="86" height="6"></td>
    </tr>
    <tr>
        <td colspan="3" rowspan="2">
            <img src="images/menu_10.gif" width="10" height="26"></td>
        <td>
            <a href="index.php?p=dates&amp;i=<?=$picNo;?>"
                onmouseover="changeImages('dates', 'images/dates-over.gif'); return true;"
                onmouseout="changeImages('dates', 'images/dates.gif'); return true;">
                <img name="dates" src="images/dates.gif" width="64" height="20" border="0"></a></td>
        <td colspan="3" rowspan="2">
            <img src="images/menu_12.gif" width="12" height="26"></td>
    </tr>
    <tr>
        <td>
            <img src="images/menu_13.gif" width="64" height="6"></td>
    </tr>
    <tr>
        <td colspan="2" rowspan="4">
            <img src="images/menu_14.gif" width="19" height="52"></td>
        <td colspan="9">
            <a href="index.php?p=submission&amp;i=<?=$picNo;?>"
                onmouseover="changeImages('submission', 'images/submission-over.gif'); return true;"
                onmouseout="changeImages('submission', 'images/submission.gif'); return true;">
                <img name="submission" src="images/submission.gif" width="103" height="21" border="0"></a></td>
        <td colspan="2" rowspan="4">
            <img src="images/menu_16.gif" width="24" height="52"></td>
    </tr>
    <tr>
        <td colspan="9">
            <img src="images/menu_17.gif" width="103" height="5"></td>
    </tr>
    <tr>
        <td colspan="3" rowspan="2">
            <img src="images/menu_18.gif" width="17" height="26"></td>
        <td colspan="3">
            <a href="index.php?p=papers&amp;i=<?=$picNo;?>"
                onmouseover="changeImages('papers', 'images/papers-over.gif'); return true;"
                onmouseout="changeImages('papers', 'images/papers.gif'); return true;">
                <img name="papers" src="images/papers.gif" width="69" height="22" border="0"></a></td>
        <td colspan="3" rowspan="2">
            <img src="images/menu_20.gif" width="17" height="26"></td>
    </tr>
    <tr>
        <td colspan="3">
            <img src="images/menu_21.gif" width="69" height="4"></td>
    </tr>
    <tr>
        <td rowspan="4">
            <img src="images/menu_22.gif" width="17" height="89"></td>
        <td colspan="11">
            <a href="index.php?p=committee&amp;i=<?=$picNo;?>"
                onmouseover="changeImages('committee', 'images/committee-over.gif'); return true;"
                onmouseout="changeImages('committee', 'images/committee.gif'); return true;">
                <img name="committee" src="images/committee.gif" width="107" height="20" border="0"></a></td>
        <td rowspan="4">
            <img src="images/menu_24.gif" width="22" height="89"></td>
    </tr>
    <tr>
        <td colspan="11">
            <img src="images/menu_25.gif" width="107" height="5"></td>
    </tr>
    <tr>
        <td colspan="2" rowspan="2">
            <img src="images/menu_26.gif" width="11" height="64"></td>
        <td colspan="7">
            <a href="index.php?p=contact&amp;i=<?=$picNo;?>"
                onmouseover="changeImages('contact', 'images/contact-over.gif'); return true;"
                onmouseout="changeImages('contact', 'images/contact.gif'); return true;">
                <img name="contact" src="images/contact.gif" width="86" height="19" border="0"></a></td>
        <td colspan="2" rowspan="2">
            <img src="images/menu_28.gif" width="10" height="64"></td>
    </tr>
    <tr>
        <td colspan="7">
            <img src="images/menu_29.gif" width="86" height="45"></td>
    </tr>
</table>
       </td>       
       <td rowSpan="2"><img src="images/spacer.gif" alt="" width="10" height="267"></td>
     </tr>
     <tr><td><img src="images/spacer.gif" alt="" width="146" height="10"></td></tr>
     </table>
     <!-- /MENU -->

     <!-- PIC -->
     <table border="0" width="158" cellspacing="0" cellpadding="0" align="right">
     <tr>
       <td rowSpan="2"><img src="images/spacer.gif" alt="" width="10" height="267"></td>
       <td>
         <img name="rotatingImage" src="images/<?=$picture?>" alt="Pittsburgh" width="148" height="257" USEMAP="#pic_Map" border="0">
         <MAP NAME="pic_Map">
         <AREA SHAPE="poly" ALT="Pittsburgh" COORDS="77,0, 103,12, 128,46, 144,92, 144,161, 127,212, 103,241, 79,253, 48,244, 20,210, 8,172, 4,113, 15,58, 43,13" HREF="index.php?p=<?=$page?>&amp;i=<?=$picNo;?>">
         </MAP>
       </td>       
     </tr>
     <tr><td><img src="images/spacer.gif" alt="" width="148" height="10"></td></tr>
     </table>
     <!-- /PIC -->

<!-- /TEXT -->   
<? include($includedPage); ?>
<!-- /TEXT -->
</td>
</tr>
</table>
</body>
</html>
