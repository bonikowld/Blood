<link rel="stylesheet" href="css/scrolltopbutton.css" style="text/css">

<footer>
  <div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-6 footerleft ">
        <p align="justify">Project Blood Seeker is a student made website by team hokage from La Salle University Ozamis City, it will provide reliable results in every users blood need</p>
        <p><span class="glyphicon glyphicon-map-marker"></span>La Salle University Ozamis City</p>
        <p><span class="glyphicon glyphicon-phone"></span>(Philippines): 0909324289</p>
        <p><span class="glyphicon glyphicon-envelope"></span>E-mail : teamhokage.com</p>
        
      </div>
      <div class="col-md-2 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">GENERAL LINK</h6>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">LATEST POST</h6>
        <div class="post">
          <p>Module 1 presentation this coming thursday<span>March 2,2017</span></p>
          <p>Module 1 presentation this coming thursday <span>March 2,2017</span></p>
          <p>Module 1 presentation this coming thursday <span>March 2,2017</span></p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
<span class="glyphicon glyphicon-chevron-up"></span>
</a>

<script>
$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});
</script>

<!--footer start from here-->

<hr>
<div class="copyright">
  <div class="container">
    <div class="col-md-6">
      <p>© 2016 - All Rights with Webenlance</p>
    </div>
    <div class="col-md-6">
      <ul class="bottom_ul">
        <li><a href="#">About us</a></li>
        <li><a href="#">Faq's</a></li>
        <li><a href="#">Contact us</a></li>
        <li><a href="#">Site Map</a></li>
      </ul>
    </div>
  </div>
</div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>





</html>