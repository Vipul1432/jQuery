<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!DOCTYPE html>
<html>
<head>
<script src="jquery.min.js"></script>

<script>
$(document).ready(function(){
  $(".btn1").click(function(){
    $("p").hide();
  });
  $(".btn2").click(function(){
    $("p").show();
  });
});
</script>
</head>
<body>

<p>This is a paragraph.</p>

<button class="btn1">Hide</button>
<button class="btn2">Show</button>

</body>
</html>
