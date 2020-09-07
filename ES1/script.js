$.ajax({
    url:'data.php',
    method:'GET',
    success: function(data){
        var results = data['response'];
        console.log(results);
    },
    error: function(){
        log.error('error')
    }
});

