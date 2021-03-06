<?php

use Illuminate\Database\Seeder;

class Weapons extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param =     [
[
    "item_name"=>"---",
    "location"=>"武器",
    "item_level"=>"0",
    "physical_p"=>"0",
    "auto_attack"=>"0",
    "attack_interval"=>"0",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"---",
    "equipable_job_name"=>"---",
    "equipable_level"=>"0",
    "main_status"=>"0",
    "vit_status"=>"0",
    "crt_status"=>"0",
    "dir_status"=>"0",
    "det_status"=>"0",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"0",
    "materia02"=>"0",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"0",
    "dup"=>"0",
    "image"=>" ",
    "url"=>" "],
[
    "item_name"=>"クリプトラーカー・インデックスRE",
    "location"=>"武器",
    "item_level"=>"530",
    "physical_p"=>"179",
    "auto_attack"=>"138.32",
    "attack_interval"=>"3.12",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"召喚士",
    "equipable_job_name"=>"smn",
    "equipable_level"=>"80",
    "main_status"=>"723",
    "vit_status"=>"747",
    "crt_status"=>"0",
    "dir_status"=>"526",
    "det_status"=>"368",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"526",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/0a248e66c78/"],
    [
    "item_name"=>"クリプトラーカー・クリーバーRE",
    "location"=>"武器",
    "item_level"=>"530",
    "physical_p"=>"133",
    "auto_attack"=>"113.49",
    "attack_interval"=>"2.56",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"忍者",
    "equipable_job_name"=>"nin",
    "equipable_level"=>"80",
    "main_status"=>"723",
    "vit_status"=>"830",
    "crt_status"=>"0",
    "dir_status"=>"368",
    "det_status"=>"526",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"526",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/0aa4e1157ea/"],
    [
    "item_name"=>"クリプトラーカー・ウォーアクスRE",
    "location"=>"武器",
    "item_level"=>"530",
    "physical_p"=>"133",
    "auto_attack"=>"148.96",
    "attack_interval"=>"3.36",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"戦士",
    "equipable_job_name"=>"war",
    "equipable_level"=>"80",
    "main_status"=>"723",
    "vit_status"=>"830",
    "crt_status"=>"526",
    "dir_status"=>"0",
    "det_status"=>"0",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"368",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"526",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/0bd2c393717/"],
    [
    "item_name"=>"エデンモーン・バトルアクス",
    "location"=>"武器",
    "item_level"=>"535",
    "physical_p"=>"134",
    "auto_attack"=>"150.08",
    "attack_interval"=>"3.36",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"戦士",
    "equipable_job_name"=>"war",
    "equipable_level"=>"80",
    "main_status"=>"725",
    "vit_status"=>"836",
    "crt_status"=>"531",
    "dir_status"=>"0",
    "det_status"=>"372",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"531",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/0e145171c88/"],
    [
    "item_name"=>"エデンモーン・チャクラム",
    "location"=>"武器",
    "item_level"=>"535",
    "physical_p"=>"134",
    "auto_attack"=>"139.36",
    "attack_interval"=>"3.12",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"踊り子",
    "equipable_job_name"=>"dnc",
    "equipable_level"=>"80",
    "main_status"=>"725",
    "vit_status"=>"836",
    "crt_status"=>"531",
    "dir_status"=>"372",
    "det_status"=>"0",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"531",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/1eb2c429303/"],
    [
    "item_name"=>"クリプトラーカー・ディバイダーRE",
    "location"=>"武器",
    "item_level"=>"530",
    "physical_p"=>"133",
    "auto_attack"=>"131.22",
    "attack_interval"=>"2.96",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"暗黒騎士",
    "equipable_job_name"=>"drk",
    "equipable_level"=>"80",
    "main_status"=>"723",
    "vit_status"=>"830",
    "crt_status"=>"368",
    "dir_status"=>"0",
    "det_status"=>"526",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"526",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/212a8514023/"],
    [
    "item_name"=>"エデンモーン・マインゴーシュ",
    "location"=>"武器",
    "item_level"=>"535",
    "physical_p"=>"134",
    "auto_attack"=>"114.34",
    "attack_interval"=>"2.56",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"忍者",
    "equipable_job_name"=>"nin",
    "equipable_level"=>"80",
    "main_status"=>"725",
    "vit_status"=>"836",
    "crt_status"=>"531",
    "dir_status"=>"372",
    "det_status"=>"0",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"531",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/21647c1cdd3/"],
    [
    "item_name"=>"エデンモーン・ハンドガン",
    "location"=>"武器",
    "item_level"=>"535",
    "physical_p"=>"134",
    "auto_attack"=>"117.92",
    "attack_interval"=>"2.64",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"機工士",
    "equipable_job_name"=>"mcn",
    "equipable_level"=>"80",
    "main_status"=>"725",
    "vit_status"=>"836",
    "crt_status"=>"531",
    "dir_status"=>"372",
    "det_status"=>"0",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"531",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/23732123d70/"],
    [
    "item_name"=>"エデンモーン・ロッド",
    "location"=>"武器",
    "item_level"=>"535",
    "physical_p"=>"180",
    "auto_attack"=>"146.50",
    "attack_interval"=>"3.28",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"黒魔道士",
    "equipable_job_name"=>"blm",
    "equipable_level"=>"80",
    "main_status"=>"725",
    "vit_status"=>"752",
    "crt_status"=>"531",
    "dir_status"=>"372",
    "det_status"=>"0",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"531",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/26489edc612/"],
    [
    "item_name"=>"エデンモーン・バスタードソード",
    "location"=>"武器",
    "item_level"=>"535",
    "physical_p"=>"134",
    "auto_attack"=>"100.05",
    "attack_interval"=>"2.24",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"ナイト",
    "equipable_job_name"=>"pld",
    "equipable_level"=>"80",
    "main_status"=>"518",
    "vit_status"=>"597",
    "crt_status"=>"379",
    "dir_status"=>"0",
    "det_status"=>"266",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"379",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/26763e1f7d9/"],
    [
    "item_name"=>"エデンモーン・レイピア",
    "location"=>"武器",
    "item_level"=>"535",
    "physical_p"=>"180",
    "auto_attack"=>"153.65",
    "attack_interval"=>"3.44",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"赤魔道士",
    "equipable_job_name"=>"rdm",
    "equipable_level"=>"80",
    "main_status"=>"725",
    "vit_status"=>"752",
    "crt_status"=>"531",
    "dir_status"=>"372",
    "det_status"=>"0",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"531",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/2d422eb651d/"],
    [
    "item_name"=>"エデンモーン・インデックス",
    "location"=>"武器",
    "item_level"=>"535",
    "physical_p"=>"180",
    "auto_attack"=>"139.36",
    "attack_interval"=>"3.12",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"召喚士",
    "equipable_job_name"=>"smn",
    "equipable_level"=>"80",
    "main_status"=>"725",
    "vit_status"=>"752",
    "crt_status"=>"531",
    "dir_status"=>"372",
    "det_status"=>"0",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"531",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/3a456a505a6/"],
    [
    "item_name"=>"クリプトラーカー・プラニスフィアRE",
    "location"=>"武器",
    "item_level"=>"530",
    "physical_p"=>"179",
    "auto_attack"=>"141.86",
    "attack_interval"=>"3.20",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"占星術師",
    "equipable_job_name"=>"ast",
    "equipable_level"=>"80",
    "main_status"=>"723",
    "vit_status"=>"747",
    "crt_status"=>"0",
    "dir_status"=>"0",
    "det_status"=>"526",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"368",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"526",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/4f07cd4d25f/"],
    [
    "item_name"=>"クリプトラーカー・ソードRE",
    "location"=>"武器",
    "item_level"=>"530",
    "physical_p"=>"133",
    "auto_attack"=>"99.30",
    "attack_interval"=>"2.24",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"ナイト",
    "equipable_job_name"=>"pld",
    "equipable_level"=>"80",
    "main_status"=>"516",
    "vit_status"=>"593",
    "crt_status"=>"263",
    "dir_status"=>"0",
    "det_status"=>"0",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"376",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"376",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/64961d42546/"],
    [
    "item_name"=>"クリプトラーカー・ハンドガンRE",
    "location"=>"武器",
    "item_level"=>"530",
    "physical_p"=>"133",
    "auto_attack"=>"117.04",
    "attack_interval"=>"2.64",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"機工士",
    "equipable_job_name"=>"mcn",
    "equipable_level"=>"80",
    "main_status"=>"723",
    "vit_status"=>"830",
    "crt_status"=>"0",
    "dir_status"=>"526",
    "det_status"=>"368",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"526",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/64b81c8d1f0/"],
    [
    "item_name"=>"クリプトラーカー・ウォーコイトRE",
    "location"=>"武器",
    "item_level"=>"530",
    "physical_p"=>"133",
    "auto_attack"=>"138.32",
    "attack_interval"=>"3.12",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"踊り子",
    "equipable_job_name"=>"dnc",
    "equipable_level"=>"80",
    "main_status"=>"723",
    "vit_status"=>"830",
    "crt_status"=>"0",
    "dir_status"=>"368",
    "det_status"=>"526",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"526",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/64ca6606114/"],
    [
    "item_name"=>"エデンモーン・ケーン",
    "location"=>"武器",
    "item_level"=>"535",
    "physical_p"=>"180",
    "auto_attack"=>"153.65",
    "attack_interval"=>"3.44",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"白魔道士",
    "equipable_job_name"=>"whm",
    "equipable_level"=>"80",
    "main_status"=>"725",
    "vit_status"=>"752",
    "crt_status"=>"372",
    "dir_status"=>"0",
    "det_status"=>"531",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"531",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/68b2ab0af94/"],
    [
    "item_name"=>"エデンモーン・ガンブレード",
    "location"=>"武器",
    "item_level"=>"535",
    "physical_p"=>"134",
    "auto_attack"=>"125.06",
    "attack_interval"=>"2.80",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"ガンブレイカー",
    "equipable_job_name"=>"gnb",
    "equipable_level"=>"80",
    "main_status"=>"725",
    "vit_status"=>"836",
    "crt_status"=>"531",
    "dir_status"=>"0",
    "det_status"=>"372",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"531",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/6c903d3817e/"],
    [
    "item_name"=>"エデンモーン・コーデックス",
    "location"=>"武器",
    "item_level"=>"535",
    "physical_p"=>"180",
    "auto_attack"=>"139.36",
    "attack_interval"=>"3.12",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"学者",
    "equipable_job_name"=>"sch",
    "equipable_level"=>"80",
    "main_status"=>"725",
    "vit_status"=>"752",
    "crt_status"=>"372",
    "dir_status"=>"0",
    "det_status"=>"531",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"531",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/6dd91def266/"],
    [
    "item_name"=>"エデンモーン・サインティ",
    "location"=>"武器",
    "item_level"=>"535",
    "physical_p"=>"134",
    "auto_attack"=>"114.34",
    "attack_interval"=>"2.56",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"モンク",
    "equipable_job_name"=>"mnk",
    "equipable_level"=>"80",
    "main_status"=>"725",
    "vit_status"=>"836",
    "crt_status"=>"531",
    "dir_status"=>"372",
    "det_status"=>"0",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"531",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/6e8464c2168/"],
    [
    "item_name"=>"クリプトラーカー・コンポジットボウRE",
    "location"=>"武器",
    "item_level"=>"530",
    "physical_p"=>"133",
    "auto_attack"=>"134.77",
    "attack_interval"=>"3.04",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"吟遊詩人",
    "equipable_job_name"=>"brd",
    "equipable_level"=>"80",
    "main_status"=>"723",
    "vit_status"=>"830",
    "crt_status"=>"0",
    "dir_status"=>"368",
    "det_status"=>"526",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"526",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/870e744acef/"],
    [
    "item_name"=>"クリプトラーカー・クルークRE",
    "location"=>"武器",
    "item_level"=>"530",
    "physical_p"=>"179",
    "auto_attack"=>"152.50",
    "attack_interval"=>"3.44",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"白魔道士",
    "equipable_job_name"=>"whm",
    "equipable_level"=>"80",
    "main_status"=>"723",
    "vit_status"=>"747",
    "crt_status"=>"0",
    "dir_status"=>"0",
    "det_status"=>"526",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"368",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"526",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/8f96a059f15/"],
    [
    "item_name"=>"エデンモーン・ハルバード",
    "location"=>"武器",
    "item_level"=>"535",
    "physical_p"=>"134",
    "auto_attack"=>"125.06",
    "attack_interval"=>"2.80",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"竜騎士",
    "equipable_job_name"=>"drg",
    "equipable_level"=>"80",
    "main_status"=>"725",
    "vit_status"=>"836",
    "crt_status"=>"531",
    "dir_status"=>"372",
    "det_status"=>"0",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"531",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/a22822273b5/"],
    [
    "item_name"=>"クリプトラーカー・スピアRE",
    "location"=>"武器",
    "item_level"=>"530",
    "physical_p"=>"133",
    "auto_attack"=>"124.13",
    "attack_interval"=>"2.80",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"竜騎士",
    "equipable_job_name"=>"drg",
    "equipable_level"=>"80",
    "main_status"=>"723",
    "vit_status"=>"830",
    "crt_status"=>"0",
    "dir_status"=>"526",
    "det_status"=>"368",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"526",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/a25ad415bb5/"],
    [
    "item_name"=>"エデンモーン・ツヴァイハンダー",
    "location"=>"武器",
    "item_level"=>"535",
    "physical_p"=>"134",
    "auto_attack"=>"132.21",
    "attack_interval"=>"2.96",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"暗黒騎士",
    "equipable_job_name"=>"drk",
    "equipable_level"=>"80",
    "main_status"=>"725",
    "vit_status"=>"836",
    "crt_status"=>"531",
    "dir_status"=>"0",
    "det_status"=>"372",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"531",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/a2b70cd719d/"],
    [
    "item_name"=>"クリプトラーカー・トンファーRE",
    "location"=>"武器",
    "item_level"=>"530",
    "physical_p"=>"133",
    "auto_attack"=>"113.49",
    "attack_interval"=>"2.56",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"モンク",
    "equipable_job_name"=>"mnk",
    "equipable_level"=>"80",
    "main_status"=>"723",
    "vit_status"=>"830",
    "crt_status"=>"0",
    "dir_status"=>"368",
    "det_status"=>"526",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"526",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/a7255cabe3b/"],
    [
    "item_name"=>"エデンモーン・キャバルリーボウ",
    "location"=>"武器",
    "item_level"=>"535",
    "physical_p"=>"134",
    "auto_attack"=>"135.78",
    "attack_interval"=>"3.04",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"吟遊詩人",
    "equipable_job_name"=>"brd",
    "equipable_level"=>"80",
    "main_status"=>"725",
    "vit_status"=>"836",
    "crt_status"=>"531",
    "dir_status"=>"372",
    "det_status"=>"0",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"531",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/ba670b8dddd/"],
    [
    "item_name"=>"エデンモーン・サムライブレード",
    "location"=>"武器",
    "item_level"=>"535",
    "physical_p"=>"134",
    "auto_attack"=>"117.92",
    "attack_interval"=>"2.64",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"侍",
    "equipable_job_name"=>"sam",
    "equipable_level"=>"80",
    "main_status"=>"725",
    "vit_status"=>"836",
    "crt_status"=>"531",
    "dir_status"=>"372",
    "det_status"=>"0",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"531",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/bf7dce9a0eb/"],
    [
    "item_name"=>"クリプトラーカー・マナトリガーRE",
    "location"=>"武器",
    "item_level"=>"530",
    "physical_p"=>"133",
    "auto_attack"=>"124.13",
    "attack_interval"=>"2.80",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"ガンブレイカー",
    "equipable_job_name"=>"gnb",
    "equipable_level"=>"80",
    "main_status"=>"723",
    "vit_status"=>"830",
    "crt_status"=>"0",
    "dir_status"=>"0",
    "det_status"=>"526",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"368",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"526",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/c83d97166f2/"],
    [
    "item_name"=>"クリプトラーカー・タックRE",
    "location"=>"武器",
    "item_level"=>"530",
    "physical_p"=>"179",
    "auto_attack"=>"152.50",
    "attack_interval"=>"3.44",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"赤魔道士",
    "equipable_job_name"=>"rdm",
    "equipable_level"=>"80",
    "main_status"=>"723",
    "vit_status"=>"747",
    "crt_status"=>"0",
    "dir_status"=>"368",
    "det_status"=>"526",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"526",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/d2f6079fa13/"],
    [
    "item_name"=>"エデンモーン・トルクエタム",
    "location"=>"武器",
    "item_level"=>"535",
    "physical_p"=>"180",
    "auto_attack"=>"142.93",
    "attack_interval"=>"3.20",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"占星術師",
    "equipable_job_name"=>"ast",
    "equipable_level"=>"80",
    "main_status"=>"725",
    "vit_status"=>"752",
    "crt_status"=>"372",
    "dir_status"=>"0",
    "det_status"=>"531",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"531",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/e0aeae2f336/"],
    [
    "item_name"=>"クリプトラーカー・コーデックスRE",
    "location"=>"武器",
    "item_level"=>"530",
    "physical_p"=>"179",
    "auto_attack"=>"138.32",
    "attack_interval"=>"3.12",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"学者",
    "equipable_job_name"=>"sch",
    "equipable_level"=>"80",
    "main_status"=>"723",
    "vit_status"=>"747",
    "crt_status"=>"0",
    "dir_status"=>"0",
    "det_status"=>"526",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"368",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"526",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/e467b1aa185/"],
    [
    "item_name"=>"クリプトラーカー・サムライブレードRE",
    "location"=>"武器",
    "item_level"=>"530",
    "physical_p"=>"133",
    "auto_attack"=>"117.04",
    "attack_interval"=>"2.64",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"侍",
    "equipable_job_name"=>"sam",
    "equipable_level"=>"80",
    "main_status"=>"723",
    "vit_status"=>"830",
    "crt_status"=>"0",
    "dir_status"=>"526",
    "det_status"=>"368",
    "sks_status"=>"0",
    "sps_status"=>"0",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"526",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/f2aad6acb40/"],
    [
    "item_name"=>"クリプトラーカー・ロッドRE",
    "location"=>"武器",
    "item_level"=>"530",
    "physical_p"=>"179",
    "auto_attack"=>"145.41",
    "attack_interval"=>"3.28",
    "defense"=>"0",
    "m_defense"=>"0",
    "equipable_job"=>"黒魔道士",
    "equipable_job_name"=>"blm",
    "equipable_level"=>"80",
    "main_status"=>"723",
    "vit_status"=>"747",
    "crt_status"=>"0",
    "dir_status"=>"368",
    "det_status"=>"0",
    "sks_status"=>"0",
    "sps_status"=>"526",
    "ten_status"=>"0",
    "pie_status"=>"0",
    "materia01"=>"1",
    "materia02"=>"1",
    "materia03"=>"0",
    "materia04"=>"0",
    "materia05"=>"0",
    "max_status"=>"526",
    "dup"=>"0",
    "image"=>"",
    "url"=>"https://jp.finalfantasyxiv.com/lodestone/playguide/db/item/ff1dd8c7528/"],
    
    
    
                
                
        ];
    
             DB::table('weapons')->insert($param);
    }
}
