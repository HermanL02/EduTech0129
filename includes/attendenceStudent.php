


<section id="list-container">
	
    <form action=""> 
        <div id="txtHint">Attendence</div>
        <script>
            window.onload=function(){
                updateRecord("display");
            }
            function updateRecord(str) {
                var xhttp;    
                xhttp = new XMLHttpRequest();
                
                xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                var d = new Date();
                var hour= d.getHours();
                if(hour<10){
                    hour = '0'+''+hour; 
                }
                console.log(hour);
                var minute= d.getMinutes();
                if(minute<10){
                    minute = '0'+''+minute;
                }
                var second= d.getSeconds();
                if(second<10){
                    second = '0'+''+second;
                }
                xhttp.open("GET", "feedback.php?hour="+hour+"&minute="+minute+"&second="+second, true);
                xhttp.send();
                console.log(hour);
                console.log(minute);
                console.log(second);
            }
        </script>
</form>