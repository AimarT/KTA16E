 window.onload = function (){
        (function(){
          var date = new Date();
            //paneme aja õige kujul kokku 
            var time = date.getHours() + ':' +
                date.getMinutes()+ ':' +
                date.getSeconds();
            document.getElementsByTagName('div') [0].innerHTML = "Aeg JS'is " + time;
            window.setTimeout(arguments.callee,1000);
        })();
    };
