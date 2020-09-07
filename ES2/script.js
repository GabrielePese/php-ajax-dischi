
$.ajax({
    url:'data.php',
    method:'GET',
    success: function(data){
        var dataDB = data['response'];
        console.log('risultato di data[respone] = ', data);
        getData(dataDB);
    },
    error: function(){
        console.log('error');
    }
});


function getData (dataDB){

    var template = $("#template").html();
    var compiled = Handlebars.compile(template);
    var target = $("#contenitore");


    for (var i = 0; i < dataDB.length; i++){
        var data = dataDB[i];
        var dataHTML = compiled(data);
        target.append(dataHTML);
    }

}
