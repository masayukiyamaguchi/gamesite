$(function(){
    // ジョブが選択されたら実行
    $("#select_job").change(function(){

        // 変更された内容を抽出
        var selectjob = $("#select_job").val();
        // 非同期処理
        $.ajaxSetup({
            headers: {
              "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
          });

        $.ajax({
            url: '/gear/selectjob/',//root
            type: 'get',//リクエストタイプ
            data: {
                job:selectjob
            },//Laravelに渡すデータ
        })

        // Ajaxリクエスト成功時の処理
        .done(function(data) {
            // Laravel内で処理された結果がdataに入って返ってくる
            //　一度要素を削除して一番上に---を追加
            $("#select_wep").empty().append('<option value="---">---</option>');
            for(var i=0;i<data.length;i++){
                var select ='<option value="'+data[i]["id"]+'">' +data[i]["item_name"]+ '</option>'
                $('#select_wep').append(select);
            }
                        

        })
        // Ajaxリクエスト失敗時の処理
        .fail(function(data) {
            alert('Ajaxリクエスト失敗');
        });


    })


});