$(function() {
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
            //各装備の変数を用意
            var weapons = [];
            var shields = [];
            var headgears = [];
            var bodygears = [];
            var handgears = [];
            var waistgears = [];
            var leggears = [];
            var feetgears = [];
            var earringgears = [];
            var necklacegears = [];
            var braceletgears = [];
            var ringgears = [];
            var foods = [];

            //データベースからの情報を各変数へ割り振り
            data.forEach(function(data){
                switch(data["location"]){
                    case "武器":
                        weapons.push(data);
                        break;
                    
                    case "盾":
                        shields.push(data);
                        break;

                    case "頭防具":
                        headgears.push(data);
                        break;
                    
                    case "胴防具":
                        bodygears.push(data);
                        break;

                    case "手防具":
                        handgears.push(data);
                        break;
                    
                    case "帯防具":
                        waistgears.push(data);
                        break;

                    case "脚防具":
                        leggears.push(data);
                        break;
                    
                    case "足防具":
                        feetgears.push(data);
                        break;
                        
                    case "耳飾り":
                        earringgears.push(data);
                        break;
                    
                    case "首飾り":
                        necklacegears.push(data);
                        break;

                    case "腕輪":
                        braceletgears.push(data);
                        break;
                    
                    case "指輪":
                        ringgears.push(data);
                        break;

                    case "食事":
                        foods.push(data);
                        break;                        

                    default :
                        break;
                }
            })

            //プルダウンリストの作成（関数）
            createSlect("#select_wep",weapons);
            createSlect("#select_sld",shields);
            createSlect("#select_hea",headgears);
            createSlect("#select_bod",bodygears);
            createSlect("#select_han",handgears);
            createSlect("#select_wei",waistgears);
            createSlect("#select_leg",leggears);
            createSlect("#select_fee",feetgears);
            createSlect("#select_ear",earringgears);
            createSlect("#select_nec",necklacegears);
            createSlect("#select_bra",braceletgears);
            createSlect("#select_rin1",ringgears);
            createSlect("#select_rin2",ringgears);
        })
        // Ajaxリクエスト失敗時の処理
        .fail(function(data) {
            alert('Ajaxリクエスト失敗');
        });

        // ジョブごとに表示するサブステを変える
        switch($("#select_job").val()){

            case "pld":
                displayBlock(".select_sld,.sld_mate");
                displayBlock(".subst_sks");
                displayNone(".subst_sps");
                displayBlock(".subst_ten");
                displayNone(".subst_pie");
                $("#subst_main").text("STR");

            break;

            case "war":
            case "drk":
            case "gnb":
                displayNone(".select_sld,.sld_mate");
                displayBlock(".subst_sks");
                displayNone(".subst_sps");
                displayBlock(".subst_ten");
                displayNone(".subst_pie");
                $("#subst_main").text("STR");                
            break;

            case "drg":
            case "mnk":
            case "sam":
                displayNone(".select_sld,.sld_mate");
                displayBlock(".subst_sks");
                displayNone(".subst_sps");
                displayNone(".subst_ten");
                displayNone(".subst_pie");
                $("#subst_main").text("STR");                
            break;

            case "nin":
            case "brd":
            case "mcn":
            case "dnc":
                displayNone(".select_sld,.sld_mate");
                displayBlock(".subst_sks");
                displayNone(".subst_sps");
                displayNone(".subst_ten");
                displayNone(".subst_pie");
                $("#subst_main").text("DEX");                
                break;

            case "blm":
            case "smn":
            case "rdm":
            case "blu":                
                displayNone(".select_sld,.sld_mate");
                displayNone(".subst_sks");
                displayBlock(".subst_sps");
                displayNone(".subst_ten");
                displayNone(".subst_pie");
                $("#subst_main").text("INT");                
                break;

            case "whm":
            case "sch":
            case "ast":
                displayNone(".select_sld,.sld_mate");
                displayNone(".subst_sks");
                displayBlock(".subst_sps");
                displayNone(".subst_ten");
                displayBlock(".subst_pie");
                $("#subst_main").text("MND");
            break;

            default:


            break;
        }


    });
    
    // //武器が変更したら実行
    // $("#select_wep").change(function(){
    //     //武器の内容を特定
    //     var weapon_id = $("#select_wep").val();

    //     // 武器を特定(これもう一回撮ってくる必要あり？)
    //     weapons.forEach(function(gear){
    //         if(gear["id"]==weapon_id){
    //             var weapon = gear;
    //             break;
    //         }            
    //     });
    //     console.log(weapon);
        
    //     displayNone(".select_wepmate3");
    //     displayNone(".select_wepmate4");
    //     displayNone(".select_wepmate5");
    // });

});

//プルダウンリストの作成
function createSlect(id,gears){
    //一度要素を削除
    $(id).empty()
    gears.forEach(function(gear){
        var select ='<option value="'+gear["id"]+'">' +gear["item_name"]+ '</option>'
        $(id).append(select);
    }); 
    //一番下に装備なしを追加
    $(id).append('<option value="---">---</option>');
}

function displayNone(subst){
    $(subst).addClass("display_none");
}

function displayBlock(subst){
    $(subst).removeClass("display_none");
}
