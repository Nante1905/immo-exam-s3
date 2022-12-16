window.addEventListener("load", function(){
    function sendData(){
        var xhr;
        try {
            xhr = new ActiveXObject('Msxml2.XMLHTTP');
        } catch (e) {
            try {
                xhr = new ActiveXObject('Microsoft.XMLHTTP');
            } catch (e2) {
                try {
                    xhr = new XMLHttpRequest();
                } catch (e3) {
                    xhr = false;
                }
            }
        }

        var formData; 
        xhr.addEventListener("load", function(event){
            formData = new FormData(form);
            $msg = (event.target.responseText!="")?event.target.responseText:"OK";
            window.location.href("lien.html");
            alert($msg);
        });

        xhr.addEventListener("error",function(event){
            alert("erreur");
        });

        xhr.open("POST","");

        xhr.send(formData);
    }

    var form; 

    form.addEventListener("submit", function(event){
        form =  document.getElementById("login");
        event.preventDefault();
        sendData();

    });
})