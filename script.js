$(".search_list").click(function(){
    var _error = 0;
    var _val = '';
    var servicename = $(".servicename").val();
    if($(".search_list_name").val() == ''){
        _error = 1;
        $(".form-inline").css("border","3px solid red");
    } else {
        _val = $(".search_list_name").val();
        $(".form-inline").css("border","none");
    }

    if(_error == 0){
        $(this).text("Loading...");
        $.ajax({
            url:site_url+"ajax",
            type:"POST",
            data:{
                action:"search_list",
                values:_val,
            },
            dataTpe:"json",
            success:function(data){
                $('.search_service').text("search for this Area");
                var data = JSON.parse(data);
                var html = '';
                $.each(data.datas,function(key,val){
                    html += `<div>
                <a href="`+site_url+`service/`+servicename+`/`+val.slug+`/" title="`+val.list_name+`">
                    <div class="area">
                        <span>`+val.list_name+`</span>
                    </div>
                </a>
            </div>`;
                });
                $(".all_Services").html(html);
            }
        });
    }
});