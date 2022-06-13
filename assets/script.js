

$('#tambah').click(function(e){
    var data = {
        'mobil' : $("#mobil").val(),
        'terjual' : $("#terjual").val(),
    };
    e.preventDefault();
    console.log("penceted")
    $.ajax({
        url: 'controller/create.php',
        type: 'POST',
        dataType: "json",
        data: data,
        success: function(response){
     
            if(response.result == true)
            {
                $("#mobil").val("");
                $("#terjual").val("");
                getData()
                alert("Data Berhasil Dimasukkan")
            }
        }
    })
});

$('#edit').click(function(e){
    var data = {
        'mobil' : $("#mobil").val(),
        'terjual' : $("#terjual").val(),
        'id' : $("#id").val(),
    };

    $.ajax({
        url: 'controller/edit.php',
        type: 'POST',
        dataType: "json",
        data: data,
        success: function(response){

            if(response.result == true)
            {
                $("#mobil").val("");
                $("#terjual").val("");
                getData()
                alert("Berhasil")
                window.location.href = 'index.php';
            }
        }
    })
});


$("#sort").on("change", function(e){
    getData($("#sort").val());
})

function getData($sorting = "ASC")
{

    $.ajax({
        url: 'controller/read.php?sort='+$sorting,
        type: 'get',
        dataType: "json",
        success:function(response)
        {
        
            var div = ""
            var id = 1
            response.forEach(element => {
                row = '<tr><th scope="row">'+id+'</th><td>'+element.mobil+'</td><td>'+element.terjual+'</td><td><a href="?edit='+element.id+'" style="border: none" class="text-primary" data-id="'+element.id+'"><i class="bi bi-pencil-square"></i></a> | <a href="?delete='+element.id+'" class="text-danger" type="submit" id="delete" data-id="'+element.id+'" style="border: none"><i class="bi bi-trash-fill"></i></a></td></tr>';
                div += row
                id += 1
                
            });
        
            $("#data").html(div);
        }
    })
}s

getData()