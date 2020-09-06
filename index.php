<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example for Data Class</title>
</head>
<body>
    <script src="jquery-3.5.1.min.js"></script>
    <script>
		 function myFunction() { 
            var x =  
                document.getElementById("no").value; 
				console.log(x);
				 getItemById();
			function getItemById() {
            let id = x;
            let url = base_url + "?req=item_data&id="+id;
            $.get(url,function(data,success){
             //   console.log(data.length);
			 var myString2 = JSON.stringify(data);
				document.getElementById("demo").innerHTML = myString2;
                console.log(data);
				
            });
        }
}
         let base_url = "item.php";
       // let base_url = "http://edutechclsx.000webhostapp.com/api/test/";

        $("document").ready(function(){
             getItemNameList();
			 //myFunction();
           
            $.get(base_url,function(data,success){
             //  console.log(data);
            });
        });

        function getItemNameList() {
            let url = base_url + "?req=name_list";
            $.get(url,function(data,success){
                console.log(data.length);
                console.log(data);
				var myString = JSON.stringify(data);
				document.getElementById("demo1").innerHTML = myString;
				//document.getElementById("demo").innerHTML = data.id + "," + data.short_name + "," + data.name + "," + data.description + "," + data.price_small + "," + data.price_large + ","+ data.small_portion_name + "," + data.large_portion_name;
;
            });
        }

        
	
    </script>
	
	<p id="demo1"></p>
	<label for="no">Enter Item ID</label><br>
    <input type="text" id="no" name="no" ><br>
	<br>
<input type="submit" onclick="myFunction()" value="Get values" id="btn" >
<p id="demo"></p>
</body>
</html>