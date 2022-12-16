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
        xhr.addEventListener('load', function(event){
            formData = new FormData(form);
            let res = xhr.responseText
            let data = JSON.parse(res)
            if(data.logres === 'logged') {
                window.location.href("../pages/add.html");
            }
            else{
                displayRes.innerHTML = 'Erreur de email ou mot de passe';
                displayRes.style.color = 'red';
            }
        });

        xhr.addEventListener('error',function(event){
            alert("erreur");
        });

        xhr.open("POST","");

        xhr.send(formData);
    }

    var form = document.getElementById('login'); 

    form.addEventListener('submit', function(event){
        // form =  document.getElemen:tById('login');
        event.preventDefault();
        sendData();

    });
})