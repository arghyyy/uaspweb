

$('#Add').click(function(e){
    console.log("penceted")
    var data = {
        'nama' : $("#mobil").val(),
        'jenis' : $("#jenis").val(),
        'jumlah_terjual' : $("#terjual").val(),
    };
    $.ajax({
        url: 'controller/create.php',
        type: 'POST',
        dataType: "json",
        data: data,
        success: function(response){
            console.log(response)
            if(response.result == true)
            {
                $("#nama").val("");
                $("#jumlah_terjual").val("");
                $("#id_jenis").val("");
                getData()
                alert("Data Berhasil Dimasukkan")
            }
        }
    })
    e.preventDefault();
});

$('#edit').click(function(e){
    var data = {
        'nama' : $("#nama").val(),
        'jumlah_terjual' : $("#jumlah_terjual").val(),
        'id_jenis' : $("#id_jenis").val(),
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
                $("#nama").val("");
                $("#jumlah_terjual").val("");
                $("#id_jenis").val("");
                getData()
                alert("Berhasil Mengubah Data")
                window.location.href = 'index.php';
            }
        }
    })
});

$(document).ready(function(){
    $(".content").slice(0, 4).show();
    $("#loadMore").on("click", function(e){
      e.preventDefault();
      $(".content:hidden").slice(0, 4).slideDown();
      if($(".content:hidden").length == 0) {
        $("#loadMore").text("No Content").addClass("noContent");
      }
    });
    
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
                console.log(element)
                row = '<tr><th scope="row">'+element.nama+'</th><td>'+element.jenis+'</th><td>'+element.jumlah_terjual+'</td><td><a href="?edit='+element.id+'" style="border: none" class="text-primary" data-id="'+element.id+'"><i class="bi bi-pencil-square"></i></a> | <a href="?delete='+element.id+'" class="text-danger" type="submit" id="delete" data-id="'+element.id+'" style="border: none"><i class="bi bi-trash-fill"></i></a></td></tr>';
                div += row
                id += 1
                
            });
        
            $("#data").html(div);
        }
    })
}

getData()