<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    // POSTでのアクセスでない場合
    $name = '';
    $email = '';
    $subject = '';
    $message = '';
    $err_msg = '';
    $complete_msg = '';

} else {
    // フォームがサブミットされた場合（POST処理）
    // 入力された値を取得する
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // エラーメッセージ・完了メッセージの用意
    $err_msg = '';
    $complete_msg = '';

    // 空チェック
    if ($name == '' || $email == '' || $subject == '' || $message == '') {
        $err_msg = '全ての項目を入力してください。';
    }

    // エラーなし（全ての項目が入力されている）
    if ($err_msg == '') {
        $to = 'admin@test.com'; // 管理者のメールアドレスなど送信先を指定
        $headers = "From: " . $email . "\r\n";

        // 本文の最後に名前を追加
        $message .= "\r\n\r\n" . $name;

        // メール送信
        mb_send_mail($to, $subject, $message, $headers);

        // 完了メッセージ
        $complete_msg = '送信されました！';

        // 全てクリア
        $name = '';
        $email = '';
        $subject = '';
        $message = '';
    }

}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF=8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>dotline</title>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
                <link href="https://fonts.googleapis.com/earlyaccess/hannari.css" rel="stylesheet">
                <link href="https://fonts.googleapis.com/earlyaccess/kokoro.css" rel="stylesheet">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body id=index>
        <div class="container">
            <header>
                <div class="matome">
                    <p class=yokomoji> 
                    Calligraphy ＋ Design Rika Nagaoka</p>
                    <div class="matome2">
                        <p class=smole_dot>・</p>
                        <p class="left_line"></p>
                    </div>
                </div>
            </header>
            <div class=right_menu>

                <nav class="navigation">
                    <ul class="nav-list">
                      <li><a href="index.html">Home</a></li>
                      <div class="menu_line">
                        <div class="matome3">
                            <p class=smole_dot>・</p>
                            <p class="left_line2"></p>
                        </div>
                      </div>
                      <li><a href="about.html">About</a></li>
                      <li><a href="works.html">WORKS</a></li>
                      <li><a href="contact.html">CONTACT</a></li>
                      <div class="btn_2">
                        <a href="https://instagram.com/dot3line?igshid=1wjcbr2xucd84" 
                        target="_blank" rel="noopener noreferrer"
                        class="insta_btn">
                            <i class="fab fa-instagram fa-2x"></i></a>
                            <a href="https://ja-jp.facebook.com/tikal.nagaoka" 
                            target="_blank" rel="noopener noreferrer"
                            class="face_btn">
                                <i class="fab fa-facebook-square fa-2x"></i></a>
                    </div>
                    </ul>

                  </nav>



                <nav class="menu">
                    <ul>
                    <li><a href="index.html">home</a></li>
                    <li><a href="about.html">about</a></li>
                    <li><a href="works.html">works</a></li>
                    <li><a href="contact.html">contact</a></li>
                    </ul>
                    <div class="btn_2">
                        <a href="https://instagram.com/dot3line?igshid=1wjcbr2xucd84" 
                        target="_blank" rel="noopener noreferrer"
                        class="insta_btn">
                            <i class="fab fa-instagram fa-lg"></i></a>
                            <a href="https://ja-jp.facebook.com/tikal.nagaoka" target="_blank" rel="noopener noreferrer"
                            class="face_btn">
                                <i class="fab fa-facebook-square fa-lg"></i></a>
                        </div>
                </nav>


                </div>
            <div class="content4">
                <!-- <div class="contactimg">
                    <!<img src="img/about_me.png"  width="160px" height="160px" /> -->
                <!-- </div>  -->
                <!-- <div class="mail">
                    <p>メールアドレス</p>
                </div> -->


                    <div class="row">
                        <div class="col-xs-offset-4 col-xs-4">
                            <p>お問い合わせ</p>
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="お名前" value="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="メールアドレス" value="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="件名" value="">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="本文"></textarea>
                                </div>
                                <button type="submit" class="btn4 btn-successs">送信</button>
                            </form>
                        </div>
                    </div>




                <!-- <div class="on"">
                    <p>お仕事のご依頼やご相談などはこちらのメールアドレスから
                    </p>
                </div>
                <div class="box7">
                    <p>　box7.0c0@gmail.com　</p>
                </div>

                <div class="ok">
                    <p>facebook・Instagramの</p>
                </div>
                <div class="message">
                    <p>メッセージからもお気軽にご連絡下さい＾＾</p>
                </div> -->
                <!-- <div class="gakureki">
                    <div class="gakureki1">
                        <p>1995年</p><p>生まれ ６歳から書道を始める</p>
                    </div>
                    <div class="gakureki1">
                        <p>2018年</p><p>安田女子大学文学部書道学科　卒業</p>
                    </div>
                    <div class="gakureki1">
                        <p>2020年</p><p>デジタルハリウッド東京本校UI/UXD専攻　卒業</p>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill1 skill2">
                        <p>スキル</p>
                    </div>
                    <div class="skill1">
                        <p>＜グラフィック＞</p>
                    </div>
                    <div class="skill1">
                        <p>＜WEB・アプリデザイン＞</p>
                    </div>
                    <div class="skill1">
                        <p>＜文字/イラスト＞</p>
                    </div>
                </div>
                </div> -->
            </div>
        </div>
        <!-- <header class="dot">
s            <p class=smole_dot>・</p>
            <p class=yokomoji>Design ＋ Calligraphy Rika Nagaoka</p>
        </header>
            <div class="dotline">
            <img src="img/dotline.png"  width="130px" height="130px" />
        </div> -->
        
         </div>

          </div> 
          <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
          <script src="js/script.js"></script> 
    </body>
</html>