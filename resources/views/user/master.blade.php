<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

   <!-- For toastr -->
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
  <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

  <!-- For Profile -->



</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

@include('user.header')

@yield('content')

@include('user.footer')

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
{!! Toastr::message() !!}
<script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
        <script>
          var wa_btnSetting = {"btnColor":"#16BE45",
          "ctaText":"WhatsApp Us",
          "cornerRadius":40,
          "marginBottom":20,
          "marginLeft":20,
          "marginLeft":20,
          "btnPosition":"left",
          "whatsAppNumber":"+8801795043334",
          "welcomeMessage":"Hello",
          "zIndex":999999,
          "btnColorScheme":"light"};
          var wa_widgetSetting = {"title":"Hospital",
          "subTitle":"Typically replies in a day",
          "headerBackgroundColor":"#0a5f54",
          "headerColorScheme":"light",
          "greetingText":"Hi there! \nHow can I help you?",
          "ctaText":"Start Chat",
          "btnColor":"#57c251",
          "cornerRadius":40,
          "welcomeMessage":"Hello",
          "btnColorScheme":"light",
          "brandImage":"https://ucarecdn.com/7c8ee41c-e7bb-4ff9-ae30-db8f4ec0eda6/WhatsAppImage20221111at112629AM.jpeg",
          "darkHeaderColorScheme":{"title":"#333333","subTitle":"#4F4F4F"}};  
          window.onload = () => {
            _waEmbed(wa_btnSetting, wa_widgetSetting);
          };
        </script>
        <!--Start of Tawk.to Script-->
{{-- <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/63ac0cdac2f1ac1e202a7a4a/1glc14dsv';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script> --}}
  <!--End of Tawk.to Script-->
      

{{-- <script>
  var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?8613';
  var s = document.createElement('script');
  s.type = 'text/javascript';
  s.async = true;
  s.src = url;
  var options = {
"enabled":true,
"chatButtonSetting":{
    "backgroundColor":"#31a62b",
    "ctaText":"",
    "borderRadius":"25",
    "marginLeft":"0",
    "marginBottom":"80",
    "marginRight":"29",
    "position":"right"
},
"brandSetting":{
    "brandName":"Hospital",
    "brandSubTitle":"Typically replies within a day",
    "brandImg":"",
    "welcomeText":"Hi there!\nHow can I help you?",
    "messageText":"Hello, I have a question about ",
    "backgroundColor":"#0a5f54",
    "ctaText":"Start Chat",
    "borderRadius":"250",
    "autoShow":false,
    "phoneNumber":"8801795043334"
}
};
  s.onload = function() {
      CreateWhatsappChatWidget(options);
  };
  var x = document.getElementsByTagName('script')[0];
  x.parentNode.insertBefore(s, x);
</script> --}}
</body>
</html>