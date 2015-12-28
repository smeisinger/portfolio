			<div class="row-fluid footer">
				<div class="span6">
        <a href="http://www.behance.net/simonmeisinger" id="socials" rel="tooltip" data-original-title="Like my work on Behance."><img class="socialicon" src="http://simonmeisinger.at/work/img/socialicons/behance.png"></a>
        <a href="http://dribbble.com/simonmeisinger" id="socials2" rel="tooltip" data-original-title="What I’m currently working on."><img class="socialicon" src="http://simonmeisinger.at/work/img/socialicons/dribbble.png"></a>
        <a href="http://twitter.com/simonmeisinger" id="socials3" rel="tooltip" data-original-title="Me complaining about things."><img class="socialicon" src="http://simonmeisinger.at/work/img/socialicons/twitter.png"></a>
        <a href="http://simonmeisingermoods.tumblr.com/" id="socials4" rel="tooltip" data-original-title="My Moodboard."><img class="socialicon" src="http://simonmeisinger.at/work/img/socialicons/tumblr.png"></a>	
        </div>
				<div class="span6 right">
        <p>Have a look at my private <a href="http://simonmeisinger.tumblr.com">Photo Blog.</p>
				</div>
			</div>
   
   
    </div> <!-- /container -->



<!-- javascript --->
<script>  
$(function ()  
{ $("#socials").tooltip({animation:true});  
});  
$(function ()  
{ $("#socials2").tooltip({animation:true});  
});  
$(function ()  
{ $("#socials3").tooltip({animation:true});  
});  
$(function ()  
{ $("#socials4").tooltip({animation:true});  
});  
</script>

<script src="bootstrap/js/bootstrap.js"></script>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20819919-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<script type='text/javascript'>//<![CDATA[ 
$(function(){
var divs = $('.personalinfo');
$(window).on('scroll', function() {
   var st = $(this).scrollTop();
   divs.css({ 'opacity' : (1 - st/200) });
});

});//]]>  
</script>


<script>
$(".aboutlink").click(function () {
$("#about").toggle();
});
</script>


</body>