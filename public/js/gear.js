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
            var nulls = [];

            var chara_status = {
                hp:7863,
                mp:10000,
                str:342,
                dex:322,
                vit:422,
                int:207,
                mnd:339,                                
                bap:0,
                aa:0,
                aatime:0,
                crt:380,
                dir:380,
                det:340,
                sks:380,
                sps:380,
                ten:380,
                pie:240,
            }

            var allstatus = {
                wep:{main:0,crt:0,dir:0,det:0,sks:0,sps:0,ten:0,pie:0,vit:0},
                hea:{main:0,crt:0,dir:0,det:0,sks:0,sps:0,ten:0,pie:0,vit:0},
                sld:{main:0,crt:0,dir:0,det:0,sks:0,sps:0,ten:0,pie:0,vit:0},
                bod:{main:0,crt:0,dir:0,det:0,sks:0,sps:0,ten:0,pie:0,vit:0},
                han:{main:0,crt:0,dir:0,det:0,sks:0,sps:0,ten:0,pie:0,vit:0},
                wei:{main:0,crt:0,dir:0,det:0,sks:0,sps:0,ten:0,pie:0,vit:0},
                leg:{main:0,crt:0,dir:0,det:0,sks:0,sps:0,ten:0,pie:0,vit:0},
                fee:{main:0,crt:0,dir:0,det:0,sks:0,sps:0,ten:0,pie:0,vit:0},
                ear:{main:0,crt:0,dir:0,det:0,sks:0,sps:0,ten:0,pie:0,vit:0},
                nec:{main:0,crt:0,dir:0,det:0,sks:0,sps:0,ten:0,pie:0,vit:0},
                bra:{main:0,crt:0,dir:0,det:0,sks:0,sps:0,ten:0,pie:0,vit:0},
                rin1:{main:0,crt:0,dir:0,det:0,sks:0,sps:0,ten:0,pie:0,vit:0},
                rin2:{main:0,crt:0,dir:0,det:0,sks:0,sps:0,ten:0,pie:0,vit:0},
                foo:{main:0,crt:0,dir:0,det:0,sks:0,sps:0,ten:0,pie:0,vit:0},
                gear_total:{main:0,crt:0,dir:0,det:0,sks:0,sps:0,ten:0,pie:0,vit:0},
                total:{main:0,crt:0,dir:0,det:0,sks:0,sps:0,ten:0,pie:0,vit:0}           
            };

            var gears = ["wep","sld","hea","bod","han","wei","leg","fee","ear","nec","bra","rin1","rin2"];
            var substatus = ["main","crt","dir","det","sks","sps","ten","pie","vit"];



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
                        
                    case "null":
                        nulls.push(data);
                        break;                           

                    default :
                        break;
                }
            })


            // 挿入された装備に応じてマテリアの表示・非表示
            console.log(bodygears[0]);
            
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

            //挿入された装備に応じてステータスを表示
            refreshSubStatus(allstatus); //初期化
            substatus.forEach(function(sbst){
                allstatus["wep"][sbst] = weapons[0][sbst+"_status"];
                if(selectjob=="pld"){
                    allstatus["sld"][sbst] = shields[0][sbst+"_status"];
                 }                
                allstatus["hea"][sbst] = headgears[0][sbst+"_status"];
                allstatus["bod"][sbst] = bodygears[0][sbst+"_status"];
                allstatus["han"][sbst] = handgears[0][sbst+"_status"];
                allstatus["wei"][sbst] = waistgears[0][sbst+"_status"];
                allstatus["leg"][sbst] = leggears[0][sbst+"_status"];
                allstatus["fee"][sbst] = feetgears[0][sbst+"_status"];
                allstatus["ear"][sbst] = earringgears[0][sbst+"_status"];
                allstatus["nec"][sbst] = necklacegears[0][sbst+"_status"];
                allstatus["bra"][sbst] = braceletgears[0][sbst+"_status"];
                allstatus["rin1"][sbst] = ringgears[0][sbst+"_status"];
                allstatus["rin2"][sbst] = ringgears[0][sbst+"_status"]; 
                
                //トータルの計算
                allstatus["gear_total"][sbst] += weapons[0][sbst+"_status"];
                if(selectjob=="pld"){
                    allstatus["gear_total"][sbst] += shields[0][sbst+"_status"];
                 }                
                allstatus["gear_total"][sbst] += headgears[0][sbst+"_status"];
                allstatus["gear_total"][sbst] += bodygears[0][sbst+"_status"];
                allstatus["gear_total"][sbst] += handgears[0][sbst+"_status"];
                allstatus["gear_total"][sbst] += waistgears[0][sbst+"_status"];
                allstatus["gear_total"][sbst] += leggears[0][sbst+"_status"];
                allstatus["gear_total"][sbst] += feetgears[0][sbst+"_status"];
                allstatus["gear_total"][sbst] += earringgears[0][sbst+"_status"];
                allstatus["gear_total"][sbst] += necklacegears[0][sbst+"_status"];
                allstatus["gear_total"][sbst] += braceletgears[0][sbst+"_status"];
                allstatus["gear_total"][sbst] += ringgears[0][sbst+"_status"];
                allstatus["gear_total"][sbst] += ringgears[0][sbst+"_status"]; 

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


            // サブステの値を挿入
            substatus.forEach(function(sbst){
                $("#tbl_subst_wep_"+sbst).text(allstatus["wep"][sbst]);
                if(selectjob=="pld"){
                    $("#tbl_subst_sld_"+sbst).text(allstatus["sld"][sbst]);
                }
                $("#tbl_subst_hea_"+sbst).text(allstatus["hea"][sbst]);
                $("#tbl_subst_bod_"+sbst).text(allstatus["bod"][sbst]);
                $("#tbl_subst_han_"+sbst).text(allstatus["han"][sbst]);
                $("#tbl_subst_wei_"+sbst).text(allstatus["wei"][sbst]);
                $("#tbl_subst_leg_"+sbst).text(allstatus["leg"][sbst]);
                $("#tbl_subst_fee_"+sbst).text(allstatus["fee"][sbst]);
                $("#tbl_subst_ear_"+sbst).text(allstatus["ear"][sbst]);
                $("#tbl_subst_nec_"+sbst).text(allstatus["nec"][sbst]);
                $("#tbl_subst_bra_"+sbst).text(allstatus["bra"][sbst]);
                $("#tbl_subst_rin1_"+sbst).text(allstatus["rin1"][sbst]);
                $("#tbl_subst_rin2_"+sbst).text(allstatus["rin2"][sbst]);
                allstatus["total"]　= allstatus["gear_total"];　//合計値を受け渡す（食事は考慮なし）
                $("#tbl_subst_total_"+sbst).text(allstatus["total"][sbst]);

            });

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
                testSpace("#tbl_subst_sld_main,#tbl_subst_sld_crt,#tbl_subst_sld_dir,#tbl_subst_sld_det,#tbl_subst_sld_sks,#tbl_subst_sld_sps,#tbl_subst_sld_ten,#tbl_subst_sld_pie,#tbl_subst_sld_vit");
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
                testSpace("#tbl_subst_sld_main,#tbl_subst_sld_crt,#tbl_subst_sld_dir,#tbl_subst_sld_det,#tbl_subst_sld_sks,#tbl_subst_sld_sps,#tbl_subst_sld_ten,#tbl_subst_sld_pie,#tbl_subst_sld_vit");
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
                testSpace("#tbl_subst_sld_main,#tbl_subst_sld_crt,#tbl_subst_sld_dir,#tbl_subst_sld_det,#tbl_subst_sld_sks,#tbl_subst_sld_sps,#tbl_subst_sld_ten,#tbl_subst_sld_pie,#tbl_subst_sld_vit");
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
                testSpace("#tbl_subst_sld_main,#tbl_subst_sld_crt,#tbl_subst_sld_dir,#tbl_subst_sld_det,#tbl_subst_sld_sks,#tbl_subst_sld_sps,#tbl_subst_sld_ten,#tbl_subst_sld_pie,#tbl_subst_sld_vit");
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
                testSpace("#tbl_subst_sld_main,#tbl_subst_sld_crt,#tbl_subst_sld_dir,#tbl_subst_sld_det,#tbl_subst_sld_sks,#tbl_subst_sld_sps,#tbl_subst_sld_ten,#tbl_subst_sld_pie,#tbl_subst_sld_vit");
                $("#subst_main").text("MND");
            break;

            default:


            break;
        }


    });

    
    //武器が変更したら実行
    $("#select_wep").change(function(){
        gearset(weapons,"wep");
    });    

    //盾が変更したら実行(基本は武器と同様)
    $("#select_sld").change(function(){
        gearset(shields,"sld"); 
    });

    // 以下同
    $("#select_hea").change(function(){
        gearset(headgears,"hea"); 
    });

    $("#select_bod").change(function(){
        gearset(bodygears,"bod");
    });

    $("#select_han").change(function(){
        gearset(handgears,"han");
    });

    $("#select_wei").change(function(){
        gearset(waistgears,"wei");
    });

    $("#select_leg").change(function(){
        gearset(leggears,"leg");
    });

    $("#select_fee").change(function(){
        gearset(feetgears,"fee");        
    });

    $("#select_ear").change(function(){
        gearset(earringgears,"ear");       
    });

    $("#select_nec").change(function(){
        gearset(necklacegears,"nec");      
    });

    $("#select_bra").change(function(){
        gearset(braceletgears,"bra");       
    });

    $("#select_rin1").change(function(){
        gearset(ringgears,"rin1");       
    });

    $("#select_rin2").change(function(){
        gearset(ringgears,"rin2");
    });

    // 食事
    $("#select_foo").change(function(){
        foodSet();
        totalPoint();
    });


    // 装備が変更された際に実行される関数
    function gearset(list,item){

        var item_id = "#select_"+item;
        var item_class = ".select_"+item+"mate";
            
        //変更した武器を特定（変更した箇所,装備のリスト）
        var gear = gearsbst(item_id,list); 
        // ---が選択された時の動作
        if(gear==undefined){
            gear = nulls[0];
        }

        //マテリアを消す（特定した武器,マテリアのclass）
        materiaDisplayDone(gear,item_class);

        //サブステ大元のリストと表示を変更
        substatus.forEach(function(sbst){
            gearTotal(allstatus["gear_total"][sbst],allstatus[item][sbst],gear[sbst+"_status"],sbst,item);
        });
        //食事の値を再計算
        foodSet(); 
        //合計値を再計算
        totalPoint();
    }
    
    //装備が変更された際に合計値が変更される
    function gearTotal(total,before,after,sbst,gear){
        total -= before;  //現在のトータルから現在の装備ステ値を引く
        total += after;  //現在のトータルに変更された装備のステ値をプラス
        $("#tbl_subst_"+gear+"_"+sbst).text(after);    //変更した装備のステ値を出力       
        allstatus[gear][sbst] = after;            //装備のステ値を変更
        allstatus["gear_total"][sbst] = total;    //トータルのステ値を変更   
      
    }

    //合計値を更新と表示
    function totalPoint(){
        substatus.forEach(function(sbst){
            //装備の合計値と食事の合計値を合計する
            total_Point = allstatus["gear_total"][sbst] + allstatus["foo"][sbst];
            $("#tbl_subst_total_"+sbst).text(total_Point);  //変更した装備のステ値を出力     
            
        });           
    }


    function foodSet(){
        var gear = gearsbst("#select_foo",foods);
        //食事を選択していなかったら0を挿入（値0の食事）
        if(gear==undefined){
            gear = foods[0];
        }

        substatus.forEach(function(sbst){
            if(sbst!="main"){
                //食事によるサブステの上昇値を計算
                var up_status = allstatus["gear_total"][sbst] *  gear[sbst+"_status"] * 0.01 ; 
                                
                if(up_status>=gear[sbst+"_status_limit"]){
                    allstatus["foo"][sbst] = gear[sbst+"_status_limit"] //上限値より大きければ、上限値まで
                }else{
                    allstatus["foo"][sbst] = parseInt(up_status, 10); //小数点以下切り捨て     
                }
                $("#tbl_subst_foo_"+sbst).text(allstatus["foo"][sbst]);
            }

        });   
    }


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

// 表示を消すを消す＝つける関数
function testSpace(subst){
    $(subst).text("　");
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

// マテリア部分の表示を実行
function materiaDisplayDone(item,mateclass){
    for(var i=1;i<=5;i++){
        if(item["materia0"+i]==0){
            displayNone(mateclass+i);
        }else{
            displayBlock(mateclass+i);
        }

    }

}

//サブステ値の初期化
function refreshSubStatus(allstatus){
    Object.keys(allstatus).forEach(function(value) {
            Object.keys(allstatus[value]).forEach(function(num) {
            allstatus[value][num] = 0;
        });
    });
}



// 変更した装備を特定
function gearsbst(id,list){
    var item;

    //プルダウンのギアの内容を特定
    var gear_id = $(id).val();
     
    // ギアのデータ配列を特定
    list.forEach(function(gear){
        if(gear["id"]==gear_id){
            item = gear;
        }
    });
        
    return (item);   

}


            
    
