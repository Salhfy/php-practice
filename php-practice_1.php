<?php
// Q1 変数と文字列
$name = '安藤';
$selfintro = '私の名前は「'. $name .'」です。';

var_dump($selfintro);


// Q2 四則演算
$num = 1;
$num = $num * 5 * 4;
echo $num. "\n";
$num/= 2;
echo $num. "\n";


// Q3 日付操作
$datetime = new DateTime('2019-05-23 14:28:22');
$date = '現在時刻は'.$datetime->format('Y年m月d日 H時i分s秒').'です。';
echo $date;


// Q4 条件分岐-1 if文
$device = ['mac','windows','chrome','Unix'];
$device = 'mac';
if($device){
    echo '使用OSは'. $device . 'です。';
}else{
    echo 'どちらでもありません。';
}


// Q5 条件分岐-2 三項演算子
$age = 20;
$message = ($age < 18)? '未成年です。': '成人です。';
echo $message;


// Q6 配列
$prefecture = ['東京都','埼玉県','栃木県','千葉県','群馬県','茨城県','埼玉県'];
$message = $prefecture[2].'と'. $prefecture[3].'は関東地方の都道府県です。';

echo $message;


// Q7 連想配列-1
$prefectures = ['東京'=>'新宿区',
                '神奈川県'=>'横浜市',
                '千葉県'=>'千葉市',
                '埼玉県'=>'さいたま市',
                '栃木'=>'宇都宮市',
                '群馬'=>'前橋市',
                '茨城'=>'水戸'];
foreach ($prefectures as $city) {
    echo $city . "\n";
}


// Q8 連想配列-2
$prefectures = ['東京都'=>'新宿区',
                '神奈川県'=>'横浜市',
                '千葉県'=>'千葉市',
                '埼玉県'=>'さいたま市',
                '栃木県'=>'宇都宮市',
                '群馬県'=>'前橋市',
                '茨城県'=>'水戸'];

if (isset($prefectures['埼玉県'])) {
    echo '埼玉県の県庁所在地は、' . $prefectures['埼玉県'] . 'です。';
} else {
    echo '埼玉県の県庁所在地は不明です。';
}


// Q9 連想配列-3
$prefectures = ['東京都'=>'新宿区',
                '神奈川県'=>'横浜市',
                '千葉県'=>'千葉市',
                '埼玉県'=>'さいたま市',
                '栃木県'=>'宇都宮市',
                '群馬県'=>'前橋市',
                '茨城県'=>'水戸',
                '宮崎県'=>'宮崎',
                '鹿児島県'=>'鹿児島'];
                
if (isset($prefectures['東京','神奈川県','千葉県','埼玉県',]))

// Q10 関数-1
function hello($name){
    echo $name . 'さん、こんにちは。'."\n";
}

hello('金谷');
hello('安藤');


// Q11 関数-2
function calcTaxInPrice($price){
    $taxInPrice = $price * 1.1;
    echo $price . 'の商品の税込価格は' . $taxInPrice . 'です。';
}

calcTaxInPrice(1000);


// Q12 関数とif文
function distinguishNum($number) {
    if($number % 2 === 1){
        echo $number . 'は奇数です。'."\n";
    }else{
        echo $number . 'は偶数です。'."\n";
    }
}

distinguishNum(11);
distinguishNum(24);


// Q13 関数とswitch文
function evaluateGrade($score){
    switch($score){
        case 'A':
            echo '合格です。'. "\n";
            break;
        case 'B':
            echo '合格です。'."\n";
            break;
        case 'C':
            echo '合格ですが追加課題があります。'."\n";
            break;
        case 'D':
            echo '不合格です。'."\n";
            break;
        default:
            echo'判定不明です。講師に問い合わせてください。'."\n";
    }
}

evaluateGrade('B');
evaluateGrade('G');


?>