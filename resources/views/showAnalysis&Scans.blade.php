<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Analysis</title>
  <!-- Favicons -->
  <link href="{{asset('public/FlexStart/assets/img/myrx-logo.jpg')}}" rel="icon">
  <link href="{{asset('public/FlexStart/assets/img/myrx-logo.jpg')}}" rel="apple-touch-icon">
  <!-- Meta Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '507858597277871');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=507858597277871&ev=PageView&noscript=1"/>
  </noscript>
<!-- End Meta Pixel Code -->
</head>
<body>
  <div class="row">
 

    <div class="col-md-12">
      <iframe src="{{ asset('public/materials/'.$labRadiology->document) }}" width="100%" height="600px">
        This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('public/materials/'.$labRadiology->document) }}">Download PDF</a>
      </iframe>
    </div> 


 

  </div>
</body>
</html>