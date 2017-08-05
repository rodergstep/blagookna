<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")){ //Validate on empty fields
        $to = 'rodergstep@gmail.com'; //Receiver
        $subject = 'Благоокна. Новая заявка';
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Тема: '.$_POST['remark'].'</p>
                        <p>Имя: '.$_POST['name'].'</p>
						<p>Телефон: '.$_POST['phone'].'</p>
                    </body>
                </html>'; //We can use HTML tags
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: Croesus <office@blagookna.ru>\r\n"; //Sender
        mail($to, $subject, $message, $headers);
}
