$(function() {

            // グローバル変数として定義
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
            //毎回中身は空っぽにしてから入れる。
            weapons = [];
            shields = [];
            headgears = [];
            bodygears = [];
            handgears = [];
            waistgears = [];
            leggears = [];
            feetgears = [];
            earringgears = [];
            necklacegears = [];
            braceletgears = [];
            ringgears = [];
            foods = [];
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

            // 挿入された装備に応じてマテリアの表示・非表示            
            materiaDisplayDone(weapons[0],".select_wepmate");
            if(selectjob=="pld"){
               materiaDisplayDone(shields[0],".select_sldmate");
            }
            materiaDisplayDone(headgears[0],".select_heamate");
            materiaDisplayDone(bodygears[0],".select_bodmate");
            materiaDisplayDone(handgears[0],".select_hanmate");
            materiaDisplayDone(waistgears[0],".select_weimate");
            materiaDisplayDone(leggears[0],".select_legmate");
            materiaDisplayDone(feetgears[0],".select_feemate");
            materiaDisplayDone(earringgears[0],".select_earmate");
            materiaDisplayDone(necklacegears[0],".select_necmate");
            materiaDisplayDone(braceletgears[0],".select_bramate");
            materiaDisplayDone(ringgears[0],".select_rin1mate");
            materiaDisplayDone(ringgears[0],".select_rin2mate"); 

            
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
                displayBlock(".select_sld,.select_sldmate1,.select_sldmate2,.select_sldmate3,.select_sldmate4,.select_sldmate5");
                displayBlock(".subst_sks");
                displayNone(".subst_sps");
                displayBlock(".subst_ten");
                displayNone(".subst_pie");
                $("#subst_main").text("STR");

            break;

            case "war":
            case "drk":
            case "gnb":
                displayNone(".select_sld,.select_sldmate1,.select_sldmate2,.select_sldmate3,.select_sldmate4,.select_sldmate5");
                displayBlock(".subst_sks");
                displayNone(".subst_sps");
                displayBlock(".subst_ten");
                displayNone(".subst_pie");
                $("#subst_main").text("STR");                
            break;

            case "drg":
            case "mnk":
            case "sam":
                displayNone(".select_sld,.select_sldmate1,.select_sldmate2,.select_sldmate3,.select_sldmate4,.select_sldmate5");
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
                displayNone(".select_sld,.select_sldmate1,.select_sldmate2,.select_sldmate3,.select_sldmate4,.select_sldmate5");
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
                displayNone(".select_sld,.select_sldmate1,.select_sldmate2,.select_sldmate3,.select_sldmate4,.select_sldmate5");
                displayNone(".subst_sks");
                displayBlock(".subst_sps");
                displayNone(".subst_ten");
                displayNone(".subst_pie");
                $("#subst_main").text("INT");                
                break;

            case "whm":
            case "sch":
            case "ast":
                displayNone(".select_sld,.select_sldmate1,.select_sldmate2,.select_sldmate3,.select_sldmate4,.select_sldmate5");
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


    
    // ※ここをリストからのデータをforeachで回して書くことはできる？
    //武器が変更したら実行
    $("#select_wep").change(function(){
        // 渡す変数（プルダウン該当のID,ギアリストの大元,マテリア部分のクラス
        materiaDisplay("#select_wep",weapons,".select_wepmate");
    });

    //盾が変更したら実行
    $("#select_sld").change(function(){
        materiaDisplay("#select_sld",shields,".select_sldmate");
    });

    // 以下同
    $("#select_hea").change(function(){
        materiaDisplay("#select_hea",headgears,".select_heamate");
    });
    $("#select_bod").change(function(){
        materiaDisplay("#select_bod",bodygears,".select_bodmate");
    });
    $("#select_han").change(function(){
        materiaDisplay("#select_han",handgears,".select_hanmate");
    });
    $("#select_wei").change(function(){
        materiaDisplay("#select_wei",waistgears,".select_weimate");
    });
    $("#select_leg").change(function(){
        materiaDisplay("#select_leg",leggears,".select_legmate");
    });
    $("#select_fee").change(function(){
        materiaDisplay("#select_fee",feetgears,".select_feemate");
    });
    $("#select_ear").change(function(){
        materiaDisplay("#select_ear",earringgears,".select_earmate");
    });
    $("#select_nec").change(function(){
        materiaDisplay("#select_nec",necklacegears,".select_necmate");
    });
    $("#select_bra").change(function(){
        materiaDisplay("#select_bra",braceletgears,".select_bramate");
    });
    $("#select_rin1").change(function(){
        materiaDisplay("#select_rin1",ringgears,".select_rin1mate");
    });
    $("#select_rin2").change(function(){
        materiaDisplay("#select_rin2",ringgears,".select_rin2mate");
    });




});



//プルダウンリストの作成関数
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

//表示を消す関数
function displayNone(subst){
    $(subst).addClass("display_none");
}

// 表示を消すを消す＝つける関数
function displayBlock(subst){
    $(subst).removeClass("display_none");
}

// 該当の個数だけマテリア部を表示する関数
function materiaDisplay(id,list,mateclass){
    var item;

    //プルダウンのギアの内容を特定
    var weapon_id = $(id).val();
     
    // ギアのデータ配列を特定
    list.forEach(function(gear){
        if(gear["id"]==weapon_id){
            item = gear;
        }
    });
        
    // マテリア0の部分は消す
    materiaDisplayDone(item,mateclass);

}

function materiaDisplayDone(item,mateclass){
    for(var i=1;i<=5;i++){
        if(item["materia0"+i]==0){
            displayNone(mateclass+i);
        }else{
            displayBlock(mateclass+i);
        }

    }

}
