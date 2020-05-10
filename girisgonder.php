<?php

	if($_POST)
	{
		$emailadresi=$_POST["emailadresi"];
		$parola=$_POST["parola"];

        

		if(!empty($emailadresi) && !empty($parola))
		{
            if(!preg_match('/^([a-z0-9]+([_\.\-]{1}[a-z0-9]+)*){1}([@]){1}([a-z0-9]+([_\-]{1}[a-z0-9]+)*)+(([\.]{1}[a-z]{2,6}){0,3}){1}$/i', $emailadresi)){
                
                header("refresh:5;url=index.html");

                die("E-posta adresi geçerli değil.<br>5 Saniye içinde girişe yönlendirileceksiniz.");
                }
                

			else if ($emailadresi!="b171210068@sakarya.edu" || $parola!="123")
			{
              
                header("refresh:5;url=https:index.html");

                die("Kullanıcı Adınız veya Şifreniz Yanlış.<br>5 Saniye içinde girişe yönlendirileceksiniz.");	
			}
			else
			{
               

                header("refresh:5;url=hakkimda.html");

                die("GİRİŞ BAŞARILI Hoşgeldiniz <br>5 Saniye içinde siteye yönlendirileceksiniz.");
			}
		}
		else//Eğer alanlar boş ise ekranda yazıcak olan kısım.
		{
           
            header("refresh:5;url=index.html");

                die("Boş Alan Bırakmayınız<br>5 Saniye içerisinde başka sayfaya yönlendirileceksiniz.");
		}
	} 
?>
