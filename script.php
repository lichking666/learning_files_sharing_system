<?php
/**
 * Created by PhpStorm.
 * User: wanqianjun
 * Date: 2017/4/15
 * Time: 上午9:58
 */
//$sql = new mysqli('localhost', 'root', 'wqj9705', "aiuyi");
//$school_list = $sql->query("SELECT * FROM School")->fetch_all(1);
//foreach ($school_list as $school) {
//    $province = $sql->query("select P_province from province where P_city like '%$school[S_city]%' LIMIT 1")->fetch_row()[0];
//    if (empty($province)) {
//        $sql->query("update School set S_province = '其他' WHERE School.S_Id = '$school[S_Id]'");
//    } else {
//        $sql->query("update School set S_province = '$province' WHERE aiuyi.School.S_Id = '$school[S_Id]'");
//    }
//}

//$privince_list = [
//    ["北京市" => "北京市"], ["北京市" => "北京市"], ["天津市" => "天津市"], ["河北省" => "石家庄市"], ["河北省" => "唐山市"], ["河北省" => "秦皇岛市"], ["河北省" => "邯郸市"], ["河北省" => "邢台市"], ["河北省" => "保定市"], ["河北省" => "张家口市"], ["河北省" => "承德市"], ["河北省" => "沧州市"], ["河北省" => "廊坊市"], ["河北省" => "衡水市"], ["山西省" => "太原市"], ["山西省" => "大同市"], ["山西省" => "阳泉市"], ["山西省" => "长治市"], ["山西省" => "晋城市"], ["山西省" => "朔州市"], ["山西省" => "忻州市"], ["山西省" => "吕梁市"], ["山西省" => "晋中市"], ["山西省" => "临汾市"], ["山西省" => "运城市"], ["内蒙古" => "呼和浩特市"], ["内蒙古" => "包头市"], ["内蒙古" => "乌海市"], ["内蒙古" => "赤峰市"], ["内蒙古" => "呼伦贝尔市"], ["内蒙古" => "兴安盟"], ["内蒙古" => "通辽市"], ["内蒙古" => "锡林郭勒盟"], ["内蒙古" => "乌兰察布盟"], ["内蒙古" => "伊克昭盟（鄂尔多斯旧称）"], ["内蒙古" => "巴彦淖尔盟"], ["内蒙古" => "阿拉善盟"], ["辽宁省" => "沈阳市"], ["辽宁省" => "大连市"], ["辽宁省" => "鞍山市"], ["辽宁省" => "抚顺市"], ["辽宁省" => "本溪市"], ["辽宁省" => "丹东市"], ["辽宁省" => "锦州市"], ["辽宁省" => "营口市"], ["辽宁省" => "阜新市"], ["辽宁省" => "辽阳市"], ["辽宁省" => "盘锦市"], ["辽宁省" => "铁岭市"], ["辽宁省" => "朝阳市"], ["辽宁省" => "葫芦岛市"], ["吉林省" => "长春市"], ["吉林省" => "吉林市"], ["吉林省" => "四平市"], ["吉林省" => "辽源市"], ["吉林省" => "通化市"], ["吉林省" => "白山市"], ["吉林省" => "松原市"], ["吉林省" => "白城市"], ["吉林省" => "延边朝鲜族自治州"], ["黑龙江省" => "哈尔滨市"], ["黑龙江省" => "齐齐哈尔市"], ["黑龙江省" => "鸡西市"], ["黑龙江省" => "鹤岗市"], ["黑龙江省" => "双鸭山市"], ["黑龙江省" => "大庆市"], ["黑龙江省" => "伊春市"], ["黑龙江省" => "七台河市"], ["黑龙江省" => "牡丹江市"], ["黑龙江省" => "黑河市"], ["黑龙江省" => "绥化市"], ["黑龙江省" => "大兴安岭地区"], ["上海市" => "上海市"], ["江苏省" => "南京市"], ["江苏省" => "无锡市"], ["江苏省" => "徐州市"], ["江苏省" => "常州市"], ["江苏省" => "苏州市"], ["江苏省" => "南通市"], ["江苏省" => "连云港市"], ["江苏省" => "淮安市(原淮阴市）"], ["江苏省" => "盐城市"], ["江苏省" => "扬州市"], ["江苏省" => "镇江市"], ["江苏省" => "泰州市"], ["江苏省" => "宿迁市"], ["浙江省" => "杭州市"], ["浙江省" => "宁波市"], ["浙江省" => "温州市"], ["浙江省" => "嘉兴市"], ["浙江省" => "湖州市"], ["浙江省" => "绍兴市"], ["浙江省" => "金华市"], ["浙江省" => "衢州市"], ["浙江省" => "舟山市"], ["浙江省" => "台州市"], ["浙江省" => "丽水市"], ["安徽省" => "合肥市"], ["安徽省" => "芜湖市"], ["安徽省" => "蚌埠市"], ["安徽省" => "淮南市"], ["安徽省" => "马鞍山市"], ["安徽省" => "淮北市"], ["安徽省" => "铜陵市"], ["安徽省" => "安庆市"], ["安徽省" => "黄山市"], ["安徽省" => "滁州市"], ["安徽省" => "阜阳市"], ["安徽省" => "宿州市"], ["安徽省" => "六安市"], ["安徽省" => "宣城市"], ["安徽省" => "巢湖市"], ["安徽省" => "池州市"], ["福建省" => "福州市"], ["福建省" => "厦门市"], ["福建省" => "宁德市"], ["福建省" => "莆田市"], ["福建省" => "泉州市"], ["福建省" => "漳州市"], ["福建省" => "龙岩"], ["福建省" => "三明市"], ["福建省" => "南平市"], ["江西省" => "南昌市"], ["江西省" => "景德镇市"], ["江西省" => "萍乡市"], ["江西省" => "九江市"], ["江西省" => "新余市"], ["江西省" => "鹰潭市"], ["江西省" => "赣州市"], ["江西省" => "宜春市"], ["江西省" => "上饶市"], ["江西省" => "吉安市"], ["江西省" => "抚州市"], ["山东省" => "济南市"], ["山东省" => "青岛市"], ["山东省" => "淄博市"], ["山东省" => "枣庄市"], ["山东省" => "东营市"], ["山东省" => "烟台市"], ["山东省" => "潍坊市"], ["山东省" => "济宁市"], ["山东省" => "泰安市"], ["山东省" => "威海市"], ["山东省" => "日照市"], ["山东省" => "莱芜市"], ["山东省" => "临沂市"], ["山东省" => "德州市"], ["山东省" => "聊城市"], ["山东省" => "滨州地区"], ["山东省" => "菏泽地区"], ["河南省" => "郑州市"], ["河南省" => "开封市"], ["河南省" => "洛阳市"], ["河南省" => "平顶山市"], ["河南省" => "安阳市"], ["河南省" => "鹤壁市"], ["河南省" => "新乡市"], ["河南省" => "焦作市"], ["河南省" => "濮阳市"], ["河南省" => "许昌市"], ["河南省" => "漯河市"], ["河南省" => "三门峡市"], ["河南省" => "南阳市"], ["河南省" => "商丘市"], ["河南省" => "信阳市"], ["河南省" => "周口市"], ["河南省" => "驻马店地区"], ["河南省" => "省直辖行政单位"], ["湖北省" => "武汉市"], ["湖北省" => "黄石市"], ["湖北省" => "十堰市"], ["湖北省" => "宜昌市"], ["湖北省" => "襄樊市"], ["湖北省" => "鄂州市"], ["湖北省" => "荆门市"], ["湖北省" => "孝感市"], ["湖北省" => "荆州市"], ["湖北省" => "黄冈市"], ["湖北省" => "咸宁市"], ["湖北省" => "随州市"], ["湖北省" => "恩施土家族苗族自治州"], ["湖北省" => "省直辖行政单位"], ["湖南省" => "长沙市"], ["湖南省" => "株洲市"], ["湖南省" => "湘潭市"], ["湖南省" => "衡阳市"], ["湖南省" => "邵阳市"], ["湖南省" => "岳阳市"], ["湖南省" => "常德市"], ["湖南省" => "张家界市"], ["湖南省" => "益阳市"], ["湖南省" => "郴州市"], ["湖南省" => "永州市"], ["湖南省" => "怀化市"], ["湖南省" => "娄底地区"], ["湖南省" => "湘西土家族苗族自治州"], ["广东省" => "广州市"], ["广东省" => "韶关市"], ["广东省" => "深圳市"], ["广东省" => "珠海市"], ["广东省" => "汕头市"], ["广东省" => "佛山市"], ["广东省" => "江门市"], ["广东省" => "湛江市"], ["广东省" => "茂名市"], ["广东省" => "肇庆市"], ["广东省" => "惠州市"], ["广东省" => "梅州市"], ["广东省" => "汕尾市"], ["广东省" => "河源市"], ["广东省" => "阳江市"], ["广东省" => "清远市"], ["广东省" => "东莞市"], ["广东省" => "中山市"], ["广东省" => "潮州市"], ["广东省" => "揭阳市"], ["广东省" => "云浮市"], ["广西省" => "南宁市"], ["广西省" => "柳州市"], ["广西省" => "桂林市"], ["广西省" => "梧州市"], ["广西省" => "北海市"], ["广西省" => "防城港市"], ["广西省" => "钦州市"], ["广西省" => "贵港市"], ["广西省" => "玉林市"], ["广西省" => "崇左市"], ["广西省" => "来宾市"], ["广西省" => "贺州市"], ["广西省" => "百色市"], ["广西省" => "河池市"], ["海南省" => "省直辖行政单位"], ["海南省" => "海口市"], ["海南省" => "三亚市"], ["重庆市" => "重庆市"], ["四川省" => "成都市"], ["四川省" => "自贡市"], ["四川省" => "攀枝花市"], ["四川省" => "泸州市"], ["四川省" => "德阳市"], ["四川省" => "绵阳市"], ["四川省" => "广元市"], ["四川省" => "遂宁市"], ["四川省" => "内江市"], ["四川省" => "乐山市"], ["四川省" => "南充市"], ["四川省" => "宜宾市"], ["四川省" => "广安市"], ["四川省" => "达川地区"], ["四川省" => "雅安地区"], ["四川省" => "阿坝藏族羌族自治州"], ["四川省" => "甘孜藏族自治州"], ["四川省" => "凉山彝族自治州"], ["四川省" => "巴中地区"], ["四川省" => "眉山地区"], ["四川省" => "资阳地区"], ["贵州省" => "贵阳市"], ["贵州省" => "六盘水市"], ["贵州省" => "遵义市"], ["贵州省" => "铜仁地区"], ["贵州省" => "黔西南布依族苗族自治州"], ["贵州省" => "毕节地区"], ["贵州省" => "安顺地区"], ["贵州省" => "黔东南苗族侗族自治州"], ["贵州省" => "黔南布依族苗族自治州"], ["云南省" => "昆明市"], ["云南省" => "曲靖市"], ["云南省" => "玉溪市"], ["云南省" => "昭通地区"], ["云南省" => "楚雄彝族自治州"], ["云南省" => "红河哈尼族彝族自治州"], ["云南省" => "文山壮族苗族自治州"], ["云南省" => "思茅市"], ["云南省" => "西双版纳傣族自治州"], ["云南省" => "大理白族自治州"], ["云南省" => "保山地区"], ["云南省" => "德宏傣族景颇族自治州"], ["云南省" => "丽江地区"], ["云南省" => "怒江傈僳族自治州"], ["云南省" => "迪庆藏族自治州"], ["云南省" => "临沧地区"], ["西藏省" => "拉萨市"], ["西藏省" => "昌都地区"], ["西藏省" => "山南地区"], ["西藏省" => "日喀则地区"], ["西藏省" => "那曲地区"], ["西藏省" => "阿里地区"], ["西藏省" => "林芝地区"], ["陕西省" => "西安市"], ["陕西省" => "铜川市"], ["陕西省" => "宝鸡市"], ["陕西省" => "咸阳市"], ["陕西省" => "渭南市"], ["陕西省" => "延安市"], ["陕西省" => "汉中市"], ["陕西省" => "安康地区"], ["陕西省" => "商洛地区"], ["陕西省" => "榆林地区"], ["甘肃省" => "兰州市"], ["甘肃省" => "嘉峪关市"], ["甘肃省" => "金昌市"], ["甘肃省" => "白银市"], ["甘肃省" => "天水市"], ["甘肃省" => "酒泉地区"], ["甘肃省" => "张掖地区"], ["甘肃省" => "武威地区"], ["甘肃省" => "定西地区"], ["甘肃省" => "陇南地区"], ["甘肃省" => "平凉地区"], ["甘肃省" => "庆阳地区"], ["甘肃省" => "临夏回族自治州"], ["甘肃省" => "甘南藏族自治州"], ["青海省" => "西宁市"], ["青海省" => "海东地区"], ["青海省" => "海北藏族自治州"], ["青海省" => "黄南藏族自治州"], ["青海省" => "海南藏族自治州"], ["青海省" => "果洛藏族自治州"], ["青海省" => "玉树藏族自治州"], ["青海省" => "海西蒙古族藏族自治州"], ["宁夏省" => "银川市"], ["宁夏省" => "石嘴山市"], ["宁夏省" => "吴忠市"], ["宁夏省" => "固原地区"], ["宁夏省" => "中 卫 市"], ["新疆省" => "乌鲁木齐市"], ["新疆省" => "克拉玛依市"], ["新疆省" => "吐鲁番地区"], ["新疆省" => "哈密地区"], ["新疆省" => "昌吉回族自治州"], ["新疆省" => "博尔塔拉蒙古自治州"], ["新疆省" => "巴音郭楞蒙古自治州"], ["新疆省" => "阿克苏地区"], ["新疆省" => "克孜勒苏柯尔克孜自治州"], ["新疆省" => "喀什地区"], ["新疆省" => "和田地区"], ["新疆省" => "伊犁哈萨克自治州"], ["新疆省" => "塔城地区"], ["新疆省" => "阿勒泰地区"], ["新疆省" => "省直辖行政单位"]
//];
//
//foreach ($privince_list as $item) {
//    foreach ($item as $province => $city) {
//        $sql->query("insert into province (P_city, P_province) VALUES ('$city','$province')");
//    }
//}