$.ajax({
    url:'data.php',
    method:'GET',
    success: function(data){
        var data = data['response'];
        console.log('risultato di data[respone] = ', data);
    },
    error: function(){
        console.log('error');
    }
});

var template = $("#template").html();
var compiled = Handlebars.compile(template);
var target = $("#contenitore");

for (var i = 0; i < data.length; i++){
    var data = data[i];
    var dataHTML = compiled(data);
    target.append(dataHTML);
}

console.log($("#template"));
