$(function() {
    //ジョブが選択されるまで選択できない
    $(".select_race").prop('disabled', true);
    $(".select_mate").prop('disabled', true);
    $(".select_mea").prop('disabled', true);

            // グローバル変数として定義
            //各装備の変数を用意
            var job_status = [];
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

            //種族値、選択されていない場合を考慮し初期化
            var  race_cor = {str:0,dex:0,vit:0,int:0,mnd:0}

            //キャラの基礎値を挿れておく、メインステはジョブによって異なる
            var chara_status = {
                hp:0,
                mp:10000,
                str:0,
                dex:0,
                vit:0,
                int:0,
                mnd:0,                                
                vap:0,
                aa:0,
                aatime:0,
                crt:380,
                dir:380,
                det:340,
                sks:380,
                sps:380,
                ten:380,
                pie:340,
                main_status:"str",
            }

            //マテリア値
            var allmaterias = {
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
                materia_total:{main:0,crt:0,dir:0,det:0,sks:0,sps:0,ten:0,pie:0,vit:0}
            }

            // 各装備のサブステテーブル
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
                total:{main:0,crt:0,dir:0,det:0,sks:0,sps:0,ten:0,pie:0,vit:0},
          
            };

            // どうしてもtotalPointの関数で、totalにgear_totalを渡すとバグるのでもう一つ合計値を用意。
            var statusTotal = {main:0,crt:0,dir:0,det:0,sks:0,sps:0,ten:0,pie:0,vit:0}

            //初期設定のための0飯を用意
            var food0 = {vit_status:0,vit_status_limit:0,crt_status:0,crt_status_limit:0,dir_status:0,dir_status_limit:0,det_status:0,det_status_limit:0,sks_status:0,sks_status_limit:0,sps_status:0,sps_status_limit:0,ten_status:0,ten_status_limit:0,pie_status:0,pie_status_limit:0}

            //サブステ最大値の配列
            var sbst_limit = {wep:0,sld:0,hea:0,bod:0,han:0,wei:0,leg:0,fee:0,ear:0,nec:0,bra:0,rin1:0,rin2:0}
                
            // forEachを回すために配列を用意
            var gears = ["wep","sld","hea","bod","han","wei","leg","fee","ear","nec","bra","rin1","rin2"];
            var substatus = ["main","crt","dir","det","sks","sps","ten","pie","vit"];
            var charsts = ["hp","str","dex","vit","int","mnd","main_status"];


    // ジョブが選択されたら実行
    $("#select_job").change(function(){

        // 種族、マテリア、食事の選択を可に
        $(".select_race").prop('disabled', false);
        $(".select_mate").prop('disabled', false);
        $(".select_mea").prop('disabled', false);

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
            job_status = [];
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

            //マテリアの設定をリセット
            materiaReset();
            refreshSubStatus(allmaterias);

            //食事設定をリセット
            foodReset(substatus);

            //マテリアの色をリセット
            sbstColorRset(substatus,gears);

            //データベースからの情報を各変数へ割り振り
            //ジョブのデータ
            job_status　= data[0];

            //装備のデータ
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

            //デフォ表示武器の基本性能を保管
            chara_status["vap"] = weapons[0]["physical_p"];
            chara_status["aa"] = weapons[0]["auto_attack"];
            chara_status["aatime"] = weapons[0]["attack_interval"];

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
            // サブステ最大値の初期値を設定
            sbst_limit["wep"] = weapons[0]["max_status"];
            if(selectjob=="pld"){
                sbst_limit["sld"] = shields[0]["max_status"];
            }            
            sbst_limit["hea"] = headgears[0]["max_status"];
            sbst_limit["bod"] = bodygears[0]["max_status"];
            sbst_limit["han"] = handgears[0]["max_status"];
            sbst_limit["wei"] = waistgears[0]["max_status"];
            sbst_limit["leg"] = leggears[0]["max_status"];
            sbst_limit["fee"] = feetgears[0]["max_status"];
            sbst_limit["ear"] = earringgears[0]["max_status"];
            sbst_limit["nec"] = necklacegears[0]["max_status"];
            sbst_limit["bra"] = braceletgears[0]["max_status"];
            sbst_limit["rin1"] = ringgears[0]["max_status"];
            sbst_limit["rin2"] = ringgears[0]["max_status"];
            
            
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


            //ジョブが変わったら、charの基礎値を変更
            charsts.forEach(function(charst){
                chara_status[charst] = job_status[charst];
             });           


            //ジョブが変わったらご飯補正と合計値の再計算
            recalculation();

            // 最後に、ステータスの表示を更新(ジョブの基礎ステータス、種族の補正値、装備の合計ステータス、選択中のジョブ)
            displayStatus(chara_status,race_cor,statusTotal,$("#select_job").val());


            // ジョブごとに表示するサブステを変える
            switch($("#select_job").val()){

                case "pld":
                    //サブステの表示非表示
                    displayBlock(".select_sld,.select_sldmate1,.select_sldmate2,.select_sldmate3,.select_sldmate4,.select_sldmate5");
                    displayBlock(".subst_sks");
                    displayNone(".subst_sps");
                    displayBlock(".subst_ten");
                    displayNone(".subst_pie");
                    //マテリアの選択部分の表示非表示
                    displayBlock(".sks_mate");
                    displayNone(".sps_mate");
                    displayBlock(".ten_mate");
                    displayNone(".pie_mate");
                    //メインステの変更
                    $("#subst_main").text("STR");
                    //サブステ合計値の表示非表示
                    displayBlock(".sks_table");
                    displayNone(".sps_table");
                    displayBlock(".ten_table");
                    displayNone(".pie_table");

                break;

                case "war":
                case "drk":
                case "gnb":
                    displayNone(".select_sld,.select_sldmate1,.select_sldmate2,.select_sldmate3,.select_sldmate4,.select_sldmate5");
                    displayBlock(".subst_sks");
                    displayNone(".subst_sps");
                    displayBlock(".subst_ten");
                    displayNone(".subst_pie");
                    displayBlock(".sks_mate");
                    displayNone(".sps_mate");
                    displayBlock(".ten_mate");
                    displayNone(".pie_mate");
                    testSpace("#tbl_subst_sld_main,#tbl_subst_sld_crt,#tbl_subst_sld_dir,#tbl_subst_sld_det,#tbl_subst_sld_sks,#tbl_subst_sld_sps,#tbl_subst_sld_ten,#tbl_subst_sld_pie,#tbl_subst_sld_vit");
                    $("#subst_main").text("STR");
                    displayBlock(".sks_table");
                    displayNone(".sps_table");
                    displayBlock(".ten_table");
                    displayNone(".pie_table");
                break;

                case "drg":
                case "mnk":
                case "sam":
                    displayNone(".select_sld,.select_sldmate1,.select_sldmate2,.select_sldmate3,.select_sldmate4,.select_sldmate5");
                    displayBlock(".subst_sks");
                    displayNone(".subst_sps");
                    displayNone(".subst_ten");
                    displayNone(".subst_pie");
                    displayBlock(".sks_mate");
                    displayNone(".sps_mate");
                    displayNone(".ten_mate");
                    displayNone(".pie_mate");
                    testSpace("#tbl_subst_sld_main,#tbl_subst_sld_crt,#tbl_subst_sld_dir,#tbl_subst_sld_det,#tbl_subst_sld_sks,#tbl_subst_sld_sps,#tbl_subst_sld_ten,#tbl_subst_sld_pie,#tbl_subst_sld_vit");
                    $("#subst_main").text("STR"); 
                    displayBlock(".sks_table");
                    displayNone(".sps_table");
                    displayNone(".ten_table");
                    displayNone(".pie_table");               
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
                    displayBlock(".sks_mate");
                    displayNone(".sps_mate");
                    displayNone(".ten_mate");
                    displayNone(".pie_mate");
                    testSpace("#tbl_subst_sld_main,#tbl_subst_sld_crt,#tbl_subst_sld_dir,#tbl_subst_sld_det,#tbl_subst_sld_sks,#tbl_subst_sld_sps,#tbl_subst_sld_ten,#tbl_subst_sld_pie,#tbl_subst_sld_vit");
                    $("#subst_main").text("DEX");
                    displayBlock(".sks_table");
                    displayNone(".sps_table");
                    displayNone(".ten_table");
                    displayNone(".pie_table");                  
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
                    displayNone(".sks_mate");
                    displayBlock(".sps_mate");
                    displayNone(".ten_mate");
                    displayNone(".pie_mate");
                    testSpace("#tbl_subst_sld_main,#tbl_subst_sld_crt,#tbl_subst_sld_dir,#tbl_subst_sld_det,#tbl_subst_sld_sks,#tbl_subst_sld_sps,#tbl_subst_sld_ten,#tbl_subst_sld_pie,#tbl_subst_sld_vit");
                    $("#subst_main").text("INT"); 
                    displayNone(".sks_table");
                    displayBlock(".sps_table");
                    displayNone(".ten_table");
                    displayNone(".pie_table");                 
                    break;

                case "whm":
                case "sch":
                case "ast":
                    displayNone(".select_sld,.select_sldmate1,.select_sldmate2,.select_sldmate3,.select_sldmate4,.select_sldmate5");
                    displayNone(".subst_sks");
                    displayBlock(".subst_sps");
                    displayNone(".subst_ten");
                    displayBlock(".subst_pie");
                    displayNone(".sks_mate");
                    displayBlock(".sps_mate");
                    displayNone(".ten_mate");
                    displayBlock(".pie_mate");
                    testSpace("#tbl_subst_sld_main,#tbl_subst_sld_crt,#tbl_subst_sld_dir,#tbl_subst_sld_det,#tbl_subst_sld_sks,#tbl_subst_sld_sps,#tbl_subst_sld_ten,#tbl_subst_sld_pie,#tbl_subst_sld_vit");
                    $("#subst_main").text("MND");
                    displayNone(".sks_table");
                    displayBlock(".sps_table");
                    displayNone(".ten_table");
                    displayBlock(".pie_table");  
                break;

                default:

                break;
            }

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


        })        


        
        // Ajaxリクエスト失敗時の処理
        .fail(function(data) {
            alert('Ajaxリクエスト失敗');
        });       
        

    });　//ジョブが選択されたら　ここまで


    
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


    // 食事が変更したら実行
    $("#select_foo").change(function(){
        foodSet();
        totalPoint();
        // STATUSの表示更新
        displayStatus(chara_status,race_cor,statusTotal,$("#select_job").val());
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

        //武器の数値を合計値に入れる
        substatus.forEach(function(sbst){
            gearTotal(allstatus["gear_total"][sbst],allstatus[item][sbst],gear[sbst+"_status"],sbst,item,allmaterias[item][sbst]);
        });

        //サブステ最大値更新
        sbst_limit[item] = gear["max_status"];

        //最終計算
        recalculation();

        // STATUSの表示更新
        displayStatus(chara_status,race_cor,statusTotal,$("#select_job").val());

        
    }

    //最終計算
    function recalculation(){
        //食事の値を再計算
        foodSet(); 
        //合計値を再計算
        totalPoint();            
    }
    
    //装備が変更された際に合計値が変更される
    function gearTotal(total,before,after,sbst,gear,materia){
        //裏の値の計算
        total -= before;  //現在のトータルから現在の装備ステ値を引く
        total += after;  //現在のトータルに変更された装備のステ値をプラス
        allstatus["gear_total"][sbst] = total;    //トータルのステ値を更新

        allstatus[gear][sbst] = after;  //装備のステ値を変更(装備の部分のみ変更)        

        //画面表示の計算
        gaersum = after + materia;　//変更後の装備の値にマテリア設定値を合計        
        $("#tbl_subst_"+gear+"_"+sbst).text(gaersum);    //変更した装備のステ値を出力       
          
    }
    
    //合計値を更新と表示
    function totalPoint(){
        substatus.forEach(function(sbst){
            //装備の合計値と食事の合計値を合計する
            total_Point = allstatus["gear_total"][sbst] +allmaterias["materia_total"][sbst] + allstatus["foo"][sbst];
            $("#tbl_subst_total_"+sbst).text(total_Point);  //変更した装備のステ値を出力
            statusTotal[sbst] = total_Point;
        });
        
    }


    // 食事の数値を計算
    function foodSet(){
        // refreshMaterias(allmaterias);
        // refreshSubStatus(allstatus);
        var gear = gearsbst("#select_foo",foods);
        //食事を選択していなかったら0を挿入（値0の食事）
        if(gear==undefined){
            gear = food0;
        }

        substatus.forEach(function(sbst){

            if(sbst!="main"){
                //食事によるサブステの上昇値を計算
                var up_status = (allstatus["gear_total"][sbst]+allmaterias["materia_total"][sbst]) *  gear[sbst+"_status"] * 0.01 ; 
           
                if(up_status>=gear[sbst+"_status_limit"]){
                    allstatus["foo"][sbst] = gear[sbst+"_status_limit"] //上限値より大きければ、上限値まで
                }else{
                    allstatus["foo"][sbst] = parseInt(up_status, 10); //小数点以下切り捨て     
                }
                $("#tbl_subst_foo_"+sbst).text(allstatus["foo"][sbst]);
                
            }

        });
    }


    // 種族が選択されたら実行
    $(".select_race").change(function(){
        // 変更された内容を抽出        
        var selectrace = $(".select_race").val();
        // 非同期処理
        $.ajaxSetup({
            headers: {
              "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
          });

        $.ajax({
            url: '/gear/selectrace/',//root
            type: 'get',//リクエストタイプ
            data: {
                race:selectrace
            },//Laravelに渡すデータ
        })

        // Ajaxリクエスト成功時の処理
        .done(function(race){            
            race_cor = race;
            displayStatus(chara_status,race_cor,statusTotal,$("#select_job").val());
        })

         // Ajaxリクエスト失敗時の処理
        .fail(function(data) {
            alert('Ajaxリクエスト失敗');
        });       

    });　//種族が選択されたら　ここまで



    // マテリアが選択されたら実行
    gears.forEach(function(gear){
        for(i=1;i<=5;i++){            
            $(".select_"+gear+"mate"+i).change(function(){
                //選択されたマテリアの内容を確認
                gearMateriasSum(gear);
                allMateraisSum();

                //画面の計算
                substatus.forEach(function(sbst){
                    gaersum = allstatus[gear][sbst] + allmaterias[gear][sbst];　//変更後の装備の値にマテリア設定値を合計        
                    $("#tbl_subst_"+gear+"_"+sbst).text(gaersum);    //変更した装備のステ値を出力
                    
                    //サブステ最大値を超えてるかのちぇっく
                    if( checkLimit(gaersum,gear,sbst) ){
                        $("#tbl_subst_"+gear+"_"+sbst).addClass("red");
                    }else{
                        $("#tbl_subst_"+gear+"_"+sbst).removeClass("red");
                    }
                });

                //合計値の更新（ご飯、合計）
                recalculation();

                //SUTATUSの表示更新
                displayStatus(chara_status,race_cor,statusTotal,$("#select_job").val());
            });
        }
    })

    //装備マテリアの合計値を確認し表示と裏の数字の更新
    function gearMateriasSum(gear){
        refreshMaterias(allmaterias[gear]);　//初期化
            // 5つのマテリア値を計算
            for(i=1;i<=5;i++){
                var sbst_mate = $(".select_"+gear+"mate"+i).val();
                if(i<3){
                    allmaterias[gear][sbst_mate] += 60;
                }else{
                    allmaterias[gear][sbst_mate] += 20;
                }
            }
    }

    //全マテリアの合計値を再計算
    function allMateraisSum(){
        refreshMaterias(allmaterias["materia_total"]); //初期化
        substatus.forEach(function(sbst){
            gears.forEach(function(gear){
                allmaterias["materia_total"][sbst] += allmaterias[gear][sbst];
            });
        });
    }

    //サブステの最大値をチェック
    function checkLimit(gaersum,gear,sbst){
        // 武器のリミットと現在のサブステ値を比較
        // リミット以下、サブステがSTR、VITの場合は除外
        if(gaersum <= sbst_limit[gear] || sbst=="main" || sbst=="vit" ){
            return false;
        }else{
            return true;
        }
        
    }

    // chara:chara_status
    // race:race_cor
    // gear:allstatus["total"]
    // job:$("#select_job").val()
    //ステータスを表示
    function displayStatus(chara,race,gear,job){
        //HPを計算,表示（装備vitと種族vit分のHPをジョブ基礎HPへプラス 竜騎士＋17）

        // ジョブによるHP補正値の計算
        switch(job){

            case "pld":
            case "war":
            case "drk":
            case "gnb":
                var rise_value = 31.5;
                var cor_value = 0;              
            break;

            case "drg":
                var rise_value = 22.1;
                var cor_value = 17;               
            break;            

            default:
                var rise_value = 22.1;
                var cor_value = 0;
            break;
        }        
        var total_vit = gear["vit"] + race["vit"] + chara["vit"] + cor_value;
        var hp_sum = parseInt(chara["hp"]  + total_vit * rise_value);
        $("#st_hp").text(hp_sum);

        $("#st_mp").text(chara["mp"]);
        

        //メインステ計算　装備合計＋ジョブ特性＋種族補正
        var total_str = chara["str"] + race["str"];
        var total_int = chara["int"] + race["int"];
        var total_dex = chara["dex"] + race["dex"];
        var total_mnd = chara["mnd"] + race["mnd"];
        var mainst = chara["main_status"];
       
        // メインステによって場合分け
        switch(mainst){
            case "str":
                total_str += gear["main"];
                break;
            case "int":
                total_int += gear["main"];
                break;
            case "dex":
                total_dex += gear["main"];
                break;
            case "mnd":
                total_mnd += gear["main"];
                break;
            default :
                break;
        }
        $("#st_str").text(total_str);
        $("#st_int").text(total_int);
        $("#st_dex").text(total_dex);
        $("#st_mnd").text(total_mnd);

        $("#st_vit").text(total_vit);

        $("#st_vap").text(chara["vap"]);
        $("#st_aa").text(chara["aa"].toFixed(2));
        $("#st_aatime").text(chara["aatime"].toFixed(2));

        var total_crt = gear["crt"] + chara["crt"];
        $("#st_crt").text(total_crt);
        $("#st_crt_par").text();
        $("#st_crt_mag").text();

        var total_dir = gear["dir"] + chara["dir"];
        $("#st_dir").text(total_dir);
        $("#st_dir_par").text();
        $("#st_dir_mag").text();

        var total_det = gear["det"] + chara["det"];
        $("#st_det").text(total_det);
        $("#st_det_mag").text();

        var total_sks = gear["sks"] + chara["sks"];
        $("#st_sks").text(total_sks);
        $("#st_sks_gcd").text();
        $("#st_sks_mag").text();

        var total_sps = gear["sps"] + chara["sps"];
        $("#st_sps").text(total_sps);
        $("#st_sps_gcd").text();
        $("#st_sps_mag").text();

        var total_ten = gear["ten"] + chara["ten"];
        $("#st_ten").text(total_ten);
        $("#st_ten_mag").text();

        var total_pie = gear["pie"] + chara["pie"];
        $("#st_pie").text(total_pie);
        $("#st_pie_point").text();

        $("#score").text();
      
    }

    $("#crt_spc").click(function(){
        var max_crt_wep = maxCrt(weapons);
        var max_crt_sld = maxCrt(shields);
        var max_crt_hea = maxCrt(headgears);
        var max_crt_bod = maxCrt(bodygears);
        var max_crt_han = maxCrt(handgears);
        var max_crt_wei = maxCrt(waistgears);
        var max_crt_leg = maxCrt(leggears);
        var max_crt_fee = maxCrt(feetgears);
        var max_crt_ear = maxCrt(earringgears);
        var max_crt_nec = maxCrt(necklacegears);
        var max_crt_bra = maxCrt(braceletgears);
        var max_crt_rin1 = maxCrt(ringgears);
        var max_crt_rin2 = maxCrt(ringgears);


        gears.forEach(function(gear){
            var num = "max_crt_"+gear;
            console.log(num);
            $("#select_"+gear).val(max_crt_wep);
            //サブステが変わらない。いい方法はないか？
        })



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

//マテリア値初期化
function refreshMaterias(allmaterias){
    Object.keys(allmaterias).forEach(function(value) {
        allmaterias[value] = 0;
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

//ジョブが変わったら、マテリア設定をリセット
function materiaReset(){
    $(".select_mate").val("non");
       
}

//ジョブが変わったら、食事設定をリセット
function foodReset(substatus){
    // プルダウン表示のnonに
    $(".select_mea").val("1");
    
    // 食事部分のサブステ値表示を0に
    substatus.forEach(function(sbst){
        $("#tbl_subst_foo_"+sbst).text(0);
    });
        
}

//ジョブが変わったら、サブステ値の色をリセット
function sbstColorRset(substatus,gears){
    substatus.forEach(function(sbst){
        gears.forEach(function(gear){
            $("#tbl_subst_"+gear+"_"+sbst).removeClass("red");
        })
    })
}

//クリティカルが最大の装備をretrun
function maxCrt(gears){
    var max = gears[0]["id"];
    gears.forEach(function(gear){
        if(max["crt"] < gear["crt"]){
            max = gear["id"];
        }
    })
    return max;
}

            
    
