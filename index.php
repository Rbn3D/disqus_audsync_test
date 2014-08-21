<!DOCTYPE html>
<?php
include 'config.php';
?>
<html>
<head>
	<script type="text/javascript">
		var disqus_developer = 1;
	</script>
</head>
<body>
<h1>Audience Sync</h1>
<p>TOS agreement example</p>

<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = '<?php echo constant("DisqusShortname") ?>'; // required: replace example with your forum shortname
    var disqus_url = '<?php echo constant("BaseSitePath") ?>';

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
    
    var disqus_config = function() {
        this.page.api_key = '<?php echo constant("DisqusApiPublic") ?>';
    }
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
</body>
</html>