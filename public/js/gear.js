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

            // スコア保存の変数
            var score_num = 0;
            var delete_num= [];
            var save_data = [];

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

        // スコア保存をリセット
        score_num = 0;
        delete_num = [];
        save_data = [];
        $("[class^='comparison_table']").addClass("display_none");


        // 選ばれたジョブによって特化装備ボタンを制御
        switch(selectjob){
            case "pld":
            case "war":
            case "drk":            
            case "gnb":
                $("#crt_spc").prop('disabled', false);
                $("#sps_spc").prop('disabled', true);
                $("#ss_spc").prop('disabled', false);
                $("#ten_spc").prop('disabled', false);
                $("#pie_spc").prop('disabled', true);
                break;

            case "whm":
            case "sch":
            case "ast":
                $("#crt_spc").prop('disabled', false);
                $("#sps_spc").prop('disabled', true);
                $("#ss_spc").prop('disabled', false);
                $("#ten_spc").prop('disabled', true);
                $("#pie_spc").prop('disabled', false);
                break;
            
            case "blm" :
                $("#crt_spc").prop('disabled', false);
                $("#sps_spc").prop('disabled', false);
                $("#ss_spc").prop('disabled', true);
                $("#ten_spc").prop('disabled', true);
                $("#pie_spc").prop('disabled', true);
                break;
            
            default:
                $("#crt_spc").prop('disabled', false);
                $("#sps_spc").prop('disabled', true);
                $("#ss_spc").prop('disabled', false);
                $("#ten_spc").prop('disabled', true);
                $("#pie_spc").prop('disabled', true);
                break;

        }



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
            tiers = [];

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
                    
                    case "tiers":
                        tiers.push(data);
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
            displayStatus(chara_status,race_cor,statusTotal,$("#select_job").val(),tiers);


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
        displayStatus(chara_status,race_cor,statusTotal,$("#select_job").val(),tiers);
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
        displayStatus(chara_status,race_cor,statusTotal,$("#select_job").val(),tiers);

        
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
        // アラートの枠色を削除
        $(".select_race").removeClass("alart_boder");

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
            displayStatus(chara_status,race_cor,statusTotal,$("#select_job").val(),tiers);
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
                displayStatus(chara_status,race_cor,statusTotal,$("#select_job").val(),tiers);
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
    function displayStatus(chara,race,gear,job,tiers){
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
                var total_main = total_str;
                break;
            case "int":
                total_int += gear["main"];
                var total_main = total_int;
                break;
            case "dex":
                total_dex += gear["main"];
                var total_main = total_dex;
                break;
            case "mnd":
                total_mnd += gear["main"];
                var total_main = total_mnd;
                break;
            default :
                break;
        }
        $("#st_str").text(total_str);
        $("#st_int").text(total_int);
        $("#st_dex").text(total_dex);
        $("#st_mnd").text(total_mnd);

        $("#st_vit").text(total_vit);

        // 武器の基礎値を表示
        $("#st_vap").text(chara["vap"]);
        $("#st_aa").text(chara["aa"].toFixed(2));
        $("#st_aatime").text(chara["aatime"].toFixed(2));

        // 合計クリ値を表示
        var total_crt = gear["crt"] + chara["crt"];
        $("#st_crt").text(total_crt);

        // リストからクリ値の配列番号を見つける（検索ではなく順番に並んでるので初期を引いて番号を取得
        var num = total_crt - 340;
        var crt_par = tiers[num]["crt_chance"]*100;
        $("#st_crt_par").text(crt_par.toFixed(1)+"%");
        var crt_mag = tiers[num]["crt_damage"]*100;
        $("#st_crt_mag").text(crt_mag.toFixed(1)+"%");
        var crt_gain = tiers[num]["crt"];

        // dirも同じ
        var total_dir = gear["dir"] + chara["dir"];
        $("#st_dir").text(total_dir);
        var num = total_dir - 340;
        var dir_par = tiers[num]["dir_chance"]*100;
        $("#st_dir_par").text(dir_par.toFixed(1)+"%");
        $("#st_dir_mag").text("125.0%");
        var dir_gain = tiers[num]["dir"];

        // detも同じ
        var total_det = gear["det"] + chara["det"];
        $("#st_det").text(total_det);
        var num = total_det - 340;
        var det_mag = tiers[num]["det"]*100;
        $("#st_det_mag").text(det_mag.toFixed(1)+"%");
        var det_gain = det_mag;

        //sks
        var total_sks = gear["sks"] + chara["sks"];
        $("#st_sks").text(total_sks);
        var num = total_sks - 340;
        var sks_gcd = tiers[num]["gcd"];
        $("#st_sks_gcd").text(sks_gcd.toFixed(2));
        var sks_mag = tiers[num]["ss_mod"]*100;
        $("#st_sks_mag").text(sks_mag.toFixed(1)+"%");
        var sks_gain = sks_mag;

        //sps
        var total_sps = gear["sps"] + chara["sps"];
        $("#st_sps").text(total_sps);
        var num = total_sps - 340;
        var sps_gcd = tiers[num]["gcd"];
        $("#st_sps_gcd").text(sps_gcd.toFixed(2));
        var sps_mag = tiers[num]["ss_mod"]*100;
        $("#st_sps_mag").text(sps_mag.toFixed(1)+"%");
        var sps_gain = sps_mag;

        //ten
        var total_ten = gear["ten"] + chara["ten"];
        $("#st_ten").text(total_ten);
        var num = total_ten - 340;
        var ten_mag = tiers[num]["ten"]*100;
        $("#st_ten_mag").text(ten_mag.toFixed(1)+"%");
        switch(job){
            case "pld":
            case "war":
            case "drk":
            case "gnb":
                var ten_gain = ten_mag;
            break;

            default :
                var ten_gain = 1;
            break;
        }

        //pie 
        var total_pie = gear["pie"] + chara["pie"];
        $("#st_pie").text(total_pie);
        var num = total_pie - 340;
        var pie_point = tiers[num]["pie"];
        $("#st_pie_point").text(pie_point+"/3s");

        // スコア
        // メインステ
        var num = total_main - 340
        switch(job){
            case "pld":
            case "war":
            case "drk":
            case "gnb":
                var main_gain = tiers[num]["T_AP"];
                var mag = 1;
            break;

            default :
                var main_gain = tiers[num]["DH_AP"];
                var mag = 100;
            break;
        }

        // スキスピ、スペスピは値が大きい方をgainとして採用
        if(sks_gain > sps_gain){
            var ss_gain = sks_gain;
        }else{
            var ss_gain = sps_gain;
        }        
        
        // ダメージ倍率を乗算
        var score = main_gain * crt_gain * dir_gain * det_gain　* ten_gain * mag;
        var score_fix = (score/100).toFixed(1);
        $("#score").text(score_fix);

        // スコア差の計算
        for(i=0;i<score_num;i++){
            var comparison_score = ($("#score"+i).text() - score_fix).toFixed(1)
            $("#comparison"+i).text(comparison_score);
        }
    }

    // スコア保存
    $("#comparison").click(function(){

        // 種族は必ず選択させる（ajaxでバグが出るので、、、）
        console.log($(".select_race").val());
        if($(".select_race").val()==null){
            $(".select_race").addClass("alart_boder");
            alert("種族を選択してください");
        }else{

            if(score_num>=100){
                $(".save_limit").css("display","block");
            }else{
                // スコア差 行の表示
                displayBlock(".comparison_table"+score_num);  
                // スコアの表示        
                $("#score"+score_num).text($("#score").text());
                $("#comparison"+score_num).text(0);
            score_num++;
            }

            // 装備内容の保存
            var save_array = [];
            save_array.push($("#select_job").val());
            save_array.push($(".select_race").val());
            gears.forEach(function(gear){
                save_array.push($("#select_"+gear).val());
            });
            save_array.push($("#select_foo").val());
            gears.forEach(function(gear){
                for(i=1;i<=5;i++){
                    save_array.push($(".select_"+gear+"mate"+i).val());
                }
            })
            save_data.push(save_array);

        } //else終わり
    
    });

    // 反映
    $(".reflect_button").click(function(){

        var j = 0;
        var num = $(this).val();
        $("#select_job").val(save_data[num][j++]);        
        $(".select_race").val(save_data[num][j++]);
            $(".select_race").change();
        gears.forEach(function(gear){
            $("#select_"+gear).val(save_data[num][j++]);
            $("#select_"+gear).change();
        });    
        $("#select_foo").val(save_data[num][j++]); 
        $("#select_foo").change();
        gears.forEach(function(gear){
            for(i=1;i<=5;i++){
                $(".select_"+gear+"mate"+i).val(save_data[num][j++]);
            }
            $(".select_"+gear+"mate1").change();
        }) 

    });

    // スコア削除
    $(".delete_button").click(function(){
        // valueを特定
        var num = $(this).val();
        // 特定したスコアを非表示
        displayNone(".comparison_table"+num);
        // 削除したvalueの順番を覚えておく
        delete_num.push(num);
    })

    // 削除を戻す
    $("#retun_delete").click(function(){
        // 削除した順番の最後のvalueを取得
        num = delete_num[delete_num.length-1];
        // 表示する
        displayBlock(".comparison_table"+num);
        delete_num.pop();
    })



    // クリ特化装備のボタン
    $("#crt_spc").click(function(){
        // クリティカルが最大値の装備を抽出
        var max_crt_wep = maxCrt(weapons);
        if($("#select_job").val()=="pld"){
           var max_crt_sld = maxCrt(shields);
        }
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

        // 表示
        $("#select_wep").val(max_crt_wep);
        if($("#select_job").val()=="pld"){
            $("#select_sld").val(max_crt_sld);
        }
        $("#select_hea").val(max_crt_hea);
        $("#select_bod").val(max_crt_bod);
        $("#select_han").val(max_crt_han);
        $("#select_wei").val(max_crt_wei);
        $("#select_leg").val(max_crt_leg);
        $("#select_fee").val(max_crt_fee);
        $("#select_ear").val(max_crt_ear);
        $("#select_nec").val(max_crt_nec);
        $("#select_bra").val(max_crt_bra);
        $("#select_rin1").val(max_crt_rin1);
        $("#select_rin2").val(max_crt_rin2);


        // 装備が変更されたときと同じ動作を実行
        gears.forEach(function(gear){
            $("#select_"+gear).change();
        });
                
    });

    // sps特化装備のボタン
    $("#sps_spc").click(function(){
        // SS最大値の装備を抽出
        var max_sps_wep = maxSps(weapons);
        var max_sps_hea = maxSps(headgears);
        var max_sps_bod = maxSps(bodygears);
        var max_sps_han = maxSps(handgears);
        var max_sps_wei = maxSps(waistgears);
        var max_sps_leg = maxSps(leggears);
        var max_sps_fee = maxSps(feetgears);
        var max_sps_ear = maxSps(earringgears);
        var max_sps_nec = maxSps(necklacegears);
        var max_sps_bra = maxSps(braceletgears);
        var max_sps_rin1 = maxSps(ringgears);
        var max_sps_rin2 = maxSps(ringgears);

        // 表示
        $("#select_wep").val(max_sps_wep);
        $("#select_hea").val(max_sps_hea);
        $("#select_bod").val(max_sps_bod);
        $("#select_han").val(max_sps_han);
        $("#select_wei").val(max_sps_wei);
        $("#select_leg").val(max_sps_leg);
        $("#select_fee").val(max_sps_fee);
        $("#select_ear").val(max_sps_ear);
        $("#select_nec").val(max_sps_nec);
        $("#select_bra").val(max_sps_bra);
        $("#select_rin1").val(max_sps_rin1);
        $("#select_rin2").val(max_sps_rin2);


        // 装備が変更されたときと同じ動作を実行
        gears.forEach(function(gear){
            $("#select_"+gear).change();
        });
                
    });

    // SS排除装備のボタン
    $("#ss_spc").click(function(){
        switch($("#select_job").val()){
            case "blm":
            case "smn":
            case "rdm":
            case "blu":
            case "whm":
            case "sch":
            case "ast":                    
                sbst = "sps";
            break;

            default :
                sbst = "sks";
            break;
        }
        minstatus(sbst);
    });

    // 不屈排除ボタン
    $("#ten_spc").click(function(){
        minstatus("ten");
    });

    // 信仰排除ボタン
    $("#pie_spc").click(function(){
        minstatus("pie");
    });

    // sbst排除実行関数
    function minstatus(sbst){
        // sbst最小値の装備を抽出
        var min_wep = minsbst(weapons,sbst);
        var min_hea = minsbst(headgears,sbst);
        var min_bod = minsbst(bodygears,sbst);
        var min_han = minsbst(handgears,sbst);
        var min_wei = minsbst(waistgears,sbst);
        var min_leg = minsbst(leggears,sbst);
        var min_fee = minsbst(feetgears,sbst);
        var min_ear = minsbst(earringgears,sbst);
        var min_nec = minsbst(necklacegears,sbst);
        var min_bra = minsbst(braceletgears,sbst);
        var min_rin1 = minsbst(ringgears,sbst);
        var min_rin2 = minsbst(ringgears,sbst);
        // 表示
        $("#select_wep").val(min_wep);
        $("#select_hea").val(min_hea);
        $("#select_bod").val(min_bod);
        $("#select_han").val(min_han);
        $("#select_wei").val(min_wei);
        $("#select_leg").val(min_leg);
        $("#select_fee").val(min_fee);
        $("#select_ear").val(min_ear);
        $("#select_nec").val(min_nec);
        $("#select_bra").val(min_bra);
        $("#select_rin1").val(min_rin1);
        $("#select_rin2").val(min_rin2);
        
        // 装備が変更されたときと同じ動作を実行
        gears.forEach(function(gear){
            $("#select_"+gear).change();
        });
    }





});//jQuaryココまで


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
    var max = gears[0];
    var max_id = gears[0]["id"];
    gears.forEach(function(gear){
        if(max["crt_status"] < gear["crt_status"]){
            max_id = gear["id"];
        }
    })
    return max_id;
}

//SPSが最大の装備をretrun
function maxSps(gears){
    var max = gears[0];
    var max_id = gears[0]["id"];
    gears.forEach(function(gear){
        if(max["sps_status"] < gear["sps_status"]){
            max_id = gear["id"];
        }
    })
    return max_id;
}


//sbstが最小の装備をretrun
function minsbst(gears,sbst){
    var min = gears[0];
    var min_id = gears[0]["id"];
    gears.forEach(function(gear){
        if(min[sbst+"_status"] > gear[sbst+"_status"]){
            min_id = gear["id"];
        }
    })
    return min_id;
}




            
    
