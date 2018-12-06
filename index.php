<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Timezone</title>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jstimezonedetect/1.0.4/jstz.min.js">
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        var tz = jstz.determine(); // Determines the time zone of the browser client
        var timezone = tz.name(); //'Asia/Kolhata' for Indian Time.
    
        document.getElementById("hiddenVal").innerHTML = timezone;

      
    function updateTime()
    {
     $.ajax({
    url: "time.php", // php file path
    method: "POST", // send data method
    data: {"timezone": timezone}, // data to send {name: value}
    success: function(response){
      $('#time').html(response);
    } // response of ajax
});
}


        setInterval(updateTime,1000); 

 

})
</script>
     
</head>
<body>
   <div>
      Timezone:<span id="hiddenVal"></span>
    </div>
    
   <div>
       Current time:<span id="time"></span>
    </div>
    
    
</body>
</html>