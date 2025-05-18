
<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Tourism Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tourism Management System In PHP" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
    <script>
         new WOW().init();
    </script>
  <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
</head>
<body>
<!-- top-header -->
<div class="top-header">
<?php include('includes/header.php');?>
<div class="banner-1 ">
    <div class="container">
        <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Tourism Management System-Kanyakumari</h1>
    </div>
</div>
<!--- /banner-1 ---->
<!--- privacy ---->
<div class="privacy">
    <div class="container">
        <?php 
        $pagetype = $_GET['type'];
        $sql = "SELECT type, detail FROM tblpages WHERE type = :pagetype";
        $query = $dbh->prepare($sql);
        $query->bindParam(':pagetype', $pagetype, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() > 0) {
            foreach ($results as $result) {
                ?>
                <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                    <?php echo htmlspecialchars($result->type); ?>
                </h3>
                <p>
                    <?php echo htmlspecialchars($result->detail); ?>
                </p>
                <?php
            }
        } else {
            echo "<h3>About us</h3>";
			echo "<P>Welcome to the Kanyakumari Tourism Management System, your ultimate guide to exploring the southernmost tip of India. Our mission is to provide comprehensive and up-to-date information to tourists, ensuring a memorable and enriching experience in Kanyakumari.
             <br><b>Who We Are</b><br>We are a dedicated team of tourism enthusiasts, local experts, and technology professionals committed to promoting the beauty and cultural heritage of Kanyakumari. Our platform is designed to offer seamless access to information about tourist attractions, accommodations, transportation, and local events.
             <br><b>Our Vision</b><br>Our vision is to make Kanyakumari a top tourist destination by leveraging technology to enhance the visitor experience. We aim to provide accurate, reliable, and user-friendly information to help tourists plan their trips efficiently and enjoy their stay to the fullest.
             <br><b>What We Offer</b><br>Comprehensive Information: Detailed guides on tourist attractions, historical sites, natural wonders, and cultural landmarks.<br>
			 Accommodation Listings: A curated list of hotels, resorts, and guesthouses to suit every budget and preference.<br>
			 Travel Tips: Practical advice on transportation, local customs, safety, and more.<br>
             Event Updates: Information on local festivals, events, and activities to help you make the most of your visit.<br>
             Customer Support: A dedicated support team to assist you with any queries or concerns during your trip.<br>
             <b>Our Commitment</b><br>We are committed to promoting sustainable tourism practices and preserving the natural and cultural heritage of Kanyakumari. We work closely with local communities, businesses, and authorities to ensure that tourism benefits everyone and contributes to the overall development of the region.
             <br>Thank you for choosing the Kanyakumari Tourism Management System. We look forward to helping you discover the wonders of Kanyakumari and create unforgettable memories.</p>";
		}
        ?>
    </div>
</div>
<!--- /privacy ---->
<!--- footer-top ---->
<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>